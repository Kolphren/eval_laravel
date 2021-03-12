@extends ('layouts.layout')

@section ('title', 'Ajouter un dessinateur')

@section ('content')
    <div class="add">
        <form action="/addDesigner" method="POST" id="add">
            @csrf
            <label for="name">Nom du dessinateur</label>
            <input type="text" name="name"><br>
            <label for="birth_year">Année de naissance</label>
            <input type="number" maxlength="4" name="birth_year"><br>
            <label for="nationality">Nationalité</label>
            <input type="text" name="nationality"><br>
            <button type="submit">Valider</button>
        </form>
    </div>
@endsection