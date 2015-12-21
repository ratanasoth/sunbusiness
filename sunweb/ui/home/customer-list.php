<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>Our Customers</b></h3><hr class="hr"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <ul class="customer-list text-left" style="padding-left: 15px">
        <?php foreach($customers as $customer){ ?>
            <li>
                <a href="<?php echo $customer->url; ?>" target="_blank">
                    <img src="<?php echo base_url('assets/images/customer/'.$customer->img); ?>" alt="Our partner" width="200" />
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>
</div>
<script>
    $(function(){
        $("#menu11").css('background','#428bca');
    });
</script>