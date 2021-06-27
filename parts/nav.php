<!-- Navigation du site -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

        <!-- Hero -->
        <a class="navbar-brand" href="index.php">Dwwm</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-grow-0" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($pageName) && $pageName === 'Home') {echo 'active';}?>" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($pageName) && $pageName === 'La Formation') {echo 'active';}?>" href="formation.php">La formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($pageName) && $pageName === 'Les étudiants') {echo 'active';}?>" href="etudiants.php">Les étudiants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($pageName) && $pageName === 'Les actualités') {echo 'active';}?>" href="actualites.php">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(isset($pageName) && $pageName === 'Nous contacter') {echo 'active';}?>" href="contact.php">Nous contacter</a>
                </li>
        
            </ul>
        </div>  <!-- End - Navbar -->

    </div>  <!-- End - Container -->
</nav>  <!-- End - Navigation du site -->
