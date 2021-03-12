@extends ('layouts.layout')

@section ('title', 'Ajouter un personnage')

@section ('content')
    <div class="add">
        <form action="/addCharacter" method="POST" id="add">
            @csrf
            <label for="name">Nom du personnage</label>
            <input type="text" name="name"><br>
            <label for="creation_year">Année de création</label>
            <input type="number" maxlength="4" name="creation_year"><br>
            <label for="book_name">BD</label>
            <input type="text" name="book_name"><br>
            <label for="designer">Dessinateur</label>
            <select name="designer" id="">
                <option value="">Dessinateur</option>
                @foreach ($designers as $designer)
                    <option value="{{$designer->id}}" name="designer" id="">{{$designer->name}}</option>
                @endforeach
            </select><br>
            <button type="submit">Valider</button>
        </form>
    </div>
@endsection