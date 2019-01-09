<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 09:46
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
echo "<a href='index.php'>See list</a>" ;


function maj () {

    $nom = $_GET['m_nom'] ;
    $prenom = $_GET['m_prenom'] ;
    $age = $_GET['m_age'] ;
    $ideleve = $_GET['modif_id'] ;

    global $con;

    $maj_data_n = "UPDATE eleves set nom  = '$nom', prenom = '$prenom', age = '$age' where id= $ideleve " ;

    $con->query($maj_data_n);


}


maj() ;