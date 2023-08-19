<?php
require_once UTILS.'Router.php';
require_once CONTROLLERS.'IndexController.php'; 

$indexController = new IndexController();
// Router::get('/', function() use ($indexController){
//     $indexController->index();
// });
Router::get('/', function(){
    header('Location: ./views/portfolio.php');
});