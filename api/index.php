<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() use ( $app ) {
    echo "Welcome to REST API";
});

$app->get('/hello/:name', function($name) use ( $app ) {
    echo "Hi $name, welcome to the REST API's";
});


$app->get('/API/TASKS/:tasks', function($tasks) use ( $app ) {
    


});


$task = array (
   $id => 1,
    $Description => "Learn Rest",
    $done => False
    
);


echo json_encode($calculation);
$app->run();

?>