<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Statistiques</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="Huge selection of charts created with the React ChartJS Plugin">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link href="./main.cba69814a806ecc7945a.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/master.css">
  <style type="text/css">
    .stat {
      font-size: 15px;
    }

    .texte {
      font-size: 15px;
    }

    .age-info span {
      font-size: 15px;
    }
  </style>
</head>

<body>
  <?php
  include 'header.php';
   ?>
  <div class="app-main__outer">
    <div class="app-main__inner">
      <div class="app-page-title">
        <div style="margin-top: 10px; margin-left: 20px" class="page-title-wrapper">
          <div class="page-title-heading">
            <div class="page-title-icon">
              <i class="pe-7s-bandaid icon-gradient bg-amy-crisp">
              </i>
            </div>
            <div>Statistiques du site
              <div class="page-title-subheading">Toutes les données de la plateforme sont affichés ici.
              </div>
            </div>
          </div>
          <div class="page-title-actions">
            <div class="d-inline-block dropdown">

              <div tabindex="-1" role="menu" aria-hidden="true" style="margin-right: 100px; margin-top: 40px">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link">
                      <i class="nav-link-icon lnr-inbox"></i>
                      <span class="texte">
                        Taux de retention :
                      </span>
                      <div class="ml-auto badge badge-pill bagde-danger stat">85%</div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">
                      <i class="nav-link-icon lnr-book"></i>
                      <span class="texte">
                        Taux de rebond :
                      </span>
                      <div class="ml-auto badge badge-pill stat">5%</div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">
                      <i class="nav-link-icon lnr-picture"></i>

                      <span class="texte">
                        Utisateurs actifs :
                      </span>
                      <div class="ml-auto badge badge-pill  stat">45</div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
          <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
            <span>Traffic du site</span>
          </a>
        </li>
        <li class="nav-item">
          <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
            <span>Utilisateurs
          </a>
        </li>
        <li class="nav-item">
          <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
            <span>Actions</span>
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
          <div class="row">
            <div class="col-md-6 col-md-6 col-md-6" style="margin-top: 20px">
              <div class="mb-3 card">
                <div class="card-header-tab card-header">
                  <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Traffic du site</div>
                  <div class="btn-actions-pane-right text-capitalize">
                    <button class="btn btn-warning">Interactions</button>
                  </div>
                </div>
                <div class="pt-0 card-body">
                  <div id="chart-combined"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-md-6 col-md-6" style="margin-top: 20px">
              <div class="mb-3 card">
                <div class="card-header-tab card-header">
                  <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Membres</div>
                  <div class="btn-actions-pane-right text-capitalize">
                    <button class="btn btn-warning">Inscrits</button>
                  </div>
                </div>
                <div class="row" style="margin-left: 10px;">
                  <div class="col-md-4">
                    <div class="card mb-3 widget-chart">
                      <div class="widget-numbers">3000</div>
                      <div class="widget-subheading">TOTAL</div>
                      <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                        <i class="fa fa-angle-up ">

                        </i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card mb-3 widget-chart">
                      <div class="widget-numbers">1000</div>
                      <div class="widget-subheading">Hommes</div>
                      <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                        <i class="fa fa-angle-up ">

                        </i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card mb-3 widget-chart">
                      <div class="widget-numbers">2000</div>
                      <div class="widget-subheading">Femmes</div>
                      <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                        <i class="fa fa-angle-up ">

                        </i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12">
                  <div id="accordion" class="accordion-wrapper mb-3">
                    <div class="card">
                      <div id="headingOne" class="card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                          <h5 class="m-0 p-0">Par Age</h5>
                        </button>
                      </div>
                      <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse show">
                        <div class="card-body age-info">
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Entre 18 ans - 35 ans : 1300</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Entre 35 ans - 50 ans : 800</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Entre 50 ans - 60 ans : 600</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Entre 65 ans - 80 ans : 300</span>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo" class="b-radius-0 card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
                          <h5 class="m-0 p-0">Par domaine d'activité
                          </h5>
                        </button>
                      </div>
                      <div data-parent="#accordion" id="collapseOne2" class="collapse">
                        <div class="card-body age-info">
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Environnement : 252</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Santé : 123</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Education : 809</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Agriculture : 900</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Finance : 400</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Etudiant : 516</span>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree" class="card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseThree" class="text-left m-0 p-0 btn btn-link btn-block">
                          <h5 class="m-0 p-0">Par secteur
                          </h5>
                        </button>
                      </div>
                      <div data-parent="#accordion" id="collapseOne3" class="collapse">
                        <div class="card-body"> <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> ONG : 385</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Association : 280</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Privé : 809</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Parapublic : 103</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Etudiant : 516</span>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree" class="card-header">
                        <button type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseThree" class="text-left m-0 p-0 btn btn-link btn-block">
                          <h5 class="m-0 p-0">Par position
                          </h5>
                        </button>
                      </div>
                      <div data-parent="#accordion" id="collapseOne3" class="collapse">
                        <div class="card-body"> <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Internes : 102</span> <br>
                          <span><i class="fa fa-fw" aria-hidden="true" title="Copy to use arrow-right"></i> Externes : 165</span> <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="app-drawer-overlay d-none animated fadeIn"></div>
          <script type="text/javascript" src="./assets/scripts/main.cba69814a806ecc7945a.js"></script>
</body>

</html>
