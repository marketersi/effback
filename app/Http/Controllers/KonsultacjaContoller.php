<?php

namespace App\Http\Controllers;

use App\Models\CustomerReview;
use App\Models\KonsultacjaDropdown1;
use App\Models\KonsultacjaDropdown2;
use App\Models\KonsultacjaDropdown3;
use App\Models\KonsultacjaDropdown4;
use App\Models\KonsultacjaFormContents;
use App\Models\PricingOptionModel;
use App\Models\ProjectCards;
use App\Models\SelectedProject;
use App\Models\WhatToExpect;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class KonsultacjaContoller extends Controller
{
    // Pricing Option Content
    public function POIndex()
    {
        $pricingOption = PricingOptionModel::orderBy('id', 'desc')->get();
        return view('pricing-option.content.index', compact('pricingOption'));
    }

    public function POCreate()
    {
        $details = PricingOptionModel::get();
        return view('pricing-option.content.create', compact('details'));
    }

    public function POStore(Request $request)
    {
        $pricingOptionSetting = [
            'title',
            'subtitle',
            'brand_quote',
            'brand_image',
            'brand_image_mobile',
        ];

        foreach ($pricingOptionSetting as $pricingOption) {
            $value = $request->input($pricingOption);
            $existingSetting = PricingOptionModel::where('type', $pricingOption)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                PricingOptionModel::create(['type' => $pricingOption, 'message' => $value]);
            }
        }
        return redirect()->route('PO.index')->with('success', 'Pricing Option updated successfully');
    }

    public function POStatus($id)
    {
        $user = PricingOptionModel::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Form-Contents
    public function formContentsIndex()
    {
        $formContents = KonsultacjaFormContents::orderBy('id', 'desc')->get();
        return view('pricing-option.form-content.index', compact('formContents'));
    }

    public function formContentsCreate()
    {
        $details = KonsultacjaFormContents::get();
        return view('pricing-option.form-content.create', compact('details'));
    }

    public function formContentsStore(Request $request)
    {
        $formContentsSetting = [
            'section_1_title_1',
            'section_1_title_2',
            'section_2_title_1',
            'section_2_title_2',
            'section_2_subtitle',
            'section_3_title_1',
            'section_3_title_2',
            'section_4_title',
            'model_title',
            'modal_description',
            'button_text',
            'contact_title',
            'contact_info',
            'contact_image',
            'contact_text',
            'contact_number',
            'message_response',
            'greeting_message',
            'link_prompt_text',
            'social_media_text',
            'display_picture',
            'email_svg'
        ];

        foreach ($formContentsSetting as $formContents) {
            $value = $request->input($formContents);
            $existingSetting = KonsultacjaFormContents::where('type', $formContents)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                KonsultacjaFormContents::create(['type' => $formContents, 'message' => $value]);
            }
        }
        return redirect()->route('formContents.index')->with('success', 'Form Contents updated successfully');
    }

    public function formContentsStatus($id)
    {
        $user = KonsultacjaFormContents::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    //Pricing Option Form Section-1 Dropdown
    public function Dropdown1Index()
    {
        $dropdown1 = KonsultacjaDropdown1::orderBy('id', 'asc')->get();
        return view('pricing-option.dropdown-1.index', compact('dropdown1'));
    }

    public function Dropdown1Create()
    {
        return view('pricing-option.dropdown-1.create');
    }

    public function Dropdown1Edit(Request $request)
    {
        $dropdown1 = KonsultacjaDropdown1::find($request->id);
        return view('pricing-option.dropdown-1.edit', compact('dropdown1'));
    }

    public function Dropdown1Store(Request $request)
    {
        $request->validate([
            'value',
            'lable'
        ]);


            if (isset($request->update_id)) {
                $dropdown1 = KonsultacjaDropdown1::find($request->update_id);

            } else {
                $dropdown1 = new KonsultacjaDropdown1;
            }

            $dropdown1->value = $request->value;
            $dropdown1->lable = $request->lable;
            $dropdown1->save();
            return redirect()->route('formDropdown1.index')->with('success', 'update Successfully!!');
    }

    //Pricing Option Form Section-2 Dropdown
    public function Dropdown2Index()
    {
        $dropdown2 = KonsultacjaDropdown2::orderBy('id', 'asc')->get();
        return view('pricing-option.dropdown-2.index', compact('dropdown2'));
    }

    public function Dropdown2Create()
    {
        return view('pricing-option.dropdown-2.create');
    }

    public function Dropdown2Edit(Request $request)
    {
        $dropdown2 = KonsultacjaDropdown2::find($request->id);
        return view('pricing-option.dropdown-2.edit', compact('dropdown2'));
    }

    public function Dropdown2Store(Request $request)
    {
        $request->validate([
            'value',
            'lable'
        ]);


            if (isset($request->update_id)) {
                $dropdown2 = KonsultacjaDropdown2::find($request->update_id);

            } else {
                $dropdown2 = new KonsultacjaDropdown2;
            }

            $dropdown2->value = $request->value;
            $dropdown2->lable = $request->lable;
            $dropdown2->save();
            return redirect()->route('formDropdown2.index')->with('success', 'update Successfully!!');
    }

    //Pricing Option Form Section-3 Dropdown
    public function Dropdown3Index()
    {
        $dropdown3 = KonsultacjaDropdown3::orderBy('id', 'asc')->get();
        return view('pricing-option.dropdown-3.index', compact('dropdown3'));
    }

    public function Dropdown3Create()
    {
        return view('pricing-option.dropdown-3.create');
    }

    public function Dropdown3Edit(Request $request)
    {
        $dropdown3 = KonsultacjaDropdown3::find($request->id);
        return view('pricing-option.dropdown-3.edit', compact('dropdown3'));
    }

    public function Dropdown3Store(Request $request)
    {
        $request->validate([
            'value',
            'lable'
        ]);


            if (isset($request->update_id)) {
                $dropdown3 = KonsultacjaDropdown3::find($request->update_id);

            } else {
                $dropdown3 = new KonsultacjaDropdown3;
            }

            $dropdown3->value = $request->value;
            $dropdown3->lable = $request->lable;
            $dropdown3->save();
            return redirect()->route('formDropdown3.index')->with('success', 'update Successfully!!');
    }

    //Pricing Option Form Section-4 Dropdown
    public function Dropdown4Index()
    {
        $dropdown4 = KonsultacjaDropdown4::orderBy('id', 'asc')->get();
        return view('pricing-option.dropdown-4.index', compact('dropdown4'));
    }

    public function Dropdown4Create()
    {
        return view('pricing-option.dropdown-4.create');
    }

    public function Dropdown4Edit(Request $request)
    {
        $dropdown4 = KonsultacjaDropdown4::find($request->id);
        return view('pricing-option.dropdown-4.edit', compact('dropdown4'));
    }

    public function Dropdown4Store(Request $request)
    {
        $request->validate([
            'value',
            'lable'
        ]);


            if (isset($request->update_id)) {
                $dropdown4 = KonsultacjaDropdown4::find($request->update_id);

            } else {
                $dropdown4 = new KonsultacjaDropdown4;
            }

            $dropdown4->value = $request->value;
            $dropdown4->lable = $request->lable;
            $dropdown4->save();
            return redirect()->route('formDropdown4.index')->with('success', 'update Successfully!!');
    }

    // Why-Us Page
    public function whyusIndex()
    {
        $WhyUs = WhyUs::orderBy('id', 'desc')->get();
        return view('konsultacja.why-us.index', compact('WhyUs'));
    }

    public function whyusCreate()
    {
        $details = WhyUs::get();
        return view('konsultacja.why-us.create', compact('details'));
    }

    public function whyusStore(Request $request)
    {
        $whyusSetting = [
            'title',
            'subtitle',
            'paragraph_1',
            'paragraph_2',
            'paragraph_3',
            'paragraph_4',
            'image_url_1',
            'question_1',
            'info_1',
            'info_image_url_1',
            'question_2',
            'info_2',
            'info_image_url_2'
        ];

        foreach ($whyusSetting as $whyus) {
            $value = $request->input($whyus);
            $existingSetting = WhyUs::where('type', $whyus)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                WhyUs::create(['type' => $whyus, 'message' => $value]);
            }
        }
        return redirect()->route('whyus.index')->with('success', 'Why Us Section updated successfully');
    }

    public function whyusStatus($id)
    {
        $user = WhyUs::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Customer Review

    public function customerreviewIndex()
    {
        $customerReview = CustomerReview::orderBy('id', 'desc')->get();
        return view('konsultacja.customer-review.index', compact('customerReview'));
    }

    public function customerreviewCreate()
    {
        $details = CustomerReview::get();
        return view('konsultacja.customer-review.create', compact('details'));
    }

    public function customerreviewStore(Request $request)
    {
        $customerreviewSetting = [
            'title',
            'subtitle',
            'image_url'
        ];

        foreach ($customerreviewSetting as $customerReview) {
            $value = $request->input($customerReview);
            $existingSetting = CustomerReview::where('type', $customerReview)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                CustomerReview::create(['type' => $customerReview, 'message' => $value]);
            }
        }
        return redirect()->route('customerreview.index')->with('success', 'Why Us Section updated successfully');
    }

    public function customerreviewStatus($id)
    {
        $user = CustomerReview::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // What to expect

    public function whattoexpectIndex()
    {
        $whatToExpect = WhatToExpect::orderBy('id', 'desc')->get();
        return view('konsultacja.what-to-expect.index', compact('whatToExpect'));
    }

    public function whattoexpectCreate()
    {
        $details = WhatToExpect::get();
        return view('konsultacja.what-to-expect.create', compact('details'));
    }

    public function whattoexpectStore(Request $request)
    {
        $whattoexpectSetting = [
            'title',
            'paragraph_1',
            'image_url_left',
            'image_url_right',
            'paragraph_2',
            'paragraph_3',
            'paragraph_4',
            'paragraph_5',
            'paragraph_6',
            'brand_logo',
        ];

        foreach ($whattoexpectSetting as $whattoexpect) {
            $value = $request->input($whattoexpect);
            $existingSetting = WhatToExpect::where('type', $whattoexpect)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                WhatToExpect::create(['type' => $whattoexpect, 'message' => $value]);
            }
        }
        return redirect()->route('whattoexpect.index')->with('success', 'What To Expect Section updated successfully');
    }

    public function whattoexpectStatus($id)
    {
        $user = WhatToExpect::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Selected poject

    public function selectedIndex()
    {
        $selectedProject = SelectedProject::orderBy('id', 'desc')->get();
        return view('konsultacja.selected-projects.index', compact('selectedProject'));
    }

    public function selectedCreate()
    {
        $details = SelectedProject::get();
        return view('konsultacja.selected-projects.create', compact('details'));
    }

    public function selectedStore(Request $request)
    {
        $projectselectedSetting = [
            'title',
            'subtitle'
        ];

        foreach ($projectselectedSetting as $projectselected) {
            $value = $request->input($projectselected);
            $existingSetting = SelectedProject::where('type', $projectselected)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                SelectedProject::create(['type' => $projectselected, 'message' => $value]);
            }
        }
        return redirect()->route('selected.index')->with('success', 'Projects Section updated successfully');
    }

    public function selectedStatus($id)
    {
        $user = SelectedProject::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Project Cards

    public function konsultacjaIndex()
    {
        $projectCards = ProjectCards::orderBy('id', 'desc')->get();
        return view('konsultacja.project-cards.index', compact('projectCards'));
    }

    public function konsultacjaCreate()
    {
        return view('konsultacja.project-cards.create');
    }
    public function konsultacjaEdit(Request $request)
    {

        $projectCards = ProjectCards::find($request->id);
        return view('konsultacja.project-cards.edit', compact('projectCards'));
    }

    public function konsultacjaStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'info' => 'required',
            'catagory' => 'required',
            'flag_logo_1' => 'required',
            'flag_logo_2' => 'required',
            'banner_image' => 'required',
        ]);

        try {

            if (isset($request->update_id)) {
                $projectCards = ProjectCards::find($request->update_id);
            } else {

                $projectCards = new ProjectCards;
            }
            $projectCards->title = $request->title;
            $projectCards->info = $request->info;
            $projectCards->catagory = $request->catagory;
            $projectCards->flag_logo_1 = $request->flag_logo_1;
            $projectCards->flag_logo_2 = $request->flag_logo_2;
            $projectCards->banner_image = $request->banner_image;
            $projectCards->save();

            return redirect()->route('konsultacja.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('konsultacja.index')->with('error', 'An error occurred. Please try again.');
        }
    }
}
