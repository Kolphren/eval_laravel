@extends ('layouts.layout')
@section('title', 'Personnages !' )

@section ('content')
    <h1>Retrouvez ici les meilleurs personnages !</h1>
    <div class="list">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Année de création</th>
                    <th scope="col">BD</th>
                    <th scope="col">Dessinateur</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                <tr>
                    <th scope="row">{{$character->id}}</th>
                    <td>{{$character->name}}</td>
                    <td>{{$character->creation_year}}</td>
                    <td>{{$character->book_name}}</td>
                    @if (isset($character->designer->name))
                        <td>{{$character->designer->name}}</td>
                        @else
                        <td>Dessinateur inconnu</td>
                    @endif
                    <td>
                        <form action="/modifyCharacter/{{$character->id}}" method="get">
                            @csrf
                            <input type="submit" value="Modifier">
                        </form>
                    </td> 
                    <td>
                        <form action="/removeCharacter" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$character->id}}">
                            <input type="submit" value="Supprimer">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection