@extends('user.layouts.master')
@section('content')
<div class="admin-content">
    <div class="message">
        {{ $message ?? ''}}
    </div>
    @if ($errors->any())
    <div class="message">
        {{ $errors }}
    </div>
    @endif
    <h2>Edition du jeu : {{$ad->title}} </h2>
    <form class="create-ads-user" action="/user/edit/{{ $user->nickname }}/ad/{{ $ad->id }}" method="post">
        @method('put')
        @csrf
        <div class="case-user">
            <h3>Titre</h3>
        </div>
        <div class="case-user">
            <h3>Description</h3>
        </div>
        <div class="case-user">
            <h3>Prix</h3>
        </div>
        <div class="case-user">
            <h3>Ville</h3>
        </div>
        <div class="case-user">
            <h3>Image</h3>
        </div>
        <div class="case-user">
            <h3>Console</h3>
        </div>
        <div>
        </div>
        <div class="case-user">
            <input type="text" name="title" placeholder="{{ $ad->title }}">
        </div>
        <div class="case-user">
            <input type="text" name="description" placeholder="{{ $ad->description }}">
        </div>
        <div class="case-user">
            <input type="number" name="price" placeholder="{{ $ad->price }}">
        </div>
        <div class="case-user">
            <input type="text" name="location" placeholder="{{ $ad->location }}">
        </div>
        <div class="case-user">
            <input type="text" name="picture" placeholder="{{ $ad->picture }}">
        </div>
        <div class="case-user">
            <select name="category_id">
                @foreach ($categories as $category) {
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="case-user">
            <button type="submit" class="update-button"><i style="font-size: 2em;padding:0.2em;color:green" class="fas fa-plus-circle"></i></button>
        </div>
    </form>
</div>
@endsection