<?php 
include 'a_header.php';
include 'a_menu.php';
?>


<div class="container col-md-12">
    <div class="row">
    <div class=" ">
  <h2>Medicine information</h2>
          <br>
  <table class="table-responsive table-bordered table-hover table">
    <thead>
      <tr>
          <th>No.of</th>
        <th>Medicine name</th>
        
        <th>Medicine brand</th>
        <th>Medicine Power</th>
        <th>MFC.lic.no</th>
        <th>mfc date</th>
        <th>exp date</th>
        <th>photo</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
         <?php 
        $i=0;
                    $select=  mysql_query("SELECT * FROM add_medicine");
                    while ($fetch = mysql_fetch_array($select)){
                        $i=$i+1;
                        ?>
                   
     <tr>
                        <td>
                       <?php  
                      echo $i;
                        ?>  
                        </td>
                        <td> <?php echo $fetch['medi_name'];?></td>
                        <td><?php echo $fetch['medi_brand'];?></td>
                       
                        <td> <?php echo $fetch['medi_pow'];?></td>
                        <td><?php echo $fetch['mfg.lic'];?></td>
                        <td><?php echo $fetch['mfg_date'];?></td>
                        <td><?php echo $fetch['exp_date'];?></td>
                        
                        <td><img style="height: 50px; width: 50px;" src="<?php echo $fetch['medi_photo'];?>"></td>
                        
                        <td><a href="edit_.php?id=<?php  ?>">update</a></td>
                        <td><a href="delete_medicine.php?id=<?php echo $fetch['medi_id']; ?>">delete</a></td>
                        
                       
                        
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


<?php include 'a_footer.php'?>