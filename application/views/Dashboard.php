<?php $this->

load->view('header'); ?>

<div id="content">


    <div class="ContainerDiv">

        <table style="width: 100%;">
            <tr>
                <td style="width: 30%; padding: 12px;">
                    <div class="dashboardDIv">
                        <table class="dashboardTable">

                            <tr>
                                <th colspan="2"><img width="24" style="margin-right: 12px; vertical-align: inherit;" src="<?php echo " $base/images/dashboard/userIcon.png " ?>">Users/Roles</th>
                            </tr>
                            <tr>
                                <td>Users Online</td>
                                <td style="text-align: right;"><a href="#" onclick="return false;">4</a></td>
                            </tr>
                            <tr>
                                <td>Roles Available</td>
                                <td style="text-align: right;"><a href="#" onclick="return false;">3</a></td>
                            </tr>

                        </table>
                    </div>
                </td>

                <td style="width: 30%;">
                    <div class="dashboardDIv">
                        <table class="dashboardTable">

                            <tr>
                                <th colspan="2"><img width="30" style="margin-right: 12px; vertical-align: inherit;" src="<?php echo " $base/images/dashboard/messageIcon.png " ?>">Messages</th>
                            </tr>
                            <tr>
                                <td>Inbox</td>
                                <td style="text-align: right;"><a href="#" onclick="return false;">12</a></td>
                            </tr>
                            <tr>
                                <td>Sent</td>
                                <td style="text-align: right;"><a href="#" onclick="return false;">8</a></td>
                            </tr>
                            <tr>
                                <td>Favourites</td>
                                <td style="text-align: right;"><a href="#" onclick="return false;">5</a></td>
                            </tr>

                        </table>
                    </div>
                </td>

                <td style="width: 30%; padding: 12px;">

                    <div class="dashboardDIv">
                        <table class="dashboardTable">

                            <tr>
                                <th colspan="2"><img width="26" style="margin-right: 12px; vertical-align: inherit;" src="<?php echo " $base/images/dashboard/calenderIcon.png " ?>">Calender</th>
                            </tr>
                            <tr>
                                <td>Today's</td>
                                <td style="text-align: right;"><a href="#" onclick="return false;">2</a></td>
                            </tr>
                            <tr>
                                <td>Past Week</td>
                                <td style="text-align: right;"><a href="#" onclick="return false;">1</a></td>
                            </tr>
                            <tr>
                                <td>Past Month</td>
                                <td style="text-align: right;"><a href="#" onclick="return false;">10</a></td>
                            </tr>

                        </table>
                    </div>

                </td>
            </tr>
        </table>




    </div>


</div>

<?php $this->load->view('footer'); ?>