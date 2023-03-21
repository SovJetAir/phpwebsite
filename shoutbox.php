<?php
    include 'includes/header.php';
    include 'database/connectie.php';
?>
<?php
    $query = "SELECT * FROM shoutbox";
    $berichten = mysqli_query($con,$query);
?>

<main>
    <div>
        <div class="uk-width-xlarge uk-margin-medium-top uk-align-center">
            <div class="uk-card uk-card-default uk-card-small">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <span class="uk-margin-small-right" uk-icon="icon: "></span>
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom uk-text-center">Shout it out!</h3>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <ul class="uk-list">
                        <?php while ($rij = mysqli_fetch_assoc($berichten)) :
                        ?>
                            <li >
                                <span class="uk-text-meta uk-margin-remove-top"><?php echo $rij['tijd']?> - </span>
                                <span class="uk-text-bold"><?php echo $rij['gebruiker'] ?>: </span>
                                <span class="uk-text-normal"><?php echo $rij['bericht']?></span>
                            </li>
                            <?php endwhile; ?>
                    </ul>
                </div>
                <div class="uk-card-footer uk-section-martijn-5">
                    <!--Fout opvangen van process.php-->
                    <?php if(isset($_GET['fout'])) : ?>
                        <div class="uk-text-warning uk-text-right uk-animation-fade" >
                            <?php echo $_GET['fout'];?>
                        </div>
                    <?php   endif;  ?>
                    <form method="post" action="shoutbox/process.php">
                        <div class="uk-inline uk-margin-left uk-width-1-4">
                            <div class="uk-form-controls">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input uk-form-blank" aria-label="Not clickable icon" id="gebruiker" name="gebruiker" type="text" placeholder="Voornaam">
                            </div>
                        </div>
                        <br>
                        <div class="uk-inline uk-margin-left uk-width-1-2">
                            <div class="uk-form-controls">
                                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                                <input class="uk-input uk-form-blank" aria-label="Not clickable icon" id="bericht" name="bericht" type="text" placeholder="Bericht">
                            </div>
                        </div>
                        <br>
                        <div class="uk-inline uk-margin-left uk-margin-top">
                            <input class="uk-button uk-button-danger" type="submit" name="verzenden" value="Shout it!" aria-label="Not clickable icon">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--<div class="uk-section-small uk-margin-remove" id="Titel">
        <h3 class="uk-text-center">Shout it!</h3>
    </div>
    <hr>
    <div class="uk-section uk-margin-remove" id="Textbox">
        <div class="uk-container">

        </div>
    </div>
    <div class="uk-section-martijn-5 uk-section uk-margin-remove-bottom" id="Chatbox">
        <div class="uk-inline uk-margin-left uk-width-1-4">
            <div class="uk-form-controls">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input uk-form-blank" aria-label="Not clickable icon" id="Name" name="Name" type="text" placeholder="Voornaam">
            </div>
        </div>
        <br>
        <div class="uk-inline uk-margin-left uk-margin-top uk-width-1-2">
            <div class="uk-form-controls">
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input class="uk-input uk-form-blank" aria-label="Not clickable icon" id="Text" name="Text" type="text" placeholder="Bericht">
            </div>
        </div>

    </div>
    -->
</main>

<?php
include 'includes/footer.php';
?>