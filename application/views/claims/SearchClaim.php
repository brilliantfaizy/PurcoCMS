<?php $this->load->view('header'); ?>
<div id="content">

<div id="innerMenu">

         <?php $this->load->view('claims/claiminner'); ?>

    </div>
    <div class="FormFields">

        <form action="" method="post">
            
            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Claim Status:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Statue :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                </tr>

                <tr>
                    <td>Priority:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Promissory:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                </tr>

                <tr>
                    <td>Last Worked :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Today :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Hot : </td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    <td>Client Name :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>



                </tr>

                <tr>
                    <td>Employee :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Like Email:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                   
                </tr>
                
                <tr>
                     <td colspan="4">
                        <input class="button medium BtnBlack" type="submit" value="Go" />
                    </td>

                </tr>





            </table>

        </form>

    </div>
    
    <div id="innerTabs">
        
        
          <?php $this->load->view('claims/claimsubinner'); ?>
                
                
     </div>

    <div class="Grid">
        
        <table cellspacing="0" cellpadding="10">

            <tr>
                <th>Claim#</th>
                <th>Status</th>
                <th>Client</th>
                <th>Renter</th>
                <th>Received</th>
                <th>Memo</th>
                <th>Last Worked</th>
                <th>Amount Due</th>

            </tr>


            <tr>
                <td colspan="8">
                    <input type="button" style="float: left;" value="Compute My Stats" class="medium button BtnBlack" />
                </td>
            </tr>



        </table>
    </div>

</div>
<?php $this->load->view('footer'); ?>