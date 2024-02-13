<?php

include 'connection.php';
function checkLogin($email, $password, $type)
{
    $valiny = array();
    $sql="select* from projetthe_".$type." where mail='".$email."' and mdp='".$password."'";
    $result=mysqli_query(connect(), $sql);
    while ($donne=mysqli_fetch_assoc($result)) {
        $valiny[]=$donne;
    }
    return $valiny[0];
}

// -------------------------- GESTION THE ------------------------------
function insertThe($nom, $rendement, $occupation)
{
    $sql="insert into projetThe_the(nom, rendement, occupation) values('%s', %d, %d)";
    $sql=sprintf($sql, $nom, $rendement, $occupation);
    mysqli_query(connect(), $sql);
}

function editThe($id, $nom, $occupation, $rendement)
{
    $sql="update  projetThe_the set nom='%s', occupation=%d, rendement=%d where id=%d";
    $sql=sprintf($sql, $nom, $occupation, $rendement, $id);
    mysqli_query(connect(), $sql);
}

function deleteThe($id)
{
    $sql="delete from projetThe_the where id=%d";
    $sql=sprintf($sql, $id);
    mysqli_query(connect(), $sql);
}

function getAllThe()
{
    $sql="select * from projetThe_the";
    $result=mysqli_query(connect(), $sql);
    $the=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $the[]=$donne;
    }
    return $the;
}

function getByIdThe($id)
{
    $sql="select* from projetThe_the where id=%d";
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
    $sql="insert into projetthe_parcelle(surface, id_the) values(%d, %d)";
    $sql=sprintf($sql, $surface, $id_the);
    mysqli_query(connect(), $sql);
}

function editParcelle($id, $surface, $id_the)
{
    $sql="update projetthe_parcelle set surface=%d, id_the=%d where id=%d";
    $sql=sprintf($sql, $surface, $id_the, $id);
    mysqli_query(connect(), $sql);
}

function deleteParcelle($id)
{
    $sql="delete from projetthe_parcelle where id=%d";
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
    $sql="select* from projetthe_parcelle where id=%d";
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
    $sql="update projetthe_cueilleur set nom='%s', genre='%s', date_naissance='%s' where id=%d";
    $sql=sprintf($sql, $nom, $genre, $date_naissance, $id);
    mysqli_query(connect(), $sql);
}

function deleteCueilleur($id)
{
    $sql="delete from projetthe_cueilleur where id=%d";
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
    $sql="select* from projetthe_cueilleur where id=%d";
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
    $sql="update projetthe_type_depense set type='%s' where id=%d";
    $sql=sprintf($sql, $type, $id);
    mysqli_query(connect(), $sql);
}

function deleteTypeDepense($id)
{
    $sql="delete from projetthe_type_depense where id=%d";
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
    $sql="select* from projetthe_type_depense where id=%d";
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
    $sql="update  projetthe_salaire set id_cueilleur=%d, montant=%d where id=%d";
    $sql=sprintf($sql, $id_cueilleur, $montant, $id);
    mysqli_query(connect(), $sql);
}

function deleteSalaire($id)
{
    $sql="delete from projetthe_salaire where id=%d";
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
    $sql="select* from projetthe_salaire where id=%d";
    $sql=sprintf($sql, $id);
    $result=mysqli_query(connect(), $sql);
    $salaire=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $salaire[]=$donne;
    }
    return $salaire[0];
}

// -------------------------- SAISIE DEPENSE ------------------------------

function insertDepense($id_type, $date, $montant, $id_parcelle)
{
    $sql="insert into projetthe_depense(id_type, date, montant, id_parcelle) values(%d, '%s', %d, %d)";
    $sql=sprintf($sql, $id_type, $date, $montant, $id_parcelle);
    mysqli_query(connect(), $sql);
}

// -------------------------- RESULTAT -----------------------------------

function poidsTotalCueillette($id_parcelle, $date1, $date2)
{
    $sql="select * from projetthe_cueillette where id_parcelle=%d and date>='%s' and date<='%s'";
    $sql=sprintf($sql, $id_parcelle, $date1, $date2);
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
    $nombre=$parcelle['surface']*10000/$the['occupation'];
    return $nombre;
}

function poidsTotalParcelle($id_parcelle)
{
    $parcelle=getByIdParcelle($id_parcelle);
    $the=getByIdThe($parcelle['id_the']);
    $total=nombrePiedParcelle($id_parcelle)*$the['rendement'];
    return $total;
}
function poidsRestantParcelle($id_parcelle, $date1, $date2)
{
    $total=poidsTotalParcelle($id_parcelle);
    $totalCueillette=poidsTotalCueillette($id_parcelle, $date1, $date2);
    $restant=$total-$totalCueillette;
    return $restant;
}

function depenseTotalParcelle($id_parcelle, $date1, $date2)
{
    $sql="select * from projetthe_depense where id_parcelle=%d and date>='%s' and date<='%s'";
    $sql=sprintf($sql, $id_parcelle, $date1, $date2);
    $result= mysqli_query(connect(), $sql);
    $depense=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $depense[]=$donne;
    }
    $total=0;
    for ($i = 0; $i < count($depense); $i++) {
        $total+=$depense[$i]['montant'];
    }
    return $total;
}
function coutRevient($id_parcelle, $date1, $date2)
{
    $depenseTotal=depenseTotalParcelle($id_parcelle, $date1, $date2);
    $poidsTotal=poidsTotalCueillette($id_parcelle, $date1, $date2);
    $cout_revient=$depenseTotal/$poidsTotal;
    return $cout_revient;
}

function montantVente($id_parcelle, $date1, $date2)
{
    $sql="select * from projetthe_vente where id_the=(select id_the from pacerelle where id=%d) and date>='%s' and date<='%s'";
    $sql=sprintf($sql, $id_parcelle, $date1, $date2);
    $result= mysqli_query(connect(), $sql);
    $depense=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $depense[]=$donne;
    }
    $total=$depense[0]['montant'];
    $poids=poidsTotalCueillette($id_parcelle, $date1, $date2);
    $montant=$total*$poids;
    return $montant;
}

function benefice($id_parcelle, $date1, $date2)
{
    $vente=montantVente($id_parcelle, $date1, $date2);
    $depense= depenseTotalParcelle($id_parcelle, $date1, $date2);
    $benefice=$vente-$depense;
    return $benefice;
}

function poidsRecolteParCueilleur($date1, $date2)
{
    $sql="select DISTINCT id_cueilleur from projetthe_cueillette where date>='%s' and date<='%s' order by id";
    $sql=sprintf($sql, $date1, $date2);
    $result= mysqli_query(connect(), $sql);
    $cueilleur=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $cueilleur[]=$donne;
    }

    $poids=array();

    for ($i=0; $i < count($cueilleur) ; $i++) { 
        $sql2="select * from projetthe_cueillette where id_cueilleur=%d ";
        $sql2=sprintf($sql2, $cueilleur[$i]['id_cueilleur']);
        while ($donne=mysqli_fetch_assoc($result)) {
            $cueillette[]=$donne;
        }
        $total=0;
        for ($i = 0; $i < count($cueillette); $i++) {
            $total+=$cueillette[$i]['poids'];
        }
        $poids[$i]=$total;
    }
    return $poids;
}

function salaire($date1, $date2)
{
    $poids=poidsRecolteParCueilleur($date1, $date2);
    $salaire=getAllSalaire();
    $salaires=array();
    $config=getLastConfiguration();
    for ($i=0; $i < count($salaire) ; $i++) { 
        if ($poids[$i]<$config['min_journalier']) {
            $salaires[$i]=$salaire[$i]['montant']*$poids[$i]*(1-($config['mallus']/100));
        } else {
            $salaires[$i]=$salaire[$i]['montant']*$poids[$i]*(1+($config['bonus']/100));
        }
    }
    return $salaires;
}

// ---------------------- CUEILLETTE -----------------------------------

function insertCueillette($id_cueilleur, $id_parcelle, $poids, $date_cueillette)
{
    $sql="insert into projetthe_cueillette(id_cueilleur, id_parcelle, poids, date_cueillette) values('%s', '%s', %d, '%s')";
    $sql=sprintf($sql, $id_type, $date, $montant, $id_parcelle);
    mysqli_query(connect(), $sql);
}

function editCueillette($id_cueillette, $id_cueilleur, $id_parcelle, $poids, $date_cueillette)
{
    $sql="update projetthe_cueillette set id_cueilleur=%d, id_parcelle=%d, poids=%s, date_cueillette='%s' where id=%d";
    $sql=sprintf($sql, $id_cueilleur, $id_parcelle, $poids, $date_cueillette, $id_cueillette);
    mysqli_query(connect(), $sql);
}

function deleteCueillette($id)
{
    $sql="delete from projetthe_cueillette where id=%d";
    $sql=sprintf($sql, $id);
    mysqli_query(connect(), $sql);
}

function getAllCueillette()
{
    $sql="select* from projetthe_cueillette";
    $result=mysqli_query(connect(), $sql);
    $cueillette=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $cueillette[]=$donne;
    }
    return $cueillette;
}

function getByIdCueilleur($id)
{
    $sql="select* from projetthe_cueilleur where id=%d";
    $sql=sprintf($sql, $id);
    $result=mysqli_query(connect(), $sql);
    $cueillette=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $cueillette[]=$donne;
    }
    return $cueillette[0];
}

// ---------------------- CONFIGURATION --------------------------------

function insertConfiguration($min_journalier, $bonus, $mallus, $poids_bonus, $poids_mallus)
{
    $sql="insert into projetthe_configuration(min_journalier, bonus, mallus, poids_bonus, poids_mallus) values(%d, %d, %d, %d, %d)";
    $sql=sprintf($sql, $min_journalier, $bonus, $mallus, $poids_bonus, $poids_mallus);
    mysqli_query(connect(), $sql);
}

function getLastConfiguration()
{
    $sql="select* from projetthe_configuration order by id DESC LIMIT 1";
    $result=mysqli_query(connect(), $sql);
    $cueillette=array();
    while ($donne=mysqli_fetch_assoc($result)) {
        $cueillette[]=$donne;
    }
    return $cueillette[0];
}
?>
