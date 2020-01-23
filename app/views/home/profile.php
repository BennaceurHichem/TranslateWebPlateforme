<?php

use Core\FH;
use App\Models\Users;
?>
<?php $this->start('head'); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">



<?php

$currentUser = Users::currentUser();


?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

        <div class="container ">
            <div class="col justify-content-center"">

                <div>
                    <h1><?php echo $currentUser->nom." ".$currentUser->prenom ?></h1>

                </div>
                <div>
                    <h4>ID:<?php echo $currentUser->id_user ?> </h4>
                    <h4>Nom:<?php echo $currentUser->nom ?> </h4>
                    <h4>Prenom:<?php echo $currentUser->prenom ?> </h4>
                    <h4>Adresse:<?php echo $currentUser->adresse ?> </h4>
                    <h4>numeros Telephone :<?php echo $currentUser->numero ?> </h4>
                    <?php if($currentUser->estTrad):?>
                        <h4>Status:  Traducteur</h4>
                    <?php else: ?>
                        <h4>Status:  Client</h4>
                    <?php endif;?>





                </div>

            <div>
                <a href="<?=PROOT?>home/modificationprofile" class="btn btn-info btn-xs">
                    <i class="glyphicon glyphicon-pencil"></i> Edit
                </a>

            </div>




            </div>






        </div>






<?php $this->end(); ?>