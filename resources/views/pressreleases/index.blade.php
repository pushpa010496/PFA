@extends('../layouts/app')
@section('style')

@endsection

@section('content')


    <div class="clearfix"></div>

      <div class="container">

        <div class="row PF-MobP030">
          <div class="col-lg-6 pl-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{url('/industryupdates')}}">Industry Updates</a>
                </li>
                <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">{{trans('messages.pressreleases_title')}}</li>                         
              </ol>
            </nav>
          </div>
          
          <div class="col-lg-3 pr-0 text-right">
            <a href="{{url('/newswires')}}" class="btn btn-sm btn-dark text-white"><span class="small">READ MORE...</span></a>   
          </div>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.pressreleases_title')}}</h1>            
                </div>
                <p>{{trans('messages.pressreleases_text')}}</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-P0">
                <nav>
                 @php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); @endphp
                 <ul class="pagination PF-M0 PF-PT10">
                  <li> <a  class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle">{{ date('Y')-1 }}</span></a> </li>
                  @foreach ($months as $key => $value) 
                  <li><a href="{{url('/')}}/listpressreleases/month/{{$key}}/year/{{date('Y')-1}}" class="PF-BrdrRds0">{{ $value }}</a></li>
                  @endforeach
                </ul>              
                <ul class="pagination PF-M0 PF-PT10">
                  <li> <a  class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle">{{ date('Y') }}</span></a> </li>
                  @foreach ($months as $key => $value) 
                  @if($key <= date('n'))
                  <li><a href="{{url('/')}}/listpressreleases/month/{{$key}}/year/{{date('Y')}}" class="PF-BrdrRds0">{{$value}}</a></li>
                  @else
                  <li><a href="javascript:void(0)" class="PF-BrdrRds0 PF-Bgeee">{{$value}}</a></li>
                  @endif
                  @endforeach                     
                </ul>
              </nav>
            </div>
            
              @foreach($pressreleases as $val)
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
                <h2 class="mb-0 PF-TXTBlk000">
                  <a href="{{ route('pressreleases.url',[$val->url])}}" title="{{$val->title_tag}}" class="PF-TXTBlk000">{{ $val->title}}</a>
                </h2>
                <small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->date)) }}</small>
                 
                <p>{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 250, $end = '...') }} </p>    
              </div> 
              @endforeach
              @include('layouts/partials/_loadmorehtml')


            </div>
            <!-- // RIGHT SECTION // --> 

            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
              <div class="bg-gray border-secondary">
                <div class="text-center">
                  {{-- <h3 class="adv-title">Advertisements</h3> --}}
                </div>

               @include('layouts.partials._square_banner')
              </div>
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>

      </div>
 


@endsection

@section('scripts')
<script type="text/javascript">
  var url = "{{ url('pressreleases/more') }}";
  @include('layouts/partials/_loadmorejs')
</script>
@endsection