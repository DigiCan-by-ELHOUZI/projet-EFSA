<?php

include('../connect.php');


$id=$_POST['id'];
$CVVi=$_POST['cv_i'];
$Dati=$_POST['dt_i'];
$Nomei=$_POST['nom_i'];
$Prni=$_POST['prenom_i'];
$Vli=$_POST['ville_i'];
$Adrsi=$_POST['adr_i'];
$Mlli=$_POST['mail_i'];
$Tfi=$_POST['phone_i'];
$seancei=$_POST['sean_i'];


$req="UPDATE ssap_i SET cv_i ='$CVVi', dt_i ='$Dati' , nom_i = '$Nomei' , prenom_i = ' $Prni' , ville_i = '$Vli' , adr_i = '$Adrsi' , mail_i = '$Mlli'  , phone_i = '$Tfi' , sean_i = '$seancei'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
