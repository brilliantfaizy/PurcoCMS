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
			},submitHandler: function addpaymentorigin()
               {
                    $.ajax({
                            url: "<?php echo $base; ?>/index.php/PaymentOriginController/Addpaymentorigin",
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
                                    getpaymentorigin();
                                    // getnotesall();
                                    return false;         
                                }, error: function(data){
                                   
                                }
                            }); 
                      
                      return false;
               }
		});
        
        
	});
     
    
     function updatepaymentorigin(){
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/PaymentOriginController/updatepaymentorigin",    
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
                     getpaymentorigin();
                } , error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                     
                  
              
                });
                 return false;
                }
     
     function getpaymentorigin() {
     var TableData = '<tr><th>Key</th><th>Description</th><th>Action</th></tr>';

    $.ajax({
        url: "<?php echo $base; ?>/index.php/PaymentOriginController/getpaymentorigin",
        type:'POST',
        //data:{data},
        success: function(data) {
           for (var i = 0; i < JSON.parse(data).length; i++) {
                   TableData += '<tr><td>' + JSON.parse(data)[i].Key + '</td><td>' + JSON.parse(data)[i].Description + '</td><td><a href="#" onclick="editpaymentorigin('+JSON.parse(data)[i].Id+'); return false;">Edit</a> <a href="" onclick="deletepaymentorigin('+JSON.parse(data)[i].Id+'); return false;" > Delete</a></td></tr>';
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
function editpaymentorigin(id){
                 $('#signupForm').show();
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/PaymentOriginController/editpaymentorigin",    
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
                
getpaymentorigin();

function deletepaymentorigin(id)
{
      var result = confirm("Want to delete?");
        if (result) {
           $.ajax({
          type: "GET",
          url: "<?php echo $base;?>/index.php/PaymentOriginController/deletepaymentorigin/"+id,
          success: function(response) {

          getpaymentorigin();

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
                    <li><a class="innerMenuActive" href="#" onclick="viewadd(); return false;">Add Payment Origin</a> </li>
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
                    <input type="submit" class="medium button BtnBlack" name="partytype" value="Add Payment Origin" />
                 </div>
                 <div id="btnupdateparty">  
                    <input type="button" class="medium button BtnBlack" onclick="updatepaymentorigin(); return false;" name="updatepartytype1" value="Update Payment Origin" />
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