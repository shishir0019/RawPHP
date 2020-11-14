<?php include('./inc/Header.php') ?>

<div>
    <?php // include('./inc/Slider.php') 
    ?>
</div>

<div class="items">
    <?php foreach ($Items as $item) { ?>
        <?php include('./inc/Item.php') ?>
    <?php } ?>
</div>

<?php include('./inc/Footer.php') ?>