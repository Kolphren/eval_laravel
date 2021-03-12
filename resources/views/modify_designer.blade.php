@extends ('layouts.layout')

@section ('title', 'Modification de dessinateur')

@section ('content')
    <div>
        <fieldset>
            <form action="/modifyDesigner" method="POST">
                @csrf
                <label for="name">Nom du dessinateur</label>
                <input type="text" name="name" value="{{$designer->name}}">
                <label for="birth_year">Date de création</label>
                <input type="number" name="birth_year" value="{{$designer->birth_year}}">
                <label for="nationality">Nationalité</label>
                <input type="text" name="nationality" value="{{$designer->nationality}}">
                <input type="hidden" name="id" value="{{$designer->id}}">
                <button type="submit">Valider</button>
            </form>
        </fieldset>
    </div>
@endsection