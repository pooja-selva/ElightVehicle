<?php
   /*
   Template Name: Profile
   */
?>


<?php 
include_once "navigation.php";
include_once "commen.php";
openSession();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile | City Hospital</title>
  <?php include_once "headerLink.php"; ?>  
</head>

<body>
  <?php navigationMenu('profile'); ?> 

  <div class="title-flex container-fluid p-0 m-0">
      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/profile-banner.jpg"/>
  </div>
  <div class="container profile-section">
    <img src='<?php echo bloginfo('stylesheet_directory'); ?>/assets/image/default-profile-icon.png'/>"

    <div class="perfile-details">
        <div class="name"><?php echo readGlobalUser()->userName?></div>
        <div class="type">
        Position :-
          <?php
            
            if(isAdminType()){
              echo "Admin";
            }
            else if(isCustomerType()){
              echo "Customer";
            }
            else{
                echo "Vehicle Owner";
            }
          ?>
          
        </div>
        <div class="type">phone :- <?php echo readGlobalUser()->contact?></div>
    </div>
  </div>

  <?php include_once "end.php"; ?>  
  <?php include_once "footer.php"; ?>  
  <?php include_once "script.php"; ?>  
</body>

</html>