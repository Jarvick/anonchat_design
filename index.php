<?php
session_start();

require_once __DIR__ . '/composer/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('index');
$log->pushHandler(new StreamHandler('_logs/' . date('Y-m-d') . '.log', Logger::INFO));

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
    global $log;
    $log->notice('Кто-то посетил главную страничку');
    //return 'Home';
    $loader = new Twig_Loader_Filesystem('_templates/twig/');
    $twig = new Twig_Environment($loader, array(
        'cache' => '_templates/twig_cache/',
        'debug' => true
    ));
    return $twig->render('index.twig', array('one' => 'two'));
});


$klein->respond('GET', '/hello-world', function () {
    return 'Hello World!';
});
$klein->dispatch();