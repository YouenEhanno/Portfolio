<?php
    include '_inc.php';
?><!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="description" content="Développeur web sur Nantes | Bienvenue sur mon portfolio vous pourrez y retrouver tous les projets que j'ai réalisé.">
    <meta name="keywords" content="youen ehanno, youen, ehanno, web developer, développeur web, html, css, javascript, développeur web Nantes, Nantes">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <title>Youen Ehanno - Développeur web junior</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139215384-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-139215384-1');
    </script>

    </head>
    <body>


        <header id="home">

            

            <nav id="navigation" class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar border-bottom shadow-sm p-3 mb-5 rounded">		
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div>
                    <nav class="language">
                        <a onclick="openInNewTab('index.php');" href="index.php">FR</a> | 
                        <a onclick="openInNewTab('index_en.php');" href="index_en.php">EN</a>
                    </nav>
                </div>

                <div class="collapse navbar-collapse" id="navbarText">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>



            <div class="container bannerTitle">
                <h1 class="display-1">Youen EHANNO</h1>
                <p class="display-4">Développeur Web</p>
            </div>

        </header>

        <main>


            <div id="about">
                <h2 class="title">A Propos</h2>
                <div>
                    <div class="infos"> 
                        <div class="presentation-one">
                            <img class="img" src="img/photo_profil.png" alt="youen">
                            <div>
                                <a onclick="openInNewTab('CV-Youen-EHANNO.pdf');" id="cvButton" class="btn btn1 btn-outline-info btn-lg" href="CV-Youen-EHANNO.pdf">CV format PDF</a>
                            </div>
                        </div>
                        <div class="presentation-two">
                            <p>Après plusieurs missions d'interim, j'ai décidé de me reconvertir dans un domaine passionnant : le développement web!</p>
                            <p>Je me suis donc lancé dans une formation intensive en développement web proposée par la <a onclick="openInNewTab('https:/\/3wa.fr');" href="https://3wa.fr/">3W Academy</a>.</p>
                            <p>Pas de théorie inutile, 400 heures de formation pour coder, aller à l'essentiel avec des langages adaptés à la réalité du marché, demandant un travail personnel intensif.</p>
                        </div>
                    </div>
                        <div class="group-icon" >
                            <div class="icon">
                                <i class="fab fa-html5"></i>
                                <i class="fab fa-css3-alt"></i>
                                <i class="fab fa-js-square"></i>
                                <i class="fab fa-php"></i>
                                <i class="fab fa-wordpress"></i>
                                <i class="fab fa-bootstrap"></i>
                            </div>
                        </div>
                    </div>
            </div>


            <div id="portfolio">
                <h2 class="title">Portfolio</h2>

                <div class="projects">

                    <div class="hvrbox">
                        <img src="img/projet1.png" alt="Projet 1 3WAcademy" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                            <div class="hvrbox-text">
                                <p>Projet réalisé pour un PUB Irlandais à Nantes</p>
                                <p>Langages utilisés : HTML, CSS, JavaScript, PHP, SQL</p>
                                <a onclick="openInNewTab('projet1/index.php');" href="projet1/index.php">Voir le projet</a>
                            </div>
                        </div>
                    </div>


                    <div class="hvrbox">
                        <img src="img/projet2.jpg" alt="Projet 2 3WAcademy" class="hvrbox-layer_bottom">
                        <div class="hvrbox-layer_top">
                            <div class="hvrbox-text">
                                <p>Projet réalisé à l'école 3W Academy</p>
                                <p>Langages utilisés : HTML, CSS et JavaScript</p>
                                <a onclick="openInNewTab('projet2/index.html');" href="projet2/index.html">Voir le projet</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div id="contact">
                <h2 class="title">Contact</h2>

                <p class="question">Un projet, une question? Envoyez-moi un message!</p>

                <div class="message">

                    <div class="starter-template">

                        <?php if(array_key_exists('errors', $_SESSION)): ?>
                            <div class="alert alert-danger">
                                <?= implode('<br>', $_SESSION['errors']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(array_key_exists('success', $_SESSION)): ?>
                            <div class="alert alert-success">
                                Votre email a bien été envoyé
                            </div>
                        <?php endif; ?>

                        <form action="post_contact.php" method="POST">
                            <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                            <div class="row">
                                <div class="col-sm-5">
                                    <?= $form->text('name', 'Votre Nom'); ?>
                                </div>
                                <div class="col-sm-5">
                                    <?= $form->email('email', 'Votre Email'); ?>
                                </div>
                                <div class="text col-sm-11">
                                    <?= $form->textarea('message', 'Votre message'); ?>
                                    <?= $form->submit('Envoyer'); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </main>

        <footer>

            <div>
                <p><i class="far fa-envelope"></i> ehanno.youen@gmail.com</p>
                <p><i class="fas fa-mobile-alt"></i> 06 43 68 31 63</p>
                <p><i class="fab fa-linkedin"></i> <a onclick="openInNewTab('https:/\/www.linkedin.com/in/youen-ehanno-9bb2b3168');" href="https://www.linkedin.com/in/youen-ehanno-9bb2b3168">Youen Ehanno</a></p>
            </div>


        </footer>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html><?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>