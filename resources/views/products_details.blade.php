@extends('master')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-sm-6">
        <img class="detail-img" src="{{ $details['gallery'] }}">
        </div>
        <div class="col-sm-6">
           <a href="/" class="btn btn-primary">Go Back</a>
           <h2>{{ $details['name'] }}</h2>
           <h3>Price :$ {{ $details['price']  }}</h3>
           <h4>Description : {{ $details['description'] }}</h4>
           <h3>Catgeroy : {{ $details['category'] }}</h3>
           <br><br>
          <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $details['id'] }}">
            <button class="btn btn-success">Add to Cart</button>
          </form>
           <br><br>
           <br><br><br><br><br>
        </div>
    </div>

</div>

@endsection
