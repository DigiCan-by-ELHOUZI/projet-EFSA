<?php

include('../connect.php');


$id=$_POST['id'];
$CVVh=$_POST['cv_h'];
$Dath=$_POST['dt_h'];
$Nomeh=$_POST['nom_h'];
$Prnh=$_POST['prenom_h'];
$Vlh=$_POST['ville_h'];
$Adrsh=$_POST['adr_h'];
$Mllh=$_POST['mail_h'];
$Tfh=$_POST['phone_h'];
$seanceh=$_POST['sean_h'];


$req="UPDATE ssap_h SET cv_h ='$CVVh', dt_h ='$Dath' , nom_h= '$Nomeh' , prenom_h = ' $Prnh' , ville_h = '$Vlh' , adr_h = '$Adrsh' , mail_h = '$Mllh'  , phone_h = '$Tfh' , sean_h = '$seanceh'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
