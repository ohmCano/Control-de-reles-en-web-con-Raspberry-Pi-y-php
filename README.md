# Control-de-reles-en-web-con-Raspberry-Pi-y-php
Control de de módulo de 8 relés en WEB con Raspberry PI y PHP.

Lo pirmero es intalar LAMP en Raspberry Pi y conectarla en red.

En la carpete donde se almacenan los ficheros web copiamos el ficheros .php y el fichero con la información de los estados de cada relé.

La pagía php contine un html para controlar los GPIO de rPI mediante una serie de botones.

*Importante. Los pines de la Rpi se pueden nombrar mediante diferentes estándares; wPi and BCM standards. GPIO utiliza Wpi

Cuando pasamos los archivo al servidor Apache de Rpi, tenemos que asegurarnos de que tiene los archivos tiene los permisos de escritura activados; sudo chmod 777 archivoX, activa todos los permisos para tods, admin, grupos, otros (7)(7)(7). (7)->rwl
