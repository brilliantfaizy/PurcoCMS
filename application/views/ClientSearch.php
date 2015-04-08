<?php $this->load->view('header'); ?>
<script>
function getClientAllSearch() {
  
    var TableData = '<tr><th style="width: 10%;">Client Name</th><th style="width: 10%;">Client Code</th> <th style="width: 10%;">Region</th><th style="width: 10%;">Last File</th> <th style="width: 10%;">File/Month</th> <th style="width: 10%;">Last Journal</th></tr>';
    $.ajax({
        url:"<?php echo $base; ?>/index.php/ClientController/getClientAllSearch",
        data: GetFormValues('signupForm'),
        type: "POST",
        success: function(data) {
          
          console.log(JSON.parse(data));
          
                for (var i = 0; i < JSON.parse(data).length; i++) {
                 
                    TableData += '<tr><td>' + JSON.parse(data)[i].Client_name + '</td><td>' + JSON.parse(data)[i].Client_code + '</td><td>' + JSON.parse(data)[i].City +' , '+ JSON.parse(data)[i].State +'</td><td></td><td></td><td></td></tr>';

                }
            

            $(".Grid table").html(TableData);

            //alert("Submitted successfully");
           
           

        }, 
        error: function() {

            alert("There is error while fetch");

        }
    });
 

}
</script>
<div id="content">

<div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

    </div>
        
            <div class="FormFields">
                
                <form id="signupForm" action="" method="post">
              
                    <table class="FieldsTable" cellpadding="6">
                        
                        <tr>
                            <td>Client Name :</td>
                            <td><input class="myfield" placeholder="" name="clientname" type="text" /></td>
                            
                            <td>Client Code :</td>
                             <td><input class="myfield" placeholder="" name="clientcode" type="text" /></td>
                        </tr>
                        
                        <tr>
                            <td> Client Type:</td>
                            <td><select name="clienttype" id="clienttype" class="myfield"> <option value="0">select</option>
                        <?php foreach($ctype as $row){?>
                            <option value="<?php  echo $row->Id?>">
                                <?php echo $row->Key?></option>
                            <?php }?></select></td>
                            
                            <td>Client Priority :</td>
                             <td><select name="clientpriority" id="clientpriority" class="myfield"><option value="9">select</option>
                         <option>1 - Hot</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5 - Medium</option>
                         <option>6</option>
                         <option>7</option>
                         <option>8</option>
                         <option>9 - Cold</option></select></td>
                        </tr>
                        
                         <tr>
                            <td>Fleet size :</td>
                             <td><input class="myfield" placeholder="" name="fleetsize" type="text" /></td>
                            
                            <td>Contact First Name:</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                        </tr>
                         <tr>
                            <td> Contact Last Name:</td>
                             <td><input class="myfield" placeholder="" name="lastname" type="text" /></td>
                            
                            <td>Client Status :</td>
                             <td><select name="clientstatus" id="clientstatus" class="myfield"><option value="5">select</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                        <option value="3">Lead</option>
                        </select></td>
                            
                        </tr>
                        
                         <tr>
                            <td> Street Address:  </td>
                             <td><input class="myfield" placeholder="" name="streetaddress" type="text" /></td>
                            
                             <td> City:  </td>
                             <td><input class="myfield" placeholder="" name="city" type="text" /></td>
                                </tr>
                        
                         <tr>
                            <td> Zip:  </td>
                             <td><input class="myfield" placeholder="" name="zip" type="text" /></td>
                            <td> State:  </td>
                             <td><select name="state" id="state" class="myfield"><option value="100">select</option>
                         <?php foreach($query as $row){?>
                            <option value="<?php  echo $row->Id?>">
                                <?php echo $row->State_full?></option>
                            <?php }?></select></td>
                            <td><input type="checkbox" name="chk1" /></td>
                            </tr>
                        
                        
                             <tr>
                             
                             <td> Fax/Phone:  </td>
                             <td><input class="myfield" placeholder="" name="faxno" type="text" /></td>
                             <td>Contact Last Name:</td>
                            <td><input type="checkbox" name="chk2"/></td>
                             
                            </tr>
                            
                            
                            
                            <tr>
                                <td colspan="4"><input class="button medium" onclick="getClientAllSearch();  return false;" type="submit" value="Go" /></td>
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