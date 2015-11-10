<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    $inteiro1 = 42;
    $inteiro2 = 79;
    $texto = "ola, "; 
    $fracao = 2.3;
    
    $soma = $inteiro1 + $inteiro2;
    $divisao = $inteiro1 / $fracao;
    $multi = $inteiro2 * $fracao;
    $sub = $inteiro1 - $inteiro2;
    
    $olaMundo = $texto . $name;
    
    echo "<p>Soma: ". $soma . "</p>";
    echo "<p>Divisao: ". $divisao . "</p>";
    echo "<p>Multiplicao: ". $multi . "</p>";
    echo "<p>". $olaMundo . "</p>";
});

$app->get('/', function () use ($app) {
    $app->view->setData(array(
        'title' => 'Página Principal',
        'page' => 'page/home'
    ));
    
         $app->render('layout.php');
});

$app->get('/sobre', function () use($app) {
    $app->view->setData(array(
        'title' => 'Página Sobre',
        'page' => 'page/about'
     ));
        
         $app->render('layout.php');
});

$app->get('/lista', function () use($app) {
    $app->view->setData(array(
        'title' => 'Página Lista',
        'page' => 'page/list' 
    ));
        
         $app->render('layout.php');
});

    
$app->get('/filme/:name', function ($name) use($app) {
    $app->view->setData(array(
        'title' => 'Página de Filme',
        'page' => 'movie/' . $name
    ));
    
        $app->render('layout.php');
});

$app->run();