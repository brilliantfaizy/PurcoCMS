<?php $this->load->view('header'); ?>
<script>
    $().ready(function() {
        // validate the comment form when it is submitted


        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                //clientname: "required",
                clientname: {
                    required: true,
                    minlength: 4
                },
                website: {
                    required: true
                  
                },
                clientpriority: {
                    required: true
                },
                fleetsize: {
                    required: true
                    
                },
                emp_contact: {
                    required: true
                   
                },

                mdayphone: {
                    required: true
                },
                mfaxno: {
                    required: true
                },
                
                 maddress1: {
                    required: true
                },
                 maddress2: {
                    required: true
                },
                 mcity: {
                    required: true
                },
                 mzip: {
                    required: true
                },
                 mmobileno: {
                    required: true
                },
                 firstname: {
                    required: true
                },
                 lastname: {
                    required: true
                },
                 pmobileno: {
                    required: true
                },
                 pemail: {
                    required: true
                },
                 paddress1: {
                    required: true
                },
                 paddress2: {
                    required: true
                },
                 pcity: {
                    required: true
                },
                 pzip: {
                    required: true
                },
                 pfaxno: {
                    required: true
                },
                 pphone: {
                    required: true
                }
            },
            messages: {
                clientname: "Please enter Client Name",
                website: "Please enter Website",
                clientpriority: "Must Fill it.",
                fleetsize:"Must Fill it.",
                emp_contact: "Must Fill it.",
                mdayphone:"Must Fill it.",
                mfaxno: "Must Fill it.",
                maddress1:"Must Fill it.",
                maddress2: "Must Fill it.",
                mcity: "Must Fill it.",
                mzip: "Must Fill it.",
                mmobileno: "Must Fill it.",
                firstname: "Must Fill it.",
                lastname: "Must Fill it.",
                pmobileno: "Must Fill it.",
                pemail: "Must Fill it.",
                paddress1: "Must Fill it.",
                paddress2: "Must Fill it.",
                pcity: "Must Fill it.",
                pzip: "Must Fill it.",
                pfaxno: "Must Fill it.",
                pphone: "Must Fill it."


            }, submitHandler: function insertClient() {
                        
                         $.ajax({
                            url: "<?php echo $base; ?>/index.php/ClientController/insert",
                            data: GetFormValues('signupForm'),
                            type: "POST",
                            success: function(data) {
                                
                                    alert(JSON.parse(data).msg);
                                    
                                
                                }, error: function(data){
                                    
                                    alert(data);  
                                    
                                }
                            }); 
                      
                      return false;
                }
        });
        
        
        
     
    });
    
    
    </script>
    <style>
    #signupForm label.error {
        display: table;
        color: red;
    }
    
    #signupForm input.error {
        border: red;
    }
</style>
<div id="content">

    <div id="innerMenu">

        <?php $this->load->view('clientTabs'); ?>

    </div>

    <div class="FormFields">

        <form action="insert" id="signupForm" method="post">

            <table class="FieldsTable" cellpadding="6">
                <tr>
                    <th colspan="4">Client Details</th>
                    </th>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td>Client Code:</td>
                    <td>
                     <input class="myfield"  type="hidden" name="client_code" id="client_code" value="<?php echo $ClientCode; ?>"  />
                  
                        <input class="myfield" placeholder=""  type="text" value="<?php echo $ClientCode; ?>" disabled="" />
                    </td>

                    <td>Client Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="clientname" id="clientname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Client Type:</td>
                    <td>
                        <select name="type1" class="myfield" id="type1">
                            <option>select</option>
                        </select>
                    </td>

                    <td>Client Website:</td>
                    <td>
                        <input class="myfield" placeholder="" name="website" id="website" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Client Priority:</td>
                    <td>
                        <input class="myfield" placeholder="" name="clientpriority" id="clientpriority" type="text" />
                    </td>

                    <td>Fleet Size:</td>
                    <td>
                        <input class="myfield" placeholder="" name="fleetsize" id="fleetsize" type="text" />
                    </td>



                </tr>

                <tr>
                    <td>Employee Contact :</td>
                    <td>
                        <input class="myfield" placeholder="" name="emp_contact" id="emp_contact" type="text" />
                    </td>
                    <td colspan="2"></td>


                </tr>



                <tr>
                    <td colspan="4"></td>
                </tr>

                <tr>
                    <th colspan="4">Mailing Address</th>

                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>

                </tr>
                <tr>
                    <td>Day Phone:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mdayphone" id="mdayphone" type="text" />
                    </td>

                    <td>Fax No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mfaxno" id="mfaxno" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Address Line1:</td>
                    <td>
                        <input class="myfield" placeholder="" name="maddress1" id="maddress1" type="text" />
                    </td>

                    <td>Address Line2:</td>
                    <td>
                        <input class="myfield" placeholder="" name="maddress2" id="maddress2" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mcity" id="mcity" type="text" />
                    </td>

                    <td>State:</td>
                    <td>
                        <select name="mstate" id="mstate"  class="myfield"><option>select</option></select>
                    </td>



                </tr>

                <tr>
                    <td>Zip:</td>
                    <td>
                        <input class="myfield" placeholder="" name="mzip" id="mzip" type="text" />
                    </td>
                    <td>Mobile:</td>
                    <td>
                       <input class="myfield" placeholder="" name="mmobileno" id="mmobileno" type="text" />
                    </td>

                </tr>


                <tr>
                    <td colspan="4"></td>
                </tr>

                <tr>
                    <th colspan="4">Personal Info</th>

                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>

                </tr>
                <tr>
                    <td>Title:</td>
                    <td>
                        <select name="title" id="title" class="myfield"><option>select</option></select>
                    </td>

                    <td>First Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="firstname" id="firstname" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td>
                        <input class="myfield" placeholder="" name="lastname" id="lastname" type="text" />
                    </td>

                    <td>Mobile No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pmobileno" id="mobileno" type="text" />
                    </td>

                </tr>

                <tr>
                    <td>Email:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pemail" id="pemail" type="email" />
                    </td>

                    <td>Address Line1:</td>
                    <td>
                        <input class="myfield" placeholder="" name="paddress1" id="paddress1" type="text" />
                    </td>



                </tr>

                <tr>
                    <td colspan="4"></td>
                </tr>

                <tr>
                    <td>Address Line2:</td>
                    <td>
                        <input class="myfield" placeholder="" name="paddress2" id="paddress2" type="text" />
                    </td>

                    <td>City:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pcity" id="pcity" type="text" />
                    </td>


                </tr>
                <tr>
                    <td>State:</td>
                    <td>
                        <select name="pstate" id="pstate" class="myfield"><option>select</option></select>
                    </td>

                    <td>Zip:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pzip" id="pzip" type="text" />
                    </td>


                </tr>
 <tr>
                    <td>Fax No.:</td>
                    <td>
                       <input class="myfield" placeholder="" name="pfaxno" id="pfaxno" type="text" />
                    </td>

                     <td>Phone No.:</td>
                    <td>
                        <input class="myfield" placeholder="" name="pphone" id="pphone" type="text" />
                    </td>
                </tr>



                <tr>
                    <td>Status:</td>
                    <td>
                        <select name="status" id="status" class="myfield"><option>select</option></select>
                    </td>

                    
                </tr>




                <tr>
                    <td colspan="4" style="text-align: right;">
                        <input class="button medium BtnBlack" type="submit" value="Save" />
                        <input class="button medium BtnBlack" style="margin-right: 12px;" type="reset" value="Clear" />
                    </td>
                </tr>
            </table>
        </form>

    </div>



</div>



<?php $this->load->view('footer'); ?>