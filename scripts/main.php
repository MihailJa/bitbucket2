<?php
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/router.php';

require_once 'controllers/authors.php';
require_once 'controllers/books.php';
require_once 'controllers/book_authors.php';
require_once 'controllers/book_without_authors.php';
require_once 'controllers/sum_price.php';
require_once 'models/model_all_books.php';
require_once 'models/model_book_authors.php';
require_once 'models/model_sum_price.php';
require_once 'models/model_book_without_authors.php';

require_once 'models/QueryBuilder.php';
require_once 'models/conDB.php';
Route::start(); 
?>