<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Upload Media
        </div>
        
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form class="form-horizontal" action="<?php echo base_url('media/doupload'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label" style="text-align: left">Choose File</label>
                <div class="col-sm-4">
                    <input type="file" name="img" class="form-control" accept="image/*" onchange="loadFile(event)"/>
                </div>
            </div>  
            <div class="form-group">
                <label class="control-label col-sm-2"></label>
                <div class="col-sm-4">
                    <img src="" id="preview" />
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2"></label>
                <div class="col-sm-4">
                    <input type="submit" value="Save" class="btn btn-sm btn-primary" onclick="return confirm('You want to save?')" />
                    <a href="<?php echo base_url('media'); ?>" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2"></label>
                <div class="col-sm-4 text-danger">
                    <?php echo $sms; ?>
                </div>
            </div>
            
        </form>
    </div>
</div>
<script>
    function loadFile(e){
        var output = document.getElementById('preview');
        output.width = 170;
        output.src = URL.createObjectURL(e.target.files[0]);
    }
</script>