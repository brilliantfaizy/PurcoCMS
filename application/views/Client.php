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
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Client Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Client Type:</td>
                    <td>
                        <select name="type" class="myfield">
                            <option>select</option>
                        </select>
                    </td>

                    <td>Client Website:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Client Priority:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="email" />
                    </td>

                    <td>Fleet Size:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="email" />
                    </td>



                </tr>

                <tr>
                    <td>Employee Contact :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="password" />
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
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Fax No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Address Line1:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Address Line2:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="email" />
                    </td>

                    <td>State:</td>
                    <td>
                        <select name="state" class="myfield"><option>select</option></select>
                    </td>



                </tr>

                <tr>
                    <td>Zip:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="password" />
                    </td>
                    <td colspan="2"></td>


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
                        <select name="title" class="myfield"><option>select</option></select>
                    </td>

                    <td>First Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Mobile No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Email:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="email" />
                    </td>

                    <td>Address Line1:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="email" />
                    </td>



                </tr>

                <tr>
                    <td colspan="4"></td>
                </tr>

                <tr>
                    <td>Address Line2:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="password" />
                    </td>

                    <td>City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="email" />
                    </td>


                </tr>
                <tr>
                    <td>State:</td>
                    <td>
                        <select name="state" class="myfield"><option>select</option></select>
                    </td>

                    <td>Zip:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="email" />
                    </td>


                </tr>



                <tr>
                    <td>Status:</td>
                    <td>
                        <select name="status" class="myfield"><option>select</option></select>
                    </td>

                    <td colspan="2">

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