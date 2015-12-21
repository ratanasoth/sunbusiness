<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit Partner
        </div>
    </div>
</div>
<?php 
    $partner_id = "";
    $partner_name = "";
    $order = "";
    $partner_url = "";
    $partner_img = "";
    $partner_parth ="";
    if($list_partner->num_rows()>0){
        $partner_id = $list_partner->row()->partnerid;
        $partner_name = $list_partner->row()->partnername;
        $order = $list_partner->row()->orderno;
        $partner_img = $list_partner->row()->img;
        $partner_parth = $list_partner->row()->partimg;
        $partner_url = $list_partner->row()->url;
    }
?>
<hr class="hr" />
<div  class='row'>
    <div class='col-sm-12'>
        <form method="post" action="<?php echo base_url('partner/do_edit_partner/'.$partner_id);?>" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2">Partner Name :</label>
                <div class="col-sm-4">
                    <input type="text" name="partnername" placeholder="Partner Name" class="form-control" value="<?php echo $partner_name;?>">
                </div>*
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Order Number :</label>
                <div class="col-sm-4">
                    <input type="number" name="orderno" placeholder="Order Number" class="form-control" value="<?php echo $order;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Partner URL :</label>
                <div class="col-sm-4">
                    <input type="text" name="partnerurl" placeholder="Partner URL" class="form-control" value="<?php echo $partner_url;?>">
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-2">Images :</label>
                <div class="col-sm-4">
                    <input type="file" name="image" class="form-control" accept="image/*" onchange="loadFile(event)">
                    <input type="hidden" name="old_img" value="<?php echo $partner_img;?>"/>
                    <br/>
                    <img src="<?php echo base_url().$partner_parth.$partner_img;?>" id="partimg" width="150">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">&nbsp;</label>
                <div class="col-sm-4">
                    <input type="submit" value='Save' class="btn btn-sm btn-primary" onclick="return confirm('Do you want to edit?')" />
                    <input type="reset" value="Cancel" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('partner'); ?>" class="btn btn-info btn-sm">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    
   var loadFile = function(event) {
        var output = document.getElementById('partimg');
        output.width = 150;
        output.src = URL.createObjectURL(event.target.files[0]);
  };
  
</script>
