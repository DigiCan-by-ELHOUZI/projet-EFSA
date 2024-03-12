<?php

include('../connect.php');


$id=$_POST['id'];
$CVVg=$_POST['cv_g'];
$Datg=$_POST['dt_g'];
$Nomeg=$_POST['nom_g'];
$Prng=$_POST['prenom_g'];
$Vlg=$_POST['ville_g'];
$Adrsg=$_POST['adr_g'];
$Mllg=$_POST['mail_g'];
$Tfg=$_POST['phone_g'];
$seanceg=$_POST['sean_g'];


$req="UPDATE ssap_g SET cv_g ='$CVVg', dt_g ='$Datg' , nom_g = '$Nomeg' , prenom_g = ' $Prng' , ville_g = '$Vlg' , adr_g = '$Adrsg' , mail_g = '$Mllg'  , phone_g = '$Tfg' , sean_g = '$seanceg'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
