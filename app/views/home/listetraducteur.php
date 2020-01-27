<?php

use App\Models\Traducteur;
use Core\FH;
use App\Models\Users;
use Core\H;

?>

<?php $this->start('body');?>

    <center>
        <a href="<?=PROOT?>/home/listeclient" class="btn btn-primary btn-xs btn" role="button" >LISTE DES CLIENTS</a>
        <a href="<?=PROOT?>/home/adminhome" class="btn btn-primary btn-xs"role="button" >LISTE DES UTILISATEURS</a>

    </center>
    <h2 class="text-center">LISTE DES TRADUCTEURS</h2>


    <table class="table table-striped table-condensed table-bordered table-hover">
        <thead>
        <th>nom et prenom</th>
        <th>email</th>
        <th>adresse</th>
        <th>assermentè</th>
        <th>approuvè</th>

        <th></th>
        </thead>
        <tbody>
        <?php foreach($this->traducteurs as $traducteur):

            //les traducteurs de la table traducteur
            $tradInstance  = new Traducteur();
        //trad element est un tradcuteur de la table traducteur
            $tradElement = $tradInstance->findById($traducteur->id_user);


            ?>
            <tr>
                <td>
                    <a href="#">
                        <?= $traducteur->displayName(); ?>
                    </a>
                </td>

                <td><?= $traducteur->email;?></td>
                <td><?= $traducteur->adresse;?></td>
                <td><?= $tradElement[0]->est_approuve;?></td>
                <td><?= $tradElement[0]->est_assermente?></td>

               <td></td>

                <td>
                    <a href="<?=PROOT?>home/edit/<?=$traducteur->id_user?>" class="btn btn-info btn-xs">
                        <i class="glyphicon glyphicon-pencil"></i> Edit
                    </a>
                    <a href="<?=PROOT?>home/delete/<?=$traducteur->id_user?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure?')){return false;}">
                        <i class="glyphicon glyphicon-remove"></i> Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>



<?php $this->end(); ?>