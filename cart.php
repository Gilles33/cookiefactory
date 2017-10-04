<?php require 'inc/head.php'; ?>
<section class="cookies container">
    <div class="row">
        <?php

        if (!isset($_COOKIE)) {
            echo '<h1 class="text-center alert">Votre panier est vide </h1>';
        } else {
            echo '<h1> Votre choix</h1>';
            foreach ($_COOKIE as $cart) {
                switch ($cart) {
                    case 32:
                        echo '<div class="col-sm-3 thumbnail">
                <img src="assets/img/product-32.jpeg" alt="cookies choclate chips" class="img-responsive">
                <h3>M&Ms cookies</h3>
                <p>Cooked by Penny !</p>
                </div>';
                        break;
                    case 36:
                        echo '<div class="col-sm-3 thumbnail">
                <img src="assets/img/product-36.jpeg" alt="cookies choclate chips" class="img-responsive">
                <h3>Chocolate chips</h3>
                <p>Cooked by Bernadette !</p>
                </div>';
                        break;
                    case 46:
                        echo '<div class="col-sm-3 thumbnail">
                <img src="assets/img/product-46.jpeg" alt="cookies choclate chips" class="img-responsive">
                <h3>Pecan nuts</h3>
                <p>Cooked by Penny !</p>
                </div>';
                        break;
                    case 58:
                        echo '<div class="col-sm-3 thumbnail">
                <img src="assets/img/product-58.jpeg" alt="cookies choclate chips" class="img-responsive">
                <h3>Chocolate cookie</h3>
                <p>Cooked by Bernadette !</p>
                </div>';
                        break;
                }
            }
        }

        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

