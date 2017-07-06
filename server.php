<?php
/**
 * Created by PhpStorm.
 * User: dep
 * Date: 21.06.17
 * Time: 18:07
 */

use React\EventLoop\Factory;
use React\Socket\ConnectionInterface;
use React\Socket\Server;

require __DIR__ . '/vendor/autoload.php';

$loop = Factory::create();
$socket = new Server('127.0.0.1:8080', $loop);

$socket->on('connection', function (ConnectionInterface $conn) {
    $conn->write("Hello " . $conn->getRemoteAddress() . "!\n");
    $conn->write("Welcome to this amazing server!\n");
    $conn->write("Here's a tip: don't say anything.\n");

    $conn->on('data', function ($data) use ($conn) {
        $conn->close();
    });
});

$loop->run();