<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spin-it Cycle Shop | Contact Us</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="js/vendor/modernizr.js"></script>
</head>

<body>
  <!-- Fixed Header Start -->
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
          <li><a href="bikes.php">Bikes</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
          <li><a href="faq.php">FAQ</a></li>
        </ul>
      </section>
    </nav>
  </div>
  <!-- Header End -->

  <!-- Content Start -->
  <div class="row">
    Thank you <?php echo $_POST["name"]; ?> for your comment!

    <?php
      // LOCAL ONLY
      $url=parse_url(getenv("CLEARDB_DATABASE_URL"));
      $server=$url["host"];
      $username=$url["user"];
      $password=$url["pass"];
      $db=substr($url["path"], 1);
      $conn = new mysqli($server, $username, $password, $db);


      $name = $_POST["name"];
      $email = $_POST["email"];
      $comment = $_POST["comment"];

      $nameEscaped = "'" . $conn->real_escape_string($name) . "'";
      //echo "Name Escaped: '$nameEscaped'";
      $emailEscaped = "'" . $conn->real_escape_string($email) . "'";
      //echo "Email Escaped: '$emailEscaped'";
      $commentEscaped = "'" . $conn->real_escape_string($comment) . "'";
      //echo "Comment Escaped: '$commentEscaped'";
      $sql = "INSERT INTO contact (name, email, comment) VALUES ($nameEscaped, $emailEscaped, $commentEscaped)";
      //echo "SQL: '$sql'";

      if($conn->query($sql) === false) {
        trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
      } else {
        $last_inserted_id = $conn->insert_id;
        $affected_rows = $conn->affected_rows;
        //echo "Last Id: '$last_inserted_id'";
        //echo "Affected Rows: '$affected_rows'";
      };
      header("refresh:5; url=contact.php");
     ?>

    <br />
    This page should redirect in 5 seconds. Click <a href="contact.php">here</a> if it doesn't.
  </div>

  <!-- Content End -->

  <!-- Footer Start -->
  <footer class="footer">
    <div class="row full-width">
      <div class="small-12 medium-3 large-4 columns">
        <i class="fa fa-bicycle"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maiores alias ea sunt facilis impedit fuga dignissimos illo quaerat iure in nobis id quos, eaque nostrum! Unde, voluptates suscipit repudiandae!</p>
      </div>
      <div class="small-12 medium-3 large-4 columns">
        <i class="fa fa-map-marker"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
      </div>
      <div class="small-6 medium-3 large-2 columns">
        <h4>Site Map</h4>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="bikes.php">Bikes</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="faq.php">FAQ's</a></li>
          <ul>
      </div>
      <div class="small-6 medium-3 large-2 columns">
        <h4>Follow Us</h4>
        <ul class="footer-links">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
          <ul>
      </div>
    </div>
  </footer>


  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>
