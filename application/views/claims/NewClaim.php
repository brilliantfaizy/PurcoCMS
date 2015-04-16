<?php $this->load->view('header'); ?>
<script>
function filldropdown()
{ 
    var dropdownVal = $("#make option:selected").val();
      var options="<option>None</option>" ;
    $.ajax({
         url: "<?php echo $base; ?>/index.php/ClaimController/fillmodel",
         type: "POST",
         data: {id: dropdownVal},
        success: function(data) {

             for(var i=0;i<JSON.parse(data).length; i++)
             {
                    options += "<option value='"+  JSON.parse(data)[i].Model_Id +"'>" + JSON.parse(data)[i].Model +"</option>";              
             }

                 $("#model").html(options);
    }
});
}




</script>


<div id="content">

    <div id="innerMenu">

        <?php $this->load->view('claims/claiminner'); ?>

    </div>

    <div id="innerTabs">


        <?php $this->load->view('claims/claimsubinner'); ?>


    </div>

    <div class="FormFields">
    
         <table cellspacing="8" cellpadding="10" style="width: 100%;">
                <tr>
                    <td  style="width: 50%;">
                        <table cellspacing="8" cellpadding="10">
                        <tr><td></td></tr>
                         <tr><td></td></tr>
                            <tr>
                                <td>Client:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" />
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <select name='claim[]' style="height: 99px;" class="myfield" size="4" multiple>
                                    <?php foreach($client as $c){ ?>
                                            <option value='<?php echo $c->Client_code; ?>'><?php echo $c->Client_name; ?></option>
                                            <?php }?>
                                           
                                             </select> </td>
                            </tr>

                            <tr>
                             <td>Assigned Employee:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" value="AT&T Programmers" /> 
                                    </td>
                                
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                            <select name='employee[]' style="height: 99px;" class="myfield" size="4" multiple>
                                             <?php foreach($employee as $e){ ?>
                                            <option value='<?php echo $e->Emp_Id; ?>'><?php echo $e->LegalName; ?></option>
                                            <?php }?>
                                             </select> </td>
                            </tr>
                            <tr>
                                <td>Vehicle:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" /> </td>
                            </tr>
                            
                        </table>
                    </td>
                    <td style="width: 50%;">

                        <table style="  margin: 0% 0% -2% 0%">

                            <tr>

                                <td>Client Contact <img style="vertical-align: bottom; margin-left: 10px;" src="<?php echo " $base/images/lockblackIcon.png "; ?>" /></td>
                                <td></td>
                            </tr>
                            <tr>
                            <td>Location:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" /> </td>
                            </tr>

                            <tr>

                                <td></td>
                                <td>
                                            <select name='location[]' style="height: 106px;" class="myfield" size="4" multiple>
                                            <option value='blue'>Blue</option>
                                            <option value='green'>Green</option>
                                            <option value='red'>Red</option>
                                            <option value='yellow'>Yelllow</option>
                                            <option value='' selected>Select a Color </option>
                                            <option value='white'>White</option>
                                            </select></td>
                            </tr>
                            <tr>
                                <td>RA#:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" value="1/31/2015" /> </td>
                            </tr>

                            <tr>

                                <td>Received Date:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" /> </td>
                                <td><img onclick="showpicker();" class=" fdatepicker" src="<?php echo " $base/images/calenderblueIcon.png "; ?>" /></td>
                            </tr>

                            <tr>

                                <td>VIN:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" /> </td>
                            </tr>
                            <tr>
                                <td>Client Claim #:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" /> </td>
                            </tr>
                            <tr>
                                <td>Date of Loss:</td>
                                <td>
                                    <input  type="text" class="myfield" name="claim" /> </td>
                                <td><img onclick="showpicker();" class=" fdatepicker" src="<?php echo " $base/images/calenderblueIcon.png "; ?>" /></td>
                            </tr>



                        </table>

                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="button" style="margin-right: 20px;" class="medium button BtnBlack" value="Save" /> </td>
                </tr>

                <tr>

                    <td colspan="2">

                        <table cellpadding="6">
                            <tr>
                                
                                <th colspan="6" style="border-bottom:2px solid #dddddd; text-align: left; color: #34457e !important; font-size: 16px;">Renter</th>
                             
                            </tr>
                            <tr>
                                <td colspan="6">&nbsp;</td>
                               
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>Year:</td>
                                <td>
                                    <select name="year" id="year" class="myfield">
                                    <option>Select Year</option>
                                        <option>2020</option><option>2019</option><option>2017</option><option>2016</option>
                                        <option>2015</option><option>2014</option><option>2013</option><option>2012</option>
                                        <option>2011</option><option>2010</option><option>2009</option><option>2008</option>
                                        <option>2007</option><option>2006</option><option>2005</option><option>2004</option>
                                        <option>2003</option><option>2002</option>
                                    </select>
                                </td>

                            </tr>

                            <tr>
                                <td>Last Name:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>Make:</td>
                                <td>
                                    <select name="make" id="make" onchange="filldropdown(); return false;" class="myfield">
                                        <option>None</option>
                                        <?php foreach($make as $m){?>
                                         <option value="<?php echo $m->Id;?>"><?php echo $m->Make;?></option>
                                        <?php }?>
                                    </select>
                                </td>

                            </tr>

                            <tr>
                                <td>Address:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>Model:</td>
                                <td>
                                    <select name="model" id="model" class="myfield">
                                        <option>None</option>
                                    </select>
                                </td>




                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td></td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <td>City:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>LDW status:</td>
                                <td>
                                    <select name="LDW_status" id="LDW_status" class="myfield">
                                    <option>None</option>
                                        <option>LDW</option>
                                        <option>Partial</option>
                                        <option>Violated</option>
                                        <option>Free-LDW</option>
                                    
                                    </select>
                                </td>




                            </tr>
                            <tr>
                                <td>State:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>Damage:</td>
                                <td>
                                    <textarea class="myfield" style="  height: 40px;" name="firstname"  ></textarea>
                                </td>


                            </tr>

                            <tr>
                                <td>Zip:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                            </tr>

                            <tr>
                                <td>Day Phone:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>
                                    <input class="myfield" placeholder="" style="width: 50%;" name="firstname" type="text" />
                                </td>
                                <td>Overview:</td>
                                <td>
                                      <textarea class="myfield" style="  height: 40px;" name="firstname"  ></textarea>
                                </td>


                            </tr>
                            <tr>
                                <td>Night Phone:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>
                                    <input class="myfield" placeholder="" style="width: 50%;" name="firstname" type="text" />
                                </td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>Mobile Phone:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;</td>
                                <td>Information Needed:</td>
                                <td>
                                      <textarea class="myfield" style="  height: 40px;" name="firstname"  ></textarea>
                                </td>


                            </tr>
                            <tr>
                                <td>International Phone:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;</td>
                                <td></td>
                                <td></td>


                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
                                </td>
                                <td>&nbsp;</td>
                                <td>Story:</td>
                                <td>
                                     <textarea class="myfield" style="  height: 40px;" name="firstname"  ></textarea>
                                </td>


                            </tr>
                        </table>

                    </td>

                </tr>
                
                <tr>
                    <td colspan="2">
                    
                        <table cellpadding="6">
            <tr>
                <th colspan="6" style="border-bottom:2px solid #dddddd; text-align: left; color: #34457e !important; font-size: 16px;">Loss Of Use</th>
                
            </tr>
            <tr>
                <td colspan="6">&nbsp;</td>
                
            </tr>
            <tr>
                <td>Daily Rate:</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td></td>
                <td></td>
                

            </tr>

            <tr>
                <td>Repair Hours:</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Journal Note:</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>

            </tr>

            <tr>
                <td>LOU Days:</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>Loss of Use</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Status</td>
                <td>
                    <select name="status" id="status" class="myfield">
                        <option>Open/Need Information(IO)</option>
                          <option>Open And Being Work(OO)</option>
                            <option>Open/Review(OR)</option>
                    </select>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Physical Damage:</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Completed:</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
            </tr>
            <tr>
                <td>Administrative Fee:</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Damage:</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
            </tr>
        </table>

        <table cellpadding="6">
            <tr>
                <th colspan="6" style="border-bottom:2px solid #dddddd; text-align: left; color: #34457e !important; font-size: 16px;">+ Involved Party</th>
                
            </tr>
            <tr>
                <td colspan="6">&nbsp;</td>
                
            </tr>
            <tr>
                <td>Amounts:</td>
                <td>
                
                    <select name="state" class="myfield">
                         <?php foreach($amount as $a){ ?>
                                            <option value='<?php echo $a->Key; ?>'><?php echo $a->Description; ?></option>
                                            <?php }?>
                    </select>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <input class="myfield" placeholder="" name="firstname" type="text" />
                </td>
                <td>
                    <input type="button" class="button medium BtnBlack" style="margin: 0;" value="+" />
                </td>

            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td></td>
                <td>
                    <input type="button" class="button medium BtnBlack" value="Save" />
                </td>
            </tr>

        </table>
                    
                    </td>
                </tr>
            </table>


    </div>
   



</div>
<?php $this->load->view('footer'); ?>