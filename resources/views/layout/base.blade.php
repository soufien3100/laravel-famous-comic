<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/boostrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('title')</title>
  </head>
<body>
  <header>
    <div class="wrapper">
      <nav>
        <ul class="nav-bar">
          <li class="nav-a"><a href="/">Accueil</a></li>
          <li class="nav-a"><a href="listCharacter">Liste des personnages</a></li>
          <li class="nav-a"><a href="addCharacter">Ajouter un Personnage</a></li>
          <li class="nav-a"><a href="designers">liste des dessinateurs</a></li>
          <li class="nav-a"><a href="">Ajouter un dessinateur</a></li>
          <li class="nav-a"><a href="characters">bédéthèque-BD</a></li>
        </ul>
      </nav>  
    </div>
  </header>
  <main>
        @yield('content')
  </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>
