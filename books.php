<?php

require_once __DIR__ . '/model/book-model.php';
require_once __DIR__ . '/view/book-view.php';




$pdo = require_once __DIR__ . '/partials/connect.php';

$bookModel = new BookModel($pdo);
$bookView = new BookView();

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/nav.php';

$bookView->renderAllBooksAsList($bookModel->getAllBooks());

include __DIR__ . '/partials/footer.php';
