<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            New Page
        </div>
    </div>
    <div class="col-sm-6" style="text-align: right">
        <input type="button" value="Save" class="btn btn-primary btn-sm" onclick="sumitForm()" />
        <input type="button" id="btnReset" value="Cancel" class="btn btn-danger btn-sm" />
        <a href="<?php echo base_url('page'); ?>" class="btn btn-info btn-sm">Back</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url('page/add'); ?>" method="post" name="frm">
            <label for="title" class="control-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" />
            <label for="description" class="control-label">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea> 
        </form>
        <p class="text-danger"><?php echo $sms; ?></p>
    </div>
</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('description');
    };
    function sumitForm()
    {
        if(confirm('You want to save?'))
            frm.submit();
    }
    $("#btnReset").click(function(){
        frm.reset();
        $("#description").html("");
    });
</script>