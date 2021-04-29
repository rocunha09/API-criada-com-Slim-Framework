<?php
if (PHP_SAPI != 'cli') { //cli-server testa se está executnado pelo servidor web, cli testar se esta sendo executado via linha de comando
    exit('rodar via CLI');
}

require __DIR__ . '/vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
$dependencies = require __DIR__ . '/src/dependencies.php';
$container = $dependencies($app);

$db = $container->get('db');

$tabela = 'produtos';
$db->schema()->dropIfExists($tabela);        
$db->schema()->create($tabela, function($table){

    $table->increments('id');
    $table->string('titulo', 100);
    $table->text('descricao');
    $table->decimal('preco', 11, 2);
    $table->string('fabricante', 60);
    $table->date('dt_criacao');

});

$db->table($tabela)->insert([
    'titulo' => 'Smartphone Motorola Moto G6 32GB Dual Chip',
    'descricao' => 'Android Oreo - 8.0 Tela 5.7" Octa-Core 1.8GHz 4G Câmera 12 + 5MP (Dual Traseira) - Índigo',
    'preco' => 899.00,
    'fabricante' => 'Motorola',
    'dt_criacao' => '2019-10-22'
]);

$db->table($tabela)->insert([
    'titulo' => 'iPhone X Cinza Espacial 64GB',
    'descricao' => 'Tela 5.8" IOS 12 4g Wi-Fi Câmera 12MP',
    'preco' => 4999.00,
    'fabricante' => 'Apple',
    'dt_criacao' => '2020-01-10'
]);

?>