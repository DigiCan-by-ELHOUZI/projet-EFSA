<?php

$id= $_GET['u_id'];

include('../connect.php');


$req="DELETE FROM user_form WHERE id='$id'";



if($db->exec($req)){
    header("Location:../connexion.php"); 
}
else {
    
    echo "error in query ....";
}


?>