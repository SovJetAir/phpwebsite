<!DOCTYPE html>
<footer class="uk-section-secondary uk-light uk-margin-remove-top">
<div class="uk-container">
  <div class="uk-child-width-1-3@m uk-margin-small-top uk-margin-small-bottom" uk-grid>

    <div> <!--LEFT-->
        <p class="uk-text-small uk-text-muted">
        &copy;
          <script>
            var datum = new Date();
            jaartal =datum.getFullYear();
            document.write(jaartal);
          </script>
        &bull; Martijn Cauwenberghs
        </p>
    </div>

    <div> <!--MID-->
      <p class="uk-text-uppercase"> Sitemap </p>
      <div class="uk-column-1-2">
        <p><a href="one_page.php" uk-scroll>One page</a></p>
        <p><a href="shoutbox.php" uk-scroll>Shoutbox</a></p>
        <p><a href="adresboek.php" uk-scroll>Adresboek</a></p>
        <p><a href="compareg.php" uk-scroll>CompareG</a></p>
        <p><a href="#">Item</a></p>
        <p><a href="#">Item</a></p>
      </div>
    </div>

    <div> <!--RIGHT-->
      <div> <a href="mailto:martijn@cauwenberghs.be" class="uk-icon-button uk-margin-small-right" uk-icon="mail"></a> <a href="mailto:martijn@cauwenberghs.be">martijn@cauwenberghs.be</a> </div>
      <div> <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="receiver"></a> +32 472 76 65 45 </div>
      <div>
        <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="facebook"></a>
        <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
        <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="linkedin"></a>
      </div>
    </div>

  </div>
</div>
</footer>


<!--nav menu small screens-->
<div id="offcanvas-nav" uk-offcanvas="overlay:true">
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
      <li><a href="one_page.php" uk-scroll><span class="uk-margin-small-right" uk-icon="icon: home"></span>One Page</a> </li>
      <li><a href="shoutbox.php" uk-scroll><span class="uk-margin-small-right" uk-icon="icon: comment"></span>shoutbox</a> </li>
      <li class="uk-nav-divider"></li>
      <li><a href="adresboek.php" uk-scroll><span class="uk-margin-small-right" uk-icon="icon: phone"></span>Adresboek</a> </li>

      <li class="uk-nav-header">part 2</li>
      <li><a href="compareg.php" uk-scroll><span class="uk-margin-small-right" uk-icon="icon: crosshair"></span>CompareG</a> </li>
      <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span>Item</a> </li>
      <li class="uk-nav-divider"></li>
      <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span>Item</a> </li>
    </ul>
  </div>
</div>