<?php $this->load->view('header'); ?>
<div id="content">
   <div id="innerMenu">
 
                <ul>
                    <li><a class="innerMenuActive" href="#">Checks</a> </li>
                </ul>


            </div>
    <div class="FormFields" >

        <form action="" method="post">
          
            <table class="FieldsTable"  cellpadding="6">

                <td>Start Date:</td><td>
                    <input type="text" class="myfield" name="start" />
                </td>
                <td>End Date:</td><td>
                    <input type="text" class="myfield" name="end" />
                </td>
                <td>
                    <input type="button" class="medium button BtnBlack" style="margin: 0;"  value="Update" />
                </td>

            </table>
        </form>

    </div>


        <div class="Grid">
            <table  cellspacing="0" cellpadding="10">

                <tr>
                    <th>Client</th>
                    <th>Claim</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Image</th>

                </tr>

                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email Address</td>
                    <td>Validity to</td>
                    <td>Validity from</td>
                    <td>Role</td>
                    <td>Department</td>
                    <td><a href="#" onclick="return false;" >Preview</a></td>

                </tr>

                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email Address</td>
                    <td>Validity to</td>
                    <td>Validity from</td>
                    <td>Role</td>
                    <td>Department</td>
                    <td><a href="#" onclick="return false;" >Preview</a></td>
                </tr>


                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email Address</td>
                    <td>Validity to</td>
                    <td>Validity from</td>
                    <td>Role</td>
                    <td>Department</td>
                    <td>
                        <input type="button" class="medium button BtnBlack" value="Choose File" />
                    </td>

                </tr>

                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email Address</td>
                    <td>Validity to</td>
                    <td>Validity from</td>
                    <td>Role</td>
                    <td>Department</td>
                    <td>
                        <input type="button" class="medium button BtnBlack" value="Choose File" />
                    </td>

                </tr>

            </table>
        </div>
   

</div>
<?php $this->load->view('footer'); ?>