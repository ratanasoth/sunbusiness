<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Edit Mobile Site
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="#" onclick="save(event)"
           class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-save"></i> Save</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form name="frm" action="<?php echo base_url('MobileSite/update');?>" method="post">
            <textarea name="description" id="description" class="col-sm-12">
                <?php echo $mobile[0]->description;?>
            </textarea>
        </form>
    </div>
</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('description');
    }
    function save(e){
        e.preventDefault();
        var o = confirm('You want to save changes?');
        if(o){
            frm.submit();
        }
    }
</script>