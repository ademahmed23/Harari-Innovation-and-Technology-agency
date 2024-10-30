<?php

namespace App\Http\Controllers\Admin;

use File;
use Image;
use App\Models\Language;
use App\Models\ErrorPage;
use Illuminate\Http\Request;
use App\Models\ErrorPageLanguage;
use App\Http\Controllers\Controller;

class ErrorPageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:error_page error-page,admin'])->only(['error-page']);

    }

    public function index(Request $request){
        $errorpage = ErrorPage::first();
        return view('admin.error.error_page', compact('errorpage'));
    }

    public function update(Request $request, $id)
    {
        $errorPage = ErrorPage::first();
        $rules = [
            'title'=>'required',
            'button_text'=>'required',
        ];
        $customMessages = [
            'title.required' => trans('admin_validation.Title is required'),
            'button_text.required' => trans('admin_validation.Button text is required')
        ];
        $this->validate($request, $rules,$customMessages);

        $errorPage->title = $request->title;
        $errorPage->button_text = $request->button_text;
        $errorPage->save();

        if($request->image){
            $exist_banner = $errorPage->image;
            $extention = $request->image->getClientOriginalExtension();
            $banner_name = 'error-page-'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $banner_name = 'uploads/website-images/'.$banner_name;
            Image::make($request->image)
                ->save(public_path().'/'.$banner_name);
            $errorPage->image = $banner_name;
            $errorPage->save();
            if($exist_banner){
                if(File::exists(public_path().'/'.$exist_banner))unlink(public_path().'/'.$exist_banner);
            }
        }

        $notification= trans('admin_validation.Updated Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
}
