<?php

function CreateSubscription($subscription){
    return $GLOBALS['wpdb']->insert('subscription', MapColumnSubscription($subscription));
}

function UpdateSubscription($subscription){
    return $GLOBALS['wpdb']->update('subscription', MapColumnSubscription($subscription), ['id' => $subscription['id']]);
}

function ReadAllSubscription($option){
    $q="SELECT subscription.*, user.name as userName FROM subscription JOIN user ON subscription.userId=user.id";

    if(!empty($option)){
        $q .= " WHERE subscription.userId=".$option['userId'];
    }

    return $GLOBALS['wpdb']->get_results($q);
}

function ReadSpecificSubscription($id){
    return $GLOBALS['wpdb']->get_results("SELECT * FROM subscription WHERE id=$id");
}

function DeleteSubscription($id){
    $result = $GLOBALS['wpdb']->delete( 'subscription', ['id' => $id]);
    return $result;
}

function MapColumnSubscription($source){
    $entity = [];
    $entity['userId'] = $source['userId'];
    $entity['amount'] = $source['amount'];
    $entity['create_at'] = $source['create_at'];
    $entity['note'] = $source['note'];
    return $entity;
}



?>