function dT(){
    var d = new Date();
    alert('Today is ' + d);
    console.log('CLick on' + d);
}

function validateForm() {
    var name = document.forms["welcomeForm"]["name"].value;
    var email = document.forms["welcomeForm"]["email"].value;
    if (name == "" || email == "") {
        alert("Required input cannot be empty");
        return false;
    }
}