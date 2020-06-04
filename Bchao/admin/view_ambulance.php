<?php 
include 'a_header.php';
include 'a_menu.php';
?>


<div class="container col-md-12">
    <div class="row">
    <div class=" ">
  <h2>Ambulance Information</h2>
          <br>
  <table class="table-responsive table-bordered table-hover table">
    <thead>
      <tr>
          <th>No.of</th>
        <th>Ambulance number</th>
        
        <th>Driver number</th>
        <th>Driver name</th>
        <th>Ambulance type</th>
        <th>Description</th>
        <th>photo</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
         <?php 
        $i=0;
                    $select=  mysql_query("SELECT * FROM add_ambulance");
                    while ($fetch = mysql_fetch_array($select)){
                        $i=$i+1;
                        ?>
                   
     <tr>
                        <td>
                       <?php  
                      echo $i;
                        ?>  
                        </td>
                        <td> <?php echo $fetch['ambulance_number'];?></td>
                        <td><?php echo $fetch['driver_name'];?></td>
                       
                        <td> <?php echo $fetch['dr_p_nu'];?></td>
                        <td><?php echo $fetch['ambulance_type'];?></td>
                        <td><?php echo $fetch['am_discrip'];?></td>
                        
                        
                        <td><img style="height: 50px; width: 50px;" src="<?php echo $fetch['amb_photo'];?>"></td>
                        
                        <td><a href="edit_.php?id=<?php  ?>">update</a></td>
                        <td><a href="delete_ambulance.php?id=<?php echo $fetch['amb_id']; ?>">delete</a></td>
                        
                       
                        
                    </tr> <?php
                    }
                    ?> 
      <tr>
                      
                        
                    </tr>
    </tbody>
  </table>
</div>
</div>
</div>


<?php include 'a_footer.php';?>