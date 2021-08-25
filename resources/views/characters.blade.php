@extends('layout.base')
@section('css','characters')
@section('title','Books')

@section('content')
<h1>Livres</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Année de création</th>
            <th>Nom de Bande dessinée</th>
            <th>Dessinateur</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($characters as $character )
            <tr>
                <td><a href="character/{{$character->id}}">{{$character->name}}</a></td>
                <td>{{$character->creationDate}}</td>
                <td>{{$character->link}}</td>
                <td>{{$character->designer->name}}</td>
                <td>
                    <form action="deleteCharacter" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <input type="submit" id="delete" value="supprimer"> 
                    </form>
                </td>
                   
                
            </tr>   
        @endforeach
    </tbody>
</table>
@endsection