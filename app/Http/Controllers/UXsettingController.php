<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Copywriting;
use App\Models\UxCounterData;
use App\Models\UXexecutive;
use App\Models\UXFAQcardModel;
use App\Models\UXFAQModel;
use App\Models\UXgoodProcess;
use App\Models\uximage;
use App\Models\UXinfo;
use App\Models\UXslider;
use App\Models\UXstages;
use App\Models\UXsystematically;
use App\Models\UXVideoTab;
use App\Models\UXwebsite;

use function Ramsey\Uuid\v1;

class UXsettingController extends Controller
{

    public function HeroSection()
    {

        //$herosection = Copywriting::get();
        $herosection = Copywriting::where('type', 'title1')
            ->orWhere('type', 'title2')
            ->orWhere('type', 'styled_title')
            ->orWhere('type', 'animated_text')
            ->orWhere('type', 'video_url')
            ->orWhere('type', 'description1')
            ->orWhere('type', 'description2')
            ->get();
        return view('UXsetting.HeroSectionIndex', compact('herosection'));
    }

    public function HeroSectionForm()
    {
        $details = Copywriting::orderBy('id', 'desc')->get();
        return view('UXsetting.HeroSectionForm', compact("details"));
    }

    public function HeroSectionStore(Request $request)
    {
        //dd($request->all());
        try {
            $herosection = [
                'title1', 'title2', 'styled_title', 'animated_text', 'video_url', 'description1', 'description2'
            ];

            foreach ($herosection as $hero) {
                $value = $request->input($hero);
                $exesting = Copywriting::where('type', $hero)->first();
                if ($exesting) {
                    $exesting->update(['message' => $value]);
                } else {
                    Copywriting::create(['type' => $hero, 'message' => $value]);
                }
            }


            return redirect()->route('UXhero.index')->with('success', 'Hero Section updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('UXhero.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }


    //competion index
    public function CompetetionIndex()
    {

        // $competitionindex = Copywriting::get();
        $competitionindex = Copywriting::where('type', 'compt_title')
            ->orWhere('type', 'compt_image')
            ->orWhere('type', 'compt_description1')
            ->orWhere('type', 'compt_description2')
            ->orWhere('type', 'compt_description3')
            ->orWhere('type', 'compt_animated_Text')
            ->orWhere('type', 'compt_animated_Number')
            ->get();
        return view('UXsetting.CompetetionIndex', compact('competitionindex'));
    }

    public function CompetetionForm()
    {
        $details = Copywriting::orderBy('id', 'desc')->get();
        return view('UXsetting.CometetionForm', compact("details"));
    }


    public function CompetetionStore(Request $request)
    {
        //dd($request->all());
        try {
            $herosection = [
                'compt_title', 'compt_image', 'compt_description1', 'compt_description2', 'compt_description3', 'compt_animated_Text', 'compt_animated_Number'
            ];

            foreach ($herosection as $hero) {
                $value = $request->input($hero);
                $exesting = Copywriting::where('type', $hero)->first();
                if ($exesting) {
                    $exesting->update(['message' => $value]);
                } else {
                    Copywriting::create(['type' => $hero, 'message' => $value]);
                }
            }


            return redirect()->route('UXcompetetion.index')->with('success', 'updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('UXcompetetion.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
     public function CompetetionStatus($id)
    {
        $user = Copywriting::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }


    //counter data--------------( seperate table )
    public function CounterIndex()
    {

        $counter = UxCounterData::get();
        return view('UXsetting.counterDataIndex', compact('counter'));
    }

    public function CounterForm()
    {
        $details = UxCounterData::orderBy('id', 'desc')->get();
        return view('UXsetting.CounterDataForm', compact("details"));
    }


    public function CounterFormSubmit(Request $request)
    {
        try {
            $user = new UxCounterData;
            $user->image = $request->image;
            $user->description = $request->description;
            $user->save();

            return redirect()->route('UXcounter.index')->with('success', 'Added Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('UXcounter.form')->with('error', 'An error occurred. Please try again.');
        }

        //return view('TeamScreen.Section9Cards');
    }


    public function CounterEdit(Request $request)
    {
        //dd('hello');
        $id = $request->input('id');
        $findid = UxCounterData::find($id);
        return view('UXsetting.CounterFormEdit', compact('findid'));
    }

    public function CounterUpdate(Request $request)
    {
        //dd('hello');
        $request->validate([
            'image' => '',
            'description' => '',
        ]);
        //dd($request);
        $Id = $request->input('id');
        $post = UxCounterData::find($Id);
        $post->update([
            'image' => $request->image,
            'description' => $request->description,
        ]);


        if ($post == false) {
            return redirect()->route('UXcounter.edit')->with('error', 'Somthing went wrong !!');
        }

        return redirect()->route('UXcounter.index')->with('success', 'updated Successfully');
    }


    public function IgnoreSiteIndex()
    {
        $counter = Copywriting::where('type', 'image')
            ->orWhere('type', 'title')
            ->orWhere('type', 'descript1')
            ->orWhere('type', 'descript2')
            ->get();
        return view('UXsetting.IgnoresiteIndex', compact('counter'));
    }


    public function IgnoreSiteForm()
    {
        $details = Copywriting::orderBy('id', 'desc')->get();
        return view('UXsetting.IgnoreSiteForm', compact("details"));
    }

    public function IgnoreSiteStore(Request $request)
    {
        //dd($request->all());
        try {
            $herosection = [
                'image', 'title', 'descript1', 'descript2'
            ];

            foreach ($herosection as $hero) {
                $value = $request->input($hero);
                $exesting = Copywriting::where('type', $hero)->first();
                if ($exesting) {
                    $exesting->update(['message' => $value]);
                } else {
                    Copywriting::create(['type' => $hero, 'message' => $value]);
                }
            }


            return redirect()->route('UXignoreSites.index')->with('success', 'updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('UXignoreSites.form')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
    // Systematically Section
    public function SystematicallyIndex()
    {
        $systematically = UXsystematically::orderBy('id', 'desc')->get();
        return view('UXsetting.Systematically.index', compact('systematically'));
    }

    public function SystematicallyCreate()
    {
        $details = UXsystematically::get();
        return view('UXsetting.Systematically.create', compact('details'));
    }

    public function SystematicallyStore(Request $request)
    {
        $systematicallySetting = [
            'image',
            'title',
            'subtitle',
            'description',
            'right_image',
        ];

        foreach ($systematicallySetting as $systematically) {
            $value = $request->input($systematically);
            $existingSetting = UXsystematically::where('type', $systematically)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                UXsystematically::create(['type' => $systematically, 'message' => $value]);
            }
        }
        return redirect()->route('UXsystematically.index')->with('success', 'Systematically updated successfully');
    }

    public function SystematicallyStatus($id)
    {
        $user = UXsystematically::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // FAQ Section -
    public function faqIndex()
    {
        $FAQcontent = UXFAQModel::orderBy('id', 'desc')->get();
        return view('UXsetting.FAQ-title.index', compact('FAQcontent'));
    }

    public function faqCreate()
    {
        $details = UXFAQModel::get();
        return view('UXsetting.FAQ-title.create', compact('details'));
    }

    public function faqStore(Request $request)
    {
        $FAQcontentSetting = [
            'title'
        ];

        foreach ($FAQcontentSetting as $FAQcontent) {
            $value = $request->input($FAQcontent);
            $existingSetting = UXFAQModel::where('type', $FAQcontent)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                UXFAQModel::create(['type' => $FAQcontent, 'message' => $value]);
            }
        }
        return redirect()->route('UXfaqTitle.index')->with('success', 'FAQ Content updated successfully');
    }

    public function faqStatus($id)
    {
        $user = UXFAQModel::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    //FAQ Card -
    public function faqCardIndex()
    {
        $FAQcard = UXFAQcardModel::orderBy('id', 'asc')->get();
        return view('UXsetting.FAQ-card.index', compact('FAQcard'));
    }

    public function faqCardCreate()
    {
        return view('UXsetting.FAQ-card.create');
    }
    public function faqCardEdit(Request $request)
    {
        $FAQcard = UXFAQcardModel::find($request->id);
        return view('UXsetting.FAQ-card.edit', compact('FAQcard'));
    }

    public function faqCardStore(Request $request)
    {
        $request->validate([
            'question',
            'answer'
        ]);
        try {

            if (isset($request->update_id)) {
                $FAQcard = UXFAQcardModel::find($request->update_id);
            } else {

                $FAQcard = new UXFAQcardModel;
            }
            $FAQcard->question = $request->question;
            $FAQcard->answer = $request->answer;
            $FAQcard->save();

            return redirect()->route('UXfaqCard.index')->with('success', 'updated Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('UXfaqCard.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    // Executive Section -
    public function executiveIndex()
    {
        $executive = UXexecutive::orderBy('id', 'desc')->get();
        return view('UXsetting.Executive-Section.index', compact('executive'));
    }

    public function executiveCreate()
    {
        $details = UXexecutive::get();
        return view('UXsetting.Executive-Section.create', compact('details'));
    }

    public function executiveStore(Request $request)
    {
        $executiveSetting = [
            'title',
            'paragraph_1',
            'paragraph_2',
            'paragraph_3',
            'paragraph_4',
            'video_url',
        ];

        foreach ($executiveSetting as $executive) {
            $value = $request->input($executive);
            $existingSetting = UXexecutive::where('type', $executive)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                UXexecutive::create(['type' => $executive, 'message' => $value]);
            }
        }
        return redirect()->route('UXexecutive.index')->with('success', 'Executive Section updated successfully');
    }

    public function executiveStatus($id)
    {
        $user = UXexecutive::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    //Slider Section -
    public function sliderIndex()
    {
        $sliderIMG = UXslider::orderBy('id', 'asc')->get();
        return view('UXsetting.Slider-Section.index', compact('sliderIMG'));
    }

    public function sliderCreate()
    {
        return view('UXsetting.Slider-Section.create');
    }
    public function sliderEdit(Request $request)
    {
        $sliderIMG = UXslider::find($request->id);
        return view('UXsetting.Slider-Section.edit', compact('sliderIMG'));
    }

    public function sliderStore(Request $request)
    {
        $request->validate([
            'Image'
        ]);
        try {

            if (isset($request->update_id)) {
                $sliderIMG = UXslider::find($request->update_id);
            } else {

                $sliderIMG = new UXslider;
            }
            $sliderIMG->Image = $request->Image;
            $sliderIMG->save();

            return redirect()->route('UXslider.index')->with('success', 'updated Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('UXslider.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    // Website Section -
    public function websiteIndex()
    {
        $website = UXwebsite::orderBy('id', 'desc')->get();
        return view('UXsetting.Website-Section.index', compact('website'));
    }

    public function websiteCreate()
    {
        $details = UXwebsite::get();
        return view('UXsetting.Website-Section.create', compact('details'));
    }

    public function websiteStore(Request $request)
    {
        $websiteSetting = [
            'title',
            'image_1',
            'image_2',
            'subtitle'
        ];

        foreach ($websiteSetting as $website) {
            $value = $request->input($website);
            $existingSetting = UXwebsite::where('type', $website)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                UXwebsite::create(['type' => $website, 'message' => $value]);
            }
        }
        return redirect()->route('UXwebsite.index')->with('success', 'Website Section updated successfully');
    }

    public function websiteStatus($id)
    {
        $user = UXwebsite::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Good Process Section -
    public function goodProcessIndex()
    {
        $goodProcess = UXgoodProcess::orderBy('id', 'desc')->get();
        return view('UXsetting.GoodProcess.index', compact('goodProcess'));
    }

    public function goodProcessCreate()
    {
        $details = UXgoodProcess::get();
        return view('UXsetting.GoodProcess.create', compact('details'));
    }

    public function goodProcessStore(Request $request)
    {
        $goodProcessSetting = [
            'title',
            'paragraph'
        ];

        foreach ($goodProcessSetting as $goodProcess) {
            $value = $request->input($goodProcess);
            $existingSetting = UXgoodProcess::where('type', $goodProcess)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                UXgoodProcess::create(['type' => $goodProcess, 'message' => $value]);
            }
        }
        return redirect()->route('UXgoodProcess.index')->with('success', 'Good Process Section updated successfully');
    }

    public function goodProcessStatus($id)
    {
        $user = UXgoodProcess::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    //Good Process Section ==>> Stages Part -
    public function StagesIndex()
    {
        $stages = UXstages::orderBy('id', 'asc')->get();
        return view('UXsetting.GoodProcess.Stages.index', compact('stages'));
    }

    public function StagesCreate()
    {
        return view('UXsetting.GoodProcess.Stages.create');
    }
    public function StagesEdit(Request $request)
    {
        $stages = UXstages::find($request->id);
        return view('UXsetting.GoodProcess.Stages.edit', compact('stages'));
    }

    public function StagesStore(Request $request)
    {
        $request->validate([
            'number',
            'video_url',
            'title',
            'subtitle',
            'description'
        ]);
        try {

            if (isset($request->update_id)) {
                $stages = UXstages::find($request->update_id);
            } else {

                $stages = new UXstages;
            }
            $stages->number = $request->number;
            $stages->video_url = $request->video_url;
            $stages->title = $request->title;
            $stages->subtitle = $request->subtitle;
            $stages->description = $request->description;
            $stages->save();

            return redirect()->route('UXstages.index')->with('success', 'updated Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('UXstages.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    // UXinfo Section -
    public function UXinfoIndex()
    {
        $UXinfo = UXinfo::orderBy('id', 'desc')->get();
        return view('UXsetting.UXinfo-Section.index', compact('UXinfo'));
    }

    public function UXinfoCreate()
    {
        $details = UXinfo::get();
        return view('UXsetting.UXinfo-Section.create', compact('details'));
    }

    public function UXinfoStore(Request $request)
    {
        $UXinfoSetting = [
            'title',
            'paragraph_1',
            'paragraph_2',
            'image_1',
            'image_2',
            'image_3',
            'image_4',
            'image_5',
            'paragraph_3',
            'paragraph_4',
            'paragraph_5',
            'button_text'
        ];

        foreach ($UXinfoSetting as $UXinfo) {
            $value = $request->input($UXinfo);
            $existingSetting = UXinfo::where('type', $UXinfo)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                UXinfo::create(['type' => $UXinfo, 'message' => $value]);
            }
        }
        return redirect()->route('UXinfo.index')->with('success', 'UXinfo Section updated successfully');
    }

    public function UXinfoStatus($id)
    {
        $user = UXinfo::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    //UXinfo Section ==>> Video Tab Part -
    public function videoTabIndex()
    {
        $videoTab = UXVideoTab::orderBy('id', 'asc')->get();
        return view('UXsetting.UXinfo-Section.Video-Tab.index', compact('videoTab'));
    }

    public function videoTabCreate()
    {
        return view('UXsetting.UXinfo-Section.Video-Tab.create');
    }
    public function videoTabEdit(Request $request)
    {
        $videoTab = UXVideoTab::find($request->id);
        return view('UXsetting.UXinfo-Section.Video-Tab.edit', compact('videoTab'));
    }

    public function videoTabStore(Request $request)
    {
        $request->validate([
            'video',
            'title'
        ]);
        try {

            if (isset($request->update_id)) {
                $videoTab = UXVideoTab::find($request->update_id);
            } else {

                $videoTab = new UXVideoTab;
            }
            $videoTab->video = $request->video;
            $videoTab->title = $request->title;
            $videoTab->save();

            return redirect()->route('UXvideoTab.index')->with('success', 'updated Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('UXvideoTab.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    
    // COMPLEX SECTION
    public function complexIndex()
    {
        $data = DB::table('ux_complex_section')->get();
        return view('UXsetting.Complex-Section.index', compact('data'));
    }

    public function complexCreate()
    {
        $details = DB::table('ux_complex_section')->get();
        return view('UXsetting.Complex-Section.create', compact('details'));
    }

    public function complexStore(Request $request)
    {
        $UXinfoSetting = [
            'title',
            'paragraph_1',
            'paragraph_2',
            'paragraph_3',
            'animated_text_1',
            'animated_text_2',
            'animated_text_3',
        ];

        foreach ($UXinfoSetting as $UXinfo) {
            $value = $request->input($UXinfo);
            $existingSetting = DB::table('ux_complex_section')->where('type', $UXinfo)->first();

            if ($existingSetting) {
                DB::table('ux_complex_section')->where('type', $UXinfo)->update(['message' => $value]);
            } else {
                DB::table('ux_complex_section')->insert(['type' => $UXinfo, 'message' => $value]);
            }
        }
        return redirect()->route('UXcomplex.index')->with('success', 'Updated successfully');
    }
    
    
    // Card one
    public function UXCardOneIndex()
    {
        $details = DB::table('ux_card_one')->get();
        return view('UXsetting.Cards.Card-one.index',compact('details'));
    }

    public function UXCardOneCreate()
    {
        $details = DB::table('ux_card_one')->get();
        return view('UXsetting.Cards.Card-one.create',compact('details'));
    }

    public function UXCardOneStore(Request $request)
    {
        $setting = [
            'title',
            'image',
            'back_title',
            'back_image',
            'back_image_2',
            'text'
        ];

        foreach($setting as $data){
            $value = $request->input($data);
            $existingSetting = DB::table('ux_card_one')->where('type', $data)->first();

            if($existingSetting){
                DB::table('ux_card_one')->where('type', $data)->update(['message' => $value]);
            }else{
                DB::table('ux_card_one')->insert(['type' => $data , 'message' => $value]);
            }
        }
        
        return redirect()->route('UXCardOne.index')->with('success', 'Updated Successfully');
    }

    // Card Two
    public function UXCardTwoIndex()
    {
        $details = DB::table('ux_card_two')->get();
        return view('UXsetting.Cards.Card-two.index',compact('details'));
    }

    public function UXCardTwoCreate()
    {
        $details = DB::table('ux_card_two')->get();
        return view('UXsetting.Cards.Card-two.create',compact('details'));
    }

    public function UXCardTwoStore(Request $request)
    {
        $setting = [
            'title',
            'image',
            'back_title',
            'back_image',
            'back_image_2',
            'text'
        ];

        foreach($setting as $data){
            $value = $request->input($data);
            $existingSetting = DB::table('ux_card_two')->where('type', $data)->first();

            if($existingSetting){
                DB::table('ux_card_two')->where('type', $data)->update(['message' => $value]);
            }else{
                DB::table('ux_card_two')->insert(['type' => $data , 'message' => $value]);
            }
        }

        return redirect()->route('UXCardTwo.index')->with('success', 'Updated Successfully');
    }
    
    // Card Three
    public function UXCardThreeIndex()
    {
        $details = DB::table('ux_card_three')->get();
        return view('UXsetting.Cards.Card-three.index',compact('details'));
    }

    public function UXCardThreeCreate()
    {
        $details = DB::table('ux_card_three')->get();
        return view('UXsetting.Cards.Card-three.create',compact('details'));
    }

    public function UXCardThreeStore(Request $request)
    {
        $setting = [
            'title',
            'image',
            'back_title',
            'back_image',
            'back_image_2',
            'text'
        ];

        foreach($setting as $data){
            $value = $request->input($data);
            $existingSetting = DB::table('ux_card_three')->where('type', $data)->first();

            if($existingSetting){
                DB::table('ux_card_three')->where('type', $data)->update(['message' => $value]);
            }else{
                DB::table('ux_card_three')->insert(['type' => $data , 'message' => $value]);
            }
        }

        return redirect()->route('UXCardThree.index')->with('success', 'Updated Successfully');
    }
    
    // Card Four
    public function UXCardFourIndex()
    {
        $details = DB::table('ux_card_four')->get();
        return view('UXsetting.Cards.Card-four.index',compact('details'));
    }

    public function UXCardFourCreate()
    {
        $details = DB::table('ux_card_four')->get();
        return view('UXsetting.Cards.Card-four.create',compact('details'));
    }

    public function UXCardFourStore(Request $request)
    {
        $setting = [
            'title',
            'image',
            'back_title',
            'back_image',
            'back_image_2',
            'text'
        ];

        foreach($setting as $data){
            $value = $request->input($data);
            $existingSetting = DB::table('ux_card_four')->where('type', $data)->first();

            if($existingSetting){
                DB::table('ux_card_four')->where('type', $data)->update(['message' => $value]);
            }else{
                DB::table('ux_card_four')->insert(['type' => $data , 'message' => $value]);
            }
        }

        return redirect()->route('UXCardFour.index')->with('success', 'Updated Successfully');
    }
}
