create table ADMIN ( ID_ADMIN int not null, NOM char(100) not null, PRENOM char(100) not null, LOGIN char(100) not null, PASSWORD char(100) not null, AVATAR longblob not null, primary key (ID_ADMIN) );
create table JOUEUR ( ID_ADMIN2 int not null, NOM char(100) not null, PRENOM char(100) not null, LOGIN char(100) not null, PASSWORD char(100) not null, AVATAR longblob not null, primary key (ID_ADMIN2) );
create table QUESTION ( ID_QUESTION int not null, ID_ADMIN int not null, NBREPOINT char(100) not null, QUESTION text not null, TYPE char(100) not null, REPONSE char(10) not null, primary key (ID_QUESTION) );
create table REPONDRE ( ID_QUESTION int not null, ID_ADMIN2 int not null, primary key (ID_QUESTION, ID_ADMIN2) );
alter table QUESTION add constraint FK_CREER foreign key (ID_ADMIN) references ADMIN (ID_ADMIN) on delete restrict on update restrict;
alter table QUESTION add constraint FK_CREER foreign key (ID_ADMIN) references ADMIN (ID_ADMIN) on delete restrict on update restrict;
alter table REPONDRE add constraint FK_REPONDRE2 foreign key (ID_QUESTION) references QUESTION (ID_QUESTION) on delete restrict on update restrict;