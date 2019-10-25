create database car;

create user caruser@localhost identified with mysql_native_password by 'car-BD1-2019'; 

grant all on car.* to caruser@localhost;

flush privileges;