create database if not exists wiss_wissforum;
use wiss_wissforum;

create table User (id int not null auto_increment primary key, gender enum('Herr','Frau'), firstname varchar(32) not null, lastname varchar(32) not null, username varchar(32) not null, email varchar(64) not null, password varchar(64) not null, birthdate date);

create table Forum (id int not null auto_increment primary key, user_id int not null, title varchar(100) not null, category varchar(150), content varchar(5000) not null, FOREIGN KEY(user_id) REFERENCES User(id));

create table Product(id int not null auto_increment primary key, name varchar(40) not null, product_sdesc varchar(300) not null, product_ldesc text, price float(0.05) not null, picture varchar(500));

create table Orders (id int not null auto_increment primary key, user_id int not null, order_date date not null, d_date date, p_state boolean not null, FOREIGN KEY(user_id) REFERENCES User(id));

create table OrderItem(id int not null auto_increment primary key, orders_id int not null, product_id int not null, product_name varchar(32), product_price int not null, orders_amount int not null, FOREIGN KEY(orders_id) REFERENCES Orders(id), FOREIGN KEY (product_id) REFERENCES Product(id));

INSERT INTO `User` (`id`, `gender`, `firstname`, `lastname`, `username`, `email`, `password`, `birthdate`) VALUES (NULL, 'Herr', 'Hans', 'Bolliger', 'h.bolliger', 'h.bolliger@gmail.com', 'test', '2018-12-04');
