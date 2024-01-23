<?php
namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Webinar;
use App\Models\WebinarData;
use \DB;
use \Mail;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Page;
use App\Models\SeoPage;
use App\Models\Advetorial;
use SEOMeta;
use OpenGraph;
use Twitter;

class WebinarController extends HomeController
{


    public function index()
    {

        $this->seoTools('webinars');  
              $time = \Carbon\Carbon::now()->format('Y-m-d');



        /*$banner12 = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $time)->where('from_date', '<=' , $time)->get();*/

          $banners = $this->banners;
          
          
           $upcome=Webinar::where('active_flag',1)->where('webinar_date', '>=' , $time)->orderBy('webinar_date','asc')->get();
          
          
          $complete=Webinar::where('active_flag',1)->where('webinar_date', '<' , $time)->orderBy('webinar_date','desc')->get();
         $data = Webinar::where('active_flag',1)->orderBy('webinar_date','desc')->get();     
        return view('webinars.index',compact('banners','data','upcome','complete'));
    }


// agilent Webinar
   
    public function webinar(Request $request)
    {

        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){         
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                
                'email' => 'email',
                'phone' =>'required|max:20',
                'company'=>'required',                    
                'country'=>'required',
                'job_title'=>'required', 
            ]);

            $form->firstname = $request->name;           
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;      

            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes'; 

            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => 'Use of TOC Analysis in the Pharmaceutical Industry',
                'country'=>$request->country,                
                'subject_client' =>'Webinar | Registration Successful',
                'subject_admin' => "New webinar video Subscriber | PFA",     

                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',                 
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
           // $message->to('nagaraj@ochre-media.com');
                $message->subject($data['subject_admin']);
            });           

            return view('webinars.webinar.videosuccess')->with(['thank_message'=>'success']); 
        }        
        return view('webinars.webinar.index',compact('countries'));
    }
    //End agilent Webinar


// westpharma webinar
    public function westpharmawebinar(Request $request)
    {
         $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){         
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                
                'email' => 'email',
                'phone' =>'required|max:20',
                'company'=>'required',                    
                'country'=>'required',
                'job_title'=>'required', 
            ]);

            $form->firstname = $request->name;           
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;    

            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => 'West Pharma Webinar - Discover how to evelop robust, extractable and leachable program for your drug',
                'country'=>$request->country,      

                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',  

                'subject_client' =>'Westpharma Webinar | Registration Successful',
                'subject_admin' => "New Westpharma webinar video Subscriber | PFA",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
           // $message->to('nagaraj@ochre-media.com');
                $message->subject($data['subject_admin']);
            });           

            return view('webinars.westpharma.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.westpharma.index',compact('countries'));
    }
    //End westpharma webinar


// suez-webinar
   
    public function suezWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){         
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                
                'email' => 'email',
                'phone' =>'required|max:20',
                'company'=>'required',                    
                'country'=>'required',
                'job_title'=>'required', 
            ]);

            $form->firstname = $request->name;           
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;     
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => 'use of non specific methods like TOC for cleaning validation',
                'country'=>$request->country,                
                'subject_client' =>'Suez Webinar | Registration Successful',
                'subject_admin' => 'New webinar video Subscriber | PFA',

                 'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',             
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
           // $message->to('nagaraj@ochre-media.com');
                $message->subject($data['subject_admin']);
            });           

            return view('webinars.suezwebinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.suezwebinar.index',compact('countries'));
    }
    //End suez-webinar


// agilent Webinar
   
    public function agilentWebinar(Request $request)
    {

         $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){         
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                
                'email' => 'email',
                'phone' =>'required|max:20',
                'company'=>'required',                    
                'country'=>'required',
                'job_title'=>'required', 
            ]);

            $form->firstname = $request->name;           
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;   
            $form->email_updates  = $request->email_updates ?? 'No'; 
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';          
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => 'Rapid, Powerful Techniques to Address Peptide Mapping Challenges in the Biopharma Industry',
                'country'=>$request->country,                
                'subject_client' =>'Agilent Webinar | Registration Successful',
                'subject_admin' => "New Agilent webinar video Subscriber | PFA",  

                'email_updates' =>$request->email_updates ?? 'No',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',                     
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
            // $message->to('nagaraj@ochre-media.com');
                $message->subject($data['subject_admin']);
            });           

            return view('webinars.agilentwebinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.agilentwebinar.index',compact('countries'));
    }
    //End agilent Webinar

    

// suez toc webinar
    public function suezTocWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);


            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => 'TOC in Pharmaceuticals - Are you ahead of Pharmacopoeia compliance and expectations?',                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful',
                'subject_client' =>'Thank you for your Interest in Suez on-demand Webinar Video.',
                'subject_admin' => "New Suez TOC Webinar 2019 | video Subscriber | PFA ",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.sueztocwebinar', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        return view('webinars.sueztocwebinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.sueztocwebinar.index',compact('countries'));
    }
    //End suez toc webinar
    
// thermofisherWebinar webinar
   
    public function thermofisherWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    

            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);


            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
        
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type . ' - Modernizing GC Sampling Solution to Serve Productivity in Pharmaceutical Laboratories',                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
               
                /*'subject_client' =>'Thermofisher Webinar | Registration Successful',*/
                'subject_client' =>'Thank you for your Interest in Thermofisher on-demand Webinar Video.',
                'subject_admin' => "Thermofisher Webinar | video Subscriber | PFA ", 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                // $message->to('nagaraj@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.thermofisherWebinar', $data, function($message) use ($data) {               
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });       
            return view('webinars.thermofisherwebinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.thermofisherwebinar.index',compact('countries'));
           
    }
    //End thermofisherWebinar


    // capsugelLonza Webinar

      public function capsugelLonza(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    

            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return '.....';
      //  return "page under development";
        
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                //'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',

                'subject_client' =>'Thank you for your Interest in Lonza on-demand Webinar Video. | Registration Successful',
                'subject_admin' => "Lonza on-demand Webinar registration | ".$request->email,                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                //$message->to('ravi@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.capsugel-lonza', $data, function($message) use ($data) {               
           $message->to($data['email']);
                $message->subject($data['subject_client']);
            });       


           // return redirect()->route('capsugelLonza.success')->with(['thank_message'=>'Thank you for showing interest on Lonza Webinar. One of our team will get back to you soon.']); 
             return view('webinars.capsugellonza.videosuccess')->with(['thank_message'=>'success']);

        }    
        return view('webinars.capsugellonza.index',compact('countries'));
    }

     public function suezOzonia(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
           /*return "page is under development";*/

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => 'suez-ozonia-ozone-systems-video',                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in SuezOzonia Webinar.',
                'subject_admin' => "SuezOzonia Webinar registrations |".$request->email." | PFA - Webinars",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            /*Mail::send('emails.webinars.suezozonia', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });  */     

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

        // return redirect()->route('suezozonia.success')->with(['thank_message'=>$request->input('thank_message')]);
       return view('webinars.suezozonia.videosuccess')->with(['thank_message'=>'success']);

        }    
        return view('webinars.suezozonia.index',compact('countries'));
    }

    public function oliverHealthcare(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            /*return "page is under development";*/
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
          //  $form->state = @$request->state ? @$request->state : 'NA';        
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';  
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';
            $form->save();
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               // 'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'subject_client' =>'Thank you for your Interest in Oliver Healthcare Packaging Webinar.',
                'subject_admin' => "Oliver Healthcare Packaging Webinar |".$request->email,                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
           /* Mail::send('emails.webinars.oliver', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });   */    

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

         return redirect()->route('oliverhealthcare.success')->with(['thank_message'=>$request->input('thank_message')]);
         //return view('webinars.oliver.videosuccess')->with(['thank_message'=>'success']);

        }    
        return view('webinars.oliver.index',compact('countries'));
    }

        public function catalentWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in Catalent Webinar registrations.',
                'subject_admin' => "Catalent Webinar registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            /*Mail::send('emails.webinars.catalent', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });    */   

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

         //return redirect()->route('catalentwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
return view('webinars.catalent.videosuccess')->with(['thank_message'=>'success']);

        }    
        return view('webinars.catalent.index',compact('countries'));
    }

    public function byyourSidefor(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
/*return "page is under development";*/

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
          //  $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               // 'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for  WEST Pharma webinar for landing page.',
                'subject_admin' => "Registration for  WEST Pharma webinar  |".$request->email,                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
             //  $message->to('bhavani@ochre-media.com');                 
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);
            return view('webinars.healthier-world.videosuccess')->with(['thank_message'=>'success']);

        // return redirect()->route('byyoursidefor.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.healthier-world.index',compact('countries'));
    }
    //OracleWebinar1

    public function OracleWebinareng(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
                'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|integer', 
                'headquarters'=>'required', 
            ]);
       //return "page is under development";

            $form->firstname = $request->first_name;  
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = $request->zip_code;          
            $form->company = $request->company;
            $form->type = $request->type;   
            $form->zip = $request->zip_code;
            $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
            $form->headquarters = $request->headquarters;
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,      
                 'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',    
                'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,
                 'subscribe'=>$request->subscribe,
                'client_message'=>$request->client_message,

                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in Oracle webinar - PART 1',
                'subject_admin' => "Oracle Webinar registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail')); 
              // $message->to('bhavani@ochre-media.com');               
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

       //  return redirect()->route('orclewebinareng.success')->with(['thank_message'=>$request->input('thank_message')]);
          return view('webinars.oracle.series1.english-videosuccess')->with(['thank_message'=>'success']);

        }    
        return view('webinars.oracle.series1.english',compact('countries'));
    }

    public function OracleWebinarch(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
                'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|integer', 
                'headquarters'=>'required', 
            ]);
      // return "page is under development";

            $form->firstname = $request->first_name;                
            $form->lastname =$request->last_name;                  
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = $request->zip_code;          
            $form->company = $request->company;
            $form->type = $request->type;   
           $form->zip = $request->zip_code;
            $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
            $form->headquarters = $request->headquarters;
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,          
                'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,
                 'subscribe'=>$request->subscribe,
                'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in Oracle webinar - PART 1 | Chinese',
                'subject_admin' => "Oracle webinar - Series 1 | Chinese registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));         
             //$message->to('bhavani@ochre-media.com');                 
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

      
        // return redirect()->route('orclewebinarch.success')->with(['thank_message'=>$request->input('thank_message')]);
        return view('webinars.oracle.series1.chinies-videosuccess')->with(['thank_message'=>'success']);

        }    
        return view('webinars.oracle.series1.chinese',compact('countries'));
    }

    public function OracleWebinarkr(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
               'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|integer', 
               'headquarters'=>'required', 
            ]);
      // return "page is under development";

             $form->firstname = $request->first_name;                
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
          //  $form->state = $request->zip_code;          
            $form->company = $request->company;
            $form->type = $request->type;    
            $form->zip = $request->zip_code;
            $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
            $form->headquarters = $request->headquarters;
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                 'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,          
                'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,
                 'subscribe'=>$request->subscribe,
                'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in Oracle webinar - PART 1 | Korean.',
                'subject_admin' => "Oracle webinar - Series 1 | Korean registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));      
               //$message->to('bhavani@ochre-media.com');           
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
             Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
           $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);
             return view('webinars.oracle.series1.korean-videosuccess')->with(['thank_message'=>'success']);
        // return redirect()->route('orclewebinarkr.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.oracle.series1.korean',compact('countries'));
    }





    //OracleWebinar2

    public function OracleWebinarsseceng(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'first_name' => 'required', 
               'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|numeric', 
               'headquarters'=>'required', 
            ]);
      // return "page is under development";

            $form->firstname = $request->first_name;  
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = $request->zip_code;          
            $form->company = $request->company;
            $form->type = $request->type;    
            $form->zip = $request->zip_code;
            $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
            $form->headquarters = $request->headquarters;
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,          
                'zip'=>$request->zip_code,      
               'headquarters'=>$request->headquarters,
                'client_message'=>$request->client_message,
             'subscribe'=>$request->subscribe,
                
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Oracle webinar - PART  2 | English',
                'subject_admin' => "Oracle webinar - Series 2 registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail')); 
            //$message->to('bhavani@ochre-media.com');               
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

              return view('webinars.oracle.series2.english-videosuccess')->with(['thank_message'=>'success']);

        // return redirect()->route('orclewebinarsseceng.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.oracle.series2.english',compact('countries'));
    }





        public function OracleWebinarsSecch(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
               'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|numeric', 
               'headquarters'=>'required', 
            ]);
      // return "page is under development";

            $form->firstname = $request->first_name;                
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = $request->zip_code;          
            $form->company = $request->company;
            $form->type = $request->type;     
            $form->zip = $request->zip_code;
           $form->subscribe = isset($request->subscribe) ? 'yes':'no';   
            $form->headquarters = $request->headquarters;
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,          
                'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,
                'client_message'=>$request->client_message,
                 'subscribe'=>$request->subscribe,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Oracle webinar - PART  2 | Chinese',
                'subject_admin' => "Oracle webinar - Series 2 | Chinese registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));         
             // $message->to('bhavani@ochre-media.com');                 
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        return view('webinars.oracle.series2.chinese-videosuccess')->with(['thank_message'=>'success']);

        // return redirect()->route('orclewebinarssecch.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.oracle.series2.chinese',compact('countries'));
    }

    public function OracleWebinarsSeckr(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
               'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|numeric', 
               'headquarters'=>'required', 
            ]);
       //return "page is under development";

             $form->firstname = $request->first_name;                
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           //$form->state = $request->zip_code;          
            $form->company = $request->company;
            $form->type = $request->type;  
            $form->zip = $request->zip_code;
           $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
          $form->headquarters = $request->headquarters;
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                 'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,          
                'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,
                'client_message'=>$request->client_message,
                 'subscribe'=>$request->subscribe,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Oracle webinar - PART  2 | Korean',
                'subject_admin' => "Oracle webinar - Series 2 | Korean registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));      
               //$message->to('bhavani@ochre-media.com');           
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

             return view('webinars.oracle.series2.korean-videosuccess')->with(['thank_message'=>'success']);

         //return redirect()->route('oraclewebinarsseckr.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.oracle.series2.korean',compact('countries'));
    }


    //OracleWebinar3

    public function OracleWebinarsThirdeng(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
                'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|integer', 
                'headquarters'=>'required', 
            ]);
       //return "page is under development";

            $form->firstname = $request->first_name;                
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;     
            $form->company = $request->company;
            $form->type = $request->type;  
             $form->zip = $request->zip_code;
            $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
            $form->headquarters = $request->headquarters;
            $form->save();

            /*Send email admin*/  
            
            $data = [
                 'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country, 
                 'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,   
                'client_message'=>$request->client_message,
                 'subscribe'=>$request->subscribe,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Oracle Webinar PART-3',
                'subject_admin' => "Oracle Webinar Series-3 |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail')); 
           // $message->to('bhavani@ochre-media.com');               
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

        return view('webinars.oracle.series3.english-videosuccess')->with(['thank_message'=>'success']);

        // return redirect()->route('orclewebinarsthirdeng.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.oracle.series3.english',compact('countries'));
    }





        public function OracleWebinarsThirdch(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
                'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|integer', 
                'headquarters'=>'required', 
            ]);
      // return "page is under development";

            $form->firstname = $request->first_name;                
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = $request->zip_code;          
            $form->company = $request->company;
            $form->type = $request->type;     
            $form->zip = $request->zip_code;
            $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
            $form->headquarters = $request->headquarters;
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,          
                'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,
                'client_message'=>$request->client_message,
                 'subscribe'=>$request->subscribe,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Oracle Webinar PART-3 | Chinese',
                'subject_admin' => "Oracle Webinar Series-3 | Chinese registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));         
              //$message->to('bhavani@ochre-media.com');                 
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

             return view('webinars.oracle.series3.chinese-videosuccess')->with(['thank_message'=>'success']);

         //return redirect()->route('orclewebinarsthirdch.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.oracle.series3.chinese',compact('countries'));
    }

    public function OracleWebinarsThirdkr(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
                'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|integer', 
                'headquarters'=>'required', 
            ]);
       //return "page is under development";

             $form->firstname = $request->first_name;                
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
          //  $form->state = $request->zip_code;          
            $form->company = $request->company;
            $form->type = $request->type;     
            $form->zip = $request->zip_code;
            $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
            $form->headquarters = $request->headquarters;
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                 'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,          
                'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,
                'client_message'=>$request->client_message,
                 'subscribe'=>$request->subscribe,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Oracle webinar - PART 3 | Korean',
                'subject_admin' => "Oracle webinar - Series 3 | Korean registrations |".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));      
              // $message->to('bhavani@ochre-media.com');           
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

             return view('webinars.oracle.series3.korean-videosuccess')->with(['thank_message'=>'success']);

        // return redirect()->route('oraclewebinarsthirdkr.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.oracle.series3.korean',compact('countries'));
    }

     public function luinabioWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
/*return "page is under development";*/

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
         //   $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
              // 'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for Luina Bio Webinar.',
                'subject_admin' => "Luina Bio Webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
             // $message->to('bhavani@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

             return view('webinars.luina-bio.videosuccess')->with(['thank_message'=>'success']);
         //return redirect()->route('luinabiowebinar.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.luina-bio.index',compact('countries'));
    }

 public function pallBiotech(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
           // $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
             //  'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in Pall Biotech Webinar.',
                'subject_admin' => "Thank you for your Interest in Pall Biotech Webinar |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
             //$message->to('bhavani@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);
             return view('webinars.pall-biotech.videosuccess')->with(['thank_message'=>'success']);

        // return redirect()->route('pallbiotech.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.pall-biotech.index',compact('countries'));
    }

     public function eppendorfBioprocess(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
//return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your Interest in Eppendorf Bioprocess Webinar.',
                'subject_admin' => "Thank you for your Interest in Eppendorf Bioprocess Webinar |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
            //  $message->to('bhavani@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

      
        // return redirect()->route('eppendorfbioprocess.success')->with(['thank_message'=>$request->input('thank_message')]);

             return view('webinars.eppendorf-bioprocess.videosuccess')->with(['thank_message'=>'success']);


        }    
        return view('webinars.eppendorf-bioprocess.index',compact('countries'));
    }


     public function suezSievers(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
/*return "page is under development";*/

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for Suez Sievers Webinar.',
                'subject_admin' => "Suez Sievers Webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
         //$message->to('bhavani@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);
             return view('webinars.suez-sievers.videosuccess')->with(['thank_message'=>'success']);

        // return redirect()->route('suezsievers.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.suez-sievers.index',compact('countries'));
    }

    public function prmaConsulting(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        //return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for PRMA Consulting Webinarr.',
                'subject_admin' => "PRMA Consulting Webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
         //$message->to('bhavani@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

       //  return redirect()->route('suezozonia.success')->with(['status'=>'true']);

         return redirect()->route('prmaconsulting.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.prmaconsulting.index',compact('countries'));
    }

     public function cytivaWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
       // return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for Cytiva Webinarr.',
                'subject_admin' => "Cytiva Webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
        // $message->to('bhavani@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

            return view('webinars.cytiva-webinar.videosuccess')->with(['thank_message'=>'success']);

         //return redirect()->route('cytivawebinar.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.cytiva-webinar.index',compact('countries'));
    }

      public function OracleWebinarsThirdengone(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'first_name' => 'required', 
                'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
                 'zip_code' =>'required|integer', 
                'headquarters'=>'required', 
            ]);
       //return "page is under development";

            $form->firstname = $request->first_name;                
            $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;     
            $form->company = $request->company;
            $form->type = $request->type;  
             $form->zip = $request->zip_code;
            $form->subscribe = isset($request->subscribe) ? 'yes':'no';         
            $form->headquarters = $request->headquarters;
            $form->save();

            /*Send email admin*/  
            
            $data = [
                 'name'=> $request->first_name.' '.$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country, 
                 'zip'=>$request->zip_code,      
                'headquarters'=>$request->headquarters,   
                'client_message'=>$request->client_message,
                 'subscribe'=>$request->subscribe,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in Oracle Webinar PART-3',
                'subject_admin' => "Oracle Webinar Series-3|".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail')); 
            //$message->to('bhavani@ochre-media.com');               
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

          return view('webinars.oracle.series3.english-1-videosuccess')->with(['thank_message'=>'success']);

        // return redirect()->route('orclewebinarsthirdengone.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.oracle.series3.english-1',compact('countries'));
    }

   public function prmaconsultingEdm3(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'name' => 'required', 
                //'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
               //  'zip_code' =>'required|integer', 
               // 'headquarters'=>'required', 
            ]);
       //return "page is under development";

            $form->firstname = $request->name;                
           // $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;     
            $form->company = $request->company;
            $form->state = @$request->state ? @$request->state : 'NA';  
            $form->type = $request->type;     
             $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();

            /*Send email admin*/  
            
            $data = [
                 'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country, 
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
               //  'zip'=>$request->zip_code,      
              //  'headquarters'=>$request->headquarters,   
                'client_message'=>$request->client_message,
               //  'subscribe'=>$request->subscribe,
                  'state'=> @$request->state ? @$request->state : 'NA',
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in PRMA online Webinar',
                'subject_admin' => "PRMA online Webinar registrations|".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail')); 
            //$message->to('bhavani@ochre-media.com');               
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

     //   return view('webinars.oracle.series3.english-videosuccess')->with(['thank_message'=>'success']);

         return redirect()->route('prmaconsultingedm3.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.prmaconsulting-edm3.index',compact('countries'));
    }





    // yokogawaWebinar webinar
   
    public function yokogawaWebinar(Request $request)
    {
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);


            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
            
            $pdf = 'https://industry.pharmafocusasia.com/webinars/yokogawa/yokogawa-ondemand-webinar.mp4';
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
               
                'subject_client' =>'Yokogawa Webinar | Registration Successful',
                //'subject_client' =>'Thank you for your Interest in Thermofisher on-demand Webinar Video.',
                'subject_admin' => "Yokogawa Webinar | Registration | PFA ",
                'pdf'=>$pdf 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                //$message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.yokogawaWebinar', $data, function($message) use ($data) {               
               $message->to($data['email']);
              $message->subject($data['subject_client']);
            });     
            return view('webinars.yokogawawebinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.yokogawawebinar.index',compact('countries'));
           
    }
    //End yokogawaWebinar


       // thermofisherWebinar webinar
   
    public function thermofisherscientificWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    

            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);


            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
        
            /*Send email admin*/  
            $pdf = 'https://industry.pharmafocusasia.com/webinars/thermofisher-scientific/thermofisher-scientific-lims-pharma-manufacturing-lab.mp4';
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type . ' - Modernizing GC Sampling Solution to Serve Productivity in Pharmaceutical Laboratories',                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
               
                'client_message' =>'Thank You for showing interest in <strong>Thermo Scientific Webinar</strong>. Your visitor registration was successful and one of our concerned team would get back to you at the earliest.',
                'subject_client' =>'Registrations for Thermo Scientific Webinar.',
                'subject_admin' => "Registrations for Thermo Scientific Webinar", 
                'pdf'=>$pdf

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail'));
                 //$message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });   

           //return redirect()->route('thermofisherscientificWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
       return view('webinars.thermofisherscientific.videosuccess')->with(['thank_message'=>'success']);
        }    
        return view('webinars.thermofisherscientific.index',compact('countries'));
    }
    //End thermofisherWebinar

    public function prmawebnar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
               'name' => 'required', 
                //'last_name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
               //  'zip_code' =>'required|integer', 
               // 'headquarters'=>'required', 
            ]);
      // return "page is under development";

            $form->firstname = $request->name;                
           // $form->lastname =$request->last_name;               
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;     
            $form->company = $request->company;
            $form->state = @$request->state ? @$request->state : 'NA';  
            $form->type = $request->type;     
             $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();

            /*Send email admin*/  
            
            $data = [
                 'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country, 
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
               //  'zip'=>$request->zip_code,      
              //  'headquarters'=>$request->headquarters,   
                'client_message'=>$request->client_message,
               //  'subscribe'=>$request->subscribe,
                  'state'=> @$request->state ? @$request->state : 'NA',
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Thank you for your interest in PRMA online Webinar',
                'subject_admin' => "PRMA online Webinar registrations|".$request->email."| PFA - Webinars.",                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail')); 
            //$message->to('bhavani@ochre-media.com');               
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.orclewebinare', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        //return view('webinars.suezozonia.index')->with(['thank_message'=>'success']); 

     //   return view('webinars.oracle.series3.english-videosuccess')->with(['thank_message'=>'success']);

         return redirect()->route('prmawebnar.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.prma.index',compact('countries'));
    }

    public function worldCourierOndemandWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();

      $videolink="https://industry.pharmafocusasia.com/webinars/world-courier-ondemand/world-courier-success-factors.mp4";
        if(\Request::isMethod('post')){    

            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
        
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,  
                'pdf' =>$videolink,                          
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
               
                'client_message' =>"Thank you for your interest. One of the representative from World Courier will get in touch with you soon.The recorded Webinar is available in the following link.'",
                'subject_client' =>'Registration for On Demand webinar video.',
                'subject_admin' => "Thank you for your interest in World Courier", 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                 //$message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });
          return view('webinars.worldcourierondemandwebinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of World Courier's. Happy Surfing. "]);

           /*return redirect()->route('worldCourierOndemandWebinar.success')->with(['thank_message'=>"Thank you for your interest. One of the representative from World Courier will get in touch with you in the next 72 hours."]);*/

        }    
        return view('webinars.worldcourierondemandwebinar.index',compact('countries'));
    }
    
    public function eppendorfcellculturewebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        //return "page is under development";

            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();

            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                //'subject_client' =>'Suez TOC Webinar 2019 | Registration Successful', Suez Webinar registrations | "Mail-ID" | PFA - Webinars.
                'subject_client' =>'Registration for Cell culture Bio-Process webinar.',
                'subject_admin' => "Cell culture Bio-Process webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
              //$message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       
         return redirect()->route('eppendorfcellculturewebinar.success')->with(['thank_message'=>$request->input('thank_message')]);


        }    
        return view('webinars.eppendorf-cell-culture-webinar.index',compact('countries'));
    }
   
    public function psiWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        //return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in PSI webinar.',
                'subject_admin' => "PSI webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
              //$message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        /* return redirect()->route('psiwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/

       return view('webinars.psi-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of psi. Happy Surfing. "]);

        }    
        return view('webinars.psi-webinar.index',compact('countries'));
    }

    public function medidataWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        //return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in MediData webinar.',
                'subject_admin' => "MediData webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
              //$message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
         //return redirect()->route('medidataWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);


          return view('webinars.medidata-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of medidata. Happy Surfing. "]);

        }    
        return view('webinars.medidata-webinar.index',compact('countries'));
    }
    public function protocolwebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        //return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in Protocol First Webinar.',
                'subject_admin' => "Registrations for Protocol First Webinar - Remote Monitoring is now a Necessity  |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail'));     
                 //$message->to('srinivas.i@ochre-media.com');            
                 $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
               $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
         /*return redirect()->route('protocolwebinar.success')->with(['thank_message'=>$request->input('thank_message')]);*/
          return view('webinars.protocol-first-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of protocol-first-webinar. Happy Surfing. "]);
        }    
        return view('webinars.protocol-first-webinar.index',compact('countries'));
    }


    public function obviohealthwebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message' =>"Thank you for showing interest in On Demand webinar video of <strong>ObvioHealth webinar </strong>.'",
                'subject_client' =>'Registration for On Demand ObvioHealth webinar video.',
                'subject_admin' =>"Registration for On Demand ObvioHealth webinar|".$request->email."| PFA - Webinars.",                    
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));     
                //$message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
            return view('webinars.obvio-health-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of ObvioHealth. Happy Surfing. "]);
        }    
        return view('webinars.obvio-health-webinar.index',compact('countries'));
    }
    public function solovpeOndemandWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname .' '.$request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'address'=>$request->address,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=>$request->state,
                'city'=>$request->city,
                'address'=>$request->address,
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Thank you for your interest in solovpe webinar.',
                'subject_admin' => "solovpe webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
              // $message->to('ravi@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        return view('webinars.solovpe-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of Solovpe. Happy Surfing. "]);
        }    
        return view('webinars.solovpe-webinar.index',compact('countries'));
    }
    public function ystralWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
       // return "page is under development";
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = @$request->state ? @$request->state : 'NA';          
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
               'state'=> @$request->state ? @$request->state : 'NA',
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Registration for Ystral Webinar.',
                'subject_admin' => "Ystral webinar registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              $message->to(trans('messages.adminemail'));     
               //$message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
         return redirect()->route('ystralWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.ystral-webinar.index',compact('countries'));
    }
    public function technologiesOndemandWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'firstname' => 'required', 
                'job_title'=>'required', 
                'company'=>'required',                               
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->firstname; 
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->zip = $request->zip_code;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates;
            $form->quotation = $request->quotation;      
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/repligen-korean/on-demand.mp4';
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname .' '.$request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'address'=>$request->address,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'state'=>@$request->state,
                'city'=>$request->city,
                'zip'=>$request->zip_code,  
                'email_updates' => $request->email_updates,
                'quotation' => $request->quotation,
                'client_message'=>$request->client_message,
                'subject_client' =>'On Demand for Repligen Webinar Korean.',
                'pdf'=>$pdf,
                'subject_admin' => "On Demand Repligen Webinar Korean registrations |".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
              // $message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        return view('webinars.repligen-webinar-korean.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  repligen-webinar-korean. Happy Surfing. "]);
        //  return redirect()->route('technologiesWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.repligen-webinar-korean.index',compact('countries'));
    }
    public function digitalizationTransforming(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        //return "page is under development";
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->address1 = $request->address;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->firstName .' '.$request->lastName,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,
                 'address'=>$request->address,
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Registration for On-demand Siemens Webinar.',
                'subject_admin' => "Registration for On-demand Siemens Webinar |".$request->email,                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
              //$message->to('srinivas.i@ochre-media.com');                 
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        return  view('webinars.digitalization-transforming.videosuccess')->with(['thank_message'=>$request->input('thank_message')]);

        }    
        return view('webinars.digitalization-transforming.index',compact('countries'));
    }
    public function howManufacturingSoftwareEnabling(Request $request)
    {

      $countries = DB::table('countries')->get();
      if (isset($_POST['g-recaptcha-response'])) {
         $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){    
            $form = new WebinarData();
            request()->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
        //return "page is under development";
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->address1 = $request->address;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates;
            $form->save();
             $pdf = 'https://industry.pharmafocusasia.com/webinars/siemens/siemens-biontech.mp4';
            /*Send email admin*/  
            $data = [
                'name'=> $request->firstname .' '.$request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,
                'address'=>$request->address,
                'email_updates' => $request->email_updates,
                'client_message'=>$request->client_message,
                'subject_client' =>'Siemens Live On-demand Webinar.',
                'subject_admin' => "Registrations for Siemens Webinar |".$request->email, 
                'pdf'=>$pdf
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
            //   $message->to('srinivas.i@ochre-media.com');                 
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });       

        // return redirect()->route('howManufacturingSoftwareEnabling.success')->with(['thank_message'=>$request->input('thank_message')]);
        return view('webinars.how-is-digitalization-transforming.videosuccess')->with(['thank_message'=>'success']);

        }    
        return view('webinars.how-is-digitalization-transforming.index',compact('countries'));
    }

    public function isYourElectronicProductionRecordIncomplete(Request $request)
    {
        $countries = DB::table('countries')->get();
         if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname;                
            $form->lastname = $request->lastname;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;       
            $form->company = $request->company;
            $form->company_size = $request->company_size;
            $form->industry = $request->industry;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';  
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/master-control/mastercontrol-ondemand.mp4';
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->firstname.' '.$request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_role'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'company_size'=>$request->company_size,                
                'industry'=>$request->industry,                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'subject_client' =>'Registrations for MasterControl Webinar.',
                'subject_admin' => "Registrations for MasterControl Webinar. |".$request->email,                     
                'client_message' => $request->client_message, 
                'pdf' => $pdf,
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
      $message->to(trans('messages.adminemail'));                
               // $message->to('pushpalatha@ochre-media.com');                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
           Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
          });       
        //  return redirect()->route('isYourElectronicProductionRecordIncomplete.success')->with(['thank_message'=>$request->input('thank_message')]);
        return  view('webinars.is-your-electronic-production-record-incomplete.videosuccess')->with(['thank_message'=>$request->input('thank_message')]);
        } 
        return view('webinars.is-your-electronic-production-record-incomplete.index',compact('countries'));
    }
    
     public function oliverHealthcarePackaging(Request $request)
    {
        

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            /*return "page is under development";*/
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;       
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_role'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'subject_client' =>'Thank you for your Interest in On-demand Oliver Healthcare Packaging Webinar.',
                'subject_admin' => "Registrations for On-demand Oliver Healthcare Packaging Webinar. |".$request->email,                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail'));                
               // $message->to('srinivas.i@ochre-media.com');                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
           Mail::send('emails.webinars.oliver', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
          });       
       //  return redirect()->route('oliverhealthcarepackaging.success')->with(['thank_message'=>$request->input('thank_message')]);
         return view('webinars.oliver-healthcare-packaging.videosuccess')->with(['thank_message'=>'success']);

        }    
        return view('webinars.oliver-healthcare-packaging.index',compact('countries'));
    }
    // yokogawaWebinar2021 webinar
   
    public function yokogawaWebinar2021(Request $request)
    {
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/yokogawa-2021/on-demand.mp4';
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Yokogawa Webinar | Registration Successful',
                'subject_admin' => "Yokogawa Webinar | Registration | PFA ",
                'pdf'=>$pdf 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
               $message->to($data['email']);
               $message->subject($data['subject_client']);
            });     
            return view('webinars.yokogawawebinar2021.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.yokogawawebinar2021.index',compact('countries'));
           
    }
    //End yokogawaWebinar2021
    
     public function satubliroboticsWebinar(Request $request)
    {
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
            
            $pdf = 'https://industry.pharmafocusasia.com/webinars/satubli-robotics/on-demand.mp4';
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Staubli Robotics Webinar | Registration Successful',
                'subject_admin' => "Staubli Robotics Webinar | Registration | PFA ",
                'pdf'=>$pdf 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                //$message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
               $message->to($data['email']);
              $message->subject($data['subject_client']);
            });     
            return view('webinars.satublirobotics-webinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.satublirobotics-webinar.index',compact('countries'));
           
    }
    
    public function calibertechnologiesWebinar(Request $request)
    {
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/caliber/on-demand.mp4';
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                'subject_client' =>'Caliber Technologies Webinar | Registration Successful',
                'subject_admin' => "Caliber Technologies Webinar | Registration | PFA ",
                'pdf'=>$pdf 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                //$message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
               $message->to($data['email']);
              $message->subject($data['subject_client']);
            });     
            return view('webinars.calibertechnologies-webinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.calibertechnologies-webinar.index',compact('countries'));
           
    }
    public function iktosaiWebinar(Request $request)
    {
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
        
            $form->save();
            
            $pdf = 'https://industry.pharmafocusasia.com/webinars/iktos/on-demand.mp4';
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                 'client_message'=>$request->client_message,
                'subject_client' =>'Iktos Webinar | Registration Successful',
                'subject_admin' => "Iktos Webinar | Registration | PFA ",
                'pdf'=>$pdf 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                //$message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
               $message->to($data['email']);
              $message->subject($data['subject_client']);
            });     
            return view('webinars.iktosai-webinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.iktosai-webinar.index',compact('countries'));
           
    }
    public function korberpharmaWebinar(Request $request)
    {
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/korber/on-demand.mp4';
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message'=>$request->client_message,
                'subject_client' =>'Korber Pharma Webinar | Registration Successful',
                'subject_admin' => "Korber Pharma Webinar | Registration | PFA ",
                'pdf'=>$pdf 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                //$message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
               $message->to($data['email']);
              $message->subject($data['subject_client']);
            });     
            return view('webinars.korberpharma-webinar.videosuccess')->with(['thank_message'=>'success']); 
        }    
        return view('webinars.korberpharma-webinar.index',compact('countries'));
           
    }

    public function repligenFlowvpxWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates;
            $form->quotation = $request->quotation;      
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/repligen/on-demand.mp4';
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,  
                 'email_updates' => $request->email_updates,
                'quotation' => $request->quotation,
                'pdf'=>$pdf ,
                'client_message'=>$request->client_message,
                'subject_client' =>'Registrations for Repligen English On Demand Webinar.',
                'subject_admin' => "Registrations for Repligen English On Demand Webinar.|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
            //   $message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        return view('webinars.repligen-flowvpx-en-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  repligen-webinar-korean. Happy Surfing. "]);
         // return redirect()->route('repligenFlowvpxWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.repligen-flowvpx-en-webinar.index',compact('countries'));
    }

    public function deliveryDevicesOndemandWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
       $videolink="https://industry.pharmafocusasia.com/webinars/catridges-ondemand-webinar/catridges-for-delivery-devices-ondemand-webinar.mp4";
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,  
                'pdf' =>$videolink,                          
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message' =>"Thank you for showing your interest in the Cartridges for Delivery devices webinar  by Datwyler",
                'subject_client' =>'Registration for Cartridges for Delivery devices On-demand webinar.',
                'subject_admin' => "Registration for Cartridges for Delivery devices webinar", 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                 // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });
          return view('webinars.deliveryDevicesOndemandWebinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of World Courier's. Happy Surfing. "]);
        }    
        return view('webinars.deliveryDevicesOndemandWebinar.index',compact('countries'));
    }

    public function preparednessOndemandWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
      $videolink="https://industry.pharmafocusasia.com/webinars/pandemic-preparedness/pandemic-preparedness-ondemand-webinar.mp4";
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'name' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->name;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();

            /*Send email admin*/  
            $data = [
                'name'=> $request->name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,  
                'pdf' =>$videolink,                          
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message' =>"Thank you for showing your interest in the  Pandemic preparedness webinar by Datwyler",
                'subject_client' =>'Registration for On Demand Pandemic preparedness webinar',
                'subject_admin' => "Registration for Cartridges for Pandemic preparedness webinar", 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                 // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });
          return view('webinars.preparednessOndemandWebinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of World Courier's. Happy Surfing. "]);
        }    
        return view('webinars.preparednessOndemandWebinar.index',compact('countries'));
    }

    public function filmaminationCoatingsWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates;  
            $form->save();
             $videolink="https://industry.pharmafocusasia.com/webinars/thermofisher-film-lamination/on-demand.mp4";
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,  
                'pdf' =>$videolink,
                'email_updates' => $request->email_updates,
                'client_message'=>$request->client_message,
                'subject_client' =>'Registration for On Demand West Pharma Webinar.',
                'subject_admin' => "Registration for On Demand West Pharma Webinar.|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
            //   $message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        return view('webinars.film-lamination-and-coatings-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  West Pharma Webinar. Happy Surfing. "]);
         // return redirect()->route('filmaminationCoatingsWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.film-lamination-and-coatings-webinar.index',compact('countries'));
    }

    public function veevaOpendataOndemandWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
    //   s$videolink="https://industry.pharmafocusasia.com/webinars/pandemic-preparedness/pandemic-preparedness-ondemand-webinar.mp4";
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=> $request->firstname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,  
                // 'pdf' =>$videolink,                          
                'country'=>$request->country,                                
                'client_message' =>$request->client_message,
                'subject_client' =>'Registration for Veeva OpenData on demand webinar',
                'subject_admin' => "Registration for Veeva OpenData on demand webinar", 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                //  $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      

             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });
            return redirect()->route('veevaOpendataOndemandWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
        //   return view('webinars.veeva-opendata.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of World Courier's. Happy Surfing. "]);
        }    
        return view('webinars.veeva-opendata.index',compact('countries'));
    }

    public function sartoriusCartWebinar(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();

            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->salutation = $request->salutation;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->zip = $request->zip_code;
            $form->working= $request->working;
            $form->development= $request->development;
            $form->challenges= $request->challenges;
            $form->declaration = $request->declaration ?? 'No';
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
               $videolink="https://industry.pharmafocusasia.com/webinars/sartorius-car-t-webinar/on-demand.mp4";
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'salutation'=>$request->salutation,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'zip'=>$request->zip_code,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                 'pdf' =>$videolink,   
                 'declaration'=>$request->declaration,
                'client_message' =>$request->client_message,    
                'working'=>$request->working,
                'development'=>$request->development,
                'challenges'=>$request->challenges,                              
                'subject_client' =>' On Demand Webinar Registration: The power of process insight to accelerate CAR-T process development',
                'subject_admin' => "Registrations for Sartorius CAR-T On Demand Webinar.", 

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin_new', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                 // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      
             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });
              return view('webinars.sartorius-car-t.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of Sartorius CAR-T Webinar. Happy Surfing. "]);
            // return redirect()->route('sartoriusCartWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.sartorius-car-t.index',compact('countries'));
    }

    public function thermofisherlabsafetypractices(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'firstname' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->firstname;   
            $form->lastname = $request->lastname;             
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes';  
            $form->save();
            /*Send email admin*/  
            // $pdf = 'https://industry.pharmafocusasia.com/webinars/thermofisher-scientific/thermofisher-scientific-lims-pharma-manufacturing-lab.mp4';
            $data = [
                'name'=> $request->firstname,
                'first_name'=> $request->firstname,
                'last_name'=> $request->firstname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                                
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes',
                'client_message' =>'We appreciate your interest in the Thermofisher scientific Webinar, Lab Safety Practices 2021.  An email with full details and a live link will be sent to you a few minutes before the webinar begins..',
                'subject_client' =>'Webinar Registration: Lab Safety Practices 2021 | Thermofisher Scientific.',
                'subject_admin' => "Registrations for Thermofisher scientific webinar", 
                // 'pdf'=>$pdf

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin_new_webinar', $data, function($message) use ($data) {
                 $message->to(trans('messages.adminemail'));
                 // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      
             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {              
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            });   
           return redirect()->route('thermofisherlabsafetypractices.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.thermo-fisher-lab-safety-practices-2021.index',compact('countries'));
    }

    public function variablePathlengthTechnology(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname; 
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates;
            $form->quotation = $request->quotation;      
            $form->save();
            $videolink="https://industry.pharmafocusasia.com/webinars/repligens-variable-pathlength-technology-for-oligonucleotide-drug-products/on-demand.mp4";
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'first_name'=> $request->firstname,
                'last_name'=> $request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,  
                 'email_updates' => $request->email_updates,
                'quotation' => $request->quotation,
                'pdf' =>$videolink,
                'client_message'=>$request->client_message,
                'subject_client' =>'Registrations for On-demand on  Variable Pathlength Technology for Oligonucleotide Drug Products.',
                'subject_admin' => "Registrations for On-demand on Variable Pathlength Technology for Oligonucleotide Drug Products.|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin_new_webinar', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
                // $message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        return view('webinars.repligens-variable-pathlength-technology.videosuccess');
         // return redirect()->route('variablePathlengthTechnology.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.variable-pathlength-technology.index',compact('countries'));
    }

     public function repligensvariablePathlengthTechnology(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname; 
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates;
            $form->quotation = $request->quotation;      
            $form->save();
            // $pdf = 'https://industry.pharmafocusasia.com/webinars/repligen/on-demand.mp4';
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'first_name'=> $request->firstname,
                'last_name'=> $request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,  
                 'email_updates' => $request->email_updates,
                'quotation' => $request->quotation,
                // 'pdf'=>$pdf ,
                'client_message'=>$request->client_message,
                'subject_client' =>'Registrations for Variable Pathlength Technology for Oligonucleotide Drug Products.',
                'subject_admin' => "Registrations for Variable Pathlength Technology for Oligonucleotide Drug Products.|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin_new_webinar', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
                // $message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        // return view('webinars.repligen-flowvpx-en-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  repligen-webinar-korean. Happy Surfing. "]);
         return redirect()->route('repligensvariablePathlengthTechnology.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.repligens-variable-pathlength-technology.index',compact('countries'));
    }

     public function bispecificAntibodyDeveloment(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname; 
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates;  
            $form->save();
             $videolink="https://industry.pharmafocusasia.com/promotions/lonza-promotion.mp4";
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'first_name'=> $request->firstname,
                'last_name'=> $request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,  
                'pdf' =>$videolink,
                'email_updates' => $request->email_updates,
                'client_message'=>$request->client_message,
                'subject_client' =>'Registration for On Demand Lonza Webinar.',
                'subject_admin' => "Registration for On Demand Lonza Webinar.|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin_new_webinar', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
              // $message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        return view('webinars.bispecific-antibody-develoment.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  Lonza Webinar. Happy Surfing. "]);
        }    
        return view('webinars.bispecific-antibody-develoment.index',compact('countries'));
    }
    
    public function bcPlatformsPresentation(Request $request)
    {
      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname; 
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates == ''? 'No': 'Yes';   
            $form->quotation = $request->quotation == ''? 'No': 'Yes';   
            $form->representative = $request->representative == ''? 'No': 'Yes'; 
            $form->save();
             $videolink="https://industry.pharmafocusasia.com/webinars/nordic-hospitals/bc-platforms-presentation.mp4";
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'first_name'=> $request->firstname,
                'last_name'=> $request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,  
                'pdf' =>$videolink,
                'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'representative' => $request->representative == ''? 'No': 'Yes',               
                'quotation' => $request->quotation == ''? 'No': 'Yes', 
                'client_message'=>$request->client_message,
                'subject_client' =>'Registration for On Demand BC Platforms Webinar.',
                'subject_admin' => "Registration for On Demand BC Platforms Webinar.|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin_new_webinar', $data, function($message) use ($data) {
               $message->to(trans('messages.adminemail'));     
                // $message->to('srinivas.i@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        return view('webinars.nordic-hospitals.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  BC Platforms Webinar. Happy Surfing. "]);
        }    
        return view('webinars.nordic-hospitals.index',compact('countries'));
    }
    
    public function veevaWebinar(Request $request)
    {

      $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            request()->validate([
                'firstname' => 'required',                   
                'job_title'=>'required', 
                'company'=>'required',                               
                'country'=>'required',
                'email' => 'email',
                'phone' =>'required|max:20',
            ]);
            $form->firstname = $request->firstname;            
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;            
            $form->company = $request->company;
            $form->type = $request->type;                 
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/veeva-webinar/on-demand.mp4';
            /*Send email admin*/  
            $data = [
                'name'=> $request->firstname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,                            
                'country'=>$request->country,                                
                'client_message' =>$request->client_message,
                'subject_client' =>$request->subject_client,
                'subject_admin' => $request->subject_admin, 
                'pdf'=>$pdf

            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
            //$message->to('pushpalatha@ochre-media.com');
                $message->subject($data['subject_admin']);
            });      
             /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {              
           $message->to($data['email']);
              $message->subject($data['subject_client']);
            }); 
            return  view('webinars.veeva-webinar.videosuccess')->with(['thank_message'=>$request->input('thank_message')]);  
        //    return redirect()->route('veevaWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
        }    
        return view('webinars.veeva-webinar.index',compact('countries'));
    }


   



    public function thermofisher(Request $request){
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname;
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->industry = $request->industry;
            $form->interest = $request->interest;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates;  
            $form->save();
            //  $videolink="https://industry.pharmafocusasia.com/webinars/thermofisher-film-lamination/on-demand.mp4";
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'lastname'=> $request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'industry'=>$request->industry,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,   
                'research' => $request->interest,  
                'country'=>$request->country,  
                
                'email_updates' => $request->email_updates,
                'client_message'=>$request->client_message,
                'subject_client' =>'Registration for On Demand West Pharma Webinar.',
                'subject_admin' => "Registration for On Demand West Pharma Webinar.|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
             $message->to(trans('messages.adminemail'));     
            //   $message->to('pushpalatha@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
        // return view('webinars.film-lamination-and-coatings-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  West Pharma Webinar. Happy Surfing. "]);
         return redirect()->route('ThermofisherGeneralPurposeCentrifuge.success')->with(['thank_message'=>$request->input('thank_message')]);
        }   
      return view('webinars.thermofisher',compact('countries'));

    }
    
    
    public function wuxiXdcResaerchPlatform(Request $request){
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname;
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            // $form->industry = $request->industry;
            // $form->interest = $request->interest;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates ?? 'No'; 
            $form->save();
            //  $videolink="https://industry.pharmafocusasia.com/webinars/thermofisher-film-lamination/on-demand.mp4";
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'lastname'=> $request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                // 'industry'=>$request->industry,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,   
                // 'research' => $request->interest,  
                'country'=>$request->country,  
                
                'email_updates' => $request->email_updates ?? 'No', 
                'client_message'=>$request->client_message,
                'subject_client' =>'Wuxi Biologics Webinar.',
                'subject_admin' => "Registrations for Wuxi Biologics Webinar  .|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
             $message->to(trans('messages.adminemail'));     
              // $message->to('pushpalatha@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
           return view('webinars.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  West Pharma Webinar. Happy Surfing. "]);
        // return view('webinars.film-lamination-and-coatings-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  West Pharma Webinar. Happy Surfing. "]);
        // return redirect()->route('wuxiXdcResaerchPlatform.success')->with(['thank_message'=>$request->input('thank_message')]);
        }   
         return view('webinars.wuxi-xdc-research-platform',compact('countries'));
    }
    
    public function wuxiXdcResaerchPlatformKr(Request $request){
        $countries = DB::table('countries')->get();
          if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname;
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            // $form->industry = $request->industry;
            // $form->interest = $request->interest;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
            $form->email_updates = $request->email_updates ?? 'No'; 
            $form->save();
              $videolink="https://industry.pharmafocusasia.com/webinars/wuxi-xdc/on-demand.mp4";
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'lastname'=> $request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                // 'industry'=>$request->industry,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,   
                // 'research' => $request->interest,  
                'country'=>$request->country,  
                
                'email_updates' => $request->email_updates ?? 'No', 
                'client_message'=>$request->client_message,
                'subject_client' =>'Wuxi Biologics 웨비나.',
                'subject_admin' => "Wuxi Biologics 웨비나 등록 .|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
             $message->to(trans('messages.adminemail'));     
               //$message->to('pushpalatha@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
         return view('webinars.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  West Pharma Webinar. Happy Surfing. "]);
        // return redirect()->route('wuxiXdcResaerchPlatformKr.success')->with(['thank_message'=>$request->input('thank_message')]);
        }   
        return view('webinars.wuxi-xdc-research-platform-kr',compact('countries'));
       
    }
    public function bioLectorAndMultisizer4ECoulterCounterWebinar(Request $request){
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname; 
            $form->lastname = $request->lastname;
            $form->company = $request->company;
            $form->job_title = $request->job_title;                
            $form->email = $request->email;
            $form->industry = $request->department;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->type = $request->type;                 
           // $form->email_updates = $request->email_updates ?? 'No'; 
            $form->save();
           
            /*Send email admin*/
            $data = [
                'name'=> $request->firstname,
                'lastname'=> $request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
             'industry'=>$request->department,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,   
                // 'research' => $request->interest,  
                'country'=>$request->country,  
                
               // 'email_updates' => $request->email_updates ?? 'No', 
                'client_message'=>$request->client_message,
                'subject_client' =>'Beckman Coulter Webinar',
                'subject_admin' => "Registrations for Beckman Coulter Webinar|".$request->email."| PFA - Webinars."                      
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
             $message->to(trans('messages.adminemail'));     
              // $message->to('pushpalatha@ochre-media.com');            
                $message->subject($data['subject_admin']);
            });
           /*Client mail*/
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
                $message->to($data['email']);
                $message->subject($data['subject_client']);
           });
    
         return redirect()->route('bioLectorAndMultisizer4ECoulterCounterWebinar.success')->with(['thank_message'=>$request->input('thank_message')]);
        }  

        return view('webinars.biolector-and-multisizer-4e-coulter-counter-webinar',compact('countries'));
    }

    public function theAdaptivePlantToEnablePersonalizedHealthcare(Request $request){


        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){                        
             
            $form = new WebinarData();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->job_title = $request->title;
            $form->type = $request->type;
            $form->city = $request->city;
            $form->address1 = $request->address;
            $form->zip = $request->postal_code;
            $form->email_updates = $request->declaration ?? 'No';
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/emerson/on-demand.mp4';
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->title,
              
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'city' => $request->city,
                'address1' => $request->address,
                'zip' => $request->postal_code,
                'email_updates' => $request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
           // $message->to('omplenquiry@ochre-media.com');
          $message->to(trans('messages.adminemail'));    
         // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return view('webinars.emerson.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand Pursuing the Adaptive Plant to Enable Personalized Healthcare. Happy Surfing. "]);
           // return redirect()->route('theAdaptivePlantToEnablePersonalizedHealthcare.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/the-adaptive-plant-to-enable-personalized-healthcare',compact('countries'));
    }


    public function clarivatePharmavision2022(Request $request){
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){                        
             
            $form = new WebinarData();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->job_title = $request->title;
            $form->type = $request->type;
            $form->industry = $request->organization_type;
            $form->city = $request->city;
            $form->job_role = $request->job_role;
            $form->email_updates = $request->declaration ?? 'No';
            $form->save();
          //  $pdf = 'https://industry.pharmafocusasia.com/webinars/emerson/on-demand.mp4';
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->title,
                'industry' => $request->organization_type,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'city' => $request->city,
                'job_role' => $request->job_role,
              
                'email_updates' => $request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
               // 'pdf'=>$pdf
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
           // $message->to('omplenquiry@ochre-media.com');
          $message->to(trans('messages.adminemail'));    
         // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
          //  return view('webinars.emerson.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand Pursuing the Adaptive Plant to Enable Personalized Healthcare. Happy Surfing. "]);
            return redirect()->route('clarivatePharmavision2022.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('webinars.clarivate-pharmavision-2022.index',compact('countries'));
    }

    public function acgWorldCapsulesWebinar(Request $request){
      
       // $title = ['Belarus','Austria','Serbia','Switzerland','Germany','Holy See','Andorra','Bulgaria','United Kingdom','France','Montenegro','Luxembourg','Italy','Denmark','Finland','Slovakia','Norway','Ireland','Spain','Malta','Ukraine','Croatia (Hrvatska)','Moldova, Republic of','Monaco','Liechtenstein','Poland','Iceland','San Marino','Bosnia and Herzegovina','Albania','Lithuania','Macedonia','Slovenia','Romania','Latvia','Netherlands','Russian Federation','Estonia','Belgium','Czech Republic','Greece','Portugal','Sweden','Ukraine','Spain','Germany','Italy','Switzerland','Hungary','Canada','United States','Mexico'];
        $countries = DB::table('countries')->get();
    
        if(\Request::isMethod('post')){
            $this->validate($request,[
                'phone' => 'required|numeric',
                
                ]);
          //  return $request;
        $form = new WebinarData();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->job_title = $request->job_title;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->interest = $request->interest;
        $form->email_updates = $request->email_updates;
        $form->industry = $request->industry;
        $form->type = $request->type;
        $form->save();
        $pdf = 'https://industry.pharmafocusasia.com/webinars/acg-world-capsules-webinar/on-demand.mp4';
        //send email admin
        $data = [
        'name'  =>$request->firstname,
        'first_name' => $request->firstname,
        'last_name' => $request->lastname,
        'email'=> $request->email,
        'phone' => $request->phone,
        'job_title'  => $request->job_title,
        'company' => $request->company,
        'country' => $request->country,
        'type' => $request->type,
        'interest'  => $request->interest,
        'email_updates'  => $request->email_updates,
        'industry'  => $request->industry,
        'site_name' =>'pharmafocusasia',
        'subject_client'=> $request->client_subject,
        'subject_admin' => $request->admin_subject,
        'client_message' => $request->client_message,
        'pdf'=>$pdf,
         ];
        //admin mail
        Mail::send('emails.webinars.admin', $data, function($message) use ($data){
         //  $message->to('pushpalatha@ochre-media.com');
           $message->to(trans('messages.adminemail'));   
            $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
        });
        //client Mail
        Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                 $message->to($data['email']);
                $message->subject($data['subject_client']);
        });
        return view('webinars.acg-world-capsules-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  ACG Webinar. Happy Surfing. "]);
       // return redirect()->route('acgWorldCapsulesWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
        }
        return view('webinars.acg-world-capsules-webinar.index',compact('countries'));
    }

    public function nsfWebinar(Request $request){
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){
       $form = new WebinarData();
       $form->firstname = $request->firstname;
       $form->lastname = $request->lastname;
       $form->email = $request->email;
       $form->company = $request->company;
       $form->phone = $request->phone;
       $form->country = $request->country;
       $form->job_title = $request->job_title;
       $form->type = $request->type;
       $form->email_updates = $request->email_updates ?? 'No';
       $form->save();

       //admin mail data

       $data = [
        'name'  =>$request->firstname,
     'firstname' => $request->firstname,
     'lastname' => $request->lastname,
     'email'   =>$request->email,
     'company' => $request->company,
     'country' =>$request->country,
     'type'=>$request->type,
     'phone' => $request->phone,
     'job_title' => $request->job_title,
     'email_updates' => $request->email_updates ?? 'No',
     'subject_admin' =>$request->admin_subject,
     'subject_client' => $request->client_subject,
     'client_message' =>$request->client_message,
       ];
       //admin mail
       Mail::send('emails.webinars.admin',$data ,function($message) use($data){
         //$message->to('pushpalatha@ochre-media.com');
        $message->to(trans('messages.adminemail'));   
         $message->subject($data['subject_admin']. '|'.$data['email'].' |Client Retention Projects.' );

       });
//client Mail
       Mail::send('emails.webinars.client_webinar_all',$data,function($message) use ($data){
       $message->to($data['email']);
       $message->subject($data['subject_client']);
       });
    return redirect()->route('nsfWebinar.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]);

        }
        return view('webinars.nsf-webinar.index',compact('countries'));
    }

    public function suezSieversInstrumentsWebinarRtt(Request $request){
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){
          $form = new WebinarData();
          $form->firstname = $request->firstname;
          $form->lastname = $request->lastname;
          $form->phone = $request->phone;
          $form->email = $request->email;
          $form->company = $request->company;
          $form->country = $request->country;
          $form->job_title = $request->job_title;
          $form->type = $request->type;
          $form->email_updates = $request->email_updates ?? 'No';
          $form->save();
           $pdf = 'https://industry.pharmafocusasia.com/webinars/suez-veolia/on-demand.mp4';
          //Email Data
          $data = [
            'name'  =>$request->firstname,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email'   =>$request->email,
            'company' => $request->company,
            'country' =>$request->country,
            'type'=>$request->type,
            'phone' => $request->phone,
            'job_title' => $request->job_title,
            'email_updates' => $request->email_updates ?? 'No',
            'subject_admin' =>$request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' =>$request->client_message,
            'pdf'=>$pdf,
          ];
         //Admail Mail
         Mail::send('emails.webinars.admin',$data, function($message) use($data){
       //  $message->to('pushpalatha@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
          $message->subject($data['subject_admin'].'|'.$data['email'].'| Client Retention Projects.' );
         });
         //Client Mail
         Mail::send('emails.webinars.client_webinar_all',$data,function($message) use($data){
         $message->to($data['email']);
         $message->subject($data['subject_client']);
         });
           return view('webinars.suez-sievers-instruments-webinar-rtt.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand Suez Sievers Instruments Webinar. Happy Surfing. "]);
          //return redirect()->route('suezSieversInstrumentsWebinarRtt.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]);
        }
        return view('webinars.suez-sievers-instruments-webinar-rtt.index',compact('countries'));
    }
    
    public function futureOfAsepticConnectionsInCellAndGeneTherapies(Request $request){
        $countries = DB::table('countries')->get();
        if(\Request::isMethod('post')){    
            $form = new WebinarData();
            $form->firstname = $request->firstname;                
            $form->lastname = $request->lastname;                
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->company = $request->company;
            $form->type = $request->type;                 
            // $form->email_updates = $request->email_updates == ''? 'No': 'Yes';  
            $form->save();
            $pdf = 'https://industry.pharmafocusasia.com/webinars/future-of-aseptic-connections-in-cell-and-gene-therapies/ondemand.mp4';
            /*Send email admin*/  
            
            $data = [
                'name'=> $request->firstname.' '.$request->lastname,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_role'=>$request->job_title,
                'type' => $request->type,                            
               // 'country'=>$request->country,                
                //'company_size'=>$request->company_size,                
               // 'industry'=>$request->industry,                
               // 'email_updates' => $request->email_updates == ''? 'No': 'Yes',
                'subject_client' =>'Registration for On Demand webinar video of  Future-of-Aseptic-Connections-in-Cell-and-Gene-Therapies. ',
                'subject_admin' => "On Demand webinar video of  Future-of-Aseptic-Connections-in-Cell-and-Gene-Therapies. |".$request->email,                     
                'client_message' => $request->client_message, 
                'pdf' => $pdf,
            ];
            /*Admin mail*/
            Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
      $message->to(trans('messages.adminemail'));                
              //  $message->to('pushpalatha@ochre-media.com');                
                $message->subject($data['subject_admin']);
            });      

           /*Client mail*/
           Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
          $message->to($data['email']);
                $message->subject($data['subject_client']);
          });       
        //  return redirect()->route('isYourElectronicProductionRecordIncomplete.success')->with(['thank_message'=>$request->input('thank_message')]);
        return  view('webinars.future-of-aseptic-connections-in-cell-and-gene-therapies.videosuccess')->with(['thank_message'=>$request->input('thank_message')]);
        } 
         return view('webinars.future-of-aseptic-connections-in-cell-and-gene-therapies.index',compact('countries'));
    }

    public function asepticConnectionsInCellAndGeneTherapies(Request $request){
        $countries = DB::table('countries')->get();
        return view('webinars.aseptic-connections-in-cell-and-gene-therapies.index',compact('countries')); 
    }
    
    public function acg360SeriesWebinar(Request $request){
        $countries = DB::table('countries')->get();
         if(\Request::isMethod('post')){
           $this->validate($request,[
            'phone' => 'required|numeric',
            
            ]);
            $form = new WebinarData();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = $request->state;
            $form->city = $request->city;
            $form->declaration = $request->privacy;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/acg-world-capsules-webinar/on-demand.mp4';
        //send email admin
            $data = [
            'name'  =>$request->firstname .' '. $request->lastname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email'=> $request->email,
            'phone' => $request->phone,
            'job_title'  => $request->job_title,
            'company' => $request->company,
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'type' => $request->type,
            'declaration'  => $request->privacy,
            'site_name' =>'Pharmafocusasia',
            'subject_client'=> $request->client_subject,
            'subject_admin' => $request->admin_subject,
            'client_message' => $request->client_message,
            // 'pdf'=>$pdf,
             ];
            //admin mail
            Mail::send('emails.webinars.admin', $data, function($message) use ($data){
            //   $message->to('pushpalatha@ochre-media.com');
                $message->to(trans('messages.adminemail'));   
                $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
            });
            //client Mail
            Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                     $message->to($data['email']);
                    $message->subject($data['subject_client']);
            });
            // return view('webinars.acg-world-capsules-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  ACG Webinar. Happy Surfing. "]);
            return redirect()->route('acg360SeriesWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
        }
        return view('webinars.acg-360-series-webinar.index',compact('countries')); 
        
    }
    
    public function nsfWebinarGmp(Request $request){
     $countries = DB::table('countries')->get();  
       if(\Request::isMethod('post')){
        //   $this->validate($request,[
        //     'phone' => 'required|numeric',
            
        //     ]);
            $form = new WebinarData();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = $request->state;
         //   $form->city = $request->city;
           // $form->declaration = $request->privacy;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->email_updates  = $request->email_updates ?? 'No';  
            $form->save();
         $pdf = 'https://industry.pharmafocusasia.com/webinars/nsf-webinar-gmp/on-demand.mp4';
        //send email admin
            $data = [
            'name'  =>$request->firstname .' '. $request->lastname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email'=> $request->email,
            'phone' => $request->phone,
            'job_title'  => $request->job_title,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'site_name' =>'Pharmafocusasia',
            'subject_client'=> $request->client_subject,
            'subject_admin' => $request->admin_subject,
            'client_message' => $request->client_message,
            'email_updates'  => $request->email_updates ?? 'No', 
         'pdf'=>$pdf,
             ];
            //admin mail
            Mail::send('emails.webinars.admin', $data, function($message) use ($data){
              // $message->to('pushpalatha@ochre-media.com');
                $message->to(trans('messages.adminemail'));   
                $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
            });
            //client Mail
            Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                     $message->to($data['email']);
                    $message->subject($data['subject_client']);
            });
             return view('webinars.nsf-webinar-gmp.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  NSF Webinar. Happy Surfing. "]);
           // return redirect()->route('acg360SeriesWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
       }
      return view('webinars.nsf-webinar-gmp.index',compact('countries')); 
    }

public function acg360WebinarSeries(Request $request){
    $countries = DB::table('countries')->get();  
    if(\Request::isMethod('post')){
     //   $this->validate($request,[
     //     'phone' => 'required|numeric',
         
     //     ]);
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->state = $request->state;
        $form->city = $request->city;
        // $form->declaration = $request->privacy;
         $form->company = $request->company;
         if($request->type == 'ACG 360 Webinar Series'){
            $form->type = $request->type;
         }
         if($request->utm_type == 'internal'){
            $form->type ='internal ACG 360 Webinar Series';
         }
         $form->email_updates  = $request->email_updates ?? 'No';  
         $form->save();
     // $pdf = 'https://industry.pharmafocusasia.com/webinars/nsf-webinar-gmp/on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'type' => $request->type,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'email_updates'  => $request->email_updates ?? 'No', 
     // 'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
           // $message->to('bhavani@ochre-media.com');
             $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
         // return view('webinars.acg-360-webinar-series.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
         return redirect()->route('acg360WebinarSeries.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
    }
    return view('webinars.acg-360-webinar-series.index',compact('countries')); 
}


public function beckmaCoulterLifeSciencesWebinar(Request $request){
    $countries = DB::table('countries')->get();  
    if(\Request::isMethod('post')){
        //   $this->validate($request,[
        //     'phone' => 'required|numeric',
            
        //     ]);
            $form = new WebinarData();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
            $form->country = $request->country;
            $form->state = $request->state;
           $form->city = $request->city;
           $form->zip = $request->postal_code;
           $form->interest = implode('',$request->interest);
            $form->company = $request->company;
            $form->type = $request->type;
            $form->email_updates  = $request->email_updates ?? 'No';  
            $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/nsf-webinar-gmp/on-demand.mp4';
        //send email admin
            $data = [
            'name'  =>$request->firstname .' '. $request->lastname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email'=> $request->email,
            'phone' => $request->phone,
            'job_title'  => $request->job_title,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'zip' => $request->postal_code,
            'site_name' =>'Pharmafocusasia',
            'subject_client'=> $request->client_subject,
            'subject_admin' => $request->admin_subject,
            'client_message' => $request->client_message,
            'email_updates'  => $request->email_updates ?? 'No', 
        // 'pdf'=>$pdf,
             ];
            //admin mail
            Mail::send('emails.webinars.admin', $data, function($message) use ($data){
               //$message->to('bhavani@ochre-media.com');
                $message->to(trans('messages.adminemail'));   
                $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
            });
            //client Mail
            Mail::send('emails.webinars.beckman', $data, function($message) use ($data) {
                     $message->to($data['email']);
                    $message->subject($data['subject_client']);
            });
            // return view('webinars.acg-360-webinar-series.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            return redirect()->route('beckmaCoulterLifeSciencesWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
        }
            return view('webinars.beckman-coulter-life-sciences-webinar.index',compact('countries')); 
}


public function perkinelmerChineseMedicineOnDemandWebinar(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){
        //   $this->validate($request,[
        //     'phone' => 'required|numeric',
            
        //     ]);
            $form = new WebinarData();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->job_title = $request->job_title;
           $form->country = $request->country;
            $form->job_role = $request->job_role;
         $form->interest = $request->areas_of_interest;
          // $form->intrested = $request->intrested;
            $form->company = $request->company;
            $form->type = $request->type;
           $form->email_updates  = $request->intrested ?? 'No';  
            $form->save();
         $pdf = 'https://industry.pharmafocusasia.com/webinars/perkin-elmer-chinese-medicine/on-demand.mp4';
        //send email admin
            $data = [
            'name'  =>$request->firstname .' '. $request->lastname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email'=> $request->email,
            'phone' => $request->phone,
            'job_title'  => $request->job_title,
            'company' => $request->company,
            'country' => $request->country,
            'job_role' => $request->job_role,
            'type' => $request->type,
            'email_updates'=>$request->intrested,
            'site_name' =>'Pharmafocusasia',
            'interest'=>$request->areas_of_interest,
            'subject_client'=> $request->client_subject,
            'subject_admin' => $request->admin_subject,
            'client_message' => $request->client_message,
            'email_updates'  => $request->email_updates ?? 'No', 
         'pdf'=>$pdf,
             ];
            //admin mail
            Mail::send('emails.webinars.admin', $data, function($message) use ($data){
             // $message->to('bhavani@ochre-media.com');
               $message->to(trans('messages.adminemail'));   
                $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
            });
            //client Mail
            Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                     $message->to($data['email']);
                    $message->subject($data['subject_client']);
            });
             return view('webinars.perkinelmer-chinese-medicine-on-demand-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  webinar video of  PerkinElmer Chinese Medicine"]);
           // return redirect()->route('acg360SeriesWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
       }
    return view('webinars.perkinelmer-chinese-medicine-on-demand-webinar.index',compact('countries')); 
}

public function acg360webinarEpisode6(Request $request){
    $countries = DB::table('countries')->get(); 
    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
       } else {
            $captcha = false;
       }
    if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){
        $this->validate($request,[
         'phone' => 'required|numeric',
         
         ]);
       
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->state = $request->state;
         $form->city = $request->city;
         $form->declaration = $request->privacy;
         $form->company = $request->company;
         $form->type = $request->type;
         $form->email_updates = $request->email_updates;
         $form->quotation = $request->quotation;
           $form->representative = $request->representative; 
         if($request->type == 'ACG 360 Webinar Episode-6'){
            $form->type = $request->type;
         }
         if($request->utm_source == 'ocm'){
            $form->type ='ocm ACG 360 Webinar Episode-6';
         }
         $form->save();
      $pdf = 'https://industry.pharmafocusasia.com/webinars/acg-360-webinar-episode-6/360-ondemand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'city' => $request->city,
         'state' => $request->state,
         'email_updates' => $request->email_updates,
         'quotation' => $request->quotation,
         'type' => $request->type,
         'representative'  => $request->representative,
         'declaration'  => $request->privacy,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         // 'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
          // $message->to('bhavani@ochre-media.com');
             $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.acg-360-webinar-episode-6.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  ACG Webinar. Happy Surfing. "]);
        // return redirect()->route('acg360webinarEpisode6.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
   
    return view('webinars.acg-360-webinar-episode-6.index',compact('countries')); 
}

public function beckmanCoulter(Request $request){
    $countries = DB::table('countries')->get(); 
    
  
    
    if(\Request::isMethod('post')){
         //$this->validate($request,['phone' => 'required|numeric']);
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->job_role = $request->department;
         $form->industry = $request->industry;
         $form->purchase_intrest = $request->purchase_intrest;
         $form->company = $request->company;
         $form->type = $request->type;
         $form->email_updates  = $request->email_updates ?? 'No'; 
         $form->interest =$request->interest;
         $form->save();
    
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'job_role' => $request->department,
         'interest' => $request->interest,
         'industry' => $request->industry,
         'type' => $request->type,
         'email_updates'  => $request->email_updates ?? 'No',
         'purchase_intrest'  => $request->purchase_intrest,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         // 'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
          // $message->to('pushpalatha@ochre-media.com');
            $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
       // return view('webinars.acg-world-capsules-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  ACG Webinar. Happy Surfing. "]);
         return redirect()->route('beckmanCoulter.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.beckman-coulter-webinar.index',compact('countries')); 
}
public function thefutureoftitaniumdioxideinpharma(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){
        $this->validate($request,[
         'phone' => 'required|numeric',
         ]);
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->state = $request->state;
         $form->city = $request->city;
         $form->declaration = $request->privacy;
         $form->company = $request->company;
       //  $form->type = $request->type;

         if($request->type == 'The Future Of Titanium Dioxide In Pharma'){
            $form->type = $request->type;
         }
         if($request->utm_source == 'inhouse'){
            $form->type ='inhouse The Future Of Titanium Dioxide In Pharma';
         }
         $form->save();
    
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'city' => $request->city,
         'state' => $request->state,
         'type' => $request->type,
         'declaration'  => $request->privacy,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         // 'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
            //$message->to('pushpalatha@ochre-media.com');
            $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
         // return view('webinars.acg-world-capsules-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  ACG Webinar. Happy Surfing. "]);
         return redirect()->route('thefutureoftitaniumdioxideinpharma.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.the-future-of-titanium-dioxide-in-pharma.index',compact('countries')); 
}
public function lonzawebinarfeb14(Request $request){
    $countries = DB::table('countries')->get(); 
    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
       } else {
            $captcha = false;
       }
       if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){    
    
        $this->validate($request,[
         'phone' => 'required','regex:/[0-9\s._*#+-]+/',
         ]);
     //return $request;
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->email_updates = $request->email_updates;
       $form->quotation = $request->quotation;
         $form->representative = $request->representative;
         $form->company = $request->company;
        // $form->type = $request->type;
        if($request->type == 'Lonza Webinar'){
            $form->type = $request->type;
         }
         if($request->utm_source == 'registrations'){
            $form->type ='Lonza 14Feb23 Internal';
         }
         if($request->type == 'Lonza 14Feb23 On demand Webinar'){
            $form->type = $request->type;
         }
         $form->save();
         $pdf = 'https://industry.pharmafocusasia.com/webinars/lonza-biologics/lonza-biologics-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'email_updates' => $request->email_updates,
         'quotation' => $request->quotation,
         'type' => $request->type,
         'representative'  => $request->representative,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
          // $message->to('bhavani@ochre-media.com');
           $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_all1', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.lonza-webinar-feb14.videosuccess')->with(['thank_message' => $request->input('thank_message')]);
        // return redirect()->route('lonzawebinarfeb14.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
   
    return view('webinars.lonza-webinar-feb14.index',compact('countries')); 
}

public function acgTrendsincapsulesDevelopment(Request $request){
    $countries = DB::table('countries')->get(); 
    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
       } else {
            $captcha = false;
       }
       if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){    
        $this->validate($request,[
            'phone' => 'required','regex:/[0-9\s._*#+-]+/',
         ]);
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->email_updates = $request->email_updates;
       $form->quotation = $request->quotation;
         $form->representative = $request->representative;
         $form->company = $request->company;
         $form->type = $request->type;
         if($request->type == 'ACG World Capsules Webinar'){
            $form->type = $request->type;
         }
         if($request->utm_source == '23feb23'){
            $form->type ='ACG 23Feb23 Internal';
         }
         if($request->type == 'On Demand ACG World Capsules Webinar'){
            $form->type = $request->type;
         }
         $form->save();
    
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'email_updates' => $request->email_updates,
         'quotation' => $request->quotation,
         'type' => $request->type,
         'representative'  => $request->representative,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         // 'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
           // $message->to('bhavani@ochre-media.com');
            $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_acg', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.acg-trends-in-capsules-development.videosuccess')->with(['thank_message' => $request->input('thank_message')]) ;
        // return redirect()->route('acgTrendsincapsulesDevelopment.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.acg-trends-in-capsules-development.index',compact('countries')); 
}

 public function GenScriptProBioWebinar(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
        $this->validate($request,[
         'phone' => 'required','regex:/[0-9\s._*#+-]+/',
         ]);
        // return "test";
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->email_updates = $request->email_updates;
         $form->quotation = $request->quotation;
         $form->representative = $request->representative;
         $form->company = $request->company;
         $form->type = $request->type;
        // if($request->type == 'Lonza Webinar'){
        //     $form->type = $request->type;
        //  }
        //  if($request->utm_source == 'registrations'){
        //     $form->type ='Lonza 14Feb23 Internal';
        //  }
         $form->save();
    
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'email_updates' => $request->email_updates,
         'quotation' => $request->quotation,
         'type' => $request->type,
         'representative'  => $request->representative,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         // 'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
          //$message->to('pushpalatha@ochre-media.com');
           $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_genscript', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
         // return view('webinars.acg-world-capsules-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  ACG Webinar. Happy Surfing. "]);
         return redirect()->route('GenScriptProBioWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.genscript-probio-webinar.index',compact('countries')); 
 }
 public function mastercontrolDigitaltrends(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
        $this->validate($request,[
         'phone' => 'required','regex:/[0-9\s._*#+-]+/',
         ]);
        // return "test";
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->company_size = $request->company_size;
         $form->company = $request->company;
         $form->industry = $request->industry;
         $form->type = $request->type;
       
         $form->save();
         $pdf="https://vimeo.com/794168610/ab5422be50";
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry' => $request->industry,
         'quotation' => $request->quotation,
         'type' => $request->type,
         'company_size'  => $request->company_size,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
         // $message->to('bhavani@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.master-control-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  ACG Webinar. Happy Surfing. "]);
         //return redirect()->route('mastercontrolDigitaltrends.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.master-control-webinar.index',compact('countries')); 
}
public function thermofisherScientificbiobankingWebinarmay23(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
        $this->validate($request,[
         'phone' => 'required','regex:/[0-9\s._*#+-]+/',
         ]);
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->interest = $request->areas_of_interest;
        // $form->company_size = $request->company_size;
        $form->industry = $request->industry;
         $form->company = $request->company;
         $form->address1 = $request->address;
         $form->type = $request->type;
         $form->email_updates = $request->email_updates;
       
         $form->save();
         $pdf="https://industry.pharmafocusasia.com/webinars/thermofisher-biobank/on-demand.mp4";
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry' => $request->industry,
         'interest' => $request->areas_of_interest,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'company_size'  => $request->company_size,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
        // $message->to('bhavani@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_tf_biobanking', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.thermofisher-scientific-bio-banking-webinar-may23.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand  ACG Webinar. Happy Surfing. "]);
        // return redirect()->route('thermofisherScientificbiobankingWebinarmay23.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.thermofisher-scientific-bio-banking-webinar-may23.index',compact('countries')); 
}

public function spartaSystemfutureondemandWebinar(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
        $this->validate($request,[
         'phone' => 'required','regex:/[0-9\s._*#+-]+/',
         ]);
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->interest = $request->areas_of_interest;
         $form->state = $request->state;
       // $form->industry = $request->industry;
         $form->company = $request->company;
        // $form->address1 = $request->address;
         $form->type = $request->type;
        // $form->email_updates = $request->email_updates;
       
         $form->save();
         $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-system-future-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry' => $request->industry,
         'interest' => $request->areas_of_interest,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'state'  => $request->state,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
        // $message->to('bhavani@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.sparta-system-future-on-demand-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest in Sparta Systems On-Demand Webinar."]);
        // return redirect()->route('spartaSystemfutureondemandWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.sparta-system-future-on-demand-webinar.index',compact('countries')); 
}

public function spartaSystemfutureondemandWebinarJp(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
        $this->validate($request,[
         'phone' => 'required','regex:/[0-9\s._*#+-]+/',
         ]);
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->interest = $request->areas_of_interest;
         $form->state = $request->state;
       // $form->industry = $request->industry;
         $form->company = $request->company;
        // $form->address1 = $request->address;
         $form->type = $request->type;
        // $form->email_updates = $request->email_updates;
       
         $form->save();
         $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-system-future-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry' => $request->industry,
         'interest' => $request->areas_of_interest,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'state'  => $request->state,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
         //$message->to('bhavani@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.sparta-system-future-on-demand-webinar-jp.videosuccess')->with(['thank_message'=>"Thank you for showing interest in Sparta Systems On-Demand Webinar."]);
        // return redirect()->route('spartaSystemfutureondemandWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.sparta-system-future-on-demand-webinar-jp.index',compact('countries')); 
}
public function watersBioprocessinglabwebinarJune14(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
       
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
        // $form->organization = $request->company;
        $form->city = $request->city;
         $form->company = $request->company;
       
         $form->type = $request->type;

        $form->do_you_use = implode('',$request->do_you_use);
         $form->job_role = $request->job_role;
         $form->process_understanding = implode('',$request->process_understanding);
        $form->interest = $request->areas_of_interest;
        $form->declaration = $request->declaration;
         $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-system-future-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         
         'areas_of_interest' => $request->areas_of_interest,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'state'  => $request->state,
         'do_you_use' =>implode('',$request->do_you_use),
         'job_role' =>$request->job_role,
         'process_understanding' =>implode('',$request->process_understanding),
         'declaration' => $request->declaration,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
       //  'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin_new', $data, function($message) use ($data){
         //$message->to('bhavani@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_watersbioprocessing', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
        //  return view('webinars.sparta-system-future-on-demand-webinar-jp.videosuccess')->with(['thank_message'=>"Thank you for showing interest in Sparta Systems On-Demand Webinar."]);
         return redirect()->route('watersBioprocessinglabwebinarJune14.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.waters-bioprocessing-lab-webinar-June14.index',compact('countries')); 
}

public function beckmancoulterWebinar27thjun23(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
       
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
        $form->industry = $request->department;
        $form->purchase_intrest = $request->purchase_intrest;
         $form->company = $request->company;
       
         $form->type = $request->type;
         $form->email_updates = $request->email_updates;
         $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-system-future-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry'=>$request->department,
         'areas_of_interest' => $request->areas_of_interest,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'state'  => $request->state,
         'do_you_use' =>$request->purchase_intrest,
         'job_role' =>$request->job_role,
        
         'declaration' => $request->declaration,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
       //  'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin_new', $data, function($message) use ($data){
       //  $message->to('bhavani@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_beckman-coulter-webinar', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
        //  return view('webinars.sparta-system-future-on-demand-webinar-jp.videosuccess')->with(['thank_message'=>"Thank you for showing interest in Sparta Systems On-Demand Webinar."]);
         return redirect()->route('beckmancoulterWebinar27thjun23.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.beckman-coulter-webinar-27th-jun-23.index',compact('countries'));
}
public function checkgooglecaptha($token)
{
    $secretKey = '6Ld3Ni0aAAAAAHR6NjfdegbMGe1rSYhVaJVnAFW1';
      $url = 'https://www.google.com/recaptcha/api/siteverify';
      $data = ['secret'=>$secretKey,'response'=>$token];
      $options = [
          'http'=>[
            'header'=> 'Content-Type: application/x-www-form-urlencoded\r\n',
            'method'=>'POST',
            'content'=>http_build_query($data)
          ]
      ];
      $context = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      $resultJson = json_decode($result);
      return $resultJson->success;
      print_r($request);
}
public function beckmancoulterWebinar20thjul23(Request $request){
    $countries = DB::table('countries')->get(); 

    if(\Request::isMethod('post')){    
    
       
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
        $form->industry = $request->department;
        $form->purchase_intrest = $request->purchase_intrest;
         $form->company = $request->company;
       
         $form->type = $request->type;
         $form->email_updates = $request->email_updates;
         $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-system-future-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry'=>$request->department,
         'areas_of_interest' => $request->areas_of_interest,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'state'  => $request->state,
         'do_you_use' =>$request->purchase_intrest,
         'job_role' =>$request->job_role,
        
         'declaration' => $request->declaration,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
       //  'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin_new', $data, function($message) use ($data){
       // $message->to('srunik@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_beckman-coulter-webinar-july', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
         // return view('webinars.sparta-system-future-on-demand-webinar-jp.videosuccess')->with(['thank_message'=>"Thank you for showing interest in Sparta Systems On-Demand Webinar."]);
         return redirect()->route('beckmancoulterWebinar20thjul23.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.beckman-coulter-webinar-20th-jul-23.index',compact('countries'));
}
public function agilenttechnologiesinsightfulwebinar(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
       
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
        $form->industry = $request->department;
        $form->purchase_intrest = $request->purchase_intrest== ''? 'No': 'Yes'; 
         $form->company = $request->company;
        $form->address1 = $request->address;
        $form->zip = $request->postal_code;
         $form->type = $request->type;
         $form->declaration = $request->declaration;
         $form->city = $request->city;
         $form->email_updates = $request->email_updates;
         $form->representative = $request->representative;
         $form-> interest= $request-> interest;
         $form->state=$request->state;


        // $form->applicationintrest =$request-> interest;
         $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-system-future-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry'=>$request->department,
         'city' => $request->city,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'state'  => $request->state,
         'purchase_intrest' =>$request->purchase_intrest,
         'job_role' =>$request->job_role,
         'zip' =>$request->postal_code,
         'address1' =>$request->address,
         'declaration' => $request->declaration,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'representative' => $request->representative,
         'interest'=>$request-> interest,

         
      
       //  'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin_agilent_new', $data, function($message) use ($data){
        //$message->to('srunik@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_agilent-technologies-insightful-webinar', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
         // return view('webinars.sparta-system-future-on-demand-webinar-jp.videosuccess')->with(['thank_message'=>"Thank you for showing interest in Sparta Systems On-Demand Webinar."]);
         return redirect()->route('agilenttechnologiesinsightfulwebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.agilent-technologies-insightful-webinar.index',compact('countries'));
}

public function lonzaenprotectwebinar(Request $request){
    $countries = DB::table('countries')->get(); 
   
       if(\Request::isMethod('post')){   
       
         $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->email_updates = $request->email_updates;
       $form->quotation = $request->quotation;
         $form->representative = $request->representative;
         $form->company = $request->company;
         $form->type = $request->type;
        
         $form->save();
         $pdf='https://industry.pharmafocusasia.com/webinars/lonza-enprotect/Lonza-Enprotect-Webinar.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'email_updates' => $request->email_updates,
         'quotation' => $request->quotation,
         'type' => $request->type,
         'representative'  => $request->representative,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
            //$message->to('srunik@ochre-media.com');
            $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_webinar_lonza_enprotect', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
         return view('webinars.lonza-enprotect-webinar.videosuccess')->with(['thank_message'=>"Thank you for showing interest On Demand Lonza enprotect Webinar. Happy Surfing. "]);

        //  return redirect()->route('lonzaenprotectwebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }

    return view('webinars.lonza-enprotect-webinar.index',compact('countries'));
}

public function watersallianceishplcsystemsep13(Request $request){
    $countries = DB::table('countries')->get(); 
    if(\Request::isMethod('post')){    
    
       
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
        // $form->organization = $request->company;
        $form->city = $request->city;
         $form->company = $request->company;
         $form->zip = $request->zip_code;
         $form->type = $request->type;

        //$form->do_you_use = implode('',$request->do_you_use);
         //$form->job_role = $request->job_role;
        // $form->process_understanding = implode('',$request->process_understanding);
        $form->interest = $request->areas_of_interest;
        $form->declaration = $request->declaration;
         $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-system-future-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'zip'=>$request->zip_code,
         'areas_of_interest' => $request->areas_of_interest,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         //'state'  => $request->state,
         //'do_you_use' =>implode('',$request->do_you_use),
         'job_role' =>$request->job_role,
         //'process_understanding' =>implode('',$request->process_understanding),
         'declaration' => $request->declaration,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
       //  'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin_water_hplc', $data, function($message) use ($data){
         //$message->to('srunik@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_waters_hplc', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
        //  return view('webinars.sparta-system-future-on-demand-webinar-jp.videosuccess')->with(['thank_message'=>"Thank you for showing interest in Sparta Systems On-Demand Webinar."]);
         return redirect()->route('watersallianceishplcsystemsep13.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.waters-alliance-is-hplc-system-sep13.index',compact('countries'));
}

public function spartaondemandwebinarmay11(Request $request){
    $countries = DB::table('countries')->get();
    if(\Request::isMethod('post')){    

        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->interest = $request->areas_of_interest;
         $form->state = $request->state;
       // $form->industry = $request->industry;
         $form->company = $request->company;
        // $form->address1 = $request->address;
         $form->type = $request->type;
        // $form->email_updates = $request->email_updates;
       
         $form->save();
         $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-on-demand-webinar-may11.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry' => $request->industry,
         'interest' => $request->areas_of_interest,
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'state'  => $request->state,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
         //$message->to('srunik@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_sparta_webinar', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.sparta-on-demand-webinar-may11.video-success')->with(['thank_message'=>$request->input('thank_message')]);
        // return redirect()->route('spartaSystemfutureondemandWebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.sparta-on-demand-webinar-may11.index',compact('countries'));
}
public function idbswebinar(Request $request){
    $countries = DB::table('countries')->get();
    if(\Request::isMethod('post')){    

        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
        // $form->job_title = $request->job_title;
         $form->country = $request->country;
         //$form->interest = $request->areas_of_interest;
        // $form->state = $request->state;
       $form->industry = $request->industry;
         $form->company = $request->company;
        // $form->address1 = $request->address;
         $form->type = $request->type;
        // $form->email_updates = $request->email_updates;
       
         $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-on-demand-webinar-may11.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
        // 'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry' => $request->industry,
         //'interest' => $request->areas_of_interest,
        // 'email_updates' => $request->email_updates,
         'type' => $request->type,
         //'state'  => $request->state,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         //'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin', $data, function($message) use ($data){
         //$message->to('srunik@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
        //  //client Mail
        //  Mail::send('emails.webinars.client_sparta_webinar', $data, function($message) use ($data) {
        //           $message->to($data['email']);
        //          $message->subject($data['subject_client']);
        //  });
          return redirect()->route('idbswebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
        }
    return view('webinars.idbs_webinar.index',compact('countries'));
}

public function watersvirtualbioprocesssymposium2023odw(Request $request){
    $countries = DB::table('countries')->get();
    if(\Request::isMethod('post')){    

        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
        // $form->representative = $request->representative == ''? 'No': 'Yes'; 
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->interest = $request->interest;
        // $form->state = $request->state;
       $form->industry = $request->industry;
         $form->company = $request->company;
         $form->declaration = $request->declaration;
        // $form->address1 = $request->address;
         $form->type = $request->type;
        // $form->email_updates = $request->email_updates;
       
         $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-on-demand-webinar-may11.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry' => $request->industry,
        // 'representative' => $request->representative == ''? 'No': 'Yes',  
         'interest' => $request->interest,
         'declaration' =>$request->declaration,
        // 'email_updates' => $request->email_updates,
         'type' => $request->type,
         //'state'  => $request->state,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         //'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin_waters_virtual', $data, function($message) use ($data){
        // $message->to('srunik@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
        //  //client Mail
        //  Mail::send('emails.webinars.client_sparta_webinar', $data, function($message) use ($data) {
        //           $message->to($data['email']);
        //          $message->subject($data['subject_client']);
        //  });
          return redirect()->route('watersvirtualbioprocesssymposium2023odw.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
        }
    return view('webinars.waters-virtual-bioprocess-symposium-2023-odw.index',compact('countries'));
}

public function tfbiopharmawebinar(Request $request){
    $countries = DB::table('countries')->get();
    if(\Request::isMethod('post')){    
    
       
        // return "test";
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->job_role=$request->job_role;
         $form->country = $request->country;
        $form->city = $request->city;
         $form->company = $request->company;
         $form->zip = $request->zip_code;
         $form->type = $request->type;
         $form->purchase_intrest = $request->purchase_intrest;
         $form->email_updates = $request->email_updates == ''? 'No': 'Yes'; 
         $form->quotation = $request->quotation == ''? 'No': 'Yes';   
        $form->interest = implode('',$request->interest);
        $form->declaration = $request->declaration;
         $form->save();
        // $pdf = 'https://industry.pharmafocusasia.com/webinars/sparta-system/sparta-system-future-on-demand.mp4';
     //send email admin
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'job_role'=>$request->job_role,
         'company' => $request->company,
         'country' => $request->country,
         'zip'=>$request->zip_code,
         'city'=>$request->city,
         'interest' => implode('',$request->interest),
         'email_updates' => $request->email_updates== ''? 'No': 'Yes',
         'quotation' => $request->quotation == ''? 'No': 'Yes',  
         'type' => $request->type,
         'purchase_intrest'  => $request->purchase_intrest,    
         'job_role' =>$request->job_role,
         'declaration' => $request->declaration,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
       //  'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin-tf-biopharma-webinar', $data, function($message) use ($data){
        // $message->to('srunik@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client-tf-biopharma-webinar', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
         return redirect()->route('tfbiopharmawebinar.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;
     }
    return view('webinars.tf-biopharma-webinar.index',compact('countries'));
}

public function thermofisherthetechnologysingleusevsstainlesssteeldebatewebinar(Request $request){
    $countries = DB::table('countries')->get();
    if(\Request::isMethod('post')){    
        $form = new WebinarData();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->phone = $request->phone;
         $form->job_title = $request->job_title;
         $form->country = $request->country;
         $form->interest = implode(",",$request->interest);
         $form->city=$request->city;
         $form->zip=$request->zip_code;
        $form->industry = $request->industry;
         $form->company = $request->company;
         $form->address1 = $request->address;
         $form->quotation=$request->quotation;
         $form->type = $request->type;
         $form->email_updates = $request->email_updates;
         $form->state=$request->state;
         $form->declaration=$request->declarartion;
         $form->subscribe=$request->subscribe;
         $form->process_understanding=$request->process_understanding;
         $form->representative=$request->representative;
     
         $form->save();
         $pdf="https://industry.pharmafocusasia.com/webinars/single-use-vs-stainless/video.mp4";
     //send email admin
     
         $data = [
         'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
         'email'=> $request->email,
         'phone' => $request->phone,
         'job_title'  => $request->job_title,
         'company' => $request->company,
         'country' => $request->country,
         'industry' => $request->industry,
         'address' => $request->address,
         'city'=>$request->city,
         'zip'=>$request->zip_code,
         'state'=>$request->state,
         'quotation'=>$request->quotation,
        'declaration'=>$request->declaration,
        'subscribe'=>$request->subscribe,
       'process_understanding'=>$request->process_understanding,
       'representative'=>$request->representative,
         'interest' => implode(",",$request->interest),
         'email_updates' => $request->email_updates,
         'type' => $request->type,
         'site_name' =>'Pharmafocusasia',
         'subject_client'=> $request->client_subject,
         'subject_admin' => $request->admin_subject,
         'client_message' => $request->client_message,
         'pdf'=>$pdf,
          ];
         //admin mail
         Mail::send('emails.webinars.admin_single_use', $data, function($message) use ($data){
        // $message->to('srunik@ochre-media.com');
          $message->to(trans('messages.adminemail'));   
             $message->subject($data['subject_admin']. ' | '.$data['email'].' | Client Retention Projects.');
         });
         //client Mail
         Mail::send('emails.webinars.client_single_use_msg', $data, function($message) use ($data) {
                  $message->to($data['email']);
                 $message->subject($data['subject_client']);
         });
          return view('webinars.thermofisher-the-technology-single-use-vs-stainless-steel-debate-webinar.video-success')->with(['thank_message'=>$request->input('thank_message')]);
     }
    return view('webinars.thermofisher-the-technology-single-use-vs-stainless-steel-debate-webinar.index',compact('countries'));
}


public function lonzawebinarbiologicsderiskjourneyclinicmanufacturabilityexpression(Request $request){
    $countries = DB::table('countries')->get();
    if(\Request::isMethod('post')){    
        $form = new WebinarData();

        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;              
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->job_title = $request->job_title;
        $form->country = $request->country;      
        $form->company = $request->company;
        $form->type = $request->type;                  
        $form->save();
         $pdf = 'https://industry.pharmafocusasia.com/webinars/biologics-derisk-journey-clinic-manufacturability-expression/biologics-derisk-journey-clinic-manufacturability-expression.mp4';
        /*Send email admin*/
        $data = [
            'name'  =>$request->firstname .' '. $request->lastname,
         'first_name' => $request->firstname,
         'last_name' => $request->lastname,
            'email'=> $request->email,
            'phone' => $request->phone,
            'job_title'  => $request->job_title,
            'company' => $request->company,
            'country' => $request->country,  
            'type' => $request->type,  
            'job_role' =>$request->job_role, 
            'site_name' =>'Pharmafocusasia',
            'subject_client'=> $request->client_subject,
            'subject_admin' => $request->admin_subject,
            'client_message' => $request->client_message,
           'pdf'=>$pdf,
             ];
        /*Admin mail*/
        Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
              //  $message->to('srunik@ochre-media.com');
               $message->to(trans('messages.adminemail'));
                     $message->subject($data['subject_admin']);
        });
       /*Client mail*/
        Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
      $message->to($data['email']);
            $message->subject($data['subject_client']);
       });

      return view('webinars.biologics-derisk-journey-clinic-manufacturability-expression.video-success')->with(['thank_message'=>$request->input('thank_message')]);

    }    
    return view('webinars.biologics-derisk-journey-clinic-manufacturability-expression.index',compact('countries'));
}

public function lonzawebinarbiologicsimmunogenicityandimmunotoxicityderisk(Request $request){
    $countries = DB::table('countries')->get();   
     if(\Request::isMethod('post')){    
        $form = new WebinarData();
    
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;               
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->job_title = $request->job_title;
        $form->country = $request->country;      
        $form->company = $request->company;
        $form->type = $request->type;                  
        $form->save();
         $pdf = 'https://industry.pharmafocusasia.com/webinars/biologics-immunogenicity-and-immunotoxicity-de-risk/video1.mp4';
        /*Send email admin*/
        $data = [
            'name'  =>$request->firstname .' '. $request->lastname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email'=> $request->email,
            'phone' => $request->phone,
            'job_title'  => $request->job_title,
            'company' => $request->company,
            'country' => $request->country,  
            'type' => $request->type,  
            'job_role' =>$request->job_role, 
            'site_name' =>'Pharmafocusasia',
            'subject_client'=> $request->client_subject,
            'subject_admin' => $request->admin_subject,
            'client_message' => $request->client_message,
           'pdf'=>$pdf,
             ];
        /*Admin mail*/
        Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
               // $message->to('srunik@ochre-media.com');
               $message->to(trans('messages.adminemail'));
                     $message->subject($data['subject_admin']);
        });
       /*Client mail*/
        Mail::send('emails.webinars.client_webinar_all', $data, function($message) use ($data) {               
      $message->to($data['email']);
            $message->subject($data['subject_client']);
       });

      return view('webinars.biologics-immunogenicity-and-immunotoxicity-de-risk.video-success')->with(['thank_message'=>$request->input('thank_message')]);

    }  
    return view('webinars.biologics-immunogenicity-and-immunotoxicity-de-risk.index',compact('countries'));
}

public function westpharmawebinar1(Request $request){
    $countries = DB::table('countries')->get();  
    
    if(\Request::isMethod('post')){
        $form=new WebinarData();

      $form->firstname=$request->firstname;
      $form->lastname=$request->lastname;
      $form->email=$request->email;
      $form->job_title=$request->job_title;
      $form->company=$request->company;
      $form->phone=$request->phone;
      $form->country=$request->country;
      $form->email_updates=$request->email_updates;
      $form->type=$request->type;

      $form->save();
       //$pdf='https://industry.pharmafocusasia.com/webinars/biologics-immunogenicity-and-immunotoxicity-de-risk/video1.mp4';
        /*Send email admin*/
      $data=[

        'name'=>$request->firstname.' '.$request->lastname,
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'company'=>$request->company,
        'country'=>$request->country,
        'email_updates'=>$request->email_updates,
        'type' => $request->type,  
        'job_title' =>$request->job_title, 
        'site_name' =>'Pharmafocusasia',
        'subject_client'=> $request->client_subject,
        'subject_admin' => $request->admin_subject,
        'client_message' => $request->client_message,
       //'pdf'=>$pdf,


      ];
           /*Admin mail*/
           Mail::send('emails.webinars.admin', $data, function($message) use ($data) {
           //  $message->to('srunik@ochre-media.com');
           $message->to(trans('messages.adminemail'));
                  $message->subject($data['subject_admin']);
     });
    /*Client mail*/
     Mail::send('emails.webinars.client_westpharma_webinar', $data, function($message) use ($data) {               
   $message->to($data['email']);
         $message->subject($data['subject_client']);
    });
    return redirect()->route('westpharmawebinar1.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]) ;

    }
    return view('webinars.west-pharma-webinar.index',compact('countries'));
}
}