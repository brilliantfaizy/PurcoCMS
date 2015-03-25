<?php $this->load->view('header'); ?>
<div id="content">
 <div id="innerMenu">
 
                <ul>
                    <li><a class="innerMenuActive" href="#">Organization Type</a> </li>
                </ul>


            </div>
    <div class="FormFields">

        <form action="" method="post">

            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Key :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                    <td>Description :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                </tr>





                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <input class="button medium BtnBlack" type="submit"  value="Add Organization Type" />
                    </td>
                </tr>

            </table>

        </form>

    </div>

    <div class="Grid">

        <table  cellspacing="0" cellpadding="10">

            <tr>
                <th>Key</th>
                <th>Description</th>
                <th></th>

            </tr>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>

                <td><a href="#" onclick="return false;">Delete</a></td>
            </tr>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>

                <td><a href="#" onclick="return false;">Delete</a></td>
            </tr>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>

                <td><a href="#" onclick="return false;">Delete</a></td>
            </tr>

            <tr>
                <td>First Name</td>
                <td>Last Name</td>

                <td><a href="#" onclick="return false;">Delete</a></td>
            </tr>

        </table>
    </div>

</div>
<?php $this->load->view('footer'); ?>