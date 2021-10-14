<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
    $total=ProductController::cartItem();

}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://127.0.0.1:8000/">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/orderid">Orders</a>
        </li>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
    </ul>

      <ul class="nav navbar-nav navbar-right ">
        <li>
            <a  href="/cartlist" style="color: black; text-decoration: none;" >Cart({{$total}})</a>
        </li>
        <pre>    </pre>
            @if(Session::has('user'))
            <div class="dropdown ">
                <a class="dropdown-toggle " style="color: black; text-decoration: none;" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                <span class="caret " ></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/logout" style="color: black; text-decoration: none;">Logout</a></li>
                </ul>
              </li>
              @else
              <li><a href="/login" style="color: black; text-decoration: none;" >Login</a></li> <pre>   </pre>
              <li><a href="/register" style="color: black; text-decoration: none;">Register</a></li>
            </div>
              @endif
      </ul>

    </div>
  </nav>

