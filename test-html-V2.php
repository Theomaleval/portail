<!-- inclusion des variables et fonctions -->
<?php
session_start();
require_once(__DIR__ . '/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login test</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" type="text/css" href="light-dark-style.css">
    <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
    <script src="test.js" defer></script> <!-- Ajout du fichier JavaScript -->

    <!--Google Fonts and Icons-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
      rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"/>
  </head>
  <body id="page-body" class="d-flex flex-column min-vh-100"> <!-- Ajout de l'identifiant à la balise body -->

    <div class="container">
        <!-- inclusion de l'entête du site -->
        <?php require_once(__DIR__ . '/header.php'); ?>

        <!-- Formulaire de connexion -->
        <?php require_once(__DIR__ . '/login.php'); ?>

        <?php foreach (getRecipes($recipes) as $recipe) : ?>
            <article>
            </article>
        <?php endforeach ?>
    </div>
    
      </div class="rectangle">
    </div>
    <label>
      <input type="checkbox" name="checkbox" class="toggle-checkbox" />
      <div class="toggle-slot">
        <div class="toggle-button"></div>
      </div>
    </label>

    <script src="script.js" defer></script> <!-- Ajout du fichier JavaScript -->
    <script>
      var btn = document.querySelector(".btn");
      var inputs = document.querySelectorAll(".input");
      btn.onclick = function () {
        btn.classList.toggle("active");
        setTimeout(() => {
          btn.classList.toggle("active");
          inputs[1].classList.toggle("active");
        }, 1500);
        setTimeout(() => {
          inputs[1].classList.toggle("active");
        }, 3000);
      };
    </script>



    
  </body>
</html>
