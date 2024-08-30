<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->
    <!--
        Available classes for #page-container:

    GENERIC

        'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

    SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-inverse'                           Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

    HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

    HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-modern'                        Modern Header style
        'page-header-inverse'                       Dark themed Header (works only with classic Header style)
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

    MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
    -->
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
          <div class="content-header-section align-parent">
            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
              <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Side Overlay -->

            <!-- User Info -->
            <!-- <div class="content-header-item">
              <a class="img-link mr-5" href="be_pages_generic_profile.html">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
              </a>
              <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
            </div> -->
            <!-- END User Info -->
          </div>
        </div>
        <!-- END Side Header -->
      </aside>
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <!--
          Helper classes

          Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

          Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
          Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
              - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
      -->
     
      <!-- END Sidebar -->


      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="content">
          <!-- Bootstrap Design -->
          <h2 class="content-heading">CALCULATE</h2>
          <div class="row">
            <div class="col-md-10">
              <!-- Normal Form -->
              <div class="block">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Electricity Calculation</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option">
                      <i class="si si-wrench"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content">
                  <form action="" method="post">
                    <div class="form-group">
                      <label>Voltage</label>
                      <input type="text" class="form-control" id="" name="voltage" required >
                      <div class="form-text text-muted text-left">Voltage(V)</div>
                    </div>
                    <div class="form-group">
                      <label>Current</label>
                      <input type="text" class="form-control" id="" name="current" required>
                      <div class="form-text text-muted text-left">Ampere(A)</div>
                    </div>
                    <div class="form-group">
                      <label>CURRENT RATE</label>
                      <input type="text" class="form-control" id=" " name="rate" required>
                      <div class="form-text text-muted text-left">sen/kWh</div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-alt-primary">CALCULATE</button>
                    </div>
                  </form>

        <!--FORMAT GIVEN FOR CALCLATING ENERGY SEEMS DO NOT MAKE SENSE SO I CHANGE IT TO POWER * HOUR / 1000-->
                  <?php
                  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $voltage = $_POST['voltage'];
                    $current = $_POST['current'];
                    $rate = $_POST['rate'];
            
                    function calculatePower($voltage, $current) {
                        return $voltage * $current; 
                    }
            
                    function calculateEnergy($power, $hour) {
                        return ($power * $hour) / 1000; 
                    }
            
                    function calculateTotalCharge($energy, $rate) {
                        return $energy * ($rate / 100); 
                    }
            
                    $power = calculatePower($voltage, $current);
                    $powerInKW = $power / 1000; 
            
                    echo "<div class='row'>";
                    echo "<div class='col-md-12'>";
                    echo "<div class='block'>";
                    echo "<div class='block-header block-header-default'>";
                    echo "<h3 class='block-title'>RESULTS</h3> </div>";
                    echo "<div class='block-content'>";
                    echo "<div class='form-group'>";
                    echo "<label>POWER</label>";
                    echo "<input type='text' class='form-control' name='voltage' value='$powerInKW kW'>
                    </div>";
                    echo "<div class='form-group'>";
                    echo "<label>RATE</label>";
                    echo "<input type='text' class='form-control'name='current' value='" . (isset($rate) ? number_format($rate / 100, 3) : '') . " RM'>
                        </div>
                    </div>
                  </div>
                  </div></div>";

                echo  "<div class='row'>";
                echo "<div class='col-md-10'>";
                echo "<div class='block'>";
                  echo "<div class='block-content'>";
                  echo "<table class='table table-striped table-vcenter'>";
                  echo "<thead>";
                  echo "<tr>";
                  echo "<th class='text-center' style='width: 50px;'>#Hour</th>";
                  echo "<th class='d-none d-sm-table-cell' style='width: 15%;'>Energy (kWh)</th>";
                  echo "<th class='text-center' style='width: 100px;'>TOTAL (RM)</th>
                        </tr>
                      </thead>
                      <tbody>";
                      for ($hour = 1; $hour <= 24; $hour++) {
                        $energy = calculateEnergy($power, $hour);
                        $totalCharge = calculateTotalCharge($energy, $rate);
                    
                  echo "<tr>";
                  echo  "<td class='text-center'>{$hour}</td>";
                  echo  "<td class='text-center'>" . number_format($energy, 5) . "</td>";
                  echo  "<td class='text-center'>RM " . number_format($totalCharge, 2) . " </td>
                        </tr>";
                        }
                      echo " </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>";
                }
                ?>
                </div>
              </div>
              <!-- END Normal Form -->
            </div>
          </div>
          <!-- END Bootstrap Design -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

    
      <!-- Footer -->
      <footer id="page-footer">
        <div class="content py-20 font-size-sm clearfix">
          <div class="float-right">
            Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
          </div>
          <div class="float-left">
            <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 4.3</a> &copy; <span class="js-year-copy"></span>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS Core

        Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
        to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

        If you like, you could also include them separately directly from the assets/js/core folder in the following
        order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

        assets/js/core/jquery.min.js
        assets/js/core/bootstrap.bundle.min.js
        assets/js/core/simplebar.min.js
        assets/js/core/jquery-scrollLock.min.js
        assets/js/core/jquery.appear.min.js
        assets/js/core/jquery.countTo.min.js
        assets/js/core/js.cookie.min.js
    -->
    <script src="assets/js/codebase.core.min.js"></script>

    <!--
        Codebase JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/codebase.app.min.js"></script>
  </body>
</html>