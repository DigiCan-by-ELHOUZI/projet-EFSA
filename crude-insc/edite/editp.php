<?php

include('../connect.php');


  
 
$id=$_POST['id'];
$CVVp=$_POST['cvp'];
$Datp=$_POST['dtp'];
$Nomep=$_POST['nomp'];
$Prnp=$_POST['prenomp'];
$Vlp=$_POST['villep'];
$Adrsp=$_POST['adrp'];
$Mllp=$_POST['mailp'];
$Tfp=$_POST['phonep'];
$seancep=$_POST['seanp'];


$reqp="UPDATE auditp SET cvp ='$CVVp', dtp ='$Datp' , nomp = '$Nomep' , prenomp = ' $Prnp' , villep = '$Vlp' , adrp = '$Adrsp' , mailp = '$Mllp'  , phonep = '$Tfp' , seanp = '$seancep'  WHERE id = '$id'";

if($db->exec($reqp)){

    header("Location:../audit_admn.php");  

}
else{
    echo "error in query ....";
}
?>
