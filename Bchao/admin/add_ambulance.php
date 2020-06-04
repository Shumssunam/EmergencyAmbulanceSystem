<?php 
include 'a_header.php';
include 'a_menu.php';
?>
 <div class="big_menu col-md-12"  >
           
            <center><h1>Ambulance Information</h1><hr> </center>
             
            <form action="add_ambulance.php" method="POST" enctype="multipart/form-data">
              <div class="col-md-6">
                <div class="form-group">
                    <label >Ambulance Number</label>
                    <input type="text" name="ambulance_number" class="form-control" id="#" placeholder=" Enter ambulance number"/>
                </div>
                <div class="form-group">
                    <label >Driver Name</label>
                    <input type="text" name="driver_name" class="form-control" id="#" placeholder=" Enter Driver name"/>
                </div>
                <div class="form-group">
                    <label >Driver phone number</label>
                    <input type="text" name="driver_P_n" class="form-control" id="#" placeholder=" Enter driver number"/>
                </div>
                <div class="form-group">
                    <label >Ambulance Type</label>
                    <select name="amb_type" class="form-control">
                        <option value="ac">AC</option>
                                <option value="non ac">NON AC</option>
                                <option value="freezer">Freezer</option>
                                <option value="icu">ICU</option>
                    </select>
                    <!--<input type="text" name="amb_type" class="form-control" id="#" placeholder=" Enter type of ambulance"/>-->
                </div>
                  <div class="form-group">
                    <label >Ambulance area</label>
                    <input type="text" name="amb_area" class="form-control" id="#" placeholder=" Enter ambulance number"/>
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <textarea name="descrip" class="form-control" rows="5" id="comment"></textarea>
                </div>
              
              </div>
        <div class="col-md-6">  
            <div class="form-group" >
                <label >Select District </label>
                <select class="form-control" name="district_name" >
                 <?php $select = mysql_query("SELECT * FROM add_district");
                             while ($fetch5 = mysql_fetch_array($select)){?>

                <option value="<?php echo $fetch5['district_name'];?>"><?php echo $fetch5['district_name'];?></option>
                <?php } ?>
                </select>
            </div>

                <div class="form-group">
                      <label>Photo</label>
                      <input  type="file" name="photo">
              </div> 
        </div>
                <div class="col-md-12 button-submit">

                    <button type="submit" name="submit" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Submit</button>
                </div> 
            </form>
                    <?php
            include '../db/connect.php';
            if(isset($_POST['submit'])){
                $ambulance_number=$_POST['ambulance_number'];
                $driver_name= $_POST['driver_name'];
                $driver_P_n= $_POST['driver_P_n'];
                $amb_type= $_POST['amb_type'];
                $amb_area= $_POST['amb_area'];
                $descrip= $_POST['descrip'];
                $district_name=$_POST['district_name'];
                 $photo_name = $_FILES['photo']['name'];
                
                    $diry = "img";
                    copy($_FILES['photo']['tmp_name'],"$diry/$photo_name");
                   $photo="$diry/$photo_name";

              
                //validation area start
                $select=  mysql_query("SELECT * FROM add_ambulance WHERE ambulance_number='$ambulance_number'");
                $num=  mysql_num_rows($select);
                if(empty($_POST['ambulance_number'])){
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
                $insert= mysql_query("INSERT INTO add_ambulance VALUES('','$ambulance_number','$driver_name','$driver_P_n','$amb_type','$amb_area','$descrip','$photo','$district_name')");
            
              
                
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