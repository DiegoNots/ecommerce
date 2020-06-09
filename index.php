<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Pager;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    $page = new Pager();

    $page->setTpl("index");
	
});

$app->run();

 ?>