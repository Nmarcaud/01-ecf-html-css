<?php 
// Page name
$pageName = 'Nous contacter';

// Include du head
@include('parts/head.php');

?>
<body>

<!-- Include de la navbar -->
<?php
    @include('parts/nav.php');
?>

<main class="contact-page-main-content">

    <section>

        <div class="container">

            <!-- Row Title -->
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h1 class="page-title"><?php echo $pageName; ?></h1>
                </div>

            </div>  <!-- End - Row Title -->


            <!-- Form -->
            <div class="row justify-content-center pt-5">
                <div class="col-10">

                    <form id="contact-form" class="contact-form" action="#" method="post">
                        <div class="row gy-5 g-lg-5">
                            <div class="col-12 col-lg-6">
                                <label for="name" class="form-label">Votre nom</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom">
                            </div>

                            <div class="col-12 col-lg-6">
                                <label for="email" class="form-label">Votre e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse e-mail">
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Votre message</label>
                                <textarea class="form-control textarea" id="message" name="message" rows="8" placeholder="Tapez votre message"></textarea>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn-orange d-flex align-items-center py-2 px-4 rounded card-footer-btn submit-btn-form">Envoyer<img class="right-arrow-icon" src="img/icon-feather-arrow-right-circle.svg" alt="Icone flèche droite"></button>
                            </div>
                        </div>
            
                    </form>

                </div>
            </div>  <!-- End - Form Row -->
        </div>  <!-- End - Container -->

    </section>

</main>

<!-- Include du footer -->
<?php
    @include('parts/footer.php');
?>

    