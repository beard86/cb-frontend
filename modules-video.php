<?php 
  // Page Setup
  $title = 'Videos Module';
  $bodyclass = 'modules-video';
  include 'includes/header.php';
?>
<!-- CONTAINER WRAPPER -->
<div class="container">

<h1>PERSISTANT MODULES</h1>

</div><!-- class="container"-->

<!--m1 MODULE-->
<?php 
    include 'modules/m1.php';
?>


<!-- CONTAINER WRAPPER -->
<div class="container">


<h1>Video modules</h1>
<h2>Video: Homepage</h2>




<h2>Video: Level 1 &amp; below</h2>




<!--m4 MODULE-->
  <div id="M4" class="animated-text video-play rel">
    <svg viewBox="0 0 700 300" class="mobile">
      
      <!-- Pattern -->
      <pattern id="p-fire" viewBox="30 100 186 200" patternUnits="userSpaceOnUse" width="216" height="200" x="-70" y="35">
        
        <!-- Fire -->
        <image xlink:href="/ivc/images/fire.gif" width="256" height="300"/>
      </pattern>
      
      <!-- Text -->
      <text text-anchor="left" x="0" y="32.25%" dy=".35em" class="text-gif">
          Lorem ipsum dolor set 
        </text>
                <!-- Text -->
      <text text-anchor="left" x="0" y="52.25%" dy=".35em" class="text-gif" >
          consectetur elit. 
        </text>

    </svg>
    <svg viewBox="0 0 600 300" class="svg-defs desktop">

        <!-- Symbol with text -->
        <symbol id="s-text-1">
            <text text-anchor="left" x="0%" y="40%" dy=".35em" class="text">
                Lorem ipsum dolor set 
            </text>
            <text text-anchor="left" x="0%" y="60%" dy=".35em" class="text">
                consectetur elit.
            </text>
        </symbol>
        <!-- Mask with text -->
        <mask id="m-text-1" maskunits="userSpaceOnUse" maskcontentunits="userSpaceOnUse">

            <rect width="100%" height="100%" class="mask__shape">
            </rect>
            <use xlink:href="#s-text-1" class="mask__text"></use>

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
            <rect width="100%" height="100%" mask="url(#m-text-1)" class="shape--fill" />
            <use xlink:href="#s-text-1" class="text--transparent"></use>
        <!-- playbuttons SVG -->
        </svg>
        <!-- Visible SVG -->
        <button class="play-button desktop">
          <svg viewBox="0 0 600 300" class="svg-inverted-mask">
              <circle cx="410" cy="180" r="15" fill="none" stroke-width="1" stroke="#0080ec" />
              <polygon y="" points="405, 172 405, 188 419, 180" fill="none" stroke-width="1" stroke="#0080ec" />
          <!-- playbuttons SVG -->
          </svg>
      </button>
      <button class="play-button mobile">
          <svg viewBox="0 0 660 296" class="svg-inverted-mask">
              <circle cx="470" cy="184" r="15" fill="none" stroke-width="1" stroke="#0080ec"  />
              <polygon y="" points="464, 175 464, 192 480, 182" fill="none" stroke-width="1" stroke="#0080ec" />
          <!-- playbuttons SVG -->
          </svg>
      </button>
    </div>
  </div>

<h2>Video: Supportive Level 1 &amp; below</h2>

<!--m5 MODULE-->
  <div id="M5" class="animated-text video-play rel">
    <svg viewBox="0 0 700 300" class="mobile">
      
      <!-- Pattern -->
      <pattern id="p-fire" viewBox="30 100 186 200" patternUnits="userSpaceOnUse" width="216" height="200" x="-70" y="35">
        
        <!-- Fire -->
        <image xlink:href="images/fire.gif" width="256" height="300"/>
      </pattern>
      
      <!-- Text -->
      <text text-anchor="left" x="0" y="32.25%" dy=".35em" class="text-gif">
          Lorem ipsum dolor set 
        </text>
                <!-- Text -->
      <text text-anchor="left" x="0" y="52.25%" dy=".35em" class="text-gif" >
          consectetur elit. 
        </text>

    </svg>
    <svg viewBox="0 0 600 300" class="svg-defs desktop">

        <!-- Symbol with text -->
        <symbol id="s-text-2">
            <text text-anchor="left" x="0%" y="40%" dy=".35em" class="text">
                Lorem ipsum dolor set 
            </text>
            <text text-anchor="left" x="0%" y="60%" dy=".35em" class="text">
                consectetur elit.
            </text>
        </symbol>
        <!-- Mask with text -->
        <mask id="m-text-2" maskunits="userSpaceOnUse" maskcontentunits="userSpaceOnUse">

            <rect width="100%" height="100%" class="mask__shape">
            </rect>
            <use xlink:href="#s-text-2" class="mask__text"></use>

        </mask>

    </svg>

    <div class="box-with-text">

        <!-- Container for video -->
        <div class="text-fill desktop">
            <video autoplay loop  class="video">
              <source src="images/bokeh2.webm" type="video/webm">
              <source src="images/bokeh2.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Visible SVG -->
        <svg viewBox="0 0 600 300" class="svg-inverted-mask desktop">
            <rect width="100%" height="100%" mask="url(#m-text-2)" class="shape--fill" />
            <use xlink:href="#s-text" class="text--transparent"></use>
        <!-- playbuttons SVG -->
        </svg>
        <!-- Visible SVG -->
        <button class="play-button desktop">
          <svg viewBox="0 0 600 300" class="svg-inverted-mask">
              <circle cx="410" cy="180" r="15" fill="none" stroke-width="1" stroke="#0080ec" />
              <polygon y="" points="405, 172 405, 188 419, 180" fill="none" stroke-width="1" stroke="#0080ec" />
          <!-- playbuttons SVG -->
          </svg>
      </button>
      <button class="play-button mobile">
          <svg viewBox="0 0 660 296" class="svg-inverted-mask">
              <circle cx="470" cy="184" r="15" fill="none" stroke-width="1" stroke="#0080ec"  />
              <polygon y="" points="464, 175 464, 192 480, 182" fill="none" stroke-width="1" stroke="#0080ec" />
          <!-- playbuttons SVG -->
          </svg>
      </button>
    </div>
  </div>

  <div id="M19" class="featured-heading">
    <h1 class="large featured">
      <a href="##">Building durable portfolios managing risk and liquidity exploiting key themes</a>
    </h1>
  </div>

  <ul id="M7" class="light-list  hpad-top qpad-bottom accordion">
    <li>
      <a href="##">Investment counselling <div class="lines"><span></span></div></a>
      <div class="heighthidden qpad-top">
        Investment, financing and specialist services for sophisticated investors including traders, family offices executives and other professionals
      </div>            
    </li>
    <li>
      <a href="##">Global investment lab  <div class="lines"><span></span></div></a>
      <div class="heighthidden qpad-top">
        Bespoke offering across the widest range of investments and specialist services including wealth and legacy planning, financing, art aviation and sports.
      </div>
    </li>
    <li>
      <a href="##">Managed investments  <div class="lines"><span></span></div></a>
      <div class="heighthidden qpad-top">
        See some of the reasons why wealthy individuals, entrepeneurs, heirs, professional investors, law firms and family offices come to us.
      </div>
    </li>
  </ul>


</div>

<!--INCLUDE  OVERLAYS-->
<?php
  include 'includes/video-takeover.php';

  include 'includes/region-select.php';

  include 'includes/mega-menu.php';

  include 'includes/sign-in.php';
  include 'includes/search.php';

  include 'includes/contact-us.php';
//m2 MODULE 
  include 'includes/footer.php';

?>
