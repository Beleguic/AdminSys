#!/bin/bash

# Arrêter le service httpd
systemctl stop nginx
#systemctl stop httpd

# Renouveler le certificat avec certbot
sudo certbot renew

# Redémarrer le service httpd
#systemctl start httpd
systemctl start nginx
