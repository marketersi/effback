<?php

namespace App\Http\Controllers;

use App\Models\PriceList;
use App\Models\FirstPriceMenuCard;
use App\Models\FirstPriceCardDropdwonOption;
use App\Models\FourthPriceMenuCard;
use App\Models\FourthPriceRange;
use App\Models\FourthPriceCardDropdwonOption;
use App\Models\FirstPriceRange;
use App\Models\ThirdPriceCard;
use App\Models\ThirdPriceCardDropdwonOption;
use App\Models\ThirdPriceRange;
use App\Models\SecondPriceCardDropdownOption;
use App\Models\SecondPriceCardDropdownOption2;
use App\Models\SecondPriceCardDropdownOption3;
use App\Models\SecondPriceCardDropdownOption4;
use App\Models\SecondPriceMenuCard;


use Illuminate\Http\Request;

class PriceListSettingController extends Controller
{
    public function menuPriceListIndex()
    {
        $priceDetail = PriceList::orderBy('id', 'desc')->get();
        return view('price-list.index', compact('priceDetail'));
    }
    public function menuPriceListCreate()
    {

        $details = PriceList::get();
        return view('price-list.create', compact('details'));
    }

    public function menuPriceListStore(Request $request)
    {
        try {
            $settingPriceList = [
                'title',
                'sub_title',
                'card_title',
                'card_subtitle',
            ];

            foreach ($settingPriceList as $val) {
                $value = $request->input($val);
                $existingSetting = PriceList::where('type', $val)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    PriceList::create(['type' => $val, 'message' => $value]);
                }
            }

            return redirect()->route('price-list.index')->with('success', 'Price list updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('price-list.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function menuPriceListStatus($id)
    {
        $user = PriceList::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // ******************* FIRST PRICE MENU *********************** //

    public function firstPriceMenuIndex()
    {

        $fistCardMenu = FirstPriceMenuCard::orderBy('id', 'desc')->get();
        return view('price-list.card-menu-1.index', compact('fistCardMenu'));
    }
    public function firstPriceMenuCreate()
    {

        $fistCard = FirstPriceMenuCard::orderBy('id', 'desc')->get();
        return view('price-list.card-menu-1.create', compact('fistCard'));
    }
    
    public function firstPriceMenuStore(Request $request)
    {
        try {
        $firstPriceList = [
            'menu_title',
            'section1_title',
            'section1_subtitle',
            'section1_buttonText',
            'section2_title',
            'section2_buttonText',
            'section3_title',
            'section3_subtitle1',
            'section3_textareaTitle',
            'section4_title',
            'section4_subtitle',
            'section4_buttonText',
            'websiteText',
            'contact_title',
            'contact_info',
            'contact_image',
            'contact_contactText',
            'contact_tel',
            'feedback_title',
            'feedback_message',
            'svgLink',
            'display_picture',
            'feedback_buttonText',
            'socialMedia_subtitle',
            'socialMedia_title',
            'socialMedia_linkText',
            'socialMedia_link',
            'socialMedia_bottonText',
            'modal_title',
            'modal_info',
            'modal_info_2',
            'modal_button1Text',
            'modal_button2Text',
            'modal_description',
            'modal_buttonText',
            

        ];

        foreach ($firstPriceList as $val) {
            $value = $request->input($val);
            $existingSetting = FirstPriceMenuCard::where('type', $val)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                FirstPriceMenuCard::create(['type' => $val, 'message' => $value]);
            }
        }

        return redirect()->route('first-price-menu.index')->with('success', 'Menu card Updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('first-price-menu.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    // ******************* FIRST PRICE DROPDOWN ***********************//

    public function FO1optionIndex()
    {
        $dropdown1 = FirstPriceCardDropdwonOption::orderBy('id', 'asc')->get();
        return view('price-list.card-menu-1.firstcard-dropdwon-index', compact('dropdown1'));
    }

    public function FO1optionCreate()
    {
        return view('price-list.card-menu-1.firstcard-dropdwon-create');
    }

    public function FO1optionStore(Request $request)
    {
        $request->validate([
            'first_menu_dropdown_value',
            'first_menu_dropdown_label',
        ]);

        try {

            if (isset($request->update_id)) {
                $dropdown1 = FirstPriceCardDropdwonOption::find($request->update_id);
            } else {

                $dropdown1 = new FirstPriceCardDropdwonOption;
            }
            $dropdown1->value = $request->first_menu_dropdown_value;
            $dropdown1->label = $request->first_menu_dropdown_label;
            $dropdown1->save();

            return redirect()->route('plo-dropdwonOptions1.index')->with('success', 'update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('plo-dropdwonOptions1.index')->with('error', 'An error occurred. Please try again.');
        }
    } 

    public function FO1optionEdit(Request $request)
    {
        $dropdown1 = FirstPriceCardDropdwonOption::find($request->id);

        return view('price-list.card-menu-1.firstcard-dropdwon-create', compact('dropdown1'));
    }

    // ******************* FIRST PRICE RANGE ***********************//

    public function firstPriceRangeIndex()
    {
        $rangeDetail = FirstPriceRange::orderBy('id', 'desc')->get();
        
        return view('price-list.first-price-range.range-index', compact('rangeDetail'));
    }
    public function firstPriceRangeCreate()
    {
        
        return view('price-list.first-price-range.range-create');
    }

    public function firstPriceRangeStore(Request $request)
    {
        
        $request->validate([
            'label',
            'description',
            'backgroundColor',
        ]);

        try {
            if (isset($request->update_id)) {
                $dropdown1 = FirstPriceRange::find($request->update_id);
            } else {

                $dropdown1 = new FirstPriceRange;
                
            }
            $dropdown1->label = $request->label;
            $dropdown1->description = $request->description;
            $dropdown1->backgroundColor = $request->backgroundColor;
            $dropdown1->save();

            return redirect()->route('first-price-range.index')->with('success', 'Update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('first-price-range.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function firstPriceRangeEdit(Request $request)
    {
        $details = FirstPriceRange::find($request->user_id);

        return view('price-list.first-price-range.range-create', compact('details'));
    }

     // ******************* FORTH PRICE MENU ***********************//

     public function fourthPriceMenuIndex()
     {
 
         $fourthCardMenu = FourthPriceMenuCard::orderBy('id', 'desc')->get();
         return view('price-list.card-menu-4.index', compact('fourthCardMenu'));
     }
     public function fourthPriceMenuCreate()
     {
 
         $fourthCard = FourthPriceMenuCard::orderBy('id', 'desc')->get();
         return view('price-list.card-menu-4.create', compact('fourthCard'));
     }
     public function fourthPriceMenuStore(Request $request)
     {
         try {
         $fourthPriceList = [
             'menu_title',
             'section1_title',
             'section1_subtitle',
             'section1_buttonText',
             'meta_title',
             'meta_info',
             'meta_button1Text',
             'meta_button2Text',
             'websiteText',
             'section2_title',
             'section2_buttonText',
             'section3_title_1',
             'section3_title_2',
             'section3_subtitle1',
             'section3_subtitle2',
             'section4_title',
             'section4_subtitle',
             'section4_buttonText',
             'contact_title',
             'contact_info',
             'contact_image',
             'contactText',
             'contact_telephone_no',
             'svgLink',
             'greeting_message',
             'display_picture',
             'feedback_title',
             'feedback_buttonText',
             'socialMedia_title',
             'socialMedia_subtitle',
             'link_text',
             'link',
             'social_button_text',
              'modal_title',
             'modal_info',
             'modal_info_2',
             'modal_button1Text',
             'modal_button2Text'
         ];
 
         foreach ($fourthPriceList as $val) {
             $value = $request->input($val);
             $existingSetting = FourthPriceMenuCard::where('type', $val)->first();
 
             if ($existingSetting) {
                 $existingSetting->update(['message' => $value]);
             } else {
                 FourthPriceMenuCard::create(['type' => $val, 'message' => $value]);
             }
         }
 
         return redirect()->route('fourth-price-menu.index')->with('success', 'Menu card created successfully');
     } catch (\Exception $e) {
         return redirect()->route('fourth-price-menu.index')->with('error', 'Error: ' . $e->getMessage());
     }
 }
 
     public function fourthPriceMenuStatus($id)
    {
        $fourthPriceMenu = FourthPriceMenuCard::findOrFail($id);
            if ($fourthPriceMenu) {
                $fourthPriceMenu->status = ($fourthPriceMenu->status == 'Active') ? 'Inactive' : 'Active';
                $fourthPriceMenu->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
    }

    // ******************* FORTH PRICE RANGE ***********************//

    public function fourthPriceRangeIndex()
    {
        $rangeDetail = FourthPriceRange::orderBy('id', 'desc')->get();
        
        return view('price-list.card-menu-4.fourth-price-range.range-index', compact('rangeDetail'));
    }
    public function fourthPriceRangeCreate()
    {
        
        return view('price-list.card-menu-4.fourth-price-range.range-create');
    }

    public function fourthPriceRangeStore(Request $request)
    {
        
        $request->validate([
            'label',
            'description',
            'backgroundColor',
        ]);

        try {
            if (isset($request->update_id)) {
                $dropdown4 = FourthPriceRange::find($request->update_id);
            } else {

                $dropdown4 = new FourthPriceRange;
                
            }
            $dropdown4->label = $request->label;
            $dropdown4->description = $request->description;
            $dropdown4->backgroundColor = $request->backgroundColor;
            $dropdown4->save();

            return redirect()->route('fourth-price-range.index')->with('success', 'Update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('fourth-price-range.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function fourthPriceRangeEdit(Request $request)
    {
        $details = FourthPriceRange::find($request->user_id);
        return view('price-list.card-menu-4.fourth-price-range.range-create', compact('details'));
    }


    // ******************* FORTH PRICE DROPDOWN ***********************//

    public function FO4optionIndex()
    {
        $dropdown4 = FourthPriceCardDropdwonOption::orderBy('id', 'desc')->get();
        return view('price-list.card-menu-4.fourth-dropdwon-option.index', compact('dropdown4'));
    }

    public function FO4optionCreate()
    {
        return view('price-list.card-menu-4.fourth-dropdwon-option.create');
    }

    public function FO4optionStore(Request $request)
    {
        $request->validate([
            'fourth_menu_dropdown_value',
            'fourth_menu_dropdown_label',
        ]);
        
        try {

            if (isset($request->update_id)) {
                $dropdown4 = FourthPriceCardDropdwonOption::find($request->update_id);
            } else {

                $dropdown4 = new FourthPriceCardDropdwonOption;
                
            }
            $dropdown4->value = $request->fourth_menu_dropdown_value;
            $dropdown4->label = $request->fourth_menu_dropdown_label;
            $dropdown4->save();

            return redirect()->route('plo-dropdwonOptions4.index')->with('success', 'Update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('plo-dropdwonOptions4.index')->with('error', 'An error occurred. Please try again.');
        }
    } 

    public function FO4optionEdit(Request $request)
    {
        $dropdown4 = FourthPriceCardDropdwonOption::find($request->user_id);

        return view('price-list.card-menu-4.fourth-dropdwon-option.create', compact('dropdown4'));
        
    }
    // ******************* SECOND PRICE MENU ***********************//

    // Second Price List Menu
    public function secondPriceMenuIndex()
    {
        $secondPriceMenu = SecondPriceMenuCard::orderBy('id', 'asc')->get();
        return view('price-list.card-menu-2.index', compact('secondPriceMenu'));
    }

    public function secondPriceMenuCreate()
    {
        $secondCard = SecondPriceMenuCard::get();
        return view('price-list.card-menu-2.create', compact('secondCard'));
    }

    public function secondPriceMenuStore(Request $request)
    {
        $secondPriceMenuSetting = [
            'menu_title',
            'section_1_title_1',
            'section_1_title_2',
            'section_2_title_1',
            'section_2_title_2',
            'section_2_subtitle',
            'section_3_title_1',
            'section_3_title_2',
            'section_4_title',
            'model_title',
             'modal_description',
            'button_text',
            'contact_title',
            'contact_info',
            'contact_image',
            'contact_text',
            'contact_number',
            'message_response',
            'greeting_message',
            'link_prompt_text',
            'social_media_text',
            'display_picture',
            'email_svg',
            'section2_modal_title',
            'section2_modal_description',
            'section2_modal_button'
        ];

        foreach ($secondPriceMenuSetting as $secondPriceMenu) {
            $value = $request->input($secondPriceMenu);
            $existingSetting = SecondPriceMenuCard::where('type', $secondPriceMenu)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                SecondPriceMenuCard::create(['type' => $secondPriceMenu, 'message' => $value]);
            }
        }
        return redirect()->route('second-price-menu.index')->with('success', 'Second Price Menu Updated successfully');
    }

    public function secondPriceMenuStatus($id)
    {
        $user = SecondPriceMenuCard::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    // Second DropDown Option
    public function Card2Dropdwon1Index()
    {
        $card2dropdown1 = SecondPriceCardDropdownOption::orderBy('id', 'asc')->get();
        return view('price-list.card-menu-2.dropdown-1.index', compact('card2dropdown1'));
    }

    public function Card2Dropdwon1Create()
    {
        return view('price-list.card-menu-2.dropdown-1.create');
    }

    public function Card2Dropdwon1Store(Request $request)
    {
        $request->validate([
            'value',
            'lable'
        ]);


            if (isset($request->update_id)) {
                $card2dropdown1 = SecondPriceCardDropdownOption::find($request->update_id);

            } else {
                $card2dropdown1 = new SecondPriceCardDropdownOption;
            }

            $card2dropdown1->value = $request->value;
            $card2dropdown1->lable = $request->lable;
            $card2dropdown1->save();
            return redirect()->route('card2-dropdown1.index')->with('success', 'update Successfully!!');
    }

    public function Card2Dropdwon1Edit(Request $request)
    {
        $card2dropdown1 = SecondPriceCardDropdownOption::find($request->id);
        return view('price-list.card-menu-2.dropdown-1.edit', compact('card2dropdown1'));
    }

    //Second Card dropdown-2
    public function Card2Dropdwon2Index()
    {
        $card2dropdown2 = SecondPriceCardDropdownOption2::orderBy('id', 'asc')->get();
        return view('price-list.card-menu-2.dropdown-2.index', compact('card2dropdown2'));
    }

    public function Card2Dropdwon2Create()
    {
        return view('price-list.card-menu-2.dropdown-2.create');
    }

    public function Card2Dropdwon2Store(Request $request)
    {
        $request->validate([
            'value',
            'lable'
        ]);


            if (isset($request->update_id)) {
                $card2dropdown2 = SecondPriceCardDropdownOption2::find($request->update_id);

            } else {
                $card2dropdown2 = new SecondPriceCardDropdownOption2;
            }

            $card2dropdown2->value = $request->value;
            $card2dropdown2->lable = $request->lable;;
            $card2dropdown2->save();
            return redirect()->route('card2-dropdown2.index')->with('success', 'update Successfully!!');
    }

    public function Card2Dropdwon2Edit(Request $request)
    {
        $card2dropdown2 = SecondPriceCardDropdownOption2::find($request->id);
        return view('price-list.card-menu-2.dropdown-2.edit', compact('card2dropdown2'));
    }

    //Second Card dropdown-3
    public function Card2Dropdwon3Index()
    {
        $card2dropdown3 = SecondPriceCardDropdownOption3::orderBy('id', 'asc')->get();
        return view('price-list.card-menu-2.dropdown-3.index', compact('card2dropdown3'));
    }

    public function Card2Dropdwon3Create()
    {
        return view('price-list.card-menu-2.dropdown-3.create');
    }

    public function Card2Dropdwon3Store(Request $request)
    {
        $request->validate([
            'value',
            'lable'
        ]);


            if (isset($request->update_id)) {
                $card2dropdown3 = SecondPriceCardDropdownOption3::find($request->update_id);

            } else {
                $card2dropdown3 = new SecondPriceCardDropdownOption3;
            }

            $card2dropdown3->value = $request->value;
            $card2dropdown3->lable = $request->lable;
            $card2dropdown3->save();
            return redirect()->route('card2-dropdown3.index')->with('success', 'update Successfully!!');
    }

    public function Card2Dropdwon3Edit(Request $request)
    {
        $card2dropdown3 = SecondPriceCardDropdownOption3::find($request->id);
        return view('price-list.card-menu-2.dropdown-3.edit', compact('card2dropdown3'));
    }
    
    //Second Card dropdown-4
    public function Card2Dropdwon4Index()
    {
        $card2dropdown4 = SecondPriceCardDropdownOption4::orderBy('id', 'asc')->get();
        return view('price-list.card-menu-2.dropdown-4.index', compact('card2dropdown4'));
    }

    public function Card2Dropdwon4Create()
    {
        return view('price-list.card-menu-2.dropdown-4.create');
    }

    public function Card2Dropdwon4Store(Request $request)
    {
        $request->validate([
            'value',
            'lable'
        ]);


            if (isset($request->update_id)) {
                $card2dropdown4 = SecondPriceCardDropdownOption4::find($request->update_id);

            } else {
                $card2dropdown4 = new SecondPriceCardDropdownOption4;
            }

            $card2dropdown4->value = $request->value;
            $card2dropdown4->lable = $request->lable;
            $card2dropdown4->save();
            return redirect()->route('card2-dropdown4.index')->with('success', 'update Successfully!!');
    }

    public function Card2Dropdwon4Edit(Request $request)
    {
        $card2dropdown4 = SecondPriceCardDropdownOption4::find($request->id);
        return view('price-list.card-menu-2.dropdown-4.edit', compact('card2dropdown4'));
    }

    // ******************* THIRD PRICE MENU ***********************//

    public function thirdPriceMenuIndex()
    {
        $menus = ThirdPriceCard::orderBy('id', 'asc')->get();
        return view('price-list.card-menu-3.index', compact('menus'));
    }

    public function thirdPriceMenuCreate()
    {
        $thirdCard = ThirdPriceCard::orderBy('id', 'desc')->get();
        
        return view('price-list.card-menu-3.create', compact('thirdCard'));
    }

    public function thirdPriceMenuStore(Request $request)
    {
        try {
        $firstPriceList = [
            'menuText',
            'form1_title',
            'form1_subtitle',
            'form1_buttonText',
            'form1_websiteText',
            'form2_title',
            'form2_buttonText',
            'form3_textareaTitle',
            'form3_textareaSubtitle',
            'form3_inputTitle',
            'form3_buttonText',
            'form3_modal_info',
            'form3_modal_buttonText',
            'form4_title',
            'form4_subtitle',
            'form4_buttonText',
            'form4_contact_title',
            'form4_contact_info',
            'form4_contact_image',
            'form4_contact_contactText',
            'form4_contact_tel',
            'feedback_svgLink',
            'feedback_displayPicture',
            'feedback_message',
            'feedback_title',
            'feedback_social_title',
            'feedback_social_subtitle',
            'feedback_social_linkText',
            'feedback_social_link',
            'feedback_social_bottonText',
            'feedback_buttonText',
        ];

        foreach ($firstPriceList as $val) {
            $value = $request->input($val);
            $existingSetting = ThirdPriceCard::where('type', $val)->first();

            if ($existingSetting) {
                $existingSetting->update(['message' => $value]);
            } else {
                ThirdPriceCard::create(['type' => $val, 'message' => $value]);
            }
        }

        return redirect()->route('third-price-menu.index')->with('success', 'Menu Card Update Successfully');
        } catch (\Exception $e) {
            return redirect()->route('third-price-menu.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function thirdPriceMenuEdit(Request $request)
    {
        $menus = ThirdPriceCard::find($request->user_id);

        return view('price-list.card-menu-3.create', compact('menus'));
    }

    // ******************* THIRD PRICE DROPDOWN *********************** //

    public function FO3optionIndex()
    {
        $dropdown3 = ThirdPriceCardDropdwonOption::orderBy('id', 'asc')->get();
        return view('price-list.card-menu-3.thirdcard-dropdwon-index', compact('dropdown3'));
    }

    public function FO3optionCreate()
    {
        return view('price-list.card-menu-3.thirdcard-dropdwon-create');
    }

    public function FO3optionStore(Request $request)
    {
        $request->validate([
            'first_menu_dropdown_value',
            'first_menu_dropdown_label',
        ]);
        
        try {

            if (isset($request->update_id)) {
                $dropdown1 = ThirdPriceCardDropdwonOption::find($request->update_id);
            } else {

                $dropdown1 = new ThirdPriceCardDropdwonOption;
                
            }
            $dropdown1->value = $request->third_menu_dropdown_value;
            $dropdown1->label = $request->third_menu_dropdown_label;
            $dropdown1->save();

            return redirect()->route('plo-dropdwonOptions3.index')->with('success', 'Update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('plo-dropdwonOptions3.index')->with('error', 'An error occurred. Please try again.');
        }
    } 

    public function FO3optionEdit(Request $request)
    {
        $dropdown3 = ThirdPriceCardDropdwonOption::find($request->user_id);

        return view('price-list.card-menu-3.thirdcard-dropdwon-create', compact('dropdown3'));
    }

    // ******************* THIRD PRICE RANGE ***********************//

    public function thirdPriceRangeIndex()
    {
        $rangeDetail = ThirdPriceRange::orderBy('id', 'desc')->get();
        
        return view('price-list.third-price-range.index', compact('rangeDetail'));
    }
    public function thirdPriceRangeCreate()
    {
        
        return view('price-list.third-price-range.create');
    }

    public function thirdPriceRangeStore(Request $request)
    {
        
        $request->validate([
            'label',
            'description',
            'backgroundColor',
        ]);

        try {
            if (isset($request->update_id)) {
                $dropdown1 = ThirdPriceRange::find($request->update_id);
            } else {

                $dropdown1 = new ThirdPriceRange;
                
            }
            $dropdown1->label = $request->label;
            $dropdown1->description = $request->description;
            $dropdown1->backgroundColor = $request->backgroundColor;
            $dropdown1->save();

            return redirect()->route('third-price-range.index')->with('success', 'Update Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('third-price-range.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function thirdPriceRangeEdit(Request $request)
    {
        $details = ThirdPriceRange::find($request->user_id);

        return view('price-list.third-price-range.create', compact('details'));
    }


}
