<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Asso Gabon || Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link href="main.cba69814a806ecc7945a.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/master.css">
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
          <div class="app-page-title">
           <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="pe-7s-hourglass icon-gradient bg-love-kiss"> </i>
                </div>
                <div style="font-size: 1.2em;"> Projets
                  <div class="page-title-subheading" style="font-size: 0.8em; color: black">Veuillez trouver ci-dessous la
                      liste de tous les projets de la plateforme.
                  </div>
                </div>
              </div>
              <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                  <button type="button" data-toggle="modal" data-target="#evenement" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow btn btn-success">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus"></i>
                    </span>
                    Ajouter
                  </button>
                  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="pe-7s-clock fa-w-20"> </i>
                    </span>
                   PROJETS
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                      <!--Liste de tous levenements à afficher------------------>
                      <li class="nav-item">
                        <a href="projets.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-news-paper"> </i>
                          <span>
                            Tous les projets
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
                            En attente
                          </span>
                          <div class="ml-auto badge badge-pill bg-warning text-white">4</div>
                        </a>
                      </li>
                      <!----------------------------------------------------------------->
                      <!--------------Liste des evenements valides-------------------------------->
                      <li class="nav-item">
                        <a href="valider.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-check"> </i>
                          <span>
                            <span class="text-success"> Validé </span>
                          </span>
                          <div class="ml-auto badge badge-pill badge-success">17</div>
                        </a>
                      </li>
                      <!------------------------------------------------------------------------------>
                      <!----------Liste des evenements non valides------------------------------------>
                      <li class="nav-item">
                        <a href="nonvalide.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-close-circle"> </i>
                          <span>
                            <span class="text-danger"> Non Validé </span>
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
                <thead>
                  <tr>
                    <th>Nom du projet</th>
                    <th>Porteur du projet</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Voir</th>
                    <th>Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                    <td>Cedric Kelly</td>
                    <td>VIFRALIE, « Vivre le français en ligne à l’école </td>
                    <td>Plateforme d'apprentissage de la langue française</td>

                    <td>En attente</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                    <tr>
                    <td>Brielle Williamson</td>
                    <td>AfriBD, portail de la bande dessinée africaine</td>
                    <td> Arts visuels : Innovation dans le domaine de l'art avec un portail de bande dessinée en africaine proposé par plusieur pays</td>

                    <td>En attente</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                 <tr>
                    <td>Colleen Hurst</td>
                    <td> AfriBD, portail de la bande dessinée africaine </td>
                    <td> Arts visuels :AfriBD, portail de la bande dessinée africaine </td>

                    <td>En attente </td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Quinn Flynn</td>
                 <td> Campagne de sensibilisation contre la radicalisation, le discours de haine et la discrimination au profit des mineurs des établissements de protection de l’enfance.</td>
                 <td> Campagne de sensibilisation contre la radicalisation, le discours de haine et la discrimination au profit des mineurs des établissements de protection de l’enfance.</td>
                    <td>En attente</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>

                </tbody>
                <tfoot>
                  <tr>
                    <th>Nom du projet</th>
                    <th>Porteur du projet</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Voir</th>
                    <th>Supprimer</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  <script type="text/javascript" src="./assets/scripts/main.cba69814a806ecc7945a.js"></script>
</body>

</html>
