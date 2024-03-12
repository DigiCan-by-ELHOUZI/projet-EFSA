<?php

include('../connect.php');


$id=$_POST['id'];
$CVVf=$_POST['cv_f'];
$Datf=$_POST['dt_f'];
$Nomef=$_POST['nom_f'];
$Prnf=$_POST['prenom_f'];
$Vlf=$_POST['ville_f'];
$Adrsf=$_POST['adr_f'];
$Mllf=$_POST['mail_f'];
$Tff=$_POST['phone_f'];
$seancef=$_POST['sean_f'];


$req="UPDATE ssap_f SET cv_f ='$CVVf', dt_f ='$Datf' , nom_f = '$Nomef' , prenom_f = ' $Prnf' , ville_f = '$Vlf' , adr_f = '$Adrsf' , mail_f = '$Mllf'  , phone_f = '$Tff' , sean_f = '$seancef'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
