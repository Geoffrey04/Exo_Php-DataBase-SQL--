<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 13:38
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

echo '<a href="elevesandmugs.php">Clic to see list</a>' ;

function associate () {

    global $con ;

    $idel = $_GET['asso_eleve'] ;
    $idmug = $_GET['asso_mug'] ;

    $asso_e = "INSERT INTO eleves_mugs VALUES ('', '$idel', '$idmug') ";


    $con -> query($asso_e) ;

}

associate() ;
