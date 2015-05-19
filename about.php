<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spin-it Cycle Shop | About Us</title>
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
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="bikes.php">Bikes</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="faq.php">FAQ</a></li>
        </ul>
      </section>
    </nav>
  </div>
  <!-- Header End -->

  <!-- Content Start -->
  <div class="row">
    <div class="large-12 columns">
      <h1>About Us!</h1>
    </div>
  </div>
  <div class="row">
    <div class="small-12 large-9 columns">
      <p>Bacon ipsum dolor amet pork loin swine ribeye, flank capicola pork chop tenderloin pork belly short loin tongue t-bone strip steak ground round tail. Alcatra pork belly fatback meatball bresaola venison tongue kevin. Tri-tip bacon hamburger bresaola,
        kevin corned beef spare ribs sirloin biltong turducken leberkas. Hamburger jowl doner shoulder cupim, pork chop pork belly ham hock shankle bresaola kielbasa frankfurter rump. Beef ribs picanha jowl, ham filet mignon prosciutto corned beef short
        ribs. Sirloin shankle frankfurter pork belly ball tip, ground round chuck turkey.</p>
    </div>
    <div class="small-12 large-3 columns show-for-large-up">
      <ul class="vcard">
        <li class="fn">Spin-it Cycle Shop</li>
        <li class="street-address">123 Fake Street.</li>
        <li class="locality">Pittsford</li>
        <li>
          <span class="state">New York</span>,
          <span class="zip">14623</span>
        </li>
        <li class="email"><a href="#">spin-it@gmail.com</a></li>
      </ul>
    </div>
  </div>
  <!-- Content End -->

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
