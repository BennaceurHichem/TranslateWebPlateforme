<?php use Core\FH; ?>
<form class="form" action=<?=$this->postAction?> method="post">
    <?= FH::displayErrors($this->displayErrors) ?>
    <?= FH::csrfInput()?>
    <?= FH::inputBlock('text','Nom','fname',$this->contact->fname,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
    <?= FH::inputBlock('text','Prenom','lname',$this->contact->lname,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
    <?= FH::inputBlock('text','Email','email',$this->contact->email,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
    <?= FH::inputBlock('text','Numeros de telephone ','phone',$this->contact->home_phone,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>

    <?= FH::inputBlock('text','Address','address',$this->contact->address,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
    <?= FH::inputBlock('text','Langue origine','langorg',$this->contact->zip,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
    <?= FH::inputBlock('text','Langue Source','wlangsrc',$this->contact->work_phone,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
    <div class="col-md-12 text-right">
        <a href="<?=PROOT?>contacts" class="btn btn-default">Cancel</a>
        <?= FH::submitTag('Save',['class'=>'btn btn-primary'])?>
    </div>
</form>