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
        <h1>Order medicine Now</h1>
        <?php 
        date_default_timezone_set("Asia/Dhaka");
 echo "এখন সময় " . date("Y-m-d h:i:sa");
        ?>
        <hr>
        <div class="col-md-7 amb_text book_form">
            
            <form action="order_medicine.php" class="navbar-form"  method="POST" enctype="multipart/form-data">
                         
                        <br>
                        <div class="col-md-4">
                            <div class="input-group "><br>
                                <label>medicine name: </label>
                                <input type="text" class="form-control" placeholder="Pick up location" name="medicine1" >
                               
                            </div>
                            
                        </div>
                        <br>
                        <div class="col-md-1">
                            <div class="input-group ">
                                 <label>Quantity: </label>
                                 <input type="number" class="form-control" name="quantity1" min="0" max="100" step="1" value="1">
                            </div>
                            
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="input-group ">
                                <label>medicine name: </label>
                                <input type="text" class="form-control" placeholder="Pick up time" name="medicine2" >
                            </div>
                            
                        </div>
                        <div class="col-md-1">
                            <div class="input-group ">
                                 <label>Quantity: </label>
                                 <input type="number" class="form-control" name="quantity2" min="0" max="100" step="1" value="1">
                            </div>
                            
                        </div>
                        
                        <div class="col-md-4">
                            <div class="input-group ">
                                <label>medicine name:</label>
                                <input type="text" class="form-control" placeholder="Pick up location" name="medicine3" >
                            </div>
                            
                        </div>
                        
                        <div class="col-md-1">
                            <div class="input-group ">
                                 <label>Quantity: </label>
                                 <input type="number" class="form-control" name="quantity3" min="0" max="100" step="1" value="1">
                            </div>
                            
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4" >
                            <div class="input-group " style="">
                                <label>medicine name: </label>
                                <input type="text" class="form-control" placeholder="Pick up time" name="medicine4" >
                            </div>
                            
                        </div>
                        <div class="col-md-1">
                            <div class="input-group ">
                                 <label>Quantity: </label>
                                 <input type="number" class="form-control" name="quantity4" min="0" max="100" step="1" value="1">
                            </div>
                            
                        </div>
                        <div class="input-group">
                            <br>
                            <label>Name: </label>
                            <input type="text" class="form-control" placeholder="name" name="name" >
                        </div>
                        <br><br>
                        <div class="input-group">
                           
                            <label>Mobile: </label>
                            <input type="text" class="form-control" placeholder="Mobile number" name="mobile" >
                        </div>
                        <br><br>
                        <div class="input-group">
                           
                            <label>email: </label>
                            <input type="email" class="form-control" placeholder="email" value="<?php echo $fetchname['email'];?>" name="email" >
                        </div>
                        <br><br>
                        <div class="input-group">
                            <label>shipping address: </label>
                            <input type="text" class="form-control" placeholder="Location" name="shipping" >
                        </div>
                        
                    <div class="form-group">
                        <label>prescription's</label>
                        <input  type="file" name="photo">
                    </div>  
                        <br>
                        
                        
                        <br>
                        <button type="submit" class="btn book_bttn" style="" name="submit">Book Now</button>
                    </form>
            <?php
                       include '../db/connect.php';
            if(isset($_POST['submit'])){
                
                $medicine1= $_POST['medicine1'];
                $quantity1= $_POST['quantity1'];
                $medicine2= $_POST['medicine2'];
                $quantity2= $_POST['quantity2'];
                $medicine3= $_POST['medicine3'];
                $quantity3= $_POST['quantity3'];
                $medicine4= $_POST['medicine4'];
                $quantity4= $_POST['quantity4'];
                $name=$_POST['name'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $shipping=$_POST['shipping'];
               
                $time=date("Y-m-d h:i:sa");
                
                
               $photo_name = $_FILES['photo']['name'];
                
                    $diry = "img";
                    copy($_FILES['photo']['tmp_name'],"$diry/$photo_name");
                   $photo="$diry/$photo_name";
              
                
                
              $select=  mysql_query("SELECT * FROM order_medicine WHERE mobile='$mobile'");
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
                
                 $insert= mysql_query("INSERT INTO order_medicine VALUES('','$medicine1','$quantity1','$medicine2','$quantity2','$medicine3','$quantity3','$medicine4','$quantity4','$name','$mobile','$email','$shipping','$time','$photo')");
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
