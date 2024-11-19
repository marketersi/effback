<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daco;

class DacoController extends Controller
{
    public function dacoIndex()
    {
        $dacoDetail = Daco::get();
        // dd($logoDetail);
        return view('daco.index', compact('dacoDetail'));
    }
    
    public function dacoCreate()
    {
        $dacoDetails = Daco::get();
        return view('daco.create', compact('dacoDetails'));
    }

    public function dacoStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'text1'  => 'required',
            'text2'  => 'required',
            'text3'  => 'required',
            'image'  => 'required',
            'quote'  => 'required',
            'quoteAuthor'  => 'required',
            'quoteText'  => 'required',
        ]);

        try {
            $details = [
                'title',
            'subtitle' ,
           'text1' ,
            'text2' ,
            'text3' ,
            'image' ,
            'quote' ,
            'quoteAuthor' ,
            'quoteText' ,
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Daco::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Daco::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('daco.index')->with('success', 'Daco Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('daco.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
