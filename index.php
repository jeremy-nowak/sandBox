<?php
require_once "vendor/autoload.php";
use App\Models\User;
$user = new User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="../../public/scripts/script.js"></script>
    <title>Document</title>
</head>
<body>
    <?= $user->test() ?>
    <button id="btn">Le bouton</button>
</body>
</html>