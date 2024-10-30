<?php

namespace App\Http\Controllers\Admin;

use File;
use Illuminate\Validation\Rules\ImageFile;
use App\Models\Setting;
use App\Models\Language;
use App\Models\SeoSetting;
use App\Models\BannerImage;
use Illuminate\Http\Request;
use App\Models\SectionContent;
use App\Models\SectionControl;
use App\Models\SettingLanguage;
use App\Models\MaintainanceText;
use App\Http\Controllers\Controller;
use App\Models\SectionContentLanguage;
use Image;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function maintainanceMode()
    {
        $maintainance = MaintainanceText::first();
        return view('admin.maintenance.maintainance_mode', compact('maintainance'));
    }

    public function maintainanceModeUpdate(Request $request)
    {
        $rules = [
            'description'=> $request->maintainance_mode ? 'required' : ''
        ];
        $customMessages = [
            'description.required' => trans('admin_validation.Description is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        $maintainance = MaintainanceText::first();
        if($request->image){
            $old_image=$maintainance->image;
            $image=$request->image;
            $ext=$image->getClientOriginalExtension();
            $image_name= 'maintainance-mode-'.date('Y-m-d-h-i-s-').rand(999,9999).'.'.$ext;
            $image_name='uploads/website-images/'.$image_name;
            Image::make($image)
                ->save(public_path().'/'.$image_name);
            $maintainance->image=$image_name;
            $maintainance->save();
            if($old_image){
                if(File::exists(public_path().'/'.$old_image))unlink(public_path().'/'.$old_image);
            }
        }
        $maintainance->status = $request->maintainance_mode ? 1 : 0;
        $maintainance->description = $request->description;
        $maintainance->save();

        $notification= trans('admin_validation.Updated Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }}
