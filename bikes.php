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
          <h1><a href="#">Spin-it Cycle Shop</a></h1>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span></span>
          </a>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Left Nav Section -->
        <ul class="left">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li class="active"><a href="bikes.php">Bikes</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>

        <!-- Right Nav Section
        <ul class="right">
          <li class="active"><a href="#">Right Button Active</a></li>
          <li class="has-dropdown">
            <a href="#">Right Button Dropdown</a>
            <ul class="dropdown">
              <li><a href="#">First link in dropdown</a></li>
              <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
          </li>
        </ul>-->

      </section>
    </nav>
  </div>

  <!-- Home Page Welcome -->
  <div class="row">
    <div class="large-12 columns">
      <h1>Welcome to Foundation</h1>
    </div>
  </div>

  <?php
  $url=parse_url(getenv( "CLEARDB_DATABASE_URL"));
  $server=$url[ "host"];
  $username=$url[ "user"];
  $password=$url[ "pass"];
  $db=substr($url[ "path"], 1);
  $conn=new mysqli($server, $username, $password, $db);
  echo "Hello World. I will use you soon. This is a github deploy";
  $conn -> close();
  ?>


  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>
