const tfElements = document.querySelectorAll("dectf");
const query = document.getElementById("decta");
var queryError = document.getElementById("error-ta");


var name = tfElements[0].innerHtml ;
var nameError = document.getElementById('error-name');
var email = tfElements[1].innerHtml ;
var phone = tfElements[2].innerHtml ;

var phoneError = document.getElementById('error-phone');

var emailError = document.getElementById("error-email");

function validate()
{

    if(name.value == "")
    {
        nameError.innerHTML = "**Please fill the Name Fields** ";
        nameError.style.color = "red";
        nameError.style.fontSize = "10px" ;
        nameError.style.wordSpacing = "3px";
        return false ;
    }
    else if(phone.value == "")
    {
        phoneError.style.color  = "red" ;
        phoneError.style.fontSize = "10px";
        phoneError.innerHTML = "**Please Fill The Phone Number in Above Field** ";
        phoneError.style.wordSpacing = "3px";
        return false ;
    }
    else if(email.value == "")
    {
        emailError.style.color  = "red" ;
        emailError.style.fontSize = "10px";
        emailError.innerHTML = "**Please Fill The Phone Number in Above Field** ";
        emailError.style.wordSpacing = "3px";
        return false ;
    }
    else if(query.value == "")
    {
        query.style.color = "red" ;
        queryError.style.fontSize = "10px";
        queryError.style.wordSpacing = "3px";
        queryError.innerHTML = "**Please Fill The Query In Above Field **"
        return false ;
    }
    else
    {
        nameError.innerHTML = "";
        return true ;
    }
}