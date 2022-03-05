create table if not exists users (
    id int auto_increment primary key,
    username varchar(255),
    password varchar(255),
    nom varchar(255),
    email varchar(255),
    prenom varchar(255),
    role enum ("admin", "client", "guest") default "guest",
    tel varchar(255)
)