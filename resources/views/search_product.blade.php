@extends('master')
@section('content')
<div class="container">
    <h2>Search Results</h2>
    <a href="/" class="btn btn-primary">Go Back</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($search_items as $item)
            <tr>

                <th><img class="image-size" src="{{ $item->gallery }}"></th>
                <td>{{ $item->name }}</td>
                <td> $ {{ $item->price }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->description }}</td>
              </tr>

            @endforeach
        </tbody>

      </table>
</div>


@endsection
