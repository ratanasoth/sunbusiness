<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit Contact
        </div>
        
    </div>
</div>
<hr class="hr"/>
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url('ContactUs/update'); ?>" method="post">
            <label class="control-label">Address</label>
            <textarea class="col-sm-12" name="address"><?php echo $contact[0]->address; ?>  </textarea>
            <label class="control-label">Working Hour</label>
            <textarea class="col-sm-12" name="workinghour"><?php echo $contact[0]->working; ?></textarea>
            <br/>
            <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('You want to save?')">Save Changes</button>
            <a href="<?php echo base_url('ContactUs/viewcontact');?>" class="btn btn-sm btn-success">Back</a>
        </form>
    </div>
</div>
<div>&nbsp;</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('address');
        CKEDITOR.replace('workinghour');
    };
</script>