<div>
    <div class="items">
        <?php
        $selected_menu = null;
        foreach ($GLOBALS['Menus'] as $menu) {
            if ($menu->getId() == $_GET['id']) {
                $selected_menu = $menu;
                break;
            }
        }

        function getItems($item)
        {
            if ($GLOBALS['selected_menu'] == null) {
                return true;
            };
            return $item->getCategoryID() == $GLOBALS['selected_menu']->getId();
        }

        $Items = array_filter($Items, "getItems");

        foreach ($Items as $item) {
            include('./inc/Item.php');
        }
        ?>
    </div>
</div>