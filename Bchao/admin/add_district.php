<?php 
include 'a_header.php';
include 'a_menu.php';
?>
 <div class="big_menu col-md-12" >
           
            <center><h1>Add District</h1><hr> </center>
             
            <form action="add_district.php" method="POST" enctype="multipart/form-data">
              <div class="col-md-offset-3 col-md-6">
                
                <div class="form-group">
                    <label >District Name</label>
                    <input type="text" name="district_name" class="form-control" id="#" placeholder=" Enter district name"/>
                </div>
                <div class="form-group">
                    <label >police phone</label>
                    <input type="text" name="police_phone" class="form-control" id="#" placeholder=" Enter phone number"/>
                </div>
                <div class="form-group">
                    <label >fire service phone</label>
                    <input type="text" name="fire_phone" class="form-control" id="#" placeholder=" Enter phone number"/>
                </div>
                <div class="form-group">
                    <label >Hospital phone</label>
                    <input type="text" name="hospital_phone" class="form-control" id="#" placeholder=" Enter phone number"/>
                </div>
      
                <div class="col-md-12 button-submit">

                    <button type="submit" name="submit" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Add</button>
                </div> 
            </form>
                    <?php
            include '../db/connect.php';
            if(isset($_POST['submit'])){
                $district_name=$_POST['district_name'];
                $police_phone=$_POST['police_phone'];
                $fire_phone=$_POST['fire_phone'];
                $hospital_phone=$_POST['hospital_phone'];
                
               
                
                  

              
                //validation area start
                $select=  mysql_query("SELECT * FROM add_district WHERE district_name='$district_name'");
                $num=  mysql_num_rows($select);
                if(empty($_POST['district_name'])){
                    echo "Fill the box please.";
                }else if ($num>0) {
                    echo "already have this district";
        //validation area end
    }else{
        //insert area 
                $insert= mysql_query("INSERT INTO add_district VALUES('','$district_name','$police_phone','$fire_phone','$hospital_phone')");
            
              
                
                if($insert){
                    echo "sucess";
                }else{
                    echo "not done";
                }
            }
            
                }
            ?>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
            <div class="col-md-12">
            <center><h2>View Districts</h2></center><hr>
          <br>
  <table class="table-responsive table-bordered table-hover table">
    <thead>
      <tr>
          <th>No.of</th>
        <th>Medicine name</th>
        <th>police phone</th>
        <th>fire service phone</th>
        <th>hospital phone</th>
<!--    
        <th>Update</th>
        <th>Delete</th>-->
      </tr>
    </thead>
    <tbody>
         <?php 
        $i=0;
                    $select=  mysql_query("SELECT * FROM add_district");
                    while ($fetch = mysql_fetch_array($select)){
                        $i=$i+1;
                        ?>
                   
     <tr>
                        <td>
                       <?php  
                      echo $i;
                        ?>  
                        </td>
                        
                        <td><?php echo $fetch['district_name'];?></td>
                        <td><?php echo $fetch['police_num'];?></td>
                        <td><?php echo $fetch['fire_num'];?></td>
                        <td><?php echo $fetch['hospital_num'];?></td>
                        <td><a href="delete_dist_phone.php?id=<?php echo $fetch['district_id']; ?>"><i style="color:red;font-size: 24px;" class="fa fa-times-circle"></i></a></td>
                       
                        
<!--                        <td><a href="edit_district.php?id=<?php  ?>">update</a></td>
                        <td><a href="delete_district.php?id=<?php echo $fetch['district_id']; ?>">delete</a></td>
                        -->
                       
                        
                    </tr> <?php
                    }
                    ?> 
      <tr>
                      
                        
                    </tr>
    </tbody>
  </table>
        </div>
</div>
            </div>

    
    
        
      
<?php include 'a_footer.php';?>