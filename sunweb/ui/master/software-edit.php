<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit Software
        </div>
        
    </div>

</div>
<hr class="hr"/>
<div class="row">
    <div class="col-sm-12">
        <form name="frm" action="<?php echo base_url('software/update'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="id" value="<?php echo $software[0]->id; ?>" />
            <div class="form-group">
                <label class="control-label col-sm-2" for="title" style="text-align: left">Software Title</label>
                <div class="col-sm-4">
                    <input type="text" value="<?php echo $software[0]->title; ?>" name="title" id="title" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="order" style="text-align: left">Order N<sup>o</sup></label>
                <div class="col-sm-4">
                    <input type="number" value="<?php echo $software[0]->orderno; ?>" name="order" id="order" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="description" style="text-align: left">Description</label>
                <div class="col-sm-10">
                    <textarea class="col-sm-12" name="description" id="description">
                        <?php echo $software[0]->description; ?>
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="img" style="text-align: left">Featured Image</label>
                <div class="col-sm-4">
                    <input type="file" name="img" id="img" class="form-control" onchange="loadFile(event)"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" style="text-align: left"></label>
                <div class="col-sm-4">
                    <img src="<?php echo base_url('assets/images/software/'.$software[0]->img); ?>" id="preview" width="170" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" style="text-align: left"></label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('You want to save?')">Save</button>
                    <button type="reset" class="btn btn-sm btn-danger">Cancel</button>
                    <a href="<?php echo base_url('software/listSoftware'); ?>" class="btn btn-sm btn-success">Back</a>
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
    };
   function loadFile(e){
        var output = document.getElementById('preview');
        output.width = 170;
        output.src = URL.createObjectURL(e.target.files[0]);
    }
</script>