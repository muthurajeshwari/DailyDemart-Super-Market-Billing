<?php
    include('./config.php');
    $eid = $_POST["id"];
    $query = mysqli_query($db,"DELETE FROM employee where eid = '$eid';");
    if($query){
        echo "Employee deleted";
    }
    else{
        echo "Error : ".mysqli_error($db);
    }
    mysqli_close($db);
?>