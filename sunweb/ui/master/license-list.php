<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Software License
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("ItSolution/editlicense"); ?>" 
               class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    </div>
</div>
<hr class="hr"/>
<div class="row">
    <div class="col-sm-12">
        <p class="text-justify">
            <?php echo $lc[0]->description;?>
        </p>
    </div>
</div>