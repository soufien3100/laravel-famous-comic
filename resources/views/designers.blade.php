@extends('layout.base')
@section('css','update')
@section('title','Modifier')
@section('content')
    <h1 class="title">Modifier un Personnage</h1>
    <div>
        <form action="/updateCharacter/{{$character->id}}" method="POST">
            @csrf
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" value="{{ $character->name }}">
            </div>
            <div>
                <label for="date">Date de creation </label>
                <input type="number" id="date" name="creationDate" value="{{$character->creationDate}}">
            </div>
            <div>
                <label for="linkId">Nom de bd affiliée  </label>
                <input type="text" id="linkId" name="link" value="{{$character->link}}">
            </div>
            <div>
                <label for="designer">Dessinateur</label>
                <select type="text" name="designer_id" id="designer" >
                    @foreach ($designer as $designer)
                        <option value="{{ $designer->id}}">{{ $designer->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <input type="submit" value="modifier">
            </div>
        </form>
    </div>
@endsection