<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamSetting;
use App\Models\TeamCard;  
use App\Models\TeamCard2;
use App\Models\TeamImage;
use App\Models\TeamSection9;




class TeamSettingController extends Controller
{
    
    public function TeamView()
    {
        $details =TeamSetting::orderBy('id','desc')->get();
        return view('TeamScreen.teamsection',compact("details"));
    }



    public function teamsearchStore(Request $request)
    {
        //dd($request->all());
       try{
                $teamsetting = [
                    'main_title', 'sub_title' ,'right_image','left_image','background_video','title_2','para_one', 'para_two' ,'para_three' , 'section_title_one' ,'section_subtitle_one','section_one_para_one','section_one_para_two'
              ,'section_one_img' ,'section_two_title','section_two_subtitle','section_two_image', 'section_two_para' ,'animated_small_image','sub_title_discription','section_three_header', 'section_three_subheader' ,'section_four_para','section_five_title','section_five_imgone',
              'section_five_imgtwo','section_five_bgimage','section_five_para','section_five_paratwo'
                ];

                
                foreach($teamsetting as $team){
                    $value = $request->input($team);
                    $exesting = TeamSetting:: where('type' ,$team)->first();
                    if ($exesting) {
                        $exesting->update(['message' => $value]);
                    } else {
                        TeamSetting::create(['type' => $team, 'message' => $value]);
                    }
                }
                

                return redirect()->route('teamsection.create')->with('success', 'Contact settings updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('teamsection.add')->with('error', 'Error: ' . $e->getMessage());
        }
            }


    //         if(isset($request->update_id)){
    //     $TeamSetting = TeamSetting::find($request->update_id);


    //         }else{

    //         $TeamSetting = new TeamSetting;
    //          //dd("hello");
    //         } 
    //         $TeamSetting->main_title = $request->main_title;
    //        $TeamSetting->sub_title = $request->sub_title;
    //        $TeamSetting->first_image = $request->first_image;
 
    //         $TeamSetting->save();
        


    //         return redirect()->route('teamscreen')->with('success', 'Added Successfully!!');
    //     // } catch (\Exception $e) {
    //     //     return redirect()->route('feedback.index')->with('error', 'An error occurred. Please try again.');
    //     // }
    // }


    public function TeamCardView()
    {
        $details =TeamCard::orderBy('id','desc')->get();
        return view('TeamScreen.TeamCard',compact("details"));
        //return view('TeamScreen.TeamCard');
    }

    public function teamCard1Index()
    {

        $details = TeamCard::get();
       // return redirect('TeamScreen.Teamsection', compact('details'));
         return view('TeamScreen.teamCard1-Index', compact('details'));
        
    }


    public function TeamCardStore(Request $request)
    {
        try{
            $teamcard1 = [
                'name', 'designation' ,'image' ,'quate_one'
            ];

            
            foreach($teamcard1 as $team){
                $value = $request->input($team);
                $exesting = TeamCard:: where('type' ,$team)->first();
                if ($exesting) {
                    $exesting->update(['message' => $value]);
                } else {
                    TeamCard::create(['type' => $team, 'message' => $value]);
                }
            }
            

            return redirect()->route('team.card1.index')->with('success', 'Contact settings updated successfully');
           } catch (\Exception $e) {
           return redirect()->route('team.card1.form')->with('error', 'Error: ' . $e->getMessage());
           }
        
    }

    public function TeamCard1Status($id)
    {
            $teamCard = TeamCard::findOrFail($id);
            if ($teamCard) {
                $teamCard->status = ($teamCard->status == 'Active') ? 'Inactive' : 'Active';
                $teamCard->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Card not found.');
    }




    public function teamsearchCreate()
    {

        $details = TeamSetting::get();
       // return redirect('TeamScreen.Teamsection', compact('details'));
         return view('TeamScreen.index', compact('details'));
        
    }
   
    public function teamCard2Index()
    {

        $details = TeamCard2::get();
       // return redirect('TeamScreen.Teamsection', compact('details'));
         return view('TeamScreen.teamCard2-Index', compact('details'));
        
    }
    
    public function TeamCardForm()
    {
        $details =TeamCard2::orderBy('id','desc')->get();
        return view('TeamScreen.TeamCard2',compact("details"));
        //return view('TeamScreen.TeamCard2');
        
    }


    public function TeamCardStore2(Request $request)
    {
    //    dd('hello');
        try{
            $teamcard2 = [
                'name','image' ,'quate_one'
            ];

            
            foreach($teamcard2 as $team){
                $value = $request->input($team);
                $exesting = TeamCard2:: where('type' ,$team)->first();
                if ($exesting) {
                    $exesting->update(['message' => $value]);
                } else {
                    TeamCard2::create(['type' => $team, 'message' => $value]);
                }
            }
            

            return redirect()->route('team.card2.index')->with('success', 'TeamCard2 updated successfully');
           } catch (\Exception $e) {
           return redirect()->route('team.card2.form')->with('error', 'Error: ' . $e->getMessage());
           }
        
    }

    public function TeamCard2Status($id)
    {
            $teamCard = TeamCard2::findOrFail($id);
            if ($teamCard) {
                $teamCard->status = ($teamCard->status == 'Active') ? 'Inactive' : 'Active';
                $teamCard->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Card not found.');
    }

     
    public function teamImageIndex()
    {

        $details = TeamImage::get();
       // return redirect('TeamScreen.Teamsection', compact('details'));
         return view('TeamScreen.TeamImage', compact('details'));
        
    }

    public function teamImageForm()
    {

        return view('TeamScreen.TeamImageForm');
        
    }


    public function TeamImageStore(Request $request)
    {
    //    dd('hello');
        try{
            $teamImage = [
                'Team_image' 
            ];

            
            foreach($teamImage as $team){
                $value = $request->input($team);
                // $exesting = TeamImage:: where('type' ,$team)->first();
                TeamImage::create(['type' => $team, 'message' => $value]);

                // if ($exesting) {
                //     $exesting->update(['message' => $value]);
                // } else {
                //     TeamImage::create(['type' => $team, 'message' => $value]);
                // }
            }
            

            return redirect()->route('team.image')->with('success', 'TeamImage updated successfully');
           } catch (\Exception $e) {
           return redirect()->route('team.image.form')->with('error', 'Error: ' . $e->getMessage());
           }
        
    }


    public function TeamImageEdit(Request $request)
    {

       $id = $request->input('id');
       $images = TeamImage::find($id);
        return view('TeamScreen.TeamImageFormEdit' , compact('images'));

     }


    public function TeamImageUpdate(Request $request)
    {

        $request -> validate([
            'message' => '',
            'id' => '',
        ]);
        $Id = $request->input('id');
        $post = TeamImage::find($Id);
        $post->update([
            'message'=>$request->Team_image
        ]);

        if($post == false){
            return redirect()->route('team.image.edit')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('team.image')->with('success',' Updated Successfully');
    }

    //hero section  ---------------------

    public function herosectionIndex()
    {

        // $herosection = TeamSetting::get();
        $herosection = TeamSetting::where('type', 'main_title')
        ->orWhere('type', 'sub_title')
        ->orWhere('type', 'right_image')
        ->orWhere('type', 'left_image')
        ->orWhere('type', 'background_video')
        ->orWhere('type', 'title_2')
        ->orWhere('type', 'para_one')
        ->orWhere('type', 'para_two')
        ->orWhere('type', 'para_three')
        ->get();
         return view('TeamScreen.heroindex', compact('herosection'));
        
    }

    public function heroSectionForm()
    {
        $details =TeamSetting::orderBy('id','desc')->get();
        return view('TeamScreen.heroSectionForm',compact("details"));
        //return view('TeamScreen.TeamCard');
    }


    public function herosectionStore(Request $request)
    {
        //dd($request->all());
       try{
                $teamsetting = [
                    'main_title', 'sub_title' ,'right_image','left_image','background_video','title_2','para_one', 'para_two' ,'para_three' 
                ];

                
                foreach($teamsetting as $team){
                    $value = $request->input($team);
                    $exesting = TeamSetting:: where('type' ,$team)->first();
                    if ($exesting) {
                        $exesting->update(['message' => $value]);
                    } else {
                        TeamSetting::create(['type' => $team, 'message' => $value]);
                    }
                }
                

                return redirect()->route('team.view.index')->with('success', 'Hero Section  updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.form')->with('error', 'Error: ' . $e->getMessage());
        }
            }


        public function heroSectionStatus($id)
        {
           
            $heroSection = TeamSetting::findOrFail($id);
            if ($heroSection) {
                $heroSection->status = ($heroSection->status == 'Active') ? 'Inactive' : 'Active';
                $heroSection->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Hero section not found.');
        }    



        //     $teamsetting = [
        //         'main_title', 'sub_title' ,'right_image','left_image','background_video','title_2','para_one', 'para_two' ,'para_three' , 'section_title_one' ,'section_subtitle_one','section_one_para_one','section_one_para_two'
        //   ,'section_one_img' ,'section_two_title','section_two_subtitle','section_two_image', 'section_two_para' ,'animated_small_image','sub_title_discription','section_three_header', 'section_three_subheader' ,'section_four_para','section_five_title','section_five_imgone',
        //   'section_five_imgtwo','section_five_bgimage','section_five_para','section_five_paratwo'
        //     ];
    


   // section 1 ---------------------------------

    public function section1()
    {

      //  $herosection = TeamSetting::get();
        $herosection = TeamSetting::where('type', 'section_title_one')
        ->orWhere('type', 'section_subtitle_one')
        ->orWhere('type', 'section_subtitle_one')
        ->orWhere('type', 'section_one_para_one')
        ->orWhere('type', 'section_one_para_two')
        ->orWhere('type', 'section_one_img')
        ->get();
         return view('TeamScreen.section1Index', compact('herosection'));
        
    }

    public function Section1Form()
    {
        $details =TeamSetting::orderBy('id','desc')->get();
        return view('TeamScreen.section1Form',compact("details"));
        //return view('TeamScreen.TeamCard');
    }

    public function Section1Store(Request $request)
    {
        //dd($request->all());
       try{
                $teamsetting = [
                    'section_title_one', 'section_subtitle_one' ,'section_one_para_one','section_one_para_two','section_one_img'
                ];

                
                foreach($teamsetting as $team){
                    $value = $request->input($team);
                    $exesting = TeamSetting:: where('type' ,$team)->first();
                    if ($exesting) {
                        $exesting->update(['message' => $value]);
                    } else {
                        TeamSetting::create(['type' => $team, 'message' => $value]);
                    }
                }
                

                return redirect()->route('team.section1.index')->with('success', 'Section1 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.section1.form')->with('error', 'Error: ' . $e->getMessage());
        }
            }


            public function Section1Status($id)
    {
            $section1 = TeamSetting::findOrFail($id);
            if ($section1) {
                $section1->status = ($section1->status == 'Active') ? 'Inactive' : 'Active';
                $section1->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
    }

 
  //section 2----------------
  public function section2()
  {

       //$herosection = TeamSetting::get();
      $herosection = TeamSetting::where('type', 'section_two_title')
      ->orWhere('type', 'section_two_subtitle')
      ->orWhere('type', 'section_two_image')
      ->orWhere('type', 'section_two_para')
      ->orWhere('type', 'animated_small_image')
      ->orWhere('type', 'sub_title_discription')
      ->orWhere('type', 'section_two_title_2')
      ->orWhere('type', 'description')
      ->get();
       return view('TeamScreen.section2Index', compact('herosection'));
      
  }
  

  public function Section2Form()
  {
      $details =TeamSetting::orderBy('id','desc')->get();
      return view('TeamScreen.section2Form',compact("details"));
      //return view('TeamScreen.TeamCard');
  }

 
  public function Section2Store(Request $request)
  {
      //dd($request->all());
     try{
              $teamsetting = [
                  'section_two_title', 'section_two_subtitle' ,'section_two_image','section_two_para','animated_small_image','sub_title_discription', 'section_two_title_2', 'description',
              ];

              
              foreach($teamsetting as $team){
                  $value = $request->input($team);
                  $exesting = TeamSetting:: where('type' ,$team)->first();
                  if ($exesting) {
                      $exesting->update(['message' => $value]);
                  } else {
                      TeamSetting::create(['type' => $team, 'message' => $value]);
                  }
              }
              

              return redirect()->route('team.section2.index')->with('success', 'Section 2 updated successfully');
      } catch (\Exception $e) {
          return redirect()->route('team.section2.index')->with('error', 'Error: ' . $e->getMessage());
      }
          }

    public function Section2Status($id)
    {
            $section2 = TeamSetting::findOrFail($id);
            if ($section2) {
                $section2->status = ($section2->status == 'Active') ? 'Inactive' : 'Active';
                $section2->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
    }

  //section 3------------------------------------

  public function section3()
  {

      // $herosection = TeamSetting::get();
      $herosection = TeamSetting::where('type', 'section_three_header')
      ->orWhere('type', 'section_three_subheader')
      ->get();
       return view('TeamScreen.section3Index', compact('herosection'));
      
  }

  public function Section3Form()
  {
      $details =TeamSetting::orderBy('id','desc')->get();
      return view('TeamScreen.section3Form',compact("details"));
      //return view('TeamScreen.TeamCard');
  }

  public function Section3Store(Request $request)
  {
      //dd($request->all());
     try{
              $teamsetting = [
                  'section_three_header', 'section_three_subheader'
              ];

              
              foreach($teamsetting as $team){
                  $value = $request->input($team);
                  $exesting = TeamSetting:: where('type' ,$team)->first();
                  if ($exesting) {
                      $exesting->update(['message' => $value]);
                  } else {
                      TeamSetting::create(['type' => $team, 'message' => $value]);
                  }
              }
              

              return redirect()->route('team.section3.index')->with('success', 'Section 3 updated successfully');
      } catch (\Exception $e) {
          return redirect()->route('team.section3.form')->with('error', 'Error: ' . $e->getMessage());
      }
          }

    public function Section3Status($id)
    {
        $section3 = TeamSetting::findOrFail($id);
        if ($section3) {
            $section3->status = ($section3->status == 'Active') ? 'Inactive' : 'Active';
            $section3->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'Data not found.');
    }

    //section 4-------------------------------
    public function section4()
    {
  
        // $herosection = TeamSetting::get();
        $herosection = TeamSetting::where('type', 'section_four_para')
        ->get();
         return view('TeamScreen.section4Index', compact('herosection'));
        
    }
  
    public function Section4Form()
    {
        $details =TeamSetting::orderBy('id','desc')->get();
        return view('TeamScreen.section4Form',compact("details"));
        //return view('TeamScreen.TeamCard');
    }


    public function Section4Store(Request $request)
    {
        //dd($request->all());
       try{
                $teamsetting = [
                    'section_four_para'
                ];
  
                
                foreach($teamsetting as $team){
                    $value = $request->input($team);
                    $exesting = TeamSetting:: where('type' ,$team)->first();
                    if ($exesting) {
                        $exesting->update(['message' => $value]);
                    } else {
                        TeamSetting::create(['type' => $team, 'message' => $value]);
                    }
                }
                
  
                return redirect()->route('team.section4.index')->with('success', 'Section 4 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.section4.form')->with('error', 'Error: ' . $e->getMessage());
        }
            }

        public function Section4Status($id)
        {
            $section4 = TeamSetting::findOrFail($id);
            if ($section4) {
                $section4->status = ($section4->status == 'Active') ? 'Inactive' : 'Active';
                $section4->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
        }

   
   //section 5---------------------------          
   public function section5()
   {
 
       // $herosection = TeamSetting::get();
       $herosection = TeamSetting::where('type', 'section_five_title')
       ->orWhere('type', 'section_five_imgone')
       ->orWhere('type', 'section_five_imgtwo')
       ->orWhere('type', 'section_five_bgimage')
       ->orWhere('type', 'section_five_para')
       ->orWhere('type', 'section_five_paratwo')
       ->get();
        return view('TeamScreen.section5Index', compact('herosection'));
       
   }

   public function Section5Form()
   {
       $details =TeamSetting::orderBy('id','desc')->get();
       return view('TeamScreen.section5Form',compact("details"));
       //return view('TeamScreen.TeamCard');
   }
    
   public function Section5Store(Request $request)
    {
        //dd($request->all());
       try{
                $teamsetting = [
                    'section_five_title','section_five_imgone','section_five_imgtwo','section_five_bgimage','section_five_para','section_five_paratwo'
                ];
  
                
                foreach($teamsetting as $team){
                    $value = $request->input($team);
                    $exesting = TeamSetting:: where('type' ,$team)->first();
                    if ($exesting) {
                        $exesting->update(['message' => $value]);
                    } else {
                        TeamSetting::create(['type' => $team, 'message' => $value]);
                    }
                }
                
  
                return redirect()->route('team.section5.index')->with('success', 'Section 5 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.section5.form')->with('error', 'Error: ' . $e->getMessage());
        }
            }

        public function Section5Status($id)
        {
            $section5 = TeamSetting::findOrFail($id);
            if ($section5) {
                $section5->status = ($section5->status == 'Active') ? 'Inactive' : 'Active';
                $section5->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
        }    


   //section 6----------------------------------------------------------

    public function Section6Index()
    {

       // $section6 = TeamSetting::get();
        $section6 = TeamSetting::where('type', 'title_6')
        ->orWhere('type', 'image_6')
        ->orWhere('type', 'sub_title_6')
        ->orWhere('type', 'sub_title_discription_6')
        ->get();
         return view('TeamScreen.Section6index', compact('section6'));
        
    }

    public function Section6Form()
    {
        $details =TeamSetting::orderBy('id','desc')->get();
        return view('TeamScreen.Section6add',compact("details"));
        //return view('TeamScreen.TeamCard');
    }


    public function Section6Store(Request $request)
    {
        //dd($request->all());
       try{
                $teamsetting6 = [
              'title_6','image_6','sub_title_6','sub_title_discription_6'
                ];

                
                foreach($teamsetting6 as $team6){
                    $value = $request->input($team6);
                    $exesting = TeamSetting:: where('type' ,$team6)->first();
                    if ($exesting) {
                        $exesting->update(['message' => $value]);
                    } else {
                        TeamSetting::create(['type' => $team6, 'message' => $value]);
                    }
                }
                

                return redirect()->route('team.section6.index')->with('success', 'Section 6 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.section6.form')->with('error', 'Error: ' . $e->getMessage());
        }
            }

        
        public function Section6Status($id)
        {
            $section6 = TeamSetting::findOrFail($id);
            if ($section6) {
                $section6->status = ($section6->status == 'Active') ? 'Inactive' : 'Active';
                $section6->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
        }
  

 // section 6 card 1 ---------------------------------------------

         public function Sec6Card1Index()
          {

           //$sec6Card1 = TeamSetting::get();
           $sec6Card1 = TeamSetting::where('type', 'card1_title')
           ->orWhere('type', 'card1_text')
           ->orWhere('type', 'card1_img')
           ->get();
        return view('TeamScreen.Section6C1', compact('sec6Card1'));

     
         }

         public function Sec6CardForm()
         {
             $details =TeamSetting::orderBy('id','desc')->get();
             return view('TeamScreen.Sec6Card1Form',compact("details"));
             //return view('TeamScreen.TeamCard');
         }


         public function Sec6CardStore(Request $request)
         {
             //dd('hello');
            try{
                     $teamCard1 = [
                   'card1_title','card1_text','card1_img'
                     ];
                     
                     foreach($teamCard1 as $card1){
                         $value = $request->input($card1);
                         $exesting = TeamSetting:: where('type' ,$card1)->first();
                         if ($exesting) {
                             $exesting->update(['message' => $value]);
                         } else {
                             TeamSetting::create(['type' => $card1, 'message' => $value]);
                         }
                     }
                     
     
                     return redirect()->route('team.section6c1.index')->with('success', 'Card1 updated successfully');
             } catch (\Exception $e) {
                 return redirect()->route('team.section6c1.form')->with('error', 'Error: ' . $e->getMessage());
             }
                 }

            public function Sec6Card1Status($id)
            {
                $sec6Card1 = TeamSetting::findOrFail($id);
                if ($sec6Card1) {
                    $sec6Card1->status = ($sec6Card1->status == 'Active') ? 'Inactive' : 'Active';
                    $sec6Card1->save();
        
                    return redirect()->back()->with('success', 'Status updated successfully.');
                }
                
                return redirect()->back()->with('error', 'Data not found.');
           }


    // section 6 card 2 ------------------------------------------
    public function Sec6Card2Index()
    {

       //$sec6Card2 = TeamSetting::get();
       $sec6Card2 = TeamSetting::where('type', 'card2_title')
       ->orWhere('type', 'card2_text')
       ->orWhere('type', 'card2_img')
       ->get();
      return view('TeamScreen.Sec6Card2', compact('sec6Card2'));

    }        

    public function Sec6Card2Form()
    {
        $details =TeamSetting::orderBy('id','desc')->get();
        return view('TeamScreen.Sec6Card2Form',compact("details"));
        //return view('TeamScreen.TeamCard');
    }

    
    public function Sec6Card2Store(Request $request)
    {
        //dd('hello');
       try{
                $teamCard2 = [
              'card2_title','card2_text','card2_img'
                ];
               //dd($teamCard2);
                foreach($teamCard2 as $card2){
                    $value = $request->input($card2);
                    $exesting = TeamSetting:: where('type' ,$card2)->first();
                    if ($exesting) {
                        $exesting->update(['message' => $value]);
                    } else {
                        TeamSetting::create(['type' => $card2, 'message' => $value]);
                    }
                }
                

                return redirect()->route('team.section6c2.index')->with('success', 'Card2 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.section6c2.form')->with('error', 'Error: ' . $e->getMessage());
        }
            }

        public function Sec6Card2Status($id)
        {
            $sec6Card2 = TeamSetting::findOrFail($id);
            if ($sec6Card2) {
                $sec6Card2->status = ($sec6Card2->status == 'Active') ? 'Inactive' : 'Active';
                $sec6Card2->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
        }


   //section 6 card 3-----------------------------------------
   public function Sec6Card3Index()
   {

     // $sec6Card3 = TeamSetting::get();
      $sec6Card3 = TeamSetting::where('type', 'card3_title')
      ->orWhere('type', 'card3_text')
      ->orWhere('type', 'card3_img')
      ->get();
     return view('TeamScreen.Sec6Card3', compact('sec6Card3'));

   }    
   
   public function Sec6Card3Form()
   {
       $details =TeamSetting::orderBy('id','desc')->get();
       return view('TeamScreen.SecCard3Form',compact("details"));
       //return view('TeamScreen.TeamCard');
   }

   public function Sec6Card3Store(Request $request)
    {
        //dd('hello');
       try{
                $teamCard3 = [
              'card3_title','card3_text','card3_img'
                ];
               //dd($teamCard2);
                foreach($teamCard3 as $card3){
                    $value = $request->input($card3);
                    $exesting = TeamSetting:: where('type' ,$card3)->first();
                    if ($exesting) {
                        $exesting->update(['message' => $value]);
                    } else {
                        TeamSetting::create(['type' => $card3, 'message' => $value]);
                    }
                }
                

                return redirect()->route('team.section6c3.index')->with('success', 'Card3 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.section6c3.form')->with('error', 'Error: ' . $e->getMessage());
        }
            }

        public function Sec6Card3Status($id)
        {
            $sec6Card3 = TeamSetting::findOrFail($id);
            if ($sec6Card3) {
                $sec6Card3->status = ($sec6Card3->status == 'Active') ? 'Inactive' : 'Active';
                $sec6Card3->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
        }


  //section 7-----------------------------------------------------------
  public function Section7Index()
  {

      //$section7 = TeamSetting::get();
      $section7 = TeamSetting::where('type', 'card_title_7')
      ->orWhere('type', 'card7_image_1')
      ->orWhere('type', 'card7_image_2')
      ->orWhere('type', 'paragraph_1')
      ->orWhere('type', 'paragraph_2')
      ->orWhere('type', 'paragraph_3')
      ->orWhere('type', 'subtitle_1')
      ->orWhere('type', 'subtitle_2')
      ->orderBy('id', 'desc')
      ->get();
       return view('TeamScreen.Section7index', compact('section7'));
      
  }

  public function Section7Form()
  {
      $details =TeamSetting::orderBy('id','desc')->get();
      return view('TeamScreen.Section7add',compact("details"));
      //return view('TeamScreen.TeamCard');
  }


  public function Section7Store(Request $request)
    {
        //dd($request->all());
       try{
        $teamCard2 = [
            'card_title_7','card7_image_1','card7_image_2','paragraph_1', 'paragraph_2', 'paragraph_3', 'subtitle_1', 'subtitle_2'
              ];
              
              foreach($teamCard2 as $card2){
                  $value = $request->input($card2);
                  $exesting = TeamSetting:: where('type' ,$card2)->first();
                  if ($exesting) {
                      $exesting->update(['message' => $value]);
                  } else {
                      TeamSetting::create(['type' => $card2, 'message' => $value]);
                  }
              }
                

                return redirect()->route('team.section7.index')->with('success', 'Section 7 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.section7.form')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function Section7Status($id)
    {
            $section7 = TeamSetting::findOrFail($id);
            if ($section7) {
                $section7->status = ($section7->status == 'Active') ? 'Inactive' : 'Active';
                $section7->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
    }

  
    //section 8----------------
    public function Section8Index()
    {
  
      //$section8 = TeamSetting::get();
       $section8 = TeamSetting::where('type', 'section8_title')
       ->orWhere('type', 'section8_discription_1')
       ->orWhere('type', 'section8_discription_2')
       ->orWhere('type', 'section8_discription_3')
       ->orWhere('type', 'section8_discription_4')
       ->orWhere('type', 'section8_discription_5')
       ->orWhere('type', 'section8_discription_6')
       ->orWhere('type', 'section8_discription_7')
       ->orWhere('type', 'section8_image_1')
       ->orWhere('type', 'section8_image_2')
       ->orderBy('id', 'desc')
       ->get();
         return view('TeamScreen.Section8Index', compact('section8'));
    }

    public function Section8Form()
    {
        $details =TeamSetting::orderBy('id','desc')->get();
        return view('TeamScreen.Section8Form',compact("details"));
    }

  
    public function Section8Store(Request $request)
    {
        //dd($request->all());
       try{
        $teamSection8 = [
            'section8_title','section8_discription_1','section8_discription_2','section8_discription_3','section8_discription_4','section8_discription_5','section8_discription_6','section8_discription_7','section8_image_1','section8_image_2'
              ];
              
              foreach($teamSection8 as $section8){
                  $value = $request->input($section8);
                  $exesting = TeamSetting:: where('type' ,$section8)->first();
                  if ($exesting) {
                      $exesting->update(['message' => $value]);
                  } else {
                      TeamSetting::create(['type' => $section8, 'message' => $value]);
                  }
              }
                

                return redirect()->route('team.section8.index')->with('success', 'Section 8 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.section8.form')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function Section8Status($id)
    {
            $section8 = TeamSetting::findOrFail($id);
            if ($section8) {
                $section8->status = ($section8->status == 'Active') ? 'Inactive' : 'Active';
                $section8->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
    }
  
   //section9 (is at the down side)------



   //section 10 ------
   public function Section10Index()
   {
 
         //$section10 = TeamSetting::get();
             $section10 = TeamSetting::where('type', 'section10_title')
       ->orWhere('type', 'section10_subtitle')
       ->orWhere('type', 'section10_card_text')
       ->orWhere('type', 'section10_card_image')
       ->orderBy('id', 'desc')
       ->get();
        return view('TeamScreen.Section10index', compact('section10'));
   }

   public function Section10Form()
   {
       $details =TeamSetting::orderBy('id','desc')->get();
       return view('TeamScreen.Section10Form',compact("details"));
   }


   public function Section10Store(Request $request)
    {
        //dd($request->all());
       try{
        $teamSection10 = [
            'section10_title','section10_subtitle','section10_card_text','section10_card_image'
              ];
              
              foreach($teamSection10 as $section10){
                  $value = $request->input($section10);
                  $exesting = TeamSetting:: where('type' ,$section10)->first();
                  if ($exesting) {
                      $exesting->update(['message' => $value]);
                  } else {
                      TeamSetting::create(['type' => $section10, 'message' => $value]);
                  }
              }
                

                return redirect()->route('team.10section.index')->with('success', 'Section 10 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.10section.form')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function Section10Status($id)
    {
            $section10 = TeamSetting::findOrFail($id);
            if ($section10) {
                $section10->status = ($section10->status == 'Active') ? 'Inactive' : 'Active';
                $section10->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
    }

    //section 11 ----------
    public function Section11Index()
    {
  
          //$section10 = TeamSetting::get();
              $section11 = TeamSetting::where('type', 'section11_title')
        ->orWhere('type', 'section11_subtitle')
        ->orWhere('type', 'section11_button_text')
        ->orWhere('type', 'section11_button_text2')
        ->orWhere('type', 'section11_video')
        ->orderBy('id', 'desc')
        ->get();
         return view('TeamScreen.Section11index', compact('section11'));
    }


    public function Section11Form()
    {
        $details =TeamSetting::orderBy('id','desc')->get();
        return view('TeamScreen.Section11Form',compact("details"));
    }

    public function Section11Store(Request $request)
    {
        //dd($request->all());
       try{
        $teamSection11 = [
            'section11_title','section11_subtitle','section11_button_text','section11_button_text2','section11_video'
              ];
              
              foreach($teamSection11 as $section11){
                  $value = $request->input($section11);
                  $exesting = TeamSetting:: where('type' ,$section11)->first();
                  if ($exesting) {
                      $exesting->update(['message' => $value]);
                  } else {
                      TeamSetting::create(['type' => $section11, 'message' => $value]);
                  }
              }
                

                return redirect()->route('team.11section.index')->with('success', 'Section 11 updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('team.11section.form')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function Section11Status($id)
    {
            $section11 = TeamSetting::findOrFail($id);
            if ($section11) {
                $section11->status = ($section11->status == 'Active') ? 'Inactive' : 'Active';
                $section11->save();
    
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
            
            return redirect()->back()->with('error', 'Data not found.');
    }


    //section 9 for all cards (1 to 50----)
  public function TeamSection9()
   {
 
         $section9= TeamSection9::get();
        return view('TeamScreen.Section9Cards', compact('section9'));
   }

   public function Section9Form()
   {
 
         //$section9= TeamSection9::get();
        return view('TeamScreen.Section9CardForm');
   }




   public function Section9FormSubmit(Request $request) 
{
    try{
    $user = new TeamSection9;
    $user->image = $request->image;
    $user->name = $request->name;
    $user->designation = $request->designation;
    $user->quate_one = $request->quate_one;
    $user->card_text = $request->card_text; // Removed extra space after card_text
    $user->save();

    return redirect()->route('team.section9.index')->with('success', 'Added Successfully!!');
        } catch (\Exception $e) {
            return redirect()->route('team.section9.form')->with('error', 'An error occurred. Please try again.');
        }

    //return view('TeamScreen.Section9Cards');
}


public function Section9Edit(Request $request)
{
   //dd('hello');
   $id = $request->input('id');
   $findid = TeamSection9::find($id);
    return view('TeamScreen.Section9FormEdit' , compact('findid'));

 }


 public function Section9Update(Request $request)
 {
    //dd('hello');
     $request -> validate([
         'image	' => '',
         'name	' => '',
         'designation' => '',
         'quate_one' => '',
         'card_text	' => '',
     ]);
     //dd($request);
     $Id = $request->input('id');
     $post = TeamSection9::find($Id);
     $post->update([
        'image' => $request->image,
        'name' => $request->name,
        'designation' => $request->designation,
        'quate_one' => $request->quate_one,
        'card_text' => $request->card_text
    ]);
    

     if($post == false){
         return redirect()->route('team.section9.editform')->with('error','Somthing went wrong !!');
     }

     return redirect()->route('team.section9.index')->with('success','Section9 Updated Successfully');
 }

   


}
