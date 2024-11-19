<?php

namespace App\Http\Controllers\Example;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    // *************** Example 1 ***************** //

    public function index(){
        $details = DB::table('tbl_example_1')->get();
        return view('example.example-1.index',compact('details'));
    }

    public function create(){
        $details = DB::table('tbl_example_1')->get();
        return view('example.example-1.create',compact('details'));
    }

    public function store(Request $request)
    {
        try {
            $settingContact = [
                'title',
                'subtitle',
                'para_1',
                'para_2',
                'image_1',
                'para_3',
                'para_4',
                'image_2',
                'para_5',
                'image_3',
                'image_4',
                'customer_quote',
                'customer_description',
                'customer_image',
                'review_buttonText',
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = DB::table('tbl_example_1')->where('type', $contactus)->first();

                if ($existingSetting) {
                    DB::table('tbl_example_1')->where('type', $contactus)->update(['message' => $value]);
                } else {
                    DB::table('tbl_example_1')->insert(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('example.example1Index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('example.example1Index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // *************** Example 2 ***************** //

    public function example2Index(){
        $details = DB::table('tbl_example_2')->get();
        return view('example.example-2.index',compact('details'));
    }

    public function example2Create(){
        $details = DB::table('tbl_example_2')->get();
        return view('example.example-2.create',compact('details'));
    }

    public function example2Store(Request $request)
    {
        try {
            $settingContact = [
                'title',
                'subtitle',
                'image',
                'quote',
                'quote_name',
                'para_1',
                'para_2'
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = DB::table('tbl_example_2')->where('type', $contactus)->first();

                if ($existingSetting) {
                    DB::table('tbl_example_2')->where('type', $contactus)->update(['message' => $value]);
                } else {
                    DB::table('tbl_example_2')->insert(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('example.example2Index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('example.example2Index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // *************** Example 3 ***************** //

    public function example3Index(){
        $details = DB::table('tbl_example_3')->get();
        return view('example.example-3.index',compact('details'));
    }

    public function example3Create(){
        $details = DB::table('tbl_example_3')->get();
        return view('example.example-3.create',compact('details'));
    }

    public function example3Store(Request $request)
    {
        try {
            $settingContact = [
                'title',
                'subtitle',
                'image',
                'para_1',
                'para_2',
                'quote_name',
                'customer_quote',
                'customer_image',
                'review_buttonText',
                'customer_description'
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = DB::table('tbl_example_3')->where('type', $contactus)->first();

                if ($existingSetting) {
                    DB::table('tbl_example_3')->where('type', $contactus)->update(['message' => $value]);
                } else {
                    DB::table('tbl_example_3')->insert(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('example.example3Index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('example.example3Index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // *************** Example 4 ***************** //

    public function example4Index(){
        $details = DB::table('tbl_example_4')->get();
        return view('example.example-4.index',compact('details'));
    }
    public function example4Create(){
        $details =  DB::table('tbl_example_4')->get();
        return view('example.example-4.create',compact('details'));
    }
    public function example4Store(Request $request){
        // dd($request->all());
        try{
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_4')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_4')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_4')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example4Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example4Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }
    
    // *************** Example 5 ***************** //

    public function example5Index(){
        $details = DB::table('tbl_example_5')->get();
        return view('example.example-5.index',compact('details'));
    }
    public function example5Create(){
        $details =  DB::table('tbl_example_5')->get();
        return view('example.example-5.create',compact('details'));
    }
    public function example5Store(Request $request){
        // dd($request->all());
        try{
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_5')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_5')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_5')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example5Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example5Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 6 ***************** //

    public function example6Index(){
        $details = DB::table('tbl_example_6')->get();
        return view('example.example-6.index',compact('details'));
    }
    public function example6Create(){
        $details =  DB::table('tbl_example_6')->get();
        return view('example.example-6.create',compact('details'));
    }
    public function example6Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_6')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_6')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_6')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example6Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example6Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 7 ***************** //

    public function example7Index(){
        $details = DB::table('tbl_example_7')->get();
        return view('example.example-7.index',compact('details'));
    }
    public function example7Create(){
        $details =  DB::table('tbl_example_7')->get();
        return view('example.example-7.create',compact('details'));
    }
    public function example7Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_7')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_7')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_7')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example7Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example7Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 8 ***************** //

    public function example8Index(){
        $details = DB::table('tbl_example_8')->get();
        return view('example.example-8.index',compact('details'));
    }

    public function example8Create(){
        $details = DB::table('tbl_example_8')->get();
        return view('example.example-8.create',compact('details'));
    }

    public function example8Store(Request $request)
    {
        try {
            $settingContact = [
                'title',
                'subtitle',
                'image',
                'quote',
                'quote_name',
                'para_1',
                'para_2'
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = DB::table('tbl_example_8')->where('type', $contactus)->first();

                if ($existingSetting) {
                    DB::table('tbl_example_8')->where('type', $contactus)->update(['message' => $value]);
                } else {
                    DB::table('tbl_example_8')->insert(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('example.example8Index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('example.example8Index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
    // *************** Example 9 ***************** //

    public function example9Index(){
        $details = DB::table('tbl_example_9')->get();
        return view('example.example-9.index',compact('details'));
    }
    public function example9Create(){
        $details =  DB::table('tbl_example_9')->get();
        return view('example.example-9.create',compact('details'));
    }
    public function example9Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_9')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_9')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_9')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example9Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example9Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 10 ***************** //

    public function example10Index(){
        $details = DB::table('tbl_example_10')->get();
        return view('example.example-10.index',compact('details'));
    }
    public function example10Create(){
        $details =  DB::table('tbl_example_10')->get();
        return view('example.example-10.create',compact('details'));
    }
    public function example10Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_10')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_10')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_10')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example10Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example10Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 11 ***************** //

    public function example11Index(){
        $details = DB::table('tbl_example_11')->get();
        return view('example.example-11.index',compact('details'));
    }
    public function example11Create(){
        $details =  DB::table('tbl_example_11')->get();
        return view('example.example-11.create',compact('details'));
    }
    public function example11Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_11')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_11')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_11')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example11Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example11Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 12 ***************** //

    public function example12Index(){
        $details = DB::table('tbl_example_12')->get();
        return view('example.example-12.index',compact('details'));
    }
    public function example12Create(){
        $details =  DB::table('tbl_example_12')->get();
        return view('example.example-12.create',compact('details'));
    }
    public function example12Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_12')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_12')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_12')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example12Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example12Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 13 ***************** //

    public function example13Index(){
        $details = DB::table('tbl_example_13')->get();
        return view('example.example-13.index',compact('details'));
    }
    public function example13Create(){
        $details =  DB::table('tbl_example_13')->get();
        return view('example.example-13.create',compact('details'));
    }
    public function example13Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_13')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_13')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_13')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example13Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example13Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 14 ***************** //

    public function example14Index(){
        $details = DB::table('tbl_example_14')->get();
        return view('example.example-14.index',compact('details'));
    }
    public function example14Create(){
        $details =  DB::table('tbl_example_14')->get();
        return view('example.example-14.create',compact('details'));
    }
    public function example14Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_14')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_14')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_14')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example14Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example14Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 15 ***************** //

    public function example15Index(){
        $details = DB::table('tbl_example_15')->get();
        return view('example.example-15.index',compact('details'));
    }
    public function example15Create(){
        $details =  DB::table('tbl_example_15')->get();
        return view('example.example-15.create',compact('details'));
    }
    public function example15Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_15')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_15')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_15')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example15Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example15Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 16 ***************** //

    public function example16Index(){
        $details = DB::table('tbl_example_16')->get();
        return view('example.example-16.index',compact('details'));
    }

    public function example16Create(){
        $details = DB::table('tbl_example_16')->get();
        return view('example.example-16.create',compact('details'));
    }

    public function example16Store(Request $request)
    {
        try {
            $settingContact = [
                'title',
                'subtitle',
                'image',
                'para',
                'quote_name',
                'customer_quote',
                'customer_image',
                'review_buttonText',
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = DB::table('tbl_example_16')->where('type', $contactus)->first();

                if ($existingSetting) {
                    DB::table('tbl_example_16')->where('type', $contactus)->update(['message' => $value]);
                } else {
                    DB::table('tbl_example_16')->insert(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('example.example16Index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('example.example16Index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // *************** Example 17 ***************** //

    public function example17Index(){
        $details = DB::table('tbl_example_17')->get();
        return view('example.example-17.index',compact('details'));
    }
    public function example17Create(){
        $details =  DB::table('tbl_example_17')->get();
        return view('example.example-17.create',compact('details'));
    }
    public function example17Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_17')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_17')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_17')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example17Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example17Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 18 ***************** //

    public function example18Index(){
        $details = DB::table('tbl_example_18')->get();
        return view('example.example-18.index',compact('details'));
    }
    public function example18Create(){
        $details =  DB::table('tbl_example_18')->get();
        return view('example.example-18.create',compact('details'));
    }
    public function example18Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_18')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_18')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_18')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example18Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example18Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 19 ***************** //

    public function example19Index(){
        $details = DB::table('tbl_example_19')->get();
        return view('example.example-19.index',compact('details'));
    }

    public function example19Create(){
        $details = DB::table('tbl_example_19')->get();
        return view('example.example-19.create',compact('details'));
    }

    public function example19Store(Request $request)
    {
        try {
            $settingContact = [
                'title',
                'subtitle',
                'image',
                'quote',
                'quote_name',
                'para_1',
                'para_2'
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = DB::table('tbl_example_19')->where('type', $contactus)->first();

                if ($existingSetting) {
                    DB::table('tbl_example_19')->where('type', $contactus)->update(['message' => $value]);
                } else {
                    DB::table('tbl_example_19')->insert(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('example.example19Index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('example.example19Index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // *************** Example 20 ***************** //

    public function example20Index(){
        $details = DB::table('tbl_example_20')->get();
        return view('example.example-20.index',compact('details'));
    }
    public function example20Create(){
        $details =  DB::table('tbl_example_20')->get();
        return view('example.example-20.create',compact('details'));
    }
    public function example20Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image',
            'quote_name',
            'quote',
            'para',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_20')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_20')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_20')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example20Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example20Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Example 21 ***************** //

    public function example21Index(){
        $details = DB::table('tbl_example_21')->get();
        return view('example.example-21.index',compact('details'));
    }
    public function example21Create(){
        $details =  DB::table('tbl_example_21')->get();
        return view('example.example-21.create',compact('details'));
    }
    public function example21Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'subtitle',
            'image_1',
            'image_2',
            'quote_name',
            'quote',
            'para_1',
            'para_2',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_example_21')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_example_21')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_example_21')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('example.example21Index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('example.example21Index')->with('error', 'Error: ' . $e->getMessage());
    }
    }

    // *************** Slider ***************** //

    public function sliderIndex(){
        $details = DB::table('tbl_slider')->get();
        return view('example.slider.index',compact('details'));
    }
    public function sliderCreate(){
        $details =  DB::table('tbl_slider')->get();
        
        return view('example.slider.create',compact('details'));
    }
    public function sliderStore(Request $request){
        try{
            // dd($request->all());
            $settingContact = [
                'title',
                'subtitle',
                'sliderText',
                'image',
            ];
        
            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = DB::table('tbl_slider')->where('type', $contactus)->first();
            
                if ($existingSetting) {
                    DB::table('tbl_slider')->where('type', $contactus)->update(['message' => json_encode($value)]);
                } else {
                    DB::table('tbl_slider')->insert(['type' => $contactus, 'message' => json_encode($value)]);
                }
            }
        
            return redirect()->route('example.sliderIndex')->with('success', 'Data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('example.sliderIndex')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
    // *************** Customer Review ***************** //
    
    public function customerReviewIndex()
    {
        $details = DB::table('tbl_example_customer_review')->get();
        return view('example.customer-review.index',compact('details'));
    }

    public function customerReviewCreate()
    {
        $details =  DB::table('tbl_example_customer_review')->get();
        
        return view('example.customer-review.create',compact('details'));
    }

    public function customerReviewStore(Request $request)
    {
        try{
            // dd($request->all());
            $settingContact = [
                'customer_image',
                'customer_quote',
                'customer_description',
                'review_buttonText',
            ];
        
            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = DB::table('tbl_example_customer_review')->where('type', $contactus)->first();
            
                if ($existingSetting) {
                    DB::table('tbl_example_customer_review')->where('type', $contactus)->update(['message' => $value]);
                } else {
                    DB::table('tbl_example_customer_review')->insert(['type' => $contactus, 'message' => $value]);
                }
            }
        
            return redirect()->route('example.reviewIndex')->with('success', 'Data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('example.reviewIndex')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
