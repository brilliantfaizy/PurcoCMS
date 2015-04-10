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
			},submitHandler: function addAdditionalInfo()
               {
                    $.ajax({
                            url: "<?php echo $base; ?>/index.php/AddotionalInfoController/AddAdditionalInfo",
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
                                    getAdditionalInfo();
                                    // getnotesall();
                                    return false;         
                                }, error: function(data){
                                   
                                }
                            }); 
                      
                      return false;
               }
		});
        
        
	});
     
    
     function updateAdditionalInfo(){
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AddotionalInfoController/updateAdditionalInfo",    
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
                     getAdditionalInfo();
                } , error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                     
                  
              
                });
                 return false;
                }
     
      function FilterAdditionalInfo(thiss){ 
        
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AddotionalInfoController/FilterAdditionalInfo",    
                    data: {filterID:$(thiss).val(),typeId:$(thiss).attr("name")},
                    type: "POST",
                    success: function(data){
                    var myobj;
                    myobj = JSON.parse(data);
                    console.log(myobj);
                    // getAdditionalInfo();
                     
                } , error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                     
                  
              
                });
                 return false;
                }
     
     function getAdditionalInfo() {
        
     
        
     var TableData = '<tr><th>Key</th><th>Description</th><th>Filter</th><th>Action</th></tr>';

    $.ajax({
        url: "<?php echo $base; ?>/index.php/AddotionalInfoController/getAdditionalInfo",
        type:'POST',
       
        success: function(data) {
          
           for (var i = 0; i<JSON.parse(data).length; i++) {
              var filterVal=JSON.parse(data)[i].Filter;
                     
              
                   TableData += '<tr><td>' + JSON.parse(data)[i].Key + '</td><td>' + JSON.parse(data)[i].Description + '</td><td><select onchange="FilterAdditionalInfo(this); return false;" class="myfield filter" name="'+JSON.parse(data)[i].Id+'"><option value="0">Select</option><option value="1">Capitalize</option><option value="2">Currency</option><option value="3">Date</option><option value="4">SSN</option><option value="5">Number</option></select></td><td><a href="#" onclick="editAdditionalInfo('+JSON.parse(data)[i].Id+'); return false;">Edit</a> <a href="" onclick="deleteAdditionalInfo('+JSON.parse(data)[i].Id+'); return false;" > Delete</a></td></tr>';
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
function editAdditionalInfo(id){
                 $('#signupForm').show();
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AddotionalInfoController/editAdditionalInfo",    
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
                
getAdditionalInfo();

function deleteAdditionalInfo(id)
{
      var result = confirm("Want to delete?");
        if (result) {
           $.ajax({
          type: "GET",
          url: "<?php echo $base;?>/index.php/AddotionalInfoController/deleteAdditionalInfo/"+id,
          success: function(response) {

          getAdditionalInfo();

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
                    <li><a class="innerMenuActive" href="#" onclick="viewadd(); return false;">Add Involved Party Additional Information</a> </li>
                </ul>


            </div>
    <div class="FormFields">

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
                    <input type="submit" class="medium button BtnBlack" name="partytype" value="Add Additional Info" />
                 </div>
                 <div id="btnupdateparty">  
                    <input type="button" class="medium button BtnBlack" onclick="updateAdditionalInfo(); return false;" name="updatepartytype1" value="Update Additional Info" />
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