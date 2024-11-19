<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSettings;

class ContactSettingController extends Controller
{
    public function contactIndex()
    {
        $contactDetail = ContactSettings::orderBy('id', 'desc')->get();
        return view('contactus.index', compact('contactDetail'));
    }
    public function contactCreate()
    {

        $details = ContactSettings::get();
        return view('contactus.create', compact('details'));
    }

    public function contactStore(Request $request)
    {
        try {
            $settingContact = [
                'main_title',
                'sub_title',
                'first_image', 'second_image',
                'third_image', 'fourth_image',
                'manual', 'bellow_to_manual',
                'social_media_content',
                'social_media_title', 'vat_id',
                'kawka', 'regon', 'co_work',
                'title', 'number', 'mail', 'button_text',
                'message_response',
                'greeting_message',
                'link_prompt_text',
                'social_media_text',
                'display_picture',
                'email_svg'
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = ContactSettings::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ContactSettings::create(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('contact.index')->with('success', 'Contact settings updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('contact.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function contactStatus($id)
    {
        $user = ContactSettings::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
   
}
