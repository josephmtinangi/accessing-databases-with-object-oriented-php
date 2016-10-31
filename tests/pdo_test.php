<?php
    require_once '../includes/pdo_connect.php';
try{

}catch (Exception $e){
    $error = $e->getMessage();
}

if ($db){
    echo 'Connection Successfully';
}else{
    echo 'Connection Failed';
}