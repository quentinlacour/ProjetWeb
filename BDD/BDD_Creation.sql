/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/04/2018 15:52:29                      */
/*==============================================================*/


drop table if exists appartient;

drop table if exists bloquer;

drop table if exists groupe;

drop table if exists participe;

drop table if exists propose;

drop table if exists realise;

drop table if exists trajet;

drop table if exists traverse;

drop table if exists utilisateur;

drop table if exists ville;

drop table if exists voiture;

/*==============================================================*/
/* Table : appartient                                           */
/*==============================================================*/
create table appartient
(
   id_groupe            int not null,
   id_user              int not null,
   primary key (id_groupe, id_user)
);

/*==============================================================*/
/* Table : bloquer                                              */
/*==============================================================*/
create table bloquer
(
   id_user              int not null,
   uti_id_user          int not null,
   primary key (id_user, uti_id_user)
);

/*==============================================================*/
/* Table : groupe                                               */
/*==============================================================*/
create table groupe
(
   id_groupe            int not null auto_increment,
   nombre_personnes     int,
   nom                  varchar(20) not null,
   primary key (id_groupe)
);

/*==============================================================*/
/* Table : participe                                            */
/*==============================================================*/
create table participe
(
   id_user              int not null,
   id_trajet            int not null,
   primary key (id_user, id_trajet)
);

/*==============================================================*/
/* Table : propose                                              */
/*==============================================================*/
create table propose
(
   id_user              int not null,
   id_trajet            int not null,
   primary key (id_user, id_trajet)
);

/*==============================================================*/
/* Table : realise                                              */
/*==============================================================*/
create table realise
(
   id_groupe            int not null,
   id_trajet            int not null,
   primary key (id_groupe, id_trajet)
);

/*==============================================================*/
/* Table : trajet                                               */
/*==============================================================*/
create table trajet
(
   id_trajet            int not null auto_increment,
   nom_trajet 			varchar(100) NOT NULL,
   id_user              int not null,
   id_voiture           int not null,
   lieu_depart          varchar(30) not null,
   lieu_arrivee         varchar(30) not null,
   heure_depart         datetime not null,
   nombre_places        int not null,
   heure_arrivee        datetime not null,
   commentaire          varchar(500),
   primary key (id_trajet)
);

/*==============================================================*/
/* Table : traverse                                             */
/*==============================================================*/
create table traverse
(
   id_trajet            int not null,
   identifiant_op       bigint not null,
   primary key (id_trajet, identifiant_op)
);

/*==============================================================*/
/* Table : utilisateur                                          */
/*==============================================================*/
create table utilisateur
(
   id_user              int not null auto_increment,
   nom_user             varchar(30) not null,
   prenom_user          varchar(30) not null,
   est_admin            bool not null,
   telephone            char(10) not null,
   email                varchar(70) not null,
   nombre_trajets_realises int,
   site                 varchar(20),
   type_utilisateur     int,
   login                varchar(20) not null,
   password             varchar(20) not null,
   service              varchar(100),
   promotion_annee      int,
   promotion_type       varchar(10),
   primary key (id_user)
);

/*==============================================================*/
/* Table : ville                                                */
/*==============================================================*/
create table ville
(
   nom_ville            varchar(50) not null,
   identifiant_op       bigint not null,
   code_insee           bigint not null,
   code_postal          bigint not null,
   primary key (identifiant_op)
);

/*==============================================================*/
/* Table : voiture                                              */
/*==============================================================*/
create table voiture
(
   id_voiture           int not null auto_increment,
   id_user              int not null,
   modele               varchar(20) not null,
   couleur              varchar(20),
   nombre_places        int not null,
   taille_bagage        varchar(10),
   primary key (id_voiture)
);

alter table appartient add constraint FK_appartient foreign key (id_groupe)
      references groupe (id_groupe) on delete restrict on update restrict;

alter table appartient add constraint FK_appartient2 foreign key (id_user)
      references utilisateur (id_user) on delete restrict on update restrict;

alter table bloquer add constraint FK_bloquer foreign key (id_user)
      references utilisateur (id_user) on delete restrict on update restrict;

alter table bloquer add constraint FK_bloquer2 foreign key (uti_id_user)
      references utilisateur (id_user) on delete restrict on update restrict;

alter table participe add constraint FK_participe foreign key (id_user)
      references utilisateur (id_user) on delete restrict on update restrict;

alter table participe add constraint FK_participe2 foreign key (id_trajet)
      references trajet (id_trajet) on delete restrict on update restrict;

alter table propose add constraint FK_propose foreign key (id_user)
      references utilisateur (id_user) on delete restrict on update restrict;

alter table propose add constraint FK_propose2 foreign key (id_trajet)
      references trajet (id_trajet) on delete restrict on update restrict;

alter table realise add constraint FK_realise foreign key (id_groupe)
      references groupe (id_groupe) on delete restrict on update restrict;

alter table realise add constraint FK_realise2 foreign key (id_trajet)
      references trajet (id_trajet) on delete restrict on update restrict;

alter table trajet add constraint FK_fait foreign key (id_voiture)
      references voiture (id_voiture) on delete restrict on update restrict;

alter table trajet add constraint FK_supprimer foreign key (id_user)
      references utilisateur (id_user) on delete restrict on update restrict;

alter table traverse add constraint FK_traverse foreign key (id_trajet)
      references trajet (id_trajet) on delete restrict on update restrict;

alter table traverse add constraint FK_traverse2 foreign key (identifiant_op)
      references ville (identifiant_op) on delete restrict on update restrict;

alter table voiture add constraint FK_possede foreign key (id_user)
      references utilisateur (id_user) on delete restrict on update restrict;

