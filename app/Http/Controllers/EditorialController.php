<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Editorialarticle;
use App\Models\Issue;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Page;
use App\Models\SeoPage;
use App\Models\Advetorial;
use SEOMeta;
use OpenGraph;
use Twitter;

class EditorialController extends HomeController
{

   protected $current_issue; 
    protected $banners;



public function editorialIndex()
{   
    $banners = $this->banners;  
    $this->seoTools('editorialsection');   
    return view('editorial.index',compact('banners'));
}

public function knowledgebankIndex()
{   
    $banners = $this->banners;   
    $this->seoTools('knowledgebank');   
    return view('knowledgebank.index',compact('banners'));
}
public function industryupdatesIndex()
{   
    $banners = $this->banners;   
    $this->seoTools('industryupdates');  
    return view('knowledgebank.industryupdate.index',compact('banners'));
}

public function strategy()
{
    $current_issue =  $this->current_issue;
    $banners = $this->banners;
    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','15')->orderBy('id', 'desc')->distinct()->get()->take(10);
 
   $data_count = Editorialarticle::with('category')->where('active_flag',1)->where('category_id','15')->orderBy('id', 'desc')->distinct()->count();
 
   $this->seoTools('strategy');    
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
}
public function strategyview($slug)
{
  $data=Editorialarticle::with('authors','category')->where('url',$slug)->where('active_flag',1)->where('category_id','15')->first(); 
  //$series=Editorialarticle::with('series')->where('series_id',$data->series_id)->where('active_flag',1)->get();
  if(empty($data)){
    return view('errors.404');
  }    
   
 $banners = $this->banners;
 $this->seoToolsView($data->id); 
 return view('editorial.view',compact('data','banners'));
}

public function researchdevelopment()
{
    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','14')->orderBy('id', 'desc')->distinct()->get()->take(10);
    $banners = $this->banners;
    $current_issue =  $this->current_issue;
    $data_count = Editorialarticle::with('category')->where('active_flag',1)->where('category_id','14')->orderBy('id', 'desc')->distinct()->count();
    $this->seoTools('research-development');    
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
}
public function  researchdevelopmentsview($slug)
{

   $data=Editorialarticle::with('category')->where('url',$slug)->where('active_flag',1)->where('category_id','14')->first(); 
   //$series=Editorialarticle::with('series')->where('series_id',$data->series_id)->where('active_flag',1)->get();  
   if(empty($data)){
    return view('errors.404');
  }        
   $banners = $this->banners;
   $this->seoToolsView($data->id); 
   return view('editorial.view',compact('data','banners'));
}

public function clinicalTrials()
{
    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','13')->orderBy('id', 'desc')->get()->take(10);
  
    $banners = $this->banners;
    $current_issue =  $this->current_issue;
    $data_count = Editorialarticle::with('category')->where('active_flag',1)->where('category_id','13')->orderBy('id', 'desc')->distinct()->count();
    $this->seoTools('clinical-trials');    
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
}

public function clinicalTrialsview($slug)
{

   $data=Editorialarticle::with('category')->where('url',$slug)->where('active_flag', 1)->where('category_id','13')->first();  
  // $series=Editorialarticle::with('series')->where('series_id',$data->series_id)->where('active_flag',1)->get();    
 if(empty($data)){
    return view('errors.404');
  }     
   $banners = $this->banners;
   $this->seoToolsView($data->id); 
   return view('editorial.view',compact('data','banners'));
}


public function manufacturing()
{
    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','12')->orderBy('id', 'desc')->get()->take(10);
     
    $banners = $this->banners;
    $current_issue =  $this->current_issue;
    $data_count = Editorialarticle::with('category')->where('active_flag',1)->where('category_id','12')->orderBy('id', 'desc')->distinct()->count();
    $this->seoTools('manufacturing');    
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
}
public function manufacturingview($slug)
{

   $data=Editorialarticle::with('category')->where('url',$slug)->where('active_flag',1)->where('category_id','12')->first(); 
  // $series=Editorialarticle::with('series')->where('series_id',$data->series_id)->where('active_flag',1)->get();  
   if(empty($data)){
    return view('errors.404');
  }       
   $banners = $this->banners;
   $this->seoToolsView($data->id); 
   return view('editorial.view',compact('data','banners'));
}

public function information()
{

    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','11')->orderBy('id', 'desc')->get()->take(10);
    $banners = $this->banners;
    $current_issue =  $this->current_issue;
    $data_count = Editorialarticle::with('category')->where('active_flag',1)->where('category_id','11')->orderBy('id', 'desc')->distinct()->count();
    $this->seoTools('information-technology');
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
}
public function informationview($slug)
{


 $data=Editorialarticle::with('category')->where('url',$slug)->where('active_flag',1)->where('category_id','11')->first();   
// $series=Editorialarticle::with('series')->where('series_id',$data->series_id)->where('active_flag',1)->get();    
 if(empty($data)){
    return view('errors.404');
  }    
 $banners = $this->banners;
 $this->seoToolsView($data->id); 
 return view('editorial.view',compact('data','banners'));
}

public function expertTalk()
{
    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','10')->orderBy('id', 'desc')->get()->take(10);
    $banners = $this->banners;
    $current_issue =  $this->current_issue;
    $data_count = Editorialarticle::with('category')->where('active_flag',1)->where('category_id','10')->orderBy('id', 'desc')->distinct()->count();
    $this->seoTools('expert-talk');    
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
}
public function expertTalkview($slug)
{

    $data=Editorialarticle::with('category')->where('url',$slug)->where('active_flag',1)->where('category_id','10')->first();  
    //$series=Editorialarticle::with('series')->where('series_id',$data->series_id)->where('active_flag',1)->get();  
    if(empty($data)){
    return view('errors.404');
  }       
    $banners = $this->banners;
    $this->seoToolsView($data->id); 
    return view('editorial.view',compact('data','banners'));
}


public function advertorials()
{

    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','16')->orderBy('id', 'desc')->get()->take(10);
    $banners = $this->banners;
    $current_issue =  $this->current_issue;
    $data_count = Editorialarticle::with('category')->where('active_flag',1)->where('category_id','16')->orderBy('id', 'desc')->distinct()->count();
    //$data_count = Advetorial::where('active_flag','1')->count();
    $this->seoTools(request()->segment(1));  
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
    /*return view('editorial.advtorial',compact('healthcarectg','current_issue','banners','data_count'));*/
}

public function advertorialsview($slug)
{
   $data=Editorialarticle::with('category')->where('url',$slug)->where('active_flag',1)->where('category_id','16')->first();  
   
   //$series=Editorialarticle::with('series')->where('series_id',$data->series_id)->where('active_flag',1)->get();  
   
/*
   $data=Advetorial::where('url',$slug)->where('active_flag',1)->first();*/   
   if(empty($data)){
    return view('errors.404');
  }     
   $banners = $this->banners;
  $this->seoToolsView($data->id); 
   return view('editorial.view',compact('data','banners'));
}

public function facilities()
{
    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','6')->orderBy('id', 'desc')->get()->take(50);
    $banners = $this->banners;
    $current_issue =  $this->current_issue;
    $data_count = Editorialarticle::where('category_id','6')->count();
    $this->seoTools('facilities-operations');
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
}
public function facilitiesview($slug)
{

    $data=Editorialarticle::with('category')->where('url',$slug)->where('category_id','6')->first(); 
    if(empty($data)){
    return view('errors.404');
  }       
    $banners = $this->banners;
    $this->seoToolsView($data->id); 
    return view('editorial.view',compact('data','banners'));
}



public function foreword()
{
    $healthcarectg=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','9')->orderBy('id', 'desc')->distinct()->get()->take(10);
  
    $banners = $this->banners;
    
    $current_issue =  $this->current_issue;
    $data_count = Editorialarticle::with('category')->where('active_flag',1)->where('category_id','9')->orderBy('id', 'desc')->distinct()->count();

    $this->seoTools(request()->segment(1)); 
    return view('editorial.list',compact('healthcarectg','current_issue','banners','data_count'));
}
public function forewordview($slug)
{

    $data=Editorialarticle::with('category')->where('url',$slug)->where('active_flag',1)->where('category_id','9')->first();   
    if(empty($data)){
    return view('errors.404');
  }      
    $banners = $this->banners;
    $this->seoToolsView($data->id); 
    return view('editorial.view',compact('data','banners'));
}


// Load More Result for Editorial section

  public function more($slug,$offset){

      $cat = Category::where('url',$slug)->first();

    $data = Editorialarticle::with('category')->where('category_id',$cat->id)->where('active_flag',1)->orderBy('id','desc')->offset($offset)->limit(10)->get();
     $current_issue =  $this->current_issue;
    return response(view('editorial.loadmore', compact('data','current_issue','cat'))->render());

  }
//   public function industryreportsIndex()
// {   
//     $banners = $this->banners;   
//     // $this->seoTools(' industryreports');
//     return view('knowledgebank.pharmareport.index',compact('banners'));
// }


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

      //seo for view
    public function seoToolsView($id){
    
      $data = Editorialarticle::find($id);        
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
}
