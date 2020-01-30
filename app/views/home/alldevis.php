<?php

use Core\FH;
use App\Models\Users;
use Core\H;

?>

<?php $this->start('body');?>

    <center>
        <a href="<?=PROOT?>/home/listetraducteur" class="btn btn-primary btn-xs btn" role="button" >LISTE DES TRADUCTEURS</a>
        <a href="<?=PROOT?>/home/adminhome" class="btn btn-primary btn-xs"role="button" >LISTE DES UTILISATEURS</a>

    </center>

    <h2 class="text-center">Liste des devis</h2>


    <table class="table table-striped table-condensed table-bordered table-hover">
        <thead>
        <th>id</th>
        <th>client</th>
        <th>Traducteur</th>
        <th>Type Traduction</th>
        <th>Language source</th>
        <th>Language destination</th>
        <th>ètat devis </th>




        <th></th>
        </thead>
        <tbody>
        <?php foreach($this->deviss as $devis): ?>
            <tr>
                <td><?= $devis->id_devis;?></td>
                <td>
                    <a href="#">
                        <?= $devis->nom."  ".$devis->prenom; ?>
                    </a>
                </td>


                <td><?= $devis->id_traducteur;?></td>
                <td><?= $devis->type_traduction;?></td>
                <td><?= $devis->lang_src;?></td>
                <td><?= $devis->lang_dest;?></td>
                <td><?= $devis->etat;?></td>



            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>



<?php $this->end(); ?>