<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewCompany;

class NewCompanyController extends Controller
{
    public function newCompanyIndex()
    {
        $companyDetail = NewCompany::get();
        // dd($logoDetail);
        return view('new-company.index', compact('companyDetail'));
    }
    
    public function newCompanyCreate()
    {
        $companyDetails = NewCompany::get();
        return view('new-company.create', compact('companyDetails'));
    }

    public function newCompanyStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'cursorChangingText'  => 'required',
        ]);

        try {
            $details = [
                'title',
            'subtitle' ,
            'cursorChangingText' ,
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = NewCompany::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    NewCompany::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('park.index')->with('success', 'New Company Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('park.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
