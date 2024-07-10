# AdminSys
Projet Administration et sécurisation de serveur web

Nom de domaine : beleguic.fr

Serveur auto herbergé à la maison

Ouverture de port sur la Box
  Port 65432 : SSH
  Port 80 : HTTP
  Port 443 : HTTPS
  Port 1194 : OpenVPN

Configuration SSH
  Port 65432
  Clé SSH requise
  Connexion Root desactivé
  Connexion par PWD desactivé

Configuration NGINX
  Port 80, 443
  Les connexions en Port 80 sont redirigé vers le port 443
  Configuration par sous domaine
    Front : beleguic.fr
    Adminer : adminer.beleguic.fr

Configuration SAMBA
  Port 445 UNIQUEMENT en réseau local
    192.168.1.3 : Ip du serveur sur le réseau local
    Tunel VPN vers le serveur AutoHeberger pour acceder au dossier partager SAMBA

Base de donnée : Mysql
  Port 3306 Uniquement en localhost

Certificat SSL via Certbot
  Script de renouvellement de certificat ~/renewCert.sh
    Arrete NGINX
    Fait la demande de renouvellement aupres de Certbot
    Redemarre NGINX

Configuration Fail2Ban
  2 ecoute distinct de log entre le front (beleguic.fr) et Adminer (adminer.beleguic.fr)
    - 404
    - BadBots
    - botSearch
    - bad-request
    - limit-req
