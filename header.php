<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Déconnexionnn</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
