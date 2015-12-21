<?php
$title = "";
$des = "";
$id = "";
if($about->num_rows()>0){
    
   $title = $about->row()->title;
   $des = $about->row()->description;
   $id = $about->row()->aboutid;
}
?>
<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Title : <?php echo $title;?>
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url("about/edit_about/".$id); ?>" 
           class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <?php echo $des;?>
    </div>
</div>