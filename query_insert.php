<?php

try {
    require_once 'includes/pdo_connect.php';
    $sql = '';
    $result = $db->query($sql);
    echo $result->queryString;
} catch (Exception $e) {
    $error = $e->getMessage();
}

isset($error) ? $error : '';


