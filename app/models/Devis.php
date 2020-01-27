<?php


namespace App\Models;


use Core\H;
use Core\Model;

class Devis extends Model
{
    public $id_devis, $nom, $prenom, $email, $numero, $adresse, $type_traduction, $commentaires, $etat, $traducteur_assermente, $date, $id_client, $lang_src, $lang_dest;

    public function __construct()
    {
        $table = "devis";
        parent::__construct($table);
    }


    public function save()
    {


        $this->validator();
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


}