<?php 
  // Page Setup
  $title = 'Fresh insights';
  $bodyclass = 'fresh';
  include '../includes/header.php';
  include '../includes/nav.php';
?>

    <!-- Main container -->
    <div class="container">
      <?php include '../includes/bread-crumb.php'; ?>

      <div class="row">
        <div class="col-md-9">
          <h1 class="qpad-bottom">Fresh Insights</h1>
          <p class="qpad-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida et viverra justo commodo.<br/> Proin sodales pulvinar tempor <a href="/opinions">Opinions.</a></p>
        </div>
      </div>

    <div id="M22" class="hpad-top">
      <h5>Featured</h5>

      <div class="divide-line">
          <hr class="short-black"/>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <h1 class="large featured"><a href="/fresh-insights/article.php">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <p>By <a href="/fresh-insights/article.php">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
        <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
        <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
      </div>
      <div class="col-md-3">
        <img src="/ivc/images/fresh-insight-1.png" />
      </div>
    </div>

    <div id="M38" class="row divider blueline animate-line"></div>

    <ul id="M7" class="light-list lighter hpad-top qpad-bottom accordion">
      <li>
        <a href="##">Filter by category <div class="lines"><span></span></div></a>
        <div class="heighthidden qpad-top category">
          <div class="col-md-4">
            <input id="dist" type="checkbox" name="category" data-group="Distruptive innovation">
            <label for="dist" data-group="Distruptive innovation" >Distruptive innovation</label>
          </div>
          <div class="col-md-4">
            <input id="market" type="checkbox" name="category" value="Market views"  data-group="Market views">
            <label for="market" data-group="Market views">Market views</label>
          </div>
          <div class="col-md-4">
            <input id="pursuits" type="checkbox" name="category" value="Pursuits"  data-group="Pursuits">
            <label for="pursuits" data-group="Pursuits">Pursuits</label>
          </div>
          <div class="col-md-4">
            <input id="world" type="checkbox" name="category" value="Our world" data-group="Our world" >
            <label for="world" data-group="Our world" >Our world</label>
          </div>
          <div class="col-md-4">
            <input id="legacy" type="checkbox" name="category" value="Legacy"  data-group="Legacy">
            <label for="legacy" data-group="Legacy">Legacy</label>
          </div>
          <div class="col-md-4">
            <input id="impact" type="checkbox" name="category" value="Social impact"  data-group="Social impact">
            <label for="impact" data-group="Social impact">Social impact</label>
          </div>

        </div>            
      </li>
      <li>
        <a href="##">Filter by author  <div class="lines"><span></span></div></a>
        <div class="heighthidden qpad-top category">
          <div class="col-md-4">
            <input id="auth-1" type="checkbox" name="category" value="Author 1" data-group="Author 1">
            <label for="auth-1" data-group="Author 1">Author 1</label>
          </div>
          <div class="col-md-4">
            <input id="auth-2" type="checkbox" name="category" value="Author 2" data-group="Author 2">
            <label for="auth-2" data-group="Author 2">Author 2</label>
          </div>
          <div class="col-md-4">
            <input id="auth-3" type="checkbox" name="category" value="Author 3" data-group="Author 3">
            <label for="auth-3" data-group="Author 3">Author 3</label>
          </div>
          <div class="col-md-4">
            <input id="auth-4" type="checkbox" name="category" value="Author 4" data-group="Author 4">
            <label for="auth-4"  data-group="Author 4">Author 4</label>
          </div>
          <div class="col-md-4">
            <input id="auth-5" type="checkbox" name="category" value="Author 5" data-group="Author 5">
            <label for="auth-5"  data-group="Author 5">Author 5</label>
          </div>
          <div class="col-md-4">
            <input id="auth-6" type="checkbox" name="category" value="Author 6" data-group="Author 6">
            <label for="auth-6" data-group="Author 6">Author 6</label>
          </div>

        </div>
      </li>
    </ul>
    <div class="row min-height date-range">
      <div class="col-md-3 from-month">
          FROM
          <select>
            <option value="january">January</option>
            <option value="february">February</option>
            <option value="march">~March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">~July</option>
            <option value="august">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">~November</option>
            <option value="December">December</option>
          </select>

          <div id="ddfrom" class="wrapper-dropdown-5" tabindex="1"><span>Month</span>
            <ul class="dropdown">
              <li><a href="##">January</a></li>
              <li><a href="##">February</a></li>
              <li><a href="##">March</a></li>
              <li><a href="##">April</a></li>
              <li><a href="##">May</a></li>
              <li><a href="##">June</a></li>
              <li><a href="##">July</a></li>
              <li><a href="##">August</a></li>
              <li><a href="##">September</a></li>
              <li><a href="##">October</a></li>
              <li><a href="##">November</a></li>
              <li><a href="##">December</a></li>
            </ul>
          </div>
      </div>
      <div class="col-md-3 to-month">
          TO

          <div id="ddto" class="wrapper-dropdown-5 disabled" tabindex="1"><span>Month</span>
            <select>
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">~March</option>
              <option value="april">April</option>
              <option value="may">May</option>
              <option value="june">June</option>
              <option value="july">~July</option>
              <option value="august">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">~November</option>
              <option value="December">December</option>
            </select>
            <ul class="dropdown">
              <li><a href="##">January</a></li>
              <li><a href="##">February</a></li>
              <li><a href="##">March</a></li>
              <li><a href="##">April</a></li>
              <li><a href="##">May</a></li>
              <li><a href="##">June</a></li>
              <li><a href="##">July</a></li>
              <li><a href="##">August</a></li>
              <li><a href="##">September</a></li>
              <li><a href="##">October</a></li>
              <li><a href="##">November</a></li>
              <li><a href="##">December</a></li>
            </ul>
          </div>
        </div>

    </div>

    <div class="row divider"></div>
    <div id="container" class="august">
      <div class="row sort" data-groups='["august"]'>

        <div class="col-md-3 item" data-groups='["Market views", "june", "Distruptive innovation", "Pursuits", "Our world"]'>
          <div id="M22" class="hpad-top">
            <h5>August 2015</h5>

            <div class="divide-line">
                <hr class="short-black"/>
            </div>
          </div>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Distruptive innovation"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Distruptive innovation"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Market views", "Distruptive innovation", "author-1", "author-2"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Market views"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Market views", "Distruptive innovation", "author-1", "author-2"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Market views", "Distruptive innovation"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>
      </div><!--AUGUST-->
      <div class="row sort" data-groups='["july"]'>

        <div class="col-md-3 item" data-groups='["Market views", "Distruptive innovation", "Pursuits", "Our world"]'>
          <div id="M22" class="hpad-top">
            <h5>July 2015</h5>

            <div class="divide-line">
                <hr class="short-black"/>
            </div>
          </div>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Market views"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Market views", "Distruptive innovation"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

      </div><!--JULY-->
      <div class="row sort" data-groups='["june"]'>

        <div class="col-md-3 item" data-groups='["Market views", "june", "Distruptive innovation", "Pursuits", "Our world"]'>
          <div id="M22" class="hpad-top">
            <h5>June 2015</h5>

            <div class="divide-line">
                <hr class="short-black"/>
            </div>
          </div>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits", "june"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits", "june"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits", "june"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits", "june"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits", "june"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Pursuits", "june"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

      </div><!--JULY-->
      <div class="row sort" data-groups='["may"]'>


        <div class="col-md-3 item" data-groups='["Market views", "may", "Distruptive innovation", "Pursuits", "Our world"]'>
          <div id="M22" class="hpad-top">
            <h5>May 2015</h5>

            <div class="divide-line">
                <hr class="short-black"/>
            </div>
          </div>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Our world", "pursuits",  "may"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>


        <div class="col-md-10 pad-bottom item" data-groups='["Our world", "pursuits",  "may"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>


        <div class="col-md-10 pad-bottom item" data-groups='["Our world", "pursuits", "Legacy",  "may"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Our world", "pursuits", "Legacy",  "may"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Our world", "pursuits", "Legacy",  "may"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>

        <div class="col-md-10 pad-bottom item" data-groups='["Our world", "pursuits", "Legacy",  "may", "Market views"]'>
          <h1>Fresh insight headline title lorem ispum dolar set</h1>
          <p>By <a href="##">Steven Wieting</a>, June 9, 2015 &#8729; Long read </p>
          <p>Intro to article lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum congue cursus sapien, ut rutrum dolor facilisis in. Aliquam vestibulum tortor leo. </p>
          <h5 class="grey">Posted in Steven Wieting, market views, pursuits, disruptive innovation</h5>
        </div>
    </div>



    <div class="row divider"></div>

      <h1>Experts</h1>

      <?php include '../includes/bottom-carousel.php'; ?>

    </div> <!-- /container -->
  <hr>

<!--INCLUDE FOOTER-->
<?php 

  include '../includes/region-select.php';

  include '../includes/mega-menu.php';

  include '../includes/sign-in.php';
  
  include '../includes/search.php';

  include '../includes/contact-us.php';

  include '../includes/footer.php';
?>