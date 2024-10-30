<?php

namespace App\Http\Controllers\Admin;

use Str;
use File;
use Image;
use App\Models\OurTeam;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\OurTeamLanguage;
use App\Http\Controllers\Controller;

class TeamController extends Controller
 {
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $teams = OurTeam::without('teamlangfrontend')->get();

        return view('admin.team.team',compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create_team');
    }


    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
            'status' => 'required',
        ];
        $customMessages = [
            'name.required' => trans('admin_validation.Name is required'),
            'designation.required' => trans('admin_validation.Designation is required'),
            'image.required' => trans('admin_validation.Image is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        $team = new OurTeam();

        if($request->image){
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->name).date('-Ymdhis').'.'.$extention;
            $image_name = 'uploads/custom-images/'.$image_name;
            Image::make($request->image)
                ->save(public_path().'/'.$image_name);
        }


        $team->image = $image_name;
        $team->status = $request->status;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->save();

        $languages = Language::get();
        foreach($languages as $language){
            $team_language = new OurTeamLanguage();
            $team_language->team_id = $team->id;
            $team_language->lang_code = $language->lang_code;
            $team_language->name = $request->name;
            $team_language->designation = $request->designation;
            $team_language->save();
        }

        $notification = trans('admin_validation.Created Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.our-team.index')->with($notification);
    }


    public function edit(Request $request, $id)
    {
        $team = OurTeam::find($id);
        $languages = Language::get();
        $team_language = OurTeamLanguage::where(['team_id' => $team->id, 'lang_code' => $request->lang_code])->first();
        return view('admin.team.edit_team',compact('team', 'languages', 'team_language'));
    }


    public function update(Request $request, $id)
    {
        $team = OurTeam::find($id);
        $team_language = OurTeamLanguage::where(['team_id' => $team->id, 'lang_code' => $request->lang_code])->first();

        $rules = [
            'name' => 'required',
            'designation' => 'required',
            'status' => session()->get('admin_lang') == $request->lang_code ? 'required':'',
        ];
        $customMessages = [
            'name.required' => trans('admin_validation.Name is required'),
            'designation.required' => trans('admin_validation.Designation is required')
        ];
        $this->validate($request, $rules,$customMessages);

        if($request->image){
            $existing_image = $team->image;
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->name).date('Ymdhis').'.'.$extention;
            $image_name = 'uploads/custom-images/'.$image_name;
            Image::make($request->image)
                    ->save(public_path().'/'.$image_name);
            $team->image= $image_name;
            $team->save();
            if($existing_image){
                if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
            }
        }


        if(session()->get('admin_lang') == $request->lang_code){
            $team->status = $request->status;
        }

        if($request->facebook){
            $team->facebook = $request->facebook;
        }

        if($request->twitter){
            $team->twitter = $request->twitter;
        }

        if($request->linkedin){
            $team->linkedin = $request->linkedin;
        }

        $team->save();


        $team_language->name = $request->name;
        $team_language->designation = $request->designation;
        $team_language->save();

        $notification = trans('admin_validation.Update Successfully');
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }


    public function destroy($id)
    {
        $team = OurTeam::find($id);
        $existing_image = $team->image;
        $team->delete();

        if($existing_image){
            if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
        }

        $team_language = OurTeamLanguage::where('team_id', $id)->delete();

        $notification = trans('admin_validation.Delete Successfully');
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.our-team.index')->with($notification);
    }

    public function changeStatus($id){
        $item = OurTeam::find($id);
        if($item->status == 1){
            $item->status = 0;
            $item->save();
            $message = trans('admin_validation.Inactive Successfully');
        }else{
            $item->status = 1;
            $item->save();
            $message = trans('admin_validation.Active Successfully');
        }

        return response()->json($message);
    }
}
