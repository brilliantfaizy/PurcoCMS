<!DOCTYPE HTML>
<html>
<head>
	
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
    <title>User Management</title>
    <link rel="stylesheet" type="text/css" href="<?php echo "$base/$css"?>">
     <link rel="stylesheet" type="text/css" href="<?php echo "$base/foundation-datepicker.css"?>">
    <script src="<?php echo "$base/jquery.min.js" ?>"></script>
    <script src="<?php echo "$base/foundation-datepicker.js" ?>"></script>
    
    
</head>

<body>

<div id="Container">
        
        <div id="header">
           <?php $this->load->view('header'); ?>
        </div>
        <br /><br /><br /><br /><br />
        <div id="menu">
            
            <?php $this->load->view('menu'); ?>
        
        </div>
        
        <div id="content">
        
            <div class="FormFields">
                
                <form action="" method="post">
                
                    <table class="FieldsTable" cellpadding="6">
                        
                        <tr>
                            <td>First Name :</td>
                            <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                            <td>Last Name :</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                        </tr>
                        
                        <tr>
                            <td>Username :</td>
                            <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                            <td>Email Address :</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="email" /></td>
                        </tr>
                        
                         <tr>
                            <td>Login Password :</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="password" /></td>
                            
                            <td>Confirm Login Password :</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="password" /></td>
                        </tr>
                        
                         <tr>
                            <td>DOB </td>
                             <td><input onclick="showpicker();" class="myfield fdatepicker" placeholder="" name="DOB" type="text" /></td>
                            
                             <td></td>
                             <td></td>
                        </tr>
                        
                        <tr>
                            <td colspan="4">
                                <input class="button medium" type="submit" value="Create User" />
                            </td>
                            
                        </tr>
                        
                        
                    
                    </table>
                
                </form>
                
            </div>
            
            <div class="Grid">
                <table style="width: 100%;" cellspacing="0" cellpadding="10">
                    
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Address</th>
                        <th>Validity to</th>
                        <th>Validity from</th>
                        <th>Role</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email Address</td>
                        <td>Validity to</td>
                        <td>Validity from</td>
                        <td>Role</td>
                        <td>Department</td>
                        <td>Status</td>
                        <td><a href="#" onclick="return false;">Eidt</a></td>
                     </tr>
                    
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email Address</td>
                        <td>Validity to</td>
                        <td>Validity from</td>
                        <td>Role</td>
                        <td>Department</td>
                        <td>Status</td>
                        <td><a href="#" onclick="return false;">Eidt</a></td>
                    </tr>
                    
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email Address</td>
                        <td>Validity to</td>
                        <td>Validity from</td>
                        <td>Role</td>
                        <td>Department</td>
                        <td>Status</td>
                        <td><a href="#" onclick="return false;">Eidt</a></td>
                    </tr>
                    
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email Address</td>
                        <td>Validity to</td>
                        <td>Validity from</td>
                        <td>Role</td>
                        <td>Department</td>
                        <td>Status</td>
                        <td><a href="#" onclick="return false;">Eidt</a></td>
                    </tr>
                
                </table>
            </div>
            
            </div>
            
        

        <div id="footer"></div>
        
        </div>
        


<script type="text/javascript">

$("input").attr("maxlength", 30);

function showpicker(){
    
    $('.fdatepicker').fdatepicker();
    
}

showpicker();
        
    </script>
</body>
</html>