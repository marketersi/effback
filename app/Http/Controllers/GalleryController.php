<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function galleryIndex()
    {
        $galleryDetail = Gallery::get();
        // dd($logoDetail);
        return view('gallery.index', compact('galleryDetail'));
    }
    
    public function galleryCreate()
    {
        $galleryDetails = Gallery::get();
        return view('gallery.create', compact('galleryDetails'));
    }

    public function galleryStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'buttonText'  => 'required',
            'image'  => 'required',
        ]);

        try {
            $details = [
                'title',
                'subtitle',
                'buttonText',
                'image',
            ];

            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Gallery::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Gallery::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('gallery.index')->with('success', 'Gallery Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('gallery.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }    
}
