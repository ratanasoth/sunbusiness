<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Add Test Center
        </div>
        
    </div>
   
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url('training/insertcenter'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="img" style="text-align: left">Center Logo</label>
                <div class="col-sm-5">
                    <input type="file" id="img" name="img" class="form-control" onchange="loadFile(event)"/>
                    <img src="" id="preview"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" style="text-align: left"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    <a href="<?php echo base_url('training/centerlist'); ?>" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function loadFile(e){
        var img = document.getElementById("preview");
        img.width = 170;
        img.src=URL.createObjectURL(e.target.files[0]);
    }
</script>