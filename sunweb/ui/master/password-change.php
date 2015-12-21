<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Change Password
        </div>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <form name="frm" class="form-horizontal" action="<?php echo base_url('user/chagepass'); ?>" method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="pass">New password</label>
                <div class="col-sm-3">
                    <input type="password" name="pass" id="pass" class="form-control"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="pass"></label>
                <div class="col-sm-3">
                    <input type="submit" value="Save" onclick="return confirm('You want to save change?')" class="btn btn-sm btn-danger"/>
                    <a href="<?php echo base_url('user'); ?>" class="btn btn-sm btn-success">Back</a>
                    <p class="text-danger">
                        <?php echo $sms;?>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
