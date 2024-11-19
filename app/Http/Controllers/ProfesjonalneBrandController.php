<?php

namespace App\Http\Controllers;

use App\Models\ProfesjonalneBrand;
use Illuminate\Http\Request;

class ProfesjonalneBrandController extends Controller
{
    public function profesjonalneBrandIndex()
    {
        $brandSection = ProfesjonalneBrand::orderBy('id', 'desc')->get();
        return view('profesjonalne-brand-section.index', compact('brandSection'));
    }

    public function profesjonalneBrandCreate()
    {
        $details = ProfesjonalneBrand::get();
        return view('profesjonalne-brand-section.create', compact('details'));
    }

    public function profesjonalneBrandStore(Request $request)
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
                $existingSetting = ProfesjonalneBrand::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneBrand::create(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('profesjonalne-brand-section.index')->with('success', 'Brand Setting Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('profesjonalne-brand-section.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function profesjonalneBrandEdit(Request $request)
    { 
        $brandsection_Details = ProfesjonalneBrand::find($request->id);
        return view('', compact('brandsection_Details'));
    }
}
