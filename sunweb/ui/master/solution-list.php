<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Solution List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("ItSolution/add"); ?>" 
               class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus-sign"></i> Add New</a>
    </div>
</div>
<hr class="hr"/>
<div class="row">
    <div class="col-sm-12">
        <table class="tbl">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
                
            </thead>
            <tbody>
                <?php foreach($solutions as $s){ ?>
                <tr>
                    <td><?php echo $s->id;?></td>
                    <td><?php echo $s->title;?></td>
                    <td><img src="<?php echo base_url('assets/images/service/'.$s->img);?>" width="70"></td>
                    <td><?php echo $s->description;?></td>
                    <td><?php echo $s->orderno;?></td>
                    <td>
                        <a href="<?php echo base_url('ItSolution/delete/'.$s->id.'/'.$s->img); ?>" onclick="return confirm('You want to delete?')" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        <a href="<?php echo base_url('ItSolution/edit/'.$s->id); ?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>