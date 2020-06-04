<?php 
include 'reg_header.php';
include 'reg_menu.php';



          $user_email = $_SESSION['email'];
    $selectname= mysql_query("SELECT * FROM registration WHERE email='$user_email'");
     
    $fetchname=  mysql_fetch_array($selectname);
    
        
?>

<section class="user_pro">
<div class="container">    

    <div class="row">
        <h1>Book Ambulance Now</h1>
        <?php 
        date_default_timezone_set("Asia/Dhaka");
 echo "এখন সময় " . date("Y-m-d h:i:sa");
        ?>
        <hr>
        <div class="col-md-7 amb_text book_form">
            
            <form action="book_now.php" class="navbar-form"  method="POST" enctype="multipart/form-data">
                         <div class="input-group">
                            <label >Ambulance Type:</label>
                            <select class="form-control" name="ambulance_type">
                                <option value="ac">AC</option>
                                <option value="non ac">NON AC</option>
                                <option value="freezer">Freezer</option>
                                <option value="icu">ICU</option>
                            </select>
                          </div> 
                <br>
               
                        
                        <div class="col-md-6">
                            <div class="input-group "><br>
                                <label>Pick up: </label>
                                <input type="text" class="form-control" placeholder="Pick up location" name="pick_up" required>
                            </div>
                            
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="input-group ">
                                 <label>Drop off: </label>
                                <input type="text" class="form-control" placeholder="Drop up location" name="drop_off" required>
                            </div>
                            
                        </div>
                        <br><br>
                        <div class="col-md-6">
                            <div class="input-group ">
                                <label>Pick up time: </label>
                                <input type="time" class="form-control" placeholder="Pick up time" name="pick_up_time" required>
                            </div>
                            
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="input-group ">
                                 <label>Drop off time: </label>
                                <input type="time" class="form-control" placeholder="Drop up time" name="drop_off_time" required>
                            </div>
                            
                        </div>
                        <br>
                        <div class="input-group">
                            <br>
                            <label>Name: </label>
                            <input type="text" class="form-control" placeholder="name" name="name" required>
                        </div>
                        <br><br>
                        <div class="input-group">
                           
                            <label>Mobile: </label>
                            <input type="text" class="form-control" placeholder="Mobile number" name="mobile" required>
                        </div>
                        <br><br>
                        <div class="input-group">
                           
                            <label>email: </label>
                            <input type="email" class="form-control" placeholder="email" value="<?php echo $fetchname['email'];?>" name="email" required>
                        </div>
                        <br><br>
                        <div class="input-group">
                            <label>Patient location: </label>
                            <input type="text" class="form-control" placeholder="Location" name="location" required>
                        </div>
                        
                        <br><br>
                        <div class="">
                            <label>Emergency Type: </label>
                            <br>
                            <input type="radio" class="form-check-input" id="radio2" name="emergency" value="Accident"> Accident<br>
                            <input type="radio" class="form-check-input" id="radio2" name="emergency" value="Heart attack"> Heart attack<br>
                            <input type="radio" class="form-check-input" id="radio2" name="emergency" value="Brain stroke"> Brain stroke<br>
                            <input type="radio" class="form-check-input" id="radio2" name="emergency" value="Pregnancy"> Pregnancy<br>
                            <input type="radio" class="form-check-input" id="radio2" name="emergency" value="Breathing"> Breathing<br>
                            <input type="radio" class="form-check-input" id="radio2" name="emergency" value="Others"> Others<br>
                        </div>
                        <br><br>
                        <div class="input-group">
                            <label>Age : </label>
                            <input type="number" min="0" max="99" class="form-control" placeholder="0" name="age" required>
                        </div>
                        <br><br>
                         <div class="">
                            <label>Gender: </label>
                            <br>
                            <input type="radio" class="form-check-input" id="radio2" name="gender" value="male"> Male<br>
                            <input type="radio" class="form-check-input" id="radio2" name="gender" value="female"> Female<br>
                            
                        </div>
                        <br>
                        <button type="submit" class="btn book_bttn" style="" name="submit">Book Now</button>
                    </form>
            <?php
                       include '../db/connect.php';
            if(isset($_POST['submit'])){
                $ambulance_type=$_POST['ambulance_type'];
                
                $pick_up= $_POST['pick_up'];
                $drop_off= $_POST['drop_off'];
                $pick_up_time= $_POST['pick_up_time'];
                $drop_off_time= $_POST['drop_off_time'];
                $name=$_POST['name'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $location=$_POST['location'];
                $emergency=$_POST['emergency'];
                $age=$_POST['age'];
                $gender=$_POST['gender'];
                $time= date("Y-m-d h:i:sa");
                
              $select=  mysql_query("SELECT * FROM book_ambulance WHERE mobile='$mobile'");
                $num=  mysql_num_rows($select);
                if(empty($_POST['mobile'])){
                    echo "<script>
  alert('Fill in the Box.');
</script>";
                }else if ($num>0) {
                echo "<script>
  alert('already booking.');
</script>"; 
                } 
                else{
                
                 $insert= mysql_query("INSERT INTO book_ambulance VALUES('','$ambulance_type','$pick_up','$drop_off','$pick_up_time','$drop_off_time','$name','$mobile','$email','$location','$emergency','$age','$gender','$time')");
                 if($insert){
                    echo " 
    <script>
  alert('successfully book done.');
</script>
";
                }else{
                    echo "<script>
  alert('Not done try again!');
</script>";
                }
            }
            }
                
            ?>
            
        </div>
        <div class="col-md-5 amb_pic">
            
           <div class="book">
                <h2>Book Your ambulance</h2>
                    <br>
                 <h4>Please provide the following information to book an ambulance. Ensure that your mobile number is correct. Our support will reach you as soon as possible.</h4>
            </div>  
            
        
            
        </div>
    </div>
    
</div>
</section>
<!--<section class="call_for_ambulance">

    <div class="container col-md-12">
        <div class="row">
            <div class="book">
                <h2>Book Your ambulance</h2>
                    <br>
                 <h4>Please provide the following information to book an ambulance. Ensure that your mobile number is correct. Our support will reach you the soonest possible.</h4>
            </div>    
                    <div class="book_form col-md-6">
                   


              </div>
        </div>
    </div>

</section>-->

<?php include '../user_footer.php';?>
