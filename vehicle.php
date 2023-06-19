<?php

global $wpdb;


function CreateVehicle($vehicle){
    return $GLOBALS['wpdb']->insert('vehicle', MapColumn($vehicle));
}

function EditVehicle($vehicle){
    return $GLOBALS['wpdb']->update('vehicle', MapColumn($vehicle) ,  ['id' => $vehicle['id']]);
}

function ReadSpecificVehicle($id){
    return $GLOBALS['wpdb']->get_results("SELECT * FROM vehicle WHERE id=$id");
}

function ReadAllVehicle($filter){
    $q="SELECT vehicle.*, user.name as ownerName FROM vehicle JOIN user ON vehicle.userId=user.id";

    if(!empty($filter)){
        if(isset($filter['q']) && !empty($filter['q'])){
            $q.= "WHERE vehicle.name LIKE '%{$filter['q']}%' OR vehicle.type LIKE '%{$filter['q']}%' ";
        }
    }

    return $GLOBALS['wpdb']->get_results($q);
}

function RemoveVehicle($id){
    $isRemoved = $GLOBALS['wpdb']->delete( 'vehicle', ['id' => $id]);
    $GLOBALS['wpdb']->delete( 'booking', ['vehicleId' => $id]);
    return $isRemoved;
}

function MapColumn($source){
    $column = [];
    $column['type'] = $source['vehicleType'];
    $column['acFees'] = $source['acFees'];
    $column['driverFees'] = $source['driverFees'];
    $column['price'] = $source['price'];
    $column['image'] = $source['image'];
    $column['userId'] = $source['userId'];
    $column['name'] = $source['vehicleName'];
    return $column;
}

?>

