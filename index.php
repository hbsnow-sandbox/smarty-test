<?php
require './vendor/autoload.php';
require './constants.php';
$smarty = new Smarty();
$smarty->display('index.tpl');