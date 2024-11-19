<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZooGarden;

class ZooGardenController extends Controller
{
    public function zooGardenIndex()
    {
        $zooDetail = ZooGarden::get();
        // dd($logoDetail);
        return view('zoo-garden.index', compact('zooDetail'));
    }
    
    public function zooGardenCreate()
    {
        $zooDetails = ZooGarden::get();
        return view('zoo-garden.create', compact('zooDetails'));
    }

    public function zooGardenStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'text1'  => 'required',
            'text2'  => 'required',
            'image_1'  => 'required',
            'text3'  => 'required',
            'text4'  => 'required',
            'image_2'  => 'required',
            'text5'  => 'required',
            'text6'  => 'required',
            'text7'  => 'required',
        ]);

        try {
            $details = [
                'title',
            'subtitle' ,
            'text1',
            'text2',
            'image_1',
            'text3',
            'text4',
            'image_2',
            'text5',
            'text6',
            'text7',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = ZooGarden::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    ZooGarden::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('zoo.garden.index')->with('success', 'Aico Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('zoo.garden.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
