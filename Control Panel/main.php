<?php

    $test = 'nice';
    $pdo = new PDO('mysql:host=localhost;dbname=task', 'Eloxez781', 'Slkv12348765');


    echo $test.'<br>';


    $query_get = "SELECT * FROM `info` WHERE `status`=0";
    $answer = $pdo->prepare($query_get);
    $answer->execute();
    $worker = $answer->fetch();

    $id = $worker[0];
    $name = $worker[1];
    $tel = $worker[2];
    $age = $worker[3];
    $category = $worker[4];
    $checked = $worker[5];
    $status = $worker[6];


    if($worker != null & count($worker)/2 == 7){
        echo "worker is correct";
    }
    if($worker != null & count($worker)/2 != 7){
        echo "error in count of els"."<br>";
        echo count($worker)." els in worker";
    }
    if($worker == null){
        echo "null";
    }


    echo '<br><br>id:  '.$id;
    echo '<br>name:  '.$name;
    echo '<br>telephone:  '.$tel;
    echo '<br>category:  '.$category;
    echo '<br>isChecked:  '.$checked;
    echo '<br>status:  '.$status;




    $query_get1 = "SELECT `isChecked` FROM `info` WHERE `status`=0";
    $answer1 = $pdo->prepare($query_get1);
    $answer1->execute();
    $worker1 = $answer1->fetch();
    echo '<br><br>isChecked:  '.$checked;

    $query = "UPDATE `info` SET `isChecked`='1' WHERE `name`='$name'";
    $pdo->exec($query);



















?>