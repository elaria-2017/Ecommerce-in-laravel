@extends('main')
@section("content")
@foreach ($orderid as $item)
     <a class="btn " style="font-size: 40px;" href="myorders/{{$item['id']}}">Order : {{$item->id}}
     </a>
     <br>
     <div style="width: 100%; height:2px; background-color:black;"></div>

@endforeach
@endsection


