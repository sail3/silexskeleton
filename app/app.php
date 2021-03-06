<?php
require __DIR__ . "/../vendor/autoload.php";

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
  "twig.path" => __DIR__ . "/../src/View",
));

// Routes
$app->get("/", "MyApplication\Controller\DefaultController::index");

return $app;
