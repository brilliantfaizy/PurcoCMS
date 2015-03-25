<?php $this->load->view('header'); ?>
<div id="content">
    <div id="innerMenu">
 
                <ul>
                    <li><a class="innerMenuActive" href="#">Add Involved Party</a> </li>
                </ul>


            </div>
    <div class="FormFields" >

        <form action="" method="post">
          
            <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>Key:</td><td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                    <td>Description:</td><td>
                        <input type="text" class="myfield" name="start" />
                    </td>
                </tr>
                
                <tr>
                <td></td>
                <td></td>
                    <td></td>
                    <td>
                        <input type="button" class="medium button BtnBlack" value="Add Involved Party Type" />
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
                    <th>Description</th>

                    <th>Action</th>

                </tr>

                <tr>
                    <td>key</td>
                    <td>Description</td>
                    <td>
                        <select class="myfield" name="des">
                            <option>select</option>
                        </select>
                    </td>

                    <td><a href="#" onclick="return false;" >Delete</a></td>

                </tr>

                <tr>
                    <td>key</td>
                    <td>Description</td>
                    <td>
                        <select class="myfield" name="des">
                            <option>select</option>
                        </select>
                    </td>

                    <td><a href="#" onclick="return false;" >Delete</a></td>

                </tr>

                <tr>
                    <td>key</td>
                    <td>Description</td>
                    <td>
                        <select class="myfield" name="des">
                            <option>select</option>
                        </select>
                    </td>

                    <td><a href="#" onclick="return false;">Delete</a></td>

                </tr>
                <tr>
                    <td>key</td>
                    <td>Description</td>
                    <td>
                        <select class="myfield" name="des">
                            <option>select</option>
                        </select>
                    </td>

                    <td><a href="#" onclick="return false;">Delete</a></td>

                </tr>

            </table>
        </div>
   

</div>
<?php $this->load->view('footer'); ?>