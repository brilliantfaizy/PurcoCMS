<?php $this->load->view('header'); ?>

<div id="content">
        
           
                <div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

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
                 <th>Files/YTD</th>
                <th>Last Journal</th>
                
            </tr>

              <tr>
                <td>3D Auto Rental LLC</td>
                <td>RW3D</td>
                <td>Sebring,Florida</td>
                <td>22/10/2012</td>
                <td>0</td>
                <td>0</td>
                 <td>0</td>
                
            </tr>
            
            <tr>
                <td>83 RV,Inc.</td>
                <td>RV83</td>
                <td>Mundelein,Illinois</td>
                <td>07/11/2012</td>
                <td>0</td>
                 <td>0</td>
                  <td>0</td>
                
            </tr>
            <tr>
                 <td>4 Rent Inc.</td>
                <td>IN4R</td>
                <td>Hobart IN</td>
                <td>11/26/2012</td>
                <td>0</td>
                <td>0</td>
                 <td>0</td>
                
            </tr>

        </table>
    </div>
            
            </div>
            
<?php $this->load->view('footer'); ?>            