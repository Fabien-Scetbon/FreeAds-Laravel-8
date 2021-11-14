@extends('user.layouts.master')
@section('content')
    <div class="card-profile">
        <div class="card-pic-stars">
            <i style="font-size: 5em;padding:0.2em" class="far fa-smile"></i>
            <div class="card-stars">
                <h2> {{ $user->nickname }} </h2>
                <p>Membre depuis {{ $user->created_at->format('d/m/y') }}</p>

            </div>
        </div>
        <div class="card-stars-public-profile">
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
    <div class="public-profile-ads">
        <h2 style="margin-bottom: 1rem;text-align:center;color:white">{{ $nbad }} jeu(x) :</h2>
        <div class="public-profile-ads-display">
            @forelse ($ads as $ad)
                <a class="public-profile-ad" href="/ad/{{ $ad->id }}">
                    <img src="{{ $ad->picture }}" alt="{{ $ad->title }}">
                    <div class="description">
                        <div class="top-description">
                            <h3>{{ $ad->title }}</h3>
                            <h4>{{ $ad->price }} €</h4>
                        </div>
                        <div class="bottom-description">
                            <h5>
                                {{ $ad->category->name }}
                            </h5>
                            <h6>{{ $ad->location }}</h6>
                            <p>Publié le : {{ $ad->created_at->format('d/m/y - h:m') }}</p>
                        </div>
                    </div>
                </a>
            @empty
                <p>Pas de jeu en vente actuellement.</p>
            @endforelse
        </div>
    </div>
@endsection
