<?php

include('../connect.php');


$id=$_POST['id'];
$CVV=$_POST['cv'];
$Dat=$_POST['dt'];
$Nome=$_POST['nom'];
$Prn=$_POST['prenom'];
$Vl=$_POST['ville'];
$Adrs=$_POST['adr'];
$Mll=$_POST['mail'];
$Tf=$_POST['phone'];
$seance=$_POST['sean'];


$req="UPDATE inscriptiontfp SET cv ='$CVV', dt ='$Dat' , nom = '$Nome' , prenom = ' $Prn' , ville = '$Vl' , adr = '$Adrs' , mail = '$Mll'  , phone = '$Tf' , sean = '$seance'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_prv_admn.php");  

}
else{
    echo "error in query ....";
}
?>
