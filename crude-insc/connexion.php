


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
                    <a href="sec_prv_admn.php" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Sécurité Privée</a>
                    <a href="sec_incd_admn.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Sécurité Incendie</a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>H0B0 & SST</a>
                    <a href="audit_admn.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Audit</a>
                    <a href="https://seller-area.youcan.shop/admin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Informatique</a>
                    <a href="../page_cnx/register_form.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>s'inscrire</a>


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

$query= "SELECT * FROM user_form";

$result= $db->query($query);
?>
<div class="container-fluid pt-4 px-4">
   <div class="bg-secondary text-center rounded p-4">
   <h6 class="mb-0">      inscriptions   </h6> 
   <br/>
       <div class="d-flex align-items-center justify-content-between mb-4">
           
           
           <table class="table text-start align-middle table-bordered table-hover mb-0">
          
             <thead>
               <tr>
                 <th>id</th>
                 <th>name</th>
                 <th>email</th>
                 <th>password</th>
                 <th>user_type</th>
               </tr>
             </thead>
             <tbody>

             <?php
               foreach($result as $produit){
            ?>
            <tr>
                <td><?= $produit['id'] ?></td>
                <td><?= $produit['name'] ?></td>
                <td><?= $produit['email'] ?></td>
                <td><?= $produit['password'] ?></td>
                <td><?= $produit['user_type'] ?></td>
                <td>
                 
                   <a href="suprimer/delete_cnx.php?u_id=<?php echo $produit['id']; ?>" class="btn btn-danger" role="button">Delete</a>
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