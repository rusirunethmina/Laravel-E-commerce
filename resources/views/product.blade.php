@extends('master')
@section('content')

<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
         @foreach ($products as $item)
         <div class="item {{ $item['id']==1?'active':'' }}">
          {{-- <a href="/detail/{{ $item['id'] }}"> --}}
            {{-- <img class="custom-slider" src="{{ $item['gallery'] }}"> --}}
            <img class="custom-slider" src="https://www.annfone.com/img/cms/mobiles-phones-banner.png">
            <div class="carousel-caption slider-text">
                {{-- <h3>{{ $item['name'] }}</h3>
                <p>{{ $item['description'] }}</p> --}}
            </div>
          {{-- </a> --}}
          </div>
         @endforeach
        </div>


        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="trending-warpper">
          <h3 style="text-align: center;color:rgb(12, 12, 12);font-weight:bold;"> Trending Products</h3>
        @foreach ($products as $item)
        <div class="trending-item">
            <a href="/detail/{{ $item['id'] }}">
           <img class="trending-img" src="{{ $item['gallery'] }}">
           <div class="">
               <h3>{{ $item['name'] }}</h3>
           </div>
            </a>
         </div>
        @endforeach
       </div>

       <div class="trending-warpper">
      @foreach ($products as $item)
      <div class="trending-item">
          <a href="/detail/{{ $item['id'] }}">
         <img class="trending-img" src="{{ $item['gallery'] }}">
         <div class="">
             <h3>{{ $item['name'] }}</h3>
         </div>
          </a>
       </div>
      @endforeach
     </div>
</div>

@endsection
