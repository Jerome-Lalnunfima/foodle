create table posts (
	id int not null auto_increment,
	price int,
	title varchar(255),
	description text,
    image_path varchar(255),
    user_id int,
	PRIMARY KEY ( id )
);

create table users (
	id int not null auto_increment,
	username varchar(255),
	password varchar(255),
	email varchar(255),
	phone varchar(11),
	address varchar(255),
	description text,
	profile_pic_path varchar(255),
	PRIMARY KEY ( id )
);
