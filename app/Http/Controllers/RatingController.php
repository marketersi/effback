<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function ratingIndex()
    {
        $ratingSection = Rating::orderBy('id', 'desc')->get();
        return view('rating.index', compact('ratingSection'));
    }

    public function ratingCreate()
    {
        $details = Rating::get();
        return view('rating.create', compact('details'));
    }

    public function ratingStore(Request $request)
    {
            $ratingSetting = [
                'main_title',
                'subtitle_1',
                'image_url',
                'subtitle_2',
                'rating_no',
            ];
            
            foreach ($ratingSetting as $rating) {
                $value = $request->input($rating);
                $existingSetting = Rating::where('type', $rating)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Rating::create(['type' => $rating, 'message' => $value]);
                }
            }
            return redirect()->route('rating.index')->with('success', 'Contact settings updated successfully');
    }

    public function ratingStatus($id)
    {
        $user = Rating::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
