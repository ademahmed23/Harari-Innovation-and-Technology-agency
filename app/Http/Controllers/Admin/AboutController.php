<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutUpdateRequest;
use App\Http\Requests\Admin\AboutCreateRequest;
use App\Models\About;
use App\Models\Admin;
use App\Models\Language;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    use FileUploadTrait;

    function index(): View
    {
        $about = About::first();
        // $author = Author::first();
        return view('admin.about.index', compact('about'));
    }
    function create(Request $request): View
    {
        $languages = Language::all();
        $about = About::where('language', $request->lang)->get();
        return view('admin.about.create', compact('languages','about'));

    }


    function store(AboutCreateRequest $request){

    }

    function update(AboutUpdateRequest $request): RedirectResponse
    {
        $imagePath = $this->uploadImage($request, 'image', $request->old_image);

        About::updateOrCreate(
            ['id' => 1],
            [
                'image' => !empty($imagePath) ? $imagePath : $request->old_image,
                'title' => $request->title,
                'main_title' => $request->main_title,
                'description' => $request->description,
                'video_link' => $request->video_link
            ]
        );

        toastr()->success('Created Successfully');

        return redirect()->back();
    }

    // function author(Request $request){
    //  $languages = Language::all();
    //     return view('admin.author.index',compact('author','languages'));
    // }



}
