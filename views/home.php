<div>
    <div>
        <?php include('./inc/Slider.php')
        ?>
    </div>

    <div class="items">
        <?php foreach ($Items as $item) {
        ?>
            <?php include('./inc/Item.php')
            ?>
        <?php } ?>
    </div>
</div>