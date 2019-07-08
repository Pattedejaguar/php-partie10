<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ex3p9</title>
</head>
<body>
  <!-- container Bootstrap -->
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron bg-info">
          <h1 class="display-3">PHP ex3p9</h1>
          <p class="lead">Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
              Bonus : Le faire en français.</p>
            <hr class="my-2">
          </div>
      </div>
        </header>
        <!-- main -->
        <main class="text-center">
         <?php
            // LC_TIME pour le format de date et d'heure
            // fr_FR.utf8 pour que la date soit en français
            setlocale (LC_TIME, 'fr_FR.utf8');
            // %A = jour de la semaine, complet - %d = jour du mois (2 chiffres) - %B = Mois - %Y = année (4 chiffres)
            echo strftime("%A %d %B %Y")
            ?>
         </main>
      <!-- scripts JQuery Popper et Bootstrap-->
    </body>
    </html>
