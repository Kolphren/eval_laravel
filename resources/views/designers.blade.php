@extends ('layouts.layout')
@section('title', 'Dessinateurs' )

@section ('content')
    <h1>Retrouvez ici les dessinateurs phare ! </h1>
    <div class="list">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Année de naissance</th>
                    <th scope="col">Nationalité</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($designers as $designer)
                <tr>
                    <th scope="row">{{$designer->id}}</th>
                    <td>{{$designer->name}}</td>
                    <td>{{$designer->birth_year}}</td>
                    <td>{{$designer->nationality}}</td>
                    <td>
                        <form action="/modifyDesigner/{{$designer->id}}" method="get">
                            @csrf
                            <input type="submit" value="Modifier">
                        </form>
                    </td> 
                    <td>
                        <form action="/removeDesigner" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$designer->id}}">
                            <input type="submit" value="Supprimer">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection