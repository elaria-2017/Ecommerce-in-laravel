@extends('main')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result For Products</h4>
            <a href="ordernow" class="btn btn-success">Order Now</a> <br> <br>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-divider">
<div class="col-sm-3">
    <a href="detail/"{{$item->id}}>
        <img class="trending-img" src="{{$item->image}}" alt="">
        </a>
</div>





<div class="col-sm-4">
        <div class="">
            <h2>{{$item->product_name}}</h2>
        </div>
</div>




<div class="col-sm-3">
<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
</div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection

