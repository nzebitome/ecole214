<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Asso Gabon || Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="stylesheet" href="assets/css/main.cba69814a806ecc7945a.css">
  <link href="main.cba69814a806ecc7945a.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/master.css">
</head>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

    <?php
    include 'header.php';
     ?>

    <!-- Contenu principal  -->
    <div class="app-main">
      <!-- fin menu gauche -->
      <!-- copier tout le contenu de la class "app-main__outer" ajouter le contenu ici  -->
      <div class="app-main__outer">
        <div class="app-main__inner">
          <div class="app-page-title">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="nav-link-icon lnr-book font-weight-bold text-info"></i>
                </div>
                <div style="font-size: 1.2em;">Liste des documents
                  <div class="page-title-subheading" style="font-size: 0.8em; color: black">Veuillez trouver ci-dessous
                    la liste de tous les événements de la plateforme.
                  </div>
                </div>
              </div>
              <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                  <button type="button" data-toggle="modal" data-target="#evenement" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-pill btn-success">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus"></i>
                    </span>
                    Ajouter
                  </button>
                  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-pill btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="nav-link-icon lnr-book font-weight-bold"></i>
                    </span>
                    Documents
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                      <!--Liste de tous levenements à afficher------------------>
                      <li class="nav-item">
                        <a href="projets.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-news-paper"> </i>
                          <span>
                            Tous les documents
                          </span>
                          <div class="ml-auto badge badge-pill bg-primary text-white">21</div>
                        </a>
                      </li>
                      <!----------------------------------------------------------------->
                      <!--Liste de tous levenements en cours ------------------>
                      <li class="nav-item">
                        <a href="avalider.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-refresh"> </i>
                          <span class="text-warning">
                            pdf
                          </span>
                          <div class="ml-auto badge badge-pill bg-warning text-white">4</div>
                        </a>
                      </li>
                      <!----------------------------------------------------------------->
                      <!--Liste des evenements valides-------------------------------->
                      <li class="nav-item">
                        <a href="valider.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-check"> </i>
                          <span>
                            <span class="text-success"> doc </span>
                          </span>
                          <div class="ml-auto badge badge-pill badge-success">17</div>
                        </a>
                      </li>
                      <!------------------------------------------------------------------------------>
                      <!--Liste des evenements non valides------------------------------------>
                      <li class="nav-item">
                        <a href="nonvalide.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-close-circle"> </i>
                          <span>
                            <span class="text-danger"> xls </span>
                          </span>
                          <div class="ml-auto badge badge-pill bg-danger text-white">5</div>
                        </a>
                      </li>
                      <!--------------------------------------------------------------->
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="main-card mb-3 card">
            <div class="card-body">
              <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">


                <div class="row" style="margin-bottom: 1rem;">
                  <div class="col-2">
                    <label class="font-weight-bold">Filtrer par : </label>
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-sm btn-light">
                      <span class="btn-icon-wrapper opacity-7">
                      </span>
                      Thématique
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" style="width: 5%; margin-left: 6.7rem; border-radius: 0;">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a href="utilisateurs.html" class="nav-link text-dark">
                            <span>
                              Tout
                            </span>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="utilisateurs.html" class="nav-link text-dark">
                            <span>
                              Éducation
                            </span>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="evenements.html" class="nav-link text-dark">
                            <span>
                              Environnement
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="projets.html" class="nav-link text-dark">
                            <span>
                              Santé
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!------------------------------------------------------------------>

                  <!--Filtrer par Date de publication -------------------------------->
                  <div class="col-2">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-sm btn-light">
                      <span class="btn-icon-wrapper opacity-7">
                      </span>
                      Date de publication
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" style="width: 5%; margin-left: 15.5rem; border-radius: 0;">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a href="utilisateurs.html" class="nav-link text-dark">
                            <span>
                              3 Jours
                            </span>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="utilisateurs.html" class="nav-link text-dark">
                            <span>
                              7 Jours
                            </span>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="evenements.html" class="nav-link text-dark">
                            <span>
                              28 Jours
                            </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="projets.html" class="nav-link text-dark">
                            <span>
                              12 Mois
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-2">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-sm btn-light">
                      <span class="btn-icon-wrapper opacity-7">
                      </span>
                      Formats
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" style="width: 5%; margin-left: 29.1rem; border-radius: 0;">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a href="utilisateurs.html" class="nav-link text-dark">
                            <span>
                              pdf
                            </span>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="utilisateurs.html" class="nav-link text-dark">
                            <span>
                              doc
                            </span>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="evenements.html" class="nav-link text-dark">
                            <span>
                              xls
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>

                <thead>
                  <tr>
                    <th>Titre du document</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>voir</th>
                    <th>Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Modèles de la santé et de la maladie</td>
                    <td>Une édition électronique réalisée à partir de l'article de Naomar de Almeida-Filho, Modèles de
                      la santé et de la maladie In revue RUPTURES.</td>
                    <td>29/03/2012</td>
                    <td><a href="assets/ressources/Modeles_de_la_sante.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>

                  <tr>
                    <td>La Médecine entre techniques, société et culture</td>
                    <td>Une édition électronique réalisée à partir du texte de M. Jean Benoist. Un article publié dans
                      l’ouvrage sous la direction du Professeur Abdessamad Dialmy, Sciences sociales et santé au Maroc
                    </td>
                    <td>29/03/2019</td>
                    <td><a href="assets/ressources/medecine_tech_societe_culture.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td>Histoire de l’isle de Grenadeen Amérique: 1649-1659 (1659)</td>
                    <td>Manuscrit anonyme de 1659, vraisemblablement attribué à Benigne Bresson, présenté et annoté par
                      Jacques Petitjean Roget.</td>
                    <td>02/04/2015</td>
                    <td><a href="assets/ressources/histoire_grenade.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td>La criminologie: Objet, Objectifs et moyens</td>
                    <td>Une édition numérique réalisée à partir d'un texte de Salah-eddine ABBASSI. Texte d’une
                      conférence donnée le 26 novembre 2013 Au Gai Moulin, à Paris.</td>
                    <td>13/03/2016</td>
                    <td><a href="assets/ressources/criminologie.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td>Fascisme, totalitarisme, religion séculière:trois concepts pour le XXe siècle.</td>
                    <td>Une édition électronique réalisée à partir du texte de Marc ANGENOT, Fascisme, totalitarisme,
                      religion séculière: trois concepts pour le XXe siècle. Notes d'histoire conceptuelle. Volume III:
                      Totalitarisme.</td>
                    <td>29/03/2019</td>
                    <td><a href="assets/ressources/fascisme-totalitarisme-religions-seculieres-vol-3B.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td>Méthodologie des sciences sociales et approche qualitative des organisations.</td>
                    <td> Une introduction à la démarche classique et une critique. Montréal : Les Presses de
                      l'Université du Québec, 1987. Une édition numérique réalisée par Marcelle Bergeron.</td>
                    <td>07/05/2011</td>
                    <td><a href="assets/ressources/metho_sc_soc_organisations.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td>Politique nationale de la recherche et de l'innovation, 2014-2019. (2013)</td>
                    <td>Une édition électronique réalisée à partir du document du Ministère de l'Enseignement supérieur,
                      de la Recherche, de la Science et de la Technologie, Politique nationale de la recherche et de
                      l'innovation, 2014-2019 (PNRI).</td>
                    <td>29/05/2018</td>
                    <td><a href="assets/ressources/emploi.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td>Types de sociétés, types de morbidités:la sociogenèse des maladies</td>
                    <td>Une édition électronique réalisée à partir de l'article de Jean-François Chanlat.Un article
                      publié dans l'ouvrage sous la direction de Jacques Dufresne, Fernand Dumont et Yves Martin, Traité
                      d'anthropologie médicale</td>
                    <td>29/03/2019</td>
                    <td><a href="assets/ressources/types_societe_modbidite.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>
                  <tr>
                    <td>L'immunité de la France envers le fascisme:un demi-siècle de polémique historiennes.</td>
                    <td>Une édition électronique réalisée à partir du texte de Marc ANGENOT.Collection “Discours
                      social”, vol. XXXI bis, réédition, 2014, 209 pp</td>
                    <td>29/03/2019</td>
                    <td><a href="assets/ressources/immunite_francaise_au_fascisme.pdf"><i class="fas fa-eye"></i></td>
                    <td><a href="#" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt text-danger"></i></a></td>
                  </tr>
              </table>
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
            <div class="position-relative form-group"><label for="exampleFile">Choisir un fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">

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
              <div class="position-relative form-group"><label for="exampleFile">Choisir un fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">
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
              <div class="position-relative form-group"><label for="exampleFile">Choisir un fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">
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
              <div class="position-relative form-group"><label for="exampleFile">Choisir un fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">
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
              <div class="position-relative form-group"><label for="exampleFile">Choisir un fichier</label><input name="file" id="exampleFile" type="file" class="form-control-file">

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

  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-right" style="padding: 1rem 1.5rem;">
          <div class="row">
            <div class="col-1" style="font-size: 2.3rem; color: #b81f44;">
              <i class="lnr-trash"> </i>
            </div>
            <div class="col-11">
              <h4 style="margin-bottom: 2rem; text-align: left; margin-top: 6px; margin-left: 1rem;">Êtes-vous sûr de vouloir supprimer cet élement ?</h4>
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
  <script type="text/javascript" src="./assets/scripts/main.cba69814a806ecc7945a.js"></script>

</body>

</html>
