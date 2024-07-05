<head>
<link rel="icon" type="image" href="images/logo2.png">
</head>
  @extends('layouts.frontend')

  @section('title','Blogs')
      @section('content')

  <!--====== BLOG PART START ======-->
  <style type="text/css">
      .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
      }
    </style>


      <section id="blog" class="blog-area pt-120">
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
                  <a href="/blog" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">News</a>
                </div>
              </li>
            </ol>
          </nav>

          <div class="row">
            <div class="w-full lg:w-1/2">
              <div class="pb-8 section-title">
                <div class="line"></div>
                <h3 class="title"><span>Our Recent</span> News Posts</h3>
              </div>
              <!-- section title -->
            </div>
          </div>
          <!-- row -->
          <label class="relative block">
            <form action="/blog">
            <span class="sr-only">Search</span>
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              <svg class="h-5 w-5 fill-gray-300" viewBox="0 0 20 20"><!-- ... --></svg>
            </span>
            <div class="grid grid-cols-6 gap-4">
              <input class="col-span-5 placeholder:italic placeholder:text-gray-400 block bg-white border border-gray-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search"/>
            <button class="p-1 bg-red-300 hover:bg-red-600 hover:drop-shadow-lg text-gray-100 rounded-lg  border-red-300" type="submit">Search</button>  </div>
            </form>
          </label>
        
          <div class="justify-center row mb-8">
            @forelse ($blog as $blog)
                <div class="w-full md:w-2/3 lg:w-1/3">
              <div
                class="mx-4 mt-10 single-blog wow fadeIn"
                data-wow-duration="1s"
                data-wow-delay="0.2s"
              >
                <div class="mb-5 max-h-60 overflow-hidden blog-image rounded-xl">
                  <img class="w-full" src="/image/{{ $blog->image }}" alt="blog" />
                </div>
                <div class="blog-content">
                  <ul class="flex mb-5 meta">
                    <li>Type: <a href="javascript:void(0)">{{ $blog->author }}</a></li>
                    <li class="ml-12">{{ date('d-m-Y', strtotime($blog->created_at)); }}</li>
                  </ul>
                  <p class="mb-6 text-2xl leading-snug text-gray-900">
                    {{ $blog->title }}
                  </p>
                  <a class="text-theme-color-2" href="/blog/{{ $blog->title }}">
                    Read More
                    <i class="ml-2 lni lni-chevron-right"></i>
                  </a>
                </div>
              </div>
              <!-- single blog -->
            </div>
            @empty
                <h2 class="mt-20 text-2xl	font-extrabold	">nothing found in here...</h2>
            @endforelse
            
            
          </div>
          <!-- row -->
        </div>
        <!-- container -->
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