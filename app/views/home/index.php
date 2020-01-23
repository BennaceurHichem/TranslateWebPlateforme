
<?php
use Core\FH;
use Core\H;
use App\Models\Users;
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


<?php $this->end(); ?>



<?php $this->start('body'); ?>

<header>
    <!-- NavBar Code
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
        <a class="navbar-brand" href="#">STRIKE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item active ">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                    </h6>

                </li>
                <li class="nav-item">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="nav-link" href="#">traducteurs</a>
                    </h6>

                </li>
                <li class="nav-item">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="nav-link" href="#">Blog</a>
                    </h6>
                </li>
                <li class="nav-item">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="nav-link" href="#">Recrutement</a>
                    </h6>
                </li>
                <li class="nav-item">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="nav-link" href="#">à propos</a>
                    </h6>
                </li>
            </ul>

        </div>
    </nav>
     -->
    <!-- NavBarCode end -->


</header>


<section class="main_part">
    <div class="container">



                <div class="row" id="main_row">




                    <div class="col-md-3">

                        <div>
                            <img class="main_img animated slideInLeft"
                                 src="<?=PROOT?>img/download.png"
                                 height="inherit">
                        </div>



                    </div>
                    <div class="col-md-9">

                        <!--Facebook-->
                        <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
                        <!--Twitter-->
                        <button type="button" class="btn btn-tw"><i class="fab fa-twitter pr-1"></i> Twitter</button>
                        <!--Google +-->
                        <button type="button" class="btn btn-gplus"><i class="fab fa-google-plus-g pr-1"></i> Google +</button>
                        <!--Linkedin-->
                        <button type="button" class="btn btn-li"><i class="fab fa-linkedin-in pr-1"></i> Linkedin</button>
                        <!--Instagram-->
                        <button type="button" class="btn btn-ins"><i class="fab fa-instagram pr-1"></i> Instagram</button>
                        <!--Pinterest-->
                        <button type="button" class="btn btn-pin"><i class="fab fa-pinterest pr-1"></i> Pinterest</button>
                        <!--Vkontakte-->
                        <button type="button" class="btn btn-vk"><i class="fab fa-vk pr-1"></i> Vkontakte</button>
                        <!--Stack Overflow-->
                        <button type="button" class="btn btn-so"><i class="fab fa-stack-overflow pr-1"></i> Stack Overflow</button>
                        <!--Youtube-->
                        <button type="button" class="btn btn-yt"><i class="fab fa-youtube pr-1"></i> Youtube</button>
                        <!--Slack-->
                        <button type="button" class="btn btn-slack"><i class="fab fa-slack-hash pr-1"></i> Slack</button>
                        <!--Github-->
                        <button type="button" class="btn btn-git"><i class="fab fa-github pr-1"></i> Github</button>
                        <!--Comments-->
                        <button type="button" class="btn btn-comm"><i class="fas fa-comments pr-1"></i> Comments</button>
                        <!--Email-->
                        <button type="button" class="btn btn-email"><i class="fas fa-envelope pr-1"></i> Email</button>

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

            <div class="blog-box row wow slideInLeft data-wow-delay=" 0.2s"">
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
                <h4><a href="single.html" title=""> Qu’en est-il dans votre pays ?</a></h4>
                <p class="description-article-text">Le sujet est donc lancé pour les présidentielles, la question est de savoir si un candidat de poids osera l’utiliser et s’il pourrait gagner l’élection avec une telle mesure car même si l’usage est très répandu en France, les Français sont très divisés et même s’ils ont été fumeurs à un moment de leur vie beaucoup sont vivement opposés à l’idée de dépénaliser cette drogue.
                    Et vous qu’en pensez-vous ? Est-il nécessaire selon vous de changer la loi en France ? Qu’en est-il dans votre pays ?</p>
                <div>
                    <small><a href="blog-category-01.html" title="">Food</a></small>
                    <small><a href="single.html" title="">10 July, 2017</a></small>
                    <small><a href="blog-author.html" title="">by Matilda</a></small>
                    <a href="#" class="button-suite jump-link">Lire la suite</a>
                </div>

            </div><!-- end meta -->
        </div><!-- end blog-box -->

        <hr class="invis">

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
                <h4><a href="single.html" title="">Article traduction 1</a></h4>
                <p class="description-article-text">Cette semaine, des centaines de manifestants se sont rassemblés place de la Bastille pour la marche mondiale du Cannabis. Cette manifestation a lieu chaque année dans plus de 250 villes dans le monde pour demander la dépénalisation de la consommation du cannabis, la régulation de sa production ainsi que la possibilité pour les médecins de le prescrire dans un cadre thérapeutique. Les slogans de la manifestions étaient amusants et originaux, les manifestants criaient notamment
                    « je ne me drogue pas, je me soigne » ou encore « on veut du bédo bio ».</p>
                <div>
                    <small><a href="blog-category-01.html" title="">Food</a></small>
                    <small><a href="single.html" title="">09 July, 2017</a></small>
                    <small><a href="blog-author.html" title="">by Hichem</a></small>

                    <a href="#" class="button-suite jump-link">Lire la suite</a>

                </div>

            </div><!-- end meta -->
        </div><!-- end blog-box -->

    </div>










    <div class="col-md-6">






            <section class="forms-section wow slideInRight" id="form1-div">
                <h1 class="section-title">Veuillez Connectez </h1>
                <!--      <div class="forms">
                          <div class="form-wrapper is-active">
                              <button type="button" class="switcher switcher-login">
                                  Connexion
                                  <span class="underline"></span>
                              </button>
                              <form class="form form-login" id="connexion_forme"  action="connexion_form.php">
                                  <fieldset>
                                      <legend>Please, enter your email and password for login.</legend>
                                      <div class="input-block">
                                          <label for="login-email">E-mail</label>
                                          <input id="login-email" name="email_connexion" type="email" required>

                                      </div>
                                      <div class="input-block">
                                          <label for="login-password">Password</label>
                                          <input id="login-password" name="pass_connexion" type="password" required>
                                      </div>
                                  </fieldset>
                                  <button type="submit" name="submit_connexion_form" class="btn-login">Connexion</button>
                              </form>
                          </div>
                          <div class="form-wrapper">
                              <button type="button" class="switcher switcher-signup">
                                  Inscription
                                  <span class="underline"></span>
                              </button>
                              <form class="form form-signup" id="inscription_form" action="inscription_form.php">
                                  <fieldset>
                                      <legend>Please, enter your email, password and password confirmation for sign
                                          up.</legend>
                                      <div class="input-block">
                                          <label for="signup-email">E-mail</label>
                                          <input id="signup-email" name="email_inscription" type="email" required>
                                      </div>
                                      <div class="input-block">
                                          <label for="signup-password">Password</label>
                                          <input name="pass_inscription" id="signup-password" type="password" required>
                                      </div>
                                      <div class="input-block">
                                          <label for="signup-password-confirm">Confirm password</label>
                                          <input name="confirm_pass_inscription" id="signup-password-confirm" type="password" required>
                                      </div>


                                  </fieldset>
                                  <button type="submit" name="submi_inscription_form" class="btn-signup">Inscription</button>
                              </form>   -->
                <?php if(Users::currentUser()): ?>
                <div>
                    <h1>Hello <?=Users::currentUser()->nom?></h1>
                    <?php if(Users::currentUser()->estTrad):?>
                    <div>
                        <h1>Status:  Traducteur</h1>
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


        <div class="form-style-10 ">
            <h1>Demande de devis de traduction<span>demander votre devis facilement en remplissant ce
                            formulaire</span></h1>
            <form id="traduction_forme">
                <div class="section"><span>1</span>Nom & prénoms</div>
                <div class="inner-wrap">
                    <h4>Nom</h4>
                    <input type="text" name="nom" id="nom" />
                    <span class = "error" id="err_nom"></span>
                    <h4>Prénom</h4>
                    <input type="text"  name="prenom" id="prenom"/>
                    <span class = "error" id="err_prenom"></span>
                </div>

                <div class="section"><span>2</span>Email & Phone</div>
                <div class="inner-wrap">
                    <div>
                        <h4>Email Address <input type="email" name="email" id="email" /></h4>
                    </div>

                    <div>
                        <h4>Numéros de téléphone <input type="text" name="num_tel" id="num_tel" /></h4>
                    </div>
                    <div>
                        <h4>Adresse <input type="text" name="adresse" id="adresse" /></h4>

                    </div>

                    <span class = "error"  id="err_adresse"></span>
                </div>

                <div class="section"><span>3</span>détaille sur la traduction</div>
                <div class="inner-wrap">
                    <div>
                        <h4>Langue d'origine <input type="text" name="lang_origine" id="lang_origine" /></h4>

                    </div>
                    <span class = "error" id="err_lang_origine"></span>
                    <div>
                        <h4>Langue source <input type="text" name="lang_source" id="lang_source" /></h4>

                    </div>
                    <span class = "error" id="err_lang_source"></span>


                    <h4>Select a file: </h4><input type="file" name="file_upload" id="file_upload"><br><br>
                    <!--Dropdown primary-->
                    <div class="dropdown" style="margin-top: 20px; margin-bottom: 20px; align-items: center;">

                        <h4>Type de traduction</h4>
                        <!--Trigger-->
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name="type_trad">type
                            traduction</button>
                        <!--Menu-->
                        <div class="dropdown-menu dropdown-primary">
                            <a class="dropdown-item" name="choix_type_trad" value="Général" href="#">Général</a>
                            <a class="dropdown-item" name="choix_type_trad" value="Scientifique" href="#">Scientifique</a>
                            <a class="dropdown-item" name="choix_type_trad" value="Site web" href="#">Site web</a>
                        </div>

                    </div>
                    <!--/Dropdown primary-->

                    <div>

                        <h4>Commentaire et demande spécifique</h4>
                        <textarea type="text" name="comment" id="comment" cols="40" rows="5"></textarea>
                        <span class = "error" id="err_comment"></span>

                    </div>


                    <div class="custom-control custom-checkbox " style="margin-top: 30px;margin-bottom: 30px;">
                        <input type="checkbox" value="assermentee" class="margin_form mw-100 custom-control-input" id="customCheck" name="assermentee">
                        <label class="custom-control-label" for="customCheck">traducteurs assermentée</label>

                    </div>

                    <!--my captcha-->
                    <div class="g-recaptcha" data-sitekey="6LcLissUAAAAACdWJIJtwj5qcwwxyxkNQOdXhWPH"
                         style="margin-top: 30px;"></div>




                </div>
                <div class="button-section text-center" id="submit_div">
                    <button type="submit" name="submit_trad_form" class="btn btn-primary btn-md w-75 p-3">Submit</button>

                </div>
            </form>
        </div>
    </div>















</section>







    <?php $this->end(); ?>
