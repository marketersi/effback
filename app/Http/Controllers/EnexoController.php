<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enexo;

class EnexoController extends Controller
{
    public function enexoIndex()
    {
        $enexoDetail = Enexo::get();
        // dd($logoDetail);
        return view('enexo.index', compact('enexoDetail'));
    }
    
    public function enexoCreate()
    {
        $enexoDetails = Enexo::get();
        return view('enexo.create', compact('enexoDetails'));
    }

    public function enexoStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'text1'  => 'required',
            'text2'  => 'required',
            'text3'  => 'required',
            'text4'  => 'required',
            'image'  => 'required',
            'quote'  => 'required',
            'quoteAuthor'  => 'required',
        ]);

        try {
            $details = [
                'title',
            'subtitle' ,
            'text1' ,
            'text2' ,
            'text3' ,
            'text4' ,
            'image' ,
            'quote' ,
            'quoteAuthor' ,
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Enexo::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Enexo::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('enexo.index')->with('success', 'Enexo Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('enexo.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
