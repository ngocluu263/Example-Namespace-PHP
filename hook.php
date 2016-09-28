<?php
// set autoload
spl_autoload_register(function ($class) {
    require_once(str_replace('\\', '/', $class . '.php'));
});

use Project\Hook\Client, Project\Hook\Client as Client;

$hook = Client::configure(array(
  'app_id' => 1,
  'key' => '638d9ba9643e568c1065084e3e67fb7e',
  'endpoint' => 'http://172.16.4.56:4665/index.php/'
));

$hook->collection('scores')->create(array(
  'name' => 'Endel',
  'score' => 7
));

