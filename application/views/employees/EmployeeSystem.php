<?php $this->load->view('header'); ?>
<div id="content">

<div id="innerMenu">

         <?php $this->load->view('employees/EmployeeTabs'); ?>

    </div>
	   
    <div id="innerTabs">
        
        
                <?php $this->load->view('employees/employeeinner'); ?>
                
                
     </div>

    <div class="FormFields">

        <form action="" method="post">
            

            <table class="FieldsTable" style="font-size: 22px; " cellpadding="6">

                
                <tr>
                    <td>Default Claim View:</td>
                    <td>
                        <select name="view" class="myfield"></select>
                    </td>
                    
                    <td>Notification Email Address:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>

                </tr>

                <tr>


                    <td>Default Printer:</td>
                    <td>
                        <select name="printer" class="myfield"></select>
                    </td>
                    
                    <td>Email BBC Preference:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="password" />
                    </td>
                    
                    <td>New Order:</td>
                    <td>
                        <select name="order" class="myfield"></select>
                    </td>



                </tr>

                <tr>
                    <td>Email Address:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    <td></td>
                    <td></td>


                </tr>


                <tr>


                    <td colspan="4">
                        <input class="button medium" type="submit" value="Save" />
                      
                    </td>
                </tr>


            </table>

        </form>

    </div>
 



</div>
<?php $this->load->view('footer'); ?>