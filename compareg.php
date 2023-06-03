<?php
include 'includes/header.php';
include 'database/connectie.php';
?>

<main>
<div class="uk-section uk-section-muted uk-margin-medium-top">
    <div class="uk-container uk-container-expand uk-margin-remove">
        <div class="uk-grid" uk-grid>
            <div class="uk-width-1-3">
                <form>
                    <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
                        <div class="uk-width-1-3">
                            <div class="uk-margin-small">
                                <select class="uk-select" aria-label="Select">
                                    <option>Nation</option>
                                    <option>USA</option>
                                    <option>GER</option>
                                    <option>USSR</option>
                                    <option>BRIT</option>
                                    <option>FRA</option>
                                    <option>ITA</option>
                                    <option>JAP</option>
                                    <option>SWED</option>
                                    <option>ISR</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="uk-margin-small">
                                <select class="uk-select" aria-label="Select">
                                    <option>Rank</option>
                                    <option>I</option>
                                    <option>II</option>
                                    <option>III</option>
                                    <option>IV</option>
                                    <option>V</option>
                                    <option>VI</option>
                                    <option>VII</option>
                                    <option>VIII</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="uk-margin-small">
                                <select class="uk-select" aria-label="Select">
                                    <option>Type</option>
                                    <option>Light tank</option>
                                    <option>Medium tank</option>
                                    <option>Heavy tank</option>
                                    <option>Tank destroyer</option>
                                    <option>Anti-air</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="uk-width-1-1">
                    <br>
                    <ul class="uk-list uk-list-striped">
                        <li>Panzer 4 F2</li>
                        <li>Panzer 4 D</li>
                        <li>Panzer 4 H</li>
                        <li>VK4005</li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-1-3 uk-margin-remove">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">VK3002</h3>
                    </div>
                    <div class="uk-card-body">
                        <img src="https://encyclopedia.warthunder.com/images/germ_vk_3002m.png""
                    </div>
                    <div class="uk-card-footer uk-padding-small">
                        <h4>General</h4>
                        <ul class="uk-list uk-list-striped">
                            <li>Rank: III</li>
                            <li>BR: 5.0</li>
                            <li>type: Medium Tank</li>
                        </ul>
                        <h4>Armour (F/S/R)</h4>
                        <ul class="uk-list uk-list-striped">
                            <li>Hull: 60/40/40 mm</li>
                            <li>Turret: 80/45/45 mm</li>
                        </ul>
                        <h4>Mobility</h4>
                        <ul class="uk-list uk-list-striped">
                            <li>speed (f/r): 55/5 kph</li>
                            <li>power: 650 hp</li>
                            <li>weight: 35.0 t</li>
                        </ul>
                        <h4>Armament</h4>
                        <ul class="uk-list uk-list-striped">
                            <li>elevation: -8 / +20 °</li>
                            <li>caliber: 75 mm</li>
                            <li>max pen: 192 mm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">Tank name</h3>
                    </div>
                    <div class="uk-card-body">
                        <img src="https://encyclopedia.warthunder.com/images/uk_sherman_vc_firefly.png""
                    </div>
                    <div class="uk-card-footer uk-padding-small">
                        <h4>General</h4>
                        <ul class="uk-list uk-list-striped">
                            <li>Rank: </li>
                            <li>BR: </li>
                            <li>type: </li>
                        </ul>
                        <h4>Armour (F/S/R)</h4>
                        <ul class="uk-list uk-list-striped">
                            <li>Hull:  mm</li>
                            <li>Turret:  mm</li>
                        </ul>
                        <h4>Mobility</h4>
                        <ul class="uk-list uk-list-striped">
                            <li>speed (f/r):  kph</li>
                            <li>power:  hp</li>
                            <li>weight:  t</li>
                        </ul>
                        <h4>Armament</h4>
                        <ul class="uk-list uk-list-striped">
                            <li>elevation:  °</li>
                            <li>caliber:  mm</li>
                            <li>max pen:  mm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php
include 'includes/footer.php';
?>