function commFormValidation(){
    //variables
    var businessName = document.forms["commForm"]["businessNameInput"];
    var facilityAddress = document.forms["commForm"]["facilityAddressInput"];
    var facilityCity = document.forms["commForm"]["facilityCityInput"];
    var facilityState = document.forms["commForm"]["facilityStateInput"];
    var facilityZip = document.forms["commForm"]["facilityZipInput"];
    var pointOfContact = document.forms["commForm"]["pointOfContactInput"];
    var contactTitle = document.forms["commForm"]["contactTitleInput"];
    var email = document.forms["commForm"]["emailInput"];
    var phone = document.forms["commForm"]["phoneInput"];
    var avistaCustomer = document.forms["commForm"]["avistatCustomerInput"];
    var numberOfEmployees = document.forms["commForm"]["numberOfEmployeesInput"];
    var commutingEmployees = document.forms["commForm"]["commutingjEmployeesInput"];
    var numberOfFacilityPorts = document.forms["commForm"]["numberOfFacilityPortsInput"];
    var facilityWifi = document.forms["commForm"]["facilityWifiInput"];

    if(businessName.value == ""){
        window.alert("Please enter a name for the business");
        businessName.focus()
        return false
    }

    if(facilityAddress.value == ""){
        window.alert("Please enter the address of the facility");
        facilityAddress.focus();
        return false
    }

    if(facilityCity.value == ""){
        window.alert("Please enter the city of the facility");
        facilityCity.focus();
        return false
    }

    if(facilityState.value == ""){
        window.alert("Please enter the state of the facility");
        facilityState.focus();
        return false
    }

    if(facilityZip.value == ""){
        window.alert("Please enter the zip code of the facility");
        facilityZip.focus();
        return false
    }

    if(pointOfContact.value == ""){
        window.alert("Please enter the point of contact");
        pointOfContact.focus();
        return false
    }

    if(contactTitle.value == ""){
        window.alert("Please enter the position of the point of contact (i.e. manager, engineer, ect.)");
        contactTitle.focus();
        return false
    }

    if(email.value == ""){
        window.alert("Please enter an email for the point of contact");
        email.focus();
        return false
    }

    if(phone.value == ""){
        window.alert("Please enter the phone number of the point of contact");
        phone.focus();
        return false
    }

    if(avistaCustomer.value == ""){
        window.alert("Please enter whether of not you're an existing Avista Customer");
        avistaCustomer.focus();
        return false
    }

    if(numberOfEmployees.value == ""){
        window.alert("Please enter the number of employees at facility");
        numberOfEmployees.focus();
        return false
    }

    if(commutingEmployees.value == ""){
        window.alert("Please enter the number of employees that currently use EVs to commute to work");
        commutingEmployees.focus();
        return false
    }

    if(numberOfFacilityPorts.value == ""){
        window.alert("Please enter the number of EV charging ports currently at the facility");
        numberOfFacilityPorts.focus();
        return false
    }

    if(facilityWifi.value == ""){
        window.alert("Please enter whether the facility has Wifi available");
        facilityWifi.focus();
        return false
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
