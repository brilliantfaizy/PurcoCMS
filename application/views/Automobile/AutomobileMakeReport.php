<?php $this->load->view('header'); ?>

<div id="content">
 <div id="innerMenu">
 
                <ul>
                    <li><a class="innerMenuActive" href="#">Automobile Make & Models</a> </li>
                </ul>


            </div>
    <div class="FormFields" >

        <form action="" method="post">
            
            <table class="FieldsTable" cellpadding="6">

                <td>
                    <select name="select" class="myfield">
                        <option>Select </option>
                    </select>
                </td>
                <td>
                    <input type="button" class="medium button BtnBlack" style="margin: 0px; margin-left: 10px;" value="Delete" />
                    <input type="button" class="medium button BtnBlack" style="margin: 0px; margin-left: 10px;" value="Edit" />
                    <input type="button" class="medium button BtnBlack" style="margin: 0px; margin-left: 10px;" value="Add" />
                 
                </td>
            </table>
        </form>

    </div>



</div>
<?php $this->load->view('footer'); ?>