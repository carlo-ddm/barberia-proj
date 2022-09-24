@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Hashed Password</th>
            <th scope="col">Created_at</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->password}}</td>
              <td>{{$user->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{$users->links()}} --}}
</div>
@endsection
