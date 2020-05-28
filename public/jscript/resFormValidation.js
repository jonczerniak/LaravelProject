function resFormValidation(){
    var firstName = document.forms["resForm"]["firstNameInput"];
    var lastName = document.forms["resForm"]["lastNameInput"];
    var streeAddress = document.forms["resForm"]["streetAddressInput"];
    var city = document.forms["resForm"]["cityInput"];
    var stateInput = document.forms["resForm"]["stateInput"];
    var zipCode = document.forms["resForm"]["zipCodeInput"];
    var phone = document.forms["resForm"]["phoneInput"];
    var email = document.forms["resForm"]["emailInput"];
    var carYear = document.forms["resForm"]["yearInput"];
    var carManufacturer = document.forms["resForm"]["manufacturerInput"];
    var wifiConnection = document.forms["resForm"]["wifiConnectionInput"];
    var electricPanelLocation = document.forms["resForm"]["homeElectricPanelLocationInput"];
    var chargerLocation = document.forms["resForm"]["chargerLocationInput"];
    var plansToMove = document.forms["resForm"]["plansToMoveInput"];

    if(firstName.value == ""){
        window.alert("Please enter a first name");
        firstName.focus();
        return false;
    }

    if(lastName.value == ""){
        window.alert("Please enter a last name");
        lastName.focus();
        return false;
    }

    if(streeAddress.value == ""){
        window.alert("Please enter a street address");
        streeAddress.focus();
        return false;
    }

    if(city.value == ""){
        window.alert("Please enter a city");
        city.focus();
        return false;
    }

    if(stateInput.value == ""){
        window.alert("Please enter a state");
        stateInput.focus();
        return false;
    }

    if(zipCode.value == "" || zipCode.value.length < 5){
        window.alert("Please enter a 5 digit zip code");
        zipCode.focus();
        return false;
    }

    if(phone.value == ""){
        window.alert("Please enter a phone number");
        phone.focus();
        return false;
    }

    if(email.value == ""){
        window.alert("Please enter a email");
        email.focus();
        return false;
    }

    if(carYear.value == ""){
        window.alert("Please enter a car year");
        carYear.focus();
        return false;
    }

    if(carManufacturer.value == ""){
        window.alert("Please enter a car manufacturer");
        carManufacturer.focus();
        return false;
    }

    if(wifiConnection.value == ""){
        window.alert("Please enter whether or not you have a wifi connection");
        wifiConnection.focus();
        return false;
    }

    if(electricPanelLocation.value == ""){
        window.alert("Please describe the location of your electric panel");
        electricPanelLocation.focus();
        return false;
    }

    if(chargerLocation.value == ""){
        window.alert("Where would you like the charger to be located in relation to the electric panel?");
        chargerLocation.focus();
        return false;
    }

    if(plansToMove.value == ""){
        window.alert("Are you planning to move in the next three years?");
        plansToMove.focus();
        return false;
    }

}

//checking to see if the user clicks the modal checkboxes
var readCheck = document.getElementById("readAgreementInput");
var readLabel = document.getElementById("termsRead");
var modal = document.getElementById("staticBackdrop");

function checkAgreement() {
    if (readAgreementInput.checked && acceptAgreementInput.checked) {
        //enable the disabled submit button
        var elSubmit = document.getElementById("submitResForm");
        elSubmit.disabled = false;
        elSubmit.className = "btn btn-primary";
        document
            .getElementById("agreementSubmit")
            .setAttribute("data-dismiss", "modal");
    }
    //else alert user that they need to select both text boxes
    else {
        window.alert(
            "Please be sure to select that you have both read and agreed to the user agreement."
        );
    }
}




