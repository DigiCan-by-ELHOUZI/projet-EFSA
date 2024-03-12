<?php
  require '../bdd/inscription.phpla';

  if(isset($_POST["submit"])){
    $CVVa=$_POST['cv_a'];
   $Data=$_POST['dt_a'];
   $Nomea=$_POST['nom_a'];
   $Prna=$_POST['prenom_a'];
   $Vla=$_POST['ville_a'];
   $Adrsa=$_POST['adr_a'];
   $Mlla=$_POST['mail_a'];
   $Tfa=$_POST['phone_a'];
   $seancea=$_POST['sean_a'];

  
   $req="INSERT INTO ssap_a(cv_a,dt_a,nom_a,prenom_a,ville_a,adr_a,mail_a,phone_a,sean_a) values ('$CVVa',' $Data','$Nomea','$Prna',' $Vla',' $Adrsa','$Mlla','$Tfa','$seancea')";
   $res=mysqli_query($conn,$req);
   echo
   "
   <script>alert('Votre demande sera prise en compte et nous vous répondrons dans les meilleurs délais. ');</script>
   
   ";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>EFSA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!--logo -->
    <link href="../assets/img/A1.png" rel="icon">
    <link href="../assets/img/A2.png" rel="apple-touch-icon">
  
    <!-- Google Polices -->
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
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="/index.html" class="logo d-flex align-items-center">
          <h1></h1>
        </a>

        <div id="logo" class="me-auto">
          <a href="/index.html" class="scrollto"
            ><img src="/assets/img/A3.png" alt="" title=""
          /></a>
        </div>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="/index.html" class="active">Accueil</a></li>
            <li><a href="#">Actualités</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Nos formations</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="/securite-privé.html">sécurité privée</a></li>
                <li><a href="securite-incendie.html">sécurité incendie</a></li>
                <li><a href="#">Audit</a></li>
                <li><a href="#">informatique et burautique</a></li>
              </ul>
            </li>
            <li><a href="#">Nos certifications</a></li>
            <li><a href="#">Calendrier</a></li>

            <li><a href="/contact.html">Contact</a></li>
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
              <li>SSIAP-2</li>
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
              SSIAP 1 - Agent des services de sécurité incendie et d'assistance à personnes
            </h2>
          </div>
          <div class="carre">
            <a class="afp"><img src="../assets/img/k2.png" alt="" title="" /></a>
            <p class="a1">
              La formation SSIAP 1 a pour objectif d'acquérir les connaissances théoriques et pratiques nécessaires pour occuper la fonction d'agent des services de sécurité
               incendie et d'assistance à personnes.
            </p>
            <div class="carre1">
              <a class="btp1" href="#a"> Inscription </a>
            </div>
            <div class="carre2">
              <a class="btp2" href="/securite-privé.html"> Version Papier </a>
            </div>
            <div class="carre3">
              <p class="p1">
                Seulement à 750€ <br /><span class="p1-1">74h</span>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="cldr">
            <p>Les prochaines formations SSIA1 :</p>
          </div>
          <div class="caldr1">
            <div class="caldr1-1">
              <p>Du 09-04-2023 <br/> au 12-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°2a</mark>: avril</p>
            </div>
            <div class="caldr1-2">
              <p>Du 18-03-2023 <br/> au 20-03-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°1a</mark>: Mars</p>
            </div>
            <div class="caldr1-1">
              <p>Du 22-06-2023 <br/> au 24-06-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°4a</mark>: juin</p>
            </div>
            <div class="caldr1-2">
              <p>Du 28-05-2023 <br/> au 30-05-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°3a</mark>: mai</p>
            </div>
            <div class="caldr1-1">
              <p>Du 13-08-2023 <br/> au 15-08-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°6a</mark>:  août</p>
            </div>

            <div class="caldr1-2">
              <p>Du 25-07-2023 <br/> au 27-07-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°5a</mark>: juillet</p>
            </div>
            <div class="caldr1-1">
              <p>Du 22-10-2023 <br/> au 24-11-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°8a</mark>:octobre</p>
            </div>
            <div class="caldr1-2">
              <p>Du 29-09-2023 <br/> au 01-10-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°7a</mark>:septbre</p>
            </div>
          </div>
          
          <div class="caldr2">
            <div class="cld">
              <p class="cl">Résumé de la formation:</p>
            </div>
            <p>
                  L'agent des services de sécurité incendie a pour missions : la prévention des incendies, la sensibilisation des employés en matière de sécurité contre l'incendie 
              et d'assistance à personnes, l'entretien élémentaire des moyens concourant à la sécurité incendie, l'alerte et l'accueil des secours, l'évacuation du public, 
              l'intervention précoce face aux incendies, l'assistance à personnes au sein des établissements où il exerce et l'exploitation du PC de sécurité incendie. 
              Des épreuves d'évaluation sont prévues dans le cadre de l'arrêté du 2 mai 2005.
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
                    La formation SSIAP 1 se déroule sous forme de cours et d'exercices pratiques de mise en situation réelle. Le programme est conforme à l'arrêté du 2 mai 2005.<br/>

                    
                    <br/>
                    <strong>Durée</strong><br/>74 h (examen inclus)
                    <br/>Délai moyen d'accès : 3 semaines sous réserve de l'obtention de tous les documents.
                    
                    <br/><br>
                    <strong>Équivalence / Suivi de parcours</strong><br/>
                    Conformément à l'arrêté du 2 mai 2005, des équivalences et/ou réduction de parcours sont possibles pour sapeurs- pompiers et pompiers militaires, après 
                    étude du dossier. Les titulaires du SSIAP 1 peuvent suivre une formation SSIAP 2 après 1607h d'expérience justifiée en tant que SSIAP 1.
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
                      <strong>Le feu et ses conséquences</strong> 
                      <li>Le feu</li>
                      <li>Le comportement au feu</li>
                      <strong>Sécurité incendie</strong>
                      <li>Principes de classement des établissements</li>
                      <li>Fondamentaux et principes généraux de sécurité</li>
                      <li>Incendie</li>
                      <li>Desserte des bâtiments</li>
                      <li>Cloisonnement d'isolation des risques</li>
                      <li>Evacuation du public et des occupants</li>
                      <li>Désenfumage</li>
                      <li>Eclairage de sécurité</li>
                      <li>Présentation des différents moyens de secours</li>
                      <strong>Installations techniques</strong>
                      <li>Installations électriques</li>
                      <li>Ascenseurs et nacelles</li>
                      <li>Installations fixes d'extinction automatique</li>
                      <li>Colonnes sèches et humides</li>
                      <li>Système de sécurité incendie</li>
                      <strong>Rôle et missions des agents de sécurité incendie</strong>
                      <li>Le service de sécurité</li>
                      <li>Présentation des consignes de sécurité et main courante</li>
                      <li>Poste de sécurité</li>
                      <li>Rondes de sécurité et surveillance des travaux</li>
                      <li>Mise en oeuvre des moyens d'extinction </li>
                      <li>Appel et réception des services publics de secours</li>
                      <li>Sensibilisation des occupants</li>
                      <strong>Exercices pratiques : Concrétisation des acquis</strong>
                      <li>Visites applicatives</li>
                      <li>Mises en situation d'intervention</li>
                     
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
                    <strong>UNE ÉPREUVE ÉCRITE</strong>
                    Q.C.M. de 30 questions portant sur l'ensemble du programme.
                    <br>
                    <strong>UNE ÉPREUVE PRATIQUE</strong>
                    Réalisation d'une ronde avec des anomalies et découverte d'un sinistre.
                    <br>Des questions du jury compléteront la ronde. A l'issue, le candidat renseignera une main courante sur l'une des anomalies constatées.
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
                    Le candidat sera certifié s'il obtient la note de 12 sur 20 à l'épreuve écrite et s'il est évalué apte à l'issue de l'épreuve pratique. Le candidat conserve le bénéfice de chaque épreuve validée
                     seule, pendant un an. Il peut ne repasser que l'épreuve à laquelle il a échoué, sans suivre de nouveau la formation. L'examen permet l'obtention du diplôme SSIAP 1 à recycler tous les 3 ans 
                     avant la date de fin de validité.
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
              <h2 class="title">Reservation pour SSAP-1</h2>


              <form method="POST" action="">
                  <div class="row row-space">
                      <div class="col-2">
                        <label class="label">civilité</label>
                        <select
                           class="form-select form-select-lg mb-3"
                           aria-label=".form-select-lg example" name="cv_a" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
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
                                name="dt_a" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required
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
                          <input class="input--style-4" type="text" name="nom_a" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                           <label class="label">Prenom</label>
                           <input class="input--style-4" type="text" name="prenom_a" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                              <label class="label">Ville</label>
                              <input class="input--style-4" type="text" name="ville_a" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                      <div class="col-2">
                         <div class="input-group">
                             <label class="label">Addraise</label>
                             <input class="input--style-4" type="text" name="adr_a" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                            <label class="label">Email</label>
                            <div class="input-group has-validation">
                               <input type="text" class="input--style-4" name="mail_a" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                               <div class="invalid-tooltip">
                                   Please choose a unique and valid username.
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-2">
                          <div class="input-group">
                              <label class="label">téléphone</label>
                              <input class="input--style-4" type="text" name="phone_a" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                          </div>
                      </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Sélectionnez une session</label>
                      <select
                         class="form-select form-select-lg mb-3" name="sean_a"
                         aria-label=".form-select-lg example"  id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                         <option value="" selected hidden>Aucun</option>
                         <option value="N°1a">N°1a : Mars</option>
                         <option value="N°2a">N°2a : Avril</option> 
                         <option value="N°3a">N°3a : Mai</option> 
                         <option value="N°4a">N°4a : Juin</option> 
                         <option value="N°5a">N°5a : Juillet</option> 
                         <option value="N°6a">N°6a : Août</option> 
                         <option value="N°7a">N°7a : Septembre</option> 
                         <option value="N°8a">N°8a : octobre</option> 
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
            <a href="/index.html" class="logo d-flex align-items-center">
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

