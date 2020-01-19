<?php
use Core\FH;
?>
<?php $this->start('head'); ?>

<script src='https://www.google.com/recaptcha/api.js'></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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


<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 well">
  <h3 class="text-center">Log In</h3>
  <form class="form" action="<?=PROOT?>register/login" method="post">
    <?= FH::csrfInput() ?>
    <?= FH::displayErrors($this->displayErrors) ?>
    <?= FH::inputBlock('text','Username','nom',$this->login->nom,['class'=>'form-control'],['class'=>'form-group']) ?>
    <?= FH::inputBlock('password','Password','pass',$this->login->pass,['class'=>'form-control'],['class'=>'form-group']) ?>
    <?= FH::checkboxBlock('Remember Me','remember_me',$this->login->getRememberMeChecked(),[],['class'=>'form-group']) ?>
    <?= FH::submitBlock('Login', ['class'=>'btn btn-large btn-primary'],['class'=>'form-group'])?>
    <div class="text-right">
      <a href="<?=PROOT?>register/register" class="text-primary">Register</a>
    </div>
  </form>
</div>
<?php $this->end(); ?>
