<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
		// validate the comment form when it is submitted
	

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				loginname: "required",
				loginname: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				conf: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
                firstname:{
                    required:true,
                    minlength:3
                },
                 midname:{
                    required:true,
                    minlength:4
                },
                 lastname:{
                    required:true,
                    minlength:4
                }
               
			},
			messages: {
				loginname: "Please enter your Username",
			
				loginname: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
                firstname: "Please enter your Full name",
                firstname: {
					required: "Please enter a Full name",
					minlength: "Your Full name must consist of at least 4 characters"
				},
                 midname: "Please enter your Full name",
                midname: {
					required: "Please enter a Full name",
					minlength: "Your Full name must consist of at least 4 characters"
				},
                 lastname: "Please enter your Full name",
                lastname: {
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
				email: "Please enter a valid email address"
                
                
              
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

         <?php $this->load->view('employees/EmployeeTabs'); ?>

    </div>
<div id="innerTabs">
        
        
                <?php $this->load->view('employees/employeeinner'); ?>
                
                
     </div>
    <div class="FormFields">

        <form id="signupForm" action="insert" method="post">
            

            <table class="FieldsTable"  cellpadding="6">

             
                <tr>
                    <td>First Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    
                    <td>Middle Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="midname" type="text" />
                    </td>

                </tr>

                <tr>


                    <td>Last Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="lastname" type="text" />
                    </td>
                    
                    <td>Login Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="loginname" type="text" />
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td>
                        <input class="myfield" placeholder="" name="password" id="password" type="password" />
                    </td>
                    
                    <td>Confirm Password:</td>
                    <td>
                        <input class="myfield" placeholder="" name="conf" type="password" />
                    </td>



                </tr>

                <tr>
                    <td>Email Address:</td>
                    <td>
                        <input class="myfield" placeholder="" name="email" type="email" />
                    </td>
                    
                    <td></td>
                    <td></td>


                </tr>





                <tr>


                    <td colspan="4">
                        <input class="button medium" type="submit" value="Save" />
                        <input class="button medium" style="margin-right: 13px;" type="reset" value="Cancel" />
                    </td>
                </tr>


            </table>


        </form>
           </div>
        
            <div class="Grid">
           <table  cellspacing="0" cellpadding="10">

            <tr>
                <th style="width: 10%;">Employee ID</th>
                <th style="width: 11%;">Login Name</th>
                <th style="width: 11%;">Full Name</th>
                <th style="width: 11%;">Email</th>
                <th style="width: 11%;">Date Modified</th>
                
               
                <th style="width: 50%;">Action</th>

            </tr>

         

              <?php foreach($query as $row){ ?>

            <tr>

                <td>
                    <?php echo $row->Emp_Id; ?></td>
                <td>
                    <?php echo $row->LoginName; ?></td>
                <td>
                    <?php echo $row->Full_name; ?>
                    </td>
                
                <td>
                    <?php echo $row->Email; ?></td>
                <td>
                    <?php echo $row->DateModified; ?></td>
               

                
               
                <td><div id="innerTabs"><ul><li ><a href="<?php echo $base; ?>/index.php/EmployeeController/employee/<?php echo $row->Emp_Id ?>"><br />Personal Preference</a></li>
<li ><a href="<?php echo $base; ?>/index.php/EmployeeController/system1"><br />System Preference</a></li></ul></td>       
         </div>   </tr>

            <?php } ?>



        </table></div>
        
 
    
    
    
 



</div>

<?php $this->load->view('footer'); ?>