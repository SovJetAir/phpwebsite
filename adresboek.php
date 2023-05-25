<?php
    include 'includes/header.php';
    include 'database/connectie.php';
?>
<?php
    $query = "SELECT * FROM adressen";
    $contacten = mysqli_query($con,$query);
?>
<?php
    if(isset($_POST['verwijderen'])){
        $c_id = $_POST['verwijderen'];


        $query_verwijderen = "DELETE FROM adressen WHERE id= $c_id";
        if (!mysqli_query($con, $query_verwijderen)){
            die('Fout:' . mysqli_error($con));
        }
    }
?>

<main>
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-margin-small-top uk-margin-small-bottom" uk-grid>
            <div>
                <p class="uk-inline uk-text-large uk-text-bold"> Adresboek </p>
            </div>
            <div class="uk-text-right">
                <div class="uk-align-right uk-inline uk-margin-remove">
                    <input class="uk-button uk-button-secondary" type="submit" name="add_contact" value="CONTACT TOEVOEGEN" aria-label="Not clickable icon" href="#addcontact" uk-toggle>
                </div>
            </div>
        </div>
    </div>


    <!--table met gegevens-->


    <form class="uk-container uk-margin-large-bottom" action="" method="post">
        <table class="uk-table uk-table-large uk-table-striped uk-table-middle uk-table-divider">
            <thead class="uk-section-martijn-6">
                <tr>
                    <th class="uk-text-center">NAAM</th>
                    <th class="uk-text-center">TELEFOON/GSM</th>
                    <th class="uk-text-center">EMAIL</th>
                    <th class="uk-text-center">ADRES</th>
                    <th class="uk-text-center">GROEP</th>
                    <th class="uk-text-center">ACTIE</th>
                </tr>
            </thead>
            <tbody class="uk-text-center">
                <?php while($rij = mysqli_fetch_assoc($contacten)):
                ?>
                    <tr>
                        <td><?php echo $rij['familienaam'] . ' ' . $rij['voornaam'] ?> </td>
                        <td><?php echo $rij['telefoon']?></td>
                        <td><?php echo $rij['email']?></td>
                        <td><?php echo $rij['straatnr'] . ' ' . $rij['postcode'] . ' ' . $rij['gemeente']?></td>
                        <td><?php echo $rij['groep']?></td>
                        <td class="text-center uk-padding-martijn-1" style="width: 295px;">
                            <button class="uk-button uk-button-primary" type="submit" name="aanpassen" value="<?php echo $rij['id']?>">
                                aanpassen
                            </button>
                            <button class="uk-button uk-button-danger" type="submit" name="verwijderen" value="<?php echo $rij['id']?>">
                                verwijderen
                            </button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </form>

    <!-- contacten toevoegen -->

    <div id="addcontact" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title uk-text-center">Contact toevoegen</h2>
            <form method="post" action="adresboek/adressen_process.php" class="uk-grid-small" uk-grid>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="Familienaam" name="familienaam">
                </div>
                <?php if(isset($_GET['fout_famienaam'])) : ?>
                    <div class="uk-text-warning uk-text-right uk-animation-fade" >
                        <?php echo $_GET['fout_famienaam'];?>
                    </div>
                <?php   endif;  ?>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="Voornaam" name="voornaam">
                </div>
                <?php if(isset($_GET['fout_voornaam'])) : ?>
                    <div class="uk-text-warning uk-text-right uk-animation-fade" >
                        <?php echo $_GET['fout_voornaam'];?>
                    </div>
                <?php   endif;  ?>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="Telefoonnummer" name="telefoon">
                </div>
                <?php if(isset($_GET['fout_telefoonnr'])) : ?>
                    <div class="uk-text-warning uk-text-right uk-animation-fade" >
                        <?php echo $_GET['fout_telefoonnr'];?>
                    </div>
                <?php   endif;  ?>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="E-mail adres" name="email">
                </div>
                <?php if(isset($_GET['fout_email'])) : ?>
                    <div class="uk-text-warning uk-text-right uk-animation-fade" >
                        <?php echo $_GET['fout_email'];?>
                    </div>
                <?php   endif;  ?>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="text" placeholder="straat en huisnummer" name="straatnr">
                </div>
                <?php if(isset($_GET['fout_straatnr'])) : ?>
                    <div class="uk-text-warning uk-text-right uk-animation-fade" >
                        <?php echo $_GET['fout_straatnr'];?>
                    </div>
                <?php   endif;  ?>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="postcode" name="postcode">
                </div>
                <?php if(isset($_GET['fout_postcode'])) : ?>
                    <div class="uk-text-warning uk-text-right uk-animation-fade" >
                        <?php echo $_GET['fout_postcode'];?>
                    </div>
                <?php   endif;  ?>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" placeholder="gemeente" name="gemeente">
                </div>
                <?php if(isset($_GET['fout_gemeente'])) : ?>
                    <div class="uk-text-warning uk-text-right uk-animation-fade" >
                        <?php echo $_GET['fout_gemeente'];?>
                    </div>
                <?php   endif;  ?>
                <div class="uk-width-1-1">
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select" name="groep">
                            <option>School</option>
                            <option>Vrienden</option>
                            <option>Familie</option>
                        </select>
                    </div>
                </div>
                <?php if(isset($_GET['fout_groep'])) : ?>
                    <div class="uk-text-warning uk-text-right uk-animation-fade" >
                        <?php echo $_GET['fout_groep'];?>
                    </div>
                <?php   endif;  ?>
                <div class="uk-width-1-2"></div>
                <div class="uk-width-1-4 uk-padding-remove">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">annuleren</button>
                </div>
                <div class="uk-width-1-4 uk-padding-remove">
                    <input class="uk-button uk-button-primary" name="toevoegen_contact" type="submit">
                </div>
            </form>
        </div>
    </div>

    <!-- contacten aanpassen -->

    <div id="contact_aanpassen" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title uk-text-center">Contact aanpassen</h2>
            <form method="post" action="adresboek/contact_aanpassen.php" class="uk-grid-small" uk-grid>
                <?php
                if(isset($_POST['aanpassen'])) {
                $contact_id = $_POST['aanpassen'];
                ?>

                <script>
                    UIkit.modal('#contact_aanpassen').show();
                </script>

                <?php
                }
                ?>

                <?php
                    $query_aanpassen = "SELECT * FROM adressen  WHERE id='$contact_id'";
                    $contact_aanpassen = mysqli_query($con,$query_aanpassen)
                ?>

                <?php while($rij = mysqli_fetch_assoc($contact_aanpassen)) : ?>
                    <input class="uk-input" type="hidden" name="id" value="<?php echo $contact_id ?>" >
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" placeholder="Familienaam" name="familienaam" value="<?php echo $rij['familienaam']?>">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" placeholder="Voornaam" name="voornaam" value="<?php echo $rij['voornaam']?>">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" placeholder="Telefoonnummer" name="telefoon" value="<?php echo $rij['telefoon']?>">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" placeholder="E-mail adres" name="email" value="<?php echo $rij['email']?>">
                    </div>
                    <div class="uk-width-1-1">
                        <input class="uk-input" type="text" placeholder="straat en huisnummer" name="straatnr" value="<?php echo $rij['straatnr']?>">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" placeholder="postcode" name="postcode" value="<?php echo $rij['postcode']?>">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input" type="text" placeholder="gemeente" name="gemeente" value="<?php echo $rij['gemeente']?>">
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="groep">
                                <option value="<?php echo $rij['groep']?>"> <?php echo $rij['groep']?> </option>
                                <option>School</option>
                                <option>Vrienden</option>
                                <option>Familie</option>
                            </select>
                        </div>
                    </div>
                    <div class="uk-width-1-2"></div>
                    <div class="uk-width-1-4 uk-padding-remove">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">annuleren</button>
                    </div>
                    <div class="uk-width-1-4 uk-padding-remove">
                        <input class="uk-button uk-button-primary" name="contact_aanpassen" value="Aanpassen" type="submit">
                    </div>
                    <?php endwhile; ?>
            </form>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>