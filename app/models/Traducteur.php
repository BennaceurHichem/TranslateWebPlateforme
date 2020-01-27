<?php
namespace App\Models;
use Core\Model;
use Core\H;

use App\Models\UserSessions;
use Core\Cookie;
use Core\Session;
use Core\Validators\MinValidator;
use Core\Validators\MaxValidator;
use Core\Validators\NumericValidator;
use Core\Validators\RequiredValidator;
use Core\Validators\EmailValidator;
use Core\Validators\MatchesValidator;
use Core\Validators\UniqueValidator;


?>

<?php

class Traducteur extends \Core\Model {

    public  $id_traducteur,$est_assermente,$est_approuve;
    private $compteur=0;





    public function __construct()
    {
        $this->compteur++;
        $table = 'traducteur';

        /** @var TYPE_NAME $table
         * when condtrcut is called we set the tabke name */
        parent::__construct($table);

    }





    public function save() {


        $this->validator();
        // die($this->_validates);
        if($this->_validates){
            $this->beforeSave();

            $fields = H::getObjectProperties($this);


            if($this->compteur===1) {


                $save = $this->insert($fields);
                $this->afterSave();
                $this->compteur++;
                return $save;
            } else {

                $save = $this->update($this->id_traducteur, $fields);
                $this->afterSave();
                return $save;
            }

        }

        return false;
    }



    public function findassermentee() {
        return $this->findFirst(['conditions'=> "est_assermente = ?", 'bind'=>[1]]);
    }

    public function findapprouve() {
        return $this->findFirst(['conditions'=> "est_approuve = ?", 'bind'=>[1]]);
    }

    public function findById($id) {
        return $this->find(['conditions'=> "id_traducteur = ?", 'bind'=>[$id]]);
    }

    public function findAll() {
        return $this->find();
    }










}

?>