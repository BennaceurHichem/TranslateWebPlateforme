<?php


namespace App\Models;


use Core\H;
use Core\Model;

class PieceJointe extends Model
{
public $id_piece_jointe,$type,$path,$description,$id_user;

    public function __construct()
    {
        $table = "piece_jointe";
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

            if (property_exists($this, 'id_piece_jointe') && $this->id_piece_jointe != '') {
                $save = $this->update($this->id_piece_jointe, $fields);

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


    public function insert($fields) {
        if(empty($fields)) return false;
        if(array_key_exists('id_piece_jointe', $fields)) unset($fields['id_piece_jointe']);
        return $this->_db->insert($this->_table, $fields);
    }

}