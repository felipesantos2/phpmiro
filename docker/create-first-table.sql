use app_dev;

create table users (
    id int auto_increment primary key,
    name varchar(200) not null,
    email varchar(200) null unique,
    status tinyint null default 0,
    password varchar(200) null,
  	deleted_at datetime null,
  	created_at datetime null default current_timestamp,
    updated_at datetime null default current_timestamp on update current_timestamp
);

insert into users (name, email, status) values('Felipe', 'felipe@email.com', 1, 'pedra123456');
insert into users (name, email, status) values('Admin', 'admin@email.com', 1, 'pedra123456');
insert into users (name, email, status) values('Supervisor', 'supervisor@email.com', 1, 'pedra123456');
insert into users (name, email, status) values('Edileia', 'edileia@email.com', 1, 'pedra123456');
insert into users (name, email, status) values('Florsina', 'florsina@email.com', 1, 'pedra123456');
