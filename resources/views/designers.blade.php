@extends('layout.base')
@section('css','designers')
@section('title','Designer')

@section('content')
<h1>Livres</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Date de naissance</th>
            <th>Nationalité</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$designers->name}}</td>
                <td>{{$designers->birthday}}</td>
                <td>{{$designers->nationality}}</td>
                <td>
                    <form action="deleteDesigner" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $designers->id }}">
                        <input type="submit" id="delete" value="supprimer"> 
                    </form>
                </td>
            </tr>   
    </tbody>
</table>
@endsection