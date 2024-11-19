<?php

namespace App\Http\Controllers;

use App\Models\FactowCard;
use Dotenv\Validator;
use Illuminate\Http\Request;

class factowCardController extends Controller
{
    public function factowcardIndex()
    {
        $factowCard = FactowCard::orderBy('id', 'desc')->get();
        return view('fact-card.index', compact('factowCard'));
    }

    public function factowcardCreate()
    {
        $details = FactowCard::get();
        return view('fact-card.create', compact('details'));
    }

    public function factowcardStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_url' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
        ]);

        // try {

            if(isset($request->update_id)){
        $factowCard = FactowCard::find($request->update_id);

            }else{

            $factowCard = new FactowCard;
            }
            $factowCard->title = $request->title;
            $factowCard->image_url = $request->image_url;
            $factowCard->description1 = $request->description1;
            $factowCard->description2 = $request->description2;
            $factowCard->description3 = $request->description3;
            $factowCard->save();

            return redirect()->route('factowcard.index')->with('success', 'update Successfully!!');
        // } catch (\Exception $e) {
        //     return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        // }
    }

    public function factowcardEdit(Request $request)
    { 
        $factowcard_details = FactowCard::find($request->id);
        return view('fact-card.edit', compact('factowcard_details'));
    }
    
     public function factowcardDelete($id)
    {
        try {
            $factowCard = FactowCard::findOrFail($id);
            $factowCard->delete();

            return redirect()->route('factowcard.index')->with('success', 'Data deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('factowcard.index')->with('error', 'An error occurred while deleting the data.');
        }
    }

    // public function factowcardStatus($id)
    // {
    //     $user = FactowCard::findOrFail($id);
    //     if ($user) {
    //         $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
    //         $user->save();

    //         return redirect()->back()->with('success', 'Status updated successfully.');
    //     }
        
    //     return redirect()->back()->with('error', 'User not found.');
    // }
}
