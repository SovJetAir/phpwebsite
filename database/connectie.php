<?php

//connectie met SQL database
    $con = mysqli_connect("localhost", "root", "", "phpwebsite");

    if(mysqli_connect_errno()){
        echo "geen connectie met database: " . $mysql_connect_error;
    }

?>