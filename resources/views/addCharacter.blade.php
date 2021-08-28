
@extends('layout.base')
@section('title','Ajouter')
@section('css','addCharacter')

@section('content')
    <form action="addCharacter" method="POST">
        @csrf
        <div>
            <label for="nameCharacter">Nom</label>
            <input type="text" id="nameCharacter" name="name" value="" >
        </div>
        <div>
            <label for="creation">Date de creation  </label>
            <input type="text" id="creation" name="creationDate" value="">
        </div>
        <div>
            <label for="linkDb">Nom de bd affliée</label>
            <input type="text" id="linkDb" name="link" value="">
        </div>
         <div class="form">
            <label for="designer">Dessinateur : </label>
            <select type="text" name="designer_id" id="designer" required>
                @foreach ($designers as $designer)
                    <option value="{{ $designer->id }}">{{ $designer->name }}</option> 
                @endforeach
            </select>
        </div> 
        <button type="submit" > Envoyer !</button>
    </form>
@endsection