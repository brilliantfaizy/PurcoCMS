<?php $this->load->view('header'); ?>
<script>

function insertmake()
{
      $.ajax({
                            url: "<?php echo $base; ?>/index.php/AutomobileController/Insertmake",
                            data: GetFormValues('signupForm'),
                            type: "POST",
                            success: function(data){
                                   
                                    return false;         
                                }, error: function(data){
                                   
                                }
                            }); 
                      
                      return false;
}

function showadd()
{
    $("#showadd").show();
    $("#forshow").hide();
    
}
</script>

<div id="content">
 <div id="innerMenu">
 
                <ul>
                    <li><a class="innerMenuActive" href="#">Automobile Make & Models</a> </li>
                </ul>


            </div>
    <div class="FormFields" >

        <form id="signupForm" action="" method="post">
            
            <table class="FieldsTable" cellpadding="6">

                <td>
                    <select name="select" id="select" class="myfield">
                        <option value>Select </option>
                    </select>
                </td>
                <td><div id="showadd" style="display: none;">
                <input type="text" name="make" class="myfield"/>
                <input type="button" class="BtnBlack button medium" onclick="insertmake(); return false;" style="margin: 0px; margin-left: 10px;" name="add" value="Add" />
                </div></td>
                <td>
                    <input type="button" class="medium button BtnBlack" style="margin: 0px; margin-left: 10px;" value="Delete" />
                    <input type="button" class="medium button BtnBlack" style="margin: 0px; margin-left: 10px;" value="Edit" />
                    <input type="button" class="medium button BtnBlack" onclick="showadd(); return false;" style="margin: 0px; margin-left: 10px;" id="forshow" value="Add" />
                 
                </td>
            </table>
        </form>

    </div>



</div>
<?php $this->load->view('footer'); ?>