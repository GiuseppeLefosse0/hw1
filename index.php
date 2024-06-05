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
    <title>RHINONATION - Homepage</title>
    <link rel="stylesheet" href="css_file/index.css?ts=<?=time()?>&quot">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js_file/index.js" defer></script>
  </head>
  <body>

    <header>
      <nav>
        <div class="nav-logo">
          <img class="logo" src="css_file/immagini/logo.jpg">
          <span>RHINONATION</span>
        </div>
        <div id="links">
          <a href='homepage.php' id="home">Home</a>
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
      <h1>HOME</h1>
      <div id="overlay"></div>
    </header>
    <article>
        <img class="img-piani" src="css_file/immagini/raggiungi.png">
        <section>
            <div class="piani">
                <p>Indipendentemente dal tuo livello di esperienza, il nostro sito di formazione è
            qui per aiutarti a raggiungere la tua massima potenzialità. Unisciti a noi oggi stesso e inizia il
            tuo viaggio verso un corpo più forte, definito e scolpito.</p>
                <span>Scopri i nostri piani:</span>
                <span class='hidden' id='piano_sel'></span>
            </div>
        </section>

    </article>

    <footer>
        <p>
            DEVELOPED BY GIUSEPPE LEFOSSE 1000019322
        </p>
    </footer>

    </body>

   

</html>