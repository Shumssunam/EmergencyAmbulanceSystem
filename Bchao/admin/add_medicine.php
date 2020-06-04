<?php 
include 'a_header.php';
include 'a_menu.php';
?>
 <div class="big_menu col-md-12"  >
           
            <center><h1>Medicine Information</h1><hr> </center>
             
            <form action="add_medicine.php" method="POST" enctype="multipart/form-data">
              <div class="col-md-6">
                <div class="form-group">
                    <label >Medicine Name</label>
                    <input type="text" name="medi_name" class="form-control" id="#" placeholder=" Enter medicine Name"/>
                </div>
                <div class="form-group">
                    <label >Medicine Brand/Company</label>
                    <input type="text" name="medi_comp" class="form-control" id="#" placeholder=" Enter medicine brand"/>
                </div>
                <div class="form-group">
                    <label >Medicine power</label>
                    <input type="text" name="medi_pow" class="form-control" id="#" placeholder=" Enter meidcine power"/>
                </div>
                <div class="form-group">
                    <label >Mfg.lic.no</label>
                    <input type="text" name="mlic" class="form-control" id="#" placeholder=" Enter mfg lic number"/>
                </div>
                <div class="form-group">
                    <label >Batch no</label>
                    <input type="text" name="batch" class="form-control" id="#" placeholder=" Enter batch number"/>
                </div>
                <div class="form-group">
                    <label >DAR</label>
                    <input type="text" name="dar" class="form-control" id="#" placeholder=" Enter DAR number"/>
                </div>
                  
              
                
              </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Photo</label>
                        <input  type="file" name="photo">
                    </div>  
                    <div class="form-group">
                    <label >mfg date</label>
                    <input type="date" name="mfg_date" class="form-control"/>
                </div>
                  <div class="form-group">
                    <label >Exp date</label>
                    <input type="date" name="exp_date" class="form-control"/>
                </div>
                <div class="form-group">
                    <label >Medicine description</label>
                    <textarea name="medi_descrip" class="form-control" rows="5" id="comment"></textarea>
                </div>
              </div>
                <div class="col-md-12 button-submit">

                    <button type="submit" name="submit" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Submit</button>
                </div> 
            </form>
                    <?php
            include '../db/connect.php';
            if(isset($_POST['submit'])){
                $medi_name=$_POST['medi_name'];
                $medi_comp= $_POST['medi_comp'];
                $medi_pow= $_POST['medi_pow'];
                $mlic= $_POST['mlic'];
                $batch= $_POST['batch'];
                $dar= $_POST['dar'];
                $mfg_date= $_POST['mfg_date'];
                $exp_date= $_POST['exp_date'];
               $medi_descrip= $_POST['medi_descrip'];
                
                 $photo_name = $_FILES['photo']['name'];
                
                    $diry = "img";
                    copy($_FILES['photo']['tmp_name'],"$diry/$photo_name");
                   $photo="$diry/$photo_name";
              
                //validation area start
                $select=  mysql_query("SELECT * FROM add_medicine WHERE medi_name='$medi_name'");
                $num=  mysql_num_rows($select);
                if(empty($_POST['medi_name'])){
                    echo "<script>
  alert('Fill the box please.');
  </script>";
                }else if ($num>0) {
                    echo "<script>
  alert('already have this student.');
</script>";
        //validation area end
    }else{
        //insert area 
                $insert= mysql_query("INSERT INTO add_medicine VALUES('','$medi_name','$medi_comp','$medi_pow','$mlic','$batch','$dar','$mfg_date','$exp_date','$medi_descrip','$photo')");
            
              
                
                if($insert){
                    echo "<script>
  alert('sucess');
  </script>";
                }else{
                    echo "<script>
  alert('not done');
  </script>";
                }
            }
            
                }
            ?>
        </div>


    
    
        
      
<?php include 'a_footer.php';?>