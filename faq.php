<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spin-it Cycle Shop | FAQ</title>
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
          <li><a href="contact.php">Contact</a></li>
          <li class="active"><a href="faq.php">FAQ</a></li>
        </ul>
      </section>
    </nav>
  </div>
  <!-- Header End -->

  <!-- Content Start -->
  <div class="row testimonial">
    <div class="small-12 large-9 columns">
      <h1>FAQ</h1>
      <h4>What's the difference between the $20 helmat and the $100 one?</h4>
      <p>Generally more expensive helmets are lighter, more sophisticated retention systems that are more adjustable, offer better ventalation with more and larger vents and have more stylish appearance. Additionally the more expensive helmet's outer shell
        is usually bonded to the foam core in the molding process. Cheaper ones have outer shells that are glued and taped.</p>
      <hr/>
      <h4>How do I know what size road handlebar I need?</h4>
      <p>Road handlebars are produced in various widths. Handlebar width is measured in centimeters across the drops (this is the bottom of the curved portion of the bars, pointing toward the rider). Most companies measure their bars center to center but
        others, TTT's bars for example, measure outside to outside.</p>
      <p>As a general rule, the size of your handlebars should be equal to the width of your shoulders at a line up from the armpit. Some riders prefer wider handlebars for easier breathing while other riders prefer narrower handlebars for greater aerodynamics
        and maneuverability. A properly sized bar should strike a balance between comfort, aerodynamics and your particular riding style.</p>
      <hr/>
      <h4>What is TPI? If a tire has a higher TPI does that mean it's a better tire? Does TPI affect the ride in any way?</h4>
      <p>TPI is an acronym for Threads Per Inch and describes how fine the threads are in a tire's casing. A tire with a high TPI (e.g. 127 TPI) will have a thinner, suppler sidewall. This enhances performance (rolling resistance, acceleration and handling),
        makes the tire lighter, but also makes it less durable and more costly. Most high quality, high performance tires have a higher TPI.</p>
      <p>"Is higher better?" It depends on what you want or need. If you are a competitive athlete who wants speed regardless of the cost, then the answer is an unqualified "YES". Generally a tire with a soft, thin, tread compound and super high TPI will
        stick like crazy in the corners and accelerate like a rocket. There is a downside. Thin light tires usually will not last very long. If you are a rider on a budget then the answer is probably "no". A cheaper tire with lower TPI and a thicker tread
        will be more puncture resistant and last longer but it will be heavier, it won't roll as fast nor will it handle as well.</p>
      <hr/>
    </div>
    <div class="small-12 large-3 columns">
      <blockquote>One of the best bike shops I've been to in all of Rochester and it's surrounding areas!
        <cite>Newt Franklyn</cite>
      </blockquote>
      <blockquote>Bikes! Bikes! Bikes! Bikes! Bikes! Bikes!
        <cite>Greg Anson</cite>
      </blockquote>
      <blockquote>The employees are knowledgeable and helped me pick out my first bike!.
        <cite>Jocelyn Elroy</cite>
      </blockquote>
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
