<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HowTestWorks;
use Illuminate\Support\Facades\DB;

class HowTestWorksController extends Controller
{
    public function testIndex()
    {
        $testDetail = HowTestWorks::get();
        return view('how-test-works.index', compact('testDetail'));
    }
    public function testCreate()
    {
        $testdetails = HowTestWorks::get();
        return view('how-test-works.create', compact('testdetails'));
    }

    public function testStore(Request $request)
    {
        try {
            $tests = [
                'title',
                'para1',
                'para2',
                'para3',
                'para4',
                'para5',
                'para6'
            ];
            

            foreach ($tests as $test) {
                
                $value = $request->input($test);
                
                $existingtest = HowTestWorks::where('type', $test)->first();

                if ($existingtest) {
                    
                    DB::table('tbl_how_test_works')->where('type', $test)->update(['message' => $value]);
                    
                } else {
                    $examHeroSection = new HowTestWorks;
                    $examHeroSection->type = $test;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();
                }
            }

            return redirect()->route('howtestworks.index')->with('success', 'How Test Works Settings Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('howtestworks.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
