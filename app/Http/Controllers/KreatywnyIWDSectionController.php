<?php

namespace App\Http\Controllers;

use App\Models\KreatywnyIwdSection1;
use App\Models\KreatywnyIwdSection2;
use App\Models\KreatywnyIwdSection3;
use App\Models\KreatywnyIwdSection4;
use App\Models\KreatywnyIwdSection5;
use App\Models\KreatywnyIwdSection6;
use App\Models\KreatywnyIwdSection7;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class KreatywnyIWDSectionController extends Controller
{
    // Section 1 - (Images-With-Description Section)
    public function kreatywnySection1Index()
    {
        $sectionIWD = KreatywnyIwdSection1::orderBy('id', 'desc')->get();
        return view('kreatywny-iwd.section1.index', compact('sectionIWD'));
    }

    public function kreatywnySection1Create()
    {
        $details = KreatywnyIwdSection1::get();
        return view('kreatywny-iwd.section1.create', compact('details'));
    }

    public function kreatywnySection1Store(Request $request)
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
                $existingSetting = KreatywnyIwdSection1::where('type', $IwdSection1)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyIwdSection1::create(['type' => $IwdSection1, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-iwd-section1.index')->with('success', 'IWD section 1 updated successfully');
    }

    public function kreatywnySection1Status($id)
    {
        $user = KreatywnyIwdSection1::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 2 - (Images-With-Description Section)
    public function kreatywnySection2Index()
    {
        $section2IWD = KreatywnyIwdSection2::orderBy('id', 'desc')->get();
        return view('kreatywny-iwd.section2.index', compact('section2IWD'));
    }

    public function kreatywnySection2Create()
    {
        $details = KreatywnyIwdSection2::get();
        return view('kreatywny-iwd.section2.create', compact('details'));
    }

    public function kreatywnySection2Store(Request $request)
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
                $existingSetting = KreatywnyIwdSection2::where('type', $IwdSection2)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyIwdSection2::create(['type' => $IwdSection2, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-iwd-section2.index')->with('success', 'IWD section 2 updated successfully');
    }

    public function kreatywnySection2Status($id)
    {
        $user = KreatywnyIwdSection2::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 3 - (Images-With-Description Section)
    public function kreatywnySection3Index()
    {
        $section3IWD = KreatywnyIwdSection3::orderBy('id', 'desc')->get();
        return view('kreatywny-iwd.section3.index', compact('section3IWD'));
    }

    public function kreatywnySection3Create()
    {
        $details = KreatywnyIwdSection3::get();
        return view('kreatywny-iwd.section3.create', compact('details'));
    }

    public function kreatywnySection3Store(Request $request)
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
                $existingSetting = KreatywnyIwdSection3::where('type', $IwdSection3)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyIwdSection3::create(['type' => $IwdSection3, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-iwd-section3.index')->with('success', 'IWD section 3 updated successfully');
    }

    public function kreatywnySection3Status($id)
    {
        $user = KreatywnyIwdSection3::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 4 - (Images-With-Description Section)
    public function kreatywnySection4Index()
    {
        $section4IWD = KreatywnyIwdSection4::orderBy('id', 'desc')->get();
        return view('kreatywny-iwd.section4.index', compact('section4IWD'));
    }

    public function kreatywnySection4Create()
    {
        $details = KreatywnyIwdSection4::get();
        return view('kreatywny-iwd.section4.create', compact('details'));
    }

    public function kreatywnySection4Store(Request $request)
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
                $existingSetting = KreatywnyIwdSection4::where('type', $IwdSection4)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyIwdSection4::create(['type' => $IwdSection4, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-iwd-section4.index')->with('success', 'IWD section 4 updated successfully');
    }

    public function kreatywnySection4Status($id)
    {
        $user = KreatywnyIwdSection4::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 5 - (Images-With-Description Section)
    public function kreatywnySection5Index()
    {
        $section5IWD = KreatywnyIwdSection5::orderBy('id', 'desc')->get();
        return view('kreatywny-iwd.section5.index', compact('section5IWD'));
    }

    public function kreatywnySection5Create()
    {
        $details = KreatywnyIwdSection5::get();
        return view('kreatywny-iwd.section5.create', compact('details'));
    }

    public function kreatywnySection5Store(Request $request)
    {
            $IwdSection5Setting = [
                'quote',
                'video_url',
                'paragraph_1',
                'paragraph_2'
            ];
            
            foreach ($IwdSection5Setting as $IwdSection5) {
                $value = $request->input($IwdSection5);
                $existingSetting = KreatywnyIwdSection5::where('type', $IwdSection5)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyIwdSection5::create(['type' => $IwdSection5, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-iwd-section5.index')->with('success', 'IWD section 5 updated successfully');
    }

    public function kreatywnySection5Status($id)
    {
        $user = KreatywnyIwdSection5::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 6 - (Images-With-Description Section)
    public function kreatywnySection6Index()
    {
        $section6IWD = KreatywnyIwdSection6::orderBy('id', 'desc')->get();
        return view('kreatywny-iwd.section6.index', compact('section6IWD'));
    }

    public function kreatywnySection6Create()
    {
        $details = KreatywnyIwdSection6::get();
        return view('kreatywny-iwd.section6.create', compact('details'));
    }

    public function kreatywnysection6Store(Request $request)
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
                $existingSetting = KreatywnyIwdSection6::where('type', $IwdSection6)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyIwdSection6::create(['type' => $IwdSection6, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-iwd-section6.index')->with('success', 'IWD section 6 updated successfully');
    }

    public function kreatywnySection6Status($id)
    {
        $user = KreatywnyIwdSection6::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 7 - (Images-With-Description Section)
    public function kreatywnySection7Index()
    {
        $section7IWD = KreatywnyIwdSection7::orderBy('id', 'desc')->get();
        return view('kreatywny-iwd.section7.index', compact('section7IWD'));
    }

    public function kreatywnySection7Create()
    {
        $details = KreatywnyIwdSection7::get();
        return view('kreatywny-iwd.section7.create', compact('details'));
    }

    public function kreatywnySection7Store(Request $request)
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
                $existingSetting = KreatywnyIwdSection7::where('type', $IwdSection7)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyIwdSection7::create(['type' => $IwdSection7, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-iwd-section7.index')->with('success', 'IWD section 7 updated successfully');
    }

    public function kreatywnySection7Status($id)
    {
        $user = KreatywnyIwdSection7::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
