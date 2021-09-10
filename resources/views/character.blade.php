@extends('layout.base')

@section('css', 'characterDetail')

@section('title', 'Description')

@section('content')
    <div>
        <p>Nom : {{ $character->name}} </p>
    </div>
    <div>
        <p>Année de création : {{ $character->creationDate }} </p>
    </div>
    <div>
        <p>Nom de la BD : {{ $character->link }} </p>
    </div>
    <div>
        <p>Dessinateur : {{ $character->designer->name}} </p>
    </div>
@endsection