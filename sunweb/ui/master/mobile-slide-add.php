<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            New Mobile Slide
        </div>
        
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form name="frm" action="<?php echo base_url('MobileSite/doinsert'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="title" style="text-align: left">Title</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="title" name="title"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="img1" style="text-align: left">Image #1</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" id="img1" name="img1" onchange="loadFile1(event)"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" style="text-align: left"></label>
                <div class="col-sm-7">
                    <img src="" id="preview1"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="cap1" style="text-align: left">Caption #1</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="cap1" name="cap1"/>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2" for="img2" style="text-align: left">Image #2</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" id="img2" name="img2" onchange="loadFile2(event)"/>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2" style="text-align: left"></label>
                <div class="col-sm-7">
                    <img src="" id="preview2"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="cap2" style="text-align: left">Caption #2</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="cap2" name="cap2"/>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2" for="order" style="text-align: left">Order</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="order" name="order"/>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2" style="text-align: left"></label>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('You want to save?')">Save</button>
                    <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                    <a href="<?php echo base_url('MobileSite/slide') ?>" class="btn btn-sm btn-success">Back</a>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2" style="text-align: left"></label>
                <div class="col-sm-7">
                    <p class="text-danger">
                        <?php echo $sms; ?>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function loadFile1(e){
        var output = document.getElementById('preview1');
        output.width = 170;
        output.src = URL.createObjectURL(e.target.files[0]);
    }
    function loadFile2(e){
        var output = document.getElementById('preview2');
        output.width = 170;
        output.src = URL.createObjectURL(e.target.files[0]);
    }
</script>