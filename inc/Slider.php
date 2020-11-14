
<div style="padding: 10px;">
    <div id="slider">
      <?php foreach ($SlideItems as $item) { ?>
            <div class="slide">
                <div class="slide-title">
                    <h1><?php echo $item->getName(); ?></h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ducimus voluptatum deleniti
                        quo nisi harum beatae? Rem quisquam animi ex ipsum est culpa aut, itaque nostrum suscipit natus dolorum
                        officiis.
                    </p>
                </div>
                <img src="<?php echo $item->getURL(); ?>" alt="">
            </div>
        <?php } ?>
    </div>
</div>