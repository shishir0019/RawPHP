<!DOCTYPE html>
<html lang="en">
<?php include_once('data.php') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $WebSite->getName(); ?></title>
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/store.legacy.min.js"></script>
</head>

<body>
    <header>
        <!-- Nav -->
        <?php include('./inc/Nav.php'); ?>
    </header>
    <hr style="margin: 0; border:1px solid #fff;">
    <div style="display: flex; justify-content: center;background-color: var(--primary-color);">
        <div class="container">
            <div class="menu">
                <div class="title">
                    <?php
                    $type = $_GET['type'];
                    if ($selected_menu == null) {
                        echo 'All Fish';
                    } else {
                        echo $selected_menu->getName();
                    }
                    ?>
                </div>
                <div class="cart">
                    <button id="cartButton" onclick="cartTigger()">
                        <!-- Cart -->
                        <span style="color: #fff; padding:0 5px; font: x-larger; font-weight:bold;"><span class="totalPrice">0</span> BDT</span>
                        <span id="cart_count" class="chip">0</span>
                        <img src="./assets/icon/cart.svg" alt="" height="25" width="25">
                    </button>
                    <!-- Cart List -->
                    <?php include('./inc/CartList.php'); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="container">