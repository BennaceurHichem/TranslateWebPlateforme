<?php

use Core\FH;
use App\Models\Users;
use Core\H;

?>
<?php $this->start('head'); ?>


<?php $this->end(); ?>

<?php $this->start('body'); ?>



Live Demo
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
    $dest="C:/xampp/htdocs/TRADUCTION/devis/".$idTrad."-"."cv_traducteur_".$file_name;




    if(empty($errors)==true){
    move_uploaded_file($file_tmp,$dest);

    }else{

    print_r($errors);
    H::dnd(move_uploaded_file($file_name,$dest));
    }
    }
    ?>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="cv" />
    <input type="submit"/>
</form>

</body>
</html>


<?php $this->end(); ?>