<?php
   /*
   Template Name: About
   */
?>

<!DOCTYPE html>
<html>
<head>
  <title>About Us | Elite Vehicle</title>
  <?php 
    include_once "headerLink.php";
    include_once "navigation.php";
    include_once "commen.php";
     ?>  
      <?php openSession(); ?>
</head>

<body>

  <?php navigationMenu('about'); ?> 

  <div class="container about-us">
    <div class="row">
      <div class="col-12">
        <div class="page-heading">
          <h2><span class="dot"></span>About Us</h2>
        </div>
      </div>

      <div class="col-6">
        <div class="about-us-content"> 
          Welcome to our vehicle booking system! Our platform is designed to make renting and accessing vehicles a hassle-free experience. Whether you need a car for a weekend getaway, a truck for moving furniture, or a luxurious ride for a special occasion, our system connects you with a wide range of vehicles to suit your needs.
          Gone are the days of spending hours searching for rental agencies or dealing with complicated paperwork. With our user-friendly interface, you can browse through various vehicle options, compare prices, and make reservations with just a few clicks. Our system provides real-time availability updates, ensuring that you can secure your desired vehicle at your preferred time and location.
        </div>
        <div class="about-us-content">
        We understand the importance of safety and security when it comes to renting vehicles. That's why we have implemented rigorous verification processes for both vehicle owners and renters. You can have peace of mind knowing that all vehicles listed on our platform meet strict quality and safety standards.
        Moreover, we are committed to promoting sustainability and reducing the carbon footprint of transportation. By encouraging vehicle sharing and optimizing resource utilization, we aim to contribute to a greener and more environmentally conscious society.
        Whether you're an individual looking for a convenient way to access vehicles or a business seeking flexible transportation solutions, our vehicle booking system is here to cater to your needs. Join us on this journey towards a more connected, efficient, and sustainable mobility ecosystem. 
      </div>
      </div>
      <div class="col-6">
        <div class="about-us-hospital-image">
          <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/about-us-company.jpg" class="w-100 h-100"/>
        </div>
        <div class="about-us-video">
          <iframe class="w-100 h-100" src="https://www.youtube.com/embed/i0ijYejqWuo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="container about-us-qoute">
    <div class="row">
      <div class="col-12">
        <div class="about-us-qoute-card">
            <h3>Mission</h3>
            <div class="content">
            Our mission is to create a user-centric vehicle booking system that simplifies the process of renting and accessing vehicles.
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="about-us-qoute-card">
            <h3>Vision</h3>
            <div class="content">
            Our vision is to revolutionize the way people access and utilize transportation services by providing a seamless and efficient vehicle booking system. 
            </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once "end.php"; ?>  
  <?php include_once "footer.php"; ?>  
  <?php include_once "script.php"; ?>  
</body>

</html>