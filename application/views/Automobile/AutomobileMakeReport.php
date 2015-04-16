<?php $this->load->view('header'); ?>
<script>

function insertmake()
{           var makeval=$("#make").val();
      $.ajax({
                            url: "<?php echo $base; ?>/index.php/AutomobileController/Insertmake",
                            data: {make:makeval},
                            type: "POST",
                            success: function(data){
                                    $("#success").show();
                                    setTimeout(function() {
                                    $("#showadd").hide();  
                                    $('#forshow').show();
                                    $("#success").hide();
                                    
                                    }, 2000);
                                    filldropdown();
                                    return false;         
                                }, error: function(data){
                                   
                                }
                            }); 
                      
                      return false;
}

  function deletemodel(id){
                    var result = confirm("Want to delete?");
        if (result) {
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AutomobileController/DeleteModel",    
                     data: {id: id},
                    type: "POST",
                    success: function(data){
                   
                   changedropdown();
                      
                      }
                     
                    });
             
                }
                }
                
                function deletemake(id){
                 var dropdownVal = $("#select1 option:selected").val();
                    var result = confirm("Want to delete?");
        if (result) {
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AutomobileController/DeleteMake",    
                     data: {id: dropdownVal},
                    type: "POST",
                    success: function(data){
                   filldropdown();
                   changedropdown();
                      
                      }
                     
                    });
             
                }
                }

function insertmodel()
{       
    var des=$("#description").val();
    var make=$("#select1").val();
      $.ajax({
                   url: "<?php echo $base; ?>/index.php/AutomobileController/InsertModel",
                   data: {description:des,select:make},
                   type: "POST",
                   success: function(data){
                      $("#descp").hide();
                      $("#btnmodel").hide();
                      $("#description").val('');
                    changedropdown();
                       return false;         
                   }, error: function(data){
                                   
               }
              }); 
                      
        return false;
}

function updatemake() {
                       var id=$("#select1").val(); 
                       var make=$("#make").val();
                         $.ajax({
                            url: "<?php echo $base; ?>/index.php/AutomobileController/updatemake",
                            data: {id:id,make:make},
                            type: "POST",
                            success: function(data) {
                              
                                   $('#showadd').hide();
                                    //$("#success3").show();
                                 filldropdown();
                                
                                }, error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                            }); 
                      
                      return false;
                } 

 function editmake(){
                  var dropdownVal = $("#select1 option:selected").val();
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AutomobileController/editmake",    
                     data: {id: dropdownVal},
                    type: "POST",
                    success: function(data){
                   
                    var myobj;
                    
                      myobj = JSON.parse(data);
                    
                      document.getElementById("make").value=myobj[0].Make;
                  
                      $('#showadd').show();
                      $('#update').show();
                      $('#add').hide();
                      
                      }
                     
                    });
             
                
                }
function showadd()
{
    $("#make").val('');
    $("#showadd").show();
    $("#forshow").hide();
    $("#update").hide();
    $("#add").show();
    
}

function filldropdown()
{
      var options = "<option>Select</option>";
    $.ajax({
         url: "<?php echo $base; ?>/index.php/AutomobileController/getmake",
    type: "POST",
 
    success: function(data) {

       for(var i=0;i<JSON.parse(data).length; i++)
       {
        options += "<option value='"+  JSON.parse(data)[i].Id +"'>" + JSON.parse(data)[i].Make +"</option>";              
       }

     $("#select1").html(options);
    }
});
}
filldropdown();

  function changedropdown(){
                   var TableData = '<tr><th>Model</th><th>Action</th></tr>';


                   var dropdownVal = $("#select1 option:selected").val();
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AutomobileController/filltable",    
                     data: {id: dropdownVal},
                    type: "POST",
                    success: function(data){
                  $("#btnmodel").show();
                  $("#showadd").hide();
                     console.log(JSON.parse(data));
                      for (var i = 0; i < JSON.parse(data).length; i++) {
                   TableData += '<tr><td>' + JSON.parse(data)[i].Model + '</td><td><a href="#" onclick="deletemodel('+JSON.parse(data)[i].Model_Id+'); return false;">delete</a></td></tr>';
        }
            $(".Grid table").html(TableData);
                         
                      }
                     
                    });
               
                
                }
                
                function adddescripshow()
                {
                    $("#descp").show();
                }
</script>

<div id="content">
 <div id="innerMenu">
 
                <ul>
                    <li><a class="innerMenuActive" href="#">Automobile Make & Models</a> </li>
                </ul>


            </div>
    <div class="FormFields" >

        <form id="signupForm" action="" method="post">
            
            <table class="FieldsTable" cellpadding="6">
        <tr>
                <td>
                Make:
                    <select name="select1" id="select1" onchange="changedropdown();" class="myfield">
                        <option value>Select </option>
                       
                    </select>
                </td>
                <td><div id="showadd" style="display: none;">
                <input type="text" name="make" id="make" class="myfield"/>
                <input type="button" class="BtnBlack button medium" onclick="insertmake(); return false;" style="margin: 0px; margin-left: 10px;" name="add" id="add" value="Add" />
                <input type="button" class="BtnBlack button medium" onclick="updatemake(); return false;" style="margin: 0px; margin-left: 10px; display: none;" name="update" id="update" value="Update" />
               
                </div></td>
                <td><span id="success" style="display:none; color:#0C0">Inserted!</span></td>
                </tr>
                <tr>
                <td>
                    <input type="button" class="medium button BtnBlack" onclick="deletemake(); return false;" style="margin: 0px; margin-left: 10px;" value="Delete" />
                    <input type="button" class="medium button BtnBlack" onclick="editmake(); return false;" style="margin: 0px; margin-left: 10px;" value="Edit" />
                    <input type="button" class="medium button BtnBlack" onclick="showadd(); return false;" style="margin: 0px; margin-left: 10px;" id="forshow" value="Add" />
                 
                </td>
                </tr>
                <tr><td><input type="button" id="btnmodel" onclick="adddescripshow(); return false;" style="display: none;" class="BtnBlack button medium" value="Add Automobile Model"/></td></tr>
                 <tr id="descp" style="display: none;"><td>Description:<input type="text" name="description" id="description" class="myfield" /></td>
              
                
                 <td><input type="button" class="medium button BtnBlack"  onclick=" insertmodel(); return false;" style="margin: 0px;" id="adddes" value="Add Description" /></td></tr>
            </table>
        </form>

    </div>
    <div class="Grid">
    <table cellspacing="0" cellpadding="10"></table>
    </div>



</div>
<?php $this->load->view('footer'); ?>