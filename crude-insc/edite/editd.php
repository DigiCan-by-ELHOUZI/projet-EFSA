<?php

include('../connect.php');


$id=$_POST['id'];
$CVVd=$_POST['cv_d'];
$Datd=$_POST['dt_d'];
$Nomed=$_POST['nom_d'];
$Prnd=$_POST['prenom_d'];
$Vld=$_POST['ville_d'];
$Adrsd=$_POST['adr_d'];
$Mlld=$_POST['mail_d'];
$Tfd=$_POST['phone_d'];
$seanced=$_POST['sean_d'];


$req="UPDATE ssap_d SET cv_d ='$CVVd', dt_d ='$Datd' , nom_d = '$Nomed' , prenom_d = ' $Prnd' , ville_d = '$Vld' , adr_d = '$Adrsd' , mail_d = '$Mlld'  , phone_d = '$Tfd' , sean_d = '$seanced'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
