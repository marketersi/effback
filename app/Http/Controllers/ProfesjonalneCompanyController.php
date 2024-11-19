<?php

namespace App\Http\Controllers;

use App\Models\ProfesjonalneCompany;
use Illuminate\Http\Request;

class ProfesjonalneCompanyController extends Controller
{
    public function profesjonalneCompanyIndex()
    {
        $companyCard = ProfesjonalneCompany::orderBy('id', 'desc')->get();
        return view('profesjonalne-company.index', compact('companyCard'));
    }

    public function profesjonalneCompanyCreate()
    {
        $details = ProfesjonalneCompany::get();
        return view('profesjonalne-company.create', compact('details'));
    }

    public function profesjonalneCompanyStore(Request $request)
    {
            $companySetting = [
                'main_title',
                'subtitle1',
                'subtitle2',
                'image_1',
                'image_2',
                'image_3',
            ];
            
            foreach ($companySetting as $company) {
                $value = $request->input($company);
                $existingSetting = ProfesjonalneCompany::where('type', $company)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneCompany::create(['type' => $company, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-company.index')->with('success', 'Company settings updated successfully');
    }

    public function profesjonalneCompanyStatus($id)
    {
        $user = ProfesjonalneCompany::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
