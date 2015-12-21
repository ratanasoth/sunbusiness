<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit Slideshow
        </div>
    </div>
</div>
<hr class="hr" />
<?php 
$id = '';
$name = '';
$des = '';
$image = '';
$part = '';
$order = '';
if($slide->num_rows()>0){
    $id = $slide->row()->slideshowid;
    $name = $slide->row()->slideshowname;
    $des = $slide->row()->description;
    $image = $slide->row()->img;
    $part = $slide->row()->partimg;
    $order = $slide->row()->orderno;
}
?>
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url("Slideshow/do_edit_slide/".$id);?>" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2">Slideshow Name :</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" required="true" placeholder="Slideshow Name" value="<?php echo $name;?>"> 
                </div>*
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Order Number :</label>
                <div class="col-sm-6">
                    <input type="number" name="order" class="form-control" placeholder="Order Number" value="<?php echo $order;?>"> 
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Images :</label>
                <div class="col-sm-6">
                    <input type="file" name="image" class="form-control" accept="image/*" onchange="loadFile(event)"> 
                    <input type="hidden" name="old_img" class="form-control" value="<?php echo $image?>"> 
                    <br/>
                    <img src="<?php echo base_url().$part.$image;?>" id="partimg" width="500">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Description :</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" class="form-control" required="true"><?php echo $des;?></textarea>
                </div>*
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">&nbsp;</label>
                <div class="col-sm-6">
                     <input type="submit" value='Save' class="btn btn-sm btn-primary" onclick="return confirm('Do you want to save?')" />
                    <input type="reset" value="Cancel" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('slideshow'); ?>" class="btn btn-info btn-sm">Back</a>
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
