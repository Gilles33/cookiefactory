<?php require 'inc/head.php';

if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
}

/*
if (!empty($_GET['add_to_cart'])) {
    if (!isset($_COOKIE['cart'])) {
        setcookie('cart', $_GET['add_to_cart']);
    } elseif (!isset($_COOKIE['cart1'])) {
        setcookie('cart1', $_GET['add_to_cart']);
    } elseif (!isset($_COOKIE['cart2']))  {
        setcookie('cart2', $_GET['add_to_cart']);
    }
    }
*/
//glisser le i dans une vaiable de session au moment du login
if (!empty($_GET['add_to_cart'])) {
    $cart = "'" . 'cart' . $_SESSION["i"] . "'";
    if (!isset($_COOKIE[$cart])) {
        setcookie($cart, $_GET['add_to_cart']);
        $_SESSION["i"]++;
    }
}

?>
<section class="cookies container-fluid">
    <h1 class="text-center">Faites votre choix</h1>
    <p class="text-center">Soyez gourmant</p>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <a href="?add_to_cart=46" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <a href="?add_to_cart=36" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <a href="?add_to_cart=58" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpeg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <a href="?add_to_cart=32" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
