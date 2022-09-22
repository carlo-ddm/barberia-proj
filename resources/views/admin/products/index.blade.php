@extends('layouts.app')
@section('content')
{{-- @dd($products) --}}
<div class="container">
    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
              <th>{{$product->id}}</th>
              <th>{{$product->title}}</th>
              <td>{{$product->slug}}</td>
              <td>
                <img src="{{File::exists('storage/'. $product->image) ? asset('storage/' . $product->image) : $product->image}}" alt="">
              </td>
              <td>{{$product->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
