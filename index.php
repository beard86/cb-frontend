<?php 
  // Page Setup
  $title = 'Home';
  $bodyclass = 'home';
  include 'includes/header.php';
  include 'includes/nav.php';
?>

    <!-- Main container -->
    <div class="container">



      <div class="animated-text video-play rel">
        <svg viewBox="0 0 700 300" class="mobile">
          
          <!-- Pattern -->
          <pattern id="p-fire" viewBox="30 100 186 200" patternUnits="userSpaceOnUse" width="216" height="200" x="-70" y="35">
            
            <!-- Fire -->
            <image xlink:href="/ivc/images/fire.gif" width="256" height="300"/>
          </pattern>
          
          <!-- Text -->
          <text text-anchor="left" x="0" y="32.25%" dy=".35em" class="text-gif">
              Harness the power of 
            </text>
                    <!-- Text -->
          <text text-anchor="left" x="0" y="52.25%" dy=".35em" class="text-gif" >
              Citi Private Bank 
            </text>

        </svg>
        <svg viewBox="0 0 600 300" class="svg-defs desktop">

            <!-- Symbol with text -->
            <symbol id="s-text">
                <text text-anchor="left" x="0%" y="40%" dy=".35em" class="text">
                    Harness the power of 
                </text>
                <text text-anchor="left" x="0%" y="60%" dy=".35em" class="text">
                    Citi Private Bank
                </text>
            </symbol>
            <!-- Mask with text -->
            <mask id="m-text" maskunits="userSpaceOnUse" maskcontentunits="userSpaceOnUse">

                <rect width="100%" height="100%" class="mask__shape">
                </rect>
                <use xlink:href="#s-text" class="mask__text"></use>

            </mask>

        </svg>

        <div class="box-with-text">

            <!-- Container for video -->
            <div class="text-fill desktop">
                <video autoplay loop  class="video">
                  <source src="/ivc/images/bokeh2.webm" type="video/webm">
                  <source src="/ivc/images/bokeh2.mp4" type="video/mp4">
                </video>
            </div>

            <!-- Visible SVG -->
            <svg viewBox="0 0 600 300" class="svg-inverted-mask desktop">
                <rect width="100%" height="100%" mask="url(#m-text)" class="shape--fill" />
                <use xlink:href="#s-text" class="text--transparent"></use>
            <!-- playbuttons SVG -->
            </svg>
            <!-- Visible SVG -->
            <button class="play-button desktop">
              <svg viewBox="0 0 500 295" class="svg-inverted-mask">
                  <circle cx="410" cy="180" r="15" fill="none" stroke-width="1" stroke="#0080ec" />
                  <polygon y="" points="405, 172 405, 188 419, 180" fill="none" stroke-width="1" stroke="#0080ec" />
              <!-- playbuttons SVG -->
              </svg>
          </button>
          <button class="play-button mobile">
              <svg viewBox="0 0 630 300" class="svg-inverted-mask">
                  <circle cx="470" cy="184" r="15" fill="none" stroke-width="1" stroke="#0080ec"  />
                  <polygon y="" points="464, 175 464, 192 480, 182" fill="none" stroke-width="1" stroke="#0080ec" />
              <!-- playbuttons SVG -->
              </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="ticker-carousel qpad-top">
          <h2 class="qpad-bottom inline"><a href="##">Why Greece’s 3rd bailout will probably fail</a></h2>
          <h2 class="qpad-bottom inline"><a href="##">Investment, financing and specialist services</a></h2>
          <h2 class="qpad-bottom inline"><a href="##">Bespoke offering across the widest range of</a></h2>
          <h2 class="qpad-bottom inline"><a href="##">See some of the reasons why wealthy individuals</a></h2>
        </div>
          <a href="/fresh-insights" class=" lblue blue-link marg-left-md pad-left-s qpad-top fs19">View more Fresh Insights</a>
          <!--CHANGE REGION OVERLAY-->
          <ul id="home-nav" class="light-list light-list-lg hpad-top qpad-bottom accordion">

            <li>
              <a href="##">Tailored advice  <div class="lines"><span></span></div></a>
              <div class="heighthidden qpad-top">
                <a href="/investments">Investments</a>, <a href="##">specialist services</a>, <a href="##">banking and custody</a> and <a href="##">investment banking</a>
              </div>
            </li>


            <li>
              <a href="##">Institutional service <div class="lines"><span></span></div></a>
              <div class="heighthidden qpad-top">
                <a href="/investments">Investment</a>, <a href="">financing</a> and <a href="">specialist services</a> for sophisticated investors including traders, family offices executives and other professionals. Visit <a href="">Institutional Service</a>.
              </div>            
            </li>
            <li>
              <a href="##">Our clients  <div class="lines"><span></span></div></a>
              <div class="heighthidden qpad-top">
                <a href="##">Wealthy individuals</a>, <a href="##">entrepreneurs</a>, <a href="##">heirs</a>, <a href="##">professional investors</a>, <a href="##">law firms</a> and <a href="##">family offices</a>.
              </div>
            </li>
            <li>
              <a href="##">Our wealth experts  <div class="lines"><span></span></div></a>
              <div class="heighthidden qpad-top">
                <a href="/investments">Investment</a>, <a href="">financing</a> and <a href="">specialist services</a> for sophisticated investors including traders, family offices executives and other professionals. Visit <a href="">Institutional Service</a>.
              </div>
            </li>
          </ul>



  </div> <!-- /container -->
  <hr>

    
<!--INCLUDE  OVERLAYS-->
<?php


  include 'includes/video-takeover.php';

  include 'includes/region-select.php';

  include 'includes/mega-menu.php';

  include 'includes/sign-in.php';

  include 'includes/search.php';

  include 'includes/contact-us.php';

  //call script based on URL extension
  if (!empty($_GET['doaction']) && $_GET['doaction'] == contact ){
    echo '<script></script>';
  }

  include 'includes/footer.php';

?>

