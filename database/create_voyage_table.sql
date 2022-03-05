create table if not exists voyage (
id int auto_increment primary key,
dateDebut datetime,
dateArrive datetime,
villeDepart varchar(255),
villeArrive varchar(255),
prix float
)