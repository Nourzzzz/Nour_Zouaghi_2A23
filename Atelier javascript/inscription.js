/*function validerDateOfBirth () 
{
    var elementDate = document.getElementById("dateNaissance");
    var elementValue = new Date (elementDate.value);
    const dateAujourdhui = new Date();
    if(elementValue>=dateAujourdhui)
    {
        alert("DATE INVALIDE");
    }
    else
    {
        alert("date valide");
    }
}
*/

var formElement = document.getElementById("form") 
var nameElement = document.getElementById("nom");
var PrenomElement = document.getElementById("prenom");
var EmailElement = document.getElementById("email");

var TelElement = document.getElementById("telephone");
var DateElement = document.getElementById("dateNaissance");
var PSWElement = document.getElementById("motDePasse");



formElement.addEventListener("submit", function(event){
    event.preventDefault()
    validateName()
    validatePrenom()
    validateTel()
    validateDate()
    validatePSW()

}) 


function validateName(){
    var NameValue = nameElement.value ;
    var pattern = /^[a-z A-Z]+$/
    var nameError = document.getElementById("NameError")
    if(!NameValue.match(pattern)){
          nameError.innerHTML=
    "<span style='color :red' > Nom ne doit contenir que des lettres et doit avoir au moins 1 caractere </span>"
    }else {
        nameError.innerHTML= "<span style='color :green'>Correct</span>"
    }
}

function validatePrenom()
{
    var PrenomValue = PrenomElement.value ;
    var pattern = /[a-zA-Z]+/; // Cette expression régulière exige au moins une lettre majuscule ou minuscule.
    var PrenomError = document.getElementById("PrenomError")
    if(!PrenomValue .match(pattern)){
        PrenomError.innerHTML=
    "<span style='color :red' > Prenom doit contenir au moins 1 caractere </span>"
    }else {
        PrenomError.innerHTML= "<span style='color :green'>Correct</span>"
    }


}




function validateTel()
{
    var TelValue = TelElement .value ;
    var pattern = /^[0-9]{8}$/;
    var TelError = document.getElementById("TelError")
    if(!TelValue .match(pattern)){
        TelError.innerHTML=
    "<span style='color :red' > Numero doit etre composee de 8 chiffres</span>"
    }else {
        TelError.innerHTML= "<span style='color :green'>Correct</span>"
    }


}


function  validateDate()
{
    var DateValue = new Date ( DateElement.value);
    const dateAujourdhui = new Date();
    var DateError = document.getElementById("DateError")
    if(DateValue>=dateAujourdhui){
        DateError.innerHTML=
    "<span style='color :red' > La date de naissance doit etre anterieure a celle d'aujourd'hui</span>"
    }else {
        DateError.innerHTML= "<span style='color :green'>Correct</span>"
    }


}

function  validatePSW()
{
    var PSWValue = PSWElement.value ;
    var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    var  PSWError= document.getElementById("PSWError")
    if(!PSWValue .match(pattern)){
        PSWError.innerHTML=
    "<span style='color :red' > Le mot de passe doit contenir au moins 8 caracteres, incluant au moins un chiffre, une lettre minuscule et une lettre majuscule.</span>"
    }else {
        PSWError.innerHTML= "<span style='color :green'>Correct</span>"
    }


}

formElement.addEventListener("keyup", function(event){
    event.preventDefault()
    validateEmail()
 

}) 

function validateEmail()
{
    var EmailValue = EmailElement.value ;
    var pattern = /^[^\s@]+@esprit\.tn$/;
    var EmailError = document.getElementById("EmailError")
    if(!EmailValue .match(pattern)){
        EmailError .innerHTML=
    "<span style='color :red' > verifier si le email est valide et contient @esprit.tn</span>"
    }else {
        EmailError .innerHTML= "<span style='color :green'>Correct</span>"
    }


}


