<?php
namespace App\Http\Controllers\Admin;
use App\Models\Language;
use App\Http\Controllers\Controller;
use App\Models\Homepage;
use Request;
use App\Models\Choose;
class ChooseController extends Controller{
    public function choose(Request $request){
        $homepage = Homepage::with('language')->first();
        $languages = Language::all();
        $homepageLanguage = Language::where(['status' => 1])->first();
        $why_choose_us = (object) array(
            'title1' => $homepageLanguage->why_choose_title1,
            // '/title2' => $homepageLanguage->why_choose_title2,
            'item1_icon' => $homepage->why_choose_item1_icon,
            'item2_icon' => $homepage->why_choose_item2_icon,
            'item3_icon' => $homepage->why_choose_item3_icon,
            'item1_title' => $homepageLanguage->why_choose_item1_title,
            'item2_title' => $homepageLanguage->why_choose_item2_title,
            'item3_title' => $homepageLanguage->why_choose_item3_title,
            // 'home3_item1_icon' => $homepage->why_choose_home3_item1_icon,
            // 'home3_item2_icon' => $homepage->why_choose_home3_item2_icon,
            // 'home3_item3_icon' => $homepage->why_choose_home3_item3_icon,
            // 'home3_item1_title' => $homepageLanguage->why_choose_home3_item1_title,
            // 'home3_item2_desc' => $homepageLanguage->why_choose_home3_item2_desc,
            // 'home3_item3_title' => $homepageLanguage->why_choose_home3_item3_title,
            // 'home3_item1_desc' => $homepageLanguage->why_choose_home3_item1_desc,
            // 'home3_item2_title' => $homepageLanguage->why_choose_home3_item2_title,
            // 'home3_item3_desc' => $homepageLanguage->why_choose_home3_item3_desc,
            // 'home2_background' => $homepage->why_choose_home2_background,
        );

        return view('admin.choose', compact('why_choose_us', 'languages'));
    }

    // public function why_choose_us_update(Request $request){
    //     $setting = Setting::first();
    //     $home2= false;
    //     if($setting->selected_theme == 0 || $setting->selected_theme == 2){
    //         $home2 = true;
    //     }
    //     $rules = [
    //         'title1' => 'required',
    //         'title2' => 'required',
    //         'item1_title' => $home2 ? 'required':'',
    //         'item2_title' => $home2 ? 'required':'',
    //         'item3_title' => $home2 ? 'required':'',
    //         'home3_item1_title' => 'required',
    //         'home3_item2_desc' => 'required',
    //         'home3_item3_title' => 'required',
    //         'home3_item1_desc' => 'required',
    //         'home3_item2_title' => 'required',
    //         'home3_item3_desc' => 'required',
    //     ];
    //     $customMessages = [
    //         'title1.required' => trans('admin_validation.Title is required'),
    //         'title2.required' => trans('admin_validation.Title is required'),
    //         'item1_title.required' => trans('admin_validation.Title is required'),
    //         'item2_title.required' => trans('admin_validation.Title is required'),
    //         'item3_title.required' => trans('admin_validation.Title is required'),
    //         'home3_item1_title.required' => trans('admin_validation.Title is required'),
    //         'home3_item2_desc.required' => trans('admin_validation.Description is required'),
    //         'home3_item3_title.required' => trans('admin_validation.Title is required'),
    //         'home3_item1_desc.required' => trans('admin_validation.Description is required'),
    //         'home3_item2_title.required' => trans('admin_validation.Title is required'),
    //         'home3_item3_desc.required' => trans('admin_validation.Description is required'),
    //     ];
    //     $this->validate($request, $rules,$customMessages);

    //     $homepage = Homepage::with('homelangadmin')->first();
    //     $homepageLanguage = HomepageLanguage::where(['home_id' => $homepage->id, 'lang_code' => $request->lang_code])->first();

    //     if($request->home2_background){
    //         $existing_image = $homepage->why_choose_home2_background;
    //         $extention = $request->home2_background->getClientOriginalExtension();
    //         $image_name = 'why-choose-us'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
    //         $slider_image = 'uploads/website-images/'.$image_name;
    //         Image::make($request->home2_background)
    //             ->save(public_path().'/'.$image_name);
    //         $homepage->why_choose_home2_background = $image_name;
    //         $homepage->save();
    //         if($existing_image){
    //             if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
    //         }
    //     }

    //     if($request->item1_icon){
    //         $existing_image = $homepage->why_choose_item1_icon;
    //         $extention = $request->item1_icon->getClientOriginalExtension();
    //         $image_name = 'why-choose-us'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
    //         $slider_image = 'uploads/website-images/'.$image_name;
    //         Image::make($request->item1_icon)
    //             ->save(public_path().'/'.$image_name);
    //         $homepage->why_choose_item1_icon = $image_name;
    //         $homepage->save();
    //         if($existing_image){
    //             if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
    //         }
    //     }

    //     if($request->item2_icon){
    //         $existing_image = $homepage->why_choose_item2_icon;
    //         $extention = $request->item2_icon->getClientOriginalExtension();
    //         $image_name = 'why-choose-us'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
    //         $slider_image = 'uploads/website-images/'.$image_name;
    //         Image::make($request->item2_icon)
    //             ->save(public_path().'/'.$image_name);
    //         $homepage->why_choose_item2_icon = $image_name;
    //         $homepage->save();
    //         if($existing_image){
    //             if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
    //         }
    //     }

    //     if($request->item3_icon){
    //         $existing_image = $homepage->why_choose_item3_icon;
    //         $extention = $request->item3_icon->getClientOriginalExtension();
    //         $image_name = 'why-choose-us'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
    //         $slider_image = 'uploads/website-images/'.$image_name;
    //         Image::make($request->item3_icon)
    //             ->save(public_path().'/'.$image_name);
    //         $homepage->why_choose_item3_icon = $image_name;
    //         $homepage->save();
    //         if($existing_image){
    //             if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
    //         }
    //     }

    //     if($request->home3_item1_icon){
    //         $existing_image = $homepage->why_choose_home3_item1_icon;
    //         $extention = $request->home3_item1_icon->getClientOriginalExtension();
    //         $image_name = 'why-choose-us'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
    //         $slider_image = 'uploads/website-images/'.$image_name;
    //         Image::make($request->home3_item1_icon)
    //             ->save(public_path().'/'.$image_name);
    //         $homepage->why_choose_home3_item1_icon = $image_name;
    //         $homepage->save();
    //         if($existing_image){
    //             if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
    //         }
    //     }

    //     if($request->home3_item2_icon){
    //         $existing_image = $homepage->why_choose_home3_item2_icon;
    //         $extention = $request->home3_item2_icon->getClientOriginalExtension();
    //         $image_name = 'why-choose-us'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
    //         $slider_image = 'uploads/website-images/'.$image_name;
    //         Image::make($request->home3_item2_icon)
    //             ->save(public_path().'/'.$image_name);
    //         $homepage->why_choose_home3_item2_icon = $image_name;
    //         $homepage->save();
    //         if($existing_image){
    //             if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
    //         }
    //     }

    //     if($request->home3_item3_icon){
    //         $existing_image = $homepage->why_choose_home3_item3_icon;
    //         $extention = $request->home3_item3_icon->getClientOriginalExtension();
    //         $image_name = 'why-choose-us'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
    //         $slider_image = 'uploads/website-images/'.$image_name;
    //         Image::make($request->home3_item3_icon)
    //             ->save(public_path().'/'.$image_name);
    //         $homepage->why_choose_home3_item3_icon = $image_name;
    //         $homepage->save();
    //         if($existing_image){
    //             if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
    //         }
    //     }

    //     $homepageLanguage->why_choose_title1 = $request->title1;
    //     $homepageLanguage->why_choose_title2 = $request->title2;
    //     if($home2){
    //         $homepageLanguage->why_choose_item1_title = $request->item1_title;
    //         $homepageLanguage->why_choose_item2_title = $request->item2_title;
    //         $homepageLanguage->why_choose_item3_title = $request->item3_title;
    //     }
    //     $homepageLanguage->why_choose_home3_item1_title = $request->home3_item1_title;
    //     $homepageLanguage->why_choose_home3_item2_desc = $request->home3_item2_desc;
    //     $homepageLanguage->why_choose_home3_item3_title = $request->home3_item3_title;
    //     $homepageLanguage->why_choose_home3_item1_desc = $request->home3_item1_desc;
    //     $homepageLanguage->why_choose_home3_item2_title = $request->home3_item2_title;
    //     $homepageLanguage->why_choose_home3_item3_desc = $request->home3_item3_desc;
    //     $homepageLanguage->save();

    //     $notification= trans('admin_validation.Updated Successfully');
    //     $notification=array('messege'=>$notification,'alert-type'=>'success');
    //     return redirect()->back()->with($notification);
    // }

}
