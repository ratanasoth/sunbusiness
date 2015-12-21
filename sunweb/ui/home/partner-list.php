<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>Our Partners</b></h3><hr class="hr"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <ul class="partner">
            <?php foreach($partners as $partner){ ?>
            <li>
                <a href="<?php echo $partner->url;?>" target="_blank">
                    <img src="<?php echo base_url('assets/images/partner/'.$partner->img);?>" alt="partner" width="100"/>
                </a>
            </li>
            <?php } ?>
        </ul>
       
    </div>
</div>
<script>
    $(function(){
        $("#menu10").css('background','#428bca');
    });
</script>
