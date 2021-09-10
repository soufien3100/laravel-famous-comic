@extends('layouts.base')
@section('title', 'Dessinateur')
@section('css', 'Designers')

@section('content')
<h1>Liste des Dessinateurs</h1>
<div class="">
    <table>
        <thead>
            <th>Nom</th>
            <th>Année de naissance</th>
            <th>Nationalité</th>
        </thead>
        <tbody>
            @foreach ($designers as $designer)
                <tr>
                    <td>{{ $designer->name }}</td>
                    <td>{{ $designer->birthday }}</td>
                    <td>{{ $designer->nationality }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection