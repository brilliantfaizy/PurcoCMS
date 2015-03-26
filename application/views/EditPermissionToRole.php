<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
		// validate the comment form when it is submitted

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
			     role:{
			         
                     required:true
                     
			     },
				page: {
					required: true
					
				},
                submenu:{
                    required: true
                },
              
				start:{
				required:true
				},
				end:{
				required:true
				}
			
			
			
			},
			messages: {
			
                role:"Select role must",
                page:"Select page must",
                submenu:"Select menu must",
                start:"Must fill start date",
				end:"Must fill end date"
                
			
              
			}
		});
	});
    
    
    
    $(document).ready(function() { 

                
                $("#selectRoles").change(function(){
                    
                    
                   if($(this).val() != "" || $(this).val() != null){
                   
                     /*dropdown post */
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/PagesController/buildDropCities",    
                    data: {id: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                      var myobj;
                      var html = '<option value>Select Page</option>';
                      myobj = JSON.parse(data);
                        
                      if(myobj.length != 0){
                        
                       $("#page").html(' ');
                       
                           for(var i = 0; i < myobj.length; i++){
                              
                               html +='<option value="'+myobj[i].Page_Id+'">'+myobj[i].Page+'</option>'
                           }
                            
                           $("#page").html(html);
                          
                       
                       }  else {
                          
                           
                           $("#page").html('<option value>Select Page</option>');
                        
                       }
                       
                       
                    }
                    
                    });
               
                } else {
                    
                     $("#page").html('<option value>Select Page</option>');
                }
                
                });
                
                
                
                
                $("#page").change(function(){
                    
                    
                   if($(this).val() != "" || $(this).val() != null){
                   
                     /*dropdown post */
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/PagesController/SubMenusCon",    
                    data: {id: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                        //console.log(data);
                        
                      var myobj;
                      var html = '<option value>Select Sub Menu</option>';
                      myobj = JSON.parse(data);
                        
                      if(myobj.length != 0){
                        
                       $("#submenu").html(' ');
                       
                           for(var i = 0; i < myobj.length; i++){
                              
                               html +='<option value="'+myobj[i].Menu_Id+'">'+myobj[i].Menu_Title+'</option>'
                           }
                            
                           $("#submenu").html(html);
                          
                       
                       }  else {
                          
                           
                           $("#submenu").html('<option value>Select Sub Menu</option>');
                        
                       }
                       
                       
                    }
                    
                    });
               
                } else {
                    
                     $("#submenu").html('<option value>Select Sub Menu</option>');
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
          
          foreach ($data as $row1){  ?>

        <form id="signupForm" action="../../editpermrole" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
				<td>Roles :</td>
                    <td><input type="hidden" id="id"  name="id" value="<?php echo $row1->Action_Id; ?>" />
                    
                    <select id="selectRoles" name="role" class="myfield" disabled="">
                              <option value>Select</option>
                                <?php foreach($role as $row){
                                    
                                        if($row1->RoleTitle == $row->RoleTitle){    
                                    
                                    ?>
                                
                                
                                <option value="<?php  echo $row->RId?>" selected><?php  echo $row->RoleTitle?></option>
                                
                                <?php } else { ?>
                                
                                <option value="<?php  echo $row->RId?>" ><?php  echo $row->RoleTitle?></option>
                                
                                <?php } 
                                
                                }?>
                                
                                
                                </select>  
                    </td>
                    <td>Page :</td>
                    <td>
                         
                            <select name="page" class="myfield" id="page" disabled="">
					           	<option value="<?php echo $row1->Page_Id; ?>"><?php echo $row1->Page; ?></option>
	                        </select>
                         
                    </td>
                   

                   
                </tr>

                <tr>
				 <td>Sub Menu :</td>
                 <td>
                 
                    <select name="submenu" class="myfield" id="submenu" disabled="">
                    
					           	<option value="<?php echo $row1->Menu_Id; ?>"><?php echo $row1->Menu_Title; ?></option>
                                
	                 </select>
                     
                 </td>
                 
                 <td>Action :</td>
                    <td>
                       <input type="checkbox" class="checkBoxAlign" name="create" value="1" <?php if($row1->ContentAdd == '1'){echo 'checked';}?> />Create
                      
                        <input type="checkbox" class="checkBoxAlign" name="edit" value="1" <?php if($row1->ContentUpdate == '1'){echo 'checked';}?>  />Edit
                        
                        <input type="checkbox" class="checkBoxAlign" name="view" value="1" <?php if($row1->ContentView == '1'){echo 'checked';}?> />View
                      
                        <input type="checkbox" class="checkBoxAlign" name="delete" value="1" <?php if($row1->ContentDelete == '1'){echo 'checked';}?> />Delete
                    </td>
                 
					

                </tr>
                <tr>
                
                <td>Start Date :</td>
                    <td>
                        <input onClick="showpicker();" class="myfield fdatepicker" value="<?php echo $row1->StartDate; ?>" placeholder="" name="start" type="text" />
                    </td>
                
               <td>End Date :</td>
					
                    <td> <input   onClick="showpicker();" class="myfield fdatepicker" value="<?php echo $row1->EndDate; ?>"  placeholder="" name="end" type="text" /></td>
                   
                    
                </tr>
                
			<tr>
			<td></td>
			<td></td>
			<td></td>
                     <td>
                        <input class="button medium BtnBlack" style="margin:0;" type="submit" name="submit" value="Update" />
                    </td></tr>


            </table>

        </form>
        <?php }?>

    </div>

    <div class="Grid">



        <table  cellspacing="0" cellpadding="10">

            <tr>
                <th style="width: 10%;">Role</th>
                <th style="width: 10%;">Page</th>
                <th style="width: 10%;">Menu</th>
               <th style="width: 10%;">Insert</th>
               <th style="width: 10%;">Update</th>
               <th style="width: 10%;">View</th>
               <th style="width: 10%;">Delete</th>
                <th style="width: 10%;">Start Date</th>
				 <th style="width: 10%;">End Date</th>

            </tr>

           
		<?php foreach($single_student as $row5){
		?>
            <tr>

                <td><?php echo $row5->RoleTitle; ?>
               </td>
                <td><?php echo $row5->Page; ?>
                  </td>
                  <td><?php echo $row5->Menu_Title; ?></td>
                <?php if($row5->ContentAdd == 1) { ?>

                <td>
                    <?php echo "Allowed"; ?>
                </td>

                <?php } else { ?>

                <td>
                
                    <?php echo "Not Allowed"; ?>
                </td>

                <?php } ?>
                <?php if($row5->ContentUpdate == 1) { ?>

                <td>
                    <?php echo "Allowed"; ?>
                </td>

                <?php } else { ?>

                <td>
                    <?php echo "Not Allowed"; ?>
                </td>

                <?php } ?>
                <?php if($row5->ContentView == 1) { ?>

                <td>
                    <?php echo "Allowed"; ?>
                </td>

                <?php } else { ?>

                <td>
                    <?php echo "Not Allowed"; ?>
                </td>

                <?php } ?>
                <?php if($row5->ContentDelete == 1) { ?>

                <td>
                    <?php echo "Allowed"; ?>
                </td>

                <?php } else { ?>

                <td>
                    <?php echo "Not Allowed"; ?>
                </td>

                <?php } ?>
				  <td><?php echo $row5->StartDate; ?>
                  </td>
                <td><?php echo $row5->EndDate; ?>
                  </td>


               
            </tr>

           <?php } ?>



        </table>
    </div>

</div>
<?php $this->load->view('footer'); ?>
