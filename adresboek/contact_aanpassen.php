<?php

include '../database/connectie.php';

//controleren of formulier verzonden is
if(isset($_POST['contact_aanpassen'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $familienaam = mysqli_real_escape_string($con, $_POST['familienaam']);
    $voornaam = mysqli_real_escape_string($con, $_POST['voornaam']);
    $telefoon = mysqli_real_escape_string($con, $_POST['telefoon']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $straatnr = mysqli_real_escape_string($con, $_POST['straatnr']);
    $postcode = mysqli_real_escape_string($con, $_POST['postcode']);
    $gemeente = mysqli_real_escape_string($con, $_POST['gemeente']);
    $groep = mysqli_real_escape_string($con, $_POST['groep']);



    $query = "UPDATE adressen
            SET voornaam = '$voornaam',
                familienaam = '$familienaam',
                telefoon = '$telefoon',
                email = '$email',
                straatnr = '$straatnr',
                postcode = '$postcode',
                gemeente = '$gemeente',
                groep = '$groep'
                WHERE id = $id";

    if(!mysqli_query($con, $query)){
        die('Fout: ' .mysqli_error($con));
    } else {
        header("Location: ../adresboek.php");
        exit();
    }
}
?>
