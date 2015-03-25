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
            
            <?php foreach($single_student as $row){ ?>
                
                <form action="../update" method="post">
                
                    <table class="FieldsTable" cellpadding="6">
                        
                        <tr>
                            <td>Department Title :</td>
                            <td><input class="myfield" placeholder="" value="<?php echo $row->Dep_title; ?>" name="deptitle" type="text" /></td>
                            
                            <!--<td>Privileges</td>
                             <td><input class="myfield" placeholder="" name="privileges" type="text" /></td> -->
                        </tr>
                        
                        <tr>
                            <td colspan="4">
                            <input type="hidden" name="id" value="<?php echo $row->DId; ?>" />
                                <input class="button medium" type="submit" name="submit" value="Update Department" />
                            </td>
                            
                        </tr>
                        
                        
                    
                    </table>
                
                </form>
                
                <?php  } ?>
                
            </div>
            
            <div class="Grid">
           
                
                
                <table style="width: 100%;" cellspacing="0" cellpadding="10">
                    
                     <tr>
                        <th style="width: 10%;">Department ID</th>
                        <th>Department Title</th>
                        <th style="width: 10%;">Action</th>
                       
                    </tr>
                    
                     <?php foreach($students as $student){ ?>
                    
                    <tr>
                    
                        <td><?php echo $student->DId; ?></td>
                        <td><?php echo $student->Dep_title; ?></td>
                        
                        
                        <td><a href="<?php echo $student->DId ?>" >Edit</a>
                        <a href="../delete/<?php echo $student->DId ?>" >Delete</a>
                        </td>
                     </tr>
                     
                     <?php } ?>
                    
                   
                
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