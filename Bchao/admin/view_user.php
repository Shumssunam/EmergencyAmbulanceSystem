<?php 
include 'a_header.php';
include 'a_menu.php';
include '../db/connect.php'; 
?>


<div class="container col-md-12">
    <div class="row">
    <div class=" ">
  <h2>User Information</h2>
          
  <table class="table-responsive table-bordered table-hover table">
    <thead>
      <tr>
          <th>No.of</th>
        <th>Name</th>
        
        <th>Email</th>
        <th>Phone</th>
        <th>present Address</th>
        <th>Date of Birth</th>
        <th>NID</th>
        <th>Photo</th>
        <th>more</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
         <?php 
        $i=0;
                    $select=  mysql_query("SELECT * FROM registration");
                    while ($fetch = mysql_fetch_array($select)){
                        $i=$i+1;
                        ?>
                   
     <tr>
                        <td>
                       <?php  
                      echo $i;
                        ?>   
                        </td>
                        <td> <?php echo $fetch['first_name'];?></td>
                        <td><?php echo $fetch['email'];?> </td>
                       
                        <td> <?php echo $fetch['city'];?></td>
                        <td><?php echo $fetch['phone'];?></td>
                        <td><?php echo $fetch['nid'];?></td>
                        <td><?php echo $fetch['age'];?></td>
                        
                        <td><img style="height: 50px; width: 50px;" src="../<?php echo $fetch['photo'];?>"></td>
                        <td><a href="">more info</a></td>
                        <td><a href="user_edit_.php?id=<?php  ?>">update</a></td>
                        <td><a href="user_delete.php?id=<?php echo $fetch['reg_id'];   ?>">delete</a></td>
                        
                       
                        
                    </tr> <?php
                    }
                    ?> <tr>
                        <td>
                     
                        
    </tbody>
  </table>
</div>
</div>
</div>


<?php include 'a_footer.php';?>