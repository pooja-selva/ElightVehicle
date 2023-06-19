<?php
   /*
   Template Name: Delete Vehicle
   */
   include_once 'headerLink.php';
   include_once 'commen.php';
   include_once 'vehicle.php';
   RemoveVehicle($_GET['id']);
   pageRefresh("vehicle");
?>


