#!/bin/bash
echo "Starting bloatless websocket server, listening on port 3000"
sudo -u www-data /usr/local/bin/php -e /var/www/html/src/websocket/bloatless_server.php &

echo "Starting soketi websocket server, listening on port 6001"
/usr/bin/soketi start &

echo "Starting Apache webserver"
#Leave this as the last command, else the container fails
apache2ctl -D FOREGROUND