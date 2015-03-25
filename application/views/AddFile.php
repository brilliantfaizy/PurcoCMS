<?php $this->load->view('header'); ?>

<div id="content">

<div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

    </div>


    <div class="content">
        

        <div class="FormFields">

            <form action="" method="post">
                <table style="float: inherit;" class="FieldsTable" cellpadding="6">

                    <tr>
                        <td>Client Name :</td>
                        <td>
                            <input class="myfield" placeholder="" name="firstname" type="text" />
                        </td>

                        <td>Client Code :</td>
                        <td>
                            <input class="myfield" placeholder="" name="firstname" type="text" />
                        </td>
                    </tr>
                </table>

            </form>

            <div id="dragAndDropFiles" class="uploadArea">
                <h1 style="font-size: 66px;">Drop Files Here</h1>
            </div>
            <form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
                <input type="file" name="multiUpload" id="multiUpload" style="float: right;"  multiple />
                
               <!-- <input type="submit" name="submitHandler" id="submitHandler" value="Upload" class="buttonUpload" />-->
            </form>
            <div class="progressBar">
                <div class="status"></div>
            </div>


        </div>

    </div>

</div>


<?php $this->load->view('footer'); ?>