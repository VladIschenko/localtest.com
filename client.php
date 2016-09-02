<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 02.09.16
 * Time: 13:58
 */

header('Content-Type: text/plain;');
error_reporting(E_ALL ^ E_WARNING);
set_time_limit(0);
ob_implicit_flush();

$address = 'localhost';
$port = 1985;

try {

    echo 'Create socket ...';
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    if ($socket < 0) {
        throw new Exception('socked_create() failed: ' . socket_strerror(socket_last_error()) . "\n");
    } else {
        echo "OK \n";
    }

    echo 'Connect socket ...';
    $result = socket_connect($socket, $address, $port);
    if ($result === false) {
        throw new Exception('socked_connect() failed: ' . socket_strerror(socket_last_error()) . "\n");
    } else {
        echo "OK \n";
    }

    echo 'Server said ...';
    $out = socket_read($socket, 1024);
    echo $out . "\n";

    $msg = "Hello, Server!";
    echo "Say to server ($msg) ...";
    socket_write($socket, $msg, strlen($msg));
    echo "OK\n";

    echo 'Server said: ';
    $out = socket_read($socket, 1024);
    echo $out."\n";

    $msg = 'shutdown';
    echo "Say to server ($msg) ... ";
    socket_write($socket, $msg, strlen($msg));
    echo "OK\n";
} catch (Exception $e) {
    echo "\nError: " . $e->getMessage();
}

    if (isset($socket))
    {
        echo 'Close socket ... ';
        socket_close($socket);
        echo "OK\n";
    }
