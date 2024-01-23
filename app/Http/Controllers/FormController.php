<?php
namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

use App\Models\Form;
use Auth;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use \Session;
use \DB;
use \Mail;
use App\Models\Country;
use App\Http\Requests\CommanRequest;
use App\Models\Download;
use App\Models\Subscriber;
use App\Models\Register;
use App\Models\Event;
use App\Models\SeoPage;
use App\Models\Page;
use App\Models\Flatpage;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use Response;
use App\Models\MagazineSubscribe;




class FormController extends HomeController
{

    public function mediapacks(CommanRequest $request)
    {
        $banners = $this->banners; 
         $this->seoTools(request()->segment(1));
        $countries =  Country::pluck('title','title')->prepend('-- Select country* --','');
      
        if ($request->isMethod('post')) {
          $captcha = $request->input('g-recaptcha-response');
          if (!$this->checkGoogleCaptcha($request, $captcha)) {
              return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
          }
            $form = new Download();
            $form->fullname = $request->firstname .' '.$request->lastname;
            $form->firstname=$request->firstname;
            $form->lastname=$request->lastname;
            $form->email = $request->email;
            $form->telephone = $request->mobile;
            $form->company = $request->company;
            $form->country_name = $request->country;
            $form->designation = $request->cf_leads_jobtitle;
            $form->description = $request->description;
            $form->type = 'mediapack';
            $form->whom = $request->whom;  
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->firstname .' '.$request->lastname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'job_title' =>$request->cf_leads_jobtitle,  
            'description' =>$request->description, 
            'country'=>$request->country,           
            'type' => 'Mediapack Download', 
            'whom' => $request->whom,           
            'subject_client' => 'Thank you for downloading Media Pack',
            'subject_admin' => 'Media Pack Download Pharmafocusasia',
         ];
        //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
          $message->to(trans('messages.advert-email'));
         $message->cc('nag@ochre-media.com');
       // $message->to('pushpalatha@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.mediapack.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
           return redirect()->route('mediapacks.success')->with(['status'=>'true']);
           }
                       
        return view('magazine.mediapack.index',compact('banners','countries'));
     }         
    

    public function mediapackDownload()
    {
         $this->seoTools(request()->segment(1));
         if (session('status') == 'true'){
                return view('magazine.mediapack.success');
             }else{
                return redirect()->route('mediapacks');
             }   

    }

    public function mediapackdwnlink(Request $request)
    {
        $pdf =  config('app.url')."mediapack/pdf/pharmafocus-asia-mediapack.pdf";
        return ($pdf);
    }


     public function eNewsletter(CommanRequest $request)
    {
         $this->seoTools(request()->segment(1));  
        $banners = $this->banners; 
        if(\Request::isMethod('post')){
          $captcha = $request->input('g-recaptcha-response');
          if (!$this->checkGoogleCaptcha($request, $captcha)) {
              return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
          }
     
            $form = new Subscriber();
            $form->fullname = $request->fullname ;
            $form->email = $request->email;
            $form->telephone = $request->mobile;
            $form->fax = $request->fax;            
            $form->company = $request->company;
            $form->designation = $request->cf_leads_jobtitle;
            
            $form->type = 'e-newsletter-subscribe';
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'fax'=>$request->fax,
            'job_title' =>$request->cf_leads_jobtitle,   
            'type' => 'E-Newsletter subscribe',            
            'subject_client' => trans('messages.enewsletter-subscribe_client'),            
            'subject_admin' => trans('messages.enewsletter-subscribe_admin'),
         ];
         //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
       $message->to(trans('messages.subscribe-email'));
            
        // $message->to('pushpalatha@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.enewsletter.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
          return redirect()->route('enewsletter.success')->with(['status'=>'true']);
         }           
            return view('forms.enewsletter.index',compact('banners'));
                 
    }

    public function editorialCalendar(CommanRequest $request)
    {
        $banners = $this->banners; 
        $this->seoTools(request()->segment(1)); 
        if(\Request::isMethod('post')){
          $captcha = $request->input('g-recaptcha-response');
          if (!$this->checkGoogleCaptcha($request, $captcha)) {
              return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
          }

            $form = new Download();
            $form->fullname = $request->firstname .' '.$request->lastname;
            $form->email = $request->email;
            $form->telephone = $request->mobile;
            $form->company = $request->company;
            $form->designation = $request->cf_leads_jobtitle;
            $form->description = $request->description;
            $form->type = 'editorial-calender';
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->firstname,
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'job_title' =>$request->cf_leads_jobtitle,  
            'description' =>$request->description,            
            'type' => 'Editorial Calender',            
            'subject_client' => 'Thank You for Registration',            
            'subject_admin' => 'Editorial Calendar Download',
         ];
        //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.subscribe-email'));
          //   $message->to('pushpalatha@ochre-media.com');     
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.editorialcalendar.client-new', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });


        // return view('magazine.mediapack.success')->with('status','status');
           return redirect()->route('editorialcalendar.success')->with(['status'=>'true']);
           }
      

            return view('magazine.editorialcalendar.index',compact('banners'));
                  
    }

    public function editorialCalendarSuccess(Request $request)
    {        

             if (session('status') == 'true'){
                 return view('magazine.editorialcalendar.success');
             }else{
                return redirect()->route('editorialcalendar');
             }        
    }

    public function editorialCalendardwnlink(Request $request)
    {
         // $data =  Authorguideline::where('active_flag',1)->orderBy('id','desc')->first();

         // $pdf= config('app.url').'authorguideline/'.$data->pdf; 
        $pdf =  trans('messages.editorial_calendar_pdf');

         return redirect($pdf);

    }



     public function registration(CommanRequest $request)
    {
      
        $countries =  Country::pluck('title','title')->prepend('-- Select Country* --','');
        $banners = $this->banners; 
        $this->seoTools(request()->segment(1)); 
      
        if(\Request::isMethod('post')){
          $captcha = $request->input('g-recaptcha-response');
          if (!$this->checkGoogleCaptcha($request, $captcha)) {
              return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
          }
            $form = new Register();
            $form->fullname = $request->fullname ;
            $form->email = $request->email;
            $form->telephone = $request->mobile;                
            $form->company = $request->company;
            $form->designation = $request->cf_leads_jobtitle;
            $form->description = $request->description;
            $form->magazine_de = $request->magazine_de;
            $form->current_newsletter = $request->current_newsletter;
            $form->content_newsletter = $request->content_newsletter;
            $form->special_offers = $request->special_offers;
            $form->type = 'subscribe';
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'description'=>$request->description,           
            'job_title' =>$request->cf_leads_jobtitle,  
            'magazine_de' =>$request->magazine_de,  
            'current_newsletter' =>$request->current_newsletter,  
            'content_newsletter' =>$request->content_newsletter,  
            'special_offers' =>$request->special_offers,  
            'type' => 'Subscribe',            
            'subject_client' => trans('messages.registration_client'),
            'subject_admin' =>  trans('messages.registration_admin'),
         ];
         //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.subscribe-email'));
            
        $message->subject($data['subject_admin']);
        });
        Mail::send('emails.registration.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
            
            return redirect()->route('registration.success')->with(['status'=>'true','banners'=>$banners,'countries'=>$countries]);          

        }        
            return view('forms.register.index',compact('banners','countries'));
        }          
    

    //POST EVENT
    public function postEvent(CommanRequest $request)
    {
        $this->seoTools(request()->segment(1));
        $banners = $this->banners; 
        if(\Request::isMethod('post')){
            
          $captcha = $request->input('g-recaptcha-response');
          if (!$this->checkGoogleCaptcha($request, $captcha)) {
              return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
          }
            $event = new Event();
            $event->title = $request->title ;
            $event->email = $request->email;
            $event->start_date = $request->start_date;
            $event->end_date = $request->end_date;
            $event->event_organiser = $request->event_organiser;            
            $event->web_link = $request->web_link;
            $event->venue = $request->venue;
            $event->address = $request->address;
            $event->save();
            /*Send email admin*/  
            $data = [
                'event_name'=> $request->title,
                'email'=> $request->email,
                'start_date'=> $request->start_date,
                'end_date'=>$request->end_date,
                'event_organiser'=>$request->event_organiser,
                'web_link' =>$request->web_link,  
                'venue' =>$request->venue,  
                'address' =>$request->address,  
                'type' => 'post-event',            
                'subject_client' => trans('messages.postevent_client'),
                'subject_admin' => trans('messages.postevent_admin'),
            ];
            /*Admin mail*/
            Mail::send('emails.admin', $data, function($message) use ($data) {
               // $message->to(trans('messages.subscribe-email'));
                $message->to('subscribe@ochre-media.com');
               // $message->to('pushpalatha@ochre-media.com');
                $message->subject($data['subject_admin']);
            });
            /*Client Mail*/
           Mail::send('emails.postevent.client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('postevent.success')->with(['status'=>'true']);
           }          
            return view('forms.postevent.index',compact('banners'));
                 
    }
  


public function magazineSubscribe(){
        $countries =  Country::pluck('title','title')->prepend('-- Select Country* --','');
        $banners = $this->banners; 
        $this->seoTools(request()->segment(1));  
    return view('forms.subscribe.index',compact('banners','countries'));
  }



    public function magazineSubscribepost(Request $request)
  {
    // return $request->all();
     if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkgooglecaptcha($request,$captcha)==true){

      $subscribe = new MagazineSubscribe();
      if($request->type=="ebook"){

     @$interested=implode(",",$request->interest);
     @$acceptance=implode(",",$request->accept);

      }

     if ($request->type=="magazine") {
    
      @$interested=implode(",",$request->int);
      @$acceptance=implode(",",$request->acceptt);

       }
     // @$interested=implode(",",$request->interest);


    

     $subscribe->name = $request->name;
     $subscribe->telephone = $request->telephone;
     $subscribe->mobile = $request->mobile;
     $subscribe->email = $request->email;
     $subscribe->fax = $request->fax;
     $subscribe->address = $request->address;
     $subscribe->type = $request->type;
     $subscribe->zipcode = $request->zipcode;
      $subscribe->whom = $request->whom;  
      @$subscribe->magazine_validity=$request->issue_packk;
     $subscribe->country = $request->country;
     if ($request->job_title =="Others") {

          $subscribe->job_title = $request->job_title1;
         
     }else{

          $subscribe->job_title =$request->job_title;
     }
    // $subscribe->job_title = isset($request->job_title) ? $request->job_title1:'';
    // $subscribe->company_type = isset($request->company_type)? $request->company_type1:'';
     $subscribe->company_type = $request->company_type;
     $subscribe->turnover = $request->turnover;
     $subscribe->purchasing_role = $request->your_role;  
     @$subscribe->intrested = $interested;
     @$subscribe->acceptance = $acceptance;
     $subscribe->message = $request->message;
     $subscribe->save();

      /*Send email admin*/  
            $data = [
               'name' => $request->name,
               'first_name'=>$request->name,
               'phone' => $request->telephone,
               'mobile' => $request->mobile,
               'email' => $request->email,
               'fax' => $request->fax,
               'address' => $request->address,
               'type' => $request->type,
               'zipcode' => $request->zipcode,   
               'whom' => $request->whom,
               'subject_client' =>'Subscription for digital version successful',
            ];
            //$this->bitrixLeadApi($data);

if($request->type=="ebook"){


 /* Mail::send('emails.subscribe.admin', $data, function($message) use ($data) {
    $message->to(trans('messages.subscribe-email'));
    $message->subject($data['name'].' | '." Subscribed for PFA Digital Version" );
  });
  Mail::send('emails.subscribe.digital-client', $data, function($message) use ($data) {
    $message->to($data['email']);

     $message->subject("Subscription for digital version successful"." | PFA"  );

    });*/


   return redirect()->route('magazinesubscribe.success')->with(['status'=>'true']);  

 

}


if($request->type=="magazine") {


 /* Mail::send('emails.subscribe.admin', $data, function($message) use ($data) {
      

    $message->to(trans('messages.subscribe-email'));


   $message->subject($data['name'].' | '." Subscribed for PFA Print Version" );
 });
  Mail::send('emails.subscribe.print-client', $data, function($message) use ($data) {
    $message->to($data['email']);

     $message->subject("Subscription for print version successfull"." | PFA"  );

});*/
   return redirect()->route('magazinesubscribe.success')->with(['status'=>'true']);
  }

  if($request->type=="mailing"){

   /* Mail::send('emails.subscribe.admin', $data, function($message) use ($data) {
       

        $message->to(trans('messages.subscribe-email'));

        
     $message->subject($data['name'].' | '." has updated their mailing address" );
   });
 
    Mail::send('emails.subscribe.mailing-client', $data, function($message) use ($data) 
    {
      $message->to($data['email']);

    $message->subject("Address updated successfull"." | PFA"  );

  }
  );*/
    return redirect()->route('magazinesubscribe.success')->with(['status'=>'true']); 
}
  }
  }


//   public function magazineSubscribe1(){
//     $countries =  Country::pluck('title','title')->prepend('-- Select Country* --','');
//     $banners = $this->banners; 
//     $this->seoTools(request()->segment(1));  
//     // $this->seoTools(request()->segment(1));  
// return view('forms.subscribe.index-new',compact('banners','countries'));
// }



public function magazineSubscribe1post(Request $request)
{
  $countries =  Country::pluck('title','title')->prepend('-- Select Country* --','');
  $banners = $this->banners; 
  $this->seoTools(request()->segment(1));  
      if(\Request::isMethod('post')){
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
  $subscribe = new MagazineSubscribe();
  $subscribe->name = $request->firstname .' '. $request->lastname;
  $subscribe->job_title = $request->job_title;
  $subscribe->company = $request->company;
 
  $subscribe->telephone = $request->telephone;
  @$subscribe->acceptance = $acceptance;
  @$acceptance=implode(",",$request->acceptance);
  $subscribe->email = $request->email;
  $subscribe->type = 'magazine subscribe';
  $subscribe->country = $request->country;
  $subscribe->email_notifications = $request->email_notifications;
  $subscribe->events_notifications = $request->events_notifications;
  $subscribe->save();

   /*Send email admin*/  
         $data = [
            'name' => $request->firstname .' '. $request->lastname,
            'job_title' => $request->job_title,
            'phone' => $request->telephone,     
            'company'=>$request->company,        
            'acceptance'=>$acceptance,
            'email' => $request->email, 
            'type' => $subscribe->type,
           'country'=>$request->country,
            'email_notifications'=>  $request->email_notifications, 
            'events_notifications'=>  $request->events_notifications, 
            'subject_client' =>'Subscription for digital version successful',
         ];

         Mail::send('emails.subscribe.subscribe', $data, function($message) use ($data) {
          //$message->to('info@plantautomation-technology.com');
    //$message->to('pushpalatha@ochre-media.com');
      $message->to(trans('messages.subscribe-email'));
           //$message->cc(['naveen@ochre-media.com','sumit@ochre-media.com','sankar@ochre-media.com']);
       $message->subject($data['name'].' | '." Subscribed for PFA Digital Version" );
     });
     /*Client Mail*/
     Mail::send('emails.subscribe.digital-client', $data, function($message) use ($data) {
       $message->to($data['email']);
   
        $message->subject("PharmaFocusAsia".$data['type']. "– Magazine Subscription" );
   
       });
       return redirect()->route('magazinesubscribe1.success')->with(['status'=>'true']);  
      }
      return view('forms.subscribe.index-new',compact('banners','countries'));
    }

     public function cmpmediapacks(CommanRequest $request)  
    {
        $countries =  Country::pluck('title','title')->prepend('-- Select country* --','');
         if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkgooglecaptcha($request,$captcha)==true){
        if(\Request::isMethod('post')){
          $captcha = $request->input('g-recaptcha-response');
          if (!$this->checkGoogleCaptcha($request, $captcha)) {
              return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
          }
            $form = new Download();
            $form->fullname = $request->firstname;
            $form->email = $request->email;
            $form->telephone = $request->mobile;
            $form->company = $request->company;
            $form->country_name = $request->country;
            $form->designation = $request->job_title;
            $form->description = $request->description;
            $form->type = 'mediapack';
            $form->whom = $request->whom;  
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->firstname,
            'first_name'=>$request->firstname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->mobile,
            'job_title' =>$request->job_title,  
            'description' =>$request->description, 
            'country'=>$request->country,           
            'type' => ' cmp-Mediapack Download', 
            'whom' => $request->whom,           
            'subject_client' => 'CMP- Media Pack Download Success',
            'subject_admin' => 'CMP- Media Pack Download -' .$request->email,
         ];
        //$this->bitrixLeadApi($data);
        /*Admin mail*/
        Mail::send('emails.mediapack.admin-cmp', $data, function($message) use ($data) {
       $message->to(trans('messages.advert-email'));
            
         //$message->to('bhavani@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.mediapack.client-cmp', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
           return redirect()->route('cmpmediapacks.success')->with(['status'=>'true']);

        }else{            
            return view('forms.mediapack.mediapack-cmp',compact('banners','countries'));
        }          
    }else
    {}}
    public function seoTools($page)
    {
        $page = Page::where('title',$page)->first();
        if($page){
        $data = SeoPage::where('page_id',$page->id)->first();        
        SEOMeta::setTitle($data->meta_title);
        SEOMeta::setDescription($data->meta_description);
        SEOMeta::addMeta('Project:published_time', $data->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword($data->meta_keywords);
        OpenGraph::setDescription($data->og_description);
        OpenGraph::setTitle($data->og_title);
        OpenGraph::setUrl(url()->current());
        SEOMeta::setCanonical(url()->current());
        OpenGraph::addProperty('keyword', $data->og_keywords);
        OpenGraph::addProperty('type', 'Project');
        OpenGraph::addProperty('locale', 'en_GB');
        OpenGraph::addImage([$data->og_image, 'size' => 300]);
        }
    }

        public function audiencebg(){
  
        $filePath = storage_path('../industry/promotions/pdf/pharma-focus-asia-audience-backgound-standard-list.docx');
        $fileName = 'pharma-focus-asia-audience-backgound-standard-list.docx';

            return response()->download($filePath, $fileName, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"'
            ]);
      
    }


    public function ourServices(Request $request){
      $banners = $this->banners;
      $countries =  Country::pluck('title','title')->prepend('-- Select country* --',''); 
      $this->seoTools(request()->segment(1));
      if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
       } elseif(isset($_POST['g-recaptcha-response-ebook'])){
        $captcha = $_POST['g-recaptcha-response-ebook'];
       }
       
       else {
            $captcha = false;
       }
      if(\Request::isMethod('post') && $this->checkgooglecaptcha($request,$captcha)==true){                        
        $form = new Flatpage();                
        $form->firstname = $request->first_name;
        $form->lastname = $request->last_name;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->title = $request->job_title;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->type = "Our Services Page";
         $form->from = $request->from;
        $form->save();
      
        /*Send email admin*/  
        $data = [
            'name'=>$request->first_name,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,    
            'phone'=>$request->phone,
            'company'=>$request->company,
            'site_name'=>'pharmafocusasia',
            'job_title'=>$request->job_title,
            'type' =>  $form->type,
            'country'=>$request->country,
            'subject_client' =>$request->client_subject,
            'subject_admin' =>$request->admin_subject,
            'client_message' =>$request->client_message,
           // 'pdf'=>$pdf, 
        ];
        /*Admin mail*/
        if($request->from !== "ourservices-ebook"){
        Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
              // $message->to('omplenquiry@ochre-media.com');
               $message->to('advertise@pharmafocusasia.com');
               $message->cc('nag@ochre-media.com');
              // $message->to('pushpalatha@ochre-media.com');
               $message->subject($data['subject_admin']);
        });
        /*Client Mail*/                    
        Mail::send('emails.our-services.client', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });
      }

        if($request->from == "ourservices-ebook"){

          return redirect()->route('latestebook');
        }else{
        return redirect()->route('ourServices.success')->with(['thank_message'=>$request->input('thank_message')]); 
      }
    }   
      return view('forms.our-services',compact('banners','countries'));
    }

    public function advertise(){
      $countries =  Country::pluck('title','title')->prepend('-- Select Country* --','');
      return view('forms.advertise1',compact('countries'));
    }

    public function login(){
      $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      return view('forms.login',compact('countries'));
    }

    public function checkGoogleCaptcha(Request $request, $token)
    {
        $secretKey = config('services.recaptcha.secret');
        $data = [
            'secret' => $secretKey,
            'response' => $token,
            'remoteip' => $request->ip(),
        ];
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', $data);
        $result = $response->json();
        if (isset($result['success']) && $result['success'] === true && $result['score'] >= 0.3) {
            return true;
        } else {
            return false;
        }
    }
    

}
