@extends ('layouts.layout')

@section ('title', 'Modification de personnage')

@section ('content')
    <div>
        <fieldset>
            <form action="/modifyCharacter" method="POST">
                @csrf
                <label for="designer">Dessinateur</label>
                <select name="designer" id="">
                    <option value="{{$character->designer->id}}" name="designer">{{$character->designer->name}}</option>
                    @foreach ($designer as $designers)
                        <option value="{{$designers->id}}" name="author">{{$designers->name}}</option>
                    @endforeach
                </select>
                <label for="name">Nom du personnage</label>
                <input type="text" name="name" value="{{$character->name}}">
                <label for="creation_year">Date de création</label>
                <input type="number" name="creation_year" value="{{$character->creation_year}}">
                <label for="book_name">Nom d'une BD ou le perso apparait</label>
                <input type="text" name="book_name" value="{{$character->book_name}}">
                <input type="hidden" name="id" value="{{$character->id}}">
                <button type="submit">Valider</button>
            </form>
        </fieldset>
    </div>
@endsection