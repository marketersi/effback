<?php

namespace App\Http\Controllers;

use App\Models\KreatywnyHeroSection;
use Illuminate\Http\Request;

class KreatywnyHeroSectionController extends Controller
{
    public function kreatywnyHeroSectionIndex()
    {
        $heroSection = KreatywnyHeroSection::orderBy('id', 'desc')->get();
        return view('kreatywny-hero-section.index', compact('heroSection'));
    }

    public function kreatywnyHeroSectionCreate()
    {
        $details = KreatywnyHeroSection::get();
        return view('kreatywny-hero-section.create', compact('details'));
    }

    public function kreatywnyHeroSectionStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'image_left1' => 'required',
            'image_left2' => 'required',
            'image_right1' => 'required',
            'image_right2' => 'required',
            'background_video' => 'required',
        ]);

        try {

            if(isset($request->update_id)){
        $heroSection = KreatywnyHeroSection::find($request->update_id);

            }else{

            $heroSection = new KreatywnyHeroSection;
            }
            $heroSection->title = $request->title;
            $heroSection->subtitle = $request->subtitle;
            $heroSection->description = $request->description;
            $heroSection->image_left1 = $request->image_left1;
            $heroSection->image_left2 = $request->image_left2;
            $heroSection->image_right1 = $request->image_right1;
            $heroSection->image_right2 = $request->image_right2;
            $heroSection->background_video = $request->background_video;
            $heroSection->save();

            return redirect()->route('kreatywny-hero-section.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('kreatywny-hero-section.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function kreatywnyHeroSectionEdit(Request $request)
    { 
        $herosection_Details = KreatywnyHeroSection::find($request->id);
        return view('kreatywny-hero-section.edit', compact('herosection_Details'));
    }
}
