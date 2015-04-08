
//input Max Length
$("input").attr("maxlength", 30);


//Show Date Picker
function showpicker(){
    
    $('.fdatepicker').fdatepicker();
    
}
//Show Date Picker
showpicker();




var config = {
	support : "image/jpg,image/png,image/bmp,image/jpeg,image/gif",		// Valid file formats
	form: "demoFiler",					// Form ID
	dragArea: "dragAndDropFiles",		// Upload Area ID
	uploadUrl: "upload.php"				// Server side upload url
}
$(document).ready(function(){
	initMultiUploader(config);
});


function userdeleteConfirm(id){
            
            var result = confirm("Want to delete?");
        if (result) {
         //Logic to delete the item
         
             window.location.assign(id);
         
        }
            
        }
        
function GetFormValues(FormID){
    
    
                var FormValues = {};
                var FormInput = $("#"+FormID).find('input');
                var FormSelect = $("#"+FormID).find('select');
                  var Formtextarea = $("#"+FormID).find('textarea');
                
                if(FormInput.length != 0){
                    
                    for(var i = 0; i < FormInput.length; i++){
                    
                        FormValues[FormInput[i].name] = FormInput[i].value;
                    
                    }
                }
                 if(Formtextarea.length != 0){
                    
                    for(var i = 0; i < Formtextarea.length; i++){
                    
                        FormValues[Formtextarea[i].name] = Formtextarea[i].value;
                    
                    }
                }
                
                if(FormSelect.length != 0){
                    
                    for(var i = 0; i < FormSelect.length; i++){
                    
                        FormValues[FormSelect[i].name] = $("#"+FormSelect[i].id+" option:selected" ).val();
                        
                    }
                }
                
            return FormValues;
}          