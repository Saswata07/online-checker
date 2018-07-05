<div class="w3-container" style="position:relative;top:60px">
    <div class="w3-panel" style="background-color:#85c1f1a0">
        <div class="w3-center">
            <label class="w3-xxxlarge">Welcome </label>&emsp;<label class="w3-xxlarge"></label>
        </div>
    </div>
    <br>
    <center><h1 style="color:#191cb9!important">Update User Information</h1></center>
    <hr style="border-color:#a2a2bf">
    <div class="row">
        <div class="col-lg-1">
            
        </div>
        <div class="col-lg-4">
            <div style="background-color:#a9afb34f"><center>
                <h3 class="w3-text-white" style="padding-top:10px;color:#272982!important">Add User</h3>
                <hr style="border-color:indigo">
                <form id="add_form">
                <div class="row" style="padding:5px">
                    <div class="col-xs-4">
                        <label class="w3-text-green w3-large" style="color:#16456d!important">User Name</label>
                    </div>
                    <div class="col-xs-8">
                        <input id="add_username" type="text" minlength="5" maxlength="20" class="form-control" name="username" placeholder="new username" title="Enter username for add user" required>
                    </div>
                </div>
                <br>
                <div class="row" style="padding:5px">
                    <div class="col-xs-4">
                        <label class="w3-text-green  w3-large"  style="color:#16456d!important">Password</label>
                    </div>
                    <div class="col-xs-8">
                        <input id="add_pass" type="text" minlength="6" class="form-control" name="password" placeholder="new password" title="Enter password for add user" required>
                    </div>
                </div><br>
                <input id="add_user" type="submit" class="w3-btn w3-blue w3-round" value="Add User">&emsp;<i id="add_spinner" style="display:none" class="fa fa-spinner fa-spin w3-text-blue w3-xxlarge"></i>
                <br><br>
                <label id="msg_add_user" class="hiddenspan"></label> 
                </center>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div style="background-color:#a9afb34f"><center>
                <h3 class="w3-text-white" style="padding-top:10px;color:#272982!important">List of Users</h3>
                <hr style="border-color:indigo">
                <label id="update_message" class="alert alert-success w3-xlarge" style="display:none"> </label>
                <div class="table-responsive" style="padding:5px;border-color:blue;">
                    <table id="user_details" class="table table-bordered hiddenspan" style="border-color:blue;text-align:center">
                        <thead style="color:#193b7bf2;background-color:#9ccae49e">
                            <tr class="w3-center">
                                <th class="w3-center">Serial No.</th>
                                <th class="w3-center">User Name</th>
                                <th class="w3-center">Added On</th>
                                <th class="w3-center">Edit Details</th>
                                <th class="w3-center">Delete Details</th>
                            </tr>
                        </thead>
                        <tbody id="details" style="text-align:center">
                            <!--<tr style="color:#07b5fb;background-color:#22270c">
                                <td>User1</td>
                                <td>21/08/2018</td>
                                <td><button type="button" class="w3-btn w3-green" onclick="document.getElementById('edit_modal').style.display='block'">Edit</button></td>
                                <td><button type="button" class="w3-btn w3-red" onclick="document.getElementById('delete_modal').style.display='block'">Delete</button></td>
                            </tr>
                            <tr style="color:#f8fd23;background-color:#1f714b">
                                <td>User1</td>
                                <td>21/08/2018</td>
                                <td><button type="button" class="w3-btn w3-green" onclick="document.getElementById('edit_modal').style.display='block'">Edit</button></td>
                                <td><button type="button" class="w3-btn w3-red" onclick="document.getElementById('delete_modal').style.display='block'">Delete</button></td>
                            </tr>-->
                        </tbody>
                    </table>
                    <br>
                    <label id="display_message" class="w3-text-red hiddenspan"></label>
                </div>
                
            </div>
            
        </div>
        <div class="col-lg-1">
            
        </div>
    </div>
    
</div>
</body>
    <div id="edit_modal" class="w3-modal" style="display:none">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="w3-modal-contant w3-white w3-animate-zoom w3-animate-top">
                    <div class="w3-container">
                        <header class="w3-container w3-blue"><span class="w3-closebtn" onclick="document.getElementById('edit_modal').style.display='none'">&times;</span><center>Edit User</center></header>
                    </div>
                    <div class="w3-container">
                        <form id="edit_form">
                        <div class="row" style="padding:5px">
                            <div class="col-xs-5">
                                <label class="w3-text-green w3-large">User Name</label>
                            </div>
                            <div class="col-xs-7">
                                <input id="edit_username" type="text" minlength="5" maxlength="20" class="form-control" name="username" placeholder="new username" title="Enter username for add user" readonly="true">
                            </div>
                        </div>
                        <br>
                        <div class="row" style="padding:5px">
                            <div class="col-xs-5">
                                <label class="w3-text-green  w3-large">Password</label>
                            </div>
                            <div class="col-xs-7">
                                <input id="edit_password" type="text" minlength="6" class="form-control" name="password" placeholder="new password" title="Enter password for add user" required>
                            </div>
                        </div><br>
                        <input id="edit_btn" type="submit" class="w3-btn w3-blue w3-round" value="edit user">&emsp;<i id="edit_spinner" class="fa fa-spinner fa-spin w3-text-blue w3-xxlarge" style="display:none"></i>
                        <br>
                        <label id="msg_edit_user" class="w3-text-red hiddenspan"></label> 
                    </div></form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="delete_modal" class="w3-modal" style="display:none">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="w3-modal-contant w3-white w3-animate-zoom w3-animate-top">
                    <div class="w3-container">
                        <header class="w3-container w3-red"><span class="w3-closebtn" onclick="document.getElementById('delete_modal').style.display='none'">&times;</span><center>Delete User</center></header>
                    </div>
                    <div class="w3-container">
                        <br>
                        <form id="delete_form">
                            <input type="hidden" id="delete_username" name="username">
                        
                        <label class="w3-text-blue w3-large">Are You sure you want to Delete user username?</label>
                        <br><br>
                        <label class="meg_del_user" class="w3-text-red hiddenspan"></label>
                    </div>
                    <div class="w3-container">
                        <footer class="w3-container w3-blue">
                            <button class="w3-btn w3-green w3-right">Close!</button>
                            <button id="delete_user" class="w3-btn w3-red w3-right">Confirm!</button></form>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>


</html>
<script type="text/javascript">
    $(function(){
        document.title="Update User Details";
        $("#edit_user").addClass("active");
        $("#edit_user_label").addClass("w3-text-blue");
        display_user_list();
    });
    $("#add_user").click(function(e){
       e.preventDefault();
       $("#add_user").prop('disabled',true);
       $("#add_spinner").css('display','inline-block');
       $("#msg_add_user").addClass('hiddenspan');
       var form = $("#add_form");
       if(form[0].checkValidity()){
          var data = form.serialize();
          //console.log(data.username);
          $.ajax({
          type:'ajax',
          method:'post',
          url:"<?=site_url();?>"+"/status/add_user",
          data:data,
          dataType:'json',
          success:function(response){
            $("#add_user").prop('disabled',false);
            $("#add_spinner").css('display','none');
            $("#msg_add_user").removeClass('hiddenspan');
            $("#msg_add_user").addClass('w3-text-green');
            var html1 = $("#add_username").val() + " " + response.result;
            $("#msg_add_user").html(html1);
            $("#add_username").val('');
            $("#add_pass").val('');
            display_user_list();
              
          },
          error:function(){
                $("#add_user").prop('disabled',false);
                $("#add_spinner").css('display','none');
                $("#msg_add_user").removeClass('hiddenspan');
                $("#msg_add_user").addClass('w3-text-red');
                $("#msg_add_user").html("Something Went wrong");
          }
       });
       }
       else{
           //console.log($("#msg_add_user"));
           $("#add_user").prop('disabled',false);
            $("#add_spinner").css('display','none');
            $("#msg_add_user").removeClass('hiddenspan');
            $("#msg_add_user").addClass('w3-text-red');
            $("#msg_add_user").html("Some field may empty");
           form[0].reportValidity();
            
       }
    });
    
    function display_user_list(){
        $.ajax({
            type:'ajax',
            method:'post',
            dataType:'json',
            url:"<?=site_url();?>"+"/status/user_details",
            success:function(response){
                var i,html="",j=0,username,time,add_time,a_time,format_date;
                if(response.length>0){
                    for(i=0 ; i<response.length ; i++){
                        $('#display_message').addClass("hiddenspan");
                        $('#user_details').removeClass("hiddenspan");
                        j++;
                        username = "'" + response[i].username + "'";
                        //<?php echo '$time ='; ?> response[i].added_on;
                        //console.log(response[i].added_on);
                         add_time = parseInt(response[i].added_on);
                         //console.log(add_time);
                         a_time = new Date(add_time*1000);
                         
                         format_date = a_time.getDate() + "-" + (a_time.getMonth()+1) + "-" + (a_time.getFullYear());
                        //console.log(format_date);
                        if(j%2!=0){
                        html += '<tr style="color:#d5fffd;background-color:#639fd417"><td>' + j + '</td><td>'+ response[i].username +'</td><td>'+  format_date +'</td><td><button type="button" style="background-color:#237326!important" class="w3-btn w3-green" onclick="edit('+ username +')">Edit</button></td><td><button type="button" class="w3-btn w3-red" onclick="del('+ username + ')">Delete</button></td></tr>';
                        }
                        else{
                           html += '<tr style="color:#f9d571;background-color:#0823165c"><td>' + j + '</td><td>'+ response[i].username +'</td><td>'+  format_date +'</td><td><button type="button" class="w3-btn w3-green" onclick="edit('+ username +')">Edit</button></td><td><button type="button" class="w3-btn w3-red" onclick="del('+ username +')">Delete</button></td></tr>';
                        }
                    }
                    $("#details").html(html);
                }
                else{
                    $('#user_details').addClass("hiddenspan");
                    $('#display_message').removeClass("hiddenspan");
                    $('#display_message').html("No User Found");
                }
            },
            error:function(){
                $('#user_details').addClass("hiddenspan");
                $('#display_message').removeClass("hiddenspan");
                $('#display_message').html("Something Went wrong");

                
            }
        });
    }
    
    function edit(del){
        //console.log(del);
        $("#edit_modal").css('display','block');
        $("#edit_username").val(del);
        $("#edit_password").val("");
        $("#msg_edit_user").addClass("hiddenspan");
    }
    
    function del(del){
        //console.log(del);
        $("#delete_modal").css('display','block');
        $("#delete_username").val(del);
        $("#meg_del_user").addClass("hiddenspan");
    }
    
    $("#edit_btn").click(function(e){
        e.preventDefault();
       $("#edit_btn").prop('disabled',true);
       $("#edit_spinner").css('display','inline-block');
       $("#msg_edit_user").addClass("hiddenspan");
       var form1 = $("#edit_form");
       if(form1[0].checkValidity()){
          var data = form1.serialize();
          $.ajax({
             method:'post',
             type:'ajax',
             dataType:'json',
             url:'<?=site_url()?>'+'/status/update_user',
             data:data,
             success:function(response){
                $("#edit_btn").prop('disabled',false);
                $("#edit_spinner").css('display','none');
                $("#edit_modal").css('display','none');
                $('#update_message').html(response.result).fadeIn();
				setTimeout(function(){
						$('#update_message').fadeOut('slow');
				},5000);
             },
             error:function(){
                 $("#edit_btn").prop('disabled',false);
                $("#edit_spinner").css('display','none');
                $("#edit_modal").css('display','none');
                $("#msg_edit_user").removeClass("hiddenspan");
                $("#msg_edit_user").html("Some error occurs");
             }
          });
       }
       else{
           form1[0].reportValidity();
           $("#edit_btn").prop('disabled',false);
            $("#edit_spinner").css('display','none');
            $("#msg_edit_user").removeClass("hiddenspan");
            $("#msg_edit_user").html("Something Went wrong");
       }
    });
    
    $("#delete_user").click(function(e){
       e.preventDefault();
       $("#delete_user").prop('disabled',true);
       $("#meg_del_user").addClass("hiddenspan");
       var form2 = $("#delete_form");
       if($("#delete_username").val()!=""){
           var data = form2.serialize();
           $.ajax({
              method:'post',
              type:'ajax',
              dataType:'json',
              data:data,
              url:'<?=site_url()?>' + '/status/delete_user',
              success:function(response){
                  $("#delete_user").prop('disabled',false);
                  $("#delete_modal").css('display','none');
                  $("#meg_del_user").addClass("hiddenspan");
                    $('#update_message').html(response.result).fadeIn();
                    display_user_list();
    				setTimeout(function(){
    						$('#update_message').fadeOut('slow');
    				},5000);
              },
              error:function(){
                  $("#meg_del_user").removeClass("hiddenspan");
                  $("#msg_del_user").html("Something Went Wrong");
              }
           });
       }
       else{
           $("#meg_del_user").removeClass("hiddenspan");
           $("#msg_del_user").html("Something Internal error occur");
       }
    });
</script>














