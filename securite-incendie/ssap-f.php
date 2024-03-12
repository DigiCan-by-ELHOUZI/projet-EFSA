<?php
  require '../bdd/inscription.php';

  if(isset($_POST["submit"])){
   $CVVf=$_POST['cv_f'];
   $Datf=$_POST['dt_f'];
   $Nomef=$_POST['nom_f'];
   $Prnf=$_POST['prenom_f'];
   $Vlf=$_POST['ville_f'];
   $Adrsf=$_POST['adr_f'];
   $Mllf=$_POST['mail_f'];
   $Tff=$_POST['phone_f'];
   $seancef=$_POST['sean_f'];

  
   $req="INSERT INTO ssap_f(cv_f,dt_f,nom_f,prenom_f,ville_f,adr_f,mail_f,phone_f,sean_f) values ('$CVVf',' $Datf','$Nomef','$Prnf',' $Vlf',' $Adrsf','$Mllf','$Tff','$seancef')";
   $res=mysqli_query($conn,$req);
  
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>SSIAP-3  | EFSA</title>
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
            ><img src="../assets/img/A3.png" alt="" title=""
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
              <li>SSIAP-3 RAN</li>
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
              Remise à niveau SSIAP 3 Chef de service
            </h2>
          </div>
          <div class="carre">
            <a class="afp"><img src="../assets/img/k2.png" alt="" title="" /></a>
            <p class="a1">
              La formation RAN SSIAP 3 a pour objectif de remettre à niveau les connaissances théoriques et pratiques nécessaires en vue d'exercer la fonction de chef des services de
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
                Seulement à 640€ <br /><span class="p1-1">25h</span>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="cldr">
            <p>Les prochaines formations RAN:</p>
          </div>
          <div class="caldr1">
            <div class="caldr1-1">
              <p>Du 09-04-2023 <br/> au 11-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°2f</mark>: avril</p>
            </div>
            <div class="caldr1-2">
              <p>Du 18-03-2023 <br/> au 20-03-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°1f</mark>: Mars</p>
            </div>
            <div class="caldr1-1">
              <p>Du 22-06-2023 <br/> au 24-06-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°4f</mark>: juin</p>
            </div>
            <div class="caldr1-2">
              <p>Du 28-05-2023 <br/> au 30-05-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°3f</mark>: mai</p>
            </div>
            <div class="caldr1-1">
              <p>Du 13-08-2023 <br/> au 15-08-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°6f</mark>:  août</p>
            </div>

            <div class="caldr1-2">
              <p>Du 25-07-2023 <br/> au 27-07-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°5f</mark>: juillet</p>
            </div>
            <div class="caldr1-1">
              <p>Du 29-10-2023 <br/> au 01-11-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°8f</mark>:octobre</p>
            </div>
            <div class="caldr1-2">
              <p>Du 26-09-2023 <br/> au 28-09-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°7f</mark>:septbre</p>
            </div>
          </div>
          <div class="caldr2">
            <div class="cld">
              <p class="cl">Résumé de la formation:</p>
            </div>
            <p>
              La formation remise à niveau SSIAP 3 (Diplôme de chef de services de sécurité incendie et d'assistance à personnes) a pour but d'acquérir et/ou de renforcer 
              les connaissances théoriques et pratiques nécessaires pour occuper la fonction de chef de service de sécurité incendie et d'assistance à personnes. Le chef de service a 
              pour mission le management du service de sécurité, il conseille le chef d'établissement en matière de sécurité incendie, l'assistance à personnes au sein des établissements 
              ou ils exercent le suivi des obligations de contrôle et d'entretien.
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
                    La formation RAN SSIAP 3 se déroule sous forme d'exercices pratiques et d'enseignements théoriques. Le programme est conforme à l'arrêté du 2 mai 2005

                    <br>
                    <br/>
                    <strong>Durée</strong><br/>25 heures<br/>
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
                      <strong>Document administratif</strong> 
                      <li>Connaître et mettre à jour les documents administratifs</li>

                      <strong>Commissions de sécurité</strong>
                      <li>Rappels sur la composition, le rôle des commissions de sécurité</li>

                      <strong>Réglementation</strong>
                      <li>Évolution des textes réglementaires</li>

                      <strong>Notions de droits civil et pénal</strong>
                      <li>Les codes civil et pénal</li>

                      <strong>Fonction maintenance</strong>
                      <li>Les contrats de maintenance des installations de sécurité</li>

                      <strong>Étude de cas</strong>
                      <li>Analyse d'un projet de construction et d'aménagement ou réaménagement dans l'existant</li>


                      <li>L'accessibilité des personnes handicapées</li>
                      <li>Mise en application des obligations réglementaires en matière d'accessibilité aux handicapés dans les établissements recevant du public au sens de la loi du 11 
                        janvier 2005 et ses décrets et arrêtés d'application</li>
                    
                      <strong>Analyse des risques</strong>
                      <li>Identifier les situations de risques de déclenchement d'incendies et d'accidents corporels</li>
                      <li>Assurer le suivi et le bon achèvement des travaux</li>
                      
                                        
                      <strong>Moyens de secours</strong>
                      <li>Évolution des textes réglementaires</li>

                      <strong>Organisation d'un service de sécurité incendie</strong>
                      <li>Gestion du personnel et des moyens du service</li>
                     
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
              <h2 class="title">Reservation pour SSIAP-3 RAN</h2>
              <form method="POST" action="">
                  <div class="row row-space">
                      <div class="col-2">
                        <label class="label">civilité</label>
                        <select
                           class="form-select form-select-lg mb-3"
                           aria-label=".form-select-lg example" name="cv_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
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
                                 name="dt_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required
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
                          <input class="input--style-4" type="text" name="nom_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                           <label class="label">Prenom</label>
                           <input class="input--style-4" type="text" name="prenom_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                              <label class="label">Ville</label>
                              <input class="input--style-4" type="text" name="ville_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                      <div class="col-2">
                         <div class="input-group">
                             <label class="label">Addraise</label>
                             <input class="input--style-4" type="text" name="adr_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                            <label class="label">Email</label>
                            <div class="input-group has-validation">
                               <input type="text" class="input--style-4" name="mail_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                               <div class="invalid-tooltip">
                                   Please choose a unique and valid username.
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-2">
                          <div class="input-group">
                              <label class="label">téléphone</label>
                              <input class="input--style-4" type="text" name="phone_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                          </div>
                      </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Sélectionnez une session</label>
                      <select
                         class="form-select form-select-lg mb-3"
                         aria-label=".form-select-lg example" name="sean_f" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                         <option value="" selected hidden>Aucun</option>
                         <option value="N°1f">N°1f : Mars</option>
                         <option value="N°2f">N°2f : Avril</option> 
                         <option value="N°3f">N°3f : Mai</option> 
                         <option value="N°4f">N°4f : Juin</option> 
                         <option value="N°5f">N°5f : Juillet</option> 
                         <option value="N°6f">N°6f : Août</option> 
                         <option value="N°7f">N°7f : Septembre</option> 
                         <option value="N°8f">N°8f : octobre</option> 
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
