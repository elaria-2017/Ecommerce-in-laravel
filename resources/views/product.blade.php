@extends('main')
@section("content")
<div class="container col-lg-12 custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
<a href="detail/{{$item['id']}}">
    <img src="{{$item['image']}}" class="slider-img d-block w-100">
    <div class="carousel-caption">
      <h3>{{$item['product_name']}}</h3>
    </div>
</a>
            </div>

            @endforeach
          </div>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
      <div class="trending-wrapper ">
          <div class="row">
          @foreach ($products as $item)
          <div class="trending-item col-sm-2">
            <a href="detail/{{$item['id']}}">
            <img src="{{$item['image']}}" class="trending-img col-sm" >
            <div class="">
              <h3>{{$item['product_name']}}</h3>
            </div>
        </a>
        </div>
@endforeach
</div>
    </div>
      </div>
</div>
@endsection
