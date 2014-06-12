<script>
	$(document).ready(function() {
		$(".padamas-title").click(function(){
			window.location = "<?php echo base_url().'main/index';?>";
		})
		$(".dashboard").click(function(){
			window.location = "<?php echo base_url().'main/index';?>";	
		})
	})
</script>
<body class="fixed-sidebar fixed-header">
        <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
            <img src="assets/images/loader-dark.gif" alt="">
        </div>
        <div id="page-wrapper" class="demo-example">

            <div id="page-sidebar">
                <div id="header-logo">
                   <label class="padamas-title" style = "cursor:pointer">Padamas</label><i class="opacity-80"></i>

                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                </div>
                <div id="sidebar-search">

                </div>
				<div id="sidebar-menu" class="scrollable-content">
                   <ul>

	            <?php
				 		
	             foreach($menu->result_array() as $key):
					$id_user	= $key['ID_User'];
					$id_menu	= $key['Menu_ID'];
					$nama_menu	= $key['title'];
					
		        ?>
			        <li class='has-sub'><a href=#><i class="glyph-icon icon-laptop"></i><span><?php echo $nama_menu;  ?> </span></a>
				       <ul>
				       <?php
				       
							$parent_menu = $this->app_model->parent_menu($id_user,$id_menu);
							
							foreach($parent_menu->result_array() as $value):
								$id_menu_parent		= $value['Menu_ID'];
								$nama_menu_parent 	= $value['title'];
								$url				= $value['url'];
	                    ?>
					
                           <li ><a href='<?php echo base_url().$url.'/index/'.$id_menu_parent;?>' ><i class="glyph-icon icon-chevron-right"></i><span><?php echo $nama_menu_parent; ?> </span></a></li>
                           <?php endforeach; ?>
                           
				      </ul>
			      </li> 
	              <?php endforeach; ?> 
              </ul>
                    <div class="divider mrg5T mobile-hidden"></div>
          
                </div>
            </div>
            
            <div id="page-main">
                <div id="page-main-wrapper">
                    <div id="page-header" class="clearfix">
                        <div id="page-header-wrapper" class="clearfix">
							<div class="button-group dropdown">
								<?php if($level == 'SuperAdmin'): ?>
                                <a class="btn" href="javascript:;" title="Notification">
                                    <span class="button-content text-center float-none font-size-11 text-transform-upr">
                                        <i class="glyph-icon icon-check-sign float-left"></i>
                                        Notif
                                    </span>
                                </a>
                                <a class="btn" href="javascript:;" data-toggle="dropdown">
                                    <span class="glyph-icon icon-separator">
                                        <i class="glyph-icon icon-angle-down"></i>
                                    </span>
                                </a>
                                
                                <ul class="dropdown-menu push-left">
                                    <li class="dropdown-submenu"></li>
                                    <li class="divider"></li>
                                    
                                </ul>
                                <?php endif; ?>
                            </div>
						
                            <div class="hide" id="black-modal-60" title="Modal window example">        
                            </div>                 
                            <div class="top-icon-bar dropdown">
                                <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">
                                    <img width="36" src="<?php echo base_url(); ?>assets/images/user.jpg" alt="">
                                    <span><?php echo $this->session->userdata("UserID"); ?></span>
                                    <i class="glyph-icon icon-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu float-right">
                               
                                    <li>
                                        <a href="<?php echo base_url();?>login/logout" title="">
                                            <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>
                                            <span class="font-bold">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
 
                        </div>
                    </div><!-- #page-header -->

                    <div id="page-breadcrumb-wrapper">
                        <div id="page-breadcrumb">
                            <a href="javascript:void();" title="Home" class = 'dashboard'>
                                <i class="glyph-icon icon-dashboard"></i>
                                Home
                            </a>
                            <?php if($content != ""): ?>
                            <a href="#" title="<?php echo $judul; ?>">
                                 <i class="glyph-icon icon-folder-open"></i>
                                <?php echo $judul;?>	
                            </a>
                            <span class="current">
                                 <?php echo $judul2;?>
                            </span>
                            <?php endif;?>
                        </div>
          
                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">
                    
                     <?php echo $content;?>	




                	</div><!-- #page-content -->
	            </div><!-- #page-main -->
            </div><!-- #page-main-wrapper -->
        </div><!-- #page-wrapper -->
    </body>
</html>

