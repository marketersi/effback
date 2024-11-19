<?php

namespace App\Http\Controllers;

use App\Models\ProfesjonalneIwdSection1;
use App\Models\ProfesjonalneIwdSection2;
use App\Models\ProfesjonalneIwdSection3;
use App\Models\ProfesjonalneIwdSection4;
use App\Models\ProfesjonalneIwdSection5;
use App\Models\ProfesjonalneIwdSection6;
use App\Models\ProfesjonalneIwdSection7;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ProfesjonalneIWDSectionController extends Controller
{
    // Section 1 - (Images-With-Description Section)
    public function profesjonalneSection1Index()
    {
        $sectionIWD = ProfesjonalneIwdSection1::orderBy('id', 'desc')->get();
        return view('profesjonalne-iwd.section1.index', compact('sectionIWD'));
    }

    public function profesjonalneSection1Create()
    {
        $details = ProfesjonalneIwdSection1::get();
        return view('profesjonalne-iwd.section1.create', compact('details'));
    }

    public function profesjonalneSection1Store(Request $request)
    {
            $IwdSection1Setting = [
                'image_url',
                'title',
                'subtitle_1',
                'paragraph_1',
                'paragraph_2',
                'paragraph_3',
                'subtitle_2',
                'paragraph_4',
                'paragraph_5',
                'paragraph_6',
                'paragraph_7',
                'paragraph_8',
                'paragraph_9',
            ];
            
            foreach ($IwdSection1Setting as $IwdSection1) {
                $value = $request->input($IwdSection1);
                $existingSetting = ProfesjonalneIwdSection1::where('type', $IwdSection1)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneIwdSection1::create(['type' => $IwdSection1, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-iwd-section1.index')->with('success', 'IWD section 1 updated successfully');
    }

    public function profesjonalneSection1Status($id)
    {
        $user = ProfesjonalneIwdSection1::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 2 - (Images-With-Description Section)
    public function profesjonalneSection2Index()
    {
        $section2IWD = ProfesjonalneIwdSection2::orderBy('id', 'desc')->get();
        return view('profesjonalne-iwd.section2.index', compact('section2IWD'));
    }

    public function profesjonalneSection2Create()
    {
        $details = ProfesjonalneIwdSection2::get();
        return view('profesjonalne-iwd.section2.create', compact('details'));
    }

    public function profesjonalneSection2Store(Request $request)
    {
            $IwdSection2Setting = [
                'title',
                'subtitle',
                'line_1',
                'line_2',
                'line_3',
                'paragraph_1',
                'paragraph_2',
                'paragraph_3',
                'paragraph_4',
            ];
            
            foreach ($IwdSection2Setting as $IwdSection2) {
                $value = $request->input($IwdSection2);
                $existingSetting = ProfesjonalneIwdSection2::where('type', $IwdSection2)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneIwdSection2::create(['type' => $IwdSection2, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-iwd-section2.index')->with('success', 'IWD section 2 updated successfully');
    }

    public function profesjonalneSection2Status($id)
    {
        $user = ProfesjonalneIwdSection2::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 3 - (Images-With-Description Section)
    public function profesjonalneSection3Index()
    {
        $section3IWD = ProfesjonalneIwdSection3::orderBy('id', 'desc')->get();
        return view('profesjonalne-iwd.section3.index', compact('section3IWD'));
    }

    public function profesjonalneSection3Create()
    {
        $details = ProfesjonalneIwdSection3::get();
        return view('profesjonalne-iwd.section3.create', compact('details'));
    }

    public function profesjonalneSection3Store(Request $request)
    {
            $IwdSection3Setting = [
                'video_url',
                'paragraph_1',
                'paragraph_2',
                'paragraph_3',
                'paragraph_4',
                'paragraph_5',
                'paragraph_6',
            ];
            
            foreach ($IwdSection3Setting as $IwdSection3) {
                $value = $request->input($IwdSection3);
                $existingSetting = ProfesjonalneIwdSection3::where('type', $IwdSection3)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneIwdSection3::create(['type' => $IwdSection3, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-iwd-section3.index')->with('success', 'IWD section 3 updated successfully');
    }

    public function profesjonalneSection3Status($id)
    {
        $user = ProfesjonalneIwdSection3::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 4 - (Images-With-Description Section)
    public function profesjonalneSection4Index()
    {
        $section4IWD = ProfesjonalneIwdSection4::orderBy('id', 'desc')->get();
        return view('profesjonalne-iwd.section4.index', compact('section4IWD'));
    }

    public function profesjonalneSection4Create()
    {
        $details = ProfesjonalneIwdSection4::get();
        return view('profesjonalne-iwd.section4.create', compact('details'));
    }

    public function profesjonalneSection4Store(Request $request)
    {
            $IwdSection4Setting = [
                'title',
                'subtitle',
                'image_url',
                'paragraph_1',
                'paragraph_2'
            ];
            
            foreach ($IwdSection4Setting as $IwdSection4) {
                $value = $request->input($IwdSection4);
                $existingSetting = ProfesjonalneIwdSection4::where('type', $IwdSection4)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneIwdSection4::create(['type' => $IwdSection4, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-iwd-section4.index')->with('success', 'IWD section 4 updated successfully');
    }

    public function profesjonalneSection4Status($id)
    {
        $user = ProfesjonalneIwdSection4::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 5 - (Images-With-Description Section)
    public function profesjonalneSection5Index()
    {
        $section5IWD = ProfesjonalneIwdSection5::orderBy('id', 'desc')->get();
        return view('profesjonalne-iwd.section5.index', compact('section5IWD'));
    }

    public function profesjonalneSection5Create()
    {
        $details = ProfesjonalneIwdSection5::get();
        return view('profesjonalne-iwd.section5.create', compact('details'));
    }

    public function profesjonalneSection5Store(Request $request)
    {
            $IwdSection5Setting = [
                'quote',
                'video_url',
                'paragraph_1',
                'paragraph_2'
            ];
            
            foreach ($IwdSection5Setting as $IwdSection5) {
                $value = $request->input($IwdSection5);
                $existingSetting = ProfesjonalneIwdSection5::where('type', $IwdSection5)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneIwdSection5::create(['type' => $IwdSection5, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-iwd-section5.index')->with('success', 'IWD section 5 updated successfully');
    }

    public function profesjonalneSection5Status($id)
    {
        $user = ProfesjonalneIwdSection5::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 6 - (Images-With-Description Section)
    public function profesjonalneSection6Index()
    {
        $section6IWD = ProfesjonalneIwdSection6::orderBy('id', 'desc')->get();
        return view('profesjonalne-iwd.section6.index', compact('section6IWD'));
    }

    public function profesjonalneSection6Create()
    {
        $details = ProfesjonalneIwdSection6::get();
        return view('profesjonalne-iwd.section6.create', compact('details'));
    }

    public function profesjonalnesection6Store(Request $request)
    {
            $IwdSection6Setting = [
                'video_url',
                'quote',
                'subtitle',
                'paragraph_1',
                'paragraph_2',
                'paragraph_3'
            ];
            
            foreach ($IwdSection6Setting as $IwdSection6) {
                $value = $request->input($IwdSection6);
                $existingSetting = ProfesjonalneIwdSection6::where('type', $IwdSection6)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneIwdSection6::create(['type' => $IwdSection6, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-iwd-section6.index')->with('success', 'IWD section 6 updated successfully');
    }

    public function profesjonalneSection6Status($id)
    {
        $user = ProfesjonalneIwdSection6::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 7 - (Images-With-Description Section)
    public function profesjonalneSection7Index()
    {
        $section7IWD = ProfesjonalneIwdSection7::orderBy('id', 'desc')->get();
        return view('profesjonalne-iwd.section7.index', compact('section7IWD'));
    }

    public function profesjonalneSection7Create()
    {
        $details = ProfesjonalneIwdSection7::get();
        return view('profesjonalne-iwd.section7.create', compact('details'));
    }

    public function profesjonalneSection7Store(Request $request)
    {
            $IwdSection7Setting = [
                'video_url_1',
                'title',
                'paragraph_1',
                'video_url_2',
                'video_url_3',
                'paragraph_2',
                'paragraph_3',
                'video_url_4',
                'paragraph_4',
                'video_url_5',
                'bottom_title',
                'quoted_title',
                'image_url_1',
                'image_url_2'
            ];
            
            foreach ($IwdSection7Setting as $IwdSection7) {
                $value = $request->input($IwdSection7);
                $existingSetting = ProfesjonalneIwdSection7::where('type', $IwdSection7)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneIwdSection7::create(['type' => $IwdSection7, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-iwd-section7.index')->with('success', 'IWD section 7 updated successfully');
    }

    public function profesjonalneSection7Status($id)
    {
        $user = ProfesjonalneIwdSection7::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
