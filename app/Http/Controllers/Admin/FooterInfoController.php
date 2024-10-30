<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FooterInfoUpdateRequest;
use App\Models\FooterInfo;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FooterInfoController extends Controller
{
    function index() : View {
        $languages = Language::all();
        $footerInfo = FooterInfo::first();
        return view('admin.footer-info.index', compact('footerInfo','languages'));
    }

    function update(FooterInfoUpdateRequest $request) {
        FooterInfo::updateOrCreate(
            ['id' => $request],
            [
                'short_info' => $request->short_info,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'copyright' => $request->copyright,
                'language' => $request->language,
            ]
        );

        toastr()->success('Updated Successfully!');

        return redirect()->back();
    }
}
