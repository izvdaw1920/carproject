# carproject
Car project in laravel

A> Paso a paso:

1º crear la app

laravel new carApp

2º crear base de datos (este script se guarda en el proyecto)

create database car;

create user caruser@localhost identified with mysql_native_password by 'car-BD1'; 

grant all on car.* to caruser@localhost;

flush privileges;

3º configurar la conexion en nuestra app de laravel (.env)

4º crear recursos

php artisan make:model --migration --controller --resource Fabricante

php artisan make:model --migration --controller --resource Vehiculo

5º agregamos las rutas (web.php)

6º definimos el modelo (Fabricante.php, Vehiculo.php)

7º definimos la migración (database/migrations/aaaa_mm_dd_hhmmss_create_TABLA.php)

8º creamos las tablas

php artisan migrate

9º publicamos en github

B> github

git init

git add . --all

git commit -m 'comentario'

git remote add nombre https://github.com/izvdaw1920/carproject.git

git push -u nombre master
