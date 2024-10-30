<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\About;
use App\Models\AppDownloadSection;
use App\Models\Author;
use App\Models\BannerSlider;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Homepage;
use App\Models\BlogComment;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Coupon;
use App\Models\DailyOffer;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\ProductRating;
use App\Models\Service;
use App\Models\Language;
use App\Models\Reservation;
use App\Models\SectionTitle;
use App\Models\Slider;
use App\Models\Subscriber;
use App\Models\Event;
use App\Models\Brand;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Testimonial;
use App\Models\TramsAndCondition;
use App\Models\WhyChooseUs;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\OurFeature;
use App\Models\Vendor;
use Flasher\Prime\Translation\Language as TranslationLanguage;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioVideo;
use App\Models\PortfolioPhoto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Mail;
use App\Models\PageItem;
use function Ramsey\Uuid\v1;

class FrontendController extends Controller
{
    function index(): View
    {
        // $hero = Hero::first();
        $hero = Hero::where('language',getLangauge())->first();
        $page_data = PageItem::where('id',1)->first();
        $service_total = $page_data->service_total;
        $services = Service::orderBy('item_order','asc')->take($service_total)->get();
        $portfolios = Portfolio::orderBy('id','asc')->get();
        // $portfolio_categories = PortfolioCategory::orderBy('id','asc')->get();
        $sectionTitles = $this->getSectionTitles();
        $ourFeatures = OurFeature::where('status', 1)->where('language', getLangauge())->get();
        $languages = Language::all();
        $sliders = Slider::where('status', 1)->where('language', getLangauge())->get();
        $whyChooseUs = WhyChooseUs::where('status', 1)->where('language', getLangauge())->get();
        $categories = Category::where(['show_at_home' => 1, 'status' => 1])->get();
        $category = BlogCategory::where('status',1)->get();
        $dailyOffers = DailyOffer::with('product')->where('status', 1)->take(15)->get();
        $bannerSliders = BannerSlider::where('status', 1)->latest()->take(10)->get();
        $chefs = Chef::where(['show_at_home' => 1, 'status' => 1])->where('language', getLangauge())->get();
        $appSection = AppDownloadSection::first();
        $testimonials = Testimonial::where(['show_at_home' => 1, 'status' => 1])->where('language', getLangauge())->get();
        $counter = Counter::first();
        $features  = Feature::get();
        $events = Event::take(3)->get();
        $latestBlogs = Blog::withCount(['comments' => function ($query) {
            $query->where('status', 1);
        }])->with(['category', 'user'])->where('status', 1)->where('language', getLangauge())->latest()->take(3)->get();

        return view(
            'frontend.home.index',
            compact(
                'sliders',
                'category',
                'page_data',
                'sectionTitles',
                'whyChooseUs',
                'portfolios',
                // 'portfolio_categories',
                'categories',
                'dailyOffers',
                'bannerSliders',
                'chefs',
                'events',
                'hero',
                'features',
                'appSection',
                'testimonials',
                'counter',
                'latestBlogs',
                'ourFeatures',
            )
        );
    }

    function getSectionTitles(): Collection
    {
        $keys = [
            'why_choose_top_title',
            'why_choose_main_title',
            'why_choose_sub_title',
            'daily_offer_top_title',
            'daily_offer_main_title',
            'daily_offer_sub_title',
            'chef_top_title',
            'chef_main_title',
            'chef_sub_title',
            'our_feature_title',
            'testimonial_top_title',
            'testimonial_main_title',
            'testimonial_sub_title',
            'features_top_title',
            'features_main_title',
            'features_sub_title'
        ];

        return SectionTitle::where('language',getLangauge())->whereIn('key', $keys)->pluck('value', 'key');
    }

    // public function vendorPage()
    // {
    //    $vendors = Vendor::where('status',1)->paginate(20);
    //    return view('frontend.pages.vendor', compact('vendors'));
    // }

    // public function vendorProductsPage()
    // {

    //     // $products = Product::where(['status' => 1, 'is_approved' => 1, 'vendor_id' => $id])->orderBy('id', 'DESC')->paginate(12);

    //     // $categories = Category::where(['status' => 1])->get();
    //     // $brands = Brand::where(['status' => 1])->get();
    //     $vendor = Vendor::first();

    //     return view('frontend.pages.adminstration', compact('vendor'));

    // }


    function chef(): View
    {

        $chefs = Chef::where('language', getLangauge())->where(['status' => 1])->paginate(12);
        return view('frontend.pages.chefs', compact('chefs'));
    }

    function testimonial(): View
    {
        // $languages = Language::all();
        $testimonials = Testimonial::where(['status' => 1, 'language' => getLangauge()])->paginate(9);
        return view('frontend.pages.testimonial', compact('testimonials'));
    }

    function about(): View
    {
        $keys = [
            'why_choose_top_title',
            'why_choose_main_title',
            'why_choose_sub_title',
            'chef_top_title',
            'chef_main_title',
            'chef_sub_title',
            'testimonial_top_title',
            'testimonial_main_title',
            'testimonial_sub_title',
            'features_top_title',
            'features_main_title',
            'features_sub_title'
        ];
        $ourFeatures = OurFeature::where('status', 1)->where('language', getLangauge())->get();
        $sectionTitles = SectionTitle::where('language', getLangauge())->whereIn('key', $keys)->pluck('value', 'key');;
        $about = About::where('language', getLangauge())->first();
        $whyChooseUs = WhyChooseUs::where('status', 1)->where('language', getLangauge())->get();
        $chefs = Chef::where(['show_at_home' => 1, 'status' => 1])->where('language', getLangauge())->get();
        $counter = Counter::first();
        $author = Author::where('language',getLangauge())->first();
        $testimonials = Testimonial::where('language', getLangauge())->where(['show_at_home' => 1, 'status' => 1])->get();
         $homepage = Homepage::where('language',getLangauge())->get();
        $homepage = Homepage::with('homelangfrontend')->first();

//start

// $why_choose_visibility = false;
// $why_choose_control = $control->where('id', 10)->first();
// if($why_choose_control->status == 1){
//     $why_choose_visibility = true;
// }
$why_choose_us = (object) array(
    // 'visibility' => $why_choose_visibility,
    'title1' => $homepage->homelangfrontend->why_choose_title1,
    'title2' => $homepage->homelangfrontend->why_choose_title2,
    'item_icon1' => $homepage->why_choose_home3_item1_icon,
    'item_icon2' => $homepage->why_choose_home3_item2_icon,
    'item_icon3' => $homepage->why_choose_home3_item3_icon,
    'item_title1' => $homepage->homelangfrontend->why_choose_home3_item1_title,
    'item_title2' => $homepage->homelangfrontend->why_choose_home3_item2_title,
    'item_title3' => $homepage->homelangfrontend->why_choose_home3_item3_title,
    'item_description1' => $homepage->homelangfrontend->why_choose_home3_item1_desc,
    'item_description2' => $homepage->homelangfrontend->why_choose_home3_item2_desc,
    'item_description3' => $homepage->homelangfrontend->why_choose_home3_item3_desc,

);
        // end why choose us

        return view('frontend.pages.about', compact('about', 'author','homepage', 'why_choose_us', 'ourFeatures', 'whyChooseUs',  'sectionTitles', 'chefs', 'counter', 'testimonials'));
    }

    function privacyPolicy(): View
    {
        $privacyPolicy = PrivacyPolicy::where('language',getLangauge())->first();
        return view('frontend.pages.privacy-policy', compact('privacyPolicy'));
    }

    function tramsAndConditions(): View
    {
        $tramsAndConditions = TramsAndCondition::first();
        return view('frontend.pages.trams-and-condition', compact('tramsAndConditions'));
    }

    function contact(): View
    {
        $contact = Contact::where('language', getLangauge())->first();

        return view('frontend.pages.contact', compact('contact'));
    }

    function sendContactMessage(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'max:255'],
            'message' => ['required', 'max: 1000']
        ]);

        Mail::send(new ContactMail($request->name, $request->email, $request->subject, $request->message));

        return response(['status' => 'success', 'message' => 'Message Sent Successfully!']);
    }

    public function PortfolioDetails($id){

        $portfolio = Portfolio::findOrFail($id);
        return view('frontend.pages.protfolio_details',compact('portfolio'));
     } // End Method


     public function HomePortfolio(){

      $portfolio = Portfolio::where('language', getLangauge())->latest()->get();
      return view('frontend.pages.portfolio',compact('portfolio'));
     } // End Method


    function blog(Request $request): View
    {
        $blogs = Blog::withCount(['comments' => function ($query) {
            $query->where(['status' => 1]);
        }])->with(['category', 'user'])->where('status', 1)->where(['language' => getLangauge()]);

        if ($request->has('search') && $request->filled('search')) {
            $blogs->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->has('category') && $request->filled('category')) {
            $blogs->whereHas('category', function ($query) use ($request) {
                $query->where('slug', $request->category);
            });
        }

        $blogs = $blogs->latest()->paginate(9);
        $categories = BlogCategory::where(['status' => 1])->where(['language' => getLangauge()])->get();
        return view('frontend.pages.blog', compact('blogs', 'categories'));
    }

    function blogDetails(string $slug): View
    {

        $blog = Blog::with(['user'])->withCount('comments')->where('slug', $slug)->where('status', 1)->firstOrFail();
        $comments = $blog->comments()->where('status', 1)->orderBy('id', 'DESC')->paginate(20);

        $latestBlogs = Blog::select('id', 'title', 'slug', 'created_at', 'image')
            ->where('status', 1)
            ->where('id', '!=', $blog->id)
            ->where('language',getLangauge())
            ->latest()->take(5)->get();
        $categories = BlogCategory::withCount(['blogs' => function ($query) {
            $query->where('status', 1);
        }])->where('status', 1)->where(['language' => getLangauge()])->get();

        $nextBlog = Blog::select('id', 'title', 'slug', 'image')->where('id', '>', $blog->id)->where('language',getLangauge())->orderBy('id', 'ASC')->first();
        $previousBlog = Blog::select('id', 'title', 'slug', 'image')->where('id', '<', $blog->id)->where('language',getLangauge())->orderBy('id', 'DESC')->first();


        return view('frontend.pages.blog-details', compact('blog', 'latestBlogs', 'categories', 'nextBlog', 'previousBlog', 'comments'));
    }

    function blogCommentStore(Request $request, string $blog_id): RedirectResponse
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            toastr()->error('You must be logged in to comment.');
            return redirect()->back();
        }

        // Validate the request
        $request->validate([
            'comment' => ['required', 'max:500']
        ]);

        // Check if the blog exists
        Blog::findOrFail($blog_id);

        // Create a new comment
        $comment = new BlogComment();
        $comment->blog_id = $blog_id;
        $comment->user_id = Auth::id(); // Get the authenticated user's id
        $comment->comment = $request->comment;
        $comment->save();

        toastr()->success('Comment submitted successfully and waiting to approve.');
        return redirect()->back();
    }

    function reservation(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'max:50'],
            'date' => ['required', 'date'],
            'time' => ['required'],
            'persons' => ['required', 'numeric']
        ]);

        if (!Auth::check()) {
            throw ValidationException::withMessages(['Please Login to Request Reservation']);
        }

        $reservation = new Reservation();
        $reservation->reservation_id = rand(0, 500000);
        $reservation->user_id = auth()->user()->id;
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->persons = $request->persons;
        $reservation->status = 'pending';
        $reservation->save();

        return response(['status' => 'success', 'message' => 'Request send successfully']);
    }

    function subscribeNewsletter(Request $request): Response
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255', 'unique:subscribers,email']
        ], ['email.unique' => 'Email is already subscribed!']);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        return response(['status' => 'success', 'message' => 'Subscribed Successfully!']);
    }

    function products(Request $request): View
    {

        $products = Product::where(['status' => 1])->orderBy('id', 'DESC');

        if ($request->has('search') && $request->filled('search')) {
            $products->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('long_description', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->has('category') && $request->filled('category')) {
            $products->whereHas('category', function ($query) use ($request) {
                $query->where('slug', $request->category);
            });
        }

        $products = $products->withAvg('reviews', 'rating')->withCount('reviews')->paginate(12);

        $categories = Category::where('status', 1)->get();

        return view('frontend.pages.product', compact('products', 'categories'));
    }

    function showProduct(string $slug): View
    {
        $product = Product::with(['productImages', 'productSizes', 'productOptions'])->where(['slug' => $slug, 'status' => 1])
            ->withAvg('reviews', 'rating')
            ->withCount('reviews')
            ->firstOrFail();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)->take(8)
            ->withAvg('reviews', 'rating')
            ->withCount('reviews')
            ->latest()->get();
        $reviews = ProductRating::where(['product_id' => $product->id, 'status' => 1])->paginate(30);
        return view('frontend.pages.product-view', compact('product', 'relatedProducts', 'reviews'));
    }

    function loadProductModal($productId)
    {
        $product = Product::with(['productSizes', 'productOptions'])->findOrFail($productId);

        return view('frontend.layouts.ajax-files.product-popup-modal', compact('product'))->render();
    }

    function productReviewStore(Request $request)
    {
        $request->validate([
            'rating' => ['required', 'min:1', 'max:5', 'integer'],
            'review' => ['required', 'max:500'],
            'product_id' => ['required', 'integer']
        ]);

        $user = Auth::user();

        $hasPurchased = $user->orders()->whereHas('orderItems', function ($query) use ($request) {
            $query->where('product_id', $request->product_id);
        })
            ->where('order_status', 'delivered')
            ->get();


        if (count($hasPurchased) == 0) {
            throw ValidationException::withMessages(['Please Buy The Product Before Submit a Review!']);
        }

        $alreadyReviewed = ProductRating::where(['user_id' => $user->id, 'product_id' => $request->product_id])->exists();
        if ($alreadyReviewed) {
            throw ValidationException::withMessages(['You already reviewed this product']);
        }

        $review = new ProductRating();
        $review->user_id = $user->id;
        $review->product_id = $request->product_id;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->status = 0;
        $review->save();

        toastr()->success('Review added successfully and waiting to approve');

        return redirect()->back();
    }

    function applyCoupon(Request $request)
    {

        $subtotal = $request->subtotal;
        $code = $request->code;

        $coupon = Coupon::where('code', $code)->first();

        if (!$coupon) {
            return response(['message' => 'Invalid Coupon Code.'], 422);
        }
        if ($coupon->quantity <= 0) {
            return response(['message' => 'Coupon has been fully redeemed.'], 422);
        }
        if ($coupon->expire_date < now()) {
            return response(['message' => 'Coupon hs expired.'], 422);
        }

        if ($coupon->discount_type === 'percent') {
            $discount = number_format($subtotal * ($coupon->discount / 100), 2);
        } elseif ($coupon->discount_type === 'amount') {
            $discount = number_format($coupon->discount, 2);
        }

        $finalTotal = $subtotal - $discount;

        session()->put('coupon', ['code' => $code, 'discount' => $discount]);

        return response(['message' => 'Coupon Applied Successfully.', 'discount' => $discount, 'finalTotal' => $finalTotal, 'coupon_code' => $code]);
    }

    function destroyCoupon()
    {
        try {
            session()->forget('coupon');
            return response(['message' => 'Coupon Removed!', 'grand_cart_total' => grandCartTotal()]);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something went wrong']);
        }
    }
}
