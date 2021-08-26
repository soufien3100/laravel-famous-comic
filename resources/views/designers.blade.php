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
        @foreach ($designers as $designer )
            <tr>
                <td>{{$designer->name}}</td>
                <td>{{$designer->birthday}}</td>
                <td>{{$designer->nationality}}</td>
                <td>
                    <form action="deleteDesigner" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $designer->id }}">
                        <input type="submit" id="delete" value="supprimer"> 
                    </form>
                </td>
            </tr>   
        @endforeach
    </tbody>
</table>
@endsection