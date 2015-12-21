<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>Software Development</b></h3><hr class="hr"/>
    </div>
</div>
<div class="row">
	<div class="col-sm-12">
		<?php echo $dc[0]->description; ?>
	</div>
</div>
<?php
// find total rows for outside loop
$row = count($software)/2;
// column counter
$counter =0;
// index
$index=0;
// loop for each row from 0
for($i=0;$i<$row;$i++){
?>

<div class="row rowx">
     <?php for(;$index<count($software);){ ?>
    <div class="col-sm-6" style="padding:2px">
        <div class="row box">
            <div class="col-sm-6">
                <p><strong class="text-primary"><?php echo $software[$index]->title; ?></strong></p>
                 <img src="<?php echo base_url('assets/images/software/'.$software[$index]->img); ?>" width="200" />
            </div>
            <div class="col-sm-6">
                 <div>&nbsp;</div>
                <div>&nbsp;</div>
                <strong class="text-danger"><u>Core Features</u></strong>
                <div>&nbsp;</div>
                <?php echo $software[$index]->description; ?>
            </div>
        </div>
    </div>
    <?php 
    $index++;
    $counter++;
        if($counter%2==0){
            break;
        }
    ?>
     <?php } ?>
</div>

<?php } ?>

<script>
	$(window).load(function(){
	
		// get all row
		var rows = $(".rowx");
		// loop in each row
		for(var i=0; i<rows.length; i++)
		{
			// columns for each row
			var th = $(rows[i]).children("div").children($(".box"));
			var h = [];
			for(var j=0; j<th.length;j++)
			{
				h[j] = $(th[j]).height();
			}
			var mh = h[0];
			for(var a=0;a<h.length;a++)
			{
				if(mh>=h[a])
				{
					mh = mh;
				}
				else{
					mh=h[a];
				}
			}
			for(var b=0;b<th.length;b++)
			{
				$(th[b]).css("height",mh+"px");
			}
		}
	});
</script>