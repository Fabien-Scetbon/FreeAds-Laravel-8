<form class="searchbar" action="/filter" method="post">
    @csrf

    <select class="title" name="category">
        <option value="">Choisis ta console</option>
        @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <input type="text" name="searchbar" placeholder="Que recherches-tu ?">

    <select class="title"  name="location">
        <option  value="">Choisis ta ville</option>
        @foreach ($cities as $city)
                <option value="{{ $city->location }}">{{ $city->location }}</option>
        @endforeach
    </select>
    <button type="submit">Rechercher</button>
</form>
