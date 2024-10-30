<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeroUpdateRequest;
use App\Models\Hero;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HeroController extends Controller
{
    use FileUploadTrait;

    // function __construct()
    // {
    //     $this->middleware(['permission:section index'])->only(['index']);
    //     $this->middleware(['permission:section update'])->only(['update']);
    // }

    function index() : View {
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
    }

    function update(HeroUpdateRequest $request) : RedirectResponse {

        $imagePath = $this->uploadImage($request, 'background', $request->old_background);

        Hero::updateOrCreate(
            ['id' => 1],
            [
                'background' => !empty($imagePath) ? $imagePath : $request->old_background,
                'title' => $request->title,
                'sub_title' => $request->sub_title
            ]
        );

        toastr()->success('Updated Successfully');

        return redirect()->back();
    }
}
