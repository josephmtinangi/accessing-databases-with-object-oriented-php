<?php
try {
    require_once 'includes/pdo_connect.php';
    $sql = 'SELECT name, email, created_at FROM users ORDER BY name';

    $result = $db->query($sql);
    $all = $result->fetchAll();
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <pre>
                <?= print_r($all) ?>
            </pre>
        </div>
    </div>
</div>
</body>
</html>