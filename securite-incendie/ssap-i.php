<?php
  require '../bdd/inscription.php';

  if(isset($_POST["submit"])){
   $CVVi=$_POST['cv_i'];
   $Dati=$_POST['dt_i'];
   $Nomei=$_POST['nom_i'];
   $Prni=$_POST['prenom_i'];
   $Vli=$_POST['ville_i'];
   $Adrsi=$_POST['adr_i'];
   $Mlli=$_POST['mail_i'];
   $Tfi=$_POST['phone_i'];
   $seancei=$_POST['sean_i'];

  
   $req="INSERT INTO ssap_i(cv_i,dt_i,nom_i,prenom_i,ville_i,adr_i,mail_i,phone_i,sean_i) values ('$CVVi',' $Dati','$Nomei','$Prni',' $Vli',' $Adrsi','$Mlli','$Tfi','$seancei')";
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
              <li>SSIAP-3 REC</li>
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
              Recyclage SSIAP 3 Chef de service
            </h2>
          </div>
          <div class="carre">
            <a class="afp"><img src="../assets/img/k2.png" alt="" title="" /></a>
            <p class="a1">
              La formation REC SSIAP 3 a pour objectif d'entretenir les connaissances théoriques et pratiques nécessaires à l'exercice de la fonction de chef des services de sécurité 
              incendie et d'assistance à personnes.
            </p>
            <div class="carre1">
              <a class="btp1" href="#a"> Inscription </a>
            </div>
            <div class="carre2">
              <a class="btp2" href="../securite-privé.html"> Version Papier </a>
            </div>
            <div class="carre3">
              <p class="p1">
                Seulement à 410€ <br /><span class="p1-1">21h</span>
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
              <p>Séance <mark>N°2i</mark>: avril</p>
            </div>
            <div class="caldr1-2">
              <p>Du 18-03-2023 <br/> au 20-03-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°1i</mark>: Mars</p>
            </div>
            <div class="caldr1-1">
              <p>Du 22-06-2023 <br/> au 24-06-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°4i</mark>: juin</p>
            </div>
            <div class="caldr1-2">
              <p>Du 28-05-2023 <br/> au 30-05-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°3i</mark>: mai</p>
            </div>
            <div class="caldr1-1">
              <p>Du 13-08-2023 <br/> au 15-08-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°6i</mark>:  août</p>
            </div>

            <div class="caldr1-2">
              <p>Du 25-07-2023 <br/> au 27-07-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance <mark>N°5i</mark>: juillet</p>
            </div>
            <div class="caldr1-1">
              <p>Du 29-10-2023 <br/> au 01-11-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°8i</mark>:octobre</p>
            </div>
            <div class="caldr1-2">
              <p>Du 26-09-2023 <br/> au 28-09-2023</p><br/>
              <div class="caldr1-2-1"></div>
              <p>Séance<mark>N°7i</mark>:septbre</p>
            </div>
          </div>
          <div class="caldr2">
            <div class="cld">
              <p class="cl">Résumé de la formation:</p>
            </div>
            <p>
              La formation recyclage SSIAP 3 (Diplôme de Chef de Services de Sécurité Incendie et d'Assistance à Personnes) a pour but de renforcer les connaissances théoriques et 
              pratiques nécessaires pour occuper la fonction de chef de service de sécurité incendie et d'assistance à personnes et d'échanger sur le retour d'expérience . Le chef de 
              service a pour mission le management du service de sécurité, de conseil au près du chef d'établissement en matière de sécurité incendie, l'assistance à personnes au sein 
              des établissements ou ils exercent le suivi des obligations de contrôle et d'entretien.

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
                    La formation REC SSIAP 3 se déroule sous forme d'exercices pratiques et d'enseignements théoriques. Le programme est conforme à l'arrêté du 2 mai 2005.
                    <br>
                    <br/>
                    <strong>Durée</strong><br/>21 heures<br/>
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
                      <strong>Evolution des textes réglementaires</strong> 
                      <li>Règlement de sécurité dans les ERP : dispositions générales, dispositions particulières et spéciales</li>
                      <li>Règlement de sécurité dans les IGH</li>
                      <li>Rappel des textes sur les moyens de secours</li>
                      <li>Rappel sur le code du travail</li>
                      <li>Rôle du chef de service de sécurité incendie en qualité de membre de jury aux examens SSIAP</li>
                      <li>Connaissance de l'arrêté du 2 mai 2005 modifié</li>

                      <strong>Les Codes Civil et Pénal</strong>
                      <li>La délégation de pouvoir et la délégation de signature</li>
                      <li>La responsabilité civile et responsabilité pénale</li>
                      <li>Le délit de mise en danger de la vie d'autrui</li>

                      <strong>Les contrats de maintenance des installations de sécurité</strong>
                      <li>Contextes d'obligations réglementaires</li>
                      <li>Aspects juridiques : les contrats avec obligation de moyens, les contrats avec obligation de résultat</li>
                      <li>Différents types de contrats : le contrat de types « prédictifs », le contrat de types « préventifs », le contrat de types « correctifs » ou « curatifs »</li>
                      <li>Normalisation</li>

                      <strong>Analyse d'un projet de construction et d'aménagement ou réaménagement dans l'existant</strong>
                      <li>Rappel de la méthode</li>
                      <li>Lecture de plan</li>


                      <strong>Identifier les situations de risques de déclenchements d'incendies et d'accidents corporels Assurer le suivi et le bon achèvement des travaux</strong>
                      <li>Evaluation du maintien du niveau de sécurité (protection des personnes et des biens)</li>
                      <li>Le document unique : évaluation des risques professionnels pour la sécurité des travailleurs (rappel)</li>
                      <li>Le plan de prévention (rappel)</li>
                      <li>Evaluation des risques de travaux par points chauds (rappel)</li>
                      
                      <strong>Evolution des textes réglementaires</strong>
                      <li>Moyens d'extinction incendie (internes et externes, entretien et vérifications)</li>
                      <li>Moyens d'alerte des secours</li>
                      <li>Dispositions visant à faciliter l'intervention des secours</li>
                      <li>Connaître et savoir exploiter un S.S.I</li>
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
                    QCM blanc<br/> 
                    La formation est validée si le candidat est présent à l'ensemble des séquences programmées.<br/>
                    Dans le cas de défaillance notoire, le centre de formation pourra proposer une remise à niveau.<br/>
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
              <h2 class="title">Reservation pour SSIAP-3 REC</h2>
              <form method="POST" action="">
                  <div class="row row-space">
                      <div class="col-2">
                        <label class="label">civilité</label>
                        <select
                           class="form-select form-select-lg mb-3"
                           aria-label=".form-select-lg example" name="cv_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
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
                                 name="dt_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required
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
                          <input class="input--style-4" type="text" name="nom_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="input-group">
                           <label class="label">Prenom</label>
                           <input class="input--style-4" type="text" name="prenom_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                        </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                              <label class="label">Ville</label>
                              <input class="input--style-4" type="text" name="ville_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                      <div class="col-2">
                         <div class="input-group">
                             <label class="label">Addraise</label>
                             <input class="input--style-4" type="text" name="adr_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                         </div>
                      </div>
                  </div>
                  <div class="row row-space">
                      <div class="col-2">
                         <div class="input-group">
                            <label class="label">Email</label>
                            <div class="input-group has-validation">
                               <input type="text" class="input--style-4" name="mail_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                               <div class="invalid-tooltip">
                                   Please choose a unique and valid username.
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-2">
                          <div class="input-group">
                              <label class="label">téléphone</label>
                              <input class="input--style-4" type="text" name="phone_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required/>
                          </div>
                      </div>
                  </div>

                  <div class="row row-space">
                    <div class="col-2">
                      <label class="label">Sélectionnez une session</label>
                      <select
                         class="form-select form-select-lg mb-3"
                         aria-label=".form-select-lg example" name="sean_i" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                         <option value="" selected hidden>Aucun</option>
                         <option value="N°1i">N°1i : Mars</option>
                         <option value="N°2i">N°2i : Avril</option> 
                         <option value="N°3i">N°3i : Mai</option> 
                         <option value="N°4i">N°4i : Juin</option> 
                         <option value="N°5i">N°5i : Juillet</option> 
                         <option value="N°6i">N°6i : Août</option> 
                         <option value="N°7i">N°7i : Septembre</option> 
                         <option value="N°8i">N°8i : octobre</option> 
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
