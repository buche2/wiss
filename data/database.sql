create database if not exists wiss_wissforum;
use wiss_wissforum;

create table User (id int not null auto_increment primary key, gender enum('Herr','Frau'), firstname varchar(32) not null, lastname varchar(32) not null, username varchar(32) not null, email varchar(64) not null, password varchar(64) not null, birthdate date);

create table Forum (id int not null auto_increment primary key, user_id int not null, title varchar(100) not null, category varchar(150), content varchar(5000) not null, FOREIGN KEY(user_id) REFERENCES User(id));

create table Product(id int not null auto_increment primary key, name varchar(40) not null, product_sdesc varchar(100) not null, product_ldesc varchar(1500), price float(0.05) not null, store int);

create table Order (id int not null auto_increment primary key, product_id int not null, user_id int not null, order_date date not null, state boolean not null, FOREIGN KEY(user_id) REFERENCES User(id), FOREIGN KEY(product_id) REFERENCES Product(id));
