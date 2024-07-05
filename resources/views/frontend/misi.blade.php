<head>
<link rel="icon" type="image" href="images/logo2.png">
</head>
@extends('layouts.frontend')

@section('title','Portfolio')
    @section('content')
   <!-- This example requires Tailwind CSS v2.0+ -->
  
  <section id="team" class="team-area pt-120">
    <div class="container">
   
        <nav class="flex mb-10" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
              <a href="/" class="inline-flex items-center text-sm text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
              </a>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="/profile" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Vision & Mission</a>
              </div>
            </li>
          </ol>
        </nav>



  <div class="mt-10 py-12 bg-white text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
      <div class="lg:text-center">
        <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Profiles</h2>
        @foreach ($homes as $homes)
          
        
        <p class="mt-5 mb-5 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          {{ $homes->title }}
        </p>
        @endforeach
        @forelse ($misi as $misi)
        <img class="inline-block h-60 w-60 rounded-full ring-2 ring-white" src="/image/{{ $misi->image }}" alt="">
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
          {{ $misi->text }}
        </p>
      </div>

        <div class="mt-10">
          <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
            <div class="relative">
              <dt>
                <p class="mt-10 ml-16 text-lg leading-6 font-bold text-gray-900">Vision</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
              {{ $misi->visi }}
              </dd>
            </div>

            <div class="relative">
              <dt>
                <p class="mt-10 ml-16 text-lg leading-6 font-bold text-gray-900">Mission</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                {{ $misi->misi }}
              </dd>
            </div>
            
          </dl>
        </div>
      </div>
      
    </div>
  </div>
@empty
    <center>
      <h1 class="mt-10">Halaman Masih Kosong</h1>
    </center>
@endforelse
    </div>
  </section>
    
  <footer id="footer" class="relative z-10 footer-area pt-120">
        <div class="footer-bg" style="background-image: url({{ url('images/black4.png') }})"></div>
        <div class="container">
            <div class="px-6 pt-10 pb-20 mb-12 bg-white rounded-lg shadow-xl md:px-12 subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row text-right">
                    <div class="w-full lg:w-1/2 text-center">
                        <div class="lg:mt-12 subscribe-content">
                            <h1 class="text-2xl font-bold sm:text-4xl subscribe-title">
                                @foreach ($home as $home)
                                    {{ $home->title }}
                                @endforeach
                                <span class="block font-normal"></span>
                            </h1>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="mt-12 subscribe-form"></div>
                    </div>
                </div>
            </div>
            <div class="footer-widget pb-120">
                <div class="row">
                    <div class="w-4/5 sm:w-2/3 md:w-3/5 lg:w-2/6">
                        <div class="row">
                            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                                <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="footer-title">
                                        <h4 class="mb-8 text-2xl font-bold text-white">Navigation</h4>
                                    </div>
                                    <ul class="link">
                                        <li><a href="/" class="text-white">Home</a></li>
                                        <li><a href="gallery" class="text-white">Gallery</a></li>
                                        <li><a href="blog" class="text-white">News</a></li>
                                        <li><a href="profile" class="text-white">Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-4/6">
                        <div class="row">
                            <div class="w-full lg:w-1/2">
                                <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                                    <div class="footer-title">
                                        <h4 class="mb-8 text-2xl font-bold text-white">Contact Us</h4>
                                    </div>
                                    <ul class="contact text-white">
                                        @foreach ($about as $about)
                                            <li>{{ $about->phone }}</li>
                                            <li>{{ $about->emails }}</li>
                                            <li>{{ $about->locations }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 flex flex-col lg:flex-row">
                                <div class="mt-12 social-media wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                                    <div class="footer-title">
                                        <h4 class="mb-8 text-2xl font-bold text-white">Follow Us</h4>
                                    </div>
                                    <ul class="social flex space-x-4">
                                        <li>
                                            <a href="https://www.instagram.com/pt.trikayarasajayafood?utm_source=ig_web_button_share_sheet&igshid=ZDNlZDc0MzIxNw==" target="_blank">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 32px; height: 32px;" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/085655111130" target="_blank">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 32px; height: 32px;" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=100063632362976" target="_blank">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook" style="width: 32px; height: 32px;" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-12 wow fadeIn lg:ml-8" data-wow-duration="1s" data-wow-delay="0.8s">
                                    <div class="footer-title">
                                        <h4 class="mb-8 text-2xl font-bold text-white">Our Location</h4>
                                    </div>
                                    <div class="map-container pt-4">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.6638704761039!2d112.61746719844575!3d-7.475290938461189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780b625e4f7f6f%3A0x6147da7303058d0b!2sPABRIK%20BAWANG%20GORENG%20TRIKAYARASAFOOD%202!5e1!3m2!1sid!2sid!4v1720094624142!5m2!1sid!2sid"
                                          frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
  width: 600px; /* Adjust width as needed */
  margin: 0 20px; /* Adjust margin as needed */
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

.map-container iframe {
            border: 0;
            width: 100%;
            height: 300px;
        }

/* Add media query for mobile responsiveness */
@media (max-width: 768px) {
  .products-container {
    justify-content: flex-start; /* Align items to the start for better visibility */
    padding: 1rem;
  }

  .single-product {
    margin: 0 15px; /* Reduce margin for better fit on mobile */
  }

  .product-content img {
    width: 150px; /* Adjust image size for mobile */
  }
}
</style>
        <!-- container -->
        <div id="particles-2" class="particles"></div>
      </footer>
        <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
      <!--====== BLOG PART ENDS ======-->
      @endsection