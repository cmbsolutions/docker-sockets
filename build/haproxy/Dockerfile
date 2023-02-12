FROM haproxy:latest
COPY webserver-pub.pem /etc/ssl/certs/mycert.crt
COPY webserver-key.pem /etc/ssl/certs/mycert.crt.key
COPY haproxy.cfg /usr/local/etc/haproxy/haproxy.cfg

EXPOSE 8080
EXPOSE 8443
EXPOSE 1936