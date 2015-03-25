<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

        <?php $this->load->view('payments/paymentinner'); ?>

    </div>

    <div class="FormFields">

        <form action="" method="post">
            
            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Receive Date:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Claim No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                </tr>

                <tr>
                    <td>Payment Type:</td>
                    <td>
                        <select name="title" class="myfield"></select>
                    </td>

                    <td>Source:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                </tr>

                <tr>
                    <td>Alternate Source:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

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

                    <td>Check Image Attachment:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>
                <tr>
                    <td>Amount: </td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Payment Method:</td>
                    <td>
                        <select name="title" class="myfield"></select>
                    </td>

                </tr>
                
                 <tr>
                    <td colspan="4" style="text-align: right;">
                        <input class="button medium BtnBlack" type="submit" value="Save" />
                        <input class="button medium BtnBlack" style="margin-right: 12px;" type="reset" value="Clear" />
                    </td>
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
                <th>Insured Status</th>
                <th>Client</th>
                <th>Specialist</th>
                <th>Status</th>
                <th>Amount Due</th>

            </tr>

          <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>
            
             <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>
            
             <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>
             <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>
             <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>
            
             <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>
            
             <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr> <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>
             <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>
             <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr> <tr>
                <td>Insured Status</td>
                <td>Client</td>
                <td>Specialist</td>
                <td>Status</td>
                <td>Amount Due</td>

            </tr>

        </table>
    </div>

</div>

<?php $this->load->view('footer'); ?>