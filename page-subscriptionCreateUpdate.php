<?php
   /*
   Template Name: Subscription Create Update
   */
?>
<?php include_once 'subscription.php'; ?>
<?php 
include_once 'commen.php';
include_once "navigation.php";
openSession();
?>
<?php


$EditForm = isset($_GET['id']);
$subscriptionData =(object) [
   'userId'=> readGlobalUser()->id,
   'amount'=> 1,
   'create_at'=>date('Y-m-d'),
   'note'=>""
];

if($EditForm){
   $subscriptionData = ReadSpecificSubscription($_GET['id'])[0];
   $paidDate = new DateTime($subscriptionData->create_at);
   $subscriptionData->create_at = $paidDate->format('Y-m-d');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Subscription Create Update</title>
  <?php include_once "headerLink.php"; ?>  

</head>
  
<body>
  <?php navigationMenu('subscription'); ?> 

  <div class="container mt-5 mb-5" >
      <form method="POST" id="subscriptions-form">
         <?php echo $EditForm ? "<input type='number' name='id' value='$subscriptionData->id' hidden/>" : "";?>
         <input type='number' name='userId' value="<?php echo $subscriptionData->userId; ?>" hidden/>
         <div class="form-row">
            <div class="col-md-12 mb-3">
               <label>Amount</label>
               <input type="number" class="form-control" name='amount' id='amount' value="<?php echo $subscriptionData->amount; ?>">
            </div>
         </div>
         <div class="form-row">
            <div class="col-md-6 mb-3">
               <label>Note</label>
               <input type="text" class="form-control" name='note' id='note' value="<?php echo $subscriptionData->note; ?>">
            </div>
            <div class="col-md-6 mb-3">
               <label>Paid Date</label>
               <input type="date" class="form-control" name="create_at" value="<?php echo $subscriptionData->create_at; ?>"  class="form-control" id="create_at" placeholder="Date & Time"/>
            </div>
         </div>
         <button class="btn btn-primary" type="submit" name="save">Save</button>
      </form>
  </div>

  <?php
        if(isset($_POST['save'])){
            $EditForm = isset($_POST['id']);
            unset($_POST['save']);

            $isSave = $EditForm ? UpdateSubscription($_POST) : CreateSubscription($_POST);

            if($isSave){
                if(!$EditForm){
                    pageRefresh("subscription");
                }
                else{
                     pageRefresh("subscription-create-update/?id=".$_POST['id']);
                }
            }
        }
    ?>

  <?php include_once "end.php"; ?>  
  <?php include_once "footer.php"; ?>  
  <?php include_once "script.php"; ?>  

  <script type="text/javascript">
        window.onload=()=>{
            $("#subscriptions-form").validate({
                rules:{
                    create_at: "required",
                    note :"required",
                    amount : {required:true, min: 1}
                },
                messages:{
                    note : "required*",
                    create_at : "required*",
                    amount : {
                        required: "required*",
                        min: "Amount min Rs 1.00"
                    },
                },
                errorElement: "div"
            });
        };
    </script>
 
</body>
</html>