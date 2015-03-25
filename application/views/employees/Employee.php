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
 
     
        <form id="signupForm" action="../insertallinfo" method="post">
            
            
            <table class="FieldsTable" cellpadding="6">
			<?php
	
        
            foreach ($single_student as $row){  ?>
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
                    <td>Legal Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="legalname" type="text" value="<?php echo $row->LegalName; ?>"/>
                    </td>
                    
                    <td>Residential Address Line1:</td>
                    <td>
                        <input class="myfield" placeholder="" name="paddress1" type="text" value="<?php echo $row->Address1; ?>" />
                    </td>

                </tr>

                <tr>


                    <td>Residential Address Line2:</td>
                    <td>
                        <input class="myfield" placeholder="" name="paddress2" type="text" value="<?php echo $row->Address2; ?>" />
                    </td>
                    
                    <td>City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pcity" type="text" value="<?php echo $row->City; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>State:</td>
                    <td>
                        <select name="pstate" class="myfield">
                        <option>select</option>
						<option></option></select>
                    </td>
                    <td>Country:</td>
                    <td>  <select name="pcountry" class="myfield"><option>select</option>
											<option></option></select></td>
                    



                </tr>

                <tr>
                <td>Zip:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pzip" type="text" value="<?php echo $row->Postal_code; ?>"/>
                    </td>
                    <td>Phone No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pphn" type="text" value="<?php echo $row->Phone; ?>"/>
                    </td>
                    
                   



                </tr>

                <tr>
                 <td>Mobile No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pmobile" type="text" value="<?php echo $row->Mobile_no; ?>"/>
                    </td>
                    <td>Email Address:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pemail" type="text" value="<?php echo $row->Email; ?>"/>
                    </td>
                    
                   



                </tr>

                <tr>
                 <td>Emergency Contact Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="emgcontactname" type="text" value="<?php echo $row->EmergencyContactName; ?>" />
                    </td>
                    <td>Emergency Contact No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="Emgcontactno" type="text" value="<?php echo $row->EmergencyContactNo; ?>" />
                    </td>
                   
                    



                </tr>
                <tr>
                <td>Spouse:</td>
                    <td>
                        <input class="myfield" placeholder="" name="spouse" type="text" value="<?php echo $row->Spouse; ?>" />
                    </td>
                    <td>Email Signature:</td>
                    <td>
                        <input class="myfield" placeholder="" name="emailsign" type="text" value="<?php echo $row->EmailSignature; ?>" />
                    </td>


                </tr>
				<?php } ?>
				</table>
				
				
				<table class="FieldsTable" cellpadding="6">
				
            <?php 
	
        foreach ($single_student1 as $row1){  ?>
                <tr>
				 
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>

           
                <tr>
                    <th>Mailing Address</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Phone No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="nphn" type="text" value="<?php echo $row1->Phone_no; ?>"  />
                    </td>
                   
                    <td>Fax No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mfax" type="text" value="<?php echo $row1->Fax_no; ?>"  />
                    </td>

                </tr>

                <tr>
                    <td>Address Line1:</td>
                    <td>
                        <input class="myfield" placeholder="" name="maddress1" type="text" value="<?php echo $row1->Address1; ?>"  />
                    </td>
                    
                    <td>Address Line2:</td>
                    <td>
                        <input class="myfield" placeholder="" name="maddress2" type="text" value="<?php echo $row1->Address2; ?>" />
                    </td>

                </tr>

                <tr>
                    <td>City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mcity" type="text" value="<?php echo $row1->City; ?>" />
                    </td>
                   
                    <td>State:</td>
                    <td>
                        <select name="mstate" class="myfield"><option>select</option></select>
                    </td>



                </tr>
                <tr>
                <td>Country:</td>
                <td>  <select name="ncountry" class="myfield"><option>select</option></select></td>
                 <td>Zip:</td>
                    <td>
                        <input class="myfield" placeholder="" name="zipcode" type="text" value="<?php echo $row->Postal_code; ?>" />
                    </td>
                </tr>

                <tr>
                   
                    
                    <td>Email:</td>
                    <td>
                        <input class="myfield" placeholder="" name="memail" type="email" value="<?php echo $row->Email_address; ?>"  />
                    </td>


                </tr>
	<?php } ?>
				
                <tr>


                    <td colspan="5">
                    <input type="hidden" name="Empid" value="<?php echo $Eid; ?>" />
                        <input class="button medium" type="submit" value="Save" />
                       
                    </td>
                </tr>




            </table>
        </form>

    </div>
    
    
     



</div>

<?php $this->load->view('footer'); ?>