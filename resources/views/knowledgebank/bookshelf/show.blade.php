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
  "@type": "Book",  
  "@id": "{{$path}}",
  "copyrightYear": "{{ date('Y', strtotime( $data->publisher_date)) }}",
  "description": "{!! $data->description !!}",
  "genre": "Educational Materials",
  "inLanguage": "en-US",
  "isFamilyFriendly": "true",
  "name": "{{ $data->title  }}",
  "numberOfPages": "{{$data->no_pages}}",
  "author": {
    "@type": "Person",
    "name": "{{$data->authors}}"
  },
  "publisher": {
    "@type": "Organization",
    "name": "{{$data->publisher}}"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Knowledge Bank",
    "item": "{{ url('/knowledgebank') }}"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Book Shelf",
    "item": "{{url('/bookshelf')}}"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "{{ $data->title  }}",
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

            <a href="{{ url('/knowledgebank') }}">Knowledge Bank</a>

          </li>

          <li class="breadcrumb-item" aria-current="page">

            <a href="{{ url('/bookshelf') }}">Book Shelf</a>

          </li>

          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>

        </ol>

      </nav>

    </div>



    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">



        <div class="col-lg-12 pt-2 pb-2">

          <div class="col-lg-12 p-0">

            <h1 class="PF-TXTRED">{{ $data->title  }}</h1>

          </div>

        </div>



        <div class="col-lg-12">

          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-12 pb-3"> 

              <img class="img-fluid" src="{{ config('app.url') .'knowledgebank/bookshelf/'. $data->bookshelf_image}}" alt="{{$data->alt_tag}}" title="{{$data->title_tag}}" width="100%"> 

              <div class="pl-2 pt-2 PF-BrdrDDD PF-BGf7f7f7">

                <p><strong>Pages:</strong> {{$data->no_pages}}</p>

                <p><strong>Publisher:</strong> {{$data->publisher}}</p>

                <p>Year of Publication:<strong> {{ date('Y', strtotime( $data->publisher_date)) }}</strong></p> 

              </div>

            </div>



            <div class="col-lg-9 col-md-9 col-sm-8 col-12 PF-PB20">

              <p><strong>Author(s) :</strong> {{$data->authors}}</p>

              <p><strong>Book Description:</strong></p>

               {!! $data->description !!}  

            </div> 

          </div>  

        </div>

      </div>

      <!-- // RIGHT SECTION // --> 



      <!--// RIGHT SECTION - Square Banners -->

      <div class="col-lg-3 col-md-3 d-none d-sm-block text-center">               

       

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