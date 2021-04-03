<?php
include_once './includes/dbh.php';
include "./includes/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Boxes</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div id="products">
        <div class="product">
            <h2 class="title">Product title 1</h2><img src="./images/prod1.jpg" alt="" class="product-image" width="240" height="240"><button data-indexNumber="1" data-modal-target="#modal" class="btn">Click to open</button>
        </div>
        <div class="product">
            <h2 class="title">Product title 2</h2><img src="./images/prod2.jpg" alt="" class="product-image"><button data-indexNumber="2" data-modal-target="#modal" class="btn">Click to open</button>
        </div>
        <div class="product">
            <h2 class="title">Product title 3</h2><img src="./images/prod3.jpg" alt="" class="product-image"><button data-indexNumber='3' id="b3" data-modal-target="#modal" class="btn">Click to open</button>
        </div>
        <!-- Modal -->

        <div class="modal" id="modal">
            <div class="modal-header">
                <div class="modal-title">Example modal title</div>
                <button data-close-btn class="close-btn">&times;</button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    $productsObj = new ProductsView();
                    $productsObj->ShowProduct("2");
                    ?>
                </p>
            </div>
        </div>
        <div id="overlay"></div>

    </div>

</body>
<script src="./assets/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>