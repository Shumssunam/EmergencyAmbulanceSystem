<?php 
include 'a_header.php';
include 'a_menu.php';
?>
<div class="container  col-md-12">
    <a href="view_notification.php"><i style="font-size: 30px;margin: 10px;" class="fas fa-arrow-alt-circle-left"></i></a>
    <div class="col-md-5">
        <div class="row">
        <?php 
         $user_email = $_SESSION['email'];
    $selectname= mysql_query("SELECT * FROM registration WHERE email='$user_email'");
     
    $fetchname=  mysql_fetch_array($selectname);
    
        
        $id=$_GET['id'];

   
        $select= mysql_query("SELECT * FROM book_ambulance WHERE book_id='$id'");    
        $fetch=  mysql_fetch_array($select);     
    ?>
            <table class="tab_color table-hover table table-bordered">
              <thead>
                <tr>
                  <th>No.of</th>
                  <th>First</th>

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
                  <th >Ambulance Type</th>
                  <td><?php echo $fetch['ambulance_type'];?></td>

                </tr>

                <tr>
                  <th >Pick up Time</th>
                  <td><?php echo $fetch['pickup_time'];?></td>

                </tr>
                <tr>
                  <th >Drop off Time</th>
                  <td><?php echo $fetch['dropoff_time'];?></td>

                </tr>
                <tr>
                  <th >Pick up Location</th>
                  <td><?php echo $fetch['pickup'];?></td>

                </tr>
                <tr>
                  <th >Drop off Location</th>
                  <td><?php echo $fetch['dropoff'];?></td>

                </tr>
                <tr>
                  <th >Patient Location</th>
                  <td><?php echo $fetch['patient_location'];?></td>

                </tr>
                <tr>
                  <th >Age</th>
                  <td><?php echo $fetch['age'];?></td>

                </tr>
                <tr>
                  <th >Gender</th>
                  <td><?php echo $fetch['gender'];?></td>

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
                       $insert= mysql_query("INSERT INTO  ambulance_msg VALUES('','$mesg','$email')");
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
</div>
<?php include 'a_footer.php'?>