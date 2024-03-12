<?php
  require '../bdd/inscription.php';

  if(isset($_POST["submit"])){
    $CVVp=$_POST['cvp'];
   $Datp=$_POST['dtp'];
   $Nomep=$_POST['nomp'];
   $Prnp=$_POST['prenomp'];
   $Vlp=$_POST['villep'];
   $Adrsp=$_POST['adrp'];
   $Mllp=$_POST['mailp'];
   $Tfp=$_POST['phonep'];
   $seancep=$_POST['seanp'];

  
   $reqp="INSERT INTO auditp (cvp,dtp,nomp,prenomp,villep,adrp,mailp,phonep,seanp) values ('$CVVp',' $Datp','$Nomep','$Prnp',' $Vlp',' $Adrsp','$Mllp','$Tfp','$seancep')";
   $result=mysqli_query($conn,$reqp);
   echo
   "
   <script>alert('Votre demande sera prise en compte et nous vous répondrons dans les meilleurs délais. ');</script>
   
   ";
  }
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Audit | EFSA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/A1.png" rel="icon">
  <link href="../assets/img/A2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../index.html" class="logo d-flex align-items-center">
        <h1></h1>
      </a>

      <div id="logo" class="me-auto">
        <a href="../index.html" class="scrollto"><img src="assets/img/A3.png" alt="" title=""></a>
      </div>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.html" class="active">Accueil</a></li>
          <li><a href="#">Actualités</a></li>
          <li class="dropdown"><a href="../audit.php"><span>Nos formations</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="../securite-privé/securite-privé.html">sécurité privée</a></li>
              <li><a href="../securite-incendie/securite-incendie.html">sécurité incendie</a></li>
              <li><a href="audit.html">Audit</a></li>
              <li><a href="https://daze.youcan.shop/">informatique et burautique</a></li>
              
            </ul>
          </li>
          <li><a href="#">Nos certifications</a></li>
          <li><a href="#">Calendrier</a></li>
          
          <li><a href="../contact.php">Contact</a></li>
          <li><a class="get-a-quote" href="audit.php">connexion</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->



  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('../assets/img/audit.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Audit et Conseils en Sécurité</h2>
              <br>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="../index.html">Accueil</a></li>
            <li>Audit et Conseils en Sécurité</li>
            
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


<!-- ======= info general Section ======= -->


    

    <section id="features" class="features">
        <div class="container">
          
          <div class="carre">
            <a class="afp"><img src="../assets/img/audit.png" alt="" title="" /></a>
            <p class="a1">
                L’audit permet de repérer tous les risques relatifs aux incendies, en détaillant précisément toutes les installations d’une même structure. Ce diagnostic, qui s’envisage
                 au cas par cas, offre une meilleure connaissance des failles potentielles qui pourraient un jour poser problème.
            </p>
            <div class="carre1">
              <a class="btp1" href="#a"> Inscription </a>
            </div>
            <div class="carre2">
              <a class="btp2" href="../assets/formulaire_d_inscription_word.docx"> Version Papier </a>
            </div>
            <div class="carre3">
              <p class="p1">
                Seulement à xxx <br /><span class="p1-1">xxx</span>
              </p>
            </div>
          </div>
        </div>
      </section>


      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="cldr">
            <p>Les prochaines formations audit:</p>
          </div>
          <div class="caldr1">
            <div class="caldr1-1">
              <p>Du 06-04-2023 <br/> au 08-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°2p</mark>: avril</p>
            </div>
            <div class="caldr1-2">
              <p>Du 15-03-2023 <br/> au 17-03-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°1p</mark>: Mars</p>
            </div>
            <div class="caldr1-1">
              <p>Du 19-06-2023 <br/> au 21-06-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°4p</mark>: juin</p>
            </div>
            <div class="caldr1-2">
              <p>Du 25-05-2023 <br/> au 27-05-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°3p</mark>: mai</p>
            </div>
            <div class="caldr1-1">
              <p>Du 10-08-2023 <br/> au 12-08-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°6p</mark>:  août</p>
            </div>

            <div class="caldr1-2">
              <p>Du 22-07-2023 <br/> au 24-07-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°5p</mark>: juillet</p>
            </div>
            <div class="caldr1-1">
              <p>Du 26-03-2023 <br/> au 28-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°8p</mark>:octobre</p>
            </div>
            <div class="caldr1-2">
              <p>Du 26-03-2023 <br/> au 28-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°7p</mark>:septbre</p>
            </div>
          </div>
          <div class="caldr2">
            <div class="cld">
              <p class="cl">Résumé de la formation:</p>
            </div>
            <p>
                L’audit de sécurité est fait pour dévoiler dans un premier temps l’état des lieux de votre projet, bâtiment ou entreprise. Son objectif second va être de définir 
                les préconisations et les priorités à mettre en œuvre pour votre lieu de vie ou de travail afin qu’il puisse répondre aux normes en vigueur et surtout offrir une sécurité 
                optimale pour vos collaborateurs et vous-même !
            </p>
          </div>
        </div>
      </section>

      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="features2" class="features2">
        <div class="container">
          <div class="df">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    <p class="ga">Contenu de la formation</p>
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <strong>Modalités pédagogiques</strong><br/>
                    xxxxxxxxxxxxxxxxxxxxxxxx

                    <br>
                    <br/>
                    <strong>Durée</strong><br/>xx<br/>
                    Délai moyen d'accès : 3 semaines sous réserve de l'obtention de tous les documents.<br/>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    <p class="gh">Programme</p>
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <ul>
                      
                    
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    <p class="gh">Évaluation</p>
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    La formation est validée si le candidat est présent à l'ensemble des séquences programmées.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingfour">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsefour"
                    aria-expanded="false"
                    aria-controls="collapsefour"
                  >
                    <p class="gh">Certification</p>
                  </button>
                </h2>
                <div
                  id="collapsefour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingfour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Attestation de stage délivrée par EFSA.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->


      <section id="a" class="features2">
        <div class="container">
          
            <div class="wrapper wrapper--w680">
          <div class="card card-4">
            <div class="card-body">
              <h2 class="title">Reservation pour audit</h2>
              <form method="POST" action="">
                  <div class="row row-space">
                      <div class="col-2">
                        <label class="label">civilité</label>
                        <select
                           class="form-select form-select-lg mb-3"
                           aria-label=".form-select-lg example" name="cvp" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                           <option value="" selected hidden>civilité</option>
                           <option value="h">homme</option>
                           <option value="f">femme</option>

                          
                        </select>
                      </div>
                      <div class="col-2">
                         <div class="input-group">
                            <label class="label">Date de naissance</label>
                            <div class="input-group-icon">
                              <input
                                class="input--style-4 js-datepicker"
                                type="date"
                                name="dtp" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required
                              />
                              <i
                               class="zmdi zmdi-calendar-note input-icon js-btn-calendar"
                              ></i>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                        <div class="input-group">
                          <label class="label">Nom</label>
                          <input class="input--style-4" type="text" name="nomp" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                           <label class="label">Prenom</label>
                           <input class="input--style-4" type="text" name="prenomp" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                              <label class="label">Ville</label>
                              <input class="input--style-4" type="text" name="villep" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                      <div class="col-2">
                         <div class="input-group">
                             <label class="label">adresse</label>
                             <input class="input--style-4" type="text" name="adrp" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                            <label class="label">E-mail</label>
                            <div class="input-group has-validation">
                               <input type="email" class="input--style-4" name="mailp" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                               <div class="invalid-tooltip">
                                   Please choose a unique and valid username.
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-2">
                          <div class="input-group">
                              <label class="label">téléphone</label>
                              <input class="input--style-4" type="text" name="phonep" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                          </div>
                      </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Sélectionnez une session</label>
                      <select
                         class="form-select form-select-lg mb-3" name="seanp"
                         aria-label=".form-select-lg example"  id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                         <option value="" selected hidden>Aucun</option>
                         <option value="N°1p">N°1p : Mars</option>
                         <option value="N°2p">N°2p : Avril</option> 
                         <option value="N°3p">N°3p : Mai</option> 
                         <option value="N°4p">N°4p : Juin</option> 
                         <option value="N°5p">N°5p : Juillet</option> 
                         <option value="N°6p">N°6p : Août</option> 
                         <option value="N°7p">N°7p : Septembre</option> 
                         <option value="N°8p">N°8p : octobre</option> 
                      </select>
                    </div>
                  </div>
                   <div class="p-t-15">
                      <button class="b7 -2 btn--blue" type="submit" name="submit" >
                         Envoyer
                      </button>
                   </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </section>

</main>

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="../index.html" class="logo d-flex align-items-center">
          <span>EFSA</span>
        </a>
        <p>Vous avez des questions ?</p>
        
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="get-a-quote" href="#">Contact</a></li>
            </ul>
          </nav><!-- .navbar -->
    
        </div>
        <div class="social-links d-flex mt-4">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Plan du site</h4>
        <ul>
          <li><a href="../index.html">Accueil</a></li>
          <li><a href="#">Actualités</a></li>
          <li><a href="audit.php">Nos formation</a></li>
          <li><a href="#">Nos certifications</a></li>
          <li><a href="#">Calendrier</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">Politique de confidentialité</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Nos formations</h4>
        <ul>
          <li><a href="securite-privé/securite-privé.html">Sécurité Privée</a></li>
          <li><a href="securite-incendie/securite-incendie.html">Sécurité Incendie</a></li>
          <li><a href="https://daze.youcan.shop/">informatique & burautique</a></li>
          <li><a href="audit.html">Audit</a></li>
          
        </ul>x
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact</h4>
        <p>
          xxxxxxxxxxxxxxxxxxx<br>
          <br><br>
          <strong>Numéro téléphone:</strong> +33769092324<br>
          <strong>E-mail:</strong> EFSA@gmail.com<br>

        </p>

      </div>

    </div>
  </div>

  <div class="container mt-4">
    <div class="copyright">
      &copy; Copyright <strong><span>2023</span></strong> <div class="credits">Site réalisé par <a href="#">EL HOUZI Abdelmounaim</a>
                                                          </div>
    </div>
   
  </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>