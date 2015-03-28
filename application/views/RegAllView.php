<?php $this->load->view('header'); ?>
<script>
    $().ready(function() {
        // validate the comment form when it is submitted


        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                username: "required",
                username: {
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
                fname: {
                    required: true,
                    minlength: 4
                },

                status: {
                    required: true
                },
                rId: {
                    required: true
                }

            },
            messages: {
                username: "Please enter your Username",

                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
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
                email: "Please enter a valid email address",
                status: "Select status must.",
                rId: "Select Role must."


            }, submitHandler: function insertUser() {
                        
                         $.ajax({
                            url: "<?php echo $base; ?>/index.php/RegController/insertUser",
                            data: GetFormValues('signupForm'),
                            type: "POST",
                            success: function(data) {
                                
                                    alert(JSON.parse(data).msg);
                                    getUsersList();
                                
                                }, error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                            }); 
                      
                      return false;
                }
        });
        
        
        
     
    });
    
    
 
    
    
function getUsersList() {



    $.ajax({
        url: "<?php echo $base; ?>/index.php/RegController/getUsersList",
        success: function(data) {
            
            var Status = "Inactive";

            if ($("#ContentUpdate").val() == 1) {
                
                var TableData = '<tr><th style="width: 10%;">User ID</th><th>Username</th><th>Full Name</th><th>Email</th><th>Role</th><th style="width: 10%;">Status</th><th>Creation Date</th><th>Date Modified</th><th style="width: 10%;">Action</th></tr>';
                
                for (var i = 0; i < JSON.parse(data).length; i++) {

                    if(JSON.parse(data)[i].Status == 1){
                        Status = "Active";
                    }
                    TableData += '<tr><td>' + JSON.parse(data)[i].UId + '</td><td>' + JSON.parse(data)[i].Username + '</td><td>' + JSON.parse(data)[i].Full_name + '</td><td>' + JSON.parse(data)[i].Email + '</td><td>' + JSON.parse(data)[i].RoleTitle + '</td><td>' + Status + '</td><td>' + JSON.parse(data)[i].CreationDate + '</td><td>' + JSON.parse(data)[i].DateModified + '</td><td><a href="viewupdate/' + JSON.parse(data)[i].UId + '">Edit</a><a style="display:none" onclick="userdeleteConfirm(\'delete/' + JSON.parse(data)[i].UId + '\'); return false;" href="">Delete</a></td></tr>';

                }
                
            } else {
                
                var TableData = '<tr><th style="width: 10%;">User ID</th><th>Username</th><th>Full Name</th><th>Email</th><th>Role</th><th style="width: 10%;">Status</th><th>Creation Date</th><th>Date Modified</th></tr>';

                for (var i = 0; i < JSON.parse(data).length; i++) {
                    
                    if(JSON.parse(data)[i].Status == 1){
                        Status = "Active";
                    }

                    TableData += '<tr><td>' + JSON.parse(data)[i].UId + '</td><td>' + JSON.parse(data)[i].Username + '</td><td>' + JSON.parse(data)[i].Full_name + '</td><td>' + JSON.parse(data)[i].Email + '</td><td>' + JSON.parse(data)[i].RoleTitle + '</td><td>' + Status + '</td><td>' + JSON.parse(data)[i].CreationDate + '</td><td>' + JSON.parse(data)[i].DateModified + '</td></tr>';

                }

            }

            $(".Grid table").html(TableData);

            //alert("Submitted successfully");

        },
        error: function() {

            alert("There is error while fetch");

        }
    });


}

getUsersList();

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

    <?php if ($this->SubMenus->ContentAdd == 1) { ?>
    <div class="FormFields">

        <form id="signupForm" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Username :</td>
                    <td>
                        <input class="myfield" placeholder="" name="username" type="text" />
                    </td>

                    <td>Email :</td>
                    <td>
                        <input class="myfield" placeholder="" name="email" type="email" />

                    </td>


                </tr>

                <tr>
                    <td>Full Name :</td>
                    <td>
                        <input class="myfield" placeholder="" name="fname" type="text" />
                    </td>
                    <td>Password :</td>
                    <td>
                        <input class="myfield" id="password" placeholder="" name="password" type="password" />
                    </td>


                </tr>

                <tr>


                    <td>Confirm Password :</td>
                    <td>
                        <input class="myfield" placeholder="" name="conf" type="password" />
                    </td>
                    <td>Role :</td>
                    <td>
                        <select class="myfield" id="rId" name="rId">
                            <option value>Select</option>
                            <?php foreach ($role_list as $row) { ?>
                            <option value="<?php echo $row->RId; ?>">
                                <?php echo $row->RoleTitle; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </td>

                </tr>



                <tr>


                    <td>Status :</td>
                    <td>
                        <select class="myfield" name="status" id="status">
                            <option value>Select</option>
                            <option value="1">Active</option>
                            <option value="0"> Inactive</option>
                        </select>
                    </td>

                </tr>

                <tr>
                    <td colspan="4">
                        <input class="button medium BtnBlack" type="submit" name="submit" value="Add User" />
                    </td>
                </tr>




            </table>

        </form>

    </div>

    <?php } ?>
    <?php if ($this->SubMenus->ContentView == 1) { ?>
    <div class="Grid">

        <table cellspacing="0" cellpadding="10">

        </table>

    </div>
    <?php } ?>
    
</div>



<?php $this->load->view('footer'); ?>