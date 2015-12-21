
<div class="container">
    <div class="row">

        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h3 class="text-info">User Login</h3>
            <hr>
            <form action="<?php echo base_url('admin/dologin'); ?>" method="post">
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" />
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" />
                </div>
                <div class="form-group">
                    <input type="submit" value=" Login " class="btn btn-primary" />
                    <a href="<?php echo base_url();?>" class="btn btn-info">Back Home</a>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
       
    </div>

</div>

