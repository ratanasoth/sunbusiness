<?php 
    $name ="";
    $des = "";

    if($about->num_rows()>0){

        $name = $about->row()->title;
        $des = $about->row()->description;
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
        <form name='frm' class="form-horizontal" action="<?php echo base_url('about/do_edit/'.$this->uri->segment(3)); ?>" method="post">
            <div class="form-group">
                <label for='firstname' class="col-sm-2 control-label">Title:</label>
                <div class="col-sm-5">
                    <input type="text" id='firstname' value="<?php echo $name;?>" name='title' class="form-control" required="true"/>
                </div>*
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
                    <a href="<?php echo base_url('about'); ?>" class="btn btn-info btn-sm">Back</a>
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