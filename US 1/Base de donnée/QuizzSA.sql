/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  28/05/2020 22:29:15                      */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists JOUEUR;

drop table if exists QUESTION;

drop table if exists REPONDRE;

/*==============================================================*/
/* Table : ADMIN                                                */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             int not null,
   NOM                  char(100) not null,
   PRENOM               char(100) not null,
   LOGIN                char(100) not null,
   PASSWORD             char(100) not null,
   AVATAR               longblob not null,
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table : JOUEUR                                               */
/*==============================================================*/
create table JOUEUR
(
   ID_ADMIN2            int not null,
   NOM                  char(100) not null,
   PRENOM               char(100) not null,
   LOGIN                char(100) not null,
   PASSWORD             char(100) not null,
   AVATAR               longblob not null,
   primary key (ID_ADMIN2)
);

/*==============================================================*/
/* Table : QUESTION                                             */
/*==============================================================*/
create table QUESTION
(
   ID_QUESTION          int not null,
   ID_ADMIN             int not null,
   NBREPOINT            char(100) not null,
   QUESTION             text not null,
   TYPE                 char(100) not null,
   REPONSE              char(10) not null,
   primary key (ID_QUESTION)
);

/*==============================================================*/
/* Table : REPONDRE                                             */
/*==============================================================*/
create table REPONDRE
(
   ID_QUESTION          int not null,
   ID_ADMIN2            int not null,
   primary key (ID_QUESTION, ID_ADMIN2)
);

alter table QUESTION add constraint FK_CREER foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table REPONDRE add constraint FK_REPONDRE foreign key (ID_ADMIN2)
      references JOUEUR (ID_ADMIN2) on delete restrict on update restrict;

alter table REPONDRE add constraint FK_REPONDRE2 foreign key (ID_QUESTION)
      references QUESTION (ID_QUESTION) on delete restrict on update restrict;

