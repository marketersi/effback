<?php

namespace App\Http\Controllers;

use App\Models\KreatywnyCompany;
use Illuminate\Http\Request;

class KreatywnyCompanyController extends Controller
{
    public function kreatywnyCompanyIndex()
    {
        $companyCard = KreatywnyCompany::orderBy('id', 'desc')->get();
        return view('kreatywny-company.index', compact('companyCard'));
    }

    public function kreatywnyCompanyCreate()
    {
        $details = KreatywnyCompany::get();
        return view('kreatywny-company.create', compact('details'));
    }

    public function kreatywnyCompanyStore(Request $request)
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
                $existingSetting = KreatywnyCompany::where('type', $company)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyCompany::create(['type' => $company, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-company.index')->with('success', 'Company settings updated successfully');
    }

    public function kreatywnyCompanyStatus($id)
    {
        $user = KreatywnyCompany::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
