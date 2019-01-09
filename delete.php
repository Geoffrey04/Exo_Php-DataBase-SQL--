<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 09:47
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





function del () {


    global $con;

    $modif = $_GET['delete'] ;

    $del_data_n = "DELETE from eleves  where id= $modif" ;

    $con->query($del_data_n);


}

del();
