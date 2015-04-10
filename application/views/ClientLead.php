<?php $this->load->view('header'); ?>
<script>


function getclientActive() {
    
    var TableData = '<tr><th style="width: 10%;">Client Name</th><th style="width: 10%;">Client Code</th> <th style="width: 10%;">Region</th><th style="width: 10%;">Last File</th> <th style="width: 10%;">File/Month</th> <th style="width: 10%;">Last Journal</th></tr>';


    $.ajax({
        url: "<?php echo $base; ?>/index.php/ClientController/getclientLead",
        success: function(data) {          
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
getclientActive();

</script>

<div id="content">
        
           
                <div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

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