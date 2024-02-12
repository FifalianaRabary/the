<?php

include 'connection.php';
function checkLogin($email, $password, $type)
{
    $sql="select* from projetthe_".$type." where email='".$email."' and password='".$password."'";
    $result=mysqli_query(connect(), $sql);
    $valiny=mysqli_fetch_assoc($result);
    return $valiny;
}

// -------------------------- GESTION THE ------------------------------
function insertThe($nom, $occupation, $rendement)
{
    $sql="insert into projetthe_the(nom, occupation, rendement) values('%s', %d, %d)";
    $sql=sprintf($sql, $nom, $occupation, $rendement);
    mysqli_query(connect(), $sql);
}

function editThe($id, $nom, $occupation, $rendement)
{
    $sql="update table projetthe_the set nom='%s', occupation=%d, rendement=%d where id='%s'";
    $sql=sprintf($sql, $nom, $occupation, $rendement, $id);
    mysqli_query(connect(), $sql);
}

function deleteThe($id)
{
    $sql="delete from projetthe_the where id='%s'";
    $sql=sprintf($sql, $id);
    mysqli_query(connect(), $sql);
}

function getAllThe()
{
    $sql="select* from projetthe_the";
    $result=mysqli_query(connect(), $sql);
    $the=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $the[]=$donne;
    }
    return $the;
}

function getByIdThe($id)
{
    $sql="select* from projetthe_the where id='%s'";
    $sql=sprintf($sql, $id);
    $result=mysqli_query(connect(), $sql);
    $the=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $the[]=$donne;
    }
    return $the[0];
}

// -------------------------- GESTION PARCELLE -----------------------------

function insertParcelle($surface, $id_the)
{
    $sql="insert into projetthe_parcelle(surface, id_the) values(%d, '%s')";
    $sql=sprintf($sql, $surface, $id_the);
    mysqli_query(connect(), $sql);
}

function editParcelle($id, $surface, $id_the)
{
    $sql="update table projetthe_parcelle set surface=%d, id_the='%s' where id='%s'";
    $sql=sprintf($sql, $surface, $id_the, $id);
    mysqli_query(connect(), $sql);
}

function deleteParcelle($id)
{
    $sql="delete from projetthe_parcelle where id='%s'";
    $sql=sprintf($sql, $id);
    mysqli_query(connect(), $sql);
}

function getAllParcelle()
{
    $sql="select* from projetthe_parcelle";
    $result=mysqli_query(connect(), $sql);
    $parcelle=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $parcelle[]=$donne;
    }
    return $parcelle;
}

function getByIdParcelle($id)
{
    $sql="select* from projetthe_parcelle where id='%s'";
    $sql=sprintf($sql, $id);
    $result=mysqli_query(connect(), $sql);
    $parcelle=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $parcelle[]=$donne;
    }
    return $parcelle[0];
}

// -------------------------- GESTION CUEILLEUR ----------------------------

function insertCueilleur($nom, $genre, $date_naissance)
{
    $sql="insert into projetthe_cueilleur(nom, genre, date_naissance) values('%s', '%s', '%s')";
    $sql=sprintf($sql, $nom, $genre, $date_naissance);
    mysqli_query(connect(), $sql);
}

function editCueilleur($id, $nom, $genre, $date_naissance)
{
    $sql="update table projetthe_cueilleur set nom='%s', genre='%s', date_naissance='%s' where id='%s'";
    $sql=sprintf($sql, $nom, $genre, $date_naissance, $id);
    mysqli_query(connect(), $sql);
}

function deleteCueilleur($id)
{
    $sql="delete from projetthe_cueilleur where id='%s'";
    $sql=sprintf($sql, $id);
    mysqli_query(connect(), $sql);
}

function getAllCueilleur()
{
    $sql="select* from projetthe_cueilleur";
    $result=mysqli_query(connect(), $sql);
    $cueilleur=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $cueilleur[]=$donne;
    }
    return $cueilleur;
}

function getByIdCueilleur($id)
{
    $sql="select* from projetthe_cueilleur where id='%s'";
    $sql=sprintf($sql, $id);
    $result=mysqli_query(connect(), $sql);
    $cueilleur=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $cueilleur[]=$donne;
    }
    return $cueilleur[0];
}

// -------------------------- GESTION TYPE DE DEPENSE ----------------------

function insertTypeDepense($type)
{
    $sql="insert into projetthe_type_depense(type) values('%s')";
    $sql=sprintf($sql, $type);
    mysqli_query(connect(), $sql);
}

function editTypeDepense($id, $type)
{
    $sql="update table projetthe_type_depense set type='%s' where id='%s'";
    $sql=sprintf($sql, $type, $id);
    mysqli_query(connect(), $sql);
}

function deleteTypeDepense($id)
{
    $sql="delete from projetthe_type_depense where id='%s'";
    $sql=sprintf($sql, $id);
    mysqli_query(connect(), $sql);
}

function getAllTypeDepense()
{
    $sql="select* from projetthe_type_depense";
    $result=mysqli_query(connect(), $sql);
    $type_depense=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $type_depense[]=$donne;
    }
    return $type_depense;
}

function getByIdTypeDepense($id)
{
    $sql="select* from projetthe_type_depense where id='%s'";
    $sql=sprintf($sql, $id);
    $result=mysqli_query(connect(), $sql);
    $type_depense=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $type_depense[]=$donne;
    }
    return $type_depense[0];
}

// -------------------------- GESTION SALAIRE ------------------------------

function insertSalaire($id_cueilleur, $montant)
{
    $sql="insert into projetthe_salaire(id_cueilleur, montant) values(%d, '%s')";
    $sql=sprintf($sql, $id_cueilleur, $montant);
    mysqli_query(connect(), $sql);
}

function editSalaire($id, $id_cueilleur, $montant)
{
    $sql="update table projetthe_salaire set id_cueilleur='%s', montant=%d where id='%s'";
    $sql=sprintf($sql, $id_cueilleur, $montant, $id);
    mysqli_query(connect(), $sql);
}

function deleteSalaire($id)
{
    $sql="delete from projetthe_salaire where id='%s'";
    $sql=sprintf($sql, $id);
    mysqli_query(connect(), $sql);
}

function getAllSalaire()
{
    $sql="select* from projetthe_salaire";
    $result=mysqli_query(connect(), $sql);
    $salaire=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $salaire[]=$donne;
    }
    return $salaire;
}

function getByIdSalaire($id)
{
    $sql="select* from projetthe_salaire where id='%s'";
    $sql=sprintf($sql, $id);
    $result=mysqli_query(connect(), $sql);
    $salaire=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $salaire[]=$donne;
    }
    return $salaire[0];
}

// -------------------------- SAISIE DEPENSE ------------------------------

function insertDepense($id_type, $date, $montant)
{
    $sql="insert into projetthe_depense(id_type, date, montant) values('%s', '%s', %d)";
    $sql=sprintf($sql, $id_type, $date, $montant);
    mysqli_query(connect(), $sql);
}

// -------------------------- RESULTAT -----------------------------------

function poidsTotalCueillette($id_parcelle)
{
    $sql="select * from cueillette where id_parcelle='%s'";
    $sql=sprintf($sql, $id_parcelle);
    $result= mysqli_query(connect(), $sql);
    $cueillette=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $cueillette[]=$donne;
    }
    $total=0;
    for ($i = 0; $i < count($cueillette); $i++) {
        $total+=$cueillette[$i]['poids'];
    }
    return $total;
}

function nombrePiedParcelle($id_parcelle)
{
    $parcelle=getByIdParcelle($id_parcelle);
    $the=getByIdThe($parcelle['id_the']);
    $nombre=$parcelle['surface']/
}
function poidsRestantParcelle($id_parcelle)
{
    $total=poidsTotalCueillette($id_parcelle);
    $restant=0;

}

function coutRevient()
{

}


?>
