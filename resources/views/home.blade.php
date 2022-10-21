@extends('layouts.main')

@section('content')
<div class="card-body">
    @auth
    <p>Welcome <b>{{ Auth::user()->name }}</b></p>
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    @endauth
    @guest
    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
    <a class="btn btn-info" href="{{ route('register') }}">Register</a>
    @endguest
   </div>
@endsection
