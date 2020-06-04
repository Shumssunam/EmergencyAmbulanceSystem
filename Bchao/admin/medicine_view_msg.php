<?php 
include 'a_header.php';
include 'a_menu.php';
?>


<div class="container col-md-12">
    <div class="row">
    <div class=" ">
  <h2>message </h2>
  
          <br>
          <table class="table-responsive table-bordered table-hover table" >
            <thead>
              <tr>
                  <th>No.of</th>
                <th>user name</th>

                <th>phone number</th>
                <th>message time</th>
                <th>message details</th>
                <th>Delete</th>
                
              </tr>
            </thead>
                <tbody>
                     <?php 
                    $i=0;
                                $select=  mysql_query("SELECT * FROM order_medicine ORDER BY med_id DESC");
                                while ($fetch = mysql_fetch_array($select)){
                                    $i=$i+1;
                                    ?>

                    <tr>
                       <td>
                      <?php  
                     echo $i;
                       ?>  
                       </td>
                       
                       <td><?php echo $fetch['name'];?></td>
                       <td><?php echo $fetch['mobile'];?></td>
                       <td><?php echo $fetch['time'];?></td>
                       <td><a href="message_details_medicine.php?id=<?php echo $fetch['med_id']; ?>"><button type="button" class="btn btn-success">message details</button></a></td>
                       
                       <td><a href="delete-book-medechine.php?id=<?php echo $fetch['med_id']; ?>"><i style="color:red;font-size: 24px;" class="fa fa-times-circle"></i></a></td>



                   </tr> <?php
                   }
                   ?> 
                 
                </tbody>
  </table>
</div>
</div>
</div>


<?php include 'a_footer.php'?>