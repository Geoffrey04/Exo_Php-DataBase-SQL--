<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/01/2019
 * Time: 15:58
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




function add_datta (){


    $nom = $_GET['nom'];

    $prenom = $_GET['prenom'];

    $age = $_GET['age'];

        global $con;

        $new_data = "INSERT INTO eleves  VALUES (\"\", \" $prenom \", \"$nom \", \"$age \")";


        $con->query($new_data);


};


 add_datta() ;









