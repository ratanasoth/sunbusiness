<?php 
$id = "";
$order = '';
$position ="";
$des = "";

if($edit_career->num_rows()>0){
    
    $id = $edit_career->row()->careerid;
    $position = $edit_career->row()->position;
    $des = $edit_career->row()->description;
    $order = $edit_career->row()->orderno;
}

?>
<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit Career
        </div>
    </div>
</div>
<hr class="hr" />
<div  class='row'>
    <div class='col-sm-12'>
        <form name='frm' class="form-horizontal" action="<?php echo base_url('career/do_edit/'.$id); ?>" method="post">
            <div class="form-group">
                <label for='firstname' class="col-sm-2 control-label">Position Name:</label>
                <div class="col-sm-5">
                    <input type="text" id='firstname' value="<?php echo $position;?>" name='positionname' class="form-control" required="true"/>
                </div>*
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Order N<sup>0</sup>:</label>
                <div class="col-sm-6">
                    <input type="number" name="orderno" class="form-control" placeholder="Order Number" value="<?php echo $order;?>">
                </div>
            </div>
             <div class="form-group">
                <label for='firstname' class="col-sm-2 control-label">Description:</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" required="true"><?php echo $des;?></textarea>
                </div>*
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-3">
                    <input type="submit" value='Save Changes' class="btn btn-sm btn-primary" onclick="return confirm('Do you want to save?')" />
                    <input type="reset" value="Cancel" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('career'); ?>" class="btn btn-info btn-sm">Back</a>
                </div> 
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('description');
    }
</script>