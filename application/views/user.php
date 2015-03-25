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
            
            <?php $this->load->view('menuUser'); ?>
        
        </div>
        
        <div id="content">
        
            <div class="FormFields">
                
                <form action="welcome" method="post">
                
                    <table class="FieldsTable" cellpadding="6">
                        
                        <tr>
                            <td>First Name :</td>
                            <td><input value="<?php echo $First_name ?>" class="myfield" placeholder="" name="fname" type="text" /></td>
                            
                            <td>Last Name :</td>
                             <td><input value="<?php echo $Last_name ?>" class="myfield" placeholder="" name="lname" type="text" /></td>
                        </tr>
                        
                        <tr>
                            <td>Login Username :</td>
                            <td><input disabled="true" value="<?php echo $Username ?>" class="myfield" placeholder="" name="Username" type="text" /></td>
                            
                            <td>Email Address :</td>
                             <td><input disabled="true" value="<?php echo $Email ?>" class="myfield" placeholder="" name="Email" type="email" /></td>
                        </tr>
                        
                         <tr>
                            <td>Login Password :</td>
                             <td><input value="<?php echo $Password ?>" class="myfield" placeholder="" name="password" type="Password" /></td>
                            
                            <td>Confirm Password :</td>
                            <td><input value="<?php echo $Password ?>" class="myfield" placeholder="" name="conf" type="Password" /></td>
                        </tr>
                        
                        <tr>
                            
                            <td>DOB</td>
                            <td><input value="<?php echo $DOB ?>" onclick="showpicker();" class="myfield fdatepicker" placeholder="" name="dob" type="text" /></td>
                        </tr>
                        
                        
                        <tr>
                            <td colspan="4">
                                <input class="button medium" name="updateProfile" type="submit" value="Update Profile" />
                                <input type="hidden" name="id" value="<?php echo $UId; ?>" />
                            </td>
                            
                        </tr>
                        
                        
                    
                    </table>
                
                </form>
                
            </div>
            
            <div style="display: none;" class="Grid">
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
                        <td><a href="#" onclick="return false;">Edit</a></td>
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
                        <td><a href="#" onclick="return false;">Edit</a></td>
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

function showpicker(){
    
    $('.fdatepicker').fdatepicker();
    
}

showpicker();
        
    </script>
</body>
</html>