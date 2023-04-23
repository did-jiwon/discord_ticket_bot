<?php
    require_once 'db.class.php';

    $result = DB::query('SELECT * FROM topic');
    $string = json_encode($result);
    echo "$string";
?>