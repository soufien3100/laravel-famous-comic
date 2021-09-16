@extends('layout.base')
@section('css','characters')
@section('title','Personnage')

@section('content')
<div class="lightgrey">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Année de création</th>
                <th>Nom de Bande dessinée</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listCharacter as $character )
                <tr>
                    <td><a href="character/{{$character->id}}">{{$character->name}}</a></td>
                    <td>{{$character->creationDate}}</td>
                    <td>{{$character->link}}</td>
                   
                </tr>   
            @endforeach
        </tbody>
    </table>
</div>
@endsection