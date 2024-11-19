<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ExaminationHeroSection;
use App\Models\FormOneSurvey;
use App\Models\FormTwoSurvey;
use App\Models\FormThreeSurvey;
use App\Models\FormFourSurvey;
use App\Models\FormFiveSurvey;
use App\Models\FormSixSurvey;
use App\Models\FormSevenSurvey;
use App\Models\FormEightSurvey;
use App\Models\FormNineSurvey;
use App\Models\FormTenSurvey;
use App\Models\FormElevenSurvey;
use App\Models\FormTwelveSurvey;
use App\Models\FormThirteenSurvey;
use App\Models\SummarySurvey;

class ExaminationHeroSectionController extends Controller
{
    // ******************* EXAMINATION HERO SECTION ********************* //

    public function heroSectionIndex()
    {
        $heroSectionDetail = ExaminationHeroSection::get();
        return view('examination-hero-section.index', compact('heroSectionDetail'));
    }
    public function heroSectionCreate()
    {
        $heroSectiondetails = ExaminationHeroSection::get();
        return view('examination-hero-section.create', compact('heroSectiondetails'));
    }

    public function heroSectionStore(Request $request)
    {
        try {
            $heroContact = [
                'title',
                'info',
                'sub_info',
            ];

            foreach ($heroContact as $contactus) {
                
                $value = $request->input($contactus);
                $existingSetting = ExaminationHeroSection::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    // ExaminationHeroSection::create(['type' => $contactus, 'message' => $value]);
                    $examHeroSection = new ExaminationHeroSection;
                    $examHeroSection->type = $contactus;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }

            return redirect()->route('examination.herosection.index')->with('success', 'Contact Settings Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('examination.herosection.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* EXAMINATION SURVEY FORM-1 SECTION ********************* //

    public function FO1SurveyIndex()
    {
        $fo1 = FormOneSurvey::get();
        return view('survey.form-1.index', compact('fo1'));
    }
    public function FO1SurveyCreate()
    {
        $fo1 = FormOneSurvey::get();
        return view('survey.form-1.create', compact('fo1'));
    }

    public function FO1SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormOneSurvey::where('type', $detail)->first();
                // dd($existingSetting);

                if ($existingSetting) {
                    FormOneSurvey::where('type', $detail)->update(['message' => $value]);
                    // dd(45);
                } else {
                    $examHeroSection = new FormOneSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO1.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO1.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }


    // ******************* EXAMINATION SURVEY FORM-2 SECTION ********************* //

    public function FO2SurveyIndex()
    {
        $fo2 = FormTwoSurvey::get();
        return view('survey.form-2.index', compact('fo2'));
    }
    public function FO2SurveyCreate()
    {
        $fo2 = FormTwoSurvey::get();
        return view('survey.form-2.create', compact('fo2'));
    }

    public function FO2SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormTwoSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormTwoSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormTwoSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO2.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO2.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* EXAMINATION SURVEY FORM-3 SECTION ********************* //

    public function FO3SurveyIndex()
    {
        $fo3 = FormThreeSurvey::get();
        return view('survey.form-3.index', compact('fo3'));
    }
    public function FO3SurveyCreate()
    {
        $fo3 = FormThreeSurvey::get();
        return view('survey.form-3.create', compact('fo3'));
    }

    public function FO3SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormThreeSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormThreeSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormThreeSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO3.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO3.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* EXAMINATION SURVEY FORM-4 SECTION ********************* //

    public function FO4SurveyIndex()
    {
        $fo4 = FormFourSurvey::get();
        return view('survey.form-4.index', compact('fo4'));
    }
    public function FO4SurveyCreate()
    {
        $fo4 = FormFourSurvey::get();
        return view('survey.form-4.create', compact('fo4'));
    }

    public function FO4SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
                'descriptionOne',
                'descriptionTwo',
                'buttonText',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormFourSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormFourSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormFourSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO4.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO4.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* EXAMINATION SURVEY FORM-5 SECTION ********************* //

    public function FO5surveyIndex()
    {
        $fo5 = FormFiveSurvey::all();
        return view('survey.form-5.index' , compact('fo5'));
    }

    public function FO5surveyCreate()
    {
        return view('survey.form-5.create');
    }

    public function FO5surveyStore(Request $request)
    {
        // dd($request->listItems);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'listHeading' => 'required',
            'listItems' => 'required',
            'textbelowInput' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new FormFiveSurvey;
            $user->title = $request->title;
            $user->textbelowInput = $request->textbelowInput;
            $user->listHeading = $request->listHeading;
            $user->listItems = json_encode($request->listItems);
            // dd($user->listItems);
            $user->save();
        
            return redirect()->route('survey-FO5.index')->with('success', 'Created Successfully');
        }catch (\Exception $e) {
            
            return redirect()->route('survey-FO5.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function FO5surveyEdit(Request $request)
    {
        // dd($userId);
        $user = FormFiveSurvey::find($request->user_id);
        // dd($user);
        return view('survey.form-5.edit' , compact('user'));
    }

    public function FO5surveyUpdate(Request $request)
    {
        // dd($request->image);
        $request -> validate([
            'title' => '',
            'listHeading' => '',
            'listItems' => '',
            'textbelowInput' => '',
        ]);
        $userId = $request->input('user_id');
        $post = FormFiveSurvey::find($userId);
        $post->update($request->all());

        
        if($post == false){
            return redirect()->route('survey-FO5.update')->with('error','Somthing Went Wrong!!');
        }

        return redirect()->route('survey-FO5.index')->with('success','Updated Successfully');
    }

    // ******************* EXAMINATION SURVEY FORM-6 SECTION ********************* //

    public function FO6SurveyIndex()
    {
        $fo6 = FormSixSurvey::get();
        return view('survey.form-6.index', compact('fo6'));
    }
    public function FO6SurveyCreate()
    {
        $fo6 = FormSixSurvey::get();
        return view('survey.form-6.create', compact('fo6'));
    }

    public function FO6SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
                'description',
                'buttonText',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormSixSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormSixSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormSixSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO6.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO6.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* EXAMINATION SURVEY FORM-7 SECTION ********************* //

    public function FO7SurveyIndex()
    {
        $fo7 = FormSevenSurvey::get();
        return view('survey.form-7.index', compact('fo7'));
    }
    public function FO7SurveyCreate()
    {
        $fo7 = FormSevenSurvey::get();
        return view('survey.form-7.create', compact('fo7'));
    }

    public function FO7SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
                'subtitle',
                'info',
                'buttonText',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormSevenSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormSevenSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormSevenSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO7.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO7.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* EXAMINATION SURVEY FORM-8 SECTION ********************* //

    public function FO8surveyIndex()
    {
        $fo8 = FormEightSurvey::all();
        return view('survey.form-8.index' , compact('fo8'));
    }

    public function FO8surveyCreate()
    {
        return view('survey.form-8.create');
    }

    public function FO8surveyStore(Request $request)
    {
        // dd($request->listItems);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description_1' => 'required',
            'description_2' => 'required',
            'selectOptions' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new FormEightSurvey;
            $user->title = $request->title;
            $user->description_1 = $request->description_1;
            $user->description_2 = $request->description_2;
            $user->selectOptions = json_encode($request->selectOptions);
            // dd($user->listItems);
            $user->save();
        
            return redirect()->route('survey-FO8.index')->with('success', 'Created Successfully');
        }catch (\Exception $e) {
            
            return redirect()->route('survey-FO8.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function FO8surveyEdit(Request $request)
    {
        // dd($userId);
        $user = FormEightSurvey::find($request->user_id);
        // dd($user);
        return view('survey.form-8.edit' , compact('user'));
    }

    public function FO8surveyUpdate(Request $request)
    {
        // dd($request->image);
        $request -> validate([
            'title' => '',
            'description_1' => '',
            'description_2' => '',
            'selectOptions' => '',
        ]);
        $userId = $request->input('user_id');
        $post = FormEightSurvey::find($userId);
        $post->update($request->all());

        
        if($post == false){
            return redirect()->route('survey-FO8.update')->with('error','Somthing Went Wrong!!');
        }

        return redirect()->route('survey-FO8.index')->with('success','Updated Successfully');
    }

    // ******************* EXAMINATION SURVEY FORM-9 SECTION ********************* //

    public function FO9SurveyIndex()
    {
        $fo9 = FormNineSurvey::get();
        return view('survey.form-9.index', compact('fo9'));
    }
    public function FO9SurveyCreate()
    {
        $fo9 = FormNineSurvey::get();
        return view('survey.form-9.create', compact('fo9'));
    }

    public function FO9SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
                'description',
                'buttonText',
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormNineSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormNineSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormNineSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO9.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO9.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* EXAMINATION SURVEY FORM-10 SECTION ********************* //

    public function FO10SurveyIndex()
    {
        $fo10 = FormTenSurvey::get();
        return view('survey.form-10.index', compact('fo10'));
    }
    public function FO10SurveyCreate()
    {
        $fo10 = FormTenSurvey::get();
        return view('survey.form-10.create', compact('fo10'));
    }

    public function FO10SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
                'description'
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormTenSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormTenSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormTenSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO10.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO10.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* EXAMINATION SURVEY FORM-11 SECTION ********************* //

    public function FO11surveyIndex()
    {
        $fo11 = FormElevenSurvey::all();
        return view('survey.form-11.index' , compact('fo11'));
    }

    public function FO11surveyCreate()
    {
        return view('survey.form-11.create');
    }

    public function FO11surveyStore(Request $request)
    {
        // dd($request->listItems);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'options' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new FormElevenSurvey;
            $user->title = $request->title;
            $user->options = json_encode($request->options);
            // dd($user->listItems);
            $user->save();
        
            return redirect()->route('survey-FO11.index')->with('success', 'Created Successfully');
        }catch (\Exception $e) {
            
            return redirect()->route('survey-FO11.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function FO11surveyEdit(Request $request)
    {
        // dd($userId);
        $user = FormElevenSurvey::find($request->user_id);
        // dd($user);
        return view('survey.form-11.edit' , compact('user'));
    }

    public function FO11surveyUpdate(Request $request)
    {
        // dd($request->image);
        $request -> validate([
            'title' => '',
            '11ptions' => '',
        ]);
        $userId = $request->input('user_id');
        $post = FormElevenSurvey::find($userId);
        $post->update($request->all());

        
        if($post == false){
            return redirect()->route('survey-FO11.update')->with('error','Somthing Went Wrong!!');
        }

        return redirect()->route('survey-FO11.index')->with('success','Updated Successfully');
    }

    // ******************* EXAMINATION SURVEY FORM-12 SECTION ********************* //

    public function FO12SurveyIndex()
    {
        $fo12 = FormTwelveSurvey::get();
        return view('survey.form-12.index', compact('fo12'));
    }
    public function FO12SurveyCreate()
    {
        $fo12 = FormTwelveSurvey::get();
        return view('survey.form-12.create', compact('fo12'));
    }

    public function FO12SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
                'subtitle'
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormTwelveSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormTwelveSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormTwelveSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO12.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO12.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
    // ******************* EXAMINATION SURVEY FORM-13 SECTION ********************* //

    public function FO13SurveyIndex()
    {
        $fo13 = FormThirteenSurvey::get();
        return view('survey.form-13.index', compact('fo13'));
    }
    public function FO13SurveyCreate()
    {
        $fo13 = FormThirteenSurvey::get();
        return view('survey.form-13.create', compact('fo13'));
    }

    public function FO13SurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
                'description_1',
                'description_2'
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = FormThirteenSurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    FormThirteenSurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new FormThirteenSurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-FO13.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-FO13.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
    // ******************* EXAMINATION SURVEY SUMMARY FORM SECTION ********************* //

    public function summarySurveyIndex()
    {
        $summary = SummarySurvey::get();
        return view('survey.form-summary.index', compact('summary'));
    }
    public function summarySurveyCreate()
    {
        $summary = SummarySurvey::get();
        return view('survey.form-summary.create', compact('summary'));
    }

    public function summarySurveyStore(Request $request)
    {
        try {
            $details = [
                'title',
                'description',
                'info_1',
                'info_2',
                'image',
                'image_description',
                'buttonText_1',
                'buttonText_2'
            ];

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                $existingSetting = SummarySurvey::where('type', $detail)->first();

                if ($existingSetting) {
                    SummarySurvey::where('type', $detail)->update(['message' => $value]);

                } else {
                    $examHeroSection = new SummarySurvey;
                    $examHeroSection->type = $detail;
                    $examHeroSection->message = $value;
                    
                    $examHeroSection->save();

                }
            }
            
            return redirect()->route('survey-summary.index')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('survey-summary.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

}
