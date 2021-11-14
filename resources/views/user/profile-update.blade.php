@extends('user.layouts.master')
@section('content')
<div class="admin-content">
    <div class="message">
        {{ $message ?? ''}}
    </div>
    <h2>Edition de : {{$user->login}} </h2>
    <form class="user-update-user" action="/user/edit/{{$user->nickname}}/user" method="post">
        @method('put')
        @csrf
        <div class="case-user">
            <h3>ID</h3>
        </div>
        <div class="case-user">
            <h3>Login</h3>
        </div>
        <div class="case-user">
            <h3>Email</h3>
        </div>
        <div class="case-user">
            <h3>Phone Number</h3>
        </div>
        <div class="case-user">
            <h3>Nickname</h3>
        </div>
        <div >
        </div>
        <div class="case-user">
            <p>{{ $user->id }}</p>
        </div>
        <div class="case-user">
            <input type="text" name="login" value="{{ $user->login }}">
        </div>
        <div class="case-user">
            <input type="text" name="email" value="{{ $user->email }}">
        </div>
        <div class="case-user">
            <input type="text" name="phone_number" value="{{ $user->phone_number }}">
        </div>
        <div class="case-user">
            <input type="text" name="nickname" value="{{ $user->nickname }}">
        </div>
        <div class="case-user">
            <button type="submit" class="update-button"><i style="font-size: 2em;padding:0.2em;color:green" class="fas fa-plus-circle"></i></button>
        </div>
    </form>
</div>
@endsection