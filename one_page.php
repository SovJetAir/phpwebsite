<?php
    include 'includes/header.php'
?>
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

        <script>
            function BerekenBMI(){

                var gewicht = document.bmiForm.gewicht.value
                var lengte = document.bmiForm.lengte.value

                if(gewicht > 0 && lengte > 0){
                    var BMI = Math.round(gewicht/(lengte/100*lengte/100)*100)/100
                    document.bmiForm.bmi.value = BMI
                    if (BMI < 18.5){
                        document.bmiForm.betekenis.value = "Je bent vrij licht voor je lichaamslengte."
                    }
                    if (BMI > 18.5){
                        document.bmiForm.betekenis.value = "Je BMI is gezond."
                    }
                    if (BMI > 25){
                        document.bmiForm.betekenis.value = "Je bent overgewicht."
                    }
                }
                else{
                    alert("Vul je lichaamslengte en/of lichaamsgewicht correct in.")
                }

            }
        </script>
    </head>

    <body>
    <header>
        <!--desktop, laptop, tablet, ...-->
        <nav class="uk-navbar-container uk-visible@m uk-navbar">
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li><a href="#gallery" uk-scroll>Galerij</a></li>
                    <li><a href="#classmates" uk-scroll>Klasgenoten</a></li>
                    <li><a href="#BMIcalculator" uk-scroll>BMI berekenen</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right uk-margin-large-right">
                <ul class="uk-navbar-nav">
                    <li><a href="#screenres" uk-scroll>Schermresolutie</a></li>
                    <li><a href="#">item</a></li>
                    <li><a href="#">item</a></li>
                </ul>
            </div>
        </nav>


        <!--phone, small tablet, ...-->

        <nav class="uk-navbar-container uk-hidden@m uk-navbar">
            <div class=" uk-navbar-left">
                <ul class="uk-navbar-nav">.
                    <li>

                    </li>
                </ul>
            </div>
            <div class="uk-navbar-center">
                One page - 6ITN
            </div>
            <div class="uk-navbar-right uk-margin-large-right">
                <button class="uk-button uk-button-default uk-hidden@m" type="button" uk-icon="icon: menu; ratio:2.0" uk-toggle="target: #offcanvas-nav-2">

                </button>
            </div>
        </nav>
    </header>

<main>
  <div class="uk-section uk-section-muted uk-margin-medium-top" id="gallery">
    <div class="uk-container">
      <div uk-slideshow="animation: fade">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 21:9 ">

          <ul class="uk-slideshow-items">
            <li>
              <img src="images/photo.jpg" alt="" uk-cover>
            </li>
            <li>
              <iframe src="https://www.youtube-nocookie.com/embed/vFuC0PATeqE? autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1"
                      width="1920" height="1080" allowfullscreen uk-cover></iframe>
            </li>
            <li>
              <iframe src="https://www.youtube-nocookie.com/embed/RlmUWO2JL6I? autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1"
                      width="1920" height="1080" allowfullscreen uk-cover></iframe>
            </li>
            <li>
              <img src="images/dark.jpg" alt="" uk-cover>
            </li>
            <li>
              <img src="images/ArcticFox.jpg" alt="" uk-cover>
            </li>
            <li>
              <img src="images/light.jpg" alt="" uk-cover>
            </li>
          </ul>

          <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
          <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
      </div>
      <div class="uk-text-right">
        <a href="#" uk-totop uk-scroll></a>
      </div>
      <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
      </div>
    </div>
  </div>
  <div class="uk-section uk-section-martijn-1" id="classmates">
    <div class="uk-container">
      <div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl uk-grid-match" uk-grid>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: 500px"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Rayan Afkir</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 1, speelt judo.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: behance"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Andy Aliji</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 2, dit is extra nonsens.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: discord"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Mohamed Atchakhou</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 3, speelt basket.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: dribbble"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Hassan Barekellil</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 4, is sociaal en draagt bril</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: etsy"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Robert Callens</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 5, gaat veel naar de gym.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: facebook"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Martijn Cauwenberghs</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 6, kent eigen klasnummer blijkbaar niet.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: flickr"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Artan Dzelili</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 7, heeft een youtube kanaal.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: foursquare"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Abd-Ar-Rahman Housni</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 8, doet veel voetbal.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: github"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Wael Maazouz</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 9, doet ook veel voetbal</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: gitter"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Dylan Weyns</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 10, doet darting.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: google"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Zakaria Zeriouh</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 11, speelt veel te veel league.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <span class="uk-margin-small-right" uk-icon="icon: instagram"></span>
                </div>
                <div class="uk-width-expand">
                  <h3 class="uk-card-title uk-margin-remove-bottom">Adam Zerrad</h3>
                </div>
              </div>
            </div>
            <div class="uk-card-body">
              <p>Klasnummer 12, Herinner me geen hobby's.</p>
            </div>
            <div class="uk-card-footer uk-text-center">
              <p>Zaventem</p>
            </div>
          </div>
        </div>
      </div>
      <div class="uk-text-right">
        <a href="#" uk-totop uk-scroll></a>
      </div>
    </div>
  </div>
  <div class="uk-section uk-section-martijn-2 uk-margin-medium-top" id="BMIcalculator">
    <div class="uk-container">
      <div>
          <h3>Berekenen van de Body Mass Index.</h3>
          <form class="uk-grid-small uk-form-horizontal" name="bmiForm" uk-grid>
            <div class="uk-width-1-3@m">
              <label class="uk-form-label" for="lengte">Lengte (cm)</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="lengte" name="lengte" type="text" placeholder="Lengte in cm">
              </div>

              <label class="uk-form-label" for="gewicht">Gewicht (kg)</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="gewicht" name="gewicht" type="text" placeholder="Gewicht in KG">
              </div>
              <div>
                <input type="button" class="uk-button uk-button-primary" value="Bereken BMI" onClick="BerekenBMI()">
              </div>
              <label class="uk-form-label" for="bmi">Je BMI is</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="bmi" name="bmi" type="text">
              </div>
              <label class="uk-form-label" for="betekenis">Betekenis</label>
              <div class="uk-form-controls uk-width-1-1">
                <input class="uk-input" id="betekenis" name="betekenis" type="text">
              </div>

            </div>

          </form>

      </div>

      <div class="uk-text-right">
        <a href="#" uk-totop uk-scroll></a>
      </div>
    </div>
  </div>
  <div class="uk-section uk-section-martijn-3 uk-margin-medium-top" id="screenres">
    <div class="uk-container">
      <h3> Schermresolutie </h3>
      <!-- DISPLAYRESOLUTION -->
      <script>
        var schermhoogte = screen.height;
        var schermbreedte = screen.width;
        var bericht = "De schermresolutie is " +  schermbreedte + " x " + schermhoogte;
        document.write (bericht);
      </script>
      <div class="uk-text-right">
        <a href="#" uk-totop uk-scroll></a>
      </div>
    </div>
  </div>
  <div class="uk-section uk-section-martijn-4 uk-margin-medium-top">
    <div class="uk-container">
      <h3> Item </h3>
      <div class="uk-text-right">
        <a href="#" uk-totop uk-scroll></a>
      </div>
    </div>
  </div>
  <div class="uk-section uk-section-martijn-5 uk-margin-medium-top">
    <div class="uk-container">
      <h3> Item </h3>
      <div class="uk-text-right">
        <a href="#" uk-totop uk-scroll></a>
      </div>
    </div>
  </div>

</main>

    <!--nav menu small screens-->
    <div id="offcanvas-nav-2" uk-offcanvas="overlay:true">
        <div class="uk-offcanvas-bar">
            <div>
                <a href="index.php" class="uk-navbar-item uk-logo uk-margin-small-left">
                    <img src="images/Logo.png" width="100" alt="Single Homepage">
                </a>
            </div>

            <!--Name website-->
            <div class="uk-margin-small-top uk-margin-medium-bottom uk-text-center">
                One page - 6ITN
            </div>

            <ul class="uk-nav uk-nav-default">
                <li class="uk-nav-header">part 1</li>
                <li><a href="#gallery" uk-scroll><span class="uk-margin-small-right" uk-icon="icon: table"></span>Galerij</a> </li>
                <li><a href="#classmates" uk-scroll><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span>Klasgenoten</a> </li>
                <li class="uk-nav-divider"></li>
                <li><a href="#BMIcalculator" uk-scroll><span class="uk-margin-small-right" uk-icon="icon: trash"></span>BMI berekenen</a> </li>

                <li class="uk-nav-header">part 2</li>
                <li><a href="#screenres" uk-scroll><span class="uk-margin-small-right" uk-icon="icon: table"></span>Schermresolutie</a> </li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span>Item</a> </li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span>Item</a> </li>
            </ul>
        </div>
    </div>

<?php
    include 'includes/footer.php'
?>