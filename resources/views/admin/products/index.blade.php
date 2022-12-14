@extends('layouts.app')
@section('content')
{{-- @dd($products) --}}
<div class="container">
    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            {{-- <th scope="col">Slug</th> --}}
            <th scope="col">Brand</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              {{-- <td>{{$product->slug}}</td> --}}
              <td>{{$product->brand}}</td>
              <td>{{$product->price}}&euro;</td>
              <td>
                <img class="products_img" src="{{File::exists('storage/'. $product->image) ? asset('storage/' . $product->image) : $product->image}}" alt="{{$product->name}}">
              </td>
              <td>{{$product->description}}</td>
              <td class="actions">
                <div class="cd-container">
                    {{-- MOSTRA --}}
                    <a type="button"
                    class="btn btn-primary my-1 redirecting"
                    href="{{route('admin.products.show', $product)}}">
                    Dettagli
                    </a>
                    {{-- MODIFICA --}}
                    <a type="button"
                    class="btn btn-success my-1 redirecting"
                    href="{{route('admin.products.edit',$product)}}">Modifica</a>
                    <button type="button" class="btn btn-danger my-1">Cancella</button>
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
</div>
@endsection
