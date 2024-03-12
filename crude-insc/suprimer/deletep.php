<?php

$id= $_GET['u_id'];

include('../connect.php');


$reqp="DELETE FROM auditp WHERE id='$id'";



if($db->exec($reqp)){
    header("Location:../audit_admn.php"); 
}
else {
    
    echo "error in query ....";
}


?>