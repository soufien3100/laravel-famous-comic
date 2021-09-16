@extends('layouts.base')
@section('title', 'Dessinateur')
@section('css', 'Designers')

@section('content')
<h1>Liste des Dessinateurs</h1>
<div id="main">
    <table>
        <thead>
            <th>Nom</th>
            <th>Année de naissance</th>
            <th>Nationalité</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            @foreach ($designers as $designer)
                <tr>
                    <td>{{ $designer->name }}</td>
                    <td>{{ $designer->birthday }}</td>
                    <td>{{ $designer->nationality }}</td>
                    <td>    
                        <form action="deleteDesigner" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $character->id }}">
                            <input type="submit" id="delete" value="supprimer"> 
                        </form>
                    </td>
                    <td>
                        <form action="updateCharacter" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $character->id }}">
                            <input type="submit" id="update" value="modifier"> 
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection