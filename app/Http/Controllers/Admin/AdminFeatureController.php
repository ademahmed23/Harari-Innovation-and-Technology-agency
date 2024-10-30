<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\FeatureSectionItem;

class AdminFeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        // $feature_section_items=FeatureSectionItem::where('id', 1)->first();
        return view('admin.feature.index', compact('features'));
    }

    public function create()
    {
        return view('admin.feature.create');
    }

    public function create_submit(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'heading' => 'required',
            'text' => 'required',
        ]);

        $feature = new Feature();
        $feature->icon = $request->icon;
        $feature->heading = $request->heading;
        $feature->text = $request->text;
        $feature->save();

        return redirect()->route('admin.admin_feature_index')->with('success', 'Feature created successfully');
    }

    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        return view('admin.feature.edit', compact('feature'));
    }

    public function edit_submit(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required',
            'heading' => 'required',
            'text' => 'required',
        ]);

        $feature = Feature::findOrFail($id);
        $feature->icon = $request->icon;
        $feature->heading = $request->heading;
        $feature->text = $request->text;
        $feature->update();

        return redirect()->route('admin.admin_feature_index')->with('success', 'Feature updated successfully');
    }

    public function delete($id)
    {
        $feature = Feature::findOrFail($id);
        $feature->delete();

        return redirect()->route('admin.admin_feature_index')->with('success', 'Feature deleted successfully');
    }

    // public function section_update(Request $request)
    // {
    //     // $feature_item=FeatureSectionItem::where('id', 1)->first();

    //     if($request->photo!=null){
    //         $request->validate([
    //             'photo' => 'image|mimes:jpeg,png,jpg',
    //         ]);
    //         if($feature_item->photo!=null){
    //             unlink(public_path('uploads/'.$feature_item->photo));
    //         }

    //         $finalName = 'feature_'.time().'.'.$request->photo->extension();
    //         $request->photo->move(public_path('uploads'), $finalName);
    //         $feature_item->photo = $finalName;
    //     }

    //     $feature_item->status = $request->status;
    //     $feature_item->update();

    //     return redirect()->back()->with('success', 'Feature section items updated successfully');
    // }
}
