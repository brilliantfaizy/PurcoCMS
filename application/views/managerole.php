<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {

        $("#signupForm").validate({


                rules: {
                    roleid: {
                        number: true,
                        required: true

                    },
                    roletitle: {
                        required: true,
                        minlength: 4
                    },
                    roledec: {
                        minlength: 8
                    }


                },
                messages: {
                    roleid: "Please must enter Role Id",
                    roleid: {
                        required: "Please must enter Role Id",
                        number: "Please enter Role Id in numberic form.",

                    },
                    roletitle: "Please enter  Role Title",
                    roletitle: {
                        required: "Please enter a Role Title",
                        minlength: "Your Role Title must consist of at least 4 characters"

                    },

                    roledec: {

                        minlength: "Role description must be at least 8 characters long"
                    }
                }, submitHandler: function insertrole() {
                    
                    $.ajax({
                        url: "<?php echo $base; ?>/index.php/RoleController/insert",
                            data: {
                                roleid: $("#roleid").val(),
                                roletitle: $("#roletitle").val(),
                                roledec: $("#roledec").val()
                            },
                            type: "POST",
                            success: function(data) {
                                
                                alert(JSON.parse(data).msg);
                                getRoleList();
                                
                                }
                            });
                            
                            
                    
                }


        });

});



function getRoleList() {
    
    var TableData = '<tr><th style="width: 10%;">Role ID</th><th style="width: 10%;">Role Title</th> <th style="width: 10%;">Description</th><th style="width: 10%;"></th></tr>';


    $.ajax({
        url: "<?php echo $base; ?>/index.php/RoleController/getRoleList",
        success: function(data) {
           
           var EditBtn = "";
           var DeleteBtn = "";

                
                for (var i = 0; i < JSON.parse(data).length; i++) {
                    
                if($("#ContentUpdate").val() == 1) {
                
                    EditBtn = "<a href=\"viewupdate\/"+JSON.parse(data)[i].RId+"\">Edit</a>";
                
                }
                
                if($("#ContentDelete").val() == 1) {
                
                    DeleteBtn = "<a href=\"delete\/"+JSON.parse(data)[i].RId+"\">Delete</a>";
                
                }


                    TableData += '<tr><td>' + JSON.parse(data)[i].RId + '</td><td>' + JSON.parse(data)[i].RoleTitle + '</td><td>' + JSON.parse(data)[i].Description + '</td><td>'+EditBtn+''+DeleteBtn+'</td></tr>';

                }
            

            $(".Grid table").html(TableData);

            //alert("Submitted successfully");

        },
        error: function() {

            alert("There is error while fetch");

        }
    });


}

getRoleList();
   
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

        <form id="signupForm" action="insert" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Role ID:</td>
                    <td>
                        <input id="roleid" class="myfield" placeholder="" name="roleid" type="text" />
                    </td>
                    <td>Role Title :</td>
                    <td>
                        <input id="roletitle" class="myfield" placeholder="" name="roletitle" type="text" />
                    </td>

                </tr>

                <tr>
                 <td>Description:</td>
                    <td>
                        <input id="roledec" class="myfield" placeholder="" name="roledec" type="text" />
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
<?php }?>

 <?php if($this->SubMenus->ContentView == 1){ ?>
    <div class="Grid">

         <table cellspacing="0" cellpadding="10">

           
        </table>
        
    </div>
    <?php }?>

</div>


<?php $this->load->view('footer'); ?>