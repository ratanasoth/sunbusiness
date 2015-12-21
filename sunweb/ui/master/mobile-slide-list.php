<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Mobile Slide List
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('MobileSite/addslide'); ?>"
           class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> Add New</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <table class="tbl">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image #1</th>
                    <th>Caption #`1</th>
                    <th>Image #2</th>
                    <th>Caption #2</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($slides as $sl){?>
                <tr>
                    <td><?php echo $sl->title; ?></td>
                    <td><img src="<?php echo base_url('assets/images/mobile/'.$sl->img1); ?>" width="50"/></td>
                   <td><?php echo $sl->cap1; ?></td>
                   <td><img src="<?php echo base_url('assets/images/mobile/'.$sl->img2); ?>" width="50"/></td>
                   <td><?php echo $sl->cap2; ?></td>
                   <td><?php echo $sl->orderno; ?></td>
                   <td>
                        <a href="<?php echo base_url('MobileSite/delete/'.$sl->id.'/'.$sl->img1.'/'.$sl->img2); ?>" class="btn btn-xs btn-danger" onclick="return confirm('You want to delete?')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                       
                   </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>