


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EFSA--Admine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/A.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><->EFSA--Admine<-></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/A.ico" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Mohammed elhouzi</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="sec_incd_admn.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i> Sécurité Incendie</a>
                    <a href="sec_prv_admn.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Sécurité Privée</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>H0B0 & SST</a>
                    <a href="audit_admn.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Audit</a>
                    <a href="https://seller-area.youcan.shop/admin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Informatique</a>

                </div>

            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/A.ico" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">EL HOUZI Mohammed</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mon profil</a>
                            <a href="../index.html" class="dropdown-item">Déconnexion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


 <!-- Recent Sales Start -->
 <?php

include('connect.php');

$query= "SELECT * FROM ssap_a";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap-a   </h6> 
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <!-- <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th> -->
               </tr>
             </thead>
             <tbody>

             <?php
               foreach($result as $produit){
            ?>
            <tr>
                <td><?= $produit['id'] ?></td>
                <td><?= $produit['cv_a'] ?></td>
                <td><?= $produit['dt_a'] ?></td>
                <td><?= $produit['nom_a'] ?></td>
                <td><?= $produit['prenom_a'] ?></td>
                <td><?= $produit['adr_a'] ?></td>
                <td><?= $produit['mail_a'] ?></td>
                <td><?= $produit['phone_a'] ?></td> 
                <td><?= $produit['sean_a'] ?></td>
                <td>
                   <a href="modification/update_a.php?u_id=<?php echo $produit['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_a.php?u_id=<?php echo $produit['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                 </td>
                
            
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>

<?php

include('connect.php');

$query= "SELECT * FROM ssap_b";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap_b   </h6>
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Ville</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th>
                 
               </tr>
             </thead>
             <tbody>

             <?php
        foreach($result as $produit){
            ?>
            <tr>
                <td><?= $produit['id'] ?></td>
                <td><?= $produit['cv_b'] ?></td>
                <td><?= $produit['dt_b'] ?></td>
                <td><?= $produit['nom_b'] ?></td>
                <td><?= $produit['prenom_b'] ?></td>
                <td><?= $produit['ville_b'] ?></td>
                <td><?= $produit['adr_b'] ?></td>
                <td><?= $produit['mail_b'] ?></td>
                <td><?= $produit['phone_b'] ?></td>
                <td><?= $produit['sean_b'] ?></td>
                <td>
                <a href="modification/update_b.php?u_id=<?php echo $produit['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_b.php?u_id=<?php echo $produit['id']; ?>" class="btn btn-danger" role="button">Delete</a>

                 </td>
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>

<?php

include('connect.php');

$query= "SELECT * FROM ssap_c";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap_c   </h6>
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <!-- <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Ville</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th>
                  -->
               </tr>
             </thead>
             <tbody>

             <?php
        foreach($result as $produi){
            ?>
            <tr>
                <td><?= $produi['id'] ?></td>
                <td><?= $produi['cv_c'] ?></td>
                <td><?= $produi['dt_c'] ?></td>
                <td><?= $produi['nom_c'] ?></td>
                <td><?= $produi['prenom_c'] ?></td>
                <td><?= $produi['ville_c'] ?></td>
                <td><?= $produi['adr_c'] ?></td>
                <td><?= $produi['mail_c'] ?></td>
                <td><?= $produi['phone_c'] ?></td>
                <td><?= $produi['sean_c'] ?></td>
                <td>
                <a href="modification/update_c.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_c.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-danger" role="button">Delete</a>

                 </td>
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>

<?php

include('connect.php');

$query= "SELECT * FROM ssap_d";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap_d   </h6>
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <!-- <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Ville</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th> -->
                 
               </tr>
             </thead>
             <tbody>

             <?php
        foreach($result as $produi){
            ?>
            <tr>
                <td><?= $produi['id'] ?></td>
                <td><?= $produi['cv_d'] ?></td>
                <td><?= $produi['dt_d'] ?></td>
                <td><?= $produi['nom_d'] ?></td>
                <td><?= $produi['prenom_d'] ?></td>
                <td><?= $produi['ville_d'] ?></td>
                <td><?= $produi['adr_d'] ?></td>
                <td><?= $produi['mail_d'] ?></td>
                <td><?= $produi['phone_d'] ?></td>
                <td><?= $produi['sean_d'] ?></td>
                <td>
                <a href="modification/update_d.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_d.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-danger" role="button">Delete</a>

                 </td>
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>

<?php

include('connect.php');

$query= "SELECT * FROM ssap_e";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap_e   </h6>
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <!-- <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Ville</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th> -->
                 
               </tr>
             </thead>
             <tbody>

             <?php
        foreach($result as $produi){
            ?>
            <tr>
                <td><?= $produi['id'] ?></td>
                <td><?= $produi['cv_e'] ?></td>
                <td><?= $produi['dt_e'] ?></td>
                <td><?= $produi['nom_e'] ?></td>
                <td><?= $produi['prenom_e'] ?></td>
                <td><?= $produi['ville_e'] ?></td>
                <td><?= $produi['adr_e'] ?></td>
                <td><?= $produi['mail_e'] ?></td>
                <td><?= $produi['phone_e'] ?></td>
                <td><?= $produi['sean_e'] ?></td>
                <td>
                   <a href="modification/update_e.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_e.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-danger" role="button">Delete</a>

                 </td>
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>

<?php

include('connect.php');

$query= "SELECT * FROM ssap_f";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap_f   </h6>
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Ville</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th>
                 
               </tr>
             </thead>
             <tbody>

             <?php
        foreach($result as $produi){
            ?>
            <tr>
                <td><?= $produi['id'] ?></td>
                <td><?= $produi['cv_f'] ?></td>
                <td><?= $produi['dt_f'] ?></td>
                <td><?= $produi['nom_f'] ?></td>
                <td><?= $produi['prenom_f'] ?></td>
                <td><?= $produi['ville_f'] ?></td>
                <td><?= $produi['adr_f'] ?></td>
                <td><?= $produi['mail_f'] ?></td>
                <td><?= $produi['phone_f'] ?></td>
                <td><?= $produi['sean_f'] ?></td>
                <td>
                   <a href="modification/update_f.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_f.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-danger" role="button">Delete</a>

                 </td>
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>

<?php

include('connect.php');

$query= "SELECT * FROM ssap_g";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap_g   </h6>
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Ville</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th>
                 
               </tr>
             </thead>
             <tbody>

             <?php
        foreach($result as $produi){
            ?>
            <tr>
                <td><?= $produi['id'] ?></td>
                <td><?= $produi['cv_g'] ?></td>
                <td><?= $produi['dt_g'] ?></td>
                <td><?= $produi['nom_g'] ?></td>
                <td><?= $produi['prenom_g'] ?></td>
                <td><?= $produi['ville_g'] ?></td>
                <td><?= $produi['adr_g'] ?></td>
                <td><?= $produi['mail_g'] ?></td>
                <td><?= $produi['phone_g'] ?></td>
                <td><?= $produi['sean_g'] ?></td>
                <td>
                   <a href="modification/update_g.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_g.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-danger" role="button">Delete</a>

                 </td>
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>

<?php

include('connect.php');

$query= "SELECT * FROM ssap_h";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap_h   </h6>
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Ville</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th>
                 
               </tr>
             </thead>
             <tbody>

             <?php
        foreach($result as $produi){
            ?>
            <tr>
                <td><?= $produi['id'] ?></td>
                <td><?= $produi['cv_h'] ?></td>
                <td><?= $produi['dt_h'] ?></td>
                <td><?= $produi['nom_h'] ?></td>
                <td><?= $produi['prenom_h'] ?></td>
                <td><?= $produi['ville_h'] ?></td>
                <td><?= $produi['adr_h'] ?></td>
                <td><?= $produi['mail_h'] ?></td>
                <td><?= $produi['phone_h'] ?></td>
                <td><?= $produi['sean_h'] ?></td>
                <td>
                   <a href="modification/update_h.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_h.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-danger" role="button">Delete</a>

                 </td>
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>

<?php

include('connect.php');

$query= "SELECT * FROM ssap_i";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      Ssap_i   </h6>
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <th>id</th>
                 <th>civilité</th>
                 <th>Date de naissance</th>
                 <th>Nom</th>
                 <th>Prenom</th>
                 <th>Ville</th>
                 <th>adresse</th>
                 <th>E-mail</th>
                 <th>téléphone</th>
                 <th>session</th>
                 <th>action</th>
                 
               </tr>
             </thead>
             <tbody>

             <?php
        foreach($result as $produi){
            ?>
            <tr>
                <td><?= $produi['id'] ?></td>
                <td><?= $produi['cv_i'] ?></td>
                <td><?= $produi['dt_i'] ?></td>
                <td><?= $produi['nom_i'] ?></td>
                <td><?= $produi['prenom_i'] ?></td>
                <td><?= $produi['ville_i'] ?></td>
                <td><?= $produi['adr_i'] ?></td>
                <td><?= $produi['mail_i'] ?></td>
                <td><?= $produi['phone_i'] ?></td>
                <td><?= $produi['sean_i'] ?></td>
                <td>
                   <a href="modification/update_i.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-info" role="button">Update</a>
                   <a href="suprimer/delete_i.php?u_id=<?php echo $produi['id']; ?>" class="btn btn-danger" role="button">Delete</a>

                 </td>
            </tr>
            <?php
        }
        ?>
             </tbody>
           </table>

       </div>
    
   </div>
</div>
<!-- Recent Sales End -->
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">EST </a>, Oujda.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            crée par <a href="https://htmlcodex.com">Elhz</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>