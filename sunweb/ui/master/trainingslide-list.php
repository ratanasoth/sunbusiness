<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Training Slide List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url('training/addtraingslide'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Add New</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <table class="tbl">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>URL</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($trainingslide as $t){ ?>
                <tr>
                    <td><?php echo $t->id; ?></td>
                    <td><?php echo $t->title; ?></td>
                    <td>
                        <img src="<?php echo base_url('assets/images/training/'.$t->img); ?>" width="70"/>
                    </td>
                    <td><?php echo $t->url; ?></td>
                    <td><?php echo $t->orderno; ?></td>
                    <td>
                        <a href="<?php echo base_url('training/deleteslide/'.$t->id.'/'.$t->img); ?>" class="btn btn-danger btn-xs" onclick="return confirm('You want to delete?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        <a href="<?php echo base_url('training/updateSlide/'.$t->id); ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>