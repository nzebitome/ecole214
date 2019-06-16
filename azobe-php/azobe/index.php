<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="fr">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Asso Gabon || Dashboard</title>
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="stylesheet" href="assets/css/main.cba69814a806ecc7945a.css">
  <link href="main.cba69814a806ecc7945a.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/master.css">
  <style media="screen">
    .app-header-left{
      display: none !important;
    }
  </style>
</head>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

    <?php
    include 'header.php';
     ?>
    <!-- Contenu principal  -->
    <div class="app-main">

      <!-- fin menu gauche -->
      <div class="app-main__outer">
        <div class="app-main__inner">

          <div class="tabs-animation">

            <!-- menu card  -->
            <div class="home main-card card">
              <div class="card-body">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xl-12 text-center">

                      <!-- le nom de l'utilisateur s'affiche a la place de Antonin -->

                      <h1>Bonjour monsieur Antonin. <br> Que souhaitez-vous faire ?</h1>

                      <!-- boutons d'interactions -->
                      <div class="row appelAction justify-content-center mb-5">
                        <div class="d-inline-block dropdown action-boutons">

                          <!-- boutons de consultation -->
                          <!-- bouton -->
                          <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="dropdown-toggle mb-2 mr-2 btn-icon btn-pill btn btn-primary">
                            <span class="btn-icon-wrapper opacity-7">
                              <i class="pe-7s-note2"></i>
                            </span>
                            CONSULTER
                          </button>
                          <!-- contenu du bouton consulter -->
                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                              <li class="nav-item">
                                <a href="membres.php" class="nav-link">
                                  <i class="nav-link-icon lnr-users font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Membres
                                  </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="structures.php" class="nav-link">
                                  <i class="nav-link-icon lnr-apartment font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Structures
                                  </span>
                                </a>
                              </li>

                              <li class="nav-item">
                                <a href="evenements.php" class="nav-link">
                                  <i class="nav-link-icon lnr-inbox font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Evénements
                                  </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="projets.php" class="nav-link">
                                  <i class="nav-link-icon lnr-book font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Projets
                                  </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="bibliotheque.php" class="nav-link">
                                  <i class="nav-link-icon lnr-book font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Bibliothèque
                                  </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="statistiques.php" class="nav-link">
                                  <i class="nav-link-icon lnr-pie-chart font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Statistiques
                                  </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- boutons de publication -->
                        <div class="d-inline-block dropdown action-boutons">
                          <!-- bouton -->
                          <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="dropdown-toggle mb-2 mr-2 btn-icon btn-pill btn btn-secondary">
                            <span class="btn-icon-wrapper opacity-7">
                              <i class="pe-7s-back-2 icones"></i>
                            </span>
                            PUBLIER
                          </button>
                          <!-- contenu du bouton publication -->
                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-center">
                            <ul class="nav flex-column">
                              <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#editorial">
                                  <i class="nav-link-icon lnr-book font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Edito
                                  </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#article">
                                  <i class="nav-link-icon lnr-inbox font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Article
                                  </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#appel-projet">
                                  <i class="nav-link-icon lnr-book font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Appel à projet
                                  </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#evenement">
                                  <i class="nav-link-icon lnr-book font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Evènement
                                  </span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="#" data-toggle="modal" data-target="#ressource" class="nav-link">
                                  <i class="nav-link-icon lnr-book font-weight-bold"></i>
                                  <span style="font-size: 1.1em;">
                                    Ressource
                                  </span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <!-- section des donnees affichees sur la page d'accueil -->

                      <div class="tabs-animation">
                        <div class="mb-3">
                          <div class="no-gutters row home-info">
                            <!-- bloc 1 -->
                            <div class="col-sm-4 col-md-3 col-xl-3">
                              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                  <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                  <i class="pe-7s-user text-dark opacity-8"></i>
                                </div>
                                <div class="widget-chart-content">
                                  <div class="widget-subheading">Membres</div>
                                  <div class="widget-numbers">3000</div>
                                  <div class="widget-description opacity-8 text-focus">
                                    <div class="d-inline pr-1">
                                      Evolution :
                                      <span class="pl-1 text-warning">
                                        <i class="fa fa-angle-up"></i>
                                        <span class="pl-1">30%</span>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="divider m-0 d-md-none d-sm-block"></div>
                            </div>
                            <!-- bloc 2 -->
                            <div class="col-sm-4 col-md-3 col-xl-3">
                              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                  <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                  <i class="lnr-graduation-hat text-white"></i>
                                </div>
                                <div class="widget-chart-content">
                                  <div class="widget-subheading">Structures enregistrées</div>
                                  <div class="widget-numbers"><span>627</span></div>
                                  <div class="widget-description opacity-8">
                                    Evolution :
                                    <span class="pl-1 text-danger">
                                      <i class="fa fa-angle-up"></i>
                                      <span class="pl-1">10%</span>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="divider m-0 d-md-none d-sm-block"></div>
                            </div>
                            <!-- bloc 3 -->
                            <div class="col-sm-4 col-md-3 col-xl-3">
                              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                  <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                  <i class="lnr-calendar-full text-white"></i>
                                </div>
                                <div class="widget-chart-content">
                                  <div class="widget-subheading">Soumissions en attente</div>
                                  <div class="widget-numbers"><span>267</span></div>
                                  <div class="widget-description text-focus">
                                    Evolution :
                                    <span class="text-success pl-1">
                                      <i class="fa fa-angle-up"></i>
                                      <span class="pl-1">10%</span>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- bloc 4 -->
                            <div class="col-sm-4 col-md-3 col-xl-3">
                              <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                <div class="icon-wrapper rounded-circle">
                                  <div class="icon-wrapper-bg opacity-9 bg-primary"></div>
                                  <i class="pe-7s-mouse text-white"></i>
                                </div>
                                <div class="widget-chart-content">
                                  <div class="widget-subheading">Taux d'Interactions</div>
                                  <div class="widget-numbers"><span>60%</span></div>
                                  <div class="widget-description text-focus">
                                    Evolution :
                                    <span class="text-primary pl-1">
                                      <i class="fa fa-angle-up"></i>
                                      <span class="pl-1">4%</span>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- icones menus  -->

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section de tous les contenus de popup -->
  <div class="all-popup-container">
    <!-- code du pop editorial -->

    <!-- popup Edito -->
    <div class="modal fade" id="editorial" tabindex="-1" role="dialog" aria-labelledby="editorialLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editorialLabel" style="font-size: 30px; font-weight:bold;
        ">PUBLIER UN EDITO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="position-relative form-group"><label for="exampleEmail"
                  style="font-size: 20px;">Titre</label><input name="title" id="title" placeholder="Entrer un titre"
                  type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label style="font-size: 20px;"
                  for="exampleText">Contenu</label>
                <textarea name="text" id="exampleText" placeholder="Saisir votre contenu" class="form-control"
                  rows="5"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button style="margin-top: 5px;" type="button" class="btn btn-secondary"
              data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary">Publier</button>
          </div>
        </div>
      </div>
    </div>
    <!-- popup Edito -->
    <div class="modal fade" id="article" tabindex="-1" role="dialog" aria-labelledby="editorialLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editorialLabel" style="font-size: 30px; font-weight:bold;
        ">PUBLIER UN ARTICLE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="position-relative form-group"><label for="exampleEmail"
                  style="font-size: 20px;">Titre</label><input name="title" id="title" placeholder="Entrer un titre"
                  type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label style="font-size: 20px;"
                  for="exampleText">Contenu</label>
                <textarea name="text" id="exampleText" placeholder="Saisir votre contenu" class="form-control"
                  rows="5"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button style="margin-top: 5px;" type="button" class="btn btn-secondary"
              data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary">Publier</button>
          </div>
        </div>
      </div>
    </div>

    <!--Ressources  -->

    <div class="modal fade " id="ressource" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; font-weight:bold;
        ">PUBLIER UNE RESSOURCE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Titre du
                  document</label><input name="title" id="title" placeholder="Saisir le titre du document" type="text"
                  class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleSelect"
                  style="font-size: 20px;">Catégorie</label>
                <select name="select" id="exampleSelect" class="form-control">
                  <option>Education</option>
                  <option>Société</option>
                  <option>Environnement</option>
                  <option>Santé</option>
                  <option>Technologie</option>
                </select>
              </div>
              <div class="position-relative form-group"><label for="exampleText"
                  style="font-size: 20px;">Description</label><textarea name="text" id="exampleText"
                  class="form-control"></textarea>
              </div>
              <div class="position-relative form-group"><label for="exampleFile">Inserer une documentation</label><input
                  name="file" id="exampleFile" type="file" class="form-control-file">

              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button style="margin-top: 5px;" type="button" class="btn btn-secondary"
              data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary">Publier</button>
          </div>
        </div>
      </div>
    </div>

    <!-- appel projet-->
    <!-- Appel à projet-->
    <div class="modal fade" id="appel-projet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; font-weight:bold;
        ">PUBLIER UN PROJET</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="position-relative form-group"><label for="exampleEmail"
                  style="font-size: 20px;">Titre</label><input name="title" id="title" placeholder="Entrer un titre"
                  type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleText"
                  style="font-size: 20px;">Description</label><textarea name="text" id="exampleText"
                  class="form-control"></textarea>
              </div>
              <div class="position-relative form-group"><label for="exampleEmail"
                  style="font-size: 20px;">Lien</label><input name="title" id="title"
                  placeholder="Saisir le lien du document" type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleFile" class="marg">Inserer une
                  documentation</label><input name="file" id="exampleFile" type="file" class="form-control-file">

              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary">Publier</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- événements -->
  <!-- publier un événement -->

  <div style="margin: auto;" class="modal fade " id="evenement" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; font-weight:bold;
        ">PUBLIER UN EVENEMENT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="">
            <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Nom de
                l'événement</label><input name="title" id="title" type="text" class="form-control">
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="exampleEmail55">Date de l'événement</label><input
                    name="date" id="eventDate" type="email" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="position-relative form-group"><label for="examplePassword22">Heure</label><input name="hour"
                    id="eventHour" type="time" class="form-control"></div>
              </div>
            </div>
            <div class="position-relative form-group"><label for="exampleEmail"
                style="font-size: 20px;">Lieu</label><input name="title" id="title" type="text" class="form-control">
            </div>

            <div class="position-relative form-group"><label for="exampleText"
                style="font-size: 20px;">Description</label><textarea name="text" id="exampleText"
                class="form-control"></textarea>
            </div>
            <div class="position-relative form-group"><label for="exampleFile">Inserer une documentation</label><input
                name="file" id="exampleFile" type="file" class="form-control-file">

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="submit" class="mt-1 btn btn-primary">Publier</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="./assets/scripts/main.cba69814a806ecc7945a.js"></script>
</body>

</html>
