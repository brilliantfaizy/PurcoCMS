<?php $this->load->view('header'); ?>
<script>


function getclientall() {
    
    var TableData = '<tr><th style="width: 10%;">Client Name</th><th style="width: 10%;">Client Code</th> <th style="width: 10%;">Region</th><th style="width: 10%;">Last File</th> <th style="width: 10%;">File/Month</th> <th style="width: 10%;">Last Journal</th></tr>';


    $.ajax({
        url: "<?php echo $base; ?>/index.php/ClientController/getClientAll",
        success: function(data) {
           
          //console.log(data);
          
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

            //alert("Submitted successfully");
           
           

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
                        <select name="city" id="city"  class="myfield"><option value="123">select</option></select>
                    </td>

                    <td>Client State:</td>
                    <td>
                        <select name="state" id="state" class="myfield"><option value="123">select</option></select>
                    </td>
                </tr>

                <tr>
                    <td>Client Status :</td>
                     <td>
                        <select name="status" id="status"  class="myfield"><option value="3">select</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option></select>
                    </td>

                    <td>Client Priority :</td>
                    <td>
                        <input class="myfield" placeholder="" name="priority" type="text" />
                    </td>
                    <td>
                        <input type="checkbox" name="chk1" />
                    </td>
                </tr>

                <tr>
                    <td>Employee Contact : </td>
                    <td>
                        <input class="myfield" placeholder="" name="contact" type="text" />
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