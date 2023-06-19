<?php

function CreateBooking($booking){
    return $GLOBALS['wpdb']->insert('booking', MapColumnBooking($booking));
}

function ReadAllBooking($option){
    $q = "SELECT booking.*, user.name as customerName, user.contact as Contact, vehicle.name as vehicleName  
    FROM booking
    JOIN vehicle ON booking.vehicleId=vehicle.id
    JOIN user ON booking.customerId=user.id";
    
    if(!empty($option)){
        
        if(isset($option['customerId'])){
            $q .= " WHERE booking.customerId=".$option['customerId'];
        }
        elseif(isset($option['userId'])){
            $q .= " WHERE vehicle.userId=".$option['userId'];
        }
        
    }
    
    return $GLOBALS['wpdb']->get_results($q);
}

function DeleteBooking($id){
    $result = $GLOBALS['wpdb']->delete( 'booking', ['id' => $id]);
    return $result;
}

function MapColumnBooking($source){
    $entity = [];
    $entity['vehicleId'] = $source['vehicleId'];
    $entity['customerId'] = $source['customerId'];
    $entity['isAc'] = $source['isAc'];
    $entity['isDriver'] = $source['isDriver'];
    $entity['bookFrom'] = $source['bookFrom'];
    $entity['bookTo'] = $source['bookTo'];
    return $entity;
}
?>