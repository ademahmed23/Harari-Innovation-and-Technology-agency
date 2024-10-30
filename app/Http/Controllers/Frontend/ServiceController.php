<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\PageItem;

class ServiceController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        $services = Service::orderBy('item_order','asc')->where('language', getLangauge())->paginate(9);
        $page_data = PageItem::where('id',1)->first();
        return view('frontend.services', compact('services','page_data'));
    }

    public function detail($slug)
    {
        $services = Service::orderBy('item_order','asc')->get();
        $service_detail = Service::where('slug',$slug)->first();
        return view('frontend.service_detail', compact('service_detail','services'));
    }
}
