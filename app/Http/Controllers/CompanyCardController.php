<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyCard;

class CompanyCardController extends Controller
{
    public function companycardIndex()
    {
        $companyCard = CompanyCard::orderBy('id', 'desc')->get();
        return view('company-card.index', compact('companyCard'));
    }

    public function companycardCreate()
    {
        $details = CompanyCard::get();
        return view('company-card.create', compact('details'));
    }

    public function companycardStore(Request $request)
    {
        $request->validate([
            'main_title' => 'required',
            'subtitle' => 'required'
        ]);

        // try {

            if(isset($request->update_id)){
        $companyCard = CompanyCard::find($request->update_id);

            }else{

            $companyCard = new CompanyCard;
            }
            $companyCard->main_title = $request->main_title;
            $companyCard->subtitle = $request->subtitle;
            $companyCard->save();

            return redirect()->route('companycard.index')->with('success', 'update Successfully!!');
        // } catch (\Exception $e) {
        //     return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        // }
    }

    public function companycardEdit(Request $request)
    { 
        $companycard_details = CompanyCard::find($request->id);
        return view('company-card.edit', compact('companycard_details'));
    }

    public function companycardcardDelete($id)
    {
        try {
            $companyCard = CompanyCard::findOrFail($id);
            $companyCard->delete();

            return redirect()->route('companycard.index')->with('success', 'Data deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('companycard.index')->with('error', 'An error occurred while deleting the data.');
        }
    }
}
