<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

         <?php $this->load->view('claims/claiminner'); ?>

    </div>

    <div class="FormFields">

        <form action="" method="post">
            
            <table class="FieldsTable" cellpadding="5">
                
                <tr>
                    <td>Claim#:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>

                    <td>Client Name:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Involved Party Business Name:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>


                    <td>Date Of Loss:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Involved Party Claim#:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>

                    <td>Involved Party First Name:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Involved Party Last Name:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>

                    

                    <td>Police Report #:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Days Before/After DOL:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>

                   

                    <td>Claim Status:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Rental Agreement#:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>

                    <td>Involved Party Address:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Client Claim#:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>

                   

                    <td>Vehicle#:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>
                </tr>

                <tr>
                    <td>Involved Party Type:</td>
                    <td>
                        <select class="myfield">
                            <option>select</option>
                        </select>
                    </td>

                   


                    <td>Priority:</td>
                    <td>
                        <select class="myfield">
                            <option>select</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>VIN:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>

                  

                    <td>Involved Phone#:</td>
                    <td>
                        <input type="text" class="myfield" name="" />
                    </td>
                </tr>


<tr>
                    
                    <td colspan="4">
                        <input type="button" class="medium button BtnBlack" value="Go" />
                        <input style="margin-right: 12px;" type="reset" class="medium button BtnBlack" value="Clear" />
                    </td>
                </tr>


            </table>

        </form>

    </div>
    
     <div id="innerTabs">
        
        
          <?php $this->load->view('claims/claimsubinner'); ?>
                
                
     </div>


</div>

<?php $this->load->view('footer'); ?>