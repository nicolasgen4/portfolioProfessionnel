<?php
//Include mail functions
require_once 'include/fonctions.php';
require_once 'include/controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio de Nicolas Loizeau, développeur web junior full stack 
    formé à la CCI Open Lab, une école du numérique en Charente à Angoulême">
    <meta name="keywords" content="développeur web, développeur, front-end, back-end, 
    développement web, web mobile, application web, portfolio, 
    interface utilisateur, html, css, javascript, php, mysql, sass, php, opquast, 
    langages, framework, développeurs, responsive, intégrateur, ergonomie,
    sites internet, projet web, base de données, pages web, webdesign, 
    sites web, gestion de projet, formation web, cci, cciopenlab">
    <meta name="author" content="Nicolas Loizeau">
    <link rel="canonical" href="https://nicolas.cciopenlab.fr/">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Portfolio Nicolas Loizeau">
    <meta property="og:image" content="https://nicolas.cciopenlab.fr/images/arts/vignette.png">
    <meta property="og:description" content="Portfolio de Nicolas Loizeau, développeur web junior full stack 
    formé à la CCI Open Lab, une école du numérique en Charente à Angoulême">
    <meta property="og:url" content="https://nicolas.cciopenlab.fr/">
    <meta property="og:site_name" content="cciopenlab">
    <title>Portfolio | Nicolas Loizeau</title>
    <link rel="icon" type="image/svg+xml" href="images/arts/favicon.svg">
    <link rel="stylesheet" href="assets/css/style.css" media="screen">
    <link rel="stylesheet" href="assets/css/googlefonts.css" media="screen">
    <link rel="stylesheet" href="assets/css/fontawesome.css" media="screen">
    <script src="assets/js/bootstrap.bundle.js" defer></script>
    <script src="assets/js/customscripts.js" defer></script>
</head>

<body>

    <!--////////////////////////
        START THE NAVBAR SECTION
    /////////////////////////-->
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="portfolio">
                <svg width="70" height="70" stroke="#d4d4c0" viewBox='0 0 96 96' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M0 0H96V96H0V0Z' fill='#33383A' />
                    <path d='M37.6 66.4L19.2 48L37.6 29.6L32 24L8 48L32 72L37.6 66.4ZM58.4 66.4L76.8 48L58.4 29.6L64 24L88 48L64 72L58.4 66.4V66.4Z' fill='#99C7ED' />
                </svg>
                <span style="display: none;">Accueil</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#langages">langages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">contact</a>
                    </li>
                </ul>
                <a href="https://github.com/nicolasgen4" title="Ouvrir dans un nouvel onglet" target="_blank" rel="noreferrer noopener" 
                class="rounded-pill btn-rounded btn-link">
                mon github
                    <span>
                        <i class="fa-brands fa-github"></i>
                    </span>
                </a>
            </div>
        </div>
    </nav>

    <main>
        <!--////////////////////////
        START THE INTRO SECTION
    /////////////////////////-->
        <section id="home" class="intro-section">
            <div class="container">
                <div class="row align-items-center">
                    <!--///////////////////////////
                Start the content for the intro
                ////////////////////////////-->
                    <div class="col-md-6 intros">
                        <h1 class="display-4">
                            <span class="display-4--intro">développeur web junior</span>
                            <span class="display-4--description lh-base">
                                Bonjour, je suis Nicolas Loizeau. Un développeur web junior full stack,
                                diplômé de la CCI Open Lab une école du numérique en Charente. Découvrez
                                dans mon portfolio toutes mes applications web
                                responsive et ergonomiques : des projets personnels ou en groupe en méthode agile.
                            </span>
                        </h1>
                        <a href="#portfolio" class="rounded-pill btn-rounded">Mes réalisations
                            <span class="me-1">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                    <!--//////////////////////////////////
                Start the content for the illustration
                ///////////////////////////////////-->
                    <div class="col-md-6 intros text-end">
                        <div>
                            <img src="images/arts/intro-section-illustration.png" alt="Langages du Web" height="500" width="500" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#333333" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,160C672,160,768,224,864,208C960,192,1056,96,1152,80C1248,64,1344,128,1392,160L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </section>

        <!--///////////////////////
    START THE PORTFOLIO SECTION
    ///////////////////////-->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row text-center mb-5">
                    <h1 class="display-5 fw-bold text-capitalize">mes applications web</h1>
                    <div class="heading-line"></div>
                    <p class="lead">
                        toutes mes réalisations <strong>web</strong> sont <strong>responsive, avec des interfaces ergonomiques</strong>.
                        Elles respectent les <strong>règles Opquast de qualité web</strong> et l'expérience utilisateur.
                        Ces <strong>applications web</strong> en <strong>responsive design</strong>
                        sont réalisées dans le cadre de <strong>projets</strong> personnels, en groupe ou
                        durant mes stages.
                    </p>
                </div>
                <!--//////////
            Filter buttons
            ///////////
            <div class="row mt-5 mb-4 g-3 text-center">
                <div class="col-md-12">
                    <button class="btn btn-outline-primary" type="button">All</button>
                    <button class="btn btn-outline-primary" type="button">websites</button>
                    <button class="btn btn-outline-primary" type="button">design</button>
                    <button class="btn btn-outline-primary" type="button">mockup</button>
                </div>
            </div>
            -->
                <!--/////////////////////
            Start the portfolio items
            //////////////////////-->
                <div class="row">
                    <section class="col-lg-4 col-md-6">
                        <a href="https://nicolas.cciopenlab.fr/premier_projet/index.html" class="portfolio-box shadow">
                            <img src="images/portfolio/portfolio-1.png" alt="Un site web Hello Word" width="416" height="288" class="img-fluid" loading="lazy">
                            <div class="portfolio-info">
                                <div class="caption">
                                    <h4>mon site "hello world"</h4>
                                    <p>mes premiers pas réalisés en autodidacte avant ma
                                        <strong>formation développeur web</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </section>
                    <section class="col-lg-4 col-md-6">
                        <a href="https://francais.cciopenlab.fr/" class="portfolio-box shadow">
                            <img src="images/portfolio/portfolio-2.png" alt="Une application CRUD" width="416" height="288" class="img-fluid" loading="lazy">
                            <div class="portfolio-info">
                                <div class="caption">
                                    <h4>une application crud</h4>
                                    <p>un <strong>projet web de groupe</strong> : une <strong>application web en MVC</strong>
                                        avec son <strong>back-office</strong></p>
                                </div>
                            </div>
                        </a>
                    </section>
                    <section class="col-lg-4 col-md-6">
                        <a href="https://nicolas.cciopenlab.fr/meteo/index.html" class="portfolio-box shadow">
                            <img src="images/portfolio/portfolio-3.png" alt="Une application avec API météo" width="416" height="288" class="img-fluid" loading="lazy">
                            <div class="portfolio-info">
                                <div class="caption">
                                    <h4>une application météo</h4>
                                    <p>une <strong>application mobile</strong>, utilisant les données d'une <strong>API</strong> météo
                                        grâce à <strong>JavaScript</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </section>
                    <section class="col-lg-4 col-md-6">
                        <a href="https://github.com/nicolasgen4/portfolioProfessionnel" class="portfolio-box shadow">
                            <img src="images/portfolio/portfolio-4.png" alt="Portfolio Professionnel" width="416" height="288" class="img-fluid" loading="lazy">
                            <div class="portfolio-info">
                                <div class="caption">
                                    <h4>ce portfolio professionnel</h4>
                                    <p>le <strong>code source</strong> de ce portfolio professionnel
                                    réalsié avec <strong>Sass</strong> et <strong>BootStrap</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </section>
                    <section class="col-lg-4 col-md-6">
                        <a href="https://nicolas.cciopenlab.fr/site-coiffeuse/" class="portfolio-box shadow">
                            <img src="images/portfolio/portfolio-5.webp" alt="Un site dynanimque avec e-commerce" width="416" height="288" class="img-fluid" loading="lazy">
                            <div class="portfolio-info">
                                <div class="caption">
                                    <h4>un site dynamique complet</h4>
                                    <p>mon <strong>projet web en stage</strong> : un <strong>site internet dynamique</strong>
                                        avec son <strong>back-office CRUD</strong> et un <strong>e-commerce</strong></p>
                                </div>
                            </div>
                        </a>
                    </section>
                    <section class="col-lg-4 col-md-6">
                        <a href="https://github.com/nicolasgen4/wp_citationsAleatoires" class="portfolio-box shadow">
                            <img src="images/portfolio/portfolio-6.svg" alt="Un plugin Wordpress" width="416" height="288" class="img-fluid" loading="lazy">
                            <div class="portfolio-info">
                                <div class="caption">
                                    <h4>une extension Wordpress</h4>
                                    <p>un pluging <strong>Wordpress</strong>, avec ses fonctions <strong>CRUD</strong>
                                        et sa table de <strong>données</strong> générant des citations aléatoires
                                    </p>
                                </div>
                            </div>
                        </a>
                    </section>
                    <section class="col-lg-4 col-md-6">
                        <a href="https://github.com/nicolasgen4/simpleVitrine" class="portfolio-box shadow">
                            <img src="images/portfolio/portfolio-6.svg" alt="Un thème Wordpress" width="416" height="288" class="img-fluid" loading="lazy">
                            <div class="portfolio-info">
                                <div class="caption">
                                    <h4>un thème Wordpress</h4>
                                    <p>une expérimentation avec <strong>Wordpress</strong>, un thème custom simple et 
                                    <strong>responsive</strong> idéal pour les <strong>sites vitrines</strong>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
        </section>

        <!--/////////////////
    START THE FAQ SECTION
    //////////////////-->
        <section id="faq" class="faq">
            <div class="container">
                <div class="row text-center">
                    <h1 class="display-5 fw-bold text-uppercase">faq</h1>
                    <div class="heading-line"></div>
                    <p class="lead">des informations utiles sur ma <strong>formation de développeur web et web mobile</strong>, mes
                        <strong>projets professionnels futurs</strong>, mes <strong>réalisations web</strong> et tout ce que
                        nous pouvons faire ensemble
                    </p>
                </div>
                <!--/////////////
            accordion content
            //////////////-->
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="accordion" id="accordionExample">
                            <!--////////////
                        accordion item 1
                        /////////////-->
                            <section class="accordion-item shadow mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Que pouvons-nous créer ensemble ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Je vous apporte des solutions de sites web de A à Z, depuis le <strong>design de
                                            maquettes</strong>, l'intégration <strong>front-end</strong> en <strong>HTML et CSS</strong> et les
                                        interactions utilisateurs avec
                                        <strong>JavaScript</strong>. Vous pourrez gérer ces applications dynamiques grâce à
                                        <strong>PHP</strong>, et j'intègre vos données en concevant des <strong>bases de
                                            données MySQL</strong>. Enfin, je vous
                                        accompagne pour mettre en ligne, optimiser et référencer votre <strong>site internet</strong>.
                                    </div>
                                </div>
                            </section>
                            <!--////////////
                        accordion item 2
                        /////////////-->
                            <section class="accordion-item shadow mb-3">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Quelles sont mes qualités ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        J'aime apporter des solutions d'<strong>ergonomie</strong> à des problèmes concrets.
                                        Je veille constamment à être ponctuel dans mes tâches et réactif aux messages laissés à mon encontre.
                                        J'apprécie réfléchir à des concepts pour mieux les expliquer à autrui et travailler en équipe.
                                        J'ai une nette préférence pour l'action et l'expérimentation plutôt que la théorie.
                                        De plus, j'ai une excellente maitrise du français et une solide compréhension de
                                        l'anglais.
                                    </div>
                                </div>
                            </section>
                            <!--////////////
                        accordion item 3
                        //////////////-->
                            <section class="accordion-item shadow mb-3">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Quels sont mes projets futurs ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        J'aimerais continuer à apprendre professionnellement et me diriger vers les
                                        technologies du <strong>back-end</strong>. À court terme, je compte apprendre un
                                        framework <strong>PHP</strong> comme <strong>Laravel</strong> ou
                                        <strong>Symfony</strong>, et expérimenter les thèmes
                                        <strong>Wordpress</strong> personnalisés. À long terme, j'aimerais gagner en
                                        autonomie avec, à l'avenir, la possibilité d'être freelance en création de site.
                                    </div>
                                </div>
                            </section>
                            <!--////////////
                        accordion item 4
                        /////////////-->
                            <section class="accordion-item shadow mb-3">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Quel est mon diplôme ?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ma formation de <strong>développeur web</strong> à la <strong>CCI Open Lab</strong> s'est terminée en Décembre
                                        2022, après la présentation à un jury de développeurs de mes projets de l'année. Je suis titulaire
                                        d'un titre professionnel équivalent à un bac+2.
                                    </div>
                                </div>
                            </section>
                            <!--////////////
                        accordion item 5
                        //////////////-->
                            <section class="accordion-item shadow mb-3">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        À propos de ce portfolio ?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Ce portfolio a été l'occasion de coder et de créer un site pour la première fois avec
                                        <strong>Bootstrap</strong>, <strong>Sass</strong> et <strong>Node.js</strong>. C'est
                                        le fruit d'une initiative
                                        et d'un travail personnel, puisque ces technologies n'étaient pas au programme de ma
                                        formation. <strong>Node.js</strong> a été utilisé
                                        pour installer les dépendances avec des commandes npm et compiler le
                                        <strong>CSS</strong> à partir du <strong>Sass</strong>. Je me suis appuyé sur ce <a href="https://youtu.be/iJKCj8uAHz8" target="_blank" rel="noreferrer noopener">
                                            cours en anglais sur Youtube</a>.
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--//////////////////////
    START THE LANGAGES SECTION
    ///////////////////////-->
        <section id="langages" class="langages">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#333333" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,117.3C384,128,480,224,576,229.3C672,235,768,149,864,149.3C960,149,1056,235,1152,261.3C1248,288,1344,256,1392,240L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                </path>
            </svg>
            <div class="container">
                <div class="row text-center">
                    <h4 class="display-5 fw-bold lead mb-3">mes langages de programmation</h4>
                    <div class="heading-line mb-5"></div>
                </div>
            </div>
            <!--///////////////////
        Start the langages logo
        ////////////////////-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-2">
                        <div class="langages_logo-box shadow-sm">
                            <img src="images/tools/html5-logo.png" alt="Logo HTML5" title="HTML5" class="img-fluid" loading="lazy" width="36" height="50">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="langages_logo-box shadow-sm">
                            <img src="images/tools/css3-logo.png" alt="Logo CSS3" title="CSS3" class="img-fluid" loading="lazy" width="36" height="50">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="langages_logo-box shadow-sm">
                            <img src="images/tools/javascript-Logo.png" alt="Logo JavaScript" title="JavaScript" class="img-fluid" loading="lazy" width="35" height="50">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="langages_logo-box shadow-sm">
                            <img src="images/tools/php-logo.png" alt="Logo PHP8" title="PHP8" class="img-fluid" loading="lazy" width="95" height="50">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="langages_logo-box shadow-sm">
                            <img src="images/tools/mysql-logo.png" alt="Logo MySQL" title="MySQL" class="img-fluid" loading="lazy" width="97" height="50">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="langages_logo-box shadow-sm">
                            <img src="images/tools/figma-logo.png" alt="Logo Figma" title="Figma" class="img-fluid" loading="lazy" width="152" height="50">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="langages_logo-box shadow-sm">
                            <img src="images/tools/opquast.svg" alt="Logo Opquast" title="Opquast" class="img-fluid" loading="lazy" width="290" height="65">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="langages_logo-box shadow-sm">
                            <img src="images/tools/sass.svg" alt="Logo Sass" title="Sass" class="img-fluid" loading="lazy" width="64" height="48">
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#333333" fill-opacity="1" d="M0,288L48,261.3C96,235,192,181,288,181.3C384,181,480,235,576,213.3C672,192,768,96,864,96C960,96,1056,192,1152,218.7C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </section>

        <!--//////////////////////
    START THE CONTACT SECTION
    ///////////////////////-->
        <section id="contact" class="get-started">
            <div class="container">
                <div class="row text-center">
                    <h1 class="display-5 fw-bold text-capitalize">contactez-moi</h1>
                    <div class="heading-line"></div>
                </div>

                <!--/////////////////
            Start the CTA content
            //////////////////-->
                <div class="row info">
                    <div class="col-12 col-lg-6 shadow p-3 contact-msg">
                        <section class="cta-info w-100">
                            <h4 class="display-6">entamons la discussion</h4>
                            <p class="lh-md">
                                Un projet pour travailler ensemble ? Des questions sur mes technologies web ? Sur mes futurs projets
                                ? Sur mes sites internet ?
                            </p>
                            <!--<h3 class="display-5-/-brief">what will be the next step ?</h3>-->
                            <ul class="cta-info__list">
                                <li><i class="fa-solid fa-check"></i>Je vous réponds personnellement par email</li>
                                <li><i class="fa-solid fa-check"></i>Je ne communique aucune de vos données personnelles
                                </li>
                                <li><i class="fa-solid fa-check"></i>Ce formulaire ne conserve aucune de vos données
                                    personnelles</li>
                            </ul>
                            <?php if (isset($msg['message'])) : ?>
                                <div class="message <?= $msg['message']['code'] ?>"><?= $msg['message']['text'] ?></div>
                            <?php endif ?>
                        </section>
                    </div>
                    <div class="col-12 col-lg-6 shadow p-3">
                        <section class="form w-100 pb-2">
                            <h4 class="display-5--title mb-4">Écrivez votre message</h4>
                            <form action="<?= $_SERVER['PHP_SELF'] . '#contact'; ?>" method="post" class="row">
                                <div class="col-lg-12 mb-3 honeypot">
                                    <label for="name">Identité *</label>
                                    <input type="text" name="name" id="name" class="shadow form-control form-control-lg">
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="inputFirstName">Prénom *</label>
                                    <input type="text" name="inputFirstName" id="inputFirstName" maxlength="50" value="<?php echo isset($_POST['inputFirstName']) ? $firstName : ''; ?>" class="shadow form-control form-control-lg" required>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="inputLastName">Nom *</label>
                                    <input type="text" name="inputLastName" id="inputLastName" maxlength="50" value="<?php echo isset($_POST['inputLastName']) ? $lastName : ''; ?>" class="shadow form-control form-control-lg" required>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="inputEmail">Email *</label>
                                    <input type="email" name="inputEmail" id="inputEmail" maxlength="50" value="<?php echo isset($_POST['inputEmail']) ? $email : ''; ?>" class="shadow form-control form-control-lg" required>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="inputText">Votre message *</label>
                                    <textarea name="inputText" id="inputText" rows="8" placeholder="Saisissez votre message (maximum 2000 caractères)" maxlength="2000" class="shadow form-control form-control-lg" required><?php echo isset($_POST['inputText']) ? $text : ''; ?></textarea>
                                </div>
                                <div class="text-center d-grid mt-1">
                                    <button type="submit" name="submit" class="btn rounded-pill pt-3 pb-3">
                                        envoyer
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                                <div class="col-lg-12">
                                    <p>* Ces champs sont obligatoires</p>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!--
        Warning
        Unused sections in comments
        Add / in css class -/-title, -/-brief, -/-subtitle due to w3cvalidator error :
        The document is not mappable to XML 1.0 due to two consecutive hyphens in a comment.
        Remove / if needeed
    -->

        <!--//////////////////////
    START THE SERVICES SECTION
    ///////////////////////
    <section id="services" class="services">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-5 fw-bold">Our services</h1>
                <div class="heading-line mb-1"></div>
            </div>
            /////////////////////////
            Start the description content
            //////////////////////////
            <section class="row pt-2 pb-2 mt-0 mb-3">
                <div class="col-md-6 border-right">
                    <div class="p-3">
                        <h2 class="fw-bold text-capitalize text-center">
                            Our services range from initial design to deployment anywhere anytime
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 text-start">
                        <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur esse
                            voluptas placeat quis nihil? Quam at repellendus excepturi iusto deserunt. Incidunt
                            excepturi impedit id maiores facere minima. Facilis, nihil asperiores.</p>
                    </div>
                </div>
            </section>
        </div>
        //////////////////////////////
        Start the content for the services
        ///////////////////////////////
        <div class="container">
            ////////////////////////
            Start the marketing content
            /////////////////////////
            <section class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon fas fa-paper-plane"></div>
                        <h3 class="display-5-/-title mt-1">marketing</h3>
                        <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum officia neque
                            tempora nam maiores aliquid. Doloremque dolore tempore cumque neque voluptate hic vero nemo
                            fugiat, consectetur error, quisquam esse assumenda?</p>
                        <button type="button" class="rounded-pill btn-rounded">Learn more
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="images/services/placeholder.png" alt="marketing illustration" class="img-fluid">
                    </div>
                </div>
            </section>
            ///////////////////////////////
            Start the web developpement content
            ////////////////////////////////
            <section class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
                    <div class="services__pic">
                        <img src="images/services/placeholder.png" alt="web developpement illustration"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon fas fa-code"></div>
                        <h3 class="display-5-/-title mt-1">web developpement</h3>
                        <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum officia neque
                            tempora nam maiores aliquid. Doloremque dolore tempore cumque neque voluptate hic vero nemo
                            fugiat, consectetur error, quisquam esse assumenda?</p>
                        <button type="button" class="rounded-pill btn-rounded">Learn more
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </section>
            ///////////////////////////
            Start the cloud hosting content
            ////////////////////////////
            <section class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                        <div class="icon fas fa-cloud-upload-alt"></div>
                        <h3 class="display-5-/-title mt-1">cloud hosting</h3>
                        <p class="lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum officia neque
                            tempora nam maiores aliquid. Doloremque dolore tempore cumque neque voluptate hic vero nemo
                            fugiat, consectetur error, quisquam esse assumenda?</p>
                        <button type="button" class="rounded-pill btn-rounded">Learn more
                            <span>
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                        <img src="images/services/placeholder.png" alt="cloud hosting illustration" class="img-fluid">
                    </div>
                </div>
            </section>
        </div>
    </section>
                        -->

        <!--//////////////////////////
    START THE TESTIMONIALS SECTION
    ///////////////////////////
    <section id="testimonials" class="testimonials">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#333333" fill-opacity="1"
                d="M0,256L48,218.7C96,181,192,107,288,117.3C384,128,480,224,576,229.3C672,235,768,149,864,149.3C960,149,1056,235,1152,261.3C1248,288,1344,256,1392,240L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <div class="row text-center">
                <h1 class="display-5 fw-bold">Testimonials</h1>
                <hr style="width: 100px; height: 3px;" class="mx-auto">
                <p class="lead pt-1">what our clients are saying</p>
            </div>
            //////////////////////
            Start the carousel content
            ///////////////////////
            <div class="row align-items-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        ///////////
                        Carousel item 1
                        ////////////
                        <div class="carousel-item active">
                            /////////////
                            testimonials card
                            //////////////
                            <div class="testimonials__card">
                                <p class="lh-lg">
                                    <i class="fas fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut pariatur nostrum, magni
                                    laborum eius saepe inventore enim doloremque ad earum architecto alias facilis
                                    quasi, dolor iure quis eos minus hic.
                                    <i class="fas fa-quote-left"></i>
                                </p>
                                <div class="ratings p-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            //////////
                            client picture
                            ///////////
                            <div class="testimonials__picture">
                                <img src="images/testimonials/david.jpg" alt="client-picture"
                                    class="rounded-circle img-fluid">
                            </div>
                            //////////////
                            client name & role
                            ///////////////
                            <div class="testimonials__name">
                                <h3>David Legrand</h3>
                                <p class="fw-light">Formateur web développeur</p>
                            </div>
                        </div>
                        ///////////
                        Carousel item 2
                        ////////////
                        <div class="carousel-item">
                            /////////////
                            testimonials card
                            ///////////////
                            <div class="testimonials__card">
                                <p class="lh-lg">
                                    <i class="fas fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut pariatur nostrum, magni
                                    laborum eius saepe inventore enim doloremque ad earum architecto alias facilis
                                    quasi, dolor iure quis eos minus hic.
                                    <i class="fas fa-quote-left"></i>
                                </p>
                                <div class="ratings p-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            //////////
                            client picture
                            ///////////
                            <div class="testimonials__picture">
                                <img src="images/testimonials/nicolas.jpg" alt="client-picture"
                                    class="rounded-circle img-fluid">
                            </div>
                            /////////////
                            client name & role
                            ///////////////
                            <div class="testimonials__name">
                                <h3>Nicolas Loizeau</h3>
                                <p class="fw-light">Apprenant web développeur</p>
                            </div>
                        </div>
                        ///////////
                        Carousel item 3
                        ////////////
                        <div class="carousel-item">
                            /////////////
                            testimonials card
                            //////////////
                            <div class="testimonials__card">
                                <p class="lh-lg">
                                    <i class="fas fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut pariatur nostrum, magni
                                    laborum eius saepe inventore enim doloremque ad earum architecto alias facilis
                                    quasi, dolor iure quis eos minus hic.
                                    <i class="fas fa-quote-left"></i>
                                </p>
                                <div class="ratings p-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            //////////
                            client picture
                            ///////////
                            <div class="testimonials__picture">
                                <img src="images/testimonials/benoit.jpg" alt="client-picture"
                                    class="rounded-circle img-fluid">
                            </div>
                            //////////////
                            client name & role
                            ///////////////
                            <div class="testimonials__name">
                                <h3>Benoit Lanceau</h3>
                                <p class="fw-light">Apprenant web développeur</p>
                            </div>
                        </div>
                        ///////////
                        Carousel item 4
                        ////////////
                        <div class="carousel-item">
                            /////////////
                            testimonials card
                            //////////////
                            <div class="testimonials__card">
                                <p class="lh-lg">
                                    <i class="fas fa-quote-left"></i>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut pariatur nostrum, magni
                                    laborum eius saepe inventore enim doloremque ad earum architecto alias facilis
                                    quasi, dolor iure quis eos minus hic.
                                    <i class="fas fa-quote-left"></i>
                                </p>
                                <div class="ratings p-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            //////////
                            client picture
                            ///////////
                            <div class="testimonials__picture">
                                <img src="images/testimonials/kevin.jpg" alt="client-picture"
                                    class="rounded-circle img-fluid">
                            </div>
                            /////////////
                            client name & role
                            ///////////////
                            <div class="testimonials__name">
                                <h3>Kevin Gryngier</h3>
                                <p class="fw-light">Apprenant web développeur</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-warning fas fa-long-arrow-alt-left" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        </button>
                        <button class="btn btn-outline-warning fas fa-long-arrow-alt-right" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#333333" fill-opacity="1"
                d="M0,288L48,261.3C96,235,192,181,288,181.3C384,181,480,235,576,213.3C672,192,768,96,864,96C960,96,1056,192,1152,218.7C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
                        -->
    </main>

    <!--////////////////////
    START THE FOOTER SECTION
    /////////////////////-->
    <footer class="footer">
        <!--
        <div class="container">
            <div class="row text-break">
                /////////////////////////
                Content for the mobile number
                //////////////////////////
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            <path d="M15 7a2 2 0 0 1 2 2" />
                            <path d="M15 3a6 6 0 0 1 6 6" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="#" class="contact-box__info-/-title">05.45.98.87.56</a>
                        <p class="contact-box__info-/-subtitle">24h/24 7jours/7</p>
                    </div>
                </div>
                ////////////////////
                Content for the location
                /////////////////////
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="18" y1="6" x2="18" y2="6.01" />
                            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                            <line x1="9" y1="4" x2="9" y2="17" />
                            <line x1="15" y1="15" x2="15" y2="20" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="#" class="contact-box__info-/-title">Angoulême FRANCE</a>
                        <p class="contact-box__info-/-subtitle">123 Rue Bidon</p>
                    </div>
                </div>
                /////////////////
                Content for the email
                //////////////////
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="3 9 12 15 21 9 12 3 3 9" />
                            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                            <line x1="3" y1="19" x2="9" y2="13" />
                            <line x1="15" y1="13" x2="21" y2="19" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="#" class="contact-box__info-/-title">monadressemail@gmail.com</a>
                        <p class="contact-box__info-/-subtitle">Online support</p>
                    </div>
                </div>
            </div>
        </div>
                        -->

        <!--//////////////////////////////
            START THE SOCIAL MEDIA CONTENT
        ///////////////////////////////-->
        <div class="footer-sm">
            <div class="container">
                <div class="row py-4 text-center">
                    <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                        Retrouvez-moi sur les réseaux sociaux
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <a href="https://www.linkedin.com/in/nicolasdev/" target="_blank" rel="noreferrer noopener" title="Aller sur Linkedin">
                            <span>Mon linkedin</span><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/nicolasgen4" target="_blank" rel="noreferrer noopener" title="Aller sur Github">
                            <span>Mon github</span><i class="fab fa-github"></i></a>
                        <a href="https://my.indeed.com/p/nicolasl-24f445q" target="_blank" rel="noreferrer noopener" title="Aller sur Indeed">
                            <span>Mon profil Indeed</span><i class="fa-solid fa-briefcase"></i></a>
                        <a href="https://welovedevs.com/app/fr/developer/nicolas-developpeur-web-junior-full-stack" target="_blank" rel="noreferrer noopener" title="Aller sur WeLoveDevs">
                            <span>Mon profil WeLoveDevs</span><i class="fa-brands fa-dev"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!--//////////////////////////////////////
            START THE CONTENT FOR THE AUTHOR INFO
        ///////////////////////////////////////-->
        <div class="container mt-5">
            <div class="row justify-content-center mt-3 pb-3 campany">
                <div class="col-12 col-sm-6 col-lg-6">
                    <h5 class="text-capitalize fw-bold">développeur full stack junior</h5>
                    <hr class="bg-white d-inline-bloc mb-4 campany-line">
                    <p class="lh-lg">
                        Découvrez ma formation de développeur web, mon formateur en développement web,
                        mes solutions techniques et mes pages web conçues durant ma formation à la CCI Open Lab,
                        une école du numérique en Charente.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                    <h5 class="fw-bold">mes réalisations</h5>
                    <hr class="bg-white d-inline-bloc mb-4 campany-line">
                    <ul class="list-inline campany-list">
                        <li><a href="https://nicolas.cciopenlab.fr/premier_projet/index.html">mon hello world</a></li>
                        <li><a href="https://francais.cciopenlab.fr/">mon application CRUD</a></li>
                        <li><a href="https://nicolas.cciopenlab.fr/meteo/index.html">mon API météo</a></li>
                        <li><a href="https://github.com/nicolasgen4/portfolioProfessionnel">mon portfolio</a></li>
                        <li><a href="https://nicolas.cciopenlab.fr/site-coiffeuse/">mon projet de stage</a></li>
                        <li><a href="https://github.com/nicolasgen4/wp_citationsAleatoires">mon plugin Wordpress</a></li>
                        <li><a href="https://github.com/nicolasgen4/simpleVitrine">mon thème Wordpress</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                    <h5 class="fw-bold">liens utiles</h5>
                    <hr class="bg-white d-inline-bloc mb-4 campany-line">
                    <ul class="list-inline campany-list">
                        <li><a href="https://www.ccicharente-formation.fr/cci-creative/cci-open-lab/">ma formation</a></li>
                        <li><a href="https://www.linkedin.com/in/labarbepousse/">mon formateur</a></li>
                        <li><a href="https://my.indeed.com/p/nicolasl-24f445q">mon profil Indeed</a></li>
                        <li><a href="https://welovedevs.com/app/fr/developer/nicolas-developpeur-web-junior-full-stack">mon profil WeLoveDevs</a></li>
                    </ul>
                </div>
                <!--
                <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                    <h5 class="fw-bold">Contact</h5>
                    <hr class="bg-white d-inline-bloc mb-4 campany-line">
                    <ul class="list-inline campany-list">
                        <li><a href="#">lorem ipsum</a></li>
                        <li><a href="#">lorem ipsum</a></li>
                        <li><a href="#">lorem ipsum</a></li>
                        <li><a href="#">lorem ipsum</a></li>
                    </ul>
                </div>
                -->
            </div>
        </div>
        <!--////////////////////////
            START THE COPYRIGHT INFO
        /////////////////////////-->
        <div class="footer-bottom pt-4 pb-4">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="footer-bottom__copyright">
                            <a href="mentions">Mentions Légales</a> | Réalisé par Nicolas Loizeau
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--//////////////
    BACK TO TOP BUTTON
    ///////////////-->
    <a href="#" class="shadow btn-primary rounded-circle button-top" style="display: none;" title="Remonter">
    <span>Remonter en haut de page</span>
        <i class="fas fa-chevron-up"></i>
    </a>
</body>

</html>