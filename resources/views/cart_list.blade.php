@extends('master')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <a class="btn btn-success" href="order">Order Now </a>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Remove</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>

                <th><img class="image-size" src="{{ $item->gallery }}"></th>
                <td>{{ $item->name }}</td>
                <td> $ {{ $item->price }}</td>
                <td>{{ $item->category }}</td>
                <td><a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove From Cart</a></td>
              </tr>

            @endforeach
        </tbody>

      </table>
      <a class="btn btn-success" href="order">Order Now </a>
</div>


@endsection
