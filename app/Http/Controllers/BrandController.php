<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandIndex()
    {
        $brandSection = Brand::orderBy('id', 'desc')->get();
        return view('brand-section.index', compact('brandSection'));
    }

    public function brandCreate()
    {
        $details = Brand::get();
        return view('brand-section.create', compact('details'));
    }

    public function brandStore(Request $request)
    {
        // $request->validate([
        //     'brand_image1' => 'required',
        //     'brand_image2' => 'required',
        //     'banner_image' => 'required',
        //     'brand_logo1' => 'required',
        //     'brand_logo2' => 'required',
        //     'banner_text' => 'required',
        // ]);

        // try {

        //     if(isset($request->update_id)){
        // $brandSection = Brand::find($request->update_id);

        //     }else{

        //     $brandSection = new Brand;
        //     }
        //     $brandSection->brand_image1 = $request->brand_image1;
        //     $brandSection->brand_image2 = $request->brand_image2;
        //     $brandSection->banner_image = $request->banner_image;
        //     $brandSection->brand_logo1 = $request->brand_logo1;
        //     $brandSection->brand_logo2 = $request->brand_logo2;
        //     $brandSection->banner_text = $request->banner_text;
        //     $brandSection->save();

        //     return redirect()->route('')->with('success', 'update Successfully!!');
        // } catch (\Exception $e) {
        //     return redirect()->route('')->with('error', 'An error occurred. Please try again.');
        // }

        try {
            $settingContact = [
                'brand_image1',
                'brand_image2',
                'banner_image',
                'banner_video',
                'brand_logo1',
                'brand_logo2' ,
                'banner_text',

            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = Brand::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Brand::create(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('brandsection.index')->with('success', 'Brand Setting Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('brandsection.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function brandEdit(Request $request)
    { 
        $brandsection_Details = Brand::find($request->id);
        return view('', compact('brandsection_Details'));
    }
}
