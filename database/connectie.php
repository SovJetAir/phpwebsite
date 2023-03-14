<?php

//connectie met SQL database
    $con = mysqli_connect("78.47.104.170", "mysql", "b874da847af3bdaf2435", "martin");

    if(mysqli_connect_errno()){
        echo "geen connectie met database:".mysqli_connect_errno();
    }

?>