@extends('main')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
<img src="{{$product['image']}}" class="detail-img">
        </div>
        <div class="col-sm-6">
<h2>{{$product['product_name']}}</h2>
<h3>Price : {{$product['price']}}</h3>
<br><br>
<form action="/add_to_cart" method="POST">
@csrf
<input type="hidden" name="product_id" value={{$product['id']}}>
<button class="btn btn-primary">Add To cart</button>
<a href="/" class="btn btn-info">Go Back</a>

</form>
<br><br>


        </div>
    </div>

</div>
@endsection
