
function validationForm(){
    var x=document.forms["signup_form"]["firstname"].value;
    var y=document.forms["signup_form"]["lastname"].value;
    if(x.length>25){
        document.getElementByid('')
        return false;
    }
    if(y.length>25){
        alert("Name should be less than 25")
        return false;
    }
    var fname = x.match(/\d+/g);
    if (fname != null) {
    alert('Name should not have number');
   }
   var lname = y.match(/\d+/g);
    if (lname != null) {
    alert('Name should not have number');
   }
}

$(document).ready(function(){
    // alert("hi");
    // console.log("hi");

    $(".ad_listing_form").submit(function(e){ 
        e.preventDefault();        
        // document.getElementById("listAd").disabled = true;
        // $(".tip_money_button").addClass('disabled');
        var formData = new FormData(this);  
        // alert(formData);
        /*document.getElementById("fpError").innerHTML="Sending mail";*/
        // alert("here");
        $.ajax
        ({
            type: 'POST',
            url: 'advertise_system.php',
            data:formData,
            //dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,                
            success: function (response) 
            {
                // alert("ikde ala re!");
                // alert(response);   
                
                if(response.trim()=='extension error 1')
                {
                    document.getElementById("error").innerHTML="Wrong extension of the first file uploaded";
                }
                else if(response.trim()=='extension error 2')
                {
                    document.getElementById("error").innerHTML="Wrong extension of the second file uploaded";
                }
                else if(response.trim()=='extension error 3')
                {
                    document.getElementById("error").innerHTML="Wrong extension of the third file uploaded";
                }
                else
                {
                    window.location.href="adlisting.php?ad_Id="+response.trim();
                }
                // $(".tip_money_button").removeClass('disabled');
                // window.location.href=response;
                                
            },                
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }              
        });
        
        return false;
    })
});