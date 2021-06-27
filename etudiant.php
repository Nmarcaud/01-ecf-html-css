<?php 
// Page name
$pageName = 'Étudiant';

// Include du head
@include('parts/head.php');

?>
<body>

<!-- Include de la navbar -->
<?php
    @include('parts/nav.php');
?>

<main class="student-page-main-content">

    <!-- Section student -->
    <section class="student-text-content">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 d-flex justify-content-center">
                    <img class="student-img-page" src="img/francine_min.webp" srcset="img/francine@2x_min.webp 2x" alt="Portrait de Francine Auhi">
                </div>
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h1 class="page-title">Francine Auhi</h1>
                </div>
            </div>

            <ul class="features-list row gy-5 g-md-5" role="list">
                <li class="feature-item col-12 col-md-6 col-xl-3">
                    <h2 class="feature-title">Son film</h2>
                    <p class="feature-text">Lorem ipsum dolor sit</p>
                </li>
                <li class="feature-item col-12 col-md-6 col-xl-3">
                    <h2 class="feature-title">Sa série</h2>
                    <p class="feature-text">Lorem ipsum dolor sit</p>
                </li>
                <li class="feature-item col-12 col-md-6 col-xl-3">
                    <h2 class="feature-title">Son jeu vidéo</h2>
                    <p class="feature-text">Lorem ipsum dolor sit</p>
                </li>
                <li class="feature-item col-12 col-md-6 col-xl-3">
                    <h2 class="feature-title">Son héros/héroïne</h2>
                    <p class="feature-text">Lorem ipsum dolor sit</p>
                </li>
                <li class="feature-item col-12 col-md-6 col-xl-3">
                    <h2 class="feature-title">Son livre</h2>
                    <p class="feature-text">Lorem ipsum dolor sit</p>
                </li>
                <li class="feature-item col-12 col-md-6 col-xl-3">
                    <h2 class="feature-title">Sa chanson</h2>
                    <p class="feature-text">Lorem ipsum dolor sit</p>
                </li>
                <li class="feature-item col-12 col-md-6 col-xl-3">
                    <h2 class="feature-title">Son application</h2>
                    <p class="feature-text">Lorem ipsum dolor sit</p>
                </li>
                <li class="feature-item col-12 col-md-6 col-xl-3">
                    <h2 class="feature-title">Son site web</h2>
                    <p class="feature-text">Lorem ipsum dolor sit</p>
                </li>
                <li class="feature-item col-12">
                    <h2 class="feature-title">En deux mots</h2>
                    <p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.</p>
                </li>
            </ul>

        </div>  <!-- End - Container -->

    </section>  <!-- End - Section student -->

</main>

<!-- Include du footer -->
<?php
    @include('parts/footer.php');
?>

    