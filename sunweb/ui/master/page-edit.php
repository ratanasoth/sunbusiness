<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Edit Page
        </div>
    </div>
    <div class="col-sm-6" style="text-align: right">
        <input type="button" value="Save Changes" class="btn btn-primary btn-sm" onclick="sumitForm()" />
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url('page/edit'); ?>" method="post" name="frm">
            <input type="hidden" name="id" value="<?php echo $page[0]->pageid; ?>" />
            <label for="title" class="control-label">Title</label>
            <input type="text" value="<?php echo $page[0]->title; ?>" id="title" name="title" class="form-control" />
            <label for="description" class="control-label">Description</label>
            <textarea id="description" name="description" class="form-control">
                <?php echo $page[0]->description; ?>
            </textarea> 
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

</script>