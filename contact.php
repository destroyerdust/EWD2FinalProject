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
  <!-- Contact Page map of Pittsford -->
  <div class="row show-for-medium-up">
    <div class="google-maps">
      <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Pittsford%2C%20NY%2C%20United%20States&key=AIzaSyB8KmdLo1m3qJ7Hc07-NsHNhZgAG2A1Xjc"></iframe>
    </div>
  </div>

  <div class="row">
    <div class="small-12">
      <h1>Contact Us!</h1>
    </div>
  </div>

  <div class="row">
    <div class="small-12 large-8 columns">
      <p>We would love to hear from you!  Whether it’s questions about our bikes or bike stories!</p>
      <p>Have you used one of our bikes in a competition or just love to get out and bike?  Pics are welcome also!</p>
    </div>
    <div class="small-12 large-4 columns">
      <form data-abide method="post" action="contact_thankyou.php">
        <div class="name-field">
          <label>Your name
            <small>required</small>
            <input type="text" name="name" required pattern="[a-zA-Z]+">
          </label>
          <small class="error">Name is required and must be a string.</small>
        </div>
        <div class="email-field">
          <label>Email
            <small>required</small>
            <input type="email" name="email" required>
          </label>
          <small class="error">An email address is required.</small>
        </div>
        <div class="text-field">
          <label>Comment
            <small>required</small>
            <textarea type="text" name="comment" required pattern="[a-zA-Z]+"></textarea>
          </label>
          <small class="error">Comment is required and must be a string.</small>
        </div>
        <button class="radius right show-for-large-up" type="submit">Submit</button>
        <button class="radius expand show-for-small-up hide-for-large-up" type="submit">Submit</button>
      </form>
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
</body>

</html>
