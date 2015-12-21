<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Training List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url('training/edit'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Edit</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
       <?php echo $training[0]->description;?>
    </div>
</div>
<div class="row box">
    <div class="col-sm-4">
        <h4 class="text-info"><u>We offer</u></h4>
       <?php echo $training[0]->offer; ?>
    </div>
    <div class="col-sm-4">
         <img src="<?php echo base_url('assets/images/'.$training[0]->img1); ?>" class="img-responsive"/>
        
    </div>
    <div class="col-sm-4">
        <img src="<?php echo base_url('assets/images/'.$training[0]->img2); ?>" class="img-responsive"/>
    </div>
</div>