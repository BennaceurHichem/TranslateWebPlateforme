<?php
use Core\Router;
use Core\H;
use App\Models\Users;
$menu = Router::getMenu('menu_acl');
$currentPage = H::currentPage();
?>

<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>

<nav class="navbar navbar-expand-lg  navbar-light bg-light">
    <a class="navbar-brand" href="<?=PROOT?>home"><?=MENU_MARK?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_menu">
        <ul class="navbar-nav">


            <li class="nav-item active" >
                <a class="Traducteurs" href="<?=PROOT?>home" style="tab-size: 15px;text-decoration-style: solid;margin-left: 10px;margin-right: 10px;">     Home    </a>
            </li>
            <?php if(!empty(Users::currentUser()) ): ?>
            <?php if(!Users::currentUser()->estTrad  && Users::currentUser()->nom!=="admin"): ?>
                <li class="nav-item active" >
                    <a class="Traducteurs" href="<?=PROOT?>home" style="tab-size: 15px;text-decoration-style: solid;margin-left: 10px;margin-right: 10px;">     Traducteurs    </a>
                </li>
            <?php endif; ?>
                <?php if(!Users::currentUser()->estTrad  && Users::currentUser()->nom==="admin") : ?>
                    <li class="nav-item active" >
                        <a class="Traducteurs" href="<?=PROOT?>home/listetraducteur" style="tab-size: 15px;text-decoration-style: solid;margin-left: 10px;margin-right: 10px;">     Traducteurs    </a>
                    </li>
                <?php endif; ?>

            <?php endif; ?>
            <?php if(!empty(Users::currentUser()) ): ?>
                 <?php if(Users::currentUser()->estTrad=="1") : ?>

                <li class="nav-item active" >
                    <a class="Recrutement" href="<?=PROOT?>home/recrutement" style="tab-size: 15px;text-decoration-style: solid;margin-left: 10px;margin-right: 10px;">        Recrutement    </a>
                </li>
                <?php endif; ?>
            <?php if((Users::currentUser()->nom==="admin") ): ?>
                    <li class="nav-item active" >
                        <a href="<?=PROOT?>home/adminhome" style="tab-size: 15px;text-decoration-style: solid;margin-left: 10px;margin-right: 10px;">        ESpace admin    </a>
                    </li>

                <?php endif; ?>
            <?php endif; ?>
                <li class="nav-item active" >
                    <a class="Blog" href="<?=PROOT?>home/blog" style="tab-size: 15px;text-decoration-style: solid;margin-left: 10px;margin-right: 10px;">   Blog     </a>
                </li>
                <li class="nav-item active" >
                    <a class="A propos" href="<?=PROOT?>home/apropos" style="tab-size: 15px;text-decoration-style: solid;margin-left: 10px;margin-right: 10px;">       A propos     </a>
                </li>
            <?php if( Users::currentUser() && Users::currentUser()->nom!="admin") : ?>

            <li class="nav-item active" >
                <a class="A propos" href="<?=PROOT?>home/profile" style="tab-size: 15px;text-decoration-style: solid;margin-left: 10px;margin-right: 10px;">      Profile    </a>
            </li>
            <?php endif; ?>

        <ul class="nav navbar-nav navbar-right ">

            <div class="navbar-collapse collapse  justify-content-between">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f"></i></button>

                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-tw"><i class="fab fa-twitter"></i></button>
                    </li>
                    <li class="nav-item right">
                        <button type="button" class="btn btn-gplus"><i class="fab fa-google-plus-g"></i></button>
                    </li>
                </ul>
            </div>


        </ul>


        </ul>
    </div>
</nav>
<!-- JQuery -->
