

## Pasos para poder ejecutar de manera local el porgrama

 usar el comando git clone con la url del proyecto de github.

 importar la base de datos a mysql que se encuentra en la carpeta baseDeDatos

 ejecutar el comando composer install.

 ejecutar el comando npm install.

 hacer una compia del archivo .env.example y dejar el nombre de .env a la copia.
 configurar el archivo .env, poner el nombre de la base de datos el usuario y contraseña,
 en mi caso yo no tengo contraseña y mi usuario de mysql es root, nombre de la base de datos evaluacion.

 ejecutar el comando php artisan key:generate.

 levantar el servidor con el comando php artisan serve.

 abrir el programa con 127.0.0.1:8000