<?php

use Core\FH;
use App\Models\Users;
use Core\H;

?>

<?php $this->start('body');?>

        <center>
            <a href="<?=PROOT?>/home/listetraducteur" class="btn btn-primary btn-xs btn" role="button" >Liste des traducteurs</a>
            <a href="<?=PROOT?>/home/listeclient" class="btn btn-primary btn-xs"role="button" >Liste des clients</a>

        </center>

    <h2 class="text-center">Liste des utilisateurs</h2>


    <table class="table table-striped table-condensed table-bordered table-hover">
        <thead>
        <th>nom et prenom</th>
        <th>email</th>
        <th>adresse</th>
        <th>Traducteur?</th>

        <th></th>
        </thead>
        <tbody>
        <?php foreach($this->users as $user): ?>
            <tr>
                <td>
                    <a href="<?=PROOT?>contacts/details/<?=$user->id_user?>">
                        <?= $user->displayName(); ?>
                    </a>
                </td>

                <td><?= $user->email;?></td>
                <td><?= $user->adresse;?></td>
                <td><?= $user->estTrad;?></td>

                <td>
                    <a href="<?=PROOT?>home/edit/<?=$user->id_user?>" class="btn btn-info btn-xs">
                        <i class="glyphicon glyphicon-pencil"></i> Edit
                    </a>
                    <a href="<?=PROOT?>home/delete/<?=$user->id_user?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure?')){return false;}">
                        <i class="glyphicon glyphicon-remove"></i> Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>



<?php $this->end(); ?>