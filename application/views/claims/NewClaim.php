<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

        <?php $this->load->view('claims/claiminner'); ?>

    </div>

    <div id="innerTabs">


        <?php $this->load->view('claims/claimsubinner'); ?>


    </div>

    <div class="FormFields">
    
         <table style="width: 100%;">
                <tr>
                    <td style="width: 50%;">
                        <table>
                            <tr>
                                <td>Client:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" />
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <input type="text" class="myfield" style="height: 101px;" name="claim" /> </td>
                            </tr>

                            <tr>
                                <td>Location:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" /> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="text" style="height: 101px;" class="myfield" name="claim" /> </td>
                            </tr>
                            <tr>
                                <td>Vehicle:</td>
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
                                    <input type="text" class="myfield" name="claim" /> </td>
                                <td><img src="<?php echo " $base/images/calenderblueIcon.png "; ?>" /></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 50%;">

                        <table>

                            <tr>

                                <td>Client Contact <img style="vertical-align: bottom; margin-left: 10px;" src="<?php echo " $base/images/lockblackIcon.png "; ?>" /></td>
                                <td></td>
                            </tr>

                            <tr>

                                <td>Assigned Employee:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" value="AT&T Programmers" /> </td>
                            </tr>

                            <tr>

                                <td></td>
                                <td>
                                    <input type="text" class="myfield" style="height: 101px;" name="claim" /> </td>
                            </tr>

                            <tr>

                                <td>RA#:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" value="1/31/2015" /> </td>
                            </tr>

                            <tr>

                                <td>Received #:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" /> </td>
                                <td><img src="<?php echo " $base/images/calenderblueIcon.png "; ?>" /></td>
                            </tr>

                            <tr>

                                <td>VIN:</td>
                                <td>
                                    <input type="text" class="myfield" name="claim" /> </td>
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
                                    <select name="state" class="myfield">
                                        <option>2015</option>
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
                                    <select name="state" class="myfield">
                                        <option>None</option>
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
                                    <select name="state" class="myfield">
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
                                    <select name="state" class="myfield">
                                        <option>None</option>
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
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
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
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
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
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
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
                                    <input class="myfield" placeholder="" name="firstname" type="text" />
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
                    <select name="state" class="myfield">
                        <option>Open/Need Information(IO)</option>
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
                        <option>MSPRC</option>
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