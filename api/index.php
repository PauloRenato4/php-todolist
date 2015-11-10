<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() use ( $app ) {
   echo "Welcome to REST API";
});

//$app->get('/hello/:name', function($name) use ( $app ) {
 //   echo "Hi $name, welcome to the REST API's";
//});


$app->get('/tasks', function() use ( $app ) {
    
    $tasks[] = array (
        
   array('id' => 1, 'description' => 'Learn Rest', 'Done' => 'false'),
   array('id' => 2, 'description' => 'Learn Javascript', 'Done' => 'false')
    
);

echo json_encode($tasks);


});

$app->run();

?>