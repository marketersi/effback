<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function herosectionIndex()
    {
        $heroSection = HeroSection::orderBy('id', 'desc')->get();
        return view('hero-section.index', compact('heroSection'));
    }

    public function herosectionCreate()
    {
        $details = HeroSection::get();
        return view('hero-section.create', compact('details'));
    }

    public function herosectionStore(Request $request)
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
        $heroSection = HeroSection::find($request->update_id);

            }else{

            $heroSection = new HeroSection;
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

            return redirect()->route('homeherosection.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('homeherosection.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function herosectionEdit(Request $request)
    { 
        $herosection_Details = HeroSection::find($request->id);
        return view('hero-section.edit', compact('herosection_Details'));
    }
}
