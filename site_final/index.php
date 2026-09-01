<?php
// Carrega o autoloader do Composer (voltando um nível de pasta com ../)
require '../vendor/autoload.php';

// Instancia o Fat-Free Framework
$f3 = \Base::instance();

// Define a rota inicial
$f3->route('GET /', function() {
    echo '<h1>Olá, mundo!</h1>';
    echo '<p>O Fat-Free Framework está funcionando perfeitamente!</p>';
});

// Executa a aplicação
$f3->run();
