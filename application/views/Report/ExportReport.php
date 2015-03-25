<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

            <?php $this->load->view('Report/reportinner'); ?>

        </div>
    <div class="FormFields">
     

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

    <div class="FormFields" >

    </div>

</div>
<?php $this->load->view('footer'); ?>