<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Careers
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("career/addcareer"); ?>" 
               class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Add New</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
   
        <div class="col-sm-12">
            <table class="tbl">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Position</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($career->result() as $rows):?>
                    <tr>
                        <td><?php echo $rows->careerid;?></td>
                        <td><a href="<?php echo base_url("career/view_career/".$rows->careerid);?>" target="_blank"><?php echo $rows->position;?></a></td>
                        <td><?php echo $rows->orderno; ?></td>
                        <td>
                             <a href="<?php echo base_url("career/edit_career/".$rows->careerid);?>" class="btn-xs btn-primary" onclick="return confirm('Are you sure want to edit?');" title="Edit"><i class="glyphicon glyphicon-edit"></i> Edit</a>&nbsp;
                <a href="<?php echo base_url("career/delete_careerr/".$rows->careerid);?>" class="btn-xs btn-danger" onclick="return confirm('Are you sure want to delete?');" title="Delete"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                        </td>
                    </tr>
                    
                      <?php endforeach;?>
                    
                </tbody>
            </table>
            <div class="col-sm-2">
                <h5>&nbsp;</h5>
               
            </div>
        </div>
        <br/>
        <br/>
  
</div>