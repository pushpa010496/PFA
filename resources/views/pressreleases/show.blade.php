@extends('../layouts/app')

@section('style')

@endsection

@section('content')

@php
      $path = Request::url();
      @endphp
      
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
   "@id": "{{$path}}"
  },
   "headline": "{{$pressreleases->title}}",
  "description": "{{$pressreleases->short_description}}",
    "image": "https://industry.pharmafocusasia.com/images/logo.png",  
 
  "publisher": {
    "@type": "Organization",
    "name": "Pharma Focus Asia",
    "logo": {
      "@type": "ImageObject",
      "url": "https://industry.pharmafocusasia.com/images/logo.png"
    }
  },
   "datePublished": "{{$pressreleases->created_at}}",
  "dateModified": "{{$pressreleases->updated_at}}"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Industry Updates",
    "item": "{{ url('/industryupdates') }}"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Pharma Pressreleases",
    "item": "{{url('/pressreleases')}}"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "{{ $pressreleases->title}}",
    "item": "{{Request::url();}}"  
  }]
}
</script>

<div class="clearfix"></div>



  <div class="container">



    <div class="row PF-MobP030">

      <nav aria-label="breadcrumb">

        <ol class="breadcrumb">

          <li class="breadcrumb-item">

            <a href="{{url('/industryupdates')}}">Industry Updates</a>

          </li>

          <li class="breadcrumb-item">

            <a href="{{url('/pressreleases')}}">Pharma Pressreleases</a>

          </li>

          <li class="breadcrumb-item PF-TXTRED text-capitalize" aria-current="page"></li>

         

        </ol>

      </nav>

    </div>



    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">       

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

          <h2 class="mb-3 mt-2 PF-TXTRED ">{{ $pressreleases->title}}</h2>

          <p class="small PF-Caps text-muted mb-2 mt-2">{{ date('l, F d, Y ', strtotime($pressreleases->date)) }}</p>

          {!!$pressreleases->description!!}

        </div> 

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



@endsection