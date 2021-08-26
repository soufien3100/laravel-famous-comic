
@extends('layout.base')
@section('title','AjouterDesigner')
@section('css','addDesigner')

@section('content')
    <form action="addDesigner" method="POST">
        @csrf
        <div>
            <label for="nameDesigner">Nom</label>
            <input type="text" id="nameDesigner" name="name" value="" >
        </div>
        <div>
            <label for="date">Date de naissance </label>
            <input type="text" id="date" name="birthDay" value="">
        </div>
        <div>
            <label for="nationality">Nationalité</label>
            <input type="text" id="nationality" name="nationality" value="">
        </div>
        <div>
            <button type="submit" > Envoyer !</button>
        </div>    
    </form>
@endsection