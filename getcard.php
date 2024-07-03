
<?php
include ("./config.php");
$id = $_REQUEST["q"];
$query = mysqli_query($db,"SELECT * from user where uid='$id';");
    if($query){
        while($row = mysqli_fetch_array($query)){
            echo $row['card']; 
       }
    }
?>