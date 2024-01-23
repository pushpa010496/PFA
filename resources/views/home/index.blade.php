@extends('../layouts/app')
@section('style')
<style>
.carousel-caption{
    left:1rem;
    margin-right: auto;
    text-align: left;
    font-family: "Montserrat", sans-serif;
    /* font-size: 3.8rem; */
    max-width: 65%;
    height: auto;
    font-weight: 700;
    bottom:0rem;
    /* line-height: 4.8rem; */
    margin-left: 1.4rem;
}
/* .carousel-caption-new {
    background: rgba(31,38,52,.5);
    bottom: 0;
    color: #fff;
    padding-left: 10px;
    position: absolute;
    width: 100%;
    z-index: 10;
    top:65%;
}  */
</style>
@endsection
@section('content')  



<div class="container mt-4 mb-4">
  <div class="row shadow">

    <div class="col-lg-9 col-md-9 col-sm-8 col-12 p-0">

      {{-- Home Slider  --}}
      <div id="mainsliderControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
         <?php $i=1; ?>
         @foreach($sliders as $key=> $homesliders)

         @if($i==1)

        <div class="carousel-item active">
          <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
            <img class="d-block w-100" src="{{ config('app.url') }}slider/{{ $homesliders->image }}" alt="{{$homesliders->title}}">       
          </a>         
          <div class="carousel-caption-new d-lg-block">
          <i style="font-weight:bold;font-size:16px;">
        <span>
            @if ($homesliders->issue_id)
                {{ $homesliders->category }} - {{ $homesliders->issue_id }}
            @else
                {{ $homesliders->category }}
            @endif
        </span>
    </i>
            <h3>{{$homesliders->title}}</h3>
          </div>
        </div>

        @else

        <div class="carousel-item">
          <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
            <img class="d-block w-100" src="{{ config('app.url') }}slider/{{ $homesliders->image }}" alt="{{$homesliders->img_alt}}">       
          </a>         
          <div class="carousel-caption-new d-lg-block">
          <!-- <i style="font-weight:bold;font-size:16px;"> -->
          <span>
            @if ($homesliders->issue_id)
                {{ $homesliders->category }} - {{ $homesliders->issue_id }}
            @else
                {{ $homesliders->category }}
            @endif
        </span>
            <h3>{{$homesliders->title}}</h3>
          </div>
        </div>

        @endif
        <?php $i++; ?>
        @endforeach


        </div>
        <a class="carousel-control-prev" href="#mainsliderControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainsliderControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Slider // --> 
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-12 PF-LatestMagzBG">
      {{-- <a href="https://www.asianhhm.com/ahhmadmin/upload/ebook/1526305348-img-ahhm-40-md.jpg"> --}}

        <img src="{{ config('app.url').'ebooks/'. Str::slug($ebook->issue->issue_no).'/'.$ebook->image_sm }}" alt="Latest Issue" title="Latest Issue" class="img-fluid mb-2">

      {{-- </a> --}}
      {{--   <a href="https://www.asianhhm.com/ahhmadmin/upload/ebook/1526305348-img-ahhm-40-md.jpg" class="btn btn-sm btn-block btn-danger">Get instant access to latest e-book</a> --}}
      <h5 class="text-white PF-MT5">Get instant access to latest e-book </h5>
      <form action="{{url('welcome')}}" role="form" id="ebookform"  method="post" accept-charset="utf-8">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->first('email', 'has-error')}}">

          <input style="height:30px !important;color: #fff" type="email" name="email" class="form-control bg-transparent border border-white PF-MagField" placeholder="Your Mail ID..." id="inputEmail" data-error="Bruh, that email address is invalid" required="">
          <span class="help-block">{{ $errors->first('email', ':message') }}</span>
        </div>

        <input value="e-book" name="type" id="e-book" type="hidden">
        <input value="" name="ebook_script" id="ebook_script" type="hidden">
        <button type="submit" id="submit" name="submit" class="btn btn-sm btn-block btn-danger pb-0">
          <img src="{{config('app.url')}}images/submit.png" class="" alt="submit" title="submit">&nbsp; SUBMIT
        </button>
      </form>
    </div>  

</div>
</div>  

{{-- Top/Full Banner banner --}}
<div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-4 mb-2" align="center">
<!--
<div class="" align="center">
   <ins class='dcmads' style='display:inline-block;width:728px;height:90px'
    data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B28038815.338869076'
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
     -->
 
     <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
      @foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
      @if($homebanner12->positions[0]->id == 4 and $pcount->id == 1)
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" />
      </a>
      @endif
      @else
      @endif  
      @endforeach
      @endforeach
    </div>
   
</div>
{{-- End Top/Full Banner banner --}}


<div class="container">
  <div class="row pt-2 bg-white PF-BrdrDDD">
    <!-- // LEFT Section -->
    <div class="col-lg-8 pt-1">
      <!-- // News Section -->
      <div class="col-lg-12 p-0">             
        <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">LATEST NEWS<a href="{{ route('news') }}"><span class="float-right PF-Readmore">Read more...</span></a>
        </h1>
      </div>

    <!-- <div class="" align="center">
                  <a href= "https://track.pharmafocusasia.com/20221017042740805984809/"target="_blank" title="Caidya">
                  <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/caidya.jpg" alt="Caidya" /></a>
                    
              </div>  -->
            

      {{-- News Section --}}
      @foreach($news as $val)
      <div class="clearfix"></div>
      <div class="col-lg-12 p-0">
        <div class="PF-Brdrnone">
          <div class="media-left">
            <div class="PF-BrdrDDD text-center p-1">
              <h3>{{ date('d', strtotime($val->date)) }}</h3>
              <span class="text-uppercase mt-1 float-left">{{ date('M Y', strtotime($val->date)) }}</span>
              <div class="clearfix"></div>
            </div>
          </div>

          <div class="media-body pl-2">
            <a href="{{ route('news.url',[$val->url]) }}" title="{{ $val->news_img_alt}}">
              <h2 class="PF-HdngsClrHvr mt-1 mb-1">{{ $val->home_title }}</h2>
            </a>
            <p class="text-justify text-dark">
             {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
           </p>                             
         </div>
       </div>
     </div>

     @endforeach
     {{-- End News Section --}}          

     {{-- Middle banner --}}
     <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">


      @foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
      @if($homebanner12->positions[0]->id == 7 and $pcount->id == 1)
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
      </a>
      @endif
      @else
      @endif  
      @endforeach
      @endforeach
    </div>
    {{-- End Middle banner --}}

    <div class="clearfix mb-2"></div>


    <div class="clearfix"></div>



    <div class="clearfix mb-3"></div>

    {{-- // PR Section --}}
    <div class="col-lg-12 p-0">
      <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">press releases<a href="{{route('pressreleases')}}"><span class="float-right PF-Readmore">Read more...</span></a>
      </h1>
    </div>
  <!--<div class="" align="center">
                  <a href= "https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B28341468.347430555;dc_trk_aid=538710228;dc_trk_cid=175752665;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd="target="_blank" title="Cytiva Let's Change">
                  <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/cytiva-lets-talk.jpg" alt="Cytiva Let's Talk" /></a>
                    
              </div> 
             <SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/trackimpj/N1440248.3016915PHARMAFOCUSASIA/B28341468.347430555;dc_trk_aid=538710228;dc_trk_cid=175752665;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?"></SCRIPT>
-->
    @foreach($pressreleases as $val)
    <div class="clearfix"></div>
    <div class="col-lg-12 p-0">
      <div class="PF-Brdrnone">
        <div class="media-left">
          <div class="PF-BrdrDDD text-center p-1">
            <h3>{{ date('d', strtotime($val->date)) }}</h3>
            <span class="text-uppercase mt-1 float-left">{{ date('M Y', strtotime($val->date)) }}</span>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="media-body pl-2">
          <a href="{{route('pressreleases.url',[$val->url])}} " title="{{ $val->img_alt}}">
            <h2 class="PF-HdngsClrHvr mt-1 mb-1">{{ $val->home_title }}</h2>
          </a>
          <p class="text-justify text-dark">
           {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
         </p>
       </div>
     </div>
   </div>
   @endforeach
   <div class="clearfix"></div>       
   {{-- PR Section // --}}

   <div class="clearfix mb-2"></div>


   {{-- Middle banner  B/W PR & events --}}
   <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 10 and $pcount->id == 1)
    @if($homebanner12->type == 'script')
    {!! $homebanner12->script !!}
    @else
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
    @endif
    @else
    @endif  
    @endforeach
    @endforeach
  </div>
  {{-- End Middle B/W PR & events banner --}}

  <!-- // Events Section -->
  <div class="col-lg-12 p-0">
    <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">Events<a href="{{url('events')}}"><span class="float-right PF-Readmore">Read more...</span></a>
    </h1>
  </div>


  <div class="clearfix"></div>
  @foreach($events as $val)

  <div class="col-lg-6 p-0 float-left" style="min-height: 110px">
    <div class="PF-Brdrnone">
      <div class="media-left">
        <div class="PF-BrdrDDD text-center p-1">
          <h3>{{ date('d', strtotime($val->start_date)) }} - {{ date('d', strtotime($val->end_date)) }}</h3>
          <span class="text-uppercase mt-1 text-center">{{ date('M Y', strtotime($val->start_date)) }}</span>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="media-body pl-2">
        <a href="{{url('events')}}" title="">
          <h2 class="PF-HdngsClrHvr mt-1 mb-1">{{$val->home_title}}</h2>
        </a>
        <p class="text-dark"> {!!$val->event_organiser != '' ? $val->event_organiser .'<br>': '' !!} {{$val->venue}}</p>
      </div>
    </div>
  </div>
  @endforeach



  <!-- Events Section // -->

  <div class="clearfix mb-2"></div>

  {{-- Bottom banner  below events --}}
  <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 11 and $pcount->id == 1)
    @if($homebanner12->type == 'script')
    {!! $homebanner12->script !!}
    @else
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
    @endif
    @else
    @endif  
    @endforeach
    @endforeach
  </div>
  {{-- End Bottom banner --}}
</div>
<!-- LEFT Section // -->


<!-- // Right Section -->
<div class="col-lg-4 text-center pb-2">
  <div class="pt-2"></div>

  <div class="bg-gray border-secondary">
   
   <!-- Sky Tower Banner Statr -->
   <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202110270836441333055763/'); return false;"  id="testing-the-world"  target="_blank" class="mb-3" title="Testing The World"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}ensign/thermofisher/testing-the-world.jpg" alt="Testing The World" /></a>
   <!-- Sky Tower Banner End -->

   <!-- Sky Tower Banner Statr -->
   <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20211201035223849283292/'); return false;"  id="celebrating-70years"  target="_blank" class="mb-3" title="Celebrating 70 Years of Nalgene"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}ensign/thermofisher/win-our-birthday-beaker.gif" alt="Celebrating 70 Years of Nalgene" /></a>
   <!-- Sky Tower Banner End -->

<!-- Sky Tower Banner Statr -->

  <!-- Sky Tower Banner End -->
    <!--
    <div class="mt-3">
     <a href="https://www.pharmafocusasia.com/repligens-variable-pathlength-technology-for-oligonucleotide-drug-products" id="repligens-variable"  target="_blank" class="mb-3" title="Development and Validation of a Platform Assay Method Using Variable Pathlength Technology for Oligonucleotide Drug Products"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}ensign/replign-square-banner.jpg" alt="Development and Validation of a Platform Assay Method Using Variable Pathlength Technology for Oligonucleotide Drug Products" /></a>
   </div>
   <div class="mt-3">
  
  <a href="https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd=" target="_blank" title="">

     <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/Cytiva_NoA_Mind_If_We_Drop_In_300x600_APAC.jpg" alt="" />
     <IMG SRC="https://ad.doubleclick.net/ddm/trackimp/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?" BORDER="0" HEIGHT="1" WIDTH="1" ALT="Advertisement">

   </a>

</div>  
<SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/trackimpj/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?"></SCRIPT>
-->
@foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 6 and $pcount->id == 1)
    <div class="mt-3">
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_title}}" />
      </a>
      @endif
    </div>
    @else
    @endif  
    @endforeach
    @endforeach
   

{{-- 
    <div class="mt-2">
    <SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/adj/N5716.3016915PHARMAFOCUSASIA/B22990109.251899885;sz=300x250;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?">
    </SCRIPT>
    </div> --}}

    {{-- Static Banner --}}
   {{--  <ins class='dcmads' style='display:inline-block;width:300px;height:250px'

    data-dcm-placement='N386402.3016915PHARMAFOCUSASIA1/B21636445.238601292'

    data-dcm-rendering-mode='iframe'

    data-dcm-https-only

    data-dcm-resettable-device-id=''

    data-dcm-app-id=''>

    <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>

  </ins> --}}
 {{--   <a href="javascript:void(0)" target="_blank" title="{{$homebanner12->title}}" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20220201035943202643419/'); return false;">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/ensign/1555570456-banner-rousselot--banner-042019.gif" alt="{{$homebanner12->title}}" />
      </a> --}}
  {{-- Static Banner --}}

    {{-- Square banner --}}

   

    <a href="javascript:void(0)" id="THERMOFISHER_SEA" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202202141034211138296851/'); return false;" target="_blank" title="THERMOFISHER SEA">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/thermofisher_sea_2971_300x600.gif" alt="THERMOFISHER SEA" />
    </a>
    
    <!-- <a href="javascript:void(0)" id="APAC_EDC" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20220201035943202643419/'); return false;" target="_blank" title="APAC EDC">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/apac-edc.png" alt="APAC EDC" />
    </a>
    
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="APAC_CT_Design" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202202010402301790896208/'); return false;" target="_blank" title="APAC CT Design">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/apac-ct-design.png" alt="APAC CT Design" />
    </a>
    
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="APAC_Pharma_Virtual" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202202010401201508730567/'); return false;" target="_blank" title="APAC Pharma Virtual">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/apac-pharma-virtual-trials.png" alt="APAC Pharma Virtual" />
    </a> -->
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="upm-raflatac" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202205111046261791849988/'); return false;" target="_blank" title="Upm Raflatac">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/upm-reflatac.jpg" alt="Upm Raflatac" />
    </a>
    <!-- <div class="mb-2"></div>
    <a href="javascript:void(0)" id="tfs-global" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206170825131150121651/'); return false;" target="_blank" title="TFS">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/tfs-global.jpg" alt="TFS" />
    </a> -->

    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="tfs-korea" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206170853531448671386/'); return false;" target="_blank" title="TFS">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/tfs-korea.jpg" alt="TFS" />
    </a>
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="tfs-china" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206170946282014855365/'); return false;" target="_blank" title="TFS">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/tfs-chinese.jpg" alt="TFS" />
    </a>
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="tfs-japan" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206170955171826667218/'); return false;" target="_blank" title="TFS">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/tfs-japan.jpg" alt="TFS" />
    </a>

    <!-- <div class="mb-2"></div>
    <a href="javascript:void(0)" id="sub-global" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206201138191289044953/'); return false;" target="_blank" title="Single Use Biosectors">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/sub-global2.jpg" alt="SUB" />
    </a> -->
    <!-- <div class="mb-2"></div>
    <a href="javascript:void(0)" id="sub-korea" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20220620114011611344293/ '); return false;" target="_blank" title="Single Use Biosectors">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/sub-korea2.jpg" alt="SUB" />
    </a>
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="sub-japan" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206201142071871123676/'); return false;" target="_blank" title="Single Use Biosectors">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/sub-japan2.jpg" alt="SUB" />
    </a> -->
   
<!-- southern-star -->

    {{-- End Square banner --}}
    {{-- medicalexpo --}}
   
    {{-- End medicalexpo --}}
    {{-- Sky tower banner --}}
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 2 and $pcount->id == 1)
    <div class="mt-2">
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
      </a>
      @endif
    </div>
    @else
    @endif  
    @endforeach
    @endforeach
    {{-- End Sky tower banner --}}

   </br>

    <!-- <a href="https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B27686767.341454641;dc_trk_aid=533334992;dc_trk_cid=170816109;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd="  id="cytiva"  target="_blank" class="mb-3" title="Cytiva Change Your Strategy"><img class="img-fluid div-shadow mb-3" src="https://industry.pharmafocusasia.com/promotions/images/cytiva-6-boost-50-300x600.jpg" alt="Celebrating 70 Years of Nalgene" /></a> -->
          </div>
          
        </div>
        <!-- Right Section // -->
      </div>
    </div>




    <div class="container">
      {{-- Bottom One banner --}}
      <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
        @foreach($banners as $k=>$homebanner12)   
        @foreach($homebanner12->pagesCount as $j=>$pcount)
        @if($homebanner12->positions[0]->id == 8 and $pcount->id == 1)
        @if($homebanner12->type == 'script')
        {!! $homebanner12->script !!}
        @else
        <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
        @endif
        @else
        @endif  
        @endforeach
        @endforeach
      </div>
      {{-- End Bottom One banner --}}
      <div class="row bg-white PF-BrdrDDD mt-2">         

        <!--// Top Articles -->
        <div class="col-lg-3 PF-TAbg"> 
          <h1 class="text-uppercase text-white PF-TopArt pt-3">TOP ARTICLES</h1>
          @if(count($articles))
          @foreach($articles as  $key => $val)
          @if($key != 0)
          <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity" >
            <li class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt">
              <div class="media-left">
                <h1 class="PF-NUM m-0">{{$key}}</h1>
              </div>
              <div class="media-body pl-2 pt-1">
                <a href="{{url('articles').'/'.$val->url}}" title="{{$val->title_tag}}">
                  <h2 class="media-heading">{{$val->title}}</h2>
                </a>
                @foreach($val->authors as $author)
                <h5 class="media-heading">{{$author->title }}</h5>
                <h5 class="media-heading">{!!$author->authorbio!!}</h5>
                @endforeach
              </div>
            </li>
          </ul>
          @endif
          @endforeach
          @endif
        </div>
        <!--// Top Articles -->

        <!--// Knowledge Bank Content -->
        <div class="col-lg-9 pt-2">
          <div class="row m-0">
            <h1 class="text-uppercase mb-2 mt-2 PF-TXTRED">KNOWLEDGE BANK</h1>
            <div class="col-lg-12 p-0">
              <ul class="media-list col-lg-12 pl-0 mb-0">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-0">
                    <h2 class="media-heading text-uppercase PF-KBHdngs mb-2"><a href="{{url('interviews')}}">Interviews</a></h2>
                    <div class="pt-0">
                           @foreach($interviews as $interviews)
                      <!-- <img src="{{ config('app.app_path').'knowledgebank/interview/'.$interviews->photo }}" alt="{{ $interviews->alt_tag }}" class="shadow-sm mt-0 mr-0 mb-2"> -->
                      <a href="{{ route('interviews.url',[$interviews->url]) }}">
                        <h2 class="mt-0 mb-1">{{$interviews->title}}</h2>
                      </a>
                      <p class="text-justify text-dark mb-0"><strong>{{$interviews->designation}}</strong></p>                    

                      {!! \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst( $interviews->description)))),$limit =400, $end = '...')  !!}
    @endforeach

                    </div>
                  </div>
                </li>
              </ul>


              <ul class="media-list col-lg-12 pl-0 mb-2">
                 <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('articles')}}">Articles</a></h2>
                  <!--   <a href="{{url('articles').'/'.$articles[0]->url}}" title="INVEST IN Eco-sustainable Technologies for a safe processing of healthcare waste">
                      <h2 class="mt-2 mb-1">{{$articles[0]->title}}</h2>
                    </a> -->
                      <a href="{{url('articles').'/'.$articles[0]->url}}" title="{{$articles[0]->title}}">
                      <h2 class="mt-2 mb-1">{{$articles[0]->title}}</h2>
                    </a>


                    <p class="m-0 text-justify text-dark"> {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($articles[0]->short_description)))),$limit = 400, $end = '...') }}</p>

                  </div>
                </li>
              </ul>
            </div>


            <div class="col-lg-12 p-0">
              {{-- Research Insights --}}
              <ul class="media-list col-lg-12 pl-0 mb-2">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">

                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{ url('researchinsights') }}" title="{{@$reaserchinsites->title_tag}}">Research Insights</a></h2>
                     @foreach($reaserchinsites as $reaserchinsites)
                     @if($reaserchinsites)
                    <a href="{{ route('researchinsights.url',[$reaserchinsites->url]) }}">                     
                      <h2 class="mt-2 mb-1">{{$reaserchinsites->title}}</h2>
                    </a>               
                    <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($reaserchinsites->short_description)))),$limit = 4000, $end = '...') }}
                    </p>
                    @endif
                    @endforeach
                  </div>
                </li>
              </ul>
              {{--End Research Insights --}}

              <ul class="media-list col-lg-12 pl-0 mb-2">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('casestudies')}}">Case Studies</a></h2>
                     @foreach($casestudy as $casestudy)
                    <a href="{{route('casestudies.url',[$casestudy->url]) }}" title="{{$casestudy->title_tag}}">
                      <h2 class="mt-2 mb-1">{{$casestudy->title}}</h2></a>
                      <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($casestudy->short_description)))),$limit = 370, $end = '...') }} </p>
                      @endforeach
                    </div>
                  </li>
                </ul>
              </div>

              <div class="col-lg-12 p-0">
                <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1">
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{route('technotrends')}}">Techno Trends</a></h2>
                        @foreach($technotrend as $technotrend)
                      <a href="{{route('technotrends.url',[$technotrend->url]) }}" title="{{$technotrend->title_tag}}"><h2 class="mt-2 mb-1">{{$technotrend->title}}</h2></a>
                      <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($technotrend->short_description)))),$limit = 370, $end = '...') }}</p>
                      @endforeach
                    </div>
                  </li>
                </ul>

                <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1">
                         @foreach($whitepaper as $whitepaper)
                    @if($whitepaper)
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('whitepapers')}}">White Papers</a></h2>
                      <a href="{{route('whitepapers.url',[$whitepaper->url]) }}" title="{{$whitepaper->title_tag}}">
                        <h2 class="mt-2 mb-1">{{$whitepaper->title}}</h2>
                      </a>

                      <p class="m-0 text-justify text-dark">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($whitepaper->short_description)))),$limit = 400, $end = '...') }}</p>
@endif
@endforeach
                  
                    </div>
                  </li>
                </ul>

                {{--   <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0 hoverborder">
                    <div class="media-body pt-1">
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="https://www.asianhhm.com/reports">Industry Reports</a></h2>
                      <a href="https://www.asianhhm.com/reports/ellex-medical-lasers-limited-elx-financial-and-strategic-swot-analysis-review" title="">
                        <h2 class="mt-2 mb-1">Ellex Medical Lasers Limited (ELX) - Financial and Strategic SWOT Analysis Review</h2>
                      </a>
                      <p class="m-0 text-justify text-dark">Ellex Medical Lasers Limited Ellex is a medical technology company It develops manufactures services and distributes a comprehensive range of medical equipment for use in ophthalmic procedures The company also offers a range of thirdparty medical devices and technologies Ellexs product portfolio includes laser therapy equipment surgical techniques intraocular lenses IOLs photocoagulators and ultrasound systems for the diagnosis and treatment...</p>
                    </div>
                  </li>
                </ul> --}}
              </div>
              <!-- half Banners //-->
            </div>
          </div>
          <!-- Knowledge Bank Content //-->
        </div>
      </div>

      <div class="container">
        {{-- Bottom Two banner --}}
        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/Glocalization.jpg" alt="{{$homebanner12->img_alt}}" /></a>
          @foreach($banners as $k=>$homebanner12)   
          @foreach($homebanner12->pagesCount as $j=>$pcount)
          @if($homebanner12->positions[0]->id == 9 and $pcount->id == 1)
          @if($homebanner12->type == 'script')
          {!! $homebanner12->script !!}
          @else
          <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->s}}">
            <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" /></a>
          @endif
          @else
          @endif  
          @endforeach
          @endforeach
        </div>
        {{-- End Bottom Two banner --}}
        <div class="row mt-2 PF-WytBG PF-BrdrDDD">
         

          <div class="col-lg-3 col-md-3 col-sm-3 col-12 PF-TAbgissues">             
            <h1 class="text-uppercase text-white PF-TopArt pt-3">Advisory Board</h1>
            <div class="row">
              @foreach($advaisoryboard as $val)
              <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                <img src="{{ config('app.url').'advisoryboard/homeimage/'.$val->home_image }}" alt="{{$val->alt_tag}}" title="{{$val->title_tag}}" width="70" height="70" style="filter: grayscale(100%);-webkit-filter: grayscale(100%); ">
                <a href="{{url('advisory-board')}}" target="_blank">    
                  <p>{{$val->short_title}}</p>
                </a>
                {!!$val->home_description!!}
              </div>
              @endforeach

             
            </div>
          </div>



          <!--// editorial Section Content -->
          <div class="col-lg-9 mt-2">
            <div class="row m-0">
              <h1 class="text-uppercase mb-2 mt-2 PF-TXTRED">EDITORIAL SECTION</h1>

              <div class="col-lg-12 p-0">

                <ul class="media-list col-lg-12 pl-0 mb-1">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1 pb-1">
                        <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="{{url('strategy')}}">STRATEGY</a></h2> 
                      @foreach($strategy as $strategy)
                   
                     <a href="{{url('strategy').'/'.@$strategy->url }}" title="{{@$strategy->title_tag}}">
                      <h2 class="mt-2 mb-1">{{ @$strategy->title}}</h2>
                    </a>
                    <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$strategy->short_description )))),$limit = 150, $end = '...') }} </p> @endforeach
                  </div>
                </li>
              </ul>

              <ul class="media-list col-lg-12 pl-0 mb-1">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1 pb-1">
                      <h2 class="media-heading text-uppercase PF-KBHdngs">
                      <a href="{{url('research-development')}}">RESEARCH DEVELOPMENT</a>
                    </h2>     
                      @foreach($research_development as $research_development)
                                        
                    <a href="{{url('research-development').'/'.@$research_development->url }}" title="{{@$research_development->title_tag}}">
                      <h2 class="mt-2 mb-1">{{@$research_development->title}}</h2>
                    </a>
                    <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$research_development->short_description )))),$limit = 150, $end = '...') }}</p>  
                    @endforeach                    
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-12 p-0">
              <ul class="media-list col-lg-12 pl-0 mb-1">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1 pb-1">
                       <h2 class="media-heading text-uppercase PF-KBHdngs">
                      <a href="{{url('clinical-trials')}}">CLINICAL TRIALS</a>
                    </h2>        
                     @foreach($clinical_trials as $clinical_trials)
                                     
                    <a href="{{url('clinical-trials').'/'.@$clinical_trials->url }}" title="{{@$clinical_trials->title_tag}}">
                     <h2 class="mt-2 mb-1">{{@$clinical_trials->title}}</h2>
                   </a>                            
                   <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$clinical_trials->short_description )))),$limit = 150, $end = '...') }}</p>

                   @endforeach
                 </div>
               </li>
             </ul>

             <ul class="media-list col-lg-12 pl-0 mb-1">              
              <li class="media PF-Brdrnone p-0">
                <div class="media-body pt-1 pb-1">
                   <h2 class="media-heading text-uppercase PF-KBHdngs">
                    <a href="{{url('manufacturing')}}">MANUFACTURING</a>
                  </h2>
                  @foreach($manufacturing as $manufacturing)
                 
                  <a href="{{url('manufacturing').'/'.@$manufacturing->url }}" title="{{@$manufacturing->title_tag}}">                              
                   <h2 class="mt-2 mb-1">{{@$manufacturing->title}}</h2>
                 </a>
                 <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$manufacturing->short_description )))),$limit = 150, $end = '...') }}</p>
                 @endforeach
               </div>
             </li>
           </ul>

      
       <ul class="media-list col-lg-12 pl-0 mb-1">
          <li class="media PF-Brdrnone p-0">
            <div class="media-body pt-1 pb-1">
                 <h2 class="media-heading text-uppercase PF-KBHdngs">
                  <a href="{{url('information-technology')}}">Information Technology</a>
                </h2>      
            
                   @foreach($information_technology as $information_technology)
                                                  
                <a href="{{url('information-technology').'/'.@$information_technology->url }}" title="{{@$information_technology->title_tag}}">
                 <h2 class="mt-2 mb-1">{{@$information_technology->title}}</h2>
               </a>
               <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$information_technology->short_description )))),$limit = 150, $end = '...') }}</p>
                     
               @endforeach
           </div>
         </li>
       </ul>




       





         <ul class="media-list col-lg-12 pl-0 mb-1">
          <li class="media PF-Brdrnone p-0">
            <div class="media-body pt-1 pb-1">
               <h2 class="media-heading text-uppercase PF-KBHdngs">
                <a href="{{url('expert-talk')}}">EXPERT Talk</a>
              </h2>
               @foreach($expert_talk as $expert_talk)
             
              <a href="{{url('expert-talk').'/'.@$expert_talk->url }}" title="{{@$expert_talk->title_tag}}" style="color:black !important;" > 

               <h2 class="mt-2 mb-1">{{@$expert_talk->title}}</h2>
             </a>

             <p class="mb-0 text-justify PF-TXTBlk">{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$expert_talk->short_description )))),$limit = 150, $end = '...') }}</p>

             @endforeach
           </div>
         </li>
       </ul>
     </div>

  </div>
</div>
<!-- editorial Section Content //-->



</div>
</div>

<!--<div id="myModalpopup" class="modal" role="dialog" style="padding-right: 17px; display: block;">-->
<!--  <div class="modal-dialog modal-dialog-centered">-->
<!--    <div class="modal-content p-0">           -->
<!--      <div class="modal-body p-0">-->
<!--        <button type="button" class="close" data-dismiss="modal">×</button>        -->
<!--        <a href="#" target="_blank"> -->
<!--             <img src="https://industry.pharmafocusasia.com/images/lonza-banner.jpg" alt="Pop-Up" class="img-fluid"> -->
<!--        </a> -->
<!--      </div>          -->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--<div style=''>-->
<!--<div class="" align="center" style='position: fixed;-->
<!--    right: 25vw;-->
<!--    bottom: 0;-->
<!--    z-index: 999;'>-->
             
                                          
    <!--<button type="button" class="close" data-dismiss="modal">×</button>                                      -->
                                          
<!-- <a href="https://go2.lonza.com/enteric-delivery-innovation.html/?utm_source=pharma_focus_asia&utm_medium=media&utm_campaign=web_banner" target="_blank" title="banner">-->
<!--                      <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/images/lonza-banner.jpg" alt="banner">      -->
        
            
<!--      </div>-->
<!--      </div>-->
<!--
<div id="myModalpopup" class="modal fade" role="dialog">

 <div class="modal-dialog modal-dialog-centered">

   <div class="modal-content p-0">          

     <div class="modal-body p-0">

       <button type="button" class="close" data-dismiss="modal">&times;</button>        

       <a href="https://www.pharmafocusasia.com/promotion/acg-360-webinar-episode-6" target="_blank"> 

            <img src="{{config('app.url')}}images/popup_banner_image_for_Acg.jpg" alt="Pop-Up" class="img-fluid" /> 

       </a> 

     </div>          

   </div>

 </div>

</div>
                      -->
{{-- Base banner --}}
<div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
  @foreach($banners as $k=>$homebanner12)   
  @foreach($homebanner12->pagesCount as $j=>$pcount)
  @if($homebanner12->positions[0]->id == 5 and $pcount->id == 1)
  @if($homebanner12->type == 'script')
  {!! $homebanner12->script !!}
  @else
  <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
  @endif
  @else
  @endif  
  @endforeach
  @endforeach
</div>
{{-- End Base banner --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Pharma Focus Asia",
  "alternateName": "Pharmafocusasia",
  "url": "https://www.pharmafocusasia.com/",
  "logo": "https://industry.pharmafocusasia.com/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "040 4961 4567",
    "contactType": "sales",
    "areaServed": "IN",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://twitter.com/pharmafocusasia",
    "https://www.facebook.com/PharmaFocusAsia",
    "https://www.linkedin.com/company/pharmafocusasia",
    "https://www.pharmafocusasia.com/"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Pharma Focus Asia",
  "image": "https://industry.pharmafocusasia.com/images/logo.png",
  "@id": "https://www.pharmafocusasia.com/",
  "url": "https://www.pharmafocusasia.com/",
  "telephone": "040 4961 4567",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Oxford Plaza, SD ROad",
    "addressLocality": "Secunderabad",
    "postalCode": "500003",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 17.4410037,
    "longitude": 78.5012503
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Friday",
      "Thursday",
      "Wednesday",
      "Tuesday",
      "Monday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  } 
}
</script>

@endsection



<!-- welcome popup 2 -->
<!-- <div id="myModalpopup" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-0">           
      <div class="modal-body p-0">
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
        <a href="https://www.pharmafocusasia.com/promotion/acg-world-capsules-webinar" target="_blank"> 
             <img src="{{config('app.url')}}images/acg-world-capsules-webinar.jpg" alt="Pop-Up" class="img-fluid" /> 
        </a> 
      </div>          
    </div>
  </div>
</div>  -->


<!--End welcome popup -->
@section('scripts')

@endsection
