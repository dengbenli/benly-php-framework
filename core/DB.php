<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection(
	require_once('../config/databases.php')
);
$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->setAsGlobal();
$capsule->bootEloquent();