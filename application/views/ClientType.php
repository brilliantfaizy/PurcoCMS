<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {

        $("#signupForm").validate({


                rules: {
                    key1: {
                        required: true
                        
                    },
                    description: {
                        minlength: 8
                    }


                },
                messages: {
                    key1: {
                        required: "Please enter a Key"
                        

                    },

                    description: {

                        minlength: "Client type description must be at least 8 characters long"
                    }
                }, submitHandler: function insertclienttype()  {
                        
                         $.ajax({
                            url: "<?php echo $base; ?>/index.php/ClientController/insertclienttype",
                            data: GetFormValues('signupForm'),
                            type: "POST",
                            success: function(data) {
                                
                                    alert(JSON.parse(data).msg);
                                    clearall();
                                    getclienttype();
                                    
                                
                                }, error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                            }); 
                      
                      return false;
                }


        });

});

 function clearall()
        {
            $("#key1").val('');
            $("#description").val('');
           
        
            }

function getclienttype() {
    
    var TableData = '<tr><th style="width: 10%;">Key</th><th style="width: 10%;">Description</th> <th style="width: 10%;">Action</th></tr>';


    $.ajax({
        url: "<?php echo $base; ?>/index.php/ClientController/getClientType",
        success: function(data) {
           
          console.log(data);
           var DeleteBtn = "";

                
                for (var i = 0; i < JSON.parse(data).length; i++) {
                    
              
               
                
                    DeleteBtn = "<a href=\"delete\/"+JSON.parse(data)[i].Id+"\">Delete</a>";
                
              


                    TableData += '<tr><td>' + JSON.parse(data)[i].Key + '</td><td>' + JSON.parse(data)[i].Description + '</td><td>'+DeleteBtn+'</td></tr>';

                }
            

            $(".Grid table").html(TableData);

            //alert("Submitted successfully");

        },
        error: function() {

            alert("There is error while fetch");

        }
    });


}

getclienttype();
   
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

        <?php $this->load->view('clientTabs'); ?>

    </div>
        
            <div class="FormFields">
                
                <form id="signupForm" action="" method="post">
                
                    <table class="FieldsTable" cellpadding="6">
                        
                        <tr>
                            <td>Key :</td>
                            <td><input class="myfield" placeholder="" name="key1" id="key1" type="text" /></td>
                            
                            <td>Description :</td>
                             <td><input class="myfield" placeholder="" name="description" id="description" type="text" /></td>
                        </tr>
                        
                    
                            <tr>
                           
                             <td colspan="4">  <input class="BtnBlack button medium" type="submit" style="margin: 0px;" value="Add Client Type" /></td>
                                </tr>
                        
                    </table>
                
                </form>
                
            </div>
            
            <div id="innerTabs">
        
        
        <?php $this->load->view('ClientInnerTabs'); ?>

    </div>
            
            <div class="Grid">

        <table cellspacing="0" cellpadding="10">

           
 

        </table>
    </div>
            
            </div>
            
            <?php $this->load->view('footer'); ?>