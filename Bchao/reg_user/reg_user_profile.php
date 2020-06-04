<?php 
include 'reg_header.php';
include 'reg_menu.php';
?>
<section class="user_pro">
<div class="container">    
<?php 
    $user_email = $_SESSION['email'];
    $select= mysql_query("SELECT * FROM registration WHERE email='$user_email'");    
    $fetch=  mysql_fetch_array($select);     
    ?>
    <div class="row">
        <h1>My profile</h1>
        <hr>
        <div class="col-md-5 user_pro_pic">
            <img src="../<?php echo $fetch['photo'];?>">
            <h3 class="user_name"><?php echo $fetch['first_name'];?> <?php echo $fetch['last_name'];?></h3>
        </div>
        <div class="col-md-5 user_pro_text">
            <p><span>First Name: </span><?php echo $fetch['first_name'];?>.</p>
            <p><span>Last Name: </span><?php echo $fetch['last_name'];?>.</p>
            <p><span>Address: </span><?php echo $fetch['address'];?>.</p>
            <p><span>City: </span><?php echo $fetch['city'];?>.</p>
            <p><span>State: </span><?php echo $fetch['state'];?>.</p>
            <p><span>Zip: </span><?php echo $fetch['zip'];?>.</p>
            <p><span>NID: </span><?php echo $fetch['nid'];?>.</p>
            <p><span>Zip: </span><?php echo $fetch['age'];?>.</p>
            <p><span>Gender: </span><?php echo $fetch['gender'];?>.</p>
            <p><span>Date of Birth: </span><?php echo $fetch['date'];?>.</p>
            <p><span>E-mail: </span><?php echo $fetch['email'];?>.</p>
            <p><span>Phone: </span><?php echo $fetch['phone'];?>.</p>
            <p><span>Blood: </span><?php echo $fetch['blood'];?>.</p>
            <p><span>Password: </span><?php echo $fetch['pass'];?>.</p>
        </div>
        
    </div><hr>
</div>
</section>


<?php include '../user_footer.php';?>
