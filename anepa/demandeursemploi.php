<?php
$ogtitle="Particuliers et demandeurs d'emploi" ;
$ogdescription="Des formations, ateliers et entretiens pour les particuliers ou un demandeurs d’emploi.";
?>
<?php require 'inc/head.php'; ?>
<?php $pageactive='demandeursemploi'; ?>
<?php require 'inc/header.php'; ?>

<section class="demandeursemploi container intro">
    <div class="row justify-content-between">
        <div class="col-md-8 col-12">
            <div class="blocTextColor blocColor2">
                <h1>Particuliers & demandeurs d'emploi</h1>
                <p>Vous êtes un particulier ou un demandeur d’emploi, vous avez besoin d’améliorer vos
                    compétences de base pour améliorer votre maitrise de la langue française (alpha, FLE…),
                     vous remettre à niveau en maths-logique, mieux vous déplacer, être plus à l’aise
                      pour utiliser les outils numériques, réfléchir et valider votre projet professionnel,
                      reprendre confiance en vous… Des formations, des ateliers, des entretiens peuvent répondre
                      à vos attentes.</p>
            </div><!-- blocTextColor blocColor2 -->
        </div><!-- col -->

        <div class="col-md-4 liensrapides">
            <p>Liens rapides :</p>
            <nav>
                <ul>
                    <li>
                        <a href="#formations">Formations</a>
                    </li>
                    <li>
                        <a href="#ateliers">Ateliers</a>
                    </li>
                    <li>
                        <a href="#surmesureLienrapdie">Sur-mesure</a>
                    </li>
                    <li>
                        <a href="#cleaLienrapdie">CléA & CléA Numérique</a>
                    </li>
                </ul>

            </nav>
        </div>
    </div><!-- row -->
</section>

<section class="demandeursemploi container menuetcontenu">
    <!-- FORMATIONS -->
    <div class="row" id="formations">
        <div class="col-12 col-md-8 offset-md-4">
            <h2 class="titreSousMenu">Formations</h2>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-4 col-12">
            <nav class="navbar nav-pills mb-3" id="pills-tab" role="tablist"> <!--class="navbar-nav-scroll" id="stickymenu" -->
                <div class="sousmenu">
                    <?php $formation1="Formation : Orientation professionnelle -  Remobilisation" ?>
                    <a href="#formation1" rel="formation1" class="nav-link active" data-bs-toggle="pill" data-bs-target="#formation1" aria-controls="formation1" type="button" role="tab" aria-selected="true">
                        <?php if(isset($formation1)) {echo $formation1;
                        }; ?>
                    </a>

                    <?php $formation2="Formation : Mobilité, «&nbsp;Se déplacer en Autonomie&nbsp;» Dispositif de Mobilité Inclusive" ?>
                    <a href="#formation2" rel="formation2" class="nav-link" data-bs-toggle="pill" data-bs-target="#formation2" aria-controls="formation2" type="button" role="tab" aria-selected="false">
                        <?php if(isset($formation2)) {echo $formation2;
                        }; ?>
                    </a>
                </div><!-- sous menu -->
            </nav>


        </div><!-- col -->
        <div class="col-md-8 col-12 contenuformations tab-content"  id="pills-tabContent">
            <!-- <p class="titreSousMenu">Formation</p> -->
            <?php require 'offre_formations.php'; ?>
        </div><!-- col -->
    </div><!-- row -->

    <!-- ATELIERS -->
    <div class="row" id="ateliers">
        <div class="col-12 col-md-8 offset-md-4">
            <h2 class="titreSousMenu">Ateliers</h2>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-4 col-12">
            <nav class="navbar nav-pills mb-3" id="pills-tab-ateliers" role="tablist"> <!--class="navbar-nav-scroll" id="stickymenu" -->
                <div class="sousmenu">
                    <?php $atelier1="Pass’clic, Ateliers numériques" ?>
                    <a href="#atelier1" rel="atelier1" class="nav-link active" data-bs-toggle="pill" data-bs-target="#atelier1" aria-controls="atelier1" type="button" role="tab" aria-selected="true">
                        <?php if(isset($atelier1)) {echo $atelier1;
                        }; ?>
                    </a>

                    <?php $atelier2="Alpha’Job, ateliers linguistiques vers l’emploi" ?>
                    <a href="#atelier2" rel="atelier2" class="nav-link" data-bs-toggle="pill" data-bs-target="#atelier2" aria-controls="atelier2" type="button" role="tab" aria-selected="false">
                        <?php if(isset($atelier2)) {echo $atelier2;
                        }; ?>
                    </a>

                    <?php $atelier3="Renforcer la maîtrise des compétences clés" ?>
                    <a href="#atelier3" rel="atelier3" class="nav-link" data-bs-toggle="pill" data-bs-target="#atelier3" aria-controls="atelier3" type="button" role="tab" aria-selected="false">
                        <?php if(isset($atelier3)) {echo $atelier3;
                        }; ?>
                    </a>

                    <?php $atelier4="Ateliers d’expression artistique : Chants du monde, expression théâtrale, arts plastiques…" ?>
                    <a href="#atelier4" rel="atelier4" class="nav-link" data-bs-toggle="pill" data-bs-target="#atelier4" aria-controls="atelier4" type="button" role="tab" aria-selected="false">
                        <?php if(isset($atelier4)) {echo $atelier4;
                        }; ?>
                    </a>

                    <?php $atelier5="Atelier Café Culture" ?>
                    <a href="#atelier5" rel="atelier5" class="nav-link" data-bs-toggle="pill" data-bs-target="#atelier5" aria-controls="atelier5" type="button" role="tab" aria-selected="false">
                        <?php if(isset($atelier5)) {echo $atelier5;
                        }; ?>
                    </a>

                    <?php $atelier6="Passer’Ailes, ateliers linguistiques vers l’emploi" ?>
                    <a href="#atelier6" rel="atelier6" class="nav-link" data-bs-toggle="pill" data-bs-target="#atelier6" aria-controls="atelier6" type="button" role="tab" aria-selected="false">
                        <?php if(isset($atelier6)) {echo $atelier6;
                        }; ?>
                    </a>

                    <?php $atelier7="La marche, dynamique d’insertion" ?>
                    <a href="#atelier7" rel="atelier7" class="nav-link" data-bs-toggle="pill" data-bs-target="#atelier7" aria-controls="atelier7" type="button" role="tab" aria-selected="false">
                        <?php if(isset($atelier7)) {echo $atelier7;
                        }; ?>
                    </a>
                </div><!-- sous menu -->
            </nav>
        </div><!-- col -->
        <div class="col-md-8 col-12 contenuformations tab-content" id="pills-tab-ateliersContent">
            <!-- <p class="titreSousMenu">Atelier</p> -->
            <?php require 'offre_ateliers.php'; ?>
        </div><!-- col -->
    </div><!-- row -->

    <!-- SURMESURE -->
    <div class="row" id="surmesureLienrapdie">
        <div class="col-12 col-md-8 offset-md-4">
            <h2 class="titreSousMenu">Sur-mesure</h2>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-4 col-12">
            <nav class="navbar nav-pills mb-3" id="pills-tab" role="tablist"> <!--class="navbar-nav-scroll" id="stickymenu" -->
                <div class="sousmenu">
                    <?php $surmesure="Accompagnement individualisé vers l’emploi" ?>
                    <a href="#surmesure" rel="surmesure" class="nav-link active" data-bs-toggle="pill" data-bs-target="#surmesure" aria-controls="surmesure" type="button" role="tab" aria-selected="false">
                        <?php if(isset($surmesure)) {echo $surmesure;
                        }; ?>
                    </a>
                </div><!-- sous menu -->
            </nav>
        </div><!-- col -->
        <div class="col-md-8 col-12 contenuformations tab-content">
            <!-- <p class="titreSousMenu">Sur-mesure</p> -->
            <?php require 'offre_surmesure.php'; ?>
        </div><!-- col -->
    </div><!-- row -->

    <!-- CLEA -->
    <div class="row" id="cleaLienrapdie">
        <div class="col-12 col-md-8 offset-md-4">
            <h2 class="titreSousMenu">CléA & CléA Numérique</h2>
            <?php require 'offre_clea_intro.php'; ?>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-4 col-12">
            <nav class="navbar nav-pills mb-3" id="pills-tab" role="tablist">
                <?php require 'inc/sousmenuclea.php'; ?>
            </nav>
        </div><!-- col -->
        <div class="col-md-8 col-12 contenuformations tab-content" >
            <!-- <p class="titreSousMenu">CléA & CléA Numérique</p> -->
            <?php require 'offre_clea.php'; ?>
        </div><!-- col -->
    </div><!-- row -->
</section>

<section id="nextpage">
    <a class="btn" href="entreprisessalaries.php">Page suivante : <strong>Entreprises & salariés</strong></a>
</section>

<?php require 'inc/footer.php'; ?>
