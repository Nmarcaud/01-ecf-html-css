<?php 
// Page name
$pageName = 'Home';

// Include du head
@include('parts/head.php');

?>
<body>

<!-- Include de la navbar -->
<?php
    @include('parts/nav.php');
?>

<main>

    <!-- Hero -->
    <section class="hero">
        <div class="container">

            <div class="row">
                <div class="hero-content col-12 col-md-9 offset-md-3 d-flex flex-column">

                    <h1 class="site-title" title="La meilleure promo !">Bienvenue sur le site de la promotion DWWM2021-3</h1>
                    <a class="btn-orange btn-cta align-self-end text-decoration-none" href="#">Rencontrez nos étudiants</a>

                </div>
            </div>  <!-- End - Row -->
        </div>  <!-- End - Container -->

    </section>  <!-- End - Hero -->


    <!-- Dernières actualitées -->
    <section class="news">
        <div class="container">

            <!-- Titre de section -->
            <div class="row">
                <div class="col-12"> 
                    <h2 class="section-title">Les dernières actualités</h2>
                </div>
            </div>
            
            <!-- Actualités -->
            <div class="row g-4">

                <!-- Col Article -->
                <div class="col-12 col-sm-12 col-lg-4"> 
                    <!-- Actu 1 -->
                    <article class="card">
                        <img class="card-img-top" src="img/ecran_min.webp" srcset="img/ecran@2x_min.webp"  alt="Écran d'ordinateur avec des lignes de codes affichées et un terminal ouvert">
                        <div class="card-body">
                            <small class="text-muted d-flex"><img class="calendar-icon" src="img/icon-date.svg"alt="Icone de calendrier"> 12/02/2020</small>
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="actualite.php" class="btn d-flex">Lire la suite <img src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </div>  <!-- End - Col Article -->

                <!-- Col Article -->
                <div class="col-12 col-sm-6 col-lg-4"> 
                    <!-- Actu 2 -->
                    <article class="card">
                        <img class="card-img-top" src="img/laptop_min.webp" srcset="img/laptop@2x_min.webp"  alt="Ordinateur portable ouvert affichant des lignes de code sur son écran">
                        <div class="card-body">
                            <small class="text-muted d-flex"><img src="img/icon-date.svg"alt="Icone de calendrier"> 12/02/2020</small>
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="actualite.php" class="btn d-flex">Lire la suite <img src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </div>  <!-- End - Col Article -->

                <!-- Col Article -->
                <div class="col-12 col-sm-6 col-lg-4"> 
                    <!-- Actu 3 -->
                    <article class="card">
                        <img class="card-img-top" src="img/clavier_min.webp" srcset="img/clavier@2x_min.webp"  alt="Clavier d'ordinateur noir rétroéclairé en bleu">
                        <div class="card-body">
                            <small class="text-muted d-flex"><img src="img/icon-date.svg"alt="Icone de calendrier"> 12/02/2020</small>
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="actualite.php" class="btn d-flex">Lire la suite <img src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </div>  <!-- End - Col Article -->

            </div>  <!-- End - Row Actualités -->
            
        
        </div>  <!-- End - Container -->
    </section>  <!-- End - Dernières actualitées -->


    <!-- Rencontrez les étudiants -->
    <section class="meet-students">
        <div class="container">

            <!-- Titre de section -->
            <div class="row">
                <div class="col-12"> 
                    <h2 class="section-title">Rencontrez les étudiants</h2>
                </div>
            </div>

            <!-- Les Étudiants -->
            <div class="row g-4">

                <!-- Col étudiant -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <img class="student-img" src="img/francine_min.webp" srcset="img/francine@2x_min.webp" alt="Portrait de Francine Auhi">
                    <h3 class="student-name">Francine Auhi</h3>
                    <a href="etudiant.php" class="student-link">En savoir plus</a>
                </div>

                <!-- Col étudiant -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <img class="student-img" src="img/ali_min.webp" srcset="img/ali@2x_min.webp" alt="Portrait de Ali Korn">
                    <h3 class="student-name">Ali Korn</h3>
                    <a href="etudiant.php" class="student-link">En savoir plus</a>
                </div>

                <!-- Col étudiant -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <img class="student-img" src="img/jean_min.webp" srcset="img/jean@2x_min.webp" alt="Portrait de Jean Vascrit">
                    <h3 class="student-name">Jean Vascrit</h3>
                    <a href="etudiant.php" class="student-link">En savoir plus</a>
                </div>

                <!-- Col étudiant -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <img class="student-img" src="img/lara_min.webp" srcset="img/lara@2x_min.webp" alt="Portrait de Lara Velle">
                    <h3 class="student-name">Lara Velle</h3>
                    <a href="etudiant.php" class="student-link">En savoir plus</a>
                </div>

            </div>  <!-- End - Row Étudiants -->
        
        </div>  <!-- End - Container -->
    </section>  <!-- End - Rencontrez les étudiants -->


    <!-- Les modules de la formation -->
    <section class="formations">
        <div class="container">

            <!-- Titre de section -->
            <div class="row">
                <div class="col-12"> 
                    <h2 class="section-title">Les modules de la formation</h2>
                </div>
            </div>

            <!-- Les Modules de formation -->
            <div class="row g-4">

                <!-- Col module -->
                <div class="col-12 col-md-6">
                    <!-- Module 1 -->
                    <article class="card">
                        <img class="card-img-top" src="img/code-line_min.webp" srcset="img/code-line@2x_min.webp"  alt="Zoom sur des lignes de code">
                        <div class="card-body">
                            <h3 class="card-title">Module HTML/CSS</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="module.php" class="btn d-flex">Lire la suite <img src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </div>

                <!-- Col module -->
                <div class="col-12 col-md-6">
                    <!-- Module 2 -->
                    <article class="card">
                        <img class="card-img-top" src="img/clavier-orange_min.webp" srcset="img/clavier-orange@2x_min.webp"  alt="Un clavier coloré en orange et rose et le logo npm">
                        <div class="card-body">
                            <h3 class="card-title">Module JavaScript</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="module.php" class="btn d-flex">Lire la suite <img src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </div>

            </div>  <!-- End - Row Modules de formation -->
        
        </div>  <!-- End - Container -->
    </section>  <!-- End - Les modules de la formation -->

</main>


<!-- Include du footer -->
<?php
    @include('parts/footer.php');
?>

    