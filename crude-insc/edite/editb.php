<?php

include('../connect.php');


$id=$_POST['id'];
$CVVb=$_POST['cv_b'];
$Datb=$_POST['dt_b'];
$Nomeb=$_POST['nom_b'];
$Prnb=$_POST['prenom_b'];
$Vlb=$_POST['ville_b'];
$Adrsb=$_POST['adr_b'];
$Mllb=$_POST['mail_b'];
$Tfb=$_POST['phone_b'];
$seanceb=$_POST['sean_b'];


$req="UPDATE ssap_b SET cv_b ='$CVVb', dt_b ='$Datb' , nom_b = '$Nomeb' , prenom_b = ' $Prnb' , ville_b = '$Vlb' , adr_b = '$Adrsb' , mail_b = '$Mllb'  , phone_b = '$Tfb' , sean_b = '$seanceb'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
