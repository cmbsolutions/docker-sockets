#!/bin/bash
#USENODE=0
#BLOATLESS_COMMAND="/usr/local/bin/php -e /var/www/html/src/websocket/bloatless_server.php"
#SOKETI_COMMAND="/usr/bin/soketi start"
#RUN_COMMAND=""

#if [[ $USENODE -eq 0 ]]; then
#  RUN_COMMAND=$BLOATLESS_COMMAND
#else
#  RUN_COMMAND=$SOKETI_COMMAND
#fi
# Wait for database container
#/home/wait-for-it.sh mysql:3306 -s -t 15 -- $RUN_COMMAND &

echo "Starting bloatless websocket server, listening on port 3000"
sudo -u www-data /usr/local/bin/php -e /var/www/html/src/websocket/bloatless_server.php &

echo "Starting soketi websocket server, listening on port 6001"
/usr/bin/soketi start &

echo "Starting Apache webserver"
#Leave this as the last command, else the container fails
apache2ctl -D FOREGROUND