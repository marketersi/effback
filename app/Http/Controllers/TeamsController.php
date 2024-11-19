<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamsModel;
use App\Models\AtOwonce;



class TeamsController extends Controller
{
    

    // 3 functions of teams section -------------------------------

    public function teamsIndex()
    {
        $details =TeamsModel::orderBy('id','desc')->get();
        return view('Opinion-Screen.Teams.index',compact("details"));
    }

    
    public function teamsCreate()
    {
    $details =TeamsModel::orderBy('id','desc')->get();
    return view('Opinion-Screen.Teams.create',compact("details"));
    }

    public function teamStore(Request $request)
    {
        $expertsSetting = [
            'title',
            'img_one',
            'img_two',
            'img_three',
            'img_four',
            'para_one',
            'para_two',
            'para_three',
            'para_four'
        ];
        foreach ($expertsSetting as $experts) {
            $value = $request->input($experts);
            $existingSetting = TeamsModel::where('type', $experts)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                TeamsModel::create(['type' => $experts, 'message' => $value]);
            }
        }
        return redirect()->route('opinieteams.index')->with('success', 'Teams Section updated successfully');
    }



    // 3 functions of AtOwence section------------------------------
    
    public function AtOwonceIndex()
    {
        $details =AtOwonce::orderBy('id','desc')->get();
        return view('Opinion-Screen.At-Owonce.index',compact("details"));
    }

    public function AtOwonceCreate()
    {
        $details =AtOwonce::orderBy('id','desc')->get();
        return view('Opinion-Screen.At-Owonce.create',compact("details"));
    }


    public function AtOwonceStore(Request $request)
    {
        $expertsSetting = [
            'title',
            'img_1',
            'img_2',
            'cont_name',
            'cont_location',
            'cont_number',
            'para_1',
            'para_2',
            'para_3',
            'text',
            'email',
        ];
        foreach ($expertsSetting as $experts) {
            $value = $request->input($experts);
            $existingSetting = AtOwonce::where('type', $experts)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                AtOwonce::create(['type' => $experts, 'message' => $value]);
            }
        }
        return redirect()->route('personally.index')->with('success', 'At-Owonce Section updated successfully');
    }



}
