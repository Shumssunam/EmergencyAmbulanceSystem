<?php 
include 'reg_header.php';
include 'reg_menu.php';
$search = $_GET['search'];
?>
<section class="call_for_ambulance">

<div class="container col-md-12">
    <div class="row">
    <div class=" ">
  <h2>Ambulance Information</h2>
          <br>
         <form action="user_search.php" class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search">

                    <div class="input-group-btn">
                        <button class="btn btn-default " type="submit"><span><i class="fa fa-search"></i></span></button>
                    </div>

                </div>
            </form>
          
           <table class="table-responsive table-bordered table-hover table">
    <thead>
      <tr>
          <th>No.of</th>
          <th>District Name</th>
        <th>Ambulance number</th>
        
        <th>Driver number</th>
        <th>Driver name</th>
        <th>Ambulance type</th>
        <th>Description</th>
        <th>Area</th>
        <th>photo</th>
        <th>view</th>
      </tr>
    </thead>
    <tbody>
       <?php
               
              $i=0;
                $select_sea = mysql_query("SELECT * FROM add_ambulance WHERE ambulance_area LIKE '%$search%' || district_name LIKE '%$search%' ORDER BY amb_id DESC LIMIT 1000");
                while ($fetch=  mysql_fetch_array($select_sea)){
                    $i=$i+1;
                    ?>
                   
        <tr>
                        <td>
                       <?php  
                      echo $i;
                        ?>  
                        </td>
                        <td> <?php echo $fetch['district_name'];?></td>
                        <td> <?php echo $fetch['ambulance_number'];?></td>
                        <td><?php echo $fetch['driver_name'];?></td>
                       
                        <td> <?php echo $fetch['dr_p_nu'];?></td>
                        <td><?php echo $fetch['ambulance_type'];?></td>
                        <td><?php echo $fetch['am_discrip'];?></td>
                         <td><?php echo $fetch['ambulance_area'];?></td>
                        
                        <td><img style="height: 50px; width: 50px;" src="../<?php echo $fetch['amb_photo'];?>"></td>
                        <td> <a href="view_user_ambulance.php?id=<?php echo $fetch['amb_id']; ?>"><button type="button" class="btp btn btn-warning">view</button></a></td>
                       
                        
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

</section>
<?php include '../user_footer.php';?>
