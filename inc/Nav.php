<nav class="container">
    <div class="title"><a href="/"><?php echo $WebSite->getName(); ?></a></div>
    <ul class="">
        <?php foreach ($Menus as $menu) { ?>
            <li><a href="<?php echo urlGen("/{$menu -> getType()}", ['id' => $menu -> getId(), 'name' => $menu -> getName()]) ?>"><?php echo $menu->getName(); ?></a></li>
        <?php } ?>
    </ul>
</nav>