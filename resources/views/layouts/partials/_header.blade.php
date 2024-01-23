<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


 /* For mobile devices */
 @media only screen and (max-width: 600px) {
                .image1 {
                  display:none;
                }
              }
              /* For desktop devices */
              @media only screen and (min-width: 601px) {
                .image2 {
                  display: none;
                }
              }
  .alert-warning{
    padding: 0px;
    background-color: #f03e3e;
    text-align: center;
    color: #fff;
    border:0px;
    border-radius: 0px;
    font-size: 18px;
    font-family: Century Gothic;
  }
  .close{line-height: 14px;}
  .alert .btn-warning {
    font-size: 16px;
    color: #222;
    background-color: #fffe65;
    border-color: #fffe65;
    border-radius: 15px;
  }
</style>
 </br> 
     @php 
     $page_id =  getpage(Request::segment(1));
     @endphp
   
   @if(@$banners) 
      <div class="container pt-2" align="center">
          @foreach($banners as $k=>$homebanner12)   
            @foreach($homebanner12->pagesCount as $j=>$pcount)
              @if($homebanner12->positions[0]->id == 1 and $pcount->id == $page_id)
                @if($homebanner12->type == 'script')
                     {!! $homebanner12->script !!}
                  @else
                    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->img_alt}}">
                     <img class="img-fluid border mt-2" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" loading="lazy" alt="{{$homebanner12->img_alt}}" />
                    </a>
                  @endif
                @else
              @endif  
            @endforeach
          @endforeach 
       <!-- static banner-->
      </div>
   @endif
    <!-- End Prime Banner -->
    <!-- <div class="container pt-2 image1" align="center">
        {{-- Static Banner --}}
      <ins align="center"  class='dcmads banner ' style='display:inline-block;width:728px;height:90px'
        data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B29606711.362309849'
        data-dcm-rendering-mode='iframe'
        data-dcm-https-only
        data-dcm-gdpr-applies='gdpr=${GDPR}'
        data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
        data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
        data-dcm-ltd='false'
        data-dcm-resettable-device-id=''
        data-dcm-app-id=''>
      <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
     </ins>
  </div>
  <div class="container pt-2 image2" align="center">
        {{-- Static Banner --}}
     <ins  align="center" class='dcmads banner ' style='display:inline-block;width:300px;height:150px'
        data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B29606711.365963941'
        data-dcm-rendering-mode='script'
        data-dcm-https-only
        data-dcm-gdpr-applies='gdpr=${GDPR}'
        data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
        data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
        data-dcm-ltd='false'
        data-dcm-resettable-device-id=''
        data-dcm-app-id=''>
      <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
    </ins>
  </div> -->



    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-5 col-12 pt-1 pb-1">
          <a href="{{url('/')}}">
            <img src="{{ config('app.url') }}images/logo.png" class="PF-MT5 PF-MB5" title="{{trans('messages.sitename')}}" loading="lazy" alt="{{trans('messages.sitename')}}">
          </a>
        </div>
        <div class="col-lg-4 offset-lg-5 col-md-5 offset-md-2 col-sm-5 col-9 pt-1 mb-2 align-self-center float-right">  
          <span class="pt-2 d-none d-sm-block"></span>
         {{Form::open(['url' => 'search'])}}
          <div class="input-group col-md-12" id="main-search">
            <input type="text" name="q" class="form-control input-md" id="autoComplete" required placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
            {{Form::close()}}
        </div>  
        <div class="col-lg-2 col-md-2 col-sm-2 col-3 pt-1 pb-1 align-self-center navbar-expand-lg">
          <button class="navbar-toggler border bg-light" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon pt-1"><i class="fa fa-bars" aria-hidden="true"></i></span>
          </button> 
        </div>
      </div>
    </div>
<header>
              @if(@$banners) 
          @foreach($banners as $k=>$homebanner12)   
            @foreach($homebanner12->pagesCount as $j=>$pcount)
              @if($homebanner12->positions[0]->id == 12 and $pcount->id == $page_id)
                @if($homebanner12->type == 'script')
                      <div class="container" align="center">
                     {!! $homebanner12->script !!}
 </div>
                  @else
                                        <div class="container" align="center">
                    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->img_alt}}">
                     <img class="img-fluid border mt-2" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" loading="lazy" alt="{{$homebanner12->img_alt}}" />
                    </a>
 </div>
                  @endif
                @else
              @endif  
            @endforeach
          @endforeach 
   @endif
   <div class="pb-2"></div>
 <?php 
   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
     $ip=$_SERVER['HTTP_CLIENT_IP'];
   }
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
     $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
   } else {
     $ip=$_SERVER['REMOTE_ADDR'];}
?>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-91608244-2', 'auto');
  ga('send', 'pageview');
</script>
    <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom">         
      <div class="collapse navbar-collapse justify-content-lg-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{url('/editorialsection')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EDITORIAL SECTION</a>
            <div role="menu" class=" dropdown-menu">                    
              <a class="dropdown-item" href="{{url('/strategy')}}">Strategy</a>
              <a class="dropdown-item" href="{{url('/research-development')}}">Research & Development</a>
              <a class="dropdown-item" href="{{url('/clinical-trials')}}">Clinical Trials</a>
              <a class="dropdown-item" href="{{url('/manufacturing')}}">Manufacturing</a>
              <a class="dropdown-item" href="{{url('/information-technology')}}">Information Technology </a>
              <a class="dropdown-item" href="{{url('/expert-talk')}}">Expert Talk</a>
              <a class="dropdown-item" href="{{url('/advertorials')}}">Advertorials</a>
              {{-- <a class="dropdown-item" href="{{url('/facilities-operations')}}">Facilities &amp; Operations</a> --}}
            </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/magazine')}}"  id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MAGAZINE</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="{{url('/archives')}}">Previous Issues</a>
                <a class="dropdown-item" href="{{url('/forthcoming-issue')}}">Forthcoming Issue</a>
                <a class="dropdown-item" href="{{url('/e-book')}}">e-Book Archives</a>
                <a class="dropdown-item" href="{{url('/foreword')}}">Foreword</a>
                <a class="dropdown-item" href="{{url('/author-guidelines')}}">Author Guidelines</a>
                <a class="dropdown-item" href="{{url('/advisory-board')}}">Advisory Board</a>
                <a class="dropdown-item" href="{{url('/editorial-calendars')}}">Editorial Calendar</a>
                <a class="dropdown-item" href="{{url('/testimonials')}}">Testimonials</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/e-newsletter')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">E-NEWSLETTER</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="{{url('/e-newsletter-subscribe')}}">Subscribe</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/knowledgebank')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KNOWLEDGE BANK</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="{{url('/articles')}}">Articles</a>
                <a class="dropdown-item" href="{{url('/interviews')}}">Interviews</a>
                <a class="dropdown-item" href="{{url('/technotrends')}}">Techno Trends</a>
                <a class="dropdown-item" href="{{url('/projects')}}">Projects</a>
                <a class="dropdown-item" href="{{url('/pharma-reports')}}">Industry Reports</a>
                <a class="dropdown-item" href="{{url('/researchinsights')}}">Research Insights</a>
                <a class="dropdown-item" href="{{url('/bookshelf')}}">Book Shelf</a>
                <a class="dropdown-item" href="{{url('/casestudies')}}">Case Studies</a>
                <a class="dropdown-item" href="{{url('/whitepapers')}}">White Papers</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/industryupdates')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INDUSTRY UPDATE</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="{{url('/news')}}">News</a>
                <a class="dropdown-item" href="{{url('/pressreleases')}}">Press Releases</a>
                <a class="dropdown-item" href="{{url('/events')}}">Events</a>
               <!--  <a class="dropdown-item" href="{{url('/reports')}}">Reports</a> -->
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{url('/advertise')}}" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADVERTISE</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="{{url('/print')}}">Print</a>
                <a class="dropdown-item" href="{{url('/online')}}">Online</a>
                <a class="dropdown-item" href="{{url('/target-market')}}">Target Market</a>
                <a class="dropdown-item" href="{{url('/target-audience')}}">Target Audience</a>
                <a class="dropdown-item" href="{{url('/tech-specs')}}">Tech Specs</a>
                <a class="dropdown-item" href="{{url('/mediapacks')}}">Mediapack</a>
                <a class="dropdown-item" href="{{url('/terms')}}">Terms</a>
                <a class="dropdown-item" href="{{url('/clients')}}">Clientele</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('subscribe')}}">SUBSCRIBE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="{{url('/webinars')}}">WEBINARS</a>
          </li>
        </ul>
      </div>
    </nav> 
</header>
<!-- leader board banner -->
           </br>


<!--old code banner-->
           <!-- <div class="container" align="center">

<ins  align="center" class='dcmads' style='display:inline-block;width:728px;height:90px'
    data-dcm-placement='N5716.5092928PHARMAFOCUS/B30811058.379162604'
    data-dcm-rendering-mode='script'
    data-dcm-https-only
    data-dcm-api-frameworks='[APIFRAMEWORKS]'
    data-dcm-omid-partner='[OMIDPARTNER]'
    data-dcm-gdpr-applies='gdpr=${GDPR}'
    data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
    data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
    data-dcm-ltd='false'
    data-dcm-resettable-device-id=''
    data-dcm-app-id=''>
  <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
</ins>

  </div> -->

  <!--NEW CODE BANNER LIVE 02-01-2024-->
  <div class="container" align="center">
  <ins class='dcmads' style='display:inline-block;width:728px;height:90px'
    data-dcm-placement='N5716.5092928PHARMAFOCUS/B30811058.383803274'
    data-dcm-rendering-mode='script'
    data-dcm-https-only
    data-dcm-api-frameworks='[APIFRAMEWORKS]'
    data-dcm-omid-partner='[OMIDPARTNER]'
    data-dcm-gdpr-applies='gdpr=${GDPR}'
    data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
    data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
    data-dcm-ltd='false'
    data-dcm-resettable-device-id=''
    data-dcm-app-id=''>
  <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
</ins>
</div> 

     <!-- <div class="" align="center">
              <ins class='dcmads' style='display:inline-block;width:728px;height:90px'
                 data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B27597841.334033149'
                    data-dcm-rendering-mode='script'
                   data-dcm-https-only
                    data-dcm-gdpr-applies='gdpr=${GDPR}'
                       data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
                      data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
                    data-dcm-ltd='false'
                   data-dcm-resettable-device-id=''
                 data-dcm-app-id=''>
                         <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
                        </ins>
                        </div>  
   -->


   <!-- <div class="" align="center">

<a href="https://servedby.flashtalking.com/click/2/216765;7605467;50126;211;0/?ft_width=1&ft_height=1&gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_78}&us_privacy=${US_PRIVACY}&url=36929703">
  <img src="https://industry.pharmafocusasia.com/promotions/images/hhm-siemens-healthineers-banner.gif" alt="HHM-Siemens">
</a>
<img style="width:1px; height:1px;" src=https://servedby.flashtalking.com/imp/2/216765;7605467;201;pixel;asianhhmcom;wwwwshsMKdirectWWCompanyMKValuePromisesRelaunchFY2310482consasianhhmhdm728x90displaywwhc232095/?gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_78}&us_privacy=${US_PRIVACY}&cachebuster=[CACHEBUSTER]/>
</div> -->
                    @php 
  $page_id =  getpage(Request::segment(1));
  @endphp
@if(@$banners)
  <div align="center" class="mt-2 mb-2 hidden-xs">
       @foreach($banners as $k=>$homebanner12)   
         @foreach($homebanner12->pagesCount as $j=>$pcount)
           @if($homebanner12->positions[0]->id == 3 and $pcount->id == $page_id)
            <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" loading="lazy" alt="{{$homebanner12->title}}" /></a>
           @else
           @endif  
         @endforeach
       @endforeach
  </div>
@endif
   
