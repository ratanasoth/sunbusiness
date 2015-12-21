<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Slide show for Home Page -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <?php $j=0;?>

  <ol class="carousel-indicators">
     <?php foreach($slides as $sl){ ?>
     <li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; $j++; ?>"></li>
     <?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <?php $i=0; ?>
  <div class="carousel-inner" role="listbox">
    <?php foreach($slides as $slide){ ?>
    <?php if($i==0){ ?>
    <div class="item active">
        <div class="carousel-caption">
      </div>
        <img src="<?php echo base_url('assets/images/slideshow/'.$slide->img); $i++;?>" alt="" width="1200">
    </div>
    <?php } else{ ?>
      <div class="item">
        <div class="carousel-caption">
      </div>
        <img src="<?php echo base_url('assets/images/slideshow/'.$slide->img); $i++;?>" alt="" width="1200">
    </div>
    <?php } ?>
    <?php } ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End of slide show section -->
<!-- Start welcome section -->

<div class="row">
	<div class="col-sm-12">
		<?php foreach($welcome as $w){ ?>
		<?php echo $w->description; ?>
		<?php } ?>
	</div>
</div>
<!-- End of welcome section -->
<!-- Start of services section -->
<div class="row" style="background: url(<?php echo base_url('assets/images/bg.png'); ?>) repeat;">
    <div class="col-sm-12">
        <h4 class="text-white" style="padding: 3px;">Our Services</h4>
    </div>
</div>
<!-- Start thumbnail section -->
<br/>
<div class="row rowx" >
    <?php foreach($services as $s){ ?>
    <div class="col-sm-6 col-md-3" style="padding:2px;">
    <div class="thumbnail">
      <img src="<?php echo base_url('assets/images/service/'.$s->img); ?>" alt="IT Solutions">
      <div class="caption">
          <h4 class="text-primary"><?php echo $s->servicename; ?></h4>
            <?php echo $s->description; ?>
        <p><a href="<?php echo $s->url; ?>" class="btn btn-primary btn-xs" role="button">Read More</a></p>
      </div>
    </div>
  </div>
  <?php } ?>

</div>
<!-- End of thumbnail section -->
<!-- Start of what news section -->
<div class="row" style="background: url(<?php echo base_url('assets/images/bg.png'); ?>) repeat;">
    <div class="col-sm-12">
        <h4 class="text-white" style="padding: 3px;">What's News</h4>
    </div>
</div>
<br/>
<div class="row">
    <div class="col-sm-12 news">
        <?php foreach($news as $n){ ?>
        <p class="text-primary"><strong><?php echo $n->newsname; ?></strong></p>
        <p class="text-justify">
           <?php echo $n->description; ?>
        </p>
        <?php } ?>
       
    </div>
</div>
<!-- End of what is news section -->

<!-- Include flexi script -->
<script src="<?php echo base_url('assets/flexi/js/jquery.flexisel.js'); ?>"></script>
<script>
    $(window).load(function() {
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
	
        $("#partners").flexisel({
            visibleItems: 6,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,            
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 1
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<script>
    $(function(){
        $("#menu2").css('background',"url(<?php echo base_url('assets/images/bg-menu.png'); ?>) repeat");
    });
</script>
<!-- End of Flexi script -->