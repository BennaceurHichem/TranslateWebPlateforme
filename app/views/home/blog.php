<?php

use Core\FH;
?>
<?php $this->start('head'); ?>


<?php $this->end(); ?>

<?php $this->start('body'); ?>



Live Demo
<?php
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $explode = explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($explode ));

    $extensions= array("pdf","docx");



    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed";
    }

    $dest="C:/xampp/htdocs/TRADUCTION/devis/";

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,$dest.$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
}
?>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>
</form>

</body>
</html>


<?php $this->end(); ?>