<!DOCTYPE HTML>
<html>
<head>

	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
    <title>User Management</title>
    <link rel="stylesheet" type="text/css" href="<?php echo "$base/$css"?>"/>
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="<?php echo "$base/dist/jquery.validate.js"; ?>"></script>
    
    <script type="text/javascript">
    
        $().ready(function() {
		// validate the comment form when it is submitted

		// validate signup form on keyup and submit
		$("#LoginForm").validate({
			rules: {
			     
				Username: {
					required: true,
					maxlength: 25
				},
                Password:{
                    required: true,
					maxlength: 25
                }
			
			
			},
			messages: {
				 
                 Username:{
                    required:"Username field is required"
                 },
                 
                 Password: {
					required: "Password field is required" 
				}
			
              
			}
		});
	});
    
    </script>
    
    
    <style>

	
	#LoginForm label.error {
	   
        display: table;
        color: red;
        
	}
    
    #LoginForm input.error {
	  
       border: 1px solid red;
       
	}

	</style>
    

</head>

<body>

<div id="Container">
        
        <div id="content">
            <div id="login">
                <h1 style="margin-top: 10px; text-align: center; color:#34457d;">Login</h1>
                <form id="LoginForm" action="login" method="post" style="width: 310px; margin: auto;">
                
                    <input class="myfield" placeholder="username" name="Username" type="text" /><br />
                    <br />
                    <input class="myfield" placeholder="password" name="Password" type="password" />
                    <br />
                    <input class="button loginBtn" name="mysubmit" type="submit" value="Login" />
                    <br />
                    <input class="button reset" type="submit" onclick="return false;" value="Reset" />
                    
                </form>
            </div>
        </div>
  
</div>


</body>
</html>