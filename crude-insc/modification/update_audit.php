<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modifier</title>
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

    $reqp="SELECT * FROM auditp WHERE id='$id'";

    $result= $db->query($reqp);
?>


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(../images/est_oujda_abdel.png);">
                    <span class="login100-form-title-1">
						Modifier
					</span>
                </div>

                <form action="../edite/editp.php" class="login100-form validate-form" method="post">
                <?php
                   foreach($result as $produitp){
                ?>
                     <input type="hidden" name="id" value="<?php echo $produitp['id']; ?>">
                    
                      <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100"><th>civilité</th></span>
                        <input class="input100" type="text" name="cvp" value="<?php echo $produitp['cvp']; ?> ">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100"><th>Date de naissance</th></span>
                        <input class="input100" type="text" name="dtp" value="<?php echo $produitp['dtp']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Nom</span>
                        <input class="input100" type="text" name="nomp" value="<?php echo $produitp['nomp']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Prenom</span>
                        <input class="input100" type="text" name="prenomp" value="<?php echo $produitp['prenomp']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Ville</span>
                        <input class="input100" type="text" name="villep" value="<?php echo $produitp['villep']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">adresse</span>
                        <input class="input100" type="text" name="adrp" value="<?php echo $produitp['adrp']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">E-maile</span>
                        <input class="input100" type="text" name="mailp" value="<?php echo $produitp['mailp']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">téléphone</span>
                        <input class="input100" type="text" name="phonep" value="<?php echo $produitp['phonep']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">session</span>
                        <input class="input100" type="text" name="seanp" value="<?php echo $produitp['seanp']; ?> ">
                        <span class="focus-input100"></span>
                       
                    </div>

                    <?php
                        }
                       ?>
                    <div class="container-login100-form-btn">
                        <input type="submit" value="Enregistrer" class="login100-form-btn">
                        <a type="submit" href="../audit_admn.php"class="login100-form-btn">Retour</a>
                    </div>
                </form>

                
            </div>
        </div>
    </div>


    <script src="../js/main.js"></script>

</body>

</html>