<?php
use Core\FH;
?>
<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 well">
  <h3 class="text-center">Register Here!</h3><hr>
  <form class="form" action="" method="post">
    <?= FH::csrfInput() ?>
    <?= FH::displayErrors($this->displayErrors) ?>
    <?= FH::inputBlock('text','Nom','nom',$this->newUser->nom,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>
    <?= FH::inputBlock('text','prenom','prenom',$this->newUser->prenom,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>
    <?= FH::inputBlock('text','Numeros de telephone','numero',$this->newUser->numero ,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>
    <?= FH::inputBlock('text','Adresse','adresse',$this->newUser->adresse ,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>

    <?= FH::inputBlock('text','Email','email',$this->newUser->email,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>

    <?= FH::inputBlock('password','Password','pass',$this->newUser->pass,['class'=>'form-control input-sm'],['class'=>'form-group']) ?>
    <?= FH::inputBlock('password','Confirm Password','confirm',$this->newUser->getConfirm(),['class'=>'form-control input-sm'],['class'=>'form-group']) ?>
    <?= FH::submitBlock('Register',['class'=>'btn btn-primary btn-large'],['class'=>'text-right']) ?>
  </form>
</div>
<?php $this->end(); ?>
