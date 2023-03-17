<style>
.notifi-bellui {
	color: #fd1c00;
	font-size: 23px;
	position: relative;
	left: 3px;
	top: 3px;
}
.notficountlisting {
	color: #fff;
	font-size: 10px;
	position: absolute;
	left: 7px;
	top: 7px;
	font-weight: bold;
}
</style>
<?php @session_start();
$_SESSION['utype'] = 'seo';

?>
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <?php if($_SESSION['utype'] =='viewer'){?>
        
      <!--  <li><a href="manage_university.php"><i class="fa fa-circle-o"></i> Manage Universities</a></li>-->
       <!-- <li><a href="manage_program.php"><i class="fa fa-circle-o"></i> Manage Programs Canada</a></li>-->
       <li><a href="manage_university_uk.php"><i class="fa fa-circle-o"></i> Manage Universities UK</a></li>
        <li><a href="manage_program_uk.php"><i class="fa fa-circle-o"></i> Manage Programs UK</a></li>
       <!-- <li><a href="manage_articles.php"><i class="fa fa-circle-o"></i> Manage Articles</a></li>
        <li><a href="manage_testimonials.php"><i class="fa fa-circle-o"></i> Manage Testimonials</a></li>-->
        <?php }
		
		else if($_SESSION['utype'] =='new_dataentry_team'){
		?>
		<li>
          <a href="manage_new_university_column.php">
            <i class="fa fa-folder"></i> <span>Manage University Column</span>
          </a>
        </li>
			
		<?php	
		}	
		
		else if($_SESSION['utype'] =='seo'){

			?>
			<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Blogs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="author-update-info.php"><i class="fa fa-circle-o"></i> Update Author</a></li>
            <li><a href="manage_blog_cat.php"><i class="fa fa-circle-o"></i> Manage Categories</a></li>
            <li><a href="manage_blog_tags.php"><i class="fa fa-circle-o"></i> Manage Tags</a></li>
            <li><a href="articles_add.php"><i class="fa fa-circle-o"></i> Add Articles</a></li>
            <li><a href="manage_articles.php"><i class="fa fa-circle-o"></i> Manage Articles</a></li>
           
          </ul>
          
        </li>
       	<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>CMS Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ielts_manage.php"><i class="fa fa-circle-o"></i> Manage Ielts Pages</a></li>
            <li><a href="ielts_add.php"><i class="fa fa-circle-o"></i> Add Ielts Pages</a></li>
              
            <!--<li><a href="country_view.php"><i class="fa fa-circle-o"></i> Manage Country</a></li>-->
            <!--<li><a href="country_add.php"><i class="fa fa-circle-o"></i> Add Country Pages</a></li>-->
            
            
          </ul>
          
        </li>
       
        
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>SEO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manage_page_meta.php"><i class="fa fa-circle-o"></i> Manage Page Meta</a></li>
            <li><a href="manage_university_meta.php"><i class="fa fa-circle-o"></i> Manage University Meta</a></li>
            <li><a href="manage_program_meta.php"><i class="fa fa-circle-o"></i> Manage Program Meta</a></li>
			<li><a href="manage_category_meta.php"><i class="fa fa-circle-o"></i> Manage Category Meta</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Insta Live Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manage_live_sessions.php"><i class="fa fa-circle-o"></i> Manage Live Event</a></li>
          </ul>
        </li>
        
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Testimonials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="testimonial_add.php"><i class="fa fa-circle-o"></i>Add Testimonial</a></li>
            <li><a href="manage_testimonials.php"><i class="fa fa-circle-o"></i> Manage Testimonials</a></li>
          </ul>
        </li>-->
		<?php	
		}
		else if($_SESSION['utype'] =='sadmin')
		{
			?>
			<li><a href="bulk-update-points.php"><i class="fa fa-circle-o"></i>Bulk Update Points</a></li> 
            <li><a href="bulk-update-point-prgm.php"><i class="fa fa-circle-o"></i>Bulk Update Points of Programs</a></li>
            <li><a href="university-points-list.php"><i class="fa fa-circle-o"></i>University Points</a></li> 	
            <li><a href="program-points-list.php"><i class="fa fa-circle-o"></i>Program Points</a></li> 	
			
		<?php	
		}	
			
		else {?>
        
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="fa fa-circle-o"></i>Dashboard</a></li>
            
          </ul>
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-flag"></i>
            <span>Countries</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="country_add.php"><i class="fa fa-circle-o"></i> Add Country</a></li>
            <li><a href="manage_country.php"><i class="fa fa-circle-o"></i> Manage Countries</a></li>
            
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i>
            <span>Levels</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="level_add.php"><i class="fa fa-circle-o"></i> Add Level</a></li>
            <li><a href="manage_level.php"><i class="fa fa-circle-o"></i> Manage Levels</a></li>
            
          </ul>
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i>
            <span>Province</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="province_add.php"><i class="fa fa-circle-o"></i> Add Province</a></li>
            <li><a href="manage_province.php"><i class="fa fa-circle-o"></i> Manage Province</a></li>
            
          </ul>
        </li>
        
          <?php if($_SESSION['progusername']=='admin'){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>  <span>Discipline</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <!-- <li><a href="prog_cat_add.php"><i class="fa fa-circle-o"></i> Discipline</a></li>-->
			<li><a href="manage_prog_cat.php"><i class="fa fa-circle-o"></i> Manage Discipline</a></li>
            
          </ul>
        </li>
        <?php }?>
        <?php if($_SESSION['progusername']=='admin'){?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>  <span>Sub Discipline</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="prog_sub_add.php"><i class="fa fa-circle-o"></i> Add Sub Discipline</a></li>
			<li><a href="manage_prog_sub.php"><i class="fa fa-circle-o"></i> Manage Sub Discipline</a></li>
            
          </ul>
        </li>
<?php }?>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i> <span>Universities</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="manage_university.php"><i class="fa fa-circle-o"></i> Manage Universities Canada</a></li>
          	<li><a href="manage_university_uk.php"><i class="fa fa-circle-o"></i> Manage Universities UK</a></li>
			<li><a href="manage_university_australia.php"><i class="fa fa-circle-o"></i> Manage Universities Australia</a></li>
			<li><a href="manage_university_usa.php"><i class="fa fa-circle-o"></i> Manage Universities USA</a></li>
           	<li><a href="manage_university_nz.php"><i class="fa fa-circle-o"></i> Manage Universities New Zealand</a></li>
            <li><a href="university-add.php"><i class="fa fa-circle-o"></i> Add Universities</a></li>
            <li><a href="university-banner.php"><i class="fa fa-circle-o"></i> Manage University Banner</a></li>
            <li><a href="university-gallery.php"><i class="fa fa-circle-o"></i> Manage University Gallery</a></li>
            
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i> <span>Programs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="manage_program.php"><i class="fa fa-circle-o"></i> Manage Programs Canada</a></li>
        <li><a href="manage_program_uk.php"><i class="fa fa-circle-o"></i> Manage Programs UK</a></li>
		<li><a href="manage_program_australia.php"><i class="fa fa-circle-o"></i> Manage Programs Australia</a></li>
		<li><a href="manage_program_usa.php"><i class="fa fa-circle-o"></i> Manage Programs USA</a></li>
     		<li><a href="manage_program_nz.php"><i class="fa fa-circle-o"></i> Manage Programs New Zealand</a></li>
            <li><a href="program-add.php"><i class="fa fa-circle-o"></i> Add Programs</a></li>
              
			<li><a href="new-program-list.php"><i class="fa fa-circle-o"></i> Program List(2.0)</a></li>
            <li><a href="manage_prgm_notes.php"><i class="fa fa-circle-o"></i>Manage Program Quick Notes</a></li>
            <li><a href="entry_program_list.php"><i class="fa fa-circle-o"></i>Flexible Program List</a></li>
			
			
            
            
            
          </ul>
        </li>
		<?php //if($_SESSION['ballow']=='1'){?>
              
           
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i> <span>Bulk Updations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  
          	 <li><a href="intake-update.php"><i class="fa fa-circle-o"></i> Intake Update</a></li>
			<li><a href="fee-update.php"><i class="fa fa-circle-o"></i> Canam Application Fee Update</a></li>
			<?php if($_SESSION['progusername']=='ravinder' || $_SESSION['progusername']=='waseem' ){?>
			<li><a href="prgm-fee-update.php"><i class="fa fa-circle-o"></i> Program Fee Update</a></li>
			<?php }?>
			<li><a href="bulk-ielts-tofel-update.php"><i class="fa fa-circle-o"></i> Bulk Update ielts/tofel Score</a></li>
			<li><a href="bulk-update-mincgpa.php"><i class="fa fa-circle-o"></i> Bulk Update Minimum CGPA</a></li>
            <li><a href="bulk-difficult-level-update.php"><i class="fa fa-circle-o"></i>Bulk Update Difficult Level</a></li>
            
			<li><a href="bulk-by-profession-update.php"><i class="fa fa-circle-o"></i>Bulk Update By Profession</a></li> 
            <li><a href="bulk-update-points.php"><i class="fa fa-circle-o"></i>Bulk Update Points(University)</a></li> 
            <li><a href="bulk-update-point-prgm.php"><i class="fa fa-circle-o"></i>Bulk Update Points of Programs</a></li> 
            <li><a href="bulk-cptopt-update-usa.php"><i class="fa fa-circle-o"></i>Bulk Update CPT/OPT</a></li> 
			
			
          </ul>
        </li>
          <?php //}?>
        
		<li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i> <span>Data Download Country</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="manage_program_query_canada.php"><i class="fa fa-circle-o"></i>  Canada</a></li>
          	<li><a href="manage_program_query_uk.php"><i class="fa fa-circle-o"></i> UK</a></li>
          	<li><a href="manage_program_query_usa.php"><i class="fa fa-circle-o"></i> USA</a></li>
          	<li><a href="manage_program_query_nz.php"><i class="fa fa-circle-o"></i> New Zealand</a></li>
          </ul>
        </li>
		
       <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Blogs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manage_blog_cat.php"><i class="fa fa-circle-o"></i> Manage Categories</a></li>
            <li><a href="articles_add.php"><i class="fa fa-circle-o"></i> Add Articles</a></li>
            <li><a href="manage_articles.php"><i class="fa fa-circle-o"></i> Manage Articles</a></li>
          </ul>
        </li>
       
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>SEO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manage_page_meta.php"><i class="fa fa-circle-o"></i> Manage Page Meta</a></li>
            <li><a href="manage_university_meta.php"><i class="fa fa-circle-o"></i> Manage University Meta</a></li>
            <li><a href="manage_program_meta.php"><i class="fa fa-circle-o"></i> Manage Program Meta</a></li>
			<li><a href="manage_category_meta.php"><i class="fa fa-circle-o"></i> Manage Category Meta</a></li>
          </ul>
        </li>
        
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Testimonials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="testimonial_add.php"><i class="fa fa-circle-o"></i>Add Testimonial</a></li>
            <li><a href="manage_testimonials.php"><i class="fa fa-circle-o"></i> Manage Testimonials</a></li>
          </ul>
        </li>-->
   <?php if($_SESSION['progusername']=='admin'){?>
   <li class="treeview">
          <a href="#">
            <i class="fa fa-university"></i> <span>News Center</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="manage_news_center.php"><i class="fa fa-circle-o"></i> Manage Categories</a></li>

            <li><a href="news_add.php"><i class="fa fa-circle-o"></i> Add News</a></li>
              	<li><a href="manage_news.php"><i class="fa fa-circle-o"></i> Manage News</a></li>            
            
            </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="manage_users.php"><i class="fa fa-circle-o"></i> Manage Users</a></li>
            <li><a href="add-users.php"><i class="fa fa-circle-o"></i> Add Users</a></li>
            </ul>
        </li>

        <li class="header">SETTINGS</li>
		<li><a href="add-settings.php"><i class="fa fa-circle-o text-red"></i> <span>Site Settings</span></a></li>
		 <li class="treeview">
          <a href="#">
          <i class="fa fa-file"></i> <span>Front Page Menus</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="subpages_add.php"><i class="fa fa-circle-o"></i> Add Menu Pages</a></li>
            <li><a href="manage_pages.php"><i class="fa fa-circle-o"></i> Manage Pages</a></li>
          </ul>
        </li>
        <?php } 
		?>
		<li class="treeview">

          <a href="#">
            <i class="fa fa-share"></i><span>Notifications</span><i class="fa fa-bell notifi-bellui" aria-hidden="true"><span class="notficountlisting"><?php echo count_notifications($_SESSION['progusername']) ?></span></i>

            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="notification-add.php"><i class="fa fa-circle-o"></i>Add Notifications</a></li>
            <li><a href="manage_notifications.php"><i class="fa fa-circle-o"></i>Manage Notifications</a></li>
          </ul>
        </li>
		<?php }?>
        
 
        
		
 
       </ul>