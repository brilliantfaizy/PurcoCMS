<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
		// validate the comment form when it is submitted
	

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				legalname: "required",
				legalname: {
					required: true,
					minlength: 2
				},
				pemail: {
					required: true,
					email: true
				},
			
                paddress1:{
                    required:true
                   
                },
                
				 maddress1:{
                    required:true
                   
                },
                
				
				pphn:{
                    required:true,
                   number:true
                },
               pmobile:{
                    required:true,
                   number:true
                },
				emgcontactname:{
                    required:true,
                   
                },
				Emgcontactno:{
                    required:true,
					number:true
                   
                },
				
				nphn:{
                    required:true,
					number:true
                   
                }
				
				
				
			},
			
			///////////////////////
			messages: {
				legalname: "Please enter your Legal name",
			legalname: {
					required: "Please enter a Legal name",
					minlength: "Your username must consist of at least 2 characters"
				},
				pphn: {
					required: "Please enter a phone number",
					number: "Use numbers only"
				},
				pmobile: {
					required: "Please enter a mobile number",
					number: "Use numbers only"
				},
				Emgcontactno: {
					required: "Please enter a emergency number",
					number: "Use numbers only"
				},
				nphn: {
					required: "Please enter a phone number",
					number: "Use numbers only"
				},
				
                paddress1: "Please enter your address",
               
                 maddress1: "Please enter your address",
               
                 emgcontactname: "Please enter your emergency contact name",
                
				
				pemail: "Please enter a valid email address"
                
                
              
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
 
     
        <form id="signupForm" action="../EmployeeEdit" method="post">
            <?php foreach($single_student as $row){ ?>
            
            <table class="FieldsTable" cellpadding="6">
		
                <tr>
                    <th>Employee Detail</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="fname" type="text" value="<?php echo $row->Firstname;?>"/>
                    </td>
                    
                    <td>Middle Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mname" type="text" value="<?php echo $row->Middlename;?>" />
                    </td>

                </tr>

                <tr>


                    <td>Last Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="lname" type="text" value="<?php echo $row->Lastname;?>" />
                    </td>
                    <td>Employee Manager:</td>
                    <td>
                         <input class="myfield" placeholder="" name="empmanager" type="text" value="<?php echo $row->Firstname;?>" />
                    </td>
                    
                </tr>

                
                <tr>
                <td>Active Status:</td>
                    <td>
                       <select class="myfield" name="status" id="status">
                             <option value>Select</option>
                            <?php
                                
                                $active = "<option value=\"1\" selected>Active</option><option value=\"0\">Inactive</option>";
                                $inactive = "<option value=\"1\">Active</option><option value=\"0\" selected>Inactive</option>";
                               
                                 
                                 if($row->ActiveStatus == 1){
                                    
                                   echo $active;
                                 
                                 } 
                                  else {
                                    
                                      echo $inactive;
                                  } 
                            
                             ?>
                             </select>
                    </td>
                    <td>Date Of Birth:</td>
                    <td>
                        <input onClick="showpicker();" class="myfield fdatepicker" placeholder="" name="dob" type="text" value="<?php echo $row->Birthdate;?>" />
                    </td>
                    
                   



                </tr>

                <tr>
                 <td>SSN:</td>
                    <td>
                        <input class="myfield" placeholder="" name="ssn" type="text" value="<?php echo $row->SSN;?>"/>
                    </td>
                    <td>License Number:</td>
                    <td>
                        <input class="myfield" placeholder="" name="licenseno" type="text" value="<?php echo $row->LisenceDate;?>"/>
                    </td>
                    
                   



                </tr>

                <tr>
                 <td>License Date:</td>
                    <td>
                         <input onClick="showpicker();" class="myfield fdatepicker" placeholder="" name="licensedate" type="text"  value="<?php echo $row->LisenceNO;?>"/>
                    </td>
                    <td>Hire Date:</td>
                    <td>
                         <input onClick="showpicker();" class="myfield fdatepicker" placeholder="" name="hiredate" type="text" value="<?php echo $row->HireDate;?>" />
                    </td>
                   
                    



                </tr>
                <tr>
                <td>Termination Date:</td>
                    <td>
                         <input onClick="showpicker();" class="myfield fdatepicker" placeholder="" name="termidate" type="text" value="<?php echo $row->TerminationDate;?>" />
                    </td>
                    <td>Re-Hire Date:</td>
                    <td>
                         <input onClick="showpicker();" class="myfield fdatepicker" placeholder="" name="rehiredate" type="text" value="<?php echo $row->ReHireDate;?>" />
                    </td>


                </tr>
			
              <tr>
                <td>Re-Termination Date:</td>
                    <td>
                         <input onClick="showpicker();" class="myfield fdatepicker" placeholder="" name="retermidate" type="text" value="<?php echo $row->ReTerminationDate;?>" />
                    </td>
                    <td></td>
                    <td>
                        <input type="submit" name="updateemp" style="margin: 0px;" value="Save" class="button medium BtnBlack" />
                    </td>
                <input type="hidden" value="<?php echo $row->Emp_Id; ?>" name="EId"/> 
                  <input type="hidden" value="<?php echo $row->LoginName; ?>" name="login"/> 

                </tr>
				</table>
				<?php } ?>
				
				
        </form>

    </div>
    
    
     



</div>

<?php $this->load->view('footer'); ?>