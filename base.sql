create sequence s_the start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetThe_the(
    id varchar(7),
    nom varchar(255),
    rendement double
);

create trigger the_insert_trigger
    before insert on projetThe_the
    for each row
    begin
        set NEW.id = concat('THE', lpad(nextval(s_the),4,'0'));
    end;

create sequence s_parcelle start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_parcelle(
    id varchar(7),
    surface double,
    id_the varchar(7) references projetThe_the(id)
);
create trigger parcelle_insert_trigger
    before insert on projetthe_parcelle
    for each row
    begin
        set NEW.id = concat('PAR', lpad(nextval(s_parcelle),4,'0'));
    end;

create sequence s_cueilleur start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_cueilleur(
    id varchar(7),
    nom varchar(255),
    genre int,
    date_naissance date
);
create trigger cueilleur_insert_trigger
    before insert on projetthe_cueilleur
    for each row
    begin
        set NEW.id = concat('CUE',lpad(nextval(s_cueilleur),4,'0'));
    end;

create sequence s_salaire start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_salaire(
    id varchar(7),
    id_cueilleur varchar(7) references projetthe_cueilleur(id),
    montant double
);
create trigger salaire_insert_trigger
    before insert on projetthe_salaire
    for each row
    begin
        set NEW.id = concat('SAL',lpad(nextval(s_salaire),4,'0'));
    end;

create sequence s_type_depense start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_type_depense(
    id varchar(7),
    type varchar(255)
);
create or replace trigger type_depense_insert_trigger
    before insert on projetthe_type_depense
    for each row
    begin
        set NEW.id = concat('TDP',lpad(nextval(s_type_depense),4,'0'));
    end;

create sequence s_depense start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_depense(
    id varchar(7),
    id_type varchar(7) references projetthe_type_depense(id),
    montant double,
    date_depense date,
    id_parcelle varchar(7) references projetthe_parcelle(id)
);
create trigger depense_insert_trigger
    before insert on projetthe_depense
    for each row
    begin
        set NEW.id = concat('DEP',lpad(nextval(s_depense),4,'0'));
    end;

create sequence s_cueillette start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_cueillette(
    id varchar(7),
    id_cueilleur varchar(7) references projetthe_cueilleur(id),
    id_parcelle varchar(7) references projetthe_parcelle(id),
    poids double,
    date_cueillette date
);
create trigger cueillette_insert_trigger
    before insert on projetthe_cueillette
    for each row
    begin
        set NEW.id = concat('CUT',lpad(nextval(s_cueillette),4,'0'));
    end;

create sequence s_resultat start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_resultat(
    id varchar(7),
    id_cueillette varchar(7) references projetthe_cueillette(id)
);
create trigger resultat_insert_trigger
    before insert on projetthe_resultat
    for each row
    begin
        set NEW.id = concat('RES', lpad(nextval(s_resultat),4,'0'));
    end;

create sequence s_admin start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_admin(
    id varchar(7),
    mail varchar(255),
    mdp varchar(255),
    nom varchar(255)
);
create trigger admin_insert_trigger
    before insert on projetthe_admin
    for each row
    begin
        set NEW.id = concat('ADM',lpad(nextval(s_admin),4,'0'));
    end;

create sequence s_user start with 1 increment by 1 maxvalue 9999 minvalue 1 nocycle;
create table projetthe_user(
    id varchar(7),
    mail varchar(255),
    mdp varchar(255),
    nom varchar(255)
);
create trigger user_insert_trigger
    before insert on projetthe_user
    for each row
    begin
        set NEW.id = concat('USE',lpad(nextval(s_user),4,'0'));
    end;