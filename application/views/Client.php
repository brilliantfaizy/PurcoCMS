<?php $this->load->view('header'); ?>

<div id="content">

    <div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

    </div>

    <div class="FormFields">

        <form action="" method="post">

            <table class="FieldsTable" cellpadding="6">
                <tr>
                    <th colspan="4">Client Details</th>
                    </th>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td>Client Code:</td>
                    <td>
                     <input class="myfield" placeholder="" type="hidden" name="client_code" id="client_code" value="<?php echo $ClientCode; ?>" disabled="" />
                  
                        <input class="myfield" placeholder=""  type="text" value="<?php echo $ClientCode; ?>" disabled="" />
                    </td>

                    <td>Client Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="clientname" id="clientname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Client Type:</td>
                    <td>
                        <select name="type" class="myfield" id="type">
                            <option>select</option>
                        </select>
                    </td>

                    <td>Client Website:</td>
                    <td>
                        <input class="myfield" placeholder="" name="website" id="website" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Client Priority:</td>
                    <td>
                        <input class="myfield" placeholder="" name="clientpriority" id="clientpriority" type="text" />
                    </td>

                    <td>Fleet Size:</td>
                    <td>
                        <input class="myfield" placeholder="" name="fleetsize" id="fleetsize" type="text" />
                    </td>



                </tr>

                <tr>
                    <td>Employee Contact :</td>
                    <td>
                        <input class="myfield" placeholder="" name="emp_contact" id="emp_contact" type="text" />
                    </td>
                    <td colspan="2"></td>


                </tr>



                <tr>
                    <td colspan="4"></td>
                </tr>

                <tr>
                    <th colspan="4">Mailing Address</th>

                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>

                </tr>
                <tr>
                    <td>Day Phone:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mdayphone" id="mdayphone" type="text" />
                    </td>

                    <td>Fax No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mfaxno" id="mfaxno" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Address Line1:</td>
                    <td>
                        <input class="myfield" placeholder="" name="maddress1" id="maddress1" type="text" />
                    </td>

                    <td>Address Line2:</td>
                    <td>
                        <input class="myfield" placeholder="" name="maddress2" id="maddress2" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mcity" id="mcity" type="text" />
                    </td>

                    <td>State:</td>
                    <td>
                        <select name="mstate" id="mstate"  class="myfield"><option>select</option></select>
                    </td>



                </tr>

                <tr>
                    <td>Zip:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mzip" id="mzip" type="text" />
                    </td>
                    <td>Mobile:</td>
                    <td>
                       <input class="myfield" placeholder="" name="mmobileno" id="mmobileno" type="text" />
                    </td>

                </tr>


                <tr>
                    <td colspan="4"></td>
                </tr>

                <tr>
                    <th colspan="4">Personal Info</th>

                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>

                </tr>
                <tr>
                    <td>Title:</td>
                    <td>
                        <select name="title" id="title" class="myfield"><option>select</option></select>
                    </td>

                    <td>First Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" id="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="lastname" id="lastname" type="text" />
                    </td>

                    <td>Mobile No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pmobileno" id="mobileno" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Email:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pemail" id="pemail" type="email" />
                    </td>

                    <td>Address Line1:</td>
                    <td>
                        <input class="myfield" placeholder="" name="paddress1" id="paddress1" type="text" />
                    </td>



                </tr>

                <tr>
                    <td colspan="4"></td>
                </tr>

                <tr>
                    <td>Address Line2:</td>
                    <td>
                        <input class="myfield" placeholder="" name="paddress2" id="paddress2" type="text" />
                    </td>

                    <td>City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pcity" id="pcity" type="text" />
                    </td>


                </tr>
                <tr>
                    <td>State:</td>
                    <td>
                        <select name="pstate" id="pstate" class="myfield"><option>select</option></select>
                    </td>

                    <td>Zip:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pzip" id="pzip" type="text" />
                    </td>


                </tr>
 <tr>
                    <td>Fax No.:</td>
                    <td>
                       <input class="myfield" placeholder="" name="pfaxno" id="pfaxno" type="text" />
                    </td>

                     <td>Phone No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pphone" id="pphone" type="text" />
                    </td>
                </tr>



                <tr>
                    <td>Status:</td>
                    <td>
                        <select name="status" id="status" class="myfield"><option>select</option></select>
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



</div>



<?php $this->load->view('footer'); ?>