@extends('layouts.master')
@section('content')
    @if (isset($message))
        <div class="message">
            {{ $message }}
        </div>
    @endif
    @if ($errors->any())
        <div class="message">
            {{ $errors }}
        </div>
    @endif
    <div class="content">
        <a href="/user/profile/{{ $user->nickname }}"> <i style="font-size:1em ; color:white"
                class="fas fa-child"></i></a>

        <h2>Jeux vendus en France :</h2>
        <div class="ads">
            @forelse ($ads as $ad)
                <a class="ad" href="/ad/{{ $ad->id }}">
                    <img src="{{ $ad->picture }}" alt="{{ $ad->title }}">
                    <div class="description">
                        <div class="top-description">
                            <h3>{{ $ad->title }}</h3>
                            <h4>{{ $ad->price }} €</h4>
                        </div>
                        <div class="bottom-description">
                            <h5>{{ $ad->category->name }} {{-- $categories[$ads[($ad->id) - 1]->category_id - 1]->name --}}
                            </h5>
                            <h6>{{ $ad->location }}</h6>
                            <p>Publié le {{ $ad->created_at->format('d/m/y - h:m') }}</p>
                        </div>
                    </div>
                </a>
            @empty {{-- avec forelse --}}
                <p>No ads</p>
            @endforelse
        </div>
        <div class="page">
            @for ($i = 1; $i <= ceil($count / $limit); $i++)
                @if (intval($page) == $i) <a
                        class="active">{{ $i }}</a>
                @else
                    <a class="inactive" href="/page{{ $i }}">{{ $i }}</a>
                @endif
            @endfor
        </div>
    </div>
@endsection
