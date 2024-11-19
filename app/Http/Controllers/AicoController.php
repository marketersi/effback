<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aico;

class AicoController extends Controller
{
    public function aicoIndex()
    {
        $aicoDetail = Aico::get();
        // dd($logoDetail);
        return view('aico.index', compact('aicoDetail'));
    }
    
    public function aicoCreate()
    {
        $aicoDetails = Aico::get();
        return view('aico.create', compact('aicoDetails'));
    }

    public function aicoStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'text1'  => 'required',
            'image_1'  => 'required',
            'text2'  => 'required',
            'text3'  => 'required',
            'text4'  => 'required',
            'image_2'  => 'required',
            'quote'  => 'required',
            'quoteAuthor'  => 'required',
        ]);

        try {
            $details = [
                'title',
            'subtitle' ,
            'text1' ,
            'image_1' ,
            'text2' ,
            'text3' ,
            'text4' ,
            'image_2' ,
            'quote' ,
            'quoteAuthor' ,
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Aico::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Aico::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('aico.index')->with('success', 'Aico Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('aico.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
