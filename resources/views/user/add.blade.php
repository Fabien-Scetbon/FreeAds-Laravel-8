@extends('user.layouts.master')
@section('content')
<div class="admin-content">
    <div class="message">
        {{ $message ?? '' }}
    </div>
    @if ($errors->any())
    <div class="message">
        {{ $errors }}
    </div>
    @endif
    <h2>Ajoute un jeu à la vente :</h2>
    <form class="create-ads-user" action="/user/add/{{ $user->nickname }}" method="post">
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
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="case-user">
            <input type="text" name="description" value="{{ old('description') }}" required>
        </div>
        <div class="case-user">
            <input type="number" name="price" value="{{ old('price') }}" required>
        </div>
        <div class="case-user">
            <input type="text" name="location" value="{{ old('location') }}" required>
        </div>
        <div class="case-user">
            <input type="text" name="picture" value="{{ old('picture') }}" required>
        </div>
        <div class="case-user">
            <select name="category_id" required>
                @foreach ($categories as $category) {
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="case-user">
            <button type="submit" class="add-button"><i style="font-size: 2em;padding:0.2em;color:green" class="fas fa-plus-circle"></i></button>
        </div>
    </form>
</div>
@endsection