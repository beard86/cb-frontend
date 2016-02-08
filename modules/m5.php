<!--m5 MODULE-->
  <div id="M5" class="animated-text video-play rel">
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
              <source src="/ivc/images/bokeh2.webm" type="video/webm">
              <source src="/ivc/images/bokeh2.mp4" type="video/mp4">
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
          <svg viewBox="0 0 500 295" class="svg-inverted-mask">
              <circle cx="410" cy="180" r="15" fill="none" stroke-width="1" stroke="#0080ec" />
              <polygon y="" points="405, 172 405, 188 419, 180" fill="none" stroke-width="1" stroke="#0080ec" />
          <!-- playbuttons SVG -->
          </svg>
      </button>
      <button class="play-button mobile">
          <svg viewBox="0 0 660 236" class="svg-inverted-mask">
              <circle cx="470" cy="184" r="15" fill="none" stroke-width="1" stroke="#0080ec"  />
              <polygon y="" points="464, 175 464, 192 480, 182" fill="none" stroke-width="1" stroke="#0080ec" />
          <!-- playbuttons SVG -->
          </svg>
      </button>
    </div>
  </div>
