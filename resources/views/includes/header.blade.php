<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="images/logo2.png">
    <title>Responsive Navbar</title>
    <style>
        .navbar-area {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
            background-color: white;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-toggler span {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            background-color: #333;
        }

        .hidden {
            display: none;
        }

        .block {
            display: block;
        }

        .content {
            margin-top: 80px; /* Adjust based on the height of your navbar */
        }
    </style>
</head>
<body>

  <div class="hidden preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--====== PRELOADER PART ENDS ======-->

  <!--====== HEADER PART START ======-->

  <header class="header-area">
    <div class="navbar-area">
      <div class="container relative">
        <div class="row">
          <div class="w-full">
            <nav class="
                flex
                items-center
                justify-between
                navbar navbar-expand-lg
              ">
              <button
                class="block navbar-toggler focus:outline-none lg:hidden"
                type="button"
                data-toggle="collapse"
                data-target="#navbarOne"
                aria-controls="navbarOne"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div
                class="
                  absolute
                  left-0
                  z-20
                  hidden
                  w-full
                  px-5
                  py-3
                  duration-300
                  bg-white
                  shadow
                  lg:w-auto
                  navbar-collapse
                  lg:block
                  top-100
                  mt-full
                  lg:static lg:bg-transparent lg:shadow-none
                "
                id="navbarOne"
              >
                <ul
                  id="nav"
                  class="
                    items-center
                    content-start
                    mr-auto
                    lg:justify-end
                    navbar-nav
                    lg:flex
                  "
                >
                  <li class="nav-item">
                    <a class="page-scroll" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="blog">News</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="page-scroll" href="portfolio">Portfolio</a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a class="page-scroll" href="contact">Contact</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="page-scroll" href="profile">Profile</a>
                  </li>
                </ul>
              </div>
              <!-- navbar collapse -->
              <div class="icon-container">
                <a href="profile" class="nav-icon"><img src="images/logo2.png" alt="Profile Icon" class="nav-icon" style="width: 65px; height: 65px; margin-left: 20px;"></a>
              </div>
              <!-- navbar collapse -->
            </nav>
            <!-- navbar -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- navbar area -->
  </header>
  <!--====== HEADER PART ENDS ======-->



  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggler = document.querySelector('.navbar-toggler');
        var navbar = document.getElementById('navbarOne');

        toggler.addEventListener('click', function() {
            if (navbar.classList.contains('hidden')) {
                navbar.classList.remove('hidden');
                navbar.classList.add('block');
            } else {
                navbar.classList.remove('block');
                navbar.classList.add('hidden');
            }
        });
    });
  </script>

</body>
</html>
