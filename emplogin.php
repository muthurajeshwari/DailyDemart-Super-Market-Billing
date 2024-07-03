<?php
    include ("./config.php");
    $eid = $_POST['id'];
    $pass = $_POST['pwd'];
    $pwd="0";
    $query = mysqli_query($db,"SELECT * from employee where eid='$eid';");
    if($query){
        if(mysqli_num_rows($query)>0){
            while($row = mysqli_fetch_array($query)){
                $pwd=$row['pwd'];
           }
           if($pwd===$pass)
           {
                header("Location:empselect.html");
           }
           else{
            echo "Password is incorrect.Try again";
           }
        }
        else{
            echo "ID not available" ;
        }
    }
    else{
        echo mysqli_error($db);
    }
?>