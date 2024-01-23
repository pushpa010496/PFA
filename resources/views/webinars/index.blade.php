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

            @foreach($upcome as $val)

            @if($upcoming_flag == false)

            <div class="pb-2">

              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                <h1 class="PF-Bshelf pt-2">Upcoming Webinars</h1>            

              </div>               

            </div> 

            @endif

            @php $upcoming_flag = true @endphp

            <div class="mb-3">

 @if($val->is_series)

              <span class="bg-primary pl-4 pr-4 pt-1 pb-1 text-white mb-0 font-weight-bold font-20">{{$val->series_title}}</span>

@endif

              <div class="p-2 bg-light border">

                <div class="row">

                  <div class="col-lg-3 col-12 text-center align-self-center">

                    <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="img-fluid" /> 

                  </div>

                  <div class="col-lg-9 col-12">

                    <h2 class="mt-1 font-18">

                      <a href="{{url($val->url)}}" title="{!! $val->title_tag !!}" class="PF-TXTRED" target="_blank">{!! $val->title !!}</a>

                    </h2>

                    <p class="font-16 mb-2"> {!!$val->date!!}</p>                      

                <p class="font-16 font-weight-bold mb-0">{{$val->speaker}}</p>

                <p class="text-muted small mb-2">{!!$val->speaker_designation!!}</p>

                <!-- <p class="text-muted small mb-2 text-right">Webinar Language: Korean</p> -->



                <p class="font-16 font-weight-bold mb-0">{{@$val->speaker2}}</p>

                <p class="text-muted small mb-2">{!!@$val->speaker2_designation!!}</p>



                <p class="font-16 font-weight-bold mb-0">{{@$val->speaker3}}</p>

                <p class="text-muted small mb-2">{!!@$val->speaker3_designation!!}</p>



                      <div class="text-left">

                        @if($val->is_series)

                          <a href="{{$val->china_url}}" target="_blank" class="btn btn-sm btn-danger">{{ @$val->china_title }}</a> 

                          <span class="p-1"></span>

                          <a href="{{$val->korea_url}}" target="_blank" class="btn btn-sm btn-danger">{{ @$val->korea_title }}</a> 

                        @endif

                      </div>

                  </div>

                </div>

              </div>

            </div>





            @endforeach



            @foreach($complete as $val)

            @if($val->webinar_date <=  Carbon\Carbon::today())

            @if($completed_flag == false)

            <div class="pb-2">

              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                <h1 class="PF-Bshelf pt-2">Completed Webinars</h1>            

              </div>               

            </div> 

            @endif



            @php $completed_flag = true @endphp



                   <div class="mb-3">

 @if($val->is_series)

              <span class="bg-primary pl-4 pr-4 pt-1 pb-1 text-white mb-0 font-weight-bold font-20">{{$val->series_title}}</span>

@endif

              <div class="p-2 bg-light border">

                <div class="row">

                  <div class="col-lg-3 col-12 text-center align-self-center">

                    <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="img-fluid" /> 

                  </div>

                  <div class="col-lg-9 col-12">

                    <h2 class="mt-1 font-18">

                      <a href="{{url($val->url)}}" title="{{$val->title_tag}}" class="PF-TXTRED" target="_blank">{{$val->title}}</a>

                    </h2>

                    <p class="font-16 mb-2"> {!!$val->date!!}</p>                      

                    <p class="font-16 font-weight-bold mb-0">{{$val->speaker}}</p>

                    <p class="text-muted small mb-2">{!!$val->speaker_designation!!}</p>

                    <p class="font-16 font-weight-bold mb-0">{{@$val->speaker2}}</p>

                    <p class="text-muted small mb-2">{!!@$val->speaker2_designation!!}</p>
                    <p class="font-16 font-weight-bold mb-0">{{@$val->speaker3}}</p>

<p class="text-muted small mb-2">{!!@$val->speaker3_designation!!}</p>

                      <div class="text-left">

                        @if($val->is_series)
                            
                          <a href="{{$val->china_url}}" target="_blank" class="btn btn-sm btn-danger">{{ @$val->china_title }}</a> 

                          <span class="p-1"></span>

                          <a href="{{$val->korea_url}}" target="_blank" class="btn btn-sm btn-danger">{{ @$val->korea_title }}</a> 
                          <span class="p-1"></span>
                          <a href="{{$val->japanese_url}}" target="_blank" class="btn btn-sm btn-danger">{{ @$val->japanese_title }}</a> 
                        @endif

                      </div>

                  </div>

                </div>

              </div>

            </div>



            @endif  





            @endforeach









          </div>





          <!--// Square Banners -->

          <div class="col-lg-3 mt-4 d-none d-sm-block text-center"> 

          @include('layouts.partials._square_banner')

           <!--@foreach($banners as $k=>$banner)   -->

           <!--@foreach($banner->pagesCount as $j=>$pcount)-->

           <!--@if($banner->positions[0]->id == 6 and $pcount->id == 51)-->



           <!--<a href="{{$banner->url}}" target="_blank" class="mb-3" title="{{$banner->title}}"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}banners/{{$banner->image}}" alt="{{$banner->alt_tag}}" /></a>-->

           <!--@else-->

           <!--@endif  -->

           <!--@endforeach-->



           <!--@endforeach-->

         </div>

         <!-- Square Banners // --> 

       </div>



     </div>





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