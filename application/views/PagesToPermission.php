<?php $this->load->view('header'); ?>
<script>
	$().ready(function() {
	
		$("#signupForm").validate({
			rules: {
			
		
                permissions:{
                  required:true
                },
                pages:{
                  required:true
                }
			
			
			},
			messages: {
			
                permissions:"Select Roles must.",
                 pages:"Select Pages must."
                
			
              
			}
		});
	});
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
   <script type="text/javascript">
   
   
   
    var myobj;
        
        
            $(document).ready(function() { 

                
                $("#permissions").change(function(){
                   
                     /*dropdown post */
                    $.ajax({
                    url:"<?php echo $base; ?>/index.php/PagesController/buildDropCities",    
                    data: {id: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                      if(data != null || data != ""){
                        
                       myobj = JSON.parse(data);
                       $("#table1111").html(' ');
                       var html = '<tr><th style="width: 10%;">Page</th><th style="width: 10%;">Action</th></tr>';
                       
                           for(var i = 0; i < myobj.length; i++){
                            
                                
                                html += '<tr><td>'+myobj[i].Page+'</td><td><a onclick="userdeleteConfirm(\'deletepage\/'+myobj[i].PermPageId+'\'); return false;" href="#">Delete</a></td></tr>';
                               
                           }
                           
                           $("#table1111").html(html);
                          
                       
                       } 
                       
                       
                    }
                    
                    });
               
                });

            });
            
        </script>
<div id="content">
    <div id="innerMenu">

        <?php $this->load->view('admininner'); ?>

    </div>
     <div class="FormFields">
     
     
        <form id="signupForm" action="insertpages" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
                   
                    <td>Roles :</td>
                   <td>
                   <select name="permissions" id="permissions" class="myfield">
                    <option value>Select</option>
                            <?php foreach($perm_list as $row){?>
                            <option value="<?php  echo $row->RId?>">
                                <?php echo $row->RoleTitle?></option>
                            <?php }?>
                  </select>
                   </td>
                </tr>

                


            </table>

       

    </div>
    
    <div class="FormFields">

            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Page :</td>
                    <td>
                        <select name="pages" id="pages" class="myfield" >
                         <option value>Select</option>
                            <?php foreach($page_list as $row){?>
                            <option value="<?php  echo $row->Page_Id?>">
                                <?php echo $row->Page?></option>
                            <?php }?>
                  </select>
                    </td>
                   <td >
                        <input class="button medium BtnBlack" style="margin-top: 0;" type="submit" name="submit" value="Insert Page" />
                    </td>
                </tr>

               



            </table>

        </form>

    </div>

    <div class="Grid">


        <table id="table1111"  cellspacing="0" cellpadding="10">

        </table>
        
    </div>
     

</div>
<?php $this->load->view('footer'); ?>