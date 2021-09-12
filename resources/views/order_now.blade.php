@extends('master')
@section('content')
<div class="container">
  <div class="cutom-order">
      <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>${{ $total }}</td>
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
                <td>$ {{ $total + 10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="order_place" method="POST">
                @csrf
                <div class="form-group">
                    <label for="pmd">Enter Address</label>
                  <textarea name="address" required placeholder="enter your address" class="form-control"> </textarea>
                </div>
                <div class="form-group">
                <label for="pmd">Payment Method</label><br>
                <input type="radio" required value="cash" name="payment"> <span>Online Payment </span><br>
                <input type="radio" required value="cash" name="payment"> <span>EMI Payment </span><br>
                <input type="radio" required value="cash" name="payment"> <span>Payment on Delivery</span><br>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form><br><br>
          </div>
      </div>
  </div>
</div>


@endsection

