create database if not exists wiss_wissforum;
use wiss_wissforum;

create table User (id int not null auto_increment primary key, gender enum('Herr','Frau'), firstname varchar(32) not null, lastname varchar(32) not null, username varchar(32) not null, email varchar(64) not null, password varchar(64) not null, birthdate date);

create table Forum (f_id int not null auto_increment primary key, id int not null, title varchar(100) not null, category varchar(150), content varchar(5000) not null, , FOREIGN KEY(id) REFERENCES User(id));