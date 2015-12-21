<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
           Email Settings
        </div>
            
    </div>
<div class="col-sm-6">
    <button type="button" id="btnEdit"
                    class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-edit"></i> Edit</button>
        </div>
</div>
<hr class="hr"/>
<div class="row">
    <div class="col-sm-12">
        <form name="frm" action="<?php echo base_url('email/update'); ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="smtp" style="text-align: left">SMTP Server</label>
                <div class="col-sm-4">
                    <input type="text" value="<?php echo $settings[0]->smtp; ?>" class="form-control" name="smtp" id="smtp"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="port" style="text-align: left">SMTP Port</label>
                <div class="col-sm-4">
                    <input type="text" value="<?php echo $settings[0]->port; ?>" class="form-control" name="port" id="port"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="username" style="text-align: left">User Name</label>
                <div class="col-sm-4">
                    <input type="email" value="<?php echo $settings[0]->username; ?>" class="form-control" name="username" id="username"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pass" style="text-align: left">Password</label>
                <div class="col-sm-4">
                    <input type="password" value="<?php echo $settings[0]->password; ?>" class="form-control" name="pass" id="pass"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="to" style="text-align: left">Send To</label>
                <div class="col-sm-4">
                    <input type="email" value="<?php echo $settings[0]->to; ?>" class="form-control" name="to" id="to"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2"  style="text-align: left"></label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary btn-sm" id="btnSubmit" onclick="return confirm('You want to save?')">Save Settings</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div>&nbsp;</div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#smtp").prop("disabled",true);
        $("#port").prop("disabled",true);
        $("#username").prop("disabled",true);
        $("#pass").prop("disabled",true);
        $("#to").prop("disabled",true);
        $("#btnSubmit").prop("disabled",true);
        $("#btnEdit").click(function(){
            $("#smtp").prop("disabled",false);
            $("#port").prop("disabled",false);
            $("#username").prop("disabled",false);
            $("#pass").prop("disabled",false);
            $("#to").prop("disabled",false);
            $("#btnSubmit").prop("disabled",false);
            
        });
    });
</script>