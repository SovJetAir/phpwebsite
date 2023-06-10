<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
include 'includes/header.php';
include 'database/connectie.php';
?>
<?php
    $query = "SELECT * FROM compareg";
    $tanks = mysqli_query($con, $query);
?>
<?php
if(isset($_POST['selectTank1'])) {
    $tankselectId1 = $_POST['selectTank1'];
    $_SESSION["tankselectId1"] = "$tankselectId1";
}
if(!isset($_SESSION["tankselectId1"])){
    $tankselectId1 = "0";
} else {
    $tankselectId1 = $_SESSION["tankselectId1"];
}
?>
<?php
if(isset($_POST['selectTank2'])) {
    $tankselectId2 = $_POST['selectTank2'];
    $_SESSION["tankselectId2"] = "$tankselectId2";
}
if(!isset($_SESSION["tankselectId2"])){
    $tankselectId2 = "0";
} else {
    $tankselectId2 = $_SESSION["tankselectId2"];
}
?>

<script>
    //save scrolling position; its annoying as hell to keep scrolling back down whenever selecting a tank
    document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById("selectTank1").style.display = "block";
        document.getElementById("selectTank2").style.display = "none";
        document.getElementById("toggleTank1").classList.add("uk-button-primary");
        document.getElementById("toggleTank2").classList.add("uk-button-secondary");
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>

<main>
<div class="uk-section uk-margin-remove uk-padding-remove uk-width-expand">
    <div class="uk-container uk-margin-remove uk-padding-remove uk-width-expand">
            <h1 class="overlay">
                <img alt="LogocompareG" src="images/logocompareG.png" width="754" height="400">
            </h1>
    </div>
</div>
    <div class="uk-section uk-section-muted  back uk-background-cover   uk-flex-center uk-flex-middle" style="background-image: url(images/metal.jpg);">
        <div class="uk-container uk-container-expand uk-margin-remove ">
            <div class="uk-grid" uk-grid>
                <!--SECTIE 1-->
                <div class="uk-width-1-3@m">
                    <div class="uk-grid uk-grid-divider uk-margin" uk-grid>
                        <div class="uk-width-1-2 uk-text-middle">
                            <button class="uk-button uk-width-1-1" onclick="selectTank1()" id="toggleTank1" >vehicle 1</button>
                        </div>
                        <div class="uk-width-1-2 uk-text-middle">
                            <button class="uk-button uk-width-1-1" onclick="selectTank2()" id="toggleTank2" >vehicle 2</button>
                        </div>
                    </div>

                    <script>
                        function selectTank1() {
                            var v = document.getElementById("toggleTank1");
                            var w = document.getElementById("toggleTank2");
                            var x = document.getElementById("selectTank1");
                            var y = document.getElementById("selectTank2");
                            v.classList.remove("uk-button-secondary");
                            v.classList.add("uk-button-primary");
                            w.classList.remove("uk-button-primary");
                            w.classList.add("uk-button-secondary");
                            x.style.display = "block";
                            y.style.display = "none";
                        }
                        function selectTank2(){
                            var v = document.getElementById("toggleTank1");
                            var w = document.getElementById("toggleTank2");
                            var x = document.getElementById("selectTank1");
                            var y = document.getElementById("selectTank2");
                            v.classList.remove("uk-button-primary");
                            v.classList.add("uk-button-secondary");
                            w.classList.remove("uk-button-secondary");
                            w.classList.add("uk-button-primary");
                            x.style.display = "none";
                            y.style.display = "block";
                        }
                    </script>

                    <form method="post" id="selectTank1">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="icon: search"></span>
                            <input type="text" id="searchTank" class="uk-input" onkeyup="filterTanks()" placeholder="Search tanks...">

                            <script>
                                function filterTanks() {
                                    // this code is largely copied and edited, but it works.
                                    // variables
                                    var input, filter, ul, li, a, i, txtValue;
                                    input = document.getElementById('searchTank');
                                    filter = input.value.toUpperCase();
                                    ul = document.getElementById("tankList");
                                    li = ul.getElementsByTagName('li');

                                    // go through all items, hide those that do not match characters with the search query
                                    for (i = 0; i < li.length; i++) {
                                        a = li[i].getElementsByTagName("a")[0];
                                        txtValue = a.textContent || a.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            li[i].style.display = "";
                                        } else {
                                            li[i].style.display = "none";
                                        }
                                    }
                                }
                            </script>

                        </div>
                        <div class="uk-width-1-1 ">
                            <br>
                            <ul id="tankList" class="uk-list uk-list-striped color11 "  >
                                <?php
                                foreach (($tanks) as $rij){
                                ?>
                                    <li><a href="#"><button class="uk-button uk-button-text" name="selectTank1" type="submit" value="<?php echo $rij['id'] ?>"><?php echo '[' . $rij['BR'] . ']  ' .$rij['tankname']?></button></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                    <form method="post" id="selectTank2">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="icon: search"></span>
                            <input type="text" id="searchTank" class="uk-input" onkeyup="filterTanks()" placeholder="Search tanks...">

                            <script>
                                function filterTanks() {
                                    // this code is largely copied and edited, but it works.
                                    // variables
                                    var input, filter, ul, li, a, i, txtValue;
                                    input = document.getElementById('searchTank');
                                    filter = input.value.toUpperCase();
                                    ul = document.getElementById("tankList");
                                    li = ul.getElementsByTagName('li');

                                    // go through all items, hide those that do not match characters with the search query
                                    for (i = 0; i < li.length; i++) {
                                        a = li[i].getElementsByTagName("a")[0];
                                        txtValue = a.textContent || a.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                            li[i].style.display = "";
                                        } else {
                                            li[i].style.display = "none";
                                        }
                                    }
                                }
                            </script>

                        </div>
                        <div class="uk-width-1-1 ">
                            <br>
                            <ul id="tankList" class="uk-list uk-list-striped color11 "  >
                                <?php
                                foreach (($tanks) as $rij){
                                    ?>
                                    <li><a href="#"><button class="uk-button uk-button-text" name="selectTank2" type="submit" value="<?php echo $rij['id'] ?>"><?php echo '[' . $rij['BR'] . ']  ' .$rij['tankname']?></button></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <!--SECTIE 2-->
                <div class="uk-width-1-3@m uk-margin-remove  ">

                    <?php
                    $query_tank1 = "SELECT * FROM compareg WHERE id='$tankselectId1'";
                    $tank1 = mysqli_query($con,$query_tank1);

                    ?>
                    <?php while($rij = mysqli_fetch_assoc($tank1)) : ?>
                    <div class="uk-card uk-card-default   ">
                        <div class="uk-card-header uk-background-cover  uk-flex-center uk-flex-middle" style="background-image: url(images/miii.jpg);">
                            <h3 class="h3"><?php echo $rij['tankname'] ?></h3>
                        </div>
                        <div class="uk-card-body uk-background-cover  uk-box-sizing-border uk-flex-center uk-flex-middle" style="background-image: url(images/metal.jpg);">
                            <img src="<?php echo $rij['tankimageurl'] ?>"
                        </div>
                        <div class="uk-card-footer uk-padding-small ">
                            <h4 class="h4"> General </h4>
                            <ul class="uk-list uk-list-striped color11">
                                <li>Rank: <?php echo $rij['rank'] ?></li>
                                <li>BR: <?php echo $rij['BR'] ?></li>
                                <li>type: <?php echo $rij['type'] ?></li>
                            </ul>
                            <h4 class="h4">Armour (F/S/R)</h4>
                            <ul class="uk-list uk-list-striped color11">
                                <li>Hull: <?php echo $rij['hullarmourfront'] . ' / '. $rij['hullarmourside'] . ' /' . $rij['hullarmourrear']  ?> mm</li>
                                <li>Turret: <?php echo $rij['turretarmourfront'] . ' / '. $rij['turretarmourside'] . ' /' . $rij['turretarmourrear']  ?> mm</li>
                            </ul>
                            <h4 class="h4">Mobility</h4>
                            <ul class="uk-list uk-list-striped color11">
                                <li>speed (f/r): <?php echo $rij['speedforward'] . ' / -'. $rij['speedreverse']?> kph</li>
                                <li>power: <?php echo $rij['power']?> hp</li>
                                <li>weight: <?php echo $rij['weight'] ?> t</li>
                            </ul>
                            <h4 class="h4">Armament</h4>
                            <ul class="uk-list uk-list-striped color11">
                                <li>elevation: <?php echo $rij['maxelevation'] . ' / -'. $rij['maxdepression'] . '°' ?></li>
                                <li>caliber: <?php echo $rij['caliber']  ?> mm</li>
                                <li>max pen: <?php echo $rij['maxpen']  ?> mm</li>
                            </ul>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <!--SECTIE 3-->
            <div class="uk-width-1-3@m">

                <?php
                $query_tank2 = "SELECT * FROM compareg WHERE id='$tankselectId2'";
                $tank2 = mysqli_query($con,$query_tank2);
                ?>
                <?php while($rij = mysqli_fetch_assoc($tank2)) : ?>
                    <div class="uk-card uk-card-default   ">
                        <div class="uk-card-header uk-background-cover  uk-flex-center uk-flex-middle" style="background-image: url(images/miii.jpg);">
                            <h3 class="h3"><?php echo $rij['tankname'] ?></h3>
                        </div>
                        <div class="uk-card-body uk-background-cover  uk-box-sizing-border uk-flex-center uk-flex-middle" style="background-image: url(images/metal.jpg);">
                            <img src="<?php echo $rij['tankimageurl'] ?>"
                        </div>
                        <div class="uk-card-footer uk-padding-small ">
                            <h4 class="h4"> General </h4>
                            <ul class="uk-list uk-list-striped color11">
                                <li>Rank: <?php echo $rij['rank'] ?></li>
                                <li>BR: <?php echo $rij['BR'] ?></li>
                                <li>type: <?php echo $rij['type'] ?></li>
                            </ul>
                            <h4 class="h4">Armour (F/S/R)</h4>
                            <ul class="uk-list uk-list-striped color11">
                                <li>Hull: <?php echo $rij['hullarmourfront'] . ' / '. $rij['hullarmourside'] . ' /' . $rij['hullarmourrear']  ?> mm</li>
                                <li>Turret: <?php echo $rij['turretarmourfront'] . ' / '. $rij['turretarmourside'] . ' /' . $rij['turretarmourrear']  ?> mm</li>
                            </ul>
                            <h4 class="h4">Mobility</h4>
                            <ul class="uk-list uk-list-striped color11">
                                <li>speed (f/r): <?php echo $rij['speedforward'] . ' / -'. $rij['speedreverse']?> kph</li>
                                <li>power: <?php echo $rij['power']?> hp</li>
                                <li>weight: <?php echo $rij['weight'] ?> t</li>
                            </ul>
                            <h4 class="h4">Armament</h4>
                            <ul class="uk-list uk-list-striped color11">
                                <li>elevation: <?php echo $rij['maxelevation'] . ' / -'. $rij['maxdepression'] . '°' ?></li>
                                <li>caliber: <?php echo $rij['caliber']  ?> mm</li>
                                <li>max pen: <?php echo $rij['maxpen']  ?> mm</li>
                            </ul>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</main>
<?php
include 'includes/footer.php';
?>