<?php
/*
Template Name: Delete Booking
*/

include_once 'headerLink.php';
include_once 'commen.php';
include_once 'booking.php';

DeleteBooking($_GET['id']);
pageRefresh("booking");


?>