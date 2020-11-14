<div style="margin: 10px;">
    <div class="item">
        <img src="<?php echo $item->getImgURL(); ?>" alt="">
        <button onclick='addToCart(<?php echo json_encode($item->getArray()) ?>)'><?php echo $item->getPrice(); ?> BDT</button>
        <p class="dis"><?php echo $item->getDescription(); ?></p>
    </div>
    <h4> <a href="<?php echo urlGen('/item', ['id' => $item->getId()]) ?>"><?php echo $item->getName(); ?> <?php echo $item->getPrice(); ?> BDT</a></h4>
</div>