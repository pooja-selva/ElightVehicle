<?php

function CreateUser($user){
    return $GLOBALS['wpdb']->insert('user', MapColumnUser($user));
}

function UpdateUser($user){
    return $GLOBALS['wpdb']->update('user', MapColumnUser($user), ['id' => $user['id']]);
}

function MakeLogin($user){
    $userName= $user['userName'];
    $password= $user['password'];
    $q = "SELECT * FROM user WHERE userName='$userName' AND password='$password'; ";
    return $GLOBALS['wpdb']->get_results($q);
}


function MapColumnUser($source){
    $entity = [];
    $entity['name'] = $source['fullName'];
    $entity['contact'] = $source['contact'];
    $entity['userName'] = $source['userName'];
    $entity['password'] = $source['password'];
    $entity['type'] = (int)$source['type'];
    return $entity;
}


?>