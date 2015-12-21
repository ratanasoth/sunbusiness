<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b><?php echo $training[0]->title; ?></b></h3><hr class="hr"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
       <?php echo $training[0]->description;?>
    </div>
</div>
<div class="row box">
    <div class="col-sm-4">
        <h4 class="text-info"><u>We offer</u></h4>
       <?php echo $training[0]->offer; ?>
    </div>
    <div class="col-sm-4">
         <img src="<?php echo base_url('assets/images/'.$training[0]->img1); ?>" class="img-responsive"/>
        
    </div>
    <div class="col-sm-4">
        <img src="<?php echo base_url('assets/images/'.$training[0]->img2); ?>" class="img-responsive"/>
    </div>
</div>
<div class="row box">
    <div class="col-sm-12">
        <h4 class="text-info"><u>Authorized Testing Center</u></h4>
        <div>&nbsp;</div>
        <?php foreach($centers as $s){ ?>
        <div class="col-sm-2">
            <img src="<?php echo base_url('assets/images/'.$s->img);?>" class="img-responsive" />
            
        </div>
       
        <?php } ?>
        
    </div>
     <div>&nbsp;</div>
</div>
<!-- Slider Section -->
<div class='row'>
    <div class='col-sm-12'>
        <ul id='partners'>
            <?php foreach($slide as $sl){ ?>
            <li><a href="<?php echo $sl->url;?>">
                    <img src="<?php echo base_url('assets/images/training/'.$sl->img); ?>" alt="<?php echo $sl->title; ?>" />
            </a></li>
            <?php } ?>
          
        </ul>
    </div>
</div>

<!-- End of partners section -->
<!-- Include flexi script -->
<script src="<?php echo base_url('assets/flexi/js/jquery.flexisel.js'); ?>"></script>
<script>
    $(window).load(function() {
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