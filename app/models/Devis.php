<?php


namespace App\Models;


use Core\Model;

class Devis extends Model
{


 public function __construct()
 {
     $table="devis";
     parent::__construct($table);
 }


}


public function findDevisByUserId()