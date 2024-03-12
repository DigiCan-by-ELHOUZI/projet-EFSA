<?php

include('../connect.php');


$id=$_POST['id'];
$CVVc=$_POST['cv_c'];
$Datc=$_POST['dt_c'];
$Nomec=$_POST['nom_c'];
$Prnc=$_POST['prenom_c'];
$Vlc=$_POST['ville_c'];
$Adrsc=$_POST['adr_c'];
$Mllc=$_POST['mail_c'];
$Tfc=$_POST['phone_c'];
$seancec=$_POST['sean_c'];


$req="UPDATE ssap_c SET cv_c ='$CVVc', dt_c ='$Datc' , nom_c = '$Nomec' , prenom_c = ' $Prnc' , ville_c = '$Vlc' , adr_c = '$Adrsc' , mail_c = '$Mllc'  , phone_c = '$Tfc' , sean_c = '$seancec'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
