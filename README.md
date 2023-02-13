# docker-sockets
A docker container environment with haproxy, apache, php, node.js, mysql and rsyslog

# Installation
```
1. Run composer install in the app/mywebsite to install CakePHP and other packages
2. Import certificates/ca-root.pem into windows certificate store -> Trusted Root Certification Authorities
3. Add 127.0.0.1 website.cmbsolutions.nl to your windows hosts file (c:\windows\system32\drivers\etc\hosts)
4. Run the docker-compose.yml to build and run the containers
5. When all are running, open browser and navigate to https://website.cmbsolutions.nl:8443/ you should see the default CakePHP
```

# Problems
If you see `CakePHP is NOT able to connect to the database.` then go into the mysql container and create a database named `my-wonderful-website` and run the `/build/mysql/database.sql` file

If php-apache does not start and gives a message that /home/init.sh is not found, you need to remove windows line endings from the file `CRLF` to `LF` and rebuild that image

# Url's
https://website.cmbsolutions.nl:8443/chat - Single chat websocket  
https://website.cmbsolutions.nl:8443/status - Status page of socket  
https://website.cmbsolutions.nl:8443/multichat - Multi chat sockets and a pusher  
http://website.cmbsolutions.nl:1936 - haproxy stats  
