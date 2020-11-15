<?php

function urlGen($url, $params = [])
{
    $isParams = count($params) > 0 ? '?' : '';
    $query = http_build_query($params) . "\n";
    return "http://$_SERVER[HTTP_HOST]{$url}" . $isParams . $query;
}
