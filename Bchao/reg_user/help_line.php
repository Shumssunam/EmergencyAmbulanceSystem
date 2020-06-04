<?php
include 'reg_header.php';
include 'reg_menu.php';

?>
<div class="contact msg_area">    
    <div class="container">
        <div class="row">
            <center><h2>Emargency phone number</h2></center><hr>
            <div class=" contactar col-md-12">
            
          <br>
          <table class="table-responsive table-bordered table-hover table" >
            <thead>
              <tr>
                  <th>No.of</th>
                  <th>district name</th>

                <th>Police number</th>
                 <th>fire number</th>
                  <th>hospital number</th>
                
              </tr>
            </thead>  <?php
                

    $i=0;
    $selecta=  mysql_query("SELECT * FROM add_district");
    while($fetchmsg = mysql_fetch_array($selecta)){
    $i=$i+1;
                ?>
                <tbody>
                     
  

                    <tr>
                       <td><?php echo $i;?></td>
                       <td><?php echo $fetchmsg['district_name'];?></td>
                       <td><?php echo $fetchmsg['police_num'];?></td>
                       <td><?php echo $fetchmsg['fire_num'];?></td>
                       <td><?php echo $fetchmsg['hospital_num'];?></td>
                       
                       
                      


                   </tr> 
                 
                </tbody> <?php }   ?>
  </table>  
            </div>
        </div>
    </div>
</div>


<?php include '../user_footer.php';?>