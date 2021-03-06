<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
	   
       $('#btnupdateparty').hide();
		$("#signupForm").validate({
		   rules: {
				key: {
					required: true	
				},
			
                description:{
                    required:true
                   
                },
                order:{
                      required:true,
                      number:true
                }
               
			},
			messages: {
			
				key: {
					required: "Please add key!!"
				
				},
				description: {
					required: "Please enter a Description"
				},
                order: {
                    required:"Please enter an Order.",
                    number:"Use numbers only"
                }
			},submitHandler: function addJCE()
               {
                    $.ajax({
                            url: "<?php echo $base; ?>/index.php/JournalCannedController/AddJCE",
                            data: GetFormValues('signupForm'),
                            type: "POST",
                            success: function(data) {
                                    $("#partyadd").html(JSON.parse(data).msg);  
                                    $("#partyadd").show();
                                    $('#btnaddparty').hide();
                                    $('#btnupdateparty').hide();
                                    setTimeout(function() {
                                    $("#key").val('');
                                    $("#description").val('');
                                    $("#order").val('');
                                    $("#message").val('');
                                    $("#partyadd").hide();
                                    $('#btnaddparty').show();  
                                    }, 2000);
                                    getJCE();
                                    // getnotesall();
                                    return false;         
                                }, error: function(data){
                                   
                                }
                            }); 
                      
                      return false;
               }
		});
        
        
	});
     
    
     function updateJCE(){
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/JournalCannedController/updateJCE",    
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
                                    $("#key").val('');
                                    $("#description").val('');
                                    $("#order").val('');
                                    $("#message").val('');
                                    $("#updatenotes1").hide();  
                                    $('#btnaddparty').show();
                                    $("#updatetype").hide(); 
                                    }, 2000);
                     getJCE();
                } , error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                     
                  
              
                });
                 return false;
                }
     
      
     
     function getJCE() {
        
     
        
     var TableData = '<tr><th>Key</th><th>Description</th><th>Message</th><th>Order</th><th>Action</th></tr>';

    $.ajax({
        url: "<?php echo $base; ?>/index.php/JournalCannedController/getJCE",
        type:'POST',
       
        success: function(data) {
          
           for (var i = 0; i<JSON.parse(data).length; i++) {
              var filterVal=JSON.parse(data)[i].Filter;
                     
              
                   TableData += '<tr><td>' + JSON.parse(data)[i].Key + '</td><td>' + JSON.parse(data)[i].Description + '</td><td>' + JSON.parse(data)[i].Message + '</td><td>' + JSON.parse(data)[i].Order + '</td><td><a href="#" onclick="editJCE('+JSON.parse(data)[i].Id+'); return false;">Edit</a> <a href="" onclick="deleteJCE('+JSON.parse(data)[i].Id+'); return false;" > Delete</a></td></tr>';
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
    $("#key").val('');
    $("#description").val('');
    $("#order").val('');
      $("#message").val('');
    $('#btnaddparty').show(); 
    $('#btnupdateparty').hide(); 
    
}
function editJCE(id){
                 $('#signupForm').show();
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/JournalCannedController/editJCE",    
                     data: {id: id},
                    type: "POST",
                    success: function(data){
                    var myobj;
                      myobj = JSON.parse(data);
                      document.getElementById("key").value=myobj[0].Key;
                      document.getElementById("description").value=myobj[0].Description;
                      document.getElementById("order").value=myobj[0].Order; 
                      document.getElementById("message").value=myobj[0].Message; 
                      document.getElementById("typeId").value=myobj[0].Id; 
                      console.log(myobj[0].Id);
                      $('#btnaddparty').hide();
                      $('#btnupdateparty').show();
                      
                      }
                     
                    });
             
                
                }
                
getJCE();

function deleteJCE(id)
{
      var result = confirm("Want to delete?");
        if (result) {
           $.ajax({
          type: "GET",
          url: "<?php echo $base;?>/index.php/JournalCannedController/deleteJCE/"+id,
          success: function(response) {

          getJCE();

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
                    <li><a class="innerMenuActive" href="#" onclick="viewadd(); return false;">Add Journal Canned Entry</a> </li>
                </ul>


            </div>
    <div class="FormFields">

        <form action="" id="signupForm" method="post" style="display: none;">
          
            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Key:</td><td>
                    <input type="hidden" id="typeId" name="typeId"/>
                        <input type="text" class="myfield" name="key" id="key" />
                    </td>
                    <td>Description:</td><td>
                        <input type="text" class="myfield" name="description" maxlength="50"  id="description" />
                    </td>
                    
                </tr>
                 <tr>
                    <td>Viewable By:</td>
                    <td>
                        <select class="myfield" name="viewable" id="viewable" >
                        <option>Client</option>
                         <option>Purco</option>
                          <option>Everyone</option>
                        </select>
                    </td>
                 
                     <td>Message:</td>
                    <td rowspan="4">
                        <textarea  class="myfield" name="message" style="height: 107px; width: 310px;" id="message"></textarea>
                    </td>
                </tr>
                <tr>
                      <td>Order:</td>
                    <td>
                        <input type="text" class="myfield" name="order" id="order" />
                    </td>
                    
                </tr>
               
                <tr>
                <td></td> <td></td><td></td>
                    <td></td>
                   
                </tr>
                <tr>
                <td></td> <td></td><td></td>
                    <td></td>
                   
                </tr>
                <tr>
              
                <td> 
              </td>
                   <td><span id="partyadd" style="display:none; color:#0C0">Record Added!</span>
                <span id="updatetype" style="display:none; color:#0C0">Record Updated!</span></td><td></td> 
                    <td><div id="btnaddparty">  
                    <input type="submit" class="medium button BtnBlack" name="partytype" value="Add Journal Canned Entry" />
                 </div>
                 <div id="btnupdateparty">  
                    <input type="button" class="medium button BtnBlack" onclick="updateJCE(); return false;" name="updatepartytype1" value="Update Journal Canned Entry" />
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