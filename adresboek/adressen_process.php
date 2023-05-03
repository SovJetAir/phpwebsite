<?php

include '../database/connectie.php';

//controleren of formulier verzonden is
    if(isset($_POST['verzenden'])){
        $gebruiker = mysqli_real_escape_string($con, $_POST['gebruiker']);
        $bericht = mysqli_real_escape_string($con, $_POST['bericht']);
        //tijd wordt automatisch al toegevoeg aan database

        //controleren of er gegevens werden ingevoerd
        if(!isset($gebruiker) || $gebruiker == '' || !isset($bericht) || $bericht == ''){
            $error = "Vul de naam en bericht in!";
            header("Location: ../shoutbox.php?fout=" .urlencode($error));
            exit();
        } else{ //alle gegevens ingevuld
            $query = "INSERT INTO shoutbox (gebruiker, bericht)
                      VALUES ('$gebruiker','$bericht')";

            //controleren of query werkt
            if(!mysqli_query($con, $query)){
                die('Fout: ' . mysqli_error($con));
            } else {
                header("Location: ../shoutbox.php");
                exit();
            }
        }
    }
?>
