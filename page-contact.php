<?php
/*
Template Name: Contact
*/
?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact Us | Elite Vehicle</title>
  <?php 
  include_once "headerLink.php";
  include_once "navigation.php";
  include_once "commen.php";
   ?>  

<?php openSession(); ?>
</head>

<body>
  <?php navigationMenu('contact'); ?> 


  <div class="container contact-us mt-3">

    <div class="row">
      <div class="col-12">
        <div class="page-heading">
          <h2><span class="dot"></span>Contact Us</h2>
        </div>
       
      </div>
      <div class="col-12">
        <div class="core-contact">
          <div class="core-contact-info">
            <div class="info-key-value">
                <span class="key">Emergency Hotline</span>
                <span class="value">- 1022 Or 011 102 1001</span>
            </div>
            <div class="info-key-value">
                <span class="key">General Line</span>
                <span class="value">- 001 102 1025</span>
            </div>
            <div class="info-key-value">
                <span class="key">Fax</span>
                <span class="value">- 001 777 1555</span>
            </div>
            <div class="info-key-value">
                <span class="key">Email</span>
                <span class="value">- info@elitevehicle.com</span>
            </div>
          </div>
          <div class="core-contact-social">
            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/emergency-contact.jpg"/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="branch-info">
          <div class="branch-info-card">
            <div class="branch-details">
              <span class="title">Galle Address</span>
              <span class="sub-title">Head Branch</span>
              <span class="address">
                No. 578 Elvitigala Mawatha,<br/>
                Narahenpita Galle 05,<br/>
                Sri Lanka
              </span>
              <span class="contact">galle@elitevehicle.com <br/> 075 7563 282</span>
            </div>
            <div class="branch-image">
              <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/galle-branch.jpg">
            </div>
          </div>
          <div class="branch-info-card">
            <div class="branch-details">
              <span class="title">Kurunagala Address</span>
              <span class="sub-title">City Branch</span>
              <span class="address">
                No. 18 Run Mawatha,<br/>
                Hasthishaila Kurunagala 15,<br/>
                Sri Lanka
              </span>
              <span class="contact">kurunagala@elitevehicle.com <br/> 065 1263 282</span>
            </div>
            <div class="branch-image">
              <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/kurunagala-branch.jpg">
            </div>
          </div>
          <div class="branch-info-card">
            <div class="branch-details">
              <span class="title">Jaffna Address</span>
              <span class="sub-title">Village Branch</span>
              <span class="address">
                No. 100, Carglis square,<br/>
                Kondavil Jaffna 05,<br/>
                Sri Lanka
              </span>
              <span class="contact">jaffna@elitevehicle.com <br/> 077 4325 302</span>
            </div>
            <div class="branch-image">
              <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/jaffna-branch.jpg">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="contact-us-wrapper">
          <div class="contact-us-form-img">
            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/contact-us-form.PNG"/>
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