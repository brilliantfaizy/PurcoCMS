<?php $this->load->view('header'); ?>
<div id="content">

<div id="innerMenu">

        <?php $this->load->view('payments/paymentinner'); ?>

    </div>

    <div class="FormFields">

        <form action="" method="post">
           
            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Receive:</td>
                    <td>
                        <input class="myfield" value="03/02/2015" placeholder="" name="firstname" type="text" />
                    </td>
                    <td>
                        <img src="<?php echo "$base/images/calenderblueIcon.png"; ?>" />
                    </td>

                    <td>Claim #:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    <td>
                        <img src="<?php echo "$base/images/foldersearchIcon.png"; ?>" />
                    </td>
                </tr>

                <tr>
                    <td>Received By:</td>
                    <td>
                        <select name="title" class="myfield">
                            <option>Purco Trust Account</option>
                        </select>
                    </td>
                    <td>
                        <img src="<?php echo "$base/images/lockblackIcon.png"; ?>" />
                    </td>

                    <td>Source:</td>
                    <td>
                        <select name="title" class="myfield"></select>
                    </td>
                </tr>

                <tr>
                    <td>Or:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    <td></td>

                    <td>Check #:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>
                <tr>
                    <td>Check Date:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    <td></td>
                    <td>Check Scan:</td>
                    <td>
                        <input name="firstname" type="file" />
                    </td>

                </tr>
               
                <tr>
                    
                    <td>Amount: </td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    
                    <td colspan="2"></td>
                    <td>
                        <input type="button" class="medium button BtnBlack" style="margin: 0; margin-left: 10px;" value="Delete" />
                        <input type="button" class="medium button BtnBlack" style="margin: 0; margin-left: 10px;" value="Save" />
                        <input type="reset" class="medium button BtnBlack" style="margin: 0; margin-left: 10px;" value="Clear" />
                    
                    </td>
                    <td></td>

               </tr>
                   
                   
            <tr><th>Daily Total</th></tr>
            <tr>
                <td>Payments:</td>
                <td>$78.9</td>
            </tr>
            <tr>
                <td>Disbrusments:</td>
                <td>$00.0</td>
            </tr>




            </table>

        </form>

    </div>

  
    
    
    <div id="innerTabs">
        
        
       <?php $this->load->view('payments/Paymentsubinner'); ?>

    </div>
    
    <div class="Grid">
        
        <table cellspacing="0" cellpadding="10">

           <tr>
                <th>Claim No.</th>
                <th>Received</th>
                <th>Received By</th>
                <th>Check#</th>
                <th>Check Date</th>
                <th>Amount</th>
                <th>Paid By</th>
            </tr>

            <tr>
                <td>2434432</td>
                <td>1/12/2012</td>
                <td>Purco Charged CC</td>
                <td>21323</td>
                <td>12/12/2012</td>
                <td>$12379.00</td>
                <td>Jhon Wilson</td>

            </tr>

            <tr style="display: none;">
                <td colspan="7"></td>
                <td></td>
                <td></td>
                <td>Validity to</td>
                <td>Total</td>
                <td>$12379.00</td>
                <td></td>

            </tr>

        </table>
    </div>

</div>

<?php $this->load->view('footer'); ?>