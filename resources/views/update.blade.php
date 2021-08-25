@extends('layout.base')
@section('css','update')
@section('title','Modifier')

@section('content')


    <h1 class="title">Modifier un Personnage</h1>
    <div>
        <form action="/updateCharacter" method="POST">
            @csrf
            <div>
                <label for="date">Date de creation </label>
                <input type="number" id="date" name="title">
            </div>
            <div>
                <label for="link">Nom de bd affiliée  </label>
                <input type="text" id="link" name="author">
            </div>
            <div>
                <label for="nameDesigner"> Dessinateur </label>
                <input type="text" id="nameDesigner" name="designer" " >
            </div>
        <button> Modifier!</button>
        </form>
    </div>
@endsection