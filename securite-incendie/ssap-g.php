<?php
  require '../bdd/inscription.php';

  if(isset($_POST["submit"])){
   $CVVg=$_POST['cv_g'];
   $Datg=$_POST['dt_g'];
   $Nomeg=$_POST['nom_g'];
   $Prng=$_POST['prenom_g'];
   $Vlg=$_POST['ville_g'];
   $Adrsg=$_POST['adr_g'];
   $Mllg=$_POST['mail_g'];
   $Tfg=$_POST['phone_g'];
   $seanceg=$_POST['sean_g'];

  
   $req="INSERT INTO ssap_g(cv_g,dt_g,nom_g,prenom_g,ville_g,adr_g,mail_g,phone_g,sean_g) values ('$CVVg',' $Datg','$Nomeg','$Prng',' $Vlg',' $Adrsg','$Mllg','$Tfg','$seanceg')";
   $res=mysqli_query($conn,$req);
  
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>SSIAP-1  | EFSA</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/A1.png" rel="icon">
  <link href="../assets/img/A2.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="../index.html" class="logo d-flex align-items-center">
          <h1></h1>
        </a>

        <div id="logo" class="me-auto">
          <a href="../index.html" class="scrollto"
            ><img src="/assets/img/A3.png" alt="" title=""
          /></a>
        </div>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="../index.html" class="active">Accueil</a></li>
            <li><a href="#">Actualités</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Nos formations</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="../securite-privé.html">sécurité privée</a></li>
                <li><a href="#">sécurité incendie</a></li>
                <li><a href="#">Audit</a></li>
                <li><a href="#">informatique et burautique</a></li>
              </ul>
            </li>
            <li><a href="#">Nos certifications</a></li>
            <li><a href="#">Calendrier</a></li>

            <li><a href="../contact.html">Contact</a></li>
            <li><a class="get-a-quote" href="#">connexion</a></li>
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

    <main id="main">
      <br /><br /><br />
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <nav>
          <div class="container">
            <ol>
              <li><a href="securite-incendie.html">Retour</a></li>
              <li>SSIAP-1 REC</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->
      <br /><br /><br /><br />

      <!-- ======= 1 Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="section-header">
            <h2>
              Recyclage SSIAP 1 Agent de sécurité
            </h2>
          </div>
          <div class="carre">
            <a class="afp"><img src="../assets/img/k2.png" alt="" title="" /></a>
            <p class="a1">
              La formation REC SSIAP 1 a pour objectif d'entretenir les connaissances théoriques et pratiques nécessaires à l'exercice de la fonction d'agent des services de
               sécurité incendie et d'assistance à personnes.
            </p>
            <div class="carre1">
              <a class="btp1" href="#a"> Inscription </a>
            </div>
            <div class="carre2">
              <a class="btp2" href="../securite-privé.html"> Version Papier </a>
            </div>
            <div class="carre3">
              <p class="p1">
                Seulement à 195€ <br /><span class="p1-1">14h</span>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="cldr">
            <p>Les prochaines formations REC:</p>
          </div>
          <div class="caldr1">
            <div class="caldr1-1">
              <p>Du 09-04-2023 <br/> au 11-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°2g</mark>: avril</p>
            </div>
            <div class="caldr1-2">
              <p>Du 18-03-2023 <br/> au 20-03-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°1g</mark>: Mars</p>
            </div>
            <div class="caldr1-1">
              <p>Du 22-06-2023 <br/> au 24-06-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°4g</mark>: juin</p>
            </div>
            <div class="caldr1-2">
              <p>Du 28-05-2023 <br/> au 30-05-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°3g</mark>: mai</p>
            </div>
            <div class="caldr1-1">
              <p>Du 13-08-2023 <br/> au 15-08-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°6g</mark>:  août</p>
            </div>

            <div class="caldr1-2">
              <p>Du 25-07-2023 <br/> au 27-07-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°5g</mark>: juillet</p>
            </div>
            <div class="caldr1-1">
              <p>Du 29-10-2023 <br/> au 01-11-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°8g</mark>:octobre</p>
            </div>
            <div class="caldr1-2">
              <p>Du 26-09-2023 <br/> au 28-09-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°7g</mark>:septbre</p>
            </div>
          </div>
          <div class="caldr2">
            <div class="cld">
              <p class="cl">Résumé de la formation:</p>
            </div>
            <p>
              La formation recyclage SSIAP 1 (Diplôme d'Agent des Services de Sécurité Incendie et d'Assistance à Personnes) a pour but de renforcer les connaissances théoriques et 
              pratiques nécessaires à l'emploi et à la fonction de l'agent de sécurité incendie (conforme à l'annexe 5 de l'arrêté du 2 mai 2005). Elle permet également d'échanger sur 
              le retour d'expérience.
            </p>
          </div>
        </div>
      </section>
      <!-- End Features Section -->

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
                    La formation REC SSIAP 1 se déroule sous forme d'exercices pratiques et d'enseignements théoriques. Le programme est conforme à l'arrêté du 2 mai 2005.
                    <br>
                    <br/>
                    <strong>Durée</strong><br/>14 heures<br/>
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
                      <strong>Réglementation</strong> 
                      <li>Principes fondamentaux de la sécurité incendie en ERP et IGH</li>
                      <li>Evolution de la réglementation en matière de moyens de secours</li>

                      <strong>Exercices pratiques</strong>
                      <strong>Mise en oeuvre des moyens d'extinction</strong>
                      <li>Conduite à tenir pour procéder à l'extinction d'un début d'incendie</li>

                      
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
                    La formation est validée si le candidat est présent à l'ensemble des séquences programmées. Dans le cas de défaillance notoire, le centre de formation pourra proposer 
                    une remise à niveau.
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
              <h2 class="title">Reservation pour SSIAP-1 REC</h2>
              <form method="POST" action="">
                  <div class="row row-space">
                      <div class="col-2">
                        <label class="label">civilité</label>
                        <select
                           class="form-select form-select-lg mb-3"
                           aria-label=".form-select-lg example" name="cv_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
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
                                 name="dt_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required
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
                          <input class="input--style-4" type="text" name="nom_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                           <label class="label">Prenom</label>
                           <input class="input--style-4" type="text" name="prenom_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                              <label class="label">Ville</label>
                              <input class="input--style-4" type="text" name="ville_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                      <div class="col-2">
                         <div class="input-group">
                             <label class="label">Addraise</label>
                             <input class="input--style-4" type="text" name="adr_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                            <label class="label">Email</label>
                            <div class="input-group has-validation">
                               <input type="text" class="input--style-4" name="mail_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                               <div class="invalid-tooltip">
                                   Please choose a unique and valid username.
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-2">
                          <div class="input-group">
                              <label class="label">téléphone</label>
                              <input class="input--style-4" type="text" name="phone_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                          </div>
                      </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Sélectionnez une session</label>
                      <select
                         class="form-select form-select-lg mb-3"
                         aria-label=".form-select-lg example" name="sean_g" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                         <option value="" selected hidden>Aucun</option>
                         <option value="N°1g">N°1g : Mars</option>
                         <option value="N°2g">N°2g : Avril</option> 
                         <option value="N°3g">N°3g : Mai</option> 
                         <option value="N°4g">N°4g : Juin</option> 
                         <option value="N°5g">N°5g : Juillet</option> 
                         <option value="N°6g">N°6g : Août</option> 
                         <option value="N°7g">N°7g : Septembre</option> 
                         <option value="N°8g">N°8g : octobre</option> 
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
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="../index.html" class="logo d-flex align-items-center">
              <span>EFSA</span>
            </a>
            <p>Vous avez des questions ?</p>

            <div
              class="container-fluid container-xl d-flex align-items-center justify-content-between"
            >
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="get-a-quote" href="#">Contact</a></li>
                </ul>
              </nav>
              <!-- .navbar -->
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
              <li><a href="#">Accueil</a></li>
              <li><a href="#">Actualités</a></li>
              <li><a href="#">Nos formation</a></li>
              <li><a href="#">Nos certifications</a></li>
              <li><a href="#">Calendrier</a></li>
              <li><a href="#">Connexion</a></li>
              <li><a href="#">Politique de confidentialité</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Nos formations</h4>
            <ul>
              <li><a href="#">Sécurité Privée</a></li>
              <li><a href="#">Sécurité Incendie</a></li>
              <li><a href="#">informatique & burautique</a></li>
              <li><a href="#">Audit</a></li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4>Contact</h4>
            <p>
              19 Rue des chasseurs<br />
              34000 Montpelier<br /><br />
              <strong>Numéro téléphone:</strong> +33769092324<br />
              <strong>E-mail:</strong> EFSA@gmail.com<br />
            </p>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="copyright">
          &copy; Copyright <strong><span>2023</span></strong>
          <div class="credits">
            Site réalisé par <a href="#">EL HOUZI Abdelmounaim</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
