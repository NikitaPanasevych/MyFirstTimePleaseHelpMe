<?php

require_once  "../app/function.php";

$link = connect();
$query = "select * from users";

$ar = $link->query($query)->fetchAll(2);

foreach ($ar as $item){
    echo $item['name']." ";
}
