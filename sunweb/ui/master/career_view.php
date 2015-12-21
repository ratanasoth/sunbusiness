<?php 
    $id = '';
    $position = '';
    $descrption = '';
    $order = '';
    if($view_data->num_rows()>0){
        $id = $view_data->row()->careerid;
        $position = $view_data->row()->position;
        $descrption = $view_data->row()->description;
        $order = $view_data->row()->orderno;
    }
?>
<div class='row'>
    <div class="col-sm-12">
        <div class="col-sm-6">
        <div class="table-caption">
            View Career Id : <?php echo $id;?>
        </div>
        
    </div>
    <div class="col-sm-6">
           <a href="<?php echo base_url("career"); ?>" 
           class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-backward"></i>Back</a>
    </div>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-10">
            <h4 class="text-info">Position Name: <?php echo $position;?></h4>
            <h4 class="text-info">Order Number: <?php echo $order;?></h4>
        </div>
        <div class="col-sm-2">
            <a href="<?php echo base_url("career/edit_career/".$id); ?>" 
           class="btn btn-success btn-sm pull-right" onclick="return confirm('Are you sure want to edit?');"><i class="glyphicon glyphicon-edit"></i>Edit</a>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-12">
            <?php echo $descrption;?>
        </div>
    </div>
</div>