<?php $this->load->view('header'); ?>
<div id="content">

    <div id="innerMenu">

        <?php $this->load->view('calender/calenderTabs'); ?>

    </div>

            <div class="FormFields" style="padding: 10px;">

                <form action="" method="post">
                
                <table class="FieldsTable" cellpadding="6">
                    <tr>
                    
                    <td style="vertical-align: top;">
                <table class="FieldsTable" cellpadding="6">

                <tr>
                    <td>What :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    <td></td>

                   
                </tr>
                
                <tr>
                    <td>When :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    <td>
                        <img src="<?php echo "$base/images/calenderIcon.png"; ?>"
                    </td>

                </tr>
                
                <tr>
                    <td>When :</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" type="text" />
                    </td>
                    <td>
                        <img src="<?php echo "$base/images/clockIcon.png"; ?>"
                    </td>

                   
                </tr>
                
                </table>
                    </td>
                    
                    <td style="vertical-align: top;"> 
                    
                <table class="FieldsTable" cellpadding="6">

                <tr>
                    

                    <td style="vertical-align: top;">Description :</td>
                    <td>
                        <textarea style="height: 118px;" class="myfield" name="firstname" >
                        </textarea>
                    </td>
                </tr>
                
                <tr>
                     <td></td>
                    <td>
                       <input class="button medium BtnBlack" type="submit" value="Create Event" />
                    </td>
                </tr>
                
                
                </table>
                
                </td>
                    
                    </tr>
                </table>
                
                

                </form>

            </div>
            
            <div style=" clear: both; height: 115px; width: 100%;">
                <a class="calenderRefreshBtn" href="#" onclick="return false;">Refresh</a>
            </div>

            <div class="Grid">
            

             <table class="calender" cellpadding="0" cellspacing="0">
                    <caption class="CalenderHead">Jan, 2015</caption>
                    <col class="weekend">
                        <col class="weekday" span="5">
                            <col class="weekend">
                                <thead>
                                    <tr>
                                        <th style="width: 50px !important; background-color: #fff !important;"></th>
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                        <th style="width: 50px !important; background-color: #fff !important;"></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td style="background-color: #fff !important; border: none !important;"></td>
                                        <td>
                                            <div class="day">1</div>
                                        </td>
                                        <td>
                                            <div class="day">2</div>
                                        </td>
                                        <td>
                                            <div class="day">3</div>
                                        </td>
                                        <td>
                                            <div class="day">4</div>
                                        </td>
                                        <td>
                                            <div class="day">5</div>
                                        </td>
                                        <td class="birthday">
                                            <div class="day">6</div>
                                            <div class="notes">It's my birthday!</div>
                                        </td>
                                        <td>
                                            <div class="day">7</div>
                                        </td>
                                        <td style="background-color: #fff !important; border: none !important;"></td>
                                    </tr>
                                    <tr>
                                    <td style="background-color: #fff !important; border: none !important;"></td>
                                        <td>
                                            <div class="day">8</div>
                                        </td>
                                        <td>
                                            <div class="day">9</div>
                                        </td>
                                        <td>
                                            <div class="day">10</div>
                                        </td>
                                        <td>
                                            <div class="day">11</div>
                                        </td>
                                        <td>
                                            <div class="day">12</div>
                                        </td>
                                        <td>
                                            <div class="day">13</div>
                                        </td>
                                        <td>
                                            <div class="day">14</div>
                                        </td>
                                        <td style="background-color: #fff !important; border: none !important;"></td>
                                    </tr>
                                    <tr>
                                    <td style="background-color: #fff !important; border: none !important;"></td>
                                        <td>
                                            <div class="day">1</div>
                                        </td>
                                        <td>
                                            <div class="day">2</div>
                                        </td>
                                        <td>
                                            <div class="day">3</div>
                                        </td>
                                        <td>
                                            <div class="day">4</div>
                                        </td>
                                        <td>
                                            <div class="day">5</div>
                                        </td>
                                        <td class="birthday">
                                            <div class="day">6</div>
                                            
                                        </td>
                                        <td>
                                            <div class="day">7</div>
                                        </td>
                                        <td style="background-color: #fff !important; border: none !important;"></td>
                                    </tr>
                                    <tr>
                                    <td style="background-color: #fff !important; border: none !important;"></td>
                                        <td>
                                            <div class="day">8</div>
                                        </td>
                                        <td>
                                            <div class="day">9</div>
                                        </td>
                                        <td>
                                            <div class="day">10</div>
                                        </td>
                                        <td>
                                            <div class="day">11</div>
                                        </td>
                                        <td>
                                            <div class="day">12</div>
                                        </td>
                                        <td>
                                            <div class="day">13</div>
                                        </td>
                                        <td>
                                            <div class="day">14</div>
                                        </td>
                                        <td style="background-color: #fff !important; border: none !important;"></td>
                                    </tr>
                                    <tr>
                                    <td style="background-color: #fff !important; border: none !important;"></td>
                                        <td>
                                            <div class="day">1</div>
                                        </td>
                                        <td>
                                            <div class="day">2</div>
                                        </td>
                                        <td>
                                            <div class="day">3</div>
                                        </td>
                                        <td>
                                            <div class="day">4</div>
                                        </td>
                                        <td>
                                            <div class="day">5</div>
                                        </td>
                                        <td class="birthday">
                                            <div class="day">6</div>
                                            
                                        </td>
                                        <td>
                                            <div class="day">7</div>
                                        </td>
                                        <td style="background-color: #fff !important; border: none !important;"></td>
                                    </tr>
                                    <tr>
                                    <td style="background-color: #fff !important; border: none !important;"></td>
                                        <td>
                                            <div class="day">8</div>
                                        </td>
                                        <td>
                                            <div class="day">9</div>
                                        </td>
                                        <td>
                                            <div class="day">10</div>
                                        </td>
                                        <td>
                                            <div class="day">11</div>
                                        </td>
                                        <td>
                                            <div class="day">12</div>
                                        </td>
                                        <td>
                                            <div class="day">13</div>
                                        </td>
                                        <td>
                                            <div class="day">14</div>
                                        </td>
                                        <td style="background-color: #fff !important; border: none !important;"></td>
                                    </tr>
                                    
                                    <tr>
                                     <td style="background-color: #fff !important; border: none !important;"></td>
                                        <td style="background-color: #fff !important; border: none !important;" colspan="7"></td>
                                    <td style="background-color: #fff !important; border: none !important;"></td>
                                    </tr>
                                   
                                </tbody>
                </table>
            </div>

        </div>
        
<?php $this->load->view('footer'); ?>