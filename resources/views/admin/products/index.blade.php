@extends('layouts.app')
@section('content')
{{-- @dd($products) --}}
<div class="container">
    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->title}}</td>
              <td>{{$product->slug}}</td>
              <td>
                <img class="products_img" src="{{File::exists('storage/'. $product->image) ? asset('storage/' . $product->image) : $product->image}}" alt="">
              </td>
              <td>{{$product->description}}</td>
              <td class="actions">
                <button type="button" class="btn btn-primary">Show</button>
                <button type="button" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>
@endsection
