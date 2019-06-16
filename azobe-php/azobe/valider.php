<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Valider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link href="main.cba69814a806ecc7945a.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/master.css">
</head>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-header">
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

                      <li class="nav-item">
                        <a href="avalider.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-refresh"> </i>
                          <span class="text-warning">
                            En attente
                          </span>
                          <div class="ml-auto badge badge-pill bg-warning text-white">4</div>
                        </a>
                      </li>
                      <!-- listes des evenements valides -->
                      <li class="nav-item">
                        <a href="valider.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-check"> </i>
                          <span>
                            <span class="text-success"> Validé </span>
                          </span>
                          <div class="ml-auto badge badge-pill badge-success">17</div>
                        </a>
                      </li>

                      <!-- listes des evenements non valides  -->
                      <li class="nav-item">
                        <a href="nonvalide.html" class="nav-link">
                          <i class="nav-link-icon pe-7s-close-circle"> </i>
                          <span>
                            <span class="text-danger"> Non Validé </span>
                          </span>
                          <div class="ml-auto badge badge-pill bg-danger text-white">5</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
                    </div>            <div class="main-card mb-3 card">
                        <div class="card-body">
                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Porteur du projet</th>
                                    <th>Nom du projet</th>
                                    <th>Description</th>
                                    <th>Statut</th>
                                    <th>Voir</th>
                                     <th>Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                    <td>System Architect</td>
                    <td>Tiger Nixon</td>
                    <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor.</td>
                    <td>valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Intégrer les migrants.... Combattre l’intolérance.</td>
                    <td> Alors que l’école constitue un espace de socialisation important, les enfants issus de l’immigration sont souvent marginalisés par leurs camarades. Ainsi, l’association Tadamoun, qui opère dans des quartiers de Tanger, souhaite faire de l’école une espace privilégié de sensibilisation des jeunes aux thématiques de la tolérance, des droits de l’homme et du vivre-ensemble.</td>
                    <td>valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Junior Technical Author</td>
                    <td>Ashton Cox</td>
                    <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor.</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>

                  <tr>
                    <td>Airi Satou</td>
                     <td>Femmes de parole d’Afrique francophone</td>
                      <td> Médias, Genre et TIC :Les femmes auront la possibilités de participer a des travaux fait par la francophonie</td>

                    <td>Validé</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href="" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>

                    <td>Herrod Chandler</td>
                    <td>Les sites syndicaux internet pour le développement de l’éducation</td>
                    <td>Education et formation :Pour faciliter une bonne éducation rapide et simplifier, un site syndical internet </td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>

                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor.</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>

                  <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor.</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor.</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>

                  <tr>
                    <td>Charde Marshall</td>
                    <td>RadioTIC, mobilisation et plaidoyer pour des politiques de TIC citoyennes ;</td>
                    <td> Citoyenneté et TIC : mobilisation et plaidoyer pour des politiques de TIC citoyennes  </td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Haley Kennedy</td>
                    <td>Alf@net </td>
                    <td> Français et langues partenaires : Alf@net - Les TIC en bamana et en wolof en synergie avec le français pour la capacitation des femmes néo-alphabètes du Mali et du Sénégal.</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor.</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>

                  <tr>
                    <td>Paul Byrd</td>
                    <td>: Informatisation de Dictionnaires éditoriaux bilingues Langue Africaine – Français : DILAF ;</td>
                    <td>Français et langues partenaires : Informatisation de Dictionnaires éditoriaux bilingues Langue Africaine – Français : DILAF ;</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>

                  <tr>
                    <td>Bradley Greer</td>
                    <td>Télévision numérique des savoirs africains </td>
                    <td> Sciences et techniques : Innovation de la television numerique sur le savoir des africans au cameroun et dans d'autre pays</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href="" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Dai Rios</td>
                    <td>Les sites syndicaux internet pour le développement de l’éducation ;</td>
                    <td>Education et formation : Les sites syndicaux internet pour le développement de l’éducation ;</td>

                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>


                  <tr>

                    <td>Chief </td>

                    <td>: Informatisation de Dictionnaires éditoriaux bilingues Langue Africaine – Français : DILAF ;</td>
                    <td>Français et langues partenaires : Informatisation de Dictionnaires éditoriaux bilingues Langue Africaine – Français : DILAF ;</td>
                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>


                                   <tr>
                    <td>Fiona Green</td>
                    <td>Sensibilisation et formation des jeunes sur les droits de femmes.</td>
                    <td>Constatant un manque de considération sociale et sociétale de la femme, dans la société en général, et en particulier à l’école, l’association « Forum Marocain des Femmes » est appuyée par le programme PISCCA pour initier les jeunes filles et les jeunes garçons à l’égalité des sexes.</td>
                    <td>Valider</td>
                    <td><a href="voir-projet.html"> <i class="fas fa-eye"></i> </a></td>
                    <td><a href=""> <i class="fa fa-trash-alt"></i></a></td>
                  </tr>
                  <tr>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
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
