# AdminSys
Projet Administration et sécurisation de serveur web

[Thibault BELEGUIC](https://github.com/Beleguic/)  
[Jean-Paul HAYEK](https://github.com/jphayek/)  
4IW1  

## Nom de domaine
[beleguic.fr](https://beleguic.fr)   

## Type d'hebergement
Serveur auto herbergé à la maison

## Ouverture des port sur la Box (BBOX)
  Port 65432 : SSH  
  Port 80 : HTTP  
  Port 443 : HTTPS  
  Port 1194 : OpenVPN  

## Configutation SSH
  Port 65432  
  Clé SSH  obligatoire  
  Connexion Root desactivé  
  Connexion par PWD desactivé  

## Configuration NGINX
  Port 80, 443  
  Les connexions en Port 80 sont redirigé vers le port 443  
  Configuration par sous domaine  
    Front : [beleguic.fr](https://belegiuc.fr)  
    Adminer : [adminer.beleguic.fr](https://adminer.belegiuc.fr)  

## Adminer
  [adminer.beleguic.fr](https://adminer.belegiuc.fr)  
  Présence d'une connexion OTP avec google authentificator pour une meilleur sécurité  

## Base de donnée : Mysql
  Port 3306 Uniquement en localhost  

## Certificat SSL via Certbot
  Script de renouvellement de certificat ~/renewCert.sh  
    1. Arrete NGINX  
    2. Fait la demande de renouvellement aupres de Certbot  
    3. Redemarre NGINX  

## Configuration Fail2Ban
  2 écoutes distinct de log entre le front (beleguic.fr) et Adminer (adminer.beleguic.fr)  
    - 404  
    - BadBots  
    - botSearch  
    - bad-request  
    - limit-req  

## Configuration OpenVPN
  Port 1159  
  Permet d'acceder au réseau local afin d'acceder au partage de fichier SAMBA  

## Configuration SAMBA
  Port 445 UNIQUEMENT en réseau local  
    192.168.1.3 : Ip du serveur sur le réseau local  
    Tunel VPN vers le serveur AutoHeberger pour acceder au dossier partager SAMBA  
      -> Meilleur sécurité que d'avoir le partage ouvert au Public  
