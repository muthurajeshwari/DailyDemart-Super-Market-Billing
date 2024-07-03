<?php
    include("./config.php");
    $uid = $_POST['id'];
    $card = $_POST['card'];
    $query = mysqli_query($db,"UPDATE user set card='$card' where uid='$uid';");
    if($query){
        echo "card updated";
    }
    else{
        echo "Error : ".mysqli_error($db);
    }
    mysqli_close($db);
?>