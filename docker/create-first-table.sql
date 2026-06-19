use app_dev;
create table users (
    id int auto_increment primary key,
    name varchar(200) not null,
    email varchar(200) null unique,
    password varchar(200) null,
  	deleted_at datetime null,
  	created_at datetime null default current_timestamp,
    updated_at datetime null default current_timestamp on update current_timestamp
);

insert into users (name, email) values('Felipe', 'felipe@email.com');
insert into users (name, email) values('Admin', 'admin@email.com');
insert into users (name, email) values('Supervisor', 'supervisor@email.com');
insert into users (name, email) values('Edileia', 'edileia@email.com');
insert into users (name, email) values('Florsina', 'florsina@email.com');
