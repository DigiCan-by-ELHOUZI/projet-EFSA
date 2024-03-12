<?php
 require '../bdd/inscription.php';

  if(isset($_POST["submit"])){
   $CVVc=$_POST['cv_c'];
   $Datc=$_POST['dt_c'];
   $Nomec=$_POST['nom_c'];
   $Prnc=$_POST['prenom_c'];
   $Vlc=$_POST['ville_c'];
   $Adrsc=$_POST['adr_c'];
   $Mllc=$_POST['mail_c'];
   $Tfc=$_POST['phone_c'];
   $seancec=$_POST['sean_c'];

  
   $req="INSERT INTO ssap_c(cv_c,dt_c,nom_c,prenom_c,ville_c,adr_c,mail_c,phone_c,sean_c) values ('$CVVc',' $Datc','$Nomec','$Prnc',' $Vlc',' $Adrsc','$Mllc','$Tfc','$seancec')";
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
              <li>SSIAP-3</li>
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
              SSIAP 3 - Chef des services de sécurité incendie et d'assistance à personnes
            </h2>
          </div>
          <div class="carre">
            <a class="afp"><img src="../assets/img/k2.png" alt="" title="" /></a>
            <p class="a1">
              La formation SSIAP 3 a pour objectif de vous permettre d'acquérir les connaissances théoriques et pratiques nécessaires pour occuper la fonction 
              de chef de service de sécurité incendie et d'assistance à personnes.
            </p>
            <div class="carre1">
              <a class="btp1" href="#a"> Inscription </a>
            </div>
            <div class="carre2">
              <a class="btp2" href="../securite-privé.html"> Version Papier </a>
            </div>
            <div class="carre3">
              <p class="p1">
                Seulement à 2800€ <br /><span class="p1-1">223h</span>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="cldr">
            <p>Les prochaines formations SSIAP3:</p>
          </div>
          <div class="caldr1">
            <div class="caldr1-1">
              <p>Du 09-04-2023 <br/> au 11-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°2c</mark>: avril</p>
            </div>
            <div class="caldr1-2">
              <p>Du 18-03-2023 <br/> au 20-03-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°1c</mark>: Mars</p>
            </div>
            <div class="caldr1-1">
              <p>Du 22-06-2023 <br/> au 24-06-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°4c</mark>: juin</p>
            </div>
            <div class="caldr1-2">
              <p>Du 28-05-2023 <br/> au 30-05-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°3c</mark>: mai</p>
            </div>
            <div class="caldr1-1">
              <p>Du 13-08-2023 <br/> au 15-08-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°6c</mark>:  août</p>
            </div>

            <div class="caldr1-2">
              <p>Du 25-07-2023 <br/> au 27-07-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°5c</mark>: juillet</p>
            </div>
            <div class="caldr1-1">
              <p>Du 29-10-2023 <br/> au 01-11-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°8c</mark>:octobre</p>
            </div>
            <div class="caldr1-2">
              <p>Du 26-09-2023 <br/> au 28-09-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°7c</mark>:septbre</p>
            </div>
          </div>
          <div class="caldr2">
            <div class="cld">
              <p class="cl">Résumé de la formation:</p>
            </div>
            <p>
              Le chef de service de sécurité incendie a pour missions : le management du service de sécurité, le conseil du chef d'établissement en matière de sécurité incendie,
               l'assistance à personnes au sein des établissements où il exerce et le suivi des obligations de contrôle et d'entretien (tenue des registres et de divers documents
                administratifs concourant à ce services). Des épreuves d'évaluation sont prévues dans le cadre de l'arrêté du 2 mai 2005.
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
                    La formation SSIAP 3 se déroule sous forme de cours et d'exercices pratiques, d'exercices d'application des notions étudiées. Le programme est conforme à l'arrêté du 2 mai 2005

                    <br>
                    <br/>
                    <strong>Durée</strong><br/>223 heures (examen inclus)<br>Délai moyen d'accès : 3 semaines sous réserve de l'obtention de tous les documents.
                    

                    <br/>
                    <strong>Équivalence / Suivi de parcours</strong><br/>
                    Conformément à l'arrêté du 2 mai 2005, des équivalences et/ou réduction de parcours sont possibles, après étude de dossier et sur justificatifs.
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
                      <li>Comportement au feu</li>
                      <li>Mise en oeuvre des moyens d'extinction</li>

                      <strong>La sécurité incendie et les bâtiments</strong>
                      <li>Matériaux de construction</li>
                      <li>Etudes de plans</li>
                      <li>Outils d'analyse</li>

                      
                      
                      <strong>Réglementation incendie</strong>
                      <li>Organisation générale de la réglementation</li>
                      <li>Classement des bâtiments</li>
                      <li>Dispositions constructives et techniques</li>
                      <li>Moyens de secours</li>
                      <li>Visites</li>
                      <li>Notions relatives à l'accessibilité des personnes handicapées</li>
                     
                    
                      <strong>Gestion des risques</strong>
                      <li>Analyse des risques</li>
                      <li>Réalisation des travaux de sécurité</li>
                      <li>Documents administratifs</li>
                                        
                      <strong>Conseil au chef d'établissement</strong>
                      <li>Information de la hiérarchie</li>
                      <li>Veille réglementaire</li>

                      <strong>Correspondant des comissions de sécurité</strong>
                      <li>Commissions de sécurité</li>
                      <li>Registre de sécurité</li>

                      <strong>Management de l'équipe de sécurité</strong>
                      <li>Organiser le service</li>
                      <li>Exercer la fonction d'encadrement</li>
                      <li>Notions de droit du travail</li>
                      <li>Notions de droit civil et pénal</li>

                      <strong>Budget du service de sécurité</strong>
                      <li>Suivi budgétaire du service</li>
                      <li>Fonction achat</li>
                      <li>Fonction maintenance</li>

                      <strong>Exercices pratiques</strong>
                      <strong>Exercices d'application des notions étudiées</strong>
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
                    <strong>UNE ÉPREUVE ÉCRITE 1</strong>
                    Q.C.M. de 40 questions portant sur l'ensemble du programme.
                    <br>
                    <strong>UNE ÉPREUVE ÉCRITE 2</strong>
                    Elaboration d'une notice technique de sécurité lors d'un aménagement ou réaménagement de locaux portant sur un groupement d'établissements non isolés de
                     1ère ou 2ème catégorie. Le rendu portera sur : une présentation générale du projet, la consistance des travaux, l'incidences administratives et techniques 
                     vis-à-vis de la commission de sécurité, la notice descriptive proprement dite comportant : l'incidence éventuelle sur le classement initial, la nature des 
                     aménagements et matériaux utilisés, les renseignements concernant les dégagements, les renseignements relatifs quant aux nouveaux équipements ou installations
                      (SSI, désenfumage, compartimentage, locaux à risques,...)
                    <br>
                    <strong>UNE ÉPREUVE ORALE</strong>
                    Après un temps de préparation de 15 minutes, les 2 chefs de service sécurité, sous couvert du président, interrogent le candidat, à partir de thèmes portant 
                    sur la pratique quotidienne de la fonction de chef de service sécurité. Le président de jury peut être amené à poser une ou plusieurs questions également.
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
                    Le candidat sera certifié s'il obtient au moins une moyenne de 12 sur 20 (sans note inférieure à 8) aux épreuves écrites et s'il est évalué apte à l'épreuve 
                    orale. Pour les épreuves écrites, la moyenne inférieure à 12 entraîne l'ajournement du candidat. Le candidat conserve pendant un an après l'examen initial le 
                    bénéfice de l'aptitude à l'épreuve orale. Le candidat peut pendant cette période repasser la ou les épreuves sans suivre de nouveau la formation. Dans ce cas, 
                    le candidat doit obtenir une note supérieure ou égale à 10, quelle que soit la moyenne obtenue auparavant, à l'épreuve repassée (ou aux épreuves repassées). 
                    Après cette période, le candidat doit suivre une formation complète avant de se représenter à un examen. L'examen permet l'obtention du diplôme SSIAP 3 à 
                    recycler tous les 3 ans avant la date de fin de validité.
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
              <h2 class="title">Reservation pour SSIAP-3</h2>
              <form method="POST" action="">
                  <div class="row row-space">
                      <div class="col-2">
                        <label class="label">civilité</label>
                        <select
                           class="form-select form-select-lg mb-3"
                           aria-label=".form-select-lg example" name="cv_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
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
                                 name="dt_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required
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
                          <input class="input--style-4" type="text" name="nom_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                           <label class="label">Prenom</label>
                           <input class="input--style-4" type="text" name="prenom_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                              <label class="label">Ville</label>
                              <input class="input--style-4" type="text" name="ville_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                      <div class="col-2">
                         <div class="input-group">
                             <label class="label">Addraise</label>
                             <input class="input--style-4" type="text" name="adr_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                            <label class="label">Email</label>
                            <div class="input-group has-validation">
                               <input type="text" class="input--style-4" name="mail_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                               <div class="invalid-tooltip">
                                   Please choose a unique and valid username.
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-2">
                          <div class="input-group">
                              <label class="label">téléphone</label>
                              <input class="input--style-4" type="text" name="phone_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                          </div>
                      </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Sélectionnez une session</label>
                      <select
                         class="form-select form-select-lg mb-3"
                         aria-label=".form-select-lg example" name="sean_c" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                         <option value="" selected hidden>Aucun</option>
                         <option value="N°1c">N°1c : Mars</option>
                         <option value="N°2c">N°2c : Avril</option> 
                         <option value="N°3c">N°3c : Mai</option> 
                         <option value="N°4c">N°4c : Juin</option> 
                         <option value="N°5c">N°5c : Juillet</option> 
                         <option value="N°6c">N°6c : Août</option> 
                         <option value="N°7c">N°7c : Septembre</option> 
                         <option value="N°8c">N°8c : octobre</option> 
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
