<?php
    $assets_location = base_url()."assets/";
    $file_location = base_url()."assets/img/";
?>


<!DOCTYPE html>
<html>
	<head>
        <link rel="icon" type="png" sizes="16x16" href="<?php echo $file_location; ?>favicon.png">

		<title>Login Admin</title>
		<!-- Bootstrap Core CSS -->
    	<link href="<?php echo $assets_location?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    	<!-- Theme CSS -->
    	<link href="<?php echo $assets_location?>css/clean-blog.css" rel="stylesheet">

    	<!-- Custom Fonts -->
    	<link href="<?php echo $assets_location?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' 		rel='stylesheet' type='text/css'>
		</head>
<body>

	<div class="container">
		
		<div class="row">
			<div class="col-sm-12">
				<img class="img-responsive iconlogin" src="<?php echo $file_location ?>logo-1.png" alt="">
			</div>
		</div>
	
        
    	<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        	<div class="panel panel-default" >
            	<div class="panel-heading">
                	<div class="panel-title text-center"><strong>mudaberkarya.id</strong></div>
            	</div>     

            	<div class="panel-body" >

                	<form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/Welcome/authen'); ?>">
                   
                    	<div class="input-group">
                        	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        	<input id="user" type="text" class="form-control" name="username" value="" placeholder="User">                                        
                    	</div>

                    	<div class="input-group">
                        	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        	<input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    	</div>                                                                  

                    	<div class="form-group">
                        	<!-- Button -->
                        	<div class="col-sm-12 controls">
                            	<button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        	</div>   
                    	</div>

                	</form>     

            	</div>                     
        	</div>  
    	</div>
	</div>
</body>
</html>