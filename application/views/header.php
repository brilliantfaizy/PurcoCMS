<!DOCTYPE HTML>
<html>
<head>
	
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
    <title>User Management</title>
    <link rel="stylesheet" type="text/css" href="<?php echo "$base/$css";?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo "$base/foundation-datepicker.css";?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo "$base/style1.css"?>"/>
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo "$base/jquery-2.1.3.min.js"?>"></script>
    <script src="<?php echo "$base/foundation-datepicker.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo "$base/jquery.als-1.7.js"; ?>"></script>
    <script src="<?php echo "$base/multiupload.js" ?>"></script>
    <script src="<?php echo "$base/dist/jquery.validate.js"; ?>"></script>
      
   

    
    
</head>

<body>

<div id="Container">
        
        <div id="header">
           <div id="PurcoLogo"></div><div id="ControllerBtns"> <a href='<?php echo $base; ?>/index.php/main/logout' style="float: left; margin-right: 12px; margin-top: 20px;" class="button smallBtn">Logout</a>  <a href='#' onclick="return false;" style="float: right; margin-top: 20px;" class="button smallBtn">User Profile</a></div>
        </div>
       
        <div id="menu">
            <?php $this->load->view('menu'); ?>
        </div>