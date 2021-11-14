@extends('user.layouts.master')
@section('content')
<div class="card-profile">
    <div class="card-pic-stars">
            <i style="font-size: 5em;padding:0.2em" class="far fa-smile"></i>
        <div class="card-stars">
            <h2> {{ $user->nickname }} </h2>
            <div class="card-stars-ads">
               <div>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            </div>
            {{ $nbsell }} jeu(x) déja vendus.
            </div>
        </div>
    </div>
    <a style="font-weight: bold" class="public-profile" href="/public/profile/{{$user->nickname}}">Voir mon profil public</a>
</div>
<div class="card-settings">
    <a href="/user/{{$user->nickname}}" class="access-eads">
        <!-- Auth::user() -->

        <i style="font-size: 5em;padding:0.2em" class="fas fa-gamepad"></i>
        <h3>Mes jeux</h3>
        <p>Editer mes jeux en vente</p>
    </a>
    <a href="/user/info/profile/{{$user->nickname}}" class="public-settings">
        <i style="font-size: 5em;padding:0.2em" class="fas fa-user-circle"></i>
        <h3>Profil</h3>
        <p>Voir mes infos de profil</p>
    </a>

</div>
@endsection