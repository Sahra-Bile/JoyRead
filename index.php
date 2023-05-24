<?php


require_once __DIR__ . '/model/database.php';


$pdo = require_once __DIR__ . '/partials/connect.php';

$db = new DB($pdo);




if (isset($_GET["id"])) {
  $userId = $_GET["id"];
}

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/nav.php';

echo "this is home page";
include __DIR__ . '/partials/footer.php';
