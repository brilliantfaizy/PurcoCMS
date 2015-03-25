
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