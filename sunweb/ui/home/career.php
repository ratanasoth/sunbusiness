<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>Careers</b></h3>
        <hr class="hr"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php foreach($careers as $c){ ?>
        <h4 class="text-info" style="margin:0; padding: 0;">Position: <?php echo $c->position; ?></h4>

        <p>
            <?php echo $c->description; ?>
        </p>
        <?php } ?>
      
    </div>
</div>
<script>
    $(function(){
        $("#menu12").css('background','#428bca');
    });
</script>