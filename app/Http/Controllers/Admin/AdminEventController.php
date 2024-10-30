<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventPhoto;
use App\Models\EventVideo;
use App\Models\EventTicket;
use App\Models\User;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function create_submit(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:events'],
            'slug' => ['required', 'alpha_dash', 'unique:events'],
            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'price' => ['required', 'numeric', 'min:0'],
            'short_description' => 'required',
            'description' => 'required',
            'featured_photo' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->total_seat != '') {
            $request->validate([
                'total_seat' => ['numeric', 'min:1'],
            ]);
        }

        $obj = new Event();
        $obj->name = $request->name;
        $obj->slug = strtolower($request->slug);;
        $obj->location = $request->location;
        $obj->date = $request->date;
        $obj->time = $request->time;
        $obj->price = $request->price;
        $obj->map = $request->map;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->total_seat = $request->total_seat;
        $final_name = 'event_featured_photo' . time() . '.' . $request->featured_photo->extension();
        $request->featured_photo->move(public_path('uploads'), $final_name);
        $obj->featured_photo = $final_name;
        $obj->save();

        return redirect()->route('admin.admin_event_index')->with('success', 'Event created successfully');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.event.edit', compact('event'));
    }

    public function edit_submit(Request $request, $id)
    {
        $request->validate([
            
            'name' => ['required', 'unique:events,name,' . $id],
            'slug' => ['required', 'alpha_dash', 'unique:events,slug,' . $id],

            'location' => 'required',
            'date' => 'required',
            'time' => 'required',
            'price' => ['required', 'numeric', 'min:0'],
            'short_description' => 'required',
            'description' => 'required',


        ]);

        if ($request->total_seat != '') {
            $request->validate([
                'total_seat' => ['numeric', 'min:1'],
            ]);
        }

        $obj = Event::findOrFail($id);

        if ($request->featured_photo != null) {
            $request->validate([
                'featured_photo' => 'required|image|mimes:jpeg,png,jpg',
            ]);
            unlink(public_path('uploads/' . $obj->featured_photo));

            $final_name = 'event_featured_photo' . time() . '.' . $request->featured_photo->extension();
            $request->featured_photo->move(public_path('uploads'), $final_name);
            $obj->featured_photo = $final_name;
        }

        $obj->name = $request->name;
        $obj->slug = strtolower($request->slug);;
        $obj->location = $request->location;
        $obj->date = $request->date;
        $obj->time = $request->time;
        $obj->price = $request->price;
        // $obj->map = $request->map;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->total_seat = $request->total_seat;
        $obj->update();

        return redirect()->back()->with('success', 'event updated successfully');
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        unlink(public_path('uploads/' . $event->featured_photo));
        $event->delete();
        return redirect()->back()->with('success', 'event deleted successfully');
    }

    public function photo($id)
    {
        $event_single = Event::findOrFail($id);
        $event_photos = EventPhoto::where('event_id', $id)->get();
        return view('admin.event.photo', compact('event_single', 'event_photos'));
    }


    public function photo_submit(Request $request, $id)
    {
        $request->validate([
            'event_id' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $obj = new EventPhoto();
        $obj->event_id = $id;
        $final_name = 'event_photo' . time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $obj->photo = $final_name;
        $obj->save();

        return redirect()->back()->with('success', 'Event photo added successfully');
    }

    public function photo_delete(Request $request, $id)
    {
    

        $event_photo = EventPhoto::findOrFail($id);
        unlink(public_path('uploads/' . $event_photo->photo));
        $event_photo->delete();
        return redirect()->back()->with('success', 'Event photo deleted successfully');
    }

    public function video($id)
    {
        $event_single = Event::findOrFail($id);
        $event_videos = EventVideo::where('event_id', $id)->get();
        return view('admin.event.video', compact('event_single', 'event_videos'));
    }

    public function video_submit(Request $request, $id)
    {
        $request->validate([
            'event_id' => 'required',
            'youtube_video_link' => 'required',
        ]);

        $obj = new EventVideo();
        $obj->event_id = $id;
        $obj->youtube_video_link = $request->youtube_video_link;
        $obj->save();

        return redirect()->back()->with('success', 'Event video added successfully');
    }

    public function video_delete($id)
    {
        $event_video = EventVideo::findOrFail($id);
        $event_video->delete();
        return redirect()->back()->with('success', 'Event video deleted successfully');
    }

    public function tickets($id)
    {
        $event_single = Event::findOrFail($id);
        $event_tickets = EventTicket::where('event_id', $id)->where('payment_status', 'COMPLETED')->get();
        return view('admin.event.tickets', compact('event_single', 'event_tickets'));
    }

    public function ticket_invoice($id)
    {
        $ticket_data = EventTicket::findOrFail($id);
        $user_data = User::findOrFail($ticket_data->user_id);
        return view('admin.event.invoice', compact('ticket_data', 'user_data'));
    }
}
