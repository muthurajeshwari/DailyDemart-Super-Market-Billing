<?php
    include ("./config.php");
    $name = $_POST['name'];
    $uid = $_POST['id'];
    $pno = $_POST['ph'];
    $card = $_POST['Card'];
    $query = mysqli_query($db,"INSERT INTO user(name,uid,pno,card) values ('$name','$uid','$pno','$card');");
    if($query){
        header("Location:maincal.html");
    }
    else{
        echo "Error : ".mysqli_error($db);
    }
    mysqli_close($db);
?>