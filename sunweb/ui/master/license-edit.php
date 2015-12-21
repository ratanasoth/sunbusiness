<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Edit License
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="#" onclick="doSave(event)"
               class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-save"></i> Save</a>
    </div>
</div>
<hr class="hr"/>
<div class="row">
    <div class="col-sm-12">
        <form name="frm" action="<?php echo base_url("ItSolution/updatelicense"); ?>" method="post">
            <textarea class="col-sm-12" name="description">
                <?php echo $lc[0]->description;?>
            </textarea>
        </form>
    </div>
</div>

<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('description');
    };
    function doSave(e){
        e.preventDefault();
        var o = confirm('You want to save?');
        if(o){
            frm.submit();
        }
    }
</script>