<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modiffier</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    
    <!--===============================================================================================-->
</head>

<body>
<?php

    include('../connect.php');

    $id=$_GET['u_id'];

    $req="SELECT * FROM ssap_d WHERE id='$id'";

    $res= $db->query($req);
?>


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(../images/est_oujda_abdel.png);">
                    <span class="login100-form-title-1">
						Modiffier
					</span>
                </div>

                <form action="../edite/editd.php" class="login100-form validate-form" method="post">
                <?php
                   foreach($res as $produi){
                ?>
                     <input type="hidden" name="id" value="<?php echo $produi['id']; ?>">
                    
                      <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100"><th>civilité</th></span>
                        <input class="input100" type="text" name="cv_d" value="<?php echo $produi['cv_d']; ?> ">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100"><th>Date de naissance</th></span>
                        <input class="input100" type="text" name="dt_d" value="<?php echo $produi['dt_d']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Nom</span>
                        <input class="input100" type="text" name="nom_d" value="<?php echo $produi['nom_d']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Prenom</span>
                        <input class="input100" type="text" name="prenom_d" value="<?php echo $produi['prenom_d']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Ville</span>
                        <input class="input100" type="text" name="ville_d" value="<?php echo $produi['ville_d']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">adresse</span>
                        <input class="input100" type="text" name="adr_d" value="<?php echo $produi['adr_d']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">E-maile</span>
                        <input class="input100" type="text" name="mail_d" value="<?php echo $produi['mail_d']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">téléphone</span>
                        <input class="input100" type="text" name="phone_d" value="<?php echo $produi['phone_d']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">session</span>
                        <input class="input100" type="text" name="sean_d" value="<?php echo $produi['sean_d']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>

                    <?php
                        }
                       ?>
                    <div class="container-login100-form-btn">
                        <input type="submit" value="Enregistrer" class="login100-form-btn">
                        <a type="submit" href="../sec_prv_admn.php"class="login100-form-btn">Retour</a>
                    </div>
                </form>

                
            </div>
        </div>
    </div>


    <script src="../js/main.js"></script>

</body>

</html>