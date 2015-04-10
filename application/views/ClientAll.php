<?php $this->load->view('header'); ?>
<script>


function getclientall() {
    
    var TableData = '<tr><th style="width: 10%;">Client Name</th><th style="width: 10%;">Client Code</th> <th style="width: 10%;">Region</th><th style="width: 10%;">Last File</th> <th style="width: 10%;">File/Month</th> <th style="width: 10%;">Last Journal</th><th>Action</th></tr>';


    $.ajax({
        url: "<?php echo $base; ?>/index.php/ClientController/getClientAll",
        success: function(data) {
           
          //console.log(data);
          
                for (var i = 0; i < JSON.parse(data).length; i++) {
                 
                    TableData += '<tr><td>' + JSON.parse(data)[i].Client_name + '</td><td>' + JSON.parse(data)[i].Client_code + '</td><td>' + JSON.parse(data)[i].City +' , '+ JSON.parse(data)[i].State +'</td><td></td><td></td><td></td><td><a href="editClientview/' + JSON.parse(data)[i].Client_code + '/'+ JSON.parse(data)[i].ContactId +'/'+ JSON.parse(data)[i].Id +'">Edit</a></td></tr>';
                }
            $(".Grid table").html(TableData);
        },
        error: function() {
            alert("There is error while fetch");

        }
    });


}
function getclientallSorted() { 
    var TableData = '<tr><th style="width: 10%;">Client Name</th><th style="width: 10%;">Client Code</th> <th style="width: 10%;">Region</th><th style="width: 10%;">Last File</th> <th style="width: 10%;">File/Month</th> <th style="width: 10%;">Last Journal</th></tr>';
    $.ajax({
        url:"<?php echo $base; ?>/index.php/ClientController/getClientAllSorted",
        data: GetFormValues('signupForm'),
        type: "POST",
        success: function(data) {
          
          console.log(JSON.parse(data));
          
                for (var i = 0; i < JSON.parse(data).length; i++) {
                    TableData += '<tr><td>' + JSON.parse(data)[i].Client_name + '</td><td>' + JSON.parse(data)[i].Client_code + '</td><td>' + JSON.parse(data)[i].City +' , '+ JSON.parse(data)[i].State +'</td><td></td><td></td><td></td></tr>';
                }
            $(".Grid table").html(TableData);
        }, 
        error: function() {

            alert("There is error while fetch");
        }
    });
}
getclientall() ;
   
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
                    <td>
                        <input class="myfield" placeholder="" name="clientname" type="text" />
                    </td>

                    <td>Client Code :</td>
                    <td>
                        <input class="myfield" placeholder="" name="clientcode" type="text" />
                    </td>
                </tr>

                <tr>
                    <td>Client City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="city" type="text" />
                    </td>

                    <td>Client State:</td>
                    <td>
                      <select name="state" id="state" class="myfield"><option value="100">select</option>
                         <?php foreach($query as $row){?>
                            <option value="<?php  echo $row->Id?>">
                                <?php echo $row->State_full?></option>
                            <?php }?></select>
                    </td>
                </tr>

                <tr>
                    <td>Client Status :</td>
                     <td>
                        <select name="status" id="status"  class="myfield"><option value="5">select</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                        <option value="3">Lead</option>
                        </select>
                    </td>

                    <td>Client Priority :</td>
                    <td>
                      
                        <select name="priority" id="priority"  class="myfield"><option value="9">select</option>
                         <option>1 - Hot</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5 - Medium</option>
                         <option>6</option>
                         <option>7</option>
                         <option>8</option>
                         <option>9 - Cold</option></select>
                    </td>
                    <td>
                        <input type="checkbox" name="chk1" />
                    </td>
                </tr>

                <tr>
                    <td>Employee Contact : </td>
                    <td>
                       
                         <select name="contact" id="contact"  class="myfield"><option value="0">select</option>
                        <?php foreach($employee as $row){?>
                            <option value="<?php  echo $row->Id?>">
                                <?php echo $row->LegalName?></option>
                            <?php }?></select>
                    </td>

                    <td colspan="2"></td>

                </tr>

                <tr>
                    <td colspan="4">

                        <input class="button medium" onclick="getclientallSorted();  return false;" type="submit" value="Go" />

                    </td>
                </tr>





            </table>

        </form>

    </div>

    <div id="innerTabs">
        
        
       <?php
    
       
        $this->load->view('ClientInnerTabs'); ?>

    </div>

    <div class="Grid">

        <table cellspacing="0" cellpadding="10">

          
 

        </table>
    </div>

</div>

<?php $this->load->view('footer'); ?>