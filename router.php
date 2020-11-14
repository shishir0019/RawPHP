<?php
include('./model/Path.php');

$paths = [
    new Path('/', './views/index.php'),
    new Path('/category', './views/category.php'),
    new Path('/categories', './views/categories.php'),
    new Path('/item', './views/item.php'),
    new Path('/items', './views/items.php'),
    new Path('/cart', './views/cart.php'),
    new Path('/carts', './views/carts.php'),
    new Path('/page', './views/page.php')
];

function route($url)
{
    foreach ($GLOBALS['paths'] as $path) {
        if ($url == '') {
            $url = '/';
        }
        if ($url == $path->getPath()) {
            return $path;
        }
    }
}

$url = "$_SERVER[PATH_INFO]";

if (route($url) == '') {
    include('./views/404.php');
} else {
    include(route($url)->getView());
}
