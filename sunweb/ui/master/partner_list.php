<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Partner List
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('partner/newpartner'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Add New</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
        <div class="col-sm-12">
            <table class="tbl">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>URL</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_partner->result() as $row):?>
                    <tr>
                        <td>
                            <?php echo $row->partnername;?>
                        </td>
                        <td>
                           <img src="<?php echo base_url() . $row->partimg . $row->img; ?>" class="img-thumbnail" width="90" >  
                        </td>
                        <td>
                            <?php echo $row->url;?>
                        </td>
                        <td><?php echo $row->orderno; ?></td>
                        <td>
                            <a href="<?php echo base_url("partner/delete_partner/".$row->partnerid);?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure want to delete it?');"><i class="glyphicon glyphicon-trash"></i>&nbsp;Delete</a>
                            <a href="<?php echo base_url("partner/parnter_edit/".$row->partnerid);?>" class="btn btn-xs btn-success" onclick="return confirm('Are you sure want to edit it?');"><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit</a>
                        </td>

                    
                    </tr>   
                    <?php endforeach;?>
                </tbody>
            </table>
           
        </div>
</div>