<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Image;
use Illuminate\Support\Carbon;

class PortfolioController extends Controller
{
    public function AllPortfolio(){
        $languages = Language::all();
        $portfolio = Portfolio::latest()->get();
        return view('admin.protfolio.protfolio_all',compact('portfolio','languages'));
    } // End Method


    public function AddPortfolio(){
        $languages = Language::all();
        return view('admin.protfolio.protfolio_add',compact('languages'));
    } // End Method


    public function StorePortfolio(Request $request){

        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_image' => 'required',

        ],[

            'portfolio_name.required' => 'Portfolio Name is Required',
            'portfolio_title.required' => 'Portfolio Titile is Required',
        ]);

        $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('uploads/'.$name_gen);
            $save_url = 'uploads/'.$name_gen;

            Portfolio::insert([
                'portfolio_name' => $request->portfolio_name,
                'facebook' => $request->facebook,
                'language' => $request->language,
                'instagram' => $request->instagram,
                'telegram' => $request->telegram,
                'linkedin' => $request->linkedin,
                'tiktok' => $request->tiktok,
                'twitter' => $request->twitter,
                'web' => $request->web,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
                'created_at' => Carbon::now(),

            ]);
            $notification = array(
            'message' => 'Portfolio Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.portfolio')->with($notification);

    }// End Method



    public function EditPortfolio($id){

        $portfolio = Portfolio::findOrFail($id);
        return view('admin.protfolio.protfolio_edit',compact('portfolio'));
    }// End Method


   public function UpdatePortfolio(Request $request){

        $portfolio_id = $request->id;

        if ($request->file('portfolio_image')) {
            $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('uploads/'.$name_gen);
            $save_url = 'uploads/'.$name_gen;

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,

            ]);
            $notification = array(
            'message' => 'Portfolio Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all.portfolio')->with($notification);

        } else{

            Portfolio::findOrFail($portfolio_id)->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,


            ]);
            $notification = array(
            'message' => 'Portfolio Updated without Image Successfully',
            'alert-type' => 'success'
        );

       return redirect()->route('admin.all.portfolio')->with($notification);

        } // end Else

     } // End Method


     public function DeletePortfolio($id){

        $portfolio = Portfolio::findOrFail($id);
        $img = $portfolio->portfolio_image;
        unlink($img);

        Portfolio::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Portfolio Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }// End Method


    //  public function PortfolioDetails($id){

    //     $portfolio = Portfolio::findOrFail($id);
    //     return view('frontend.protfolio_details',compact('portfolio'));
    //  } // End Method


    //  public function HomePortfolio(){

    //   $portfolio = Portfolio::latest()->get();
    //   return view('frontend.portfolio',compact('portfolio'));
    //  } // End Method


}
