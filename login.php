<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->
<?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
    <form action="submit_login.php" method="POST">
        <!-- si message d'erreur on l'affiche -->
        <?php if (isset($_SESSION['LOGIN_ERROR_MESSAGE'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['LOGIN_ERROR_MESSAGE'];
                unset($_SESSION['LOGIN_ERROR_MESSAGE']); ?>
            </div>
        <?php endif; ?>

<div style="position: relative; width: 200px; height: auto;">
    <img class="image" src="http://localhost:8080/portail/logo-IGPN.png" alt="Logo IGPN" style="width: 125%; height: auto; position: absolute; top: -180px; left: -400px;">
    <p class="hotline-text" style="position: absolute; bottom: -150px; right: 375px; width: 100%; text-align: center; font-family: ;">En cas de problèmes merci de contacter la hotline au : 01-86-21-56-56</p>
</div>

<div class="center">
      <div class="rectangle" action="">
        <div class="title text-to-change">Login</div> <!-- Ajout de la classe text-to-change -->
        <span class="inputs">
          <span class="inputf">
            <input type="email" class="input" id="email" name="email" data-placeholder-white="Email" data-placeholder-black="Email" />
            <label for="email" class="label text-to-change">Email</label> <!-- Ajout de la classe text-to-change -->
            <span class="material-icons icon text-to-change">email</span> <!-- Ajout de la classe text-to-change -->
          </span>
          <span class="inputf">
            <input type="password" class="input" id="password" name="password" data-placeholder-white="Password" data-placeholder-black="Password">
            <label for="password" class="label text-to-change">Password</label> <!-- Ajout de la classe text-to-change -->
            <span class="material-icons icon text-to-change">lock</span> <!-- Ajout de la classe text-to-change -->
          </span>
        </span>
        <div class="links text-to-change"> <!-- Ajout de la classe text-to-change -->
        </div>
        <button type="submit" class="btn text-to-change"> <!-- Ajout de la classe text-to-change -->
          <span>Login</span>
          <div class="dots">
            <div class="dot" style="--delay: 0s"></div>
            <div class="dot" style="--delay: 0.25s"></div>
            <div class="dot" style="--delay: 0.5s"></div>
          </div>
        </button>
  <!-- Si utilisateur/trice bien connectée on affiche un message de succès -->
<?php else : ?>
    <div class="alert" role="alert">
        Vous êtes actuellement connecté en tant que <?php echo $_SESSION['LOGGED_USER']['email']; ?>
    </div>
<?php endif; ?>
