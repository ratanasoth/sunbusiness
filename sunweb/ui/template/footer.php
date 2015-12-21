
<!-- End of the body section -->
<?php
 $con = mysqli_connect($this->db->hostname,$this->db->username,$this->db->password,$this->db->database);
 $sql ="select * from footer";
 $result = mysqli_query($con, $sql);
 $address = "";
 $copyright = "";
 while($row=  mysqli_fetch_array($result)){
     $address = $row[1];
     $copyright=$row[2];
 }
?>
</div>
<div class="container">
    <div class="row footer">
        <div class="col-sm-12 col-xs-12 col-md-6" style="padding-top: 15px">
				<?php echo $address; ?>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6">
              <?php echo $copyright; ?>
        </div>
    </div>
</div>
</body>
</html>