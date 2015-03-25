<?php $this->load->view('header'); ?>
<div id="content">
       <div id="innerMenu">
 
                <ul>
                    <li><a class="innerMenuActive" href="#">Add Jurnal Canned Entry</a> </li>
                </ul>


            </div>
    <div class="FormFields">

        <form action="" method="post">
         
            <table class="FieldsTable"  cellpadding="6">

                <tr>
                    <td>Key:</td>
                    <td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                </tr>
                <tr>
                    <td>Viewable By:</td>
                    <td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                </tr>
                <tr>
                    <td>Order:</td>
                    <td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="button" class="medium button" style="margin: 0px;width: 59%;" value="Add Jurnal canned Entry" />
                    </td>
                </tr>

            </table>
        </form>

    </div>

    <div class="Grid">
            <table cellspacing="0" cellpadding="10">

                <tr>
                    <th>Key</th>
                    <th>Description</th>
                    <th>Viewable By</th>
                    <th>Message</th>
                    <th>Order</th>
                    <th>Action</th>

                </tr>

                <tr>
                    <td>key</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td><a href="#" onclick="return false;" style="text-decoration: underline;">Delete</a></td>

                </tr>
                <tr>
                    <td>key</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td><a href="#" onclick="return false;" style="text-decoration: underline;">Delete</a></td>

                </tr>

                <tr>
                    <td>key</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td><a href="#" onclick="return false;" style="text-decoration: underline;">Delete</a></td>

                </tr>
                <tr>
                    <td>key</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td>Description</td>
                    <td><a href="#" onclick="return false;" style="text-decoration: underline;">Delete</a></td>

                </tr>

            </table>
        </div>

</div>
<?php $this->load->view('footer'); ?>