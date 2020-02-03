<?php

use App\Models\Traducteur;
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
        <a href="<?=PROOT?>/home/listeclient" class="btn btn-primary btn-xs btn" role="button" >LISTE DES CLIENTS</a>
        <a href="<?=PROOT?>/home/adminhome" class="btn btn-primary btn-xs" role="button" >LISTE DES UTILISATEURS</a>

    </center>
    <h2 class="text-center">LISTE DES TRADUCTEURS</h2>


    <table class="table table-striped table-condensed table-bordered table-hover"
           data-show-search-button="true"
           data-page-size="5"
           data-toggle="table"
           data-pagination="true"
           data-search="true">

        <thead>
        <th data-sortable="true">nom et prenom</th>
        <th data-sortable="true">email</th>
        <th data-sortable="true">adresse</th>
        <th data-sortable="true">assermentè</th>
        <th data-sortable="true">approuvè</th>


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









<script>

    $(document).ready(function () {
        $('#table').DataTable({
            "order": [[ 3, "desc" ]]
        });
        $('.dataTables_length').addClass('bs-select');
    });

</script>

<style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
    }
</style>
<script>
    // the selector will match all input controls of type :checkbox
    // and attach a click event handler
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
</script>

<?php $this->end(); ?>