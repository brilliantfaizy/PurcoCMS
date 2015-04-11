<?php $this->load->view('header'); ?>
<div id="content">

<style>
.tab-menu {
	list-style-type: none;
	overflow: hidden;
	margin: 2.5em 0 0 0;
	padding: 0;
}

.tab-menu li {
	display: inline;
	float: left;
}

.tab-menu li a {
	display: block;
	padding: 10px 18px;
	border-top: 1px solid #3C3C3C;
	border-left: 1px solid #3C3C3C;
	border-right: 1px solid #2F302F;
	color: #ffffff;
	background-color: #444444;
	text-decoration: none;
}
.tab-menu li a:hover {
	background-color: #444444;
}

.tab-menu li.active a {
	color: #222222;
	background-color: #f5f5f5;
	border-top: 1px solid #ccf;
	border-left: 1px solid #ccf;
	border-right: 1px solid #ccf;
}

.tab-menu li.active a:hover {
	color: #222222;
	background-color: #f5f5f5;
	text-decoration: none;
	cursor: default;
}

.tab-content {
	position: relative;
	width: 96%;	
	overflow: auto;
	margin-bottom: 2.5em;
	padding: 20px;
	border-left: 1px solid #ccf;
	border-bottom: 1px solid #ccf;
	background-color: #f5f5f5;
}

#tab1-menu {
	list-style-type: none;
	overflow: hidden;
	margin: 2.5em 0 0 0;
	padding: 0;
}

#tab1-menu li {
	display: inline;
	float: left;
}

#tab1-menu li a {
	display: block;
	padding: 10px 18px;
    border-top: 1px solid #9E9D9D;
    border-left: 1px solid #8C8C8C;
    border-right: 1px solid #757775;
    color: #ffffff;
    background-color: #8C8989;
	text-decoration: none;
}
#tab1-menu li a:hover {
	background-color: #8C8989;
}

#tab1-menu li.active a {
	color: #222222;
	background-color: #f5f5f5;
	border-top: 1px solid #ccf;
	border-left: 1px solid #ccf;
	border-right: 1px solid #ccf;
}

#tab1-menu li.active a:hover {
	color: #222222;
	background-color: #f5f5f5;
	text-decoration: none;
	cursor: default;
}


</style>
<script>
	$().ready(function() {
		// validate the comment form when it is submitted
	

		// validate signup form on keyup and submit
		$("#notes").validate({
			rules: {
				notesdis: "required",
				notesdis: {
					required: true,
					minlength: 10
				},
				cat: {
					required: true	
				},
			
                dis:{
                    required:true
                   
                }
			},
			
			///////////////////////
			messages: {
				notesdis: "Please enter Notes Description",
			notesdis: {
					required: "Please enter a Notes Description",
					minlength: "Your Notes Description must consist of at least 10 characters"
				},
				cat: {
					required: "Please Select Category"
				
				},
				dis: {
					required: "Please enter a Description"
					
				}
             
			},submitHandler: function addnotes()
               {
                    var descp=$("#notesdis").val();
                
                    $.ajax({
                            url: "<?php echo $base; ?>/index.php/ClientController/addNotes",
                            data: GetFormValues('notes'),
                            type: "POST",
                            success: function(data) {
                                    $("#successnotes").html(JSON.parse(data).msg);  
                                    $("#successnotes").show();
                                    $('#btnaddnote').hide();
                                    $('#btnupdatenote').hide();
                                    setTimeout(function() {
                                    $("#cat").val($("#cat option:first").val());
                                    $("#notesdis").val('');
                                    $("#dis").val('');
                                    $("#successnotes").hide();  
                                    $('#btnaddnote').show();
                                    }, 2000);
                                    
                                     getnotesall();
                                    return false;         
                                }, error: function(data){
                                    
                                    
                                    
                                    
                                    
                                }
                            }); 
                      
                      return false;
               }
		});
        
        
	});
     
	</script>
    <style>

	
	#notes label.error {
	  display: table;
      color: red;
	}
    
    #notes input.error {
	  
      border: red;
	}

	</style>
    <script>
		$(function() { $(".tabs").fwd_tabs(); });
       function insertClient() {
                        
                         $.ajax({
                            url: "<?php echo $base; ?>/index.php/ClientController/editClient",
                            data: GetFormValues('signupForm'),
                            type: "POST",
                            success: function(data) {
                                console.log(data);
                                   // alert(JSON.parse(data).msg);
                                    $("#success").show();          
                                 }, error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                            }); 
                      
                      return false;
                } 
               
                function updatecontactinfo() {
                        
                         $.ajax({
                            url: "<?php echo $base; ?>/index.php/ClientController/addclientinfo",
                            data: GetFormValues('addcontactinfo'),
                            type: "POST",
                            success: function(data) {
                                console.log(data);
                                   // alert(JSON.parse(data).msg);
                                    $("#success2").show();
                                   
                                
                                }, error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                            }); 
                      
                      return false;
                } 
                function updatecontactinfo1() {
                        
                         $.ajax({
                            url: "<?php echo $base; ?>/index.php/ClientController/addclientinfo",
                            data: GetFormValues('addcontactinfo1'),
                            type: "POST",
                            success: function(data) {
                                console.log(data);
                                   
                                    $("#success3").show();
                                 
                                
                                }, error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                            }); 
                      
                      return false;
                } 
               
               function addcontact()
               {
                
                   
                    $.ajax({
                            url: "<?php echo $base; ?>/index.php/ClientController/addnewcontact",
                            data: GetFormValues('contactnew'),
                            type: "POST",
                            success: function(data) {
                                console.log(data);
                                    $("#success1").show();          
                                }, error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                            }); 
                      
                      return false;
               }
               
         
               function deleteclientdata()
               {
                    var contact_id = $("#Contact_id").val();
                    var add_id = $("#add_Id").val();
                    var client_id = $("#client_id").val();
                  console.log(contact_id);

               }
              
              
                function dropdown(){
                 
                   var dropdownVal = $("#contacts option:selected").val();
              
                 console.log(dropdownVal);
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/ClientController/buildDropCities",    
                     data: {id: dropdownVal},
                    type: "POST",
                    success: function(data){
                    console.log(data);
                    var myobj;
                    
                      myobj = JSON.parse(data);
                     console.log(myobj);
                         
                           $("#contactform1").hide();
                       $("#contactform").hide();
                         $("#addcontact").show();
                      console.log(myobj);
                       document.getElementById("title").value=myobj.data[0]['Client_name'];
                       document.getElementById("address1").value=myobj.data[0]['Address1'];
                       document.getElementById("dphn").value=myobj.data[0]['Phone_no'];
                       document.getElementById("fax").value=myobj.data[0]['Fax_no'];  
                       document.getElementById("address2").value=myobj.data[0]['Address2'];
                       document.getElementById("mobile").value=myobj.data[0]['Mobile'];
                       document.getElementById("state").value=myobj.data[0]['State'];
                       document.getElementById("email").value=myobj.data[0]['Email_address']; 
                       document.getElementById("zip").value=myobj.data[0]['Postal_code'];   
                       document.getElementById("city").value=myobj.data[0]['City']; 
                       document.getElementById("Contact_id").value=myobj.data[0]['ContactId'];
                       document.getElementById("Cname").value=myobj.data[0]['FirstName']+' '+myobj.data[0]['LastName'];                        
                           
                       document.getElementById("code").value=myobj.data[0]['Client_code'];
                       document.getElementById("client_id").value=myobj.data[0]['Id'];
                       document.getElementById("add_Id").value=myobj.data[0]['Address_Id'];
                       document.getElementById("Contact_id").value=myobj.data[0]['ContactId'];
                         
                      }
                     
                    });
               
                
                }
                
                 function editnotes(id){
                 
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/ClientController/editnotes",    
                     data: {id: id},
                    type: "POST",
                    success: function(data){
                   
                    var myobj;
                    
                      myobj = JSON.parse(data);
                    
                      document.getElementById("dis").value=myobj[0].Notes_type_key;
                      document.getElementById("notesdis").value=myobj[0].Notes_type_description;  
                      var optin=myobj[0].category;
		              $('#cat').val(optin);
                      document.getElementById("noteId").value=myobj[0].Id;
                      console.log(myobj[0].Id);
                      $('#btnaddnote').hide();
                      $('#btnupdatenote').show();
                      
                      }
                     
                    });
             
                
                }
                
                  function updatenotes(){
                 
                
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/ClientController/updatenotes",    
                     data: GetFormValues('notes'),
                    type: "POST",
                    success: function(data){
                   
                    var myobj;
                    myobj = JSON.parse(data);
                    console.log(myobj);
                     $("#updatenotes").show();  
                  $('#btnaddnote').hide();
                   //$("#updatenotes").hide();  
                                    $('#btnupdatenote').hide();
                                    setTimeout(function() {
                                    $("#cat").val($("#cat option:first").val());
                                     $("#notesdis").val('');
                                      $("#dis").val('');
                                    $("#updatenotes").hide();  
                                     $('#btnaddnote').show();
                                    // getnotes();  
                                    }, 2000);
                    
                } , error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                     
                  
              
                });
                 return false;
                }
             function showcontact()
              {
                    $("#contactform1").hide();
                    $("#contactform").show();
                    $("#addcontact").hide();
            }
            function contactInformation()
            {
                 $("#contactform1").show();
                 $("#contactform").hide();
                 $("#addcontact").hide();
                   
            }
                $(document).ready(function() {
                $("#contactform1").show();
                $("#contactform").hide();
                $("#addcontact").hide();
                $('#btnupdatenote').hide();
                $("#locationone").hide();
                getnotesall(); 
                getresources();  
   $("#journal").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo $base; ?>/index.php/ClientController/do_upload",
            type: "POST",
            data:  new FormData(this),
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
                 $('#journalmsg').show();
                 setTimeout(function() {
                                    $("#general").val($("#cat option:first").val());
                                     $("#editor").val('');
                                     $("#userImage").val('');
                                    $("#journalmsg").hide();  
                                      
                                    }, 2000);
            },
            error: function() 
            {
            }           
       });
    })); 
    
    
    
   ////////////////// 
    $("#resources").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo $base; ?>/index.php/ClientController/addclientResources",
            type: "POST",
            data:  new FormData(this),
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
                 $('#resourcemsg').show();
                 setTimeout(function() {
                                    $("#Rtype").val('');
                                     $("#Rname").val('');
                                    $("#resourcemsg").hide();  
                                       $("#Rfile").val('');
                                    }, 2000);
                                    getresources();
            },
            error: function() 
            {
            }           
       });
    }));
  
   
}); 
        
        
function getnotesall() {
    var TableData;
    $.ajax({
        url: "<?php echo $base; ?>/index.php/ClientController/getnotesAll",
        type:'POST',
        data:{code:$("#code").val()},
        success: function(data) {
           for (var i = 0; i < JSON.parse(data).length; i++) {
                 
                
                   TableData += '<tr><td>' + JSON.parse(data)[i].Notes_type_key + '</td><td><td><td>' + JSON.parse(data)[i].LastModifiedDate + '</td><td>' + JSON.parse(data)[i].Editor+ '</td><td><a href="#" onclick="editnotes('+JSON.parse(data)[i].Id+'); return false;">Edit</a></td></tr>';
        }
            $(".Grid table").html(TableData);

        },
        error: function() {

            alert("There is error while fetch");

        }
    });


}

function innerDivShow()
{
    	$("#innerdiv").show();
        	$("#Adclient").hide();
}

function showinnerDiv()
{
    $("#innerdiv").hide();
   $("#Adclient").show();
}
function showLocationDiv()
{
	$("#locationone").show();
    
}

function getresources() {
    var TableData;
    $.ajax({
        url: "<?php echo $base; ?>/index.php/ClientController/getresources",
        type:'POST',
        data:{code:$("#code").val()},
        success: function(data) {
           for (var i = 0; i < JSON.parse(data).length; i++) {
                 
                
                   TableData += '<tr><td>' + JSON.parse(data)[i].Type + '</td><td><a href="' + JSON.parse(data)[i].Filepath+ '">' + JSON.parse(data)[i].File + '</a></td><td>' + JSON.parse(data)[i].Rname + '</td></tr>';
        }
            $(".Grid11 table").html(TableData);

        },
        error: function() {

            alert("There is error while fetch");

        }
    });


}
   
            
	</script>
  
     <script src="<?php echo "$base/jquery.fwd_tabs.js"?>"></script>
     <div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

    </div>
 <?php foreach($query as $row) { ?>
    <div class="FormFields">
   
        <form action="" id="" method="post">

            <table class="FieldsTable" cellpadding="6">
                <tr>
                <td>Name:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="clientname" value="<?php echo $row->Client_name;?>"  />
                  </td>
                
                <td>Code:</td>
                <td> 
                 <input  placeholder=""  type="hidden" name="code" id="code" value="<?php echo $row->Client_code;?>" />
                 <input class="myfield" placeholder=""  type="text" value="<?php echo $row->Client_code;?>" disabled="" />
                  </td>
                </tr>
                <tr>
                <td>Contract Date:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="contractdate" value=""  /></td>
                
                <td>Type:</td>
                <td><select name="type" id="type" class="myfield">
              
                              <option value>Select</option>
                                <?php foreach($ctype as $rtype){
                                    
                                        if($row->Client_type == $rtype->Key){    
                                    
                                    ?>
                                
                                
                                <option value="<?php  echo $rtype->Id?>" selected><?php  echo $rtype->Key?></option>
                                
                                <?php } else { ?>
                                
                                <option value="<?php  echo $rtype->Id?>" ><?php  echo $rtype->Key?></option>
                                
                                <?php } 
                                
                                }?>
                                
                                
                                </select> </td>
                </tr>
                 <tr>
                <td>Status:</td>
                <td><select name="status" id="status" class="myfield">
                <option value>Select</option>
                            <?php
                                
                                $active = "<option value=\"1\" selected>Active</option><option value=\"0\">Inactive</option><option value=\"3\" >Lead</option>";
                                $inactive = "<option value=\"1\">Active</option><option value=\"0\" selected>Inactive</option><option value=\"3\" >Lead</option>";
                                $lead = "<option value=\"1\">Active</option><option value=\"0\" >Inactive</option><option value=\"3\" selected>Lead</option>";
                               
                                 
                                 if($row->Client_status == 1){
                                    
                                   echo $active;
                                 
                                 } 
                                  else  if($row->Client_status == 0) {
                                    
                                      echo $inactive;
                                  } 
                                  else  if($row->Client_status == 3){
                                    echo $lead;
                                  }
                            
                             ?></select></td>
                
                <td>Website:</td>
                <td> <input class="myfield" placeholder=""  type="text" name="website" value="<?php echo $row->Client_website;?>"  /></td>
                </tr>
                 <tr>
                <td>Priority:</td>
                <td><select name="priority" id="priority" class="myfield">
                <option value>Select</option>
                            <?php
                                
                                $one = "<option value=\"1\" selected>1 - Hot</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\" >3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\" >5 - Medium</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\" >7</option>
                                <option value=\"8\">8</option>
                                 <option value=\"9\">9 - Cold</option>";
                               $two = "<option value=\"1\" >1 - Hot</option>
                                <option value=\"2\" selected>2</option>
                                <option value=\"3\" >3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\" >5 - Medium</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\" >7</option>
                                <option value=\"8\">8</option>
                                 <option value=\"9\">9 - Cold</option>";
                                 $three = "<option value=\"1\" >1 - Hot</option>
                                <option value=\"2\">2</option>
                                 <option value=\"3\" selected >3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\" >5 - Medium</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\" >7</option>
                                <option value=\"8\">8</option>
                                 <option value=\"9\">9 - Cold</option>";
                                 $four = "<option value=\"1\" >1 - Hot</option>
                                <option value=\"2\">2</option>
                                 <option value=\"3\"  >3</option>
                                <option value=\"4\" selected>4</option>
                                <option value=\"5\" >5 - Medium</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\" >7</option>
                                <option value=\"8\">8</option>
                                 <option value=\"9\">9 - Cold</option>";
                                 $five = "<option value=\"1\" >1 - Hot</option>
                                <option value=\"2\">2</option>
                                 <option value=\"3\"  >3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\" selected>5 - Medium</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\" >7</option>
                                <option value=\"8\">8</option>
                                 <option value=\"9\">9 - Cold</option>";
                                 $six = "<option value=\"1\" >1 - Hot</option>
                                <option value=\"2\">2</option>
                                 <option value=\"3\"  >3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\" >5 - Medium</option>
                                <option value=\"6\" selected>6</option>
                                <option value=\"7\" >7</option>
                                <option value=\"8\">8</option>
                                 <option value=\"9\">9 - Cold</option>";
                                 $seven = "<option value=\"1\" >1 - Hot</option>
                                <option value=\"2\">2</option>
                                 <option value=\"3\"  >3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\" >5 - Medium</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\" selected>7</option>
                                <option value=\"8\">8</option>
                                 <option value=\"9\">9 - Cold</option>";
                                 $eight = "<option value=\"1\" >1 - Hot</option>
                                <option value=\"2\">2</option>
                                 <option value=\"3\"  >3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\" >5 - Medium</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\" >7</option>
                                <option value=\"8\" selected>8</option>
                                 <option value=\"9\">9 - Cold</option>";
                                 $nine = "<option value=\"1\" >1 - Hot</option>
                                <option value=\"2\">2</option>
                                 <option value=\"3\"  >3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\" >5 - Medium</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\" >7</option>
                                <option value=\"8\">8</option>
                                 <option value=\"9\" selected>9 - Cold</option>";
                                 
                                 
                                 if($row->Client_priority == 1){
                                    
                                   echo $one;
                                 } 
                                  else  if($row->Client_priority == 2) {
                                    
                                      echo $two;
                                  } 
                                   else  if($row->Client_priority == 3) {
                                    
                                     echo $three;
                                  } 
                                   else  if($row->Client_priority == 4) {
                                    
                                      echo $four;
                                  } 
                                   else  if($row->Client_priority == 5) {
                                    
                                     echo $five;
                                  } 
                                   else  if($row->Client_priority == 6) {
                                    
                                      echo $six;
                                  } 
                                   else  if($row->Client_priority == 7) {
                                    
                                       echo $seven;
                                  } 
                                   else  if($row->Client_priority == 8) {
                                    
                                      echo $eight;
                                  } 
                                  else  if($row->Client_priority == 9){
                                    echo $nine;
                                  }
                            
                             ?>
                </select></td>
                
                <td>Fleet Size:</td>
                <td> <input class="myfield" placeholder=""  type="text" name="fleetsize" value="<?php echo $row->Client_fleet_size;?>"  /></td>
                </tr>
            </table>
        </form>

    </div>

  <div class="tabs">
       <ul class="tab-menu">
			<li><a href="#tab-1">General</a></li>
			<li><a href="#tab-2">Client Contacts</a></li>
			<li><a href="#tab-3">Notes</a></li>
  	        <li><a href="#tab-4">Journal</a></li>
			<li><a href="#tab-5">Letters</a></li>
			<li><a href="#tab-6">Resource</a></li>
  	       <li><a href="#tab-7">History</a></li>
		</ul>
        
        	<div class="tab-content" id="tab-1">
             <div class="FormFields">

        <form action="" id="signupForm" method="post">
			<table class="FieldsTable" cellpadding="6">
                <tr>
                <td>Display Name:</td>
                <td>
                 <input  placeholder=""  type="hidden" name="code" id="code1" value="<?php echo $row->Client_code;?>" />
                  <input class="myfield" placeholder=""  type="text" name="displayclientname" value="<?php echo $row->FirstName;?>"  />
                  </td>
                    </tr>
                
                 <tr>
                 <td>Employee Contact:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="employeecontact" value="<?php echo $row->Client_employee_contact;?>"  /></td>
                </tr>
                <tr>
                <td></td></tr>
                 <tr>
                <td></td></tr>
                 <tr>
                <th colspan="4">Mailing Address</th>
                </tr>
                 <tr>
                 <td>Line 1:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="address1" value="<?php echo $row->Address1;?>"  /></td>
                </tr>
                 <tr>
                 <td>Line 2:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="address2" value="<?php echo $row->Address2;?>"  /></td>
               </tr>
                 <tr>
                 <td>City:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="city" value="<?php echo $row->City;?>"  /></td>
                </tr>
                 <tr>
                 <td>State:</td>
                <td> <select name="state" id="state" class="myfield"> <option value>Select</option>
                                <?php foreach($state as $rstate){
                                    
                                        if($row->State == $rstate->State){    
                                    
                                    ?>
                                
                                
                                <option value="<?php  echo $rstate->Id?>" selected><?php  echo $rstate->State?></option>
                                
                                <?php } else { ?>
                                
                                <option value="<?php  echo $rstate->Id?>" ><?php  echo $rstate->State?></option>
                                
                                <?php } 
                                
                                }?></select> </td>
                </tr>
                 <tr>
                 <td>Zip:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="zip" value="<?php echo $row->Postal_code;?>"  /></td>
                </tr>
                 <tr>
                 <td>Phone No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="phone" value="<?php echo $row->Phone_no;?>"  /></td>
               </tr>
                 <tr>
                 <td>Fax No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="fax" value="<?php echo $row->Fax_no;?>"  /></td>
                </tr>
                <tr><td> <span id="success" style="display:none; color:#0C0">All the records are Updated!</span></td><td><input type="submit" name="btncontact" onclick="insertClient(); return false;" class="BtnBlack medium button" value="Update" /></td></tr>
            </table>
			</form>

    </div>
		</div>
		<div class="tab-content" id="tab-2">
		
		 <div class="FormFields">
<div style="width:159px">
      
			<table class="FieldsTable" cellpadding="6">             
                <tr>
                <td><a href="javascript: showcontact();">Add contact</a></td>
                <td>
                 <input  placeholder=""  type="hidden" name="code" value="<?php echo $row->Client_code;?>" />
                 <input  placeholder=""  type="hidden" name="contactid" value="<?php echo $row->ContactId;?>" />
                    </td>
                    </tr>
                    <tr> <td><select class="myfield" id="contacts" style="width:128px;" name="contacts" onchange="dropdown();">
                 <option>Select</option>
                 <?php  foreach($contact as $cname){?>
               
                 <option value="<?php echo $cname->ContactId;?>"><?php echo $cname->Client_name;?></option>
                 <?php }?>
               </select></td></tr>
                    </table>
                   
                </div>
                <div><table class="FieldsTable" cellpadding="6">
                <tr><td><a  href="javascript: contactInformation();">[Contact Information]</a></td>
                    <td><a href="">[Sysytem Account] </a> 
                    <a href="">[Permission]</a>
                    <a  onclick="deleteclientdata(); return false;" href="#"> [Delete Account]</a></td></tr>
                </table></div>
                 <div style="margin: 3% 0px 0px 10%;" id="addcontact">
                <form action="" id="addcontactinfo" method="post">
			<table class="FieldsTable" cellpadding="6">
                 <tr>
                 
                <td></td>
                <td>  <input  placeholder=""  type="hidden" name="client_id" id="client_id" value="" />
                      <input  placeholder=""  type="hidden" name="code" id="code" value="" /> 
                      <input  placeholder=""  type="hidden" name="add_Id" id="add_Id" value="" />
                      <input  placeholder=""  type="hidden" name="Contact_id" value="" id="Contact_id" />  </td>
                 <td>Title:</td>
                <td>  <input class="myfield" placeholder=""   type="text" name="title" id="title" value=""  /></td>
               <td><a href="">Address</a></td>
                <td>(Mailing) </td>
                
                </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Name:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="Cname" id="Cname" value=""  /></td>
               <td>Line 1:</td>
                <td><input class="myfield" placeholder=""  type="text" name="address1" id="address1" value=""  /></td>
                
             
                
                
                  </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Day Phone:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="dphn" id="dphn" value=""  /></td>
               <td>Line 2:</td>
                <td><input class="myfield" placeholder=""  type="text" name="address2" id="address2" value=""  /></td>
                
                </tr>
                
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Mobile No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="mobile" id="mobile" value=""  /></td>
               <td>City:</td>
                <td><input class="myfield" placeholder=""  type="text" name="city" id="city" value=""  /></td>
                
                </tr>
                
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Fax No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="fax" id="fax" value=""  /></td>
               <td>State:</td>
                <td><select class="myfield" name="state" id="state"><option>Select</option>
                <?php foreach($state as $rstate){
                                    
                                        if($row->State_full == $rstate->State_full){    
                                    
                                    ?>
                                
                                
                                <option value="<?php  echo $rstate->Id?>" selected><?php  echo $rstate->State_full?></option>
                                
                                <?php } else { ?>
                                
                                <option value="<?php  echo $rstate->Id?>" ><?php  echo $rstate->State_full?></option>
                                
                                <?php } 
                                
                                }?></select></td>
                
                </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Email Address:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="email" id="email" value=""  /></td>
               <td>Zip:</td>
                <td><input class="myfield" placeholder=""  type="text" name="zip" id="zip" value=""  /></td>
                
                </tr>
               
               <tr>
               <td></td>
               <td></td>
                 <td></td>
               <td></td>
                 <td> </td>
               <td>
               <span id="success2" style="display:none; color:#0C0">All the records are Updated!</span>
              
               
               <input type="submit" name="updateinfo" class="button BtnBlack medium" onclick="updatecontactinfo(); return false;" value="Update"/></td>
               </tr>
                 
                  </table>
			</form>
            </div>
         <div style="margin: 3% 0px 0px 10%;" id="contactform1">
                <form action="" id="addcontactinfo1" method="post">
                <?php foreach($cntctDetails as $details){?>
			<table class="FieldsTable" cellpadding="6">
                 <tr>
                <td></td>
                    <td>  <input  placeholder=""  type="hidden"  name="client_id" value="<?php echo $row->Id;?>" />
                    <input  placeholder=""  type="hidden" name="code"  value="<?php echo $row->Client_code;?>" /> 
                    <input  placeholder=""  type="hidden" name="add_Id"  value="<?php echo $row->Address_Id;?>" />
                   <input  placeholder=""  type="hidden" name="Contact_id" value="<?php echo $row->ContactId;?>"  />  </td>
                 <td>Title:</td>
                <td>  <input class="myfield" placeholder=""   type="text" name="title" id="title" value="<?php echo $details->Client_name;?>"  /></td>
               <td><a href="">Address</a></td>
                <td>(Mailing) </td>
                
                </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Name:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="Cname" id="Cname" value="<?php echo $details->FirstName;?>"  /></td>
               <td>Line 1:</td>
                <td><input class="myfield" placeholder=""  type="text" name="address1" id="address1" value="<?php echo $details->Address1;?>"  /></td>
                
             
                
                
                  </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Day Phone:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="dphn" id="dphn" value="<?php echo $details->Phone_no;?>"  /></td>
               <td>Line 2:</td>
                <td><input class="myfield" placeholder=""  type="text" name="address2" id="address2" value="<?php echo $details->Address2;?>"  /></td>
                
                </tr>
                
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Mobile No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="mobile" id="mobile" value="<?php echo $details->Mobile;?>"  /></td>
               <td>City:</td>
                <td><input class="myfield" placeholder=""  type="text" name="city" id="city" value="<?php echo $details->City;?>"  /></td>
                
                </tr>
                
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Fax No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="fax" id="fax" value="<?php echo $details->Fax_no;?>"  /></td>
               <td>State:</td>
                <td><select class="myfield" name="state" id="state"><option>Select</option>
                <?php foreach($state as $rstate){
                                    
                                        if($row->State_full == $rstate->State_full){    
                                    
                                    ?>
                                
                                
                                <option value="<?php  echo $rstate->Id?>" selected><?php  echo $rstate->State_full?></option>
                                
                                <?php } else { ?>
                                
                                <option value="<?php  echo $rstate->Id?>" ><?php  echo $rstate->State_full?></option>
                                
                                <?php } 
                                
                                }?></select></td>
                
                </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Email Address:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="email" id="email" value="<?php echo $details->Email_address;?>"  /></td>
               <td>Zip:</td>
                <td><input class="myfield" placeholder=""  type="text" name="zip" id="zip" value="<?php echo $details->Postal_code;?>"  /></td>
                
                </tr>
            
           
            <tr>
               <td></td>
               <td></td>
                 <td></td>
               <td></td>
                 <td> </td>
               <td>
               <span id="success3" style="display:none; color:#0C0">All the records are Updated!</span>
               <input type="submit" name="updateinfo" class="button BtnBlack medium" onclick="updatecontactinfo1(); return false;" value="Update"/></td>
               </tr>
            
                  </table>
                  <?php }?>
			</form>
            </div>
                <div style="margin: 3% 0px 0px 10%;" id="contactform">
                <form action="" id="contactnew" method="post">
			<table class="FieldsTable" cellpadding="6">
                 <tr>
                <td></td>
                    <td> </td>
                 <td>Title:</td>
                <td>  <input  type="hidden" name="code" id="code" value="<?php echo $row->Client_code;?>" />
                <input class="myfield" placeholder=""   type="text" name="title"  value="" ; /></td>
               <td><a href="">Address</a></td>
                <td>(Mailing)</td>
                
                </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Name:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="Cname"  value=""  /></td>
               <td>Line 1:</td>
                <td><input class="myfield" placeholder=""  type="text" name="address1"  value=""  /></td>
                
             
                
                
                  </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Day Phone:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="dphn"  value=""  /></td>
               <td>Line 2:</td>
                <td><input class="myfield" placeholder=""  type="text" name="address2"  value=""  /></td>
                
                </tr>
                
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Mobile No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="mobile"  value=""  /></td>
               <td>City:</td>
                <td><input class="myfield" placeholder=""  type="text" name="city"  value=""  /></td>
                
                </tr>
                
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Fax No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="fax"  value=""  /></td>
               <td>State:</td>
                <td><select class="myfield" name="state" id="state" ><option value>Select</option>
                <?php foreach($state as $row1){?>
                            <option value="<?php  echo $row1->Id?>">
                                <?php echo $row1->State_full?></option>
                            <?php }?></select></td>
                
                </tr>
                 <tr>
                 <td></td>
                    <td></td>
                 <td>Email Address:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="email"  value=""  /></td>
               <td>Zip:</td>
                <td><input class="myfield" placeholder=""  type="text" name="zip"  value=""  /></td>
                
                </tr>
               <tr><td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
                <span id="success1" style="display:none; color:#0C0">All the records are Updated!</span><td>
               <input type="submit" name="submit" class="BtnBlack medium button" onclick="addcontact(); return false;" value="Add Contact"/></td></tr>
               
                 
                  </table>
			</form>
            </div>

    </div>
		</div>
        <div class="tab-content" id="tab-3">
        <div class="FormFields">
        <form action="" id="notes" method="post" >
		<table cellspacing="10" cellpadding="3"  >
  <tr>
    <td style="width:100;">Discription:<input type="hidden" name="noteId" id="noteId" /></td>
    <td style="width:410;"> <input type="text" id="dis" name="dis" class="myfield"/>
     <input  placeholder=""  type="hidden" name="code"  value="<?php  echo $row->Client_code;?>" /></td>
    <td><span style="float:left">Non-Claim Viewable Notes:</span> <a href="#" class=""> Shown</a></td>
    
  </tr> 
  <tr>
    <td>Category:</td>
    <td><select name="cat" id="cat" class="myfield"> 
    <option value="General Notes">General Notes</option>
    <option value="Message only">Message only</option>
    <option value="Admin">Admin</option>
    <option value="Full permission">Full permission</option>
    <option value="All permission">All permission</option>
    <option value="Employee">Employee</option>
    <option value="Marketing">Marketing</option>
    </select></td>
    <td>Show in Claim: <input type="checkbox" name="claim" id="checkbox"/></td>
  </tr>
  
  <tr>
  <td colspan="3">
  

		<textarea cols="100"  name="notesdis" id="notesdis" rows="10" ></textarea>
  
 
  </td>       
  </tr>
  
  <tr>
  <td> <span id="successnotes" style="display:none; color:#0C0">Notes added...</span>
  <span id="updatenotes" style="display:none; color:#0C0">All the records are Updated!</span></td>
  <td colspan="2">
  <div id="btnaddnote">
  <input type="submit" onclick="addnotes(); return false;" class="button BtnBlack medium" name="addnote" id="addnote" value="Add Notes"/>
  </div>
  <div id="btnupdatenote">
   <input type="submit" onclick="updatenotes(); return false;" class="button BtnBlack medium" name="editnote" id="editnote" value="Update Notes"/>
 
  </div>
  </td>
  </tr>
  
  
</table>
<div class="Grid" >
<table cellspacing="0" cellpadding="10">

          
 

        </table>
     
</form>
 
    </div>
</div>
			
		</div>
        <div class="tab-content" id="tab-4">
			
		
			<div class="FormFields">
            <form action="../../../do_upload" method="post" id="journal" enctype="multipart/form-data">
            <div>
            <table cellspacing="10" cellpadding="10">
            <tr>
            <td>Date:</td>
             <input  placeholder=""  type="hidden" name="code"  value="<?php  echo $row->Client_code;?>" /><td>
            <input type="text" class="myfield" name="date" id="date" value="<?php echo date("Y-m-d"); ?>" disabled=""/></td>
            </tr>
            <tr>
            <td>Time:</td>
            <td><input type="text" class="myfield" name="time" id="time" value="<?php echo gmdate("h:i:s",time()+(5*3600)); ?>" disabled=""/></td>
            </tr>
            <tr>
            <td>General:</td>
            <td><select class="myfield" name="general" id="general" ></select></td>
            </tr>
            <tr>
            <td>Attachment:</td>
            <td><input type="file" name="userImage" size="20" id="userImage"/></td>
            </tr>
            <tr><td><span id="journalmsg" style="display:none; color:#0C0">Journal added...</span></td></tr>
            </table>
            </div>
            
            <div style="margin: -13% 13% 0% 42%;">
             <table cellspacing="10" cellpadding="10">
            <tr>
            <td></td>
            <td><textarea class="myfield" name="editor" id="editor" style="width:600px;height:120px;"></textarea></td>
            </tr>
           <tr>
           <td></td>
           <td><input type="submit" name="save"  id="save"  value="Save" style="margin: 0% 89% 0% 0%;" class="BtnBlack button medium"/>
           <input type="submit" name="print" id="print" value="Print" style="margin: -4% 78% 0% 0%;" class="BtnBlack button medium"/>
            <input type="submit" name="editpdf" id="editpdf" value="Edit Pdf" style="margin: -4% 64% 0% 0%;" class="BtnBlack button medium"/>
             <input type="submit" name="delete" id="delete" value="Delete" style="margin: -4% 50% 0% 0%;" class="BtnBlack button medium"/></td>
           </tr>
           
            </table>
            </div>
            </form>
            </div>
		
		</div>
		<div class="tab-content" id="tab-5">
		<div class="FormFields">
        
        <div style="width: 38%;margin: 4% 0% -9.25% 9%;">Contact
        <div style="width: 100%;background-color: rgb(244, 244, 244);height: 98px;"></div></div>
        
        
        <div style="width: 38%;margin: 0% 0% 0% 52%;">Letter
        <div style="width: 100%;background-color: rgb(244, 244, 244);height: 98px;"></div></div>
        
        </div>
		</div>
        <div class="tab-content" id="tab-6">
		
        <div class="FormFields">
        <form action="ClientController/addclientResources" method="post" id="resources" enctype="multipart/form-data">
      	<table class="FieldsTable" cellpadding="6">
          <tr>
          <td><input  placeholder=""  type="hidden" name="code"  value="<?php  echo $row->Client_code;?>" />
           Resource:</td>
          <td><input type="file" name="Rfile" id="Rfile"/></td>
          <td></td>
          <td></td></tr>
          <tr>
          <td>Resource Type:</td>
          <td><input type="text" class="myfield" name="Rtype" id="Rtype"/></td>
          <td>Name</td>
          <td><input type="text" class="myfield" name="Rname" id="Rname"/></td></tr>
          <tr>
          <td></td>
          <td></td>
          <td> <span id="resourcemsg" style="display:none; color:#0C0">Journal added...</span></td>
          <td><input type="submit" name="submit" id="resource" value="Upload Resource" class="button BtnBlack medium" />
          </td>
          </tr>
          <tr></tr>
          </table>
          </form>
         <div class="Grid11" id="Grid11" style="margin: -3% 0% 0% 0%;width: 87%;">
          <table cellspacing="10" cellpadding="10" style="width:87%;">
          </table>
          </div>
        </div>
			 
		</div>
         <div class="tab-content" id="tab-7">
			this is third one...
			
		</div>

    </div>
    <div class="FormFields">
<div id="innerMenu1" style="background-color: #8B8383;">
<ul><li style="margin: 7px 0px 0px 60px;"><select name="location" id="location" class="myfield">
<option>-------Select Location-------</option></select></li>
<li style="float: right;margin: 0% 11% 0% 0%;color: white;"><a onclick="showLocationDiv(); return false;" href="#">Add Location</a></li>
</ul>
</div>

<div id="locationone">

<div class="tabs" id="tab">
       <ul class="tab-menu" id="tab1-menu">
			<li><a href="#tab-11">General</a></li>
			<li><a href="#tab-12">Disbursment Rule</a></li>
			<li><a href="#tab-13">Summary Data</a></li>
  	        <li><a href="#tab-14">Accounting</a></li>
			<li><a href="#tab-15">Clain Letters</a></li>
			<li><a href="#tab-16">Resource</a></li>
  	       <li><a href="#tab-17">History</a></li>
		</ul>
        
        	<div class="tab-content" id="tab-11">
             <div class="FormFields">

        <form action="" id="" method="post">
		  <table class="FieldsTable" cellpadding="6">
                <tr>
                <td>Display Name:</td>
                <td>
                 <input  placeholder=""  type="hidden" name="code" id="code1"  />
                  <input class="myfield" placeholder=""  type="text" name="displayclientname"   />
                  </td>
                    </tr>
                <tr>
                <td>Name:</td>
                <td>
                 <input class="myfield" placeholder=""  type="text" name="generalname"   />
                  </td>
                  <tr>
                <td>Contract Percent:</td>
                <td>
                 <input class="myfield" placeholder=""  type="text" name="contractpercent"   />
                  </td>
                    </tr>
                    <tr>
                <td>Default Contact:</td>
                <td>
                 <input class="myfield" placeholder=""  type="text" name="defaultContact"   />
                  </td>
                    </tr>
                    </tr>
                 <tr>
                 <td>Employee Contact:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="employeecontact" /></td>
                </tr>
                <tr>
                <td></td></tr>
                 <tr>
                <td></td></tr>
                 <tr>
                <th colspan="4">Mailing Address</th>
                </tr>
                 <tr>
                 <td>Line 1:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="address1"  /></td>
                </tr>
                 <tr>
                 <td>Line 2:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="address2"  /></td>
               </tr>
                 <tr>
                 <td>City:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="city"  /></td>
                </tr>
                 <tr>
                 <td>State:</td>
                <td> <select name="state" id="state" class="myfield"> <option value>Select</option>
                               </select> </td>
                </tr>
                 <tr>
                 <td>Zip:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="zip"  /></td>
                </tr>
                 <tr>
                 <td>Phone No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="phone" /></td>
               </tr>
                 <tr>
                 <td>Fax No.:</td>
                <td>  <input class="myfield" placeholder=""  type="text" name="fax" /></td>
                </tr>
                <tr><td> <span id="success" style="display:none; color:#0C0">All the records are Updated!</span></td><td><input type="submit" name="btncontact"  class="BtnBlack medium button" value="Update" /></td></tr>
            </table>
			</form>

    </div>
		</div>
		<div class="tab-content" id="tab-12">
		<div class="FormFields">
      
            	<table class="FieldsTable" cellpadding="6">
                <tr>
                <td><input type="button" name="Adclient" id="Adclient" onclick="innerDivShow(); return false;" style="margin: 0px;" class="button BtnBlack medium" value="Client Option"/>
               <div class="innerdiv" id="innerdiv" style="display: none;">
                <a href="#" onclick="showinnerDiv(); return false;" >Close</a><br />
                <select style="width:100%;margin-bottom: 7px;" class="myfield" name="time"></select>
                <select style="width:100%;margin-bottom: 7px;" class="myfield" name="orignal"></select>
                <select style="width:100%;" class="myfield" name="All"></select></div></td>
                <td></td>
                <td>Amount Cap:</td>
                <td>  <input class="myfield" placeholder="" style="width: 90%;" type="text" name="amountCap" /></td>
                
                <td>Amount Type:</td>
                <td>  <select class="myfield"  style="width:90%;" name="amounttype" ></select></td>
                    </tr>
               <tr>
                <td>To Purco %:</td>
                <td>  <input class="myfield" placeholder=""   style="width:90%;" type="text" name="toPurco" /></td>
                
                <td>Min Threshold:</td>
                <td>  <input class="myfield" placeholder=""  style="width:90%;"  type="text" name="minthreshold" /></td>
                
                <td>To Purco %:</td>
                <td> <input class="myfield" placeholder="" style="width:90%;" type="text" name="ToPurCo" /></td>
                    </tr>
                 <tr>
                <td>To Client %:</td>
                <td>  <input class="myfield" placeholder=""  style="width:90%;" type="text" name="toClient" /></td>
                
                <td>Max Threshold:</td>
                <td>  <input class="myfield" placeholder=""  style="width:90%;" type="text" name="maxthreshold" /></td>
                
                <td>To Client %:</td>
                <td> <input class="myfield" placeholder=""  style="width:90%;" type="text" name="ToClient" /></td>
                    </tr>
                
                <tr>
                <td>Claim # Boundary:</td>
                <td>  <input class="myfield" placeholder=""  style="width:90%;" type="text" name="toClient" /></td>
                
                <td></td>
                <td>  <input type="button" name="Adrules" id="Adrules" style="margin: 0px;  float: left;" class="button BtnBlack medium" value="Add Rules"/></td>
                
                   <td></td>
                <td> <input type="button" name="Adclienttypeamount" id="Adclienttypeamount" style="margin: 0px;   float: left;" class="button BtnBlack medium" value="Add Client Type Amount"/></td>
                    </tr>
                  </table>
        </div>
		
		</div>
		
		
        <div class="tab-content" id="tab-13">
        
        <div class="FormFields">
        <table cellspacing="10">
        <select name="summarydata" id="summarydata" style="margin-left: 2%;" class="myfield"></select>
        <input type="button" style="float: none;margin: 2% 0% 0% 2%;" class="button BtnBlack medium" name="add" value="+"/>
         </table>
         <div  id="Grid">
        <table cellpadding="10" cellspacing="0">
        <tr><th>Order</th><th>Order</th></tr>
        <tr><td></td><td></td></tr>
        </table>
        </div>
        </div>
        
        
</div>
			
		
        <div class="tab-content" id="tab-14">
			
		<div class="FormFields">
        <table cellspacing="10" cellpadding="10">
        <tr><td></td>
        <td>Enale Payment Origin</td></tr>
        <tr><td><input type="checkbox" name="chek1"/></td>
        <td>Body Shop Paid Direct</td></tr>
        <tr><td><input type="checkbox" name="chek2"/></td>
        <td>CHECK ON HOLD</td></tr>
        <tr><td><input type="checkbox" name="chek3"/></td>
        <td>Chargeback</td></tr>
        <tr><td><input type="checkbox" name="chek4"/></td>
        <td>Client Charged on CC</td></tr>
        <tr><td><input type="checkbox" name="chek5"/></td>
        <td>Client Paid Direct</td></tr>
        <tr><td><input type="checkbox" name="chek6"/></td>
        <td>Collection Item</td></tr>
        <tr><td><input type="checkbox" name="chek7"/></td>
        <td>Re-Deposite</td></tr>
        <tr><td><input type="checkbox" name="chek8"/></td>
        <td>Reimbursed Trust Account</td></tr>
        <tr><td><input type="checkbox" name="chek9"/></td>
        <td>Returned Check</td></tr>
        <tr><td><input type="checkbox" name="chek10"/></td>
        <td>PurCo Charged CC</td></tr>
        <tr><td><input type="checkbox" name="chek11"/></td>
        <td>PurCo Trust Account</td></tr>
        <tr><td><input type="checkbox" name="chek12"/></td>
        <td>Towing CoPaid Direct</td></tr>
        <tr><td><input type="checkbox" name="chek13"/></td>
        <td>Trust Acct Correction</td></tr>
        <tr><td><input type="checkbox" name="chek14"/></td>
        <td>Wire Transfer</td></tr>
        <tr><td><input type="checkbox" name="chek15"/></td>
        <td>Hertz Trust</td></tr>
        <tr><td><input type="checkbox" name="chek16"/></td>
        <td>Hertz Credit Card</td></tr>
        <tr><td><input type="checkbox" name="chek17"/></td>
        <td>Hertz Wire Transfer</td></tr>
        <tr><td><input type="checkbox" name="chek18"/></td>
        <td>Hertz Chargeback</td></tr>
        <tr><td><input type="checkbox" name="chek19"/></td>
        <td>Hertz Returned Check</td></tr>
        <tr><td><input type="checkbox" name="chek20"/></td>
        <td>Hertz Trust Acct Correction</td></tr>
        <tr><td><input type="checkbox" name="chek21"/></td>
        <td>Hertz Client Paid Direct</td></tr>
        <tr><td><input type="checkbox" name="chek22"/></td>
        <td>Hertz Client Charged on CC</td></tr>
        <tr><td></td>
        <td><input type="button" class="button BtnBlack medium" name="accounting" value="Save Change" /></td></tr>
        </table>
        </div>
			
		
		</div>
		<div class="tab-content" id="tab-15">
		
		</div>
        <div class="tab-content" id="tab-16">
		<div class="FormFields">
        <table cellspacing="10" cellpadding="10">
        <tr>
        <td>Resources:</td>
        <td><input type="file" name="resource"/></td>
        <td>Enable Client State Proliferation:</td>
        <td><input type="text" name="proliferation" class="myfield" /> </td>
        </tr>
        
        <tr>
        <td>Resource Type:</td>
        <td><input type="text" name="resourcestype" class="myfield" /></td>
        <td>Name:</td>
        <td><input type="text" name="name1" class="myfield" /></td>
        </tr>
        
          <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><input type="button" name="upload" class="button BtnBlack medium" value="Upload Resources" /></td>
        </tr>
        </table>
        
        <div id="Grid">
        <table cellspacing="0" cellpadding="10">
        <tr>
        <th>Type</th>
        <th>Filename</th>
        <th>Name</th>
        <th>Display</th>
        <th>Website</th>
        </tr>
        </table></div>
        
        </div>
      
		</div>
         <div class="tab-content" id="tab-17">
		
			<div class="FormFields">
        <table cellspacing="10">
        <tr><td>Category:</td>
        <td><select name="category" id="category" style="margin-left: 2%;" class="myfield"></select></td></tr>
       
    
         </table>
         <div  id="Grid">
        <table cellpadding="10" cellspacing="0">
        <tr><th>Date</th><th>Who</th><th>Subject</th><th>Description</th><th>Action</th></tr>
        <tr><td></td><td></td><td></td><td></td><td></td></tr>
        </table>
        </div>
        </div>
		</div>

    </div>
    </div>
</div>

</div>
<?php } ?>


<?php $this->load->view('footer'); ?>