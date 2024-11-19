<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Construction;

class ConstructionController extends Controller
{
    public function constructionIndex()
    {
        $constructionDetail = Construction::get();
        // dd($logoDetail);
        return view('construction.index', compact('constructionDetail'));
    }
    
    public function constructionCreate()
    {
        $constructionDetails = Construction::get();
        return view('construction.create', compact('constructionDetails'));
    }

    public function constructionStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'text1'  => 'required',
            'image_1'  => 'required',
            'text2'  => 'required',
            'text3'  => 'required',
            'image_2'  => 'required',
            'quote'  => 'required',
            'quoteAuthor'  => 'required',
            'text4'  => 'required',
        ]);

        try {
            $details = [
                'title',
            'subtitle' ,
            'text1',
                'image_1',
                'text2',
                'text3',
                'image_2',
                'quote',
                'quoteAuthor',
                'text4',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Construction::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Construction::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('construction.index')->with('success', 'Construction Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('construction.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
