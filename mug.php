<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 10:34
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
    $sqll = "SELECT * from `mugs`";
    $result = $con->query($sqll);
    echo '<a href="index.html">Clic to return</a>' . '<br>' ;

    while ($row = $result->fetch_assoc()) {


        echo "id =" . ' ' . $row['id'] . ' ' . " description =" . ' ' . $row['description'] . '<br>';

    }

};

display();


function add_datta ()
{
    global $con ;

    $mug = $_GET['lesmugs'] ;

    if(isset($mug)) {

        $new_data = "INSERT INTO mugs  VALUES ('','$mug')";

        $con->query($new_data);

    }
};

add_datta();