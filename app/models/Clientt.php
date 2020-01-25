<?php


namespace App\Models;


use Core\H;
use Core\Model;

class Clientt extends Model
{

   private  $id_client;

    public function __construct()
    {

        $table = 'client';

        /** @var TYPE_NAME $table
         * when condtrcut is called we set the tabke name */
        parent::__construct($table);

    }

    public function insert($id)
    {

        $fields = [
            "id_client"=>$id,
        ];

        $this->_db->insert($this->_table, $fields);
    }


}