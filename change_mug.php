<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 11:24
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
echo "<a href='mug.php'>See list</a>" ;


function maj_donnees () {

    $m_mug = $_GET['changer'] ;
    $id_mug = $_GET['idc'] ;

    global $con;

    $maj_data_n = "UPDATE mugs set description  = '$m_mug' where id= $id_mug " ;

    $con->query($maj_data_n);


}

maj_donnees() ;