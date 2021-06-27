<?php 
// Page name
$pageName = 'Les actualités';

// Include du head
@include('parts/head.php');

?>
<body>

<!-- Include de la navbar -->
<?php
    @include('parts/nav.php');
?>

<main class="news-page-main-content">

   <section>

    <div class="container">

        <!-- Row Title -->
        <div class="row justify-content-center">

            <div class="col-12 text-center">
                <h1 class="page-title"><?php echo $pageName; ?></h1>
            </div>

        </div>  <!-- End - Row Title -->

        <!-- Actualités -->
        <ul class="row gy-3 g-md-4 g-xl-5" role="list">

            <!-- Col Article -->
            <li class="col-12 col-md-12 col-xl-4"> 
                <!-- Actu 1 -->
                <article class="card w-100">
                    <img class="card-img-top" src="img/ecran_min.webp" srcset="img/ecran@2x_min.webp"  alt="Écran d'ordinateur avec des lignes de codes affichées et un terminal ouvert">
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
                    <img class="card-img-top" src="img/laptop_min.webp" srcset="img/laptop@2x_min.webp"  alt="Ordinateur portable ouvert affichant des lignes de code sur son écran">
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
                    <img class="card-img-top" src="img/clavier_min.webp" srcset="img/clavier@2x_min.webp"  alt="Clavier d'ordinateur noir rétroéclairé en bleu">
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
            <li class="col-12 col-md-12 col-xl-4"> 
                <!-- Actu 4 -->
                <article class="card w-100">
                    <img class="card-img-top" src="img/ecran_min.webp" srcset="img/ecran@2x_min.webp"  alt="Écran d'ordinateur avec des lignes de codes affichées et un terminal ouvert">
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
                <!-- Actu 5 -->
                <article class="card">
                    <img class="card-img-top" src="img/laptop_min.webp" srcset="img/laptop@2x_min.webp"  alt="Ordinateur portable ouvert affichant des lignes de code sur son écran">
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
                <!-- Actu 6 -->
                <article class="card">
                    <img class="card-img-top" src="img/clavier_min.webp" srcset="img/clavier@2x_min.webp"  alt="Clavier d'ordinateur noir rétroéclairé en bleu">
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

        <!-- Pagination -->
        <div class="row">
            <div class="col-12">
                <nav aria-label="Navigation entre les pages de formations">
                    <ul class="pagination">
                        <li class="page-item mx-3">
                        <a class="page-link px-3" href="#" aria-label="Précédent">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item mx-3"><a class="page-link px-3 active" href="#">1</a></li>
                        <li class="page-item mx-3"><a class="page-link px-3" href="#">2</a></li>
                        <li class="page-item mx-3"><a class="page-link px-3" href="#">3</a></li>
                        <li class="page-item mx-3">
                        <a class="page-link px-3" href="#" aria-label="Suivant">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>  <!-- End - Pagination -->

    </div>  <!-- End - Container -->

</main>

<!-- Include du footer -->
<?php
    @include('parts/footer.php');
?>

    