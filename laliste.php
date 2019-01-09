<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 11:20
 */

$servername = 'localhost' ;
$username = "id7331260_geoffrey";
$password = "";
$dbname = "id7331260_begin_bdd";


// créer une nouvelle connexion :

$con = new mysqli($servername, $username, $password) ;

if($con -> connect_error) {

    die("Connection failed: " . $con->connect_error);


} else {

    $con -> select_db($dbname) ;

}
echo '<a href="index.html">Clic to return</a>' . '<br>' ;

function display_nom () {

    $id = $_GET['laliste'] ;
    global $con ;
    $sql = "SELECT * from `eleves` where id = $id";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {


        echo "l'élève " . ' ' . $row['nom'] .  ' ' . $row['prenom'] . ' ' . "qui a" . ' ' . $row['age'] . ' ' . 'ans' . ' ' . 'à' . ' ' ;

    }

}


display_nom() ;



function finish_him () {


    $idmug = $_GET['laliste'] ;

    global $con ;

    $SQl = "SELECT mugs.description FROM eleves_mugs,mugs WHERE eleves_mugs.id_eleve = $idmug  and eleves_mugs.id_mug = mugs.id ";

    $resultat = $con->query($SQl);

    while($row = $resultat -> fetch_assoc()) {

        echo 'un mug ' .  $row['description']. ',' . ' ' ;
    }

};

finish_him() ;