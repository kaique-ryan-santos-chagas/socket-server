<?php  

require 'vendor/autoload.php';

use Ratchet\Server\IoServer; 
use Ratchet\WebSocket\WsServer;
use Ratchet\Http\HttpServer;
use WebSocketServer\Chat;

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8080
);

echo "Server running... \n";
$server->run();