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
        <a href="<?=PROOT?>/home/listetraducteur" class="btn btn-primary btn-xs btn" role="button" >LISTE DES TRADUCTEURS</a>
        <a href="<?=PROOT?>/home/adminhome" class="btn btn-primary btn-xs"role="button" >LISTE DES UTILISATEURS</a>

    </center>

    <h2 class="text-center">Liste des clients</h2>


    <table class="table table-striped table-condensed table-bordered table-hover"
           data-show-search-button="true"
           data-page-size="5"
           data-toggle="table"
           data-pagination="true"
           data-search="true"
    >
        <thead>
        <th>Type de la pièce jointe </th>
        <th>Pièce jointe</th>
        <th>Owner </th>


        <th></th>
        </thead>
        <tbody>
        <?php foreach($this->piece_jointes as $piece): ?>
            <tr>

                <td><?= $piece->type;?></td>
                <td><a href="<?=$piece->path;?>">ici</a></td>
                <?php if(   !empty($this->users[0]->findByUserId($piece->id_user) )      ): ?>

                <td><?= $this->users[0]->findByUserId($piece->id_user)->nom ?></td>

                <?php else: ?>
                    <td>default user </td>
                <?php endif;?>
                <td>
                    <a href="<?=PROOT?>" class="btn btn-info btn-xs">
                        <i class="glyphicon glyphicon-pencil"></i> Edit
                    </a>
                    <a href="<?=PROOT?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure?')){return false;}">
                        <i class="glyphicon glyphicon-remove"></i> Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>



<?php $this->end(); ?>