<?php
    include ("./config.php");
    $name = $_POST['name'];
    $eid = $_POST['id'];
    $pass = $_POST['pwd'];
    $query = mysqli_query($db,"INSERT INTO employee(name,eid,pwd) values ('$name','$eid','$pass');");
    if($query){
        echo "Employee added";
    }
    else{
        echo "Error : ".mysqli_error($db);
    }
    mysqli_close($db);

?>