<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
		// validate the comment form when it is submitted

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
			
				password: {
					required: true,
					minlength: 5
				},
				conf: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
			
                fname:{
                    required:true,
                    minlength:4
                },
                status:{
                  required:true
                },
                rId:{
                  required:true
                }
			
			
			},
			messages: {
				
                fname: "Please enter your Full name",
                fname: {
					required: "Please enter a Full name",
					minlength: "Your Full name must consist of at least 4 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				conf: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
                status:"Select status must.",
                 rId:"Select Role must."
                
			
              
			},submitHandler: function insertrole(){
    
                   $.ajax({
                    url:"<?php echo $base; ?>/index.php/RoleController/update",    
                   data: {id: $("#id").val(),username: $("#username").val(),fname: $("#fname").val(),password: $("#password").val(),conf: $("#conf").val(),rId: $("#rId").val(),status: $("#status").val(),email: $("#email").val()},
                    type: "POST",
                    success: function(data){
                        
                        console.log(JSON.parse(data).msg);
                        
                       alert('inserted...');
                       
                    }
                    
                    });
                    
                    
                    return false;
                    }
	
		});
	});
	</script>
	<style>

	
	#signupForm label.error {
	  display: table;
      color: red;
	}
    
    #signupForm input.error {
	  
      border: red;
	}

	</style>
<div id="content">
 <div id="innerMenu">

            <?php $this->load->view('admininner'); ?>

        </div>
            <div class="FormFields">
            
             <?php
        
            foreach ($single_student as $row){  ?>
                
                <form id="signupForm"  action="" method="post">
                
                    <table class="FieldsTable" cellpadding="6">
                        
                        <tr>
                            <td>Username :</td>
                            <td><input type="hidden" id="id"  name="id" value="<?php echo $row->UId; ?>" />
                            <input disabled="true" class="myfield" placeholder="" value="<?php echo $row->Username; ?>" name="username" id="username" type="text" /></td>
                            
                            <td>Email :</td>
                            <td><input disabled="true" class="myfield" value="<?php echo $row->Email; ?>" placeholder="" name="email" id="email" type="email" /></td>
                            
                           
                        </tr>
                        
                        <tr>
                            <td>Full Name :</td>
                            <td><input class="myfield" value="<?php echo $row->Full_name; ?>" placeholder="" name="fname" id="fname"  type="text" /></td>
                             <td>Password :</td>
                            <td><input id="password" value="<?php echo $row->Password; ?>" class="myfield" placeholder="" id="password" name="password" type="password" /></td>
                            
                          
                        </tr>
                        
                        <tr>
                           
                            <td>Confirm Password :</td>
                            <td><input value="<?php echo $row->Password; ?>" class="myfield" placeholder="" name="conf" id="conf" type="password" /></td>
                             <td>Role :</td>
                            <td><select class="myfield" id="rId" name="rId">
                              <option value>Select</option>
                                <?php foreach($role_list as $role){
                                    
                                        if($row->RoleTitle == $role->RoleTitle){    
                                    
                                    ?>
                                
                                
                                <option value="<?php  echo $role->RId?>" selected><?php  echo $role->RoleTitle?></option>
                                
                                <?php } else { ?>
                                
                                <option value="<?php  echo $role->RId?>" ><?php  echo $role->RoleTitle?></option>
                                
                                <?php } 
                                
                                }?>
                                
                                
                                </select>  
                            </td>
                          
                        </tr>
                        
                       
                        
                        <tr>
                           
                            <td>Status :</td>
                            <td><select class="myfield" name="status" id="status">
                             <option value>Select</option>
                            <?php
                                
                                $active = "<option value=\"1\" selected>Active</option><option value=\"0\">Inactive</option>";
                                $inactive = "<option value=\"1\">Active</option><option value=\"0\" selected>Inactive</option>";
                               
                                 
                                 if($row->Status == 1){
                                    
                                   echo $active;
                                 
                                 } 
                                  else {
                                    
                                      echo $inactive;
                                  } 
                            
                             ?>
                             </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="4">
                                <input class="button medium BtnBlack" type="submit" name="submit" value="Update User" />
                            </td>
                            
                        </tr>
                        
                        
                    
                    </table>
                
                </form>
                
                <?php } ?>
                
            </div>
            
            <div class="Grid">
           
                
                
                <table  cellspacing="0" cellpadding="10">
                    
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Full Name</th>
                       
                        <th>Email</th>
                        <th>Role</th>
                          <th>Creation Date</th>
                       
                        <th>Date Modified</th>
                         <th>Status</th>
                        <th>Action</th>
                       
                    </tr>
                    
                     <?php
                    
                      foreach($query as $row){ ?>
                    
                    <tr>
                    
                        <td><?php echo $row->UId; ?></td>
                        <td><?php echo $row->Username; ?></td>
                        <td><?php echo $row->Full_name; ?></td>
                       
                        <td><?php echo $row->Email; ?></td>
                        <td><?php echo $row->RoleTitle; ?></td>
                           <td>
                    <?php echo $row->CreationDate; ?></td>
                        <td><?php echo $row->DateModified; ?></td>
                        
                     <?php if($row->Status == 1) { ?>
                        
                        <td><?php echo "Active"; ?></td>
                        
                        <?php } else { ?>
                        
                        <td><?php echo "Inactive"; ?></td>
                        
                        <?php } ?>
                        
                        
                        <td><a href="<?php echo $row->UId ?>" >Edit</a>
                        <a style="display: none;" onclick="userdeleteConfirm('../delete/<?php echo $row->UId ?>'); return false;" href="" >Delete</a>
                        </td>
                     </tr>
                     
                     <?php } ?>
                    
                   
                
                </table>
            </div>
            
            </div>
            <?php $this->load->view('footer'); ?>
            
        
