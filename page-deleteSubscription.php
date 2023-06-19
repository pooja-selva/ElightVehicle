<?php
   /*
   Template Name: Delete Subscription
   */
  
?>

<?php

include_once 'headerLink.php';
include_once 'commen.php';
include_once 'subscription.php';
DeleteSubscription($_GET['id']);
pageRefresh("subscription");


?>