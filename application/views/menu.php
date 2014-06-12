        
		   
		   <div id="sidebar-menu" class="scrollable-content">
				
                   <ul>
	            <?php
               foreach($menu->result() as $db)
					{
					$db['menu_master']; 
			        }
            $lvl=$this->session->userdata("level");
            $sql=mysql_query("SELECT DISTINCT menu_master.menu_master, access.Level_id FROM access
                 INNER JOIN LEVEL ON access.Level_id = level.Level_id
                 INNER JOIN menu ON menu.menu_id = access.menu_id
                 INNER JOIN menu_master ON menu_master.menu_masterID = menu.menu_masterID
                 INNER JOIN user ON user.level = level.Level_id 
				 WHERE access.Level_id = '$lvl' AND access.status =  'Y'");				
	               while($a = mysql_fetch_array($sql))
					{
		        $menu=$a[0];
		        $level=$a[1];
		        ?>
			        <li class='has-sub'><a href=#><i class="glyph-icon icon-laptop"></i><span><?php echo"$a[0]";  ?> </span></a>
				       <ul>
				       <?php
				       $a1= mysql_query("SELECT DISTINCT menu.menu,menu.url FROM access
								         INNER JOIN LEVEL ON access.Level_id = level.Level_id
								         INNER JOIN menu ON menu.menu_id = access.menu_id
								         INNER JOIN menu_master ON menu_master.menu_masterID = menu.menu_masterID
								         INNER JOIN user ON user.level = level.Level_id 
								         WHERE menu_master.menu_master='$menu' and access.Level_id = '$level' AND access.status =  'Y'");
				        ?>
	         	        <?php		
	                     while($b1 = mysql_fetch_array($a1)){
	                    ?>
					
                           <li ><a href='<?php echo base_url();?><?php echo"$b1[1]";?>' ><i class="glyph-icon icon-chevron-right"></i><span><?php echo"$b1[0]";?> </span></a></li>
                           <?php
                            }
                           ?> 
				      </ul>
			      </li> 
	              <?php
                   }
                  ?> 
              </ul>
                    <div class="divider mrg5T mobile-hidden"></div>
          
                </div>