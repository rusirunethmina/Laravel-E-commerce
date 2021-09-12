@extends('master')
@section('content')
<div class="container">
    <h2>My Orders</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Delivery Status</th>
            <th scope="col">Payment Methods</th>
            <th scope="col">Payement Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>

                <th><img class="image-size" src="{{ $item->gallery }}"></th>
                <td>{{ $item->name }}</td>
                <td> $ {{ $item->price }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->payment_method }}</td>
                <td>{{ $item->payment_status }}</td>
              </tr>

            @endforeach
        </tbody>

      </table>
</div>


@endsection
