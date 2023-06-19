<?php
/*
Template Name: Booking
*/
?>
  
  <?php 
  include_once "booking.php";
  include_once "navigation.php";
  include_once "commen.php";
   ?>  
   <?php openSession(); ?>

 <?php 
  if(isAdminType()){
    $allBookings = ReadAllBooking([]);
  }
  elseif(isCustomerType()){
    $allBookings = ReadAllBooking(["customerId"=> readGlobalUser()->id]);
  }
  else{
    $allBookings = ReadAllBooking(['userId'=> readGlobalUser()->id]);
  }
 
 ?> 
<!DOCTYPE html>
<html>
<head>
  <title>Booking | Elite Vehicle</title>
  <?php include_once "headerLink.php"; ?> 
</head>

<body>
  <?php navigationMenu('booking'); ?> 


  <div class="container mt-3">
  <div class="col-12">
        <div class="page-heading">
          <h2><span class="dot"></span>Booking Listing</h2>
        </div>
      </div>
    <div class="p-5">
        <table class='table'>
            <thead>
            <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Vehicle</th>
                                    <th scope="col">Ac/Noc Ac</th>
                                    <th scope="col">Driver</th>
                                    <th scope="col">Book From</th>
                                    <th scope="col">Book To</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Remove</th>
                                </tr>
            </thead>
            <tbody>
                        <?php 
                          foreach($allBookings  as $b ){
                              $isAc= $b->isAc ? 'Yes' : 'No';
                              $isDriver= $b->isDriver ? 'Yes' : 'No';
                              $bookFrom = new DateTime($b->bookFrom);
                              $bookFrom = $bookFrom->format('Y/M/d');

                              $bookTo = new DateTime($b->bookTo);
                              $bookTo = $bookTo->format('Y/M/d');
                              echo 
                              "
                              <tr>
                                  <th>$b->id</th>
                                  <td>$b->customerName</td>
                                  <td>$b->vehicleName</td>
                                  <td>$isAc</td>
                                  <td>$isDriver</td>
                                  <td>$bookFrom</td>
                                  <td>$bookTo</td>

                                  <td>$b->Contact</td>
                                  <td>
                                      <a href='/delete-booking?id=$b->id' class='btn btn-danger w-auto text-white d-flex justify-content-center align-items-center'> Remove </a>
                                  </td>
                              </tr>
                              ";
                          }
                          
                          ?>
            </tbody>
        </table>
    </div>
  </div>

  <?php include_once "end.php"; ?>  
  <?php include_once "footer.php"; ?>  
  <?php include_once "script.php"; ?>  
 
</body>
</html>