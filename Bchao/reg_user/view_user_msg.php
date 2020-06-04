<?php
include 'reg_header.php';
include 'reg_menu.php';

?>
<div class="contact msg_area">    
    <div class="container">
        <div class="row">
            <center><h2>message</h2></center><hr>
            <div class=" contactar col-md-12">
            
          <br>
          <table class="table-responsive table-bordered table-hover table" >
            <thead>
              <tr>
                  <th>No.of</th>
                  <th>message</th>

                <th>form</th>
 
                
              </tr>
            </thead>  <?php
                  $user_email = $_SESSION['email'];

    $i=0;
    $selecta=  mysql_query("SELECT * FROM ambulance_msg WHERE email='$user_email' ORDER BY id_am_msg DESC");
    while($fetchmsg = mysql_fetch_array($selecta)){
    $i=$i+1;
                ?>
                <tbody>
                     
  

                    <tr>
                       <td><?php echo $i;?></td>
                       <td><?php echo $fetchmsg['msg_am'];?></td>
                       <td>Bachao send you.</td>
                       
                      


                   </tr> 
                 
                </tbody> <?php }   ?>
  </table>  
            </div>
        </div>
    </div>
</div>

<?php include '../user_footer.php';?>