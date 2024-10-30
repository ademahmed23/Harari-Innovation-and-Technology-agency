<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventPhoto;
use App\Models\EventVideo;
use App\Models\Admin;
use App\Models\User;
use App\Mail\Websitemail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\EventTicket;
use App\Models\Customer;
use Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('frontend.events', compact('events'));
    }

    public function detail($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $event_photos = EventPhoto::where('event_id', $event->id)->get();
        $event_videos = EventVideo::where('event_id', $event->id)->get();
        $recent_events = Event::orderBy('id', 'desc')->take(5)->get();
        return view('frontend.event', compact('event', 'event_photos', 'event_videos', 'recent_events'));
    }

    public function send_message(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $admin_data = User::where('id', '1')->first();
        $admin_email = $admin_data->email;

        $event_data = Event::where('id', $request->event_id)->first();
        $remaining_seat = $event_data->total_seat - $event_data->booked_seat;
        if($event_data->booked_seat + $request->number_of_tickets > $event_data->total_seat){
            return redirect()->back()->with('error', 'Sorry! Only ' . $remaining_seat . ' seats are available.');
        }


        $subject = 'Message from visitor for Event: ' . $event_data->name;
        $message = 'Please click on the below link to reset your password: <br>';
        $message .= '<b>Visitor Information:</b> <br><br>';
        $message .= 'Name: ' . $request->name . '<br>';
        $message .= 'Email: ' . $request->email . '<br>';
        $message .= 'Phone: ' . $request->phone . '<br>';
        $message .= 'Message: ' . $request->message . '<br><br>';
        $message .= '<b>Event Page URL: </b><br>';
        $message .= '<a href="' . url('event/' . $event_data->slug) . '">' . url('event/' . $event_data->slug) . '</a>';

        \Mail::to($admin_email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', 'Message sent successfully');
    }

    public function payment(Request $request)
    {
        if (!Auth::guard('customer')->check()) {
            return redirect()->route('customer_login');
        }


        $request->validate([
            'number_of_tickets' => 'required',
            'payment_method' => 'required',
        ]);

        $event_data = Event::where('id', $request->event_id)->first();

        if($event_data->total_seat > 0) {
            $remaining_seat = $event_data->total_seat - $event_data->booked_seat;
            if($event_data->booked_seat + $request->number_of_tickets > $event_data->total_seat) {
                return redirect()->back()->with('error','Sorry, only '.$remaining_seat.' tickets/seats are available');
            }
        }

        $total_price = $request->number_of_tickets * $request->unit_price;

        if ($request->payment_method == 'paypal') {
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();
            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('event_ticket_paypal_success'),
                    "cancel_url" => route('event_ticket_cancel')
                ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $total_price
                        ]
                    ]
                ]
            ]);
            //dd($response);
            if (isset($response['id']) && $response['id'] != null) {
                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        session()->put('event_id', $request->event_id);
                        session()->put('unit_price', $request->unit_price);
                        session()->put('number_of_tickets', $request->number_of_tickets);
                        session()->put('total_price', $total_price);
                        return redirect()->away($link['href']);
                    }
                }
            } else {
                return redirect()->route('event_ticket_cancel');
            }
        }
    }
    public function paypal_success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        //dd($response);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            // Insert data into database
            $obj = new EventTicket;

            $obj->event_id = session()->get('event_id');
            $obj->user_id = Auth::guard('customer')->user()->id;
            $obj->unit_price = session()->get('unit_price');
            $obj->number_of_tickets = session()->get('number_of_tickets');
            $obj->total_price = session()->get('total_price');
            
            $obj->currency = $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'];

            $obj->payment_id = $response['id'];
            $obj->payment_method = "PayPal";
            $obj->payment_status = $response['status'];
            $obj->save();

            $event_data = Event::where('id', session()->get('event_id'))->first();
            $event_data->booked_seat = $event_data->booked_seat + session()->get('number_of_tickets');
            $event_data->update();

            unset($_SESSION['event_id']);
            unset($_SESSION['unit_price']);
            unset($_SESSION['number_of_tickets']);
            unset($_SESSION['total_price']);

            return redirect()->route('event', $event_data->slug)->with('success', 'Payment completed successfully.');
        } else {
            return redirect()->route('event_ticket_cancel');
        }
    }
    public function paypal_cancel()
    {
        return redirect()->route('home')->with('error', 'Payment cancelled.');
    }
}
