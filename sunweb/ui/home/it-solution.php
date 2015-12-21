<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>IT System Integration</b></h3><hr class="hr"/>
    </div>
</div>
<div class="row">
	<div class="col-sm-12">
		<?php echo @$dc[0]->description; ?>
	</div>
</div>
<!-- start the thum section -->
<?php
// find total rows for outside loop
$row = count($solutions)/3;
// column counter
$counter =0;
// index
$index=0;
// loop for each row from 0
for($i=0;$i<$row;$i++){
?>
<div class="row rowx">
    <?php for(;$index<count($solutions);){ ?>
    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-4">
        <div class="thumbnail">
            <div class="title text-success"><?php echo $solutions[$index]->title; ?></div>
             <img src="<?php echo base_url('assets/images/service/'.$solutions[$index]->img); ?>" class="img-responsive">
             <div class="caption">
                 <?php echo $solutions[$index]->description; ?>
             </div>
        </div>
    </div>
    <?php 
    $index++;
    $counter++;
        if($counter%3==0){
            break;
        }
    ?>
    <?php } ?>
</div>

<?php } ?>

<!-- ///////////////////////////////////////////////////////////////////////// -->
<div class="row">
    <div class="col-sm-12" style="padding:2px">
        <div class="box" style="padding:0">
            <div class="title text-success" style="text-align: left;">Software Licenses</div>
            <div class="row">
                <div class="col-sm-4">
                    <?php echo $lc[0]->description;?>
                </div>
                <div class="col-sm-8">
                    <ul class="image-list">
					<?php foreach($logo as $l){ ?>
                        <li><img src="<?php echo base_url('assets/images/license/'.$l->img); ?>" width="150" /></li>
                    <?php } ?>
						
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	$(window).load(function(){
		// get all row
		var rows = $(".rowx");
		// loop in each row
		for(var i=0; i<rows.length; i++)
		{
			// columns for each row
			var th = $(rows[i]).children("div").children($(".thumbnail"));
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