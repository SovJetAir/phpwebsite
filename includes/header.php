<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Martijn Cauwenberghs">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>phpwebsite</title>
    <link rel="stylesheet" href="css/UIkit/css/uikit.min.css" />
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="css/UIkit/js/uikit.min.js"></script>
    <script src="css/UIkit/js/uikit-icons.min.js"></script>


</head>

<body>
<header>
    <!--desktop, laptop, tablet, ...-->
    <nav class="uk-navbar-container uk-visible@m uk-navbar">
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="index.php" class="uk-navbar-item uk-margin-small-left uk-logo">
                        <img src="images/Logo.png"
                             width="80"
                             alt="Single Homepage"
                        >
                    </a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li><a href="one_page.php" >One Page</a></li>
                <li><a href="shoutbox.php" >Shoutbox</a></li>
                <li><a href="#" >Item</a></li>
            </ul>
        </div>
        <div class="uk-navbar-right uk-margin-large-right">
            <ul class="uk-navbar-nav">
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
            </ul>
        </div>
    </nav>


    <!--phone, small tablet, ...-->

    <nav class="uk-navbar-container uk-hidden@m uk-navbar">
        <div class=" uk-navbar-left">
            <ul class="uk-navbar-nav">.
                <li>
                    <a href="index.php" class="uk-navbar-item uk-margin-small-left uk-logo">
                        <img src="images/Logo.png"
                             width="80"
                             alt="Single Homepage"
                        >
                    </a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-center">
            Martijn-6ITN-Website
        </div>
        <div class="uk-navbar-right uk-margin-large-right">
            <button class="uk-button uk-button-default uk-hidden@m" type="button" uk-icon="icon: menu; ratio:2.0" uk-toggle="target: #offcanvas-nav">

            </button>
        </div>
    </nav>
</header>

