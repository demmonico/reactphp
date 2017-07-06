<?php
/**
 * Created by PhpStorm.
 * User: dep
 * Date: 21.06.17
 * Time: 18:08
 */

use React\EventLoop\Factory;
use React\Socket\ConnectionInterface;
use React\Socket\Connector;
use React\Stream\WritableResourceStream;

require __DIR__ . '/vendor/autoload.php';

$loop = Factory::create();
$connector = new Connector($loop);

$connector->connect('127.0.0.1:8080')->then(function (ConnectionInterface $conn) use ($loop) {
    $conn->pipe(new WritableResourceStream(STDOUT, $loop));
    $conn->write("Hello World!\n");
});

$loop->run();