<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Test Center List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url('training/addcenter'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Edit</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <table class="tbl">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Preview</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($center as $c){ ?>
                <tr>
                    <td><?php echo $c->id; ?></td>
                    <td>
                        <img src="<?php echo base_url('assets/images/'.$c->img); ?>" width="90" />
                    </td>
                    <td>
                        <a href="<?php echo base_url('training/deletecenter/'.$c->id.'/'.$c->img); ?>" onclick="return confirm('You want to delete?')" class="btn btn-xs btn-danger">
                            <i class="glyphicon glyphicon-trash"></i> Delete
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>