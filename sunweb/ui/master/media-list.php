<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Media List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("media/add"); ?>" 
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
                    <th>File URL</th>
                    <th>File Name</th>
                    <th>View</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($media as $m){ ?>
                <tr>
                    <td><?php echo $m->id; ?></td>
                    <td><a href="<?php echo $m->url; ?>" target="_blank"><?php echo $m->url; ?></a></td>
                    <td><?php echo $m->name; ?></td>
                    <td>
                        <img src="<?php echo $m->url; ?>" width="90" />
                    </td>
                    <td>
                        <a href="<?php echo base_url('media/delete/'.$m->id .'/'.$m->name); ?>" class="btn btn-xs btn-danger" onclick="return confirm('You want to delete it?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>