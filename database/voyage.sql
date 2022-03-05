create table if not exists voyage (
id int auto_increment primary key,
dateDebut datetime,
dateArrive datetime,
villeDepart varchar(255),
villeArrive varchar(255),
prix float

adminId int,
trainId int,

foreign key (adminId) references users(id),
foreign key (trainId)  references train(id) on delete cascade on update cascade ,
) 