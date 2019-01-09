<style>

    body {
        text-align: center;
    }

</style>

<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne


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

function add_data ($nom, $prenom, $age)
{
    global $con ;
    $new_data = "INSERT INTO eleves  VALUES (\"\", \" $prenom \", \"$nom \", \"$age \")";


    $con -> query($new_data) ;
};

// add_data('Bultot','Bryan','26') ;



function displaye () {

    global $con ;
    $sql = "SELECT * from `eleves`";
    $result = $con->query($sql);
    echo '<a href="index.html">Clic to return</a>' . '<br>' ;

    while ($row = $result->fetch_assoc()) {


        echo "id =" . ' ' . $row['id'] .'<br>'. ' ' . " nom =" . ' ' . $row['nom'] . ' ' . "prenom =" . ' ' . $row['prenom'] . ' ' . "age =" . ' ' . $row['age'] . '<br><br>';

    }

}


 displaye() ;


function maj ($prenom , $nom, $age , $ideleve) {


    global $con;

    $maj_data_n = "UPDATE eleves set nom  = '$nom', prenom = '$prenom', age = '$age' where id= $ideleve " ;

    $con->query($maj_data_n);


}


// maj() ;




function del ($ideleve) {


    global $con;

    $del_data_n = "DELETE from eleves  where id= $ideleve " ;

    $con->query($del_data_n);


}

// del();