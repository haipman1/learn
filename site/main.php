<?php
    require 'connect.php';
    //echo $_POST['name']. '<br>'. $_POST['tel'];

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $age = $_POST['age'];
    $category = $_POST['category'];
    $query = "INSERT INTO `info`(`name`, `telephone`, `age`, `category`) VALUES('$name', '$tel', '$age', '$category')";
    $pdo->exec($query);



    /*$query_get = 'SELECT `telephone` FROM `info` WHERE `id`=1';
    $worker = $pdo->prepare($query_get);
    $worker->execute();
    $data =$worker->fetch();

    foreach ($data as $item) {
        echo $item;
    }*/








?>
