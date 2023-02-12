<?php

use BloatlessModified\WebSocket\Application\StatusApplication;
use BloatlessModified\WebSocket\Examples\Application\Chat;
use BloatlessModified\WebSocket\Server;

require __DIR__ . '/src/Connection.php';
require __DIR__ . '/src/IPCPayload.php';
require __DIR__ . '/src/IPCPayloadFactory.php';
require __DIR__ . '/src/Server.php';
require __DIR__ . '/src/Timer.php';
require __DIR__ . '/src/TimerCollection.php';

require __DIR__ . '/src/Application/ApplicationInterface.php';
require __DIR__ . '/src/Application/Application.php';
require __DIR__ . '/src/Application/StatusApplication.php';

require __DIR__ . '/examples/Application/Chat.php';

// create new server instance
$server = new Server('0.0.0.0', 3000, '/tmp/phpwss.sock');

// server settings
$server->setMaxClients(100);
$server->setCheckOrigin(false);
$server->setAllowedOrigin('*');
$server->setMaxConnectionsPerIp(20);

// add your applications
$server->registerApplication('ws/status', StatusApplication::getInstance());
$server->registerApplication('ws/chat', Chat::getInstance());

// start the server
$server->run();
