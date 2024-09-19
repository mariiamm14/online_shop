<?php

use classes\validation\validator;

require_once 'classes/product.php';
require_once 'classes/str.php';
require_once 'classes/request.php';
require_once 'classes/img.php';
require_once 'classes/validation/validator.php';
require_once 'classes/session.php';
require_once 'classes/admin.php';
$product = new product;
$request = new request;
$validate  = new validator ;
$session = new session;
$admin = new admin;
?>