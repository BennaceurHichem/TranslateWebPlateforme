<?php
class Traducteur extends \Core\Model {




        $id_traducteur,$est_assermente,$est_approuve;




    public function findassermentee() {
        return $this->findFirst(['conditions'=> "est_assermente = ?", 'bind'=>[1]]);
    }

    public function findapprouve() {
        return $this->findFirst(['conditions'=> "est_approuve = ?", 'bind'=>[1]]);
    }










}

?>