<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfilePasswordUpdateRequest;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use App\Models\Admin;
use App\Traits\FileUploadTrait;
use Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use FileUploadTrait;

    function index() : View {
        $user = Auth::guard('admin')->user();

        return view('admin.profile.index',compact('user'));
    }

    function updateProfile(ProfileUpdateRequest $request ) : RedirectResponse {

        $user = Admin::findOrFail($request);

        $imagePath = $this->handleFileUpload($request, 'avator', $request->old_image);
        $user->image = !empty($imagePath) ? $imagePath : $request->old_image;


        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar = isset($imagePath) ? $imagePath : $user->avatar;
        $user->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->back();
    }

    function updatePassword(ProfilePasswordUpdateRequest $request,$id) : RedirectResponse {

        $user = Admin::findOrFail($id);
        $user->password = bcrypt($request->password);
        $user->save();
        toastr()->success('Password Updated Successfully');

        return redirect()->back();
    }
}
