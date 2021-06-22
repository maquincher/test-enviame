# Backend-Test-Mauricio
instalar el paquete de docker

1. obtener la imagen de php y apache : docker pull php:7.4.20-apache
2. obtener la imagen de mysql : docker pull mysql:5.7.34
3. descargar la carpeta enviame
4. ubicarse en una consola en la carpeta de enviame y ejecutar: docker-compose up o docker-compose up -d
5. abrir otra consola.
6. ejecutar : docker exec -i -t docker-php  /bin/bash
7. ejecutar  : docker-php-ext-install mysqli
8. copiar la ruta de la etension: ejem: Installing shared extensions:     /usr/local/lib/php/extensions/no-debug-non-zts-20190902/
9.abrir el archivo /usr/local/etc/php/php.ini-production
10. buscar la linea de extesiones y pegar la ruta para la ext mysqli ej:  extension=/usr/local/lib/php/extensions/no-debug-non-zts-20190902/mysqli.so
11. guardar y cerrar el archivo.
12. abrir en un navegador http://localhost:8080
13. ejecutar la opcion de iniciar bd, para crear las tablas necesarias





git remote add origin https://github.com/maquincher/Backend-Test.git
git remote add origin git@github.com:maquincher/Backend-Test-Mauricio.git
git remote add origin git@github.com:maquincher/Backend-Test-Mauricio-Enviame.git
git branch -M main
git push -u origin main



