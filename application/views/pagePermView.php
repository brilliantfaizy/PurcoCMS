<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
	
		$("#signupForm").validate({
			rules: {
			
		
                permissions:{
                  required:true
                },
                pages:{
                  required:true
                }
			
			
			},
			messages: {
			
                permissions:"Select Roles must.",
                 pages:"Select Pages must."
                
			
              
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
        
       
       
         foreach($single_student as $row_student){ ?>

        <form id="signupForm" action="../updatepage" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
                    
                  <td>Page :</td>
                    <td>
                        <select name="pages" class="myfield">
                         <option value>Select</option>
                            <?php foreach($page_list as $row){
                                
                               print_r($single_student);
                                    
                                        if($row_student->Page_Id == $row->Page_Id){    
                                    
                                    ?>
                                
                                
                                <option value="<?php  echo $row->Page_Id?>" selected><?php  echo $row->Page?></option>
                                
                                <?php } else { ?>
                                
                                <option value="<?php  echo $row->Page_Id?>" ><?php  echo $row->Page?></option>
                                
                                <?php } 
                                
                                }?>
                            
                            
                            
                           
                  </select>
                    </td>
                    <td>Roles:</td>
                   <td>
                   <select name="permissions" class="myfield">
                    <option value>Select</option>
                            <?php foreach($perm_list as $row){
                                    
                                        if($row_student->RId == $row->RId){    
                                    
                                    ?>
                                
                                
                                <option value="<?php  echo $row->RId?>" selected><?php  echo $row->RoleTitle?></option>
                                
                                <?php } else { ?>
                                
                                <option value="<?php  echo $row->RId?>" ><?php  echo $row->RoleTitle?></option>
                                
                                <?php } 
                                
                                }?>
                  </select>
                   </td>
                    
                </tr>

                <tr>
                    <td colspan="4">
                        <input type="hidden" name="id" value="<?php echo $row_student->PermPageId; ?>" />
                        <input class="button medium BtnBlack" type="submit" name="submit" value="Update Page" />

                    </td>

                </tr>



            </table>

        </form>

        <?php } ?>

    </div>

    <div class="Grid">



      <table  cellspacing="0" cellpadding="10">

            <tr>
                 <th style="width: 10%;">ID</th>
                <th style="width: 10%;">Page</th>
              <th style="width: 10%;">Role</th>
                <th style="width: 10%;">Action</th>

            </tr>

            <?php foreach($students as $student){ ?>

            <tr>

                <td>
                    <?php echo $student->PermPageId; ?></td>
                <td>
                    <?php echo $student->Page; ?></td>
                    
               <td>
                    <?php echo $student->RoleTitle; ?></td>

                <td><a href="<?php echo $student->PermPageId ?>">Edit</a>
                    <a style="display: none;" href="<?php echo $student->PermPageId ?>">Delete</a>
                </td>
            </tr>

            <?php } ?>



        </table>
    </div>

</div>
<?php $this->load->view('footer'); ?>