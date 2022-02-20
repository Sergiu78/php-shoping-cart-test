<?php

/**
 * Получение продуктов
 **/

function get_products()
{
    global $connection;
    $query = "SELECT * FROM products";
    $res = mysqli_query($connection, $query);

    $arr_cat = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $arr_cat[$row['id']] = $row;
    }
    return $arr_cat;
}




