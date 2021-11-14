<nav>
    <ul>
        <li><a href="/"><i style="font-size:2em ; color:white" class="fas fa-home"></i></a></li>
    </ul>
    <ul>
        <li>
            @if (isset(Auth::user()->nickname))
                <a href="/user/add/{{ Auth::user()->nickname }}">
                    <h1>VENDRE</h1>
                </a>
            @else
                <a href="{{ route('login') }}">
                    <h1>VENDRE</h1>
                </a>
            @endif
        </li>

        <li>
            @if (isset(Auth::user()->nickname))
                <a href="/user/{{ Auth::user()->nickname }}">
                    <h1>MES POSTS</h1>
                </a>
            @else
                <a href="{{ route('login') }}">
                    <h1>MES JEUX</h1>
                </a>
            @endif
        </li>
        <li><a href="/">
                <h1>TOUS LES JEUX</h1>
            </a></li>
    </ul>
    <ul>
        <li>
            @if (isset(Auth::user()->login))
                <a style="color:white;margin-right:1.2%" href="/user/profile/{{ Auth::user()->nickname }}"> <i style="color:white;margin:0.5em 0.em 0.2em;font-size: 2.5em"
                        class="far fa-smile"></i>
                    <br> {{ Auth::user()->nickname }}</a>
            @endif
        </li>
        @guest user non authentifié
            <li><a href="{{ route('login') }}">
                    <i style="font-size:2em ; color:white" class="fas fa-user-cog"></i>
                </a></li>

        @else
            <li><a href="{{ route('logout') }}">
                    <i style="margin-left:1em;font-size:2em ; color:white" class="fas fa-user-times"></i>
                </a></li>

        @endguest

    </ul>
</nav>
