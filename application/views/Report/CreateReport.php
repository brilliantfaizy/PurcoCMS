<?php $this->load->view('header'); ?>
<div id="content">
  <div id="innerMenu">

            <?php $this->load->view('Report/reportinner'); ?>

        </div>
    <div class="FormFields" >
       
        <form action="" method="post">

            <table class="FieldsTable" cellpadding="3">

                <tr>
                    <td>Category</td>
                    <td>
                        <select class="myfield" name="username">
                            <option>Select Category</option>
                        </select>
                    </td>


                    <td>Reports</td>
                    <td>
                        <select class="myfield" name="username">
                            <option>Select Reports</option>
                        </select>
                    </td>

                </tr>





            </table>

        </form>

    </div>

    <div class="FormFields">
        <div style="width:100%;height: 50px;background-color: black;color: white;font-size: medium;text-align: start;">
            <br/>Claim Count By Received(Locked)
            <input type="button" class="medium" style="margin: -.5% 49% 0% 0%;" value="Save Report" />
            <input type="button" class="medium" style="margin: -.5% 2% 0% 0%;" value="Run Report" />
        </div>

        <table >
            <tr>
                <td>
                    <label style="font-size:22px ;">EXPORT CONFIG:</label>
                    <label style="font-size:22px; color:blue;">XML</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="font-size:22px ;">SAVED REPORT:</label>
                    <label style="font-size:22px ;color:blue;">VIEW</label>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>Start Date:
                    <input type="text" class="myfield" name="sdate" />
                </td>
                <td>End Date:
                    <input type="text" class="myfield" name="edate" />
                </td>
            </tr>
        </table>
        <div style="width: 100%;height: 45px; background-color: rgb(231, 231, 231);font-size: medium;text-align: start;border-radius: 14px;">
            <br/>&nbsp;&nbsp;&nbsp;There are no available sub reports. </div>

    </div>
</div>
<?php $this->load->view('footer'); ?>