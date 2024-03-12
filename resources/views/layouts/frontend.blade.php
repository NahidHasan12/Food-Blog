
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>BD Cooker- @yield('title')</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <link rel="icon" type="image/png" href="{{ asset('/frontend') }}/images/favicon.png">
  <link rel="stylesheet" href="{{ asset('/frontend') }}/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('/frontend') }}/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/frontend') }}/plugins/animate-css/animate.css">
  <link rel="stylesheet" href="{{ asset('/frontend') }}/plugins/slick/slick.css">
  <link rel="stylesheet" href="{{ asset('/frontend') }}/plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="{{ asset('/frontend') }}/plugins/colorbox/colorbox.css">
  <link rel="stylesheet" href="{{ asset('/frontend') }}/css/style.css">
@yield('frontend_style')
</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">5800 Bogura, Bangladesh</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->

              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://www.facebook.com/profile.php?id=100036523093263" target="_blank">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/NahidHa31164683" target="_blank">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://www.instagram.com/freelancernahid1/" target="_blank">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/NahidHasan12" target="_blank">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
          </div>
        </div>
    </div>
<header id="header" class="header-one">

  @include('layouts.frontend_partial.nav')
</header>

@yield('content')

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png" alt="Constra">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
              labore et dolore magna aliqua.</p>
            <div class="footer-social">
              <ul>
                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/themefisher" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Our recipes</h3>
            <ul class="list-arrow">
              <li><a href="{{ route('pages.fast_food') }}">Fast Food</a></li>
              <li><a href="{{ route('pages.diet_food') }}">Diet Food</a></li>
              <li><a href="{{ route('pages.biriany') }}">Biriany</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Pages</h3>
            <ul class="list-arrow">
              <li><a href="{{ route('pages.home') }}">Home</a></li>
              <li><a href="{{ route('pages.about') }}">About Us</a></li>
              <li><a href="{{ route('pages.contact') }}">Contact</a></li>
              <li><a href="{{ route('pages.privacy') }}">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script> Develop By <a target="_blank" href="https://www.facebook.com/profile.php?id=100036523093263">Nahid Hasan</a></span>
            </div>
          </div>
        </div>

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div>
    </div>
  </footer>



  <script src="{{ asset('/frontend') }}/plugins/jQuery/jquery.min.js"></script>
  <script src="{{ asset('/frontend') }}/plugins/bootstrap/bootstrap.min.js" defer></script>
  <script src="{{ asset('/frontend') }}/plugins/slick/slick.min.js"></script>
  <script src="{{ asset('/frontend') }}/plugins/slick/slick-animation.min.js"></script>
  <script src="{{ asset('/frontend') }}/plugins/colorbox/jquery.colorbox.js"></script>
  <script src="{{ asset('/frontend') }}/plugins/shuffle/shuffle.min.js" defer></script>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>

  <script src="{{ asset('/frontend') }}/plugins/google-map/map.js" defer></script>
  <script src="{{ asset('/frontend') }}/js/script.js"></script>

  </div>
  </body>

  </html>
