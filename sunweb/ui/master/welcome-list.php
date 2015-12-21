<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Welcome Message
        </div>
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('welcome/edit'); ?>" 
           class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <strong class="text-success"><?php echo $welcome[0]->title; ?></strong>
        <br/>
        <br/>
        <p class="text-justify">
            <?php echo $welcome[0]->description; ?>
        </p>
    </div>
</div>