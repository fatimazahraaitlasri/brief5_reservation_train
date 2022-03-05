create table if not exists train(
    id int auto_increment primary key,
    nom varchar(255),
    nbrPlace int,
    garDepart  varchar(255),
    garArrive varchar(255);
)