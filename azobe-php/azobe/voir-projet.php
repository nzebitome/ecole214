<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="fr">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <title> Asso Gabon || Dashboard - voir le projet </title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description"
        content="These can be used with other components and elements to create stunning and unique new elements for your UIs.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="main.cba69814a806ecc7945a.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <style>

    </style>
</head>



<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
      <?php
      include 'header.php';
       ?>

        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <!---Description du projet------->
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="text-center" style="margin-bottom: 1.6rem;">
                                <div class="card-header">
                                    <h2><b> DESCRIPTION Du PROJET </b></h2>
                                    <div class="btn-actions-pane-right actions-icon-btn">
                                        <a href="#" class="btn mr-2 mb-2 btn-sm btn-danger btn-pill pl-3 pr-3"
                                            data-toggle="modal" data-target="#exampleModal"> REJETER </a>
                                        <a href="#" class="mb-2 mr-2 btn btn-success btn-sm btn-pill pl-3 pr-3"
                                            data-toggle="modal" data-target="#myModal">PUBLIER</a>
                                    </div>
                                </div>
                            </div>

                            <!-- CONTENU DE LA DESCRIPTION DU PROJET ------------------------------------------------------------------>


                            <!-------------------------------------------------------------------------------------------------------------->
                            <div class="jumbotron" data-step="1" data-intro="This is a tooltip!">
                                <h1 class="display-4"> Partie réservée pour l'intégration de la vue du projet publié sur
                                    le front office du site web </h1>

                                <br>
                                <h4> EXEMPLE :</h4>
                                <p><b>(Secteur:</b> Education</p>
                                <p><b>Edité par:</b> Juste FADIKPE</p>
                                <p><b><i class="fa fa-calendar"></i> Date de début et de fin:</b> 25 Novembre au 2
                                    Janvier 2020</p>
                                <p><b><i class="fa fa-map-pin"></i> Organisateur:</b> Ogooué Labs</p>
                                <p class="lead"> Des animations de sensibilisation au gaspillage alimentaire avec ses
                                    VéloMixeurs 100% récupérable, qui permettent de transformer des fruits invendus en
                                    smoothies à la force des mollets. )</p>
                            </div>


                            <!---FIN DU CONTENU------------------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade " id="evenement" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
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
                                l'événement</label><input name="title" id="title"
                                placeholder="Entrer le nom de l'événement" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group"><label for="exampleEmail"
                                style="font-size: 20px;">Date de
                                l'événement</label><input name="date" id="title" type="date" class="form-control">
                        </div>
                        <div class="position-relative form-group"><label for="exampleEmail"
                                style="font-size: 20px;">Heure</label><input name="time" id="title" type="time"
                                class="form-control">
                        </div>
                        <div class="position-relative form-group"><label for="exampleEmail"
                                style="font-size: 20px;">Lieu</label><input name="title" id="title" type="text"
                                class="form-control">
                        </div>

                        <div class="position-relative form-group"><label for="exampleText"
                                style="font-size: 20px;">Description</label><textarea name="text" id="exampleText"
                                class="form-control" rows="10"></textarea>
                        </div>
                        <div class="position-relative form-group"><label for="exampleFile">Choisir un
                                fichier</label><input name="file" id="exampleFile" type="file"
                                class="form-control-file">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill"
                        data-dismiss="modal">Fermer</button>
                    <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
                </div>
            </div>
        </div>
    </div>

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
                                    style="font-size: 20px;">Titre</label><input style="padding: 30px;" name="title"
                                    id="title" placeholder="Entrer un titre" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group"><label style="font-size: 20px;"
                                    for="exampleText">Contenu</label>
                                <textarea name="text" id="exampleText" placeholder="Saisir votre contenu"
                                    class="form-control" rows="9"></textarea>
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile">Choisir un
                                    fichier</label><input name="file" id="exampleFile" type="file"
                                    class="form-control-file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button style="margin-top: 5px;" type="button" class="btn btn-pill btn-secondary"
                            data-dismiss="modal">Fermer</button>
                        <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
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
                                    style="font-size: 20px;">Titre</label><input style="padding: 30px;" name="title"
                                    id="title" placeholder="Entrer un titre" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group"><label style="font-size: 20px;"
                                    for="exampleText">Contenu</label>
                                <textarea name="text" id="exampleText" placeholder="Saisir votre contenu"
                                    class="form-control" rows="9"></textarea>
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile">Choisir un
                                    fichier</label><input name="file" id="exampleFile" type="file"
                                    class="form-control-file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill"
                            data-dismiss="modal">Fermer</button>
                        <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
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
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    style="font-size: 20px;">Titre du
                                    document</label><input name="title" id="title"
                                    placeholder="Saisir le titre du document" type="text" class="form-control">
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
                                    class="form-control" rows="10"></textarea>
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile">Choisir un
                                    fichier</label><input name="file" id="exampleFile" type="file"
                                    class="form-control-file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill"
                            data-dismiss="modal">Fermer</button>
                        <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
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
                        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; font-weight:bold;margin-top: 30px;
            ">PUBLIER UN PROJET</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="">
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    style="font-size: 20px;">Titre</label><input name="title" id="title"
                                    placeholder="Entrer un titre" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group"><label for="exampleText"
                                    style="font-size: 20px;">Description</label><textarea name="text" id="exampleText"
                                    class="form-control"></textarea>
                            </div>
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    style="font-size: 20px;">Lien</label><input name="title" id="title"
                                    placeholder="Saisir le lien du document" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile" class="marg">Choisir un
                                    fichier</label><input name="file" id="exampleFile" type="file"
                                    class="form-control-file">

                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill"
                            data-dismiss="modal">Fermer</button>
                        <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- événements -->
        <div style="margin: auto;" class="modal fade " id="evenement" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    style="font-size: 20px;">Nom de
                                    l'événement</label><input name="title" id="title"
                                    placeholder="Entrer le nom de l'événement" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    style="font-size: 20px;">Date de
                                    l'événement</label><input name="date" id="title" type="date" class="form-control">
                            </div>
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    style="font-size: 20px;">Heure</label><input name="time" id="title" type="time"
                                    class="form-control">
                            </div>
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    style="font-size: 20px;">Lieu</label><input name="title" id="title" type="text"
                                    class="form-control">
                            </div>

                            <div class="position-relative form-group"><label for="exampleText"
                                    style="font-size: 20px;">Description</label><textarea name="text" id="exampleText"
                                    class="form-control" rows="10"></textarea>
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile">Choisir un
                                    fichier</label><input name="file" id="exampleFile" type="file"
                                    class="form-control-file">

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button style="margin-top: 5px;" type="button" class="btn btn-secondary btn-pill"
                            data-dismiss="modal">Fermer</button>
                        <button type="submit" class="mt-1 btn btn-primary btn-pill">Publier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title text-white" id="exampleModalLongTitle"> ENVOIE DE MESSAGE</h3>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="">

                        <div class="col-12">
                            <h5> Votre publication a été rejetée pour les raisons suivantes: </h5>
                            <br>
                            <!-- Selection multiple -->
                            <div class="custom-control custom-checkbox" style="font-size: 1rem;">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked1">
                                <label class="custom-control-label" for="defaultUnchecked1"> Absence de documents ;
                                </label>
                                </br>
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked2">
                                <label class="custom-control-label" for="defaultUnchecked2">Date non conforme ;</label>
                                </br>
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                                <label class="custom-control-label" for="defaultUnchecked3">Identitée non authentifiée
                                    ;</label>
                                </br>
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked4">
                                <label class="custom-control-label" for="defaultUnchecked4">Informations incomplètes
                                    ;</label>
                                </br>
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked5">
                                <label class="custom-control-label" for="defaultUnchecked5">Absence de documents
                                    ;</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-sm btn-danger btn-pill pl-3 pr-3"
                        data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-sm btn-success btn-pill pl-3 pr-3">Envoyer</button>
                </div>
            </div>
        </div>
    </div>


    <!-------------Publier----------------------------------------------------------->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 5px;">
                <div class="modal-body text-center">
                    <span class="fa-stack fa-lg text-success"
                        style="font-size: 2rem; margin-bottom: 1.7rem; margin-top: 2rem;"><i
                            class="fa fa-circle fa-stack-2x"></i><i
                            class="fa fa-check fa-stack-1x fa-inverse"></i></span>
                    <h1 class="text-success">Succès !</h1>
                    <h5> Votre action a bien été effectuée ! </h5>
                    <button type="button" class="btn btn-pill  btn-sm btn-success" data-dismiss="modal"
                        style="padding: .2rem 3rem; margin-top: 1.2rem; font-size: 1.2rem;">OK</button>
                </div>
                <div class="bg-white" style="padding: 10px 25px 20px 0;">
                    <!---- <button type="button" class="btn btn-pill  btn-danger" data-dismiss="modal" style="float: right">Fermer</button>-->
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="./assets/scripts/main.cba69814a806ecc7945a.js"></script>
    <script type="text/javascript" src="./assets/scripts/alert-js.js"></script>
</body>

</html>



<!-- Message de non validation -->
