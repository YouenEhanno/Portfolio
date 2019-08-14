<?php
include 'php/regroup.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Gigg's Irish Pub - Nantes</title>
    </head>
    <body onload="switchAlcohols()">
        <header>

            <nav id="navigation" class="onepage navbar navbar-expand-lg fixed-top scrolling-navbar border-bottom shadow-sm p-3 mb-5 rounded navbar-dark">		
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
                            <a class="nav-link menus" href="#menus">Menus
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link events" href="#onepageEvents">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#home">
                                <img src="img/logo_giggs.png" alt="logo">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link galerie" href="#onepageGalerie">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link contact" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>

        <main>
            <div id="home">

                <h1>Welcome to GIGG'S Irish Pub</h1>
                
                <p>Located opposite the cathedral of Nantes, this pub offers many beers but also delicious burgers and traditional dishes that are worth the detour!</p>
                <p>Sports fan of all kinds? Gigg's broadcasts games of different sports on these many screens!</p>

            </div>

            <div id="menus">

                <nav class="choice">

                    <a class="alcohols spin circle" href="#">
                        <i class="icon fas fa-beer"></i>
                    </a>

                    <a class="meals spin circle" href="#">
                        <i class="icon fas fa-utensils"></i>
                    </a>

                </nav>

                <div class="drink">
                    <div class="beer">
                    
                        <div class="draftbeer">
                            <ul>
                                <li>
                                    <h3>Draft Beers</h3>
                                </li>
                                <?php foreach($draughtBeers as $draughtBeer): ?>
                                    <li><span class="caps"> <?= $draughtBeer['name'] ?></span> - 25cl / 50cl <span class="point">.....</span> <strong><?= $draughtBeer['price_25cl'] ?>€ / <?= $draughtBeer['price_50cl'] ?>€</strong></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="beer-bottle">
                            <ul>
                                <li>
                                    <h3>Wines</h3>
                                </li>
                                <?php foreach($wines as $wine): ?>
                                    <li><span class="caps"> <?= $wine['name'] ?></span> - 12cl / 50cl / 75cl <span class="point">.....</span> <strong> <?= $wine['price_12cl'] ?>€ / <?= $wine['price_50cl'] ?>€ / <?= $wine['price_75cl'] ?>€</strong></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="whiskey">
                            <ul>
                                <li>
                                    <h3>Whiskeys</h3>
                                </li>
                                <?php foreach($whiskeys as $whiskey): ?>
                                    <li><span class="caps"> <?= $whiskey['name'] ?></span> <span class="point">.....</span><strong> <?= $whiskey['price'] ?>€</strong></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <a onclick="openInNewTab('menus/<?= $menusDrinks['pdf'] ?>.pdf');" href="menus/<?= $menusDrinks['pdf'] ?>.pdf" class="cards">Drinks Card</a> <br>
                    <p>HAPPY HOUR - Monday to Friday from 5pm to 8pm</p>
                    <em>Alcohol abuse is dangerous for health. To consume with moderation.</em>
                </div>
                


                <div class="eat">
                    <div class="food">
                        
                        <div class="burgers">
                            <ul>
                                <li>
                                    <h3>Burgers</h3>
                                </li>
                                <?php foreach($burgers as $burger): ?>
                                    <li class="line"><span class="caps"> <?= $burger['name'] ?></span> <span class="point">.....</span><strong> <?= $burger['price_simple'] ?>€</strong></li>
                                    <li><em><?= $burger['description_en'] ?></em></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="brunch">
                            <ul>
                                <li>
                                    <h3>Salads</h3>
                                </li>
                                <?php foreach($salads as $salad): ?>
                                    <li><span class="caps"> <?= $salad['name'] ?></span> <span class="point">.....</span><strong> <?= $salad['price'] ?>€</strong></li>
                                    <li><em><?= $salad['description_en'] ?></em></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="specials">
                            <ul>
                                <li>
                                    <h3>Dishes</h3>
                                </li>
                                <?php foreach($dishes as $dish): ?>
                                    <li><span class="caps"> <?= $dish['name'] ?></span> <span class="point">.....</span><strong> <?= $dish['price'] ?>€</strong></li>
                                    <li><em><?= $dish['description_en'] ?></em></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <a onclick="openInNewTab('menus/<?= $menusFoods['pdf'] ?>.pdf');" href="menus/<?= $menusFoods['pdf'] ?>.pdf" class="cards">Foods Card</a> <br>
                    <small>V : Suits for Vegetarians</small>
                </div>


            </div>
            <hr>

            <div id="onepageEvents">
                <h2>The Gigg's Events!</h2>
                <div id="events">
                        <?php foreach($events as $event): ?>
                    <div class="event">
                            <h3><?= $event['title_en'] ?></h3>
                            <img src="img/<?= $event['img'] ?>.jpg" alt="<?= $event['img'] ?>">
                            <p><?= $event['description_en'] ?></p>
                    </div>
                        <?php endforeach; ?>
                </div>
            </div>

            <hr>

            <div id="onepageGalerie">
                <h2>Gigg's photo gallery!</h2>
                <div>
                    <div id="galerie" class="">
                        <?php foreach($photos as $photo): ?>
                            <div class="thumb">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img/<?= $photo['img'] ?>.jpg" data-target="#image-gallery">
                                    <img class="img-responsive" src="img/<?= $photo['img'] ?>.jpg" alt="image1">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>


                    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive" src="">
                            </div>
                            <div class="modal-footer">

                                <div class="col-md-2">
                                    <button type="button" class="btn btn-dark btn-lg" id="show-previous-image">Previous</button>
                                </div>

                                <div class="col-md-8 text-justify" id="image-gallery-caption">
                                </div>

                                <div class="col-md-2">
                                    <button type="button" id="show-next-image" class="btn btn-dark btn-lg">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d310.6258846508068!2d-1.5516065745682974!3d47.21815979630325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805eea484c1c7fb%3A0xf3b110daa541b30f!2sGigg&#39;s+Irish+Pub!5e0!3m2!1sfr!2sfr!4v1552904175375" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div id="contact">

                <ul class="place">
                    <li><p><i class="fas fa-map-marker-alt"></i> 4 Place Saint-Pierre, 44000 Nantes</p></li>
                    <li><p><i class="fas fa-mobile-alt"></i> 02 52 10 79 64</p></li>
                    <li><a onclick="openInNewTab('https:/\/www.facebook.com/giggsirishpub/');" href="https://www.facebook.com/giggsirishpub/"><i class="fab fa-facebook-square"></i> Gigg's Irish Pub</a></li>
                </ul>
                <a href="#home">
                    <img src="img/logo_giggs.png" alt="logo">
                </a>
                <ul class="schedule">
                    <li>Open every day</li>
                    <li>Monday to Friday</li>
                    <li>9am to 2am</li>
                    <li>Saturday and Sunday</li>
                    <li>10am to 2am</li>
                </ul>

            </div>

        </main>
        <footer>
            <a onclick="openInNewTab('http:/\/www.youenehanno.fr');" href="http://www.youenehanno.fr">Copyright 2019 Youen EHANNO</a>
        </footer>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="js/main.js"></script>
    </body>
</html>