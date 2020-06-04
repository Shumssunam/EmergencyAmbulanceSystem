<?php 
include 'reg_header.php';
include 'reg_menu.php';
?>

<section class="user_pro">
<div class="container">    
<?php 

$id=$_GET['id'];

   
    $select= mysql_query("SELECT * FROM add_ambulance WHERE amb_id='$id'");    
    $fetch=  mysql_fetch_array($select);     
    ?>
    <div class="row">
        <h1>Ambulance Details</h1>
        <hr>
        <div class="col-md-5 amb_text book_form">
        <p><span>Ambulance Type: </span><?php echo $fetch['ambulance_type'];?>.</p>
            <p><span>Driver Name: </span><?php echo $fetch['driver_name'];?>.</p>
            <p><span>Driver Phone Number: </span><?php echo $fetch['dr_p_nu'];?>.</p>
            <p><span>Ambulance Discription: </span><?php echo $fetch['am_discrip'];?>.</p>
            <p><span>District Name: </span><?php echo $fetch['district_name'];?>.</p>

        </div>
        <div class="col-md-7 amb_pic">
            
            <img src="../<?php echo $fetch['amb_photo'];?>" class="img-responsive">
            <h3 class="user_name">AREA: <?php echo $fetch['ambulance_area'];?> </h3>
        
            
        
            
        </div>
    </div><hr>
    
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
