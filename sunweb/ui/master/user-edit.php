<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            Edit User
        </div>
    </div>
</div>
<hr class="hr" />
<div  class='row'>
    <div class='col-sm-12'>
        <form name='frm' class="form-horizontal" action="<?php echo base_url('user/edit'); ?>" method="post">
            <!-- hidden field for user id -->
            <input type='hidden' name='userid' value='<?php echo $user[0]->userid; ?>' />
            <!-- First Name -->
            <div class="form-group">
                <label for='firstname' class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-3">
                    <input type="text" id='firstname' value="<?php echo $user[0]->firstname; ?>" name='firstname' class="form-control" />
                </div>*
            </div>
            <!-- Last Name -->
            <div class="form-group">
                <label for='lastname' class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-3">
                    <input type="text" id='lastname' value="<?php echo $user[0]->lastname; ?>" name='lastname' class="form-control" />
                </div>*
            </div>
            <!-- Gender -->
            <div class="form-group">
                <label for='gender' class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-3">
                    <select name="gender" id='gender' class="form-control">
                        <?php if($user[0]->gender=='Male'){ ?>
                        <option selected value='Male'>Male</option>
                        <option value='Female'>Female</option>
                        <?php } else { ?>
                        <option value='Male'>Male</option>
                        <option selected value='Female'>Female</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for='email' class="col-sm-2 control-label">Email</label>
                <div class="col-sm-3">
                    <input type="email" id='email' value="<?php echo $user[0]->email; ?>" name='email' class="form-control" />
                </div>
            </div>
            <!-- User Name -->
            <div class="form-group">
                <label for='username' class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-3">
                    <input type="text" id='username' value="<?php echo $user[0]->username; ?>" name='username' class="form-control" />
                </div>*
            </div>
             <!-- Password -->
            <div class="form-group">
                <label for='pass' class="col-sm-2 control-label">Password</label>
                <div class="col-sm-3">
                    <input type="password" id='pass' name='pass' class="form-control" />
                </div>
            </div>
            <!-- User Type -->
            <div class="form-group">
                <label for='type' class="col-sm-2 control-label">User Type</label>
                <div class="col-sm-3">
                    <select name="type" id='type'class="form-control">
                        <option selected value='Admin'>Admin</option>
                    </select>
                </div>
            </div>
            <!-- Button Group -->
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-3">
                    <input type="submit" value='Save Changes' class="btn btn-sm btn-primary" onclick="return confirm('Do you want to save?')" />
                    <input type="reset" value="Cancel" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('user'); ?>" class="btn btn-info btn-sm">Back</a>
                    
                    <div id='sms'><?php echo "<br/>".$sms; ?></div>

                </div> 
            </div>
           
        </form>
    </div>
</div>
