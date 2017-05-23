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
  
  </section>
  -->
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-9">        
        <div class="box user-list">
          <div class="box-header with-border">
            <h3 class="box-title">User List</h3>
            <button type="button" id="add-user-btn" class="btn btn-block blue">Add User</button>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-bordered" id="users-table">
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Type</th>                
                <th>Cell</th>
                <th>Status</th>
                <th>Created</th>
              </tr>

              <?php 
              $tr = '';
              if($users){                
                foreach($users as $user){
                  $tr .= '<tr>';
                  $tr .= '<td>'.$user['user_id'].'</td>';
                  $tr .= '<td>'.$user['user_fname'].' '.$user['user_lname'].'</td>';
                  $tr .= '<td>'.$user['user_email'].'</td>';
                  $tr .= '<td>'.$user['user_type'].'</td>';
                  $tr .= '<td>'.$user['user_contact'].'</td>';
                  $tr .= '<td>'.$user['user_status'].'</td>';
                  $tr .= '<td>'.$user['user_date_created'].'</td>';                  
                  $tr .= '</tr> ';
                }
              }else{
                $tr .= '<tr>';
                $tr .= '<td colspan="7" class="text-center">No data available..</td>';
                $tr .= '</tr>';
              }
              echo $tr;
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

<div class="modal fade" tabindex="-1" id="add-user-modal" role="dialog">
  <div class="modal-dialog modal-primary">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Add User</h4>
      </div>

      <div class="modal-body">      
        <form id="add-user-form">
            <div class="row">
              <div class="col-md-12">
                <div class="status-message"></div>
              </div>
            </div>
            <div class="row">  
              <div class="col-md-6">
                <div class="form-group">
                  <label>First Name <span class="red">*</span></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                    <input type="text" name="user_fname" class="form-control" placeholder="First Name" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name <span class="red">*</span></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                    <input type="text" name="user_lname" class="form-control" placeholder="Last Name" required>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">  
              <div class="col-md-6">
                <div class="form-group">
                  <label>Contact Number</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="text" name="user_contact" class="form-control" placeholder="Contact Number">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Type <span class="red">*</span></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-sitemap" aria-hidden="true"></i></span>
                    <select class="form-control" id="user-type" name="user_type" required>
                      <option value="1">Administrator</option>
                      <option value="2">Production</option>
                      <option value="3">Marketing</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row hidden-default">  
              <div class="col-md-6">
                <div class="form-group">
                <!-- empty -->                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Team</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <select class="form-control" id="user-teamid" name="user_teamid" disabled>
                      <option value="1">Design Team</option>
                      <option value="2">Wordpress Team</option>
                      <option value="3">Apps Team</option>
                      <option value="4">Special Programming Team</option>
                      <option value="5">SEO Team</option>
                      <option value="6">Content Writer Team</option>
                      <option value="7">Client Support (Night Shift)</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">  
              <div class="col-md-12">
                <div class="form-group">
                  <label>Email <span class="red">*</span></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    <input type="email" name="user_email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">  
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password <span class="red">*</span></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <input type="password" name="user_password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Confirm Password <span class="red">*</span></label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-expeditedssl" aria-hidden="true"></i></span>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                  </div>
                </div>
              </div>
            </div>     
      </div>

       <div class="modal-footer">
        <button class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>      
  </div>    
</div>


<script>
var siteurl = '<?= site_url() ?>';

$(document).ready(function(){
  
  //show add-user modal
  $("#add-user-btn").click(function(e){
    $('#add-user-modal').modal('show');
  });

  //submit form inside add-user modal for processing
  $('#add-user-form').submit(function(e){
    e.preventDefault();

    $('.m-loader').show();

    $.post(siteurl+'Users/add_user',
    $(this).serialize(),
    function(data){
      $('.m-loader').hide();

      var response = JSON.parse(data);      
      var userhtml ='';

      if(response.msg == 'Success'){
        userhtml += '<tr>';
        userhtml += '<td>'+response.newuser[0].user_id+'</td>';
        userhtml += '<td>'+response.newuser[0].user_fname+' '+response.newuser[0].user_lname+'</td>';
        userhtml += '<td>'+response.newuser[0].user_email+'</td>';
        userhtml += '<td>'+response.newuser[0].user_type+'</td>';
        userhtml += '<td>'+response.newuser[0].user_contact+'</td>';
        userhtml += '<td>'+response.newuser[0].user_status+'</td>';
        userhtml += '<td>'+response.newuser[0].user_date_created+'</td>';
        userhtml += '</tr>';      

        $('#add-user-form').find('.status-message').html('');
        $('#users-table tr:first').after(userhtml);
        
        $.confirm({
          title: 'Successfully added user!',
          content : 'Add another?',
          type: 'blue',
          buttons:{
            Addanother:{
              text: 'Add Another',
              btnClass: 'btn-blue',
              action: function(){
               $('#add-user-form')[0].reset(); 
               $('.hidden-default').hide( "fast" ).find('#user-teamid').attr('disabled', true);
              }
            },
            Nope:{
              action: function(){
                $('#add-user-form')[0].reset(); 
                $('#add-user-modal').modal('hide');
              }
            }
          }
        });     
      }else{        
        var errorlist = '';

        $.each(response.messages, function(i, obj){
          errorlist += obj;
        });

        $('#add-user-form').find('.status-message').html('<div class="status-message-error">'+errorlist+'</div>');
      }        
    });
  });

  //add-user-form (team field)
  $('body').on('change', '#user-type', function(e){
    e.preventDefault();

    if($(this).val() == 2 || $(this).val() == '2'){
      $('.hidden-default').show( "fast" ).find('#user-teamid').attr('disabled', false);
    }else{
      $('.hidden-default').hide( "fast" ).find('#user-teamid').attr('disabled', true);
    }
  });

  //Update user status
  $(document).on('click', '.updatestatus', function(e){
    e.preventDefault();

    var id      = $(this).attr('uid');
    var curstat = $(this).attr('on');
    var color   = (curstat == 1 ? 'red' : 'blue');

    $.confirm({
      title: 'Please Confirm',
      content : 'Are you sure you want to '+(curstat == 1 ? 'deactivate' : 'activate')+' user?',
      type: color,
      buttons:{
        Yes:{
          btnClass: 'btn-'+color,
          action: function(){
            $.post(siteurl+'Users/update_user_status/'+id+'/'+curstat,
            {id:id,curstat:curstat},
            function(data){
              
              if(data == 1 || data == '1'){
                var newstat = (curstat == 1 ? 0 : 1);
                $.each($('.updatestatus'), function(){
                  if($(this).attr('uid') == id){
                    if(newstat == 1){
                      $(this).removeClass('btn-danger').addClass('btn-primary').attr('on', 1).html('<i class="fa fa-check"></i>');              
                    }else{
                      $(this).removeClass('btn-primary').addClass('btn-danger').attr('on', 0).html('<i class="fa fa-times"></i>');              
                    }                    
                  }
                });        
              }  
            });
          }
        },
        Nope:{ }
      }
    }); 
  });

});
</script>
