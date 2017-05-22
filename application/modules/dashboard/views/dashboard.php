<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!--
    <h1><small>it all starts here</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
    -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-8">        
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Task List</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <th style="width: 5px">#</th>
                <th>Task ID</th>
                <th width="80px">Status</th>
                <th width="185px">Assigned On</th>
                <th>Options</th>
              </tr>
              <?php 
                for($x = 1; $x <= 20; $x++){
                  $tr  = '<tr>';
                  $tr .= '<td>&#x25cf;</td>';
                  $tr .= '<td>Helping Angels Home Health Care, Inc. 12 30 16 (Maintenance)  </td>';
                  $tr .= '<td>In Progess</td>';
                  $tr .= '<td>Thu. Jan. 5, 2017 - 08:47 am</td>';
                  $tr .= '<td class="text-center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>';
                  $tr .= '</tr> ';

                  echo $tr;
                }
              ?>          
            </table>
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <!-- /.box --> 
      </div>
      <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">        
          <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
              <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
              <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
              <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
              <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->
        <div class="box box-solids" style="padding-bottom:10px;">
          <div class="box-header with-border kudos-header">
            <h3 class="box-title">Kudos Board</h3>
          </div>
          <!-- /.box-header style="overflow:scroll;" -->
          <div class="box-body kudos-container padding-15">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">               
              <div class="carousel-inner">
                <div class="item active">
                  <div class="box-body">
                    <div class="kudosname"><h3>Kent Carlo Matilda</h3></div>
                    <div class="kudosmessage"><b>"</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec nisi eleifend, mattis purus ut, tristique neque. Aenean ac quam sollicitudin, viverra ex a, fringilla risus. <br /><br />Sed sed tincidunt risus, eget maximus odio. Vestibulum et pellentesque enim, ac sollicitudin neque. Curabitur mollis, dui at mollis malesuada, nibh massa porttitor dui, vitae faucibus eros libero vestibulum enim. Ut venenatis elit at justo tempus varius. luctus. <b>"</b></div>
                    <br /><br />
                    <div class="kudoscompany">~ Barnes &amp; Sons</div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-body">
                    test
                  </div>
                </div>
                <div class="item">
                  <div class="box-body">
                    <div class="kudosinfo" style="">
                      <div class="kudosname"><h3>Jan Michael, Ronilo, Jesie Boy</h3></div>
                      <div class="kudosmessage">“Good morning,<br>
                        <br>
                        I am in tears right now and I wish I could give you a big hug.......I LOVE IT!!!<br>
                      <br>
                        Thank you so much- beautiful layout and words expressing my vision.”</div>
                        <br /><br />
                      <div class="kudoscompany">~ Barnes &amp; Sons</div>
                    </div>
                  </div>
                </div>
              </div>
              <!--
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
              </a>
              -->
            </div>
          </div>
          <!-- /.box-body -->
        </div>        
        <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Birthdays</a></li>
              <li><a href="#tab_2" data-toggle="tab">Upcoming Events</a></li>              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box box-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-aqua-active">
                    <h3 class="widget-user-username">Alexander Pierce</h3>
                    <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Avatar">
                  </div>
                  <div class="box-footer">
                    <div class="row">
                      <blockquote>
                      <p>"Success is going from failure to failure without losing your enthusiasm"</p>
                      </blockquote>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-md-12">
                        <span><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Send Greetings</span>
                      </div>
                    </div>
                  </div>
                </div>                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">                
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Event Name</th>
                      <th>Date</th>                      
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Summer Outing</td>
                      <td>March 23, 2017</td>                      
                    </tr>                   
                  </table>
                </div>
              </div>              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
      </div>
    </div>
  </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->