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

        <form id="signupForm" action="insert" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Role ID:</td>
                    <td>
                        <input class="myfield" placeholder="" name="roleid" type="text" />
                    </td>
                    <td>Role Title :</td>
                    <td>
                        <input class="myfield" placeholder="" name="roletitle" type="text" />
                    </td>

                   
                </tr>

                <tr>
                 <td>Description:</td>
                    <td>
                        <input class="myfield" placeholder="" name="roledec" type="text" />
                    </td>
                   

                </tr>
                <tr>
                <td></td>
                <td></td>
                    <td></td>
                     <td>
                        <input class="button medium BtnBlack" style="margin: 0;" type="submit" name="submit" value="Insert Role" />
                    </td>
                </tr>
                



            </table>

        </form>

    </div>

    <div class="Grid">



        <table  cellspacing="0" cellpadding="10">

            <tr>
                <th style="width: 10%;">Role ID</th>
                <th style="width: 10%;">Role Title</th>
               <th style="width: 10%;">Description</th>
                <th style="width: 10%;">Action</th>

            </tr>

            <?php foreach($query as $student){ ?>

            <tr>

                <td>
                    <?php echo $student->RId; ?></td>
                <td>
                    <?php echo $student->RoleTitle; ?></td>
                <td>
                    <?php echo $student->Description; ?></td>

                <td><a href="viewupdate/<?php echo $student->RId ?>">Edit</a>
                    <a onclick="userdeleteConfirm('delete/<?php echo $student->RId ?>'); return false;" href="delete/<?php echo $student->RId ?>">Delete</a>
                </td>
            </tr>

            <?php } ?>



        </table>
    </div>

</div>
<?php $this->load->view('footer'); ?>