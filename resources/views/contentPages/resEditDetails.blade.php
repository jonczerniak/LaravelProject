@extends('layout.adminLayout')

@section('content')
    <h2>Residential Application Details</h2>
    <h4>Personal Information</h4>
    <table class="table">
        <form name="resDetailsEditTable" method="post" action="{{ route('post-edit-res-details') }}">
        <tr>
            <td>Application Number</td>
            <td>
                <input type="text"
                       class="form-control"
                       id="customerNumberInput"
                       name="customerNumberInput"
                       value="{{ $resApp['customerNumber'] }}">
            </td>
        </tr>
        <tr>
            <td>Applicant's First Name</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="firstNameInput"
                       id="firstNameInput"
                       value="{{ $resApp['firstName'] }}">
            </td>
        </tr>
        <tr>
            <td>Applicant's Last Name</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="lastNameInput"
                       id="lastNameInput"
                       value="{{ $resApp['lastName'] }}">
            </td>
        </tr>
        <tr>
            <td>Street Address</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="streetAddressInput"
                       id="streetAddressInput"
                       value="{{ $resApp['streetAddress'] }}">
            </td>
        </tr>
        <tr>
            <td>City</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="cityInput"
                       id="cityInput"
                       value="{{ $resApp['cityInput'] }}">
            </td>
        </tr>
        <tr>
            <td>State</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="stateInput"
                       id="stateInput"
                       value="{{ $resApp['stateInput'] }}">
            </td>
        </tr>
        <tr>
            <td>Zip Code</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="zipCodeInput"
                       id="zipCodeInput"
                       value="{{ $resApp['zipCode'] }}">
            </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="phoneInput"
                       id="phoneInput"
                       value="{{ $resApp['phoneNumber'] }}">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="emailInput"
                       id="emailInput"
                       value="{{ $resApp['email'] }}">
            </td>
        </tr>
    </table>
    <h4 class="mt-4">Vehicle Information</h4>
    <table class="table">
        <tr>
            <td>Has Electric Vehicle?
            </td>
            <td>
                Add a question in the form about having an electric vehicle
            </td>
        </tr>
        <tr>
            <td>Vehicle Manufacturer</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="manufacturerInput"
                       id="manufacturerInput"
                       value="{{ $resApp['carManufacturer'] }}">
            </td>
        </tr>
        <tr>
            <td>Vehicle Model</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="makeInput"
                       id="makeInput"
                       value="{{ $resApp['carModel'] }}">
            </td>
        </tr>
        <tr>
            <td>Vehicle Year</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="yearInput"
                       id="yearInput"
                       value="{{ $resApp['carYear'] }}">
            </td>
        </tr>
    </table>
    <h4 class="mt-4">Additional Information</h4>
    <table class="table">
        <tr>
            <td>Commute Regularly with EV?</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="evCommuteRegularlyInput"
                       id="evCommuteRegularlyInput"
                       value="{{ $resApp['evCommuteRegularly'] }}">
            </td>
        </tr>
        <tr>
            <td>Employer</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="employerNameInput"
                       id="employerNameInput"
                       value="{{ $resApp['employerName'] }}">
            </td>
        </tr>
        <tr>
            <td>Employer offer EV charging?</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="workplaceChargingInput"
                       id="workplaceChargingInput"
                       value="{{ $resApp['workplaceChargingAvail'] }}">
            </td>
        </tr>
        <tr>
            <td>Parks EV overnight at:</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="overnightParkingInput"
                       id="overnightParkingInput"
                       value=" {{ $resApp['evParkingOvernight'] }}">
            </td>
        </tr>
        <tr>
            <td>Has Wifi?</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="wifiConnectionInput"
                       id="wifiConnectionInput"
                       value="{{ $resApp['wifiConnection'] }}">
            </td>
        </tr>
        <tr>
            <td>Electric Panel Location:</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="homeElectricPanelLocationInput"
                       id="homeElectricPanelLocationInput"
                       value="{{ $resApp['electricPanelLocation'] }}">
            </td>
        </tr>
        <tr>
            <td>Desired Charger Location in relation to electric panel</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="chargerLocationInput"
                       id="chargerLocationInput"
                       value="{{ $resApp['chargerLocation'] }}">
            </td>
        </tr>
        <tr>
            <td>Wall and ceiling condition</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="wallCeilingDescriptionInput"
                       id="wallCeilingDescriptionInput"
                       value="{{ $resApp['wallCeilingDescription'] }}">
            </td>
        </tr>
        <tr>
            <td>Plans to move:</td>
            <td>
                <input type="text"
                       class="form-control"
                       name="plansToMoveInput"
                       id="plansToMoveInput"
                       value="{{ $resApp['plansToMove'] }}">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit"
                       class="form-control btn btn-primary"
                       value="Submit Updates">
            </td>
            <td>
                <a href="{{ route('get-res-admin-page') }}" class="btn btn-secondary">
                    Discard Updates
                </a>
            </td>
        </tr>
        <input type="hidden"
               id="hiddenIdInput"
               name="hiddenIdInput"
                value="{{ $resApp['id'] }}">
        {{csrf_field()}}
        </form>
    </table>
@endsection
