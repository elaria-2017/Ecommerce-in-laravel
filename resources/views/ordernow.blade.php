@extends('main')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
               @csrf
                <div class="form-group">
                  <textarea name="address" class="form-control" placeholder="enter your address"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" name="payment" value="cash"><span>creditcard </span> <br> <br>
                  <input type="radio" name="payment" value="cash"><span>wiretransfer </span> <br> <br>

                </div>

                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection

