<?php
include 'includes/header.php';
include 'database/connectie.php';
?>

<main>
<div class="uk-container uk-margin-remove">
    <div class="uk-section-muted uk-section-xlarge uk-margin-medium-top uk-margin-small-bottom uk-padding-small">
        <form>
            <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
                <div class="uk-width-1-6">
                    <div class="uk-margin-small">
                        <select class="uk-select" aria-label="Select">
                            <option>Battlemode</option>
                            <option>Option 02</option>
                        </select>
                    </div>
                </div>
                <div class="uk-width-1-6">
                    <div class="uk-margin-small">
                        <select class="uk-select" aria-label="Select">
                            <option>Nation</option>
                            <option>Option 02</option>
                        </select>
                    </div>
                </div>
                <div class="uk-width-1-6">
                    <div class="uk-margin-small">
                        <select class="uk-select" aria-label="Select">
                            <option>Rank</option>
                            <option>Option 02</option>
                        </select>
                    </div>
                </div>
                <div class="uk-width-1-6">
                    <div class="uk-margin-small">
                        <select class="uk-select" aria-label="Select">
                            <option>Type</option>
                            <option>Option 02</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</main>

<?php
include 'includes/footer.php';
?>