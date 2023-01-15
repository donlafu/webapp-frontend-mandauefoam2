@extends('layouts.app')

@section('content')




  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets-homepage/assets/img/hero-carousel/0.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">The Best Business Information </h2>
                <p class="animate__animated animate__fadeInUp">We're In The Business Of Helping You Start Your Business</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets-homepage/assets/img/hero-carousel/8.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                <p class="animate__animated animate__fadeInUp">Helping Business Security & Peace of Mind for Your Family</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets-homepage/assets/img/hero-carousel/9.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
          </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/about/1.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">BEGINNINGS AND HISTORY</h4>
                </a>
                <p>
                    Started in 1971 by Mrs. Rosita T. Uy as a foam manufacturer in Cebu, Mandaue Foam has rapidly grown over the past 50 years because of its commitment to provide its customers with quality and value for money products. Today, Mandaue Foam is one of the country’s top 1000 corporations and has over 30 factories and showrooms nationwide. Its trademark products include its signature Flex Foam and Hotel Quality Gala Bed Mattress.

                    Soon after it started, Mandaue Foam sensed a need in the market for a more complete home store and it began to expand and diversify its product lines to include pillows, sofas, dining tables, bed frames, and other small home items. Today, Mandaue Foam continues to augment its product lines and innovate by offering customized furniture among others.

                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>For Everyday Living</h4>
                  <p>
                    We are more than just a foam company. Our products range from furniture to houseware, and many more.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-card-checklist"></i>
                  </a>
                  <h4>We Customize</h4>
                  <p>
                    Can’t find the perfect furniture you? We help you personalize furniture so you always get the perfect one.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-bar-chart"></i>
                  </a>
                  <h4>Return Policy</h4>
                  <p>
                    Not satisfied? We guarantee a 30-day return and exchange so you can get the best out of our products.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-binoculars"></i>
                  </a>
                  <h4>We Deliver </h4>
                  <p>
                    From our store straight to your door, we deliver our products to you for a hassle-free shopping experience.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-brightness-high"></i>
                  </a>
                  <h4>Seo Expart</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-calendar4-week"></i>
                  </a>
                  <h4>24/7 Support</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our special Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/1.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Mickel</h4>
                <p>Seo</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/2.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/3.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/4.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="assets/img/about/2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>working with us</h2>
            <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
            <a href="#contact" class="ready-btn scrollto">Contact us</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Testimonials Section ======= -->
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Latest News</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/1.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Assumenda repud eum veniam</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/2.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Explicabo magnam quibusdam.</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Lorem ipsum dolor sit amet</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
            </div>
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to Mandaue Foam</h3>
              <a class="sus-btn" href="#">Get A quote</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: (032) 265 5280<br>
                    <span>Sunday-Saturday (10am-8pm)</span>
                    Call: +1 5589 55488 55<br>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: mandauefoam@gmail.com<br>
                    <span>mandauefoam.com.ph</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: J C Aquino Avet<br>
                    <span>Butuan City, Agusan Del Norte</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.3098364725743!2d125.522712514786!3d8.943570193580152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c0475f60110b%3A0xc011eb1a725faa40!2sMandaue%20Foam!5e0!3m2!1sen!2sph!4v1672936431215!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>M</span>andaue Foam</h2>
                </div>
                <p>Mandaue Foam Home Store is a one-stop shop for all your foam and furniture needs. Look through our online selection for pieces that will complete your home from pillows, foam mattress, spring mattress, dining sets, sofas, bed sheets, office chairs, dressers and all things for home. You can find it all in Mandaue Foam.</p>

                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Customer Support Hotline</h4>

                <div class="footer-contacts">
                  <p><span>Luz:</span> (02) 8424 3000</p>
                  <p><span>Viz/Min:</span> (032) 265 5280</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>2023 Mandaue Foam Philippines</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a href="https://bootstrapmade.com/"> Tom Canseco</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


@endsection
