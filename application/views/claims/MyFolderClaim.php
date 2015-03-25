<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

         <?php $this->load->view('claims/claiminner'); ?>

    </div>

    <div class="FormFields">

        <form action="" method="post">
            
            <table style="float: left;" class="FieldsTable" cellpadding="6">
                <tr>
                    <td colspan="3">
                        <input type="checkbox" checked="true" name="chk1" class="checkBoxAlign" /><label>Display As Tab</label></td>
                </tr>
                <tr>
                    <td>Claim Number :</td>
                    <td>
                        <input type="text" class="myfield" name="claim" /> </td>
                        <td><input style="margin: 0;" type="button" class="medium button BtnBlack" value="Add" /></td>
                    

                </tr>
                
               

            </table>

        </form>

    </div>
    
     
    <div id="innerTabs">
        
        
          <?php $this->load->view('claims/claimsubinner'); ?>
                
                
     </div>

    <div class="Grid">
        
        <table cellspacing="0" cellpadding="10">

            <tr><th></th>
                <th>Claim#</th>
                <th>Status</th>
                <th>Client</th>
                <th>Renter</th>
                <th>Received</th>
                <th>Last Worked</th>
                <th></th>
                
            </tr>
            
            <tr>
                <td>1</td>
                <td>123334</td>
                <td>CC</td>
                <td>GRGRBRW</td>
                <td>Graves,Staceky</td>
                <td>12/4/2011</td>
                <td>12/23/2011 12:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
            
            <tr>
                <td>2</td>
                <td>123334</td>
                <td>CD</td>
                <td>AVACDR</td>
                <td>Turner,Amana</td>
                <td>11/4/2012</td>
                <td>03/3/2011 06:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
            
            
             <tr>
                <td>3</td>
                <td>44665</td>
                <td>C8</td>
                <td>BUDTOAK</td>
                <td>Laclair,John</td>
                <td>10/8/2010</td>
                <td>27/3/2011 06:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
            
             <tr>
                <td>4</td>
                <td>766768</td>
                <td>C8</td>
                <td>BUDTOAK</td>
                <td>Famini,Deauleo</td>
                 <td>11/4/2012</td>
                <td>17/3/2011 06:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
              <tr>
                <td>5</td>
                <td>224235</td>
                <td>C8</td>
                <td>BUDTOAK</td>
                <td>Cathy,Robinson</td>
                <td>10/8/2010</td>
                <td>7/3/2011 06:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
              <tr>
                <td>6</td>
                <td>6587456</td>
                <td>C8</td>
                <td>BUDTOAK</td>
                <td>Richard,John</td>
                <td>11/4/2012</td>
                <td>6/8/2014 06:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
             <tr>
                <td>7</td>
                <td>967556</td>
                <td>C8</td>
                <td>BUDTOAK</td>
                <td>Marry,Elise</td>
                <td>10/8/2010</td>
                <td>12/6/2013 06:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
            
             <tr>
                <td>8</td>
                <td>6465474</td>
                <td>C8</td>
                <td>BUDTOAK</td>
                <td>Laclair,John</td>
                <td>10/8/2014</td>
                <td>27/63/2011 06:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
               <tr>
                <td>9</td>
                <td>143433</td>
                <td>C8</td>
                <td>BUDTOAK</td>
                <td>Miller,Wilson</td>
                <td>11/6/2010</td>
                <td>7/3/2013 06:23:22 PM</td>
               <td><a href="">Delete</a></td> 
            </tr>
            

        </table>
    </div>

</div>

<?php $this->load->view('footer'); ?>