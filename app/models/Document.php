<?php


namespace App\Models;


use Core\Model;

class Document extends Model
{
    public function __construct()
    {
        $table="document";
        parent::__construct($table);
    }



}