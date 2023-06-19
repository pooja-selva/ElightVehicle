<?php
   /*
   Template Name: Vehicle
   */
?>
<?php 
include_once "vehicle.php";
include_once "navigation.php";
include_once "commen.php";
?>  
<?php openSession(); ?>
<?php
$results = ReadAllVehicle($_GET);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Vehicle | Elite Vehicle</title>
  <?php include_once "headerLink.php"; ?>  
  <style>
    .center-table-item{
      display: flex;
      align-items: center;
      justify-content: center;
      height: 150px;
    }
  </style>
</head>
  
<body>
  <?php navigationMenu('vehicle'); ?> 


  <div class="container mt-3">
  <div class="col-12">
        <div class="page-heading">
          <h2><span class="dot"></span>Vehicle Listing</h2>
        </div>
      </div>
    <div class="p-5">
          <?php echo isUserLogin() && !isCustomerType() ? "<a class='btn btn-primary mb-3' href='/vehicle-create-update'>Add New Vehicle</a>" : ''; ?>
         
        <table class='table'>
            <thead>
               <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Type</th>
                  <th scope="col">Ac</th>
                  <th scope="col">Driver</th>
                  <th scope="col">Price/Km</th>
                  <th scope="col">Owner</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
                <?php 
                foreach($results  as $result ){
                  $acFees = $result->acFees ? $result->acFees: 'No';
                  $driverFees = $result->driverFees ? $result->driverFees : 'No'; 
                  $BookingButton = isCustomerType() ? "<a class='btn btn-dark m-1' href='/book-vehicle/?id=$result->id'>Book</a>" : "";
                  $VehicleEditAndDeleteButton = isAdminType() || (isVehicleOwnerType() &&  $result->userId == readGlobalUser()->id) ? "<a class='btn btn-warning m-1' href='/vehicle-create-update/?id=$result->id'>UPDATE</a>  <a class='btn btn-danger m-1' href='/delete-vehicle/?id=$result->id'>DELETE</a>" : ""; 
                  echo "
                    <tr>
                    <td>
                      <img src='data:image/jpeg;base64,$result->image' height='150' width='150'/>
                    </td>
                    <td>
                      <div class='center-table-item'>
                      $result->name
                      </div>
                      
                    </td>
                    <td><div class='center-table-item'>$result->type</div></td>
                    <td><div class='center-table-item'>$acFees</div></td>
                    <td><div class='center-table-item'>$driverFees</div></td>
                    <td><div class='center-table-item'>$result->price Rs</div></td>
                    <td><div class='center-table-item'>$result->ownerName</div></td>
                    <td>
                        <div class='center-table-item'>
                          $BookingButton
                          $VehicleEditAndDeleteButton
                        </div>
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