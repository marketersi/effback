<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculatorSettings;
use App\Models\WarrantyTitle;
use App\Models\WarrantyCard;

class CalculatorSettingController extends Controller
{
    // ********************** CALCULATOR ************************* //
    
    public function calculatorIndex()
    {
        $calculatorDetail = CalculatorSettings::orderBy('id', 'desc')->get();
        return view('calculator.index', compact('calculatorDetail'));
    }
    public function calculatorCreate()
    {

        $details = CalculatorSettings::get();
        return view('calculator.create', compact('details'));
    }

    public function calculatorStore(Request $request)
    {
        try {
            $settingContact = [
                'first_heading',
                'sub_heading',
                'second_heading', 'first_paragraph',
                'second_paragraph',
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = CalculatorSettings::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    CalculatorSettings::create(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('calculator.index')->with('success', 'Calculator settings updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('calculator.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function calculatorStatus($id)
    {
        $user = CalculatorSettings::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
    
     // ************************* WARRENTY TITLE ********************** //

    public function warTitledIndex()
    {
        $details = WarrantyTitle::orderBy('id', 'desc')->get();
        return view('calculator.warranty.title.index', compact('details'));
    }
    public function warTitledCreate()
    {

        $details = WarrantyTitle::get();
        return view('calculator.warranty.title.create', compact('details'));
    }

    public function warTitledStore(Request $request)
    {
        try {
            $settingContact = [
                'title',
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = WarrantyTitle::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    WarrantyTitle::create(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('war-title.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('war-title.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ************************* WARRENTY CARD ********************** //

    public function warCardIndex()
    {
        $details = WarrantyCard::orderBy('id', 'desc')->get();
        return view('calculator.warranty.card.index', compact('details'));
    }
    public function warCardCreate()
    {

        $details = WarrantyCard::get();
        return view('calculator.warranty.card.create', compact('details'));
    }

    public function warCardStore(Request $request)
    {
        try {
            $settingContact = [
                'title',
                'subtitle',
                'image',
                'buttonText',
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = WarrantyCard::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    WarrantyCard::create(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('war-card.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('war-card.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
   
}

