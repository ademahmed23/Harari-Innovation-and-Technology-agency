<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactUpdateRequest;
use App\Models\Contact;
use App\Models\Language;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Traits\FileUploadTrait;

class ContactController extends Controller
{
    use FileUploadTrait;

    function index(): View
    {
        $languages = Language::all();
        $contact = Contact::first();
        return view('admin.contact.index', compact('contact','languages'));
    }

    function update(ContactUpdateRequest $request): RedirectResponse
    {
        $imagePath = $this->uploadImage($request, 'image', $request->old_image);

        Contact::updateOrCreate(
            ['id' => 1],
            [
                'image' => !empty($imagePath) ? $imagePath : $request->old_image,
                'phone_one' => $request->phone_one,
                'phone_two' => $request->phone_two,
                'mail_one' => $request->mail_one,
                'language' => $request->language,
                'mail_two' => $request->mail_two,
                'time' => $request->time,
                'off_day' => $request->off_day,
                'support_title' => $request->support_title,
                'address' => $request->address,
                'map_link' => $request->map_link
            ]
        );

        toastr()->success('Created Successfully');

        return redirect()->back();
    }
}
