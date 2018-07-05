<div class="w3-container" style="position:relative;top:80px">
    <div class="w3-panel w3-red" style="background-color:#f443366e!important">
        <div class="w3-center">
            <label class="w3-xxxlarge">Caution!</label>
            <small>Please Do not close browser or close this tab...</small>
        </div>
    </div>
    <br>
    <div class="w3-panel" style="background-color:#85c1f1a0">
        <div class="w3-center">
            <label class="w3-xxlarge">Welcome </label>&emsp;<label class="w3-xxlarge"><?=$this->session->userdata('username')?></label>
        </div>
    </div>
    <br>
    <div class="w3-panel w3-white">
        <div class="w3-center">
            <label class="w3-xlarge w3-text-blue">Your Activity Details</label><br>
        
        <div class="row">
            <input type="hidden" value="<?=$this->session->userdata('username')?>" id="user" name="username">
            <input type="hidden" value="<?=$this->session->userdata('active_from')?>" id="logged_time" name="log">
            <input type="hidden" id="last_last_active_time" value="0" name="log">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <p><label id="online_browser" class="w3-large">Wait 3 sec....</label>&emsp;<label class="w3-text-green"></label></p>
                <div id="if_offline" class="hiddenspan"><p><label class="w3-large">You Logged in at :</label>&emsp;<label id="loggedin_time" class="w3-text-green"></label></p>
                <p><label class="w3-large">IP address :</label>&emsp;<label id="user_ip" class="w3-text-green"></label></p>
                <!--<p><label class="w3-large">Last Activity Time :</label>&emsp;<label id="last_activity" class="w3-text-green"></label></p>--></div>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    $(function(){
        document.title="Welcome to User section";
        setInterval(function(){update_time();},3000);
    });
    
    function update_time(){
        var username = $("#user").val();
        var log_in_time = $("#logged_time").val();
        var int_logged_in_time = parseInt(log_in_time);
        if(browser_online() == 1){
            console.log(browser_online());
            $("#online_browser").removeClass("w3-text-red");
            $("#online_browser").addClass("w3-text-green");
            $("#online_browser").html("Your Browser is Online.");
            /*var current_time = new Date();
            var current_time_timestamp = Date.parse(current_time)/1000;*/
            var last_last_activity_time = $("#last_last_active_time").val();
            var int_last_last_activity_time = parseInt(last_last_activity_time);
            console.log(int_last_last_activity_time);
            
            /*if(int_last_last_activity_time == 0){
                if(username != ""){
                        $.ajax({
                           type:'ajax',
                           method:'post',
                           data:{'username':username},
                           dataType:'json',
                           url:'<?=site_url()?>' + '/status/active',
                           success:function(response){
                               console.log("current timestamp ",current_time_timestamp);
                               console.log("last activity timestamp ",response.time);
                               //console.log("last last activity timestamp ",la);
                               $("#if_offline").removeClass("hiddenspan");
                               var logged_time = new Date(int_logged_in_time*1000);
                               $("#loggedin_time").html(logged_time);
                               $("#user_ip").html(response.ip);
                               var last_activity_time = new Date(response.time*1000);
                               $("#last_activity").html(last_activity_time);
                               $("#last_last_active_time").val(response.time);
                           },
                           error:function(){
                               
                           }
                        });
                    }
            }*/
           if(int_last_last_activity_time > 15)
                {
                    window.location = "<?=site_url('/status/logout')?>";
                }
                else{
                    if(username != ""){
                        $.ajax({
                           type:'ajax',
                           method:'post',
                           data:{'username':username},
                           dataType:'json',
                           url:'<?=site_url()?>' + '/status/active',
                           success:function(response){
                               //console.log("current timestamp ",current_time_timestamp);
                               console.log("last activity timestamp ",response.time);
                               //console.log("last last activity timestamp ",la);
                               $("#if_offline").removeClass("hiddenspan");
                               var logged_time = new Date(int_logged_in_time*1000);
                               $("#loggedin_time").html(logged_time);
                               $("#user_ip").html(response.ip);
                               var last_activity_time = new Date(response.time*1000);
                               //$("#last_activity").html(last_activity_time);
                               $("#last_last_active_time").val(response.time_diff);
                           },
                           error:function(){
                               console.log("Something went wrong");
                           }
                        });
                    }
                }
            }
        else{
            console.log(browser_online());
            $("#online_browser").removeClass("w3-text-green");
            $("#online_browser").addClass("w3-text-red");
            $("#online_browser").html("Your Browser is Offline. Please try to connect with Internet.");
            $("#if_offline").addClass("hiddenspan");
        }
    }
    
    function browser_online(){
        var online = navigator.onLine;
        if(online){
            //alert(online);
            return 1;
        }
        else{
            //alert(online);
            return 0;
        }
    }
</script>
