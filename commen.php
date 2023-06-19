<?php
function pageRefresh($path=""){
    echo "<script> pageRefresh('$path'); </script>"; 
}


function openSession(){
    if(!session_id()){
        session_start();
    }
}

function closeSession(){
    session_unset();
    session_destroy();
}


function isUserLogin(){
    if(isset($_SESSION['isLogin'])){
        return $_SESSION['isLogin'];
    }
    return false;
}

function isCustomerType(){
    return isUserLogin() && (int)$_SESSION['type'] == 2;
}

function isVehicleOwnerType(){
    return isUserLogin() && $_SESSION['type'] == 3;
}

function isAdminType(){
    return isUserLogin() && $_SESSION['type'] == 1;
}

function readGlobalUser(){
    return isUserLogin() ? $_SESSION['user'] : [];
}

?>