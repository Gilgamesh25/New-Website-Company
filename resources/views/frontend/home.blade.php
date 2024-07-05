<head>
<link rel="icon" type="image" href="images/logo2.png">
</head>
@extends('layouts.frontend')

@section('title','PT. Trikayarasa Jayaood | Home')
    @section('content')
    @foreach ($home as $home)
        

    <div
            id="home"
            class="header-hero"
            style="background-image: url(images/black3.png)"
        >
            <div class="container">
                <div class="justify-center row">
                    <div class="w-full lg:w-2/3">
                        <div class="pt-32 mb-2 text-center lg:pt-48 header-hero-content">
                            <h2
                                class="
                                    mb-3
                                    text-6xl
                                    font-bold
                                    text-white
                                    header-title
                                    wow
                                    fadeInUp
                                "
                                data-wow-duration="1.3s"
                                data-wow-delay="0.5s"
                            >
                                {{ $home->title }}
                            </h2>
                            <p
                                class="mb-8 text-white text wow fadeInUp text-2xl"
                                data-wow-duration="1.3s"
                                data-wow-delay="0.8s"
                            >
                                {{ $home->text }}
                            </p>
                            <a
                                href="#features"
                                class="page-scroll main-btn gradient-btn gradient-btn wow fadeInUp mb-10"
                                data-wow-duration="1.3s"
                                data-wow-delay="1.1s"
                            >Get Started</a>
                        </div>
                        <!-- header hero content -->
                    </div>
                </div>
                <!-- row -->
                <div class="justify-center row" >
                    <div class="w-full lg:w-2/3">
                        <div
                            class="text-center header-hero-image wow fadeIn" 
                            data-wow-duration="1.3s"
                            data-wow-delay="1.4s"
                        >
                        <img src="/image/{{ $home->image }}" alt="Hero Image" style="width: 120%; height: auto;" />
                            
                        </div>
                        <!-- header hero image -->
                    </div>
                </div>
                <!-- row -->
            </div>
            @endforeach
            <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div>
        <!-- header hero -->
    </header>

    <!--====== ABOUT PART START ======-->
    <section id="about" class="relative pt-20 about-area">
        <div class="container">
            <div class="row">
                <div class="w-full lg:w-1/2">
                    @foreach ($about as $about)
                    <div class="mx-4 mt-12 about-content wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="mb-4 section-title">
                            <div class="line"></div>
                            <h3 class="title text-2xl">{{ $about->text }}</h3>
                        </div>
                        <!-- section title -->
                        <p class="mb-5" style="font-size: 20px; text-align: justify; line-height: 1.3;">{{ $about->title }}</p>
                    </div>
                    <!-- about content -->
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mx-4 mt-12 text-center about-image wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="/image/{{ $about->image }}" alt="about" />
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        @endforeach
    </section>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">Savor the Taste of Quality, <span> Purchase Our Delicious Onion Treats!</span></h3>
                    </div>
                    <!-- section title -->
                </div>
            </div>
            <!-- row -->
            <div class="justify-center row">
                @foreach ($card as $card)
                <div class="w-full sm:w-2/3 lg:w-1/3">
                    <div class="mt-8 text-center single-services wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="/image/{{ $card->image }}" alt="shape">
                        </div>
                        <div class="mt-8 services-content">
                            <h4 class="mb-8 text-xl font-bold text-gray-900">{{ $card->text }}</h4>
                            <p class="mb-8">{{ $card->title }}</p>
                        </div>
                    </div>
                    <!-- single services -->
                </div>
                @endforeach
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== SERVICES PART ENDS ======-->

        <!--====== product PART START ======-->
        <div class="pt-24 product-area">
  <div class="container">
    <div class="justify-center row">
      <div class="w-full lg:w-2/3">
        <div class="pb-10 text-center section-title">
          <div class="m-auto line"></div>
          <h3 class="title">Product</h3>
        </div>
        <!-- section title -->
      </div>
    </div>
    <!-- row -->
    <div class="row justify-center">
      <div class="w-full">
        <div class="products-container">
          <div class="single-product">
            <img src="/image/2503.png" alt="Product 1" />
            <p>Sabah</p>
          </div>
          <div class="single-product">
            <img src="/image/2504.png" alt="Product 3" />
            <p>Bagorin</p>
          </div>
          <!-- Add more products as needed -->
        </div>
        <!-- products container -->
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</div>
    <!--====== product PART ENDS ======-->
    <!--====== PARTNERSHIP PART START ======-->
    <div class="pt-24 brand-area">
        <div class="container">
            <div class="justify-center row">
                <div class="w-full lg:w-2/3">
                    <div class="pb-10 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">Partnership</h3>
                    </div>
                    <!-- section title -->
                </div>
            </div>
            <!-- row -->
            <div class="justify-center row">
                <div class="row">
                    <div class="w-full">
                        <div class="items-center justify-center row lg:justify-between">
                            @foreach ($customer as $customer)
                            <div class="single-logo hover:opacity-100 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <img src="/image/{{ $customer->image }}" alt="brand" />
                            </div>
                            <!-- single logo -->
                            @endforeach
                            <!-- brand logo -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
        </div>
    </div>
    <!--====== PARTNERSHIP PART ENDS ======-->
<footer id="footer" class="relative z-10 footer-area pt-120 mt-10">
  <div class="footer-bg" style="background-image: url({{ url('images/black4.png') }})"></div>
  <div class="container">
    <div class="
        px-6
        pt-10
        pb-20
        mb-12
        bg-white
        rounded-lg
        shadow-xl
        md:px-12
        subscribe-area
        wow
        fadeIn
      " data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="row text-right">
        <div class="w-full lg:w-1/2 text-center">
          <div class="lg:mt-12 subscribe-content">
            <h1 class="text-2xl font-bold sm:text-5xl subscribe-title">
              {{ $home->title }}
              <span class="block font-normal"></span>
            </h1>
          </div>
        </div>
        <div class="w-full lg:w-1/2">
          <div class="mt-12 subscribe-form"></div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- subscribe area -->
    <div class="footer-widget pb-120">
      <div class="row">
        <!-- Navigation and Contact Us Column -->
        <div class="w-full lg:w-2/5">
          <div class="row">
            <div class="w-full lg:w-1/2">
              <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Navigation</h4>
                </div>
                <ul class="link">
                  <li><a href="/" class="text-white style">Home</a></li>
                  <li><a href="gallery" class="text-white">Gallery</a></li>
                  <li><a href="blog" class="text-white">News</a></li>
                  <!-- <li><a href="portfolio" class="text-white">Portfolio</a></li>
                  <li><a href="contact" class="text-white">Contact</a></li> -->
                  <li><a href="profile" class="text-white">Profile</a></li>
                </ul>
              </div>
              <!-- footer wrapper -->
            </div>
            <div class="w-full lg:w-1/2">
              <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Contact Us</h4>
                </div>
                <ul class="contact text-white">
                  <li>{{ $about->phone }}</li>
                  <li>{{ $about->emails }}</li>
                  <li>{{ $about->locations }}</li>
                </ul>
              </div>
              <!-- footer contact -->
            </div>
          </div>
        </div>
        <!-- Follow Us and Map Column -->
        <div class="w-full lg:w-3/5">
          <div class="row">
            <div class="w-full lg:w-1/2">
              <div class="mt-12 social-media wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Follow Us</h4>
                </div>
                <ul class="social flex space-x-4">
  <li>
    <a href="https://www.instagram.com/pt.trikayarasajayafood/" target="_blank">
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png"
        alt="Instagram"
        style="width: 32px; height: 32px;" 
      />
    </a>
  </li>
  <li>
    <a href="https://wa.me/085655111130" target="_blank">
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
        alt="WhatsApp"
        style="width: 32px; height: 32px;" 
      />
    </a>
  </li>
  <li>
    <a href="https://www.facebook.com/profile.php?id=100063632362976" target="_blank">
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png"
        alt="Facebook"
        style="width: 32px; height: 32px;" 
      />
    </a>
  </li>
</ul>                <div class="mt-4 qr-code-container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s" style="text-align: right;">
                </div>
                <!-- QR Code -->
              </div>
              <!-- social media -->
            </div>
            <div class="w-full lg:w-1/2">
              <div class="mt-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="footer-title">
                  <h4 class="mb-8 text-2xl font-bold text-white">Our Location</h4>
                </div>
                <div class="map-container pt-4" style="text-align: right;">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.6638704761039!2d112.61746719844575!3d-7.475290938461189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780b625e4f7f6f%3A0x6147da7303058d0b!2sPABRIK%20BAWANG%20GORENG%20TRIKAYARASAFOOD%202!5e1!3m2!1sid!2sid!4v1720094624142!5m2!1sid!2sid"
                    width="100%"
                    height="300"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- footer widget -->
  </div>
</footer>

<style>
  .social img {
    transition: transform 0.3s ease;
  }

  .social img:hover {
    transform: scale(1.1);
  }
.link {
  font-size: 20px;
}
  .link a {
    transition: color 0.3s ease;
  }

  .link a:hover {
    color: #ff6347; /* Example hover color */
  }

  .footer-widget {
    padding-bottom: 120px;
  }

  .footer-title h4 {
    margin-bottom: 8px;
    font-size: 2rem;
    font-weight: bold;
    color: white;
  }

  .contact li,
  .link li {
    margin-bottom: 8px;
  }

  .contact li {
    font-size: 1rem;
  }

  .link a {
    font-size: 1rem;
    color: white;
  }

  .qr-code-container {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }

  .products-container {
  display: flex;
  justify-content: center;
  overflow-x: auto;
  white-space: nowrap;
  padding-bottom: 1rem;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch; /* for smooth scrolling on mobile devices */
}

.single-product {
  flex: 0 0 auto;
  width: 700px; /* Width for desktop */
  margin: 0 10px; /* Reduced margin */
  text-align: center;
  transition: transform 0.3s;
  position: relative; /* Added for overflow handling */
  overflow: hidden; /* Prevents image overflow */
}

.single-product img {
  width: 100%; /* Ensures image fits within the container */
  height: auto;
  transition: transform 0.3s;
}

.single-product:hover img {
  transform: scale(1.1); /* Increased scale for hover effect */
}

.single-product p {
  margin-top: 1rem; /* Adjust margin as needed */
  font-size: 1.5rem;
  color: #333;
}

/* Add media query for mobile responsiveness */
@media (max-width: 768px) {
  .products-container {
    justify-content: flex-start; /* Align items to the start for better visibility */
    padding: 1rem;
  }

  .single-product {
    width: 50%; /* Adjust width for mobile */
    margin: 0 5px; /* Further reduced margin for better fit on mobile */
  }

  .single-product img {
    width: 100%; /* Ensures image fits within the container */
  }

  .single-product p {
    font-size: 1.2rem; /* Adjust font size for mobile */
  }
}
</style>
        
        <!-- footer copyright -->
      </div>
      <!-- container -->
      <div id="particles-2" class="particles"></div>
    </footer>
  <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
    <!--====== ABOUT PART ENDS ======-->
   
@endsection