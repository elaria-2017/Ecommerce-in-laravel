<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
  function index(){
      $data=Product::all();
      return view('product',['products'=>$data]);
  }
  function detail($id)
  {
    $data= Product::find($id);
return view('detail',['product'=>$data]);
}
 function addToCart(Request $req)
{
    if($req->session()->has('user'))
    {
        $cart=new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');

    }
    else{
        return redirect('/login');
    }
}
static function cartItem(){
$user_Id=Session('user')['id'];
return Cart::where('user_id',$user_Id)->count();
}
function cartList(){
    $user_Id=Session('user')['id'];
    $products=DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$user_Id)->select('products.*','cart.id as cart_id')->get();

  return view('cartlist',['products'=>$products]);
}
function removeCart($id){
Cart::destroy($id);
return redirect('cartlist');
}
function orderNow(){
    $user_Id=Session('user')['id'];
  $total= $products=DB::table('cart')->join('products','cart.product_id','=','products.id')->where('cart.user_id',$user_Id)->sum('products.price');

  return view('ordernow',['total'=>$total]);
}
function orderPlace(Request $req){
    $user_Id=Session('user')['id'];
    $allCart=Cart::where('user_id',$user_Id)->get();
    foreach($allCart as $cart){
         $order=new Order;

         $order->product_id=$cart['product_id'];
         $order->user_id=$cart['user_id'];
         $order->price=Product::where('products.id',$cart['product_id'])->first(['price']) ;
         $order->address=$req->address;
         $order->payment_method=$req->payment;
         $order->save();
         Cart::where('user_id',$user_Id)->delete();


    }
  $req->input();
  return redirect('/');

}
function myOrders($id){
    $user_Id=Session('user')['id'];
    $orders=DB::table('orders')->join('products','orders.product_id','=','products.id')->where('orders.user_id',$user_Id)->where('orders.id',$id)->get();

    return view('myorders',['orders'=>$orders]);
}
static function orderId(){
    $user_Id=Session('user')['id'];
    $orderid=Order::where('user_id',$user_Id)->get();

    return view('orderid',['orderid'=>$orderid]);

}
}
