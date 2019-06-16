<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Membres</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="./main.cba69814a806ecc7945a.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.cba69814a806ecc7945a.css">
  <link rel="stylesheet" href="assets/css/master.css">

</head>



<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <?php
    include 'header.php';
     ?>
    <!-- Contenu principal  -->
    <div class="app-main">
      <div class="app-main__outer">
        <div class="app-main__inner">
          <div class="app-page-title">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="nav-link-icon lnr-users font-weight-bold text-info"></i>
                  </i>
                </div>
                <div style="font-size: 1.2em;">Membres
                  <div class="page-title-subheading" style="font-size: 0.8em; color: black">Veuillez trouver ci-dessous
                    la
                    liste de tous les membres inscrits sur la plateforme.
                  </div>
                </div>
              </div>

              <div class="page-title-actions">

                <div class="d-inline-block dropdown">
                  <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-pill btn-success">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus"></i>
                    </span>
                    Ajouter
                  </button>

                  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-pill btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="pe-7s-clock fa-w-20"> </i>
                    </span>
                    Membres
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                      <!--Liste de tous levenements à afficher------------------>
                      <li class="nav-item">
                        <a href="evenements.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-news-paper font-weight-bold"> </i>
                          <span>
                            Actifs
                          </span>
                          <div class="ml-auto badge badge-pill bg-primary text-white">215</div>
                        </a>
                      </li>
                      <!----------------------------------------------------------------->
                      <!--Liste des evenements non valides------------------------------------>
                      <li class="nav-item">
                        <a href="evenements.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-close-circle font-weight-bold"> </i>
                          <span>
                            <span class="text-danger">Inactifs</span>
                          </span>
                          <div class="ml-auto badge badge-pill bg-danger text-white">35</div>
                        </a>
                      </li>
                      <!--------------------------------------------------------------->
                    </ul>
                  </div>
                </div>
              </div>

            </div> <br>
            <div class="mb-3 card">

              <div class="no-gutters row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                      <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                      <i class="pe-7s-user text-dark opacity-8"></i>
                    </div>
                    <div class="widget-chart-content">
                      <div class="widget-subheading">Membres Inscrits</div>
                      <div class="widget-numbers">250</div>
                      <div class="widget-description opacity-8 text-focus">
                        <div class="d-inline pr-1">
                          Evolution :
                          <span class="pl-1 text-success">
                            <i class="fa fa-angle-up"></i>
                            <span class="pl-1">55%</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                      <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                      <i class="lnr-graduation-hat text-white"></i>
                    </div>
                    <div class="widget-chart-content">
                      <div class="widget-subheading">Membres actifs</div>
                      <div class="widget-numbers"><span>215</span></div>
                      <div class="widget-description opacity-8">
                        Evolution :
                        <span class="pl-1 text-danger">
                          <i class="fa fa-angle-down"></i>
                          <span class="pl-1">15%</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                    <div class="icon-wrapper rounded-circle">
                      <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                      <i class="lnr-apartment text-white"></i>
                    </div>
                    <div class="widget-chart-content">
                      <div class="widget-subheading">Appels à projets</div>
                      <div class="widget-numbers text-success"><span>75</span></div>
                      <div class="widget-description text-focus">
                        Interaction avec :
                        <span class="text-success pl-1">
                          <i class="fa fa-angle-up"></i>
                          <span class="pl-1">24</span>
                          Structures
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





          <div class="main-card mb-3 card">
            <div class="card-header">
              <br>
              <div class="input-group" style="width: 22%; margin-left: 77%">
                <div class="input-group-prepend">
                  <div class="input-group-text bg-success">
                    <i class="fa fa-search text-white"></i>
                  </div>
                </div>
                <input placeholder="Rechercher un utilisateur" type="text" class="form-control">
              </div>
              <br> <br>
            </div> <br>
            <div class="table-responsive">
              <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                <thead>
                  <tr>

                    <th class="text-center">Avatar</th>
                    <th class="text-center">Noms</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Contact</th>
                    <th class="text-center">Statut</th>
                    <th class="text-center">Voir</th>
                    <th class="text-center">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td class="text-center" style="width: 80px;"><img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt=""></td>
                    <td class="text-center"><a href="javascript:void(0)">Juste FADIKPE</a></td>
                    <td class="text-center"><a href="javascript:void(0)">issiackjuste@gmail.com</a>
                    </td>

                    <td class="text-center">+24102454125</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-success">Actif</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>

                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;">
                      <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Yvan NZASSI</a></td>
                    <td class="text-center"><a href="javascript:void(0)">yvan@gmail.com</a></td>

                    <td class="text-center">+24107458956</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-warning">Inactif</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;">
                      <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Zoe LEBANG</a></td>
                    <td class="text-center"><a href="javascript:void(0)">zoe@gmail.com</a></td>

                    <td class="text-center">+24104712536</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-success">Actif</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;">
                      <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Charline MAMBOUNDOU</a>
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">charline@gmail.com</a></td>

                    <td class="text-center">+24106785348</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-warning" style="color:black">Inactif
                      </div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;">
                      <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Lauryn MILAGUE</a></td>
                    <td class="text-center"><a href="javascript:void(0)">lauryn@gmail.com</a></td>

                    <td class="text-center">+24104712536</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-success">Actif</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;">
                      <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Diane IDIATA</a>
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">diane@gmail.com</a></td>

                    <td class="text-center">+24106785348</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-warning" style="color:black">Inactif
                      </div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;"><img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt=""></td>
                    <td class="text-center"><a href="javascript:void(0)">Loic OLIMBO</a></td>
                    <td class="text-center"><a href="javascript:void(0)">loic@gmail.com</a>
                    </td>

                    <td class="text-center">+24102454125</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-success">Actif</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>

                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;">
                      <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Liz TCHIBINDA</a></td>
                    <td class="text-center"><a href="javascript:void(0)">liz@gmail.com</a></td>

                    <td class="text-center">+24107458956</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-warning">Inactif</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;">
                      <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Jean Eude NGOUADONO</a>
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">jean@gmail.com</a></td>

                    <td class="text-center">+24104712536</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-success">Actif</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>

                    <td class="text-center" style="width: 80px;">
                      <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">Daniel Dorcas</a>
                    </td>
                    <td class="text-center"><a href="javascript:void(0)">yvan@gmail.com</a></td>

                    <td class="text-center">+24106785348</td>
                    <td class="text-center">
                      <div class="badge badge-pill bg-warning" style="color:black">Inactif
                      </div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="far fa-eye text-primary"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <center>
                <nav class="text-center" aria-label="Page navigation example" style="margin-top: 30px;">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </center>
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>
  </div>
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-right" style="padding: 1rem 1.5rem;">
          <div class="row">
            <div class="col-1" style="font-size: 2.3rem; color: #b81f44;">
              <i class="lnr-trash"> </i>
            </div>
            <div class="col-11">
              <h4 style="margin-bottom: 2rem; text-align: left; margin-top: 6px; margin-left: 1rem;">Êtes-vous sûr de
                vouloir supprimer cet élement ?</h4>
            </div>
          </div>
          <div style="padding-right: 1.5rem;">
            <button style="margin-top: 5px; padding: .4rem 2rem;" type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
            <button type="submit" class="mt-1 btn btn-danger" style="padding: .4rem 2rem;">Suprimer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="modal fade " id="evenement" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; font-weight:bold; margin-left: 10px;
  ">PUBLIER UN ÉVÈNEMENT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="">
            <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Nom
                de
                l'événement</label><input name="title" id="title" placeholder="Entrer le nom de l'événement" type="text" class="form-control">
            </div>
            <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Date de
                l'événement</label><input name="date" id="title" type="date" class="form-control">
            </div>
            <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Heure</label><input name="time" id="title" type="time" class="form-control">
            </div>
            <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Lieu</label><input name="title" id="title" type="text" class="form-control">
            </div>

            <div class="position-relative form-group"><label for="exampleText" style="font-size: 20px;">Description</label><textarea name="text" id="exampleText" class="form-control" rows="10"></textarea>
            </div>
            <div class="position-relative form-group"><label for="exampleFile">Choisir un
                fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Fermer</button>
          <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
        </div>
      </div>
    </div>
  </div>

  <div class="all-popup-container">
    <!-- code du pop editorial -->

    <!-- popup Edito -->
    <div class="modal fade" id="editorial" tabindex="-1" role="dialog" aria-labelledby="editorialLabel" aria-hidden="true">
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
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Titre</label><input style="padding: 30px;" name="title" id="title" placeholder="Entrer un titre" type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label style="font-size: 20px;" for="exampleText">Contenu</label>
                <textarea name="text" id="exampleText" placeholder="Saisir votre contenu" class="form-control" rows="9"></textarea>
              </div>
              <div class="position-relative form-group"><label for="exampleFile">Choisir un
                  fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button style="margin-top: 5px;" type="button" class="btn btn-pill btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
          </div>
        </div>
      </div>
    </div>
    <!-- popup Edito -->
    <div class="modal fade" id="article" tabindex="-1" role="dialog" aria-labelledby="editorialLabel" aria-hidden="true">
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
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Titre</label><input style="padding: 30px;" name="title" id="title" placeholder="Entrer un titre" type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label style="font-size: 20px;" for="exampleText">Contenu</label>
                <textarea name="text" id="exampleText" placeholder="Saisir votre contenu" class="form-control" rows="9"></textarea>
              </div>
              <div class="position-relative form-group"><label for="exampleFile">Choisir un
                  fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
          </div>
        </div>
      </div>
    </div>

    <!--Ressources  -->

    <div class="modal fade " id="ressource" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                  document</label><input name="title" id="title" placeholder="Saisir le titre du document" type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleSelect" style="font-size: 20px;">Catégorie</label>
                <select name="select" id="exampleSelect" class="form-control">
                  <option>Education</option>
                  <option>Société</option>
                  <option>Environnement</option>
                  <option>Santé</option>
                  <option>Technologie</option>
                </select>
              </div>
              <div class="position-relative form-group"><label for="exampleText" style="font-size: 20px;">Description</label><textarea name="text" id="exampleText" class="form-control" rows="10"></textarea>
              </div>
              <div class="position-relative form-group"><label for="exampleFile">Choisir un
                  fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
          </div>
        </div>
      </div>
    </div>

    <!-- appel projet-->
    <!-- Appel à projet-->
    <div class="modal fade" id="appel-projet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; font-weight:bold;margin-top: 30px;
      ">PUBLIER UN PROJET</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Titre</label><input name="title" id="title" placeholder="Entrer un titre" type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleText" style="font-size: 20px;">Description</label><textarea name="text" id="exampleText" class="form-control"></textarea>
              </div>
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Lien</label><input name="title" id="title" placeholder="Saisir le lien du document" type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleFile" class="marg">Choisir un
                  fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">

              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
          </div>
        </div>
      </div>
    </div>
    <!-- événements -->
    <div style="margin: auto;" class="modal fade " id="evenement" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; font-weight:bold; margin-left: 10px;
      ">PUBLIER UN EVENEMENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Nom de
                  l'événement</label><input name="title" id="title" placeholder="Entrer le nom de l'événement" type="text" class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Date de
                  l'événement</label><input name="date" id="title" type="date" class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Heure</label><input name="time" id="title" type="time" class="form-control">
              </div>
              <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Lieu</label><input name="title" id="title" type="text" class="form-control">
              </div>

              <div class="position-relative form-group"><label for="exampleText" style="font-size: 20px;">Description</label><textarea name="text" id="exampleText" class="form-control" rows="10"></textarea>
              </div>
              <div class="position-relative form-group"><label for="exampleFile">Choisir un
                  fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">

              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Fermer</button>
            <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="./assets/scripts/main.cba69814a806ecc7945a.js"></script>

</body>




</html>
