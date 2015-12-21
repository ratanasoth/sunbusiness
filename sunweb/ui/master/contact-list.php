<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
           <?php echo $title;?>
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url("ContactUs/edit/".$contact[0]->id); ?>" 
           class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    </div>
</div>
<hr class="hr"/>
<div class="row">
    <div class="col-sm-6">
    <?php echo $contact[0]->address; ?>  
    </div>
    <div class="col-sm-6">
    <?php echo $contact[0]->working; ?>    
    </div>
</div>