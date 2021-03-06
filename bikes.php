<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spin-it Cycle Shop | Bikes</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
          <li><a href="faq.php">FAQ</a></li>
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
      <h1>Our Bike Selection!</h1>
    </div>
  </div>


  <div class="row">
    <!-- LOCAL CONNECTION ONLY -->
    <?php
    $url=parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server=$url["host"];
    $username=$url["user"];
    $password=$url["pass"];
    $db=substr($url["path"], 1);
    $conn=new mysqli($server, $username, $password, $db);
    // ONLY COPY AFTER THIS
    $sql = "SELECT bikeId, name, price, imgName, description, feature1, feature2, feature3, feature4 FROM bike";
    $result = mysqli_query($conn, $sql) or die("RIP");
    $num = mysqli_num_rows($result);

    // 4 Item Incrementor
    $i = 0;

    if($num > 0) {
      while ($row = $result->fetch_assoc()) {
        $bikeId = $row["bikeId"];
        $name = $row["name"];
        $price = $row["price"];
        $imgName = $row["imgName"];
        $description = $row["description"];
        $feature1 = $row["feature1"];
        $feature2 = $row["feature2"];
        $feature3 = $row["feature3"];
        $feature4 = $row["feature4"];

        if ($i == 4) {
          echo "</div>";
          echo "<div class='row'>";
          $i = 0;
        }

        echo "<div class='small-12 medium-6 large-3 columns'>";
          echo "<img src='img/$imgName'>";
          echo "<ul class='pricing-table'>";
            echo "<li class='title'>$name</li>";
            echo "<li class='price'>$$price</li>";
            echo "<li class='description'>$description</li>";
            echo "<li class='bullet-item'>$feature1</li>";
            echo "<li class='bullet-item'>$feature2</li>";
            echo "<li class='bullet-item'>$feature3</li>";
            echo "<li class='bullet-item'>$feature4</li>";
            echo "<li class='cta-button'><a class='button' href='#'>More Info</a></li>";
          echo "</ul>";
        echo "</div>";

        $i++;
      }
      echo "</div>";
    }

    $conn -> close();
    ?>
    </div>

    <!-- Include Footer -->
    <?php require("footer.php"); ?>
    <!-- End Footer -->

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>

  </html>
