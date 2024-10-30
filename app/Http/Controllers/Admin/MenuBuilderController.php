<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuBuilderController extends Controller
{
    function index() : View {
        $languages = Language::all();
        return view('admin.menu-builder.index',compact('languages'));
    }
}
