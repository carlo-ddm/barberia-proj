@extends('layouts.app')
@section('content')
{{-- @dd($product) --}}
<div class="container">
    <ul>
        <li>
            <span class="heading">ID: </span>
            {{$product->id}}
        </li>
        <li>
            <span class="heading">Nome: </span>
            {{$product->name}}
        </li>
        <li>
            <span class="heading">Prezzo: </span>
            {{$product->price}}
        </li>
        <li>
            <span class="heading">Descrizione: </span>
            {{$product->description}}
        </li>
    </ul>
    <div class="cd-card">
        <img class="products_img" src="{{File::exists('storage/'. $product->image) ? asset('storage/' . $product->image) : $product->image}}" alt="{{$product->name}}">
    </div>
</div>
@endsection
