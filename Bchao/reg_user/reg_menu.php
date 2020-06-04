<style>
    .re_img_li{
        
    }
    .re_img{
        height: 40px;
        width: 40px;
        border-radius: 3px;
    }
    
</style>

<div class="wrapper">
		<header>
			<nav>
			 <?php 
 

    $user_email = $_SESSION['email'];
    $select= mysql_query("SELECT * FROM registration WHERE email='$user_email'");
     
    $fetch=  mysql_fetch_array($select);
    
    
    ?>
				<div class="menu-icon">
					<i class="fa fa-bars fa-2x"></i>
				</div>
				<div class="logo ">
                                    <a href="reg_index.php"><h3 style="color: #fff;">BACHAO</h3></a>
				</div>
				<div class="menu black">
					<ul>
                                           
						<li><a href="reg_index.php">HOME</a></li>
						<li><a href="reg_about.php">ABOUT</a></li>
						<li><a href="reg_gallery.php">GALLERY </a></li>
						<li><a href="reg_contact.php">CONTACT</a></li>
                                                <li><a href="help_line.php">HELP LINE</a></li>
                                               
                                                <li class="re_img_li"><img class="re_img"  src="../<?php echo $fetch['photo'];?>"></li>
                                                <li><a href="reg_user_profile.php">my profile</a></li>
                                                <li><a href="../logout.php"><button type="button" class="bt btn btn-warning">logout</button></a></li>
                                                <li><a href="view_user_msg.php"><i style="font-size:26px;" class="fa fa-ambulance"></i></a></li>
                                                <li><a href="view_medi_msg.php"><i style="font-size:26px;" class="fas fa-capsules"></i></a></li>
                                                
                                        </ul>
                                   
				</div>
				
			</nav>
		</header>


	</div>

	
	