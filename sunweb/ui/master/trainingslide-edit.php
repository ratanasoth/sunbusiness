<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit Training Slide
        </div>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url('training/doupdate'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <input type='hidden' name='id' value="<?php echo $sl[0]->id; ?>"/>
                <label class="col-sm-2 control-label" for="title" style="text-align: left">Slider Title</label>
                <div class="col-sm-4">
                    <input type="text" value="<?php echo $sl[0]->title; ?>" id="title" name="title" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="img" style="text-align: left">Slider Image</label>
                <div class="col-sm-4">
                    <input type="file" id="img" name="img" class="form-control" onchange="loadFile(event)"/>
                    <img src="<?php echo base_url('assets/images/training/'.$sl[0]->img); ?>" width="170" id='preview' style="margin: 2px;"/>         
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="url" style="text-align: left">Slider URL</label>
                <div class="col-sm-4">
                    <input type="text" value="<?php echo $sl[0]->url; ?>" id="url" name="url" class="form-control" />  
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="order" style="text-align: left">Slider Order</label>
                <div class="col-sm-4">
                    <input type="number" value="<?php echo $sl[0]->orderno; ?>" id="order" name="order" class="form-control" />  
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" style="text-align: left"></label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('You want to save change?')">Save Change</button>
                    <a href="<?php echo base_url('training/slidelist'); ?>" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
           
        </form>
    </div>
</div>
<script>
    function loadFile(e){
        var img = document.getElementById('preview');
        img.src = URL.createObjectURL(e.target.files[0]);
    }
</script>