<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

        <?php $this->load->view('payments/paymentinner'); ?>

    </div>

    <div class="FormFields">

        <table style="float: left;" class="FieldsTable" cellpadding="10">

            <tr>
                <td>Claim:</td>
                <td>
                    <label><span style="color: #395ac2;">12324424</span></label>
                </td>

                <td>Claim:</td>
                <td>
                    <label><span style="color: #395ac2;">AB32GBJK</span> -(MI)</label>
                </td>

            </tr>

            <tr>


                <td>Percentage:</td>
                <td>
                    <label>0%(10/207332)</label>
                </td>

                <td>Specialist:</td>
                <td>
                    <label>Sandy Pike</label>
                </td>
            </tr>

            <tr>
                <td>Status:</td>
                <td>
                    <select name="state" class="myfield" style="width: 188px;"></select>
                    <input class="button medium BtnBlack" name="btn4" type="button" style="margin: 0; margin-left: 12px;" value="Update Status" />
                </td>

                <td>Quick Statuses:</td>
                <td>
                    <input class="button medium BtnBlack" name="btn1" style="margin: 0; margin-left: 12px;" type="button" value="OP" />
                    <input class="button medium BtnBlack" name="btn2" style="margin: 0; margin-left: 12px;" type="button" value="CP" />
                    <input class="button medium BtnBlack" name="btn3" type="button" style="margin: 0; margin-left: 12px;" value="CD" />
                </td>



            </tr>


        </table>

    </div>


    <div class="FormFields">

        <table style="width: 100%;">
            <tr>
                <td>
                    <table style="float: left;" class="FieldsTable" cellspacing="2">

                        <tr>
                            <td>Disbursed:</td>
                            <td>
                                <input class="myfield" placeholder="" name="firstname" type="text" />
                            </td>
                            
                            <td><img width="20" src="<?php echo "$base/images/calenderBlackIcon.png"; ?>" /></td>
                            

                        </tr>

                        <tr>
                            <td>To:</td>
                            <td>
                                <select name="state" class="myfield"></select>
                            </td>

                        </tr>

                        <tr>
                            <td>Type:</td>
                            <td>
                                <select name="state" class="myfield"></select>
                            </td>



                        </tr>

                        <tr>
                            <td>Check#:</td>
                            <td>
                                <input class="myfield" placeholder="" name="firstname" type="text" />
                            </td>
                            
                             <td><img width="20" src="<?php echo "$base/images/lockIcon.png"; ?>" /></td>
                            

                        </tr>
                        <tr>
                            <td>Check Date:</td>
                            <td>
                                <input class="myfield" placeholder="" name="firstname" type="text" />
                            </td>

                        </tr>
                        <tr>
                            <td>Amount:</td>
                            <td>
                                <input class="myfield" placeholder="" name="firstname" type="text" />
                            </td>
                            
                            

                        </tr>
                        <tr>


                            <td colspan="2">
                                <input class="button medium BtnBlack" type="submit" style="margin-left: 12px;" value="Delete All" />
                                <input class="button medium BtnBlack" type="submit" style="margin-left: 12px;" value="Delete" />
                                <input class="button medium BtnBlack" type="submit" style="margin-left: 12px;" value="Save" />

                            </td>
                        </tr>




                    </table>
                </td>
                <td style="vertical-align: top;">
                    <table style="width: 100%;" cellspacing="0" cellpadding="10">

                        <tr>
                            <td colspan="4" style="color: blue;">Disbursment For Selected Payments</td>
                            
                            <td colspan="2" style="text-align: right;">
                               
                                <label>Hide Zero Amounts</label>
                                <input type="checkbox" class="checkBoxAlign" name="chk5" />
                                
                            </td>
                        </tr>

                       

                        <tr>
                            
                            <th style="font-weight: bold; border-top:2px solid #5f5f5f; border-bottom:2px solid #5f5f5f; text-align: left;">Disbursed</th>
                            <th style="font-weight: bold; border-top:2px solid #5f5f5f; border-bottom:2px solid #5f5f5f; text-align: left;">Type</th>
                            <th style="font-weight: bold; border-top:2px solid #5f5f5f; border-bottom:2px solid #5f5f5f; text-align: left;">Check#</th>
                            <th style="font-weight: bold; border-top:2px solid #5f5f5f; border-bottom:2px solid #5f5f5f; text-align: left;">Check Date</th>
                            <th style="font-weight: bold; border-top:2px solid #5f5f5f; border-bottom:2px solid #5f5f5f; text-align: left;">To</th>
                            <th style="font-weight: bold; border-top:2px solid #5f5f5f; border-bottom:2px solid #5f5f5f; text-align: left;">Amount</th>

                        </tr>

                        <tr>
                            <td>01/31/2015</td>
                            <td>Physical Damage</td>
                            <td></td>
                            <td></td>
                            <td>Client</td>
                            <td>$1,225.00</td>

                        </tr>

                        <tr>
                            <td>01/31/2015</td>
                            <td>Physical Damage</td>
                            <td></td>
                            <td></td>
                            <td>Client</td>
                            <td>$1,225.00</td>

                        </tr>

                        <tr>
                            <td>01/31/2015</td>
                            <td>Physical Damage</td>
                            <td></td>
                            <td></td>
                            <td>Client</td>
                            <td>$1,225.00</td>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="font-weight: bold;">Total</td>
                            <td style="font-weight: bold;">$12340</td>


                        </tr>
                        <tr>

                            <td colspan="6" style="font-weight: bold;"><img src="<?php echo "$base/images/disbursmentIcon.png"; ?>" style="vertical-align: bottom;" /> Disbursment Note:PD Split OK-Purco-$1477330</td>

                        </tr>

                    </table>
                </td>
            </tr>
        </table>

    </div>


    <div class="Grid">
    
    <div style="font-size: 12px; height: 38px; color:#395ac2; width: 100%; font-weight: bold; line-height: 38px; text-indent: 20px;">
        Payments for Claim #: 237415
    </div>

        <table cellspacing="0" cellpadding="10">

            <tr>
                <th><input type="checkbox" /></th>
                <th>Received</th>
                <th>Received Code</th>
                <th>Check#</th>
                <th>Check Date</th>
                <th>Source</th>
                <th>Amount</th>
                <th>Disbursed</th>

            </tr>
            
            <tr>
                <td><input type="checkbox" /></td>
                <td>12/1/2013</td>
                <td>Purco Charged OC</td>
                <td>7152365</td>
                <td>11/1/2013</td>
                <td>Bravery Jhon</td>
                <td>$12300</td>
                <td>$5680</td>

            </tr>
             <tr>
                <td><input type="checkbox" /></td>
                <td>16/1/2014</td>
                <td>Purco Trusted Account</td>
                <td>1234</td>
                <td>12/1/2014</td>
                <td>Bravery Jhon</td>
                <td>$1200</td>
                <td>$677</td>

            </tr>
              <tr>
                <td><input type="checkbox" /></td>
                <td>16/1/2014</td>
                <td>Purco Trusted Account</td>
                <td>1234</td>
                <td>12/1/2014</td>
                <td>Bravery Jhon</td>
                <td>$1200</td>
                <td>$677</td>

            </tr>
              <tr>
                <td><input type="checkbox" /></td>
                <td>16/1/2014</td>
                <td>Purco Trusted Account</td>
                <td>1234</td>
                <td>12/1/2014</td>
                <td>Bravery Jhon</td>
                <td>$1200</td>
                <td>$677</td>

            </tr>
            
               <tr>
                <td><input type="checkbox" /></td>
                <td>16/1/2014</td>
                <td>Purco Trusted Account</td>
                <td>1234</td>
                <td>12/1/2014</td>
                <td>Bravery Jhon</td>
                <td>$1200</td>
                <td>$677</td>

            </tr>

        </table>
    </div>



</div>

<?php $this->load->view('footer'); ?>