<!DOCTYPE html>
<html>
<head>
  <title>Error Related Javascript</title>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="theme-color" content="teal" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  <link href="<?=base_url('resource/css/w3.css');?>" rel="stylesheet"/>
  <link href="<?=base_url('resource/css/my_css.css');?>" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<script>
    $(document).ready(function(){
        if(document.referrer == "https://online.aecadmission.gq/index.php/status/error_msg")
        {
            window.location="<?=site_url('/status/index');?>";
        }
        else
        {
            window.location=document.referrer; 
        }
       
    });
</script>
<body>
    <div class="container w3-center">
        
        <h1 class="page-header">Errors! </h1><br/>
        <h3 class="w3-text-blue">JavaScript must be enabled!</h3><br/>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            
            <p class="w3-pale-yellow">
                <label class="w3-text-red" style="font-size:30px">This website is JavaScript packed. So for accessing this site you must enable your browser javascript.</label>
            </p>
        </div>
        <div class="col-lg-4"></div>
        
    </div>
</body>
</html>