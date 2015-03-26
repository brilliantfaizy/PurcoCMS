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
                    
                    $("#Role_ID").val($(this).val());
                   
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

    var myobj1;
        
        
            $(document).ready(function() { 

               
                $("#page").change(function(){
                    
                     /*dropdown post */
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/RoleController/role_table",    
                    data: {id: $(this).val(),RId : $("#Role_ID").val()},
                    type: "POST",
                    success: function(data){
                      
                      if(data != null || data != ""){
                        
                       myobj1 = JSON.parse(data);
                       $("#table1111").html(' ');
                       var html = '<tr> <th style="width: 10%;">Role</th> <th style="width: 10%;">Page</th><th style="width: 10%;">Menu</th><th style="width: 10%;">Insert</th><th style="width: 10%;">Update</th><th style="width: 10%;">View</th><th style="width: 10%;">Delete</th><th style="width: 10%;">Start Date</th><th style="width: 10%;">End Date</th><th style="width: 10%;">Action</th></tr>';
                       
                           for(var i = 0; i < myobj1.length; i++){
                            
                                var ContentAdd;
                                var ContentUpdate;
                                var ContentView;
                                var ContentDelete;
                                
                                if(myobj1[i].ContentAdd == 1){
                                    
                                    ContentAdd = "Allowed";
                                    
                                } else  {
                                    
                                    ContentAdd = "Not Allowed";
                                }
                               if(myobj1[i].ContentUpdate == 1){
                                    
                                    ContentUpdate = "Allowed";
                                    
                                } else {
                                    
                                    ContentUpdate = "Not Allowed";
                                }
                                 if(myobj1[i].ContentView == 1){
                                    
                                    ContentView = "Allowed";
                                    
                                } else  {
                                    
                                    ContentView = "Not Allowed";
                                }
                                  if(myobj1[i].ContentDelete == 1){
                                    
                                    ContentDelete = "Allowed";
                                    
                                } else  {
                                    
                                    ContentDelete = "Not Allowed";
                                }
                                html += '<tr><td>'+myobj1[i].RoleTitle+'</td><td>'+myobj1[i].Page+'</td><td>'+myobj1[i].Menu_Title+'</td><td>'+ContentAdd+'</td><td>'+ContentUpdate+'</td><td>'+ContentView+'</td><td>'+ContentDelete+'</td><td>'+myobj1[i].StartDate+'</td><td>'+myobj1[i].EndDate+'</td><td><a  href="viewupdaterole\/'+myobj1[i].sub_page_Id+'\/'+myobj1[i].RId+'\">Edit</a></td></tr>';
                               
                           }
                           
                           $("#table1111").html(html);
                          
                       
                       } 
                       
                       
                    }
                    
                    });
               
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
     <?php if($this->SubMenus->ContentAdd == 1){ ?>
    <div class="FormFields">

        <form id="signupForm" action="insertperm" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
				<td>Roles :</td>
                    <td>
                        <select id="selectRoles" name="role" class="myfield" id="role">
						<option value>Select Role</option>
						 <?php foreach($role as $row){?>
                            <option value="<?php  echo $row->RId?>">
                                <?php echo $row->RoleTitle?></option>
                            <?php }?></select>
                    </td>
                    <td>Page :</td>
                    <td>
                         
                            <select name="page" class="myfield" id="page">
					           	<option value>Select Page</option>
	                        </select>
                         
                    </td>
                   

                   
                </tr>

                <tr>
				 <td>Sub Menu :</td>
                 <td>
                 
                    <select name="submenu" class="myfield" id="submenu">
                    
					           	<option value>Select Sub Menu</option>
                                
	                 </select>
                     
                 </td>
                 
                 <td>Action :</td>
                    <td>
                       <input type="checkbox" class="checkBoxAlign" name="create" value="1" />Create
                      
                        <input type="checkbox" class="checkBoxAlign" name="edit" value="1"  />Edit
                        
                        <input type="checkbox" class="checkBoxAlign" name="view" value="1"  />View
                      
                        <input type="checkbox" class="checkBoxAlign" name="delete" value="1"  />Delete
                    </td>
                 
					

                </tr>
                <tr>
                
                <td>Start Date :</td>
                    <td>
                        <input onClick="showpicker();" class="myfield fdatepicker" placeholder="" name="start" type="text" />
                    </td>
                
               <td>End Date :</td>
					
                    <td> <input   onClick="showpicker();" class="myfield fdatepicker"   placeholder="" name="end" type="text" /></td>
                   
                    
                </tr>
                
			<tr>
			<td></td>
			<td></td>
			<td></td>
                     <td>
                        <input class="button medium BtnBlack" style="margin:0;" type="submit" name="submit" value="Insert" />
                    </td></tr>


            </table>

        </form>

    </div>

<?php } ?>

 <?php if($this->SubMenus->ContentView == 1){ ?>
    <div class="Grid">



        <table id="table1111" cellspacing="0" cellpadding="10">

           



        </table>
    </div>
    
    <?php } ?>
<input type='hidden' id="Role_ID" value="" />
</div>
<?php $this->load->view('footer'); ?>
