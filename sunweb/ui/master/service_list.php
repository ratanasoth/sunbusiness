<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Service List
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('service/newservice'); ?>" 
           class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Add New</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <table class='tbl text-center'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>OrderN<sup>0</sup></th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($service->result() as $rows){
                    echo "<tr>";
                        echo "<td>".$rows->serviceid."</td>";
                        echo "<td>".$rows->servicename."</td>";
                        echo "<td><img src='" . base_url() . $rows->partimg . $rows->img . "' width='100' height='50'></td>";
                        echo "<td>".$rows->orderno."</td>";
                        echo "<td>".$rows->description."</td>";
                        echo "<td width='15%'>"
                        . "<a href='".  base_url("service/editservice/".$rows->serviceid)."' class='btn-sm btn-primary' onclick='return confirm(\"Are you sure want to edit?\");'><i class='glyphicon glyphicon-edit'></i> Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                        . "<a href='".  base_url("service/delete/".$rows->serviceid)."' class='btn-sm btn-danger' onclick='return confirm(\"Are you sure want to delete?\");'><i class='glyphicon glyphicon-trash'></i> Delete</a>"
                        . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>