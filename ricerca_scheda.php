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
    <title>RHINONATION - Ricerca</title>
    <link rel="stylesheet" href="css_file/ricerca_scheda.css?ts=<?=time()?>&quot">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js_file/ricerca_scheda.js" defer></script>
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
      <h1>RICERCA</h1>
      <div id="overlay"></div>
    </header>

    <article>
        <span>Ricerca una scheda inserendo il nome utente: </span>
        <form name='ricerca_scheda' action='scheda.php' method='get' id='ricerca_scheda'>
          <span id='descrizione'>Inserisci username:</span>
          <input id='barra' type="text" name='ricerca'>
          <input id='button' type="submit" value="Cerca">
        </form>
        <section class="grid">   
        </section>
        <div class='errore'></div>
    </article>

    <footer>
        <p>
            DEVELOPED BY GIUSEPPE LEFOSSE 1000019322
        </p>
    </footer>

    </body>

   

</html>