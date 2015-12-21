<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Add New Career
        </div>
    </div>
</div>
<hr class="hr" />
<div  class='row'>
    <div class='col-sm-12'>
        <form action="<?php echo base_url("career/donewcareer");?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2">Position Name:</label>
                <div class="col-sm-6">
                    <input type="text" name="position" class="form-control" placeholder="Position Name" required="true">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Order N<sup>0</sup>:</label>
                <div class="col-sm-6">
                    <input type="number" name="orderno" class="form-control" placeholder="Order Number">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Description:</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" required="true"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">&nbsp;</label>
                <div class="col-sm-6">
                     <input type="submit" value='Save' class="btn btn-sm btn-primary" onclick="return confirm('Do you want to save?')" />
                    <input type="reset" value="Cancel" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('career'); ?>" class="btn btn-info btn-sm">Back</a>
                    
                    <div id='sms'><?php echo "<br/>".$sms; ?></div>
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
