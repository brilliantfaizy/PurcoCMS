<?php $this->load->view('header'); ?>

 <div id="content">
 
  <div id="innerMenu">

        <?php $this->load->view('library/libraryTabs'); ?>

    </div>
        
            <div class="FormFields">
              
                <form action="" method="post">
                
                    <table class="FieldsTable" cellpadding="3">
                        
                        <tr>
                            
                            <td><input  class="myfield" placeholder="" name="username" type="text" /></td>
                            <td><input style="margin: 0;" class="button medium SearchIcon BtnBlack" type="submit" name="submit" value="Search" /></td>
                          
                        </tr>
                        
                        
                        
                        <tr>
                            
                            <td>
                                <input class="checkBoxAlign" name="chk1" type="checkbox" /><label>Library</label>
                                <input class="checkBoxAlign" name="chk2" type="checkbox" /><label>Claim Contacts</label>
                                <input class="checkBoxAlign" name="chk3" type="checkbox" /><label>Claims History</label>
                            </td>
                           
                        </tr>
                        
                    </table>
                
                </form>
                
            </div>
            
            
            
            </div>
            
<?php $this->load->view('footer'); ?>
            