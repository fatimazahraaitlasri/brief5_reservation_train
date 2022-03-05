create table if not exists reservations (
    id int auto_increment primary key,
    nbrPlace int,
    confort varchar(255),
    date datetime
    userId int,
    voyageId int,
    foreign key userId references users(id) on delete cascade on update cascade,
    foreign  key voyageId references voyage(id) on delete cascade on update cascade
)