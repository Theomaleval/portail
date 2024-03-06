<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="light-drak-style.css">


<div class="top-band"></div>



</div class="rectangle">
    <label>
        <input type="checkbox" name="checkbox" class="toggle-checkbox" />
        <div class="toggle-slot">
            <div class="toggle-button"></div>
        </div>
    </label>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                    <a class="nav-link btn btn-logout custom-btn" href="logout.php">Déconnexion</a>
                    <!-- Ajoutez la classe "custom-btn" pour une personnalisation supplémentaire -->
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
