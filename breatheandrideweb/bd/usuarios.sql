
create database 3768490_prueba3;

use 3768490_prueba3;

create table usuarios(
				id int auto_increment,
				correo varchar(50),
				usuario varchar(50),
				password text(50),
				primary key(id)
					);