<?php

include('../connect.php');


$id=$_POST['id'];
$CVVe=$_POST['cv_e'];
$Date=$_POST['dt_e'];
$Nomee=$_POST['nom_e'];
$Prne=$_POST['prenom_e'];
$Vle=$_POST['ville_e'];
$Adrse=$_POST['adr_e'];
$Mlle=$_POST['mail_e'];
$Tfe=$_POST['phone_e'];
$seancee=$_POST['sean_e'];


$req="UPDATE ssap_e SET cv_e ='$CVVe', dt_e ='$Date' , nom_e = '$Nomee' , prenom_e = ' $Prne' , ville_e = '$Vle' , adr_e = '$Adrse' , mail_e = '$Mlle'  , phone_e = '$Tfe' , sean_e = '$seancee'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
