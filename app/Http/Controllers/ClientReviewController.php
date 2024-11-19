<?php

namespace App\Http\Controllers;

use App\Models\ClientFeedback;
use App\Models\ClientRating;
use App\Models\FeedbackSummary;
use App\Models\SliderImages;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function sliderimagesIndex()
    {
        $SliderImages = SliderImages::orderBy('id', 'desc')->get();
        return view('slider-images.index', compact('SliderImages'));
    }

    public function sliderimagesCreate()
    {
        $details = SliderImages::get();
        return view('slider-images.create', compact('details'));
    }

    public function sliderimagesStore(Request $request)
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
            $existingSetting = SliderImages::where('type', $sliderimages)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                SliderImages::create(['type' => $sliderimages, 'message' => $value]);
            }
        }
        return redirect()->route('sliderimages.index')->with('success', 'Images updated successfully');
    }

    public function sliderimagesStatus($id)
    {
        $user = SliderImages::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Client Rating

    public function clientratingIndex()
    {
        $ClientRating = ClientRating::orderBy('id', 'desc')->get();
        return view('client-rating.index', compact('ClientRating'));
    }

    public function clientratingCreate()
    {
        $details = ClientRating::get();
        return view('client-rating.create', compact('details'));
    }

    public function clientratingStore(Request $request)
    {
        $clientratingSetting = [
            'left_animated_image',
            'rating_image',
            'rating_description',
        ];
        foreach ($clientratingSetting as $clientrating) {
            $value = $request->input($clientrating);
            $existingSetting = ClientRating::where('type', $clientrating)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                ClientRating::create(['type' => $clientrating, 'message' => $value]);
            }
        }
        return redirect()->route('clientrating.index')->with('success', 'client rating updated successfully');
    }

    public function clientratingStatus($id)
    {
        $user = ClientRating::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Client Feedback
    public function clientfeedbackIndex()
    {
        $clientFeedback = ClientFeedback::orderBy('id', 'desc')->get();
        return view('client-feedback.index', compact('clientFeedback'));
    }

    public function clientfeedbackCreate()
    {
        $details = ClientFeedback::get();
        return view('client-feedback.create', compact('details'));
    }

    public function clientfeedbackStore(Request $request)
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
        $clientFeedback = ClientFeedback::find($request->update_id);

            }else{

            $clientFeedback = new ClientFeedback;
            }
            $clientFeedback->image_url = $request->image_url;
            $clientFeedback->review = $request->review;
            $clientFeedback->video_url = $request->video_url;
            $clientFeedback->client_name = $request->client_name;
            $clientFeedback->client_designation = $request->client_designation;
            $clientFeedback->rating = $request->rating;
            $clientFeedback->save();

            return redirect()->route('clientfeedback.index')->with('success', 'update Successfully!!');
        // } catch (\Exception $e) {
        //     return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        // }
    }

    public function clientfeedbackEdit(Request $request)
    { 
        $clientFeedback = ClientFeedback::find($request->id);
        return view('client-feedback.edit', compact('clientFeedback'));
    }

    // Feedback Summary
    public function feedbacksummaryIndex()
    {
        $FeedbackSummary = FeedbackSummary::orderBy('id', 'desc')->get();
        return view('feedback-summary.index', compact('FeedbackSummary'));
    }

    public function feedbacksummaryCreate()
    {
        $details = FeedbackSummary::get();
        return view('feedback-summary.create', compact('details'));
    }

    public function feedbacksummaryStore(Request $request)
    {
        $feedbacksummarySetting = [
            'title',
            'description'
        ];
        foreach ($feedbacksummarySetting as $feedbacksummary) {
            $value = $request->input($feedbacksummary);
            $existingSetting = FeedbackSummary::where('type', $feedbacksummary)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                FeedbackSummary::create(['type' => $feedbacksummary, 'message' => $value]);
            }
        }
        return redirect()->route('summaryfeedback.index')->with('success', 'Feedback Summary updated successfully');
    }

    public function feedbacksummaryStatus($id)
    {
        $user = FeedbackSummary::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
}
