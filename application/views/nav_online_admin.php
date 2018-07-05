<!--Start of Navigation Part of the admin pages-->

<body style="background-color:;background-image:url(<?=base_url('/resource/background.jpg');?>);">
      <div class="container-fluid">
    <div>
      <div class="navbar navbar-default navbar-fixed-top" style="background-color: #2e3128;color:#eee;" role="navigation">
        <div class="container" >
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:#eee" href="#"><span><img alt="logo" class="w3-hide-large" src="<?=base_url('');?>" height="35" /></span>&nbsp;Company Name</a>
          </div>
          <div class="navbar-collapse collapse" style="font-family:'Times New Roman'; font-size:20px">
            <ul class="nav navbar-nav navbar-right">
              <li id="dashboard"><a id="dashboard_label" style="color:#eee" href="<?=site_url('/status/dashboard');?>">Dashboard</a></li>
              <li id="edit_user"><a id="edit_user_label" style="color:#eee" href="<?=site_url('/status/edit_user');?>">Edit Users</a></li>
              <li id=""><a style="color:#eee" href="<?=site_url('/status/logout');?>">Sign Out</a></li>
              
            </ul>
          </div>
        </div>
      </div>
      </div>
     </div>
     
     <!--End of Navigation Part of the admin pages-->
