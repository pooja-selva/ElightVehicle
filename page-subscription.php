<?php
   /*
   Template Name: Subscription
   */
?>

<?php
include_once "subscription.php";
include_once "navigation.php";
include_once "commen.php";
openSession();
$Allsubscriptions  = ReadAllSubscription( isAdminType() || isCustomerType() ? [] : ["userId"=> readGlobalUser()->id]);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Subscription | Elite Vehicle</title>
  <?php include_once "headerLink.php"; ?>  
</head>
  
<body>
  <?php navigationMenu('subscription'); ?> 


  <div class="container mt-3">
  <div class="col-12">
        <div class="page-heading">
          <h2><span class="dot"></span>Subscription Listing</h2>
        </div>
      </div>
    <div class="p-5">
         <a class='btn btn-primary mb-3' href='/subscription-create-update'>Add New Subscription</a>
        <table class='table'>
            <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Amount</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Note</th>
                  <th scope="col">Paid Date</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>

                <?php
                                        foreach($Allsubscriptions  as $subscription ){
                                            $paidDate = new DateTime($subscription->create_at);
                                            $paidDate = $paidDate->format('Y/M/d');
                                            echo 
                                            "<tr>
                                            <td>$subscription->id</td>
                                            <td>$subscription->amount</td>
                                                <td>$subscription->userName</td>
                                                <td>$subscription->note</td>
                                                <td>$paidDate</td>
                                                
                                                <td>
                                                    <div class='d-flex'>
                                                    
                                                    <a class='btn btn-warning w-auto text-white d-flex justify-content-center align-items-center ml-1' href='/subscription-create-update?id=$subscription->id' > Edit </a>
                                                    <a class='btn btn-danger w-auto text-white d-flex justify-content-center align-items-center ml-1' href='/delete-subscription/?id=$subscription->id' > Remove </a>
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