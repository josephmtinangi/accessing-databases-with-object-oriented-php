<?php
try {
    require_once 'includes/pdo_connect.php';
    $sql = 'SELECT name, email, created_at FROM users ORDER BY name';
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
</head>
<body>
<table>
    <tr>
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Joined</th>
        </thead>
    </tr>
    <tbody>
    <?php foreach ($db->query($sql) as $row): ?>
        <tr>
            <td><?=$row['name']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['created_at']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>