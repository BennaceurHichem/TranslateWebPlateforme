<?php
use Core\FH;
use Core\H;
use App\Models\Users;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 well">
    <h3 class="text-center">Modifier vos informaions</h3><hr>
    <form class="form" action="" method="post">
        <?= FH::csrfInput() ?>
        <?= FH::displayErrors($this->displayErrors) ?>
        <?= FH::inputBlock('text','Nom','nom',Users::currentUser()->nom,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>
        <?= FH::inputBlock('text','prenom','prenom',Users::currentUser()->prenom,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>
        <?= FH::inputBlock('text','Numeros de telephone','numero',Users::currentUser()->numero ,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>
        <?= FH::inputBlock('text','Adresse','adresse',Users::currentUser()->adresse ,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>

        <?= FH::inputBlock('text','Email','email',Users::currentUser()->email,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>




        <?= FH::submitBlock('Save', ['class'=>'btn btn-primary btn-lg'],['class'=>'form-group'])?>
        <div>
            <a href="<?=PROOT?>home/profile" class="btn btn-info btn-xs">
                <i class="glyphicon glyphicon-pencil"></i> cancel
            </a>

        </div>

</div>
<?php $this->end(); ?>
