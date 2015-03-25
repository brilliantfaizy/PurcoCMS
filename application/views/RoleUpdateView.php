<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
		// validate the comment form when it is submitted

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
			     roleid:{
			         number:true,
                     required:true
                     
			     },
				roletitle: {
					required: true,
					minlength: 4
				},
                roledec:{
                    minlength:8
                }
			
			
			},
			messages: {
				 roleid: "Please must enter Role Id",
                 roleid:{
                    required:"Please must enter Role Id",
                    number: "Please enter Role Id in numberic form."
                 },
                roletitle: "Please enter  Role Title",
                roletitle: {
					required: "Please enter a Role Title",
					minlength: "Your Role Title must consist of at least 4 characters"
                    
				},
               
				roledec: {
				
					minlength: "Role description must be at least 8 characters long"
				}
			
                
			
              
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

        <?php foreach($single_student as $row){ ?>

        <form id="signupForm" action="../update" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
                <td>Role Id:</td>
                <td><input class="myfield" disabled="true" value="<?php echo $row->RId; ?>" name="roletitleid" type="text" />
                   </td>
                    <td>Role Title :</td>
                    <td>
                        <input class="myfield" placeholder="" value="<?php echo $row->RoleTitle; ?>" name="roletitle" type="text" />
                    </td>

                </tr>

                <tr>
                
                     <td>Description:</td>
                    <td>
                        <input class="myfield" placeholder="" value="<?php echo $row->Description; ?>" name="roledec" type="text" />
                    </td>
                   

                </tr>
                
                <tr>
                <td></td>
                <td></td>
                <td></td>
                     <td>
                        <input type="hidden" name="id" value="<?php echo $row->RId; ?>" />
                        <input class="button medium BtnBlack" type="submit" name="submit" value="Update Role" />

                    </td>
                </tr>



            </table>

        </form>

        <?php } ?>

    </div>

    <div class="Grid">



        <table style="width: 100%;" cellspacing="0" cellpadding="10">

            <tr>
                <th style="width: 10%;">Role ID</th>
                <th style="width: 10%;">Role Title</th>
               <th style="width: 10%;">Description</th>
                <th style="width: 10%;">Action</th>

            </tr>

            <?php foreach($students as $student){ ?>

            <tr>

                <td>
                    <?php echo $student->RId; ?></td>
                <td>
                    <?php echo $student->RoleTitle; ?></td>
               <td>
                    <?php echo $student->Description; ?></td>

                <td><a href="<?php echo $student->RId; ?>">Edit</a></td>
            </tr>

            <?php } ?>



        </table>
    </div>

</div>
<?php $this->load->view('footer'); ?>