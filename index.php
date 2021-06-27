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
                <div class="col-12 col-md-9 offset-md-3">

                    <div class="hero-content">
                        <h1 class="site-title" title="La meilleure promo !">Bienvenue sur le site de la promotion DWWM2021-3</h1>
                        <a class="btn-orange btn-cta align-self-end" href="etudiants.php">Rencontrez nos étudiants</a>
                    </div>
                    
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
            <ul class="row gy-3 g-md-4 g-xl-5" role="list">

                <!-- Col Article -->
                <li class="col-12 col-md-12 col-xl-4"> 
                    <!-- Actu 1 -->
                    <article class="card w-100">
                        <img class="card-img-top" src="img/ecran_min.webp" srcset="img/ecran@2x_min.webp 2x" alt="Écran d'ordinateur avec des lignes de codes affichées et un terminal ouvert">
                        <div class="card-body">
                            <small class="card-date">
                                <img class="card-cal-picto" src="img/icon-date.svg"alt="Icone de calendrier">
                                <time datetime="2020-02-12">12/02/2020</time>
                            </small>
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="actualite.php" class="btn-orange d-flex justify-content-center py-2 card-footer-btn">Lire la suite <img class="right-arrow-icon" src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </li>  <!-- End - Col Article -->

                <!-- Col Article -->
                <li class="col-12 col-md-6 col-xl-4"> 
                    <!-- Actu 2 -->
                    <article class="card">
                        <img class="card-img-top" src="img/laptop_min.webp" srcset="img/laptop@2x_min.webp 2x" alt="Ordinateur portable ouvert affichant des lignes de code sur son écran">
                        <div class="card-body">
                            <small class="card-date">
                                <img class="card-cal-picto" src="img/icon-date.svg"alt="Icone de calendrier">
                                <time datetime="2020-02-12">12/02/2020</time>
                            </small>
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="actualite.php" class="btn-orange d-flex justify-content-center py-2 card-footer-btn">Lire la suite <img class="right-arrow-icon" src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </li>  <!-- End - Col Article -->

                <!-- Col Article -->
                <li class="col-12 col-md-6 col-xl-4"> 
                    <!-- Actu 3 -->
                    <article class="card">
                        <img class="card-img-top" src="img/clavier_min.webp" srcset="img/clavier@2x_min.webp 2x"  alt="Clavier d'ordinateur noir rétroéclairé en bleu">
                        <div class="card-body">
                            <small class="card-date">
                                <img class="card-cal-picto" src="img/icon-date.svg"alt="Icone de calendrier">
                                <time datetime="2020-02-12">12/02/2020</time>
                            </small>
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="actualite.php" class="btn-orange d-flex justify-content-center py-2 card-footer-btn">Lire la suite <img class="right-arrow-icon" src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </li>  <!-- End - Col Article -->

            </ul>  <!-- End - Row Actualités -->
            
        
        </div>  <!-- End - Container -->
    </section>  <!-- End - Dernières actualitées -->


    <!-- Rencontrez les étudiants -->
    <section class="meet-students bg-orange">
        <div class="container">

            <!-- Titre de section -->
            <div class="row">
                <div class="col-12"> 
                    <h2 class="section-title">Rencontrez les étudiants</h2>
                </div>
            </div>

            <!-- Les Étudiants -->
            <ul class="row gy-3 g-md-4 g-xl-5" role="list">

                <!-- Col étudiant -->
                <li class="student-card col-12 col-md-6 col-xl-3">
                    <img class="student-img" src="img/francine_min.webp" srcset="img/francine@2x_min.webp 2x" alt="Portrait de Francine Auhi">
                    <h3 class="student-name">Francine Auhi</h3>
                    <a href="etudiant.php" class="student-link">En savoir plus</a>
                </li>

                <!-- Col étudiant -->
                <li class="student-card col-12 col-md-6 col-xl-3">
                    <img class="student-img" src="img/ali_min.webp" srcset="img/ali@2x_min.webp 2x" alt="Portrait de Ali Korn">
                    <h3 class="student-name">Ali Korn</h3>
                    <a href="etudiant.php" class="student-link">En savoir plus</a>
                </li>

                <!-- Col étudiant -->
                <li class="student-card col-12 col-md-6 col-xl-3">
                    <img class="student-img" src="img/jean_min.webp" srcset="img/jean@2x_min.webp 2x" alt="Portrait de Jean Vascrit">
                    <h3 class="student-name">Jean Vascrit</h3>
                    <a href="etudiant.php" class="student-link">En savoir plus</a>
                </li>

                <!-- Col étudiant -->
                <li class="student-card col-12 col-md-6 col-xl-3">
                    <img class="student-img" src="img/lara_min.webp" srcset="img/lara@2x_min.webp 2x" alt="Portrait de Lara Velle">
                    <h3 class="student-name">Lara Velle</h3>
                    <a href="etudiant.php" class="student-link">En savoir plus</a>
                </li>

            </ul>  <!-- End - Row Étudiants -->
        
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
            <ul class="row g-5" role="list">

                <!-- Col module -->
                <li class="col-12 col-md-6">
                    <!-- Module 1 -->
                    <article class="card">
                        <img class="card-img-top" src="img/code-line_min.webp" srcset="img/code-line@2x_min.webp 2x" alt="Zoom sur des lignes de code">
                        <div class="card-body">
                            <h3 class="card-title">Module HTML/CSS</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="module.php" class="btn-orange d-flex justify-content-center py-2 card-footer-btn">Lire la suite <img class="right-arrow-icon" src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </li>

                <!-- Col module -->
                <li class="col-12 col-md-6">
                    <!-- Module 2 -->
                    <article class="card">
                        <img class="card-img-top" src="img/clavier-orange_min.webp" srcset="img/clavier-orange@2x_min.webp 2x"  alt="Un clavier coloré en orange et rose et le logo npm">
                        <div class="card-body">
                            <h3 class="card-title">Module JavaScript</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, …</p>
                        </div>
                        <div class="card-footer">
                            <a href="module.php" class="btn-orange d-flex justify-content-center py-2 card-footer-btn">Lire la suite <img class="right-arrow-icon" src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></a>
                        </div>
                    </article>
                </li>

            </ul>  <!-- End - Row Modules de formation -->

        </div>  <!-- End - Container -->
    </section>  <!-- End - Les modules de la formation -->

</main>


<!-- Include du footer -->
<?php
    @include('parts/footer.php');
?>

    