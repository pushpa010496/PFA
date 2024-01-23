<?php

namespace App\Http\Controllers\Promotion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Models\Flatpage;
use App\Models\PharmaSoftware;

class FlatPagesController extends Controller
{
    public function horizonChosourceCho1Adcc(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://industry.pharmafocusasia.com/promotions/pdf/chosource-chok1-adcc-cell-line-poster.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->zip_code = $request->zip_code;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->type = $request->type;
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
                'zipcode'=>$request->zip_code,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_horizon_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('horizonChosourceCho1Adcc.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/horizon-chosource-cho1-adcc',compact('countries'));
    }
    
    public function horizonChosourceCho1AdccCellLine(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://pharmafocusasia.com/promotions/pdf/horizon-chosource-cho1-adcc-cell-line.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->company = $request->company;
            $form->declaration = $request->declaration;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,   
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                 $form->declaration = $request->declaration,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_horizon_cellline_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('horizonChosourceCho1AdccCellLine.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/horizon-chosource-cho1-adcc-cell-line',compact('countries'));
    }

    public function borapharmaWhitepaper(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
                request()->validate([
                    'firstname' => 'required', 
                    'lastname'=>'required',                  
                    'country'=>'required',
                    'company'=>'required',                               
                    'country'=>'required',
                    'email' => 'required',
                ]);
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->message = $request->message;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/borapharma-whitepaper-formulatons.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('borapharmaWhitepaper.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/borapharma-whitepaper-formulatons',compact('countries'));
    }

    public function oracleEmbraceVirtualTrials(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-embrace-virtual-trials.pdf"; 
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
                'type' => $request->type,
                'zipcode'=>$request->zip_code,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                //    $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleEmbraceVirtualTrials.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-embrace-virtual-trials',compact('countries'));
    }

    public function safelyAcceleratingDrugDevelopmentForBrighterOutcomes(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->quotation = $request->quotation ?? 'No';
            $form->representative = $request->representative ?? 'No';
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/safely-accelerating-drug-development-for-brighter-outcomes.pdf"; 
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
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' => $request->email_updates ?? 'No',
                'quotation' => $request->quotation ?? 'No',
                'representative' => $request->representative ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                //    $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('safelyAcceleratingDrugDevelopmentForBrighterOutcomes.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/safely-accelerating-drug-development-for-brighter-outcomes',compact('countries'));
    }

    public function oracleEdcKeptup(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if (isset($_POST['g-recaptcha-response'])) {
         $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-edc-keptup-new.pdf"; 
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
                'type' => $request->type,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'zipcode'=>$request->zip_code,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                    //$message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleEdcKeptup.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-edc-keptup',compact('countries'));
    }

    public function oracleExploreClinicaltrial(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
       if (isset($_POST['g-recaptcha-response'])) {
         $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-explore-clinicaltrial.pdf"; 
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
                'type' => $request->type,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'zipcode'=>$request->zip_code,
                'pdf_language'=>$request->pdf_language,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleExploreClinicaltrial.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-explore-clinicaltrial',compact('countries'));
    }
    
    public function eppendorfLabchannel(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/borapharma-whitepaper-formulatons.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return view('flatpages/pharma-focus-asia-lab-channel-2021.videosuccess');
            // return redirect()->route('eppendorfLabchannel.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/pharma-focus-asia-lab-channel-2021.index',compact('countries'));
    }
    
    public function nsfGMPregulatory(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->message = $request->description;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/borapharma-whitepaper-formulatons.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'description' =>$request->description,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('nsfGMPregulatory.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/nsf-gmp-regulatory',compact('countries'));
    }
    
    public function nsfRemediationproject(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->message = $request->description;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/borapharma-whitepaper-formulatons.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'description' =>$request->description,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('nsfRemediationproject.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/nsf-remediation-project',compact('countries'));
    }


    public function oracleEdcKeptupKorean(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-edc-keptup-korean.pdf"; 
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
                'type' => $request->type,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'zipcode'=>$request->zip_code,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleEdcKeptupKorean.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-edc-keptup-korean',compact('countries'));
    }

    public function oracleEmbraceVirtualTrialsKorean(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
       if (isset($_POST['g-recaptcha-response'])) {
         $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if(\Request::isMethod('post') && $this->checkgooglecaptha($captcha)==true){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-embrace-virtual-trials-korean.pdf"; 
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
                'type' => $request->type,
                'zipcode'=>$request->zip_code,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                //    $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleEmbraceVirtualTrialsKorean.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-embrace-virtual-trials-korean',compact('countries'));
    }
    
    
     public function oracleExploreClinicaltrialKorean(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->zip_code = $request->zip_code;
            $form->pdf_language = $request->pdf_language;
            $form->headquarters = $request->headquarters;
            $form->subscribe_type = $request->subscribe_type ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/oracle-explore-clinical-trials-korean.pdf"; 
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
                'type' => $request->type,
                'zipcode'=>$request->zip_code,
                'country'=>$request->country,
                'headquarters'=>$request->headquarters,
                'pdf_language'=>$request->pdf_language,
                'subscribe_type'=>$request->subscribe_type ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                //    $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('oracleExploreClinicaltrialKorean.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/oracle-explore-clinicaltrial-korean',compact('countries'));
    }

    public function horizonChosourceExpressionPlatrform(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://www.pharmafocusasia.com/promotions/pdf/horizon-chosource-expression-platrform.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->message = $request->description;            
            // $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->zip_code = $request->zip_code;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->representative  = $request->representative ?? 'No';
            $form->type = $request->type;
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
                'description'=>$request->description,
                // 'zipcode'=>$request->zip_code,
                'type' => $request->type,
                // 'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'representative' =>$request->representative ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_horizon_chosource_expression_platrform_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('horizonChosourceExpressionPlatrform.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/horizon-chosource-expression-platrform',compact('countries'));
    }
    
    public function euiVdrRegulation2017(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->message = $request->description;            
            $form->country = $request->country;
            $form->title = $request->job_title;
            $form->declaration  = $request->declaration ?? 'No';
            $form->working=implode(",",$request->working);
            $form->development=implode(",",$request->development);
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'description'=>$request->description,
                'type' => $request->type,
                'country'=>$request->country,
                'declaration'  => $request->declaration ?? 'No',
                'working'=>implode(",",$request->working),
                'development'=>implode(",",$request->development),
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,         
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('euiVdrRegulation2017.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/euivdregulation2017-746',compact('countries'));
    }
    
    public function transferStrategies(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://www.pharmafocusasia.com/promotions/pdf/thermo-transfer-strategies-for-pharmaceutical-product.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->city = $request->city;
            $form->address = $request->address;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->type = $request->type;
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
                'type' => $request->type,
                'country'=>$request->country,
                'city' => $request->city,
                'address' => $request->address,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('transferStrategies.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/transfer-strategies-for-pharmaceutical-product',compact('countries'));
    }
    
    public function ystralJetstreamAgitator(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
    
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->email_updates = $request->email_updates ?? 'No' ;
            $form->type = $request->type;
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
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('ystralJetstreamAgitator.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/ystral-jetstream-mixer-versus-agitator-webinar',compact('countries'));
    }
    public function rightFilterIntegrity(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "https://www.pharmafocusasia.com/promotions/pdf/how-to-select-the-right-filter-integrity-test-instrument-an-en.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->message = $request->description;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->representative  = $request->representative ?? 'No';
            $form->declaration  = $request->declaration ?? 'No';
            $form->type = $request->type;
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
                'type' => $request->type,
                'country'=>$request->country,
                'pdf'=>$pdf,
                'description' =>$request->description,
                'email_updates'  => $request->email_updates ?? 'No',
                'representative'  => $request->representative ?? 'No',
                'declaration'  => $request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_pall_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('rightFilterIntegrity.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/how-to-select-the-right-filter-integrity-test-instrument',compact('countries'));
    }
    
    public function nsfFdaInspectionsRecommencing(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->message = $request->description;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/nsf-fda-inspections-recommencing.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'description' =>$request->description,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                   $message->to('omplenquiry@ochre-media.com');
                   // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('nsfFdaInspectionsRecommencing.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }    
        return view('flatpages/nsf-fda-inspections-recommencing',compact('countries'));
    }
    public function watersGenotoxicImpuritiesWebinar(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->zip_code = $request->zip_code;
            $form->city = $request->city;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->areas_of_interest = $request->areas_of_interest;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/nsf-fda-inspections-recommencing.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'email_updates' =>$request->email_updates ?? 'No',
                'areas_of_interest' =>$request->areas_of_interest,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                    // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('watersGenotoxicImpuritiesWebinar.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/waters-genotoxic-impurities-webinar',compact('countries'));
    }

    public function acceleratingMrna(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->zip_code = $request->zip_code;
            $form->City = $request->City;
            $form->address = $request->address;
            $form->message = $request->message;
            $form->intrested = $request->intrested;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->industry = $request->industry;
            $form->company = $request->company;
            $form->declaration = $request->declaration;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/nsf-fda-inspections-recommencing.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'intrested' => $request->intrested,
                'description' =>$request->message,
                'industry' => $request->industry,
                'country'=>$request->country,
                'pincode'=>$request->zip_code,
                'city'=>$request->City,
                'address'=>$request->address,
                'declaration'=>$request->declaration,
                'email_updates' =>$request->email_updates ?? 'No',
                'areas_of_interest' =>$request->areas_of_interest,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('acceleratingMrna.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/accelerating-mrna-research-and-manufacturing',compact('countries'));
    }

    public function thermoFisherScientific(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->working=implode(",",$request->working);
            $form->areas_of_interest = implode(",",$request->areas_of_interest);
            $form->products_interest = implode(",",$request->products_interest);
            $form->company = $request->company;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->declaration = $request->declaration ?? 'No';
            $form->type = $request->type;
            $form->save();
           
             $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/Interactive-Brochure-mAbs-Process-Playbook-December-2021.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email,    
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'intrested' => $request->intrested,
                'working'=>implode(",",$request->working),
                'areas_of_interest' => implode(",",$request->areas_of_interest),
                'products_interest' => implode(",",$request->products_interest),
                'declaration' => $request->declaration ?? 'No',
                'description' => $request->message,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                    // $message->to('srinivas.i@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('thermoFisherScientific.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/thermo-fisher-scientific',compact('countries'));
    }

    public function twistBioscienceWebinar(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->email_updates = $request->email_updates ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/twist-bioscience-webinar.mp4"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'video'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                     //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('twistBioscienceWebinar.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/twist-bioscience-webinar',compact('countries'));
    }
    
    public function biocontinuumPlatform(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){  
            $page =parse_url($request->page,PHP_URL_PATH);                      
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->declaration = $request->declaration ?? 'No';
            $form->message = $request->message;
            $form->from = $request->from;
            $form->page = $request->page;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             if($request->from =='The Biopharmaceutical Factory of the Future'){
                 $pdf = "http://promotions.pharmafocusasia.com/public/pdf/biopharmaceutical-factory-of-the-future.pdf";
                 
             }else{
                 $pdf = "http://promotions.pharmafocusasia.com/public/pdf/convergent-bioprocessing-ebook.pdf";
             }
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=>$request->intrested,
                 'declaration'=>$request->declaration ?? 'No',
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'page' =>$request->page,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'from' =>$request->from,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
         $message->to('omplenquiry@ochre-media.com');
            // $message->to('srinivas.i@ochre-media.com');
              // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatform.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/biocontinuum-platform',compact('countries'));
    }
    public function biocontinuumPlatformExploreBiocontinuum(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        return view('flatpages/explore-biocontinuum-platform',compact('countries'));
    }
    public function biocontinuumPlatformContinuousProcessing(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){   
            $page =parse_url($request->page,PHP_URL_PATH);                     
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->from = $request->from;            
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            if($request->from =='Download BioContinuum™ Platform Infographic'){
 
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/bio-continuum-platform_infographic_mk_BR2733EN_v1.pdf"; 
            }
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'page' =>$request->page,           
                'from' =>$request->from,
                 'declaration'=>$request->declaration ?? 'No',
                 'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
             $message->to('omplenquiry@ochre-media.com');
                   //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('ContinuousProcessing.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 

        return view('flatpages/continuous-processing-market-trends-drivers',compact('countries'));
    }

    public function biocontinuumPlatformAdvanceDigitize(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $page =parse_url($request->page,PHP_URL_PATH);                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->declaration = $request->declaration ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->from = $request->from;            
            $form->page = $request->page;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->City,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'declaration'=>$request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                $message->to('omplenquiry@ochre-media.com');
                     //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_biocontinuum_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformAdvanceDigitize.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 

        return view('flatpages/advance-digitize-your-bioprocess',compact('countries'));
    }

    public function biocontinuumPlatformContactUs(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
          if(\Request::isMethod('post')){   
            $page =parse_url($request->page,PHP_URL_PATH);                     
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->from = $request->from;            
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // if($request->from =='Download BioContinuum™ Platform Infographic'){
 
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/bio-continuum-platform_infographic_mk_BR2733EN_v1.pdf"; 
            // }
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'page' =>$request->page,           
                'from' =>$request->from,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                 'declaration'=>$request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                //'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
               $message->to('omplenquiry@ochre-media.com');
                   //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformContactUs.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 

        return view('flatpages/contact-us ',compact('countries'));
    }

    public function biocontinuumPlatformAutomationAnalytics(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){ 
            $page =parse_url($request->page,PHP_URL_PATH);                       
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->from = $request->from;
            $form->page = $request->page;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->declaration = $request->declaration ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
                if($request->from =='Download Bio4C ProcessPad eBook'){
                       $pdf = "http://promotions.pharmafocusasia.com/public/pdf/mk_bio4C_processpad_CPV_eBook_final.pdf";
                     }elseif($request->from =='Download Bio4C Orchestrator Software White Paper'){
                     $pdf = "http://promotions.pharmafocusasia.com/public/pdf/automation-analytics-bio4c-orchestar-whitepaper.pdf"; 
                 }elseif($request->from =='Evalution Bioprocessing'){
                  $pdf = "http://promotions.pharmafocusasia.com/public/pdf/automation-analytics-bio4c-orchestar-whitepaper.pdf";
                 }else{
                    $pdf = "http://promotions.pharmafocusasia.com/public/pdf/how-digital-solutions-are-transforming-biomanufacturing_learnmore.pdf"; 
                 }
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'page' =>$request->page,
                'from' =>$request->from,
                'description' => $request->message,
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                 'declaration'=>$request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
                   //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformAutomationAnalytics.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/automation-analytics ',compact('countries'));
    }

    public function biocontinuumPlatformProcessAnalytical(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
                if(\Request::isMethod('post')){  
                    $page =parse_url($request->page,PHP_URL_PATH);                      
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->from = $request->from;        
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             if($request->from =='Raman Analyser Learn More'){
                $pdf = "http://promotions.pharmafocusasia.com/public/pdf/raman-analyser-learnmore.pdf";
                 }elseif($request->from =='Raman Analyser Download Datasheet'){
                     $pdf = "http://promotions.pharmafocusasia.com/public/pdf/raman-analyser-datasheet.pdf"; 
                 }else{
                  $pdf = "http://promotions.pharmafocusasia.com/public/pdf/raman-software-vedio.mp4";
                 }
           // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/continuous-in-line-virus-inactivation-for-next-generation-bioprocessing_ps1111en-mk.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                 'page' =>$request->page,           
                'from' =>$request->from,
                'type' => $request->type,
                'description' => $request->message,
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'declaration'=>$request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
             // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformProcessAnalytical.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/process-analytical-technology ',compact('countries'));
    }
    public function biocontinuumPlatformSeedTrain(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){  
            $page =parse_url($request->page,PHP_URL_PATH);                       
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->from = $request->from;            
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
               if($request->from =='CellVento Learn More'){
               $pdf = "https://www.merckmillipore.com/IN/en/20200207_175819";
            }else{
                 $pdf = "http://promotions.pharmafocusasia.com/public/pdf/cellicon-learnmore.mp4";
               }
            
            //$pdf =  "http://promotions.pharmafocusasia.com/public/pdf/continuous-in-line-virus-inactivation-for-next-generation-bioprocessing_ps1111en-mk.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'page' =>$request->page,           
                'from' =>$request->from,
                'declaration'=>$request->declaration ?? 'No',
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
             // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformSeedTrain.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/seed-train',compact('countries'));
    }
    public function biocontinuumPlatformVirusInactivation(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){     
            $page =parse_url($request->page,PHP_URL_PATH);                    
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->address = $request->address;
            $form->country = $request->country;
            $form->intrested = $request->intrested;
            $form->message = $request->message;
            $form->from = $request->from;
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             if($request->from =='Learn More'){
               $pdf = "http://promotions.pharmafocusasia.com/public/pdf/continuous-in-line-virus-inactivation-for-next-generation-bioprocessing_ps1111en-mk.pdf";
            }else{
                 $pdf = "http://promotions.pharmafocusasia.com/public/pdf/global-sterile-liquid-capabilities.pdf";
               }
            
            //$pdf =  "http://promotions.pharmafocusasia.com/public/pdf/continuous-in-line-virus-inactivation-for-next-generation-bioprocessing_ps1111en-mk.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'pincode'=>$request->zip_code,
                'city'=>$request->city,
                'address'=>$request->address,
                 'intrested'=> $request->intrested,
                'type' => $request->type,
                'description' => $request->message,
                'page' =>$request->page,
                'from' =>$request->from,
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'declaration'=>$request->declaration ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf,               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
              //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('biocontinuumPlatformVirusInactivation.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/virus-inactivation',compact('countries'));
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
    public function AdvanceOligonucleotideTherapeutics(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            //  $pdf =  "#"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'phone'=>$request->phone, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                //  'video'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                  $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('AdvanceOligonucleotideTherapeutics.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/advance-oligonucleotide-therapeutics',compact('countries'));
    }

    public function AdaptdoseAnInnovativePlatform(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
 if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/adaptdose-an-innovative-platform.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('AdaptdoseAnInnovativePlatform.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
      return view('flatpages/adaptdose-an-innovative-platform',compact('countries'));
    }


    public function PreInspectionAuditsforRegulatoryInspections(Request $request){

        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/pre-inspection-audits-can-help-you-prepare-for-regulatory-inspections.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                $message->to('omplenquiry@ochre-media.com');
                    //   $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('PreInspectionAuditsforRegulatoryInspections.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/pre-inspection-audits-for-regulatory-inspections',compact('countries'));
    }


    public function TrilinkCleanCap(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/trilink-cleancap',compact('countries'));
    }
    public function TrilinkCleanCapJapan(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/trilink-cleancap-japan',compact('countries'));
    }
    public function GmpReagentsJapan(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH); 
            $form = new Flatpage();               
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->from = $request->from;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/trilink-cleancap-case-study.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'page' => $page, 
                'from' =>$request->from,
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
         $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('GmpReagentsJapan.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/trilink-gmp-reagents-japan',compact('countries'));
    }
    public function TrilinkCleanCapReagentsJapan(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH); 
            $form = new Flatpage();               
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->from = $request->from;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/cleancap-jp-new.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'page' => $page, 
                'from' =>$request->from,
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
         $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkCleanCapReagentsJapan.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/trilink-cleancap-reagents-japan',compact('countries'));
    }

    public function TrilinkCleanCapCaseStudyJapan(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH); 
            $form = new Flatpage();               
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->from = $request->from;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/cleancap-casestudy-1.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'page' => $page, 
                'from' =>$request->from,
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
         $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkCleanCapCaseStudyJapan.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/trilink-cleancap-casestudy-japan',compact('countries'));
    }
    public function ContactUsJapan(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH); 
            $form = new Flatpage();               
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->from = $request->from;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/trilink-cleancap-case-study.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'page' => $page, 
                'from' =>$request->from,
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
         $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('ContactUsJapan.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/trilink-contactus-japan',compact('countries'));
    }
    public function TrilinkCleanCapReagents(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/cleancap-reagents.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkCleanCapReagents.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/trilink-cleancap-reagents',compact('countries'));
    }
    public function TrilinkCleanCapCaseStudy(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $form = new Flatpage();                
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/trilink-cleancap-case-study.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                    // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkCleanCapCaseStudy.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/trilink-cleancap-case-study',compact('countries'));
    }


    public function GmpReagents(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH); 
            $form = new Flatpage();               
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/trilink-cleancap-case-study.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
           $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkGmpReagents.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/gmp-reagents',compact('countries'));
    }
    public function ContactUs(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://promotions.pharmafocusasia.com/public/pdf/trilink-cleancap-case-study.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'phone'=>$request->phone,
                'site_name'=>'pharmafocusasia',
                'job_title'=>$request->job_title,
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                $message->to('omplenquiry@ochre-media.com');
                     //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('TrilinkContactUs.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/trilink-contact-us',compact('countries'));
    }

    public function BioTechne(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne',compact('countries'));
    }

    public function BioTechneLuminexAssays(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
 if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/luminex-assay.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'declaration'=>$request->declaration ?? 'No',
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
     $message->to('omplenquiry@ochre-media.com');
           // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('BioTechneLuminexAssays.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/bio-techne-luminex-assays',compact('countries'));
    }

    public function BioTechneSimplePlex(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/simple-plex.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'declaration'=>$request->declaration ?? 'No',
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
     $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('BioTechneSimplePlex.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/bio-techne-simple-plex',compact('countries'));
    }

    public function BioTechneElisaKits(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/elisa-kits.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'declaration'=>$request->declaration ?? 'No',
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
     $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('BioTechneElisaKits.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/bio-techne-elisa-kits',compact('countries'));
    }

    public function BioTechneImmunoAssays(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/immuno-assays.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'declaration'=>$request->declaration ?? 'No',
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
     $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('BioTechneImmunoAssays.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/bio-techne-immunoassays',compact('countries'));
    }

    public function BioTechneProteomeProfilerAntibodyArrays(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/proteome-profiler-antibody-arrays.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'declaration'=>$request->declaration ?? 'No',
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
     $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('BioTechneProteomeProfilerAntibodyArrays.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/bio-techne-proteome-profiler-antibody-arrays',compact('countries'));
    }

    public function BioTechneDuosetElisaDevelopmentKits(Request $request){
       
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->page = $request->page;
            $form->declaration = $request->declaration ?? 'No';
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/duoset-elisa-development-kits.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $page, 
                'country'=>$request->country,
                'declaration'=>$request->declaration ?? 'No',
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
     $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('BioTechneDuosetElisaDevelopmentKits.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/bio-techne-duoset-elisa-development-kits',compact('countries'));
    }

    

    public function UpmRaflatacMarketingPlan2022(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->page = $request->page;
            $form->title = $request->job_title;
            $form->declaration = $request->declaration ?? 'No';
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://promotions.pharmafocusasia.com/public/pdf/pharma-labeling-sustainable-solution-ppt.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $page, 
                'job_title'=>$request->job_title,
                'country'=>$request->country,
                'declaration'=>$request->declaration ?? 'No',
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
     $message->to('omplenquiry@ochre-media.com');
             // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg_new', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('UpmRaflatacMarketingPlan2022.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
       return view('flatpages/upm-raflatac-marketing-plan-2022',compact('countries'));
    }

    public function singleAnalyteElisas(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH);  
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->page = $request->page;
            $form->from = $request->from;
            $form->phone = $request->phone;
            $form->message = $request->message;
            $form->zip_code = $request->zip_code;
            $form->working=implode(",",$request->working);
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            if($request->pdf =='pdf'){
                $pdf = "https://resources.rndsystems.com/pdfs/brochures/rndsystems_br_elisa_guide_asdfy20-10071.pdf";
            
                }
            //   $pdf =  "https://resources.rndsystems.com/pdfs/brochures/rndsystems_br_elisa_guide_asdfy20-10071.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $request->page,
                'from' => $request->from,
                'phone'=>$request->phone, 
                'working'=>implode(",",$request->working),
                'zipcode'=>$request->zip_code,
                'country'=>$request->country,
                'description' =>$request->message,
                'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf ?? '', 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
   $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_message_new1', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            if($request->from =='Watch Protocol Video'){

                return view('flatpages.videosuccess')->with(['thank_message'=>$request->input('thank_message')]);

            }else{
                return redirect()->route('singleAnalyteElisas.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]);
            }
        } 
        return view('flatpages/single-analyte-elisas',compact('countries'));
    }

    public function multiplex(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
            $page =parse_url($request->page,PHP_URL_PATH); 
        
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->page = $request->page;
             $form->from = $request->from;
             $form->phone = $request->phone;
             $form->message = $request->message;
             $form->zip_code = $request->zip_code;
             $form->working=implode(",",$request->working);
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
             $form->save();

            if($request->pdf =='pdf'){
                $pdf = "https://resources.bio-techne.com/bio-techne-assets/images/literature/br-luminex-assay-users-guide.pdf";
            
                }elseif($request->pdf =='pdfella'){

                    $pdf ="https://industry.pharmafocusasia.com/promotions/pdf/simple-plex-ella-instrument.pdf";
                }
           
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'page' => $request->page,
                 'from' => $request->from,
                'country'=>$request->country,
                'phone'=>$request->phone, 
                'working'=>implode(",",$request->working),
                'zipcode'=>$request->zip_code,
                'description' =>$request->message,
                // 'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf ?? '', 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
     $message->to('omplenquiry@ochre-media.com');
         //  $message->to('pushpalatha@ochre-media.com');
                  $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_message_new1', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });


            if($request->from == 'Watch Simple Plex video'){

                return view('flatpages.automated-solutions-vediosuccess')->with(['thank_message'=>$request->input('thank_message')]); 

            }elseif($request->from == 'Build Your Assay'){
                
                return view('flatpages.build-your-assays-vediosuccess')->with(['thank_message'=>$request->input('thank_message')]);
            }else{
              
                return redirect()->route('multiplex.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]);
            }
          
           
        } 
        return view('flatpages/multiplex',compact('countries'));
    }

    public function ConnectingQualityData(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/connecting-quality-data-to-overcome-pharma's-3-toughest-challenges.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                // 'page' => $page,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
             $message->to('omplenquiry@ochre-media.com');
          //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('ConnectingQualityData.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/connecting-quality-data',compact('countries'));
    }


    


    public function MedtechManufacturers(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/the-ultimate-guide-to-digitizing-medtech-manufacturing.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                // 'page' => $page,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
             $message->to('omplenquiry@ochre-media.com');
           // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('MedtechManufacturers.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/medtech-manufacturers',compact('countries'));
    }

    public function MasteringDataToDriveMedicalDeviceInovation(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/mastering-data-to-drive-medical-device-innovation.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                // 'page' => $page,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('MasteringDataToDriveMedicalDeviceInovation.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/mastering-data-to-drive-medical-device-innovation',compact('countries'));
    }
    public function pharmaManufacturingDigitalJourney(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/pharma-manufacturing-s-digital-journey.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                // 'page' => $page,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('pharmaManufacturingDigitalJourney.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/pharma-manufacturing-digital-journey',compact('countries'));
    }
    public function intersystemsEbook(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            // $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/intersystems-ebook.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                // 'page' => $page,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                // 'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('intersystemsEbook.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/intersystems-ebook',compact('countries'));
    }



    

    public function debunkingCommonMythsAboutManufacturingExecutionSoftware(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get(); 
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->company_size = $request->company_size;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->industry = $request->industry;
          
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/debunking-common-myths-about-manufacturing-execution-software.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                 'industry' => $request->industry,
                 'company_size' => $request->company_size,
                'phone'=>$request->phone, 
                'country'=>$request->country,
              
                // 'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
           // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('debunkingCommonMythsAboutManufacturingExecutionSoftware.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/debunking-common-myths-about-manufacturing-execution-software',compact('countries'));
    }


    
    public function economicsOfBiologicsManufacturingSingleUseBioreactors(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get(); 
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->city = $request->city;
            $form->company = $request->company;
            $form->intrested = $request->intrested;
            $form->declaration = $request->declaration ?? 'No';
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/economics-of-biologics-manufacturing-single-use-bioreactors.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                 'city' => $request->city,
                 'declaration'=>$request->declaration ?? 'No',
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'intrested'=> $request->intrested,
                // 'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
           // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('economicsOfBiologicsManufacturingSingleUseBioreactors.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/economics-of-biologics-manufacturing-single-use-bioreactors',compact('countries'));
    }


    public function economicsOfBiologicsManufacturingSingleUseBioreactorsJapan(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get(); 
        return view('flatpages/jp-economics-of-biologics-manufacturing-single-use-bioreactors',compact('countries'));
    }

    public function economicsOfBiologicsManufacturingSingleUseBioreactorsKorean(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get(); 
        return view('flatpages/kr-economics-of-biologics-manufacturing-single-use-bioreactors',compact('countries'));
    }
    
      public function phenomenex(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get(); 
            if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->city = $request->city;
             $form->state = $request->state;
            $form->company = $request->company;
            $form->industry = $request->industry;
            $form->zip_code = $request->zip_code;
            $form->title = $request->job_title;
            $form->intrested = $request->intrested;
            $form->type = $request->type;
            $form->save();
            //  $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/economics-of-biologics-manufacturing-single-use-bioreactors.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'city' => $request->city,
                'intrested'=>$request->intrested,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'zip_code'=> $request->zip_code,
                'state'=> $request->state,
                'job_title'=>$request->job_title,
                'industry'=>$request->industry,
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                //  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('phenomenex.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/phenomenex',compact('countries'));
    }

    public function ultimateGuideToDigitizingMedtechManufacturing(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get(); 
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->company_size = $request->company_size;
            $form->industry = $request->industry;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/the-ultimate-guide-to-digitizing-medtech-manufacturing-new.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->job_title,
                'company_size' => $request->company_size,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'industry'=>$request->industry,
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('ultimateGuideToDigitizingMedtechManufacturing.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/ultimate-guide-to-digitizing-medtech-manufacturing',compact('countries'));
    }

   
  
    public function merckContinuousBioprocessingWithBiocontinuumPlatform(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get(); 
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/merck-continuous-bioprocessing-with-biocontinuum-platform.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->job_title,
              
                'phone'=>$request->phone, 
                'country'=>$request->country,
               
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
          // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('merckContinuousBioprocessingWithBiocontinuumPlatform.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/merck-continuous-bioprocessing-with-biocontinuum-platform',compact('countries'));
    }
    

    public function advancedProgramInPharmaceuticalQualityManagement(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get(); 
        if(\Request::isMethod('post')){   
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/advanced-program-in-pharmaceutical-quality-management.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->job_title,
              
                'phone'=>$request->phone, 
                'country'=>$request->country,
               
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
         // $message->to('bhavani@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('advancedProgramInPharmaceuticalQualityManagement.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/advanced-program-in-pharmaceutical-quality-management',compact('countries'));
    }

    public function bioTechnesingleanalyteelisasjp(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-single-analyte-elisas-jp',compact('countries'));
    }

    public function bioTechnemultiplexjp(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-multiplex-jp',compact('countries'));
    }
    public function bioTechneluminexassaysjp(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-luminex-assays-jp',compact('countries'));
    }
    public function bioTechnesingleanalyteelisaskr(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-single-analyte-elisas-kr',compact('countries'));
    }

    public function bioTechnemultiplexkr(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-multiplex-kr',compact('countries'));
    }
    public function bioTechneluminexassayskr(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-luminex-assays-kr',compact('countries'));
    }

    public function bioTechnesingleanalyteelisasch(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-single-analyte-elisas-ch',compact('countries'));
    }

    public function bioTechnemultiplexch(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-multiplex-ch',compact('countries'));
    }
    public function bioTechneluminexassaysch(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-luminex-assays-ch',compact('countries'));
    }

    
    public function BioTechnejp(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-jp',compact('countries'));
    }

    public function BioTechnekr(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-kr',compact('countries'));
    }
    public function BioTechnech(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
       return view('flatpages/bio-techne-ch',compact('countries'));
    }

    public function insulinAdsorbentAstreaBio(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){   
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/insulin-adsorbent_brochure.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->job_title,
                'phone'=>$request->phone, 
                'country'=>$request->country,
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
           $message->to('omplenquiry@ochre-media.com');
         // $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('insulinAdsorbentAstreaBio.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
       return view('flatpages/insulin-adsorbent-astrea-bio',compact('countries'));
    }

    public function snapLaboratoryGlassColumnsAstreaBio(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){   
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/snap-brochure.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->job_title,
                'phone'=>$request->phone, 
                'country'=>$request->country,
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
        //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('snapLaboratoryGlassColumnsAstreaBio.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
       return view('flatpages/snap-laboratory-glass-columns-astrea-bio',compact('countries'));
    }

    public function etoxiclearAstreaBio(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){   
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/etoxiclear-astrea-bio.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->job_title,
                'phone'=>$request->phone, 
                'country'=>$request->country,
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
       //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('etoxiclearAstreaBio.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
      
       return view('flatpages/etoxiclear-astrea-bio',compact('countries'));
    }



    public function extrusionComplimentaryWhitepaper(Request $request){

        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){   
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->industry = $request->industry;
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/extrusion-complimentary-whitepaper.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'job_title' => $request->job_title,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'industry'=>$request->industry,
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new-new', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
       //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('extrusionComplimentaryWhitepaper.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
      

        return view('flatpages/extrusion-complimentary-whitepaper',compact('countries'));
    }


    public function thermofisherBiopharmaceuticalApplications(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){   
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->city = $request->city;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->intrested = $request->intrested ?? 'No';
            $form->email_updates = $request->email_updates ?? 'No';
            $form->type = $request->type;
            $form->save();
             $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-biopharmaceutical-applications.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'pharmafocusasia',
                'type' => $request->type,
                'city' => $request->city,
                'email_updates' =>$request->email_updates ?? 'No',
                'phone'=>$request->phone, 
                'country'=>$request->country,
                'intrested'=>$request->intrested ?? 'No',
            //  'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                  'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new-new', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
       //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('thermofisherBiopharmaceuticalApplications.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/thermofisher-biopharmaceutical-applications',compact('countries'));
    }

    public function recipharm(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->title = $request->title;
        $form->country = $request->country;
        $form->type = $request->type;
        $form->email_updates = $request->email_updates ?? 'No';
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/lobsor-case-study.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->title,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates ?? 'No',
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new-new', $data, function($message) use($data){
               //   $message->to('pushpalatha@ochre-media.com');
              $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' |Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('recipharm.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
        return view('flatpages/recipharm',compact('countries'));
    }

    public function korberEnablingDigitizationPharmaBiotechProduction(Request $request){
        $title = ['Korea, Republic of', 'Indonesia', 'Thailand', 'Singapore', 'Philippines', 'Malaysia', 'Taiwan', 'Australia', 'New Zealand', 'Vietnam', 'Pakistan'];
        $countries = DB::table('countries')->whereIn('title',$title)->get();
        
        if(\Request::isMethod('post')){
            $date=$request->date_of_contact;
            $newDate = \Carbon\Carbon::createFromFormat('m/d/Y', $date)
            ->format('Y-m-d');
    
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->title = $request->job_title;
            $form->declaration = $request->declaration;
            //$form->email_updates = $request->email_updates ?? 'No';
            $form->date_of_contact =$newDate;
            $form->time_slot_for_contact = implode(":",$request->time_slot_for_contact);
            $form->save();
            $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/korber-enabling-digitization-pharma-biotech-production-whitepaper.pdf"; 
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'email' => $request->email,
                'type' => $request->type,
                'job_title' => $request->job_title,
                'declaration' => $request->declaration,
                'date_of_contact' => $newDate,
                'time_slot_for_contact' => implode(":",$request->time_slot_for_contact),
                'site_name'=>'pharmafocusasia',
                //'email_updates' => $request->email_updates ?? 'No',
                'pdf' => $pdf,
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
               ];
          // admin mail
                Mail::send('emails.flatpages.admin-new-new', $data, function($message) use($data){
                   //  $message->to('bhavani@ochre-media.com');
                $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('korberEnablingDigitizationPharmaBiotechProduction.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
        return view('flatpages/korber-enabling-digitization-pharma-biotech-production',compact('countries'));
    }

    public function eppendorfBioprocessingScaleUpChallenges(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->working = $request->working;
            $form->intrested = $request->intrested;
            $form->email_updates = $request->email_updates;
            $form->quotation = $request->quotation;
            $form->representative = $request->representative;
            $form->save();
            if($request->working =='Addressing-Bioprocessing-Scale-Up-Challenges'){
                $pdf = 'https://industry.pharmafocusasia.com/promotions/pdf/addressing-bioprocessing-scale-up-challenges.pdf';

            }
            if($request->email_updates =='Solutions-for-vaccine-development'){
                $ebook = 'https://industry.pharmafocusasia.com/promotions/pdf/solutions-for-vaccine-development.pdf';

            }
            if($request->quotation =='Increasing-the-Reproducibility-of-Cell-Culture-Bioprocesses'){
                $whitepaper = 'https://industry.pharmafocusasia.com/promotions/pdf/increasing-the-reproducibility-of-cell-culture-bioprocesses.pdf';

            }
            if($request->representative =='Upstream-Bioprocessing-Improving-efficiency-through-digital-tools'){
                $brochure = 'https://industry.pharmafocusasia.com/promotions/pdf/upstream-bioprocessing.pdf';

            }
        //    $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/eBooks.zip"; 
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'intrested'=> $request->intrested,
                'site_name'=>'pharmafocusasia',
                 'email_updates' =>$request->email_updates ?? 'No' ,
                 'quotation' =>$request->quotation ?? 'No' ,
                 'representative' =>$request->representative ?? 'No',
                 'working' => $request->working ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'pdf' => $pdf ?? '',
                'ebook' =>$ebook ?? '',
                'whitepaper' =>$whitepaper ?? '',
                'brochure' =>$brochure ?? '',
               ];
          // admin mail
                Mail::send('emails.flatpages.admin1', $data, function($message) use($data){
               //$message->to('pushpalatha@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg1',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('eppendorfBioprocessingScaleUpChallenges.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
        return view('flatpages/eppendorf-bioprocessing-scale-up-challenges',compact('countries'));
    }
    
    public function bachemContinuousChromatography(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
           // $form->city = $request->city;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->working = $request->working;
            $form->areas_of_interest = implode(",",$request->quality_interest);
            $form->products_interest = implode(",",$request->interest);
            $form->save();
           
           $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/BR_Whitepaper_A4_Continuous_Chromatography_2022_04_kok.pdf"; 
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'industry'=> $request->industry,
                'site_name'=>'pharmafocusasia',
                'areas_of_interest' => implode(",",$request->quality_interest),
                'products_interest'=> implode(",",$request->interest),
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->designation,
                'pdf' => $pdf ?? '',
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
              // $message->to('bhavani@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg_bachem',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('bachemContinuousChromatography.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
        return view('flatpages/bachem-continuous-chromatography',compact('countries'));
    }
    
    public function acgVegetarianCapsules(Request $request){
           $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
            if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
             $form->zip_code = $request->zip_code;
              $form->state = $request->state;
              $form->message = $request->message;
            $form->type = $request->type;
           // $form->working = $request->working;
           // $form->areas_of_interest = implode(",",$request->privacy);
           // $form->products_interest = implode(",",$request->interest);
            $form->save();
           
           $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/acg-vegetarian-capsules.pdf"; 
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                 'zipcode'=> $request->zip_code,
                 'state' => $request->state,
                 'description' => $request->message,
                //'industry'=> $request->industry,
                'site_name'=>'pharmafocusasia',
               // 'areas_of_interest' => implode(",",$request->privacy),
               // 'products_interest'=> implode(",",$request->interest),
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->designation,
                'pdf' => $pdf ?? '',
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
              // $message->to('pushpalatha@ochre-media.com');
              $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('acgVegetarianCapsules.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
            return view('flatpages/acg-vegetarian-capsules',compact('countries'));
    }
    
    public function bactoCdSupreme(Request $request){
          $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
             if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->city = $request->city;
            
          
            $form->zip_code = $request->zip_code;
            $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
            $form->save();
           
           $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/bacto-cd-supreme.pdf"; 
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
                
                'site_name'=>'pharmafocusasia',
                'areas_of_interest' => $request->areas_of_interest ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->designation,
                'pdf' => $pdf ?? '',
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
              // $message->to('pushpalatha@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('bactoCdSupreme.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
            return view('flatpages/bacto-cd-supreme',compact('countries'));
    }

    public function perkinElmerChineseMedicine(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
             if(\Request::isMethod('post')){
             //   dd($request);
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->job_role = $request->job_role;
            $form->type = $request->type;
            $form->city = $request->city;
            
          
            $form->zip_code = $request->zip_code;
            $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
            $form->save();
           
            
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
                'job_role'=>$request->job_role,
                'site_name'=>'pharmafocusasia',
                'areas_of_interest' => $request->areas_of_interest ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->designation,
                'pdf5'=>$request->pdf5,
                'pdf4'=>$request->pdf4,
               'pdf' => $pdf ?? '',
               'pdf1'=>$pdf1 ?? '',
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
             // $message->to('bhavani@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg_perkin',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('perkinElmerChineseMedicine.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
        return view('flatpages/perkin-elmer-chinese-medicine',compact('countries'));
    }

    public function perkinelmerGcSystem(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
             // dd($request);
           $form = new Flatpage();
           $form->firstname = $request->firstname;
           $form->lastname = $request->lastname;
           $form->phone = $request->phone;
           $form->email = $request->email;
           $form->title = $request->designation;
           $form->company = $request->company;
           $form->country = $request->country;
           $form->job_role = $request->job_role;
           $form->type = $request->type;
          // $form->city = $request->city;
           
         
           $form->intrested = $request->intrested;
           $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
           $form->save();
          
           $data = [
               'name'=>$request->firstname,
               'first_name' => $request->firstname,
               'last_name' => $request->lastname,
               'phone' => $request->phone,
               'company' => $request->company,
               'country' => $request->country,
               'type' => $request->type,
               'email' => $request->email,
               'zipcode'=> $request->zip_code,
               'city' => $request->city,
               'job_role'=>$request->job_role,
               'site_name'=>'pharmafocusasia',
               'areas_of_interest' => $request->areas_of_interest ?? 'No',
               'subject_admin' => $request->admin_subject,
               'subject_client' => $request->client_subject,
               'client_message' => $request->client_message,
               'job_title'=>$request->designation,
               'pdf1'=>$request->pdf1,
               'pdf2'=>$request->pdf2,
               'pdf3'=>$request->pdf3,
               'pdf4'=>$request->pdf4,
               'pdf5'=>$request->pdf5,
               'pdf6'=>$request->pdf6,
               'pdf7'=>$request->pdf7,
           
              ];
         // admin mail
               Mail::send('emails.flatpages.admin', $data, function($message) use($data){
             //$message->to('bhavani@ochre-media.com');
              $message->to('omplenquiry@ochre-media.com');
                $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                });
          //client Mail
               Mail::send('emails.flatpages.client_full_msg_perkinelmer',$data, function($message) use($data){
               $message->to($data['email']);
               $message->subject($data['subject_client']);
   
                    });
          return redirect()->route('perkinelmerGcSystem.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
           }
        return view('flatpages/perkinelmer-gc-2400-gas-chromatography-system',compact('countries'));

    }
    public function adarePharmawhitepaper(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->city = $request->city;
            
          
            $form->industry = $request->industry;
           // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
            $form->save();
           
           $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/Maintaining_a_Drugs_Bioavailability_and_Masking_Taste_With_Microencapsul.pdf"; 
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
                
                'site_name'=>'pharmafocusasia',
                'areas_of_interest' => $request->areas_of_interest ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->designation,
                'pdf' => $pdf ?? '',
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
               //$message->to('bhavani@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('adarePharmawhitepaper.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
        return view('flatpages/adare-pharma-whitepaper',compact('countries'));

    }

    public function evonikWhitepaper(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
         // dd($request); 
            $interest  = $request->email_updates;
            $products = $request->products_interest;
             $intrested  = $request->interest;
            $test='';
            if($interest != ""){
              foreach($interest  as $key=> $info) {
                  $test= $info;
              
              if($test == 'Whitepaper Cell Culture cQrex'){
                  $whitepaper ="Whitepaper Cell Culture cQrex";
              }
              if($test == 'Evonik cell culture solutions - Brochure'){
              $cell ="Evonik cell culture solutions - Brochure";
              }
              if($test == 'Evonik Cell culture solutions- product list'){
              $cys ="Evonik Cell culture solutions- product list";
              }
              if($test == 'Evonik cQrex Peptides - Technical Poster'){
                $technical ="Evonik cQrex Peptides - Technical Poster";
                }
              }
          }
          if($interest != ""){
            $updates = implode(",",$request->email_updates);
            }else{
                $updates ="";
            }
            if($products != ""){
                $products = implode(",",$request->products_interest);
                }else{
                    $products ="";
                }
                if($intrested != ""){
                    $intrested  = implode(",",$request->interest) ?? 'No';
                    }else{
                        $intrested ="";
                    }
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->products_interest=  $products;
            $form->intrested=  $intrested;
            // 'products_interest' => implode(",",$request->products_interest) ?? 'No',
            $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
            $form->representative = $request->representative ?? 'No';
           $form->email_updates = $updates;
            
          
           
           $form->save();
           
          
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
                'areas_of_interest'=>$request->areas_of_interest ?? 'No',
                'representative'=>$request->representative ?? 'No',
                'site_name'=>'pharmafocusasia',
                  'intrested' =>  $intrested ?? 'No',
                 'products_interest' =>  $products ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->designation,
                'email_updates' =>  $updates  ?? 'No',
               'test1' => $whitepaper ?? '',
               'test2' => $cell ?? '',
               'test3' =>  $cys ?? '',
               'test4' =>  $technical ?? '',
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin-enevonik', $data, function($message) use($data){
             //  $message->to('pushpalatha@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg_evonik',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('evonikWhitepaper.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
        return view('flatpages/evonik-whitepaper',compact('countries'));
    }
    public function gibcocellculture(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->message = $request->description;
          //  $form->industry = $request->industry;
           $form->areas_of_interest  = implode(",",$request->areas_of_interest);
           $form->category  = implode(",",$request->interested);
           $form->products_interest  = implode(",",$request->product_interested);
           $form->from = $request->contact;
           $form->email_updates = $request->email_updates;
            $form->save();
           
           $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/Application_Note_Efficient-Pro_Medium_and_Feeds_deliver_strong_product_q.pdf"; 
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
                'description' =>$request->description,
                'site_name'=>'pharmafocusasia',
                'areas_of_interest' => implode(",",$request->areas_of_interest),
                'category'=>implode(",",$request->interested),
                'products_interest'  => implode(",",$request->product_interested),
                'from' =>$request->contact,
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->designation,
                'pdf' => $pdf ?? '',
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
               //$message->to('bhavani@ochre-media.com');
              $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('gibcocellculture.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
        return view('flatpages/gibco-cell-culture-bioprocessing',compact('countries'));
    }

    public function gibcothermofisherhipcho(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->city = $request->city;
            $form->zip_code = $request->zip_code;
            $form->message = $request->description;
          //  $form->industry = $request->industry;
           $form->areas_of_interest  = implode(",",$request->areas_of_interest);
           $form->category  = implode(",",$request->interested);
           $form->products_interest  = implode(",",$request->product_interested);
           $form->from = $request->contact;
           $form->email_updates = $request->email_updates;
            $form->save();
           
           $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/Fact_Sheet_Shelf_life_of_reconstituted_High-Intensity_Perfusion_CHO_AGT.pdf"; 
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
                'description' =>$request->description,
                'site_name'=>'pharmafocusasia',
                'areas_of_interest' => implode(",",$request->areas_of_interest),
                'category'=>implode(",",$request->interested),
                'products_interest'  => implode(",",$request->product_interested),
                'from' =>$request->contact,
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->designation,
                'pdf' => $pdf ?? '',
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
              // $message->to('bhavani@ochre-media.com');
              $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('gibcothermofisherhipcho.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
            }
        return view('flatpages/gibco-thermofisher-hip-cho',compact('countries'));
    }

    public function fivefactorindianin(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->job_title;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
           // $form->city = $request->city;
            
          
          //  $form->industry = $request->industry;
           // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
            $form->save();
           
           $pdf="https://www.nsf.org/knowledge-library/5-factors-drive-growth-india-2023?_locale=set";
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
                
                'site_name'=>'pharmafocusasia',
                //'areas_of_interest' => $request->areas_of_interest ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->job_title,
                'pdf' => $pdf ?? '',
               
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
               //$message->to('bhavani@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg_nsf',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('fivefactorindianin.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                    }
           return view('flatpages/5factor-indian-in-2023',compact('countries'));
    }

    public function thermofisherchoappnotecswp(Request $request){
       
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            //return $request;
          
          $interest  = $request->areas_of_interest;
          $test='';
          if($interest != ""){
            foreach($interest  as $key=> $info) {
                $test= $info;
            
            if($test == 'Applicationnote'){
                $appnote ="Applicationnote";
            }
            if($test == 'CaseStudy'){
            $case ="CaseStudy";
            }
            if($test == 'Whitepaper'){
            $white ="Whitepaper";
            }
            }
        }
        if($interest != ""){
            $areas_of_interest  = implode(",",$request->areas_of_interest);
            }else{
                $areas_of_interest ="";
            }
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->job_title;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->city = $request->city;
            $form->areas_of_interest  =  $areas_of_interest;
          
          //  $form->industry = $request->industry;
         
            $form->save();
    
        
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
                
                'site_name'=>'pharmafocusasia',
                'areas_of_interest' =>$areas_of_interest,
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->job_title,
                'test1' => $appnote ?? '',
                'test2' => $case ?? '',
                'test3' =>  $white ?? '',
               
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
               //$message->to('bhavani@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg_cho',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('thermofisherchoappnotecswp.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                    }
        return view('flatpages/thermofisher-cho-app-note-cs-wp',compact('countries'));
    }

    public function acgwildestrangecapsules(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->job_title;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
            $form->state = $request->state;
            $form->zip_code = $request->zip_code;
            $form->intrested = $request->intrested;
            $form->agree = $request->agree;
          $form->signup_communication = $request->signup_communication;
          $form->other_communication = $request->other_communication;
           // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
            $form->save();
           
           $pdf="https://industry.pharmafocusasia.com/promotions/pdf/ACG_Brochure.pdf";         
              // send email admin//
            
           $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'job_title'=>$request->job_title,
                'country' => $request->country,
                'state' => $request->state,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'intrested' => $request->intrested,
                'agree' => $request->agree,
                'signup_communication' => $request->signup_communication,
                'other_communication' => $request->other_communication,
                
                'site_name'=>'pharmafocusasia',
                //'areas_of_interest' => $request->areas_of_interest ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
               
                'pdf' => $pdf ?? '',
               
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
              // $message->to('bhavani@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg_acg',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('acgwildestrangecapsules.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                    }
        return view('flatpages/acg-wildest-range-capsules',compact('countries'));
    }

    public function acgworldfilmsandfoils(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
           $form->state = $request->state;
           $form->message = $request->message;
          
          //  $form->industry = $request->industry;
           // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
            $form->save();
            $pdf="https://industry.pharmafocusasia.com/promotions/pdf/ACG_Films_and_Foils_Range_Brochure.pdf";      
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
               // 'zipcode'=> $request->zip_code,
                //'city' => $request->city,
                'state' => $request->state,
                'message' => $request->message,
                'site_name'=>'pharmafocusasia',
                //'areas_of_interest' => $request->areas_of_interest ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->job_title,
                'pdf' => $pdf ?? '',
               
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
               //$message->to('bhavani@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg_acg_films',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('acgworldfilmsandfoils.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                    }
        return view('flatpages/acg-world-films-and-foils',compact('countries'));
    }
    public function thermofisherchoappnotecswpcn(Request $request){
       
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        return view('flatpages/thermofisher-cho-app-note-cs-wp-cn',compact('countries'));
    }
    public function thermofisherchoappnotecswpjp(Request $request){
       
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        return view('flatpages/thermofisher-cho-app-note-cs-wp-jp',compact('countries'));
    }
    public function thermofisherchoappnotecswpkr(Request $request){
       
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        return view('flatpages/thermofisher-cho-app-note-cs-wp-kr',compact('countries'));
    }


    public function thermofisherSingleUsePerfusion(Request $request){

        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->title = $request->designation;
            $form->company = $request->company;
            $form->country = $request->country;
            $form->type = $request->type;
           $form->city = $request->city;
           $form->message = $request->message;
          
           $form->zip_code = $request->zip_code;
           // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
            $form->save();
            $pdf="https://industry.pharmafocusasia.com/promotions/pdf/Ebook-Single-Use-Perfusion-December-2022.pdf";      
            // send email admin//
            $data = [
                'name'=>$request->firstname,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->phone,
                'company' => $request->company,
                'country' => $request->country,
                'type' => $request->type,
                'email' => $request->email,
                'zipcode'=> $request->zip_code,
                'city' => $request->city,
               // 'state' => $request->state,
                'message' => $request->message,
                'site_name'=>'pharmafocusasia',
                //'areas_of_interest' => $request->areas_of_interest ?? 'No',
                'subject_admin' => $request->admin_subject,
                'subject_client' => $request->client_subject,
                'client_message' => $request->client_message,
                'job_title'=>$request->job_title,
                'pdf' => $pdf ?? '',
               
               
               ];
          // admin mail
                Mail::send('emails.flatpages.admin', $data, function($message) use($data){
              // $message->to('bhavani@ochre-media.com');
               $message->to('omplenquiry@ochre-media.com');
                 $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                 });
           //client Mail
                Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
                $message->to($data['email']);
                $message->subject($data['subject_client']);
    
                     });
           return redirect()->route('thermofisherSingleUsePerfusion.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                    }
        return view('flatpages/thermofisher-single-use-perfusion',compact('countries'));
    }



    public function thermofisherSingleUsePerfusionJp(Request $request){
       
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        return view('flatpages/thermofisher-single-use-perfusion-jp',compact('countries'));
    }
    public function thermofisherSingleUsePerfusionKr(Request $request){
       
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        return view('flatpages/thermofisher-single-use-perfusion-kr',compact('countries'));
    }
    public function thermofisherSingleUsePerfusionCn(Request $request){
       
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
      
        return view('flatpages/thermofisher-single-use-perfusion-cn',compact('countries'));
    }


public function acgNutraCampaignCreatives(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->intrested = $request->intrested;
       //$form->message = $request->message;
      
       //$form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        //$pdf="https://industry.pharmafocusasia.com/promotions/pdf/Ebook-Single-Use-Perfusion-December-2022.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
           // 'intrested' => $request->intrested,
            'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
           // 'pdf' => $pdf ?? '',
           
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
          // $message->to('bhavani@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('acgNutraCampaignCreatives.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/acg-nutra-campaign-creatives',compact('countries'));

}


public function thermoFisherQualtrakPcrMs(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
  
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms',compact('countries'));
}
public function thermoFisherQualtrakPcrMsModalities(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
  
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-modalities',compact('countries'));
}
public function thermoFisherQualtrakPcrMsModalitiesMabs(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       // return $request;
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
       $form->title = $request->job_title;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->message = $request->message;
      
      $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        if($form->type == "MS-Qualtrak qPCR dPCR biologics biopharma white paper"){
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/qPCR-dPCR-biologics-biopharma-white-paper1.pdf"; 
        }
        if($form->type == "MS-Quantstudio 7 pro real-time PCR System Demo"){
        $video="https://industry.pharmafocusasia.com/promotions/videos/thermo-fisher-qualtrak-pcr-ms-r1-fb23/QS6-7Pro_RFID_Tagged_Plates-HelpVideo-Final.mp4";      
        }
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'industry' => $request->industry,
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
           'pdf' => $pdf ?? '',
           'video' =>$video ?? '',
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         //  $message->to('bhavani@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
                 if($form->type == "MS-Quantstudio 7 pro real-time PCR System Demo"){
             return redirect()->route('thermoFisherQualtrakPcrMsModalitiesMabsdemo.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                     
                 }else{
            return redirect()->route('thermoFisherQualtrakPcrMsModalitiesMabswhitepaper.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                       
                 }
        }
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-modalities-mabs',compact('countries'));
}
public function thermoFisherQualtrakPcrMsModalitiesVaccines(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        // return $request;
         $form = new Flatpage();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->phone = $request->phone;
         $form->email = $request->email;
        $form->title = $request->job_title;
         $form->company = $request->company;
         $form->country = $request->country;
         $form->type = $request->type;
        $form->city = $request->city;
        //$form->message = $request->message;
       
       $form->zip_code = $request->zip_code;
        // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
         $form->save();
         if($form->type == "MS-Qualtrak qPCR dPCR biologics biopharma white paper"){
         $pdf="https://industry.pharmafocusasia.com/promotions/pdf/qPCR-dPCR-biologics-biopharma-white-paper1.pdf"; 
         }
         if($form->type == "MS-Qualntstudio 7 pro qPCR systems App Note Demo"){
         $video="https://industry.pharmafocusasia.com/promotions/videos/thermo-fisher-qualtrak-pcr-ms-r1-fb23/App-Note-Quantstudio-7-pro-qpcr-System.mp4";      
         }
         // send email admin//
         $data = [
             'name'=>$request->firstname,
             'first_name' => $request->firstname,
             'last_name' => $request->lastname,
             'phone' => $request->phone,
             'company' => $request->company,
             'country' => $request->country,
             'type' => $request->type,
             'email' => $request->email,
             'zipcode'=> $request->zip_code,
             'city' => $request->city,
             'industry' => $request->industry,
             //'message' => $request->message,
             'site_name'=>'pharmafocusasia',
             //'areas_of_interest' => $request->areas_of_interest ?? 'No',
             'subject_admin' => $request->admin_subject,
             'subject_client' => $request->client_subject,
             'client_message' => $request->client_message,
             'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
            'video' =>$video ?? '',
            
            ];
       // admin mail
             Mail::send('emails.flatpages.admin', $data, function($message) use($data){
           // $message->to('bhavani@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
              $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
              });
        //client Mail
             Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
             $message->to($data['email']);
             $message->subject($data['subject_client']);
 
                  });
                  if($form->type == "MS-Qualntstudio 7 pro qPCR systems App Note Demo"){
              return redirect()->route('thermoFisherQualtrakPcrMsModalitiesVaccinesdemo.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                      
                  }else{
             return redirect()->route('thermoFisherQualtrakPcrMsModalitiesVaccineswhitepaper.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                        
                  }
         }
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-modalities-vaccines',compact('countries'));
}
public function thermoFisherQualtrakPcrMsModalitiesCellGene(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        //return $request;
         $form = new Flatpage();
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->phone = $request->phone;
         $form->email = $request->email;
        $form->title = $request->job_title;
         $form->company = $request->company;
         $form->country = $request->country;
         $form->subscribe_type =$request->selected_resouces;
         $form->type = $request->type;
         $form->city = $request->city;
        $form->zip_code = $request->zip_code;
         $form->save();
         if($request->selected_resouces == "Statement of quality: cGMP manufacturing and TaqPath qPCR master mixes"){
         $pdf="https://industry.pharmafocusasia.com/promotions/pdf/cgmp-manufacturing-taqpath-qpcr-mm-quality-statement.pdf"; 
         }
         if($request->selected_resouces == "Infographic: Comparing real-time and digital PCR technologies"){
         $pdf="https://industry.pharmafocusasia.com/promotions/pdf/comparing-realtime-digital-pcr-quantitation-poster.pdf";      
         }
         // send email admin//
         $data = [
             'name'=>$request->firstname,
             'first_name' => $request->firstname,
             'last_name' => $request->lastname,
             'phone' => $request->phone,
             'company' => $request->company,
             'country' => $request->country,
             'type' => $request->type,
             'email' => $request->email,
             'zipcode'=> $request->zip_code,
             'city' => $request->city,
             'industry' => $request->industry,
             //'message' => $request->message,
             'site_name'=>'pharmafocuseurope',
             //'areas_of_interest' => $request->areas_of_interest ?? 'No',
             'subject_admin' => $request->admin_subject,
             'subject_client' => $request->client_subject,
             'client_message' => $request->client_message,
             'job_title'=>$request->job_title,
             'selected_resouces'=>$request->selected_resouces,
            'pdf' => $pdf ?? '',
           // 'video' =>$video ?? '',
            
            ];
       // admin mail
             Mail::send('emails.flatpages.admin', $data, function($message) use($data){
           // $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
              $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
              });
        //client Mail
             Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
             $message->to($data['email']);
             $message->subject($data['subject_client']);
 
                  });
                  if($request->selected_resouces == "Statement of quality: cGMP manufacturing and TaqPath qPCR master mixes"){
              return redirect()->route('thermoFisherQualtrakPcrMsModalitiesCellGenestatement.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                      
                  }else{
             return redirect()->route('thermoFisherQualtrakPcrMsModalitiesCellGeneinfographic.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                        
                  }
         }
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-modalities-cell-&-gene',compact('countries'));
}

public function thermoFisherQualtrakContact(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       // return $request;
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->industry;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
        $form->areas_of_interest  = $request->areas_of_interest;
        $form->save();
       // $pdf="https://industry.pharmafocusasia.com/promotions/pdf/residual-plasmid-quantification-appnote.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'industry' => $request->industry,
            //'message' => $request->message,
            'site_name'=>'pharmafocuseurope',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
          //  'pdf' => $pdf ?? '',
           
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         //  $message->to('bhavani@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermoFisherQualtrakContact.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-contact',compact('countries'));
}



public function thermofisherDigitalPcrSystem(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->title = $request->job_title;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->message = $request->message;
      
       $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/residual-plasmid-quantification-appnote.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
           // 'state' => $request->state,
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
           //$message->to('pushpalatha@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherDigitalPcrSystem.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-digital-pcr-system',compact('countries'));
}




public function thermofisherQualTrakWorkflowsMAb(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->title = $request->job_title;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->message = $request->message;
      
       $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-qualtrak-workflows-mab.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
          // $message->to('bhavani@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherQualTrakWorkflowsMAb.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-qualtrak-workflows-mab',compact('countries'));
}

public function tfClinicalTrialRegulationRegulatoryLandscapeDecentralisedClinicalTrials(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       // dd($request);
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
       // $form->title = $request->designation;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->intrested = $request->intrested;
      
       $form->email_updates = $request->email_updates;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        if($request->pdf_value == "all_pdfs"){
$pdf1="https://industry.pharmafocusasia.com/promotions/pdf/wp-eu-clinical-trial-regulation-2022-understanding-the-impact-on-clinica.pdf"; 
$pdf2="https://industry.pharmafocusasia.com/promotions/pdf/wp-european-regulatory-landscape-demystifying-new-qualified-person-requi.pdf"; 
$pdf3="https://industry.pharmafocusasia.com/promotions/pdf/eb-decentralized-clinical-trials_in-the-eu.pdf"; 
        }
        if($request->pdf_value2 == "EU Clinical Trial Regulation 2022"){
            $pdf1="https://industry.pharmafocusasia.com/promotions/pdf/wp-eu-clinical-trial-regulation-2022-understanding-the-impact-on-clinica.pdf"; 
        }
        if($request->pdf_value2 == "European regulatory landscape"){
            $pdf2="https://industry.pharmafocusasia.com/promotions/pdf/wp-european-regulatory-landscape-demystifying-new-qualified-person-requi.pdf"; 
        }
        if($request->pdf_value2 == "DECENTRALISED CLINICAL TRIALS IN THE EU"){
            $pdf3="https://industry.pharmafocusasia.com/promotions/pdf/eb-decentralized-clinical-trials_in-the-eu.pdf"; 
        }
                      

                      
          
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'intrested' => $request->intrested,
           'email_updates' => $request->email_updates,
            'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf1' => $pdf1 ?? '',
            'pdf2' => $pdf2 ?? '',
            'pdf3' => $pdf3 ?? '',
           
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
           //$message->to('bhavani@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_tf',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('tfClinicalTrialRegulationRegulatory.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
  
    return view('flatpages/thermofisher/tf-clinical-trial-regulation-regulatory-landscape-decentralised-clinical-trials',compact('countries'));
}

public function sparkplugopenSpecificationcriticalachieving(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/sparkplug-open-specification-critical-achieving-roi-in-iiot',compact('countries'));
}
public function mastercontrolManufacturingsoftwarebuyersguide(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->company_size = $request->company_size;
        $form->title = $request->designation;
       $form->industry = $request->industry;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/manufacturing-software-buyer-s-guide.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->designation,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'company_size' => $request->company_size,
            //'industry' => $request->industry,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('bhavani@ochre-media.com');
       $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('mastercontrolManufacturingsoftwarebuyersguide.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/master-control-manufacturing-software-buyers-guide',compact('countries'));
}
public function krmastercontrolManufacturingsoftwarebuyersguide(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/kr-master-control-manufacturing-software-buyers-guide',compact('countries'));
}
public function thermofisherQualTrakWorkflowsMAbJp(Request $request){
           
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/mAbs-qPCR-Applications-WhitePaper-Global-FHR.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
           // 'state' => $request->state,
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
          //$message->to('bhavani@ochre-media.com');
       $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherQualTrakWorkflowsMAbJp.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-qualtrak-workflows-mab-jp',compact('countries'));
}
public function thermofisherQualTrakWorkflowsMAbCn(Request $request){
   
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/mAbs-qPCR-Applications-WhitePaper-Global-FHR.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
           // 'state' => $request->state,
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
        // $message->to('bhavani@ochre-media.com');
       $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherQualTrakWorkflowsMAbCn.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }

    return view('flatpages/thermofisher/thermofisher-qualtrak-workflows-mab-cn',compact('countries'));
}
public function thermofisherQualTrakWorkflowsMAbKr(Request $request){
   
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/mAbs-qPCR-Applications-WhitePaper-Global-FHR.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
           // 'state' => $request->state,
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
        // $message->to('bhavani@ochre-media.com');
      $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherQualTrakWorkflowsMAbKr.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-qualtrak-workflows-mab-kr',compact('countries'));
}

public function thermofisherDigitalPcrSystemJp(Request $request){
   
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/residual-plasmid-quantification-appnote.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
           // 'state' => $request->state,
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
       //  $message->to('bhavani@ochre-media.com');
       $message->to('omplenquiry@ochre-media.com');
            $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherDigitalPcrSystemJp.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }

    return view('flatpages/thermofisher/thermofisher-digital-pcr-system-jp',compact('countries'));
}
public function thermofisherDigitalPcrSystemCn(Request $request){
   
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/residual-plasmid-quantification-appnote.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
           // 'state' => $request->state,
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('bhavani@ochre-media.com');
       $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherDigitalPcrSystemCn.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-digital-pcr-system-cn',compact('countries'));
}
public function thermofisherDigitalPcrSystemKr(Request $request){
   
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();

    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/residual-plasmid-quantification-appnote.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
           // 'state' => $request->state,
            //'message' => $request->message,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
        //  $message->to('bhavani@ochre-media.com');
       $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherDigitalPcrSystemKr.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-digital-pcr-system-kr',compact('countries'));
}
public function thermofisherScientificMobileapp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       // return $request;
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->type = $request->type;
        $form->industry = $request->industry;
        $form->save();
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'type' => $request->type,
            'email' => $request->email,
            'industry' => $request->industry,
            'site_name'=>'pharmafocusasia',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_tf_mblapp',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);
                 });
       return redirect()->route('thermofisherScientificMobileapp.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-scientific-mobile-app',compact('countries'));
}

public function amiPolymersealingexpertsilicone(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/ami-polymer-sealing-expert-silicone',compact('countries'));
}
public function krmastercontrolManufacturingexcellencesoftwarebuyersguide(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/kr-master-control-manufacturing-excellence-software-buyers-guide',compact('countries'));
}
public function mastercontrolManufacturingexcellencesoftwarebuyersguide(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->company_size = $request->company_size;
        $form->title = $request->designation;
       $form->industry = $request->industry;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/manufacturing-software-buyer-s-guide-1.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->designation,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'company_size' => $request->company_size,
            //'industry' => $request->industry,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('bhavani@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('mastercontrolManufacturingsoftwarebuyersguide.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/master-control-manufacturing-excellence-software-buyers-guide',compact('countries'));
}
public function amiPolymerplatinumcuredsiliconeTube(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        //$form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
        $form->title = $request->designation;
       $form->industry = $request->industry;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/Standard-Catalogue.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->designation,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'company_size' => $request->company_size,
            //'industry' => $request->industry,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
        //  $message->to('bhavani@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('amiPolymerplatinumcuredsiliconeTube.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/ami-polymer-platinum-cured-silicone-tube',compact('countries'));
}
public function amiPolymer2d3dsingleusebags(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        //$form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
        $form->title = $request->designation;
       $form->industry = $request->industry;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/SUS-Catalogue.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->designation,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'company_size' => $request->company_size,
            //'industry' => $request->industry,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('bhavani@ochre-media.com');
       $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('amiPolymer2d3dsingleusebags.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/ami-polymer-2d-3d-single-use-bags',compact('countries'));
}
public function amiPolymer2dsingleusebags(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        //$form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
        $form->title = $request->designation;
       $form->industry = $request->industry;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/SUS-Catalogue.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->designation,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'company_size' => $request->company_size,
            //'industry' => $request->industry,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
        //  $message->to('bhavani@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('amiPolymer2dsingleusebags.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/ami-polymer-2d-single-use-bags',compact('countries'));
}
public function amiPolymersingleuseassembliessystem(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        //$form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
        $form->title = $request->designation;
       $form->industry = $request->industry;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/SUS-Catalogue.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->designation,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'company_size' => $request->company_size,
            //'industry' => $request->industry,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         //$message->to('bhavani@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('amiPolymersingleuseassembliessystem.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/ami-polymer-single-use-assemblies-system',compact('countries'));
}
public function amiPolymerimafitpolyesterbraiding(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        //$form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
        $form->title = $request->designation;
       $form->industry = $request->industry;
       // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
        $form->save();

        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/Standard-Catalogue.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->designation,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'company_size' => $request->company_size,
            //'industry' => $request->industry,
            'site_name'=>'pharmafocusasia',
            //'areas_of_interest' => $request->areas_of_interest ?? 'No',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
            'pdf' => $pdf ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
        //  $message->to('bhavani@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('amiPolymerimafitpolyesterbraiding.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/ami-polymer-imafit-polyester-braiding',compact('countries'));
}


public function thermofisherchoScalability(Request $request){
       
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
          
        $interest  = $request->areas_of_interest;
      
        $test='';
        if($interest != ""){
          foreach($interest  as $key=> $info) {
              $test= $info;
          
          if($test == 'Cell Culture Media Selection'){
              $pdf1 ="https://players.brightcove.net/3663210762001/default_default/index.html?videoId=6318891971112";
          }
          if($test == 'An insider perspective key considerations'){
            $pdf2 ="https://industry.pharmafocusasia.com/promotions/pdf/insider-perspective-key-considerations-article.pdf";
          }
          if($test == 'Application Note The Freedom ExpiCHO-S'){
            $pdf3 ="https://industry.pharmafocusasia.com/promotions/pdf/expicho-s-stable-clones-application-note.pdf";
          }
         
          }
      }
      if($interest != ""){
        $updates = implode(",",$request->areas_of_interest);
        }else{
            $updates ="";
        }
      
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->title = $request->job_title;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
        
        $form->intrested=  $request->intrested;
        // 'products_interest' => implode(",",$request->products_interest) ?? 'No',
        $form->areas_of_interest  = $updates;
       
        
      
       
       $form->save();
       
      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'areas_of_interest'=> $updates,
           // 'representative'=>$request->representative ?? 'No',
            'site_name'=>'pharmafocusasia',
              'intrested' => $request->intrested,
           
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
          
           'pdf1' => $pdf1 ?? '',
           'pdf2' => $pdf2 ?? '',
           'pdf3' =>  $pdf3 ?? '',
           
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
           //$message->to('bhavani@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_en_thermofisher',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchoScalability.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher-cho-scalability-en',compact('countries'));
}

public function thermoFishercellDevelopmentdigitalpcr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
         //return $request;
          $form = new Flatpage();
          $form->firstname = $request->firstname;
          $form->lastname = $request->lastname;
          $form->phone = $request->phone;
          $form->email = $request->email;
          $form->title = $request->job_title;
          $form->company = $request->company;
          $form->country = $request->country;
          $form->type = $request->type;
       //  $form->city = $request->city;
        $form->subscribe_type = $request->subscribe_type;
        // $form->email_updates = $request->email_updates;
         // $form->areas_of_interest  = $request->areas_of_interest ?? 'No';
         $form->save();
          if($request->subscribe_type == "Download Whitepaper CPA"){
  $pdf1="https://industry.pharmafocuseurope.com/promotions/pdf/Quantification-of-next-generation-sequencing-libraries-using-the-QuantStudio-Absolute-Q-Digital-PCR-System.pdf"; 
  $pdf2="https://industry.pharmafocuseurope.com/promotions/pdf/Rare-target-quantification-on-the-QuantStudio-Absolute-Q-dPCR-System.pdf"; 
  $pdf3="https://industry.pharmafocuseurope.com/promotions/pdf/Analyzing-wastewater-samples-for-SARS-CoV-2-targets-using-the-QuantStudio-Absolute-Q-Digital-PCR-System.pdf"; 
  $pdf4="https://industry.pharmafocuseurope.com/promotions/pdf/Residual plasmid quantification in gene therapy manufacturing workflows using the QuantStudio Absolute Q Digital PCR System.pdf"; 
          }
          if($request->subscribe_type == "Download Flyer CTA"){
              $pdf1="https://industry.pharmafocuseurope.com/promotions/pdf/Absolute-q-viraltiter-dPCR-assays-flyer-global.pdf"; 
          }
          if($request->subscribe_type == "Fully-integrated digital PCR system for robust and consistent viral titer quantification Poster"){
              $pdf1="https://industry.pharmafocuseurope.com/promotions/pdf/Fully-integrated digital PCR system for robust and consistent viral titer quantification Poster.pdf"; 
          }
          if($request->subscribe_type == "Characterization of AAV Genomic Titer on the Applied Biosystems QuantStudio Absolute Q dPCR System Poster"){
              $pdf1="https://industry.pharmafocuseurope.com/promotions/pdf/Characterization of AAV Genomic Titer on the Applied Biosystems QuantStudio Absolute Q dPCR System Poster.pdf"; 
          }
          if($request->subscribe_type == "QuantStudio Absolute Q Digital PCR System brochure"){
            $pdf1="https://industry.pharmafocuseurope.com/promotions/pdf/AbsoluteQ_Viral Titer Assays User Guide.pdf"; 
        }   
        if($request->subscribe_type == "QuantStudio Absolute Q Digital PCR System brochure"){
            $pdf1="https://industry.pharmafocuseurope.com/promotions/pdf/absolute-q-product-brochure.pdf"; 
        }             
          // send email admin//
          $data = [
              'name'=>$request->firstname,
              'first_name' => $request->firstname,
              'last_name' => $request->lastname,
              'phone' => $request->phone,
              'company' => $request->company,
              'country' => $request->country,
              'type' => $request->type,
              'email' => $request->email,
              'zipcode'=> $request->zip_code,
              'city' => $request->city,
              'intrested' => $request->intrested,
              'email_updates' => $request->email_updates,
              'message' => $request->message,
              'site_name'=>'pharmafocusasia',
              'selected_resouces' => $request->subscribe_type,
              'subject_admin' => $request->admin_subject,
              'subject_client' => $request->client_subject,
              'client_message' => $request->client_message,
              'job_title'=>$request->job_title,
              'pdf1' => $pdf1 ?? '',
              'pdf2' => $pdf2 ?? '',
              'pdf3' => $pdf3 ?? '',
              'pdf4' => $pdf4 ?? '',
             
             
             ];
             
        // admin mail
              Mail::send('emails.flatpages.admin', $data, function($message) use($data){
             //$message->to('bhavani@ochre-media.com');
             $message->to('omplenquiry@ochre-media.com');
               $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
               });
         //client Mail
              Mail::send('emails.flatpages.client_full_msg_tfs', $data, function($message) use($data){
              $message->to($data['email']);
              $message->subject($data['subject_client']);
  
                   });
                   if($request->subscribe_type == "Download Whitepaper CPA"){
                    return redirect()->route('thermoFishercellDevelopmentdigitalpcrliteratures.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                            
                        }elseif($request->subscribe_type == "Download Flyer CTA"){
                   return redirect()->route('thermoFishercellDevelopmentdigitalpcrflyer.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                              
                    }elseif($request->subscribe_type == "Fully-integrated digital PCR system for robust and consistent viral titer quantification Poster"){
                        return redirect()->route('thermoFishercellDevelopmentdigitalpcrflyerposter.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                                       
                    }elseif($request->subscribe_type == "Characterization of AAV Genomic Titer on the Applied Biosystems QuantStudio Absolute Q dPCR System Poster"){
                        return redirect()->route('thermoFishercellDevelopmentdigitalpcrdPCRposter.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                                   
                             }elseif($request->subscribe_type == "QuantStudio Absolute Q Digital PCR System brochure"){
                                return redirect()->route('thermoFishercellDevelopmentdigitalpcrguide.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                                
                             }else{
                                return redirect()->route('thermoFishercellDevelopmentdigitalpcrbrochure.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                                
                             }
                            }
    return view('flatpages/thermofisher/thermo-fisher-cell-and-gene-therapy-development-digital-pcr',compact('countries'));
}


public function thermofisherManufacturingsiteiso(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-manufacturing-site-iso-certifications',compact('countries'));
}

public function biozenPhenomenex(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
 
    if(\Request::isMethod('post')){
      //  return $request;  
        $interest  = $request->areas_of_interest;
        $email= $request->email_updates;
      
        $test='';
        if($interest != ""){
          foreach($interest  as $key=> $info) {
              $test= $info;
             
          if($test == 'Biozen'){
              $pdf1 ="https://industry.pharmafocusasia.com/promotions/pdf/Biozen dSEC Column Product Guide.pdf";
          }
          if($test == 'Chromatography'){
            $pdf2 ="https://industry.pharmafocusasia.com/promotions/pdf/Drugs and Metabolites Guide.pdf";
          }
          if($test == 'USP'){
            $pdf3 ="https://industry.pharmafocusasia.com/promotions/pdf/Biozen Nano LC Application Guide.pdf";
          }
          if($test == 'Zero-Dead'){
            $pdf4 ="https://industry.pharmafocusasia.com/promotions/pdf/Sample Preparation Made Simple.pdf";
          }
         
          }
      }
      if($interest != ""){
        $updates = implode(",",$request->areas_of_interest);
        }else{
            $updates ="";
        }
        if($email != ""){
            $email_updates = implode(",",$request->email_updates);
            }else{
                $email_updates ="";
            }
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
        $form->city = $request->city;
        $form->title = $request->job_title;
        $form->industry = $request->industry;
        $form->areas_of_interest  = $updates;
        $form->address =  $request->address;
        $form->zip_code  =  $request->zip_code;
        $form->email_updates = $email_updates;
      //  dd($form);
        $form->save();
      //  $pdf="https://industry.pharmafocusasia.com/promotions/pdf/Standard-Catalogue.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->job_title,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'company_size' => $request->company_size,
            'industry' => $request->industry,
            'address' => $request->address,
            'site_name'=>'pharmafocusasia',
            'areas_of_interest' => $updates,
            'email_updates' =>  $email_updates,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
            'pdf1' => $pdf1 ?? '',
            'pdf2' => $pdf2 ?? '',
            'pdf3' => $pdf3 ?? '',
            'pdf4' => $pdf4 ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
       // $message->to('bhavani@ochre-media.com');
      $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_biozen',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('biozenPhenomenex.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/biozen-phenomenex',compact('countries'));
}
public function thermoFisherQualtrakPcrMsjp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-jp',compact('countries'));
}


public function thermoFisherQualtrakPcrMsModalitiesJp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-jp',compact('countries'));
}

public function thermoFisherQualtrakPcrMsModalitiesMabsJp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-mabs-jp',compact('countries'));
}

public function thermoFisherQualtrakPcrMsModalitiesVaccinesJp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-vaccines-jp',compact('countries'));
}

public function thermoFisherQualtrakPcrMsodalitiesCellGeneJp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-cell-&-gene-jp',compact('countries'));
}
public function thermoFisherQualtrakPcrMsContactQualtrakjp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-contact-qualtrak-jp',compact('countries'));
}



public function thermoFisherQualtrakPcrMskr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-kr',compact('countries'));
}

public function thermoFisherQualtrakPcrMsModalitieskr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-kr',compact('countries'));
}

public function thermoFisherQualtrakPcrMsModalitiesMabskr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-mabs-kr',compact('countries'));
}

public function thermoFisherQualtrakPcrMsModalitiesVaccineskr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-vaccines-kr',compact('countries'));
}

public function thermoFisherQualtrakPcrMsodalitiesCellGenekr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-cell-&-gene-kr',compact('countries'));
}
public function thermoFisherQualtrakPcrMsContactQualtrakkr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-contact-qualtrak-kr',compact('countries'));
}


public function thermoFisherQualtrakPcrMscn(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-cn',compact('countries'));
}


public function thermoFisherQualtrakPcrMsModalitiescn(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-cn',compact('countries'));
}

public function thermoFisherQualtrakPcrMsModalitiesMabscn(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-mabs-cn',compact('countries'));
}

public function thermoFisherQualtrakPcrMsModalitiesVaccinescn(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-vaccines-cn',compact('countries'));
}

public function thermoFisherQualtrakPcrMsodalitiesCellGenecn(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-modalities-cell-&-gene-cn',compact('countries'));
}
public function thermoFisherQualtrakPcrMsContactQualtrakcn(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher/thermo-fisher-qualtrak-pcr-ms-r1-fb23-contact-qualtrak-cn',compact('countries'));
}

public function korberenablingdigitizationpharmabiotechproductionPasxmes(Request $request){
    $title = ['Korea, Republic of', 'Indonesia', 'Thailand', 'Singapore', 'Philippines', 'Malaysia', 'Taiwan', 'Australia', 'New Zealand', 'Vietnam', 'Pakistan'];
    $countries = DB::table('countries')->whereIn('title',$title)->get();
    
    if(\Request::isMethod('post')){
        $date=$request->date_of_contact;
        $newDate = \Carbon\Carbon::createFromFormat('m/d/Y', $date)
        ->format('Y-m-d');

        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
        $form->title = $request->job_title;
        $form->declaration = $request->declaration;
        //$form->email_updates = $request->email_updates ?? 'No';
        $form->date_of_contact =$newDate;
        $form->time_slot_for_contact = implode(":",$request->time_slot_for_contact);
        $form->save();
       // $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/korber-enabling-digitization-pharma-biotech-production-whitepaper.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'date_of_contact' => date('d-m-Y', strtotime($newDate)),
            'time_slot_for_contact' => implode(":",$request->time_slot_for_contact),
            'site_name'=>'pharmafocusasia',
            //'email_updates' => $request->email_updates ?? 'No',
           // 'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new-new', $data, function($message) use($data){
              //  $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_korber',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('korberenablingdigitizationpharmabiotechproductionPasxmes.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')])->with(['date' => date('d-m-Y', strtotime($newDate))])->with(['time' =>  implode(":",$request->time_slot_for_contact)]);
        }
    return view('flatpages/korber-enabling-digitization-pharma-biotech-production-pasx-mes',compact('countries'));
}



public function tfSingleUseTechnologies(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
      

        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
        $form->title = $request->job_title;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
        $form->email_updates = $request->email_updates ?? 'No';
       
        $form->save();
       // $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/korber-enabling-digitization-pharma-biotech-production-whitepaper.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates ?? 'No',
           // 'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new-new', $data, function($message) use($data){
               // $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('tfSingleUseTechnologies.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/tf-single-use-technologies',compact('countries'));
}

public function watersBioprocessingContentSyndication(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();

    if(\Request::isMethod('post')){
        $interest  = $request->do_you_use;
       
        $test='';
        if($interest != ""){
          foreach($interest  as $key=> $info) {
              $test= $info;
             
          if($test == 'Ambr 250 video'){
              $pdf1 ="https://industry.pharmafocusasia.com/promotions/waters/the-bioaccord-lc-ms-system-ambr-250-data-interface.mp4";
          }
          if($test == 'Ambr 15 Appnote'){
            $pdf2 ="https://industry.pharmafocusasia.com/promotions/pdf/direct-lc-ms-characterization-application-note-en-b-sartorius.pdf";
          }
          if($test == 'Ambr 250 HT Video'){
            
            $pdf3 ="https://industry.pharmafocusasia.com/promotions/waters/waters-bioprocessing-content-syndication.mp4";
          }
         
         
          }
      }
     
      if($interest != ""){
        $updates = implode(",",$request->do_you_use);
        }else{
            $updates ="";
        }

        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
        $form->title = $request->job_title;
       $form->industry = $request->industry;
       $form->city = $request->city;
       $form->address = $request->address;
       $form->would_like_to_have =  implode(",",$request->would_like_to_have);
       $form->do_you_use = $updates;
       $form->job_role = $request->job_role;
       // $form->email_updates = $request->email_updates ?? 'No';
       
        $form->save();
       // $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/korber-enabling-digitization-pharma-biotech-production-whitepaper.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'industry' => $request->industry,
            'city' => $request->city,
            'address' => $request->address,
            'would_like_to_have' => implode(",",$request->would_like_to_have),
            'do_you_use' =>  $updates,
            'job_role' =>  $request->job_role,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates ?? 'No',
           // 'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'pdf1' => $pdf1 ?? '',
            'pdf2' => $pdf2 ?? '',
            'pdf3' => $pdf3 ?? '',
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             //  $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_waters_bioprocessing',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
                 if($request->video_download == 'video download'){
                    return view('flatpages/waters_videosuccess');
                 }else{
                    return redirect()->route('watersBioprocessingContentSyndication.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        
                 }
       }
    return view('flatpages/waters-bioprocessing-content-syndication',compact('countries'));
}


public function merckSingleusetecchnology(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
      

        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
   
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
        $form->message = $request->description; 
        $form->question1 = $request->question1; 
        $form->question2 = $request->question2; 
        // $form->question2 = implode(',',$request->option); 
        // $form->question3 = $request->question3; 
        // $form->question4 = $request->dropdown; 
        // $form->question5 = $request->question5;   
        $form->save();
       // $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/korber-enabling-digitization-pharma-biotech-production-whitepaper.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'question1' => $request->question1,
            'question2' => $request->question2,
            // 'question2' => implode(',',$request->option),
            // 'question3' => $request->question3,
            // 'question4' => $request->dropdown,
            // 'question5' => $request->question5,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
          
            
            'site_name'=>'pharmafocusasia',
           // 'email_updates' => $request->email_updates ?? 'No',
           // 'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new2', $data, function($message) use($data){
              //  $message->to('pushpalatha@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('merckSingleusetecchnology.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/merck-single-use-tecchnology',compact('countries'));
}
public function merckmobiussingleuseInfographic(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
        $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/Single Use Infographic.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
           // 'email_updates' => $request->email_updates ?? 'No',
           'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
              //  $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_Infographic',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('merckmobiussingleuseInfographic.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/merck-mobius-single-use-infographic',compact('countries'));
}
public function merckmobiussingleuseultimusfilmtechBrief(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
        $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/MK_DS12004EN_Novaseptum SURe_Datasheet_MRK.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
           // 'email_updates' => $request->email_updates ?? 'No',
           'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             //  $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('merckmobiussingleuseultimusfilmtechBrief.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/merck-mobius-single-use-ultimus-film-tech-brief',compact('countries'));
}
public function merckmobiusSterilizationofsingleuseAssemblies(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
        $form->message = $request->description; 
        $form->question1 = $request->question1; 
        $form->question2 = $request->question2; 
       //  $form->question2 = implode(',',$request->option); 
        // $form->question3 = $request->question3; 
        // $form->question4 = $request->dropdown; 
        // $form->question5 = $request->question5;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/Strategies to Address Supply Constraints Related to Sterilization of Single-Use Assemblies.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'question1' => $request->question1,
            'question2' => $request->question2,
            // 'question2' => implode(',',$request->option),
            // 'question3' => $request->question3,
            // 'question4' => $request->dropdown,
            // 'question5' => $request->question5,
            'site_name'=>'pharmafocusasia',
           // 'email_updates' => $request->email_updates ?? 'No',
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new2', $data, function($message) use($data){
        //  $message->to('pushpalatha@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_Strategies',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('merckmobiusSterilizationofsingleuseAssemblies.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/merck-mobius-single-use-technology-Sterilization-of-single-use-assemblies',compact('countries'));
}

public function merckmobiussingleuseContactUs(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
       $form->message = $request->description; 
       $form->question1 = $request->question1; 
        $form->question2 = $request->question2; 
    //    $form->question3 = $request->question3; 
    //    $form->question4 = $request->dropdown; 
    //    $form->question5 = $request->question5;   
        $form->save();
     //   $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/Strategies to Address Supply Constraints Related to Sterilization of Single-Use Assemblies.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'question1' => $request->question1,
            'question2' =>$request->question2,
            // 'question3' => $request->question3,
            // 'question4' => $request->dropdown,
            // 'question5' => $request->question5,
            'site_name'=>'pharmafocusasia',
           // 'email_updates' => $request->email_updates ?? 'No',
           // 'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new2', $data, function($message) use($data){
           //  $message->to('pushpalatha@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('merckmobiussingleuseContactUs.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/merck-mobius-single-use-contact-us',compact('countries'));
}

public function merckmobiusultimusfilm(Request $request){
    
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
     
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
       $form->message = $request->description;  
       $form->question1 = $request->question1; 
       $form->question2 = $request->question2; 
    //    $form->question2 = implode(',',$request->option); 
    //    $form->question3 = $request->question3; 
    //    $form->question4 = $request->dropdown; 
    //    $form->question5 = $request->question5; 
       $form->message = $request->description;
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/tb5661en-ultimus-film-tech-brief-mk.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'question1' => $request->question1,
            'question2' => $request->question2,
            // 'question2' => implode(',',$request->option),
            // 'question3' => $request->question3,
            // 'question4' => $request->dropdown,
            // 'question5' => $request->question5,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
           // 'email_updates' => $request->email_updates ?? 'No',
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new2', $data, function($message) use($data){
             // $message->to('pushpalatha@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('merckmobiusultimusfilm.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/merck-mobius-single-use-innovations-ultimus-film',compact('countries'));
}

public function merckmobiusnovaseptumSure(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
        //  dd($request);
           $form = new Flatpage();
           $form->firstname = $request->firstname;
           $form->lastname = $request->lastname;
           $form->phone = $request->phone;
           $form->email = $request->email;
           $form->company = $request->company;
           $form->country = $request->country;
           $form->type = $request->type;
          // $form->title = $request->job_title;
          $form->city = $request->city;
          $form->zip_code = $request->zip_code;
           $form->declaration = $request->declaration;
          $form->message = $request->description;  
          $form->question1 = $request->question1; 
          $form->question2 = $request->question2; 
          // $form->question2 = implode(',',$request->option); 
        //   $form->question3 = $request->question3; 
        //   $form->question4 = $request->dropdown; 
        //   $form->question5 = $request->question5; 
          $form->message = $request->description;
           $form->save();
           $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/novaseptum-sure-datasheet-ds12004en-mk.pdf"; 
           // send email admin//
           $data = [
               'name'=>$request->firstname,
               'first_name' => $request->firstname,
               'last_name' => $request->lastname,
               'phone' => $request->phone,
               'company' => $request->company,
               'country' => $request->country,
               'email' => $request->email,
               'type' => $request->type,
               'job_title' => $request->job_title,
               'question1' => $request->question1,
               'question2' => $request->question2,
               //'question2' => implode(',',$request->option),
            //    'question3' => $request->question3,
            //    'question4' => $request->dropdown,
            //    'question5' => $request->question5,
               'declaration' => $request->declaration,
               'description' => $request->description,
               'city' => $request->city,
               'zip_code' => $request->zip_code,
               'site_name'=>'pharmafocusasia',
              // 'email_updates' => $request->email_updates ?? 'No',
               'pdf' => $pdf,
               'subject_admin' => $request->admin_subject,
               'subject_client' => $request->client_subject,
               'client_message' => $request->client_message,
              
              ];
         // admin mail
               Mail::send('emails.flatpages.admin-new2', $data, function($message) use($data){
                 // $message->to('pushpalatha@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
                $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                });
          //client Mail
               Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
               $message->to($data['email']);
               $message->subject($data['subject_client']);
   
                    });
          return redirect()->route('merckmobiusnovaseptumSure.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
           }
    return view('flatpages/merck-mobius-single-use-innovations-novaseptum-sure',compact('countries'));
}
public function thermofisherchemicalimprovingSeparation(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->email_updates = $request->email_updates;
        $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/TFS_APAC_Improving Separation_APAC_0123_v2.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             //   $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalimprovingSeparation.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemicalimproving-separation',compact('countries'));
}
public function thermofisherchemicalsPharmaceuticalApplications(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->email_updates = $request->email_updates;
        $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/[KRSE] TFS_Biopharma_Pharma_Brochure_Direct_TS_0323v1.pdf"; 
        $pdf1 =  "https://industry.pharmafocusasia.com/promotions/pdf/[ENRO] TFS_Biopharma_Pharma_Brochure_Direct_TS_0323v1.pdf"; 
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'pdf1' => $pdf1,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             //   $message->to('bhavani@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalsPharmaceuticalApplications.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemicals-pharmaceutical-applications',compact('countries'));
}
public function thermofisherchemicalsChromatographysolvents(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->email_updates = $request->email_updates;
        $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/TFS_ChromaConsolidated_SEATW_0523_v1.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
            //   $message->to('bhavani@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalsChromatographysolvents.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemicals-chromatography-solvents',compact('countries'));
}
public function thermofisherchemicalsmobilephasesolventsandReagents(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       // $form->title = $request->job_title;
       $form->city = $request->city;
       $form->email_updates = $request->email_updates;
        $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/TFS_Mobile Phase Solvents and Reagents_APAC_0822_v1[91].pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             //  $message->to('bhavani@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalsmobilephasesolventsandReagents.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemicals-mobile-phase-solvents-and-reagents',compact('countries'));
}

public function tfdownstreampurification(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
        $form->title = $request->job_title;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
      // $form->email_updates = $request->email_updates;
       // $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/tf-downstream-purification.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
              // $message->to('srunik@ochre-media.com');
           $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('tfdownstreampurification.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/tf-downstream-purification',compact('countries'));
}



public function thermofisherChemicalCustomBulkAndAnalyticalSolvents(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/TFS_Biopharma_Pharma_Brochure_Direct_TS_0323v1.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             //  $message->to('bhavani@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherChemicalCustomBulkAndAnalyticalSolvents.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher-chemical-custom-bulk-and-analytical-solvents',compact('countries'));
}
public function tfdownstreampurificationJP(){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/tf-downstream-purification-jp',compact('countries'));
}
public function tfdownstreampurificationCN(){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/tf-downstream-purification-cn',compact('countries'));
}
public function tfdownstreampurificationKR(){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/tf-downstream-purification-kr',compact('countries'));
}
public function thermofisherchemicalimprovingSeparationjp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemical-improving-separation-jp.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
          //$message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalimprovingSeparationjp.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemical-improving-separation-jp',compact('countries'));
}
public function thermofisherchemicalspharmaceuticalapplicationsjp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
       $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemicals-pharmaceutical-applications-jp.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
           // $message->to('srunik@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalspharmaceuticalapplicationsjp.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemicals-pharmaceutical-applications-jp',compact('countries'));
}
public function thermofisherchemicalcustombulkandanalyticalsolventsjp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemical-custom-bulk-and-analytical-solvents-jp.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
            //$message->to('srunik@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalcustombulkandanalyticalsolventsjp.success')->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-chemical-custom-bulk-and-analytical-solvents-jp',compact('countries'));
}
public function thermofisherchemicalschromatographysolventsjp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemicals-chromatography-solvents-jp.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
           // $message->to('srunik@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalschromatographysolventsjp.success')->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-chemicals-chromatography-solvents-jp',compact('countries'));
}
public function thermofisherchemicalsmobilephasesolventsandreagentsjp(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
       $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemicals-mobile-phase-solvents-and-reagents-jp.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
           // $message->to('srunik@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalsmobilephasesolventsandreagentsjp.success')->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-chemicals-mobile-phase-solvents-and-reagents-jp',compact('countries'));
}

public function thermofisherchemicalimprovingseparationkr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemical-improving-separation-kr.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
           // $message->to('srunik@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalimprovingseparationkr.success')->with(['thank_message' => $request->input('thank_message')]);
        }

    return view('flatpages/thermofisher/thermofisher-chemical-improving-separation-kr',compact('countries'));
}

public function thermofisherchemicalspharmaceuticalapplicationskr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemicals-pharmaceutical-applications-kr.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
            // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalspharmaceuticalapplicationskr.success')->with(['thank_message' => $request->input('thank_message')]);
        }

    return view('flatpages/thermofisher/thermofisher-chemicals-pharmaceutical-applications-kr',compact('countries'));
}

public function thermofisherchemicalcustombulkandanalyticalsolventskr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemical-custom-bulk-and-analytical-solvents-kr.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
            // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalcustombulkandanalyticalsolventskr.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemical-custom-bulk-and-analytical-solvents-kr',compact('countries'));
}
public function thermofisherchemicalschromatographysolventskr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemicals-chromatography-solvents-kr.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalschromatographysolventskr.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemicals-chromatography-solvents-kr',compact('countries'));
}
public function thermofisherchemicalsmobilephasesolventsandreagentskr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-chemicals-mobile-phase-solvents-and-reagents-kr.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherchemicalsmobilephasesolventsandreagentskr.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-chemicals-mobile-phase-solvents-and-reagents-kr',compact('countries'));
}
public function mercksmobius(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
       // $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
      // $form->email_updates = $request->email_updates;
        $form->message = $request->comments; 
        $form->intrested = $request->intrested;
        if($request->from == 'first'){
      $form->products_interest = implode(',', $request->declaration);
        }else{
            $form->products_interest = implode(',', $request->declaration1);
        }

        $form->save();
        $pdf ="https://industry.pharmafocusasia.com/promotions/pdf/mercks-mobius.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
           // 'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'products_interest' => $form->products_interest,

            'description' => $request->comments,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'intrested' => $request->intrested,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             // $message->to('pushpalatha@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('mercksmobius.success')->with(['thank_message' => $request->input('thank_message')]);
        }
return view('flatpages/mercks-mobius',compact('countries'));
}
public function lonzacapsugelenprotectcapsule(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
      $form->title = $request->job_title;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       //$form->declaration = $request->intrested;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/lonza-capsugel-enprotect-capsule.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            //'declaration' => $request->intrested,
            //'description' => $request->description,
            //'city' => $request->city,
            //'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
             // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('lonzacapsugelenprotectcapsule.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/lonza-capsugel-enprotect-capsule',compact('countries'));

}

public function thermofisherpeptonevaccineappnote(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->title = $request->job_title;
  
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->intrested;
       $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-peptone-vaccine-app-note.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->intrested,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new1', $data, function($message) use($data){
              //$message->to('srunik@ochre-media.com');
              //$message->to('pushpalatha@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherpeptonevaccineappnote.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher-peptone-vaccine-app-note',compact('countries'));
}


public function sartoriusoctetsystems(){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    
    return view('flatpages/sartorius-octet-systems',compact('countries'));
}

public function sartoriusblispr(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){

        $interest  = $request->areas_of_interest;
       

        $test='';
        if($interest != ""){
          foreach($interest  as $key=> $info) {
              $test= $info;

          if($test == 'label-free-biosensor-analysis-applications-guide'){
            $pdf1 = "https://industry.pharmafocusasia.com/promotions/pdf/label-free-bli-spr-biosensor-analysis-octet-compendium.pdf";
        }
          if($test == 'systems-superior-performance-unrivaled-flexibility'){
            $pdf2 = "https://industry.pharmafocusasia.com/promotions/pdf/octet-systems-brochure-en-sartorius-data.pdf";
        }
    }   
       
      }

     
      if($interest != ""){
        $updates = implode(",",$request->areas_of_interest);
        }else{
            $updates ="";
        }
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
        $form->areas_of_interest  =  $updates;
       //$form->areas_of_interest = implode(",", $request->areas_of_interest);
       $form->title = $request->job_title;
       $form->address = $request->address;
       //$form->areas_of_interest = $request->areas_of_interest;
       $form->industry = $request->industry;
       $form->title = $request->job_title;
       //$form->city = $request->city;
      $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->declaration;
       $form->message = $request->description;  
       $form->save();


        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'address'=>$request->address,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'areas_of_interest'=>implode(",",$request->areas_of_interest),
            'zipcode' => $request->zip_code,
            'industry'=>$request->industry,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf1'=>$pdf1??'',
            'pdf2'=>$pdf2??'',
            //'ebook'=>$ebook,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];

                   
      // admin mail
            Mail::send('emails.flatpages.admin-sartorious', $data, function($message) use($data){
             // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg2',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('sartoriusblispr.success')->with(['thank_message' => $request->input('thank_message')]);
        }      
    
    return view('flatpages/sartorius-bli-spr',compact('countries'));
}

public function thermofisherproteinandcellflowcytometry(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->areas_of_interest = implode(",", $request->areas_of_interest);
       $form->email_updates = $request->email_updates;
       $form->intrested = $request->intrested;
       
       $form->declaration = $request->declaration;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-protein-and-cell-flow-cytometry.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'intrested' =>$request->intrested,
            'description' => $request->description,
            'areas_of_interest' => implode(",", $request->areas_of_interest),
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'declaration' =>$request->declaration,
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin_protein_cellanalysis', $data, function($message) use($data){
         // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_protein_cellanalysis',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherproteinandcellflowcytometry.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-protein-and-cell-flow-cytometry',compact('countries'));
}

public function thermofisherproteinandcellflowcytometryprotocols(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->areas_of_interest = implode(",", $request->areas_of_interest);
       $form->email_updates = $request->email_updates;
       $form->intrested = $request->intrested;
       
       $form->declaration = $request->declaration;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-protein-and-cell-flow-cytometry-protocols.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'intrested' =>$request->intrested,
            'description' => $request->description,
            'areas_of_interest' => implode(",", $request->areas_of_interest),
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'declaration' =>$request->declaration,
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin_protein_cellanalysis', $data, function($message) use($data){
         // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_protein_cellanalysis2',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherproteinandcellflowcytometryprotocols.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-protein-and-cell-flow-cytometry-protocols',compact('countries'));
}

public function thermofisherproteinandcellattunecytpixflowcytometer(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->areas_of_interest = implode(",", $request->areas_of_interest);
       $form->email_updates = $request->email_updates;
       $form->intrested = $request->intrested;
       
       $form->declaration = $request->declaration;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-protein-and-cell-attune-cytpix-flow-cytometer.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'intrested' =>$request->intrested,
            'description' => $request->description,
            'areas_of_interest' => implode(",", $request->areas_of_interest),
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'declaration' =>$request->declaration,
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin_protein_cellanalysis', $data, function($message) use($data){
         //$message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_protein_cellanalysis3',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherproteinandcellattunecytpixflowcytometer.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-protein-and-cell-attune-cytpix-flow-cytometer',compact('countries'));
}

public function thermofisherproteinandcellflowcytometerevalutionguide(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->areas_of_interest = implode(",", $request->areas_of_interest);
       $form->email_updates = $request->email_updates;
       $form->intrested = $request->intrested;
       
       $form->declaration = $request->declaration;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-protein-and-cell-flow-cytometer-evalution-guide.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'intrested' =>$request->intrested,
            'description' => $request->description,
            'areas_of_interest' => implode(",", $request->areas_of_interest),
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'declaration' =>$request->declaration,
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin_protein_cellanalysis', $data, function($message) use($data){
        // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_protein_cellanalysis4',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherproteinandcellflowcytometerevalutionguide.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-protein-and-cell-flow-cytometer-evalution-guide',compact('countries'));
}

public function thermofisherrapidmycoplasmatesting(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->title = $request->job_title;
      
       $form->declaration = $request->declaration;
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
      // $form->declaration = $request->intrested;
       //$form->message = $request->description;  
       $form->save();
       
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-rapid-mycoplasma-testing.pdf"; 
        
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            //'declaration' => $request->intrested,
           // 'description' => $request->description,
          
            'city' => $request->city,
            'declaration' =>$request->declaration,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
             // $message->to('srunik@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherrapidmycoplasmatesting.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-rapid-mycoplasma-testing',compact('countries'));

}

public function borasextrusionspheronizationengineeredfortodayscontrolledreleaseforms(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->title = $request->job_title;
  
       //$form->city = $request->city;
      // $form->zip_code = $request->zip_code;
       $form->email_updates = $request->email_updates;
       $form->declaration = $request->declaration;
       $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/bora-extrusion-spheronization.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new1', $data, function($message) use($data){
             // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('borasextrusionspheronizationengineeredfortodayscontrolledreleaseforms.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/boras-extrusion-spheronization-engineered-for-todays-controlled-release-forms',compact('countries'));

}


public function thermofisherpeptonevaccineappnotejp(){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher-peptone-vaccine-app-note-jp',compact('countries'));
}

public function thermofisherpeptonevaccineappnotecn(){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher-peptone-vaccine-app-note-cn',compact('countries'));
}

public function thermofisherpeptonevaccineappnotekr(){
    $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
    return view('flatpages/thermofisher-peptone-vaccine-app-note-kr',compact('countries'));
}

public function mercksultimusfilms(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
       // $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
      // $form->email_updates = $request->email_updates;
        $form->message = $request->comments; 
        $form->intrested = $request->intrested;
        if($request->from == 'first'){
      $form->products_interest = implode(',', $request->declaration);
        }else{
            $form->products_interest = implode(',', $request->declaration1);
        }

        $form->save();
        $pdf ="https://industry.pharmafocusasia.com/promotions/pdf/mercks-mobius.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
           // 'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'products_interest' => $form->products_interest,

            'description' => $request->comments,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'intrested' => $request->intrested,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             // $message->to('harinath@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg_merck',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('mercksultimusfilms.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/mercks-ultimus-films',compact('countries'));
}

public function thermofisherpaneldesignservice(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       //$form->areas_of_interest = implode(",", $request->areas_of_interest);
       $form->email_updates = $request->email_updates;
       $form->intrested = $request->intrested;
       
       $form->declaration = $request->declaration;
     //   $form->message = $request->description;  
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/thermofisher-panel-design-servicess.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'intrested' =>$request->intrested,
            'description' => $request->description,
            //'areas_of_interest' => implode(",", $request->areas_of_interest),
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'declaration' =>$request->declaration,
            'email_updates' => $request->email_updates,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin_tf_panel_design_service', $data, function($message) use($data){
        // $message->to('srunik@ochre-media.com');
          $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_tf_panel_design_service',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherpaneldesignservice.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/thermofisher/thermofisher-panel-design-service',compact('countries'));
}

public function singleusesupportgmbhwhitepaper(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
         
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->email = $request->email;
        $form->type = $request->type;
        $form->save();
        $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/single-use-support-gmbh-whitepaper.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'type' => $request->type,
            'site_name'=>'pharmafocusasia',          
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
        // $message->to('srunik@ochre-media.com');
         $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('singleusesupportgmbhwhitepaper.success')->with(['thank_message' => $request->input('thank_message')]);
        
    }
    return view('flatpages/single-use-support-gmbh-whitepaper',compact('countries'));
}

public function medablethedigitalfutureisnow(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
       
      $form = new Flatpage();
      $form->firstname = $request->firstname;
      $form->lastname = $request->lastname;
      $form->phone = $request->phone;
      $form->email = $request->email;
      $form->company = $request->company;
      $form->country = $request->country;
      $form->type = $request->type;
      $form->state = $request->state;
     $form->message = $request->description;  
     $form->title = $request->job_title;
      $form->save();
      $pdf =  "https://industry.pharmafocusasia.com/promotions/pdf/medable-the-digital-future-is-now.pdf"; 
     // send email admin//
      $data = [
          'name'=>$request->firstname,
          'first_name' => $request->firstname,
          'last_name' => $request->lastname,
          'phone' => $request->phone,
          'company' => $request->company,
          'country' => $request->country,
          'email' => $request->email,
          'type' => $request->type,
          'state'=>$request->state,
          'job_title' => $request->job_title,
          'description' => $request->description,
          'site_name'=>'pharmafocusasia',
          'pdf' => $pdf,
          'subject_admin' => $request->admin_subject,
          'subject_client' => $request->client_subject,
          'client_message' => $request->client_message,
         
         ];
    // admin mail
          Mail::send('emails.flatpages.admin', $data, function($message) use($data){
      //$message->to('srunik@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
           $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
           });
     //client Mail
          Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
          $message->to($data['email']);
          $message->subject($data['subject_client']);

               });
     return redirect()->route('medablethedigitalfutureisnow.success')->with(['thank_message' => $request->input('thank_message')]);
      }
 return view('flatpages/medable-the-digital-future-is-now',compact('countries'));
}

public function mercksingleusesupplyprogram(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
       
        $form = new Flatpage();
        $form->firstname = $request->firstname;
       // $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->zip_code = $request->zip_code;
      // $form->email_updates = $request->email_updates;
      $form->declaration = $request->declaration;
        $form->message = $request->comments; 
        $form->intrested = $request->intrested;
        
      $form->products_interest = implode(',', $request->products_interest);
        

        $form->save();
        $pdf ="https://industry.pharmafocusasia.com/promotions/pdf/merck-single-use-supply-program.pdf"; 
       // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
           // 'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'products_interest' => implode(',', $request->products_interest),
        
            'declaration'  => $request->declaration??'Yes',
            'description' => $request->comments,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'site_name'=>'pharmafocusasia',
            'intrested' => $request->intrested,
            'pdf' => $pdf,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
           
           ];
      // admin mail
            Mail::send('emails.flatpages.admin-new', $data, function($message) use($data){
             // $message->to('srunik@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('mercksingleusesupplyprogram.success')->with(['thank_message' => $request->input('thank_message')]);
        }
    return view('flatpages/merck-single-use-supply-program',compact('countries'));
}
public function eppendorfcelltherapy(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
        
        $interest  = $request->areas_of_interest;
        $test='';
        if($interest != ""){
            foreach($interest  as $key=> $info) {
                $test= $info;
               


          if($test =='BioFlo'){
            $pdf1="https://industry.pharmafocusasia.com/promotions/pdf/biofo.pdf"; 
          }
          if($test =='Application Note'){
            $pdf2="https://industry.pharmafocusasia.com/promotions/pdf/applicationnote.pdf"; 
          }
          if($test =='Free eBook'){
            $pdf3="https://industry.pharmafocusasia.com/promotions/pdf/ebook.pdf";  
          }
         
        }
    }

          if($interest != ""){
            $updates = implode(",",$request->areas_of_interest);
            }else{
                $updates ="";
            }
          $form = new Flatpage();
          $form->firstname = $request->firstname;
          $form->lastname = $request->lastname;
          $form->phone = $request->phone;
          $form->email = $request->email;
          $form->company = $request->company;
          $form->country = $request->country;
          $form->type = $request->type;
          $form->city = $request->city;
          $form->title = $request->job_title;
          //$form->intrested = implode(",",$request->intrested);
          $areas_of_interest= $updates;
         // $test='';
          $form->save();
         
          
        
          $data = [
              'name'=>$request->firstname,
              'first_name' => $request->firstname,
              'last_name' => $request->lastname,
              'phone' => $request->phone,
              'company' => $request->company,
              'country' => $request->country,
              'job_title'=>$request->job_title,
              'type' => $request->type,
              'email' => $request->email,
              'areas_of_interest'=>$updates,
              //'intrested' =>implode(",", $request->intrested),
              'site_name'=>'pharmafocusasia',
               'subject_admin' => $request->admin_subject,
              'subject_client' => $request->client_subject,
              'client_message' => $request->client_message,
              'pdf1' => $pdf1 ?? '',
              'pdf2' => $pdf2 ?? '',
              'pdf3' => $pdf3 ?? '',
              'pdf4' => $pdf4 ?? '',
          
             ];
        // admin mail
              Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('srunik@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
               $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
               });
         //client Mail
              Mail::send('emails.flatpages.client_msg_eppendorf',$data, function($message) use($data){
              $message->to($data['email']);
              $message->subject($data['subject_client']);
  
                   });
         return redirect()->route('eppendorfcelltherapy.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                  }
    return view('flatpages/eppendorf-cell-therapy',compact('countries'));
}
public function thermofishersingleusedynadrivedynaspin(Request $request)
{
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    $interest  = $request->areas_of_interest;


    if($interest != ""){
        $updates = implode(",",$request->areas_of_interest);
        }else{
            $updates ="";
        }


    if ($request->isMethod('post')) {

        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
        $form->city = $request->city;
        $form->title=$request->job_title;
        $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
        $form->message = $request->description;
        $form->email_updates=$request->email_updates;
        $form->save();

        // Set $test based on some condition, for example, using $request->type
      

      
        if ($request->from  == "applicationnote1") {
            $pdf1 = "https://industry.pharmafocusasia.com/promotions/pdf/applicationnote1.pdf";
        } elseif ($request->from  == "applicationnote2") {
            $pdf2 = "https://industry.pharmafocusasia.com/promotions/pdf/applicationnote2.pdf";
        }

        // send email admin//
        $data = [
            'name' => $request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'email_updates'=>$request->email_updates,
            'areas_of_interest' =>  $updates,
            'site_name' => 'pharmafocusasia',
            'pdf1' => $pdf1 ?? '',
            'pdf2' => $pdf2 ?? '',
            'pdf3' => $pdf3 ?? '',
            'pdf4' => $pdf4 ?? '',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,

        ];

        // admin mail
        Mail::send('emails.flatpages.admin', $data, function ($message) use ($data) {
            //$message->to('srunik@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
            $message->subject($data['subject_admin'] . '| ' . $data['email'] . ' | Client Retention Projects.');
        });

        // client Mail
        Mail::send('emails.flatpages.client_full_msg_dyson', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });

        return redirect()->route('thermofishersingleusedynadrivedynaspin.success')
            ->with(['status' => 'true'])
            ->with(['thank_message' => $request->input('thank_message')]);
    }

    return view('flatpages/thermofisher/thermofisher-single-use-dynadrive-dynaspin', compact('countries'));
}

public function thermofishersingleusedynachromresins(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    
    $interest  = $request->areas_of_interest;


    if($interest != ""){
        $updates = implode(",",$request->areas_of_interest);
        }else{
            $updates ="";
        }

    if ($request->isMethod('post')) {

        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->title=$request->job_title;
        $form->type = $request->type;
        $form->city = $request->city;
        $form->zip_code = $request->zip_code;
        $form->email_updates=$request->email_updates;
        $form->declaration = $request->declaration;
        $form->message = $request->description;
        $form->save();

        // Set $test based on some condition, for example, using $request->type
      

        if ($request->from == "dynachrom") {
            $pdf1 = "https://industry.pharmafocusasia.com/promotions/pdf/application-note.pdf";
        } 
        elseif ($request->from  == "ebook") {
            $pdf2 = "https://industry.pharmafocusasia.com/promotions/pdf/eBook-October-2023.pdf";
        } 

        // send email admin//
        $data = [
            'name' => $request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'email_updates'=>$request->email_updates,
            'areas_of_interest' =>  $updates,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'site_name' => 'pharmafocusasia',
            'pdf1' => $pdf1 ?? '',
            'pdf2' => $pdf2 ?? '',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,

        ];

        // admin mail
        Mail::send('emails.flatpages.admin', $data, function ($message) use ($data) {
           // $message->to('srunik@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
            $message->subject($data['subject_admin'] . '| ' . $data['email'] . ' | Client Retention Projects.');
        });

        // client Mail
        Mail::send('emails.flatpages.client_full_msg_dyson', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });

        return redirect()->route('thermofishersingleusedynachromresins.success')
            ->with(['status' => 'true'])
            ->with(['thank_message' => $request->input('thank_message')]);
    }

    return view('flatpages/thermofisher/thermofisher-single-use-dynachrom-resins',compact('countries'));
}
public function thermofishersingleuseflexiblerigid(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    $interest  = $request->areas_of_interest;


    if($interest != ""){
        $updates = implode(",",$request->areas_of_interest);
        }else{
            $updates ="";
        }
    if ($request->isMethod('post')) {

        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->email_updates=$request->email_updates;
        $form->title=$request->job_title;
        $form->type = $request->type;
        $form->city = $request->city;
        $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
        $form->message = $request->description;
        $form->save();

        // Set $test based on some condition, for example, using $request->type
      

        if ($request->from == "flexiblesolutions") {
            $pdf1 = "https://industry.pharmafocusasia.com/promotions/pdf/flexible-solutions.pdf";
        } 
        elseif ($request->from  == "readytousebottles") {
            $pdf2 = "https://industry.pharmafocusasia.com/promotions/pdf/ready-to-use-standard-bottles.pdf";
        } 

        // send email admin//
        $data = [
            'name' => $request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'declaration' => $request->declaration,
            'email_updates'=>$request->email_updates,
            'areas_of_interest' =>  $updates,
            'description' => $request->description,
            'site_name' => 'pharmafocusasia',
            'pdf1' => $pdf1 ?? '',
            'pdf2' => $pdf2 ?? '',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,

        ];

        // admin mail
        Mail::send('emails.flatpages.admin', $data, function ($message) use ($data) {
          // $message->to('srunik@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
            $message->subject($data['subject_admin'] . '| ' . $data['email'] . ' | Client Retention Projects.');
        });

        // client Mail
        Mail::send('emails.flatpages.client_full_msg_dyson', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });

        return redirect()->route('thermofishersingleuseflexiblerigid.success')
            ->with(['status' => 'true'])
            ->with(['thank_message' => $request->input('thank_message')]);
    }

    return view('flatpages/thermofisher/thermofisher-single-use-flexible-rigid',compact('countries'));
}
public function thermofishersingleusefillfinish(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    $interest  = $request->areas_of_interest;


    if($interest != ""){
        $updates = implode(",",$request->areas_of_interest);
        }else{
            $updates ="";
        }
    if ($request->isMethod('post')) {

        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email_updates=$request->email_updates;
        $form->email = $request->email;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->title=$request->job_title;
        $form->type = $request->type;
        $form->city = $request->city;
        $form->zip_code = $request->zip_code;
        $form->declaration = $request->declaration;
        $form->message = $request->description;
        $form->save();

        // Set $test based on some condition, for example, using $request->type
      

        if ($request->from == "fillfinishsolution") {
            $pdf1 = "https://industry.pharmafocusasia.com/promotions/pdf/fill-finish-solution.pdf";
        } 
        elseif ($request->from  == "fillfinshconstraints") {
            $pdf2 = "https://industry.pharmafocusasia.com/promotions/pdf/fill-finish-constraints.pdf";
        } 

        // send email admin//
        $data = [
            'name' => $request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'email' => $request->email,
            'type' => $request->type,
            'job_title' => $request->job_title,
            'email_updates'=>$request->email_updates,
            'areas_of_interest' =>  $updates,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'site_name' => 'pharmafocusasia',
            'pdf1' => $pdf1 ?? '',
            'pdf2' => $pdf2 ?? '',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,

        ];

        // admin mail
        Mail::send('emails.flatpages.admin', $data, function ($message) use ($data) {
           //$message->to('srunik@ochre-media.com');
            $message->to('omplenquiry@ochre-media.com');
            $message->subject($data['subject_admin'] . '| ' . $data['email'] . ' | Client Retention Projects.');
        });

        // client Mail
        Mail::send('emails.flatpages.client_full_msg_dyson', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });

        return redirect()->route('thermofishersingleusefillfinish.success')
            ->with(['status' => 'true'])
            ->with(['thank_message' => $request->input('thank_message')]);
    }
    return view('flatpages/thermofisher/thermofisher-single-use-fill-finish',compact('countries'));
}

public function thermofisherantibodytherapeuticpolishinghic(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->title = $request->job_title;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->city = $request->city;
       $form->message = $request->description;
      $form->products_interest=$request->products_interest;
       $form->zip_code = $request->zip_code;
       $form->areas_of_interest  = $request->areas_of_interest;
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/eBook-Antibody-2023.pdf";      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'city' => $request->city,
            'products_interest'=>$request->products_interest,
            'description' => $request->description,
            'site_name'=>'pharmafocusasia',
            'areas_of_interest' => $request->areas_of_interest,
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,
            'pdf' => $pdf ?? '',
           
           
           ];
      // admin mail
      
            Mail::send('emails.flatpages.admin_antibody', $data, function($message) use($data){
          // $message->to('srunik@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_msg_antibody',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('thermofisherantibodytherapeuticpolishinghic.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
    return view('flatpages/thermofisher/thermofisher-antibody-therapeutic-polishing-hic',compact('countries'));
}

public function lonzabiologicsderiskjourneyclinicmanufacturabilityexpression(){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    return view('flatpages/lonza-biologics-derisk-journey-clinic-manufacturability-expression',compact('countries'));
}

public function earlydrugdevelopmentservices(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    if(\Request::isMethod('post')){
        $form = new Flatpage();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->title = $request->job_title;
        $form->company = $request->company;
        $form->country = $request->country;
        $form->type = $request->type;
       $form->declaration = $request->declaration;
       $form->message = $request->description;
       $form->zip_code = $request->zip_code;
        $form->save();      
        // send email admin//
        $data = [
            'name'=>$request->firstname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'type' => $request->type,
            'email' => $request->email,
            'zipcode'=> $request->zip_code,
            'declaration' => $request->declaration,
            'description' => $request->description,
            'site_name'=>'pharmafocusasia',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'job_title'=>$request->job_title,    
           ];
      // admin mail
      
            Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('srunik@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
             $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
             });
       //client Mail
            Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
            $message->to($data['email']);
            $message->subject($data['subject_client']);

                 });
       return redirect()->route('earlydrugdevelopmentservices.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);  
}
    return view('flatpages/lonza-early-development-services',compact('countries'));
}

public function lonzawhitepapersderiskbiologicsexpression(Request $request){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    
    if(\Request::isMethod('post')){
        //  return $request;  
          $interest  = $request->areas_of_interest;
         
          $pdf1 = '';
          $pdf2 = '';
          $pdf3 = '';

          $test='';
          if($interest != ""){
            foreach($interest  as $key=> $info) {
                $test= $info;
               
            if($test == 'silico-1'){
                $pdf1 ="https://industry.pharmafocusasia.com/promotions/pdf/De-Risk-Biologics-WhitePaper1.pdf";
            }
            if($test == 'immunogenicity-1'){
              $pdf2 ="https://industry.pharmafocusasia.com/promotions/pdf/Immunogenicity-and-Immunotoxicity.pdf";
            }
            if($test == 'material-whitepaper-1'){
              $pdf3 ="https://industry.pharmafocusasia.com/promotions/pdf/Lonza-maximize-value-of-early-phase-material.pdf";
            }
          
            }
        }
        if($interest != ""){
          $updates = implode(",",$request->areas_of_interest);
          }else{
              $updates ="";
          }
      
          
          $form = new Flatpage();
          $form->firstname = $request->firstname;
          $form->lastname = $request->lastname;
          $form->phone = $request->phone;
          $form->email = $request->email;
          $form->company = $request->company;
          $form->country = $request->country;
          $form->type = $request->type;
          $form->title = $request->job_title;
          $form->areas_of_interest  = $updates;
          $form->declaration = $request->declaration;  
        //  dd($form);
          $form->save();

          if($request->assesment == "biologics"){
            $pdf ="https://industry.pharmafocusasia.com/promotions/pdf/De-Risk-Biologics-WhitePaper1.pdf";
          }
          elseif($request->vitro == "immunotoxity"){
            $pdf4 ="https://industry.pharmafocusasia.com/promotions/pdf/Immunogenicity-and-Immunotoxicity.pdf";
          } 
          elseif($request->new == "newOne"){
            $pdf5 ="https://industry.pharmafocusasia.com/promotions/pdf/Lonza-maximize-value-of-early-phase-material.pdf";
          }else{

          }
        
          //$pdf2 ="https://industry.pharmafocusasia.com/promotions/pdf/Immunogenicity-and-Immunotoxicity.pdf";
        //  $pdf="https://industry.pharmafocusasia.com/promotions/pdf/Standard-Catalogue.pdf";      
          // send email admin//
          $data = [
              'name'=>$request->firstname,
              'first_name' => $request->firstname,
              'last_name' => $request->lastname,
              'phone' => $request->phone,
              'company' => $request->company,
              'country' => $request->country,
              'job_title'=>$request->job_title,
              'type' => $request->type,
              'email' => $request->email, 
              'site_name'=>'pharmafocusasia',
              'areas_of_interest' => $updates,
              'declaration' =>$request->declaration, 
              'subject_admin' => $request->admin_subject,
              'subject_client' => $request->client_subject,
              'client_message' => $request->client_message,
             'pdf'=>$pdf ?? '',
             'pdf4'=>$pdf4 ?? '',
             'pdf5'=>$pdf5 ?? '',
              'pdf1' => $pdf1 ?? '',
              'pdf2' => $pdf2 ?? '',
              'pdf3' => $pdf3 ?? '',
              
             ];
        // admin mail
              Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('srunik@ochre-media.com');
        $message->to('omplenquiry@ochre-media.com');
               $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
               });
         //client Mail
              Mail::send('emails.flatpages.client_msg_lonza_whitepapers',$data, function($message) use($data){
              $message->to($data['email']);
              $message->subject($data['subject_client']);
  
                   });

                if ($request->form1 == "silico" ) {
                    return redirect()->route('deriskbiologicsexpression.success')->with(['status' => 'true'])->with(['thank_message' => $request->input('thank_message')]);
                } elseif ($request->form2 == "Immunogenicity") {
                    return redirect()->route('immunogenicityimmunotoxicitytestingchallenges.success')->with(['status' => 'true'])->with(['thank_message' => $request->input('thank_message')]);
                } elseif($request->form3 =="Maximizing"){
                    return redirect()->route('maximizevalueofearlyphasematerial.success')->with(['status' => 'true'])->with(['thank_message' => $request->input('thank_message')]);
                }
            else{
         return redirect()->route('lonzawhitepapersderiskbiologicsexpression.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                  }
                }
    return view('flatpages/lonza-whitepapers-de-risk-biologics-expression',compact('countries'));
}
public function tfgibcoakmediapanel (Request $request){

    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    if(\Request::isMethod('post')){
        //  return $request;  
        //   $interest  = $request->areas_of_interest;
         
         

        //   $test='';
        //   if($interest != ""){
        //     foreach($interest  as $key=> $info) {
        //         $test= $info;
               
        //     if($test == 'vaccine'){
        //         $pdf1 ="https://industry.pharmafocusasia.com/promotions/pdf/vaccine-media-panel-vv.pdf";
        //     }
        //     if($test == 'application'){
        //       $pdf2 ="https://industry.pharmafocusasia.com/promotions/pdf/application-note-gibco.pdf";
        //     }
       
          
        //     }
        // }
        // if($interest != ""){
        //   $updates = implode(",",$request->areas_of_interest);
        //   }else{
        //       $updates ="";
        //   }
        //   if($request->vaccine1 == "media-panel"){
        //     $pdf ="https://industry.pharmafocusasia.com/promotions/pdf/vaccine-media-panel-vv.pdf";
        //   }
        //   elseif($request->application1 == "application-note"){
        //     $pdf3 ="https://industry.pharmafocusasia.com/promotions/pdf/application-note-gibco.pdf";
        //   } 
          
          $form = new Flatpage();
          $form->firstname = $request->firstname;
          $form->lastname = $request->lastname;
          $form->phone = $request->phone;
          $form->email = $request->email;
          $form->company = $request->company;
          $form->country = $request->country;
          $form->type = $request->type;
          $form->city=$request->city;
          $form->title = $request->job_title;
          $form->declaration= $request->declaration;
        //  $form->areas_of_interest  = $updates;
          $form->email_updates = $request->email_updates;  
        //  dd($form);
          $form->save();

 
     
        
         $pdf="https://industry.pharmafocusasia.com/promotions/pdf/application-note-gibco.pdf";      
          // send email admin//
          $data = [
              'name'=>$request->firstname,
              'first_name' => $request->firstname,
              'last_name' => $request->lastname,
              'phone' => $request->phone,
              'company' => $request->company,
              'country' => $request->country,
              'job_title'=>$request->job_title,
              'city'=>$request->city,
              'type' => $request->type,
              'email' => $request->email, 
              'site_name'=>'pharmafocusasia',
             // 'areas_of_interest' => $updates,
              'email_updates' =>$request->email_updates, 
              'subject_admin' => $request->admin_subject,
              'subject_client' => $request->client_subject,
              'client_message' => $request->client_message,
              'declaration' => $request->declaration,
             // 'pdf1' => $pdf1 ?? '',
             // 'pdf2' => $pdf2 ?? '',
              'pdf'=>$pdf??'',
             // 'pdf3'=>$pdf3??'',
            
              
             ];
        // admin mail
              Mail::send('emails.flatpages.admin', $data, function($message) use($data){
         // $message->to('srunik@ochre-media.com');
       $message->to('omplenquiry@ochre-media.com');
               $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
               });
         //client Mail
              Mail::send('emails.flatpages.client_msg_gibco',$data, function($message) use($data){
              $message->to($data['email']);
              $message->subject($data['subject_client']);
  
                   });

         return redirect()->route('tfgibcoakmediapanel.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
                  
                }
    
return view('flatpages/tf-gibco-ak-media-panel',compact('countries'));

}

public function tfgibcoakmediapanelkr (){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    return view('flatpages/tf-gibco-ak-media-panel-kr',compact('countries'));

}


public function tfgibcoakmediapaneljp (){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    return view('flatpages/tf-gibco-ak-media-panel-jp',compact('countries'));

}

public function tfgibcoakmediapanelcn (){
    $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();

    return view('flatpages/tf-gibco-ak-media-panel-cn',compact('countries'));

}

public function standardbiotoolscytof(Request $request){
    $countries=DB::table('countries')->select(DB::raw("title as country_name"))->get();
    if(\Request::isMethod('post')){
        $form=new FlatPage();
        $form->firstname=$request->firstname;
        $form->lastname=$request->lastname;
        $form->email=$request->email;
        $form->phone=$request->phone;
        $form->company=$request->company;
        $form->title=$request->job_title;
        $form->country=$request->country;
        $form->type=$request->type;
        $form->save();
        $pdf="https://industry.pharmafocusasia.com/promotions/pdf/standard-bio-tools-cytof.pdf"; 

        $data=[

            'name'=>$request->firstname.' '.$request->lastname,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'phone' => $request->phone,
            'company' => $request->company,
            'country' => $request->country,
            'job_title'=>$request->job_title,
            'city'=>$request->city,
            'type' => $request->type,
            'email' => $request->email, 
            'site_name'=>'pharmafocusasia',
            'subject_admin' => $request->admin_subject,
            'subject_client' => $request->client_subject,
            'client_message' => $request->client_message,
            'pdf'=>$pdf,
        ];
              // admin mail
              Mail::send('emails.flatpages.admin', $data, function($message) use($data){
                 //$message->to('srunik@ochre-media.com');
              $message->to('omplenquiry@ochre-media.com');
                      $message->subject($data['subject_admin'].'| '.$data['email'].' | Client Retention Projects.');
                      });
                //client Mail
                     Mail::send('emails.flatpages.client_full_msg',$data, function($message) use($data){
                     $message->to($data['email']);
                     $message->subject($data['subject_client']);
         
                          });


        return redirect()->route('standardbiotoolscytof.success')->with(['status'=>'true'])->with(['thank_message' => $request->input('thank_message')]);
    }

    return view('flatpages/standard-bio-tools-cytof',compact('countries'));
}
}






