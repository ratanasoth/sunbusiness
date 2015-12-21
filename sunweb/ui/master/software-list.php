<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Software List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("software/add"); ?>" 
               class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus-sign"></i> Add New</a>
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
                    <th>Preview</th>
                    <th>Description</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($software as $s){?>
                <tr>
                    <td><?php echo $s->id; ?></td>
                    <td><?php echo $s->title; ?></td>
                    <td>
                        <img src="<?php echo base_url('assets/images/software/'.$s->img);?>" width="70"/>
                    </td>
                    <td><?php echo $s->description; ?></td>
                    <td><?php echo $s->orderno; ?></td>
                    <td>
                        <a href="<?php echo base_url('software/delete/'.$s->id.'/'.$s->img); ?>" class="btn btn-xs btn-danger" onclick="return confirm('You want to delete?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        <a href="<?php echo base_url('software/edit/'.$s->id); ?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>