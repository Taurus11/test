<?php


    use Illuminate\Database\Capsule\Manager as Capsule;
    require __DIR__."\\..\\vendor\\autoload.php";

    foreach (glob(__DIR__."/models/*.php") as $filename) {

        require_once $filename;
    }

$capsule = new Capsule;

$capsule->addConnection(array(
    'driver' => 'mysql',
    'host'   => 'localhost',
    'database' => 'ia',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
));

$capsule->setAsGlobal();
$capsule->bootEloquent();