<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Title : <?php echo $title;?>
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="#" onclick="submitFrm(event)"
           class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-edit"></i> Save Changes</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <form action="<?php echo base_url("footer/save"); ?>" method="post" name="frm">
    <div class="col-sm-6 text-primary">
        <textarea name="address" id="address" class="col-sm-12 form-control">
             <?php echo $footer[0]->address; ?>
        </textarea>
           
    </div>
    <div class="col-sm-6 text-primary">
        <textarea name="copyright" id="copyright" class="col-sm-12 form-control">
             <?php echo $footer[0]->copyright; ?>
        </textarea>
           
    </div>
   
    </form>
</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('address');
        CKEDITOR.replace('copyright');
    };
    function submitFrm(e){
        e.preventDefault();
        var o = confirm('You want to upate?');
        if (o) {
            frm.submit();
}
    }
</script>