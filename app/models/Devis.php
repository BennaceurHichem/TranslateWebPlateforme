<?php


namespace App\Models;


use Core\H;
use Core\Model;
use Core\Validators\EmailValidator;
use Core\Validators\MaxValidator;
use Core\Validators\MinValidator;
use Core\Validators\NumericValidator;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;

class Devis extends Model
{
    public $id_devis, $id_traducteur,$prix,$nom, $prenom, $email, $numero, $adresse, $type_traduction, $commentaires, $etat, $date, $id_client, $lang_src, $lang_dest,$path;

    public function __construct()
    {
        $table = "devis";
        parent::__construct($table);
    }


    public function save()
    {


        //$this->validator();
        // die($this->_validates);
        if ($this->_validates) {
            $this->beforeSave();

            $fields = H::getObjectProperties($this);

            // determine whether to update or insert

            if (property_exists($this, 'id_devis') && $this->id_devis != '') {
                $save = $this->update($this->id_devis, $fields);

                $this->afterSave();

                return $save;
            } else {

                $save = $this->insert($fields);
                $this->afterSave();
                return $save;
            }
        }

        return false;
    }


    public function saveNew()
    {


        //$this->validator();
        // die($this->_validates);
        if ($this->_validates) {
            $this->beforeSave();

            $fields = H::getObjectProperties($this);

            // determine whether to update or insert

            $save = $this->insert($fields);
            $this->afterSave();
            return $save;

        }

        return false;
    }

    public function insertIdTrad($id_devis,$id_trad){

        $fields = [
            "id_traducteur"=>$id_trad,
        ];

        $save = $this->update($id_devis, $fields);

        $this->afterSave();

        return $save;


    }

    public function insertPrix($id_devis, $prix){

        $fields = [
            "prix"=>$prix,
        ];

        $save = $this->update($id_devis, $fields);

        $this->afterSave();

        return $save;
    }

    public function changeEtat($id_devis, $newState){

        $fields = [
            "etat"=>$newState,
        ];

        $save = $this->update($id_devis, $fields);

        $this->afterSave();

        return $save;
    }


    public function findByIdTrad($id) {
        return $this->find(['conditions'=>"id_traducteur = ?", 'bind' => [$id]]);
    }
    public function findByIdClient($id) {
        return $this->find(['conditions'=>"id_client = ?", 'bind' => [$id]]);
    }
    public function findByIdDevis($id) {
        return $this->find(['conditions'=>"id_devis = ?", 'bind' => [$id]]);
    }
//get the last inserrted id
    public function findLastIdDevis() {
        return $this->findFirst([  'order'=>"id_devis desc"])->id_devis ;
    }

    public function lastIdDevis(){
        return $this->lastId();
    }


    public function validator(){


            $this->runValidation(new RequiredValidator($this,['field'=>'prix','msg'=>"Veuillez entrez le prix avant d\'accpeter le devs " ]));
            $this->runValidation(new NumericValidator($this,['field'=>'prix','msg'=>"Le prix doit etre numerique " ]));








    }



    public function findAll(){

        return $this->find();
    }
}