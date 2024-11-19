<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\{ImplementationController,SalesContentController, TeamsController, OpinionSettingsController, UXsettingController, TeamSettingController, GPNProductController,GPNCompanyController,GPNController,LogoAccordionController,FooterPageLinkController,FooterLogoController,NewCompanyProfitSliderController,NewCompanyController,ParkController,RestaurantController,ConstructionController,ZooGardenController,AicoController,DacoController,EnexoController,FreeShopsController,StepByStepController,PdfCopyController,ReceivePointsController,ReceiveController,GalleryImageGroupController,GalleryController,GuaranteeController,ProjektowanieProjectController,OpinionController,GoodBusinessController,ImageGroupController,ProjektowanieLogoController,CustomerRatingController,PercentageCardController,ResearchController,QuesController,FaqController,HowTestWorksController,ExaminationHeroSectionController,ContactSettingController,FeedbackController,AddProjectController, BrandController, factowCardController, factowSettingController, CalculatorSettingController, ClientReviewController, CompanyCardController, CompanyController, HeroSectionController, IWDSectionController, KonsultacjaContoller, PricingOptionController, RatingController,MarketingStrategyController, PriceListSettingController, KreatywnyBrandController, KreatywnyClientReviewController, KreatywnyCompanyController, KreatywnyCompanyCardController, KreatywnyHeroSectionController, KreatywnyIWDSectionController, KreatywnyRatingController, ProfesjonalneBrandController, ProfesjonalneClientReviewController, ProfesjonalneCompanyCardController, ProfesjonalneCompanyController, ProfesjonalneHeroSectionController, ProfesjonalneIWDSectionController, ProfesjonalneRatingController};
use App\Http\Controllers\BusinessNameCreation\{BNCHeroSectionController,BNCAnatomyController,BNCAnatomyGuideController,BNCLaunchEssentialsController,BNCProjectValueController,BNCFAQController,BNCCustomerReviewController,BNCImplementationController,BNCImplementationStartController,BNCCompanyReviewController,BNCProfitSlideController,BNCSpecialReviewController};

use App\Http\Controllers\Example\ExampleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/','/login');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::middleware(['admin'])->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/contact-setting-index' ,[ContactSettingController::class, 'contactIndex'])->name('contact.index');
    Route::get('/contact-setting-create' ,[ContactSettingController::class, 'contactCreate'])->name('contact.create');
    Route::post('/contact-setting-store' ,[ContactSettingController::class, 'contactStore'])->name('contact.store');
    Route::put('/contact-status/{id}',[ContactSettingController::class , 'contactStatus'])->name('status.contact');

    Route::get('/feedback.index' ,[FeedbackController::class, 'feedbackIndex'])->name('feedback.index');
    Route::get('/feedback-add', [FeedbackController::class ,'AddFeedback'])->name('feedback.add');
    Route::get('feedback-edit', [FeedbackController::class ,'editFeedback'])->name('feedback.edit');
    Route::post('/store-Feedback', [FeedbackController::class ,'StoreFeedback'])->name('feedback.store');
    
    Route::get('/project-index' , [AddProjectController::class ,'projectIndex'])->name('project.index');
    Route::get('/project-create', [AddProjectController::class ,'projectCreate'])->name('project.create');
    Route::post('/project-store', [AddProjectController::class , 'projectStore'])->name('project.store');
    Route::get('/project-edit', [AddProjectController::class , 'projectEdit'])->name('project.edit');
    Route::put('/project-update', [AddProjectController::class , 'projectUpdate'])->name('project.update');
    Route::put('/project-status/{id}',[AddProjectController::class , 'projectStatus'])->name('status.project');

    Route::get('/factow-index', [factowSettingController::class, 'factowIndex'])->name('factow.index');
    Route::get('/factow-create', [factowSettingController::class, 'factowCreate'])->name('factow.create');
    Route::post('/factow-store', [factowSettingController::class, 'factowStore'])->name('factow.store');
    Route::put('/factow-status/{id}', [factowSettingController::class, 'factowStatus'])->name('status.factow');

    Route::get('/factowcard-index', [factowCardController::class, 'factowcardIndex'])->name('factowcard.index');
    Route::get('/factowcard-create', [factowCardController::class, 'factowcardCreate'])->name('factowcard.create');
    Route::post('/factowcard-store', [factowCardController::class, 'factowcardStore'])->name('factowcard.store');
    Route::get('/factowcard-edit', [factowCardController::class, 'factowcardEdit'])->name('factowcard.edit');
    Route::get('/factowcard-delete/{id}', [FactowCardController::class, 'factowcardDelete'])->name('factowcard.delete');

    Route::get('/calculator-setting-index' ,[CalculatorSettingController::class, 'calculatorIndex'])->name('calculator.index');
    Route::get('/calculator-setting-create' ,[CalculatorSettingController::class, 'calculatorCreate'])->name('calculator.create');
    Route::post('/calculator-setting-store' ,[CalculatorSettingController::class, 'calculatorStore'])->name('calculator.store');
    Route::put('/calculator-status/{id}',[CalculatorSettingController::class , 'calculatorStatus'])->name('status.calculator');

    Route::get('/homeherosection-index', [HeroSectionController::class, 'herosectionIndex'])->name('homeherosection.index');
    Route::get('/homeherosection-create', [HeroSectionController::class, 'herosectionCreate'])->name('homeherosection.create');
    Route::post('/homeherosection-store', [HeroSectionController::class, 'herosectionStore'])->name('homeherosection.store');
    Route::get('/homeherosection-edit', [HeroSectionController::class, 'herosectionEdit'])->name('homeherosection.edit');

    Route::get('/brandsection-index', [BrandController::class, 'brandIndex'])->name('brandsection.index');
    Route::get('/brandsection-create', [BrandController::class, 'brandCreate'])->name('brandsection.create');
    Route::post('/brandsection-store', [BrandController::class, 'brandStore'])->name('brandsection.store');
    Route::get('/brandsection-edit', [BrandController::class, 'brandEdit'])->name('brandsection.edit');

    Route::get('/company-index', [CompanyController::class, 'companyIndex'])->name('company.index');
    Route::get('/company-create', [CompanyController::class, 'companyCreate'])->name('company.create');
    Route::post('/company-store', [CompanyController::class, 'companyStore'])->name('company.store');
    Route::put('/company-status/{id}', [CompanyController::class, 'companyStatus'])->name('status.company');

    Route::get('/companycard-index', [CompanyCardController::class, 'companycardIndex'])->name('companycard.index');
    Route::get('/companycard-create', [CompanyCardController::class, 'companycardCreate'])->name('companycard.create');
    Route::post('/companycard-store', [CompanyCardController::class, 'companycardStore'])->name('companycard.store');
    Route::get('/companycard-edit', [CompanyCardController::class, 'companycardEdit'])->name('companycard.edit');
    Route::get('/companycard-delete/{id}', [CompanyCardController::class, 'companycardDelete'])->name('companycard.delete');

    Route::get('/rating-index', [RatingController::class, 'ratingIndex'])->name('rating.index');
    Route::get('/rating-create', [RatingController::class, 'ratingCreate'])->name('rating.create');
    Route::post('/rating-store', [RatingController::class, 'ratingStore'])->name('rating.store');
    Route::put('/rating-status/{id}', [RatingController::class, 'ratingStatus'])->name('status.rating');

    Route::get('/clientrating-index', [ClientReviewController::class, 'clientratingIndex'])->name('clientrating.index');
    Route::get('/clientrating-create', [ClientReviewController::class, 'clientratingCreate'])->name('clientrating.create');
    Route::post('/clientrating-store', [ClientReviewController::class, 'clientratingStore'])->name('clientrating.store');
    Route::put('/clientrating-status/{id}', [ClientReviewController::class, 'clientratingStatus'])->name('status.clientrating');

    Route::get('/summaryfeedback-index', [ClientReviewController::class, 'feedbacksummaryIndex'])->name('summaryfeedback.index');
    Route::get('/summaryfeedback-create', [ClientReviewController::class, 'feedbacksummaryCreate'])->name('summaryfeedback.create');
    Route::post('/summaryfeedback-store', [ClientReviewController::class, 'feedbacksummaryStore'])->name('summaryfeedback.store');
    Route::put('/summaryfeedback-status/{id}', [ClientReviewController::class, 'feedbacksummaryStatus'])->name('status.summaryfeedback');

    Route::get('/clientfeedback-index', [ClientReviewController::class, 'clientfeedbackIndex'])->name('clientfeedback.index');
    Route::get('/clientfeedback-create', [ClientReviewController::class, 'clientfeedbackCreate'])->name('clientfeedback.create');
    Route::post('/clientfeedback-store', [ClientReviewController::class, 'clientfeedbackStore'])->name('clientfeedback.store');
    Route::get('/clientfeedback-edit', [ClientReviewController::class, 'clientfeedbackEdit'])->name('clientfeedback.edit');
    Route::get('/clientfeedback-delete/{id}', [ClientReviewController::class, 'clientfeedbackDelete'])->name('clientfeedback.delete');

    Route::get('/sliderimages-index', [ClientReviewController::class, 'sliderimagesIndex'])->name('sliderimages.index');
    Route::get('/sliderimages-create', [ClientReviewController::class, 'sliderimagesCreate'])->name('sliderimages.create');
    Route::post('/sliderimages-store', [ClientReviewController::class, 'sliderimagesStore'])->name('sliderimages.store');
    Route::put('/sliderimages-status/{id}', [ClientReviewController::class, 'sliderimagesStatus'])->name('status.sliderimages');


   Route::get('/homesection1-index', [IWDSectionController::class, 'section1Index'])->name('homesection1.index');
    Route::get('/homesection1-create', [IWDSectionController::class, 'section1Create'])->name('homesection1.create');
    Route::post('/homesection1-store', [IWDSectionController::class, 'section1Store'])->name('homesection1.store');
    Route::put('/homesection-status/{id}', [IWDSectionController::class, 'sectionStatus'])->name('status.homesection1');

    Route::get('/homesection2-index', [IWDSectionController::class, 'section2Index'])->name('homesection2.index');
    Route::get('/homesection2-create', [IWDSectionController::class, 'section2Create'])->name('homesection2.create');
    Route::post('/homesection2-store', [IWDSectionController::class, 'section2Store'])->name('homesection2.store');
    Route::put('/homesection2-status/{id}', [IWDSectionController::class, 'section2Status'])->name('status.homesection2');

    Route::get('/homesection3-index', [IWDSectionController::class, 'section3Index'])->name('homesection3.index');
    Route::get('/homesection3-create', [IWDSectionController::class, 'section3Create'])->name('homesection3.create');
    Route::post('/homesection3-store', [IWDSectionController::class, 'section3Store'])->name('homesection3.store');
    Route::put('/homesection3-status/{id}', [IWDSectionController::class, 'section3Status'])->name('status.homesection3');

    Route::get('/homesection4-index', [IWDSectionController::class, 'section4Index'])->name('homesection4.index');
    Route::get('/homesection4-create', [IWDSectionController::class, 'section4Create'])->name('homesection4.create');
    Route::post('/homesection4-store', [IWDSectionController::class, 'section4Store'])->name('homesection4.store');
    Route::put('/homesection4-status/{id}', [IWDSectionController::class, 'section4Status'])->name('status.homesection4');

    Route::get('/homesection5-index', [IWDSectionController::class, 'section5Index'])->name('homesection5.index');
    Route::get('/homesection5-create', [IWDSectionController::class, 'section5Create'])->name('homesection5.create');
    Route::post('/homesection5-store', [IWDSectionController::class, 'section5Store'])->name('homesection5.store');
    Route::put('/homesection5-status/{id}', [IWDSectionController::class, 'section5Status'])->name('status.homesection5');

    Route::get('/homesection6-index', [IWDSectionController::class, 'section6Index'])->name('homesection6.index');
    Route::get('/homesection6-create', [IWDSectionController::class, 'section6Create'])->name('homesection6.create');
    Route::post('/homesection6-store', [IWDSectionController::class, 'section6Store'])->name('homesection6.store');
    Route::put('/homesection6-status/{id}', [IWDSectionController::class, 'section6Status'])->name('status.homesection6');

    Route::get('/homesection7-index', [IWDSectionController::class, 'section7Index'])->name('homesection7.index');
    Route::get('/homesection7-create', [IWDSectionController::class, 'section7Create'])->name('homesection7.create');
    Route::post('/homesection7-store', [IWDSectionController::class, 'section7Store'])->name('homesection7.store');
    Route::put('/homesection7-status/{id}', [IWDSectionController::class, 'section7Status'])->name('status.homesection7');

    Route::get('/whyus-index', [KonsultacjaContoller::class, 'whyusIndex'])->name('whyus.index');
    Route::get('/whyus-create', [KonsultacjaContoller::class, 'whyusCreate'])->name('whyus.create');
    Route::post('/whyus-store', [KonsultacjaContoller::class, 'whyusStore'])->name('whyus.store');
    Route::put('/whyus-status/{id}', [KonsultacjaContoller::class, 'whyusStatus'])->name('status.whyus');

    Route::get('/customerreview-index', [KonsultacjaContoller::class, 'customerreviewIndex'])->name('customerreview.index');
    Route::get('/customerreview-create', [KonsultacjaContoller::class, 'customerreviewCreate'])->name('customerreview.create');
    Route::post('/customerreview-store', [KonsultacjaContoller::class, 'customerreviewStore'])->name('customerreview.store');
    Route::put('/customerreview-status/{id}', [KonsultacjaContoller::class, 'customerreviewStatus'])->name('status.customerreview');

    Route::get('/whattoexpect-index', [KonsultacjaContoller::class, 'whattoexpectIndex'])->name('whattoexpect.index');
    Route::get('/whattoexpect-create', [KonsultacjaContoller::class, 'whattoexpectCreate'])->name('whattoexpect.create');
    Route::post('/whattoexpect-store', [KonsultacjaContoller::class, 'whattoexpectStore'])->name('whattoexpect.store');
    Route::put('/whattoexpect-status/{id}', [KonsultacjaContoller::class, 'whattoexpectStatus'])->name('status.whattoexpect');

    Route::get('/selected-index', [KonsultacjaContoller::class, 'selectedIndex'])->name('selected.index');
    Route::get('/selected-create', [KonsultacjaContoller::class, 'selectedCreate'])->name('selected.create');
    Route::post('/selected-store', [KonsultacjaContoller::class, 'selectedStore'])->name('selected.store');
    Route::put('/selected-status/{id}', [KonsultacjaContoller::class, 'selectedStatus'])->name('status.selected');

    Route::get('/konsultacja-index', [KonsultacjaContoller::class, 'konsultacjaIndex'])->name('konsultacja.index');
    Route::get('/konsultacja-create', [KonsultacjaContoller::class, 'konsultacjaCreate'])->name('konsultacja.create');
    Route::post('/konsultacja-store', [KonsultacjaContoller::class, 'konsultacjaStore'])->name('konsultacja.store');
    Route::get('/konsultacja-edit', [KonsultacjaContoller::class, 'konsultacjaEdit'])->name('konsultacja.edit');
    Route::get('/konsultacja-delete/{id}', [KonsultacjaContoller::class, 'konsultacjaDelete'])->name('konsultacja.delete');
    
    Route::get('/fo1-options-index', [KonsultacjaContoller::class, 'FO1optionIndex'])->name('fo1-options.index');
    Route::get('/fo1-options-create', [KonsultacjaContoller::class, 'FO1optionCreate'])->name('fo1-options.create');
    Route::post('/fo1-options-store', [KonsultacjaContoller::class, 'FO1optionStore'])->name('fo1-options.store');
    Route::get('/fo1-options-edit', [KonsultacjaContoller::class, 'FO1optionEdit'])->name('fo1-options.edit');
    Route::get('/fo1-options-delete/{id}', [KonsultacjaContoller::class, 'FO1optionDelete'])->name('fo1-options.delete');

    Route::get('/fo2-options-index', [KonsultacjaContoller::class, 'FO1option2Index'])->name('fo2-options.index');
    Route::get('/fo2-options-create', [KonsultacjaContoller::class, 'FO1option2Create'])->name('fo2-options.create');
    Route::post('/fo2-options-store', [KonsultacjaContoller::class, 'FO1option2Store'])->name('fo2-options.store');
    Route::get('/fo2-options-edit', [KonsultacjaContoller::class, 'FO1option2Edit'])->name('fo2-options.edit');
    Route::get('/fo2-options-delete/{id}', [KonsultacjaContoller::class, 'FO1option2Delete'])->name('fo2-options.delete');
    
    Route::get('/PO-index', [KonsultacjaContoller::class, 'POIndex'])->name('PO.index');
    Route::get('/PO-create', [KonsultacjaContoller::class, 'POCreate'])->name('PO.create');
    Route::post('/PO-store', [KonsultacjaContoller::class, 'POStore'])->name('PO.store');
    Route::put('/PO-status/{id}', [KonsultacjaContoller::class, 'POStatus'])->name('status.PO');
    
    // All form's Contents --->>>>
    Route::get('/formContents-index', [KonsultacjaContoller::class, 'formContentsIndex'])->name('formContents.index');
    Route::get('/formContents-create', [KonsultacjaContoller::class, 'formContentsCreate'])->name('formContents.create');
    Route::post('/formContents-store', [KonsultacjaContoller::class, 'formContentsStore'])->name('formContents.store');
    Route::put('/formContents-status/{id}', [KonsultacjaContoller::class, 'formContentsStatus'])->name('status.formContents');

    // Form Dropdowns Route --->>>
    Route::get('/formDropdown1-index', [KonsultacjaContoller::class, 'Dropdown1Index'])->name('formDropdown1.index');
    Route::get('/formDropdown1-create', [KonsultacjaContoller::class, 'Dropdown1Create'])->name('formDropdown1.create');
    Route::post('/formDropdown1-store', [KonsultacjaContoller::class, 'Dropdown1Store'])->name('formDropdown1.store');
    Route::get('/formDropdown1-edit', [KonsultacjaContoller::class, 'Dropdown1Edit'])->name('formDropdown1.edit');

    Route::get('/formDropdown2-index', [KonsultacjaContoller::class, 'Dropdown2Index'])->name('formDropdown2.index');
    Route::get('/formDropdown2-create', [KonsultacjaContoller::class, 'Dropdown2Create'])->name('formDropdown2.create');
    Route::post('/formDropdown2-store', [KonsultacjaContoller::class, 'Dropdown2Store'])->name('formDropdown2.store');
    Route::get('/formDropdown2-edit', [KonsultacjaContoller::class, 'Dropdown2Edit'])->name('formDropdown2.edit');

    Route::get('/formDropdown3-index', [KonsultacjaContoller::class, 'Dropdown3Index'])->name('formDropdown3.index');
    Route::get('/formDropdown3-create', [KonsultacjaContoller::class, 'Dropdown3Create'])->name('formDropdown3.create');
    Route::post('/formDropdown3-store', [KonsultacjaContoller::class, 'Dropdown3Store'])->name('formDropdown3.store');
    Route::get('/formDropdown3-edit', [KonsultacjaContoller::class, 'Dropdown3Edit'])->name('formDropdown3.edit');

    Route::get('/formDropdown4-index', [KonsultacjaContoller::class, 'Dropdown4Index'])->name('formDropdown4.index');
    Route::get('/formDropdown4-create', [KonsultacjaContoller::class, 'Dropdown4Create'])->name('formDropdown4.create');
    Route::post('/formDropdown4-store', [KonsultacjaContoller::class, 'Dropdown4Store'])->name('formDropdown4.store');
    Route::get('/formDropdown4-edit', [KonsultacjaContoller::class, 'Dropdown4Edit'])->name('formDropdown4.edit');
    
        Route::get('/examination-herosection-index' ,[ExaminationHeroSectionController::class, 'heroSectionIndex'])->name('examination.herosection.index');
    Route::get('/examination-herosection-create' ,[ExaminationHeroSectionController::class, 'heroSectionCreate'])->name('examination.herosection.create');
    Route::post('/examination-herosection-store' ,[ExaminationHeroSectionController::class, 'heroSectionStore'])->name('examination.herosection.store');
    
    Route::get('/how-test-works-index' ,[HowTestWorksController::class, 'testIndex'])->name('howtestworks.index');
    Route::get('/how-test-works-create' ,[HowTestWorksController::class, 'testCreate'])->name('howtestworks.create');
    Route::post('/how-test-works-store' ,[HowTestWorksController::class, 'testStore'])->name('howtestworks.store');
    
    Route::get('/faq-index' ,[FaqController::class, 'faqIndex'])->name('faq.index');
    Route::get('/faq-create' ,[FaqController::class, 'faqCreate'])->name('faq.create');
    Route::post('/faq-store' ,[FaqController::class, 'faqStore'])->name('faq.store');

    Route::get('/ques-index' ,[QuesController::class, 'quesIndex'])->name('ques.index');
    Route::get('/ques-create' ,[QuesController::class, 'quesCreate'])->name('ques.create');
    Route::post('/ques-store' ,[QuesController::class, 'quesStore'])->name('ques.store');
    Route::get('/ques-edit', [QuesController::class , 'quesEdit'])->name('ques.edit');
    Route::put('/ques-update', [QuesController::class , 'quesUpdate'])->name('ques.update');

    Route::get('/research-index' ,[ResearchController::class, 'researchIndex'])->name('research.index');
    Route::get('/research-create' ,[ResearchController::class, 'researchCreate'])->name('research.create');
    Route::post('/research-store' ,[ResearchController::class, 'researchStore'])->name('research.store');
    
    Route::get('/percentage-index' ,[PercentageCardController::class, 'percentageIndex'])->name('percentage.index');
    Route::get('/percentage-create' ,[PercentageCardController::class, 'percentageCreate'])->name('percentage.create');
    Route::post('/percentage-store' ,[PercentageCardController::class, 'percentageStore'])->name('percentage.store');
    Route::get('/percentage-edit', [PercentageCardController::class , 'percentageEdit'])->name('percentage.edit');
    Route::put('/percentage-update', [PercentageCardController::class , 'percentageUpdate'])->name('percentage.update');

    Route::get('/exam-rating-section-index' ,[CustomerRatingController::class, 'ratingIndex'])->name('rating.section.index');
    Route::get('/exam-rating-section-create' ,[CustomerRatingController::class, 'ratingCreate'])->name('rating.section.create');
    Route::post('/exam-rating-section-store' ,[CustomerRatingController::class, 'ratingStore'])->name('rating.section.store');
    
    // Marketing Strategy Route........
    Route::get('/MShero-index', [MarketingStrategyController::class, 'MSheroIndex'])->name('MShero.index');
    Route::get('/MShero-create', [MarketingStrategyController::class, 'MSheroCreate'])->name('MShero.create');
    Route::post('/MShero-store', [MarketingStrategyController::class, 'MSheroStore'])->name('MShero.store');
    Route::put('/MShero-status/{id}', [MarketingStrategyController::class, 'MSheroStatus'])->name('status.MShero');

    Route::get('/main-content-1-index', [MarketingStrategyController::class, 'Mcontent1Index'])->name('main-content-1.index');
    Route::get('/main-content-1-create', [MarketingStrategyController::class, 'Mcontent1Create'])->name('main-content-1.create');
    Route::post('/main-content-1-store', [MarketingStrategyController::class, 'Mcontent1Store'])->name('main-content-1.store');
    Route::put('/main-content-1-status/{id}', [MarketingStrategyController::class, 'Mcontent1Status'])->name('status.main-content-1');

    Route::get('/main-num-index', [MarketingStrategyController::class, 'mainNumIndex'])->name('main-num.index');
    Route::get('/main-num-create', [MarketingStrategyController::class, 'mainNumCreate'])->name('main-num.create');
    Route::post('/main-num-store', [MarketingStrategyController::class, 'mainNumStore'])->name('main-num.store');
    Route::put('/main-num-status/{id}', [MarketingStrategyController::class, 'mainNumStatus'])->name('status.main-num');

    Route::get('/main-content-2-index', [MarketingStrategyController::class, 'maincontent2Index'])->name('main-content-2.index');
    Route::get('/main-content-2-create', [MarketingStrategyController::class, 'maincontent2Create'])->name('main-content-2.create');
    Route::post('/main-content-2-store', [MarketingStrategyController::class, 'maincontent2Store'])->name('main-content-2.store');
    Route::put('/main-content-2-status/{id}', [MarketingStrategyController::class, 'maincontent2Status'])->name('status.main-content-2');

    Route::get('/result-table-title-index', [MarketingStrategyController::class, 'RTtitleIndex'])->name('result-table-title.index');
    Route::get('/result-table-title-create', [MarketingStrategyController::class, 'RTtitleCreate'])->name('result-table-title.create');
    Route::post('/result-table-title-store', [MarketingStrategyController::class, 'RTtitleStore'])->name('result-table-title.store');
    Route::put('/result-table-title-status/{id}', [MarketingStrategyController::class, 'RTtitleStatus'])->name('status.result-table-title');

    Route::get('/result-table-card-index', [MarketingStrategyController::class, 'RTcardIndex'])->name('result-table-card.index');
    Route::get('/result-table-card-create', [MarketingStrategyController::class, 'RTcardCreate'])->name('result-table-card.create');
    Route::post('/result-table-card-store', [MarketingStrategyController::class, 'RTcardStore'])->name('result-table-card.store');
    Route::get('/result-table-card-edit', [MarketingStrategyController::class, 'RTcardEdit'])->name('result-table-card.edit');
    Route::get('/result-table-card-delete/{id}', [MarketingStrategyController::class, 'RTcardDelete'])->name('result-table-card.delete');

    Route::get('/strategy-index', [MarketingStrategyController::class, 'strategyIndex'])->name('strategy.index');
    Route::get('/strategy-create', [MarketingStrategyController::class, 'strategyCreate'])->name('strategy.create');
    Route::post('/strategy-store', [MarketingStrategyController::class, 'strategyStore'])->name('strategy.store');
    Route::put('/strategy-status/{id}', [MarketingStrategyController::class, 'strategyStatus'])->name('status.strategy');

    Route::get('/sFeature-index', [MarketingStrategyController::class, 'strategyFeatureIndex'])->name('sFeature.index');
    Route::get('/sFeature-create', [MarketingStrategyController::class, 'strategyFeatureCreate'])->name('sFeature.create');
    Route::post('/sFeature-store', [MarketingStrategyController::class, 'strategyFeatureStore'])->name('sFeature.store');
    Route::get('/sFeature-edit', [MarketingStrategyController::class, 'strategyFeatureEdit'])->name('sFeature.edit');
    Route::get('/sFeature-delete/{id}', [MarketingStrategyController::class, 'strategyFeatureDelete'])->name('sFeature.delete');
    
    Route::get('/testimonial-index', [MarketingStrategyController::class, 'testimonialIndex'])->name('testimonial.index');
    Route::get('/testimonial-create', [MarketingStrategyController::class, 'testimonialCreate'])->name('testimonial.create');
    Route::post('/testimonial-store', [MarketingStrategyController::class, 'testimonialStore'])->name('testimonial.store');
    Route::put('/testimonial-status/{id}', [MarketingStrategyController::class, 'testimonialStatus'])->name('status.testimonial');

    Route::get('/result-max-index', [MarketingStrategyController::class, 'resultmaxIndex'])->name('result-max.index');
    Route::get('/result-max-create', [MarketingStrategyController::class, 'resultmaxCreate'])->name('result-max.create');
    Route::post('/result-max-store', [MarketingStrategyController::class, 'resultmaxStore'])->name('result-max.store');
    Route::put('/result-max-status/{id}', [MarketingStrategyController::class, 'resultmaxStatus'])->name('status.result-max');

    Route::get('/price-section-index', [MarketingStrategyController::class, 'PriceIndex'])->name('price-section.index');
    Route::get('/price-section-create', [MarketingStrategyController::class, 'PriceCreate'])->name('price-section.create');
    Route::post('/price-section-store', [MarketingStrategyController::class, 'PriceStore'])->name('price-section.store');
    Route::put('/price-section-status/{id}', [MarketingStrategyController::class, 'PriceStatus'])->name('status.price-section');

    Route::get('/price-card-index', [MarketingStrategyController::class, 'priceCardIndex'])->name('price-card.index');
    Route::get('/price-card-create', [MarketingStrategyController::class, 'priceCardCreate'])->name('price-card.create');
    Route::post('/price-card-store', [MarketingStrategyController::class, 'priceCardStore'])->name('price-card.store');
    Route::get('/price-card-edit', [MarketingStrategyController::class, 'priceCardEdit'])->name('price-card.edit');
    Route::get('/price-card-delete/{id}', [MarketingStrategyController::class, 'priceCardDelete'])->name('price-card.delete');

    Route::get('/Mktstrategy-action-index', [MarketingStrategyController::class, 'strategyActionIndex'])->name('Mktstrategy-action.index');
    Route::get('/Mktstrategy-action-create', [MarketingStrategyController::class, 'strategyActionCreate'])->name('Mktstrategy-action.create');
    Route::post('/Mktstrategy-action-store', [MarketingStrategyController::class, 'strategyActionStore'])->name('Mktstrategy-action.store');
    Route::put('/Mktstrategy-action-status/{id}', [MarketingStrategyController::class, 'strategyActionStatus'])->name('status.Mktstrategy-action');

    Route::get('/Mkt-faq-content-index', [MarketingStrategyController::class, 'faqIndex'])->name('Mkt-faq-content.index');
    Route::get('/Mkt-faq-content-create', [MarketingStrategyController::class, 'faqCreate'])->name('Mkt-faq-content.create');
    Route::post('/Mkt-faq-content-store', [MarketingStrategyController::class, 'faqStore'])->name('Mkt-faq-content.store');
    Route::put('/Mkt-faq-content-status/{id}', [MarketingStrategyController::class, 'faqStatus'])->name('status.Mkt-faq-content');

    Route::get('/mktfaq-card-index', [MarketingStrategyController::class, 'faqCardIndex'])->name('mktfaq-card.index');
    Route::get('/mktfaq-card-create', [MarketingStrategyController::class, 'faqCardCreate'])->name('mktfaq-card.create');
    Route::post('/mktfaq-card-store', [MarketingStrategyController::class, 'faqCardStore'])->name('mktfaq-card.store');
    Route::get('/mktfaq-card-edit', [MarketingStrategyController::class, 'faqCardEdit'])->name('mktfaq-card.edit');
    Route::get('/mktfaq-card-delete/{id}', [MarketingStrategyController::class, 'faqCardDelete'])->name('mktfaq-card.delete');
    
    Route::get('/what-receive-index', [MarketingStrategyController::class, 'whatReceiveIndex'])->name('what-receive.index');
    Route::get('/what-receive-create', [MarketingStrategyController::class, 'whatReceiveCreate'])->name('what-receive.create');
    Route::post('/what-receive-store', [MarketingStrategyController::class, 'whatReceiveStore'])->name('what-receive.store');
    Route::put('/what-receive-status/{id}', [MarketingStrategyController::class, 'whatReceiveStatus'])->name('status.what-receive');

    Route::get('/image-advantage-index', [MarketingStrategyController::class, 'imageAdvantageIndex'])->name('image-advantage.index');
    Route::get('/image-advantage-create', [MarketingStrategyController::class, 'imageAdvantageCreate'])->name('image-advantage.create');
    Route::post('/image-advantage-store', [MarketingStrategyController::class, 'imageAdvantageStore'])->name('image-advantage.store');
    Route::put('/image-advantage-status/{id}', [MarketingStrategyController::class, 'imageAdvantageStatus'])->name('status.image-advantage');

    Route::get('/quote-one-index', [MarketingStrategyController::class, 'quoteOneIndex'])->name('quote-one.index');
    Route::get('/quote-one-create', [MarketingStrategyController::class, 'quoteOneCreate'])->name('quote-one.create');
    Route::post('/quote-one-store', [MarketingStrategyController::class, 'quoteOneStore'])->name('quote-one.store');
    Route::put('/quote-one-status/{id}', [MarketingStrategyController::class, 'quoteOneStatus'])->name('status.quote-one');

    Route::get('/branding-index', [MarketingStrategyController::class, 'brandingIndex'])->name('branding.index');
    Route::get('/branding-create', [MarketingStrategyController::class, 'brandingCreate'])->name('branding.create');
    Route::post('/branding-store', [MarketingStrategyController::class, 'brandingStore'])->name('branding.store');
    Route::put('/branding-status/{id}', [MarketingStrategyController::class, 'brandingStatus'])->name('status.branding');

    Route::get('/quote-two-index', [MarketingStrategyController::class, 'quoteTwoIndex'])->name('quote-two.index');
    Route::get('/quote-two-create', [MarketingStrategyController::class, 'quoteTwoCreate'])->name('quote-two.create');
    Route::post('/quote-two-store', [MarketingStrategyController::class, 'quoteTwoStore'])->name('quote-two.store');
    Route::put('/quote-two-status/{id}', [MarketingStrategyController::class, 'quoteTwoStatus'])->name('status.quote-two');

    Route::get('/analysis-card1-index', [MarketingStrategyController::class, 'analysisCard1Index'])->name('analysis-card1.index');
    Route::get('/analysis-card1-create', [MarketingStrategyController::class, 'analysisCard1Create'])->name('analysis-card1.create');
    Route::post('/analysis-card1-store', [MarketingStrategyController::class, 'analysisCard1Store'])->name('analysis-card1.store');
    Route::put('/analysis-card1-status/{id}', [MarketingStrategyController::class, 'analysisCard1Status'])->name('status.analysis-card1');

    Route::get('/analysis-card2-index', [MarketingStrategyController::class, 'analysisCard2Index'])->name('analysis-card2.index');
    Route::get('/analysis-card2-create', [MarketingStrategyController::class, 'analysisCard2Create'])->name('analysis-card2.create');
    Route::post('/analysis-card2-store', [MarketingStrategyController::class, 'analysisCard2Store'])->name('analysis-card2.store');
    Route::put('/analysis-card2-status/{id}', [MarketingStrategyController::class, 'analysisCard2Status'])->name('status.analysis-card2');

    Route::get('/analysis-card3-index', [MarketingStrategyController::class, 'analysisCard3Index'])->name('analysis-card3.index');
    Route::get('/analysis-card3-create', [MarketingStrategyController::class, 'analysisCard3Create'])->name('analysis-card3.create');
    Route::post('/analysis-card3-store', [MarketingStrategyController::class, 'analysisCard3Store'])->name('analysis-card3.store');
    Route::put('/analysis-card3-status/{id}', [MarketingStrategyController::class, 'analysisCard3Status'])->name('status.analysis-card3');

    Route::get('/analysis-card4-index', [MarketingStrategyController::class, 'analysisCard4Index'])->name('analysis-card4.index');
    Route::get('/analysis-card4-create', [MarketingStrategyController::class, 'analysisCard4Create'])->name('analysis-card4.create');
    Route::post('/analysis-card4-store', [MarketingStrategyController::class, 'analysisCard4Store'])->name('analysis-card4.store');
    Route::put('/analysis-card4-status/{id}', [MarketingStrategyController::class, 'analysisCard4Status'])->name('status.analysis-card4');
    
    Route::get('/projektowanie-logo-index' ,[ProjektowanieLogoController::class, 'logoIndex'])->name('projekto.logo.index');
    Route::get('/projektowanie-logo-create' ,[ProjektowanieLogoController::class, 'logoCreate'])->name('projekto.logo.create');
    Route::post('/projektowanie-logo-store' ,[ProjektowanieLogoController::class, 'logoStore'])->name('projekto.logo.store');

    Route::get('/image-group-index' ,[ImageGroupController::class, 'imageGroupIndex'])->name('image.group.index');
    Route::get('/image-group-create' ,[ImageGroupController::class, 'imageGroupCreate'])->name('image.group.create');
    Route::post('/image-group-store' ,[ImageGroupController::class, 'imageGroupStore'])->name('image.group.store');
    Route::get('/image-group-edit', [ImageGroupController::class , 'imageGroupEdit'])->name('image.group.edit');
    Route::put('/image-group-update', [ImageGroupController::class , 'imageGroupUpdate'])->name('image.group.update');

    Route::get('/good-business-index' ,[GoodBusinessController::class, 'goodBusinessIndex'])->name('good.business.index');
    Route::get('/good-business-create' ,[GoodBusinessController::class, 'goodBusinessCreate'])->name('good.business.create');
    Route::post('/good-business-store' ,[GoodBusinessController::class, 'goodBusinessStore'])->name('good.business.store');
    
    Route::get('/exam-opinion-index' ,[OpinionController::class, 'opinionIndex'])->name('exam-opinion.index');
    Route::get('/exam-opinion-create' ,[OpinionController::class, 'opinionCreate'])->name('exam-opinion.create');
    Route::post('/exam-opinion-store' ,[OpinionController::class, 'opinionStore'])->name('exam-opinion.store');
    
    Route::get('/project-value-index' ,[ProjektowanieProjectController::class, 'projectValueIndex'])->name('project.value.index');
    Route::get('/project-value-create' ,[ProjektowanieProjectController::class, 'projectValueCreate'])->name('project.value.create');
    Route::post('/project-value-store' ,[ProjektowanieProjectController::class, 'projectValueStore'])->name('project.value.store');
    
    Route::get('/guarantee-index' ,[GuaranteeController::class, 'guaranteeIndex'])->name('guarantee.index');
    Route::get('/guarantee-create' ,[GuaranteeController::class, 'guaranteeCreate'])->name('guarantee.create');
    Route::post('/guarantee-store' ,[GuaranteeController::class, 'guaranteeStore'])->name('guarantee.store');
    
    Route::get('/gallery-index' ,[GalleryController::class, 'galleryIndex'])->name('gallery.index');
    Route::get('/gallery-create' ,[GalleryController::class, 'galleryCreate'])->name('gallery.create');
    Route::post('/gallery-store' ,[GalleryController::class, 'galleryStore'])->name('gallery.store');

    Route::get('/projekto-gallery-image-group-index' ,[GalleryImageGroupController::class, 'galleryimageGroupIndex'])->name('gallery.image.group.index');
    Route::get('/projekto-gallery-image-group-create' ,[GalleryImageGroupController::class, 'galleryimageGroupCreate'])->name('gallery.image.group.create');
    Route::post('/projekto-gallery-image-group-store' ,[GalleryImageGroupController::class, 'galleryimageGroupStore'])->name('gallery.image.group.store');
    Route::get('/projekto-gallery-image-group-edit', [GalleryImageGroupController::class , 'galleryimageGroupEdit'])->name('gallery.image.group.edit');
    Route::put('/projekto-gallery-image-group-update', [GalleryImageGroupController::class , 'galleryimageGroupUpdate'])->name('gallery.image.group.update');

    Route::get('/receive-index' ,[ReceiveController::class, 'receiveIndex'])->name('receive.index');
    Route::get('/receive-create' ,[ReceiveController::class, 'receiveCreate'])->name('receive.create');
    Route::post('/receive-store' ,[ReceiveController::class, 'receiveStore'])->name('receive.store');

    Route::get('/points-index' ,[ReceivePointsController::class, 'pointsIndex'])->name('receive.points.index');
    Route::get('/points-create' ,[ReceivePointsController::class, 'pointsCreate'])->name('receive.points.create');
    Route::post('/points-store' ,[ReceivePointsController::class, 'pointsStore'])->name('receive.points.store');
    Route::get('/points-edit', [ReceivePointsController::class , 'pointsEdit'])->name('receive.points.edit');
    Route::put('/points-update', [ReceivePointsController::class , 'pointsUpdate'])->name('receive.points.update');
    
    Route::get('/pdf-copy-index' ,[PdfCopyController::class, 'pdfCopyIndex'])->name('pdf.index');
    Route::get('/pdf-copy-create' ,[PdfCopyController::class, 'pdfCopyCreate'])->name('pdf.create');
    Route::post('/pdf-copy-store' ,[PdfCopyController::class, 'pdfCopyStore'])->name('pdf.store');
    
    Route::get('/step-by-step-index' ,[StepByStepController::class, 'StepByStepIndex'])->name('step.by.step.index');
    Route::get('/step-by-step-create' ,[StepByStepController::class, 'StepByStepCreate'])->name('step.by.step.create');
    Route::post('/step-by-step-store' ,[StepByStepController::class, 'StepByStepStore'])->name('step.by.step.store');
    
    Route::get('/free-shops-index' ,[FreeShopsController::class, 'freeShopsIndex'])->name('free.shops.index');
    Route::get('/free-shops-create' ,[FreeShopsController::class, 'freeShopsCreate'])->name('free.shops.create');
    Route::post('/free-shops-store' ,[FreeShopsController::class, 'freeShopsStore'])->name('free.shops.store');
    
    Route::get('/enexo-index' ,[EnexoController::class, 'enexoIndex'])->name('enexo.index');
    Route::get('/enexo-create' ,[EnexoController::class, 'enexoCreate'])->name('enexo.create');
    Route::post('/enexo-store' ,[EnexoController::class, 'enexoStore'])->name('enexo.store');
    
    Route::get('/daco-index' ,[DacoController::class, 'dacoIndex'])->name('daco.index');
    Route::get('/daco-create' ,[DacoController::class, 'dacoCreate'])->name('daco.create');
    Route::post('/daco-store' ,[DacoController::class, 'dacoStore'])->name('daco.store');
    
    Route::get('/aico-index' ,[AicoController::class, 'aicoIndex'])->name('aico.index');
    Route::get('/aico-create' ,[AicoController::class, 'aicoCreate'])->name('aico.create');
    Route::post('/aico-store' ,[AicoController::class, 'aicoStore'])->name('aico.store');
    
    Route::get('/zoo-garden-index' ,[ZooGardenController::class, 'zooGardenIndex'])->name('zoo.garden.index');
    Route::get('/zoo-garden-create' ,[ZooGardenController::class, 'zooGardenCreate'])->name('zoo.garden.create');
    Route::post('/zoo-garden-store' ,[ZooGardenController::class, 'zooGardenStore'])->name('zoo.garden.store');
    
    Route::get('/construction-index' ,[ConstructionController::class, 'constructionIndex'])->name('construction.index');
    Route::get('/construction-create' ,[ConstructionController::class, 'constructionCreate'])->name('construction.create');
    Route::post('/construction-store' ,[ConstructionController::class, 'constructionStore'])->name('construction.store');
    
    Route::get('/restaurant-index' ,[RestaurantController::class, 'restaurantIndex'])->name('restaurant.index');
    Route::get('/restaurant-create' ,[RestaurantController::class, 'restaurantCreate'])->name('restaurant.create');
    Route::post('/restaurant-store' ,[RestaurantController::class, 'restaurantStore'])->name('restaurant.store');
    
    Route::get('/park-index' ,[ParkController::class, 'parkIndex'])->name('park.index');
    Route::get('/park-create' ,[ParkController::class, 'parkCreate'])->name('park.create');
    Route::post('/park-store' ,[ParkController::class, 'parkStore'])->name('park.store');
    
    Route::get('/new-company-index' ,[NewCompanyController::class, 'newCompanyIndex'])->name('new.company.index');
    Route::get('/new-company-create' ,[NewCompanyController::class, 'newCompanyCreate'])->name('new.company.create');
    Route::post('/new-company-store' ,[NewCompanyController::class, 'newCompanyStore'])->name('new.company.store');
    
    Route::get('/company-profit-index' ,[NewCompanyProfitSliderController::class, 'newCompanyProfitIndex'])->name('new.company.profit.index');
    Route::get('/company-profit-create' ,[NewCompanyProfitSliderController::class, 'newCompanyProfitCreate'])->name('new.company.profit.create');
    Route::post('/company-profit-store' ,[NewCompanyProfitSliderController::class, 'newCompanyProfitStore'])->name('new.company.profit.store');
    Route::get('/company-profit-edit', [NewCompanyProfitSliderController::class , 'newCompanyProfitEdit'])->name('new.company.profit.edit');
    Route::put('/company-profit-update', [NewCompanyProfitSliderController::class , 'newCompanyProfitUpdate'])->name('new.company.profit.update');

    Route::get('/footer-logo-index' ,[FooterLogoController::class, 'footerLogoIndex'])->name('footer.logo.index');
    Route::get('/footer-logo-create' ,[FooterLogoController::class, 'footerLogoCreate'])->name('footer.logo.create');
    Route::post('/footer-logo-store' ,[FooterLogoController::class, 'footerLogoStore'])->name('footer.logo.store');

    Route::get('/page-footer-link-index' ,[FooterPageLinkController::class, 'pageLinkIndex'])->name('footer.page.link.index');
    Route::get('/page-footer-link-create' ,[FooterPageLinkController::class, 'pageLinkCreate'])->name('footer.page.link.create');
    Route::post('/page-footer-link-store' ,[FooterPageLinkController::class, 'pageLinkStore'])->name('footer.page.link.store');
    Route::get('/page-footer-link-edit', [FooterPageLinkController::class , 'pageLinkEdit'])->name('footer.page.link.edit');
    Route::put('/page-footer-link-update', [FooterPageLinkController::class , 'pageLinkUpdate'])->name('footer.page.link.update');
    
    Route::get('/logo-accordion-index' ,[LogoAccordionController::class, 'logoAccordionIndex'])->name('logo.accordion.index');
    Route::get('/logo-accordion-create' ,[LogoAccordionController::class, 'logoAccordionCreate'])->name('logo.accordion.create');
    Route::post('/logo-accordion-store' ,[LogoAccordionController::class, 'logoAccordionStore'])->name('logo.accordion.store');
    Route::get('/logo-accordion-edit', [LogoAccordionController::class , 'logoAccordionEdit'])->name('logo.accordion.edit');
    Route::put('/logo-accordion-update', [LogoAccordionController::class , 'logoAccordionUpdate'])->name('logo.accordion.update');
    
    Route::get('/logoAccordion-index',[LogoAccordionController::class, 'logoAccordion1Index'])->name('logo.accordion1.index');
    Route::get('/logoAccordion-create',[LogoAccordionController::class, 'logoAccordion1Create'])->name('logo.accordion1.create');
    Route::post('/logoAccordion-store',[LogoAccordionController::class, 'logoAccordion1Store'])->name('logo.accordion1.store');
    
    Route::get('/gpn-index' ,[GPNController::class, 'gpnIndex'])->name('gpn.index');
    Route::get('/gpn-create' ,[GPNController::class, 'gpnCreate'])->name('gpn.create');
    Route::post('/gpn-store' ,[GPNController::class, 'gpnStore'])->name('gpn.store');

    Route::get('/gpn-company-index' ,[GPNCompanyController::class, 'gpnCompanyIndex'])->name('gpn.company.index');
    Route::get('/gpn-company-create' ,[GPNCompanyController::class, 'gpnCompanyCreate'])->name('gpn.company.create');
    Route::post('/gpn-company-store' ,[GPNCompanyController::class, 'gpnCompanyStore'])->name('gpn.company.store');
    Route::get('/gpn-company-edit', [GPNCompanyController::class , 'gpnCompanyEdit'])->name('gpn.company.edit');
    Route::put('/gpn-company-update', [GPNCompanyController::class , 'gpnCompanyUpdate'])->name('gpn.company.update');
    
    Route::get('/gpn-product-index' ,[GPNProductController::class, 'gpnProductIndex'])->name('gpn.product.index');
    Route::get('/gpn-product-create' ,[GPNProductController::class, 'gpnProductCreate'])->name('gpn.product.create');
    Route::post('/gpn-product-store' ,[GPNProductController::class, 'gpnProductStore'])->name('gpn.product.store');
    Route::get('/gpn-product-edit', [GPNProductController::class , 'gpnProductEdit'])->name('gpn.product.edit');
    Route::put('/gpn-product-update', [GPNProductController::class , 'gpnProductUpdate'])->name('gpn.product.update');
    
    
     Route::get('/team.card1.index', [TeamSettingController::class, 'teamCard1Index'])->name('team.card1.index');
    Route::get('/team.card2.index', [TeamSettingController::class, 'teamCard2Index'])->name('team.card2.index');

    Route::get('/team.card1.form', [TeamSettingController::class, 'TeamCardView'])->name('team.card1.form');
    Route::post('/team.card1.submit', [TeamSettingController::class, 'TeamCardStore'])->name('team.card1.submit');
    Route::get('/team.card2.form', [TeamSettingController::class, 'TeamCardForm'])->name('team.card2.form');
    Route::post('/team.card.submit', [TeamSettingController::class, 'TeamCardStore2'])->name('team.card2.submit');
    Route::put('/team-card1-status/{id}', [TeamSettingController::class, 'TeamCard1Status'])->name('status.team.card1');
    Route::put('/team-card2-status/{id}', [TeamSettingController::class, 'TeamCard2Status'])->name('status.team.card2');

    Route::get('/team.image', [TeamSettingController::class, 'teamImageIndex'])->name('team.image');
    Route::get('/team.image.form', [TeamSettingController::class, 'teamImageForm'])->name('team.image.form');
    Route::post('/team.image.add', [TeamSettingController::class, 'TeamImageStore'])->name('team.image.add');

    Route::post('/team.image.edit', [TeamSettingController::class, 'TeamImageEdit'])->name('team.image.edit');
    Route::put('/team.image.update', [TeamSettingController::class, 'TeamImageUpdate'])->name('team.image.update');

    //section6--
    Route::get('/team.section6-index', [TeamSettingController::class, 'Section6Index'])->name('team.section6.index');
    Route::get('/team.section6-form', [TeamSettingController::class, 'Section6Form'])->name('team.section6.form');
    Route::post('/team.section6-store', [TeamSettingController::class, 'Section6Store'])->name('team.section6.store');
    Route::put('/team-section6-status/{id}', [TeamSettingController::class, 'Section6Status'])->name('status.team.section6');

    //section6 card 1
    Route::get('/team.section6c1-index', [TeamSettingController::class, 'Sec6Card1Index'])->name('team.section6c1.index');
    Route::get('/team.section6c1-form', [TeamSettingController::class, 'Sec6CardForm'])->name('team.section6c1.form');
    Route::post('/team.section6c1-store', [TeamSettingController::class, 'Sec6CardStore'])->name('team.section6c1.store');
    Route::put('/team-section6c1-status/{id}', [TeamSettingController::class, 'Sec6Card1Status'])->name('status.team.section6c1');

   //section6 card 2
   Route::get('/team.section6c2-index', [TeamSettingController::class, 'Sec6Card2Index'])->name('team.section6c2.index');
   Route::get('/team.section6c2-form', [TeamSettingController::class, 'Sec6Card2Form'])->name('team.section6c2.form');
   Route::post('/team.section6c2-store', [TeamSettingController::class, 'Sec6Card2Store'])->name('team.section6c2.store');
   Route::put('/team-section6c2-status/{id}', [TeamSettingController::class, 'Sec6Card2Status'])->name('status.team.section6c2');

   //section6  card 3
   Route::get('/team.section6c3.index', [TeamSettingController::class, 'Sec6Card3Index'])->name('team.section6c3.index');
   Route::get('/team.section6c3.form', [TeamSettingController::class, 'Sec6Card3Form'])->name('team.section6c3.form');
   Route::post('/team.section6c3.store', [TeamSettingController::class, 'Sec6Card3Store'])->name('team.section6c3.store');
   Route::put('/team-section6c3-status/{id}', [TeamSettingController::class, 'Sec6Card3Status'])->name('status.team.section6c3');
 
   //herosection
   Route::get('/team.view.index', [TeamSettingController::class, 'herosectionIndex'])->name('team.view.index');
   Route::get('/team.view.form', [TeamSettingController::class, 'heroSectionForm'])->name('team.view.form');
   Route::post('/team.view.store', [TeamSettingController::class, 'herosectionStore'])->name('team.view.store');
   Route::put('/team-view-status/{id}', [TeamSettingController::class, 'heroSectionStatus'])->name('status.team.view');

   //section 1---------------------
   Route::get('/team.section1.index', [TeamSettingController::class, 'section1'])->name('team.section1.index');
   Route::get('/team.section1.form', [TeamSettingController::class, 'Section1Form'])->name('team.section1.form');
   Route::post('/team.section1.store', [TeamSettingController::class, 'Section1Store'])->name('team.section1.store');
   Route::put('/team-section1-status/{id}', [TeamSettingController::class, 'Section1Status'])->name('status.team.section1');

   //section 2-----------------------------
   Route::get('/team.section2-index', [TeamSettingController::class, 'section2'])->name('team.section2.index');
   Route::get('/team.section2-form', [TeamSettingController::class, 'Section2Form'])->name('team.section2.form');
   Route::post('/team.section2-store', [TeamSettingController::class, 'Section2Store'])->name('team.section2.store');
   Route::put('/team-section2-status/{id}', [TeamSettingController::class, 'Section2Status'])->name('status.team.section2');

  //section 3 ----------------------------
  Route::get('/team.section3-index', [TeamSettingController::class, 'section3'])->name('team.section3.index');
  Route::get('/team.section3-form', [TeamSettingController::class, 'Section3Form'])->name('team.section3.form');
  Route::post('/team.section3-store', [TeamSettingController::class, 'Section3Store'])->name('team.section3.store');
  Route::put('/team-section3-status/{id}', [TeamSettingController::class, 'Section3Status'])->name('status.team.section3');
  

  //section 4-----------------------
  Route::get('/team.section4-index', [TeamSettingController::class, 'section4'])->name('team.section4.index');
  Route::get('/team.section4-form', [TeamSettingController::class, 'Section4Form'])->name('team.section4.form');
  Route::post('/team.section4-store', [TeamSettingController::class, 'Section4Store'])->name('team.section4.store');
  Route::put('/team-section4-status/{id}', [TeamSettingController::class, 'Section4Status'])->name('status.team.section4');
 

  //section 5------------------------
  Route::get('/team.section5-index', [TeamSettingController::class, 'section5'])->name('team.section5.index');
  Route::get('/team.section5-form', [TeamSettingController::class, 'Section5Form'])->name('team.section5.form');
  Route::post('/team.section5-store', [TeamSettingController::class, 'Section5Store'])->name('team.section5.store');
  Route::put('/team-section5-status/{id}', [TeamSettingController::class, 'Section5Status'])->name('status.team.section5');

 
   //section7---
    Route::get('/team.section7-index', [TeamSettingController::class, 'Section7Index'])->name('team.section7.index');
    Route::get('/team.section7-form', [TeamSettingController::class, 'Section7Form'])->name('team.section7.form');
    Route::post('/team.section7-store', [TeamSettingController::class, 'Section7Store'])->name('team.section7.store');
    Route::put('/team-section7-status/{id}', [TeamSettingController::class, 'Section7Status'])->name('status.team.section7');

    //section 8------
    Route::get('/team.section8-index', [TeamSettingController::class, 'Section8Index'])->name('team.section8.index');
    Route::get('/team.section8-form', [TeamSettingController::class, 'Section8Form'])->name('team.section8.form');
    Route::post('/team.section8-store', [TeamSettingController::class, 'Section8Store'])->name('team.section8.store');
    Route::put('/team-section8-status/{id}', [TeamSettingController::class, 'Section8Status'])->name('status.team.section8');

    //section 10-------
    Route::get('/team.10section-index', [TeamSettingController::class, 'Section10Index'])->name('team.10section.index');
    Route::get('/team.10section-form', [TeamSettingController::class, 'Section10Form'])->name('team.10section.form');
    Route::post('/team.10section-store', [TeamSettingController::class, 'Section10Store'])->name('team.10section.store');
    Route::put('/team-section10-status/{id}', [TeamSettingController::class, 'Section10Status'])->name('status.team.section10');

    //section 11-----------
    Route::get('/team.11section-index', [TeamSettingController::class, 'Section11Index'])->name('team.11section.index');
    Route::get('/team.11section-form', [TeamSettingController::class, 'Section11Form'])->name('team.11section.form');
    Route::post('/team.11section-store', [TeamSettingController::class, 'Section11Store'])->name('team.11section.store');
    Route::put('/team-section11-status/{id}', [TeamSettingController::class, 'Section11Status'])->name('status.team.section11');

    //section9  with (5 cards )---------
    Route::get('/team.section9-index', [TeamSettingController::class, 'TeamSection9'])->name('team.section9.index');
    Route::get('/team.section9-form', [TeamSettingController::class, 'Section9Form'])->name('team.section9.form');
    Route::post('/team.section9-store', [TeamSettingController::class, 'Section9FormSubmit'])->name('team.section9.store');
    Route::post('/team.section9-editform', [TeamSettingController::class, 'Section9Edit'])->name('team.section9.editform');
    Route::put('/team.section9-update', [TeamSettingController::class, 'Section9Update'])->name('team.section9.update');
    
    // UX Setting Route
    Route::get('/UXhero-index', [UXsettingController::class, 'HeroSection'])->name('UXhero.index');
    Route::get('/UXhero-form', [UXsettingController::class, 'HeroSectionForm'])->name('UXhero.form');
    Route::post('/UXhero-store', [UXsettingController::class, 'HeroSectionStore'])->name('UXhero.store');

    Route::get('/UXcompetetion-index', [UXsettingController::class, 'CompetetionIndex'])->name('UXcompetetion.index');
    Route::get('/UXcompetetion-form', [UXsettingController::class, 'CompetetionForm'])->name('UXcompetetion.form');
    Route::post('/UXcompetetion-store', [UXsettingController::class, 'CompetetionStore'])->name('UXcompetetion.store');
    Route::put('/UXcompetetion-status/{id}', [UXsettingController::class, 'CompetetionStatus'])->name('status.UXcompetetion');

    Route::get('/UXcounter-index', [UXsettingController::class, 'CounterIndex'])->name('UXcounter.index');
    Route::get('/UXcounter-form', [UXsettingController::class, 'CounterForm'])->name('UXcounter.form');
    Route::post('/UXcounter-store', [UXsettingController::class, 'CounterFormSubmit'])->name('UXcounter.store');
    Route::post('/UXcounter-edit', [UXsettingController::class, 'CounterEdit'])->name('UXcounter.edit');
    Route::put('/UXcounter-update', [UXsettingController::class, 'CounterUpdate'])->name('UXcounter.update');

    Route::get('/UXignoreSites-index', [UXsettingController::class, 'IgnoreSiteIndex'])->name('UXignoreSites.index');
    Route::get('/UXignoreSites-form', [UXsettingController::class, 'IgnoreSiteForm'])->name('UXignoreSites.form');
    Route::post('/UXignoreSites-store', [UXsettingController::class, 'IgnoreSiteStore'])->name('UXignoreSites.store');

    Route::get('/UXsystematically-index', [UXsettingController::class, 'SystematicallyIndex'])->name('UXsystematically.index');
    Route::get('/UXsystematically-create', [UXsettingController::class, 'SystematicallyCreate'])->name('UXsystematically.create');
    Route::post('/UXsystematically-store', [UXsettingController::class, 'SystematicallyStore'])->name('UXsystematically.store');

    Route::get('/UXfaqTitle-index', [UXsettingController::class, 'faqIndex'])->name('UXfaqTitle.index');
    Route::get('/UXfaqTitle-create', [UXsettingController::class, 'faqCreate'])->name('UXfaqTitle.create');
    Route::post('/UXfaqTitle-store', [UXsettingController::class, 'faqStore'])->name('UXfaqTitle.store');

    Route::get('/UXfaqCard-index', [UXsettingController::class, 'faqCardIndex'])->name('UXfaqCard.index');
    Route::get('/UXfaqCard-create', [UXsettingController::class, 'faqCardCreate'])->name('UXfaqCard.create');
    Route::post('/UXfaqCard-store', [UXsettingController::class, 'faqCardStore'])->name('UXfaqCard.store');
    Route::get('/UXfaqCard-edit', [UXsettingController::class, 'faqCardEdit'])->name('UXfaqCard.edit');
    Route::get('/UXfaqCard-delete/{id}', [UXsettingController::class, 'faqCardDelete'])->name('UXfaqCard.delete');

    Route::get('/UXexecutive-index', [UXsettingController::class, 'executiveIndex'])->name('UXexecutive.index');
    Route::get('/UXexecutive-create', [UXsettingController::class, 'executiveCreate'])->name('UXexecutive.create');
    Route::post('/UXexecutive-store', [UXsettingController::class, 'executiveStore'])->name('UXexecutive.store');
    
    Route::get('/UXcomplex-index', [UXsettingController::class, 'complexIndex'])->name('UXcomplex.index');
    Route::get('/UXcomplex-create', [UXsettingController::class, 'complexCreate'])->name('UXcomplex.create');
    Route::post('/UXcomplex-store', [UXsettingController::class, 'complexStore'])->name('UXcomplex.store');

    Route::get('/UXslider-index', [UXsettingController::class, 'sliderIndex'])->name('UXslider.index');
    Route::get('/UXslider-create', [UXsettingController::class, 'sliderCreate'])->name('UXslider.create');
    Route::post('/UXslider-store', [UXsettingController::class, 'sliderStore'])->name('UXslider.store');
    Route::get('/UXslider-edit', [UXsettingController::class, 'sliderEdit'])->name('UXslider.edit');
    Route::get('/UXslider-delete/{id}', [UXsettingController::class, 'sliderDelete'])->name('UXslider.delete');

    Route::get('/UXwebsite-index', [UXsettingController::class, 'websiteIndex'])->name('UXwebsite.index');
    Route::get('/UXwebsite-create', [UXsettingController::class, 'websiteCreate'])->name('UXwebsite.create');
    Route::post('/UXwebsite-store', [UXsettingController::class, 'websiteStore'])->name('UXwebsite.store');

    Route::get('/UXgoodProcess-index', [UXsettingController::class, 'goodProcessIndex'])->name('UXgoodProcess.index');
    Route::get('/UXgoodProcess-create', [UXsettingController::class, 'goodProcessCreate'])->name('UXgoodProcess.create');
    Route::post('/UXgoodProcess-store', [UXsettingController::class, 'goodProcessStore'])->name('UXgoodProcess.store');

    Route::get('/UXstages-index', [UXsettingController::class, 'StagesIndex'])->name('UXstages.index');
    Route::get('/UXstages-create', [UXsettingController::class, 'StagesCreate'])->name('UXstages.create');
    Route::post('/UXstages-store', [UXsettingController::class, 'StagesStore'])->name('UXstages.store');
    Route::get('/UXstages-edit', [UXsettingController::class, 'StagesEdit'])->name('UXstages.edit');
    Route::get('/UXstages-delete/{id}', [UXsettingController::class, 'StagesDelete'])->name('UXstages.delete');

    Route::get('/UXinfo-index', [UXsettingController::class, 'UXinfoIndex'])->name('UXinfo.index');
    Route::get('/UXinfo-create', [UXsettingController::class, 'UXinfoCreate'])->name('UXinfo.create');
    Route::post('/UXinfo-store', [UXsettingController::class, 'UXinfoStore'])->name('UXinfo.store');
    
    Route::get('/one-card-index', [UXsettingController::class, 'UXCardOneIndex'])->name('UXCardOne.index');
    Route::get('/one-card-create', [UXsettingController::class, 'UXCardOneCreate'])->name('UXCardOne.create');
    Route::post('/one-card-store', [UXsettingController::class, 'UXCardOneStore'])->name('UXCardOne.store');

    Route::get('/two-card-index', [UXsettingController::class, 'UXCardTwoIndex'])->name('UXCardTwo.index');
    Route::get('/two-card-create', [UXsettingController::class, 'UXCardTwoCreate'])->name('UXCardTwo.create');
    Route::post('/two-card-store', [UXsettingController::class, 'UXCardTwoStore'])->name('UXCardTwo.store');

    Route::get('/three-card-index', [UXsettingController::class, 'UXCardThreeIndex'])->name('UXCardThree.index');
    Route::get('/three-card-create', [UXsettingController::class, 'UXCardThreeCreate'])->name('UXCardThree.create');
    Route::post('/three-card-store', [UXsettingController::class, 'UXCardThreeStore'])->name('UXCardThree.store');

    Route::get('/four-card-index', [UXsettingController::class, 'UXCardFourIndex'])->name('UXCardFour.index');
    Route::get('/four-card-create', [UXsettingController::class, 'UXCardFourCreate'])->name('UXCardFour.create');
    Route::post('/four-card-store', [UXsettingController::class, 'UXCardFourStore'])->name('UXCardFour.store');

    Route::get('/UXvideoTab-index', [UXsettingController::class, 'videoTabIndex'])->name('UXvideoTab.index');
    Route::get('/UXvideoTab-create', [UXsettingController::class, 'videoTabCreate'])->name('UXvideoTab.create');
    Route::post('/UXvideoTab-store', [UXsettingController::class, 'videoTabStore'])->name('UXvideoTab.store');
    Route::get('/UXvideoTab-edit', [UXsettingController::class, 'videoTabEdit'])->name('UXvideoTab.edit');
    Route::get('/UXvideoTab-delete/{id}', [UXsettingController::class, 'videoTabDelete'])->name('UXvideoTab.delete');

   // Price List
    Route::get('/price-list-index', [PriceListSettingController::class, 'menuPriceListIndex'])->name('price-list.index');
    Route::get('/price-list-create', [PriceListSettingController::class, 'menuPriceListCreate'])->name('price-list.create');
    Route::post('/price-list-store', [PriceListSettingController::class, 'menuPriceListStore'])->name('price-list.store');
    Route::put('/price-list-status/{id}', [PriceListSettingController::class, 'menuPriceListStatus'])->name('status.price-list');

    Route::get('/first-price-menu-index', [PriceListSettingController::class, 'firstPriceMenuIndex'])->name('first-price-menu.index');
    Route::get('/first-price-menu-create', [PriceListSettingController::class, 'firstPriceMenuCreate'])->name('first-price-menu.create');
    Route::post('/first-price-menu-store', [PriceListSettingController::class, 'firstPriceMenuStore'])->name('first-price-menu.store');
    Route::put('/first-price-menu-status/{id}', [PriceListSettingController::class, 'firstPriceMenuStatus'])->name('status.first-price-menu');

    Route::get('/first-price-range-index', [PriceListSettingController::class, 'firstPriceRangeIndex'])->name('first-price-range.index');
    Route::get('/first-price-range-create', [PriceListSettingController::class, 'firstPriceRangeCreate'])->name('first-price-range.create');
    Route::post('/first-price-range-store', [PriceListSettingController::class, 'firstPriceRangeStore'])->name('first-price-range.store');
    Route::get('/first-price-range-edit', [PriceListSettingController::class, 'firstPriceRangeEdit'])->name('first-price-range.edit');

    Route::get('/plo-dropdwonOptions1-index', [PriceListSettingController::class, 'FO1optionIndex'])->name('plo-dropdwonOptions1.index');
    Route::get('/plo-dropdwonOptions1-create', [PriceListSettingController::class, 'FO1optionCreate'])->name('plo-dropdwonOptions1.create');
    Route::post('/plo-dropdwonOptions1-store', [PriceListSettingController::class, 'FO1optionStore'])->name('plo-dropdwonOptions1.store');
    Route::get('/plo-dropdwonOptions1-edit', [PriceListSettingController::class, 'FO1optionEdit'])->name('plo-dropdwonOptions1.edit');

    Route::get('/fourth-price-menu-index', [PriceListSettingController::class, 'fourthPriceMenuIndex'])->name('fourth-price-menu.index');
    Route::get('/fourth-price-menu-create', [PriceListSettingController::class, 'fourthPriceMenuCreate'])->name('fourth-price-menu.create');
    Route::post('/fourth-price-menu-store', [PriceListSettingController::class, 'fourthPriceMenuStore'])->name('fourth-price-menu.store');
    Route::put('/fourth-price-menu-status/{id}', [PriceListSettingController::class, 'fourthPriceMenuStatus'])->name('status.fourth-price-menu');

    Route::get('/fourth-price-range-index', [PriceListSettingController::class, 'fourthPriceRangeIndex'])->name('fourth-price-range.index');
    Route::get('/fourth-price-range-create', [PriceListSettingController::class, 'fourthPriceRangeCreate'])->name('fourth-price-range.create');
    Route::post('/fourth-price-range-store', [PriceListSettingController::class, 'fourthPriceRangeStore'])->name('fourth-price-range.store');
    Route::get('/fourth-price-range-edit', [PriceListSettingController::class, 'fourthPriceRangeEdit'])->name('fourth-price-range.edit');

    Route::get('/plo-dropdwonOptions4-index', [PriceListSettingController::class, 'FO4optionIndex'])->name('plo-dropdwonOptions4.index');
    Route::get('/plo-dropdwonOptions4-create', [PriceListSettingController::class, 'FO4optionCreate'])->name('plo-dropdwonOptions4.create');
    Route::post('/plo-dropdwonOptions4-store', [PriceListSettingController::class, 'FO4optionStore'])->name('plo-dropdwonOptions4.store');
    Route::get('/plo-dropdwonOptions4-edit', [PriceListSettingController::class, 'FO4optionEdit'])->name('plo-dropdwonOptions4.edit');

    Route::get('/third-price-menu-index', [PriceListSettingController::class, 'thirdPriceMenuIndex'])->name('third-price-menu.index');
    Route::get('/third-price-menu-create', [PriceListSettingController::class, 'thirdPriceMenuCreate'])->name('third-price-menu.create');
    Route::post('/third-price-menu-store', [PriceListSettingController::class, 'thirdPriceMenuStore'])->name('third-price-menu.store');

    Route::get('/plo-dropdwonOptions3-index', [PriceListSettingController::class, 'FO3optionIndex'])->name('plo-dropdwonOptions3.index');
    Route::get('/plo-dropdwonOptions3-create', [PriceListSettingController::class, 'FO3optionCreate'])->name('plo-dropdwonOptions3.create');
    Route::post('/plo-dropdwonOptions3-store', [PriceListSettingController::class, 'FO3optionStore'])->name('plo-dropdwonOptions3.store');
    Route::get('/plo-dropdwonOptions3-edit', [PriceListSettingController::class, 'FO3optionEdit'])->name('plo-dropdwonOptions3.edit');

    Route::get('/third-price-range-index', [PriceListSettingController::class, 'thirdPriceRangeIndex'])->name('third-price-range.index');
    Route::get('/third-price-range-create', [PriceListSettingController::class, 'thirdPriceRangeCreate'])->name('third-price-range.create');
    Route::post('/third-price-range-store', [PriceListSettingController::class, 'thirdPriceRangeStore'])->name('third-price-range.store');
    Route::get('/third-price-range-edit', [PriceListSettingController::class, 'thirdPriceRangeEdit'])->name('third-price-range.edit');

    Route::get('/second-price-menu-index', [PriceListSettingController::class, 'secondPriceMenuIndex'])->name('second-price-menu.index');
    Route::get('/second-price-menu-create', [PriceListSettingController::class, 'secondPriceMenuCreate'])->name('second-price-menu.create');
    Route::post('/second-price-menu-store', [PriceListSettingController::class, 'secondPriceMenuStore'])->name('second-price-menu.store');
    Route::put('/second-price-menu-status/{id}', [PriceListSettingController::class, 'secondPriceMenuStatus'])->name('status.second-price-menu');

    Route::get('/card2-dropdown1-index', [PriceListSettingController::class, 'Card2Dropdwon1Index'])->name('card2-dropdown1.index');
    Route::get('/card2-dropdown1-create', [PriceListSettingController::class, 'Card2Dropdwon1Create'])->name('card2-dropdown1.create');
    Route::post('/card2-dropdown1-store', [PriceListSettingController::class, 'Card2Dropdwon1Store'])->name('card2-dropdown1.store');
    Route::get('/card2-dropdown1-edit', [PriceListSettingController::class, 'Card2Dropdwon1Edit'])->name('card2-dropdown1.edit');

    Route::get('/card2-dropdown2-index', [PriceListSettingController::class, 'Card2Dropdwon2Index'])->name('card2-dropdown2.index');
    Route::get('/card2-dropdown2-create', [PriceListSettingController::class, 'Card2Dropdwon2Create'])->name('card2-dropdown2.create');
    Route::post('/card2-dropdown2-store', [PriceListSettingController::class, 'Card2Dropdwon2Store'])->name('card2-dropdown2.store');
    Route::get('/card2-dropdown2-edit', [PriceListSettingController::class, 'Card2Dropdwon2Edit'])->name('card2-dropdown2.edit');

    Route::get('/card2-dropdown3-index', [PriceListSettingController::class, 'Card2Dropdwon3Index'])->name('card2-dropdown3.index');
    Route::get('/card2-dropdown3-create', [PriceListSettingController::class, 'Card2Dropdwon3Create'])->name('card2-dropdown3.create');
    Route::post('/card2-dropdown3-store', [PriceListSettingController::class, 'Card2Dropdwon3Store'])->name('card2-dropdown3.store');
    Route::get('/card2-dropdown3-edit', [PriceListSettingController::class, 'Card2Dropdwon3Edit'])->name('card2-dropdown3.edit');

    Route::get('/card2-dropdown4-index', [PriceListSettingController::class, 'Card2Dropdwon4Index'])->name('card2-dropdown4.index');
    Route::get('/card2-dropdown4-create', [PriceListSettingController::class, 'Card2Dropdwon4Create'])->name('card2-dropdown4.create');
    Route::post('/card2-dropdown4-store', [PriceListSettingController::class, 'Card2Dropdwon4Store'])->name('card2-dropdown4.store');
    Route::get('/card2-dropdown4-edit', [PriceListSettingController::class, 'Card2Dropdwon4Edit'])->name('card2-dropdown4.edit');
    
    Route::get('/survey-FO1-index', [ExaminationHeroSectionController::class, 'FO1SurveyIndex'])->name('survey-FO1.index');
    Route::get('/survey-FO1-create', [ExaminationHeroSectionController::class, 'FO1SurveyCreate'])->name('survey-FO1.create');
    Route::post('/survey-FO1-store', [ExaminationHeroSectionController::class, 'FO1SurveyStore'])->name('survey-FO1.store');
    
    Route::get('/survey-FO2-index', [ExaminationHeroSectionController::class, 'FO2SurveyIndex'])->name('survey-FO2.index');
    Route::get('/survey-FO2-create', [ExaminationHeroSectionController::class, 'FO2SurveyCreate'])->name('survey-FO2.create');
    Route::post('/survey-FO2-store', [ExaminationHeroSectionController::class, 'FO2SurveyStore'])->name('survey-FO2.store');
    
    Route::get('/survey-FO3-index', [ExaminationHeroSectionController::class, 'FO3surveyIndex'])->name('survey-FO3.index');
    Route::get('/survey-FO3-create', [ExaminationHeroSectionController::class, 'FO3surveyCreate'])->name('survey-FO3.create');
    Route::post('/survey-FO3-store', [ExaminationHeroSectionController::class, 'FO3surveyStore'])->name('survey-FO3.store');
    
    Route::get('/survey-FO4-index', [ExaminationHeroSectionController::class, 'FO4surveyIndex'])->name('survey-FO4.index');
    Route::get('/survey-FO4-create', [ExaminationHeroSectionController::class, 'FO4surveyCreate'])->name('survey-FO4.create');
    Route::post('/survey-FO4-store', [ExaminationHeroSectionController::class, 'FO4surveyStore'])->name('survey-FO4.store');
    
    Route::get('/survey-FO5-index', [ExaminationHeroSectionController::class, 'FO5surveyIndex'])->name('survey-FO5.index');
    Route::get('/survey-FO5-create', [ExaminationHeroSectionController::class, 'FO5surveyCreate'])->name('survey-FO5.create');
    Route::post('/survey-FO5-store', [ExaminationHeroSectionController::class, 'FO5surveyStore'])->name('survey-FO5.store');
    Route::get('/survey-FO5-edit', [ExaminationHeroSectionController::class, 'FO5surveyEdit'])->name('survey-FO5.edit');
    Route::post('/survey-FO5-update', [ExaminationHeroSectionController::class, 'FO5surveyUpdate'])->name('survey-FO5.update');

    Route::get('/survey-FO6-index', [ExaminationHeroSectionController::class, 'FO6surveyIndex'])->name('survey-FO6.index');
    Route::get('/survey-FO6-create', [ExaminationHeroSectionController::class, 'FO6surveyCreate'])->name('survey-FO6.create');
    Route::post('/survey-FO6-store', [ExaminationHeroSectionController::class, 'FO6surveyStore'])->name('survey-FO6.store');
    
    Route::get('/survey-FO7-index', [ExaminationHeroSectionController::class, 'FO7surveyIndex'])->name('survey-FO7.index');
    Route::get('/survey-FO7-create', [ExaminationHeroSectionController::class, 'FO7surveyCreate'])->name('survey-FO7.create');
    Route::post('/survey-FO7-store', [ExaminationHeroSectionController::class, 'FO7surveyStore'])->name('survey-FO7.store');
    
    Route::get('/survey-FO8-index', [ExaminationHeroSectionController::class, 'FO8surveyIndex'])->name('survey-FO8.index');
    Route::get('/survey-FO8-create', [ExaminationHeroSectionController::class, 'FO8surveyCreate'])->name('survey-FO8.create');
    Route::post('/survey-FO8-store', [ExaminationHeroSectionController::class, 'FO8surveyStore'])->name('survey-FO8.store');
    Route::get('/survey-FO8-edit', [ExaminationHeroSectionController::class, 'FO8surveyEdit'])->name('survey-FO8.edit');
    Route::post('/survey-FO8-update', [ExaminationHeroSectionController::class, 'FO8surveyUpdate'])->name('survey-FO8.update');
    
    Route::get('/survey-FO9-index', [ExaminationHeroSectionController::class, 'FO9surveyIndex'])->name('survey-FO9.index');
    Route::get('/survey-FO9-create', [ExaminationHeroSectionController::class, 'FO9surveyCreate'])->name('survey-FO9.create');
    Route::post('/survey-FO9-store', [ExaminationHeroSectionController::class, 'FO9surveyStore'])->name('survey-FO9.store');
    
    Route::get('/survey-FO10-index', [ExaminationHeroSectionController::class, 'FO10surveyIndex'])->name('survey-FO10.index');
    Route::get('/survey-FO10-create', [ExaminationHeroSectionController::class, 'FO10surveyCreate'])->name('survey-FO10.create');
    Route::post('/survey-FO10-store', [ExaminationHeroSectionController::class, 'FO10surveyStore'])->name('survey-FO10.store');
    
    Route::get('/survey-FO11-index', [ExaminationHeroSectionController::class, 'FO11surveyIndex'])->name('survey-FO11.index');
    Route::get('/survey-FO11-create', [ExaminationHeroSectionController::class, 'FO11surveyCreate'])->name('survey-FO11.create');
    Route::post('/survey-FO11-store', [ExaminationHeroSectionController::class, 'FO11surveyStore'])->name('survey-FO11.store');
    Route::get('/survey-FO11-edit', [ExaminationHeroSectionController::class, 'FO11surveyEdit'])->name('survey-FO11.edit');
    Route::post('/survey-FO11-update', [ExaminationHeroSectionController::class, 'FO11surveyUpdate'])->name('survey-FO11.update');

    Route::get('/survey-FO12-index', [ExaminationHeroSectionController::class, 'FO12surveyIndex'])->name('survey-FO12.index');
    Route::get('/survey-FO12-create', [ExaminationHeroSectionController::class, 'FO12surveyCreate'])->name('survey-FO12.create');
    Route::post('/survey-FO12-store', [ExaminationHeroSectionController::class, 'FO12surveyStore'])->name('survey-FO12.store');
    
    Route::get('/survey-FO13-index', [ExaminationHeroSectionController::class, 'FO13surveyIndex'])->name('survey-FO13.index');
    Route::get('/survey-FO13-create', [ExaminationHeroSectionController::class, 'FO13surveyCreate'])->name('survey-FO13.create');
    Route::post('/survey-FO13-store', [ExaminationHeroSectionController::class, 'FO13surveyStore'])->name('survey-FO13.store');
    
    Route::get('/survey-summary-index', [ExaminationHeroSectionController::class, 'summarySurveyIndex'])->name('survey-summary.index');
    Route::get('/survey-summary-create', [ExaminationHeroSectionController::class, 'summarySurveyCreate'])->name('survey-summary.create');
    Route::post('/survey-summary-store', [ExaminationHeroSectionController::class, 'summarySurveyStore'])->name('survey-summary.store');
    
    // Opinion Screen Setting Routes
    Route::get('/opinieHero-index', [OpinionSettingsController::class, 'opinionHeroIndex'])->name('opinieHero.index');
    Route::get('/opinieHero-create', [OpinionSettingsController::class, 'opinionHeroCreate'])->name('opinieHero.create');
    Route::post('/opinieHero-store', [OpinionSettingsController::class, 'opinionHeroStore'])->name('opinieHero.store');
    // Route::get('/opinieHero-edit', [OpinionSettingsController::class, 'opinionHeroEdit'])->name('opinieHero.edit');

    Route::get('/hero-slider-index', [OpinionSettingsController::class, 'heroSliderIndex'])->name('hero-slider.index');
    Route::get('/hero-slider-create', [OpinionSettingsController::class, 'heroSliderCreate'])->name('hero-slider.create');
    Route::post('/hero-slider-store', [OpinionSettingsController::class, 'heroSliderStore'])->name('hero-slider.store');
    Route::put('/hero-slider-status/{id}', [OpinionSettingsController::class, 'heroSliderStatus'])->name('status.hero-slider');

    Route::get('/brilliant-job-index', [OpinionSettingsController::class, 'brilliantJobIndex'])->name('brilliant-job.index');
    Route::get('/brilliant-job-create', [OpinionSettingsController::class, 'brilliantJobCreate'])->name('brilliant-job.create');
    Route::post('/brilliant-job-store', [OpinionSettingsController::class, 'brilliantJobStore'])->name('brilliant-job.store');
    Route::get('/brilliant-job-edit', [OpinionSettingsController::class, 'brilliantJobEdit'])->name('brilliant-job.edit');

    Route::get('/experts-index', [OpinionSettingsController::class, 'expertsIndex'])->name('experts.index');
    Route::get('/experts-create', [OpinionSettingsController::class, 'expertsCreate'])->name('experts.create');
    Route::post('/experts-store', [OpinionSettingsController::class, 'expertsStore'])->name('experts.store');
    Route::put('/experts-status/{id}', [OpinionSettingsController::class, 'expertsStatus'])->name('status.experts');

    Route::get('/order-index', [OpinionSettingsController::class, 'orderIndex'])->name('order.index');
    Route::get('/order-create', [OpinionSettingsController::class, 'orderCreate'])->name('order.create');
    Route::post('/order-store', [OpinionSettingsController::class, 'orderStore'])->name('order.store');
    Route::put('/order-status/{id}', [OpinionSettingsController::class, 'orderStatus'])->name('status.order');

    Route::get('/opnie-rating-index', [OpinionSettingsController::class, 'ratingIndex'])->name('opnie-rating.index');
    Route::get('/opnie-rating-create', [OpinionSettingsController::class, 'ratingCreate'])->name('opnie-rating.create');
    Route::post('/opnie-rating-store', [OpinionSettingsController::class, 'ratingStore'])->name('opnie-rating.store');
    Route::put('/opnie-rating-status/{id}', [OpinionSettingsController::class, 'ratingStatus'])->name('status.opnie-rating');

    Route::get('/opinieReview-index', [OpinionSettingsController::class, 'reviewIndex'])->name('opinieReview.index');
    Route::get('/opinieReview-create', [OpinionSettingsController::class, 'reviewCreate'])->name('opinieReview.create');
    Route::post('/opinieReview-store', [OpinionSettingsController::class, 'reviewStore'])->name('opinieReview.store');
    Route::get('/opinieReview-edit', [OpinionSettingsController::class, 'reviewEdit'])->name('opinieReview.edit');

    Route::get('/accordion-one-index', [OpinionSettingsController::class, 'accordionOneIndex'])->name('accordion-one.index');
    Route::get('/accordion-one-create', [OpinionSettingsController::class, 'accordionOneCreate'])->name('accordion-one.create');
    Route::post('/accordion-one-store', [OpinionSettingsController::class, 'accordionOneStore'])->name('accordion-one.store');
    Route::put('/accordion-one-status/{id}', [OpinionSettingsController::class, 'accordionOneStatus'])->name('status.accordion-one');

    Route::get('/accordion-two-index', [OpinionSettingsController::class, 'accordionTwoIndex'])->name('accordion-two.index');
    Route::get('/accordion-two-create', [OpinionSettingsController::class, 'accordionTwoCreate'])->name('accordion-two.create');
    Route::post('/accordion-two-store', [OpinionSettingsController::class, 'accordionTwoStore'])->name('accordion-two.store');
    Route::put('/accordion-two-status/{id}', [OpinionSettingsController::class, 'accordionTwoStatus'])->name('status.accordion-two');

    Route::get('/opinieReferences-index', [OpinionSettingsController::class, 'ReferencesIndex'])->name('opinieReferences.index');
    Route::get('/opinieReferences-create', [OpinionSettingsController::class, 'ReferencesCreate'])->name('opinieReferences.create');
    Route::post('/opinieReferences-store', [OpinionSettingsController::class, 'ReferencesStore'])->name('opinieReferences.store');
    Route::put('/opinieReferences-status/{id}', [OpinionSettingsController::class, 'ReferencesStatus'])->name('status.opinieReferences');

    Route::get('/reference-image-index', [OpinionSettingsController::class, 'referenceImageIndex'])->name('reference-image.index');
    Route::get('/reference-image-create', [OpinionSettingsController::class, 'referenceImageCreate'])->name('reference-image.create');
    Route::post('/reference-image-store', [OpinionSettingsController::class, 'referenceImageStore'])->name('reference-image.store');
    Route::get('/reference-image-edit', [OpinionSettingsController::class, 'referenceImageEdit'])->name('reference-image.edit');

    Route::get('/reference-card-index', [OpinionSettingsController::class, 'referenceCardIndex'])->name('reference-card.index');
    Route::get('/reference-card-create', [OpinionSettingsController::class, 'referenceCardCreate'])->name('reference-card.create');
    Route::post('/reference-card-store', [OpinionSettingsController::class, 'referenceCardStore'])->name('reference-card.store');
    Route::get('/reference-card-edit', [OpinionSettingsController::class, 'referenceCardEdit'])->name('reference-card.edit');
    
    Route::get('/brand-one-index', [OpinionSettingsController::class, 'brandOneIndex'])->name('brand-one.index');
    Route::get('/brand-one-create', [OpinionSettingsController::class, 'brandOneCreate'])->name('brand-one.create');
    Route::post('/brand-one-store', [OpinionSettingsController::class, 'brandOneStore'])->name('brand-one.store');
    Route::get('/brand-one-edit', [OpinionSettingsController::class, 'brandOneEdit'])->name('brand-one.edit');
    Route::post('/brand-one-update', [OpinionSettingsController::class, 'brandOneUpdate'])->name('brand-one.update');
    
    Route::get('/brand-title-index', [OpinionSettingsController::class, 'brandTilteIndex'])->name('brand-title.index');
    Route::get('/brand-title-create', [OpinionSettingsController::class, 'brandTilteCreate'])->name('brand-title.create');
    Route::post('/brand-title-store', [OpinionSettingsController::class, 'brandTilteStore'])->name('brand-title.store');
    
    Route::get('/title-rating-index', [OpinionSettingsController::class, 'ratingTilteIndex'])->name('title-rating.index');
    Route::get('/title-rating-create', [OpinionSettingsController::class, 'ratingTilteCreate'])->name('title-rating.create');
    Route::post('/title-rating-store', [OpinionSettingsController::class, 'ratingTilteStore'])->name('title-rating.store');
    
    Route::get('/opinion-rating-index', [OpinionSettingsController::class, 'opinionRatingIndex'])->name('opinion-rating.index');
    Route::get('/opinion-rating-create', [OpinionSettingsController::class, 'opinionRatingCreate'])->name('opinion-rating.create');
    Route::post('/opinion-rating-store', [OpinionSettingsController::class, 'opinionRatingStore'])->name('opinion-rating.store');
    Route::get('/opinion-rating-edit', [OpinionSettingsController::class, 'opinionRatingEdit'])->name('opinion-rating.edit');
    Route::post('/opinion-rating-update', [OpinionSettingsController::class, 'opinionRatingUpdate'])->name('opinion-rating.update');
    
    Route::get('/customer-replies-title-index', [OpinionSettingsController::class, 'customerRepliesTitleIndex'])->name('repliesTitle.index');
    Route::get('/customer-replies-title-create', [OpinionSettingsController::class, 'customerRepliesTitleCreate'])->name('repliesTitle.create');
    Route::post('/customer-replies-title-store', [OpinionSettingsController::class, 'customerRepliesTitleStore'])->name('repliesTitle.store');

    Route::get('/customer-replies-review-index', [OpinionSettingsController::class, 'customerRepliesReviewIndex'])->name('repliesReview.index');
    Route::get('/customer-replies-review-create', [OpinionSettingsController::class, 'customerRepliesReviewCreate'])->name('repliesReview.create');
    Route::post('/customer-replies-review-store', [OpinionSettingsController::class, 'customerRepliesReviewStore'])->name('repliesReview.store');
    Route::get('/customer-replies-review-edit', [OpinionSettingsController::class, 'customerRepliesReviewEdit'])->name('repliesReview.edit');
    Route::put('/customer-replies-review-update', [OpinionSettingsController::class, 'customerRepliesReviewUpdate'])->name('repliesReview.update');
    
    Route::get('/war-card-index', [CalculatorSettingController::class, 'warCardIndex'])->name('war-card.index');
    Route::get('/war-card-create', [CalculatorSettingController::class, 'warCardCreate'])->name('war-card.create');
    Route::post('/war-card-store', [CalculatorSettingController::class, 'warCardStore'])->name('war-card.store');
    
    Route::get('/war-title-index', [CalculatorSettingController::class, 'warTitledIndex'])->name('war-title.index');
    Route::get('/war-title-create', [CalculatorSettingController::class, 'warTitledCreate'])->name('war-title.create');
    Route::post('/war-title-store', [CalculatorSettingController::class, 'warTitledStore'])->name('war-title.store');
    
      Route::get('/opinieteams-index', [TeamsController::class, 'teamsIndex'])->name('opinieteams.index');
      Route::get('/opinieteams-create', [TeamsController::class, 'teamsCreate'])->name('opinieteams.create');
      Route::post('/opinieteams-stored', [TeamsController::class, 'teamStore'])->name('opinieteams.stored');
  
      Route::get('/personally-index', [TeamsController::class, 'AtOwonceIndex'])->name('personally.index');
      Route::get('/personally-create', [TeamsController::class, 'AtOwonceCreate'])->name('personally.create');
      Route::post('/personally-stored', [TeamsController::class, 'AtOwonceStore'])->name('personally.stored');
   
   // Sales Content
    Route::get('/hero-section', [SalesContentController::class, 'heroSection'])->name('hero-section');
    Route::get('/hero-section-create' ,[SalesContentController::class, 'heroSectionCreate'])->name('sales-content.create');
    Route::post('/hero-section-store' ,[SalesContentController::class, 'heroSectionStore'])->name('sales-content.store');

    Route::get('/description', [SalesContentController::class, 'description'])->name('description');
    Route::get('/description-create' ,[SalesContentController::class, 'descriptionCreate'])->name('description.create');
    Route::post('/description-store' ,[SalesContentController::class, 'descriptionStore'])->name('description.store');

    Route::get('/Salesfaq-title', [SalesContentController::class, 'faqTitle'])->name('Salesfaq-title');
    Route::get('/Salesfaq-create' ,[SalesContentController::class, 'faqCreate'])->name('Salesfaq.create');
    Route::post('/Salesfaq-store' ,[SalesContentController::class, 'faqStore'])->name('Salesfaq.store');

    Route::get('/Salesfaq-card-index', [SalesContentController::class, 'faqCardIndex'])->name('Salesfaq-card.index');
    Route::get('/Salesfaq-card-create', [SalesContentController::class, 'faqCardCreate'])->name('Salesfaq-card.create');
    Route::post('/Salesfaq-card-store', [SalesContentController::class, 'faqCardStore'])->name('Salesfaq-card.store');
    Route::get('/Salesfaq-card-edit', [SalesContentController::class, 'faqCardEdit'])->name('SalesfaqCard.edit');

    Route::get('/policySection', [SalesContentController::class, 'policySection'])->name('policySection');
    Route::get('/policySection-create' ,[SalesContentController::class, 'policySectionCreate'])->name('policySection.create');
    Route::post('/policySection-store', [SalesContentController::class, 'policySectionStore'])->name('policySection.store');

    Route::get('/pricing', [SalesContentController::class, 'pricing'])->name('pricing');
    Route::get('/pricing-create' ,[SalesContentController::class, 'pricingCreate'])->name('pricing.create');
    Route::post('/pricing-store', [SalesContentController::class, 'pricingStore'])->name('pricing.store');

    Route::get('/Salesprojects', [SalesContentController::class, 'projects'])->name('Salesprojects');
    Route::get('/Salesprojects-create' ,[SalesContentController::class, 'projectsCreate'])->name('SalesprojectsSection.create');
    Route::post('/Salesprojects-store', [SalesContentController::class, 'projectSectionStore'])->name('Salesprojects.store');

    Route::get('/Salesproject-2-index', [SalesContentController::class, 'project2'])->name('Salesproject-2.index');
    Route::get('/Salesproject-2-create' ,[SalesContentController::class, 'project2Create'])->name('Salesproject-2.create');
    Route::post('/Salesproject-2-store', [SalesContentController::class, 'project2Store'])->name('Salesproject-2.store');

    Route::get('/Salesproject-3-content-index', [SalesContentController::class, 'project3Content'])->name('Salesproject-3-content.index');
    Route::get('/Salesproject-3-content-create' ,[SalesContentController::class, 'project3ContentCreate'])->name('Salesproject-3-content.create');
    Route::post('/Salesproject-3-content-store', [SalesContentController::class, 'project3ContentStore'])->name('Salesproject-3-content.store');

    Route::get('/Salesproject-3-customerReview-index', [SalesContentController::class, 'project3CustomerReview'])->name('Salesproject-3-customerReview.index');
    Route::get('/Salesproject-3-customerReview-create' ,[SalesContentController::class, 'project3customerReviewCreate'])->name('Salesproject-3-customerReview.create');
    Route::post('/Salesproject-3-customerReview-store', [SalesContentController::class, 'project3customerReviewStore'])->name('Salesproject-3-customerReview.store');

    Route::get('/Salesproject-4-index', [SalesContentController::class, 'project4'])->name('Salesproject-4.index');
    Route::get('/Salesproject-4-create' ,[SalesContentController::class, 'project4Create'])->name('Salesproject-4.create');
    Route::post('/Salesproject-4-store', [SalesContentController::class, 'project4Store'])->name('Salesproject-4.store');

    Route::get('/Salesproject-5-content-index', [SalesContentController::class, 'project5Content'])->name('Salesproject-5-content.index');
    Route::get('/Salesproject-5-content-create' ,[SalesContentController::class, 'project5ContentCreate'])->name('Salesproject-5-content.create');
    Route::post('/Salesproject-5-content-store', [SalesContentController::class, 'project5ContentStore'])->name('Salesproject-5-content.store');

    Route::get('/Salesproject-5-customerReview-index', [SalesContentController::class, 'project5CustomerReview'])->name('Salesproject-5-customerReview.index');
    Route::get('/Salesproject-5-customerReview-create' ,[SalesContentController::class, 'project5customerReviewCreate'])->name('Salesproject-5-customerReview.create');
    Route::post('/Salesproject-5-customerReview-store', [SalesContentController::class, 'project5customerReviewStore'])->name('Salesproject-5-customerReview.store');

    Route::get('/Salesproject-6-index', [SalesContentController::class, 'project6'])->name('Salesproject-6.index');
    Route::get('/Salesproject-6-create' ,[SalesContentController::class, 'project6Create'])->name('Salesproject-6.create');
    Route::post('/Salesproject-6-store', [SalesContentController::class, 'project6Store'])->name('Salesproject-6.store');

    Route::get('/Salesproject-7-content-index', [SalesContentController::class, 'project7Content'])->name('Salesproject-7-content.index');
    Route::get('/Salesproject-7-content-create' ,[SalesContentController::class, 'project7ContentCreate'])->name('Salesproject-7-content.create');
    Route::post('/Salesproject-7-content-store', [SalesContentController::class, 'project7ContentStore'])->name('Salesproject-7-content.store');

    Route::get('/Salesproject-7-customerReview-index', [SalesContentController::class, 'project7CustomerReview'])->name('Salesproject-7-customerReview.index');
    Route::get('/Salesproject-7-customerReview-create' ,[SalesContentController::class, 'project7customerReviewCreate'])->name('Salesproject-7-customerReview.create');
    Route::post('/Salesproject-7-customerReview-store', [SalesContentController::class, 'project7customerReviewStore'])->name('Salesproject-7-customerReview.store');

    Route::get('/Salesproject-8-content-index', [SalesContentController::class, 'project8Content'])->name('Salesproject-8-content.index');
    Route::get('/Salesproject-8-content-create' ,[SalesContentController::class, 'project8ContentCreate'])->name('Salesproject-8-content.create');
    Route::post('/Salesproject-8-content-store', [SalesContentController::class, 'project8ContentStore'])->name('Salesproject-8-content.store');

    Route::get('/Salesproject-8-qualities-index', [SalesContentController::class, 'project8Qualities'])->name('Salesproject-8-qualities.index');
    Route::get('/Salesproject-8-qualities-create' ,[SalesContentController::class, 'project8QualitiesCreate'])->name('Salesproject-8-qualities.create');
    Route::post('/Salesproject-8-qualities-store', [SalesContentController::class, 'project8QualitiesStore'])->name('Salesproject-8-qualities.store');

    Route::get('/slider-section-content', [SalesContentController::class, 'sliderSectionContent'])->name('slider-section-content');
    Route::get('/slider-section-content-create' ,[SalesContentController::class, 'sliderSectionContentCreate'])->name('slider-section-content.create');
    Route::post('/slider-section-content-store', [SalesContentController::class, 'sliderSectionContentStore'])->name('slider-section-content.store');

    Route::get('/slider-section-images', [SalesContentController::class, 'sliderSectionImages'])->name('slider-section-images');
    Route::get('/slider-section-images-create' ,[SalesContentController::class, 'sliderSectionImagesCreate'])->name('slider-section-images.create');
    Route::post('/slider-section-images-store', [SalesContentController::class, 'sliderSectionImagesStore'])->name('slider-section-images.store');
    Route::get('/slider-section-images-edit', [SalesContentController::class, 'sliderSectionImagesEdit'])->name('slider-section-images.edit');

    Route::get('/buisnessTools-section', [SalesContentController::class, 'buisnessToolsSection'])->name('buisnessTools-section');
    Route::get('/buisnessTools-section-create' ,[SalesContentController::class, 'buisnessToolsSectionCreate'])->name('buisnessTools-section.create');
    Route::post('/buisnessTools-section-store' ,[SalesContentController::class, 'buisnessToolsSectionStore'])->name('buisnessTools-section.store');

    Route::get('/howItWorks-content', [SalesContentController::class, 'howItWorks'])->name('howItWorks-content');
    Route::get('/howItWorks-section-create' ,[SalesContentController::class, 'howItWorksCreate'])->name('howItWorks-section.create');
    Route::post('/howItWorks-section-store' ,[SalesContentController::class, 'howItWorksStore'])->name('howItWorks-section.store');

    Route::get('/howItWorks-steps', [SalesContentController::class, 'howItWorksSteps'])->name('howItWorks-steps');
    Route::get('/howItWorks-section-steps-create' ,[SalesContentController::class, 'howItWorksStepsCreate'])->name('howItWorks-steps.create');
    Route::post('/howItWorks-steps-store' ,[SalesContentController::class, 'howItWorksStepsStore'])->name('howItWorks-steps.store');

    Route::get('/knowMore-section', [SalesContentController::class, 'knowMore'])->name('knowMore-section');
    Route::get('/knowMore-section-create' ,[SalesContentController::class, 'knowMoreCreate'])->name('knowMore-section.create');
    Route::post('/knowMore-section-store' ,[SalesContentController::class, 'knowMoreStore'])->name('knowMore-section.store');
    
    //SECTION KREATYWNY MONTAZ VIDEO ROUTES
    Route::get('/kreatywny-hero-section-index', [KreatywnyHeroSectionController::class, 'kreatywnyHeroSectionIndex'])->name('kreatywny-hero-section.index');
    Route::get('/kreatywny-hero-section-create', [KreatywnyHeroSectionController::class, 'kreatywnyHeroSectionCreate'])->name('kreatywny-hero-section.create');
    Route::post('/kreatywny-hero-section-store', [KreatywnyHeroSectionController::class, 'kreatywnyHeroSectionStore'])->name('kreatywny-hero-section.store');
    Route::get('/kreatywny-hero-section-edit', [KreatywnyHeroSectionController::class, 'kreatywnyHeroSectionEdit'])->name('kreatywny-hero-section.edit');

    Route::get('/kreatywny-brand-section-index', [KreatywnyBrandController::class, 'kreatywnyBrandIndex'])->name('kreatywny-brand-section.index');
    Route::get('/kreatywny-brand-section-create', [KreatywnyBrandController::class, 'kreatywnyBrandCreate'])->name('kreatywny-brand-section.create');
    Route::post('/kreatywny-brand-section-store', [KreatywnyBrandController::class, 'kreatywnyBrandStore'])->name('kreatywny-brand-section.store');
    Route::get('/kreatywny-brand-section-edit', [KreatywnyBrandController::class, 'kreatywnyBrandEdit'])->name('kreatywny-brand-section.edit');

    Route::get('/kreatywny-company-index', [KreatywnyCompanyController::class, 'kreatywnyCompanyIndex'])->name('kreatywny-company.index');
    Route::get('/kreatywny-company-create', [KreatywnyCompanyController::class, 'kreatywnyCompanyCreate'])->name('kreatywny-company.create');
    Route::post('/kreatywny-company-store', [KreatywnyCompanyController::class, 'kreatywnyCompanyStore'])->name('kreatywny-company.store');
    Route::put('/kreatywny-company-status/{id}', [KreatywnyCompanyController::class, 'kreatywnyCompanyStatus'])->name('status.kreatywny-company');

    Route::get('/kreatywny-companycard-index', [KreatywnyCompanyCardController::class, 'kreatywnyCompanycardIndex'])->name('kreatywny-companycard.index');
    Route::get('/kreatywny-companycard-create', [KreatywnyCompanyCardController::class, 'kreatywnyCompanycardCreate'])->name('kreatywny-companycard.create');
    Route::post('/kreatywny-companycard-store', [KreatywnyCompanyCardController::class, 'kreatywnyCompanycardStore'])->name('kreatywny-companycard.store');
    Route::get('/kreatywny-companycard-edit', [KreatywnyCompanyCardController::class, 'kreatywnyCompanycardEdit'])->name('kreatywny-companycard.edit');
    Route::get('/kreatywny-companycard-delete/{id}', [KreatywnyCompanyCardController::class, 'kreatywnyCompanycardDelete'])->name('kreatywny-companycard.delete');

    Route::get('/kreatywny-rating-index', [KreatywnyRatingController::class, 'kreatywnyRatingIndex'])->name('kreatywny-rating.index');
    Route::get('/kreatywny-rating-create', [KreatywnyRatingController::class, 'kreatywnyRatingCreate'])->name('kreatywny-rating.create');
    Route::post('/kreatywny-rating-store', [KreatywnyRatingController::class, 'kreatywnyRatingStore'])->name('kreatywny-rating.store');
    Route::put('/kreatywny-rating-status/{id}', [KreatywnyRatingController::class, 'kreatywnyRatingStatus'])->name('status.kreatywny-rating');

    Route::get('/kreatywny-client-rating-index', [KreatywnyClientReviewController::class, 'kreatywnyClientRatingIndex'])->name('kreatywny-client-rating.index');
    Route::get('/kreatywny-client-rating-create', [KreatywnyClientReviewController::class, 'kreatywnyClientRatingCreate'])->name('kreatywny-client-rating.create');
    Route::post('/kreatywny-client-rating-store', [KreatywnyClientReviewController::class, 'kreatywnyClientRatingStore'])->name('kreatywny-client-rating.store');
    Route::put('/kreatywny-client-rating-status/{id}', [KreatywnyClientReviewController::class, 'kreatywnyClientRatingStatus'])->name('status.kreatywny-client-rating');

    Route::get('/kreatywny-summary-feedback-index', [KreatywnyClientReviewController::class, 'kreatywnyFeedbackSummaryIndex'])->name('kreatywny-summary-feedback.index');
    Route::get('/kreatywny-summary-feedback-create', [KreatywnyClientReviewController::class, 'kreatywnyFeedbackSummaryCreate'])->name('kreatywny-summary-feedback.create');
    Route::post('/kreatywny-summary-feedback-store', [KreatywnyClientReviewController::class, 'kreatywnyFeedbackSummaryStore'])->name('kreatywny-summary-feedback.store');
    Route::put('/kreatywny-summary-feedback-status/{id}', [KreatywnyClientReviewController::class, 'kreatywnyFeedbackSummaryStatus'])->name('status.kreatywny-summary-feedback');

    Route::get('/kreatywny-client-feedback-index', [KreatywnyClientReviewController::class, 'kreatywnyClientFeedbackIndex'])->name('kreatywny-client-feedback.index');
    Route::get('/kreatywny-client-feedback-create', [KreatywnyClientReviewController::class, 'kreatywnyClientFeedbackCreate'])->name('kreatywny-client-feedback.create');
    Route::post('/kreatywny-client-feedback-store', [KreatywnyClientReviewController::class, 'kreatywnyClientFeedbackStore'])->name('kreatywny-client-feedback.store');
    Route::get('/kreatywny-client-feedback-edit', [KreatywnyClientReviewController::class, 'kreatywnyClientFeedbackEdit'])->name('kreatywny-client-feedback.edit');
    Route::get('/kreatywny-client-feedback-delete/{id}', [KreatywnyClientReviewController::class, 'kreatywnyClientFeedbackDelete'])->name('kreatywny-client-feedback.delete');

    Route::get('/kreatywny-slider-images-index', [KreatywnyClientReviewController::class, 'kreatywnySliderImagesIndex'])->name('kreatywny-slider-images.index');
    Route::get('/kreatywny-slider-images-create', [KreatywnyClientReviewController::class, 'kreatywnySliderImagesCreate'])->name('kreatywny-slider-images.create');
    Route::post('/kreatywny-slider-images-store', [KreatywnyClientReviewController::class, 'kreatywnySliderImagesStore'])->name('kreatywny-slider-images.store');
    Route::put('/kreatywny-slider-images-status/{id}', [KreatywnyClientReviewController::class, 'kreatywnySliderImagesStatus'])->name('status.kreatywny-slider-images');

    Route::get('/kreatywny-iwd-section1-index', [KreatywnyIWDSectionController::class, 'kreatywnySection1Index'])->name('kreatywny-iwd-section1.index');
    Route::get('/kreatywny-iwd-section1-create', [KreatywnyIWDSectionController::class, 'kreatywnySection1Create'])->name('kreatywny-iwd-section1.create');
    Route::post('/kreatywny-iwd-section1-store', [KreatywnyIWDSectionController::class, 'kreatywnySection1Store'])->name('kreatywny-iwd-section1.store');
    Route::put('/kreatywny-iwd-section1-status/{id}', [KreatywnyIWDSectionController::class, 'kreatywnySection1Status'])->name('status.kreatywny-iwd-section1');

    Route::get('/kreatywny-iwd-section2-index', [KreatywnyIWDSectionController::class, 'kreatywnySection2Index'])->name('kreatywny-iwd-section2.index');
    Route::get('/kreatywny-iwd-section2-create', [KreatywnyIWDSectionController::class, 'kreatywnySection2Create'])->name('kreatywny-iwd-section2.create');
    Route::post('/kreatywny-iwd-section2-store', [KreatywnyIWDSectionController::class, 'kreatywnySection2Store'])->name('kreatywny-iwd-section2.store');
    Route::put('/kreatywny-iwd-section2-status/{id}', [KreatywnyIWDSectionController::class, 'kreatywnySection2Status'])->name('status.kreatywny-iwd-section2');

    Route::get('/kreatywny-iwd-section3-index', [KreatywnyIWDSectionController::class, 'kreatywnySection3Index'])->name('kreatywny-iwd-section3.index');
    Route::get('/kreatywny-iwd-section3-create', [KreatywnyIWDSectionController::class, 'kreatywnySection3Create'])->name('kreatywny-iwd-section3.create');
    Route::post('/kreatywny-iwd-section3-store', [KreatywnyIWDSectionController::class, 'kreatywnySection3Store'])->name('kreatywny-iwd-section3.store');
    Route::put('/kreatywny-iwd-section3-status/{id}', [KreatywnyIWDSectionController::class, 'kreatywnySection3Status'])->name('status.kreatywny-iwd-section3');

    Route::get('/kreatywny-iwd-section4-index', [KreatywnyIWDSectionController::class, 'kreatywnySection4Index'])->name('kreatywny-iwd-section4.index');
    Route::get('/kreatywny-iwd-section4-create', [KreatywnyIWDSectionController::class, 'kreatywnySection4Create'])->name('kreatywny-iwd-section4.create');
    Route::post('/kreatywny-iwd-section4-store', [KreatywnyIWDSectionController::class, 'kreatywnySection4Store'])->name('kreatywny-iwd-section4.store');
    Route::put('/kreatywny-iwd-section4-status/{id}', [KreatywnyIWDSectionController::class, 'kreatywnySection4Status'])->name('status.kreatywny-iwd-section4');

    Route::get('/kreatywny-iwd-section5-index', [KreatywnyIWDSectionController::class, 'kreatywnySection5Index'])->name('kreatywny-iwd-section5.index');
    Route::get('/kreatywny-iwd-section5-create', [KreatywnyIWDSectionController::class, 'kreatywnySection5Create'])->name('kreatywny-iwd-section5.create');
    Route::post('/kreatywny-iwd-section5-store', [KreatywnyIWDSectionController::class, 'kreatywnySection5Store'])->name('kreatywny-iwd-section5.store');
    Route::put('/kreatywny-iwd-section5-status/{id}', [KreatywnyIWDSectionController::class, 'kreatywnySection5Status'])->name('status.kreatywny-iwd-section5');

    Route::get('/kreatywny-iwd-section6-index', [KreatywnyIWDSectionController::class, 'kreatywnySection6Index'])->name('kreatywny-iwd-section6.index');
    Route::get('/kreatywny-iwd-section6-create', [KreatywnyIWDSectionController::class, 'kreatywnySection6Create'])->name('kreatywny-iwd-section6.create');
    Route::post('/kreatywny-iwd-section6-store', [KreatywnyIWDSectionController::class, 'kreatywnySection6Store'])->name('kreatywny-iwd-section6.store');
    Route::put('/kreatywny-iwd-section6-status/{id}', [KreatywnyIWDSectionController::class, 'kreatywnySection6Status'])->name('status.kreatywny-iwd-section6');

    Route::get('/kreatywny-iwd-section7-index', [KreatywnyIWDSectionController::class, 'kreatywnySection7Index'])->name('kreatywny-iwd-section7.index');
    Route::get('/kreatywny-iwd-section7-create', [KreatywnyIWDSectionController::class, 'kreatywnySection7Create'])->name('kreatywny-iwd-section7.create');
    Route::post('/kreatywny-iwd-section7-store', [KreatywnyIWDSectionController::class, 'kreatywnySection7Store'])->name('kreatywny-iwd-section7.store');
    Route::put('/kreatywny-iwd-section7-status/{id}', [KreatywnyIWDSectionController::class, 'kreatywnySection7Status'])->name('status.kreatywny-iwd-section7');
   
    //SECTION PROFESJONALNE NAGRYWANIE FILMOW ROUTES
    Route::get('/profesjonalne-hero-section-index', [ProfesjonalneHeroSectionController::class, 'profesjonalneHeroSectionIndex'])->name('profesjonalne-hero-section.index');
    Route::get('/profesjonalne-hero-section-create', [ProfesjonalneHeroSectionController::class, 'profesjonalneHeroSectionCreate'])->name('profesjonalne-hero-section.create');
    Route::post('/profesjonalne-hero-section-store', [ProfesjonalneHeroSectionController::class, 'profesjonalneHeroSectionStore'])->name('profesjonalne-hero-section.store');
    Route::get('/profesjonalne-hero-section-edit', [ProfesjonalneHeroSectionController::class, 'profesjonalneHeroSectionEdit'])->name('profesjonalne-hero-section.edit');

    Route::get('/profesjonalne-brand-section-index', [ProfesjonalneBrandController::class, 'profesjonalneBrandIndex'])->name('profesjonalne-brand-section.index');
    Route::get('/profesjonalne-brand-section-create', [ProfesjonalneBrandController::class, 'profesjonalneBrandCreate'])->name('profesjonalne-brand-section.create');
    Route::post('/profesjonalne-brand-section-store', [ProfesjonalneBrandController::class, 'profesjonalneBrandStore'])->name('profesjonalne-brand-section.store');
    Route::get('/profesjonalne-brand-section-edit', [ProfesjonalneBrandController::class, 'profesjonalneBrandEdit'])->name('profesjonalne-brand-section.edit');

    Route::get('/profesjonalne-company-index', [ProfesjonalneCompanyController::class, 'profesjonalneCompanyIndex'])->name('profesjonalne-company.index');
    Route::get('/profesjonalne-company-create', [ProfesjonalneCompanyController::class, 'profesjonalneCompanyCreate'])->name('profesjonalne-company.create');
    Route::post('/profesjonalne-company-store', [ProfesjonalneCompanyController::class, 'profesjonalneCompanyStore'])->name('profesjonalne-company.store');
    Route::put('/profesjonalne-company-status/{id}', [ProfesjonalneCompanyController::class, 'profesjonalneCompanyStatus'])->name('status.profesjonalne-company');

    Route::get('/profesjonalne-companycard-index', [ProfesjonalneCompanyCardController::class, 'profesjonalneCompanycardIndex'])->name('profesjonalne-companycard.index');
    Route::get('/profesjonalne-companycard-create', [ProfesjonalneCompanyCardController::class, 'profesjonalneCompanycardCreate'])->name('profesjonalne-companycard.create');
    Route::post('/profesjonalne-companycard-store', [ProfesjonalneCompanyCardController::class, 'profesjonalneCompanycardStore'])->name('profesjonalne-companycard.store');
    Route::get('/profesjonalne-companycard-edit', [ProfesjonalneCompanyCardController::class, 'profesjonalneCompanycardEdit'])->name('profesjonalne-companycard.edit');
    Route::get('/profesjonalne-companycard-delete/{id}', [ProfesjonalneCompanyCardController::class, 'profesjonalneCompanycardDelete'])->name('profesjonalne-companycard.delete');

    Route::get('/profesjonalne-rating-index', [ProfesjonalneRatingController::class, 'profesjonalneRatingIndex'])->name('profesjonalne-rating.index');
    Route::get('/profesjonalne-rating-create', [ProfesjonalneRatingController::class, 'profesjonalneRatingCreate'])->name('profesjonalne-rating.create');
    Route::post('/profesjonalne-rating-store', [ProfesjonalneRatingController::class, 'profesjonalneRatingStore'])->name('profesjonalne-rating.store');
    Route::put('/profesjonalne-rating-status/{id}', [ProfesjonalneRatingController::class, 'profesjonalneRatingStatus'])->name('status.profesjonalne-rating');

    Route::get('/profesjonalne-client-rating-index', [ProfesjonalneClientReviewController::class, 'profesjonalneClientRatingIndex'])->name('profesjonalne-client-rating.index');
    Route::get('/profesjonalne-client-rating-create', [ProfesjonalneClientReviewController::class, 'profesjonalneClientRatingCreate'])->name('profesjonalne-client-rating.create');
    Route::post('/profesjonalne-client-rating-store', [ProfesjonalneClientReviewController::class, 'profesjonalneClientRatingStore'])->name('profesjonalne-client-rating.store');
    Route::put('/profesjonalne-client-rating-status/{id}', [ProfesjonalneClientReviewController::class, 'profesjonalneClientRatingStatus'])->name('status.profesjonalne-client-rating');

    Route::get('/profesjonalne-summary-feedback-index', [ProfesjonalneClientReviewController::class, 'profesjonalneFeedbackSummaryIndex'])->name('profesjonalne-summary-feedback.index');
    Route::get('/profesjonalne-summary-feedback-create', [ProfesjonalneClientReviewController::class, 'profesjonalneFeedbackSummaryCreate'])->name('profesjonalne-summary-feedback.create');
    Route::post('/profesjonalne-summary-feedback-store', [ProfesjonalneClientReviewController::class, 'profesjonalneFeedbackSummaryStore'])->name('profesjonalne-summary-feedback.store');
    Route::put('/profesjonalne-summary-feedback-status/{id}', [ProfesjonalneClientReviewController::class, 'profesjonalneFeedbackSummaryStatus'])->name('status.profesjonalne-summary-feedback');

    Route::get('/profesjonalne-client-feedback-index', [ProfesjonalneClientReviewController::class, 'profesjonalneClientFeedbackIndex'])->name('profesjonalne-client-feedback.index');
    Route::get('/profesjonalne-client-feedback-create', [ProfesjonalneClientReviewController::class, 'profesjonalneClientFeedbackCreate'])->name('profesjonalne-client-feedback.create');
    Route::post('/profesjonalne-client-feedback-store', [ProfesjonalneClientReviewController::class, 'profesjonalneClientFeedbackStore'])->name('profesjonalne-client-feedback.store');
    Route::get('/profesjonalne-client-feedback-edit', [ProfesjonalneClientReviewController::class, 'profesjonalneClientFeedbackEdit'])->name('profesjonalne-client-feedback.edit');
    Route::get('/profesjonalne-client-feedback-delete/{id}', [ProfesjonalneClientReviewController::class, 'profesjonalneClientFeedbackDelete'])->name('profesjonalne-client-feedback.delete');

    Route::get('/profesjonalne-slider-images-index', [ProfesjonalneClientReviewController::class, 'profesjonalneSliderImagesIndex'])->name('profesjonalne-slider-images.index');
    Route::get('/profesjonalne-slider-images-create', [ProfesjonalneClientReviewController::class, 'profesjonalneSliderImagesCreate'])->name('profesjonalne-slider-images.create');
    Route::post('/profesjonalne-slider-images-store', [ProfesjonalneClientReviewController::class, 'profesjonalneSliderImagesStore'])->name('profesjonalne-slider-images.store');
    Route::put('/profesjonalne-slider-images-status/{id}', [ProfesjonalneClientReviewController::class, 'profesjonalneSliderImagesStatus'])->name('status.profesjonalne-slider-images');

    Route::get('/profesjonalne-iwd-section1-index', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection1Index'])->name('profesjonalne-iwd-section1.index');
    Route::get('/profesjonalne-iwd-section1-create', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection1Create'])->name('profesjonalne-iwd-section1.create');
    Route::post('/profesjonalne-iwd-section1-store', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection1Store'])->name('profesjonalne-iwd-section1.store');
    Route::put('/profesjonalne-iwd-section1-status/{id}', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection1Status'])->name('status.profesjonalne-iwd-section1');

    Route::get('/profesjonalne-iwd-section2-index', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection2Index'])->name('profesjonalne-iwd-section2.index');
    Route::get('/profesjonalne-iwd-section2-create', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection2Create'])->name('profesjonalne-iwd-section2.create');
    Route::post('/profesjonalne-iwd-section2-store', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection2Store'])->name('profesjonalne-iwd-section2.store');
    Route::put('/profesjonalne-iwd-section2-status/{id}', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection2Status'])->name('status.profesjonalne-iwd-section2');

    Route::get('/profesjonalne-iwd-section3-index', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection3Index'])->name('profesjonalne-iwd-section3.index');
    Route::get('/profesjonalne-iwd-section3-create', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection3Create'])->name('profesjonalne-iwd-section3.create');
    Route::post('/profesjonalne-iwd-section3-store', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection3Store'])->name('profesjonalne-iwd-section3.store');
    Route::put('/profesjonalne-iwd-section3-status/{id}', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection3Status'])->name('status.profesjonalne-iwd-section3');

    Route::get('/profesjonalne-iwd-section4-index', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection4Index'])->name('profesjonalne-iwd-section4.index');
    Route::get('/profesjonalne-iwd-section4-create', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection4Create'])->name('profesjonalne-iwd-section4.create');
    Route::post('/profesjonalne-iwd-section4-store', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection4Store'])->name('profesjonalne-iwd-section4.store');
    Route::put('/profesjonalne-iwd-section4-status/{id}', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection4Status'])->name('status.profesjonalne-iwd-section4');

    Route::get('/profesjonalne-iwd-section5-index', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection5Index'])->name('profesjonalne-iwd-section5.index');
    Route::get('/profesjonalne-iwd-section5-create', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection5Create'])->name('profesjonalne-iwd-section5.create');
    Route::post('/profesjonalne-iwd-section5-store', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection5Store'])->name('profesjonalne-iwd-section5.store');
    Route::put('/profesjonalne-iwd-section5-status/{id}', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection5Status'])->name('status.profesjonalne-iwd-section5');

    Route::get('/profesjonalne-iwd-section6-index', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection6Index'])->name('profesjonalne-iwd-section6.index');
    Route::get('/profesjonalne-iwd-section6-create', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection6Create'])->name('profesjonalne-iwd-section6.create');
    Route::post('/profesjonalne-iwd-section6-store', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection6Store'])->name('profesjonalne-iwd-section6.store');
    Route::put('/profesjonalne-iwd-section6-status/{id}', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection6Status'])->name('status.profesjonalne-iwd-section6');

    Route::get('/profesjonalne-iwd-section7-index', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection7Index'])->name('profesjonalne-iwd-section7.index');
    Route::get('/profesjonalne-iwd-section7-create', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection7Create'])->name('profesjonalne-iwd-section7.create');
    Route::post('/profesjonalne-iwd-section7-store', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection7Store'])->name('profesjonalne-iwd-section7.store');
    Route::put('/profesjonalne-iwd-section7-status/{id}', [ProfesjonalneIWDSectionController::class, 'profesjonalneSection7Status'])->name('status.profesjonalne-iwd-section7');
    
    // BUSINESS NAME CREATION ROUTES

    Route::controller(BNCHeroSectionController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-hero-section','index')->name('heroSection');

      Route::get('/business-name-creation-hero-section-add','add')->name('heroSectionAdd');

      Route::post('/business-name-creation-hero-section-store','store')->name('heroSectionStore');

      Route::get('/business-name-creation-hero-section-edit','edit')->name('heroSectionEdit');

      Route::post('/business-name-creation-hero-section-update','update')->name('heroSectionUpdate');

  });



  Route::controller(BNCAnatomyController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-anatomy','index')->name('anatomy');

      Route::get('/business-name-creation-anatomy-add','add')->name('anatomyAdd');

      Route::post('/business-name-creation-anatomy-store','store')->name('anatomyStore');

      Route::get('/business-name-creation-anatomy-edit','edit')->name('anatomyEdit');

      Route::post('/business-name-creation-anatomy-update','update')->name('anatomyUpdate');

  });



  Route::controller(BNCAnatomyGuideController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-guide','index')->name('anatomyGuide');

      Route::get('/business-name-creation-guide-add','add')->name('anatomyGuideAdd');

      Route::post('/business-name-creation-guide-store','store')->name('anatomyGuideStore');

      Route::get('/business-name-creation-guide-edit','edit')->name('anatomyGuideEdit');

      Route::post('/business-name-creation-guide-update','update')->name('anatomyGuideUpdate');

  });



  Route::controller(BNCLaunchEssentialsController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-launch-essentials','index')->name('launchEssentials');

      Route::get('/business-name-creation-launch-essentials-add','add')->name('launchEssentialsAdd');

      Route::post('/business-name-creation-launch-essentials-store','store')->name('launchEssentialsStore');

      Route::get('/business-name-creation-launch-essentials-edit','edit')->name('launchEssentialsEdit');

      Route::post('/business-name-creation-launch-essentials-update','update')->name('launchEssentialsUpdate');

  });





  Route::controller(BNCFAQController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-faq','index')->name('faq');

      Route::get('/business-name-creation-faq-add','add')->name('faqAdd');

      Route::post('/business-name-creation-faq-store','store')->name('faqStore');

      Route::get('/business-name-creation-faq-edit','edit')->name('faqEdit');

      Route::post('/business-name-creation-faq-update','update')->name('faqUpdate');

  });



  Route::controller(BNCProjectValueController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-project-value','index')->name('projectValue');

      Route::get('/business-name-creation-project-value-add','add')->name('projectValueAdd');

      Route::post('/business-name-creation-project-value-store','store')->name('projectValueStore');

      Route::get('/business-name-creation-project-value-edit','edit')->name('projectValueEdit');

      Route::post('/business-name-creation-project-value-update','update')->name('projectValueUpdate');

  });



  Route::controller(BNCCustomerReviewController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-customer-review','index')->name('customerReview');

      Route::get('/business-name-creation-customer-review-add','add')->name('customerReviewAdd');

      Route::post('/business-name-creation-customer-review-store','store')->name('customerReviewStore');

      Route::get('/business-name-creation-customer-review-edit','edit')->name('customerReviewEdit');

      Route::post('/business-name-creation-customer-review-update','update')->name('customerReviewUpdate');

  });





  Route::controller(BNCImplementationController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-implementation','index')->name('implementation');

      Route::get('/business-name-creation-implementation-add','add')->name('implementationAdd');

      Route::post('/business-name-creation-implementation-store','store')->name('implementationStore');

      Route::get('/business-name-creation-implementation-edit','edit')->name('implementationEdit');

      Route::post('/business-name-creation-implementation-update','update')->name('implementationUpdate');

  });





  Route::controller(BNCImplementationStartController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-implementation-start','index')->name('implementationStart');

      Route::get('/business-name-creation-implementation-start-add','add')->name('implementationStartAdd');

      Route::post('/business-name-creation-implementation-start-store','store')->name('implementationStartStore');

      Route::get('/business-name-creation-implementation-start-edit','edit')->name('implementationStartEdit');

      Route::post('/business-name-creation-implementation-start-update','update')->name('implementationStartUpdate');

  });





  Route::controller(BNCCompanyReviewController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-company-review','index')->name('companyReview');

      Route::get('/business-name-creation-company-review-add','add')->name('companyReviewAdd');

      Route::post('/business-name-creation-company-review-store','store')->name('companyReviewStore');

      Route::get('/business-name-creation-company-review-edit','edit')->name('companyReviewEdit');

      Route::post('/business-name-creation-company-review-update','update')->name('companyReviewUpdate');

  });





  Route::controller(BNCSpecialReviewController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-special-review','index')->name('specialReview');

      Route::get('/business-name-creation-special-review-add','add')->name('specialReview1Add');

      Route::post('/business-name-creation-special-review-store','store')->name('specialReview1Store');

      Route::get('/business-name-creation-special-review-edit','edit')->name('specialReview1Edit');

      Route::post('/business-name-creation-special-review-update','update')->name('specialReview1Update');

      Route::get('/business-name-creation-special-review-add2','add2')->name('specialReview2Add');

      Route::post('/business-name-creation-special-review-store2','store2')->name('specialReview2Store');

      Route::get('/business-name-creation-special-review-edit2','edit2')->name('specialReview2Edit');

      Route::post('/business-name-creation-special-review-update2','update2')->name('specialReview2Update');

  });





  Route::controller(BNCProfitSlideController::class)->as('businessNameCreation.')->group(function(){

      Route::get('/business-name-creation-profit-slide','index')->name('profitSlide');

      Route::get('/business-name-creation-profit-slide-add','add')->name('profitSlideAdd');

      Route::post('/business-name-creation-profit-slide-store','store')->name('profitSlideStore');

      Route::get('/business-name-creation-profit-slide-edit','edit')->name('profitSlideEdit');

      Route::post('/business-name-creation-profit-slide-update','update')->name('profitSlideUpdate');

  });

    // IMPLEMENTATION ROUTE
    Route::controller(ImplementationController::class)->as('implementation.')->group(function(){
        Route::get('/ex-implementation-index','index')->name('implementationIndex');
        Route::get('/ex-implementation-create','create')->name('implementationCreate');
        Route::post('/ex-implementation-store','store')->name('implementationStore');
    });

    Route::controller(ExampleController::class)->as('example.')->group(function(){
        Route::get('/example1-index','index')->name('example1Index');
        Route::get('/example1-create','create')->name('example1Create');
        Route::post('/example1-store','store')->name('example1Store');
    
        Route::get('/example2-index','example2Index')->name('example2Index');
        Route::get('/example2-create','example2Create')->name('example2Create');
        Route::post('/example2-store','example2Store')->name('example2Store');
        
        Route::get('/example3-index','example3Index')->name('example3Index');
        Route::get('/example3-create','example3Create')->name('example3Create');
        Route::post('/example3-store','example3Store')->name('example3Store');
    
        Route::get('/example4-index','example4Index')->name('example4Index');
        Route::get('/example4-create','example4Create')->name('example4Create');
        Route::post('/example4-store','example4Store')->name('example4Store');
    
        Route::get('/example5-index','example5Index')->name('example5Index');
        Route::get('/example5-create','example5Create')->name('example5Create');
        Route::post('/example5-store','example5Store')->name('example5Store');
        
        Route::get('/example6-index','example6Index')->name('example6Index');
        Route::get('/example6-create','example6Create')->name('example6Create');
        Route::post('/example6-store','example6Store')->name('example6Store');
    
        Route::get('/example7-index','example7Index')->name('example7Index');
        Route::get('/example7-create','example7Create')->name('example7Create');
        Route::post('/example7-store','example7Store')->name('example7Store');
        
        Route::get('/example8-index','example8Index')->name('example8Index');
        Route::get('/example8-create','example8Create')->name('example8Create');
        Route::post('/example8-store','example8Store')->name('example8Store');
        
        Route::get('/example9-index','example9Index')->name('example9Index');
        Route::get('/example9-create','example9Create')->name('example9Create');
        Route::post('/example9-store','example9Store')->name('example9Store');
        
        Route::get('/example10-index','example10Index')->name('example10Index');
        Route::get('/example10-create','example10Create')->name('example10Create');
        Route::post('/example10-store','example10Store')->name('example10Store');
        
        Route::get('/example11-index','example11Index')->name('example11Index');
        Route::get('/example11-create','example11Create')->name('example11Create');
        Route::post('/example11-store','example11Store')->name('example11Store');
        
        Route::get('/example12-index','example12Index')->name('example12Index');
        Route::get('/example12-create','example12Create')->name('example12Create');
        Route::post('/example12-store','example12Store')->name('example12Store');
        
        Route::get('/example13-index','example13Index')->name('example13Index');
        Route::get('/example13-create','example13Create')->name('example13Create');
        Route::post('/example13-store','example13Store')->name('example13Store');
    
        Route::get('/example14-index','example14Index')->name('example14Index');
        Route::get('/example14-create','example14Create')->name('example14Create');
        Route::post('/example14-store','example14Store')->name('example14Store');
    
        Route::get('/example15-index','example15Index')->name('example15Index');
        Route::get('/example15-create','example15Create')->name('example15Create');
        Route::post('/example15-store','example15Store')->name('example15Store');
        
        Route::get('/example16-index','example16Index')->name('example16Index');
        Route::get('/example16-create','example16Create')->name('example16Create');
        Route::post('/example16-store','example16Store')->name('example16Store');
        
        Route::get('/example17-index','example17Index')->name('example17Index');
        Route::get('/example17-create','example17Create')->name('example17Create');
        Route::post('/example17-store','example17Store')->name('example17Store');
        
        Route::get('/example18-index','example18Index')->name('example18Index');
        Route::get('/example18-create','example18Create')->name('example18Create');
        Route::post('/example18-store','example18Store')->name('example18Store');
        
        Route::get('/example19-index','example19Index')->name('example19Index');
        Route::get('/example19-create','example19Create')->name('example19Create');
        Route::post('/example19-store','example19Store')->name('example19Store');
        
        Route::get('/example20-index','example20Index')->name('example20Index');
        Route::get('/example20-create','example20Create')->name('example20Create');
        Route::post('/example20-store','example20Store')->name('example20Store');
        
        Route::get('/example21-index','example21Index')->name('example21Index');
        Route::get('/example21-create','example21Create')->name('example21Create');
        Route::post('/example21-store','example21Store')->name('example21Store');
        
        Route::get('/slider-index','sliderIndex')->name('sliderIndex');
        Route::get('/slider-create','sliderCreate')->name('sliderCreate');
        Route::post('/slider-store','sliderStore')->name('sliderStore');
        
        Route::get('/customer-review-index','customerReviewIndex')->name('reviewIndex');
        Route::get('/customer-review-create','customerReviewCreate')->name('reviewCreate');
        Route::post('/customer-review-store','customerReviewStore')->name('reviewStore');
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
