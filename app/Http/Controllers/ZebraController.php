<?php
namespace App\Http\Controllers;

use App\Models\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Zebra;
use Auth;
use Illuminate\Http\Request;
use \Session;
use DB;
use Mail;
use App\Models\PharmaSoftware;


class ZebraController extends Controller
{
 protected $model;
 protected $banner;
    public function __construct()
    {

    }
    public function PharmaMachineryAssessment(Request $request)
    {         
        if(\Request::isMethod('post')){
            $zebra = new Zebra(); 

            $zebra->elqSiteId = $request->elqSiteId;
            $zebra->elqCustomerGuid = $request->elqCustomerGuid;
            $zebra->elqFormName = $request->elqFormName;
            $zebra->tactic_type = $request->tactic_type;
            $zebra->tactic_detail = $request->tactic_detail;
            $zebra->sfid = $request->sfid;
            $zebra->region = $request->region;
            $zebra->elqCampaignId = $request->elqCampaignId;
            
            $zebra->FirstName = $request->FirstName;
            $zebra->LastName = $request->LastName;
            $zebra->company = $request->company;
            $zebra->emailAddress = $request->emailAddress;
            $zebra->Phone = $request->Phone;
            $zebra->Country = $request->Country;
            $zebra->type = $request->type;
            $zebra->industry = $request->industry;

            $zebra->zOptIn = $request->zOptIn;
            $zebra->question1 = implode(",",$request->question1);
            $zebra->question2 = implode(",",$request->question2);
            $zebra->question3 = implode(",",$request->question3);
            $zebra->question4 = implode(",",$request->question4);
            $zebra->question5 = implode(",",$request->question5);
            $zebra->question6 = implode(",",$request->question6);
            $zebra->question7 = implode(",",$request->question7);
            $zebra->question8 = implode(",",$request->question8);
            $zebra->question9 = implode(",",$request->question9); 
            $zebra->question10  = implode(",",$request->question10); 
            $zebra->question11 = implode(",",$request->question11); 
            $zebra->question12 = implode(",",$request->question12); 
            $zebra->question13 = implode(",",$request->question13); 
            $zebra->question14 = implode(",",$request->question14); 
            $zebra->question15 = implode(",",$request->question15); 
            $zebra->question16 = implode(",",$request->question16);     
            $zebra->question1Score = $request->question1Score;
            $zebra->question2Score = $request->question2Score;
            $zebra->question3Score = $request->question3Score;
            $zebra->question4Score = $request->question4Score;
            $zebra->question5Score = $request->question5Score;
            $zebra->question6Score = $request->question6Score;
            $zebra->question7Score = $request->question7Score;
            $zebra->question8Score = $request->question8Score;
            $zebra->question9Score = $request->question9Score;
            $zebra->question10Score = $request->question10Score;
            $zebra->question11Score = $request->question11Score;
            $zebra->question12Score = $request->question12Score;
            $zebra->question13Score = $request->question13Score;
            $zebra->question14Score = $request->question14Score;
            $zebra->question15Score = $request->question15Score;
            $zebra->question16Score = $request->question16Score;
            $zebra->overallAverage = $request->overallAverage;
            $zebra->overallScore = $request->overallScore;            
            $zebra->language = $request->language;
            $zebra->db_company_name = $request->db_company_name;
            $zebra->db_marketing_alias = $request->db_marketing_alias;
            $zebra->db_city = $request->db_city;
            $zebra->db_country_name = $request->db_country_name;
            $zebra->db_state = $request->db_state;
            $zebra->db_zip = $request->db_zip;
            $zebra->db_country = $request->db_country;
            $zebra->db_traffic = $request->db_traffic;
            $zebra->db_street_address = $request->db_street_address;
            $zebra->db_phone = $request->db_phone;
            $zebra->db_primary_naics = $request->db_primary_naics;
            $zebra->db_demandbase_sid = $request->db_demandbase_sid;
            $zebra->db_primary_sic = $request->db_primary_sic;
            $zebra->db_vertical = $request->db_vertical;
            $zebra->db_subvertical = $request->db_subvertical;
            $zebra->db_employee_count = $request->db_employee_count;
            $zebra->db_employee_range = $request->db_employee_range;
            $zebra->db_annual_sales = $request->db_annual_sales;
            $zebra->db_revenue_range = $request->db_revenue_range;
            $zebra->db_b2b = $request->db_b2b;
            $zebra->db_b2c = $request->db_b2c;
            $zebra->db_fortune_1000 = $request->db_fortune_1000;
            $zebra->db_forbes_2000 = $request->db_forbes_2000;
            $zebra->db_latitude = $request->db_latitude;
            $zebra->db_longitude = $request->db_longitude;
            $zebra->db_stock_ticker = $request->db_stock_ticker;
            $zebra->db_web_site = $request->db_web_site;
            $zebra->db_data_source = $request->db_data_source;
            $zebra->db_ip = $request->db_ip;
            $zebra->save();
            

            $data = [
                'FirstName'=>$request->FirstName,
                'LastName'=>$request->LastName,
                'emailAddress'=>$request->emailAddress,
                'company'=>$request->company,
                'Phone'=>$request->Phone,
                'Country' =>$request->Country,
                'type' =>$request->type,
                'industry' => $request->industry,
                'question1'=>"What would be the main investment reason of your organization in the pharmaceutical manufacuring?",
                'question2'=>"How important are the following decision criteria for the machinery requirement in your organization?",
                'question3'=>"In which areas do you think your facility needs to further develop its identification processes?",
                'question4'=>"What are the key preferred criteria in choosing your vendors? And why?",
                'question5'=>"Are sustainable-oriented solutions in focus for your region or organization?",
                'question6'=>"What other important factors you will consider during the buying process?",
                'question7'=>"How much is the automation degree of the pharmaceutical packaging process in your region or organization?",
                'question8'=>"What is the future (in 3-5 years) trend of the automation degree for the pharmaceutical packaging process in your region or organization?",
                'question9'=>"How common is the line integration of a set of machines for the production lines in your region?",
                'question10'=>"What are the critical issues you have encountered during the manufacturing (eg., inspection) process and how you overcome the issue?",
                'question11'=>"How important are digital solutions in your production process?",
                'question12'=>"How do you see the adoption of modern analytics especially AI in the pharma packaging industry in your region?",
                'question13'=>"What are the other painpoints during the production or procurement process you would like to improve?",
                'question14'=>"What do you value about your current production line?",
                'question15'=>"Which machine is the most important for your packaging production?",
                'question16'=>"How important is the handling of products before, during and after the inspection or packaging process?",
                'question1Score'=>implode(",",$request->question1),
                'question2Score'=>implode(",",$request->question2),
                'question3Score'=>implode(",",$request->question3),
                'question4Score'=>implode(",",$request->question4),
                'question5Score'=>implode(",",$request->question5),
                'question6Score'=>implode(",",$request->question6),
                'question7Score'=>implode(",",$request->question7),
                'question8Score'=>implode(",",$request->question8),
                'question9Score'=>implode(",",$request->question9),
                'question10Score'=>implode(",",$request->question10),
                'question11Score'=>implode(",",$request->question11),
                'question12Score'=>implode(",",$request->question12),
                'question13Score'=>implode(",",$request->question13),
                'question14Score'=>implode(",",$request->question14),
                'question15Score'=>implode(",",$request->question15),
                'question16Score'=>implode(",",$request->question16),
                // 'overallScore'=>$request->overallScore,
                // 'overallAverage'=>$request->overallAverage


            ];

           // return  $data;
                /*Admin mail*/
                Mail::send('emails.pharma-machinery-assessment.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                 // $message->to('pushpalatha@ochre-media.com');
                  //$message->to('bhavani@ochre-media.com');
                    $message->subject('Registrations for Pharma Machinery Assessment');
                });
                   /*Client Mail*/
                Mail::send('emails.pharma-machinery-assessment.client', $data, function($message) use ($data) {
                    $message->to($data['emailAddress']);
                   // $message->to('bhavani@ochre-media.com');
                    $message->subject('Pharma Machinery Assessment Submission');
                }); 
               
                return redirect()->route('PharmaMachineryAssessment.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }
        
        return view('flatpages/pharma-machinery-assessment');
    }  

    
    public function PharmaSoftwareAssessment(Request $request){

      
        if(\Request::isMethod('post')){

            $pharmasoftware = new PharmaSoftware(); 
            
            $pharmasoftware->elqSiteId = $request->elqSiteId;
            $pharmasoftware->elqCustomerGuid = $request->elqCustomerGuid;
            $pharmasoftware->elqFormName = $request->elqFormName;
            $pharmasoftware->tactic_type = $request->tactic_type;
            $pharmasoftware->tactic_detail = $request->tactic_detail;
            $pharmasoftware->sfid = $request->sfid;
            $pharmasoftware->region = $request->region;
            $pharmasoftware->elqCampaignId = $request->elqCampaignId;
            
            $pharmasoftware->FirstName = $request->FirstName;
            $pharmasoftware->LastName = $request->LastName;
            $pharmasoftware->company = $request->company;
            $pharmasoftware->emailAddress = $request->emailAddress;
            $pharmasoftware->Phone = $request->Phone;
            $pharmasoftware->Country = $request->Country;
            $pharmasoftware->type = $request->type;

            $pharmasoftware->zOptIn = $request->zOptIn;

            $pharmasoftware->question1 = implode(",",$request->question1) ?? null;
            $pharmasoftware->question2 = implode(",",$request->question2) ?? null;
            $pharmasoftware->question3 = implode(",",$request->question3) ?? null;
            $pharmasoftware->question4 = implode(",",$request->question4) ?? null;
            $pharmasoftware->question5 = implode(",",$request->question5) ?? null;
            $pharmasoftware->question6 = implode(",",$request->question6) ?? null;
            $pharmasoftware->question7 = implode(",",$request->question7) ?? null;
            $pharmasoftware->question8 = implode(",",$request->question8) ?? null;
            $pharmasoftware->question9 = implode(",",$request->question9) ?? null;
            $pharmasoftware->question10 = implode(",",$request->question10) ?? null;
            $pharmasoftware->question11 = implode(",",$request->question11) ?? null;
            $pharmasoftware->question12 = implode(",",$request->question12) ?? null;
            $pharmasoftware->question13 = implode(",",$request->question13) ?? null;
            $pharmasoftware->question14 = implode(",",$request->question14) ?? null;
            $pharmasoftware->question15 = implode(",",$request->question15) ?? null;
            $pharmasoftware->question16 = implode(",",$request->question16) ?? null;
            $pharmasoftware->question17 = implode(",",$request->question17) ?? null;
            $pharmasoftware->question18 = implode(",",$request->question18) ?? null;
            $pharmasoftware->question19 = implode(",",$request->question19) ?? null;
            $pharmasoftware->question20 = implode(",",$request->question20) ?? null;
            $pharmasoftware->question21 = implode(",",$request->question21) ?? null;
            $pharmasoftware->question22 = implode(",",$request->question22) ?? null;
            $pharmasoftware->question23 = implode(",",$request->question23) ?? null;
            $pharmasoftware->question24 = implode(",",$request->question24) ?? null;
            $pharmasoftware->question25 = implode(",",$request->question25) ?? null;
            $pharmasoftware->question26 = implode(",",$request->question26) ?? null;
            $pharmasoftware->question27 = implode(",",$request->question27) ?? null;
            $pharmasoftware->question28 = implode(",",$request->question28) ?? null;
            $pharmasoftware->question29 = implode(",",$request->question29) ?? null;
            $pharmasoftware->question30 = implode(",",$request->question30) ?? null;
            $pharmasoftware->question31 = implode(",",$request->question31) ?? null;
            $pharmasoftware->question32 = implode(",",$request->question32) ?? null;
            $pharmasoftware->question33 = implode(",",$request->question33) ?? null;
             $pharmasoftware->question1Score = $request->question1Score ?? null;
             $pharmasoftware->question2Score = $request->question2Score ?? null;
             $pharmasoftware->question3Score = $request->question3Score ?? null;
             $pharmasoftware->question4Score = $request->question4Score ?? null;
             $pharmasoftware->question5Score = $request->question5Score ?? null;
             $pharmasoftware->question6Score = $request->question6Score ?? null;
             $pharmasoftware->question7Score = $request->question7Score ?? null;
             $pharmasoftware->question8Score = $request->question8Score ?? null;
             $pharmasoftware->question9Score = $request->question9Score ?? null;
             $pharmasoftware->question10Score = $request->question10Score ?? null;
             $pharmasoftware->question11Score = $request->question11Score ?? null;
             $pharmasoftware->question12Score = $request->question12Score ?? null;
             $pharmasoftware->question13Score = $request->question13Score ?? null;
             $pharmasoftware->question14Score = $request->question14Score ?? null;
             $pharmasoftware->question15Score = $request->question15Score ?? null;
             $pharmasoftware->question16Score = $request->question16Score ?? null;
             $pharmasoftware->question17Score = $request->question17Score ?? null;
             $pharmasoftware->question18Score = $request->question18Score ?? null;
             $pharmasoftware->question19Score = $request->question19Score ?? null;
             $pharmasoftware->question20Score = $request->question20Score ?? null;
             $pharmasoftware->question21Score = $request->question21Score ?? null;
             $pharmasoftware->question22Score = $request->question22Score ?? null;
             $pharmasoftware->question23Score = $request->question23Score ?? null;
             $pharmasoftware->question24Score = $request->question24Score ?? null;
             $pharmasoftware->question25Score = $request->question25Score ?? null;
             $pharmasoftware->question26Score = $request->question26Score ?? null;
             $pharmasoftware->question27Score = $request->question27Score ?? null;
             $pharmasoftware->question28Score = $request->question28Score ?? null;
             $pharmasoftware->question29Score = $request->question29Score ?? null;
             $pharmasoftware->question30Score = $request->question30Score ?? null;
             $pharmasoftware->question31Score = $request->question31Score ?? null;
             $pharmasoftware->question32Score = $request->question32Score ?? null;
             $pharmasoftware->question33Score = $request->question33Score ?? null;
            $pharmasoftware->overallAverage = $request->overallAverage;
            $pharmasoftware->overallScore = $request->overallScore;            
            $pharmasoftware->language = $request->language;
           
            $pharmasoftware->save();

            $data = [
                'FirstName'=>$request->FirstName,
                'LastName'=>$request->LastName,
                'emailAddress'=>$request->emailAddress,
                'company'=>$request->company,
                'Phone'=>$request->Phone,
                'Country' =>$request->Country,
                'type' =>$request->type,
                'question1'=>"Does your organization have a digitization strategy in manufacturing?",
                'question2'=>"What is the organization's motivation for digitization?",
                'question3'=>"Which Manufacturing IT systems are already in place/in implementation?",
                'question4'=>"Are you using a Manufacturing Execution System (MES) or Electronic Batch Recording (EBR) in your company?",
                'question5'=>"Which MES system are you using? / Which vendor?",
                'question6'=>"Did the vendor execute the project or did you work with an implementation/ endorsement partner?",
                'question7'=>"What were the main reasons that you worked with an implementation/ endorsement partner & not the vendor?",
                'question8'=>"What were the main reasons that you worked with the vendor & not an implementation partner?",
                'question9'=>"What was your motivation to implement an MES solution?",
                'question10'=>"How is your MES system hosted?",
                'question11'=>"What was your motivation to host the system on-premise?",
                'question12'=>"What was your motivation to host the system in the cloud/SaaS?",
                'question13'=>"What were the main reasons that you did not implement an MES solution yet?",
                'question14'=>"Do you plan in the future to implement an MES/EBR solution?",
                'question15'=>"What is your motivation to implement an MES solution?",
                'question16'=>"How do you plan to host your MES solution?",
                'question17'=>"What is your motivation to host the system on-premise?",
                'question18'=>"What is your motivation to host the system in the cloud/SaaS?",
                'question19'=>"What is your planned expenditure per user for an MES/EBR cloud/SaaS solution?",
                'question20'=>"Who are the MES solution providers you recognize in the market?",
                'question21'=>"Do you plan to work with an implementation partner or let the vendor execute the project?",
                'question22'=>"What are the main reasons that you want to work with an implementation/ endorsement partner & not the vendor?",
                'question23'=>"What are the main reasons that you want to work with the vendor & not an implementation/ endorsement partner?",
                'question24'=>"What do you usually prefer in IT projects? Local or international partner?",
                'question25'=>"Why? What are the reasons?",
                'question26'=>"How important are the following criteria for decision making in your organization?",
                'question27'=>"How do you manage data from different sources (such as LIMS, Historian, MES) and from Process Development?",
                'question28'=>"What is hindering you to speed up process development work?",
                'question29'=>"How do you transfer the process development results to the next step in the product life cycle and/or report them to colleagues?",
                'question30'=>"What is your methodology to reduce the number of experiments?",
                'question31'=>"Where do you feel like losing time in your daily process development work?",
                'question32'=>"Are you planning to invest in a data management and analysis tool to accelerate commercialization and ensure data integrity?",
                'question33'=>"What would be the estimated expense per user and month?",
                'question1Score'=>implode(",",$request->question1) ?? null,
                'question2Score'=>implode(",",$request->question2) ?? null,
                'question3Score'=>implode(",",$request->question3) ?? null,
                'question4Score'=>implode(",",$request->question4) ?? null,
                'question5Score'=>implode(",",$request->question5) ?? null,
                'question6Score'=>implode(",",$request->question6) ?? null,
                'question7Score'=>implode(",",$request->question7) ?? null,
                'question8Score'=>implode(",",$request->question8) ?? null,
                'question9Score'=>implode(",",$request->question9) ?? null,
                'question10Score'=>implode(",",$request->question10) ?? null,
                'question11Score'=>implode(",",$request->question11) ?? null,
                'question12Score'=>implode(",",$request->question12) ?? null,
                'question13Score'=>implode(",",$request->question13) ?? null,
                'question14Score'=>implode(",",$request->question14) ?? null,
                'question15Score'=>implode(",",$request->question15) ?? null,
                'question16Score'=>implode(",",$request->question16) ?? null,
                'question17Score'=>implode(",",$request->question17) ?? null,
                'question18Score'=>implode(",",$request->question18) ?? null,
                'question19Score'=>implode(",",$request->question19) ?? null,
                'question20Score'=>implode(",",$request->question20) ?? null,
                'question21Score'=>implode(",",$request->question21) ?? null,
                'question22Score'=>implode(",",$request->question22) ?? null,
                'question23Score'=>implode(",",$request->question23) ?? null,
                'question24Score'=>implode(",",$request->question24) ?? null,
                'question25Score'=>implode(",",$request->question25) ?? null,
                'question26Score'=>implode(",",$request->question26) ?? null,
                'question27Score'=>implode(",",$request->question27) ?? null,
                'question28Score'=>implode(",",$request->question28) ?? null,
                'question29Score'=>implode(",",$request->question29) ?? null,
                'question30Score'=>implode(",",$request->question30) ?? null,
                'question31Score'=>implode(",",$request->question31) ?? null,
                'question32Score'=>implode(",",$request->question32) ?? null,
                'question33Score'=>implode(",",$request->question33) ?? null,
                
                // 'overallScore'=>$request->overallScore,
                // 'overallAverage'=>$request->overallAverage


            ];

                /*Admin mail*/
                Mail::send('emails.pharma-software-assessment.admin', $data, function($message) use ($data) {
                   // $message->to('omplenquiry@ochre-media.com');
                  // $message->to('pushpalatha@ochre-media.com');
                   $message->to('bhavani@ochre-media.com');
                     $message->subject('Registrations for Pharma Software Assessment');
                 });
                    /*Client Mail*/
                 Mail::send('emails.pharma-software-assessment.client', $data, function($message) use ($data) {
                     $message->to($data['emailAddress']);
                    // $message->to('bhavani@ochre-media.com');
                     $message->subject('Pharma Software Assessment');
                 }); 
                
                 return redirect()->route('pharmasoftwareassessment.success')->with(['thank_message'=>$request->input('thank_message')]); 
         }
         
        return view('flatpages/pharma-software-assessment');
    }

    public function cpcindustryAssessment(Request $request){
         if(\Request::isMethod('post')){
           //dd($request);
                $question1 = $request->question1;
                $question2 = $request->question2;
                if($request->question3 != ""){
                $question3 = implode(",",$request->question3);
                } elseif($request->question3 == ""){
                   $question3=""; 
                }
                $question4 = $request->question4;
                $question5 = $request->question5;
                $question6 = $request->question6;
                $question7 = $request->question7;
                $question8 = implode(",",$request->question8);
                $question9 = implode(",",$request->question9);
                $question10 = implode(",",$request->question10);
                $question11 = implode(",",$request->question11);
                $question12 = $request->question12;
                $question13 = $request->question13;
                $question14 = $request->question14;
                $question15 = implode(",",$request->question15);
                $question16 = implode(",",$request->question16);
                $question17 = $request->question17;
                $question18 = $request->question18;
                $question19 = implode(",",$request->question19);
                $question20 = $request->question20;
                $question21 = $request->question21;
                $question22 = $request->question22;
                $question23 = $request->question23;
                $question24 = $request->question24;
                $question25 = $request->question25;
                $question26 = $request->question26;
                $question27 = $request->question27;
                $question28 = $request->question28;
                $question29 = $request->question29;
                $question30 = $request->question30;
                $question31 = $request->question31;
                if($question1 != null){
            $cpcindustry = new PharmaSoftware(); 
    
            $cpcindustry->FirstName = $request->FirstName;
             
            $cpcindustry->LastName = $request->LastName;
            $cpcindustry->company = $request->company;
            $cpcindustry->emailAddress = $request->emailAddress;
            $cpcindustry->Phone = $request->Phone;
            $cpcindustry->Country = $request->Country;
            $cpcindustry->type = "cpc industry assessment";
            
            $cpcindustry->question1 =  $question1;
            $cpcindustry->question2 = $question2;
            $cpcindustry->question3 = $question3;
            $cpcindustry->question4 =$question4;
            
            $cpcindustry->question5 = $question5;
            $cpcindustry->question6 = $question6;
            
            $cpcindustry->question7 = $question7;
            $cpcindustry->question8 = $question8;
            $cpcindustry->question9 = $question9;
          
            $cpcindustry->question10 = $question10;
            $cpcindustry->question11 = $question11;
             
            $cpcindustry->question12 = $question12;
            $cpcindustry->question13 = $question13;
             
            $cpcindustry->question14 = $question14;
            $cpcindustry->question15 = $question15;
              
            $cpcindustry->question16 = $question16;
            $cpcindustry->question17 = $question17;
           
            $cpcindustry->question18 = $question18;
            
            $cpcindustry->question19 = $question19;
            
            $cpcindustry->question20 = $question20;
            $cpcindustry->question21 = $question21;
              
            $cpcindustry->question22 = $question22;
            $cpcindustry->question23 = $question23;
          
            $cpcindustry->question24 = $question24;
            $cpcindustry->question25 = $question25;
             
            $cpcindustry->question26 =$question26;
            $cpcindustry->question27 = $question27;
            
            $cpcindustry->question28 = $question28;
            
            $cpcindustry->question29 =$question29;
           
            $cpcindustry->question30 =$question30;
            
            $cpcindustry->question31 =$question31;
            
          //  PharmaSoftware::create($cpcindustry->all());
             //dd($cpcindustry);
            $cpcindustry->save();
            
               
                  $data = [
                'FirstName'=>$request->FirstName,
                'LastName'=>$request->LastName,
                'emailAddress'=>$request->emailAddress,
                'company'=>$request->company,
                'Phone'=>$request->Phone,
                'Country' =>$request->Country,
                'type' =>'cpc industry assessment',
                
                'question1'=> $question1,
                 'question2'=> $question2,
                'question3'=> $question3,
                'question4'=> $question4,
                'question5'=> $question5,
                'question6'=> $question6,
                'question7'=> $question7,
                'question8'=> $question8,
                'question9'=> $question9,
                'question10'=> $question10,
                'question11'=> $question11,
                'question12'=> $question12,
                'question13'=> $question13,
                'question14'=> $question14,
                'question15'=> $question15,
                'question16'=> $question16,
                'question17'=> $question17,
                'question18'=> $question18,
                'question19'=> $question19,
                'question20'=> $question20,
                'question21'=> $question21,
                'question22'=> $question22,
                'question23'=> $question23,
                'question24'=> $question24,
                'question25'=> $question25,
                'question26'=> $question26,
                'question27'=> $question27,
                'question28'=> $question28,
                'question29'=> $question29,
                'question30'=> $question30,
                'question31'=> $question31,
        ];
      
                /*Admin mail*/
                Mail::send('emails.cpc-industry-assessment.admin', $data, function($message) use ($data) {
                    $message->to('omplenquiry@ochre-media.com');
                  $message->to('bhavani@ochre-media.com');
                     $message->subject('Thank you for completing CPC MicroCNX® Industry Assessment');
                 });
                    /*Client Mail*/
                 Mail::send('emails.cpc-industry-assessment.client', $data, function($message) use ($data) {
                     $message->to($data['emailAddress']);
                    // $message->to('bhavani@ochre-media.com');
                     $message->subject('Thank you for completing CPC MicroCNX® Industry Assessment');
                 }); 

               //  $cpcindustryId = $cpcindustry->id;//Check your correspond table for primary key column label is 'id'.
                
      }
    
      return redirect(route('cpcindustryAssessment.success'));
         }
        return view('flatpages/cpc-industry-assessment');
    }

    public function cpcindustryAssessmentsuccess(){
        return view('flatpages/cpc-industry-assessment-success');
    }

    

    // public function postForm(Request $request){



    //     if($request->submissionType == 'completion'){


    //         $zebra = new Zebra(); 

    //         $zebra->elqSiteId = $request->elqSiteId;
    //         $zebra->elqCustomerGuid = $request->elqCustomerGuid;
    //         $zebra->elqFormName = $request->elqFormName;
    //         $zebra->tactic_type = $request->tactic_type;
    //         $zebra->tactic_detail = $request->tactic_detail;
    //         $zebra->sfid = $request->sfid;
    //         $zebra->region = $request->region;
    //         $zebra->elqCampaignId = $request->elqCampaignId;
            
    //         $zebra->FirstName = $request->FirstName;
    //         $zebra->LastName = $request->LastName;
    //         $zebra->company = $request->company;
    //         $zebra->emailAddress = $request->emailAddress;
    //         $zebra->Phone = $request->Phone;
    //         $zebra->Country = $request->Country;
    //         $zebra->type = $request->type;

    //         $zebra->zOptIn = $request->zOptIn;
    //         $zebra->question1 = implode(", ",$request->question1);
    //         $zebra->question2 = implode(", ",$request->question2);
    //         $zebra->question3 = implode(", ",$request->question3);
    //         $zebra->question4 = implode(", ",$request->question4);
    //         $zebra->question5 = implode(", ",$request->question5);
    //         $zebra->question6 = implode(", ",$request->question6);
    //         $zebra->question7 = implode(", ",$request->question7);
    //         $zebra->question8 = implode(", ",$request->question8);
    //         $zebra->question9 = implode(", ",$request->question9); 
    //         $zebra->question10  = implode(", ",$request->question10); 
    //         $zebra->question11 = implode(", ",$request->question11); 
    //         $zebra->question12 = implode(", ",$request->question12); 
    //         $zebra->question13 = implode(", ",$request->question13); 
    //         $zebra->question14 = implode(", ",$request->question14); 
    //         $zebra->question15 = implode(", ",$request->question15); 
    //         $zebra->question16 = implode(", ",$request->question16);     
    //         $zebra->question1Score = $request->question1Score;
    //         $zebra->question2Score = $request->question2Score;
    //         $zebra->question3Score = $request->question3Score;
    //         $zebra->question4Score = $request->question4Score;
    //         $zebra->question5Score = $request->question5Score;
    //         $zebra->question6Score = $request->question6Score;
    //         $zebra->question7Score = $request->question7Score;
    //         $zebra->question8Score = $request->question8Score;
    //         $zebra->question9Score = $request->question9Score;
    //         $zebra->question10Score = $request->question10Score;
    //         $zebra->question11Score = $request->question11Score;
    //         $zebra->question12Score = $request->question12Score;
    //         $zebra->question13Score = $request->question13Score;
    //         $zebra->question14Score = $request->question14Score;
    //         $zebra->question15Score = $request->question15Score;
    //         $zebra->question16Score = $request->question16Score;
    //         $zebra->overallAverage = $request->overallAverage;
    //         $zebra->overallScore = $request->overallScore;            
    //         $zebra->language = $request->language;
    //         $zebra->db_company_name = $request->db_company_name;
    //         $zebra->db_marketing_alias = $request->db_marketing_alias;
    //         $zebra->db_city = $request->db_city;
    //         $zebra->db_country_name = $request->db_country_name;
    //         $zebra->db_state = $request->db_state;
    //         $zebra->db_zip = $request->db_zip;
    //         $zebra->db_country = $request->db_country;
    //         $zebra->db_traffic = $request->db_traffic;
    //         $zebra->db_street_address = $request->db_street_address;
    //         $zebra->db_phone = $request->db_phone;
    //         $zebra->db_primary_naics = $request->db_primary_naics;
    //         $zebra->db_demandbase_sid = $request->db_demandbase_sid;
    //         $zebra->db_primary_sic = $request->db_primary_sic;
    //         $zebra->db_vertical = $request->db_vertical;
    //         $zebra->db_subvertical = $request->db_subvertical;
    //         $zebra->db_employee_count = $request->db_employee_count;
    //         $zebra->db_employee_range = $request->db_employee_range;
    //         $zebra->db_annual_sales = $request->db_annual_sales;
    //         $zebra->db_revenue_range = $request->db_revenue_range;
    //         $zebra->db_b2b = $request->db_b2b;
    //         $zebra->db_b2c = $request->db_b2c;
    //         $zebra->db_fortune_1000 = $request->db_fortune_1000;
    //         $zebra->db_forbes_2000 = $request->db_forbes_2000;
    //         $zebra->db_latitude = $request->db_latitude;
    //         $zebra->db_longitude = $request->db_longitude;
    //         $zebra->db_stock_ticker = $request->db_stock_ticker;
    //         $zebra->db_web_site = $request->db_web_site;
    //         $zebra->db_data_source = $request->db_data_source;
    //         $zebra->db_ip = $request->db_ip;
    //         $zebra->save();
            

    //         $data = [
    //             'FirstName'=>$request->FirstName,
    //             'LastName'=>$request->LastName,
    //             'emailAddress'=>$request->emailAddress,
    //             'company'=>$request->company,
    //             'Phone'=>$request->Phone,
    //             'Country' =>$request->Country,
    //             'type' =>$request->type,
              
    //             'question1'=>"What would be the main investment reason of your organization in the pharmaceutical manufacuring?",
    //             'question2'=>"How important are the following decision criteria for the machinery requirement in your organization?",
    //             'question3'=>"In which areas do you think your facility needs to further develop its identification processes?",
    //             'question4'=>"What are the key preferred criteria in choosing your vendors? And why?",
    //             'question5'=>"Are sustainable-oriented solutions in focus for your region or organization?",
    //             'question6'=>"What other important factors you will consider during the buying process?",
    //             'question7'=>"How much is the automation degree of the pharmaceutical packaging process in your region or organization?",
    //             'question8'=>"What is the future (in 3-5 years) trend of the automation degree for the pharmaceutical packaging process in your region or organization?",
    //             'question9'=>"How common is the line integration of a set of machines for the production lines in your region?",
    //             'question10'=>"What are the critical issues you have encountered during the manufacturing (eg., inspection) process and how you overcome the issue?",
    //             'question11'=>"How important are digital solutions in your production process?",
    //             'question12'=>"How do you see the adoption of modern analytics especially AI in the pharma packaging industry in your region?",
    //             'question13'=>"What are the other painpoints during the production or procurement process you would like to improve?",
    //             'question14'=>"What do you value about your current production line?",
    //             'question15'=>"Which machine is the most important for your packaging production?",
    //             'question16'=>"How important is the handling of products before, during and after the inspection or packaging process?",
    //             'question1Score'=>implode(", ",$request->question1),
    //             'question2Score'=>implode(", ",$request->question2),
    //             'question3Score'=>implode(", ",$request->question3),
    //             'question4Score'=>implode(", ",$request->question4),
    //             'question5Score'=>implode(", ",$request->question5),
    //             'question6Score'=>implode(", ",$request->question6),
    //             'question7Score'=>implode(", ",$request->question7),
    //             'question8Score'=>implode(", ",$request->question8),
    //             'question9Score'=>implode(", ",$request->question9),
    //             'question10Score'=>implode(", ",$request->question10),
    //             'question11Score'=>implode(", ",$request->question11),
    //             'question12Score'=>implode(", ",$request->question12),
    //             'question13Score'=>implode(", ",$request->question13),
    //             'question14Score'=>implode(", ",$request->question14),
    //             'question15Score'=>implode(", ",$request->question15),
    //             'question16Score'=>implode(", ",$request->question16),
    //             // 'overallScore'=>$request->overallScore,
    //             // 'overallAverage'=>$request->overallAverage


    //         ];

    //        // return  $data;
    //             /*Admin mail*/
    //             Mail::send('emails.pharma-machinery-assessment.admin', $data, function($message) use ($data) {
    //                // $message->to('omplenquiry@ochre-media.com');
    //               $message->to('pushpalatha@ochre-media.com');
    //                 $message->subject('Pharma Machinery Assessment Submission');
    //             });
    //             Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
    //                 $message->to($data['email']);
    //                 $message->subject($data['hi']);
    //             });

    //          return $request->company;
    //     }elseif ($request->submissionType == 'registration'){
    //         return $request->company;    
    //     }else{

    //     }
    //     return $request->company;


    // }
}