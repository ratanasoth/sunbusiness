<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Add New Service
        </div>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url("service/do_service");?>" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2">Service Name :</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" required="true" placeholder="Service Name"> 
                </div>*
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Order Number :</label>
                <div class="col-sm-6">
                    <input type="number" name="order" class="form-control" placeholder="Order Number"> 
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">URL Page :</label>
                <div class="col-sm-6">
                    <input type="text" name="url" class="form-control" placeholder="URL Page"> 
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Images :</label>
                <div class="col-sm-6">
                    <input type="file" name="image" class="form-control" accept="image/*" onchange="loadFile(event)"> 
                    <br/>
                    <img src="" id="partimg">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Description :</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control" required="true"></textarea>
                </div>*
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">&nbsp;</label>
                <div class="col-sm-6">
                     <input type="submit" value='Save' class="btn btn-sm btn-primary" onclick="return confirm('Do you want to save?')" />
                    <input type="reset" value="Cancel" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('service'); ?>" class="btn btn-info btn-sm">Back</a>
                    
                    <div id='sms'><?php echo "<br/>".$sms; ?></div>
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
    }
     var loadFile = function(event) {
        var output = document.getElementById('partimg');
        output.width = 200;
        output.height = 200;
        output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
