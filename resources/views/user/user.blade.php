@extends('user.layouts.master')
@section('content')
    <div class="userads">
        <div class="titleuserad">
            <h2>Mes jeux en vente : </h2>
            <div class="getmessage">
                {{ $message ?? '' }}
            </div>
            <a class="addad" href="/user/add/{{ $user->nickname }}">Ajouter un jeu</a>
        </div>
        @forelse ($ads_user as $ad)
            <div class="userad">
                <div class="aduser">
                    <img src="{{ $ad->picture }}" alt="{{ $ad->title }}">
                    <div class="aduserdescription">
                        <h3>{{ $ad->title }}</h3>
                        <h5>{{ $ad->price }} €</h5>
                        <p>{{ $ad->location }}</p>
                        <p>
                            {{ $ad->category->name }}
                        </p>
                        <form class="crud-ads-user" action="/user/{{ $user->nickname }}/{{ $ad->id }}"
                            method="post">
                            @method('delete')
                            @csrf
                            <a class="editad"
                                href="/user/edit/{{ $user->nickname }}/ad/{{ $ad->id }}">Editer ce jeu</a>
                            <button class="deletead" type="submit">Supprimer ce jeu</button>
                        </form>
                    </div>


                </div>
                <div class="date">
                    <h4>Publié le:</h4>
                    <p>{{ $ad->created_at->format('d/m/y - h:m') }}</p>
                </div>
            </div>
        @empty
            <div class="userad">
                Pas de jeu
            </div>
        @endforelse
    </div>
@endsection
