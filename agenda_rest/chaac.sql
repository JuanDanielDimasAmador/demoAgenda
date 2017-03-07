create database chaac;
	use chaac;

	create table user(
		id_user id_container(8) auto_increment not null;
		name varchar(15) not null,
		ln_name1 varchar(10) not null,
		ln_name2 varchar(10) not null,
		nick varchar(15) not null,
		password varchar(10) not null,
		PRIMARY KEY (id_usuario)
	);

	create table event(
		id_event int(8) auto_increment not null;
		id_user int(8) not null;
		hour time not null;
		year date not null,
		duration int(2) not null,
	);

	create table container(
			id_container int(8) auto_increment not null;
			numeral int(5) not null;
			c
		);
