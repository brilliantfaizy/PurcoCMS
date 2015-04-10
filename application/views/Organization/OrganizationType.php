<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
	   
       $('#btnupdateparty').hide();
		$("#signupForm").validate({
		   rules: {
				key1: {
					required: true	
				},
			
                description:{
                    required:true
                   
                }
			},
			messages: {
			
				key1: {
					required: "Please add key!!"
				
				},
				description: {
					required: "Please enter a Description"
				}
			},submitHandler: function addtype()
               {
                    $.ajax({
                            url: "<?php echo $base; ?>/index.php/OrganizationController/AddOrganizationType",
                            data: GetFormValues('signupForm'),
                            type: "POST",
                            success: function(data) {
                                    $("#partyadd").html(JSON.parse(data).msg);  
                                    $("#partyadd").show();
                                    $('#btnaddparty').hide();
                                    $('#btnupdateparty').hide();
                                    setTimeout(function() {
                                    $("#key1").val('');
                                    $("#description").val('');
                                    $("#partyadd").hide();
                                    $('#btnaddparty').show();  
                                    }, 2000);
                                    getpartytypesall();
                                    // getnotesall();
                                    return false;         
                                }, error: function(data){
                                   
                                }
                            }); 
                      
                      return false;
               }
		});
        
        
	});
     
    
     function updatepartytype(){
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/OrganizationController/updateOrganizationType",    
                     data: GetFormValues('signupForm'),
                    type: "POST",
                    success: function(data){
                    var myobj;
                    myobj = JSON.parse(data);
                    console.log(myobj);
                     $("#updatetype").show();  
                  $('#btnaddnote').hide();
                                    $('#btnupdateparty').hide();
                                    setTimeout(function() {
                                    $("#key1").val('');
                                    $("#description").val('');
                                    $("#updatenotes1").hide();  
                                    $('#btnaddparty').show();
                                    $("#updatetype").hide(); 
                                    }, 2000);
                     getpartytypesall();
                } , error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                     
                  
              
                });
                 return false;
                }
     
     function getpartytypesall() {
     var TableData = '<tr><th>Key</th><th>Description</th><th>Action</th></tr>';

    $.ajax({
        url: "<?php echo $base; ?>/index.php/OrganizationController/getOrganizationType",
        type:'POST',
        //data:{data},
        success: function(data) {
           for (var i = 0; i < JSON.parse(data).length; i++) {
                   TableData += '<tr><td>' + JSON.parse(data)[i].Key + '</td><td>' + JSON.parse(data)[i].Description + '</td><td><a href="#" onclick="editpartytype('+JSON.parse(data)[i].Id+'); return false;">Edit</a> <a href="" onclick="deletepartytype('+JSON.parse(data)[i].Id+'); return false;" > Delete</a></td></tr>';
        }
            $(".Grid table").html(TableData);

        },
        error: function() {

            alert("There is error while fetch");

        }
    });
}
function viewadd()
{
    $('#signupForm').show();
    $("#key1").val('');
    $("#description").val('');
    $('#btnaddparty').show(); 
    $('#btnupdateparty').hide(); 
    
}
function editpartytype(id){
                 $('#signupForm').show();
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/OrganizationController/editOrganizationType",    
                     data: {id: id},
                    type: "POST",
                    success: function(data){
                    var myobj;
                      myobj = JSON.parse(data);
                      document.getElementById("key1").value=myobj[0].Key;
                      document.getElementById("description").value=myobj[0].Description; 
                      document.getElementById("typeId").value=myobj[0].Id; 
                      console.log(myobj[0].Id);
                      $('#btnaddparty').hide();
                      $('#btnupdateparty').show();
                      
                      }
                     
                    });
             
                
                }
                
getpartytypesall();

function deletepartytype(id)
{
      var result = confirm("Want to delete?");
        if (result) {
           $.ajax({
          type: "GET",
          url: "<?php echo $base;?>/index.php/OrganizationController/deleteOrganizationType/"+id,
          success: function(response) {

          getpartytypesall();

       }
    });
         
        }
         

      
   
   }
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
 
                <ul>
                    <li><a class="innerMenuActive" href="#" onclick="viewadd(); return false;">Organization Type</a> </li>
                </ul>


            </div>
    <div class="FormFields" >

        <form action="" id="signupForm" method="post" style="display: none;">
          
            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Key:</td><td>
                    <input type="hidden" id="typeId" name="typeId"/>
                        <input type="text" class="myfield" name="key1" id="key1" />
                    </td>
                    <td>Description:</td><td>
                        <input type="text" class="myfield" name="description" maxlength="50"  id="description" />
                    </td>
                </tr>
                
                <tr>
                <td></td>
                <td> <span id="partyadd" style="display:none; color:#0C0">Record Added!</span>
                <span id="updatetype" style="display:none; color:#0C0">Record Updated!</span>
                
              </td>
                    <td></td>
                    <td><div id="btnaddparty">  
                    <input type="submit" class="medium button BtnBlack" name="partytype" value="Add Involved Party Type" />
                 </div>
                 <div id="btnupdateparty">  
                    <input type="button" class="medium button BtnBlack" onclick="updatepartytype(); return false;" name="updatepartytype1" value="Update Involved Party Type" />
                 </div>
                         </td>
                </tr>

            </table>
        </form>

    </div>

  
        <div class="Grid">
            <table  cellspacing="0" cellpadding="10">


            </table>
        </div>

</div>
<?php $this->load->view('footer'); ?>