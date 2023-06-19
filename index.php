
<!DOCTYPE html>
<html>
<head>
  <title>Elite Vehicle Sri Lanka</title>
  <?php
    include_once "headerLink.php"; 
    include_once "navigation.php";
    include_once "commen.php";
  ?>  
  <?php openSession(); ?>
</head>

<body>
  <div class="hero_area bg-white">
    <?php navigationMenu('home'); ?> 
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                      Wide Selection
                      </h1>
                      <p>
                      Choose from a diverse fleet of well-maintained vehicles, including cars, SUVs, vans, and more. We have options to accommodate various group sizes, preferences, and budgets.
                      </p>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/slider-img-3.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                      Flexible Rental Periods
                      </h1>
                      <p>
                      Whether you need a vehicle for a few hours, days, or weeks, our system allows you to customize your rental period based on your specific requirements. Exceptional Customer Support: Our dedicated customer support team is available to
                      </p>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/slider-img-2.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                      Competitive Pricing
                      </h1>
                      <p>
                      We believe in offering transparent and competitive pricing. Our rates are designed to provide you with the best value for your money, without compromising on the quality of service.
                      </p>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/slider-img-1.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->
  <section class="about_section layout_padding bg-light">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <span class="design_dot"></span>
          About Elite Vehicle
        </h2>
      </div>
      <div class="col-md-7 mx-auto px-0">
        <div class="img-box b2">
          <img src="images/about-img.png" alt="" />
        </div>
      </div>
      <div class="col-md-9 mx-auto px-0">
        <div class="detail-box text-justify">
          <p>
          Welcome to our elite vehicle and user-friendly vehicle booking system. Whether you need a car for a business trip, family vacation, or daily commute, our platform makes it easy to find and book the perfect vehicle. With a wide selection of cars, SUVs, vans, and more, our system provides a seamless experience from start to finish. Simply enter your location, desired dates, and vehicle preferences, and let our system handle the rest. Enjoy a hassle-free booking process, competitive prices, and reliable customer support. Get ready to hit the road with confidence and convenience with our vehicle booking system.
          </p>

        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- service section -->

  <section class="service_section">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="mb-5 pt-4">
          <span class="design_dot"></span>
          Our Services
        </h2>

        <div class="service">
          <div class="col-12">
            <div class="row">
              <div class="col-md-4">
                <div class="box">
                  <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/s1.jpg"/>
                  <a href="#">
                  Easy Booking Process
                  </a>
                  <p>
                  Our user-friendly interface allows you to book a vehicle in just a few simple steps. Enter your pickup location, dates, and preferences, and our system will display available options, making it quick and convenient to secure your booking.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                  <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/s2.jpg"/>
                  <a href="#">
                  Competitive Pricing
                  </a>
                  <p>
                  We believe in offering transparent and competitive pricing. Our rates are designed to provide you with the best value for your money, without compromising on the quality of service.


                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                  <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/s3.jpg"/>
                  <a href="#">
                  Safety and Reliability
                  </a>
                  <p>
                  We prioritize your safety and peace of mind. Our vehicles undergo regular maintenance and safety checks, and we work with reputable suppliers to provide you with reliable transportation options.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                  <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/s4.jpg">
                  <a href="#">
                  Customer Support
                  </a>
                  <p>
                  Our dedicated customer support team is available to assist you at every step of the process. From answering inquiries to resolving issues, we're committed to ensuring your experience with our service is smooth and satisfactory.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                  <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/s5.jpg"/>
                  <a href="#">
                  Wide Selection
                  </a>
                  <p>
                  Choose from a diverse fleet of well-maintained vehicles, including cars, SUVs, vans, and more. We have options to accommodate various group sizes, preferences, and budgets.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box">
                  <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/s6.jpg"/>
                  <a href="#">
                  Flexible Rental Periods
                  </a>
                  <p>
                  Whether you need a vehicle for a few hours, days, or weeks, our system allows you to customize your rental period based on your specific requirements.

Exceptional Customer Support: Our dedicated customer support team is available to 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <span class="design_dot"></span>
          Customer Heartfull Messages
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Fathimah Askara
                  </h5>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              We can't thank you enough for sharing your wonderful experience with our vehicle booking system. Your satisfaction is our ultimate reward, and we're thrilled that we could provide you with reliable transportation and excellent customer service. We truly value your support.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Rameash Krishna
                  </h5>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              vehicle booking system. It means the world to us that we were able to provide you with a seamless and convenient booking process. Your feedback fuels our passion for delivering top-notch service.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Kumar
                  </h5>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              We are humbled by your kind words about our vehicle booking system. Customer satisfaction is at the heart of everything we do, and your positive review reassures us that we're on the right track. Thank you for choosing us and sharing your experience
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- map section -->

  <section class="map_section">
    <div class="map">
      <div id="googleMap">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63321.152943221!2d80.6106745614597!3d7.28943204921627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae369bc8bef113f%3A0xdb08ea8657b8c120!2sTravel%20With%20Me%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1686937302148!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end map section -->

  <?php include_once "footer.php"; ?>  
  <?php include_once "script.php"; ?>  
</body>

</html>