<div class="w3-container" style="position:relative;top:60px">
    <div class="w3-panel" style="background-color:#85c1f1a0">
        <div class="w3-center">
            <label class="w3-xxxlarge">Welcome </label>&emsp;<label class="w3-xxlarge"> </label>
        </div>
    </div>
    <br>
    <center><h1 class="w3-text-white" style="color:#191cb9!important">Dashboard</h1></center>
    <hr style="border-color:blue">
    <div class="row">
        <div class="col-lg-1">
            
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-12" style="background-color:#639fd417;color:#a6bbcf!important"><span id="online_users" class="w3-green w3-large pull-right w3-badge"></span><label class="w3-text w3-xlrage pull-right">No. of User is Online : &nbsp;</label></div>
            </div>
            <hr style="border-color:blue">
            <div class="table-responsive">
                <table class="table table-bordered" id="full_information">
                    <thead  style="color:#193b7bf2;background-color:#9ccae49e" class="w3-center">
                        <tr>
                            <th class="w3-center">Serial No.</th>
                            <th class="w3-center">User Name</th>
                            <th class="w3-center">Logged in at</th>
                            <th class="w3-center">IP Address</th>
                            <th class="w3-center">Last Seen</th>
                            <th class="w3-center">Status</th>
                        </tr>    
                    </thead>
                    <tbody id ="user_online_list" class="w3-center">
                        <tr style="color:#07b5fb;background-color:#22270c">
                            <td colspan="6" style="font-size:35px;text-align:center";>Wait .. Refreshing <i class="fa fa-spinner fa-spin w3-text-white"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-1">

        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    $(function(){
        document.title="Dashboard";
        $("#dashboard").addClass("active");
        $("#dashboard_label").addClass("w3-text-blue");
        setInterval(function(){user_online();},3000);       //after 3 secs it keeps refreshing by calling function
    });
    
    function user_online(){
        $.ajax({
           type:'ajax',
           method:'post',
           dataType:'json',
           url:'<?=site_url()?>' + '/status/full_user_activity',
           success:function(response){
               var html,i,j=0,k=0;
               for(i=0;i<response["all"].length;i++){
                   j++;
                   /*console.log(response.time_now);
                   var curre_timestamp = new Date(response.time_now);
                   console.log(curre_timestamp);
                   var current_time = new Date();
                   var current_timestamp = Date.parse(current_time)/1000;*/
                   
                   if(j%2 != 0 ){                   //for odd no row
                       if(response.time_now - response["all"][i].last_activity > 15 )      //it will check if user timeout or not means user is offline
                       {
                           var class1 = "w3-text-red";
                           if(response["all"][i].active_from == 0){                    //if user never gets online
                                var live_status = "Never Online";
                                var last_status = "Never Online";
                           }
                           else{                                                //if offline
                               var live_status =  new Date(parseInt(response["all"][i].active_from)*1000);
                               var last_status =  new Date(parseInt(response["all"][i].last_activity)*1000);
                               console.log("live",live_status);
                           }
                           
                           html += '<tr style="color:#d5fffd;background-color:#639fd417"><td>'+ j + '</td><td>'+ response["all"][i].username + '</td><td>' + live_status +'</td><td>' + response["all"][i].ip + '</td><td>' + last_status + '</td><td><i class="fa fa-circle w3-text-red" aria-hidden="true"></i></td></tr>';
                       }
                       else{                //if user is online
                           var live_status =  new Date(parseInt(response["all"][i].active_from)*1000);
                           var last_status = "Online";
                           html += '<tr style="color:#d5fffd;background-color:#639fd417"><td>'+ j + '</td><td>'+ response["all"][i].username + '</td><td>' + live_status +'</td><td>' + response["all"][i].ip + '</td><td>' + last_status + '</td><td><i class="fa fa-circle w3-text-green" aria-hidden="true"></i></td></tr>';
                       
                           k +=1;
                       }
                   }
                   
                   else{            //for even no row
                     if(response.time_now - response["all"][i].last_activity > 15 )      //it will check if user timeout or not
                       {
                           var class1 = "w3-text-red";
                           if(response["all"][i].active_from == 0){                    //if user never gets online
                                var live_status = "Never Online";
                                var last_status = "Never Online";
                           }
                           else{                                                //if offline
                               var live_status =  new Date(parseInt(response["all"][i].active_from)*1000);
                               var last_status =  new Date(parseInt(response["all"][i].last_activity)*1000);
                           }
                           
                           html += '<tr style="color:#f9d571;background-color:#0823165c"><td>'+ j + '</td><td>'+ response["all"][i].username + '</td><td>' + live_status +'</td><td>' + response["all"][i].ip + '</td><td>' + last_status + '</td><td><i class="fa fa-circle w3-text-red" aria-hidden="true"></i></td></tr>';
                       }
                       else{            //if user is online
                           var live_status =  new Date(parseInt(response["all"][i].active_from)*1000);
                           var last_status = "Online";
                           html += '<tr style="color:#f9d571;background-color:#0823165c"><td>'+ j + '</td><td>'+ response["all"][i].username + '</td><td>' + live_status +'</td><td>' + response["all"][i].ip + '</td><td>' + last_status + '</td><td><i class="fa fa-circle w3-text-green" aria-hidden="true"></i></td></tr>';
                       
                           k +=1;
                       }  
                   }
               }
               
               $("#user_online_list").html(html);       //it will write user list on webpage
               $("#online_users").html(k);              //it will count total no of user is online
           },
           error:function(){
               alert("something went wrong");
           }
        });
    }
    
    
    
    
    
    //color:#f8fd23;background-color:#1f714b
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</script>