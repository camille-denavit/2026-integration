<body class="<?php echo $pageactive; ?>">
    <!-- Navigation screen readers -->
    <div id="top" class="visually-hidden-focusable">
        <nav class="fr-container" role="navigation" aria-label="Accès rapide">
            <ul class="fr-skiplinks__list">
                <li><a class="visually-hidden-focusable" href="#contenu">Contenu</a></li>
                <li><a class="visually-hidden-focusable" href="#navigation-principale">Menu</a></li>
                <li><a class="visually-hidden-focusable" href="#footer">Pied de page</a></li>
            </ul>
        </nav>
    </div>

    <!-- HEADER -->
    <header class="site-header" role="banner">
        <nav class="navbar">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand" href="index.php">
                    <img src="images/ANEPA_tremplin_logo.svg" alt="ANEPA Tremplin" width="159" height="133">
                </a>

                <?php if ($pageactive=="accueil") {?>
                    <aside>
                        <blockquote>
                            "Agis dans ton lieu, pense avec le monde"
                        </blockquote>
                        <p class="source_quote">E.Glissant</p>
                    </aside>
                <?php } ?>

                <!-- BURGER ICON -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation-principale" aria-controls="navigation-principale" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- NVIGATION PRINCIPALE -->
                <div class="collapse navbar-collapse" id="navigation-principale">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" rel="btaccueil"
                            class="nav-link btprendresoin
                            <?php if ($pageactive=="accueil") {echo "active";
                            } ?>"
                            <?php if ($pageactive=="accueil") {echo "aria-current=\"page\"";
                            } ?>>
                            Accueil
                        </a>
                        </li>
                        <li class="nav-item">
                            <a href="apropos.php" rel="btapropos"
                            class="nav-link btapropos
                            <?php if ($pageactive=="apropos") {echo "active";
                            } ?>"
                            <?php if ($pageactive=="apropos") {echo "aria-current=\"page\"";
                            } ?>>
                                À propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="demandeursemploi.php" rel="btdemandeursemploi"
                            class="nav-link btdemandeursemploi
                            <?php if ($pageactive=="demandeursemploi") {echo "active";
                            } ?>"
                            <?php if ($pageactive=="demandeursemploi") {echo "aria-current=\"page\"";
                            } ?>>
                                Particuliers & demandeurs d'emploi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="entreprisessalaries.php" rel="btentreprisessalaries"
                            class="nav-link btentreprisessalaries
                            <?php if ($pageactive=="entreprisessalaries") {echo "active";
                            } ?>"
                            <?php if ($pageactive=="entreprisessalaries") {echo "aria-current=\"page\"";
                            } ?>>
                                Entreprises & salariés
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="artinsersion.php" rel="btartinsersion"
                            class="nav-link btartinsersion
                            <?php if ($pageactive=="artinsersion") {echo "active";
                            } ?>"
                            <?php if ($pageactive=="artinsersion") {echo "aria-current=\"page\"";
                            } ?>>
                                Art, Culture & Insertion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="financeurspartenaires.php" rel="btfinanceurspartenaires"
                            class="nav-link btfinanceurspartenaires
                            <?php if ($pageactive=="financeurspartenaires") {echo "active";
                            } ?>"
                            <?php if ($pageactive=="financeurspartenaires") {echo "aria-current=\"page\"";
                            } ?>>
                                Financeurs & partenaires
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" rel="btcontact"
                            class="nav-link btcontact
                            <?php if ($pageactive=="contact") {echo "active";
                            } ?>"
                            <?php if ($pageactive=="contact") {echo "aria-current=\"page\"";
                            } ?>>
                                Contact
                            </a>
                        </li>
                        <li class="nav-item small-link">
                            <a href="mentionslegales.php" rel="btmentionslegales"
                            class="nav-link btmentionslegales
                            <?php if ($pageactive=="mentionslegales") {echo "active";
                            } ?>"
                            <?php if ($pageactive=="mentionslegales") {echo "aria-current=\"page\"";
                            } ?>>
                                Mentions légales
                            </a>
                        </li>
                    </ul>
                </div>

            </div><!-- container -->
        </nav>
    </header>

    <main role="main" id="contenu">
    <!-- Afficher le fil d'ariane en dehors de la page d'accueil -->
    <?php if ($pageactive!="accueil") {?>
        <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php" title="Accueil">Accueil</a>&nbsp;</li>
            <li> • <?php echo $ogtitle ?></li>
        </ol>
        </div>
    <?php } ?>

