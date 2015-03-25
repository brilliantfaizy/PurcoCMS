<?php $this->load->view('header'); ?>
<div id="content">
       
            <div class="FormFields">
            
               
                       <table style="width: 100%;">
                       
                        <tr>
                            <td style="vertical-align: top;">
                            
                       <form action="" method="post">
                       <table style="float: left;" class="FieldsTable" cellpadding="6">
                       
                         <tr>
                             
                             <td>Letters :</td>
                             <td>
                                <select name="letter" class="myfield">
                                <option>------Select Letter------</option>
                                </select>
                             </td>
                        
                        </tr>
                        
                    </table>
                    
                     </form>
                    
                    </td>
                            <td> <input style="margin-right: 10px;" class="button medium BtnBlack" type="button" value="New Letter Template" /></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2">
                                
                                <div class="templatesDiv">
                                    There are no letter templates
                                </div>
                            
                            </td>
                        </tr>
                       
                       </table>
        
               
                
            </div>
            
    
            
</div>

<?php $this->load->view('footer'); ?>