<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spin-it Cycle Shop | Welcome</title>
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
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="bikes.php">Bikes</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="faq.php">FAQ</a></li>
        </ul>

      </section>
    </nav>
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

  <div class="row">
    <div class="large-12 columns">
      <h1 class="text-center">
        <strong>Latest News</strong>
      </h1>
    </div>
  </div>

  <hr/>

  <div class="row">
    <div class="small-12 large-6 columns">
      <h2>Hello</h2>
      <p>Welcome to Spin-it Cycle Shop's new website! We all here are welcome to show you our products without you having to come to our store!</p>
      <p>Feel free to browse the bikes in the Bikes page (Link on top)!</p>

      <p>You can also check out the other areas of the website to further understand our story and how to contact us!</p>

      <hr/>

      <h2>New Products!</h2>
      <p>Our team has been at hard at work to aquire new products to offer our customers. Check them out at our bikes page!</p>
    </div>
    <div class="small-12 large-6 columns">
      <h2>How Often Should You Replace Your Chain?</h2>
      <p>The short answer here is, "Probably more often than you think." A bike chains job is to transfer every watt of power from your cranks to your back wheel, and that's a big undertaking. With performance bikes becoming lighter, and cassettes offering
        more gears in the same amount of spacing (i.e thinner chains), it's not uncommon for heavier riders to wear through a chain in as little as 1,000 miles. That's just a few months for someone who rides every weekend.</p>
      <p>Rider weight, terrain, even wheel size and chainstay length can all affect the life expectancy of your chain so it's hard for us to set an exact mileage number for replacement.</p>
      <p>Although there is no cut and dry length of time a road bike chain will last, there are several tools to measure chain wear, and some easy ways to extend your chains life. The best way is to maintain a clean and lubricated drivetrain. This means
        cleaning the grime off of your chain, and lubricating it every three or four rides. We love Rock & Roll Road chainlube, and a small bottle will easily last six months.</p>

    </div>
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
  <script>
    $(document).ready(function() {
      $('.image-slick').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnHover: false
      });
    });
  </script>
</body>

</html>
