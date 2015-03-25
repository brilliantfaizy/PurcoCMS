<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

                <?php $this->load->view('Disbursment/disbursmentinner'); ?>

            </div>
    <div class="FormFields">

        <form action="" method="post">
            
            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Start Date :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>


                </tr>

                <tr>
                    <td>End Date:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>


                </tr>



                <tr>

                    <td></td>
                    <td>
                        <input class="button medium BtnBlack" type="submit"  value="View Disbursed" />
                        <input class="button medium BtnBlack" style="margin-right: 10px;" type="submit" value="Update"  />
                    </td>
                </tr>





            </table>

        </form>

    </div>
 <div id="innerTabs">
            <?php $this->load->view('Disbursment/disbursmentsubinner'); ?>

        </div>
    <div class="Grid">
        
        <table  cellspacing="0" cellpadding="10">

            <tr>
                <th>Claim No.</th>
                <th>Status</th>
                <th>Disbursment %</th>
                <th>Specialist</th>
                <th>Disbursment</th>
                <th>Claim Amount</th>
                <th>Renter's Name</th>
                <th>Link</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email Address</td>
                <td>Validity to</td>
                <td>Validity from</td>
                <td>Role</td>
                <td>Department</td>
                <td><a href="#" onclick="return false;" >Details</a></td>
                <td><a href="#" onclick="return false;">Edit</a></td>
            </tr>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email Address</td>
                <td>Validity to</td>
                <td>Validity from</td>
                <td>Role</td>
                <td>Department</td>
                <td><a href="#" onclick="return false;" >Details</a></td>
                <td><a href="#" onclick="return false;">Edit</a></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email Address</td>
                <td>Validity to</td>
                <td>Validity from</td>
                <td>Role</td>
                <td>Department</td>
                <td><a href="#" onclick="return false;" >Details</a></td>
                <td><a href="#" onclick="return false;">Edit</a></td>
            </tr>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email Address</td>
                <td>Validity to</td>
                <td>Validity from</td>
                <td>Role</td>
                <td>Department</td>
                <td><a href="#" onclick="return false;" >Details</a></td>
                <td><a href="#" onclick="return false;">Edit</a></td>
            </tr>

        </table>
    </div>

</div>
<?php $this->load->view('footer'); ?>