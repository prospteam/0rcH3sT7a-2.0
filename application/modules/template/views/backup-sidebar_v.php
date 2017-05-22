<?php print_r($this->session->userdata('userdata')); ?>
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
	  <p>Kent Carlo Mantilda</p>	  
	</div>
  </div>
  <!-- /.search form -->  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
	<li class="header">MAIN NAVIGATION</li>
	<li class="treeview">
	  <a href="/dashbaord">
		<i class="fa fa-dashboard"></i> <span>Home</span>		
	  </a>	  
	</li>	
	<li class="treeview active">
	  <a href="<?php echo base_url('dashboard') ?>">
		<i class="fa fa-list-alt"></i>
		<span>Tasks</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">
		<li><a href="#/tasks"><i class="fa fa-caret-right"></i> Task list <span class="label label-warning">4</span></a> </li>
		<li><a href="#"><i class="fa fa-caret-right"></i> My pending tasks <span class="label label-warning">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> My in progress tasks <span class="label label-warning">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> My time tracker </a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> My ETC </a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> My OT </a></li>
	  </ul>
	</li>	
	<li class="treeview">
	  <a href="javascript:;">
		<i class="fa fa-ticket"></i>
		<span>QA Tracker</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">
	  	
	  <li><a href="#/tracker"><i class="fa fa-caret-right"></i> Tracker summary </a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Summary </a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Error type- summary </a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Tasks </a></li>		
	  </ul>
	</li>	
	<li class="treeview">
	  <a href="javascript:;">
		<i class="fa fa-briefcase"></i>
		<span>Clients</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">	  
	  	<li><a href="<?php echo base_url('clients') ?>"><i class="fa fa-caret-right"></i> Clients Summary <span class="label label-danger">4</span></a> </li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Accounts for dev <span class="label label-danger">4</span></a> </li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Accounts for e commerce <span class="label label-danger">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> SP Accounts- Layouts <span class="label label-danger">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Mobile versions <span class="label label-danger">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Special project <span class="label label-danger">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> For download <span class="label label-danger">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Flagged accounts <span class="label label-danger">4</span></a></li>
	  </ul>
	</li>		
	<li class="treeview">
	  <a href="javascript:;">
		<i class="fa fa-ticket"></i>
		<span>Tickets</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">
	  	<li><a href="#/tickets"><i class="fa fa-caret-right"></i> Tickets Summary <span class="label label-success">4</span></a> </li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Open tickets <span class="label label-success">4</span></a> </li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Closed tickets <span class="label label-success">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Archived tickets <span class="label label-success">4</span></a></li>
		<li><a href="#"><i class="fa fa-caret-right"></i> Pending client feedback <span class="label label-success">4</span></a></li>		
	  </ul>
	</li>
	<li class="treeview">
	  <a href="javascript:;">		
		<i class="fa fa-address-book"></i> <span>Users</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">	  
		<li><a href="#/users"><i class="fa fa-caret-right"></i> Users List</a> </li>
		<li><a href="#"><i class="fa fa-caret-right"></i> My Profile</a> </li>
	  </ul>
	</li>
	<li class="header">QUICKLINKS</li>
	<li class="treeview">
	  <a href="#">		
		<i class="fa fa-link"></i> <span>Office tools</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">	  
		<li><a target="_blank" href="http://192.168.1.16/emailer/"><i class="fa fa-caret-right"></i> Emailer</a> </li>
		<li><a target="_blank" href="http://192.168.1.16/ftpsystem/"><i class="fa fa-caret-right"></i> FTP Security System</a> </li>
		<li><a target="_blank" href="http://192.168.1.16/hrsystem/"><i class="fa fa-caret-right"></i> HR System</a> </li>
		<li><a target="_blank" href="http://webmail.proweaver.net/a/index.php"><i class="fa fa-caret-right"></i> Webmail</a> </li>
		<li><a target="_blank" href="https://192.168.1.21/"><i class="fa fa-caret-right"></i> Zimbra</a> </li>
	  </ul>
	</li>
	<li class="treeview">
	  <a href="#">		
		<i class="fa fa-sticky-note-o"></i> <span>Guides</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">	  
		<li><a target="_blank" href="http://web2.proweaverlinks.com/tech/natureofbusiness/"><i class="fa fa-caret-right"></i> Nature of Business</a> </li>
		<li><a target="_blank" href="http://192.168.1.16/linkcentral/images/customer_care_guide.jpg"><i class="fa fa-caret-right"></i> Sending Instruction Guide</a> </li>
		<li><a target="_blank" href="http://192.168.1.16/linkcentral/images/anatomy_website.jpg"><i class="fa fa-caret-right"></i> Website Anatomy</a> </li>
		<li><a target="_blank" href="http://webmail.proweaver.net/a/index.php"><i class="fa fa-caret-right"></i> Webmail</a> </li>
		<li><a target="_blank" href="https://192.168.1.21/"><i class="fa fa-caret-right"></i> Zimbra</a> </li>
	  </ul>
	</li>		
  </ul>
</section>
<!-- /.sidebar -->
</aside>