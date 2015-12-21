
<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>Contact Us</b></h3>
        <hr class="hr"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-7">
        
        <h4 class='text-primary'>Contact Information </h4>
        <?php echo $c[0]->address; ?>
    </div>
    <div class="col-sm-5">
        <h4 class='text-primary'>Working Hours</h4>
       <?php echo $c[0]->working;?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <h4 class="text-primary">Find Us On Google Map</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.748145998723!2d104.90043371427254!3d11.56990404721075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517266500d73%3A0x5fd728f491ba835b!2sNet+I+Solutions+Co.%2C+Ltd.!5e0!3m2!1sen!2skh!4v1445939717722" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <h4 class='text-primary'>Email Us</h4>
        <form action="<?php echo base_url('ContactUs/email'); ?>" method="post">
                <label for="email" class="control-label">Your Email Address</label>
                <input type="email" class="form-control " id="email" name="email"/>
         
                <label for="subject" class="control-label">Subject</label>
                <input type="text" class="form-control " id="subject" name="subject"/>
                <label for="message" class="control-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="9"></textarea>
                <br/>
                <input type="submit" value="Send" id="btnSend" class="btn btn-primary btn-sm" />
                <p class="text-success">
                    <?php echo $sms; ?>
                </p>
        </form>
    </div>
</div>
<script>
    $(function(){
        $("#menu14").css('background','#428bca');
    });
</script>