<?php

include '../database/connectie.php';

//controleren of formulier verzonden is
    if(isset($_POST['toevoegen_contact'])){
        $voornaam = mysqli_real_escape_string($con, $_POST['voornaam']);
        $familienaam = mysqli_real_escape_string($con, $_POST['familienaam']);
        $telefoon = mysqli_real_escape_string($con, $_POST['telefoon']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $straatnr = mysqli_real_escape_string($con, $_POST['straatnr']);
        $postcode = mysqli_real_escape_string($con, $_POST['postcode']);
        $gemeente = mysqli_real_escape_string($con, $_POST['gemeente']);
        $groep = mysqli_real_escape_string($con, $_POST['groep']);
        //tijd wordt automatisch al toegevoeg aan database

        //controleren of er gegevens werden ingevoerd
        if(!isset($voornaam) || $voornaam == ''){
            $error = "Vul voornaam in!";
            header("Location: ../adresboek.php?fout_voornaam=" .urlencode($error));
            exit();
        } else{ //alle gegevens ingevuld
            $query = "INSERT INTO adressen (voornaam, familienaam, telefoon, email, straatnr, postcode, gemeente, groep)
                      VALUES ('$voornaam','$familienaam','$telefoon','$email','$straatnr','$postcode','$gemeente','$groep')";

            //controleren of query werkt
            if(!mysqli_query($con, $query)){
                die('Fout: ' . mysqli_error($con));
            } else {
                header("Location: ../adresboek.php");
                exit();
            }
        }
    }
?>
