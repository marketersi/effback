<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{

    public function feedbackIndex() 
    {
        $feedback_details = Feedback::orderBy('id', 'desc')->get();
        return view('feedback.index', compact('feedback_details'));
    }

    public function AddFeedback()
    { 
        return view('feedback.create');
    }
    public function editFeedback(Request $request)
    { 
       
        $feedback_details = Feedback::find($request->id);
        return view('feedback.edit', compact('feedback_details'));
    }

   public function storeFeedback(Request $request)
    {
        $request->validate([
            'feedbackTitle' => 'required',
            'feedbackContent' => 'required',
            'feedbackSubtitle' => 'required',
            'provinces' => 'required',
            'capital_city' => 'required',
            'company_name' => 'required',
        ]);

        try {
            $existingFeedback = Feedback::where('provinces', $request->provinces)->first();
            if ($existingFeedback) {
                return redirect()->back()->with('error', 'This Province has already been Taken.');
            }

            if (isset($request->update_id)) {
                $feedback = Feedback::find($request->update_id);
            } else {
                $feedback = new Feedback;
            }

            $feedback->feedback_title = $request->feedbackTitle;
            $feedback->feedback_content = $request->feedbackContent;
            $feedback->feedback_subtitle = $request->feedbackSubtitle;
            $feedback->provinces = $request->provinces;
            $feedback->capital_city = $request->capital_city;
            $feedback->company_name = $request->company_name;
            $feedback->save();

            return redirect()->route('feedback.index')->with('success', 'Feedback stored successfully.');
        } catch (\Exception $e) {
            return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        }
    }
}
