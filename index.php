<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Foundation | Welcome</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>

<body>
  <!-- Fixed Header -->
  <div class="fixed">
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">My Site</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span>Menu</span>
          </a>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="#">Right Button Active</a></li>
          <li class="has-dropdown">
            <a href="#">Right Button Dropdown</a>
            <ul class="dropdown">
              <li><a href="#">First link in dropdown</a></li>
              <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
          </li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
          <li><a href="#">Left Nav Button</a></li>
        </ul>
      </section>
    </nav>
  </div>

  <!-- Home Page Welcome -->
  <div class="row">
    <div class="large-12 columns">
      <h1>Welcome to Foundation</h1>
    </div>
  </div>

  <!-- Home Page Slick -->
  <div class="image-slick">
    <div>
      <img src="img/black-bike.jpg" style="width:100%">
    </div>
    <div>
      <img src="img/silver-bike.jpg" style="width:100%">
    </div>
    <div>
      <img src="img/red-bike.jpg" style="width:100%">
    </div>
  </div>


  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  <script>
    $(document).ready(function() {
      $('.image-slick').slick({
        autoplay: true
      });
    });
  </script>
</body>

</html>
