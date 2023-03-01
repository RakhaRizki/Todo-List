<?php
        
include('config.php');

$ID = $_POST['ID'];
$Data = $_POST['Data'];
mysqli_query($connect, "UPDATE list SET Data='$Data' WHERE ID='$ID'");
header("location:index.php");
