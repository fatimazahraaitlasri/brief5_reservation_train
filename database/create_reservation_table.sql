create table if not exists reservations (
    id int auto_increment primary key,
    nbrPlace int,
    confort varchar(255),
    date datetime
)