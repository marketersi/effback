<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesContentSection1;
use App\Models\SalesContentSection2;
use App\Models\SalesContentFaq;
use App\Models\SalesContentFaqQA;
use App\Models\PolicySection;
use App\Models\Pricing;
use App\Models\ProductSection;
use App\Models\ProjectSection2;
use App\Models\ProjectSection3Content;
use App\Models\ProjectSection3CustomerReview;
use App\Models\ProjectSection4;
use App\Models\Project5Content;
use App\Models\Project5CustomerReview;
use App\Models\ProjectSection6;
use App\Models\Project7Content;
use App\Models\Project7CustomerReview;
use App\Models\Project8Content;
use App\Models\Project8Qualities;
use App\Models\SliderSectionContent;
use App\Models\SliderSectionImages;
use App\Models\FormSection;
use App\Models\BuisnessToolsSection;
use App\Models\HowItWorksContent;
use App\Models\HowItWorksSteps;
use App\Models\KnowMoreSection;


class SalesContentController extends Controller
{
    public function heroSection()
    {
        $Section1Content = SalesContentSection1::orderBy('id', 'desc')->get();
        return view('sales-content.index', compact('Section1Content'));
    }
    public function heroSectionCreate()
    {
        $Section1Content = SalesContentSection1::get();
        return view('sales-content.create', compact('Section1Content'));  
    }
    public function heroSectionStore(Request $request)
    {
        try {
            $section1content = [
                'title',
                'description',
                'main_title',
                'sub_title',
                'image'
            ];

            foreach ($section1content as $item) {
                $value = $request->input($item);
                $existingSetting = SalesContentSection1::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    SalesContentSection1::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('hero-section')->with('success', 'Hero section data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('hero-section')->with('error', 'Error: ' . $e->getMessage());
        }
    } 
    public function description()
    {
        $Section2Content = SalesContentSection2::orderBy('id', 'desc')->get();
        return view('description.index', compact('Section2Content'));
    }
    public function descriptionCreate()
    {
        $Section2Content = SalesContentSection2::get();
        return view('description.create', compact('Section2Content'));  
    }
    public function descriptionStore(Request $request)
    {
        try {
            $section2content = [
                'title',
                'description',
                'background_image',
                'button_text'
            ];

            foreach ($section2content as $item) {
                $value = $request->input($item);
                $existingSetting = SalesContentSection2::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    SalesContentSection2::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('description')->with('success', 'Description data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('description')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function faqTitle()
    {
        $FaqContent = SalesContentFaq::orderBy('id', 'desc')->get();
        return view('faq-sales-content.index', compact('FaqContent'));
    }
    public function faqCreate()
    {
        $FaqContent = SalesContentFaq::get();
        return view('faq-sales-content.create', compact('FaqContent'));  
    }
    public function faqStore(Request $request)
    {
        try {
            $faqContent = [
                'main_title',
                'image'
            ];

            foreach ($faqContent as $item) {
                $value = $request->input($item);
                $existingSetting = SalesContentFaq::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    SalesContentFaq::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesfaq-title')->with('success', 'FAQ data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesfaq-title')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function faqCardIndex()
    {
        $faqQACard = SalesContentFaqQA::orderBy('id', 'desc')->get();
        return view('Faq-card.index', compact('faqQACard'));
    }
    public function faqCardCreate()
    {
        // $details = FactowCard::get();
        return view('Faq-card.create');
    }
    public function faqCardStore(Request $request)
    {
        $request->validate([
            'faq_ques' => 'required',
            'faq_ans' => 'required',
        ]);
        try {

            if(isset($request->update_id)){
        $faqCard = SalesContentFaqQA::find($request->update_id);

            }else{

            $faqCard = new SalesContentFaqQA;
            }
            $faqCard->faq_ques = $request->faq_ques;
            $faqCard->faq_ans = $request->faq_ans;
            $faqCard->save();

            return redirect()->route('Salesfaq-card.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    public function faqCardEdit(Request $request)
    { 
        $faqcard_details = SalesContentFaqQA::find($request->id);
        return view('Faq-card.edit', compact('faqcard_details'));
    }
    public function policySection()
    {
        $policySectionContent = PolicySection::orderBy('id', 'desc')->get();
        return view('policy-section.index', compact('policySectionContent'));
    }
    public function policySectionCreate()
    {
        $policySectionContent = PolicySection::get();
        return view('policy-section.create', compact('policySectionContent'));  
    }
    public function policySectionStore(Request $request)
    {
        try {
            $policySectioncontent = [
                'title',
                'description',
                'bottom_description'
            ];

            foreach ($policySectioncontent as $item) {
                $value = $request->input($item);
                $existingSetting = PolicySection::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    PolicySection::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('policySection')->with('success', 'Policy section data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('policySection')->with('error', 'Error: ' . $e->getMessage());
        }
    } 
    public function pricing()
    {
        $pricingSectionContent = Pricing::orderBy('id', 'desc')->get();
        return view('pricing.index', compact('pricingSectionContent'));
    }
    public function pricingCreate()
    {
        $pricingSectionContent = Pricing::get();
        return view('pricing.create', compact('pricingSectionContent'));  
    }
    public function pricingStore(Request $request)
    {
        try {
            $pricingcontent = [
                'title',
                'sub_title',
                'image_left','image_left_desc','image_right','image_right_desc','para_1','para_2','bottom_text','brand_logo','banner_img','form_title'
            ];

            foreach ($pricingcontent as $item) {
                $value = $request->input($item);
                $existingSetting = Pricing::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Pricing::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('pricing')->with('success', 'Pricing section data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('pricing')->with('error', 'Error: ' . $e->getMessage());
        }
    } 
    public function projects()
    {
        $projectSectionContent = ProductSection::orderBy('id', 'desc')->get();
        return view('projects.index', compact('projectSectionContent'));
    }
    public function projectsCreate()
    {
        $projectSectionContent = ProductSection::get();
        return view('projects.create', compact('projectSectionContent'));  
    }
    public function projectSectionStore(Request $request)
    {
        try {
            $productcontent = [
                'title',
                'sub_title',
                'background_image','title_image','mid_text','description','para_1','product_bannar_img','product_desc_img','footer_image'
            ];

            foreach ($productcontent as $item) {
                $value = $request->input($item);
                $existingSetting = ProductSection::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProductSection::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesprojects')->with('success', 'Projects section data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesprojects')->with('error', 'Error: ' . $e->getMessage());
        }
    } 
    public function project2()
    {
        $projectSection2Content = ProjectSection2::orderBy('id', 'desc')->get();
        return view('project-2.index', compact('projectSection2Content'));
    }
    public function project2Create()
    {
        $projectSection2Content = ProjectSection2::get();
        return view('project-2.create', compact('projectSection2Content'));  
    }
    public function project2Store(Request $request)
    {
        try {
            $productcontent = [
                'logo_image',
                'underlined_label',
                'title','description','bannar_image','background_image','background_image_title','quote','title_1','sub_title_1','bottom_bannar_image', 'description_2'
            ];

            foreach ($productcontent as $item) {
                $value = $request->input($item);
                $existingSetting = ProjectSection2::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProjectSection2::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-2.index')->with('success', 'Projects section 2 data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-2.index')->with('error', 'Error: ' . $e->getMessage());
        }
    } 
    public function project3Content()
    {
        $projectSection3Content = ProjectSection3Content::orderBy('id', 'desc')->get();
        return view('project-3-content.index', compact('projectSection3Content'));
    }
    public function project3ContentCreate()
    {
        $projectSection3Content = ProjectSection3Content::get();
        return view('project-3-content.create', compact('projectSection3Content'));  
    }
    public function project3ContentStore(Request $request)
    {
        try {
            $project3content = [
                'logo_image',
                'underlined_label',
                'title','description','bannar_image','quote_1','quote_2'
            ];

            foreach ($project3content as $item) {
                $value = $request->input($item);
                $existingSetting = ProjectSection3Content::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProjectSection3Content::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-3-content.index')->with('success', 'Projects section 3 data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-3-content.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project3CustomerReview()
    {
        $projectSection3CustomerReview = ProjectSection3CustomerReview::orderBy('id', 'desc')->get();
        return view('project-3-customerReview.index', compact('projectSection3CustomerReview'));
    }
    public function project3customerReviewCreate()
    {
        $projectSection3CustomerReview = ProjectSection3CustomerReview::get();
        return view('project-3-customerReview.create', compact('projectSection3CustomerReview'));  
    }
    public function project3customerReviewStore(Request $request)
    {
        try {
            $project3customerReview = [
                'background_image',
                'title',
                'description','btn_title'
            ];

            foreach ($project3customerReview as $item) {
                $value = $request->input($item);
                $existingSetting = ProjectSection3CustomerReview::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProjectSection3CustomerReview::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-3-customerReview.index')->with('success', 'Projects section 3 customer review data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-3-customerReview.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project4()
    {
        $projectSection4 = ProjectSection4::orderBy('id', 'desc')->get();
        return view('project-4.index', compact('projectSection4'));
    }
    public function project4Create()
    {
        $projectSection4 = ProjectSection4::get();
        return view('project-4.create', compact('projectSection4'));  
    }
    public function project4Store(Request $request)
    {
        try {
            $project4 = [
                'logo_image',
                'underlined_label',
                'title_1','description', 'description_2', 'title_2','sub_title_2','image_1','image_2','title_3','image_3','title_4','sub_title_4','right_image'
            ];

            foreach ($project4 as $item) {
                $value = $request->input($item);
                $existingSetting = ProjectSection4::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProjectSection4::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-4.index')->with('success', 'Projects section 4 customer review data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-4.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project5Content()
    {
        $projectSection5Content = Project5Content::orderBy('id', 'desc')->get();
        return view('project-5-content.index', compact('projectSection5Content'));
    }
    public function project5ContentCreate()
    {
        $projectSection5Content = Project5Content::get();
        return view('project-5-content.create', compact('projectSection5Content'));  
    }
    public function project5ContentStore(Request $request)
    {
        try {
            $project5 = [
                'logo_image',
                'underlined_label',
                'title_1','description','image_1','bannar_title','bannar_sub_title','bannar_image','bannar_bottom_title','bannar_bottom_sub_title'
            ];

            foreach ($project5 as $item) {
                $value = $request->input($item);
                $existingSetting = Project5Content::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Project5Content::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-5-content.index')->with('success', 'Projects section 5 data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-5-content.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project5CustomerReview()
    {
        $projectSection5CustomerReview = Project5CustomerReview::orderBy('id', 'desc')->get();
        return view('project-5-customerReview.index', compact('projectSection5CustomerReview'));
    }
    public function project5customerReviewCreate()
    {
        $projectSection5CustomerReview = Project5CustomerReview::get();
        return view('project-5-customerReview.create', compact('projectSection5CustomerReview'));  
    }
    public function project5customerReviewStore(Request $request)
    {
        try {
            $project5customerReview = [
                'background_image',
                'title',
                'description','btn_title'
            ];

            foreach ($project5customerReview as $item) {
                $value = $request->input($item);
                $existingSetting = Project5CustomerReview::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Project5CustomerReview::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-5-customerReview.index')->with('success', 'Projects section 5 customer review data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-5-customerReview.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project6()
    {
        $projectSection6 = ProjectSection6::orderBy('id', 'desc')->get();
        return view('project-6.index', compact('projectSection6'));
    }
    public function project6Create()
    {
        $projectSection6 = ProjectSection6::get();
        return view('project-6.create', compact('projectSection6'));  
    }
    public function project6Store(Request $request)
    {
        try {
            $project6 = [
                'underlined_label',
                'title_1','description','bannar_image_1','bannar_image_2','bannar_image_2_title','quote_1','quote_1_desc','quote_1_image','quote_2','quote_2_desc','quote_2_image'
            ];

            foreach ($project6 as $item) {
                $value = $request->input($item);
                $existingSetting = ProjectSection6::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProjectSection6::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-6.index')->with('success', 'Projects section 6 data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-6.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project7Content()
    {
        $projectSection7Content = Project7Content::orderBy('id', 'desc')->get();
        return view('project-7-content.index', compact('projectSection7Content'));
    }
    public function project7ContentCreate()
    {
        $projectSection7Content = Project7Content::get();
        return view('project-7-content.create', compact('projectSection7Content'));  
    }
    public function project7ContentStore(Request $request)
    {
        try {
            $project5 = [
                'logo_image',
                'underlined_label',
                'title_1','description','bannar_image_1','text_btwn_borders','quote','info','background_image','divider_image','bannar_img_title_2','bannar_image_2','background_image_2'
            ];

            foreach ($project5 as $item) {
                $value = $request->input($item);
                $existingSetting = Project7Content::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Project7Content::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-7-content.index')->with('success', 'Projects section 7 data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-7-content.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project7CustomerReview()
    {
        $projectSection7CustomerReview = Project7CustomerReview::orderBy('id', 'desc')->get();
        return view('project-7-customerReview.index', compact('projectSection7CustomerReview'));
    }
    public function project7customerReviewCreate()
    {
        $projectSection7CustomerReview = Project7CustomerReview::get();
        return view('project-7-customerReview.create', compact('projectSection7CustomerReview'));  
    }
    public function project7customerReviewStore(Request $request)
    {
        try {
            $project5customerReview = [
                'background_image',
                'title',
                'description','btn_title'
            ];

            foreach ($project5customerReview as $item) {
                $value = $request->input($item);
                $existingSetting = Project7CustomerReview::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Project7CustomerReview::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-7-customerReview.index')->with('success', 'Projects section 7 customer review data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-7-customerReview.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project8Content()
    {
        $projectSection8Content = Project8Content::orderBy('id', 'desc')->get();
        return view('project-8-content.index', compact('projectSection8Content'));
    }
    public function project8ContentCreate()
    {
        $projectSection8Content = Project8Content::get();
        return view('project-8-content.create', compact('projectSection8Content'));  
    }
    public function project8ContentStore(Request $request)
    {
        try {
            $project8 = [
                'logo_image',
                'underlined_label',
                'title_1','description','bannar_image_1_title','bannar_image_1'
            ];

            foreach ($project8 as $item) {
                $value = $request->input($item);
                $existingSetting = Project8Content::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Project8Content::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-8-content.index')->with('success', 'Projects section 8 data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-8-content.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function project8Qualities()
    {
        $projectSection8Qualities = Project8Qualities::orderBy('id', 'desc')->get();
        return view('project-8-qualities.index', compact('projectSection8Qualities'));
    }
    public function project8QualitiesCreate()
    {
        $projectSection8Qualities = Project8Qualities::get();
        return view('project-8-qualities.create', compact('projectSection8Qualities'));  
    }
    public function project8QualitiesStore(Request $request)
    {
        try {
            $project8 = [
                'title',
                'image_1',
                'image_1_info','image_2','image_2_info','image_3','image_3_info','bottom_image'
            ];

            foreach ($project8 as $item) {
                $value = $request->input($item);
                $existingSetting = Project8Qualities::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Project8Qualities::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('Salesproject-8-qualities.index')->with('success', 'Projects section 8 data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('Salesproject-8-qualities.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function sliderSectionContent()
    {
        $sliderSectionContent = SliderSectionContent::orderBy('id', 'desc')->get();
        return view('slider-section-content.index', compact('sliderSectionContent'));
    }
    public function sliderSectionContentCreate()
    {
        $sliderSectionContent = SliderSectionContent::get();
        return view('slider-section-content.create', compact('sliderSectionContent'));  
    }
    public function sliderSectionContentStore(Request $request)
    {
        try {
            $sliderSectionContent = [
                'main_title',
                'sub_title',
                'para_1','para_2'
            ];

            foreach ($sliderSectionContent as $item) {
                $value = $request->input($item);
                $existingSetting = SliderSectionContent::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    SliderSectionContent::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('slider-section-content')->with('success', 'Slider Section data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('slider-section-content')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function sliderSectionImages()
    {
        $sliderSectionImages = SliderSectionImages::orderBy('id', 'desc')->get();
        return view('sales-slider-images.index', compact('sliderSectionImages'));
    }
    public function sliderSectionImagesCreate()
    {
        // $sliderSectionContent = SliderSectionContent::get();
        return view('sales-slider-images.create');  
    }
    public function sliderSectionImagesStore(Request $request)
    {
        $request->validate([
            'carousel_images' => 'required',
        ]);
        try {

            if(isset($request->update_id)){
        $carousel = SliderSectionImages::find($request->update_id);

            }else{

            $carousel = new SliderSectionImages;
            }
            $carousel->images = $request->carousel_images;
            $carousel->save();

            return redirect()->route('slider-section-images')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('slider-section-images')->with('error', 'An error occurred. Please try again.');
        }
    }
    
    public function buisnessToolsSection(Request $request)
    { 
        $buisnessToolsSection = BuisnessToolsSection::orderBy('id', 'desc')->get();
        return view('buisnesstools-section.index', compact('buisnessToolsSection'));
    }
    public function buisnessToolsSectionCreate()
    {
        $buisnessToolsSection = BuisnessToolsSection::get();
        return view('buisnesstools-section.create', compact('buisnessToolsSection'));
    }
    public function buisnessToolsSectionStore(Request $request)
    {
        try {
            $buisnessToolsSectionContent = [
                'title',
                'image_1',
                'img_1_text','image_2','img_2_text','image_3','img_3_text','image_4','img_4_text','image_5','img_5_text','para_1','para_2'
            ];

            foreach ($buisnessToolsSectionContent as $item) {
                $value = $request->input($item);
                $existingSetting = BuisnessToolsSection::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    BuisnessToolsSection::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('buisnessTools-section')->with('success', 'Buisness Tools Section data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('buisnessTools-section')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function howItWorks(Request $request)
    { 
        $howItWorksSection = HowItWorksContent::orderBy('id', 'desc')->get();
        return view('how-it-works-content.index', compact('howItWorksSection'));
    }
    public function howItWorksCreate()
    {
        $howItWorksSection = HowItWorksContent::get();
        return view('how-it-works-content.create', compact('howItWorksSection'));
    }
    public function howItWorksStore(Request $request)
    {
        try {
            $SectionContent = [
                'title',
                'image'
            ];

            foreach ($SectionContent as $item) {
                $value = $request->input($item);
                $existingSetting = HowItWorksContent::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    HowItWorksContent::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('howItWorks-content')->with('success', 'How it works section data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('howItWorks-content')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function howItWorksSteps(Request $request)
    { 
        $howItWorksSteps = HowItWorksSteps::orderBy('id', 'desc')->get();
        return view('how-it-works-steps.index', compact('howItWorksSteps'));
    }
    public function howItWorksStepsCreate()
    {
        $howItWorksSteps = HowItWorksSteps::get();
        return view('how-it-works-steps.create', compact('howItWorksSteps'));
    }
    public function howItWorksStepsStore(Request $request)
    {
        try {
            $SectionContent = [
                'main_title',
                'image_1','title_1','sub_title_1','description_1','image_2','title_2','sub_title_2','description_2','image_3','title_3','sub_title_3','description_3'
            ];

            foreach ($SectionContent as $item) {
                $value = $request->input($item);
                $existingSetting = HowItWorksSteps::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    HowItWorksSteps::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('howItWorks-steps')->with('success', 'How it works steps data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('howItWorks-steps')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    public function knowMore(Request $request)
    { 
        $knowMoreSection = KnowMoreSection::orderBy('id', 'desc')->get();
        return view('know-more-section.index', compact('knowMoreSection'));
    }
    public function knowMoreCreate()
    {
        $knowMoreSection = KnowMoreSection::get();
        return view('know-more-section.create', compact('knowMoreSection'));
    }
    public function knowMoreStore(Request $request)
    {
        try {
            $SectionContent = [
                'title',
                'para','bottom_text','bannar_image'
            ];

            foreach ($SectionContent as $item) {
                $value = $request->input($item);
                $existingSetting = KnowMoreSection::where('type', $item)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KnowMoreSection::create(['type' => $item, 'message' => $value]);
                }
            }

            return redirect()->route('knowMore-section')->with('success', 'Know more data updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('knowMore-section')->with('error', 'Error: ' . $e->getMessage());
        }
    }

}
