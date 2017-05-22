<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
	<div class="pull-left image">
	  <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
	</div>
	<div class="pull-left info">
	  <p><?php echo $user_name; ?></p>	  
	</div>
  </div>
  <!-- /.search form -->  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
	<li class="header">MAIN NAVIGATION</li>
	<?php foreach($user_menu as $parent){ ?>
	<li class="treeview <?php echo ($parentpage == $parent['tab_link'] ? 'active' : '');  ?>">
		<a href="<?php echo base_url($parent['tab_link']); ?>" />
			<i class="<?php echo $parent['tab_icon']; ?>"></i> 
			<span><?php echo $parent['tab_name'];?></span>		
		
		<?php if(array_key_exists('children', $parent)){ ?>
			<span class="pull-right-container">
			  <i class="fa fa-angle-left pull-right"></i>
			</span>		
			<ul class="treeview-menu">
			<?php foreach($parent['children'] as $children){ ?>
				<li>
					<a href="<?php echo base_url($children['tab_link']); ?>" class="<?php echo ($parentpage.'/'.$childpage == $children['tab_link'] ? 'white' : '');  ?>">
						<i class="<?php echo $children['tab_icon']; ?>"></i> 
						<?php echo $children['tab_name']; ?>
					</a>
				</li>			
			<?php } ?>
			</ul>
		<?php }else{ echo '</a>'; } ?>		 
	</li>
	<?php } ?>
  </ul>
</section>
<!-- /.sidebar -->
</aside>