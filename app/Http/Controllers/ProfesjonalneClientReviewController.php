<?php

namespace App\Http\Controllers;

use App\Models\ProfesjonalneClientFeedback;
use App\Models\ProfesjonalneClientRating;
use App\Models\ProfesjonalneFeedbackSummary;
use App\Models\ProfesjonalneSliderImages;
use Illuminate\Http\Request;

class ProfesjonalneClientReviewController extends Controller
{
    public function profesjonalneSliderImagesIndex()
    {
        $SliderImages = ProfesjonalneSliderImages::orderBy('id', 'desc')->get();
        return view('profesjonalne-slider-images.index', compact('SliderImages'));
    }

    public function profesjonalneSliderImagesCreate()
    {
        $details = ProfesjonalneSliderImages::get();
        return view('profesjonalne-slider-images.create', compact('details'));
    }

    public function profesjonalneSliderImagesStore(Request $request)
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
            $existingSetting = ProfesjonalneSliderImages::where('type', $sliderimages)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                ProfesjonalneSliderImages::create(['type' => $sliderimages, 'message' => $value]);
            }
        }
        return redirect()->route('profesjonalne-slider-images.index')->with('success', 'Images updated successfully');
    }

    public function profesjonalneSliderImagesStatus($id)
    {
        $user = ProfesjonalneSliderImages::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Client Rating

    public function profesjonalneClientRatingIndex()
    {
        $ClientRating = ProfesjonalneClientRating::orderBy('id', 'desc')->get();
        return view('profesjonalne-client-rating.index', compact('ClientRating'));
    }

    public function profesjonalneClientRatingCreate()
    {
        $details = ProfesjonalneClientRating::get();
        return view('profesjonalne-client-rating.create', compact('details'));
    }

    public function profesjonalneClientRatingStore(Request $request)
    {
        $clientratingSetting = [
            'left_animated_image',
            'rating_image',
            'rating_description',
        ];
        foreach ($clientratingSetting as $clientrating) {
            $value = $request->input($clientrating);
            $existingSetting = ProfesjonalneClientRating::where('type', $clientrating)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                ProfesjonalneClientRating::create(['type' => $clientrating, 'message' => $value]);
            }
        }
        return redirect()->route('profesjonalne-summary-feedback.index')->with('success', 'client rating updated successfully');
    }

    public function profesjonalneClientRatingStatus($id)
    {
        $user = ProfesjonalneClientRating::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Client Feedback
    public function profesjonalneClientFeedbackIndex()
    {
        $clientFeedback = ProfesjonalneClientFeedback::orderBy('id', 'desc')->get();
        return view('profesjonalne-client-feedback.index', compact('clientFeedback'));
    }

    public function profesjonalneClientFeedbackCreate()
    {
        $details = ProfesjonalneClientFeedback::get();
        return view('profesjonalne-client-feedback.create', compact('details'));
    }

    public function profesjonalneClientFeedbackStore(Request $request)
    {
        $request->validate([
            'image_url' => 'required|url',
            'review' => 'required',
            'video_url' => 'required',
            'client_name' => 'required',
            'client_designation' => 'required',
            'rating' => 'required|numeric|min:0|max:5',
        ]);        

        // try {

            if(isset($request->update_id)){
        $clientFeedback = ProfesjonalneClientFeedback::find($request->update_id);

            }else{

            $clientFeedback = new ProfesjonalneClientFeedback;
            }
            $clientFeedback->image_url = $request->image_url;
            $clientFeedback->review = $request->review;
            $clientFeedback->video_url = $request->video_url;
            $clientFeedback->client_name = $request->client_name;
            $clientFeedback->client_designation = $request->client_designation;
            $clientFeedback->rating = $request->rating;
            $clientFeedback->save();

            return redirect()->route('profesjonalne-client-feedback.index')->with('success', 'update Successfully!!');
        // } catch (\Exception $e) {
        //     return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        // }
    }

    public function profesjonalneClientFeedbackEdit(Request $request)
    { 
        $clientFeedback = ProfesjonalneClientFeedback::find($request->id);
        return view('profesjonalne-client-feedback.edit', compact('clientFeedback'));
    }

    // Feedback Summary
    public function profesjonalneFeedbackSummaryIndex()
    {
        $FeedbackSummary = ProfesjonalneFeedbackSummary::orderBy('id', 'desc')->get();
        return view('profesjonalne-feedback-summary.index', compact('FeedbackSummary'));
    }

    public function profesjonalneFeedbackSummaryCreate()
    {
        $details = ProfesjonalneFeedbackSummary::get();
        return view('profesjonalne-feedback-summary.create', compact('details'));
    }

    public function profesjonalneFeedbackSummaryStore(Request $request)
    {
        $feedbacksummarySetting = [
            'title',
            'description'
        ];
        foreach ($feedbacksummarySetting as $feedbacksummary) {
            $value = $request->input($feedbacksummary);
            $existingSetting = ProfesjonalneFeedbackSummary::where('type', $feedbacksummary)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                ProfesjonalneFeedbackSummary::create(['type' => $feedbacksummary, 'message' => $value]);
            }
        }
        return redirect()->route('profesjonalne-summary-feedback.index')->with('success', 'Feedback Summary updated successfully');
    }

    public function profesjonalneFeedbackSummaryStatus($id)
    {
        $user = ProfesjonalneFeedbackSummary::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
}
