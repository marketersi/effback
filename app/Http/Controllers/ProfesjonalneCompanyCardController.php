<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfesjonalneCompanyCard;

class ProfesjonalneCompanyCardController extends Controller
{
    public function profesjonalneCompanycardIndex()
    {
        $companyCard = ProfesjonalneCompanyCard::orderBy('id', 'desc')->get();
        return view('profesjonalne-company-card.index', compact('companyCard'));
    }

    public function profesjonalneCompanycardCreate()
    {
        $details = ProfesjonalneCompanyCard::get();
        return view('profesjonalne-company-card.create', compact('details'));
    }

    public function profesjonalneCompanycardStore(Request $request)
    {
        $request->validate([
            'main_title' => 'required',
            'subtitle' => 'required'
        ]);

        // try {

            if(isset($request->update_id)){
        $companyCard = ProfesjonalneCompanyCard::find($request->update_id);

            }else{

            $companyCard = new ProfesjonalneCompanyCard;
            }
            $companyCard->main_title = $request->main_title;
            $companyCard->subtitle = $request->subtitle;
            $companyCard->save();

            return redirect()->route('profesjonalne-companycard.index')->with('success', 'update Successfully!!');
        // } catch (\Exception $e) {
        //     return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        // }
    }

    public function profesjonalneCompanycardEdit(Request $request)
    { 
        $companycard_details = ProfesjonalneCompanyCard::find($request->id);
        return view('profesjonalne-company-card.edit', compact('companycard_details'));
    }

    public function profesjonalneCompanycardDelete($id)
    {
        try {
            $companyCard = ProfesjonalneCompanyCard::findOrFail($id);
            $companyCard->delete();

            return redirect()->route('profesjonalne-companycard.index')->with('success', 'Data deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('profesjonalne-companycard.index')->with('error', 'An error occurred while deleting the data.');
        }
    }
}
