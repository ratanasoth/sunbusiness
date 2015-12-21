<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Software Description
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("Description/edit1"); ?>" 
               class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Edit</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
	<div class="col-sm-12">
		<?php echo $dc[0]->description;?>
	</div>
</div>