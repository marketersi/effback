<?php

namespace App\Http\Controllers;

use App\Models\KreatywnyClientFeedback;
use App\Models\KreatywnyClientRating;
use App\Models\KreatywnyFeedbackSummary;
use App\Models\KreatywnySliderImages;
use Illuminate\Http\Request;

class KreatywnyClientReviewController extends Controller
{
    public function kreatywnySliderImagesIndex()
    {
        $SliderImages = KreatywnySliderImages::orderBy('id', 'desc')->get();
        return view('kreatywny-slider-images.index', compact('SliderImages'));
    }

    public function kreatywnySliderImagesCreate()
    {
        $details = KreatywnySliderImages::get();
        return view('kreatywny-slider-images.create', compact('details'));
    }

    public function kreatywnySliderImagesStore(Request $request)
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
            $existingSetting = KreatywnySliderImages::where('type', $sliderimages)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                KreatywnySliderImages::create(['type' => $sliderimages, 'message' => $value]);
            }
        }
        return redirect()->route('kreatywny-slider-images.index')->with('success', 'Images updated successfully');
    }

    public function kreatywnySliderImagesStatus($id)
    {
        $user = KreatywnySliderImages::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Client Rating

    public function kreatywnyClientRatingIndex()
    {
        $ClientRating = KreatywnyClientRating::orderBy('id', 'desc')->get();
        return view('kreatywny-client-rating.index', compact('ClientRating'));
    }

    public function kreatywnyClientRatingCreate()
    {
        $details = KreatywnyClientRating::get();
        return view('kreatywny-client-rating.create', compact('details'));
    }

    public function kreatywnyClientRatingStore(Request $request)
    {
        $clientratingSetting = [
            'left_animated_image',
            'rating_image',
            'rating_description',
        ];
        foreach ($clientratingSetting as $clientrating) {
            $value = $request->input($clientrating);
            $existingSetting = KreatywnyClientRating::where('type', $clientrating)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                KreatywnyClientRating::create(['type' => $clientrating, 'message' => $value]);
            }
        }
        return redirect()->route('kreatywny-summary-feedback.index')->with('success', 'client rating updated successfully');
    }

    public function kreatywnyClientRatingStatus($id)
    {
        $user = KreatywnyClientRating::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Client Feedback
    public function kreatywnyClientFeedbackIndex()
    {
        $clientFeedback = KreatywnyClientFeedback::orderBy('id', 'desc')->get();
        return view('kreatywny-client-feedback.index', compact('clientFeedback'));
    }

    public function kreatywnyClientFeedbackCreate()
    {
        $details = KreatywnyClientFeedback::get();
        return view('kreatywny-client-feedback.create', compact('details'));
    }

    public function kreatywnyClientFeedbackStore(Request $request)
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
        $clientFeedback = KreatywnyClientFeedback::find($request->update_id);

            }else{

            $clientFeedback = new KreatywnyClientFeedback;
            }
            $clientFeedback->image_url = $request->image_url;
            $clientFeedback->review = $request->review;
            $clientFeedback->video_url = $request->video_url;
            $clientFeedback->client_name = $request->client_name;
            $clientFeedback->client_designation = $request->client_designation;
            $clientFeedback->rating = $request->rating;
            $clientFeedback->save();

            return redirect()->route('kreatywny-client-feedback.index')->with('success', 'update Successfully!!');
        // } catch (\Exception $e) {
        //     return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        // }
    }

    public function kreatywnyClientFeedbackEdit(Request $request)
    { 
        $clientFeedback = KreatywnyClientFeedback::find($request->id);
        return view('kreatywny-client-feedback.edit', compact('clientFeedback'));
    }

    // Feedback Summary
    public function kreatywnyFeedbackSummaryIndex()
    {
        $FeedbackSummary = KreatywnyFeedbackSummary::orderBy('id', 'desc')->get();
        return view('kreatywny-feedback-summary.index', compact('FeedbackSummary'));
    }

    public function kreatywnyFeedbackSummaryCreate()
    {
        $details = KreatywnyFeedbackSummary::get();
        return view('kreatywny-feedback-summary.create', compact('details'));
    }

    public function kreatywnyFeedbackSummaryStore(Request $request)
    {
        $feedbacksummarySetting = [
            'title',
            'description'
        ];
        foreach ($feedbacksummarySetting as $feedbacksummary) {
            $value = $request->input($feedbacksummary);
            $existingSetting = KreatywnyFeedbackSummary::where('type', $feedbacksummary)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                KreatywnyFeedbackSummary::create(['type' => $feedbacksummary, 'message' => $value]);
            }
        }
        return redirect()->route('kreatywny-summary-feedback.index')->with('success', 'Feedback Summary updated successfully');
    }

    public function kreatywnyFeedbackSummaryStatus($id)
    {
        $user = KreatywnyFeedbackSummary::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
}
