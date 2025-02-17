<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\AddProjectModel;
use App\Models\CalculatorSettings;
use App\Models\WarrantyTitle;
use App\Models\WarrantyCard;
use App\Models\ContactSettings;
use App\Models\ContactusMessage;
use App\Models\FactowCard;
use App\Models\FactowSetting;
use App\Models\Feedback;
use App\Models\HeroSection;
use App\Models\Brand;
use App\Models\ClientFeedback;
use App\Models\ClientRating;
use App\Models\Company;
use App\Models\CompanyCard;
use App\Models\CustomerReview;
use App\Models\FeedbackSummary;
use App\Models\FormFour;
use App\Models\FormOne;
use App\Models\FormThree;
use App\Models\FormTwo;
use App\Models\Rating;
use App\Models\IwdSection1;
use App\Models\IwdSection2;
use App\Models\IwdSection3;
use App\Models\IwdSection4;
use App\Models\IwdSection5;
use App\Models\IwdSection6;
use App\Models\IwdSection7;
use App\Models\PricingOptionModel;
use App\Models\ProjectCards;
use App\Models\SelectedProject;
use App\Models\SliderImages;
use App\Models\WhatToExpect;
use App\Models\WhyUs;
use App\Models\ExaminationHeroSection;
use App\Models\CustomerRating;
use App\Models\PercentageCard;
use App\Models\ResearchResult;
use App\Models\HowTestWorks;
use App\Models\Faq;
use App\Models\FaqSection;
use App\Models\MainContent1;
use App\Models\MainContent2;
use App\Models\MainNumber;
use App\Models\MarketingHero;
use App\Models\POForm1Options;
use App\Models\POForm2Options;
use App\Models\ResultCard;
use App\Models\ResultTableTitle;
use App\Models\StrategyModel;
use App\Models\StrategyFeature;
use App\Models\MarketingFAQcard;
use App\Models\MarketingFAQcontent;
use App\Models\MarketingPriceCard;
use App\Models\MarketingPriceTitle;
use App\Models\MarketingStrategyAction;
use App\Models\TestimonialModel;
use App\Models\ResultMax;
use App\Models\ProjektowanieLogo;
use App\Models\GoodBusiness;
use App\Models\Opinion;
use App\Models\Receive;
use App\Models\ReceivePoints;
use App\Models\Guarantee;
use App\Models\ProjektowanieProject;
use App\Models\Gallery;
use App\Models\GalleryImageGroup;
use App\Models\ImageGroup;
use App\Models\PdfCopy;
use App\Models\StepByStep;
use App\Models\FreeShops;
use App\Models\Enexo;
use App\Models\Daco;
use App\Models\Aico;
use App\Models\ZooGarden;
use App\Models\Construction;
use App\Models\Restaurant;
use App\Models\Park;
use App\Models\NewCompany;
use App\Models\NewCompanyProfitSlider;
use App\Models\FooterLogo;
use App\Models\FooterPageLink;
use App\Models\LogoAccordion;
use App\Models\GPN;
use App\Models\GPNCompany;
use App\Models\GPNProduct;

use App\Models\AtOwonce;
use App\Models\TeamsModel;

use App\Models\TeamSetting;
use App\Models\TeamCard;
use App\Models\TeamCard2;
use App\Models\TeamImage; 
use App\Models\TeamSection9;
use App\Models\MarketingAnalysisCard1;
use App\Models\MarketingAnalysisCard2;
use App\Models\MarketingAnalysisCard3;
use App\Models\MarketingAnalysisCard4;
use App\Models\MarketingBranding;
use App\Models\MarketingImageAdvantage;
use App\Models\MarketingQuoteOne;
use App\Models\MarketingQuoteTwo;
use App\Models\MarketingWhatReceive;

use App\Models\Copywriting;
use App\Models\UxCounterData;
use App\Models\UXFAQcardModel;
use App\Models\UXFAQModel;

use App\Models\PriceList;
use App\Models\FirstPriceMenuCard;
use App\Models\FourthPriceMenuCard;
use App\Models\FourthPriceRange;
use App\Models\FourthPriceCardDropdwonOption;

use App\Models\FirstPriceCardDropdwonOption;
use App\Models\FirstPriceRange;
use App\Models\KonsultacjaDropdown1;
use App\Models\KonsultacjaDropdown2;
use App\Models\KonsultacjaDropdown3;
use App\Models\KonsultacjaDropdown4;
use App\Models\KonsultacjaFormContents;
use App\Models\ThirdPriceCard;
use App\Models\ThirdPriceCardDropdwonOption;
use App\Models\ThirdPriceRange;
use App\Models\SecondPriceCardDropdownOption;
use App\Models\SecondPriceCardDropdownOption2;
use App\Models\SecondPriceCardDropdownOption3;
use App\Models\SecondPriceCardDropdownOption4;
use App\Models\SecondPriceMenuCard;
use App\Models\UXgoodProcess;
use App\Models\UXinfo;
use App\Models\UXslider;
use App\Models\UXstages;
use App\Models\UXsystematically;
use App\Models\UXVideoTab;
use App\Models\UXwebsite;
use App\Models\UXexecutive;

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
use App\Models\BrandOne;
use App\Models\BrandTitle;
use App\Models\RatingOpinion;
use App\Models\RatingTitle;

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
use App\Models\Implementation;
use App\Models\sales;
use App\Models\PostExamination;

use App\Models\KreatywnyBrand;
use App\Models\KreatywnyCompany;
use App\Models\KreatywnyHeroSection;
use App\Models\KreatywnyCompanyCard;
use App\Models\KreatywnyRating;
use App\Models\KreatywnySliderImages;
use App\Models\KreatywnyClientRating;
use App\Models\KreatywnyClientFeedback;
use App\Models\KreatywnyFeedbackSummary;
use App\Models\KreatywnyIwdSection1;
use App\Models\KreatywnyIwdSection2;
use App\Models\KreatywnyIwdSection3;
use App\Models\KreatywnyIwdSection4;
use App\Models\KreatywnyIwdSection5;
use App\Models\KreatywnyIwdSection6;
use App\Models\KreatywnyIwdSection7;

use App\Models\ProfesjonalneBrand;
use App\Models\ProfesjonalneClientFeedback;
use App\Models\ProfesjonalneClientRating;
use App\Models\ProfesjonalneCompany;
use App\Models\ProfesjonalneCompanyCard;
use App\Models\ProfesjonalneFeedbackSummary;
use App\Models\ProfesjonalneHeroSection;
use App\Models\ProfesjonalneIwdSection1;
use App\Models\ProfesjonalneIwdSection2;
use App\Models\ProfesjonalneIwdSection3;
use App\Models\ProfesjonalneIwdSection4;
use App\Models\ProfesjonalneIwdSection5;
use App\Models\ProfesjonalneIwdSection6;
use App\Models\ProfesjonalneIwdSection7;
use App\Models\ProfesjonalneRating;
use App\Models\ProfesjonalneSliderImages;

use Illuminate\Support\Facades\DB;

use App\Models\PriceListMenu2FinalTable;

class ApiController extends Controller
{
    public function contactSetting()
    {
        try {
            $project = AddProjectModel::orderBy('id', 'desc')->get();
            $contact_us = ContactSettings::where('status', 'active')->get();
            $feedback = Feedback::orderBy('id', 'desc')->get();
            
            $messageResponse = [];
            $form = [];

            foreach ($contact_us as $key => $value) {
                if ($value->type == 'main_title') {
                    $contact_details['main_title'] = $value->message;
                }
                if ($value->type == 'sub_title') {
                    $contact_details['sub_title'] = $value->message;
                }
                if ($value->type == 'first_image') {
                    $contact_details['first_image'] = $value->message;
                }
                if ($value->type == 'second_image') {
                    $contact_details['second_image'] = $value->message;
                }
                if ($value->type == 'third_image') {
                    $contact_details['third_image'] = $value->message;
                }
                if ($value->type == 'fourth_image') {
                    $contact_details['fourth_image'] = $value->message;
                }
                if ($value->type == 'manual') {
                    $contact_details['manual'] = $value->message;
                }
                if ($value->type == 'bellow_to_manual') {
                    $contact_details['bellow_to_manual'] = $value->message;
                }
                if ($value->type == 'social_media_content') {
                    $contact_details['social_media_content'] = $value->message;
                }
                if ($value->type == 'social_media_title') {
                    $contact_details['social_media_title'] = $value->message;
                }
                if ($value->type == 'vat_id') {
                    $contact_details['vat_id'] = $value->message;
                }
                if ($value->type == 'regon') {
                    $contact_details['regon'] = $value->message;
                }
                if ($value->type == 'kawka') {
                    $contact_details['kawka'] = $value->message;
                }
                if ($value->type == 'co_work') {
                    $contact_details['co_work'] = $value->message;
                }
                if ($value->type == 'title') {
                    $form['title'] = $value->message;
                }
                if ($value->type == 'number') {
                    $form['number'] = $value->message;
                }
                if ($value->type == 'mail') {
                    $form['mail'] = $value->message;
                }
                if ($value->type == 'button_text') {
                    $form['button_text'] = $value->message;
                }
                if ($value->type == 'message_response') {
                    $messageResponse['message_response'] = $value->message;
                }
                if ($value->type == 'greeting_message') {
                    $messageResponse['greeting_message'] = $value->message;
                }
                if ($value->type == 'link_prompt_text') {
                    $messageResponse['link_prompt_text'] = $value->message;
                }
                if ($value->type == 'social_media_text') {
                    $messageResponse['social_media_text'] = $value->message;
                }
                if ($value->type == 'display_picture') {
                    $messageResponse['display_picture'] = $value->message;
                }
                if ($value->type == 'email_svg') {
                    $messageResponse['email_svg'] = $value->message;
                }
            }

            $data['contact_us'] = $contact_details;
             $data['contact_us']['form'] = $form;
            $data['project'] = $project;
            $data['feedback'] = $feedback;
            $data['contact_us']['MessageResponse'] = $messageResponse;
            
            return response()->json([
                'status' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }
    
     public function contactMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|string',
            'email' => 'required|email',
            //    'subject'=>'required|string',
            'message' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        // Store the contact message in the database
        $contactMessage = new ContactusMessage();
        $contactMessage->name = $request->name;
        $contactMessage->email = $request->email;
        $contactMessage->message = $request->message;
        $contactMessage->telephone = $request->telephone;
        $contactMessage->save();

        // Send the email
        Mail::send('mails.contact-us', ['data' => $contactMessage], function ($message) use ($contactMessage) {
            $message->to("sanya@resiliencesoft.com")
                ->subject("Contact Request from Marketersi")
                ->from("studio@marketersi.pl");
        });
        if (true) {
            return response()->json([
                'status' => true,
                'message' => "Mail Sent Successfully.",
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Failed to send email.",
            ], 400);
        }
    }

    public function factowSetting()
    {
        try {
            $factowSetting = FactowSetting::orderBy('id', 'desc')->get();
            $factowCard = FactowCard::orderBy('id', 'desc')->select('id', 'image_url', 'title')->get();

            if (count($factowCard) > 0) {
                $factowCard = $factowCard->toArray();
                foreach ($factowCard as $index => $value) {
                    $factowCard[$index]['description'] = array_values(FactowCard::where('id', $value['id'])->select('description1', 'description2', 'description3')->first()->toArray());
                }
            }


            foreach ($factowSetting as $key => $value) {
                if ($value->type == 'title') {
                    $factowSettingdetails['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $factowSettingdetails['subtitle'] = $value->message;
                }
                if ($value->type == 'video_url') {
                    $factowSettingdetails['video_url'] = $value->message;
                }
            }


            $data = $factowSettingdetails;
            $data['factocard'] = $factowCard;


            return response()->json([
                'status' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }


    public function calculatorSetting()
    {
        try {

            $calSetting = CalculatorSettings::orderBy('id', 'desc')->get();

            $datacal = CalculatorSettings::all();

            foreach ($calSetting as $key => $value) {

                if ($value->type == 'first_heading') {
                    $details['first_heading'] = $value->message;
                }
                if ($value->type == 'sub_heading') {
                    $details['sub_heading'] = $value->message;
                }
                if ($value->type == 'second_heading') {
                    $details['second_heading'] = $value->message;
                }
                if ($value->type == 'first_paragraph') {
                    $details['first_paragraph'] = $value->message;
                }
                if ($value->type == 'second_paragraph') {
                    $details['second_paragraph'] = $value->message;
                }
            }

            // $details['calculator-details'] = $datacal;
            $details['warranty'] = WarrantyTitle::pluck('message', 'type')->toArray();
            $details['warranty']['card'] = WarrantyCard::pluck('message','type')->toArray();
            return response()->json([
                'status' => true,
                'data' => $details,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }

    public function homeScreenSetting()
    {
        try {
            $heroSection = HeroSection::first();
            $brandSection = Brand::orderBy('id', 'desc')->get();
            $companySection = Company::orderBy('id', 'desc')->get();
            $companyCard = CompanyCard::orderBy('id', 'desc')->get();
            $ratingSection = Rating::orderBy('id', 'desc')->get();
            $Section1 = IwdSection1::orderBy('id', 'desc')->get();
            $Section2 = IwdSection2::orderBy('id', 'desc')->get();
            $Section3 = IwdSection3::orderBy('id', 'desc')->get();
            $Section4 = IwdSection4::orderBy('id', 'desc')->get();
            $Section5 = IwdSection5::orderBy('id', 'desc')->get();
            $Section6 = IwdSection6::orderBy('id', 'desc')->get();
            $Section7 = IwdSection7::orderBy('id', 'desc')->get();
            $RatingCard = ClientRating::orderBy('id', 'desc')->get();
            $ClientFeedback = ClientFeedback::orderBy('id', 'desc')->get();
            $FeedbackSummary = FeedbackSummary::orderBy('id', 'desc')->get();

            $branddetails = [];
            $companySectionDetails = [];
            $ratingSectionDetails = [];
            $Section1Details = [];
            $Section2Details = [];
            $Section3Details = [];
            $Section4Details = [];
            $Section5Details = [];
            $Section6Details = [];
            $Section7Details = [];
            $RatingCardDetails = [];
            $FeedbackSummaryDetails = [];

            foreach ($brandSection as $key => $value) {

                if ($value->type == 'brand_image1') {
                    $branddetails['brand_image1'] = $value->message;
                }
                if ($value->type == 'brand_image2') {
                    $branddetails['brand_image2'] = $value->message;
                }
                if ($value->type == 'banner_image') {
                    $branddetails['banner_image'] = $value->message;
                }
                if ($value->type == 'banner_video') {
                    $branddetails['banner_video'] = $value->message;
                }
                if ($value->type == 'brand_logo1') {
                    $branddetails['brand_logo1'] = $value->message;
                }
                if ($value->type == 'brand_logo2') {
                    $branddetails['brand_logo2'] = $value->message;
                }
                if ($value->type == 'banner_text') {
                    $branddetails['banner_text'] = $value->message;
                }
            }

            foreach ($companySection as $key => $value) {

                if ($value->type == 'main_title') {
                    $companySectionDetails['main_title'] = $value->message;
                }
                if ($value->type == 'subtitle1') {
                    $companySectionDetails['subtitle1'] = $value->message;
                }
                if ($value->type == 'subtitle2') {
                    $companySectionDetails['subtitle2'] = $value->message;
                }
                if ($value->type == 'image_1') {
                    $companySectionDetails['image_1'] = $value->message;
                }
                if ($value->type == 'image_2') {
                    $companySectionDetails['image_2'] = $value->message;
                }
                if ($value->type == 'image_3') {
                    $companySectionDetails['image_3'] = $value->message;
                }
            }

            foreach ($ratingSection as $key => $value) {

                if ($value->type == 'main_title') {
                    $ratingSectionDetails['main_title'] = $value->message;
                }
                if ($value->type == 'subtitle_1') {
                    $ratingSectionDetails['subtitle_1'] = $value->message;
                }
                if ($value->type == 'subtitle_2') {
                    $ratingSectionDetails['subtitle_2'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $ratingSectionDetails['image_url'] = $value->message;
                }
                if ($value->type == 'rating_no') {
                    $ratingSectionDetails['rating_no'] = $value->message;
                }
            }

            foreach ($Section1 as $key => $value) {

                if ($value->type == 'image_url') {
                    $Section1Details['image_url'] = $value->message;
                }
                if ($value->type == 'title') {
                    $Section1Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle_1') {
                    $Section1Details['subtitle_1'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section1Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section1Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section1Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'subtitle_2') {
                    $Section1Details['subtitle_2'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section1Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $Section1Details['paragraph_5'] = $value->message;
                }
                if ($value->type == 'paragraph_6') {
                    $Section1Details['paragraph_6'] = $value->message;
                }
                if ($value->type == 'paragraph_7') {
                    $Section1Details['paragraph_7'] = $value->message;
                }
                if ($value->type == 'paragraph_8') {
                    $Section1Details['paragraph_8'] = $value->message;
                }
                if ($value->type == 'paragraph_9') {
                    $Section1Details['paragraph_9'] = $value->message;
                }
            }

            foreach ($Section2 as $key => $value) {

                if ($value->type == 'title') {
                    $Section2Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section2Details['subtitle'] = $value->message;
                }
                if ($value->type == 'line_1') {
                    $Section2Details['line_1'] = $value->message;
                }
                if ($value->type == 'line_2') {
                    $Section2Details['line_2'] = $value->message;
                }
                if ($value->type == 'line_3') {
                    $Section2Details['line_3'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section2Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section2Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section2Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section2Details['paragraph_4'] = $value->message;
                }
            }

            foreach ($Section3 as $key => $value) {

                if ($value->type == 'video_url') {
                    $Section3Details['video_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section3Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section3Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section3Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section3Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $Section3Details['paragraph_5'] = $value->message;
                }
                if ($value->type == 'paragraph_6') {
                    $Section3Details['paragraph_6'] = $value->message;
                }
            }

            foreach ($Section4 as $key => $value) {

                if ($value->type == 'title') {
                    $Section4Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section4Details['subtitle'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $Section4Details['image_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section4Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section4Details['paragraph_2'] = $value->message;
                }
            }

            foreach ($Section5 as $key => $value) {

                if ($value->type == 'quote') {
                    $Section5Details['quote'] = $value->message;
                }
                if ($value->type == 'video_url') {
                    $Section5Details['video_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section5Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section5Details['paragraph_2'] = $value->message;
                }
            }

            foreach ($Section6 as $key => $value) {

                if ($value->type == 'video_url') {
                    $Section6Details['video_url'] = $value->message;
                }
                if ($value->type == 'quote') {
                    $Section6Details['quote'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section6Details['subtitle'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section6Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section6Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section6Details['paragraph_3'] = $value->message;
                }
            }

            foreach ($Section7 as $key => $value) {

                if ($value->type == 'video_url_1') {
                    $Section7Details['video_url_1'] = $value->message;
                }
                if ($value->type == 'title') {
                    $Section7Details['title'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section7Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'video_url_2') {
                    $Section7Details['video_url_2'] = $value->message;
                }
                if ($value->type == 'video_url_3') {
                    $Section7Details['video_url_3'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section7Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section7Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'video_url_4') {
                    $Section7Details['video_url_4'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section7Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'video_url_5') {
                    $Section7Details['video_url_5'] = $value->message;
                }
                if ($value->type == 'bottom_title') {
                    $Section7Details['bottom_title'] = $value->message;
                }
                if ($value->type == 'quoted_title') {
                    $Section7Details['quoted_title'] = $value->message;
                }
                if ($value->type == 'image_url_1') {
                    $Section7Details['image_url_1'] = $value->message;
                }
                if ($value->type == 'image_url_2') {
                    $Section7Details['image_url_2'] = $value->message;
                }
            }

            foreach ($RatingCard as $key => $value) {

                if ($value->type == 'left_animated_image') {
                    $RatingCardDetails['left_animated_image'] = $value->message;
                }
                if ($value->type == 'rating_image') {
                    $RatingCardDetails['rating_image'] = $value->message;
                }
                if ($value->type == 'rating_description') {
                    $RatingCardDetails['rating_description'] = $value->message;
                }
            }
            foreach ($FeedbackSummary as $key => $value) {

                if ($value->type == 'title') {
                    $FeedbackSummaryDetails['title'] = $value->message;
                }
                if ($value->type == 'description') {
                    $FeedbackSummaryDetails['description'] = $value->message;
                }
            }

            for ($i = 1; $i < 5; $i++) {

                $SliderImages['row' . $i] = SliderImages::where('type', 'like', "row_{$i}_image_url_%")->get();
            }

            $data['heroSection'] = $heroSection;
            $data['brandSection'] = $branddetails;
            $data['companySection'] = $companySectionDetails;
            $data['companyCard'] = $companyCard;
            $data['ratingSection'] = $ratingSectionDetails;
            $data['imageswithdescription']['section1'] = (object) $Section1Details;
            $data['imageswithdescription']['section2'] = (object) $Section2Details;
            $data['imageswithdescription']['section3'] = (object) $Section3Details;
            $data['imageswithdescription']['section4'] = (object) $Section4Details;
            $data['imageswithdescription']['section5'] = (object) $Section5Details;
            $data['imageswithdescription']['section6'] = (object) $Section6Details;
            $data['imageswithdescription']['section7'] = (object) $Section7Details;
            $data['ClientReviews']['SliderImages'] = (object) $SliderImages;
            $data['ClientReviews']['RatingCard'] = (object) $RatingCardDetails;
            $data['ClientReviews']['ClientFeedback'] = (object) $ClientFeedback;
            $data['ClientReviews']['FeedbackSummary'] = (object) $FeedbackSummaryDetails;

            return response()->json([
                'status' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }
    
    public function kreatywnyMontażVideoSetting()
    {
        try {
            $heroSection = KreatywnyHeroSection::first();
            $brandSection = KreatywnyBrand::orderBy('id', 'desc')->get();
            $companySection = KreatywnyCompany::orderBy('id', 'desc')->get();
            $companyCard = KreatywnyCompanyCard::orderBy('id', 'desc')->get();
            $ratingSection = KreatywnyRating::orderBy('id', 'desc')->get();
            $Section1 = KreatywnyIwdSection1::orderBy('id', 'desc')->get();
            $Section2 = KreatywnyIwdSection2::orderBy('id', 'desc')->get();
            $Section3 = KreatywnyIwdSection3::orderBy('id', 'desc')->get();
            $Section4 = KreatywnyIwdSection4::orderBy('id', 'desc')->get();
            $Section5 = KreatywnyIwdSection5::orderBy('id', 'desc')->get();
            $Section6 = KreatywnyIwdSection6::orderBy('id', 'desc')->get();
            $Section7 = KreatywnyIwdSection7::orderBy('id', 'desc')->get();
            $RatingCard = KreatywnyClientRating::orderBy('id', 'desc')->get();
            $ClientFeedback = KreatywnyClientFeedback::orderBy('id', 'desc')->get();
            $FeedbackSummary = KreatywnyFeedbackSummary::orderBy('id', 'desc')->get();

            $branddetails = [];
            $companySectionDetails = [];
            $ratingSectionDetails = [];
            $Section1Details = [];
            $Section2Details = [];
            $Section3Details = [];
            $Section4Details = [];
            $Section5Details = [];
            $Section6Details = [];
            $Section7Details = [];
            $RatingCardDetails = [];
            $FeedbackSummaryDetails = [];

            foreach ($brandSection as $key => $value) {

                if ($value->type == 'brand_image1') {
                    $branddetails['brand_image1'] = $value->message;
                }
                if ($value->type == 'brand_image2') {
                    $branddetails['brand_image2'] = $value->message;
                }
                if ($value->type == 'banner_image') {
                    $branddetails['banner_image'] = $value->message;
                }
                if ($value->type == 'banner_video') {
                    $branddetails['banner_video'] = $value->message;
                }
                if ($value->type == 'brand_logo1') {
                    $branddetails['brand_logo1'] = $value->message;
                }
                if ($value->type == 'brand_logo2') {
                    $branddetails['brand_logo2'] = $value->message;
                }
                if ($value->type == 'banner_text') {
                    $branddetails['banner_text'] = $value->message;
                }
            }

            foreach ($companySection as $key => $value) {

                if ($value->type == 'main_title') {
                    $companySectionDetails['main_title'] = $value->message;
                }
                if ($value->type == 'subtitle1') {
                    $companySectionDetails['subtitle1'] = $value->message;
                }
                if ($value->type == 'subtitle2') {
                    $companySectionDetails['subtitle2'] = $value->message;
                }
                if ($value->type == 'image_1') {
                    $companySectionDetails['image_1'] = $value->message;
                }
                if ($value->type == 'image_2') {
                    $companySectionDetails['image_2'] = $value->message;
                }
                if ($value->type == 'image_3') {
                    $companySectionDetails['image_3'] = $value->message;
                }
            }

            foreach ($ratingSection as $key => $value) {

                if ($value->type == 'main_title') {
                    $ratingSectionDetails['main_title'] = $value->message;
                }
                if ($value->type == 'subtitle_1') {
                    $ratingSectionDetails['subtitle_1'] = $value->message;
                }
                if ($value->type == 'subtitle_2') {
                    $ratingSectionDetails['subtitle_2'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $ratingSectionDetails['image_url'] = $value->message;
                }
                if ($value->type == 'rating_no') {
                    $ratingSectionDetails['rating_no'] = $value->message;
                }
            }

            foreach ($Section1 as $key => $value) {

                if ($value->type == 'image_url') {
                    $Section1Details['image_url'] = $value->message;
                }
                if ($value->type == 'title') {
                    $Section1Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle_1') {
                    $Section1Details['subtitle_1'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section1Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section1Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section1Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'subtitle_2') {
                    $Section1Details['subtitle_2'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section1Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $Section1Details['paragraph_5'] = $value->message;
                }
                if ($value->type == 'paragraph_6') {
                    $Section1Details['paragraph_6'] = $value->message;
                }
                if ($value->type == 'paragraph_7') {
                    $Section1Details['paragraph_7'] = $value->message;
                }
                if ($value->type == 'paragraph_8') {
                    $Section1Details['paragraph_8'] = $value->message;
                }
                if ($value->type == 'paragraph_9') {
                    $Section1Details['paragraph_9'] = $value->message;
                }
            }

            foreach ($Section2 as $key => $value) {

                if ($value->type == 'title') {
                    $Section2Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section2Details['subtitle'] = $value->message;
                }
                if ($value->type == 'line_1') {
                    $Section2Details['line_1'] = $value->message;
                }
                if ($value->type == 'line_2') {
                    $Section2Details['line_2'] = $value->message;
                }
                if ($value->type == 'line_3') {
                    $Section2Details['line_3'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section2Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section2Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section2Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section2Details['paragraph_4'] = $value->message;
                }
            }

            foreach ($Section3 as $key => $value) {

                if ($value->type == 'video_url') {
                    $Section3Details['video_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section3Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section3Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section3Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section3Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $Section3Details['paragraph_5'] = $value->message;
                }
                if ($value->type == 'paragraph_6') {
                    $Section3Details['paragraph_6'] = $value->message;
                }
            }

            foreach ($Section4 as $key => $value) {

                if ($value->type == 'title') {
                    $Section4Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section4Details['subtitle'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $Section4Details['image_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section4Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section4Details['paragraph_2'] = $value->message;
                }
            }

            foreach ($Section5 as $key => $value) {

                if ($value->type == 'quote') {
                    $Section5Details['quote'] = $value->message;
                }
                if ($value->type == 'video_url') {
                    $Section5Details['video_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section5Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section5Details['paragraph_2'] = $value->message;
                }
            }

            foreach ($Section6 as $key => $value) {

                if ($value->type == 'video_url') {
                    $Section6Details['video_url'] = $value->message;
                }
                if ($value->type == 'quote') {
                    $Section6Details['quote'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section6Details['subtitle'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section6Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section6Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section6Details['paragraph_3'] = $value->message;
                }
            }

            foreach ($Section7 as $key => $value) {

                if ($value->type == 'video_url_1') {
                    $Section7Details['video_url_1'] = $value->message;
                }
                if ($value->type == 'title') {
                    $Section7Details['title'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section7Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'video_url_2') {
                    $Section7Details['video_url_2'] = $value->message;
                }
                if ($value->type == 'video_url_3') {
                    $Section7Details['video_url_3'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section7Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section7Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'video_url_4') {
                    $Section7Details['video_url_4'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section7Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'video_url_5') {
                    $Section7Details['video_url_5'] = $value->message;
                }
                if ($value->type == 'bottom_title') {
                    $Section7Details['bottom_title'] = $value->message;
                }
                if ($value->type == 'quoted_title') {
                    $Section7Details['quoted_title'] = $value->message;
                }
                if ($value->type == 'image_url_1') {
                    $Section7Details['image_url_1'] = $value->message;
                }
                if ($value->type == 'image_url_2') {
                    $Section7Details['image_url_2'] = $value->message;
                }
            }

            foreach ($RatingCard as $key => $value) {

                if ($value->type == 'left_animated_image') {
                    $RatingCardDetails['left_animated_image'] = $value->message;
                }
                if ($value->type == 'rating_image') {
                    $RatingCardDetails['rating_image'] = $value->message;
                }
                if ($value->type == 'rating_description') {
                    $RatingCardDetails['rating_description'] = $value->message;
                }
            }
            foreach ($FeedbackSummary as $key => $value) {

                if ($value->type == 'title') {
                    $FeedbackSummaryDetails['title'] = $value->message;
                }
                if ($value->type == 'description') {
                    $FeedbackSummaryDetails['description'] = $value->message;
                }
            }

            for ($i = 1; $i < 5; $i++) {

                $SliderImages['row' . $i] = KreatywnySliderImages::where('type', 'like', "row_{$i}_image_url_%")->get();
            }

            $data['heroSection'] = $heroSection;
            $data['brandSection'] = $branddetails;
            $data['companySection'] = $companySectionDetails;
            $data['companyCard'] = $companyCard;
            $data['ratingSection'] = $ratingSectionDetails;
            $data['imageswithdescription']['section1'] = (object) $Section1Details;
            $data['imageswithdescription']['section2'] = (object) $Section2Details;
            $data['imageswithdescription']['section3'] = (object) $Section3Details;
            $data['imageswithdescription']['section4'] = (object) $Section4Details;
            $data['imageswithdescription']['section5'] = (object) $Section5Details;
            $data['imageswithdescription']['section6'] = (object) $Section6Details;
            $data['imageswithdescription']['section7'] = (object) $Section7Details;
            $data['ClientReviews']['SliderImages'] = (object) $SliderImages;
            $data['ClientReviews']['RatingCard'] = (object) $RatingCardDetails;
            $data['ClientReviews']['ClientFeedback'] = (object) $ClientFeedback;
            $data['ClientReviews']['FeedbackSummary'] = (object) $FeedbackSummaryDetails;

            return response()->json([
                'status' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }
    
    public function profesjonalneNagrywanieFilmówSetting()
    {
        try {
            $heroSection = ProfesjonalneHeroSection::first();
            $brandSection = ProfesjonalneBrand::orderBy('id', 'desc')->get();
            $companySection = ProfesjonalneCompany::orderBy('id', 'desc')->get();
            $companyCard = ProfesjonalneCompanyCard::orderBy('id', 'desc')->get();
            $ratingSection = ProfesjonalneRating::orderBy('id', 'desc')->get();
            $Section1 = ProfesjonalneIwdSection1::orderBy('id', 'desc')->get();
            $Section2 = ProfesjonalneIwdSection2::orderBy('id', 'desc')->get();
            $Section3 = ProfesjonalneIwdSection3::orderBy('id', 'desc')->get();
            $Section4 = ProfesjonalneIwdSection4::orderBy('id', 'desc')->get();
            $Section5 = ProfesjonalneIwdSection5::orderBy('id', 'desc')->get();
            $Section6 = ProfesjonalneIwdSection6::orderBy('id', 'desc')->get();
            $Section7 = ProfesjonalneIwdSection7::orderBy('id', 'desc')->get();
            $RatingCard = ProfesjonalneClientRating::orderBy('id', 'desc')->get();
            $ClientFeedback = ProfesjonalneClientFeedback::orderBy('id', 'desc')->get();
            $FeedbackSummary = ProfesjonalneFeedbackSummary::orderBy('id', 'desc')->get();

            $branddetails = [];
            $companySectionDetails = [];
            $ratingSectionDetails = [];
            $Section1Details = [];
            $Section2Details = [];
            $Section3Details = [];
            $Section4Details = [];
            $Section5Details = [];
            $Section6Details = [];
            $Section7Details = [];
            $RatingCardDetails = [];
            $FeedbackSummaryDetails = [];

            foreach ($brandSection as $key => $value) {

                if ($value->type == 'brand_image1') {
                    $branddetails['brand_image1'] = $value->message;
                }
                if ($value->type == 'brand_image2') {
                    $branddetails['brand_image2'] = $value->message;
                }
                if ($value->type == 'banner_image') {
                    $branddetails['banner_image'] = $value->message;
                }
                if ($value->type == 'banner_video') {
                    $branddetails['banner_video'] = $value->message;
                }
                if ($value->type == 'brand_logo1') {
                    $branddetails['brand_logo1'] = $value->message;
                }
                if ($value->type == 'brand_logo2') {
                    $branddetails['brand_logo2'] = $value->message;
                }
                if ($value->type == 'banner_text') {
                    $branddetails['banner_text'] = $value->message;
                }
            }

            foreach ($companySection as $key => $value) {

                if ($value->type == 'main_title') {
                    $companySectionDetails['main_title'] = $value->message;
                }
                if ($value->type == 'subtitle1') {
                    $companySectionDetails['subtitle1'] = $value->message;
                }
                if ($value->type == 'subtitle2') {
                    $companySectionDetails['subtitle2'] = $value->message;
                }
                if ($value->type == 'image_1') {
                    $companySectionDetails['image_1'] = $value->message;
                }
                if ($value->type == 'image_2') {
                    $companySectionDetails['image_2'] = $value->message;
                }
                if ($value->type == 'image_3') {
                    $companySectionDetails['image_3'] = $value->message;
                }
            }

            foreach ($ratingSection as $key => $value) {

                if ($value->type == 'main_title') {
                    $ratingSectionDetails['main_title'] = $value->message;
                }
                if ($value->type == 'subtitle_1') {
                    $ratingSectionDetails['subtitle_1'] = $value->message;
                }
                if ($value->type == 'subtitle_2') {
                    $ratingSectionDetails['subtitle_2'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $ratingSectionDetails['image_url'] = $value->message;
                }
                if ($value->type == 'rating_no') {
                    $ratingSectionDetails['rating_no'] = $value->message;
                }
            }

            foreach ($Section1 as $key => $value) {

                if ($value->type == 'image_url') {
                    $Section1Details['image_url'] = $value->message;
                }
                if ($value->type == 'title') {
                    $Section1Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle_1') {
                    $Section1Details['subtitle_1'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section1Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section1Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section1Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'subtitle_2') {
                    $Section1Details['subtitle_2'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section1Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $Section1Details['paragraph_5'] = $value->message;
                }
                if ($value->type == 'paragraph_6') {
                    $Section1Details['paragraph_6'] = $value->message;
                }
                if ($value->type == 'paragraph_7') {
                    $Section1Details['paragraph_7'] = $value->message;
                }
                if ($value->type == 'paragraph_8') {
                    $Section1Details['paragraph_8'] = $value->message;
                }
                if ($value->type == 'paragraph_9') {
                    $Section1Details['paragraph_9'] = $value->message;
                }
            }

            foreach ($Section2 as $key => $value) {

                if ($value->type == 'title') {
                    $Section2Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section2Details['subtitle'] = $value->message;
                }
                if ($value->type == 'line_1') {
                    $Section2Details['line_1'] = $value->message;
                }
                if ($value->type == 'line_2') {
                    $Section2Details['line_2'] = $value->message;
                }
                if ($value->type == 'line_3') {
                    $Section2Details['line_3'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section2Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section2Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section2Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section2Details['paragraph_4'] = $value->message;
                }
            }

            foreach ($Section3 as $key => $value) {

                if ($value->type == 'video_url') {
                    $Section3Details['video_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section3Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section3Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section3Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section3Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $Section3Details['paragraph_5'] = $value->message;
                }
                if ($value->type == 'paragraph_6') {
                    $Section3Details['paragraph_6'] = $value->message;
                }
            }

            foreach ($Section4 as $key => $value) {

                if ($value->type == 'title') {
                    $Section4Details['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section4Details['subtitle'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $Section4Details['image_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section4Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section4Details['paragraph_2'] = $value->message;
                }
            }

            foreach ($Section5 as $key => $value) {

                if ($value->type == 'quote') {
                    $Section5Details['quote'] = $value->message;
                }
                if ($value->type == 'video_url') {
                    $Section5Details['video_url'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section5Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section5Details['paragraph_2'] = $value->message;
                }
            }

            foreach ($Section6 as $key => $value) {

                if ($value->type == 'video_url') {
                    $Section6Details['video_url'] = $value->message;
                }
                if ($value->type == 'quote') {
                    $Section6Details['quote'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $Section6Details['subtitle'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section6Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section6Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section6Details['paragraph_3'] = $value->message;
                }
            }

            foreach ($Section7 as $key => $value) {

                if ($value->type == 'video_url_1') {
                    $Section7Details['video_url_1'] = $value->message;
                }
                if ($value->type == 'title') {
                    $Section7Details['title'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $Section7Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'video_url_2') {
                    $Section7Details['video_url_2'] = $value->message;
                }
                if ($value->type == 'video_url_3') {
                    $Section7Details['video_url_3'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $Section7Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $Section7Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'video_url_4') {
                    $Section7Details['video_url_4'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $Section7Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'video_url_5') {
                    $Section7Details['video_url_5'] = $value->message;
                }
                if ($value->type == 'bottom_title') {
                    $Section7Details['bottom_title'] = $value->message;
                }
                if ($value->type == 'quoted_title') {
                    $Section7Details['quoted_title'] = $value->message;
                }
                if ($value->type == 'image_url_1') {
                    $Section7Details['image_url_1'] = $value->message;
                }
                if ($value->type == 'image_url_2') {
                    $Section7Details['image_url_2'] = $value->message;
                }
            }

            foreach ($RatingCard as $key => $value) {

                if ($value->type == 'left_animated_image') {
                    $RatingCardDetails['left_animated_image'] = $value->message;
                }
                if ($value->type == 'rating_image') {
                    $RatingCardDetails['rating_image'] = $value->message;
                }
                if ($value->type == 'rating_description') {
                    $RatingCardDetails['rating_description'] = $value->message;
                }
            }
            foreach ($FeedbackSummary as $key => $value) {

                if ($value->type == 'title') {
                    $FeedbackSummaryDetails['title'] = $value->message;
                }
                if ($value->type == 'description') {
                    $FeedbackSummaryDetails['description'] = $value->message;
                }
            }

            for ($i = 1; $i < 5; $i++) {

                $SliderImages['row' . $i] = ProfesjonalneSliderImages::where('type', 'like', "row_{$i}_image_url_%")->get();
            }

            $data['heroSection'] = $heroSection;
            $data['brandSection'] = $branddetails;
            $data['companySection'] = $companySectionDetails;
            $data['companyCard'] = $companyCard;
            $data['ratingSection'] = $ratingSectionDetails;
            $data['imageswithdescription']['section1'] = (object) $Section1Details;
            $data['imageswithdescription']['section2'] = (object) $Section2Details;
            $data['imageswithdescription']['section3'] = (object) $Section3Details;
            $data['imageswithdescription']['section4'] = (object) $Section4Details;
            $data['imageswithdescription']['section5'] = (object) $Section5Details;
            $data['imageswithdescription']['section6'] = (object) $Section6Details;
            $data['imageswithdescription']['section7'] = (object) $Section7Details;
            $data['ClientReviews']['SliderImages'] = (object) $SliderImages;
            $data['ClientReviews']['RatingCard'] = (object) $RatingCardDetails;
            $data['ClientReviews']['ClientFeedback'] = (object) $ClientFeedback;
            $data['ClientReviews']['FeedbackSummary'] = (object) $FeedbackSummaryDetails;

            return response()->json([
                'status' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }

     public function konsultacjaSetting()
    {
        try {
            $pricingOption = PricingOptionModel::orderBy('id', 'asc')->get();
            $FormContents = KonsultacjaFormContents::orderBy('id', 'asc')->get();
            $dropdown1 = KonsultacjaDropdown1::select('value', 'lable')->get();
            $dropdown2 = KonsultacjaDropdown2::select('value', 'lable')->get();
            $dropdown3 = KonsultacjaDropdown3::select('value', 'lable')->get();
            $dropdown4 = KonsultacjaDropdown4::select('value', 'lable')->get();

            $WhyUs = WhyUs::orderBy('id', 'asc')->get();
            $customerReview = CustomerReview::orderBy('id', 'asc')->get();
            $WhatToExpect = WhatToExpect::orderBy('id', 'asc')->get();
            $SelectedProject = SelectedProject::orderBy('id', 'asc')->get();
            $ProjectCards = ProjectCards::orderBy('id', 'asc')->get();

            $pricingOptionDetails = [];
            $section1 = [];
            $section2 = [];
            $section3 = [];
            $section4 = [];
            $contact = [];
            $messageResponse = [];

            $WhyUsdetails = [];
            $customerReviewdetails = [];
            $WhatToExpectdetails = [];
            $SelectedProjectdetails = [];

            foreach ($pricingOption as $key => $value) {

                if ($value->type == 'title') {
                    $pricingOptionDetails['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $pricingOptionDetails['subtitle'] = $value->message;
                }
                if ($value->type == 'brand_quote') {
                    $pricingOptionDetails['brand_quote'] = $value->message;
                }
                if ($value->type == 'brand_image') {
                    $pricingOptionDetails['brand_image'] = $value->message;
                }
                if ($value->type == 'brand_image_mobile') {
                    $pricingOptionDetails['brand_image_mobile'] = $value->message;
                }
            }

            foreach ($FormContents as $key => $value) {

                if ($value->type == 'section_1_title_1') {
                    $section1['section_1_title_1'] = $value->message;
                }
                if ($value->type == 'section_1_title_2') {
                    $section1['section_1_title_2'] = $value->message;
                }
                if ($value->type == 'section_2_title_1') {
                    $section2['section_2_title_1'] = $value->message;
                }
                if ($value->type == 'section_2_title_2') {
                    $section2['section_2_title_2'] = $value->message;
                }
                if ($value->type == 'section_2_subtitle') {
                    $section2['section_2_subtitle'] = $value->message;
                }
                if ($value->type == 'section_3_title_1') {
                    $section3['section_3_title_1'] = $value->message;
                }
                if ($value->type == 'section_3_title_2') {
                    $section3['section_3_title_2'] = $value->message;
                }
                if ($value->type == 'section_4_title') {
                    $section4['section_4_title'] = $value->message;
                }
                if ($value->type == 'model_title') {
                    $section3['model_title'] = $value->message;
                }
                if ($value->type == 'modal_description') {
                    $section3['modal_description'] = $value->message;
                }
                if ($value->type == 'button_text') {
                    $section3['button_text'] = $value->message;
                }
                if ($value->type == 'contact_title') {
                    $contact['contact_title'] = $value->message;
                }
                if ($value->type == 'contact_info') {
                    $contact['contact_info'] = $value->message;
                }
                if ($value->type == 'contact_image') {
                    $contact['contact_image'] = $value->message;
                }
                if ($value->type == 'contact_text') {
                    $contact['contact_text'] = $value->message;
                }
                if ($value->type == 'contact_number') {
                    $contact['contact_number'] = $value->message;
                }
                if ($value->type == 'message_response') {
                    $messageResponse['message_response'] = $value->message;
                }
                if ($value->type == 'greeting_message') {
                    $messageResponse['greeting_message'] = $value->message;
                }
                if ($value->type == 'link_prompt_text') {
                    $messageResponse['link_prompt_text'] = $value->message;
                }
                if ($value->type == 'social_media_text') {
                    $messageResponse['social_media_text'] = $value->message;
                }
                if ($value->type == 'display_picture') {
                    $messageResponse['display_picture'] = $value->message;
                }
                if ($value->type == 'email_svg') {
                    $messageResponse['email_svg'] = $value->message;
                }
            }

            foreach ($WhyUs as $key => $value) {

                if ($value->type == 'title') {
                    $WhyUsdetails['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $WhyUsdetails['subtitle'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $WhyUsdetails['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $WhyUsdetails['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $WhyUsdetails['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $WhyUsdetails['paragraph_4'] = $value->message;
                }
                if ($value->type == 'image_url_1') {
                    $WhyUsdetails['image_url_1'] = $value->message;
                }
                if ($value->type == 'question_1') {
                    $WhyUsdetails['question_1'] = $value->message;
                }
                if ($value->type == 'info_1') {
                    $WhyUsdetails['info_1'] = $value->message;
                }
                if ($value->type == 'info_image_url_1') {
                    $WhyUsdetails['info_image_url_1'] = $value->message;
                }
                if ($value->type == 'question_2') {
                    $WhyUsdetails['question_2'] = $value->message;
                }
                if ($value->type == 'info_2') {
                    $WhyUsdetails['info_2'] = $value->message;
                }
                if ($value->type == 'info_image_url_2') {
                    $WhyUsdetails['info_image_url_2'] = $value->message;
                }
            }

            foreach ($customerReview as $key => $value) {

                if ($value->type == 'title') {
                    $customerReviewdetails['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $customerReviewdetails['subtitle'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $customerReviewdetails['image_url'] = $value->message;
                }
            }

            foreach ($WhatToExpect as $key => $value) {

                if ($value->type == 'title') {
                    $WhatToExpectdetails['title'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $WhatToExpectdetails['paragraph_1'] = $value->message;
                }
                if ($value->type == 'image_url_left') {
                    $WhatToExpectdetails['image_url_left'] = $value->message;
                }
                if ($value->type == 'image_url_right') {
                    $WhatToExpectdetails['image_url_right'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $WhatToExpectdetails['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $WhatToExpectdetails['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $WhatToExpectdetails['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $WhatToExpectdetails['paragraph_5'] = $value->message;
                }
                if ($value->type == 'paragraph_6') {
                    $WhatToExpectdetails['paragraph_6'] = $value->message;
                }
                if ($value->type == 'brand_logo') {
                    $WhatToExpectdetails['brand_logo'] = $value->message;
                }
            }
            foreach ($SelectedProject as $key => $value) {

                if ($value->type == 'title') {
                    $SelectedProjectDetails['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $SelectedProjectDetails['subtitle'] = $value->message;
                }
            }

            // Pricing Option --->>>
            $details['PricingOption'] = $pricingOptionDetails;

            // Pricing Option Forms --->>>
            $details['PricingOption']['Form']['Section1'] = $section1;
            $details['PricingOption']['Form']['Section1']['Dropdown1'] = $dropdown1;
            $details['PricingOption']['Form']['Section1']['Dropdown2'] = $dropdown2;
            $details['PricingOption']['Form']['Section2'] = $section2;
            $details['PricingOption']['Form']['Section2']['Dropdown1'] = $dropdown3;
            $details['PricingOption']['Form']['Section2']['Dropdown2'] = $dropdown4;
            $details['PricingOption']['Form']['Section3'] = $section3;
            $details['PricingOption']['Form']['Section4'] = $section4;
            $details['PricingOption']['Form']['Section4']['contact'] = $contact;
            $details['PricingOption']['Form']['MessageResponse'] = $messageResponse;

            // Other Sections
            $details['WhyUs'] = $WhyUsdetails;
            $details['CustomeReview'] = $customerReviewdetails;
            $details['WhatToExpect'] = $WhatToExpectdetails;
            $details['Projects'] = $SelectedProjectDetails;
            $details['Projects']['Cards'] = $ProjectCards;

            return response()->json([
                'status' => true,
                'data' => $details,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }


    public function examination()
    {

        $data['heroSection'] = ExaminationHeroSection::pluck('message', 'type')->toArray();

        $data['FAQ_Section'] = FaqSection::select('title')->first()->toArray();

        $data['FAQ_Section']['FAQ'] = Faq::select('question', 'answer')->get();

        $data['howTestWorks'] = HowTestWorks::pluck('message', 'type')->toArray();

        $data['ResearchResult'] = ResearchResult::pluck('message', 'type')->toArray();

        $data['ResearchResult']['PercentageCard'] = PercentageCard::select('Percentage_value', 'title', 'website', 'category')->get();

        $data['ratingSection'] = CustomerRating::whereIn('id', [1, 2, 3, 4, 5, 10, 11, 12, 13])->pluck('message', 'type')->toArray();

        $data['ratingSection']['CustomerReview'] = CustomerRating::whereIn('id', [6, 7, 8, 9])->pluck('message', 'type')->toArray();
        
        $data['surveyQuestions']['formOne'] = FormOneSurvey::pluck('message', 'type')->toArray();

        $data['surveyQuestions']['formTwo'] = FormTwoSurvey::pluck('message', 'type')->toArray();

        $data['surveyQuestions']['formThree'] = FormThreeSurvey::pluck('message', 'type')->toArray();

        $data['surveyQuestions']['formFour'] = FormFourSurvey::pluck('message', 'type')->toArray();

        $data['surveyQuestions']['formFive'] = FormFiveSurvey::select('title', 'listHeading','textbelowInput')->first()->toArray();
        $data['surveyQuestions']['formFive']['listItems'] = json_decode(FormFiveSurvey::pluck('listItems')->first());
        
        $data['surveyQuestions']['formSix'] = FormSixSurvey::pluck('message', 'type')->toArray();
        
        $data['surveyQuestions']['formSeven'] = FormSevenSurvey::pluck('message', 'type')->toArray();
        
        $data['surveyQuestions']['formEight'] = FormEightSurvey::select('title','description_1','description_2')->first()->toArray();
        $data['surveyQuestions']['formEight']['selectOptions'] = json_decode(FormEightSurvey::pluck('selectOptions')->first());
        
        $data['surveyQuestions']['formNine'] = FormNineSurvey::pluck('message', 'type')->toArray();
        
        $data['surveyQuestions']['formTen'] = FormTenSurvey::pluck('message', 'type')->toArray();
        
        $data['surveyQuestions']['formEleven'] = FormElevenSurvey::select('title')->first()->toArray();
        $data['surveyQuestions']['formEleven']['options'] = json_decode(FormElevenSurvey::pluck('options')->first());
        
        $data['surveyQuestions']['formTwelve'] = FormTwelveSurvey::pluck('message', 'type')->toArray();
        
        $data['surveyQuestions']['formThirteen'] = FormThirteenSurvey::pluck('message', 'type')->toArray();
        
        $data['surveyQuestions']['summary'] = SummarySurvey::pluck('message', 'type')->toArray();
        
        return response()->json([
            'status' => true,
            'data' => $data,
        ]);
    }

    public function MarketingStrategy()
    {
        try {
            $heroSection = MarketingHero::orderBy('id', 'desc')->get();
            $mainContent1 = MainContent1::orderBy('id', 'desc')->get();
            $mainNum = MainNumber::orderBy('id', 'desc')->get();
            $mainContent2 = MainContent2::orderBy('id', 'desc')->get();
            $resultTable = ResultTableTitle::orderBy('id', 'desc')->get();
            $resultCard = ResultCard::orderBy('id', 'desc')->get();
            $strategyTitle = StrategyModel::orderBy('id', 'desc')->get();
            $strategyFeature = StrategyFeature::orderBy('id', 'desc')->get();
            $testimonial = TestimonialModel::orderBy('id', 'desc')->get();
            $ResultMax = ResultMax::orderBy('id', 'desc')->get();
            $priceTitle = MarketingPriceTitle::orderBy('id', 'desc')->get();
            $priceCard = MarketingPriceCard::orderBy('id', 'desc')->get();
            $strategyAction = MarketingStrategyAction::orderBy('id', 'desc')->get();
            $FAQcontent = MarketingFAQcontent::orderBy('id', 'desc')->get();
            $FAQcard = MarketingFAQcard::orderBy('id', 'desc')->get();
            $whatReceive = MarketingWhatReceive::orderBy('id', 'desc')->get();
            $imageAdvantage = MarketingImageAdvantage::get();
            $quoteOne = MarketingQuoteOne::orderBy('id', 'desc')->get();
            $branding = MarketingBranding::orderBy('id', 'desc')->get();
            $quoteTwo = MarketingQuoteTwo::orderBy('id', 'desc')->get();

            //Analysis Section API
            $analysisCard1 = MarketingAnalysisCard1::orderBy('id', 'asc')->get();
            $analysisCard2 = MarketingAnalysisCard2::orderBy('id', 'asc')->get();
            $analysisCard3 = MarketingAnalysisCard3::orderBy('id', 'asc')->get();
            $analysisCard4 = MarketingAnalysisCard4::orderBy('id', 'asc')->get();

            $heroSectionDetails = [];
            $mainContent1Details = [];
            $mainNumDetails = [];
            $mainContent2Details = [];
            $resultTableDetails = [];
            $startegyTitleDetails = [];
            $ResultMaxDetails = [];
            $priceTitleDetails = [];
            $strategyActionDetails = [];
            $FAQcontentDetails = [];
            
            $whatReceiveDetails = [];
            // $imageAdvantageDetails = [];
            $quoteOneDetails = [];
            $brandingDetails = [];
            $quoteTwoDetails = [];

            // Business Analysis
            $analysisCard1Details = [];
            $analysisCard1pointleft = [];
            $analysisCard1pointright = [];
            $analysisCard1button = [];
            $analysisCard1buttonpoint = [];
            $businessCard1 = [];
            $businessCard2 = [];
            $businessCard3 = [];
            $businessCard4 = [];

            // Target Analysis
            $analysisCard2Details = [];
            $analysisCard2pointleft = [];
            $analysisCard2pointright = [];
            $analysisCard2button = [];

            //Competition Analysis
            $analysisCard3Details = [];
            $analysisCard3pointleft = [];
            $analysisCard3pointright = [];
            $analysisCard3button = [];
            $competitionCard1 = [];
            $competitionCard2 = [];
            $competitionCard3 = [];

            // Scalable Marketing Funnel
            $analysisCard4Details = [];
            $analysisCard4pointleft = [];
            $analysisCard4pointright = [];
            $analysisCard4button = [];


            foreach ($heroSection as $key => $value) {

                if ($value->type == 'title') {
                    $heroSectionDetails['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $heroSectionDetails['subtitle'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $heroSectionDetails['image_url'] = $value->message;
                }
            }

            foreach ($mainContent1 as $key => $value) {

                if ($value->type == 'description') {
                    $mainContent1Details['description'] = $value->message;
                }
            }

            foreach ($mainNum as $key => $value) {

                if ($value->type == 'percentage_image_1') {
                    $mainNumDetails['percentage_image_1'] = $value->message;
                }
                if ($value->type == 'info_1') {
                    $mainNumDetails['info_1'] = $value->message;
                }
                if ($value->type == 'percentage_image_2') {
                    $mainNumDetails['percentage_image_2'] = $value->message;
                }
                if ($value->type == 'info_2') {
                    $mainNumDetails['info_2'] = $value->message;
                }
                if ($value->type == 'asterisk_text') {
                    $mainNumDetails['asterisk_text'] = $value->message;
                }
            }

            foreach ($mainContent2 as $key => $value) {

                if ($value->type == 'paragraph_1') {
                    $mainContent2Details['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $mainContent2Details['paragraph_2'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $mainContent2Details['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $mainContent2Details['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $mainContent2Details['paragraph_5'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $mainContent2Details['image_url'] = $value->message;
                }
            }

            foreach ($resultTable as $key => $value) {

                if ($value->type == 'title') {
                    $resultTableDetails['title'] = $value->message;
                }
            }

            foreach ($strategyTitle as $key => $value) {
                if ($value->type == 'title') {
                    $startegyTitleDetails['title'] = $value->message;
                }
            }

            foreach ($testimonial as $key => $value) {

                if ($value->type == 'image_url') {
                    $testimonialDetails['image_url'] = $value->message;
                }
                if ($value->type == 'opinion') {
                    $testimonialDetails['opinion'] = $value->message;
                }
                if ($value->type == 'button_text') {
                    $testimonialDetails['button_text'] = $value->message;
                }
            }

            foreach ($ResultMax as $key => $value) {

                if ($value->type == 'title') {
                    $ResultMaxDetails['title'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $ResultMaxDetails['subtitle'] = $value->message;
                }
                if ($value->type == 'description') {
                    $ResultMaxDetails['description'] = $value->message;
                }
            }
            
            foreach ($whatReceive as $key => $value) {

                if ($value->type == 'title') {
                    $whatReceiveDetails['title'] = $value->message;
                }
                if ($value->type == 'description_1') {
                    $whatReceiveDetails['description_1'] = $value->message;
                }
                if ($value->type == 'subtitle') {
                    $whatReceiveDetails['subtitle'] = $value->message;
                }
                if ($value->type == 'description_2') {
                    $whatReceiveDetails['description_2'] = $value->message;
                }
                if ($value->type == 'info_1') {
                    $whatReceiveDetails['info_1'] = $value->message;
                }
                if ($value->type == 'info_2') {
                    $whatReceiveDetails['info_2'] = $value->message;
                }
                if ($value->type == 'info_3') {
                    $whatReceiveDetails['info_3'] = $value->message;
                }
                if ($value->type == 'info_4') {
                    $whatReceiveDetails['info_4'] = $value->message;
                }
                if ($value->type == 'info_5') {
                    $whatReceiveDetails['info_5'] = $value->message;
                }
                if ($value->type == 'info_6') {
                    $whatReceiveDetails['info_6'] = $value->message;
                }
                if ($value->type == 'image_url_1') {
                    $whatReceiveDetails['image_url_1'] = $value->message;
                }
                if ($value->type == 'sub_info') {
                    $whatReceiveDetails['sub_info'] = $value->message;
                }
                if ($value->type == 'description_3') {
                    $whatReceiveDetails['description_3'] = $value->message;
                }
                if ($value->type == 'description_4') {
                    $whatReceiveDetails['description_4'] = $value->message;
                }
                if ($value->type == 'button_text') {
                    $whatReceiveDetails['button_text'] = $value->message;
                }
                if ($value->type == 'description_5') {
                    $whatReceiveDetails['description_5'] = $value->message;
                }
                if ($value->type == 'description_6') {
                    $whatReceiveDetails['description_6'] = $value->message;
                }
                if ($value->type == 'description_7') {
                    $whatReceiveDetails['description_7'] = $value->message;
                }
                if ($value->type == 'description_8') {
                    $whatReceiveDetails['description_8'] = $value->message;
                }
                if ($value->type == 'description_9') {
                    $whatReceiveDetails['description_9'] = $value->message;
                }
                if ($value->type == 'image_url_2') {
                    $whatReceiveDetails['image_url_2'] = $value->message;
                }
            }

            // foreach ($imageAdvantage as $key => $value) {

            //     if ($value->type == 'title') {
            //         $imageAdvantageDetails['title'] = $value->message;
            //     }
            //     if ($value->type == 'description_1') {
            //         $imageAdvantageDetails['description_1'] = $value->message;
            //     }
            //     if ($value->type == 'info_1') {
            //         $imageAdvantageDetails['info_1'] = $value->message;
            //     }
            //     if ($value->type == 'info_2') {
            //         $imageAdvantageDetails['info_2'] = $value->message;
            //     }
            //     if ($value->type == 'button_text') {
            //         $imageAdvantageDetails['button_text'] = $value->message;
            //     }
            //     if ($value->type == 'description_2') {
            //         $imageAdvantageDetails['description_2'] = $value->message;
            //     }
            //     if ($value->type == 'description_3') {
            //         $imageAdvantageDetails['description_3'] = $value->message;
            //     }
            // }

            foreach ($quoteOne as $key => $value) {

                if ($value->type == 'title') {
                    $quoteOneDetails['title'] = $value->message;
                }
                if ($value->type == 'description') {
                    $quoteOneDetails['description'] = $value->message;
                }
                if ($value->type == 'image') {
                    $quoteOneDetails['image'] = $value->message;
                }
                if ($value->type == 'bottom_title') {
                    $quoteOneDetails['bottom_title'] = $value->message;
                }
            }

            foreach ($branding as $key => $value) {

                if ($value->type == 'title') {
                    $brandingDetails['title'] = $value->message;
                }
                if ($value->type == 'description') {
                    $brandingDetails['description'] = $value->message;
                }
                if ($value->type == 'image') {
                    $brandingDetails['image'] = $value->message;
                }
            }

            foreach ($quoteTwo as $key => $value) {

                if ($value->type == 'title_1') {
                    $quoteTwoDetails['title_1'] = $value->message;
                }
                if ($value->type == 'description_1') {
                    $quoteTwoDetails['description_1'] = $value->message;
                }
                if ($value->type == 'description_2') {
                    $quoteTwoDetails['description_2'] = $value->message;
                }
                if ($value->type == 'image') {
                    $quoteTwoDetails['image'] = $value->message;
                }
                if ($value->type == 'title_2') {
                    $quoteTwoDetails['title_2'] = $value->message;
                }
            }

            // Business Analysis
            foreach ($analysisCard1 as $key => $value) {

                if ($value->type == 'title') {
                    $analysisCard1Details['title'] = $value->message;

                } elseif ($value->type == 'subtitle') {
                    $analysisCard1Details['subtitle'] = $value->message;

                } elseif ($value->type == 'main_image') {
                    $analysisCard1Details['main_image'] = $value->message;

                } elseif ($value->type == 'button_text') {
                    $analysisCard1Details['button_text'] = $value->message;

                } elseif (strpos($value->type, 'left_points_') !== false) {
                    $analysisCard1pointleft[] = $value->message;

                } elseif (strpos($value->type, 'right_points_') !== false) {
                    $analysisCard1pointright[] = $value->message;

                } elseif ($value->type == 'description_1') {
                    $analysisCard1button['description_1'] = $value->message;

                } elseif ($value->type == 'description_2') {
                    $analysisCard1button['description_2'] = $value->message;

                } elseif ($value->type == 'image') {
                    $analysisCard1button['image'] = $value->message;

                } elseif (strpos($value->type, 'button_points_') !== false) {
                    $analysisCard1buttonpoint[] = $value->message;

                } elseif (strpos($value->type, 'card_1') !== false) {
                    $businessCard1[] = $value->message;

                } elseif (strpos($value->type, 'card_2') !== false) {
                    $businessCard2[] = $value->message;

                } elseif (strpos($value->type, 'card_3') !== false) {
                    $businessCard3[] = $value->message;

                } elseif (strpos($value->type, 'card_4') !== false) {
                    $businessCard4[] = $value->message;
                }
            }

            //Target Analysis
            foreach ($analysisCard2 as $key => $value) {

                if ($value->type == 'title') {
                    $analysisCard2Details['title'] = $value->message;

                } elseif ($value->type == 'subtitle') {
                    $analysisCard2Details['subtitle'] = $value->message;

                } elseif ($value->type == 'main_image') {
                    $analysisCard2Details['main_image'] = $value->message;

                } elseif ($value->type == 'button_text') {
                    $analysisCard2Details['button_text'] = $value->message;

                } elseif (strpos($value->type, 'left_points_') !== false) {
                    $analysisCard2pointleft[] = $value->message;

                } elseif (strpos($value->type, 'right_points_') !== false) {
                    $analysisCard2pointright[] = $value->message;

                } elseif ($value->type == 'description_1') {
                    $analysisCard2button['description_1'] = $value->message;

                } elseif ($value->type == 'description_2') {
                    $analysisCard2button['description_2'] = $value->message;

                } elseif ($value->type == 'image_1') {
                    $analysisCard2button['image_1'] = $value->message;

                } elseif ($value->type == 'description_3') {
                    $analysisCard2button['description_3'] = $value->message;

                } elseif ($value->type == 'image_2') {
                    $analysisCard2button['image_2'] = $value->message;

                } elseif ($value->type == 'description_4') {
                    $analysisCard2button['description_4'] = $value->message;

                } 
            }

            //Competition Analysis
            foreach ($analysisCard3 as $key => $value) {
                $label = $value->type;
                $message = $value->message;

                if ($value->type == 'title') {
                    $analysisCard3Details['title'] = $value->message;
        
                } elseif ($value->type == 'subtitle') {
                    $analysisCard3Details['subtitle'] = $value->message;
        
                } elseif ($value->type == 'main_image') {
                    $analysisCard3Details['main_image'] = $value->message;
        
                } elseif ($value->type == 'button_text') {
                    $analysisCard3Details['button_text'] = $value->message;
        
                } elseif (strpos($value->type, 'left_points_') !== false) {
                    $analysisCard3pointleft[] = $value->message;
        
                } elseif (strpos($value->type, 'right_points_') !== false) {
                    $analysisCard3pointright[] = $value->message;
        
                } elseif ($value->type == 'description_1') {
                    $analysisCard3button['description_1'] = $value->message;
        
                } elseif ($value->type == 'description_2') {
                    $analysisCard3button['description_2'] = $value->message;
        
                } elseif ($value->type == 'description_3') {
                    $analysisCard3button['description_3'] = $value->message;
        
                } elseif ($value->type == 'image') {
                    $analysisCard3button['image'] = $value->message;
        
                } if (strpos($label, 'card_1_title') !== false) {
                    $competitionCard1['title'] = $message;

                } elseif (strpos($label, 'card_1_info') !== false) {
                    $competitionCard1['info'] = $message;

                } elseif (strpos($label, 'card_1_number') !== false) {
                    $competitionCard1['item_number'] = $message;

                } elseif (strpos($label, 'card_2_title') !== false) {
                    $competitionCard2['title'] = $message;

                } elseif (strpos($label, 'card_2_info') !== false) {
                    $competitionCard2['info'] = $message;

                } elseif (strpos($label, 'card_2_number') !== false) {
                    $competitionCard2['item_number'] = $message;

                } elseif (strpos($label, 'card_3_title') !== false) {
                    $competitionCard3['title'] = $message;

                } elseif (strpos($label, 'card_3_info') !== false) {
                    $competitionCard3['info'] = $message;
                    
                } elseif (strpos($label, 'card_3_number') !== false) {
                    $competitionCard3['item_number'] = $message;
                }
            }

            // Scalable Marketing Funnel
            foreach ($analysisCard4 as $key => $value) {

                if ($value->type == 'title') {
                    $analysisCard4Details['title'] = $value->message;

                } elseif ($value->type == 'subtitle') {
                    $analysisCard4Details['subtitle'] = $value->message;

                } elseif ($value->type == 'main_image') {
                    $analysisCard4Details['main_image'] = $value->message;

                } elseif ($value->type == 'button_text') {
                    $analysisCard4Details['button_text'] = $value->message;

                } elseif (strpos($value->type, 'left_points_') !== false) {
                    $analysisCard4pointleft[] = $value->message;

                } elseif (strpos($value->type, 'right_points_') !== false) {
                    $analysisCard4pointright[] = $value->message;

                } elseif ($value->type == 'title_1') {
                    $analysisCard4button['title_1'] = $value->message;

                } elseif ($value->type == 'description_1') {
                    $analysisCard4button['description_1'] = $value->message;

                }elseif ($value->type == 'description_2') {
                    $analysisCard4button['description_2'] = $value->message;

                } elseif ($value->type == 'description_3') {
                    $analysisCard4button['description_3'] = $value->message;

                } elseif ($value->type == 'title_2') {
                    $analysisCard4button['title_2'] = $value->message;

                } elseif ($value->type == 'description_4') {
                    $analysisCard4button['description_4'] = $value->message;

                }elseif ($value->type == 'description_5') {
                    $analysisCard4button['description_5'] = $value->message;

                } elseif ($value->type == 'image_1') {
                    $analysisCard4button['image_1'] = $value->message; 

                } elseif ($value->type == 'image_2') {
                    $analysisCard4button['image_2'] = $value->message;

                }
            }

            foreach ($priceTitle as $key => $value) {

                if ($value->type == 'title') {
                    $priceTitleDetails['title'] = $value->message;
                }
            }

            foreach ($strategyAction as $key => $value) {

                if ($value->type == 'title') {
                    $strategyActionDetails['title'] = $value->message;
                }
                if ($value->type == 'description_1') {
                    $strategyActionDetails['description_1'] = $value->message;
                }
                if ($value->type == 'description_2') {
                    $strategyActionDetails['description_2'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $strategyActionDetails['image_url'] = $value->message;
                }
            }

            foreach ($FAQcontent as $key => $value) {

                if ($value->type == 'title') {
                    $FAQcontentDetails['title'] = $value->message;
                }
                if ($value->type == 'image_url') {
                    $FAQcontentDetails['image_url'] = $value->message;
                }
            }
            
            // Images Advantage
            $image = [];
            $info_1 = [];
            $info_2 = [];
            foreach($imageAdvantage as $key => $value){
                if ($value->type == 'title') {
                    $image[$value->type] = $value->message; 
                }
                if ($value->type == 'description') {
                    $image[$value->type] = $value->message; 
                }
                if ($value->type == 'left_info_1') {
                    $info_1[] = $value->message; 
                }
                if ($value->type == 'left_info_2') {
                    $info_1[] = $value->message; 
                }
                if ($value->type == 'left_info_3') {
                    $info_1[] = $value->message; 
                }
                if ($value->type == 'left_info_4') {
                    $info_1[] = $value->message; 
                }
                if ($value->type == 'left_info_5') {
                    $info_1[] = $value->message; 
                }
                if ($value->type == 'right_info_1') {
                    $info_2[] = $value->message; 
                }
                if ($value->type == 'right_info_2') {
                    $info_2[] = $value->message; 
                }
                if ($value->type == 'right_info_3') {
                    $info_2[] = $value->message; 
                }
                if ($value->type == 'right_info_4') {
                    $info_2[] = $value->message; 
                }
                if ($value->type == 'right_info_5') {
                    $info_2[] = $value->message; 
                }
                if ($value->type == 'button_text') {
                    $image[$value->type] = $value->message; 
                }
                if ($value->type == 'paragraph_1') {
                    $image[$value->type] = $value->message; 
                }
                if ($value->type == 'paragraph_2') {
                    $image[$value->type] = $value->message; 
                }
            }
            $image['info_1'] = $info_1;
            $image['info_2'] = $info_2;

            $details['hero'] = $heroSectionDetails;
            $details['MainContent']['MainContentOne'] = $mainContent1Details;
            $details['MainContent']['MainNumber'] = $mainNumDetails;
            $details['MainContent']['MainContentTwo'] = $mainContent2Details;
            $details['ResultTable'] = $resultTableDetails;
            $details['ResultTable']['resultCard'] = $resultCard;
            $details['strategy'] = $startegyTitleDetails;
            $details['strategy']['featureList'] = $strategyFeature;
            $details['testimonial'] = $testimonialDetails;
            $details['resultMax'] = $ResultMaxDetails;
            
             // Business Analysis
            $details['Card1'] = $analysisCard1Details;
            $details['Card1']['Points']['Point1'] = $analysisCard1pointleft;
            $details['Card1']['Points']['Point2'] = $analysisCard1pointright;
            $details['Card1']['ButtonData'] = $analysisCard1button;
            $details['Card1']['ButtonData']['ButtonPoints'] = $analysisCard1buttonpoint;
            $details['Card1']['ButtonData']['CardGrid']['Card1'] = $businessCard1;
            $details['Card1']['ButtonData']['CardGrid']['Card2'] = $businessCard2;
            $details['Card1']['ButtonData']['CardGrid']['Card3'] = $businessCard3;
            $details['Card1']['ButtonData']['CardGrid']['Card4'] = $businessCard4;

            // Target Analysis
            $details['Card2'] = $analysisCard2Details;
            $details['Card2']['Points']['Point1'] = $analysisCard2pointleft;
            $details['Card2']['Points']['Point2'] = $analysisCard2pointright;
            $details['Card2']['ButtonData'] = $analysisCard2button;

            // Competition Analysis
            $details['Card3'] = $analysisCard3Details;
            $details['Card3']['Points']['Point1'] = $analysisCard3pointleft;
            $details['Card3']['Points']['Point2'] = $analysisCard3pointright;
            $details['Card3']['ButtonData'] = $analysisCard3button;
           $details['Card3']['ButtonData']['CardGrid'] = [
                $competitionCard1,
                $competitionCard2,
                $competitionCard3
            ];

            // Scalable Marketing Funnel
            $details['Card4'] = $analysisCard4Details;
            $details['Card4']['Points']['Point1'] = $analysisCard4pointleft;
            $details['Card4']['Points']['Point2'] = $analysisCard4pointright;
            $details['Card4']['ButtonData'] = $analysisCard4button;

            $details['WhatReceive'] = $whatReceiveDetails;
            $details['imagesAdvantage'] = $image ;
            $details['quoteOne'] = $quoteOneDetails;
            $details['Branding'] = $brandingDetails;
            $details['quoteTwo'] = $quoteTwoDetails;
            
            $details['priceSection'] = $priceTitleDetails;
            $details['priceSection']['priceCard'] = $priceCard;
            $details['StrategyAction'] = $strategyActionDetails;
            $details['FAQsection'] = $FAQcontentDetails;
            $details['FAQsection']['FAQcard'] = $FAQcard;

            return response()->json([
                'status' => true,
                'data' => $details,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }
    
    public function projektowanie()
    {
        $data['LogoBannerData'] = ProjektowanieLogo::pluck('message','type')->toArray();
        
        $data['SampleLogoData'] = ImageGroup::pluck('image')->toArray();
        $outputData = [];

        foreach ($data['SampleLogoData'] as $index => $jsonString) {
            $decodedArray = json_decode($jsonString, true);
            $outputData["imageGroup" . ($index + 1)] = $decodedArray;
        }

        $data['SampleLogoData'] = $outputData;
        
        $data['GoodBusinessData'] = GoodBusiness::pluck('message','type')->toArray();
        
        $data['OpinionData'] = Opinion::pluck('message','type')->toArray();
        
        $data['ReceiveData'] = Receive::pluck('message','type')->toArray();
        $data['ReceiveData']['points'] = ReceivePoints::pluck('point')->toArray();
        
        $data['GuaranteeData'] = Guarantee::pluck('message','type')->toArray();
        
        $data['ProjectValueData'] = ProjektowanieProject::pluck('message','type')->toArray();
        
        $data['GalleryData'] = Gallery::pluck('message','type')->toArray();
        $data['GalleryData']['imageGroup'] = GalleryImageGroup::pluck('image')->toArray();
        
        $data['PDFCopyData'] = PdfCopy::pluck('message','type')->toArray();
        
        $data['StepBystepData'] = StepByStep::pluck('message','type')->toArray();
        
        $data['FreeShopsData'] = FreeShops::pluck('message','type')->toArray();
        
        $data['EnexoData'] = Enexo::pluck('message','type')->toArray();
        
        $data['DacoData'] = Daco::pluck('message','type')->toArray();
        
        $data['AicoData'] = Aico::pluck('message','type')->toArray();
        
        $data['ZooGardenData'] = ZooGarden::pluck('message','type')->toArray();
        
        $data['ConstructionData'] = Construction::pluck('message','type')->toArray();
        
        $data['RestaurantData'] = Restaurant::pluck('message','type')->toArray();
        
        $data['ParkData'] = Park::pluck('message','type')->toArray();
        
        $data['NewCompanyData'] = NewCompany::pluck('message','type')->toArray();
        
        $data['NewCompanyProfitSliderData']['images'] = NewCompanyProfitSlider::pluck('image')->toArray();
        
        $data['LogoFooterData'] = FooterLogo::pluck('message','type')->toArray();
        $data['LogoFooterData']['pagesLinks'] = FooterPageLink::select('id','label','content')->get();
        
        $data['LogoAccordionData']= DB::table('tbl_projekto_logo_accordion')->pluck('message','type')->toArray();
        $data['LogoAccordionData']['accordionData'] = LogoAccordion::select('title','content')->get();
        
        $data['GPNData'] = GPN::pluck('message','type')->toArray();
        $data['GPNData']['companyLogo'] = GPNCompany::pluck('image')->toArray();
        $data['GPNData']['productLogo'] = GPNProduct::pluck('image')->toArray();
        
        return response()->json([
            'status' => true,
            'data' => $data,
        ]);
    }
    
      public function teamSection()
    {
        try {


 
        $data = TeamSetting::orderBy('id', 'desc')->get();
        $carddata1 = TeamCard::orderBy('id', 'desc')->get();
        $carddata2 = TeamCard2::orderBy('id', 'desc')->get();
        $teamimage = TeamImage::orderBy('id', 'desc')->get();
        $section9Cards = TeamSection9::orderBy('id', 'desc')->get();
        //dd($section9Cards);


        $mainData = (object)[];
        $card1 = (object)[];
        $card2 = (object)[];
        $image = (object)[];
        $CardImage  = (object)[];
       // $cardImage = (object)[];

        //$card1 = (object)[];
        $herosection =(object)[];
        $section1 = (object)[];
        $section2 = (object)[];
        $section3 = (object)[];
        $section4 = (object)[];
        $section5 = (object)[];
        $section6 = (object)[];
        $section7 = (object)[];
        $section8 = (object)[];
        $section10 = (object)[];
        $section11 = (object)[];


        $Sec6Card1 =(object)[];
        $Sec6Card2 =(object)[];
        $Sec6Card3 =(object)[];

        $section9 = (object)[];
        $Card1Sec9 =(object)[];
      //  $Card2Sec9 =(object)[];

            foreach ($data as $key => $value) {
                $sectionType = $value->type;

                if ($sectionType === 'main_title' || $sectionType === 'sub_title' || $sectionType === 'para_one' || $sectionType === 'para_two' || $sectionType === 'para_three' || $sectionType === 'left_image' || $sectionType === 'right_image' || $sectionType === 'background_video' || $sectionType === 'title_2') {
                    $herosection->{$sectionType} = $value->message;
                }

                // Assign values to the section data object
                if ($sectionType === 'section_title_one' || $sectionType === 'section_subtitle_one' || $sectionType === 'section_one_para_one' || $sectionType === 'section_one_para_two' || $sectionType ===  'section_one_img') {
                    $section1->{$sectionType} = $value->message;
                }

                if ($sectionType === 'section_two_title' || $sectionType === 'section_two_subtitle' || $sectionType === 'section_two_image' || $sectionType === 'section_two_para' || $sectionType ===  'animated_small_image' || $sectionType === 'sub_title_discription' || $sectionType === 'section_two_title_2' || $sectionType === 'description') {
                    $section2->{$sectionType} = $value->message;
                }

                if ($sectionType === 'section_three_header' || $sectionType === 'section_three_subheader') {
                    $section3->{$sectionType} = $value->message;
                }
               if ($sectionType === 'section_four_para') {
                    $section4->{$sectionType} = $value->message;
                }


                if ($sectionType === 'section_five_title' || $sectionType === 'section_five_imgone' || $sectionType === 'section_five_imgtwo' || $sectionType === 'section_five_bgimage' || $sectionType === 'section_five_para' || $sectionType === 'section_five_paratwo') {
                    $section5->{$sectionType} = $value->message;
                }


            if ($sectionType === 'title_6' || $sectionType === 'image_6' || $sectionType === 'sub_title_6' || $sectionType === 'sub_title_discription_6')  {
                $section6->{$sectionType} = $value->message;
            }
           if ($sectionType === 'card_title_7' || $sectionType === 'card7_image_1' || $sectionType === 'card7_image_2' || $sectionType === 'paragraph_1' || $sectionType === 'paragraph_2' || $sectionType === 'paragraph_3' || $sectionType === 'subtitle_1' || $sectionType === 'subtitle_2') {
                    $section7->{$sectionType} = $value->message;
                }
            if ($sectionType === 'section8_title' || $sectionType === 'section8_discription_1' || $sectionType === 'section8_discription_2' || $sectionType === 'section8_discription_3' || $sectionType === 'section8_discription_4' || $sectionType === 'section8_discription_5' || $sectionType === 'section8_discription_6' || $sectionType === 'section8_discription_7' || $sectionType === 'section8_image_1' || $sectionType === 'section8_image_2') {
                    $section8->{$sectionType} = $value->message;
                }
            if ($sectionType === 'section10_title' || $sectionType === 'section10_subtitle' || $sectionType === 'section10_card_text' || $sectionType === 'section10_card_image')  {
                $section10->{$sectionType} = $value->message;
            }
            if ($sectionType === 'section11_title' || $sectionType === 'section11_subtitle' || $sectionType === 'section11_button_text' || $sectionType === 'section11_button_text2' || $sectionType === 'section11_video')  {
                $section11->{$sectionType} = $value->message;
            }

            //SEC 6 CARDS-----------
            if ($sectionType === 'card1_title' || $sectionType === 'card1_text' || $sectionType === 'card1_img')  {
                $Sec6Card1->{$sectionType} = $value->message;
            }
            if ($sectionType === 'card2_title' || $sectionType === 'card2_text' || $sectionType === 'card2_img')  {
                $Sec6Card2->{$sectionType} = $value->message;
            }
            if ($sectionType === 'card3_title' || $sectionType === 'card3_text' || $sectionType === 'card3_img')  {
                $Sec6Card3->{$sectionType} = $value->message;
            }

        }


            foreach ($carddata1 as $key => $value) {
                $CardDataType = $value->type;

                if ($CardDataType === 'name' || $CardDataType === 'designation' || $CardDataType === 'image' || $CardDataType === 'quate_one') {
                    $card1->{$CardDataType} = $value->message;
                }
            }

            foreach ($carddata2 as $key => $value) {
                $CardDataType2 = $value->type;

                if ($CardDataType2 === 'name' || $CardDataType2 === 'image' || $CardDataType2 === 'quate_one') {
                    $card2->{$CardDataType2} = $value->message;
                }
            }

            foreach ($teamimage as $key => $value) {
                $TeamImageData = $value->type;

                if ($TeamImageData === 'Team_image') {
                    if (!isset($image->{$TeamImageData})) {
                        $image->{$TeamImageData} = [];
                    }
                    $image->{$TeamImageData}[] = $value->message;
                }
            }



    foreach ($section9Cards as $key => $value) {
       $section9->{'card' . ($key + 1)} = $value;
        
    }
       
        $mainData->herosection = $herosection;
        $mainData->card1 = $card1;
        $mainData->section1 = $section1;
        $mainData->section2 = $section2;
        $section2->image = $image;
        $mainData->section3 = $section3;
        $mainData->section4 = $section4;
        $mainData->card2 = $card2;
        $mainData->section5 = $section5;
        $mainData->section6 = $section6;
        $mainData->section7 = $section7;
        $mainData->section8 = $section8;
        $mainData->section9 = $section9;
        $mainData->section10 = $section10;
        $mainData->section11 = $section11;

        $section6->Card1 = $Sec6Card1;
        $section6->Card2 = $Sec6Card2;
        $section6->Card3 = $Sec6Card3;

           return response()->json([
                'status' => true,
                'data' => $mainData,

            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],

            ]);
        }
    }
    
    public function UXSetting()
    {

        try {
            $heroSection = Copywriting::orderBy('id', 'desc')->get();
            $resultCard = UxCounterData::orderBy('id', 'desc')->get();
            $competetion = Copywriting::orderBy('id', 'desc')->get();
            $faqTitle = UXFAQModel::orderBy('id', 'desc')->get();
            $faqCard = UXFAQcardModel::orderBy('id', 'desc')->get();
            $slider = UXslider::orderBy('id', 'desc')->get();
            $stages = UXstages::orderBy('id', 'asc')->get()->toArray();
            $UXinfo = UXinfo::orderBy('id', 'asc')->get();
            $videoTab = UXVideoTab::orderBy('id', 'asc')->get();

            $heroSectionDetails = [];
            $competetionDetails = [];
            $faqTitleDetails = [];
            $UXinfoUpper = [];
            $UXinfoLower = [];
            $Videotab = $videoTab->toArray();

            foreach ($heroSection as $key => $value) {

                if ($value->type == 'title1') {
                    $heroSectionDetails['title1'] = $value->message;
                }
                if ($value->type == 'title2') {
                    $heroSectionDetails['title2'] = $value->message;
                }
                if ($value->type == 'styled_title') {
                    $heroSectionDetails['styled_title'] = $value->message;
                }
                if ($value->type == 'animated_text') {
                    $heroSectionDetails['animated_text'] = $value->message;
                }
                if ($value->type == 'video_url') {
                    $heroSectionDetails['video_url'] = $value->message;
                }
                if ($value->type == 'description1') {
                    $heroSectionDetails['description1'] = $value->message;
                }
                if ($value->type == 'description2') {
                    $heroSectionDetails['description2'] = $value->message;
                }
            }

            foreach ($competetion as $key => $value) {

                if ($value->type == 'compt_title') {
                    $competetionDetails['compt_title'] = $value->message;
                }
                if ($value->type == 'compt_image') {
                    $competetionDetails['compt_image'] = $value->message;
                }
                if ($value->type == 'compt_description1') {
                    $competetionDetails['compt_description1'] = $value->message;
                }
                if ($value->type == 'compt_description2') {
                    $competetionDetails['compt_description2'] = $value->message;
                }
                if ($value->type == 'compt_animated_Text') {
                    $competetionDetails['compt_animated_Text'] = $value->message;
                }
                if ($value->type == 'compt_animated_Number') {
                    $competetionDetails['compt_animated_Number'] = $value->message;
                }
                if ($value->type == 'compt_description3') {
                    $competetionDetails['compt_description3'] = $value->message;
                }
            }


            foreach ($competetion as $key => $value) {

                if ($value->type == 'compt_title') {
                    $competetionDetails['compt_title'] = $value->message;
                }
                if ($value->type == 'compt_image') {
                    $competetionDetails['compt_image'] = $value->message;
                }
                if ($value->type == 'compt_description1') {
                    $competetionDetails['compt_description1'] = $value->message;
                }
                if ($value->type == 'compt_description2') {
                    $competetionDetails['compt_description2'] = $value->message;
                }
                if ($value->type == 'compt_animated_Text') {
                    $competetionDetails['compt_animated_Text'] = $value->message;
                }
                if ($value->type == 'compt_animated_Number') {
                    $competetionDetails['compt_animated_Number'] = $value->message;
                }
                if ($value->type == 'compt_description3') {
                    $competetionDetails['compt_description3'] = $value->message;
                }
            }

            foreach ($competetion as $key => $value) {

                if ($value->type == 'image') {
                    $IgnoreSitesDetails['image'] = $value->message;
                }
                if ($value->type == 'title') {
                    $IgnoreSitesDetails['title'] = $value->message;
                }
                if ($value->type == 'descript1') {
                    $IgnoreSitesDetails['descript1'] = $value->message;
                }
                if ($value->type == 'descript2') {
                    $IgnoreSitesDetails['descript2'] = $value->message;
                }
            }

            foreach ($faqTitle as $key => $value) {

                if ($value->type == 'title') {
                    $faqTitleDetails['title'] = $value->message;
                }
            }

            foreach ($UXinfo as $key => $value) {

                if ($value->type == 'title') {
                    $UXinfoUpper['title'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $UXinfoUpper['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_2') {
                    $UXinfoUpper['paragraph_2'] = $value->message;
                }
                if ($value->type == 'image_1') {
                    $UXinfoLower['image_1'] = $value->message;
                }
                if ($value->type == 'image_2') {
                    $UXinfoLower['image_2'] = $value->message;
                }
                if ($value->type == 'image_3') {
                    $UXinfoLower['image_3'] = $value->message;
                }
                if ($value->type == 'image_4') {
                    $UXinfoLower['image_4'] = $value->message;
                }
                if ($value->type == 'image_5') {
                    $UXinfoLower['image_5'] = $value->message;
                }
                if ($value->type == 'paragraph_1') {
                    $UXinfoLower['paragraph_1'] = $value->message;
                }
                if ($value->type == 'paragraph_3') {
                    $UXinfoLower['paragraph_3'] = $value->message;
                }
                if ($value->type == 'paragraph_4') {
                    $UXinfoLower['paragraph_4'] = $value->message;
                }
                if ($value->type == 'paragraph_5') {
                    $UXinfoLower['paragraph_5'] = $value->message;
                }
                if ($value->type == 'button_text') {
                    $UXinfoLower['button_text'] = $value->message;
                }
            }


            $details['HeroSection'] = $heroSectionDetails;
            $details['CounterData'] = $resultCard;
            $details['CompetitionData'] = $competetionDetails;
            $details['IgnoreSites'] = $IgnoreSitesDetails;
            $details['HeroSection'] = $heroSectionDetails;
            $details['CounterData'] = $resultCard;
            $details['CompetitionData'] = $competetionDetails;
            $details['IgnoreSites'] = $IgnoreSitesDetails;
            $details['Systematically'] = UXsystematically::pluck('message', 'type')->toArray();

            $details['UX-Video'] = array_merge($UXinfoUpper, ['Videotab' => $Videotab], $UXinfoLower);
            $details['GoodProcess'] = UXgoodProcess::pluck('message', 'type')->toArray();
            $indexedStages = [];
            foreach ($stages as $key => $stage) {
                $indexedStages['stage_' . ($key + 1)] = $stage;
            }
            $details['GoodProcess']['Stages'] = (object)$indexedStages;
            $details['websites'] = UXwebsite::pluck('message', 'type')->toArray();
            $details['slider']['images'] = $slider;
            $details['executive'] = UXexecutive::pluck('message', 'type')->toArray();

            $details['FAQ']['FAQTitle'] = $faqTitleDetails;
            $details['FAQ']['FAQCard'] = $faqCard;
            $details['complex'] = DB::table('ux_complex_section')->pluck('message','type')->toArray();
                        
            $details['market']['cardOne'] = DB::table('ux_card_one')->pluck('message','type')->toArray();
            $details['market']['cardTwo'] = DB::table('ux_card_two')->pluck('message','type')->toArray();
            $details['market']['cardThree'] = DB::table('ux_card_three')->pluck('message','type')->toArray();
            $details['market']['cardFour'] = DB::table('ux_card_four')->pluck('message','type')->toArray();


            return response()->json([
                'status' => true,
                'data' => $details,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }
    
    public function priceListSetting()
    {
        $data = (object)[];
        $pricelist = PriceList::pluck('message', 'type')->toArray();
        // $data = $pricelist;
        $data = (object)array_merge((array)$data, $pricelist);

        // ************** FIRST PRICE MENU ******************** //

        $firstPricemenu = FirstPriceMenuCard::orderBy('id', 'desc')->get();
        $dropdown = FirstPriceCardDropdwonOption::select('value','label')->get();
        $range = FirstPriceRange::select('label','description','backgroundColor')->get();

        
        $cardMenu = (object)[];
        // $firstMenulist = (object)[];
        $menuOne = (object)[];
        $formOne = (object)[];
        $metadata = (object)[];
        $modalInfo = (object)[];
        $formTwo = (object)[];
        $formThree = (object)[];
        $formThree_modal = (object)[];
        $formFour = (object)[];
        $contact = (object)[];
        $feedback = (object)[];
        $socialMedia = (object)[];
          
        foreach ($firstPricemenu as $key => $value) {
            $sectionType = $value->type;

            if ($sectionType === 'menu_title') {
                $menuOne->{$sectionType} = $value->message;
            }

            // Assign values to the section data object
            if ($sectionType === 'section1_title' || $sectionType === 'section1_subtitle' || $sectionType === 'section1_buttonText') {
                $formOne->{$sectionType} = $value->message;
            }

            if ($sectionType ===  'websiteText') {
                $metadata->{$sectionType} = $value->message;
            }
            if ($sectionType === 'modal_title' || $sectionType === 'modal_info' || $sectionType === 'modal_info_2' || $sectionType === 'modal_button1Text' || $sectionType === 'modal_button2Text') {
                $modalInfo->{$sectionType} = $value->message;
            }
            

            if ($sectionType === 'section2_title' || $sectionType === 'section2_buttonText') {
                $formTwo->{$sectionType} = $value->message;
            }
           if ($sectionType === 'section3_title' || $sectionType === 'section3_subtitle1' || $sectionType === 'section3_textareaTitle') {
                $formThree->{$sectionType} = $value->message;
            }

           if ($sectionType === 'section4_title' || $sectionType === 'section4_subtitle' || $sectionType === 'section4_buttonText') {
                $formFour->{$sectionType} = $value->message;
            }

           if ($sectionType === 'contact_title' || $sectionType === 'contact_info' || $sectionType === 'contact_image' || $sectionType === 'contact_contactText' || $sectionType === 'contact_tel') {
                $contact->{$sectionType} = $value->message;
            }

           if ($sectionType === 'svgLink' || $sectionType === 'display_picture' || $sectionType === 'feedback_title' || $sectionType === 'feedback_message' || $sectionType === 'feedback_buttonText') {
                $feedback->{$sectionType} = $value->message;
            }

           if ($sectionType === 'socialMedia_title' || $sectionType === 'socialMedia_subtitle' || $sectionType === 'socialMedia_linkText' || $sectionType === 'socialMedia_link' || $sectionType === 'socialMedia_bottonText') {
                $socialMedia->{$sectionType} = $value->message;
            }
            
            if ($sectionType === 'modal_description' || $sectionType === 'modal_buttonText') {
                $formThree_modal->{$sectionType} = $value->message;
            }

        }

        
        $data->cardMenu = $cardMenu;
        $cardMenu->menuOne = $menuOne;
        $menuOne->formOne = $formOne;
        $formOne->metadata = $metadata;
        $formOne->dropdown = $dropdown;
        $metadata->modalInfo = $modalInfo;

        $menuOne->formTwo = $formTwo;
        $formTwo->rangeArray = $range;

        $menuOne->formThree = $formThree;
        $formThree->modal = $formThree_modal;

        $menuOne->formFour = $formFour;
        $formFour->contact = $contact;
        
        $menuOne->feedback = $feedback;
        $feedback->socialMedia = $socialMedia;


        // ************** SECOND PRICE MENU ******************** //

        $PriceList = SecondPriceMenuCard::orderBy('id', 'asc')->get();
        $PriceListdropdown1 = SecondPriceCardDropdownOption::select('value', 'lable')->get();
        $PriceListdropdown2 = SecondPriceCardDropdownOption2::select('value', 'lable')->get();
        $PriceListdropdown3 = SecondPriceCardDropdownOption3::select('value', 'lable')->get();
        $PriceListdropdown4 = SecondPriceCardDropdownOption4::select('value', 'lable')->get();

        $mainButton = [];
        $section1 = [];
        $section2 = [];
        $section3 = [];
        $section4 = [];
        $contact = [];
        $messageResponse = [];

        foreach ($PriceList as $key => $value) {

            if ($value->type == 'menu_title') {
                $mainButton['menu_title'] = $value->message;
            }
            if ($value->type == 'section_1_title_1') {
                $section1['section_1_title_1'] = $value->message;
            }
            if ($value->type == 'section_1_title_2') {
                $section1['section_1_title_2'] = $value->message;
            }
            if ($value->type == 'section_2_title_1') {
                $section2['section_2_title_1'] = $value->message;
            }
            if ($value->type == 'section_2_title_2') {
                $section2['section_2_title_2'] = $value->message;
            }
            if ($value->type == 'section_2_subtitle') {
                $section2['section_2_subtitle'] = $value->message;
            }
            if ($value->type == 'section2_modal_title') {
                $section2['modal']['title'] = $value->message;
            }
            if ($value->type == 'section2_modal_description') {
                $section2['modal']['description'] = $value->message;
            }
            if ($value->type == 'section2_modal_button') {
                $section2['modal']['button'] = $value->message;
            }
            if ($value->type == 'section_3_title_1') {
                $section3['section_3_title_1'] = $value->message;
            }
            if ($value->type == 'section_3_title_2') {
                $section3['section_3_title_2'] = $value->message;
            }
            if ($value->type == 'section_4_title') {
                $section4['section_4_title'] = $value->message;
            }
            if ($value->type == 'model_title') {
                $section3['model_title'] = $value->message;
            }
            if ($value->type == 'modal_description') {
                $section3['modal_description'] = $value->message;
            }
            if ($value->type == 'button_text') {
                $section3['button_text'] = $value->message;
            }
            if ($value->type == 'contact_title') {
                $contact['contact_title'] = $value->message;
            }
            if ($value->type == 'contact_info') {
                $contact['contact_info'] = $value->message;
            }
            if ($value->type == 'contact_image') {
                $contact['contact_image'] = $value->message;
            }
            if ($value->type == 'contact_text') {
                $contact['contact_text'] = $value->message;
            }
            if ($value->type == 'contact_number') {
                $contact['contact_number'] = $value->message;
            }
            if ($value->type == 'message_response') {
                $messageResponse['message_response'] = $value->message;
            }
            if ($value->type == 'greeting_message') {
                $messageResponse['greeting_message'] = $value->message;
            }
            if ($value->type == 'link_prompt_text') {
                $messageResponse['link_prompt_text'] = $value->message;
            }
            if ($value->type == 'social_media_text') {
                $messageResponse['social_media_text'] = $value->message;
            }
            if ($value->type == 'display_picture') {
                $messageResponse['display_picture'] = $value->message;
            }
            if ($value->type == 'email_svg') {
                $messageResponse['email_svg'] = $value->message;
            }
        }

        $details['Form'] = $mainButton;
        $details['Form']['Section1'] = $section1;
        $details['Form']['Section1']['Dropdown1'] = $PriceListdropdown1;
        $details['Form']['Section1']['Dropdown2'] = $PriceListdropdown2;
        $details['Form']['Section2'] = $section2;
        $details['Form']['Section2']['Dropdown1'] = $PriceListdropdown3;
        $details['Form']['Section2']['Dropdown2'] = $PriceListdropdown4;
        $details['Form']['Section3'] = $section3;
        $details['Form']['Section4'] = $section4;
        $details['Form']['Section4']['contact'] = $contact;
        $details['Form']['MessageResponse'] = $messageResponse;

        $data->cardMenu = $cardMenu;
        $cardMenu->MenuTwo = $details;


        // ************** THIRD PRICE MENU *************** //

        $thirdPricemenu = ThirdPriceCard::orderBy('id', 'desc')->get();
        $dropdown = ThirdPriceCardDropdwonOption::select('value','label')->get();
        $range = ThirdPriceRange::select('label','description','backgroundColor')->get();
        $thirdMenulist = (object)[];

        $menuThree = (object)[];
        $formOne = (object)[];
        $modalInfo = (object)[];
        $formTwo = (object)[];
        $formThree = (object)[];
        $formFour = (object)[];
        $contact = (object)[];
        $feedback = (object)[];
        $socialMedia = (object)[];
        $metadataFormThree = (object)[];
        $metadataFormOne = (object)[];
          
        foreach ($thirdPricemenu as $key => $value) {
            $sectionType = $value->type;

            if ($sectionType === 'menuText') {
                $menuThree->{$sectionType} = $value->message;
            }

            // Assign values to the section data object
            if ($sectionType === 'form1_title' || $sectionType === 'form1_subtitle' || $sectionType === 'form1_buttonText') {
                $formOne->{$sectionType} = $value->message;
            }

            if ($sectionType ===  'form1_websiteText') {
                $metadataFormOne->{$sectionType} = $value->message;
            }
            if ($sectionType === 'form3_modal_info' || $sectionType === 'form3_modal_buttonText' ) {
                $modalInfo->{$sectionType} = $value->message;
            }

            if ($sectionType === 'form2_title' || $sectionType === 'form2_buttonText') {
                $formTwo->{$sectionType} = $value->message;
            }
           if ($sectionType === 'form3_textareaTitle' || $sectionType === 'form3_textareaSubtitle' || $sectionType === 'form3_inputTitle'|| $sectionType === 'form3_buttonText') {
                $formThree->{$sectionType} = $value->message;
            }

           if ($sectionType === 'form4_title' || $sectionType === 'form4_subtitle' || $sectionType === 'form4_buttonText') {
                $formFour->{$sectionType} = $value->message;
            }

           if ($sectionType === 'form4_contact_title' || $sectionType === 'form4_contact_info' || $sectionType === 'form4_contact_image' || $sectionType === 'form4_contact_contactText' || $sectionType === 'form4_contact_tel') {
                $contact->{$sectionType} = $value->message;
            }

           if ($sectionType === 'feedback_svgLink' || $sectionType === 'feedback_displayPicture' || $sectionType === 'feedback_message' || $sectionType === 'feedback_title' || $sectionType === 'feedback_buttonText') {
                $feedback->{$sectionType} = $value->message;
            }

           if ($sectionType === 'feedback_social_title' || $sectionType === 'feedback_social_subtitle' || $sectionType === 'feedback_social_linkText' || $sectionType === 'feedback_social_link' || $sectionType === 'feedback_social_bottonText') {
                $socialMedia->{$sectionType} = $value->message;
            }

        }

        $data->cardMenu = $cardMenu;
        $cardMenu->menuThree = $menuThree;

        $menuThree->formOne = $formOne;
        $formOne->metadata = $metadataFormOne;
        $formOne->dropdown = $dropdown;
        

        $menuThree->formTwo = $formTwo;
        $formTwo->rangeArray = $range;

        $menuThree->formThree = $formThree;
        $formThree->metadata = $metadataFormThree;
        $metadataFormThree->modalInfo = $modalInfo;

        $menuThree->formFour = $formFour;

        $formFour->contact = $contact;
        $menuThree->feedback = $feedback;
        $feedback->socialMedia = $socialMedia;


        // ************** FORTH PRICE MENU *************** //

        $fourthPricemenu = FourthPriceMenuCard::orderBy('id', 'desc')->get();
        $fourthMenuRange = FourthPriceRange::orderBy('id', 'desc')->get();
        $fourthMenuDropdwon = FourthPriceCardDropdwonOption::orderBy('id', 'desc')->get();

        $fourthMenulist = (object)[];

        $menuFour = (object)[];
        $formOne = (object)[];
        $metadata = (object)[];
        $metainfo = (object)[];
        $modalInfo = (object)[];
        $formTwo = (object)[];
        $formThree = (object)[];
        $formFour = (object)[];
        $contact = (object)[];
        $feedback = (object)[];
        $socialMedia = (object)[];
            
        foreach ($fourthPricemenu as $key => $value) {
            $sectionType = $value->type;

            if ($sectionType === 'menu_title') {
                $menuFour->{$sectionType} = $value->message;
            }

            // Assign values to the section data object
            if ($sectionType === 'section1_title' || $sectionType === 'section1_subtitle' || $sectionType === 'section1_buttonText') {
                $formOne->{$sectionType} = $value->message;
            }

            if ($sectionType ===  'websiteText') {
                $metadata->{$sectionType} = $value->message;
            }
            if ($sectionType === 'meta_title' || $sectionType === 'meta_info' || $sectionType === 'meta_button1Text' || $sectionType === 'meta_button2Text') {
                $metainfo->{$sectionType} = $value->message;
            }

            if ($sectionType === 'section2_title' || $sectionType === 'section2_buttonText') {
                $formTwo->{$sectionType} = $value->message;
            }
            if ($sectionType === 'section3_title_1' || $sectionType === 'section3_title_2' || $sectionType === 'section3_subtitle1' || $sectionType === 'section3_subtitle2') {
                $formThree->{$sectionType} = $value->message;
            }

            if ($sectionType === 'section4_title' || $sectionType === 'section4_subtitle' || $sectionType === 'section4_buttonText') {
                $formFour->{$sectionType} = $value->message;
            }

            if ($sectionType === 'contact_title' || $sectionType === 'contact_info' || $sectionType === 'contact_image' || $sectionType === 'contactText' || $sectionType === 'contact_telephone_no') {
                $contact->{$sectionType} = $value->message;
            }

            if ($sectionType === 'svgLink' || $sectionType === 'display_picture' || $sectionType === 'greeting_message' || $sectionType === 'feedback_title' || $sectionType === 'feedback_buttonText') {
                $feedback->{$sectionType} = $value->message;
            }

            if ($sectionType === 'socialMedia_title' || $sectionType === 'socialMedia_subtitle' || $sectionType === 'link_text' || $sectionType === 'link' || $sectionType === 'social_button_text') {
                $socialMedia->{$sectionType} = $value->message;
            }
            if ($sectionType === 'modal_title' || $sectionType === 'modal_info' || $sectionType === 'modal_info_2' ||  $sectionType === 'modal_button1Text' || $sectionType === 'modal_button2Text') {
                $modalInfo->{$sectionType} = $value->message;
            }

        }

        $data->cardMenu = $cardMenu;
        $cardMenu->menuFour = $menuFour;

        $menuFour->formOne = $formOne;
        $formOne->dropdown = $fourthMenuDropdwon;
        $formOne->metadata = $metadata;
        $metadata->metainfo = $metainfo;
        
        $menuFour->formTwo = $formTwo;
        $formTwo->rangeArray = $fourthMenuRange;
        
        $menuFour->formThree = $formThree;
        $formThree->modalInfo = $modalInfo;
        
        $menuFour->formFour = $formFour;
        $formFour->contact = $contact;
        $menuFour->feedback = $feedback;
        $feedback->socialMedia = $socialMedia;
        
        // $details['menuFour'] = $fourthPricemenuDetails;
        
        

        return response()->json([
            'status' => true,
            'data' => $data,
        ]);
    
        return response()->json([
            'status' => false,
            'data' => [],
        ]);
        
    }
    
    // <<<<<<--------- POST API for PriceListSection --------->>>>>>>>


    // Menu Dropdown API
    public function menusIndex(Request $request)
    {
        $menu1Id1 = $request->value1;
        $range1Desc = $request->description1;
        $menu2Id1 = $request->value2;
        $menu2Id2 = $request->value3;
        $menu2Id3 = $request->value4;
        $menu2Id4 = $request->value5;
        $menu3Id1 = $request->value6;
        $range2Desc = $request->description2;
        $menu4Id1 = $request->value7;
        $range3Desc = $request->description3;

        $selectedValue1 = FirstPriceCardDropdwonOption::where('value', $menu1Id1)->value('value');
        $selectedRange1 = FirstPriceRange::where('description', $range1Desc)->value('description');
        $selectedValue2 = SecondPriceCardDropdownOption::where('value', $menu2Id1)->value('value');
        $selectedValue3 = SecondPriceCardDropdownOption2::where('value', $menu2Id2)->value('value');
        $selectedValue4 = SecondPriceCardDropdownOption3::where('value', $menu2Id3)->value('value');
        $selectedValue5 = SecondPriceCardDropdownOption4::where('value', $menu2Id4)->value('value');
        $selectedValue6 = ThirdPriceCardDropdwonOption::where('value', $menu3Id1)->value('value');
        $selectedRange2 = ThirdPriceRange::where('description', $range2Desc)->value('description');
        $selectedValue7 = FourthPriceCardDropdwonOption::where('value', $menu4Id1)->value('value');
        $selectedRange3 = FourthPriceRange::where('description', $range3Desc)->value('description');

        $details['Menu1']['section1_SelectOption'] = $selectedValue1;
        $details['Menu1']['section2_RangeDescription'] = $selectedRange1;
        $details['Menu2']['section1_SelectOption1'] = $selectedValue2;
        $details['Menu2']['section1_SelectOption2'] = $selectedValue3;
        $details['Menu2']['section2_SelectOption1'] = $selectedValue4;
        $details['Menu2']['section2_SelectOption2'] = $selectedValue5;
        $details['Menu3']['section1_SelectOption'] = $selectedValue6;
        $details['Menu3']['section2_RangeDescription'] = $selectedRange2;
        $details['Menu4']['section1_SelectOption'] = $selectedValue7;
        $details['Menu4']['section2_RangeDescription'] = $selectedRange3;

        return response()->json($details, 200);
    }

    // Menu Store API

    public function menusStore(Request $request)
    {
        $credentials = $request->only(
            'tbl_firstpricecard_dropdwonoption_id',
            'tbl_first_price_range_id',
            'section3_inputbox',
            'prlist_menu2_dropdown_1_id',
            'prlist_menu2_dropdown_2_id',
            'prlist_menu2_dropdown_3_id',
            'prlist_menu2_dropdown_4_id',
            'tbl_thirdpricecard_dropdwonoption_id',
            'tbl_third_price_range_id',
            'tbl_fourthpricecard_dropdwonoption_id',
            'tbl_fourth_price_range_id',
            'section1_inputbox',
            'section3_textarea',
            'section4_name',
            'section4_email',
            'section4_phone',
            'section4_website',
            'additional_input'
        );

        $type = $request->type;

            switch ($type) {
                case 1:
                    $validator = Validator::make($credentials, [
                        'tbl_firstpricecard_dropdwonoption_id' => 'required',
                        'tbl_first_price_range_id' => 'required',
                        'section3_textarea' => 'required',
                        'section3_inputbox' => 'required',
                        'section4_name' => 'required',
                        'section4_email' => 'required',
                        'section4_phone' => 'required',
                        'additional_input' => '',
                    ]);
                    break;
                case 2:
                    $validator = Validator::make($credentials, [
                        'prlist_menu2_dropdown_1_id' => 'required',
                        'prlist_menu2_dropdown_2_id' => 'required',
                        'prlist_menu2_dropdown_3_id' => 'required',
                        'prlist_menu2_dropdown_4_id' => 'required',
                        'section3_textarea' => 'required',
                        'section4_name' => 'required',
                        'section4_email' => 'required',
                        'section4_phone' => 'required',
                        'section4_website' => 'required'
                    ]);
                    break;
                case 3:
                    $validator = Validator::make($credentials, [
                        'tbl_thirdpricecard_dropdwonoption_id' => 'required',
                        'tbl_third_price_range_id' => 'required',
                        'section3_textarea' => 'required',
                        'section3_inputbox' => 'required',
                        'section4_name' => 'required',
                        'section4_email' => 'required',
                        'section4_phone' => 'required',
                        'additional_input' => '',
                    ]);
                    break;
                case 4:
                    $validator = Validator::make($credentials, [
                        'tbl_fourthpricecard_dropdwonoption_id' => 'required',
                        'section1_inputbox' => 'required',
                        'tbl_fourth_price_range_id' => 'required',
                        'section3_textarea' => 'required',
                        'section3_inputbox' => 'required',
                        'section4_name' => 'required',
                        'section4_email' => 'required',
                        'section4_phone' => 'required',
                        'additional_input' => '',
                    ]);
                    break;
                default:
                    return response()->json(['success' => false, 'message' => 'Invalid type'], 400);
            }

            if ($validator->fails()) {
                return response()->json(['success' => false, 'message' => $validator->messages()], 422);
            }

            $menuData = new PriceListMenu2FinalTable();
            $menuData->fill($request->all());
            $menuData->save();

            return response()->json(['message' => 'Stored Successfully'], 200);
    }

    // <<<<<<--------- POST API for PriceListSection Finished here --------->>>>>>>>
    
    public function opinionSetting()
    {
        try {
            $brilliantJob = OpinionBrilliantJob::orderBy('id', 'desc')->get();
            $Experts = OpinionExperts::orderBy('id', 'desc')->get();
            $Orders = OpinionOrders::orderBy('id', 'desc')->get();
            $OpinionReview = OpinionReview::orderBy('id', 'desc')->get();
            $referenceImage = OpinionReferencesImage::orderBy('id', 'desc')->get();
            $referenceCard = OpinionReferencesCard::orderBy('id', 'desc')->get();
             $Teams = TeamsModel::orderBy('id', 'desc')->get();
           $AtOwonce = AtOwonce::orderBy('id', 'desc')->get();

            $ExpertsDetails = [];
            $OrdersDetails = [];
            $TeamsDetails = [];
            $AtowonceDetails = [];
            $WriteToUs = [];

            foreach ($Experts as $key => $value) {
                if ($value->type == 'title') {
                    $ExpertsDetails['title'] = $value->message;
                }
                if ($value->type == 'image_1') {
                    $ExpertsDetails['image_1'] = $value->message;
                }
                if ($value->type == 'image_2') {
                    $ExpertsDetails['image_2'] = $value->message;
                }
            }

            foreach ($Orders as $key => $value) {
                if ($value->type == 'title') {
                    $OrdersDetails['title'] = $value->message;
                }
                if ($value->type == 'subtitle_1') {
                    $OrdersDetails['subtitle_1'] = $value->message;
                }
                if ($value->type == 'image') {
                    $OrdersDetails['image'] = $value->message;
                }
                if ($value->type == 'subtitle_2') {
                    $OrdersDetails['subtitle_2'] = $value->message;
                }
                if ($value->type == 'rating_no') {
                    $OrdersDetails['rating_no'] = $value->message;
                }
            }
            
            foreach ($Teams as $key => $value) {
                if ($value->type == 'title') {
                    $TeamsDetails['title'] = $value->message;
                }
                if ($value->type == 'img_one') {
                    $TeamsDetails['img_one'] = $value->message;
                }
                if ($value->type == 'img_two') {
                    $TeamsDetails['img_two'] = $value->message;
                }
                if ($value->type == 'img_three') {
                    $TeamsDetails['img_three'] = $value->message;
                }
                if ($value->type == 'img_four') {
                    $TeamsDetails['img_four'] = $value->message;
                }
                if ($value->type == 'para_one') {
                    $TeamsDetails['para_one'] = $value->message;
                }
                if ($value->type == 'para_two') {
                    $TeamsDetails['para_two'] = $value->message;
                }
                if ($value->type == 'para_three') {
                    $TeamsDetails['para_three'] = $value->message;
                }
                if ($value->type == 'para_four') {
                    $TeamsDetails['para_four'] = $value->message;
                }
            }


            foreach ($AtOwonce as $key => $value) {
                if ($value->type == 'title') {
                    $AtowonceDetails['title'] = $value->message;
                }
                if ($value->type == 'img_1') {
                    $AtowonceDetails['img_1'] = $value->message;
                }
                if ($value->type == 'img_2') {
                    $AtowonceDetails['img_2'] = $value->message;
                }
                if ($value->type == 'cont_location') {
                    $AtowonceDetails['cont_title'] = $value->message;
                }
                if ($value->type == 'cont_name') {
                    $AtowonceDetails['cont_name'] = $value->message;
                }
                if ($value->type == 'cont_number') {
                    $AtowonceDetails['cont_number'] = $value->message;
                }
                if ($value->type == 'para_1') {
                    $AtowonceDetails['para_1'] = $value->message;
                }
                if ($value->type == 'para_2') {
                    $AtowonceDetails['para_2'] = $value->message;
                }
                if ($value->type == 'para_3') {
                    $AtowonceDetails['para_3'] = $value->message;
                }
                if ($value->type == 'text') {
                    $WriteToUs['text'] = $value->message;
                }
                if ($value->type == 'email') {
                    $WriteToUs['email'] = $value->message;
                }
            }

            for ($i = 1; $i < 5; $i++) {
                $SliderImages['row' . $i] = OpinionSlider::where('type', 'like', "row_{$i}_image_url_%")->get();
            }

            // $details['Banner'] = OpinionHeroImage::pluck('image')->toArray();
            $details['Banner'] = OpinionHeroImage::pluck('message','type')->toArray();
            $details['OurClient'] = (object) $SliderImages;
            $details['BrilliantJob'] = $brilliantJob;
            $details['Review'] = $OpinionReview;
            $details['Ratings'] = OpinionRating::pluck('message', 'type')->toArray();
            $details['Acoordion1'] = OpinionAccordian1::pluck('message', 'type')->toArray();
            $details['Acoordion2'] = OpinionAccordian2::pluck('message', 'type')->toArray();
            $details['Reference'] = OpinionReferences::pluck('message', 'type')->toArray();
            $details['Reference']['referenceImage'] = $referenceImage;
            $details['Reference']['ReferenceCard'] = $referenceCard;
            $details['experts'] = $ExpertsDetails;
            $details['orders'] = $OrdersDetails;
            
            $details['brands'] = BrandTitle::pluck('message','type')->toArray();
           
            $brandData = BrandOne::select('brand_title', 'image')->get();
            $details['teams'] = $TeamsDetails;
            // $details['AtOwonce'] = $AtowonceDetails;
            $details['atMarketersi'] = $AtowonceDetails;
            $details['atMarketersi']['write_to_us'] = $WriteToUs;

            $formattedBrands = [];
            
            foreach ($brandData as $brand) {
                $images = json_decode($brand['image']);
        
                // Flatten the array of image URLs
                $formattedImages = array_values($images);
        
                $formattedBrands[] = [
                    'brand_title' => $brand['brand_title'],
                    'image' => $formattedImages,
                ];
            }
            $details['brands']['brand'] = $formattedBrands;

            $details['opinions'] = RatingTitle::pluck('message','type')->toArray();
            $details['opinions']['rating'] = RatingOpinion::select('user_name','opinion','rating','image','para')->get();
            
            $details['customerReplies'] = DB::table('tbl_customer_replies_title')->pluck('message','type')->toArray();

            $details['customerReplies']['reviews'] = DB::table('tbl_customer_replies_reviews')
                                                        ->pluck('reviews')
                                                        ->map(function ($item) {
                                                            return json_decode($item, true);
                                                        })
                                                        ->toArray();

            return response()->json([
                'status' => true,
                'data' => $details,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }
    
    public function salesContentSetting(){
        try {
        $salesContent = SalesContentSection1::orderBy('id', 'desc')->get();
        $description = SalesContentSection2::orderBy('id', 'desc')->get();
        $faq = SalesContentFaq::orderBy('id', 'desc')->get();
        $faqQAContent = SalesContentFaqQA::orderBy('id', 'desc')->get();
        $policySection = PolicySection::orderBy('id', 'desc')->get();
        $pricingSection = Pricing::orderBy('id', 'desc')->get();
        $productSection = ProductSection::orderBy('id', 'desc')->get();
        $projectSection2 = ProjectSection2::orderBy('id', 'desc')->get();
        $projectSection3 = ProjectSection3Content::orderBy('id', 'desc')->get();
        $projectSection3CustomerReview = ProjectSection3CustomerReview::orderBy('id', 'desc')->get();
        $projectSection4 = ProjectSection4::orderBy('id', 'desc')->get();
        $projectSection5 = Project5Content::orderBy('id', 'desc')->get();
        $projectSection5CustomerReview = Project5CustomerReview::orderBy('id', 'desc')->get();
        $projectSection6 = ProjectSection6::orderBy('id', 'desc')->get();
        $projectSection7 = Project7Content::orderBy('id', 'desc')->get();
        $projectSection7CustomerReview = Project7CustomerReview::orderBy('id', 'desc')->get();
        $projectSection8 = Project8Content::orderBy('id', 'desc')->get();
        $projectSection8Qualities = Project8Qualities::orderBy('id', 'desc')->get();
        $sliderSection = SliderSectionContent::orderBy('id', 'desc')->get();
        $sliderSectionCarouselImg = SliderSectionImages::pluck('images')->toArray();
        $buisnessToolsSection = BuisnessToolsSection::orderBy('id', 'desc')->get();
        $howItWorksSection = HowItWorksContent::orderBy('id', 'desc')->get();
        $howItWorksSteps = HowItWorksSteps::orderBy('id', 'desc')->get();
        $knowMoreSection = KnowMoreSection::orderBy('id', 'desc')->get();

        $salesContentSection1 = [];
        $salesContentSection2 = [];
        $faqContent = [];
        $policySectionContent = [];
        $pricingSectionContent = [];
        $productSectionContent = [];
        $projectSection2Content = [];
        $projectSection3Content = [];
        $projectSection3CustomerReviewContent = [];
        $projectSection4Content = [];
        $projectSection5Content = [];
        $projectSection5CustomerReviewContent = [];
        $projectSection6Content = [];
        $projectSection7Content = [];
        $projectSection7CustomerReviewContent = [];
        $projectSection8Content = [];
        $projectSection8QualitiesContent = [];
        $sliderSectionContent = [];
        $buisnessToolsSectionContent = [];
        $howItWorksSectionContent = [];
        $howItWorksStepsContent = [];
        $knowMoreSectionContent = [];
    

        foreach ($salesContent as $key => $value) {
            
            if ($value->type == 'title') {
                    $salesContentSection1['title'] = $value->message;
            }
            if ($value->type == 'description') {
                $salesContentSection1['description'] = $value->message;
            }

            if ($value->type == 'main_title') {
                $salesContentSection1['main_title'] = $value->message;
            }
            if ($value->type == 'sub_title') {
                $salesContentSection1['sub_title'] = $value->message;
            }
            if ($value->type == 'image') {
                $salesContentSection1['image'] = $value->message;
            }
        }
        foreach ($description as $key => $value) {

                if ($value->type == 'title') {
                    $salesContentSection2['title'] = $value->message;
                }
                if ($value->type == 'description') {
                    $salesContentSection2['description'] = $value->message;
                }
                if ($value->type == 'background_image') {
                    $salesContentSection2['background_image'] = $value->message;
                }
                if ($value->type == 'button_text') {
                    $salesContentSection2['btn_title'] = $value->message;
                }
            }
        foreach ($faq as $key => $value) {

            if ($value->type == 'main_title') {
                $faqContent['main_title'] = $value->message;
            }
            if ($value->type == 'image') {
                $faqContent['image'] = $value->message;
            }
        }
        foreach ($policySection as $key => $value) {

            if ($value->type == 'title') {
                $policySectionContent['title'] = $value->message;
            }
            if ($value->type == 'description') {
                $policySectionContent['description'] = $value->message;
            }
            if ($value->type == 'bottom_description') {
                $policySectionContent['bottom_description'] = $value->message;
            }
        }
        foreach ($pricingSection as $key => $value) {

            if ($value->type == 'title') {
                $pricingSectionContent['title'] = $value->message;
            }
            if ($value->type == 'sub_title') {
                $pricingSectionContent['sub_title'] = $value->message;
            }
            if ($value->type == 'image_left') {
                $pricingSectionContent['image_left'] = $value->message;
            }
            if ($value->type == 'image_left_desc') {
                $pricingSectionContent['image_left_desc'] = $value->message;
            }
            if ($value->type == 'image_right') {
                $pricingSectionContent['image_right'] = $value->message;
            }
            if ($value->type == 'image_right_desc') {
                $pricingSectionContent['image_right_desc'] = $value->message;
            }
            if ($value->type == 'para_1') {
                $pricingSectionContent['para_1'] = $value->message;
            }
            if ($value->type == 'para_2') {
                $pricingSectionContent['para_2'] = $value->message;
            }
            if ($value->type == 'bottom_text') {
                $pricingSectionContent['bottom_text'] = $value->message;
            }
            if ($value->type == 'brand_logo') {
                $pricingSectionContent['brand_logo'] = $value->message;
            }
            if ($value->type == 'banner_img') {
                $pricingSectionContent['banner_img'] = $value->message;
            }
            if ($value->type == 'form_title') {
                $pricingSectionContent['form_title'] = $value->message;
            }
        }
        foreach ($productSection as $key => $value) {

            if ($value->type == 'title') {
                $productSectionContent['title'] = $value->message;
            }
            if ($value->type == 'sub_title') {
                $productSectionContent['sub_title'] = $value->message;
            }
            if ($value->type == 'background_image') {
                $productSectionContent['background_image'] = $value->message;
            }
            if ($value->type == 'title_image') {
                $productSectionContent['title_image'] = $value->message;
            }
            if ($value->type == 'mid_text') {
                $productSectionContent['mid_text'] = $value->message;
            }
            if ($value->type == 'description') {
                $productSectionContent['description'] = $value->message;
            }
            if ($value->type == 'para_1') {
                $productSectionContent['para_1'] = $value->message;
            }
            if ($value->type == 'product_bannar_img') {
                $productSectionContent['product_bannar_img'] = $value->message;
            }
            if ($value->type == 'product_desc_img') {
                $productSectionContent['product_desc_img'] = $value->message;
            }
            if ($value->type == 'footer_image') {
                $productSectionContent['footer_image'] = $value->message;
            }
        }
        foreach ($projectSection2 as $key => $value) {

            if ($value->type == 'logo_image') {
                $projectSection2Content['logo_image'] = $value->message;
            }
            if ($value->type == 'underlined_label') {
                $projectSection2Content['underlined_label'] = $value->message;
            }
            if ($value->type == 'title') {
                $projectSection2Content['title'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection2Content['description'] = $value->message;
            }
             if ($value->type == 'description_2') {
                $projectSection2Content['description_2'] = $value->message;
            }
            if ($value->type == 'bannar_image') {
                $projectSection2Content['bannar_image'] = $value->message;
            }
            if ($value->type == 'background_image') {
                $projectSection2Content['background_image'] = $value->message;
            }
            if ($value->type == 'background_image_title') {
                $projectSection2Content['background_image_title'] = $value->message;
            }
            if ($value->type == 'quote') {
                $projectSection2Content['quote'] = $value->message;
            }
            if ($value->type == 'title_1') {
                $projectSection2Content['title_1'] = $value->message;
            }
            if ($value->type == 'sub_title_1') {
                $projectSection2Content['sub_title_1'] = $value->message;
            }
            if ($value->type == 'bottom_bannar_image') {
                $projectSection2Content['bottom_bannar_image'] = $value->message;
            }
        }
        foreach ($projectSection3 as $key => $value) {

            if ($value->type == 'logo_image') {
                $projectSection3Content['logo_image'] = $value->message;
            }
            if ($value->type == 'underlined_label') {
                $projectSection3Content['underlined_label'] = $value->message;
            }
            if ($value->type == 'title') {
                $projectSection3Content['title'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection3Content['description'] = $value->message;
            }
            if ($value->type == 'bannar_image') {
                $projectSection3Content['bannar_image'] = $value->message;
            }
            if ($value->type == 'quote_1') {
                $projectSection3Content['quote_1'] = $value->message;
            }
            if ($value->type == 'quote_2') {
                $projectSection3Content['quote_2'] = $value->message;
            }
        }
        foreach ($projectSection3CustomerReview as $key => $value) {

            if ($value->type == 'background_image') {
                $projectSection3CustomerReviewContent['background_image'] = $value->message;
            }
            if ($value->type == 'title') {
                $projectSection3CustomerReviewContent['title'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection3CustomerReviewContent['description'] = $value->message;
            }
            if ($value->type == 'btn_title') {
                $projectSection3CustomerReviewContent['btn_title'] = $value->message;
            }
        }
        foreach ($projectSection4 as $key => $value) {

            if ($value->type == 'logo_image') {
                $projectSection4Content['logo_image'] = $value->message;
            }
            if ($value->type == 'underlined_label') {
                $projectSection4Content['underlined_label'] = $value->message;
            }
            if ($value->type == 'title_1') {
                $projectSection4Content['title'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection4Content['description'] = $value->message;
            }
            if ($value->type == 'description_2') {
                    $projectSection4Content['description_2'] = $value->message;
                }
            if ($value->type == 'title_2') {
                $projectSection4Content['title_2'] = $value->message;
            }
            if ($value->type == 'sub_title_2') {
                $projectSection4Content['sub_title_2'] = $value->message;
            }
            if ($value->type == 'image_1') {
                $projectSection4Content['image_1'] = $value->message;
            }
            if ($value->type == 'image_2') {
                $projectSection4Content['image_2'] = $value->message;
            }
            if ($value->type == 'title_3') {
                $projectSection4Content['title_3'] = $value->message;
            }
            if ($value->type == 'image_3') {
                $projectSection4Content['image_3'] = $value->message;
            }
            if ($value->type == 'title_4') {
                $projectSection4Content['title_4'] = $value->message;
            }
            if ($value->type == 'sub_title_4') {
                $projectSection4Content['sub_title_4'] = $value->message;
            }
            if ($value->type == 'right_image') {
                $projectSection4Content['right_image'] = $value->message;
            }
        }
        foreach ($projectSection5 as $key => $value) {

            if ($value->type == 'logo_image') {
                $projectSection5Content['logo_image'] = $value->message;
            }
            if ($value->type == 'underlined_label') {
                $projectSection5Content['underlined_label'] = $value->message;
            }
            if ($value->type == 'title_1') {
                $projectSection5Content['title_1'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection5Content['description'] = $value->message;
            }
            if ($value->type == 'image_1') {
                $projectSection5Content['image_1'] = $value->message;
            }
            if ($value->type == 'bannar_title') {
                $projectSection5Content['bannar_title'] = $value->message;
            }
            if ($value->type == 'bannar_sub_title') {
                $projectSection5Content['bannar_sub_title'] = $value->message;
            }
            if ($value->type == 'bannar_image') {
                $projectSection5Content['bannar_image'] = $value->message;
            }
            if ($value->type == 'bannar_bottom_title') {
                $projectSection5Content['bannar_bottom_title'] = $value->message;
            }
            if ($value->type == 'bannar_bottom_sub_title') {
                $projectSection5Content['bannar_bottom_sub_title'] = $value->message;
            }
        }
        foreach ($projectSection5CustomerReview as $key => $value) {

            if ($value->type == 'background_image') {
                $projectSection5CustomerReviewContent['background_image'] = $value->message;
            }
            if ($value->type == 'title') {
                $projectSection5CustomerReviewContent['title'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection5CustomerReviewContent['description'] = $value->message;
            }
            if ($value->type == 'btn_title') {
                $projectSection5CustomerReviewContent['btn_title'] = $value->message;
            }
        }
        foreach ($projectSection6 as $key => $value) {

            if ($value->type == 'underlined_label') {
                $projectSection6Content['underlined_label'] = $value->message;
            }
            if ($value->type == 'title_1') {
                $projectSection6Content['title_1'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection6Content['description'] = $value->message;
            }
            if ($value->type == 'bannar_image_1') {
                $projectSection6Content['bannar_image_1'] = $value->message;
            }
            if ($value->type == 'bannar_image_2') {
                $projectSection6Content['bannar_image_2'] = $value->message;
            }
            if ($value->type == 'bannar_image_2_title') {
                $projectSection6Content['bannar_image_2_title'] = $value->message;
            }
            if ($value->type == 'quote_1') {
                $projectSection6Content['quote_1'] = $value->message;
            }
            if ($value->type == 'quote_1_desc') {
                $projectSection6Content['quote_1_desc'] = $value->message;
            }
            if ($value->type == 'quote_1_image') {
                $projectSection6Content['quote_1_image'] = $value->message;
            }
            if ($value->type == 'quote_2') {
                $projectSection6Content['quote_2'] = $value->message;
            }
            if ($value->type == 'quote_2_desc') {
                $projectSection6Content['quote_2_desc'] = $value->message;
            }
            if ($value->type == 'quote_2_image') {
                $projectSection6Content['quote_2_image'] = $value->message;
            }
        }
        foreach ($projectSection7 as $key => $value) {

            if ($value->type == 'logo_image') {
                $projectSection7Content['logo_image'] = $value->message;
            }
            if ($value->type == 'underlined_label') {
                $projectSection7Content['underlined_label'] = $value->message;
            }
            if ($value->type == 'title_1') {
                $projectSection7Content['title_1'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection7Content['description'] = $value->message;
            }
            if ($value->type == 'bannar_image_1') {
                $projectSection7Content['bannar_image_1'] = $value->message;
            }
            if ($value->type == 'text_btwn_borders') {
                $projectSection7Content['text_btwn_borders'] = $value->message;
            }
            if ($value->type == 'quote') {
                $projectSection7Content['quote'] = $value->message;
            }
            if ($value->type == 'info') {
                $projectSection7Content['info'] = $value->message;
            }
            if ($value->type == 'background_image') {
                $projectSection7Content['background_image'] = $value->message;
            }
            if ($value->type == 'divider_image') {
                $projectSection7Content['divider_image'] = $value->message;
            }
            if ($value->type == 'bannar_img_title_2') {
                $projectSection7Content['bannar_img_title_2'] = $value->message;
            }
            if ($value->type == 'bannar_image_2') {
                $projectSection7Content['bannar_image_2'] = $value->message;
            }
            if ($value->type == 'background_image_2') {
                $projectSection7Content['background_image_2'] = $value->message;
            }
        }
        foreach ($projectSection7CustomerReview as $key => $value) {

            if ($value->type == 'background_image') {
                $projectSection7CustomerReviewContent['background_image'] = $value->message;
            }
            if ($value->type == 'title') {
                $projectSection7CustomerReviewContent['title'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection7CustomerReviewContent['description'] = $value->message;
            }
            if ($value->type == 'btn_title') {
                $projectSection7CustomerReviewContent['btn_title'] = $value->message;
            }
        }
        foreach ($projectSection8 as $key => $value) {
            if ($value->type == 'logo_image') {
                $projectSection8Content['logo_image'] = $value->message;
            }
            if ($value->type == 'underlined_label') {
                $projectSection8Content['underlined_label'] = $value->message;
            }
            if ($value->type == 'title_1') {
                $projectSection8Content['title_1'] = $value->message;
            }
            if ($value->type == 'description') {
                $projectSection8Content['description'] = $value->message;
            }
            if ($value->type == 'bannar_image_1_title') {
                $projectSection8Content['bannar_image_1_title'] = $value->message;
            }
            if ($value->type == 'bannar_image_1') {
                $projectSection8Content['bannar_image_1'] = $value->message;
            }
        }
        foreach ($projectSection8Qualities as $key => $value) {
            if ($value->type == 'title') {
                $projectSection8QualitiesContent['title'] = $value->message;
            }
            if ($value->type == 'image_1') {
                $projectSection8QualitiesContent['image_1'] = $value->message;
            }
            if ($value->type == 'image_1_info') {
                $projectSection8QualitiesContent['image_1_info'] = $value->message;
            }
            if ($value->type == 'image_2') {
                $projectSection8QualitiesContent['image_2'] = $value->message;
            }
            if ($value->type == 'image_2_info') {
                $projectSection8QualitiesContent['image_2_info'] = $value->message;
            }
            if ($value->type == 'image_3') {
                $projectSection8QualitiesContent['image_3'] = $value->message;
            }
            if ($value->type == 'image_3_info') {
                $projectSection8QualitiesContent['image_3_info'] = $value->message;
            }
            if ($value->type == 'bottom_image') {
                $projectSection8QualitiesContent['bottom_image'] = $value->message;
            }
        }
        foreach ($sliderSection as $key => $value) {
            if ($value->type == 'main_title') {
                $sliderSectionContent['main_title'] = $value->message;
            }
            if ($value->type == 'sub_title') {
                $sliderSectionContent['sub_title'] = $value->message;
            }
            if ($value->type == 'para_1') {
                $sliderSectionContent['para_1'] = $value->message;
            }
            if ($value->type == 'para_2') {
                $sliderSectionContent['para_2'] = $value->message;
            }
        }
        
        foreach ($buisnessToolsSection as $key => $value) {

            if ($value->type == 'title') {
                $buisnessToolsSectionContent['title'] = $value->message;
            }
            if ($value->type == 'image_1') {
                $buisnessToolsSectionContent['image_1'] = $value->message;
            }
            if ($value->type == 'img_1_text') {
                $buisnessToolsSectionContent['img_1_text'] = $value->message;
            }
            if ($value->type == 'image_2') {
                $buisnessToolsSectionContent['image_2'] = $value->message;
            }
            if ($value->type == 'img_2_text') {
                $buisnessToolsSectionContent['img_2_text'] = $value->message;
            }
            if ($value->type == 'image_3') {
                $buisnessToolsSectionContent['image_3'] = $value->message;
            }
            if ($value->type == 'img_3_text') {
                $buisnessToolsSectionContent['img_3_text'] = $value->message;
            }
            if ($value->type == 'image_4') {
                $buisnessToolsSectionContent['image_4'] = $value->message;
            }
            if ($value->type == 'img_4_text') {
                $buisnessToolsSectionContent['img_4_text'] = $value->message;
            }
            if ($value->type == 'image_5') {
                $buisnessToolsSectionContent['image_5'] = $value->message;
            }
            if ($value->type == 'img_5_text') {
                $buisnessToolsSectionContent['img_5_text'] = $value->message;
            }
            if ($value->type == 'para_1') {
                $buisnessToolsSectionContent['para_1'] = $value->message;
            }
            if ($value->type == 'para_2') {
                $buisnessToolsSectionContent['para_2'] = $value->message;
            }
        }
        foreach ($howItWorksSection as $key => $value) {

            if ($value->type == 'title') {
                $howItWorksSectionContent['title'] = $value->message;
            }
            if ($value->type == 'image') {
                $howItWorksSectionContent['image'] = $value->message;
            }
        }

        foreach ($howItWorksSteps as $key => $value) {

            if ($value->type == 'main_title') {
                $howItWorksStepsContent['main_title'] = $value->message;
            }
            if ($value->type == 'image_1') {
                $howItWorksStepsContent['image_1'] = $value->message;
            }
            if ($value->type == 'title_1') {
                $howItWorksStepsContent['title_1'] = $value->message;
            }
            if ($value->type == 'sub_title_1') {
                $howItWorksStepsContent['sub_title_1'] = $value->message;
            }
            if ($value->type == 'description_1') {
                $howItWorksStepsContent['description_1'] = $value->message;
            }
            if ($value->type == 'image_2') {
                $howItWorksStepsContent['image_2'] = $value->message;
            }
            if ($value->type == 'title_2') {
                $howItWorksStepsContent['title_2'] = $value->message;
            }
            if ($value->type == 'sub_title_2') {
                $howItWorksStepsContent['sub_title_2'] = $value->message;
            }
            if ($value->type == 'description_2') {
                $howItWorksStepsContent['description_2'] = $value->message;
            }
            if ($value->type == 'image_3') {
                $howItWorksStepsContent['image_3'] = $value->message;
            }
            if ($value->type == 'title_3') {
                $howItWorksStepsContent['title_3'] = $value->message;
            }
            if ($value->type == 'sub_title_3') {
                $howItWorksStepsContent['sub_title_3'] = $value->message;
            }
            if ($value->type == 'description_3') {
                $howItWorksStepsContent['description_3'] = $value->message;
            }
        }
        foreach ($knowMoreSection as $key => $value) {

            if ($value->type == 'title') {
                $knowMoreSectionContent['title'] = $value->message;
            }
            if ($value->type == 'para') {
                $knowMoreSectionContent['para'] = $value->message;
            }
            if ($value->type == 'bottom_text') {
                $knowMoreSectionContent['bottom_text'] = $value->message;
            }
            if ($value->type == 'bannar_image') {
                $knowMoreSectionContent['bannar_image'] = $value->message;
            }
        }
        $details['heroSection'] = $salesContentSection1;
        $details['quoteSection']  = $salesContentSection2;
        $details['buisnessToolsSection'] = $buisnessToolsSectionContent;
        $details['howItWorksSection'] = $howItWorksSectionContent;
        $details['howItWorksSection']['steps'] = $howItWorksStepsContent;
        $details['knowMoreSection'] = $knowMoreSectionContent;
        $details['faq']  = $faqContent;
        $details['faq']['faqAQ']  = $faqQAContent;
        $details['policySection'] = $policySectionContent;
        $details['pricingSection'] = $pricingSectionContent;
        $details['projects']['projectSection1'] = $productSectionContent;
        $details['projects']['projectSection2'] = $projectSection2Content;
        $details['projects']['projectSection3'] = $projectSection3Content;
        $details['projects']['projectSection3']['customerReview'] = $projectSection3CustomerReviewContent;
        $details['projects']['projectSection4'] = $projectSection4Content;
        $details['projects']['projectSection5'] = $projectSection5Content;
        $details['projects']['projectSection5']['customerReview'] = $projectSection5CustomerReviewContent;
        $details['projects']['projectSection6'] = $projectSection6Content;
        $details['projects']['projectSection7'] = $projectSection7Content;
        $details['projects']['projectSection7']['customerReview'] = $projectSection7CustomerReviewContent;
        $details['projects']['projectSection8'] = $projectSection8Content;
        $details['projects']['projectSection8']['qualities'] = $projectSection8QualitiesContent;
        $details['sliderSection'] = $sliderSectionContent;
        $details['sliderSection']['images'] = $sliderSectionCarouselImg;



            return response()->json([
                'status' => true,
                'data' => $details,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }

    }
    
    public function businessNameCreation()
    {
        try{
            $data['heroSection'] = DB::table('tbl_bnc_hero_section')->select('title','subtitle1','subtitle2','background_video')->first();
            
            $data['anatomy'] = DB::table('tbl_bnc_anatomy')->select('title','description1','description2','title_image_url','below_text','banner_url')->first();
            
            $data['anatomy_guide'] = DB::table('tbl_bnc_anatomy_guide')->select('paragraph1','paragraph2','paragraph3','paragraph4','percentage_image_url','banner_url','brand_url')->first();
            
            $data['launch_essentials'] = DB::table('tbl_bnc_launch_essentials')->select('background_image','title','description','section_title','section_subtitle','list_title','list_element1','list_element2','list_element3','list_element4','section_paragraph','banner_url','policy_image','policy_title','policy_description','btn_title')->first();
            
            $data['faq'] = DB::table('tbl_bnc_faq')->select('title','image')->first();
            $accordionData = [];
            for ($i=1; $i <=6 ; $i++) { 
                $accordionTitle = "accordion_title_$i";
                $accordionDescription = "accordion_description_$i";
                $accordionItem = [
                    'title' => DB::table('tbl_bnc_faq')->select($accordionTitle)->first()->$accordionTitle,
                    'content' => DB::table('tbl_bnc_faq')->select($accordionDescription)->first()->$accordionDescription,
                ];
                $accordionData[] = (object)$accordionItem;
                
            }
            
            $data['faq']->accordion = $accordionData;
            
            $data['project_value'] = DB::table('tbl_bnc_project_value')->select('title','description','offer_title','banner_url','bottom_description')->first();
            
            $data['customer_review'] = DB::table('tbl_bnc_customer_review')->select('image','title','subtitle','bottomtext')->first();
            
            $data['bnc_implementation'] = DB::table('tbl_bnc_implementation')->select('title','subtitle','image')->first();
            
            $data['bnc_implementation_start'] = DB::table('tbl_bnc_implementation_start')->select('title','subtitle','text1','text2','text3','image1','image2','image3')->first();
            
            $data['company_review'] = DB::table('tbl_bnc_company_review')->select('title','subtitle','image','quote','quoteauthor','text')->get();
            
            $data['special_reviews'] = [
                DB::table('tbl_bnc_special_review')
                    ->select('title', 'subtitle', 'image', 'quote', 'quoteauthor', 'text')
                    ->first(),
                DB::table('tbl_bnc_special_review2')
                    ->select('title', 'subtitle', 'image', 'quote', 'quoteauthor', 'text', 'productimage1', 'productimage2')
                    ->first(),
            ];
            
            $data['profit_slide'] = DB::table('tbl_bnc_profit_slide')->select('title','subtitle','text','image')->get()
            ->map(function ($item) {
                $item->image = json_decode($item->image, true);
                return $item;
            })
            ->first();
            
            $data['implementation'] = Implementation::pluck('message','type')->toArray();
            
            $data['implementation']['example1'] = DB::table('tbl_example_1')->pluck('message','type')->toArray();

            $tables = ['tbl_example_2','tbl_example_8','tbl_example_19'];

            $examplesData = [];

            foreach ($tables as $tableName) {
                $tableData = DB::table($tableName)->pluck('message','type')->toArray();
                $examplesData[] = $tableData;
            }

            $data['implementation']['example2'] = $examplesData;
            
            $data['implementation']['customer_review'] = DB::table('tbl_example_customer_review')->pluck('message','type')->toArray();

            $tables = ['tbl_example_4', 'tbl_example_5', 'tbl_example_6', 'tbl_example_7','tbl_example_9','tbl_example_10','tbl_example_11','tbl_example_12','tbl_example_13','tbl_example_14','tbl_example_15','tbl_example_17','tbl_example_18','tbl_example_20'];

            $examplesData = [];

            foreach ($tables as $tableName) {
                $tableData = DB::table($tableName)->pluck('message','type')->toArray();
                $examplesData[] = $tableData;
            }

            $data['implementation']['example3'] = $examplesData;
            
            // $data['implementation']['example4'] = DB::table('tbl_example_3')->pluck('message','type')->toArray();
            $data['implementation']['example4'] = (object)[
                'title' => DB::table('tbl_example_3')->where('type', 'title')->pluck('message')->first(),
                'subtitle' => DB::table('tbl_example_3')->where('type', 'subtitle')->pluck('message')->first(),
                'image' => DB::table('tbl_example_3')->where('type', 'image')->pluck('message')->first(),
                'para_1' => DB::table('tbl_example_3')->where('type', 'para_1')->pluck('message')->first(),
                'para_2' => DB::table('tbl_example_3')->where('type', 'para_2')->pluck('message')->first(),
                'quote_name' => DB::table('tbl_example_3')->where('type', 'quote_name')->pluck('message')->first(),
                'customer_review' => (object)[
                    'customer_image' => DB::table('tbl_example_3')->where('type', 'customer_image')->pluck('message')->first(),
                    'customer_quote' => DB::table('tbl_example_3')->where('type', 'customer_quote')->pluck('message')->first(),
                    'customer_description' => DB::table('tbl_example_3')->where('type', 'customer_description')->pluck('message')->first(),
                    'review_buttonText' => DB::table('tbl_example_3')->where('type', 'review_buttonText')->pluck('message')->first(),
                ],
            ];
            
            $data['implementation']['example5'] = DB::table('tbl_example_16')->pluck('message','type')->toArray();
            
            $data['implementation']['example6'] = DB::table('tbl_example_21')->pluck('message','type')->toArray();
            
            $data['implementation']['sliderSection'] = DB::table('tbl_slider')->pluck('message', 'type')->map(function ($message) {
                return json_decode($message, true);
            })->toArray();
            

            return response()->json([
                'status' => true,
                'data' => $data,
            ]);
        }catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => [],
            ]);
        }
    }
    
    public function sales(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|alpha',
            'email' => 'required|email',
            'phone' => 'max:13|min:10',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        try {

            $user = new sales();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->message = $request->message;
            $user->phone = $request->phone;
            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'data stored successfully',
            ]);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong',
            ]);
    
        }
    }
    
    public function examZemoScreen(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'formZeroInputValue' => '',
            'formOneInputValue' => '',
            'formTwoInputValue' => '',
            'formThreeInputValue' => '',
            'formFourInputValue' => '',
            'selectedRangeValue' => '',
            'selectedOptionValue' => '',
            'selectedRangeValueTwo' => '',
            'formFiveInputValue' => '',
            'selectedOptionValueTwo' => '',
            'formSixInputValue' => '',
            'formSevenInputValue' => '',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        
        try{
            $user = new PostExamination();
            $user->formZeroInputValue = $request->formZeroInputValue;
            
            $user->formOneInputValue = $request->formOneInputValue;
            $user->formTwoInputValue = $request->formTwoInputValue;
            $user->formThreeInputValue = $request->formThreeInputValue;
            $user->formFourInputValue = $request->formFourInputValue;
            $user->selectedRangeValue = $request->selectedRangeValue;
            $user->selectedOptionValue = $request->selectedOptionValue;
            $user->selectedRangeValueTwo = $request->selectedRangeValueTwo;
            $user->formFiveInputValue = $request->formFiveInputValue;
            $user->selectedOptionValueTwo = $request->selectedOptionValueTwo;
            $user->formSixInputValue = $request->formSixInputValue;
            $user->formSevenInputValue = $request->formSevenInputValue;
            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'data stored successfully',
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong',
            ]);
        }
    }
}
