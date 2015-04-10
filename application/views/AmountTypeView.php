<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
	   
       $('#btnupdateparty').hide();
       $(".editbtnclick1").hide();
		$("#signupForm").validate({
		   rules: {
				key1: {
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
			
				key1: {
					required: "Please add key!!"
				
				},
				description: {
					required: "Please enter a Description"
				},
                order:{
                    required: "Please must fill it!",
                    number: "Use numbers only"
                    
                }
			},submitHandler: function addType()
               {
                    $.ajax({
                            url: "<?php echo $base; ?>/index.php/AmountTypeController/AddamountType",
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
                                    $("#order").val('');
                                    $("#parent").val($("#parent option:first").val());
                                    $("#partyadd").hide();
                                    $('#btnaddparty').show();  
                                    }, 2000);
                                    getamountType();
                                    // getnotesall();
                                    return false;         
                                }, error: function(data){
                                   
                                }
                            }); 
                      
                      return false;
               }
		});
        
        
	});
     
    
     function updateamountType(){
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AmountTypeController/updateamountType",    
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
                                     $("#order").val('');
                                    $("#parent").val($("#parent option:first").val());
                                    $(".editbtnclick1").hide();
                                    $("#updatenotes1").hide();  
                                    $('#btnaddparty').show();
                                    $("#updatetype").hide(); 
                                   
                                    }, 2000);
                     getamountType();
                } , error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                     
                  
              
                });
                 return false;
                }
     
     function getamountType() {
     var TableData = '<tr><th>Key</th><th>Description</th><th>Order</th><th>To Client</th><th>To Purco</th><th>Action</th></tr>';

    $.ajax({
        url: "<?php echo $base; ?>/index.php/AmountTypeController/getamountType",
        type:'POST',
        //data:{data},
        success: function(data) {
           for (var i = 0; i < JSON.parse(data).length; i++) {
            
                   TableData += '<tr><td>' + JSON.parse(data)[i].Key + '</td><td>' + JSON.parse(data)[i].Description + '</td><td>' + JSON.parse(data)[i].Order + '</td><td>' + JSON.parse(data)[i].Toclient + '%</td><td>' + JSON.parse(data)[i].Topurco + '%</td><td><a href="#" onclick="editamountType('+JSON.parse(data)[i].Id+'); return false;">Edit</a> <a href="" onclick="deleteamountType('+JSON.parse(data)[i].Id+'); return false;" > Delete</a></td></tr>';
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
     $(".editbtnclick1").hide();
    $('#btnupdateparty').hide(); 
    
}
function editamountType(id){
                 $('#signupForm').show();
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/AmountTypeController/editamountType",    
                     data: {id: id},
                    type: "POST",
                    success: function(data){
                    var myobj;
                      myobj = JSON.parse(data);
                      document.getElementById("key1").value=myobj[0].Key;
                      document.getElementById("description").value=myobj[0].Description; 
                      document.getElementById("order").value=myobj[0].Order;
                      document.getElementById("parent").value=myobj[0].Parent; 
                      document.getElementById("client1").value=myobj[0].Toclient; 
                      document.getElementById("purco1").value=myobj[0].Topurco; 
                      document.getElementById("typeId").value=myobj[0].Id; 
                      console.log(myobj[0].Id);
                      $('#btnaddparty').hide();
                      $(".editbtnclick1").show();
                      $('#btnupdateparty').show();
                      
                      }
                     
                    });
             
                
                }
                
getamountType();
  //  todisplay();
function deleteamountType(id)
{
      var result = confirm("Want to delete?");
        if (result) {
           $.ajax({
          type: "GET",
          url: "<?php echo $base;?>/index.php/AmountTypeController/deleteamountType/"+id,
          success: function(response) {

          getamountType();

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
                    <li><a class="innerMenuActive" href="#" onclick="viewadd(); return false;">Add Amount Type</a> </li>
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
                    <td>Order:</td><td>
                    <input type="text" class="myfield" name="order" id="order" />
                    </td>
                    <td>Parent:</td><td>
                     <select id="parent" name="parent" class="myfield" >
                        <option value="__TOP__">TOP</option>
                        <option value="physical_damage">Physical Damage</option>
                        <option value="loss_of_use">Loss of Use</option>
                        <option value="administrative_fee">Administrative Fee</option>
                        <option value="appraisal_fee">Appraisal Fee</option>
                        <option value="appraisal_review_fee">Appraisal Review Fee</option>
                        <option value="attorney_fee">Attorney Fee</option>
                        <option value="auction_fee">Auction Fee</option>
                        <option value="bodily_injury">Bodily Injury</option>
                        <option value="cc_chargeback">CC Chargeback</option>
                        <option value="cc_transaction_fee">CC Transaction Fee</option>
                        <option value="cleaningdetail">Cleaning/Detail</option>
                        <option value="collection_fee">Collection Fee</option>
                        <option value="court_fees">Court Fees</option>
                        <option value="damage_waiver">Damage Waiver</option>
                        <option value="Deductible">Deductible</option>
                        <option value="diminution_of_value">Diminution of Value</option>
                        <option value="document_fee">Document Fee</option>
                        <option value="expenses">Expenses</option>
                        <option value="filing_fees">Filing Fees</option>
                        <option value="fmv">F. M. V.</option>
                        <option value="fmv_after_repair">F. M. V. After Repair</option>
                        <option value="fmv_total">F.M.V. Total</option>
                        <option value="fuel">Fuel</option>
                        <option value="generator_overuse_fee">Generator Overuse Fee</option>
                        <option value="hotel_expense">Hotel Expense</option>
                        <option value="impound_fee">Impound Fee</option>
                        <option value="interest">Interest</option>
                        <option value="judgement">Judgement</option>
                        <option value="Keys">Keys</option>
                        <option value="late_payment_fee">Late Payment Fee</option>
                        <option value="legal_fees">Legal Fees</option>
                        <option value="liability">Liability</option>
                        <option value="locksmith_fees">Locksmith Fees</option>
                        <option value="luxury_tax">Luxury Tax</option>
                        <option value="medical">Medical</option>
                        <option value="merchant_fee">Merchant Fee</option>
                        <option value="mileage_charges">Mileage Charges</option>
                        <option value="nonreturn_allowance">NonReturn Allowance</option>
                        <option value="old_other__a">Old Other-A</option>
                        <option value="old_other__b">Old Other-B</option>
                        <option value="old_other__c">Old Other-C</option>
                        <option value="old_other__d">Old Other-D</option>
                        <option value="parking_ticketfinefee">Parking ticket/fine/fee</option>
                        <option value="payments">Payments</option>
                        <option value="payment_fees">Payment Fees</option>
                        <option value="pda_appraisal_fee">PDA Appraisal Fee</option>
                        <option value="police_report">Police Report</option>
                        <option value="Projected Salvage">Projected Salvage</option>
                        <option value="property_damage">Property Damage</option>
                        <option value="refund">Refund</option>
                        <option value="registration_fee">Registration Fee</option>
                        <option value="rental_charges">Rental Charges</option>
                        <option value="rental_reimbursement">Rental Reimbursement</option>
                        <option value="representation_fee">Representation Fee</option>
                        <option value="residual_value">Residual Value</option>
                        <option value="retrieval_fee">Retrieval Fee</option>
                        <option value="returned_item_fee">Returned Item Fee</option>
                        <option value="roadside_assist">Roadside Assist</option>
                        <option value="salvage">Salvage</option>
                        <option value="segway">Segway</option>
                        <option value="segway_accessory">Segway Accessory</option>
                        <option value="service_fee_client">Service Fee Client</option>
                        <option value="service_fee_purco">Service Fee PurCo</option>
                        <option value="shipping_and_handling">Shipping and Handling</option>
                        <option value="Statutory Reduction">Statutory Reduction</option>
                        <option value="storage">Storage</option>
                        <option value="subrogation_amount">Subrogation Amount</option>
                        <option value="tear_down_fee">Tear Down Fee</option>
                        <option value="towing">Towing</option>
                        <option value="traffic_ticket">Traffic Ticket</option>
                        <option value="vvs_appraisal_fee">DV Appraisal Fee</option>
                        <option value="waiver_deductible">Waiver Deductible</option>
                </select>
                    </td>
                </tr>
              
                <div id="editbtnclick1" class="editbtnclick1" style="display:none;">
                <tr class="editbtnclick1"> 
                  
                  <td>To Client:</td>
                  <td><input type="text" class="myfield" name="client1" id="client1" />%
                    </td>
                    <td>To Purco:</td><td>
                        <input type="text" class="myfield" name="purco1" id="purco1" />%
                    </td> 
                    </tr></div>
               
                <tr>
                <td></td>
                <td> <span id="partyadd" style="display:none; color:#0C0">Record Added!</span>
                <span id="updatetype" style="display:none; color:#0C0">Record Updated!</span>
                
              </td>
                    <td></td>
                    <td><div id="btnaddparty">  
                    <input type="submit" class="medium button BtnBlack" name="partytype" value="Add Amount Type" />
                 </div>
                 <div id="btnupdateparty">  
                    <input type="button" class="medium button BtnBlack" onclick="updateamountType(); return false;" name="updatepartytype1" value="Update Amount Type" />
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