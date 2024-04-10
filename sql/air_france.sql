drop database if exists air_france;
create database air_france;
    use air_france;

    create table constructeur (
        idconstructeur int(3) not null auto_increment,
        libelle varchar(100),
        pays varchar(100),
        statut enum("national","international"),
        primary key (idconstructeur)
);


create table avion (
    idavion int(3) not null auto_increment,
    designation varchar(100),
    dateAchat date,
    capacite varchar(100),
    idconstructeur int(3)not null,
    primary key (idavion),
    foreign key (idconstructeur) references constructeur(idconstructeur)
    );


create table pilote(
    idpilote int(3) not null auto_increment,
    nom varchar(100),
    prenom varchar(100),
    adresse varchar(100),
    email varchar(100),
    bip varchar(100),
    nbHeuresVols decimal(10,2),
    primary key (idpilote)
);


create table vol (
    idvol int(3) not null auto_increment,
    libelle varchar(100),
    dateVol date,
    heureVol time,
    idavion int(3) not null,
    idpilote1 int(3) not null,
    idpilote2 int(3) not null,
    primary key (idvol),
    foreign key (idavion) references avion(idavion),
    foreign key (idpilote1) references pilote(idpilote),
    foreign key (idpilote2) references pilote(idpilote)  
);
