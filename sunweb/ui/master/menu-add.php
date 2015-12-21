<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            New Menu
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('menu/newmenu'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Add New</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form action="<?php echo base_url('menu/add'); ?>" method="post" name="frm" class="form-horizontal">
            <div class="form-group">
                <label for="menuname" class="control-label col-sm-2" style="text-align: left">Menu Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="menuname" name="menuname"/>
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="control-label col-sm-2" style="text-align: left">Menu URL</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="url" name="url"/>
                </div>
            </div>
            <div class="form-group">
                <label for="type" class="control-label col-sm-2" style="text-align: left">Menu Type</label>
                <div class="col-sm-4">
                    <select name="type" id="type" class="form-control">
                        <option value="main">Main Menu</option>
                        <option value="sub">Sub Menu</option>
                    </select>
                </div>
            </div>
             <div class="form-group">
                <label for="child" class="control-label col-sm-2" style="text-align: left">Child Of</label>
                <div class="col-sm-4">
                    <select name="child" id="child" class="form-control">
                        <option value="0" selected>--No--</option>
                       <?php foreach($parents as $p){ ?>
                        <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
                       <?php } ?>
                    </select>
                </div>
            </div>
             <div class="form-group">
                 <label for="orderno" class="control-label col-sm-2" style="text-align: left">Order N<sup>o</sup></label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="orderno" name="orderno" value="0"/>
                </div>
            </div>
             <div class="form-group">
                 <label class="control-label col-sm-2"></label>
                <div class="col-sm-4">
                    <input type="button" value="Save" class="btn btn-primary btn-sm" onclick="submitForm()" />
                    <input type="reset" id="btnReset" value="Cancel" class="btn btn-danger btn-sm" />
                    <a href="<?php echo base_url('menu'); ?>" class="btn btn-info btn-sm">Back</a>
                    <div class="text-danger" id="sms">
                        <?php echo $this->session->userdata('sms'); ?>
                    </div>
                </div>
            </div>
            <?php $this->session->unset_userdata('sms');?>
        </form>
    </div>
</div>
<script>
    function submitForm(){
        var name = $("#menuname").val();
        var url = $("#url").val();
        if(name.length>2 && url.length>=1){
            frm.submit();
        }
        else{
           $("#sms").html("Invalid name or url!");
        }
    }
</script>