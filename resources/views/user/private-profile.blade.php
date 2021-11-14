@extends('user.layouts.master')
@section('content')
    <div class="card-profile">
        <div class="card-pic-stars">
            <i style="font-size: 5em;padding:0.2em" class="far fa-smile"></i>
            <div class="card-stars">
                <h2>Login : {{ $user->login }}</h2>
                <h3>Nickname : {{ $user->nickname }} </h3>
                <p>Email : {{ $user->email }}</p>
                <p>Phone Number : {{ $user->phone_number }}</p>
            </div>
        </div>
        <div class="message">
            {{ $message ?? '' }}
        </div>
        <a href="/user/edit/{{ $user->nickname }}/user" class="edit-profile">
            <i style="font-size: 4em;padding:0.2em" class="fas fa-edit"></i>
        </a>
    </div>
@endsection
