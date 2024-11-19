<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companyIndex()
    {
        $companyCard = Company::orderBy('id', 'desc')->get();
        return view('company.index', compact('companyCard'));
    }

    public function companyCreate()
    {
        $details = Company::get();
        return view('company.create', compact('details'));
    }

    public function companyStore(Request $request)
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
                $existingSetting = Company::where('type', $company)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Company::create(['type' => $company, 'message' => $value]);
                }
            }
            return redirect()->route('company.index')->with('success', 'Contact settings updated successfully');
    }

    public function companyStatus($id)
    {
        $user = Company::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
