@extends('layouts.app')
@section('content')
<div class="container">
    {{-- @dump($product) --}}

    <h1>Modifica: {{$product->name}}</h1>
    <form
    action="{{route('admin.products.update', $product)}}"
    method="post">
        @csrf
        @method('PUT')

        {{-- Nome --}}
        <div class="mb-3">
          <label for="name" class="form-label">Nome del prodotto</label>
          <input
          type="text"
          class="form-control w-50 h-50"
          id="name"
          value="{{old('name',$product->name)}}">
        </div>

        {{-- Brand --}}
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input
            type="text"
            class="form-control w-50 h-50"
            id="brand"
            value="{{old('brand',$product->brand)}}">
        </div>

        {{-- Prezzo --}}
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input
            type="text"
            class="form-control w-50 h-50"
            id="price"
            value="{{old('price',$product->price)}}">
        </div>

        {{-- Immagine --}}
        <div class="mb-3">
            <label for="price" class="form-label d-block">Immagine</label>
            <input
            type="file"
            accept="image/*">
        </div>

         {{-- Descrizione --}}
         <div class="mb-3">
            <label for="price" class="form-label d-block">Descrizione</label>
            <textarea
            name="price"
            id="price"
            cols="30"
            rows="10"
            class="w-50 h-50"
            >{{$product->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Modifica</button>
      </form>
</div>
@endsection
