<?php

include('../connect.php');


$id=$_POST['id'];
$CVVa=$_POST['cv_a'];
$Data=$_POST['dt_a'];
$Nomea=$_POST['nom_a'];
$Prna=$_POST['prenom_a'];
$Vla=$_POST['ville_a'];
$Adrsa=$_POST['adr_a'];
$Mlla=$_POST['mail_a'];
$Tfa=$_POST['phone_a'];
$seancea=$_POST['sean_a'];


$req="UPDATE ssap_a SET cv_a ='$CVVa', dt_a ='$Data' , nom_a = '$Nomea' , prenom_a = ' $Prna' , ville_a = '$Vla' , adr_a = '$Adrsa' , mail_a = '$Mlla'  , phone_a = '$Tfa' , sean_a = '$seancea'  WHERE id = '$id'";

  
 


if($db->exec($req)){

    header("Location:../sec_incd_admn.php");  

}
else{
    echo "error in query ....";
}
?>
