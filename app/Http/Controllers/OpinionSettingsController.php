<?php

namespace App\Http\Controllers;

use App\Models\OpinionAccordian1;
use App\Models\OpinionAccordian2;
use App\Models\OpinionBrilliantJob;
use App\Models\OpinionExperts;
use App\Models\OpinionHeroImage;
use App\Models\OpinionOrders;
use App\Models\OpinionRating;
use App\Models\OpinionReferences;
use App\Models\OpinionReferencesCard;
use App\Models\OpinionReferencesImage;
use App\Models\OpinionReview;
use App\Models\OpinionSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\BrandOne;
use App\Models\BrandTitle;
use App\Models\RatingOpinion;
use App\Models\RatingTitle;
use Illuminate\Support\Facades\DB;

class OpinionSettingsController extends Controller
{
    // Hero Section --------->>>>>>>>>
    public function opinionHeroIndex()
    {
        $opinionHero = OpinionHeroImage::orderBy('id', 'asc')->get();
        return view('Opinion-Screen.Hero-Section.index', compact('opinionHero'));
    }

    public function opinionHeroCreate()
    {
        $details = OpinionHeroImage::get();
        return view('Opinion-Screen.Hero-Section.create', compact('details'));
    }

    // public function opinionHeroEdit(Request $request)
    // {
    //     $opinionHero = OpinionHeroImage::find($request->id);
    //     return view('Opinion-Screen.Hero-Section.edit', compact('opinionHero'));
    // }

    public function opinionHeroStore(Request $request)
    {
        $sliderimagesSetting = [
            'image_1',
            'image_2',
            'title',
        ];


        // if (isset($request->update_id)) {
        //     $opinionHero = OpinionHeroImage::find($request->update_id);
        // } else {
        //     $opinionHero = new OpinionHeroImage;
        // }

        // $opinionHero->image = $request->image;
        // $opinionHero->save();
        foreach ($sliderimagesSetting as $sliderimages) {
            $value = $request->input($sliderimages);
            $existingSetting = OpinionHeroImage::where('type', $sliderimages)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                OpinionHeroImage::create(['type' => $sliderimages, 'message' => $value]);
            }
        }
        return redirect()->route('opinieHero.index')->with('success', 'update Successfully!!');
    }

    // Slider Image -------->>>>>>>>>>>
    public function heroSliderIndex()
    {
        $SliderImages = OpinionSlider::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Slider-Images.index', compact('SliderImages'));
    }

    public function heroSliderCreate()
    {
        $details = OpinionSlider::get();
        return view('Opinion-Screen.Slider-Images.create', compact('details'));
    }

    public function heroSliderStore(Request $request)
    {
        $sliderimagesSetting = [
            'row_1_image_url_1',
            'row_1_image_url_2',
            'row_1_image_url_3',
            'row_1_image_url_4',
            'row_1_image_url_5',
            'row_1_image_url_6',
            'row_1_image_url_7',
            'row_1_image_url_8',
            'row_2_image_url_1',
            'row_2_image_url_2',
            'row_2_image_url_3',
            'row_2_image_url_4',
            'row_2_image_url_5',
            'row_2_image_url_6',
            'row_2_image_url_7',
            'row_2_image_url_8',
            'row_3_image_url_1',
            'row_3_image_url_2',
            'row_3_image_url_3',
            'row_3_image_url_4',
            'row_3_image_url_5',
            'row_3_image_url_6',
            'row_3_image_url_7',
            'row_3_image_url_8',
            'row_4_image_url_1',
            'row_4_image_url_2',
            'row_4_image_url_3',
            'row_4_image_url_4',
            'row_4_image_url_5',
            'row_4_image_url_6',
            'row_4_image_url_7',
            'row_4_image_url_8',
        ];
        foreach ($sliderimagesSetting as $sliderimages) {
            $value = $request->input($sliderimages);
            $existingSetting = OpinionSlider::where('type', $sliderimages)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                OpinionSlider::create(['type' => $sliderimages, 'message' => $value]);
            }
        }
        return redirect()->route('hero-slider.index')->with('success', 'Images updated successfully');
    }

    public function heroSliderStatus($id)
    {
        $user = OpinionSlider::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Brilliant Job Section ------>>>>>>>>----->>>>>>
    public function brilliantJobIndex()
    {
        $brilliantJob = OpinionBrilliantJob::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Brilliant-Job.index', compact('brilliantJob'));
    }

    public function brilliantJobCreate()
    {
        $details = OpinionBrilliantJob::get();
        return view('Opinion-Screen.Brilliant-Job.create', compact('details'));
    }

    public function brilliantJobEdit(Request $request)
    {
        $brilliantJob = OpinionBrilliantJob::find($request->id);
        return view('Opinion-Screen.Brilliant-Job.edit', compact('brilliantJob'));
    }

    public function brilliantJobStore(Request $request)
    {
        $request->validate([
            'image_url' => 'required|url',
            'review' => 'required',
            'video_url' => 'required',
            'client_name' => 'required',
            'client_designation' => 'required',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        try {

            if (isset($request->update_id)) {
                $brilliantJob = OpinionBrilliantJob::find($request->update_id);
            } else {

                $brilliantJob = new OpinionBrilliantJob;
            }
            $brilliantJob->image_url = $request->image_url;
            $brilliantJob->review = $request->review;
            $brilliantJob->video_url = $request->video_url;
            $brilliantJob->client_name = $request->client_name;
            $brilliantJob->client_designation = $request->client_designation;
            $brilliantJob->rating = $request->rating;
            $brilliantJob->save();

            return redirect()->route('brilliant-job.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('brilliant-job.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    // Expert Section --------->>>>>>>>>>>>>>>>
    public function expertsIndex()
    {
        $experts = OpinionExperts::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Expert-Section.index', compact('experts'));
    }

    public function expertsCreate()
    {
        $details = OpinionExperts::get();
        return view('Opinion-Screen.Expert-Section.create', compact('details'));
    }

    public function expertsStore(Request $request)
    {
        $expertsSetting = [
            'title',
            'image_1',
            'image_2'
        ];
        foreach ($expertsSetting as $experts) {
            $value = $request->input($experts);
            $existingSetting = OpinionExperts::where('type', $experts)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                OpinionExperts::create(['type' => $experts, 'message' => $value]);
            }
        }
        return redirect()->route('experts.index')->with('success', 'Experts Section updated successfully');
    }

    public function expertsStatus($id)
    {
        $user = OpinionExperts::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Order Section --------->>>>>>>>>>>>>>>>
    public function orderIndex()
    {
        $order = OpinionOrders::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Order-Section.index', compact('order'));
    }

    public function orderCreate()
    {
        $details = OpinionOrders::get();
        return view('Opinion-Screen.Order-Section.create', compact('details'));
    }

    public function orderStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'subtitle_1' => 'required|string',
            'image' => 'required|string',
            'subtitle_2' => 'required|string',
            'rating_no' => 'required|numeric|min:0|max:5',
        ]);

        $orderSetting = [
            'title',
            'subtitle_1',
            'image',
            'subtitle_2',
            'rating_no'
        ];
        foreach ($orderSetting as $order) {

            $value = $validatedData[$order];
            $existingSetting = OpinionOrders::where('type', $order)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                OpinionOrders::create(['type' => $order, 'message' => $value]);
            }
        }
        return redirect()->route('order.index')->with('success', 'Order Section updated successfully');
    }

    public function orderStatus($id)
    {
        $user = OpinionOrders::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Rating Section --------->>>>>>>>>>>>>>>>
    public function ratingIndex()
    {
        $rating = OpinionRating::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Rating-Section.index', compact('rating'));
    }

    public function ratingCreate()
    {
        $details = OpinionRating::get();
        return view('Opinion-Screen.Rating-Section.create', compact('details'));
    }

    public function ratingStore(Request $request)
    {
        $ratingSetting = [
            'animated_image',
            'animated_image2',
            'banner_image',
            'paragraph_1',
            'paragraph_2',
            'paragraph_3',
            'title',
            'highlighted_text',
            'description'
        ];

        foreach ($ratingSetting as $rating) {
            $value = $request->input($rating);

            $existingSetting = OpinionRating::where('type', $rating)->first();
            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                OpinionRating::create(['type' => $rating, 'message' => $value]);
            }
        }
        return redirect()->route('opnie-rating.index')->with('success', 'Rating Section updated successfully');
    }

    public function ratingStatus($id)
    {
        $user = OpinionRating::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Review Section
    public function reviewIndex()
    {
        $OpinionReview = OpinionReview::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Review-Section.index', compact('OpinionReview'));
    }

    public function reviewCreate()
    {
        return view('Opinion-Screen.Review-Section.create');
    }

    public function reviewEdit(Request $request)
    {
        $OpinionReview = OpinionReview::find($request->id);
        return view('Opinion-Screen.Review-Section.edit', compact('OpinionReview'));
    }

    public function reviewStore(Request $request)
    {
        $request->validate([
            'client_image' => 'required|url',
            'client_logo' => 'required|url',
            'rating_no' => 'required|numeric|min:0|max:5',
            'client_name' => 'required',
            'designation' => 'required',
            'paragraph' => 'required',
        ]);

        try {

            if (isset($request->update_id)) {
                $OpinionReview = OpinionReview::find($request->update_id);
            } else {

                $OpinionReview = new OpinionReview;
            }
            $OpinionReview->client_image = $request->client_image;
            $OpinionReview->client_logo = $request->client_logo;
            $OpinionReview->rating_no = $request->rating_no;
            $OpinionReview->client_name = $request->client_name;
            $OpinionReview->designation = $request->designation;
            $OpinionReview->paragraph = $request->paragraph;
            $OpinionReview->save();

            return redirect()->route('opinieReview.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('opinieReview.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    // Accordion-1 Section --------->>>>>>>>>>>>>>>>
    public function accordionOneIndex()
    {
        $accordianOne = OpinionAccordian1::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Accordion-One.index', compact('accordianOne'));
    }

    public function accordionOneCreate()
    {
        $details = OpinionAccordian1::get();
        return view('Opinion-Screen.Accordion-One.create', compact('details'));
    }

    public function accordionOneStore(Request $request)
    {
        $accordianOneSetting = [
            'question',
            'paragraph_1',
            'paragraph_2'
        ];

        foreach ($accordianOneSetting as $accordianOne) {
            $value = $request->input($accordianOne);

            $existingSetting = OpinionAccordian1::where('type', $accordianOne)->first();
            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                OpinionAccordian1::create(['type' => $accordianOne, 'message' => $value]);
            }
        }
        return redirect()->route('accordion-one.index')->with('success', 'Accordian-One updated successfully');
    }

    public function accordionOneStatus($id)
    {
        $user = OpinionAccordian1::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Accordion-2 Section --------->>>>>>>>>>>>>>>>
    public function accordionTwoIndex()
    {
        $accordionTwo = OpinionAccordian2::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Accordion-Two.index', compact('accordionTwo'));
    }

    public function accordionTwoCreate()
    {
        $details = OpinionAccordian2::get();
        return view('Opinion-Screen.Accordion-Two.create', compact('details'));
    }

    public function accordionTwoStore(Request $request)
    {
        $accordionTwoSetting = [
            'question',
            'paragraph_1',
            'paragraph_2'
        ];

        foreach ($accordionTwoSetting as $accordionTwo) {
            $value = $request->input($accordionTwo);

            $existingSetting = OpinionAccordian2::where('type', $accordionTwo)->first();
            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                OpinionAccordian2::create(['type' => $accordionTwo, 'message' => $value]);
            }
        }
        return redirect()->route('accordion-two.index')->with('success', 'Accordion-Two updated successfully');
    }

    public function accordionTwoStatus($id)
    {
        $user = OpinionAccordian2::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // References Section --------->>>>>>>>>>>>>>>>
    public function ReferencesIndex()
    {
        $References = OpinionReferences::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.References.index', compact('References'));
    }

    public function ReferencesCreate()
    {
        $details = OpinionReferences::get();
        return view('Opinion-Screen.References.create', compact('details'));
    }

    public function ReferencesStore(Request $request)
    {
        $ReferencesSetting = [
            'heading',
            'title',
            'subtitle'
        ];

        foreach ($ReferencesSetting as $References) {
            $value = $request->input($References);

            $existingSetting = OpinionReferences::where('type', $References)->first();
            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                OpinionReferences::create(['type' => $References, 'message' => $value]);
            }
        }
        return redirect()->route('opinieReferences.index')->with('success', 'References Content updated successfully');
    }

    public function ReferencesStatus($id)
    {
        $user = OpinionReferences::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Reference Image Section ------>>>>>>>>----->>>>>>
    public function referenceImageIndex()
    {
        $referenceImage = OpinionReferencesImage::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Reference-Image.index', compact('referenceImage'));
    }

    public function referenceImageCreate()
    {
        $details = OpinionReferencesImage::get();
        return view('Opinion-Screen.Reference-Image.create', compact('details'));
    }

    public function referenceImageEdit(Request $request)
    {
        $referenceImage = OpinionReferencesImage::find($request->id);
        return view('Opinion-Screen.Reference-Image.edit', compact('referenceImage'));
    }

    public function referenceImageStore(Request $request)
    {
        $request->validate([
            'image' => 'required|url',
            'name' => 'required',
            'year' => 'required'
        ]);

        try {

            if (isset($request->update_id)) {
                $referenceImage = OpinionReferencesImage::find($request->update_id);
            } else {
                $referenceImage = new OpinionReferencesImage();
            }
            $referenceImage->image = $request->image;
            $referenceImage->name = $request->name;
            $referenceImage->year = $request->year;
            $referenceImage->save();

            return redirect()->route('reference-image.index')->with('success', 'Update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('reference-image.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    // Reference Card Section ------>>>>>>>>----->>>>>>
    public function referenceCardIndex()
    {
        $ReferenceCard = OpinionReferencesCard::orderBy('id', 'desc')->get();
        return view('Opinion-Screen.Reference-Card.index', compact('ReferenceCard'));
    }

    public function referenceCardCreate()
    {
        $details = OpinionReferencesCard::get();
        return view('Opinion-Screen.Reference-Card.create', compact('details'));
    }

    public function referenceCardEdit(Request $request)
    {
        $ReferenceCard = OpinionReferencesCard::find($request->id);
        return view('Opinion-Screen.Reference-Card.edit', compact('ReferenceCard'));
    }

    public function referenceCardStore(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_designation' => 'required',
            'rating_no' => 'required|numeric|min:0|max:5',
            'review' => 'required',
        ]);

        try {

            if (isset($request->update_id)) {
                $ReferenceCard = OpinionReferencesCard::find($request->update_id);
            } else {
                $ReferenceCard = new OpinionReferencesCard();
            }
            $ReferenceCard->customer_name = $request->customer_name;
            $ReferenceCard->customer_designation = $request->customer_designation;
            $ReferenceCard->rating_no = $request->rating_no;
            $ReferenceCard->review = $request->review;
            $ReferenceCard->save();

            return redirect()->route('reference-card.index')->with('success', 'Update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('reference-card.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    
    // ********************** BRANDS ********************** //
    
    public function brandOneIndex()
    {
        $brand = BrandOne::all();
        return view('brands.brand-1.index' , compact('brand'));
    }

    public function brandOneCreate()
    {
        return view('brands.brand-1.create');
    }

    public function brandOneStore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'brand_title' => 'required',
            'image' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new BrandOne;
            $user->brand_title = $request->brand_title;
            $user->image = json_encode($request->image);
            // dd($user->listItems);
            $user->save();
        
            return redirect()->route('brand-one.index')->with('success', 'Created Successfully');
        }catch (\Exception $e) {
            
            return redirect()->route('brand-one.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function brandOneEdit(Request $request)
    {
        $user = BrandOne::find($request->user_id);
        // dd($user);
        return view('brands.brand-1.edit' , compact('user'));
    }

    public function brandOneUpdate(Request $request)
    {
        // dd($request->image);
        $request -> validate([
            'brand_title' => '',
            'image' => '',
        ]);
        $userId = $request->input('user_id');
        $post = BrandOne::find($userId);
        $post->update($request->all());

        
        if($post == false){
            return redirect()->route('brand-one.update')->with('error','Somthing Went Wrong!!');
        }

        return redirect()->route('brand-one.index')->with('success','Updated Successfully');
    }

    // ********************** BRAND TITLE ********************** //
    
    public function brandTilteIndex()
    {
        $title = BrandTitle::get();
        return view('brands.brand-title.index', compact('title'));
    }
    public function brandTilteCreate()
    {
        $title = BrandTitle::get();
        return view('brands.brand-title.create', compact('title'));
    }

    public function brandTilteStore(Request $request)
    {
        try {
            $details = [
                'title',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = BrandTitle::where('type', $detail)->first();

                if ($existingSetting) {
                    BrandTitle::where('type', $detail)->update(['message' => $value]);

                } else {
                    $brand = new BrandTitle;
                    $brand->type = $detail;
                    $brand->message = $value;
                    
                    $brand->save();

                }
            }
            
            return redirect()->route('brand-title.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('brand-title.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // *************** OPINION RATING ******************* //
    
    public function opinionRatingIndex()
    {
        $rate = RatingOpinion::all();
        return view('opinion-rating.rating.index' , compact('rate'));
    }

    public function opinionRatingCreate()
    {
        return view('opinion-rating.rating.create');
    }

    public function opinionRatingStore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'user_name' => 'required',
            'opinion' => 'required',
            'rating' => 'required',
            'para' => 'required',
            'image' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new RatingOpinion;
            $user->user_name = $request->user_name;
            $user->opinion = $request->opinion;
            $user->rating = $request->rating;
            $user->para = $request->para;
            $user->image = $request->image;
            // dd($user->listItems);
            $user->save();
        
            return redirect()->route('opinion-rating.index')->with('success', 'Created Successfully');
        }catch (\Exception $e) {
            
            return redirect()->route('opinion-rating.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function opinionRatingEdit(Request $request)
    {
        $user = RatingOpinion::find($request->user_id);
        // dd($user);
        return view('opinion-rating.rating.edit' , compact('user'));
    }

    public function opinionRatingUpdate(Request $request)
    {
        // dd($request->image);
        $request -> validate([
            'user_name' => '',
            'opinion' => '',
            'rating' => '',
            'para' => '',
            'image' => '',
        ]);
        $userId = $request->input('user_id');
        $post = RatingOpinion::find($userId);
        $post->update($request->all());

        
        if($post == false){
            return redirect()->route('opinion-rating.update')->with('error','Somthing Went Wrong!!');
        }

        return redirect()->route('opinion-rating.index')->with('success','Updated Successfully');
    }

    // ********************** OPINION RATING TITLE ********************** //
    
    public function ratingTilteIndex()
    {
        $title = RatingTitle::get();
        return view('opinion-rating.rating-title.index', compact('title'));
    }
    public function ratingTilteCreate()
    {
        $title = RatingTitle::get();
        return view('opinion-rating.rating-title.create', compact('title'));
    }

    public function ratingTilteStore(Request $request)
    {
        try {
            $details = [
                'title',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = RatingTitle::where('type', $detail)->first();

                if ($existingSetting) {
                    RatingTitle::where('type', $detail)->update(['message' => $value]);

                } else {
                    $brand = new RatingTitle;
                    $brand->type = $detail;
                    $brand->message = $value;
                    
                    $brand->save();

                }
            }
            
            return redirect()->route('title-rating.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('title-rating.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
    // ********************** OPINION CUSTOMER REPLIES TITLE ********************** //

    public function customerRepliesTitleIndex()
    {
        $details = DB::table('tbl_customer_replies_title')->get();
        return view('Opinion-Screen.Customer-replies.Title.index', compact('details'));
    }
    
    public function customerRepliesTitleCreate()
    {
        $details = DB::table('tbl_customer_replies_title')->get();
        return view('Opinion-Screen.Customer-replies.Title.create', compact('details'));
    }

    public function customerRepliesTitleStore(Request $request)
    {
        $setting = [
            'title',
        ];

        foreach($setting as $data){
            $value = $request->input($data);
            $existingSetting = DB::table('tbl_customer_replies_title')->where('type', $data)->first();

            if($existingSetting){
                DB::table('tbl_customer_replies_title')->where('type', $data)->update(['message' => $value]);
            }else{
                DB::table('tbl_customer_replies_title')->insert(['type' => $data , 'message' => $value]);
            }
        }
        
        return redirect()->route('repliesTitle.index')->with('success', 'Updated Successfully');
    }

    // ********************** OPINION CUSTOMER REPLIES REVIEWS ********************** //

    public function customerRepliesReviewIndex()
    {
        $reviews = DB::table('tbl_customer_replies_reviews')->get();
        return view('Opinion-Screen.Customer-replies.Review.index' , compact('reviews'));
    }

    public function customerRepliesReviewCreate()
    {
        return view('Opinion-Screen.Customer-replies.Review.create');
    }

    public function customerRepliesReviewStore(Request $request)
    {
        // dd($request->review);
        $validator = Validator::make($request->all(), [
            'review' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            DB::table('tbl_customer_replies_reviews')->insert(['reviews' => json_encode($request->review),]);
        
            return redirect()->route('repliesReview.index')->with('success', 'Created successfully');
        }catch (\Exception $e) {
            return redirect()->route('repliesReview.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function customerRepliesReviewEdit(Request $request)
    {
        $userId = $request->input('user_id');
        $user = DB::table('tbl_customer_replies_reviews')->find($userId);
        return view('Opinion-Screen.Customer-replies.Review.edit' , compact('user'));
    }

    public function customerRepliesReviewUpdate(Request $request)
    {
        $request -> validate([
            'reviews' => ''
        ]);
        $userId = $request->input('user_id');
        $post = DB::table('tbl_customer_replies_reviews')->find($userId);
        $post = DB::table('tbl_customer_replies_reviews')->where('id', $userId)->update(['reviews' => $request->reviews]);

        
        if($post == false){
            return redirect()->route('repliesReview.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('repliesReview.index')->with('success','Updated Successfully');
    }
}
