<?php

$id= $_GET['u_id'];

include('../connect.php');


$req="DELETE FROM ssap_a WHERE id='$id'";



if($db->exec($req)){
    header("Location:../sec_incd_admn.php"); 
}
else {
    
    echo "error in query ....";
}


?>