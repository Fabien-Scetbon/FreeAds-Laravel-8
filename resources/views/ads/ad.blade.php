@extends('ads.layouts.master')
@section('content')
    <div class="adindex">

        <div class="displayad">
            <img src="{{ $ad->picture }}" alt="product">
            <div class="descriptionad">
                <div class="descr-top">
                    <h2>{{ $ad->title }}</h2>
                    <h3>
                        {{ $ad->category->name }}
                    </h3>
                    <h4>{{ $ad->price }} €</h4>
                    <p>Publié le : {{ $ad->created_at->format('d/m/y - h:m') }}</p>
                </div>
                <div class="descr-bottom">
                    <h5>Description</h5>
                    <p>{{ $ad->description }}</p>
                </div>

            </div>
        </div>
        <div class="displayuser">
            <div class="entete">
                <a class="entete" href="/public/profile/{{ $user->nickname }}">
                    <i style="font-size: 3em" class="far fa-smile"></i>
                    <div class="descruser">
                        <p class="name"> {{ $user->nickname }} </p>
                        <p class="nbad"> {{ $nbad }} jeu(x) </p>
                    </div>
                </a>
            </div>
            <div class="contactoffer">
                <button class="makeoffer" type="submit">Acheter</button>
                <button class="displayphone" type="submit"> <span class="displaytitlephone">Afficher le no de tel</span>
                    <span class="phonenumber">{{ $user->phone_number }}</span> </button>
                </button>
                <button class="submessage" type="submit">Message</button>
            </div>
        </div>
    </div>
@endsection
