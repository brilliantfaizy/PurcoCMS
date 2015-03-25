<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

         <?php $this->load->view('claims/claiminner'); ?>

    </div>

    <div class="FormFields">

        <form action="" method="post">
            
            <table style="float: left;" class="FieldsTable" cellpadding="6">

                <tr>
                    <td>View:</td>
                    <td>
                        
                        
                         <select class="myfield">
                            <option>Danies Jahon</option>
                        </select>
                    </td>


                </tr>

            </table>

        </form>

    </div>
    
     <div id="innerTabs">
        
        
          <?php $this->load->view('claims/claimsubinner'); ?>
                
                
     </div>

    <div class="Grid">
        
        <table cellspacing="0" cellpadding="10">

            <tr>
                <th>Claim#</th>
                <th>Last Payment</th>
                <th>Last Payment Source</th>
                <th>Last Payment Amount</th>
                <th>Last Worked</th>
            </tr>
            
            <tr>
                <td>23123</td>
                <td>12/21/2012</td>
                <td>Preeti Varma</td>
                <td>$135.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
            
            <tr>
                <td>97752</td>
                <td>1/12/2013</td>
                <td>Sabrina Bowerman</td>
                <td>$31.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
            
            
          <tr>
                <td>657568</td>
                <td>15/3/2014</td>
                <td>Feeleeni Aristide</td>
                <td>$75.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
            
            
            <tr>
                <td>47765</td>
                <td>12/21/2012</td>
                <td>Anthony Little Sr</td>
                <td>$67.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
            
          <tr>
                <td>97867</td>
                <td>12/1/2010</td>
                <td>Albert Yepez</td>
                <td>$91.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
            
            <tr>
                <td>56546</td>
                <td>1/2/2011</td>
                <td>May Candeile</td>
                <td>$125.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
           <tr>
                <td>13123</td>
                <td>5/4/2013</td>
                <td>Aric V Wilson</td>
                <td>$115.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
            <tr>
                <td>242344</td>
                <td>5/7/2012</td>
                <td>James Stephny</td>
                <td>$150.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
            <tr>
                <td>232242</td>
                <td>8/9/2013</td>
                <td>Nesarise M Rust</td>
                <td>$121.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>
            <tr>
                <td>98397</td>
                <td>12/21/2012</td>
                <td>Reuben Buchanan</td>
                <td>$50.90</td>
                <td>12/34/2012 23:02:44 PM</td>
            </tr>


        </table>
    </div>

</div>

<?php $this->load->view('footer'); ?>