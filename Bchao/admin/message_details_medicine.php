<?php 
include 'a_header.php';
include 'a_menu.php';
?>
<div class="container  col-md-12">
    <a href="medicine_view_msg.php"><i style="font-size: 30px;margin: 10px;" class="fas fa-arrow-alt-circle-left"></i></a>
    <div class="col-md-5">
        <div class="row">
        <?php 
         $user_email = $_SESSION['email'];
    $selectname= mysql_query("SELECT * FROM registration WHERE email='$user_email'");
     
    $fetchname=  mysql_fetch_array($selectname);
    
        
        $id=$_GET['id'];

   
        $select= mysql_query("SELECT * FROM order_medicine WHERE med_id='$id'");    
        $fetch=  mysql_fetch_array($select);     
    ?>
            <table class="tab_color table-hover table table-bordered">
              <thead>
                <tr>
                  <th>No.of</th>
                  <th>Details</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                  <th >Date & Time</th>
                  <td><?php echo $fetch['time'];?></td>

                </tr>
                <tr>
                  <th >Name</th>
                  <td><?php echo $fetch['name']; ?></td>

                </tr>
                <tr>
                  <th >Email</th>
                  <td><?php echo $fetch['email'];?></td>

                </tr>
                <tr>
                  <th >Mobile</th>
                  <td><?php echo $fetch['mobile'];?></td>

                </tr>

                <tr>
                  <th >medicine one</th>
                  <td><?php echo $fetch['medi1'];?></td><td><?php echo $fetch['quant1'];?></td>

                </tr>

              
                <tr>
                  <th >medicine two</th>
                  <td><?php echo $fetch['medi2'];?></td><td><?php echo $fetch['quant2'];?></td>

                </tr>
              
                <tr>
                  <th>medicine three</th>
                  <td><?php echo $fetch['medi3'];?></td><td><?php echo $fetch['quant3'];?></td>

                </tr>
                
                <tr>
                  <th >medicine four</th>
                  <td><?php echo $fetch['medi4'];?></td><td><?php echo $fetch['quant4'];?></td>

                </tr>
               
                
                <tr>
                  <th>prescription's</th>
                  <td><a href=""  data-toggle="modal" data-target="#myModal"><img style="height: 300px; width: 250px;" src="../reg_user/<?php echo $fetch['photo'];?>">view</a></td>

                </tr>
              </tbody>
            </table>
        
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-4 massage_area_ambulance">
        <form action=""  method="POST" enctype="multipart/form-data">
            <div class="form-group">

              <label >User Name or email:</label>
              <input type="text" class="form-control" name="email" value="<?php echo $fetch['email'];?>">
            </div>
            <div class="form-group">
              <label >message:</label>
              <textarea class="form-control" name="mesg" rows="5" id="comment"></textarea>
            </div> 
            <button type="submit" name="submit" class="btn btn-success">send</button>
        </form>
        <?php
                       include '../db/connect.php';
            if(isset($_POST['submit'])){
                 $email= $_POST['email'];
                $mesg= $_POST['mesg'];
//                
//                 $select=  mysql_query("SELECT * FROM ambulance_msg WHERE email='$email'");
//                $num=  mysql_num_rows($select);
//                if(empty($_POST['email'])){
//                     echo "Fill the box please.";
//                }else if ($num>0) {
//                echo "already have this student."; 
//                } 
//                else{
                       $insert= mysql_query("INSERT INTO  medi_msg VALUES('','$mesg','$email')");
                 if($insert){
                    echo "<script>
  alert('successfully send message.');
</script>";
                }else{
                    echo "<script>
  alert('Not done Try again.');
</script>";
                }
                }
                
//            }
            ?>
    </div>
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      
      <!-- Modal body -->
      <div class="modal-body">
       <img style="height: 700px; width: 450px;" src="../reg_user/<?php echo $fetch['photo'];?>">
      </div>

   
    </div>
  </div>
</div>
</div>
<?php include 'a_footer.php'?>