<?php

 session_start();

  if(!isset($_SESSION['loggato']) || $_SESSION['loggato']!==true){
    header("location: login.php");
    exit;
  }

?>


<html>
  <head>
    <meta charset="utf-8">
    <title>RHINONATION - Playlists</title>
    <link rel="stylesheet" href="css_file/playlists.css?ts=<?=time()?>&quot">
    <script src="js_file/playlists.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <header>
      <nav>
        <div class="nav-logo">
          <img class="logo" src="css_file/immagini/logo.jpg">
          <span>RHINONATION</span>
        </div>
        <div id="links">
          <a href='index.php' id="home">Home</a>
          <a href='account.php'>Account</a>
          <a href='scheda.php'>Scheda</a>
          <a href='ricerca_scheda.php'>Ricerca</a>
          <a href='playlists.php'>Playlists</a>
        </div>
        <div id="menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>
      <h1>PLAYLISTS</h1>
      <div id="overlay"></div>
    </header>

    <article>
        <a href="#" class="leggi-di-più">Leggi di più</a>
            <p id="p1" class="hidden-p1">
            Esplora le Playlist Spotify preferite dal team RHINONATION che ti potranno aiutare
            nelle tue sessioni di allenamento intense. Corri su Spotify e ascoltale!
            </p>
        <section id="playlist_view"></section>

    </article>

    <footer>
        <p>
            DEVELOPED BY GIUSEPPE LEFOSSE 1000019322
        </p>
    </footer>

    </body>

   

</html>