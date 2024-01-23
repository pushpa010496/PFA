<?php

namespace App\Http\Controllers\advertise;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\AdPrint;
use App\Models\Online;
use App\Models\TargetMarket;
use App\Models\TargetAudience;
use App\Models\TechSpace;
use App\Models\Term;
use App\Models\Advertiser;
use App\Models\Newsletter;
use App\Models\SeoPage;
use App\Models\Page;
use App\Models\Download;
use SEO;
use SEOMeta;
use OpenGraph;
use App\Http\Requests\CommanRequest;
use Twitter;
use \Mail;

class AdvertiseController extends HomeController
{

	public function print()
	{ 		

		$data =  AdPrint::where('active_flag',1)->select('description')->first();	

		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.print' ,compact('data','banners'));

	} 

	public function online()
	{ 		

		$data =  Online::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.online' ,compact('data','banners'));

	} 

	public function targetMarket()
	{ 		
		$data =  TargetMarket::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.target_market' ,compact('data','banners'));

	} 

	public function targetAudience()
	{ 		
		$data =  TargetAudience::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.target_audience' ,compact('data','banners'));

	} 

	public function techSpecs()
	{ 		
		$data =  TechSpace::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.tech_specs' ,compact('data','banners'));

	} 

	public function terms()
	{ 		
		$data =  Term::where('active_flag',1)->select('description')->first();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.terms' ,compact('data','banners'));

	} 
	public function clients()
	{ 		
		$data =  Advertiser::where('active_flag',1)->orderBy('id','desc')->select('image','alt_tag')->get();		 
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('advertise.clients' ,compact('data','banners'));

	} 

	public function eNewsletter()
	{ 				
		$data =  Newsletter::where('active_flag',1)->where('type','e-newsletter')->orderBy('id','desc')->first();	
		$banners = $this->banners;  
		$this->seoTools(request()->segment(1)); 
		return view('enewsletter.index' ,compact('data','banners'));

	} 

	public function eNewsletterArchives()
	{ 				
		 $data =  Newsletter::where('active_flag',1)->where('type','e-newsletter')->orderBy('id','desc')->get();	
	 
		$banners = $this->banners;  
		// $this->seoTools(request()->segment(1)); 
		return view('enewsletter.archives' ,compact('data','banners'));

	} 

	public function emailblast()
	{ 		
		 $this->time = \Carbon\Carbon::now()->format('Y'); 
		
		 $data =  Newsletter::where('active_flag',1)->where('type','clientemailblast')->orderBy('id','desc')->get();
		 //dd($data);	
	 	
		$banners = $this->banners;  
		// $this->seoTools(request()->segment(1)); 
		return view('enewsletter.emailblast' ,compact('data','banners'));

	} 

	public function emailblastArchives()
	{ 				
		 $data =  Newsletter::where('active_flag',1)->where('type','clientemailblast')->orderBy('id','desc')->get();	

		$banners = $this->banners;  
		// $this->seoTools(request()->segment(1)); 
		return view('enewsletter.emailblast-archives' ,compact('data','banners'));

	} 

	public function seoTools($page){
        $page = Page::where('title',$page)->first();
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
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
        OpenGraph::addImage([$data->og_image, 'size' => 300]);

    }

	
		public function advertise1( CommanRequest $request )
      {     
      
        $this->seoTools('advertise');  
          $banners = $this->banners; 
        if(\Request::isMethod('post')){
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkgooglecaptcha($request,$captcha)==true){         
         $form = new Download();
         $form->fullname = $request->firstname.' '.$request->lastname;
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->telephone = $request->mobile;
         $form->company = $request->company;  
         $form->designation = $request->cf_leads_jobtitle;         
         $form->description = $request->description;
         $form->whom = $request->whom;  
         $form->type = 'Advertise1';
         $form->save();

         /*Send email admin*/  
         $data = [
          'name'=> $request->firstname.' '.$request->lastname,
          'email'=> $request->email,
          'company'=> $request->company,
          'phone'=>$request->mobile, 
          'job_title' =>$request->cf_leads_jobtitle,             
          'description' =>$request->description,   
          'whom' => $request->whom,           
          'type' => 'Advertise1',            
          'subject_client' => trans('messages.advertise1_client'),
          'subject_admin' => $request->email.trans('messages.advertise1_admin'),
        ];
       /* Mail::send('emails.admin', $data, function($message) use ($data) {
			//$message->to('bhavani@ochre-media.com');
          $message->to(trans('messages.advert-email'));
          $message->subject($data['subject_admin']);
        });
        
        Mail::send('emails.advertise1.client', $data, function($message) use ($data) {
          $message->to($data['email']);
          $message->subject($data['subject_client']);
        });*/
          
          return redirect()->route('advertise1.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
         }
          
        return view('advertise.advertise1',compact('banners'));
      }               

    }  

	public function checkGoogleCaptcha(Request $request, $token)
	{
	// Retrieve reCAPTCHA secret key from the configuration
	$secretKey = Config::get('services.recaptcha.secret');

	// Build the data array for the reCAPTCHA verification
	$data = [
	'secret' => $secretKey,
	'response' => $token,
	'remoteip' => $request->ip(),
	];

	// Make an HTTP POST request to Google reCAPTCHA
	$response = Http::post('https://www.google.com/recaptcha/api/siteverify', $data);

	// Parse the response JSON
	$result = $response->json();

	// Check if reCAPTCHA verification was successful
	if ($result['success'] === true && $result['score'] >= 0.3) {
	// Validation was successful, add your form submission logic here
	return back()->with('message', 'Thanks for your message!');
	} else {
	// Validation failed, show an error message
	return back()->withErrors(['captcha' => 'ReCaptcha Error']);
	}
	}

}
