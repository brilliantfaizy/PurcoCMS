
<?php $this->load->view('header'); ?>
<div id="content">

 <div id="innerMenu">
 
                <ul>
                    <li><a class="innerMenuActive" href="#">Add Geograpical Location</a> </li>
                </ul>


            </div>

    <div class="FormFields">

        <form action="" method="post">
            
            <table class="FieldsTable"  cellpadding="6">

                <tr>
                    <td>Province:</td><td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                    <td>Province Abbreviation:</td><td>
                        <input type="text" class="myfield" name="end" />
                    </td>
                </tr>
                <tr>
                    <td>Country:</td>
                    <td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                    <td>Country Abbreviation:</td>
                    <td>
                        <input type="text" class="myfield" name="end" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="button" class="medium button BtnBlack"  value="Add Geograpical Location" />
                    </td>
                </tr>

            </table>
        </form>

    </div>

    <div class="Grid">
            <table cellspacing="0" cellpadding="10">

                <tr>
                    <th>Province</th>
                    <th>Province Abbreviation</th>
                    <th>Country</th>
                    <th>Country Abbreviation</th>
                    <th>Action</th>

                </tr>

                <tr>
                    <td>Validity to</td>
                    <td>Validity from</td>
                    <td>Role</td>
                    <td>Department</td>
                    <td><a href="#" onclick="return false;" style="text-decoration: underline;">Delete</a></td>

                </tr>

                <tr>
                    <td>Validity to</td>
                    <td>Validity from</td>
                    <td>Role</td>
                    <td>Department</td>
                    <td><a href="#" onclick="return false;" style="text-decoration: underline;">Delete</a></td>

                </tr>

                <tr>
                    <td>Validity to</td>
                    <td>Validity from</td>
                    <td>Role</td>
                    <td>Department</td>
                    <td><a href="#" onclick="return false;" style="text-decoration: underline;">Delete</a></td>

                </tr>
                <tr>
                    <td>Validity to</td>
                    <td>Validity from</td>
                    <td>Role</td>
                    <td>Department</td>
                    <td><a href="#" onclick="return false;" style="text-decoration: underline;">Delete</a></td>

                </tr>

            </table>
        </div>

</div>
<?php $this->load->view('footer'); ?>