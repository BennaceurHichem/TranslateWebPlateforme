<?php

use Core\FH;
use App\Models\Users;
use Core\H;

?>

<?php $this->start('head');?>
    <!-- bootstrap tables  -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
<?php $this->end(); ?>


<?php $this->start('body');?>

        <center>
            <a href="<?=PROOT?>/home/listetraducteur" class="btn btn-primary btn-xs btn" role="button" >Liste des traducteurs</a>
            <a href="<?=PROOT?>/home/listeclient" class="btn btn-primary btn-xs"role="button" >Liste des clients</a>
            <a href="<?=PROOT?>/home/alldevis" class="btn btn-primary btn-xs"role="button" >Liste des devis</a>
            <a href="<?=PROOT?>/home/listePieceJointe" class="btn btn-primary btn-xs"role="button" >Liste des pièces jointe</a>
        </center>

    <h2 class="text-center">Liste des utilisateurs</h2>


    <table class="table table-striped table-condensed table-bordered table-hover"
    data-show-search-button="true"
    data-page-size="5"
           data-toggle="table"
           data-pagination="true"
           data-search="true"

    >
        <thead>
            <th data-sortable="true">nom et prenom</th>
        <th data-sortable="true">email</th>
        <th data-sortable="true">adresse</th>
        <th data-sortable="true">Traducteur?</th>


        </thead>
        <tbody>
        <?php foreach($this->users as $user): ?>
            <tr>
                <td>
                    <a href="<?=PROOT?>home/edit/<?=$user->id_user?>">
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