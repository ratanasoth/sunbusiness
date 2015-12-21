<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Mobile Site
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url("MobileSite/edit/"); ?>" 
           class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <?php echo $mobile[0]->description; ?>
    </div>
</div>