<?php 
// bootstrap.php
require_once 'model.php';
require_once 'controllers.php';
require_once '/srv/http/Symfony/vendor/symfony/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';

$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony' => '/srv/http/Symfony/vendor/symfony/symfony/src',
));

$loader->register();

echo 3;
