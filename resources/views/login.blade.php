@extends('layout')

@section('title', 'Connexion')

@section('content')
    <div class="container">
        <div class="left">
            <div class="loginHeader">
                <h2 class="animation a1">Bienvenue</h2>
                <h4 class="animation a2">Connecter a votre compte admin</h4>
            </div>
            <form class="form">
                <input type="email" class="form-field animation a3" placeholder="Login">
                <input type="password" class="form-field animation a4" placeholder="Mot de passe">
                <button class="animation a6">LOGIN</button>
            </form>
        </div>
        <div class="right" style="background-image: url({{url('images/home-bg-1.jpg')}});">
            <img class="animation a0" src="{{url('images/logo.svg')}}" alt="">
        </div>
    </div>
@endsection