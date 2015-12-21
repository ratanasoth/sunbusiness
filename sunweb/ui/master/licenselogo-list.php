<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            License Logo List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("license/add"); ?>" 
               class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-edit"></i> Add New</a>
    </div>
</div>
<hr class="hr"/>
<div class="row">
	<div class="col-sm-12">
		<table class="tbl">
			<thead>
				<tr>
					<th>ID</th>
					<th>Image</th>
					<th>Order</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($logo as $l){ ?>
				<tr>
					<td><?php echo $l->id; ?></td>
					<td><img src="<?php echo base_url('assets/images/license/'.$l->img); ?>" width="80" /></td>
					<td><?php echo $l->orderno; ?></td>
					<td>
						<a href="<?php echo base_url('license/delete/'.$l->id.'/'.$l->img); ?>" onclick="return confirm('You want to delete?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
