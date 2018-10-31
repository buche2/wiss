create database if not exists wiss_wissforum;
use wiss_wissforum;

create table User (id int not null auto_increment primary key, gender enum('Herr','Frau'), firstname varchar(32) not null, lastname varchar(32) not null, username varchar(32) not null, email varchar(64) not null, password varchar(64) not null, birthdate date);
