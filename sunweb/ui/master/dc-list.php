<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            IT Description
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("Description/edit"); ?>" 
               class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Edit</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
	<div class="col-sm-12">
		<?php echo $dc[0]->description;?>
	</div>
</div>