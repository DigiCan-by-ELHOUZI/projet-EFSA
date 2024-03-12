<?php

$id= $_GET['u_id'];

include('../connect.php');


$req="DELETE FROM inscriptiontfp WHERE id='$id'";



if($db->exec($req)){
    header("Location:../sec_prv_admn.php"); 
}
else {
    
    echo "error in query ....";
}


?>