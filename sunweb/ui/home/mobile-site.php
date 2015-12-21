<style type="text/css">
	.carousel-indicators{
		display: none!important;
	}
</style>
<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>Mobile Site Service</b></h3><hr class="hr"/>
    </div>
</div>
<!-- slider section -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <?php $x=0; ?>
      <?php foreach($slides as $s){?>
        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $x; ?>"></li>
  
    <?php $x++;}?>
         <li data-target="#carousel-example-generic" data-slide-to="10"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <?php $i=0;?>
    <?php foreach($slides as $s){ ?>
      <?php if($i==0){ $i++;?>
      <div class="item active">
        <div class="slide-caption"><?php echo $s->title; ?></div>
        <div class="text-center" style="margin-bottom: 18px">
             <img src="<?php echo base_url('assets/images/mobile/'.$s->img1); ?>" alt="" style="display: inline;margin:0 18px" width="400" class="img-responsive">
            <div class="cap1"><?php echo $s->cap1; ?></div>
            <img src="<?php echo base_url('assets/images/mobile/'.$s->img2); ?>" alt="" style="display: inline;margin:0 18px" width="400" class="img-responsive">
            <div class="cap2"><?php echo $s->cap2; ?></div>
        </div>
      </div>
      <?php } else{?>
      <div class="item">
        <div class="slide-caption"><?php echo $s->title; ?></div>
        <div class="text-center" style="margin-bottom: 18px">
             <img src="<?php echo base_url('assets/images/mobile/'.$s->img1); ?>" alt="" style="display: inline;margin:0 18px" width="400" class="img-responsive">
            <div class="cap1"><?php echo $s->cap1; ?></div>
            <img src="<?php echo base_url('assets/images/mobile/'.$s->img2); ?>" alt="" style="display: inline;margin:0 18px" width="400" class="img-responsive">
            <div class="cap2"><?php echo $s->cap2; ?></div>
        </div>
      </div>
      <?php }?>
    <?php } ?>

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

<!-- end of slider section -->
<div class="row">
    <div class="col-sm-12">
       <?php echo $mobile[0]->description; ?>
    </div>
</div>
