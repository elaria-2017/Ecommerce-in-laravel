@extends('main')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            @foreach ($orders as $item)
            <div class="row searched-item cart-list-divider">
<div class="col-sm-3">
        <img class="trending-img" src="{{$item->image}}" alt="">

</div>





<div class="col-sm-4">
            <h2>Name : {{$item->product_name}}</h2>
            <h5>Address : {{$item->address}}</h5>
            <h5>Payment Method : {{$item->payment_method}}</h5>


</div>

            </div>

            @endforeach
            <hr>
        </div>
    </div>
</div>
@endsection

