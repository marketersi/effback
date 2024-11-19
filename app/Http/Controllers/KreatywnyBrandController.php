<?php

namespace App\Http\Controllers;

use App\Models\KreatywnyBrand;
use Illuminate\Http\Request;

class KreatywnyBrandController extends Controller
{
    public function kreatywnyBrandIndex()
    {
        $brandSection = KreatywnyBrand::orderBy('id', 'desc')->get();
        return view('kreatywny-brand-section.index', compact('brandSection'));
    }

    public function kreatywnyBrandCreate()
    {
        $details = KreatywnyBrand::get();
        return view('kreatywny-brand-section.create', compact('details'));
    }

    public function kreatywnyBrandStore(Request $request)
    {
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
                $existingSetting = KreatywnyBrand::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyBrand::create(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('kreatywny-brand-section.index')->with('success', 'Brand Setting Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('kreatywny-brand-section.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function kreatywnyBrandEdit(Request $request)
    { 
        $brandsection_Details = KreatywnyBrand::find($request->id);
        return view('', compact('brandsection_Details'));
    }
}
