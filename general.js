
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