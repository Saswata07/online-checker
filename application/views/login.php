
      <div class="w3-container" style="top:25%;position:absolute;width:100%">
		        <div class="row">
               <div class="col-lg-4">
                   
			   </div>
              <div class="col-lg-4"> 

           <div class="center w3-center">
                 <?php echo validation_errors(); ?>
                <?php echo form_open('/status/login_user', array('id'=>'signin','method'=>'post')); ?>
				      
				      <p><h4><b style="color:#377c9e" class="w3-xxlarge">User Log-in</b> </h4></p><br> 
                      <div class="input-group w3-xxxlarge">
                      <span class="input-group-addon" ><i class="fa fa-user" ></i></span>
      
                      <input id="user name" type="text" class="form-control" name="username" placeholder="User Name" minlength="5" maxlength="20" title="Enter username for Log in" required>
					  
                    </div>
		   <br>
		  <div class="input-group w3-xxlarge">
                     <span class="input-group-addon"><i class="fa fa-lock"></i></span>
      
                     <input id="password" type="password" class="form-control " name="password" placeholder="Password" minlength="6" title="Enter valid password for Log in" required>
                     
                     <span class="input-group-addon"><a id="toggle_pass_user" href="#" style="text-decoration:none" class="fa fa-eye"></a></span>
					
           </div> <br>
		                 <button class="w3-btn w3-blue w3-border w3-border-teal w3-round-large ">sign in</button>
		      </form>

   </div>
   </div>
   </div>
   </div>
   </div>
          </body>

        <script type="text/javascript">
            $(function(){
               document.title="Welcome to Online Checker.."; 
               browser_detection(); //calling to function in page loading
               
            });
            function browser_detection(){       //this is function for browser detection currently no use
                var useragent = navigator.userAgent;
                if(useragent.search('Windows')>=0 && useragent.search('Phone') >= 0){
                    //alert("Windows Phone");
                }
                else if(useragent.search('Macintosh')>=0){
                    //alert("Mac Os Safari");
                }
                else if(useragent.search('Windows')>=0){
                    //alert("Windows");
                }
                else if (useragent.search('Android')>=0){
                    //alert("Mobile");
                }
                else if (useragent.search('iPhone')>=0){
                    //alert("iPhone");
                }
                else{
                     
                }
            }
            $("#toggle_pass_user").click(function(){        //this is for password toogle
                 var pass = document.getElementById("password");
                if(pass.type == "password"){
                    pass.type='text';
                    $("#toggle_pass_user").removeClass("fa-eye");
                    $("#toggle_pass_user").removeClass("w3-text-blue");
                    $("#toggle_pass_user").addClass("fa-eye-slash");
                    $("#toggle_pass_user").addClass("w3-text-red");
                }
                else{
                    pass.type='password';
                    $("#toggle_pass_user").removeClass("fa-eye-slash");
                    $("#toggle_pass_user").removeClass("w3-text-red");
                    $("#toggle_pass_user").addClass("fa-eye");
                    $("#toggle_pass_user").addClass("w3-text-blue");
                }
              });
            
            /*function browser_online(){
                var online = navigator.onLine;
                if(online){
                    //alert(online);
                    return 1;
                }
                else{
                    //alert(online);
                    return 1;
                }
            }*/
        </script>
  </html>
