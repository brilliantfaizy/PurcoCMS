
<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
	   
       $('#btnupdatelocation1').hide();
		$("#signupForm").validate({
		   rules: {
				province: {
					required: true	
				},
			
                proAbbreviation:{
                    required:true
                   
                },
                	country: {
					required: true	
				},
			
                countryAbbreviation:{
                    required:true
                   
                }
			},
			messages: {
			
				province: {
					required: "Please add key!!"
				
				},
				proAbbreviation: {
					required: "Please enter a Description"
				},
                country: {
					required: "Please add key!!"
				
				},
				countryAbbreviation: {
					required: "Please enter a Description"
				}
			},submitHandler: function addlocation()
               {
                    $.ajax({
                            url: "<?php echo $base; ?>/index.php/GeographicalController/Addlocation",
                            data: GetFormValues('signupForm'),
                            type: "POST",
                            success: function(data) {
                                   $("#locationadd").html(JSON.parse(data).msg);  
                                   $("#locationadd").show();
                                   $('#btnaddlocation').hide();
                                   $('#btnupdatelocation1').hide();
                                   setTimeout(function() {
                                   $("#province").val('');
                                   $("#proAbbreviation").val('');
                                   $("#country").val('');
                                   $("#countryAbbreviation").val('');
                                   $("#locationadd").hide();
                                   $('#btnaddlocation').show();  
                                    }, 2000);
                                    getlocation();
                                   
                                    return false;         
                                }, error: function(data){
                                   
                                }
                            }); 
                      
                      return false;
               }
		});
        
        
	});
     
    
     function updatelocation(){
                 
                
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/GeographicalController/updatelocation",    
                    data: GetFormValues('signupForm'),
                    type: "POST",
                    success: function(data){
                   
                    var myobj;
                    myobj = JSON.parse(data);
                    console.log(myobj);
                     $("#updatelocation").show();  
                  $('#btnaddnote').hide();
                                   $('#btnupdatelocation1').hide();
                                   setTimeout(function() {
                                   $("#province").val('');
                                   $("#proAbbreviation").val('');
                                   $("#country").val('');
                                   $("#countryAbbreviation").val('');
                                   $("#updatelocation").hide();  
                                   $('#btnaddlocation').show();
                                   $("#updatelocation").hide(); 
                                    }, 2000);
                     getlocation();
                } , error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                     
                  
              
                });
                 return false;
                }
     
     function getlocation() {
     var TableData = '<tr><th>Province</th><th>Province Abbreviation</th><th>Country</th><th>Country Abbreviation</th><th>Action</th></tr>';

    $.ajax({
        url: "<?php echo $base; ?>/index.php/GeographicalController/getlocation",
        type:'POST',
        //data:{data},
        success: function(data) {
           for (var i = 0; i < JSON.parse(data).length; i++) {
                   TableData += '<tr><td>' + JSON.parse(data)[i].Province + '</td><td>' + JSON.parse(data)[i].Pro_Abbreviation + '</td><td>' + JSON.parse(data)[i].Country + '</td><td>' + JSON.parse(data)[i].Cont_Abbreviation + '</td><td><a href="#" onclick="editlocation('+JSON.parse(data)[i].Id+'); return false;">Edit</a> <a href="" onclick="deletelocation('+JSON.parse(data)[i].Id+'); return false;" > Delete</a></td></tr>';
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
     $("#province").val('');
     $("#proAbbreviation").val('');
     $("#country").val('');
     $("#countryAbbreviation").val('');
     $('#btnaddlocation').show(); 
     $('#btnupdatelocation1').hide(); 
    
}
function editlocation(id){
                 $('#signupForm').show();
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/GeographicalController/editlocation",    
                     data: {id: id},
                    type: "POST",
                    success: function(data){
                      var myobj;
                      myobj = JSON.parse(data);
                       
                      $('#btnupdatelocation1').show();
                      $('#btnaddlocation').hide(); 
                      document.getElementById("province").value=myobj[0].Province;
                      document.getElementById("proAbbreviation").value=myobj[0].Pro_Abbreviation; 
                      document.getElementById("country").value=myobj[0].Country;
                      document.getElementById("countryAbbreviation").value=myobj[0].Cont_Abbreviation;
                      document.getElementById("locationId").value=myobj[0].Id; 
                      console.log(myobj[0].Id);
                     
                      
                      }
                     
                    });
             
                
                }
                
getlocation();

function deletelocation(id)
{
      var result = confirm("Want to delete?");
        if (result) {
           $.ajax({
          type: "GET",
          url: "<?php echo $base;?>/index.php/GeographicalController/deletelocation/"+id,
          success: function(response) {

          getlocation();

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
                    <li><a class="innerMenuActive" href="#" onclick="viewadd(); return false;">Add Geograpical Location</a> </li>
                </ul>


            </div>

    <div class="FormFields">

        <form action="" method="post" id="signupForm" style="display: none;">
            
            <table class="FieldsTable"  cellpadding="6">

                <tr>
                    <td>Province:</td><td>
                     <input type="hidden" id="locationId" name="locationId"/>
                        <input type="text" class="myfield" id="province" name="province" />
                    </td>
                    <td>Province Abbreviation:</td><td>
                        <input type="text" class="myfield" id="proAbbreviation" name="proAbbreviation" />
                    </td>
                </tr>
                <tr>
                    <td>Country:</td>
                    <td>
                        <input type="text" class="myfield" id="country" name="country" />
                    </td>
                    <td>Country Abbreviation:</td>
                    <td>
                        <input type="text" class="myfield" id="countryAbbreviation" name="countryAbbreviation" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td> <span id="locationadd" style="display:none; color:#0C0">Record Added!</span>
                <span id="updatelocation" style="display:none; color:#0C0">Record Updated!</span></td>
                    <td>
                    <div id="btnaddlocation"> 
                    <input type="submit" class="medium button BtnBlack"  value="Add Geograpical Location" />
                </div>
                
                 <div id="btnupdatelocation1">  
                    <input type="button" class="medium button BtnBlack" onclick="updatelocation(); return false;" value="Update Geograpical Location" />
                 </div>
                           </td>
                </tr>

            </table>
        </form>

    </div>

    <div class="Grid">
            <table cellspacing="0" cellpadding="10">

               

            </table>
        </div>

</div>
<?php $this->load->view('footer'); ?>