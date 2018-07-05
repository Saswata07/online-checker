
      <div class="w3-container" style="top:20%;position:absolute">
		        <div class="row">
               <div class="col-lg-4">
                   
			   </div>
              <div class="col-lg-4"> 

           <div class="center w3-center">
                 <?php echo validation_errors(); ?>
                <?php echo form_open('/status/login_admin', array('id'=>'signin','method'=>'post')); ?>
				      <p ><h4 style="background-color:#3a628861"><b style="color:#fdf5f8" class="w3-xxlarge">Admin Log-in</b> </h4></p><br> 
                      <div class="input-group w3-xxxlarge">
                      <span class="input-group-addon" ><i class="fa fa-user" ></i></span>
      
                      <input id="user name" type="text" class="form-control" minlength="5" maxlength="20" name="username" placeholder="User Name" required>
					  
                    </div>
		   <br>
		   <!--autocomplete="username" 
		   autocomplete="current-password" -->
           <div class="input-group w3-xxlarge">
                     <span class="input-group-addon"><i class="fa fa-lock"></i></span>
      
                     <input id="password" type="password" class="form-control" minlength="6" name="password" placeholder="Password" required>
                     
                     <span class="input-group-addon"><a id="toggle_pass_admin" href="#" style="text-decoration:none" class="w3-text-blue fa fa-eye"></a></span>
					
           </div> <br>
		                 <button class="w3-btn w3-blue w3-border w3-border-teal w3-round-large ">sign in</button>
		                 
		                 </form>

   </div>
   </div>
   </div>
   </div>
   </div>
          </body>
          </html>
          <script type="text/javascript">
                document.title="Welcome to Admin Login";
              $("#toggle_pass_admin").click(function(){
                 var pass = document.getElementById("password");
                if(pass.type == "password"){
                    pass.type='text';
                    $("#toggle_pass_admin").removeClass("fa-eye");
                    $("#toggle_pass_admin").removeClass("w3-text-blue");
                    $("#toggle_pass_admin").addClass("fa-eye-slash");
                    $("#toggle_pass_admin").addClass("w3-text-red");
                }
                else{
                    pass.type='password';
                    $("#toggle_pass_admin").removeClass("fa-eye-slash");
                    $("#toggle_pass_admin").removeClass("w3-text-red");
                    $("#toggle_pass_admin").addClass("fa-eye");
                    $("#toggle_pass_admin").addClass("w3-text-blue");
                }
              });
          </script>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          