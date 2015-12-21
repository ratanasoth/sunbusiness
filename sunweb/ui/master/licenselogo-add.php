<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
           New License Logo
        </div>
        
    </div>
</div>
<hr class="hr"/>
<div class="row">
	<div class="col-sm-12">
		<form action="<?php echo base_url('license/insert'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label for="order" class="col-sm-2 control-label" style="text-align:left">Image Order</label>
				<div class="col-sm-4">
					<input type="number" id="order" name="order" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="img" class="col-sm-2 control-label" style="text-align:left">Image URL</label>
				<div class="col-sm-4">
					<input type="file" id="img" name="img" class="form-control" onchange="loadFile(event)" />
					<img src="" alt="" id="preview" width="170" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"></label>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('You want to save?')">Save</button>
					<a href="<?php echo base_url('license'); ?>" class="btn btn-sm btn-success">Back</a>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	function loadFile(e)
	{
		var img = document.getElementById("preview");
		img.src = URL.createObjectURL(e.target.files[0]);
	}
</script>