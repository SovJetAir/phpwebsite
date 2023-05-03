<?php
    include 'includes/header.php';
    include 'database/connectie.php';
?>
<?php
    $query = "SELECT * FROM adressen";
    $contacten = mysqli_query($con,$query);
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

                <!-- form -->
                <div id="addcontact" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body">
                        <h2 class="uk-modal-title uk-text-center">Contact toevoegen</h2>
                        <form class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input" type="text" placeholder="Familienaam" aria-label="familienaam">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input" type="text" placeholder="Voornaam" aria-label="voornaam">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input" type="text" placeholder="Telefoonnummer" aria-label="telefoonnr">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input" type="text" placeholder="E-mail adres" aria-label="email">
                            </div>
                            <div class="uk-width-1-1">
                                <input class="uk-input" type="text" placeholder="straat en huisnummer" aria-label="straatnr">
                            </div>
                            <div class="uk-width-1-2@s">
                                <input class="uk-input" type="text" placeholder="postcode" aria-label="gemeente">
                            </div>
                            <div class="uk-width-1-1">
                                <div class="uk-form-controls">
                                    <select class="uk-select" id="form-stacked-select">
                                        <option>School</option>
                                        <option>Vrienden</option>
                                        <option>Familie</option>
                                    </select>
                                </div>
                            </div>


                        </form>
                        <p class="uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">annuleren</button>
                            <button class="uk-button uk-button-primary" type="button">toevoegen</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-container uk-margin-large-bottom">
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
                                <div class="uk-inline">
                                    <input class="uk-button uk-margin-small uk-button-primary" type="submit" name="aanpassen" value="AANPASSEN" aria-label="Not clickable icon">
                                </div>
                                <div class="uk-inline">
                                    <input class="uk-button uk-margin-small uk-button-danger" type="submit" name="verwijderen" value="VERWIJDEREN" aria-label="Not clickable icon">
                                </div>
                        </td>
                    </tr>
                <?php endwhile; ?>
                <tr>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td class="text-center uk-padding-martijn-1" style="width: 295px;">
                        <div class="uk-inline">
                            <input class="uk-button uk-margin-small uk-button-primary" type="submit" name="aanpassen" value="AANPASSEN" aria-label="Not clickable icon">
                        </div>
                        <div class="uk-inline">
                            <input class="uk-button uk-margin-small uk-button-danger" type="submit" name="verwijderen" value="VERWIJDEREN" aria-label="Not clickable icon">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td class="text-center uk-padding-martijn-1" style="width: 295px;">
                        <div class="uk-inline">
                            <input class="uk-button uk-margin-small uk-button-primary" type="submit" name="aanpassen" value="AANPASSEN" aria-label="Not clickable icon">
                        </div>
                        <div class="uk-inline">
                            <input class="uk-button uk-margin-small uk-button-danger" type="submit" name="verwijderen" value="VERWIJDEREN" aria-label="Not clickable icon">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td class="text-center uk-padding-martijn-1" style="width: 295px;">
                        <div class="uk-inline">
                            <input class="uk-button uk-margin-small uk-button-primary" type="submit" name="aanpassen" value="AANPASSEN" aria-label="Not clickable icon">
                        </div>
                        <div class="uk-inline">
                            <input class="uk-button uk-margin-small uk-button-danger" type="submit" name="verwijderen" value="VERWIJDEREN" aria-label="Not clickable icon">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td>placeholder</td>
                    <td class="text-center uk-padding-martijn-1" style="width: 295px;">
                        <div class="uk-inline">
                            <input class="uk-button uk-margin-small uk-button-primary" type="submit" name="aanpassen" value="AANPASSEN" aria-label="Not clickable icon">
                        </div>
                        <div class="uk-inline">
                            <input class="uk-button uk-margin-small uk-button-danger" type="submit" name="verwijderen" value="VERWIJDEREN" aria-label="Not clickable icon">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php
include 'includes/footer.php';
?>