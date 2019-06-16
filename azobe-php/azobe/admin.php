<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="./main.cba69814a806ecc7945a.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/master.css">
</head>



<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

    <?php include 'header.php' ?>
    <!-- Contenu principal  -->
    <div class="app-main">
      <div class="app-main__outer">
        <div class="app-main__inner">
          <div class="app-page-title">
             <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="pe-7s-hourglass icon-gradient bg-love-kiss"> </i>
                </div>
                <div>
                  Administrateur
                  <div class="page-title-subheading" style="font-size: 1em;">Vous pouvez ici voir tous
                    les Administrateur inscrits
                    sur le site dashbord.
                  </div>
                </div>
              </div>
              <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                  <a href="#" data-toggle="modal" data-target="#addAgent">
                    <button type="button" data-toggle="modal" data-target="#addAgent" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow btn-pill btn btn-success">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus"></i>
                    </span>
                    Ajouter
                  </button>
                  </a>
                </div>
              </div>
            </div>
            </div>
          </div>
          <div class="main-card card">
            <div class="card-header">
              <br>
              <div class="input-group" style="width: 22%; margin-left: 77%">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-search"></i>
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
                    <th class="text-center" style="font-size: 1.1em;">Profil</th>
                    <th class="text-center" style="font-size: 1.1em;">Noms</th>
                    <th class="text-center" style="font-size: 1.1em;">Email</th>
                    <th class="text-center" style="font-size: 1.1em;">Contact</th>
                    <th class="text-center" style="font-size: 1.1em;">Statut</th>
                    <th class="text-center" style="font-size: 1.1em;">Modifier</th>
                    <th class="text-center" style="font-size: 1.1em;">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center" style="width: 80px;"><img width="40" class="rounded-circle" src="assets/images/a.jpeg" alt=""></td>
                    <td class="text-center"><a href="javascript:void(0)">Antonin Raoust</a></td>
                    <td class="text-center"><a href="javascript:void(0)">issiackjuste@gmail.com</a>
                    </td>

                    <td class="text-center">+24102454125</td>
                    <td class="text-center">
                      <div class="badge badge-pill badge-success">Key Master</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="pe-7s-note text-primary" style="font-size: 1.8em;"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger" style="font-size: 1.1em;"></i>
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
                      <div class="badge badge-pill badge-warning">Administrateur</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="pe-7s-note text-primary" style="font-size: 1.8em;"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger" style="font-size: 1.1em;"></i>
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
                      <div class="badge badge-pill badge-warning">Editeur</div>
                    </td>
                    <td class="text-center" style="width: 200px;">
                      <a href="">
                        <i class="pe-7s-note text-primary" style="font-size: 1.8em;"></i>
                      </a>
                    </td>
                    <td class="text-center">
                      <a href="" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-trash-alt text-danger" style="font-size: 1.1em;"></i>
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

    <!-- MODAL SUPRESSION D'ELEMENT -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
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

      <!--modal ajouter un agent-->
        <div style="margin: auto;" class="modal fade " id="addAgent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; font-weight:bold; margin-left: 10px;
            ">AJOUTER UN AGENT</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="">
                <div class="position-relative form-group"><label for="exampleEmail" style="font-size: 20px;">Email</label><input name="emailAgent" type="email" class="form-control">
                </div>
                 <div class="position-relative form-group"><label for="exampleSelect" style="font-size: 20px;">Role</label>
                    <select name="roleList"  class="form-control">
                      <option>Key master</option>
                      <option>Administrateur</option>
                      <option>Editeur</option>
                    </select>
                  </div>
              </form>
              <p>Un lien sera envoyé pour finaliser et confirmer l'inscription. </p>
            </div>
            <div class="modal-footer">
              <button type="submit" class="mt-1 btn btn-primary">Valider</button>
            </div>
          </div>
        </div>
      </div>
  <script type="text/javascript" src="./assets/scripts/main.cba69814a806ecc7945a.js"></script>

</body>

<!----------------------------------------------------------------------------------->

</html>
