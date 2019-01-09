<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 13:48
 *
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


function display () {

    global $con ;
    $Sql = "SELECT * from `eleves_mugs`";
    $resulta = $con->query($Sql);
    echo '<a href="index.html">Clic to return</a>' . '<br>' ;

    while ($row = $resulta->fetch_assoc()) {


        echo "id =" . ' ' . $row['id'] . ' ' . " id eleve =" . ' ' . $row['id_eleve'] . ' ' . "id mug =" . ' ' . $row['id_mug']. '<br>';

    }

};

display() ;



