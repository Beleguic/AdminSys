# AdminSys
Projet d'administration et sécurisation de serveur web

[Thibault BELEGUIC](https://github.com/Beleguic/)  
[Jean-Paul HAYEK](https://github.com/jphayek/)  
4IW1  

## Nom de domaine
[beleguic.fr](https://beleguic.fr)   

## Type d'hébergement
Serveur auto-hébergé à la maison

## Ouverture des ports sur la Box (BBOX)
  Port 65432 : SSH  
  Port 80 : HTTP  
  Port 443 : HTTPS  
  Port 1194 : OpenVPN  

## Configuration SSH
  Port 65432  
  Clé SSH obligatoire  
  Connexion root désactivée  
  Connexion par mot de passe désactivée  

## Configuration NGINX
  Ports 80, 443  
  Les connexions sur le port 80 sont redirigées vers le port 443  
  Configuration par sous-domaine  
    Front : [beleguic.fr](https://beleguic.fr)  
    Adminer : [adminer.beleguic.fr](https://adminer.beleguic.fr)  

## Adminer
  [adminer.beleguic.fr](https://adminer.beleguic.fr)  
  Présence d'une connexion OTP avec Google Authenticator pour une meilleure sécurité  

## Base de données : MySQL
  Port 3306 uniquement en localhost  

## Certificat SSL via Certbot
  Script de renouvellement de certificat : `~/renewCert.sh`  
    1. Arrête NGINX  
    2. Effectue la demande de renouvellement auprès de Certbot  
    3. Redémarre NGINX  

## Configuration Fail2Ban
  2 écoutes distinctes de log entre le front (beleguic.fr) et Adminer (adminer.beleguic.fr)  
    - 404  
    - BadBots  
    - BotSearch  
    - Bad-request  
    - Limit-req  

## Configuration OpenVPN
  Port 1159  
  Permet d'accéder au réseau local afin d'accéder au partage de fichiers SAMBA  

## Configuration SAMBA
  Port 445 UNIQUEMENT en réseau local  
    192.168.1.3 : IP du serveur sur le réseau local  
    Tunnel VPN vers le serveur auto-hébergé pour accéder au dossier partagé SAMBA  
      -> Meilleure sécurité que d'avoir le partage ouvert au public  
