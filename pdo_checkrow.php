<?php
try {
    require_once 'includes/pdo_connect.php';
    $sql = 'SELECT name, email, created_at FROM users WHERE name = "Joseph" ORDER BY name';

    $result = $db->query($sql);
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
        <div class="col-sm-3">
            <?php if ($result): ?>
                <?php $row = $result->fetch(); ?>
                <?php if (!$row): ?>
                    echo "No result found.";
                <?php else: ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined</th>
                        </tr>
                        <?php do { ?>
                            <tr>
                                <td><?= $row['name']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['created_at']; ?></td>
                            </tr>
                        <?php } while ($row = $result->fetch()); ?>
                    </table>
                <?php endif; ?>
            <?php else: ?>
                <h2>No result found</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>