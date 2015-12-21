<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Edit Welcome Message
        </div>
    </div>
    <div class="col-sm-6">
        <a href="#" class="btn btn-success btn-xs pull-right" onclick="submitForm(event)"><i class="glyphicon glyphicon-save"></i> Save</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form name="frm" action="<?php echo base_url('welcome/save'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $welcome[0]->id; ?>" />
            <label class="control-label" for="title">Title</label>
            <input type="text" name="title" id="title" value="<?php echo$welcome[0]->title; ?>" class="form-control"/>
            <label for="desc" class="control-label">Description</label>
            <textarea id="desc" name="desc" class="form-control">
                <?php echo $welcome[0]->description; ?>
            </textarea>
        </form>
    </div>
</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('desc');
    };
    function submitForm(e)
    {
       
        if(confirm('You want to save?'))
            frm.submit();
         e.preventDefault();
    }
</script>