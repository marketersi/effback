<?php

namespace App\Http\Controllers;

use App\Models\IwdSection1;
use App\Models\IwdSection2;
use App\Models\IwdSection3;
use App\Models\IwdSection4;
use App\Models\IwdSection5;
use App\Models\IwdSection6;
use App\Models\IwdSection7;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class IWDSectionController extends Controller
{
    // Section 1 - (Images-With-Description Section)
    public function section1Index()
    {
        $sectionIWD = IwdSection1::orderBy('id', 'desc')->get();
        return view('images_with_description.section1.index', compact('sectionIWD'));
    }

    public function section1Create()
    {
        $details = IwdSection1::get();
        return view('images_with_description.section1.create', compact('details'));
    }

    public function section1Store(Request $request)
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
                $existingSetting = IwdSection1::where('type', $IwdSection1)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    IwdSection1::create(['type' => $IwdSection1, 'message' => $value]);
                }
            }
            return redirect()->route('homesection1.index')->with('success', 'IWD section 1 updated successfully');
    }

    public function sectionStatus($id)
    {
        $user = IwdSection1::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 2 - (Images-With-Description Section)
    public function section2Index()
    {
        $section2IWD = IwdSection2::orderBy('id', 'desc')->get();
        return view('images_with_description.section2.index', compact('section2IWD'));
    }

    public function section2Create()
    {
        $details = IwdSection2::get();
        return view('images_with_description.section2.create', compact('details'));
    }

    public function section2Store(Request $request)
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
                $existingSetting = IwdSection2::where('type', $IwdSection2)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    IwdSection2::create(['type' => $IwdSection2, 'message' => $value]);
                }
            }
            return redirect()->route('homesection2.index')->with('success', 'IWD section 2 updated successfully');
    }

    public function section2Status($id)
    {
        $user = IwdSection2::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 3 - (Images-With-Description Section)
    public function section3Index()
    {
        $section3IWD = IwdSection3::orderBy('id', 'desc')->get();
        return view('images_with_description.section3.index', compact('section3IWD'));
    }

    public function section3Create()
    {
        $details = IwdSection3::get();
        return view('images_with_description.section3.create', compact('details'));
    }

    public function section3Store(Request $request)
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
                $existingSetting = IwdSection3::where('type', $IwdSection3)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    IwdSection3::create(['type' => $IwdSection3, 'message' => $value]);
                }
            }
            return redirect()->route('homesection3.index')->with('success', 'IWD section 3 updated successfully');
    }

    public function section3Status($id)
    {
        $user = IwdSection3::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 4 - (Images-With-Description Section)
    public function section4Index()
    {
        $section4IWD = IwdSection4::orderBy('id', 'desc')->get();
        return view('images_with_description.section4.index', compact('section4IWD'));
    }

    public function section4Create()
    {
        $details = IwdSection4::get();
        return view('images_with_description.section4.create', compact('details'));
    }

    public function section4Store(Request $request)
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
                $existingSetting = IwdSection4::where('type', $IwdSection4)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    IwdSection4::create(['type' => $IwdSection4, 'message' => $value]);
                }
            }
            return redirect()->route('homesection4.index')->with('success', 'IWD section 4 updated successfully');
    }

    public function section4Status($id)
    {
        $user = IwdSection4::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 5 - (Images-With-Description Section)
    public function section5Index()
    {
        $section5IWD = IwdSection5::orderBy('id', 'desc')->get();
        return view('images_with_description.section5.index', compact('section5IWD'));
    }

    public function section5Create()
    {
        $details = IwdSection5::get();
        return view('images_with_description.section5.create', compact('details'));
    }

    public function section5Store(Request $request)
    {
            $IwdSection5Setting = [
                'quote',
                'video_url',
                'paragraph_1',
                'paragraph_2'
            ];
            
            foreach ($IwdSection5Setting as $IwdSection5) {
                $value = $request->input($IwdSection5);
                $existingSetting = IwdSection5::where('type', $IwdSection5)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    IwdSection5::create(['type' => $IwdSection5, 'message' => $value]);
                }
            }
            return redirect()->route('homesection5.index')->with('success', 'IWD section 5 updated successfully');
    }

    public function section5Status($id)
    {
        $user = IwdSection5::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 6 - (Images-With-Description Section)
    public function section6Index()
    {
        $section6IWD = IwdSection6::orderBy('id', 'desc')->get();
        return view('images_with_description.section6.index', compact('section6IWD'));
    }

    public function section6Create()
    {
        $details = IwdSection6::get();
        return view('images_with_description.section6.create', compact('details'));
    }

    public function section6Store(Request $request)
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
                $existingSetting = IwdSection6::where('type', $IwdSection6)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    IwdSection6::create(['type' => $IwdSection6, 'message' => $value]);
                }
            }
            return redirect()->route('homesection6.index')->with('success', 'IWD section 6 updated successfully');
    }

    public function section6Status($id)
    {
        $user = IwdSection6::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    // Section 7 - (Images-With-Description Section)
    public function section7Index()
    {
        $section7IWD = IwdSection7::orderBy('id', 'desc')->get();
        return view('images_with_description.section7.index', compact('section7IWD'));
    }

    public function section7Create()
    {
        $details = IwdSection7::get();
        return view('images_with_description.section7.create', compact('details'));
    }

    public function section7Store(Request $request)
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
                $existingSetting = IwdSection7::where('type', $IwdSection7)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    IwdSection7::create(['type' => $IwdSection7, 'message' => $value]);
                }
            }
            return redirect()->route('homesection7.index')->with('success', 'IWD section 7 updated successfully');
    }

    public function section7Status($id)
    {
        $user = IwdSection7::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
