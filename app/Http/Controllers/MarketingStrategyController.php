<?php

namespace App\Http\Controllers;

use App\Models\MainContent1;
use App\Models\MainContent2;
use App\Models\MainNumber;
use App\Models\MarketingFAQcard;
use App\Models\MarketingFAQcontent;
use App\Models\MarketingHero;
use App\Models\MarketingPriceCard;
use App\Models\MarketingPriceTitle;
use App\Models\MarketingStrategyAction;
use App\Models\ResultCard;
use App\Models\TestimonialModel;
use App\Models\ResultMax;
use App\Models\ResultTableTitle;
use App\Models\StrategyFeature;
use App\Models\StrategyModel;
use Illuminate\Http\Request;
use App\Models\MarketingAnalysisCard1;
use App\Models\MarketingAnalysisCard2;
use App\Models\MarketingAnalysisCard3;
use App\Models\MarketingAnalysisCard4;
use App\Models\MarketingBranding;
use App\Models\MarketingImageAdvantage;
use App\Models\MarketingQuoteOne;
use App\Models\MarketingQuoteTwo;
use App\Models\MarketingWhatReceive;

class MarketingStrategyController extends Controller
{
    // Hero Section (Marketing Strategy)
    public function MSheroIndex()
    {
        $heroSection = MarketingHero::orderBy('id', 'desc')->get();
        return view('marketing-strategy.hero-section.index', compact('heroSection'));
    }

    public function MSheroCreate()
    {
        $details = MarketingHero::get();
        return view('marketing-strategy.hero-section.create', compact('details'));
    }

    public function MSheroStore(Request $request)
    {
        $herosectionSetting = [
            'title',
            'subtitle',
            'image_url',
        ];

        foreach ($herosectionSetting as $herosection) {
            $value = $request->input($herosection);
            $existingSetting = MarketingHero::where('type', $herosection)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingHero::create(['type' => $herosection, 'message' => $value]);
            }
        }
        return redirect()->route('MShero.index')->with('success', 'Marketing Hero Section updated successfully');
    }

    public function MSheroStatus($id)
    {
        $user = MarketingHero::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Main Content 1 (Marketing Strategy)
    public function Mcontent1Index()
    {
        $mainContent1 = MainContent1::orderBy('id', 'desc')->get();
        return view('marketing-strategy.main-content-1.index', compact('mainContent1'));
    }

    public function Mcontent1Create()
    {
        $details = MainContent1::get();
        return view('marketing-strategy.main-content-1.create', compact('details'));
    }

    public function Mcontent1Store(Request $request)
    {
        $mainContent1Setting = [
            'description',
        ];

        foreach ($mainContent1Setting as $mainContent1) {
            $value = $request->input($mainContent1);
            $existingSetting = MainContent1::where('type', $mainContent1)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MainContent1::create(['type' => $mainContent1, 'message' => $value]);
            }
        }
        return redirect()->route('main-content-1.index')->with('success', 'Main Content 1 updated successfully');
    }

    public function Mcontent1Status($id)
    {
        $user = MainContent1::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Main Number (Marketing Strategy)
    public function mainNumIndex()
    {
        $mainNum = MainNumber::orderBy('id', 'desc')->get();
        return view('marketing-strategy.main-number.index', compact('mainNum'));
    }

    public function mainNumCreate()
    {
        $details = MainNumber::get();
        return view('marketing-strategy.main-number.create', compact('details'));
    }

    public function mainNumStore(Request $request)
    {
        $mainNumSetting = [
            'percentage_image_1',
            'info_1',
            'percentage_image_2',
            'info_2',
            'asterisk_text',
        ];

        foreach ($mainNumSetting as $mainNum) {
            $value = $request->input($mainNum);
            $existingSetting = MainNumber::where('type', $mainNum)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MainNumber::create(['type' => $mainNum, 'message' => $value]);
            }
        }
        return redirect()->route('main-num.index')->with('success', 'Main Number updated successfully');
    }

    public function mainNumStatus($id)
    {
        $user = MainNumber::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Main Content Two
    public function maincontent2Index()
    {
        $mainContent2 = MainContent2::orderBy('id', 'desc')->get();
        return view('marketing-strategy.main-content-2.index', compact('mainContent2'));
    }

    public function maincontent2Create()
    {
        $details = MainContent2::get();
        return view('marketing-strategy.main-content-2.create', compact('details'));
    }

    public function maincontent2Store(Request $request)
    {
        $maincontent2Setting = [
            'paragraph_1',
            'paragraph_2',
            'paragraph_3',
            'paragraph_4',
            'paragraph_5',
            'image_url'
        ];

        foreach ($maincontent2Setting as $maincontent2) {
            $value = $request->input($maincontent2);
            $existingSetting = MainContent2::where('type', $maincontent2)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MainContent2::create(['type' => $maincontent2, 'message' => $value]);
            }
        }
        return redirect()->route('main-content-2.index')->with('success', 'Main Content 2 updated successfully');
    }

    public function maincontent2Status($id)
    {
        $user = MainContent2::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Result Table Title
    public function RTtitleIndex()
    {
        $resultTable = ResultTableTitle::orderBy('id', 'desc')->get();
        return view('marketing-strategy.result-table.index', compact('resultTable'));
    }

    public function RTtitleCreate()
    {
        $details = ResultTableTitle::get();
        return view('marketing-strategy.result-table.create', compact('details'));
    }

    public function RTtitleStore(Request $request)
    {
        $resultTableSetting = [
            'title',
        ];

        foreach ($resultTableSetting as $resultTable) {
            $value = $request->input($resultTable);
            $existingSetting = ResultTableTitle::where('type', $resultTable)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                ResultTableTitle::create(['type' => $resultTable, 'message' => $value]);
            }
        }
        return redirect()->route('result-table-title.index')->with('success', 'Result Table Title updated successfully');
    }

    public function RTtitleStatus($id)
    {
        $user = ResultTableTitle::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Result Table Card
    public function RTcardIndex()
    {
        $resultCard = ResultCard::orderBy('id', 'asc')->get();
        return view('marketing-strategy.result-card.index', compact('resultCard'));
    }

    public function RTcardCreate()
    {
        return view('marketing-strategy.result-card.create');
    }
    public function RTcardEdit(Request $request)
    {
        $resultCard = ResultCard::find($request->id);
        return view('marketing-strategy.result-card.edit', compact('resultCard'));
    }

    public function RTcardStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_url' => 'required'
        ]);

        try {

            if (isset($request->update_id)) {
                $resultCard = ResultCard::find($request->update_id);
            } else {

                $resultCard = new ResultCard;
            }
            $resultCard->title = $request->title;
            $resultCard->image_url = $request->image_url;
            $resultCard->save();

            return redirect()->route('result-table-card.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('result-table-card.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    // Strategy Section
    public function strategyIndex()
    {
        $strategySection = StrategyModel::orderBy('id', 'desc')->get();
        return view('marketing-strategy.strategy-title.index', compact('strategySection'));
    }

    public function strategyCreate()
    {
        $details = StrategyModel::get();
        return view('marketing-strategy.strategy-title.create', compact('details'));
    }

    public function strategyStore(Request $request)
    {
        $strategySetting = [
            'title',
        ];

        foreach ($strategySetting as $strategy) {
            $value = $request->input($strategy);
            $existingSetting = StrategyModel::where('type', $strategy)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                StrategyModel::create(['type' => $strategy, 'message' => $value]);
            }
        }
        return redirect()->route('strategy.index')->with('success', 'Strategy updated successfully');
    }

    public function strategyStatus($id)
    {
        $user = StrategyModel::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Strategy Feature List
    public function strategyFeatureIndex()
    {
        $strategyFeature = StrategyFeature::orderBy('id', 'asc')->get();
        return view('marketing-strategy.strategy-feature.index', compact('strategyFeature'));
    }

    public function strategyFeatureCreate()
    {
        return view('marketing-strategy.strategy-feature.create');
    }
    public function strategyFeatureEdit(Request $request)
    {
        $strategyFeature = StrategyFeature::find($request->id);
        return view('marketing-strategy.strategy-feature.edit', compact('strategyFeature'));
    }

    public function strategyFeatureStore(Request $request)
    {
        $request->validate([
            'item_number',
            'image_url',
            'title',
            'paragraph_1',
            'paragraph_2'
        ]);

        try {

            if (isset($request->update_id)) {
                $strategyFeature = StrategyFeature::find($request->update_id);
            } else {

                $strategyFeature = new StrategyFeature;
            }
            $strategyFeature->title = $request->title;
            $strategyFeature->image_url = $request->image_url;
            $strategyFeature->item_number = $request->item_number;
            $strategyFeature->paragraph_1 = $request->paragraph_1;
            $strategyFeature->paragraph_2 = $request->paragraph_2;
            $strategyFeature->save();

            return redirect()->route('sFeature.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('sFeature.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    
    // Testimonial Section
    public function testimonialIndex()
    {
        $testimonial = TestimonialModel::orderBy('id', 'desc')->get();
        return view('marketing-strategy.testimonial.index', compact('testimonial'));
    }

    public function testimonialCreate()
    {
        $details = TestimonialModel::get();
        return view('marketing-strategy.testimonial.create', compact('details'));
    }

    public function testimonialStore(Request $request)
    {
        $testimonialSetting = [
            'image_url',
            'opinion',
            'button_text'
        ];

        foreach ($testimonialSetting as $testimonial) {
            $value = $request->input($testimonial);
            $existingSetting = TestimonialModel::where('type', $testimonial)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                TestimonialModel::create(['type' => $testimonial, 'message' => $value]);
            }
        }
        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successfully');
    }

    public function testimonialStatus($id)
    {
        $user = TestimonialModel::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
    
     // Result Max Section
    public function resultmaxIndex()
    {
        $resultmax = ResultMax::orderBy('id', 'desc')->get();
        return view('marketing-strategy.result-max.index', compact('resultmax'));
    }

    public function resultmaxCreate()
    {
        $details = ResultMax::get();
        return view('marketing-strategy.result-max.create', compact('details'));
    }

    public function resultmaxStore(Request $request)
    {
        $resultmaxSetting = [
            'title',
            'subtitle',
            'description'
        ];

        foreach ($resultmaxSetting as $resultmax) {
            $value = $request->input($resultmax);
            $existingSetting = ResultMax::where('type', $resultmax)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                ResultMax::create(['type' => $resultmax, 'message' => $value]);
            }
        }
        return redirect()->route('result-max.index')->with('success', 'Result Max updated successfully');
    }

    public function resultmaxStatus($id)
    {
        $user = ResultMax::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Price Section
    public function PriceIndex()
    {
        $Price = MarketingPriceTitle::orderBy('id', 'desc')->get();
        return view('marketing-strategy.price-section.index', compact('Price'));
    }

    public function PriceCreate()
    {
        $details = MarketingPriceTitle::get();
        return view('marketing-strategy.price-section.create', compact('details'));
    }

    public function PriceStore(Request $request)
    {
        $PriceSetting = [
            'title'
        ];

        foreach ($PriceSetting as $Price) {
            $value = $request->input($Price);
            $existingSetting = MarketingPriceTitle::where('type', $Price)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingPriceTitle::create(['type' => $Price, 'message' => $value]);
            }
        }
        return redirect()->route('price-section.index')->with('success', 'Price Section Title updated successfully');
    }

    public function PriceStatus($id)
    {
        $user = MarketingPriceTitle::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Price Card Section
    public function priceCardIndex()
    {
        $priceCard = MarketingPriceCard::orderBy('id', 'asc')->get();
        return view('marketing-strategy.price-section.price-card.index', compact('priceCard'));
    }

    public function priceCardCreate()
    {
        return view('marketing-strategy.price-section.price-card.create');
    }
    public function priceCardEdit(Request $request)
    {
        $priceCard = MarketingPriceCard::find($request->id);
        return view('marketing-strategy.price-section.price-card.edit', compact('priceCard'));
    }

    public function priceCardStore(Request $request)
    {
        $request->validate([
            'title',
            'subtitle_1',
            'description_1',
            'subtitle_2',
            'description_2',
            'bottom_text',
            'button_text',
            'background_text'
        ]);

        try {

            if (isset($request->update_id)) {
                $priceCard = MarketingPriceCard::find($request->update_id);
            } else {

                $priceCard = new MarketingPriceCard;
            }
            $priceCard->title = $request->title;
            $priceCard->subtitle_1 = $request->subtitle_1;
            $priceCard->description_1 = $request->description_1;
            $priceCard->subtitle_2 = $request->subtitle_2;
            $priceCard->description_2 = $request->description_2;
            $priceCard->bottom_text = $request->bottom_text;
            $priceCard->button_text = $request->button_text;
            $priceCard->background_text = $request->background_text;
            $priceCard->save();

            return redirect()->route('price-card.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('price-card.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    // Strategy Action Section
    public function strategyActionIndex()
    {
        $strategyAction = MarketingStrategyAction::orderBy('id', 'desc')->get();
        return view('marketing-strategy.strategy-action.index', compact('strategyAction'));
    }

    public function strategyActionCreate()
    {
        $details = MarketingStrategyAction::get();
        return view('marketing-strategy.strategy-action.create', compact('details'));
    }

    public function strategyActionStore(Request $request)
    {
        $strategyActionSetting = [
            'title',
            'description_1',
            'description_2',
            'image_url'
        ];

        foreach ($strategyActionSetting as $strategyAction) {
            $value = $request->input($strategyAction);
            $existingSetting = MarketingStrategyAction::where('type', $strategyAction)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingStrategyAction::create(['type' => $strategyAction, 'message' => $value]);
            }
        }
        return redirect()->route('Mktstrategy-action.index')->with('success', 'Strategy Action updated successfully');
    }

    public function strategyActionStatus($id)
    {
        $user = MarketingStrategyAction::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // FAQ Section
    public function faqIndex()
    {
        $FAQcontent = MarketingFAQcontent::orderBy('id', 'desc')->get();
        return view('marketing-strategy.faq-section.index', compact('FAQcontent'));
    }

    public function faqCreate()
    {
        $details = MarketingFAQcontent::get();
        return view('marketing-strategy.faq-section.create', compact('details'));
    }

    public function faqStore(Request $request)
    {
        $FAQcontentSetting = [
            'title',
            'image_url'
        ];

        foreach ($FAQcontentSetting as $FAQcontent) {
            $value = $request->input($FAQcontent);
            $existingSetting = MarketingFAQcontent::where('type', $FAQcontent)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingFAQcontent::create(['type' => $FAQcontent, 'message' => $value]);
            }
        }
        return redirect()->route('Mkt-faq-content.index')->with('success', 'FAQ Content updated successfully');
    }

    public function faqStatus($id)
    {
        $user = MarketingFAQcontent::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // FAQ Card
    public function faqCardIndex()
    {
        $FAQcard = MarketingFAQcard::orderBy('id', 'asc')->get();
        return view('marketing-strategy.faq-section.faq-card.index', compact('FAQcard'));
    }

    public function faqCardCreate()
    {
        return view('marketing-strategy.faq-section.faq-card.create');
    }
    public function faqCardEdit(Request $request)
    {
        $FAQcard = MarketingFAQcard::find($request->id);
        return view('marketing-strategy.faq-section.faq-card.edit', compact('FAQcard'));
    }

    public function faqCardStore(Request $request)
    {
        $request->validate([
            'question',
            'answer',
            'image_url'
        ]);
        try {

            if (isset($request->update_id)) {
                $FAQcard = MarketingFAQcard::find($request->update_id);
            } else {

                $FAQcard = new MarketingFAQcard;
            }
            $FAQcard->question = $request->question;
            $FAQcard->answer = $request->answer;
            $FAQcard->image_url = $request->image_url;
            $FAQcard->save();

            return redirect()->route('mktfaq-card.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('mktfaq-card.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    
    // What we receive section
    public function whatReceiveIndex()
    {
        $whatReceive = MarketingWhatReceive::orderBy('id', 'asc')->get();
        return view('marketing-strategy.what-receive.index', compact('whatReceive'));
    }

    public function whatReceiveCreate()
    {
        $details = MarketingWhatReceive::get();
        return view('marketing-strategy.what-receive.create', compact('details'));
    }

    public function whatReceiveStore(Request $request)
    {
        $whatReceiveSetting = [
            'title',
            'description_1',
            'subtitle',
            'description_2',
            'info_1',
            'info_2',
            'info_3',
            'info_4',
            'info_5',
            'info_6',
            'image_url_1',
            'sub_info',
            'description_3',
            'description_4',
            'button_text',
            'description_5',
            'description_6',
            'description_7',
            'description_8',
            'description_9',
            'image_url_2',
        ];

        foreach ($whatReceiveSetting as $whatReceive) {
            $value = $request->input($whatReceive);
            $existingSetting = MarketingWhatReceive::where('type', $whatReceive)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingWhatReceive::create(['type' => $whatReceive, 'message' => $value]);
            }
        }
        return redirect()->route('what-receive.index')->with('success', 'What Receive updated successfully');
    }

    public function whatReceiveStatus($id)
    {
        $user = MarketingWhatReceive::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    //Image Advantage
    public function imageAdvantageIndex()
    {
        $imageAdvantage = MarketingImageAdvantage::orderBy('id', 'desc')->get();
        return view('marketing-strategy.image-advantage.index', compact('imageAdvantage'));
    }

    public function imageAdvantageCreate()
    {
        $details = MarketingImageAdvantage::get();
        return view('marketing-strategy.image-advantage.create', compact('details'));
    }

    public function imageAdvantageStore(Request $request)
    {
        $imageAdvantageSetting = [
            'title',
            'description',
            'left_info_1',
            'left_info_2',
            'left_info_3',
            'left_info_4',
            'left_info_5',
            'right_info_1',
            'right_info_2',
            'right_info_3',
            'right_info_4',
            'right_info_5',
            'button_text',
            'paragraph_1',
            'paragraph_2'
        ];

        foreach ($imageAdvantageSetting as $imageAdvantage) {
            $value = $request->input($imageAdvantage);
            $existingSetting = MarketingImageAdvantage::where('type', $imageAdvantage)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingImageAdvantage::create(['type' => $imageAdvantage, 'message' => $value]);
            }
        }
        return redirect()->route('image-advantage.index')->with('success', 'Image Advantage updated successfully');
    }

    public function imageAdvantageStatus($id)
    {
        $user = MarketingImageAdvantage::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Quote One
    public function quoteOneIndex()
    {
        $quoteOne = MarketingQuoteOne::orderBy('id', 'desc')->get();
        return view('marketing-strategy.quote-one.index', compact('quoteOne'));
    }

    public function quoteOneCreate()
    {
        $details = MarketingQuoteOne::get();
        return view('marketing-strategy.quote-one.create', compact('details'));
    }

    public function quoteOneStore(Request $request)
    {
        $quoteOneSetting = [
            'title',
            'description',
            'image',
            'bottom_title'
        ];

        foreach ($quoteOneSetting as $quoteOne) {
            $value = $request->input($quoteOne);
            $existingSetting = MarketingQuoteOne::where('type', $quoteOne)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingQuoteOne::create(['type' => $quoteOne, 'message' => $value]);
            }
        }
        return redirect()->route('quote-one.index')->with('success', 'Quote One updated successfully');
    }

    public function quoteOneStatus($id)
    {
        $user = MarketingQuoteOne::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Branding
    public function brandingIndex()
    {
        $branding = MarketingBranding::orderBy('id', 'desc')->get();
        return view('marketing-strategy.branding.index', compact('branding'));
    }

    public function brandingCreate()
    {
        $details = MarketingBranding::get();
        return view('marketing-strategy.branding.create', compact('details'));
    }

    public function brandingStore(Request $request)
    {
        $brandingSetting = [
            'title',
            'description',
            'image'
        ];

        foreach ($brandingSetting as $branding) {
            $value = $request->input($branding);
            $existingSetting = MarketingBranding::where('type', $branding)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingBranding::create(['type' => $branding, 'message' => $value]);
            }
        }
        return redirect()->route('branding.index')->with('success', 'Branding updated successfully');
    }

    public function brandingStatus($id)
    {
        $user = MarketingBranding::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Quote Two
    public function quoteTwoIndex()
    {
        $quoteTwo = MarketingQuoteTwo::orderBy('id', 'desc')->get();
        return view('marketing-strategy.quote-two.index', compact('quoteTwo'));
    }

    public function quoteTwoCreate()
    {
        $details = MarketingQuoteTwo::get();
        return view('marketing-strategy.quote-two.create', compact('details'));
    }

    public function quoteTwoStore(Request $request)
    {
        $quoteTwoSetting = [
            'title_1',
            'title_2',
            'description_1',
            'description_2',
            'image' 
        ];

        foreach ($quoteTwoSetting as $quoteTwo) {
            $value = $request->input($quoteTwo);
            $existingSetting = MarketingQuoteTwo::where('type', $quoteTwo)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingQuoteTwo::create(['type' => $quoteTwo, 'message' => $value]);
            }
        }
        return redirect()->route('quote-two.index')->with('success', 'Quote Two updated successfully');
    }

    public function quoteTwoStatus($id)
    {
        $user = MarketingQuoteTwo::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Analysis Section

    // Business Analysis 
    public function analysisCard1Index()
    {
        $analysisCard1 = MarketingAnalysisCard1::orderBy('id', 'asc')->get();
        return view('marketing-strategy.analysis-card1.index', compact('analysisCard1'));
    }

    public function analysisCard1Create()
    {
        $details = MarketingAnalysisCard1::get();
        return view('marketing-strategy.analysis-card1.create', compact('details'));
    }

    public function analysisCard1Store(Request $request)
    {
        $analysisCard1Setting = [
            'title',
            'subtitle',
            'left_points_1',
            'left_points_2',
            'left_points_3',
            'right_points_1',
            'right_points_2',
            'right_points_3',
            'main_image',
            'button_text',
            'description_1',
            'description_2',
            'image',
            'button_points_1',
            'button_points_2',
            'button_points_3',
            'card_1_title',
            'card_1_subtitle',
            'card_2_title',
            'card_2_subtitle',
            'card_3_title',
            'card_3_subtitle',
            'card_4_title',
            'card_4_subtitle',
        ];

        foreach ($analysisCard1Setting as $analysisCard1) {
            $value = $request->input($analysisCard1);
            $existingSetting = MarketingAnalysisCard1::where('type', $analysisCard1)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingAnalysisCard1::create(['type' => $analysisCard1, 'message' => $value]);
            }
        }
        return redirect()->route('analysis-card1.index')->with('success', 'Data Updated successfully');
    }

    public function analysisCard1Status($id)
    {
        $user = MarketingAnalysisCard1::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Target Analysis 
    public function analysisCard2Index()
    {
        $analysisCard2 = MarketingAnalysisCard2::orderBy('id', 'asc')->get();
        return view('marketing-strategy.analysis-card2.index', compact('analysisCard2'));
    }

    public function analysisCard2Create()
    {
        $details = MarketingAnalysisCard2::get();
        return view('marketing-strategy.analysis-card2.create', compact('details'));
    }

    public function analysisCard2Store(Request $request)
    {
        $analysisCard2Setting = [
            'title',
            'subtitle',
            'left_points_1',
            'left_points_2',
            'left_points_3',
            'right_points_1',
            'right_points_2',
            'right_points_3',
            'main_image',
            'button_text',
            'description_1',
            'description_2',
            'image_1',
            'description_3',
            'image_2',
            'description_4',
        ];

        foreach ($analysisCard2Setting as $analysisCard2) {
            $value = $request->input($analysisCard2);
            $existingSetting = MarketingAnalysisCard2::where('type', $analysisCard2)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingAnalysisCard2::create(['type' => $analysisCard2, 'message' => $value]);
            }
        }
        return redirect()->route('analysis-card2.index')->with('success', 'Data Updated successfully');
    }

    public function analysisCard2Status($id)
    {
        $user = MarketingAnalysisCard2::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Business Analysis 
    public function analysisCard3Index()
    {
        $analysisCard3 = MarketingAnalysisCard3::orderBy('id', 'asc')->get();
        return view('marketing-strategy.analysis-card3.index', compact('analysisCard3'));
    }

    public function analysisCard3Create()
    {
        $details = MarketingAnalysisCard3::get();
        return view('marketing-strategy.analysis-card3.create', compact('details'));
    }

    public function analysisCard3Store(Request $request)
    {
        $analysisCard3Setting = [
            'title',
            'subtitle',
            'left_points_1',
            'left_points_2',
            'left_points_3',
            'right_points_1',
            'right_points_2',
            'right_points_3',
            'main_image',
            'button_text',
            'description_1',
            'description_2',
            'description_3',
            'image',
            'card_1_title',
            'card_1_info',
            'card_1_number',
            'card_2_title',
            'card_2_info',
            'card_2_number',
            'card_3_title',
            'card_3_info',
            'card_3_number',
            
        ];

        foreach ($analysisCard3Setting as $analysisCard3) {
            $value = $request->input($analysisCard3);
            $existingSetting = MarketingAnalysisCard3::where('type', $analysisCard3)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                MarketingAnalysisCard3::create(['type' => $analysisCard3, 'message' => $value]);
            }
        }
        return redirect()->route('analysis-card3.index')->with('success', 'Data Updated successfully');
    }

    public function analysisCard3Status($id)
    {
        $user = MarketingAnalysisCard3::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

     // Scalable Marketing Funnel 
     public function analysisCard4Index()
     {
         $analysisCard4 = MarketingAnalysisCard4::orderBy('id', 'asc')->get();
         return view('marketing-strategy.analysis-card4.index', compact('analysisCard4'));
     }
 
     public function analysisCard4Create()
     {
         $details = MarketingAnalysisCard4::get();
         return view('marketing-strategy.analysis-card4.create', compact('details'));
     }
 
     public function analysisCard4Store(Request $request)
     {
         $analysisCard4Setting = [
             'title',
             'subtitle',
             'left_points_1',
             'left_points_2',
             'left_points_3',
             'right_points_1',
             'right_points_2',
             'right_points_3',
             'main_image',
             'button_text',
             'title_1',
             'description_1',
             'description_2',
             'description_3',
             'title_2',
             'description_4',
             'description_5',
             'image_1',
             'image_2'  
         ];
 
         foreach ($analysisCard4Setting as $analysisCard4) {
             $value = $request->input($analysisCard4);
             $existingSetting = MarketingAnalysisCard4::where('type', $analysisCard4)->first();
 
             if ($existingSetting) {
                 $existingSetting->update(['message' => $value]);
             } else {
                MarketingAnalysisCard4::create(['type' => $analysisCard4, 'message' => $value]);
             }
         }
         return redirect()->route('analysis-card4.index')->with('success', 'Data Updated successfully');
     }
 
     public function analysisCard4Status($id)
     {
         $user = MarketingAnalysisCard4::findOrFail($id);
         if ($user) {
             $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
             $user->save();
 
             return redirect()->back()->with('success', 'Status updated successfully.');
         }
 
         return redirect()->back()->with('error', 'User not found.');
     }
}
