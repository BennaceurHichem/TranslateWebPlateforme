<?php
use Core\FH;
use Core\H;
use App\Models\Users;


//H::dnd($this->devis[0]->id_devis);



?>
<?php $this->start('head'); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">




<?php $this->end(); ?>

<?php $this->start('body'); ?>

    <div class="container ">
        <center>
        <div class="col justify-content-center"">

        <div>
            <h1>Devis numeros #<?php echo $this->devis[0]->id_devis?></h1>

        </div>
        <div>
            <h4><b>Client :</b><?php echo $this->devis[0]->nom." ".$this->devis[0]->prenom ?> </h4>
            <h4><b>Type traduction :</b><?php echo $this->devis[0]->type_traduction ?> </h4>
            <h4><b>Langugae source :</b><?php echo $this->devis[0]->lang_src ?> </h4>
            <h4><b>Language Destination:</b><?php echo $this->devis[0]->lang_dest ?> </h4>
            <h4><b>Commentaires :</b><?php echo $this->devis[0]->commentaires ?> </h4>






        </div>

            <?= FH::displayErrors($this->displayErrors) ?>
            <form  class="form" method="post" >

                <center>
                    <?= FH::inputBlock('text','Prix','prix',$this->devis[0]->prix,['class'=>'form-control col-lg-1 ' ],['class'=>'form-group']) ?>

                </center>

                <?= FH::submitBlock('Accepter', ['class'=>'btn btn-outline-default btn-rounded waves-effect btn-sm'],['class'=>'form-group'])?>



            </form>

            <form  class="form" method="post">


            <div class="form-group">
                <input type="hidden" id="refus" name="refus">
                <input type="submit" value="Refuser" class="btn btn-outline-danger btn-rounded waves-effect btn-sm" onclick="if(!confirm('Vous êtes sur ?')){return false;}">

            </div>

            </form>

        </div>




    </div>




    </center>

    </div>






<?php $this->end(); ?>