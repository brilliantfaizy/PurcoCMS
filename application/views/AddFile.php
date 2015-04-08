<?php $this->load->view('header'); ?>

<div id="content">

<div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

    </div>


    <div class="content">
        

        <div class="FormFields">

            <form action="" method="post">
                

            </form>

          
            
            <form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
          <table style="float: inherit;"  class="FieldsTable" cellpadding="6">

                    <tr>
                        <td>Client Name :</td>
                        <td>
                            <input class="myfield" placeholder="" name="firstname" type="text" />
                        </td>

                        <td>Client Code :</td>
                        <td>
                            <input class="myfield" placeholder="" name="firstname" type="text" />
                        </td>
                        <tr><td></td><td colspan="3"><div id="dragAndDropFiles" class="uploadArea">
                <h1 style="font-size: 66px;">Drop Files Here</h1>
            </div></td></tr>
                        <tr><td></td><td>  <input type="file" name="multiUpload" id="multiUpload" style="float: right;"  multiple /></td>
                      <td></td>
                        <td> <input type="submit" name="submitHandler" id="submitHandler" value="Upload" class="button BtnBlack medium" /></td></tr>
                    </tr>
                </table>
            </form>
              
            <div class="progressBar">
                <div class="status"></div>
            </div>


        </div>

    </div>

</div>


<?php $this->load->view('footer'); ?>