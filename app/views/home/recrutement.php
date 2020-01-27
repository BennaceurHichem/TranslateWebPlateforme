
<?php
use Core\FH;
use App\Models\Users;
use Core\H;

?>
<?php $this->start('head'); ?>

<?php

if(isset($_FILES['cv'])){
    $errors= array();
    $file_name = $_FILES['cv']['name'];
    $file_size =$_FILES['cv']['size'];
    $file_tmp =$_FILES['cv']['tmp_name'];
    $file_type=$_FILES['cv']['type'];
    $explode = explode('.',$_FILES['cv']['name']);
    $file_ext=strtolower(end($explode ));

    $extensions= array("pdf","docx");

    if(!empty(Users::currentUser())){
        $idTrad = strval(Users::currentUser()->id_user);


    }else{
        $idTrad=strval(0);
    }

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed";
    }

    $file_name_id = $idTrad."-"."cv_traducteur_".$file_name;
    $dest="C:/xampp/htdocs/TRADUCTION/cv/".$idTrad."-"."cv_traducteur_".$file_name;




    if(empty($errors)==true){
        move_uploaded_file($file_tmp,$dest);

    }else{

        print_r($errors);
    }
}
?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>





<div class="container my-5 z-depth-1">


                        <h1>PAGE RECRUTEMENT POUR NOTRE TRADUCTEUR :)</h1>

    <form class="form" action="" method="post" enctype="multipart/form-data">


    <?= FH::checkboxone('vous êtes un assermentee?','est_assermente',true,['class'=>'form-check-input input-sm'],['class'=>'form-check-inline']) ?>

    <?= FH::checkboxone('vous êtes aprouvee?','est_approuve',true,['class'=>'form-check-input input-sm'],['class'=>'form-check-inline']) ?>

        <input type="file" name="cv" />

    <?= FH::submitBlock('Valider', ['class'=>'btn btn-primary btn-lg'],['class'=>'form-group'])?>


    </form>

</div>





<?php $this->end(); ?>
