<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KreatywnyCompanyCard;

class KreatywnyCompanyCardController extends Controller
{
    public function kreatywnyCompanycardIndex()
    {
        $companyCard = KreatywnyCompanyCard::orderBy('id', 'desc')->get();
        return view('kreatywny-company-card.index', compact('companyCard'));
    }

    public function kreatywnyCompanycardCreate()
    {
        $details = KreatywnyCompanyCard::get();
        return view('kreatywny-company-card.create', compact('details'));
    }

    public function kreatywnyCompanycardStore(Request $request)
    {
        $request->validate([
            'main_title' => 'required',
            'subtitle' => 'required'
        ]);

        // try {

            if(isset($request->update_id)){
        $companyCard = KreatywnyCompanyCard::find($request->update_id);

            }else{

            $companyCard = new KreatywnyCompanyCard;
            }
            $companyCard->main_title = $request->main_title;
            $companyCard->subtitle = $request->subtitle;
            $companyCard->save();

            return redirect()->route('kreatywny-companycard.index')->with('success', 'update Successfully!!');
        // } catch (\Exception $e) {
        //     return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        // }
    }

    public function kreatywnyCompanycardEdit(Request $request)
    { 
        $companycard_details = KreatywnyCompanyCard::find($request->id);
        return view('kreatywny-company-card.edit', compact('companycard_details'));
    }

    public function kreatywnyCompanycardDelete($id)
    {
        try {
            $companyCard = KreatywnyCompanyCard::findOrFail($id);
            $companyCard->delete();

            return redirect()->route('kreatywny-companycard.index')->with('success', 'Data deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('kreatywny-companycard.index')->with('error', 'An error occurred while deleting the data.');
        }
    }
}
