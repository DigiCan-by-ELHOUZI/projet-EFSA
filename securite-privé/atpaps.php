<?php
  require '../bdd/inscription.php';

  if(isset($_POST["submit"])){
    $CVV=$_POST['cv'];
   $Dat=$_POST['dt'];
   $Nome=$_POST['nom'];
   $Prn=$_POST['prenom'];
   $Vl=$_POST['ville'];
   $Adrs=$_POST['adr'];
   $Mll=$_POST['mail'];
   $Tf=$_POST['phone'];
   $seance=$_POST['sean'];

   

  
   $req="INSERT INTO inscriptiontfp(cv,dt,nom,prenom,ville,adr,mail,phone,sean) values ('$CVV',' $Dat','$Nome','$Prn',' $Vl',' $Adrs','$Mll','$Tf','$seance')";
   $res=mysqli_query($conn,$req);
   
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>TFP APS | EFSA</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/A1.png" rel="icon" />
    <link href="../assets/img/A2.png" rel="apple-touch-icon" />

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
                <li><a href="securite-privé.html">sécurité privée</a></li>
                <li><a href="../securite-incendie/securite-incendie.html">sécurité incendie</a></li>
                <li><a href="../audit/audit.php">Audit</a></li>
                <li><a href="https://daze.youcan.shop/">informatique et burautique</a></li>
              </ul>
            </li>
            <li><a href="#">Nos certifications</a></li>
            <li><a href="#">Calendrier</a></li>

            <li><a href="../contact.php">Contact</a></li>
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
              <li><a href="securite-privé.html">Retour</a></li>
              <li>TFP APS</li>
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
              Formation - TFP-APS - Titre à Finalité Professionnelle d'agent de
              prévention et de sécurité
            </h2>
          </div>
          <div class="carre">
            <a class="afp"><img src="../assets/img/K1.jpg" alt="" title="" /></a>
            <p class="a1">
              La formation TFP-APS a pour objectif d'acquérir les connaissances
              et compétences réglementaires et techniques d'agent de prévention
              et de sécurité, de mettre en oeuvre les bonnes pratiques
              professionnelles.
            </p>
            <div class="carre1">
              <a class="btp1" href="#a"> Inscription </a>
            </div>
            <div class="carre2">
              <a class="btp2" href="../assets/formulaire_d_inscription_word.docx"> Version Papier </a>
            </div>
            <div class="carre3">
              <p class="p1">
                Seulement à 1320€ <br /><span class="p1-1">182h</span>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
          <div class="cldr">
            <p>Les prochaines formations TFP:</p>
          </div>
          <div class="caldr1">
            <div class="caldr1-1">
              <p>Du 1-04-2023 <br/> au 4-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°2t</mark>: avril</p>
            </div>
            <div class="caldr1-2">
              <p>Du 10-03-2023 <br/> au 14-03-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°1t</mark>: Mars</p>
            </div>
            <div class="caldr1-1">
              <p>Du 15-06-2023 <br/> au 18-06-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°4t</mark>: juin</p>
            </div>
            <div class="caldr1-2">
              <p>Du 28-05-2023 <br/> au 02-06-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°3t</mark>: mai</p>
            </div>
            <div class="caldr1-1">
              <p>Du 05-08-2023 <br/> au 09-08-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°6t</mark>:  août</p>
            </div>

            <div class="caldr1-2">
              <p>Du 18-07-2023 <br/> au 21-07-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°5t</mark>: juillet</p>
            </div>
            <div class="caldr1-1">
              <p>Du 20-03-2023 <br/> au 25-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°8t</mark>:octobre</p>
            </div>
            <div class="caldr1-2">
              <p>Du 20-03-2023 <br/> au 25-04-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°7t</mark>:septbre</p>
            </div>
          </div>
          <div class="caldr2">
            <div class="cld">
              <p class="cl">Résumé de la formation:</p>
            </div>
            <p>
              Le TFP APS (Titre de Formation Professionnelle d'Agent de
              Prévention et de Sécurité) est un titre donnant l'opportunité de
              devenir agent de prévention et de sécurité. La formation a pour
              but d'acquérir les connaissances théoriques etpratiques
              nécessaires à l'emploi et à la fonction d'agent de prévention. Ce
              titre vous permettra d'obtenir une carte professionnelle
              dématérialisée qui vous autorisera à travailler en tant que
              professionnel de la sécurité privée autant dans les lieux publics
              que privés. L'agent de sécurité a pour mission de surveiller les
              sites afin d'assurer la sécurité des personnes et des biens, il
              doit faire appliquer les consignes de sécurité et peut notamment
              réaliser les premiers secours en cas d'urgence. L'agent de
              sécurité doit respecter le cadre déontologique de la profession.
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
                    La formation TFP-APS se déroule en alternance en exposé
                    participatif, en exercices pratiques ou mises en situations
                    professionnelles. Le matériel utilisé est conforme aux
                    différentes exigences réglementaires. Chaque UV fait l'objet
                    d'une évaluation formative quelle soit théorique ou pratique
                    afin de mesurer et d'accompagner le stagiaire dans sa
                    progression afin d'atteindre les objectifs de la formation.
                    Le programme est conforme à l'arrêté du 27 juin 2017 et au
                    référentiel de l'ADEF.
                    <br/>
                    <strong>Durée</strong><br/>
                    182 h (examen inclus) Les stagiaires peuvent bénéficier
                    d'une réduction du temps de formation en disposant du tronc
                    commun. Délai moyen d'accès : 1 mois sous réserve de
                    l'obtention de tous les documents.
                    <br/>
                    <strong>Équivalence / Suivi de parcours</strong><br/>
                    Les candidat s souhaitant obtenir la qualification de
                    sécurité incendie peuvent poursuivre avec la formation SSIAP
                    1. Pas d'équivalence.
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
                      <li>Module Secourisme (14h)</li>
                      <li>Module environnement juridique (16h)</li>
                      <li>Module gestion des conflits (5h)</li>
                      <li>Module stratégique (6h)</li>
                      <li>Module prévention des risques d'incendie (7h)</li>
                      <li>
                        Module sensibilisation aux risques terroristes (13h)
                      </li>
                      <li>Module professionnel (45h)</li>
                      <li>
                        Module Palpation de sécurité et inspection des bagages
                        (7h)
                      </li>
                      <li>
                        Module surveillance par moyens électroniques de sécurité
                        (7h)
                      </li>
                      <li>Module gestion des risques (11h)</li>
                      <li>Module évènementiel spécifique (7h)</li>
                      <li>
                        Module gestion des situations conflictuelles dégradées
                        (7h)
                      </li>
                      <li>Module industriel spécifique (7h)</li>
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
                    <ul>
                      <li>
                        Mise en situation ou exercices pratiques (PC de
                        sécurité,rondes, interventions...)
                      </li>
                      <li>QCM d'évaluation des connaissances acquises</li>
                      <li>
                        Formation qualifiante validée par un examen final devant
                        le jury
                      </li>
                    </ul>
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
                    A l'issue du stage, le Diplôme TFP APS sera délivré au
                    candidat qui aura participé à l'ensemble de la formation et
                    fait l'objet d'une évaluation favorable. Des attestations de
                    suivis et de réussites seront également délivrées.<br /><br />
                    Le stagiaire pourra ainsi obtenir la Carte Professionnelle
                    dématérialisée valide pour une durée 5 ans. Pour le
                    renouvellement de cette autorisation, il faut suivre la
                    formation MAC APS.
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
              <h2 class="title">Reservation pour TFP-APS</h2>
              <form method="POST" action="">
                  <div class="row row-space">
                      <div class="col-2">
                        <label class="label">civilité</label>
                        <select
                           class="form-select form-select-lg mb-3"
                           aria-label=".form-select-lg example" name="cv" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
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
                                name="dt" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required
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
                          <input class="input--style-4" type="text" name="nom" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                           <label class="label">Prenom</label>
                           <input class="input--style-4" type="text" name="prenom" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                              <label class="label">Ville</label>
                              <input class="input--style-4" type="text" name="ville" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                      <div class="col-2">
                         <div class="input-group">
                             <label class="label">Addraise</label>
                             <input class="input--style-4" type="text" name="adr" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                            <label class="label">Email</label>
                            <div class="input-group has-validation">
                               <input type="text" class="input--style-4" name="mail" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                               <div class="invalid-tooltip">
                                   Please choose a unique and valid username.
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-2">
                          <div class="input-group">
                              <label class="label">téléphone</label>
                              <input class="input--style-4" type="text" name="phone" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                          </div>
                      </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Sélectionnez une session</label>
                      <select
                         class="form-select form-select-lg mb-3" name="sean"
                         aria-label=".form-select-lg example"  id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                         <option value="" selected hidden>Aucun</option>
                         <option value="N°1t">N°1t : Mars</option>
                         <option value="N°2t">N°2t : Avril</option> 
                         <option value="N°3t">N°3t : Mai</option> 
                         <option value="N°4t">N°4t : Juin</option> 
                         <option value="N°5t">N°5t : Juillet</option> 
                         <option value="N°6t">N°6t : Août</option> 
                         <option value="N°7t">N°7t : Septembre</option> 
                         <option value="N°8t">N°8t : octobre</option> 
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
                  <li><a class="get-a-quote" href="../contact.php">Contact</a></li>
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
              <li><a href="../index.html">Accueil</a></li>
              <li><a href="#">Actualités</a></li>
              <li><a href="atpaps.php">Nos formation</a></li>
              <li><a href="#">Nos certifications</a></li>
              <li><a href="#">Calendrier</a></li>
              <li><a href="#">Connexion</a></li>
              <li><a href="#">Politique de confidentialité</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Nos formations</h4>
            <ul>
              <li><a href="securite-privé.html">Sécurité Privée</a></li>
              <li><a href="../securite-incendie/securite-incendie.html">Sécurité Incendie</a></li>
              <li><a href="https://daze.youcan.shop/">informatique & burautique</a></li>
              <li><a href="../audit/audit.php">Audit</a></li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4>Contact</h4>
            <p>
              xxxxxxxxxxxx<br />
              <br /><br />
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