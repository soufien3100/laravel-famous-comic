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
                <td>{{$designer->name}}</td>
                <td>{{$designer->birthday}}</td>
                <td>{{$designer->nationality}}</td>
            </tr>   
    </tbody>
</table>
@endsection