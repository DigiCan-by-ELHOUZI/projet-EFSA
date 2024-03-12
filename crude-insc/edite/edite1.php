<?php

include('../connect.php');


  
 
$id=$_POST['id'];
$CVV1=$_POST['cv1'];
$Dat1=$_POST['dt1'];
$Nome1=$_POST['nom1'];
$Prn1=$_POST['prenom1'];
$Vl1=$_POST['ville1'];
$Adrs1=$_POST['adr1'];
$Mll1=$_POST['mail1'];
$Tf1=$_POST['phone1'];
$seance1=$_POST['sean1'];


$req="UPDATE inscriptionmac SET cv1 ='$CVV1', dt1 ='$Dat1' , nom1 = '$Nome1' , prenom1 = ' $Prn1' , ville1 = '$Vl1' , adr1 = '$Adrs1' , mail1 = '$Mll1'  , phone1 = '$Tf1' , sean1 = '$seance1'  WHERE id = '$id'";

if($db->exec($req)){

    header("Location:../sec_prv_admn.php");  

}
else{
    echo "error in query ....";
}
?>
