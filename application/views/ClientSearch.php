
<?php $this->load->view('header'); ?>
<div id="content">

<div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

    </div>
        
            <div class="FormFields">
                
                <form action="" method="post">
              
                    <table class="FieldsTable" cellpadding="6">
                        
                        <tr>
                            <td>Client Name :</td>
                            <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                            <td>Client Code :</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                        </tr>
                        
                        <tr>
                            <td> Client Type:</td>
                            <td><select name="title" class="myfield"></select></td>
                            
                            <td>Client Priority :</td>
                             <td><select name="title" class="myfield"></select></td>
                        </tr>
                        
                         <tr>
                            <td>Fleet size :</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                            <td>Contact First Name:</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                        </tr>
                         <tr>
                            <td> Contact Last Name:</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                            <td>Client Status :</td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                        </tr>
                        
                         <tr>
                            <td> Street Address:  </td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                             <td> City:  </td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                                </tr>
                        
                         <tr>
                            <td> Zip:  </td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            <td> State:  </td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            <td><input type="checkbox" name="chk1" /></td>
                            </tr>
                        
                        
                             <tr>
                               <td> Country:  </td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                             
                             <td> Fax/Phone:  </td>
                             <td><input class="myfield" placeholder="" name="firstname" type="text" /></td>
                            
                             
                            </tr>
                            
                            <tr>
                            <td>Contact Last Name:</td>
                            <td><input type="checkbox" name="chk2"/></td>
                            <td colspan="2"></td>
                            
                            </tr>
                            
                            <tr>
                                <td colspan="4"><input class="button medium" type="submit" value="Go" /></td>
                            </tr>
                        
                    </table>
                
                </form>
                
            </div>
            
       <div id="innerTabs">
        
        
        <?php $this->load->view('ClientInnerTabs'); ?>

    </div>
            
            <div class="Grid">

        <table cellspacing="0" cellpadding="10">

           <tr>
                <th>Claim Name</th>
                <th>Code</th>
                <th>Region</th>
                <th>Last File</th>
                <th>Files/Month</th>
                <th>Last Journal</th>
                
            </tr>

            <tr>
                <td>3D Auto Rental LLC</td>
                <td>RW3D</td>
                <td>Sebring,Florida</td>
                <td>22/10/2012</td>
                <td>0</td>
                <td></td>
                
            </tr>
            
            <tr>
                <td>83 RV,Inc.</td>
                <td>RV83</td>
                <td>Mundelein,Illinois</td>
                <td>07/11/2012</td>
                <td>0</td>
                <td></td>
                
            </tr>
            <tr>
                 <td>4 Rent Inc.</td>
                <td>IN4R</td>
                <td>Hobart IN</td>
                <td>11/26/2012</td>
                <td>0</td>
                <td></td>
                
            </tr>
 

        </table>
    </div>
            
            </div>
            
<?php $this->load->view('footer'); ?>