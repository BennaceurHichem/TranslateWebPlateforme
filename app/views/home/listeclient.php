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

    <h2 class="text-center">Liste des clients</h2>


    <table class="table table-striped table-condensed table-bordered table-hover">
        <thead>
        <th>Nom et Prenom</th>
        <th>email</th>
        <th>adresse</th>


        <th></th>
        </thead>
        <tbody>
        <?php foreach($this->clients as $client): ?>
            <tr>
                <td>
                    <a href="#">
                        <?= $client->displayName(); ?>
                    </a>
                </td>

                <td><?= $client->email;?></td>
                <td><?= $client->adresse;?></td>
                <td></td>

                <td>
                    <a href="<?=PROOT?>home/edit/<?=$client->id_user?>" class="btn btn-info btn-xs">
                        <i class="glyphicon glyphicon-pencil"></i> Edit
                    </a>
                    <a href="<?=PROOT?>home/delete/<?=$client->id_user?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure?')){return false;}">
                        <i class="glyphicon glyphicon-remove"></i> Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>



<?php $this->end(); ?>