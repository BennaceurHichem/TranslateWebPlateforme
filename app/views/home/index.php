
<?php
use Core\FH;
use Core\H;
use App\Models\Users;
use App\Models\Traducteur;
use App\Models\Devis;
use App\Models\Clientt;
?>
<?php $this->setSiteTitle('Home'); ?>

<?php $this->start('head'); ?>

<link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="<?=PROOT?>css/custom.css" media="screen" title="no title" charset="utf-8">
<script src="<?=PROOT?>js/jQuery-2.2.4.min.js"></script>
<script src="<?=PROOT?>js/bootstrap.min.js"></script>
<meta charset="UTF-8">

<script src='https://www.google.com/recaptcha/api.js'></script>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link href="css/fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
<!--load all styles -->
<script src="https://kit.fontawesome.com/a33d1d077b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/tooplate-style.css">
<!-- animate.css library for css animation -->
<link rel="stylesheet" href="css/animate.css">
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/card_style.scss">
<link rel="stylesheet" type="text/css" href="css/button.scss">
<link rel="text/javascript" href="js/main.js">
<link rel="text/javascript" href="js/Myanimations.js">



<?php

?>

<?php $this->end(); ?>



<?php $this->start('body'); ?>

<header>



</header>


<section class="main_part">
    <div class="container">



                <div class="row" id="main_row">




                    <div class="col-md-3">

                        <div>
                            <img class="main_img animated slideInLeft"
                                 src="<?=PROOT?>img/download.png"
                                 style="margin-right: 80px;height:250px;width: 250px ">
                        </div>



                    </div>
                    <div class="col-md-9">



                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?=PROOT?>img/ad.png"
                                         alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                                         alt="Second slide">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                         alt="Third slide">
                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->



                    </div>







                    <div>



                    </div>











                    <!--second 1/2 column -->



                </div>












    </div>

</section>


<section class="second_section">

    <div class="row">

        <div class="col-md-6">




            <div class="blog-list clearfix">
                <div class="blog-box row wow slideInLeft">
                    <div class="col-md-4">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="img/%E2%80%94Pngtree%E2%80%94social%20media%20icons%20set%20logo_3588882.png"
                                     alt="" class="img-fluid">
                                <div class="hovereffect"></div>
                            </a>
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="blog-meta big-meta col-md-8">
                        <h4><a href="single.html" title="">Saint-Malo</a></h4>
                        <p class="description-article-text">Je passe mes vacances à Saint-Malo. Vous connaissez ? C’est en Bretagne. J’adore cette région. J’y vais tous les ans. J’ai une maison là-bas. D’habitude, j’y reste trois semaines en été, mais cette année, j’y suis resté seulement deux semaines à cause de mon travail. L’hiver, en général, je n’y vais presque jamais parce qu’il fait plutôt froid.
                            Saint-Malo, c’est une jolie ville. C’est très touristique avec ses remparts du douzième siècle
                            (les remparts, REMPART, ça signifie les murs de la ville, ça permet de se protéger quand il y a une guerre).
                            On les a commencés en 1144. On peut voir aussi de très jolies maisons,
                            en particulier dans le quartier de la cathédrale Saint-Vincent. Cette cathédrale date aussi du douzième siècle. Il y a aussi un château, des musées et le manoir de Jacques Cartier, le célèbre explorateur qui a découvert le Canada en 1534.</p>
                        <div>
                            <small><a href="blog-category-01.html" title="">Food</a></small>
                            <small><a href="single.html" title="">11 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                            <a href="#" class="button-suite jump-link">Lire la suite</a>
                        </div>

                    </div>

                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">


            <div class="blog-list clearfix">
                <div class="blog-box row wow slideInLeft">
                    <div class="col-md-4">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="img/%E2%80%94Pngtree%E2%80%94social%20media%20icons%20set%20logo_3588882.png"
                                     alt="" class="img-fluid">
                                <div class="hovereffect"></div>
                            </a>
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="blog-meta big-meta col-md-8">
                        <h4><a href="single.html" title="">Saint-Malo</a></h4>
                        <p class="description-article-text">Je passe mes vacances à Saint-Malo. Vous connaissez ? C’est en Bretagne. J’adore cette région. J’y vais tous les ans. J’ai une maison là-bas. D’habitude, j’y reste trois semaines en été, mais cette année, j’y suis resté seulement deux semaines à cause de mon travail. L’hiver, en général, je n’y vais presque jamais parce qu’il fait plutôt froid.
                            Saint-Malo, c’est une jolie ville. C’est très touristique avec ses remparts du douzième siècle
                            (les remparts, REMPART, ça signifie les murs de la ville, ça permet de se protéger quand il y a une guerre).
                            On les a commencés en 1144. On peut voir aussi de très jolies maisons,
                            en particulier dans le quartier de la cathédrale Saint-Vincent. Cette cathédrale date aussi du douzième siècle. Il y a aussi un château, des musées et le manoir de Jacques Cartier, le célèbre explorateur qui a découvert le Canada en 1534.</p>
                        <div>
                            <small><a href="blog-category-01.html" title="">Food</a></small>
                            <small><a href="single.html" title="">11 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                            <a href="#" class="button-suite jump-link">Lire la suite</a>
                        </div>

                    </div>

                </div><!-- end meta -->
            </div><!-- end blog-box -->

        <hr class="invis">


            <div class="blog-list clearfix">
                <div class="blog-box row wow slideInLeft">
                    <div class="col-md-4">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="img/%E2%80%94Pngtree%E2%80%94social%20media%20icons%20set%20logo_3588882.png"
                                     alt="" class="img-fluid">
                                <div class="hovereffect"></div>
                            </a>
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="blog-meta big-meta col-md-8">
                        <h4><a href="single.html" title="">Saint-Malo</a></h4>
                        <p class="description-article-text">Je passe mes vacances à Saint-Malo. Vous connaissez ? C’est en Bretagne. J’adore cette région. J’y vais tous les ans. J’ai une maison là-bas. D’habitude, j’y reste trois semaines en été, mais cette année, j’y suis resté seulement deux semaines à cause de mon travail. L’hiver, en général, je n’y vais presque jamais parce qu’il fait plutôt froid.
                            Saint-Malo, c’est une jolie ville. C’est très touristique avec ses remparts du douzième siècle
                            (les remparts, REMPART, ça signifie les murs de la ville, ça permet de se protéger quand il y a une guerre).
                            On les a commencés en 1144. On peut voir aussi de très jolies maisons,
                            en particulier dans le quartier de la cathédrale Saint-Vincent. Cette cathédrale date aussi du douzième siècle. Il y a aussi un château, des musées et le manoir de Jacques Cartier, le célèbre explorateur qui a découvert le Canada en 1534.</p>
                        <div>
                            <small><a href="blog-category-01.html" title="">Food</a></small>
                            <small><a href="single.html" title="">11 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                            <a href="#" class="button-suite jump-link">Lire la suite</a>
                        </div>

                    </div>

                </div><!-- end meta -->
            </div><!-- end blog-box -->

    </div>










    <div class="col-md-6">





        <section class="forms-section wow slideInRight" id="form1-div">
                <h1 class="section-title">Veuillez Connectez </h1>

                <?php if(Users::currentUser()): ?>
                <div>
                    <h1>Hello <?=Users::currentUser()->nom?></h1>
                    <?php if(Users::currentUser()->estTrad):?>
                    <div>
                        <h1>Status:  Traducteur</h1>
                    </div>

                    <?php elseif(Users::currentUser()->nom==="admin"): ?>
                        <div>
                                  <h1>Status:  Admin</h1>
                        </div>
                    <?php else: ?>
                        <div>
                            <h1>Status:  Client</h1>
                        </div>
                    <?php endif;?>
                    <a href="<?=PROOT?>register/logout" class="btn btn-outline-primary btn-lg " style="margin: 20px;">Logout</a>

                </div>
                <?php else: ?>

                <a href="<?=PROOT?>register/login" class="btn btn-primary btn-lg " style="margin: 20px;">Connexion</a>
                <a href="<?=PROOT?>register/register" class="btn btn-outline-primary btn-lg " style="margin: 20px;">Inscription</a>
                <?php endif; ?>



        </section>

<?php if(Users::currentUser()): ?>


        <?php if(!Users::currentUser()->estTrad && Users::currentUser()->nom !="admin" ): ?>
        <div class="form-style-10 ">
            <h1>Demande de devis de traduction<span>demander votre devis facilement en remplissant ce
                            formulaire</span></h1>
            <form  class="form" method="post" enctype="multipart/form-data">



                <div class="section"><span>1</span>détaille sur la traduction</div>
                <div class="inner-wrap">




                    <h4>Dèposer le fichier à traduire: </h4><input type="file" name="devis" /><br><br>
                    <h4>Choisir Le type de traduction</h4>
                    <select name="type_traduction">
                        <option value="general" selected="selected">general</option>
                        <option value="scientifique">scientifique</option>
                        <option value="siteweb">siteweb</option>

                    </select>
                    <div>

                    <h4>Choisir la langue source</h4>
                    <select name="lang_src">
                        <option value="Arabe" selected="selected">Arabe</option>
                        <option value="Francais" >Français</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Chinois">Chinois</option>
                        <option value="Espagnol">Espagnol</option>
                        <option value="Italien">Italien</option>
                    </select>
                    <div>
                    </div>
                        <div>
                            <h4>Choisir la langue à traduire </h4>
                            <select name="lang_dest">
                                <option value="Francais" selected="selected">Français</option>
                                <option value="Arabe" >Arabe</option>

                                <option value="Anglais">Anglais</option>
                                <option value="Chinois">Chinois</option>
                                <option value="Espagnol">Espagnol</option>
                                <option value="Italien">Italien</option>
                            </select>


                        </div>

                        <h4>Commentaires</h4>
                        <?= FH::inputBlock('text','','commentaires',$this->devis->commentaires,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>



                        <!--my captcha-->
                    <div class="g-recaptcha" data-sitekey="6LcLissUAAAAACdWJIJtwj5qcwwxyxkNQOdXhWPH"
                         style="margin-top: 30px;"></div>




                </div>
                <?= FH::submitBlock('Envoyer devis', ['class'=>'btn btn-primary btn-lg'],['class'=>'form-group'])?>

            </form>
        </div>
         <?php endif;?>

        <?php if(Users::currentUser()->estTrad):

            $traducteur = new Traducteur();
            $traducteur->id_traducteur = Users::currentUser()->id_user;

            $deviss = $traducteur->getAllDevis( $traducteur->id_traducteur);
           ;?>


                 <table class="table table-striped table-condensed table-bordered table-hover">
        <thead>
        <th>Nom et Prenom client</th>
        <th>type traduction</th>
        <th>Language source </th>
        <th>Language destination </th>

        <th></th>
        </thead>
        <tbody>
        <?php foreach($deviss as $devis): ?>
            <tr>
                <td>
                    <a href="#">
                        <?= $devis->nom." ".$devis->prenom; ?>
                    </a>
                </td>

                <td><?= $devis->type_traduction;?></td>
                <td><?= $devis->lang_src;?></td>
                <td><?= $devis->lang_dest;?></td>
                <td></td>

                <td>
                    <a href="<?=PROOT?>/home/detailledevis/<?=$devis->id_devis?>" class="btn btn-info btn-xs">
                        <i class="glyphicon glyphicon-pencil"></i> Accepter/Refuser
                    </a>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
        <?php endif;?>


        <?php if(!Users::currentUser()->estTrad && Users::currentUser()->nom !="admin"):

            $client = new Clientt();
            $client->id_client = Users::currentUser()->id_user;

            $deviss = $client->getAllDevis( $client->id_client);
            ?>

            <center>
                <h1>Liste des devis envoyè </h1>


            </center>

            <table class="table table-striped table-condensed table-bordered table-hover">
                <thead>
                <th>Type traduction</th>
                <th>Etat </th>
                <th>Language source </th>
                <th>Language destination </th>
                <th>identifiant de traducteur </th>

                <th></th>
                </thead>
                <tbody>
                <?php foreach($deviss as $devis): ?>
                    <tr>
                     

                        <td><?= $devis->type_traduction;?></td>
                        <td><?= $devis->etat;?></td>
                        <td><?= $devis->lang_src;?></td>
                        <td><?= $devis->lang_dest;?></td>
                        <td><?= $devis->id_traducteur;?></td>
                        <td></td>


                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif;?>

    </div>
        <?php endif;?>




</section>





<?php $this->end(); ?>
