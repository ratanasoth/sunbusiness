<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit Training Description
        </div>
        
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url('training/update'); ?>" method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-sm-12">
                    <label class="col-sm-12 control-label" for="description">Description</label>
                    <textarea id="description" name="description" class="col-sm-12 form-control">
                        <?php echo $training[0]->description; ?>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label class="col-sm-12 control-label" for="offer">Offer</label>
                    <textarea id="offer" name="offer" class="col-sm-12 form-control">
                        <?php echo $training[0]->offer; ?>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label class="col-sm-12 control-label" for="img1">Image #1</label> 
                    <input type="file" id="img1" name="img1" class="form-control" onchange="loadFile1(event)" />
                    <div class="col-sm-12">
                        <img src="<?php echo base_url('assets/images/'.$training[0]->img1); ?>" id="preview1" width="170" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="col-sm-12 control-label" for="img2">Image #2</label> 
                    <input type="file" id="img2" name="img2" class="form-control" onchange="loadFile2(event)" />
                    <div class="col-sm-12">
                        <img src="<?php echo base_url('assets/images/'.$training[0]->img2); ?>" id="preview2" width="170"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-save"></i> Save</button>
                    <a href="<?php echo base_url('training/traininglist'); ?>" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">&nbsp;</div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('description');
        CKEDITOR.replace('offer');
    };
   function loadFile1(e){
        var output = document.getElementById('preview1');
        output.src = URL.createObjectURL(e.target.files[0]);
    }
   function loadFile2(e){
        var output = document.getElementById('preview2');
        output.src = URL.createObjectURL(e.target.files[0]);
    }
</script>