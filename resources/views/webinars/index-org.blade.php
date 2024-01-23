@extends('../layouts/app')
@section('style')

@endsection

@section('content')

<div class="clearfix"></div>

<div class="container">
         <!-- <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ url('/webinars') }}">Webinars</a>
              </li>
              <li class="breadcrumb-item active text-capitalize" aria-current="page">Webinars</li>
            </ol>
          </nav>
        </div> -->

        <div class="row">

          <div class="col-lg-9">
            @php
            $upcoming_flag = false;
            $completed_flag = false;
          
            @endphp

           

             <!-- // Static code -->
            <!--  <div class="mb-3">
              <div class="p-2 bg-light border">
                <div class="row">
                  <div class="col-lg-3 col-12 text-center align-self-center">
                    <img src="https://industry.pharmafocusasia.com/webinars/catalent/catalent-logo.png" alt="Catalent" title="Catalent" class="img-fluid" /> 
                  </div>
                  <div class="col-lg-9 col-12">
                    <h2 class="mt-1 font-18">
                      <a href="https://www.pharmafocusasia.com/catalent-webinar" title="Catalent Webinar" class="PF-TXTRED">
                        Pragmatic Insights from Clinical Supply Management and EU Qualified Persons on How to Optimize Global Clinical Studies
                      </a>
                    </h2>

                    <p class="font-16 mb-2">Thursday, 28th May 2020 | 15:00 (GMT+8) | 16:00hrs (Japan) | 17:30hr (Sydney)</p>

                    <p class="font-16 font-weight-bold mb-2">
                      Juliana Wang, 
                      <span class="text-muted font-weight-normal small">Senior Clinical Supply Manager, Asia Pacific Region</span>
                    </p>

                    <p class="font-16 font-weight-bold mb-1">
                     Jan Phillips, 
                      <span class="text-muted font-weight-normal small">Quality Director, Clinical Supply Services, Bolton, UK</span>
                    </p>

                  </div>
                </div>
              </div>
            </div> -->
            <!-- Static code // -->

            @foreach($data as $val)
            

            @if($val->webinar_date >=  Carbon\Carbon::today())

             @if($upcoming_flag == false)
            <div class="pb-2">
              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                <h1 class="PF-Bshelf pt-2">Upcoming Webinars</h1>            
              </div>               
            </div> 
            @endif
           
            @php $upcoming_flag = true @endphp

            <div class="mb-3">
              <div class="p-2 bg-light border">
                <div class="row">
                  <div class="col-lg-3 col-12 text-center">
                    <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="img-fluid" /> 
                  </div>
                  <div class="col-lg-9 col-12">
                    <h2 class="mt-1 font-18">
                      <a href="{{url($val->url)}}" title="{{$val->title_tag}}" class="PF-TXTRED">{{$val->title}}</a>
                    </h2>
                    <p class="font-16 mb-2"> {!!$val->date!!}</p>                      
                    <p class="font-16 font-weight-bold mb-1">{{$val->speaker}}</p>
                    <p class="text-muted mb-1">{!!$val->speaker_designation!!}</p>
                    <p class="font-16 font-weight-bold mb-1">{{@$val->speaker2}}</p>
                    <p class="text-muted mb-1">{!!@$val->speaker2_designation!!}</p>
                  </div>
                </div>
              </div>
            </div>

            @else

            @if($completed_flag == false)
            <div class="pb-2">
              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                <h1 class="PF-Bshelf pt-2">Completed Webinars</h1>            
              </div>               
            </div> 
            @endif

            @php $completed_flag = true @endphp

            <div class="mb-3">
              <div class="p-2 bg-light border">
                <div class="row">
                  <div class="col-lg-3 col-12 text-center">
                    <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="img-fluid" /> 
                  </div>
                  <div class="col-lg-9 col-12">
                    <h2 class="mt-1 font-18">
                      <a href="{{url($val->url)}}" title="{{$val->title_tag}}" class="PF-TXTRED">{{$val->title}}</a>
                    </h2>
                    <p class="font-16 mb-2"> {!!$val->date!!}</p>                      
                    <p class="font-16 font-weight-bold mb-1">{{$val->speaker}}</p>
                    <p class="text-muted mb-1">{!!$val->speaker_designation!!}</p>
                     <p class="font-16 font-weight-bold mb-1">{{@$val->speaker2}}</p>
                    <p class="text-muted mb-1">{!!@$val->speaker2_designation!!}</p>
                  </div>
                </div>
              </div>
            </div>
            @endif  

           
            @endforeach


          

          </div>


          <!--// Square Banners -->
          <div class="col-lg-3 d-none d-sm-block text-center"> 
           @foreach($banners as $k=>$banner)   
           @foreach($banner->pagesCount as $j=>$pcount)
           @if($banner->positions[0]->id == 6 and $pcount->id == 51)

           <a href="{{$banner->url}}" target="_blank" class="mb-3" title="{{$banner->title}}"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}banners/{{$banner->image}}" alt="{{$banner->alt_tag}}" /></a>
           @else
           @endif  
           @endforeach

           @endforeach
         </div>
         <!-- Square Banners // --> 
       </div>

     </div>


     @endsection

     @section('scripts')

     @endsection