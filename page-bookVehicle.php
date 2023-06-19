<?php
   /*
   Template Name: Book Vehicle
   */
?>

<?php 
include_once 'vehicle.php';
include_once 'booking.php';
include_once 'commen.php';
include_once "navigation.php";
openSession();
$VehicleData = ReadSpecificVehicle($_GET['id'])[0];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Book Vehicle | Elite Vehicle</title>
  <?php include_once "headerLink.php"; ?>  
</head>

<body>
  <?php navigationMenu('booking'); ?> 


  <div class="container contact-us mt-3">

    <div class="row">
      <div class="col-12">
        <div class="page-heading">
          <h2><span class="dot"></span>Book Vehicle</h2>
        </div>
      </div>

      <div class="col-12">
  <!-- book section -->

  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="post" id="booking-form">
          <input type="number" name="vehicleId" value="<?php echo $VehicleData->id; ?>" hidden/>
          <input type="number" name="customerId" value="<?php echo readGlobalUser()->id; ?>" hidden/>
            <h4>
              <span class="design_dot"></span>
              BOOK
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label>Vehicle Name </label>
                <input type="text" class="form-control" value="<?php echo $VehicleData->name; ?>" readonly>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">With Driver / Without Driver</label>
                <select name="isDriver" class="form-control wide" >
                  <option value="1">With Driver</option>
                  <option value="0">Without Driver</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Ac / Non Ac</label>
                <select name="isAc" class="form-control wide">
                  <option value="1">AC</option>
                  <option value="0">Non Ac</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-4">
                <label for="inputDate">Book From</label>
                <input type="date" class="form-control" name="bookFrom" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date('Y-m-d'); ?>"  class="form-control" id="bookFrom" placeholder="Date & Time"/>
              </div>

              <div class="form-group col-lg-4">
                <label for="inputDate">Book To</label>
                <input type="date" class="form-control" name="bookTo" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date('Y-m-d'); ?>"  class="form-control" id="bookTo" placeholder="Date & Time"/>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end book section -->

      </div>
    </div>
  </div>
  <?php
        if(isset($_POST['vehicleId'])){
            CreateBooking($_POST);
            pageRefresh("booking");
        }
    ?>
  <?php include_once "end.php"; ?>  
  <?php include_once "footer.php"; ?>  
  <?php include_once "script.php"; ?>  
 

  <script type="text/javascript">
        window.onload=()=>{
            $("#booking-form").validate({
                rules:{
                  bookFrom: "required",
                  bookTo : "required",
                },
                messages:{
                  bookFrom : "required*",
                  bookTo : "required*"
                },
                errorElement: "div"
            });
        };
    </script>


</body>
</html>