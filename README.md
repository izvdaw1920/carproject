# carproject
Car project in laravel

git init

git add . --all

git commit -m 'comentario'

git remote add nombre https://url.repositorio

git push -u nombre master

Paso a paso:

1º crear la app
laravel new carApp

2º Crear base de datos
create database car;

create user caruser@localhost identified with mysql_native_password by 'car-BD1'; 

grant all on car.* to caruser@localhost;

flush privileges;

3º configurar la conexion en nuestra app de laravel

4º crear recursos

php artisan make:model --migration --controller --resource Fabricante

php artisan make:model --migration --controller --resource Vehiculo

5º agregamos las rutas: web.php

6º definimos el modelo: Fabricante.php, Vehiculo.php

7º definimos la migración:

8º creamos las tablas

php artisan migrate

9º publicamos en github
