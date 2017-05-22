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
    </div>  
  </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->