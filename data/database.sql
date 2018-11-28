create database if not exists wiss_wissforum;
use wiss_wissforum;

create table User (id int not null auto_increment primary key, gender enum('Herr','Frau'), firstname varchar(32) not null, lastname varchar(32) not null, username varchar(32) not null, email varchar(64) not null, password varchar(64) not null, birthdate date);

create table Forum (f_id int not null auto_increment primary key, id int not null, title varchar(100) not null, category varchar(150), content varchar(5000) not null, FOREIGN KEY(id) REFERENCES User(id));

create table Product(p_id int not null auto_increment primary key, name varchar(40) not null, p_sdesc varchar(100) not null, p_ldesc varchar(1500), price float(0.05) not null, store int);

create table Order (o_id int not null auto_increment primary key, p_id int not null, u_id int not null, o_date date not null, state boolean not null, FOREIGN KEY(u_id) REFERENCES User(id), FOREIGN KEY(p_id) REFERENCES Product(p_id));
