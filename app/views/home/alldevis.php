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

    <h2 class="text-center">Liste des devis</h2>


    <table class="table table-striped table-condensed table-bordered table-hover"
           data-show-search-button="true"
           data-page-size="5"
           data-toggle="table"
           data-pagination="true"
           data-search="true"
    >
        <thead>
        <th data-sortable="true">id</th>
        <th data-sortable="true">client</th>
        <th data-sortable="true">Traducteur</th>
        <th data-sortable="true">Type Traduction</th>
        <th data-sortable="true">Language source</th>
        <th data-sortable="true">Language destination</th>
        <th data-sortable="true">ètat devis </th>




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